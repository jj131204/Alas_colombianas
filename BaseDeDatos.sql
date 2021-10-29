
CREATE TABLE IF NOT EXISTS orders(
    or_id INT UNSIGNED PRIMARY KEY AUTO_INCREMENT,
    or_name VARCHAR(100) NOT NULL,
    or_description TEXT
)ENGINE=InnoDB;
  
  
CREATE TABLE IF NOT EXISTS habitats(
    ha_id INT UNSIGNED PRIMARY KEY AUTO_INCREMENT,
    ha_name VARCHAR(300) NOT NULL,
    ha_description TEXT
)ENGINE=InnoDB;


CREATE TABLE IF NOT EXISTS family(  
    fa_id INT UNSIGNED PRIMARY KEY AUTO_INCREMENT,
    fa_familyName VARCHAR(100) NOT NULL,
    or_id INT NOT NULL,
    CONSTRAINT fk_Family_orderId FOREIGN KEY (or_id) REFERENCES orders(or_id)
)ENGINE=InnoDB;

CREATE TABLE IF NOT EXISTS gender(
    ge_id INT UNSIGNED PRIMARY KEY AUTO_INCREMENT,
    ge_GenderName VARCHAR(100) NOT NULL,
    fa_id INT NO NULL,
    CONSTRAINT fk_gender_familyId FOREIGN KEY (fa_id) REFERENCES family(fa_id)
)ENGINE=InnoDB;

CREATE TABLE IF NOT EXISTS species(
    sp_id INT UNSIGNED PRIMARY KEY AUTO_INCREMENT,
    sp_vulgarName VARCHAR(100) NOT NULL,
    sp_CientificName VARCHAR(200) NOT NULL,
    img_name VARCHAR(100) NOT NULL,
    ha_id INT NOT NULL,
    ge_id INT NOT NULL,
    CONSTRAINT fk_sp_habitatsId FOREIGN KEY (ha_id) REFERENCES habitats(ha_id),
    CONSTRAINT fk_sp_genderId FOREIGN KEY (ge_id ) REFERENCES gender(ge_id)
)ENGINE=InnoDB;

