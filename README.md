# Portfolio de Jules Ferlin

Site web portfolio professionnel, moderne et épuré, présentant le parcours, les compétences, les expériences et les projets de Jules Ferlin — ingénieur en informatique (UTBM), titulaire du Master Entrepreneuriat Technologique et Innovation et président de [NexSIM](https://www.nexsim.fr).

En ligne : https://jules-ferlin.selutech.fr

## Lancer localement

Prérequis : Docker Desktop installé.

```bash
docker compose -f docker-compose.dev.yml up --build
```

Le site est alors sur http://localhost:8091. `./src` est monté dans le conteneur :
une modification du contenu est visible au simple rechargement de la page, sans
reconstruire l'image.

Pour arrêter :

```bash
docker compose -f docker-compose.dev.yml down
```

## Image Docker et déploiement

Le site est livré sous forme d'une image unique contenant **nginx + php-fpm**,
publiée sur `registry.selutech.fr/jules-ferlin`. Elle écoute sur le port **8080**
et tourne en non-root (`www-data`).

### Publication automatique

`.github/workflows/docker.yml` construit et pousse l'image :

| Déclencheur | Tags publiés |
| --- | --- |
| push sur `main` | `latest`, `sha-<court>` |
| tag `v1.2.3` | `v1.2.3`, `1.2.3`, `1.2`, `sha-<court>` |
| pull request | *aucun* — l'image est construite pour validation, sans push |

Deux secrets doivent exister dans les *Settings → Secrets and variables → Actions*
du dépôt :

- `SELUTECH_REGISTRY_USER`
- `SELUTECH_REGISTRY_TOKEN`

### Déploiement sur le serveur

```bash
docker compose pull && docker compose up -d
```

`docker-compose.yml` publie le port `8091` du serveur vers le `8080` du
conteneur ; le nginx du serveur n'a plus qu'à proxifier `jules-ferlin.selutech.fr`
vers ce port. Si le reverse proxy est lui-même conteneurisé, un réseau partagé
est préférable — les deux variantes sont commentées dans le fichier.

Le reverse proxy doit transmettre `X-Forwarded-Proto` : c'est ce qui permet à
`assets/partials/seo.php` de générer des URLs canoniques et Open Graph en
`https://`.

```nginx
proxy_set_header Host              $host;
proxy_set_header X-Real-IP         $remote_addr;
proxy_set_header X-Forwarded-For   $proxy_add_x_forwarded_for;
proxy_set_header X-Forwarded-Proto $scheme;
```

L'image expose `/healthz`, utilisé par le `HEALTHCHECK` de l'image et par le
healthcheck de `docker-compose.yml`.

## Modifier la photo de profil

- Remplacez `src/assets/img/profile.jpeg` par votre photo, en conservant le même nom de fichier.
- Un placeholder (`src/assets/img/placeholder-profile.svg`) est disponible, et le `onerror` de la balise `<img>` assure un repli si le fichier est absent.

## Modifier le contenu

- Le contenu est dans `src/index.php` (Héros, Profil, Compétences, Expériences, Projets, Formation, Centres d'intérêt, Contact).
- L'âge affiché est calculé automatiquement à partir de la date de naissance définie en haut de `src/index.php` — il n'y a pas de valeur en dur à mettre à jour.
- L'année du pied de page est calculée avec `date('Y')`.
- Les styles se trouvent dans `src/assets/css/style.css`.
- Le JavaScript (défilement fluide, menu mobile, validation du formulaire) est dans `src/assets/js/main.js`.

## SEO

- `src/assets/partials/seo.php` centralise les métadonnées : `<title>`, description, canonical, Open Graph, Twitter Cards et JSON-LD (schema.org `Person` + `WebSite`).
- Chaque page peut surcharger les valeurs via le tableau `$seo` avant l'inclusion du partial.
- `src/sitemap.xml` et `src/robots.txt` pointent vers https://jules-ferlin.selutech.fr — pensez à mettre à jour `<lastmod>` après une modification notable.
- Google Tag Manager (`GTM-NPTDG3KP`) et Google Analytics (`G-7TCGNHL456`) sont chargés depuis le partial SEO.

## Formulaire de contact

- Le formulaire utilise un lien `mailto:` qui ouvre le client mail avec le message prérempli.
- Pour un envoi direct (sans client mail), ajoutez un backend léger (service serverless, Formspree, Netlify Forms…).

## Structure

```
Dockerfile                # image nginx + php-fpm servie sur le port 8080
.dockerignore
docker/
  nginx.conf              # vhost du conteneur, fastcgi et X-Forwarded-Proto
  supervisord.conf        # supervise nginx et php-fpm
  php/zz-portfolio.ini    # fuseau horaire et réglages PHP
docker-compose.yml        # déploiement : tire l'image du registre
docker-compose.dev.yml    # développement : build local + montage de ./src
.github/workflows/
  docker.yml              # lint PHP, build et push vers registry.selutech.fr
src/
  index.php               # page unique du portfolio
  robots.txt
  sitemap.xml
  assets/
    css/style.css
    js/main.js
    img/profile.jpeg
    img/placeholder-profile.svg
    partials/seo.php      # métadonnées, analytics et JSON-LD
```

## Licence

Vous êtes libre d'utiliser et de modifier ce template pour votre usage personnel.
