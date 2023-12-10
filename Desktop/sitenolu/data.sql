-- Création de la base de données
CREATE DATABASE IF NOT EXISTS ma_base_de_donnees;

-- Utilisation de la base de données
USE ma_base_de_donnees;

-- Création de la table pour stocker les informations d'inscription
CREATE TABLE IF NOT EXISTS utilisateurs (
    id INT AUTO_INCREMENT PRIMARY KEY,
    username VARCHAR(255) NOT NULL,
    password_hash VARCHAR(255) NOT NULL
);
