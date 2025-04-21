# Test Smarty

Un projet de maquette utilisant Smarty Bootstrap pour gérer une interface hospitalière avec une sidebar, des tableaux stylés et une interface responsive.

# Fonctionnalités principales

- Interface responsive

- Gestion des patients (ajout, affichage, édition, suppression)

- Support des fichiers (ex : photos de patients) via le dossier uploads/


## Technologies utilisées

- HTML5 : Structure de la page

- CSS3 : Stylisation de l'interface

- Bootstrap5 : Mise en page et composants responsives

- JavaScript : Interaction dynamique de l'interface

- FontAwesome : Icônes

- Adminlte : Dashboard et composants d'interface d'administration

- Smarty : Moteur de templates pour la gestion de l'affichage

- PHP : Langage de programmation pour la logique serveur

## Installation

# Prérequis :

Avant d'installer le projet, assurez-vous que vous avez les outils suivants installés :

- PHP (version 7.4 ou supérieure)
- Composer pour la gestion des dépendances PHP
- Node.js et npm pour la gestion des dépendances front-end

# Structure du projet :

patient_manager/
├── demo/
│   ├── index.php               # Point d’entrée principal du projet
│   ├── configs/                # Configuration PHP + Smarty
│   │   └── Database.php        # Configuration du base de données
│   ├── templates/              # Templates Smarty (.tpl)
│   │   ├── Add_Patient.tpl     
│   │   ├── header.tpl          
│   │   ├── index.tpl           
│   │   └── ...                 # Autres fichiers .tpl
│   ├── templates_c/            # Fichiers compilés générés automatiquement par Smarty
│   ├── uploads/                # Dossier de stockage des fichiers (ex: photos de patients)
│
├── public/
│   └── assets/
│       └── css/
│           └── style.css       # Fichier de styles personnalisé (interface, boutons, sidebar…)


# Utilisation :

Une fois le projet installé et configuré, vous pouvez démarrer votre serveur local (ex: Apache via XAMPP) et accéder au projet à l'adresse suivante :

http://localhost/patient_manager/demo/index.php