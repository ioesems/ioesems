DROP TABLE IF EXISTS bookmarks;

CREATE TABLE `bookmarks` (
    `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
    `material_id` int(10) UNSIGNED NOT NULL,
    `page_number` int(11) NOT NULL COMMENT 'PDF page number (1-indexed)',
    `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL COMMENT 'Bookmark title shown to user',
    `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
    `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
    PRIMARY KEY (`id`),
    KEY `idx_material_id` (`material_id`),
    KEY `idx_page_number` (`page_number`),
    CONSTRAINT `fk_bookmarks_material` FOREIGN KEY (`material_id`) REFERENCES `materials` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;