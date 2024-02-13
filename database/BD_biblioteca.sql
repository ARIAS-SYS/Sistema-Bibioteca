

CREATE TABLE tb_usuarios(
    id_usuario              INT(11) NOT NULL AUTO_INCREMENT PRIMARY KEY,
    nombres                 VARCHAR(255) NOT NULL,
    apellidos               VARCHAR(255) NOT NULL,
    ci                      VARCHAR(255) NOT NULL,
    celular                 VARCHAR(255) NULL,
    cargo                   VARCHAR(255) NOT NULL,
    email                   VARCHAR(255) NOT NULL,
    password                TEXT NOT NULL,

    fyh_creacion            DATETIME NULL,
    fyh_actualizacion       DATETIME NULL,
    fyh_eliminacion         DATETIME NULL,
    estado                  VARCHAR(11) NOT NULL

);

CREATE TABLE tb_libros(
    id_libro                INT(11) NOT NULL AUTO_INCREMENT PRIMARY KEY,
    codigo                  VARCHAR(255) NOT NULL,
    titulo                  VARCHAR(255) NOT NULL,
    autor                   VARCHAR(255) NOT NULL,
    area                    VARCHAR(255) NULL,
    campo                   VARCHAR(255) NULL,
    ciudad                  VARCHAR(255) NULL,
    editorial               VARCHAR(255) NULL,
    ano_publicacion         VARCHAR(255) NULL,
    nro_edicion             VARCHAR(255) NOT NULL,
    paginas                 VARCHAR(10)  NOT NULL,
    formato                 VARCHAR(255) NOT NULL,
    ejemplares              VARCHAR(10) NOT NULL,
    observaciones           TEXT NULL,
    codigo_barra            VARCHAR(255) NOT NULL,

    fyh_creacion            DATETIME NULL,
    fyh_actualizacion       DATETIME NULL,
    fyh_eliminacion         DATETIME NULL,
    estado                  VARCHAR(11) NOT NULL

);


CREATE TABLE tb_areas(
    id_area                INT(11) NOT NULL AUTO_INCREMENT PRIMARY KEY,
    area                  VARCHAR(255) NOT NULL,

    fyh_creacion            DATETIME NULL,
    fyh_actualizacion       DATETIME NULL,
    fyh_eliminacion         DATETIME NULL,
    estado                  VARCHAR(11) NOT NULL

);


CREATE TABLE tb_campos(
    id_campo               INT(11) NOT NULL AUTO_INCREMENT PRIMARY KEY,
    campo                  VARCHAR(255) NOT NULL,

    fyh_creacion            DATETIME NULL,
    fyh_actualizacion       DATETIME NULL,
    fyh_eliminacion         DATETIME NULL,
    estado                  VARCHAR(11) NOT NULL

);


CREATE TABLE tb_editorial(
    id_editorial                INT(11) NOT NULL AUTO_INCREMENT PRIMARY KEY,
    editorial                  VARCHAR(255) NOT NULL,

    fyh_creacion            DATETIME NULL,
    fyh_actualizacion       DATETIME NULL,
    fyh_eliminacion         DATETIME NULL,
    estado                  VARCHAR(11) NOT NULL

);