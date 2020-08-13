---creation base
-- CREATE DATABASE magazine_db;
CREATE SEQUENCE seq_users;
CREATE TABLE users (--USR
    id VARCHAR(10) PRIMARY KEY,
    nom VARCHAR(50),
    pseudo VARCHAR(50),
    mdp VARCHAR(225)
);
insert into users values('USR000'||nextval('seq_users'),'Admin','back','$2y$10$fTq48.sdSKOGRVx9etXnb.Y4hboYAbd1CKQIyJBvkzJht33coPt/e');
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

create view nombrecoms as
select article.id,
    article.titre,
    article.description,
    article.contenu,
    article.photo,
    categorieArticle.nom categorie,
    article.datePublication,
    article.vue,
    article.sponsorise,
    article.etat,
     CASE
    WHEN  nbcoms.nb >= 0 THEN  nbcoms.nb
    ELSE 0
  END nbcomments
     from article 
    left join (select article,count(*) as nb from commentaire group by article) as nbcoms on article.id=nbcoms.article
    join categorieArticle on categorieArticle.id=article.categorie;
