# Projet oShop

Le fichier README de ce projet est divisé en deux langues : [français](#présentation)
 et [anglais](#presentation). Sélectionnez la version que vous souhaitez lire en cliquant sur le lien correspondant.

The README file for this project is divided into two languages: [French](#présentation) and [English](#presentation). Select the version you want to read by clicking on the corresponding link.

## Présentation

L'objectif du projet oShop est de mettre en place une boutique en ligne spécialisée dans la vente de mangas, des bandes dessinées japonaises.

Voici les fonctionnalités prévues pour l'instant dans le projet :

- Page principale : La page d'accueil du site qui sera la première interface que les utilisateurs verront en arrivant.
- Page des produits : Une page globale qui liste tous les produits disponibles, classés par ordre alphabétique. Cette fonctionnalité offre une vue d'ensemble de l'ensemble du catalogue, permettant aux utilisateurs de rechercher et de parcourir tous les produits de manière alphabétique.
- Page des produits pour chaque catégorie : Une section du site qui regroupe les produits en fonction de leur catégorie. Cela permet aux utilisateurs de naviguer facilement à travers les différents types de produits disponibles.
- Page des produits pour chaque éditeur : Une section qui organise les produits en fonction de l'éditeur. Cela peut être utile pour les utilisateurs qui préfèrent explorer les produits en fonction de leurs éditeurs préférés.
- Page produit : Des pages détaillées pour chaque produit, offrant aux utilisateurs des informations approfondies sur le produit.

## Serveur de développement PHP

### Mode de fonctionnement

Pour cette partie, nous allons exploiter le serveur de développement intégré à PHP.

Vous pouvez expérimenter cela en clonant le projet.

Une fois cela fait, pour lancer le serveur, exécutez la commande suivante dans votre terminal depuis la racine du dépôt :
`php -S 0.0.0.0:8080 -t public`

- L'argument  `-S` est utilisée pour amorcer le serveur PHP de développement intégré

- En utilisant `0.0.0.0` comme adresse IP, le serveur répond à toutes les adresses IP de la machine

- Le port `8080` est spécifié comme numéro de port

- L'option `-t public` indique que le répertoire public est défini comme la racine de notre site

Malgré l'absence d'un fichier `.htaccess` (spécifique à Apache), la structure du site, avec un fichier `index.php` agissant en tant que Front Controller et l'utilisation de la réécriture d'URL, demeure fonctionnelle avec le serveur de développement intégré PHP. Par défaut, ce dernier redirige toutes les requêtes vers le fichier `index.php`.

## Presentation

The objective of the oShop project is to set up an online store specializing in the sale of manga, Japanese comics.

Here are the features currently planned in the project:

- Main page: The home page of the site which will be the first interface that users will see when arriving.
- Products page: A global page that lists all available products, listed in alphabetical order. This feature provides an overview of the entire catalog, allowing users to search and browse all products alphabetically.
- Product page for each category: A section of the site that groups products according to their category. This allows users to easily navigate through the different types of products available.
- Products page for each publisher: A section that organizes products based on publisher. This can be useful for users who prefer to explore products based on their preferred publishers.
- Product Page: Detailed pages for each product, giving users in-depth product information.

## PHP development server

### Operating mode

For this part, we will use the development server integrated into PHP.

You can experiment with this by cloning the project.

Once done, to launch the server, execute the following command in your terminal from the root of the repository:
`php -S 0.0.0.0:8080 -t public`

- The `-S` argument is used to bootstrap the integrated development PHP server

- Using `0.0.0.0` as the IP address, the server responds to all IP addresses on the machine

- Port `8080` is specified as port number

- The `-t public` option indicates that the public directory is defined as the root of our site

Despite the absence of a `.htaccess` file (specific to Apache), the structure of the site, with an `index.php` file acting as Front Controller and the use of URL rewriting, remains functional with the PHP integrated development server. By default, the latter redirects all requests to the `index.php` file.
