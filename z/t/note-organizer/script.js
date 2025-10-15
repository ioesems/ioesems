// DOM Elements
const tabBar = document.getElementById('tab-bar');
const tabContent = document.getElementById('tab-content');
const newNoteBtn = document.getElementById('new-note-btn');
const newBrowserBtn = document.getElementById('new-browser-btn');
const createNoteBtn = document.getElementById('create-note-btn');
const browseWebBtn = document.getElementById('browse-web-btn');
const searchInput = document.getElementById('search-input');
const foldersList = document.getElementById('folders-list');
const tagsContainer = document.getElementById('tags-container');
const recentNotesList = document.getElementById('recent-notes-list');

// Modals
const newFolderModal = document.getElementById('new-folder-modal');
const embedModal = document.getElementById('embed-modal');
const folderNameInput = document.getElementById('folder-name');
const createFolderBtn = document.getElementById('create-folder-btn');
const cancelFolderBtn = document.getElementById('cancel-folder-btn');
const embedTypeSelect = document.getElementById('embed-type');
const embedUrlInput = document.getElementById('embed-url');
const embedBtn = document.getElementById('embed-btn');
const cancelEmbedBtn = document.getElementById('cancel-embed-btn');

// State
let tabs = [{ id: 'welcome', type: 'welcome', title: 'Welcome' }];
let activeTab = 'welcome';
let folders = [];
let tags = [];
let recentNotes = [];

// Initialize the application
document.addEventListener('DOMContentLoaded', () => {
    loadFolders();
    loadTags();
    loadRecentNotes();
    setupEventListeners();
});

// Set up event listeners
function setupEventListeners() {
    // Tab management
    newNoteBtn.addEventListener('click', () => createNewTab('note', 'Untitled Note'));
    newBrowserBtn.addEventListener('click', () => createNewTab('browser', 'New Browser'));
    createNoteBtn.addEventListener('click', () => createNewTab('note', 'Untitled Note'));
    browseWebBtn.addEventListener('click', () => createNewTab('browser', 'New Browser'));
    
    // Folder management
    newFolderBtn.addEventListener('click', () => newFolderModal.style.display = 'flex');
    createFolderBtn.addEventListener('click', createFolder);
    cancelFolderBtn.addEventListener('click', () => newFolderModal.style.display = 'none');
    
    // Embed modal
    embedBtn.addEventListener('click', embedContent);
    cancelEmbedBtn.addEventListener('click', () => embedModal.style.display = 'none');
    
    // Search
    searchInput.addEventListener('input', debounce(searchNotes, 300));
    
    // Toolbar actions
    document.addEventListener('click', (e) => {
        if (e.target.closest('.toolbar-btn')) {
            const action = e.target.closest('.toolbar-btn').dataset.action;
            handleToolbarAction(action);
        }
        
        // View note button
        if (e.target.closest('.btn-view')) {
            const tabId = e.target.closest('.tab-pane').id.replace('-content', '');
            viewNote(tabId);
        }
    });
    
    // Recent notes
    document.addEventListener('click', (e) => {
        if (e.target.closest('#recent-notes-list li')) {
            const noteId = e.target.closest('li').dataset.noteId;
            openNoteInTab(noteId);
        }
    });
}

