# NOVA CORE | Smart Shipping

## Présentation

NOVA CORE | Smart Shipping est un plugin WordPress développé pour la boutique fictive NOVA CORE, spécialisée dans la vente de PC gaming, de composants informatiques et de périphériques.

Il permet de personnaliser les frais de livraison WooCommerce selon le type de produit, le montant du panier et son poids.

## Objectif du projet

Développer une méthode de livraison personnalisée pour WooCommerce, tout en mettant en pratique les bases du PHP et l'intégration d'un plugin dans WordPress.

## Fonctionnalités actuelles

- Intégration d'une méthode de livraison personnalisée à WooCommerce.
- Livraison gratuite pour les PC gaming assemblés.
- Livraison gratuite à partir de 300 € TTC de produits.
- Calcul des frais de livraison selon plusieurs tranches de poids.
- Tests PHP du calcul des tarifs.
- Protection des fichiers PHP contre les accès directs.

## Compétences mises en pratique

- Création de fonctions et utilisation des conditions en PHP.
- Manipulation des tableaux et des objets.
- Utilisation des actions et filtres WordPress.
- Extension d'une classe WooCommerce.
- Séparation de la logique de calcul et de son intégration.
- Écriture et exécution de tests PHP.
- Versionnement du code avec Git.

## Technologies utilisées

- PHP
- WordPress
- WooCommerce
- Git et GitHub

## État du projet

**Version 1.0.0 — En cours de finalisation**

La méthode de livraison est intégrée à WooCommerce. Les règles de gratuité ont été vérifiées dans la boutique et les calculs des tarifs au poids ont été validés par des tests PHP.

Les vérifications des tarifs au poids directement dans WooCommerce restent à effectuer.

## Prochaines évolutions

- Vérifier les frais de livraison avec des composants et périphériques ajoutés au catalogue.
- Intégrer les tests au dépôt Git.
- Améliorer la configuration et la maintenance du plugin.

## Installation

1. Copier le dossier `nova-core-smart-shipping` dans `wp-content/plugins/`.
2. Activer WooCommerce.
3. Activer le plugin **NOVA CORE | Smart Shipping**.
4. Ajouter la méthode de livraison dans une zone de livraison WooCommerce.