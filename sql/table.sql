---creation base
-- CREATE DATABASE magazine_db;
CREATE SEQUENCE seq_users;
CREATE TABLE users (--USR
    id VARCHAR(10) PRIMARY KEY,
    nom VARCHAR(50),
    pseudo VARCHAR(50),
    mdp VARCHAR(225)
);
CREATE SEQUENCE seq_categoriearticle;
CREATE TABLE categorieArticle (
    id VARCHAR(50) PRIMARY KEY,
    nom VARCHAR(50) NOT NULL,
    etat integer
);
CREATE SEQUENCE seq_article;
CREATE TABLE article (
    id VARCHAR(50) PRIMARY KEY,
    titre VARCHAR(400) NOT NULL,
    description VARCHAR(500) NOT NULL,
    contenu text NOT NULL,
    photo VARCHAR(500) NOT NULL,
    categorie VARCHAR(50) NOT NULL references categorieArticle,
    datePublication timestamp NOT NULL,
    vue integer,
    sponsorise integer,
    etat integer
);
CREATE SEQUENCE seq_commentaire;
CREATE TABLE commentaire (
    id VARCHAR(50) PRIMARY KEY,
    pseudo VARCHAR(40) NOT NULL,
    contenu VARCHAR(400) NOT NULL,
    article VARCHAR(50) NOT NULL references article,
    datePublication timestamp NOT NULL
);
CREATE SEQUENCE seq_editorpick;
CREATE TABLE editorPick (
    id VARCHAR(50) PRIMARY KEY,
    dateDebut timestamp NOT NULL,
    dateFin timestamp NOT NULL,
    article VARCHAR(50) NOT NULL references article
);
