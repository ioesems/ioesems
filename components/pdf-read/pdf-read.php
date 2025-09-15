<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>PDF Reader</title>
  <style>
    body {
      font-family: Arial, sans-serif;
      margin: 0;
      background-color: #f4f4f9;
      color: #333;
    }

    #toolbar {
      background: #333;
      color: #fff;
      padding: 10px;
      display: flex;
      justify-content: space-between;
      align-items: center;
    }

    #toolbar button {
      background: #4CAF50;
      border: none;
      color: white;
      padding: 10px 15px;
      text-align: center;
      text-decoration: none;
      display: inline-block;
      font-size: 14px;
      margin: 2px;
      cursor: pointer;
      border-radius: 4px;
    }

    #toolbar input {
      padding: 8px;
      border-radius: 4px;
      border: 1px solid #ccc;
    }

    #pdf-container {
      position: relative;
      width: 100%;
      height: 90vh;
      overflow: hidden;
      display: flex;
      justify-content: center;
      align-items: center;
      background: #fff;
    }

    #canvas {
      border: 1px solid #ddd;
      box-shadow: 0 2px 8px rgba(0, 0, 0, 0.1);
    }

    .hidden {
      display: none;
    }
  </style>
</head>
<body>
  <div id="toolbar">
    <div>
      <button id="prev">Previous</button>
      <button id="next">Next</button>
      <span>Page: <span id="page-num">1</span> / <span id="page-count">0</span></span>
    </div>
    <div>
      <button id="zoom-in">Zoom In</button>
      <button id="zoom-out">Zoom Out</button>
      <input type="text" id="search" placeholder="Search...">
    </div>
  </div>
  <div id="pdf-container">
    <canvas id="canvas"></canvas>
  </div>

  <script src="https://mozilla.github.io/pdf.js/build/pdf.js"></script>
  <script>
    const url = 'https://drive.google.com/file/d/10zgBID1PIVexR2JohehztlUYxZizCgDu/view'; // Replace with the book link

    let pdfDoc = null,
      pageNum = 1,
      pageRendering = false,
      pageNumPending = null,
      scale = 1.5,
      canvas = document.getElementById('canvas'),
      ctx = canvas.getContext('2d');

    async function renderPage(num) {
      pageRendering = true;
      const page = await pdfDoc.getPage(num);

      const viewport = page.getViewport({ scale });
      canvas.height = viewport.height;
      canvas.width = viewport.width;

      const renderContext = {
        canvasContext: ctx,
        viewport,
      };

      const renderTask = page.render(renderContext);

      renderTask.promise.then(() => {
        pageRendering = false;
        if (pageNumPending !== null) {
          renderPage(pageNumPending);
          pageNumPending = null;
        }
      });

      document.getElementById('page-num').textContent = num;
    }

    async function queueRenderPage(num) {
      if (pageRendering) {
        pageNumPending = num;
      } else {
        await renderPage(num);
      }
    }

    function onPrevPage() {
      if (pageNum <= 1) return;
      pageNum--;
      queueRenderPage(pageNum);
    }

    function onNextPage() {
      if (pageNum >= pdfDoc.numPages) return;
      pageNum++;
      queueRenderPage(pageNum);
    }

    function zoomIn() {
      scale += 0.1;
      queueRenderPage(pageNum);
    }

    function zoomOut() {
      if (scale <= 0.5) return;
      scale -= 0.1;
      queueRenderPage(pageNum);
    }

    document.getElementById('prev').addEventListener('click', onPrevPage);
    document.getElementById('next').addEventListener('click', onNextPage);
    document.getElementById('zoom-in').addEventListener('click', zoomIn);
    document.getElementById('zoom-out').addEventListener('click', zoomOut);

    pdfjsLib.getDocument(url).promise.then((pdf) => {
      pdfDoc = pdf;
      document.getElementById('page-count').textContent = pdf.numPages;
      renderPage(pageNum);
    });
  </script>
</body>
</html>
