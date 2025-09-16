CREATE DATABASE IF NOT EXISTS ioesems;
USE ioesems;

CREATE TABLE IF NOT EXISTS materials (
  id INT UNSIGNED NOT NULL AUTO_INCREMENT,
  semester INT NOT NULL,
  subject VARCHAR(255) NOT NULL,
  material_file VARCHAR(500) NOT NULL,
  material_title VARCHAR(100) NOT NULL,
  description TEXT,
  date_of_modification TIMESTAMP NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (id)
);



-- then applied

ALTER TABLE materials 
ADD COLUMN external_link TEXT NULL 
COMMENT 'External link for Google Drive, webpage, or other online resources';