// Tab Management
function createNewTab(type, title) {
    const tabId = `tab-${Date.now()}`;
    const tab = { id: tabId, type, title };
    tabs.push(tab);
    activeTab = tabId;
    
    // Create tab element
    const tabElement = document.createElement('div');
    tabElement.className = 'tab';
    tabElement.dataset.tab = tabId;
    tabElement.innerHTML = `
        <span>${title}</span>
        <i class="fas fa-times close-tab"></i>
    `;
    tabElement.querySelector('.close-tab').addEventListener('click', (e) => {
        e.stopPropagation();
        closeTab(tabId);
    });
    tabElement.addEventListener('click', () => switchTab(tabId));
    tabBar.appendChild(tabElement);
    
    // Create tab content
    let content;
    if (type === 'note') {
        content = document.getElementById('note-template').cloneNode(true);
        content.id = `${tabId}-content`;
        content.style.display = 'block';
        
        // Add save functionality
        const saveBtn = content.querySelector('.btn-save');
        saveBtn.addEventListener('click', () => saveNote(tabId, content));
        
        // Add embed button functionality
        const embedBtn = content.querySelector('[data-action="embed"]');
        embedBtn.addEventListener('click', () => {
            embedModal.style.display = 'flex';
            // Store current tab for embedding
            embedModal.dataset.tabId = tabId;
        });
    } else if (type === 'browser') {
        content = document.getElementById('browser-template').cloneNode(true);
        content.id = `${tabId}-content`;
        content.style.display = 'block';
        
        // Browser functionality
        const goBtn = content.querySelector('.btn-go');
        const backBtn = content.querySelector('.btn-back');
        const forwardBtn = content.querySelector('.btn-forward');
        const refreshBtn = content.querySelector('.btn-refresh');
        const homeBtn = content.querySelector('.btn-home');
        const urlInput = content.querySelector('.browser-url');
        const iframe = content.querySelector('.browser-frame');
        
        goBtn.addEventListener('click', () => {
            const url = urlInput.value.trim();
            if (url) {
                const finalUrl = isValidUrl(url) ? url : `https://www.google.com/search?q=${encodeURIComponent(url)}`;
                iframe.src = finalUrl;
                updateTabTitle(tabId, finalUrl);
            }
        });
        
        urlInput.addEventListener('keypress', (e) => {
            if (e.key === 'Enter') {
                goBtn.click();
            }
        });
        
        backBtn.addEventListener('click', () => {
            try {
                iframe.contentWindow.history.back();
            } catch (e) {
                console.log('Cannot navigate back');
            }
        });
        
        forwardBtn.addEventListener('click', () => {
            try {
                iframe.contentWindow.history.forward();
            } catch (e) {
                console.log('Cannot navigate forward');
            }
        });
        
        refreshBtn.addEventListener('click', () => {
            iframe.contentWindow.location.reload();
        });
        
        homeBtn.addEventListener('click', () => {
            iframe.src = 'about:blank';
            urlInput.value = '';
            updateTabTitle(tabId, 'New Browser');
        });
        
        // Update URL when iframe location changes
        iframe.addEventListener('load', () => {
            try {
                urlInput.value = iframe.contentWindow.location.href;
            } catch (e) {
                // Cross-origin, can't access URL
                urlInput.value = 'Restricted URL';
            }
        });
    }
    
    tabContent.appendChild(content);
    switchTab(tabId);
}

function switchTab(tabId) {
    // Update active tab in state
    activeTab = tabId;
    
    // Update UI
    document.querySelectorAll('.tab').forEach(tab => {
        tab.classList.toggle('active', tab.dataset.tab === tabId);
    });
    
    document.querySelectorAll('.tab-pane').forEach(pane => {
        pane.classList.toggle('active', pane.id === `${tabId}-content` || (tabId === 'welcome' && pane.id === 'welcome-tab'));
    });
}

function closeTab(tabId) {
    if (tabId === 'welcome') return;
    
    // Remove from state
    tabs = tabs.filter(tab => tab.id !== tabId);
    
    // Remove from DOM
    document.querySelector(`.tab[data-tab="${tabId}"]`).remove();
    document.getElementById(`${tabId}-content`).remove();
    
    // Switch to another tab if closing active tab
    if (activeTab === tabId) {
        const remainingTab = tabs.length > 0 ? tabs[tabs.length - 1].id : 'welcome';
        switchTab(remainingTab);
    }
}

function updateTabTitle(tabId, title) {
    document.querySelector(`.tab[data-tab="${tabId}"] span`).textContent = title;
}

// Folder Management
function loadFolders() {
    // In a real app, this would fetch from API
    // For demo, we'll use mock data
    folders = [
        { id: 1, name: 'General', parent_id: null },
        { id: 2, name: 'Work', parent_id: null },
        { id: 3, name: 'Personal', parent_id: null },
        { id: 4, name: 'Projects', parent_id: null }
    ];
    
    renderFolders();
}

function renderFolders() {
    foldersList.innerHTML = '';
    folders.forEach(folder => {
        const li = document.createElement('li');
        li.innerHTML = `
            <i class="fas fa-folder"></i>
            <span>${folder.name}</span>
        `;
        li.addEventListener('click', () => {
            // In a real app, this would filter notes by folder
            console.log(`Selected folder: ${folder.name}`);
        });
        foldersList.appendChild(li);
    });
}

