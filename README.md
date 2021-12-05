# Site Ecommerce Symfony : **Siekau**

Projet LP AMIO

Site web ecommerce développé avec Symfony

Siekau est une toute nouvelle marque innovante qui veut prendre place dans le marché de la vente de montre.

## Equipe

| Nom | Prénom | Email | Github |
| - | - | - | - |
| Ferreira | Alexandre | alexandre.ferreira4@etu.univ-lorraine.fr | [UnknownChick](https://github.com/UnknownChick) |
| Blaise | Kevin | kevin.blaise2@etu.univ-lorraine.fr | [Oui-Dev](https://github.com/Oui-Dev) |
| Paul | Alan | alan.paul1@etu.univ-lorraine.fr | [Drakan300](https://github.com/Drakan300) |
| Otlean | Petru | petru.oltean5@etu.univ-lorraine.fr | [otlean-petu](https://github.com/oltean-petru) |

## Tâches

### Les membres
* [x] Création de l'entité : User()
* [x] Transformer l'entité User() en table dans une base de donnée
* [x] Création du formulaire d'inscription
* [x] Sauvegarde les informations du formulaire d'inscription en base de donnée
* [x] Encodage des mots de passe de nos utilisateurs
* [x] Valider les données grâce au composant Validator
* [x] Création du formulaire de connexion
* [x] Création de l'espace membre utilisateur
* [x] Permettre à l'utilisateur de modifier son mot de passe
* [x] Mise à jour des templates pour afficher l'utilisateur et les routes

### Administration
* [x] Integration EasyAdmin

### Les produits
* [x] Création de l'entité Category() pou organiser les produits
* [x] Mapping de l'entité Category() dans EasyAdmin
* [ ] Création de l'entité Product() 
* [ ] Mapping de l'entité Product() dans EasyAdmin

## Commande pour lancer le projet

Penser à modifier le fichier .env

```Bash
composer update
```
```Bash
symfony self:update
```
```Bash
symfony console doctrine:database:create
```
```Bash
symfony server:start
```

## Lien utile

> Documentation [symfony](https://symfony.com/doc/current/index.html)\
> Documentation [composer](https://getcomposer.org/doc/)
