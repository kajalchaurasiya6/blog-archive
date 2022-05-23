USE blog_project;

CREATE TABLE IF NOT EXISTS users(
    user_id INT AUTO_INCREMENT PRIMARY KEY,
    user_name VARCHAR(50) NOT NULL,
    user_pp TEXT,
    user_email VARCHAR(100) UNIQUE NOT NULL,
    password TEXT NOT NULL,
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP
)ENGINE=INNODB;

CREATE TABLE IF NOT EXISTS posts(
    post_id INT AUTO_INCREMENT PRIMARY KEY,
    post_img TEXT,
    post_title VARCHAR(50),
    post_desc TEXT,
    created_by INT NOT NULL,
    likes INT DEFAULT 0,
    comments INT DEFAULT 0,
    post_status VARCHAR(10) DEFAULT 'D',
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
    INDEX `idx_user`(created_by),
    CONSTRAINT `fk_posts_users`
    FOREIGN KEY (created_by)
    REFERENCES users(user_id) ON UPDATE CASCADE ON DELETE RESTRICT
)ENGINE=INNODB;

CREATE TABLE IF NOT EXISTS comments(
    com_id INT AUTO_INCREMENT PRIMARY KEY,
    com_on INT,
    com_by INT,
    com_desc TEXT,
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
    FOREIGN KEY(com_on) 
    REFERENCES posts(post_id),
    FOREIGN KEY(com_by)
    REFERENCES users(user_id)
)ENGINE=INNODB;
