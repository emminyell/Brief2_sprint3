# Brief2_sprint3
Projet de Gestion de Contacts - README
Ce projet vise à créer un système de gestion de contacts avec des fonctionnalités d'inscription, de connexion, de gestion de profil et de gestion de contacts.

** Fonctionnalités
Barre de Navigation:

// La barre de navigation en haut de la page affiche le titre du site à gauche et un bouton de connexion à droite.
Connexion/Inscription:

// La page d'accueil propose deux liens d'appel à l'action : S'inscrire et Se connecter.
Si connecté, le bouton de connexion est remplacé par le nom d'utilisateur avec des liens vers la page Profil, Contacts et Déconnexion.
Formulaire de Connexion:

// Un formulaire de connexion permet à l'utilisateur de saisir son nom d'utilisateur et son mot de passe.
Après une connexion réussie, l'utilisateur est redirigé vers la page Profil.
Formulaire d'Inscription:

//La page d'inscription offre un formulaire avec des champs pour le nom d'utilisateur, le mot de passe et la vérification du mot de passe.
Les erreurs sont affichées sous les champs en cas de données incorrectes.
Après une inscription réussie, l'utilisateur est redirigé vers la page Profil.
Page Profil:

// La page Profil affiche une salutation et les détails du profil de l'utilisateur (nom d'utilisateur, date d'inscription, heure de connexion).
Les informations du profil sont stockées dans la base de données, et l'heure de connexion est enregistrée dans la session actuelle.
Gestion des Contacts:

// Une liste de contacts est présentée avec des liens Modifier et Supprimer pour chaque enregistrement.
Un formulaire permet d'ajouter/modifier des contacts avec des champs pour le nom, le téléphone, l'email et l'adresse.
Des messages d'erreur sont affichés sous les champs du formulaire en cas de données invalides.
Le titre par défaut de la page est "Liste des contacts".
Si l'utilisateur accède à la page d'accueil, de connexion ou d'inscription déjà authentifié, il est redirigé vers la page Profil.

** Technologies Utilisées
PHP
MySQL
HTML
CSS
Bootstrap