function createFolder() {
    const name = folderNameInput.value.trim();
    if (!name) {
        alert('Please enter a folder name');
        return;
    }
    
    // In a real app, this would send to API
    const newFolder = {
        id: folders.length + 1,
        name: name,
        parent_id: null
    };
    
    folders.push(newFolder);
    renderFolders();
    
    // Reset and close modal
    folderNameInput.value = '';
    newFolderModal.style.display = 'none';
}

// Tag Management
function loadTags() {
    // In a real app, this would fetch from API
    tags = ['Important', 'Idea', 'Reference', 'To-Do', 'Meeting'];
    renderTags();
}

function renderTags() {
    tagsContainer.innerHTML = '';
    tags.forEach(tag => {
        const tagEl = document.createElement('div');
        tagEl.className = 'tag';
        tagEl.textContent = tag;
        tagEl.addEventListener('click', () => {
            // In a real app, this would filter notes by tag
            searchInput.value = `#${tag}`;
            searchNotes();
        });
        tagsContainer.appendChild(tagEl);
    });
}

// Recent Notes
function loadRecentNotes() {
    // In a real app, this would fetch from API
    recentNotes = [
        { id: 1, title: 'Project Plan', date: '2023-06-15' },
        { id: 2, title: 'Meeting Notes', date: '2023-06-14' },
        { id: 3, title: 'Shopping List', date: '2023-06-12' },
        { id: 4, title: 'Book Ideas', date: '2023-06-10' }
    ];
    
    renderRecentNotes();
}

function renderRecentNotes() {
    recentNotesList.innerHTML = '';
    recentNotes.forEach(note => {
        const li = document.createElement('li');
        li.dataset.noteId = note.id;
        li.innerHTML = `
            <i class="fas fa-sticky-note"></i>
            <span>${note.title}</span>
            <span class="note-date">${formatDate(note.date)}</span>
        `;
        recentNotesList.appendChild(li);
    });
}

function formatDate(dateString) {
    const options = { year: 'numeric', month: 'short', day: 'numeric' };
    return new Date(dateString).toLocaleDateString(undefined, options);
}

// Search Functionality
function searchNotes() {
    const query = searchInput.value.trim().toLowerCase();
    if (!query) {
        // Show all notes
        return;
    }
    
    // In a real app, this would call the search API
    console.log(`Searching for: ${query}`);
    // Would filter notes based on title, content, tags, category
}

// Debounce function for search
function debounce(func, wait) {
    let timeout;
    return function executedFunction(...args) {
        const later = () => {
            clearTimeout(timeout);
            func(...args);
        };
        clearTimeout(timeout);
        timeout = setTimeout(later, wait);
    };
}

// Note Saving and Viewing
function saveNote(tabId, content) {
    const title = content.querySelector('.note-title').value || 'Untitled Note';
    const category = content.querySelector('.note-category').value;
    const tags = content.querySelector('.note-tags').value;
    const noteContent = content.querySelector('.editor').innerHTML;
    
    // Update tab title
    updateTabTitle(tabId, title);
    
    // In a real app, this would send to API
    console.log('Saving note:', { title, category, tags, content: noteContent });
    
    // Simulate saving to database and getting an ID
    const noteId = Math.floor(Math.random() * 1000) + 1;
    
    // Update recent notes
    recentNotes.unshift({ id: noteId, title, date: new Date().toISOString().split('T')[0] });
    if (recentNotes.length > 4) recentNotes.pop();
    renderRecentNotes();
    
    alert('Note saved successfully!');
}

