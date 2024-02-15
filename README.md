Gestionnaire de Newsletter


Introduction

Cette plateforme web a été développée pour répondre aux besoins croissants de centralisation et de rationalisation des opérations en ligne de notre client, une entreprise en pleine croissance dans le secteur de la communication et du marketing. Elle intègre des fonctionnalités avancées pour améliorer la communication, la gestion de l'information et la collaboration au sein de l'équipe.
Fonctionnalités Principales
Gestion de Newsletter (Spatie)

La plateforme permet à l'entreprise d'envoyer des newsletters régulières à ses clients et partenaires. L'intégration du package Spatie Newsletter facilite la création, l'envoi, et le suivi des campagnes de newsletters.
Authentification avec Gestion des Rôles (Policies et Guards)

Un système d'authentification robuste est mis en place avec gestion des rôles basée sur les politiques et gardes de Laravel. Trois rôles distincts sont définis : Administrateur, Rédacteur, et Membre, avec des autorisations spécifiques pour accéder et modifier certaines parties de la plateforme.
Fonctionnalités Forgot Password et Remember Me

La plateforme inclut les fonctionnalités "forgot password" pour permettre aux utilisateurs de réinitialiser leur mot de passe, ainsi que la fonction "remember me" pour faciliter la connexion automatique.
Media Library (Spatie)

La gestion de médias est simplifiée grâce à l'utilisation de Spatie Media Library, permettant aux utilisateurs de télécharger, organiser et partager des fichiers multimédias. Chaque média est associé à un utilisateur ou à un projet spécifique.
Soft Delete

Les enregistrements sont marqués comme supprimés plutôt que d'être supprimés physiquement de la base de données, offrant ainsi la possibilité de les restaurer si nécessaire.
Middleware

Des middleware sont utilisés pour gérer les autorisations spécifiques aux rôles, garantissant que chaque utilisateur a accès uniquement aux fonctionnalités qui lui sont autorisées en fonction de son rôle.
Génération PDF

La plateforme peut générer des fichiers PDF à partir de données spécifiques, comme des rapports mensuels sur les performances des campagnes de newsletters ou des récapitulatifs des médias téléchargés sur une période donnée.
Modélisation avec 3 Rôles

La base de données est modélisée pour prendre en charge les trois rôles définis (Administrateur, Rédacteur, Membre), assurant ainsi une séparation claire des données et des responsabilités au sein de la plateforme.
Configuration du Projet

    Cloner le projet depuis le dépôt Git.
    Installer les dépendances en exécutant composer install.
    Copier le fichier .env.example et le renommer en .env, puis configurer les paramètres de l'application.
    Générer une nouvelle clé d'application en exécutant php artisan key:generate.
    Effectuer les migrations de la base de données avec php artisan migrate.
    Lancer le serveur de développement avec php artisan serve.

Technologies Utilisées

    Laravel
    Spatie Newsletter
    Spatie Media Library

Contributeurs

    Nom du Contributeur 1
    Nom du Contributeur 2

Ce README donne un aperçu global du projet, des fonctionnalités implémentées, des étapes pour configurer le projet, des technologies utilisées et des contributeurs. Assurez-vous d'adapter les détails spécifiques de votre projet avant de l'utiliser.