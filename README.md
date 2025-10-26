# Portfolio de Jules Ferlin

Un site web portfolio professionnel, moderne et épuré, présentant les projets, compétences, expériences et coordonnées de Jules Ferlin.

## Lancer localement avec Docker

Prérequis: Docker Desktop installé.

1. Ouvrez un terminal dans ce dossier.
2. Lancez le serveur:
   
   docker compose up -d
   
3. Ouvrez le site: http://localhost:8080
4. Arrêter:
   
   docker compose down

## Modifier la photo de profil

- Remplacez le fichier assets/img/profile.jpg par votre photo (issue du CV), en conservant le même nom de fichier.
- Un placeholder (assets/img/placeholder-profile.svg) est utilisé si profile.jpg est absent.

## Modifier le contenu

- Le contenu est dans index.html. Tous les textes demandés sont déjà insérés (Héros, Profil, Compétences, Expériences, Projets, Formation, Centres d'intérêt, Contact).
- Les styles se trouvent dans assets/css/style.css.
- Le JavaScript (défilement fluide, année dynamique, validation du formulaire) est dans assets/js/main.js.

## Formulaire de contact

- Le formulaire utilise un lien mailto: qui ouvre votre client mail avec le message prérempli.
- Pour un envoi direct (sans client mail), ajoutez plus tard un petit backend (ex: service serverless, Formspree, Netlify Forms).

## Structure

- index.html
- assets/
  - css/style.css
  - js/main.js
  - img/profile.jpg (à ajouter par vous)
  - img/placeholder-profile.svg
- docker-compose.yml (sert le site via nginx sur le port 8080)

## SEO et performances

- Police Inter via Google Fonts, icônes via Font Awesome (CDN).
- Métadonnées de base (title, description) incluses.

## Licence

Vous êtes libre d'utiliser et de modifier ce template pour votre usage personnel.
