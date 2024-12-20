# Projet de Pagination et Chargement Progressif

## Objectif
Ce projet a pour objectif de créer une interface web qui affiche entre 500 et 1000 produits avec un système de pagination ou de chargement progressif (infinite scroll). Le projet inclut la conception d’une base de données pour stocker les produits.

## Technologies Utilisées
- **Frontend** : HTML, CSS, Bootstrap
- **Backend** : PHP
- **Base de données** : MySQL
- **Génération de données** : Faker

## Structure du Projet
- `products_db.sql` : Script SQL pour créer la base de données et la table `products`.
- `index.php` : Script PHP pour générer des données fictives et les insérer dans la base de données.
- `get_products.php` : Script PHP pour récupérer les produits depuis la base de données avec pagination.
- `index.html` : Page HTML pour afficher les produits avec Bootstrap et implémenter le chargement progressif.

## Installation et Configuration

### Prérequis
- Serveur web (ex: XAMPP, WAMP, MAMP)
- PHP
- MySQL

### Étapes
1. **Cloner le dépôt :**
   ```bash
   git clone https://github.com/votre-utilisateur/votre-repo.git
   cd votre-repo