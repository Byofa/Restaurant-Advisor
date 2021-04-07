# TIC-MOB2 / Restaurant Advisor / Étape 1 : Back

## Description

Le but du projet est de vous faire découvrir le développement mobile ainsi que la mise en place des Web Services REST.
Durant ce projet, vous allez créer des Web Services en utilisant les frameworks (Laravel) et une application mobile (Android ou iOS).
L’application mobile utilisera donc l’API que vous aurez mise en place.

## Commencer

### Dependences

* Besoin de composer et PHP. 

### Installation

* Git clone ou telecharcher le répertoire dans gitlab.

* Mettre à jour le dossier laravel  
            ```
            composer update
            ```

* Créer une base de donée Mysql

* Copier et rennomer le .env.exmple  
        ```
        cp .env.example .env
        ```

* Configurer le .env avec votre base de donnée créer precedemment

* Lancer la commande suivante dans un terminal pour demarrer le serveur laravel  
        ```
        php artisan serve
        ```

### Executing program

* Pour recuperer chacune des données vous devrez utilisé les URI suivant apres le site données par le artisan serve 

* Type POST

    * Inscription  
            ```
            /api/register
            ```

    * Authentification  
            ```
            /api/auth
            ```

    * Créer un restaurant  
            ```
            /api/restaurants
            ```

    * Créer un menu pour un restaurant  
            ```
            /api/restaurants/{id}/menus
            ```

* Type GET

    * Avoir une liste d’utilisateurs  
            ```
            /api/users
            ```

    * Récupérer la liste des restaurantst  
            ```
            /api/restaurants
            ```

    * Récupérer le restaurant correspondant à l'id donné  
            ```
            /api/restaurants/{id}
            ```

    * Récupérer la liste des menus  
            ```
            /api/menus
            ```

    * Récupérer le menu correspondant à l'id donné  
            ```
            /api/menus/{id}
            ```

    * Récupérer les menus d'un restaurant  
            ```
            /api/restaurants/{id}/menus
            ```

* Type PUT

    * Modifier un restaurant  
            ```
            /api/restaurant/{id}
            ```

    * Modifier un menu  
            ```
            /api/menus/{id}
            ```

* Type DELETE

    * Supprimer un restaurant  
            ```
            /api/restaurant/{id}
            ```

    * Supprimer un menu  
            ```
            /api/menus/{id}
            ```

## Auteurs

Raphael ADJOVI BOCO ORTEGA  [Linkedin](https://www.linkedin.com/in/raphael-adjovi-boco-ortega-b24478203/)

Fabio Machado   [Linkedin](https://www.linkedin.com/in/fabio-aires-machado/)

## Historique des versions

* 0.1
    * Initial Release

## License

This project is an opensource, read the CGG of ETNA school Paris.