function viewNote(tabId) {
    // Get note data from current tab
    const content = document.getElementById(`${tabId}-content`);
    const title = content.querySelector('.note-title').value || 'Untitled Note';
    const noteContent = content.querySelector('.editor').innerHTML;
    
    // Open in new tab as view-only
    const viewTabId = `view-${Date.now()}`;
    const viewTab = { id: viewTabId, type: 'note-view', title: `View: ${title}` };
    tabs.push(viewTab);
    
    // Create tab element
    const tabElement = document.createElement('div');
    tabElement.className = 'tab';
    tabElement.dataset.tab = viewTabId;
    tabElement.innerHTML = `
        <span>View: ${title}</span>
        <i class="fas fa-times close-tab"></i>
    `;
    tabElement.querySelector('.close-tab').addEventListener('click', (e) => {
        e.stopPropagation();
        closeTab(viewTabId);
    });
    tabElement.addEventListener('click', () => switchTab(viewTabId));
    tabBar.appendChild(tabElement);
    
    // Create view content
    const viewContent = document.createElement('div');
    viewContent.className = 'tab-pane note-view';
    viewContent.id = `${viewTabId}-content`;
    viewContent.innerHTML = `
        <div class="note-view-header">
            <h1>${title}</h1>
            <div class="note-view-meta">
                <span>Category: ${content.querySelector('.note-category').value || 'None'}</span>
                <span>Tags: ${content.querySelector('.note-tags').value || 'None'}</span>
            </div>
        </div>
        <div class="note-view-content">
            ${noteContent}
        </div>
    `;
    
    tabContent.appendChild(viewContent);
    switchTab(viewTabId);
}

function openNoteInTab(noteId) {
    // In a real app, this would fetch note data from API
    const note = recentNotes.find(n => n.id == noteId);
    if (note) {
        createNewTab('note', note.title);
        // Would populate the editor with note content
    }
}

// Toolbar Actions
function handleToolbarAction(action) {
    const editor = document.querySelector('.editor:focus') || 
                   document.querySelector('.active .editor');
    
    if (!editor) return;
    
    switch(action) {
        case 'bold':
            document.execCommand('bold', false, null);
            break;
        case 'italic':
            document.execCommand('italic', false, null);
            break;
        case 'underline':
            document.execCommand('underline', false, null);
            break;
        case 'link':
            const url = prompt('Enter URL:');
            if (url) {
                document.execCommand('createLink', false, url);
            }
            break;
        case 'embed':
            embedModal.style.display = 'flex';
            break;
        case 'image':
            const imgUrl = prompt('Enter image URL:');
            if (imgUrl) {
                document.execCommand('insertImage', false, imgUrl);
            }
            break;
        case 'list':
            document.execCommand('insertUnorderedList', false, null);
            break;
        case 'code':
            const code = prompt('Enter code:');
            if (code) {
                const codeBlock = `<pre><code>${code}</code></pre>`;
                document.execCommand('insertHTML', false, codeBlock);
            }
            break;
    }
    
    editor.focus();
}

// Embed Content
function embedContent() {
    const type = embedTypeSelect.value;
    const url = embedUrlInput.value.trim();
    
    if (!url) {
        alert('Please enter a URL');
        return;
    }
    
    let embedCode = '';
    
    switch(type) {
        case 'website':
            embedCode = `<iframe src="${url}" width="100%" height="400" frameborder="0" sandbox="allow-same-origin allow-scripts allow-forms"></iframe>`;
            break;
        case 'youtube':
            // Extract video ID from YouTube URL
            const videoId = extractYouTubeId(url);
            if (videoId) {
                embedCode = `<div class="embed-container"><iframe width="100%" height="400" src="https://www.youtube.com/embed/${videoId}" frameborder="0" allowfullscreen></iframe></div>`;
            } else {
                alert('Invalid YouTube URL');
                return;
            }
            break;
        case 'pdf':
            embedCode = `<div class="embed-container"><iframe src="${url}" width="100%" height="500" type="application/pdf"></iframe></div>`;
            break;
        case 'video':
            embedCode = `<div class="embed-container"><video width="100%" height="400" controls><source src="${url}" type="video/mp4">Your browser does not support the video tag.</video></div>`;
            break;
        case 'image':
            embedCode = `<img src="${url}" alt="Embedded image" style="max-width: 100%; height: auto;">`;
            break;
    }
    
    // Insert into active note editor
    const tabId = embedModal.dataset.tabId;
    const editor = document.getElementById(`${tabId}-content`).querySelector('.editor');
    editor.focus();
    document.execCommand('insertHTML', false, embedCode);
    
    // Reset and close modal
    embedUrlInput.value = '';
    embedModal.style.display = 'none';
}

// Helper Functions
function extractYouTubeId(url) {
    const regExp = /^.*(youtu.be\/|v\/|u\/\w\/|embed\/|watch\?v=|&v=)([^#&?]*).*/;
    const match = url.match(regExp);
    return (match && match[2].length === 11) ? match[2] : null;
}

function isValidUrl(string) {
    try {
        new URL(string);
        return true;
    } catch (_) {
        return false;
    }
}