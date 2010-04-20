CREATE TABLE category (id BIGINT AUTO_INCREMENT, name VARCHAR(50) NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8 COLLATE utf8_unicode_ci ENGINE = MyISAM;
CREATE TABLE download (id BIGINT AUTO_INCREMENT, description VARCHAR(100), type VARCHAR(10) NOT NULL, path VARCHAR(50) NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8 COLLATE utf8_unicode_ci ENGINE = MyISAM;
CREATE TABLE gallery (id BIGINT AUTO_INCREMENT, title VARCHAR(100) NOT NULL, slug VARCHAR(100) NOT NULL UNIQUE, description TEXT, created_at DATETIME NOT NULL, updated_at DATETIME NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8 COLLATE utf8_unicode_ci ENGINE = MyISAM;
CREATE TABLE guestbook (id BIGINT AUTO_INCREMENT, name VARCHAR(150) NOT NULL, email VARCHAR(100) NOT NULL, city VARCHAR(100) NOT NULL, state VARCHAR(2) NOT NULL, country VARCHAR(50) NOT NULL, comment TEXT NOT NULL, approved TINYINT(1) DEFAULT '0', created_at DATETIME NOT NULL, updated_at DATETIME NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8 COLLATE utf8_unicode_ci ENGINE = MyISAM;
CREATE TABLE link (id BIGINT AUTO_INCREMENT, name VARCHAR(100) NOT NULL, url VARCHAR(50) NOT NULL, description TEXT NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8 COLLATE utf8_unicode_ci ENGINE = MyISAM;
CREATE TABLE news (id BIGINT AUTO_INCREMENT, title VARCHAR(100) NOT NULL, slug VARCHAR(100) NOT NULL UNIQUE, content TEXT NOT NULL, picture VARCHAR(50), source VARCHAR(100), created_at DATETIME NOT NULL, updated_at DATETIME NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8 COLLATE utf8_unicode_ci ENGINE = MyISAM;
CREATE TABLE page (id BIGINT AUTO_INCREMENT, category_id BIGINT NOT NULL, title VARCHAR(100) NOT NULL, slug VARCHAR(100) NOT NULL UNIQUE, content TEXT NOT NULL, created_at DATETIME NOT NULL, updated_at DATETIME NOT NULL, INDEX category_id_idx (category_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8 COLLATE utf8_unicode_ci ENGINE = MyISAM;
CREATE TABLE partner (id BIGINT AUTO_INCREMENT, name VARCHAR(100) NOT NULL, url VARCHAR(50) NOT NULL, path VARCHAR(50) NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8 COLLATE utf8_unicode_ci ENGINE = MyISAM;
CREATE TABLE photo (id BIGINT AUTO_INCREMENT, gallery_id BIGINT NOT NULL, description VARCHAR(100), path VARCHAR(100) NOT NULL, INDEX gallery_id_idx (gallery_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8 COLLATE utf8_unicode_ci ENGINE = MyISAM;
CREATE TABLE professional (id BIGINT AUTO_INCREMENT, name VARCHAR(150) NOT NULL, speciality VARCHAR(150) NOT NULL, address VARCHAR(200) NOT NULL, email VARCHAR(50) NOT NULL, created_at DATETIME NOT NULL, updated_at DATETIME NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8 COLLATE utf8_unicode_ci ENGINE = MyISAM;
CREATE TABLE user (id BIGINT AUTO_INCREMENT, name VARCHAR(100) NOT NULL, username VARCHAR(50) NOT NULL UNIQUE, email VARCHAR(100) NOT NULL, password VARCHAR(40) NOT NULL, level VARCHAR(255) NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8 COLLATE utf8_unicode_ci ENGINE = MyISAM;
ALTER TABLE page ADD CONSTRAINT page_category_id_category_id FOREIGN KEY (category_id) REFERENCES category(id) ON DELETE CASCADE;
ALTER TABLE photo ADD CONSTRAINT photo_gallery_id_gallery_id FOREIGN KEY (gallery_id) REFERENCES gallery(id) ON DELETE CASCADE;
