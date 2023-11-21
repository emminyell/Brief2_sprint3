--- creat database 
creat database you contact 

	CREATE TABLE user_compte(
    user_id INT PRIMARY KEY AUTO_INCREMENT,
    user_name varchar(255),
    mot_passe varchar(255)
    );
    CREATE TABLE contact(
        contact_id INT PRIMARY KEY AUTO_INCREMENT,
        first_name varchar(255),
        last_name varchar(255),
        email varchar(255),
        téléphone varchar(255),
        description varchar(255),
        date_creation date,
        user_id int,
        FOREIGN KEY (user_id) REFERENCES user_compte (user_id)
    );