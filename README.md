# Mini CMS d’acquisition

## Présentation

Cse projet et un mini CMS d’acquisition développé avec Symfony.

L’objectif est de permettre à des partenaires de disposer de landing pages personnalisables afin de générer des leads via un formulaire public.

La plateforme gère trois types d’acteurs :

- **User visiteur** : remplit un formulaire sur une landing page
- **Partner** : consulte ses leads et gère ses landing pages
- **Admin** : pilote les partners, les leads et les landing pages

---

## Objectif métier

Le besoin principal est de permettre à plusieurs partenaires de :

- disposer d’une ou plusieurs landing pages
- choisir un template de landing page
- personnaliser les contenus et couleurs
- générer des leads
- consulter les leads depuis leur espace

L’admin peut superviser la plateforme et gérer les accès.

---

## Stack technique

### Backend
- PHP
- Symfony

### Frontend
- Twig
- HTML
- CSS
- Bootstrap

### Base de données
- MySQL "phpMyAdmin" 

### Outils principaux
- Doctrine ORM
- Doctrine Migrations
- Doctrine Fixtures
- Symfony Security
- Symfony Forms
- Symfony Validator
- Symfony Maker Bundle

---

## Architecture du projet

Le projet est structuré autour de Symfony :

- `src/Controller` : controllers admin, partner et public
- `src/Entity` : entités Doctrine
- `src/Form` : formulaires Symfony
- `src/Security` : authentification et contrôle d’accès
- `templates/` : vues Twig
- `migrations/` : migrations Doctrine
- `src/DataFixtures/` : données de test

---

## Architecture de la base de données

### `user`
Stocke les comptes de connexion.

Champs principaux :
- email
- password
- roles
- is_active
- created_at
- updated_at

Rôle :
- gérer l’authentification
- distinguer admin et partner

---
### `partner`
Représente un partenaire métier.

Champs principaux :
- name
- slug
- is_active
- user_id

Rôle :
- propriétaire des landing pages
- propriétaire des leads

Relation :
- un partner est lié à un user

---

### `landing_template`
Catalogue des templates de landing page.

Champs principaux :
- code
- name
- description
- preview_image
- is_active

Rôle :
- permettre à plusieurs landing pages d’utiliser le même design

Exemples :
- `template_direct`
- `template_reassurance`
- `template_3`

---

### `landing_page`
Table principale du CMS.

Champs principaux :
- name
- slug
- title
- subtitle
- cta_text
- hero_image
- primary_color
- secondary_color
- button_color
- form_title
- success_message
- is_active
- partner_id
- landing_template_id

Rôle :
- stocker les contenus et le design choisis par le partner

---

### `landing_page_section`
Permet de gérer des sections dynamiques.

Champs principaux :
- section_key
- is_enabled
- content_json
- sort_order
- landing_page_id

Rôle :
- ajouter des blocs dynamiques à une landing page
- garder une structure flexible via JSON

---

### `lead`
Stocke les formulaires envoyés.

Champs principaux :
- full_name
- email
- phone
- company
- message
- utm_source
- utm_medium
- utm_campaign
- created_at
- partner_id
- landing_page_id

Rôle :
- enregistrer les leads générés par les landing pages

---

## Relations principales

- un **user** est lié à un **partner**
- un **partner** possède plusieurs **landing pages**
- une **landing page** utilise un **landing template**
- une **landing page** possède plusieurs **sections**
- une **landing page** génère plusieurs **leads**
- un **partner** reçoit plusieurs **leads**

---

## Fonctionnalités implémentées

### Partie publique
- affichage d’une landing page par slug partenaire + slug landing
- formulaire public de génération de lead
- enregistrement du lead en base
- support de plusieurs templates publics

### Partie partner
- connexion partner
- dashboard partner
- consultation des leads du partner
- consultation des landing pages du partner
- création d’une landing page
- modification d’une landing page
- activation / désactivation d’une landing page
- choix du template
- personnalisation des textes, couleurs et image hero
- validations serveur sur les formulaires

### Partie admin
- connexion admin
- dashboard admin
- statistiques globales
- liste des partners
- création d’un partner
- édition d’un partner
- activation / désactivation d’un partner
- suppression d’un partner
- création automatique d’une landing page par défaut lors de la création d’un partner
- liste des leads
- liste des landing pages

### Sécurité
- rôles `ROLE_ADMIN` et `ROLE_PARTNER`
- redirection après login selon le rôle
- logout
- blocage des partners "inactifs"
- validation serveur des formulaires

---