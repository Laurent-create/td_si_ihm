-- Créer la base de données si elle n'existe pas
CREATE DATABASE IF NOT EXISTS supermarcher;
USE supermarcher;

-- Table des catégories
CREATE TABLE categorie (
    id INT PRIMARY KEY AUTO_INCREMENT,
    nom VARCHAR(255) NOT NULL,
    description TEXT
);

-- Table des produits
CREATE TABLE produit (
    id INT PRIMARY KEY AUTO_INCREMENT,
    nom VARCHAR(255) NOT NULL,
    prix DECIMAL(10, 2) NOT NULL,
    stock INT NOT NULL,
    id_categorie INT,  -- Référence à la table categorie
    date_ajout TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
    FOREIGN KEY (id_categorie) REFERENCES categorie(id)
);

-- Table des caisses
CREATE TABLE caisse (
    id INT PRIMARY KEY AUTO_INCREMENT,
    etat VARCHAR(50) DEFAULT 'ouverte',
    date_creation TIMESTAMP DEFAULT CURRENT_TIMESTAMP
);

-- Table des achats
CREATE TABLE achat (
    id INT PRIMARY KEY AUTO_INCREMENT,
    id_produit INT,
    id_caisse INT,
    quantite INT NOT NULL,
    prix_total DECIMAL(10, 2) NOT NULL,
    date_achat TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
    FOREIGN KEY (id_produit) REFERENCES produit(id),
    FOREIGN KEY (id_caisse) REFERENCES caisse(id)
);
