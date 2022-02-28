# Site Ecommerce Symfony : **Siekau**

Projet LP AMIO

Site web ecommerce développé avec Symfony

Siekau est une toute nouvelle marque innovante qui veut prendre place dans le marché de la vente de montre.

## Navigation

- [Equipe](#equipe)
- [Technoliges utilisées](#technoliges)
- [Tâches](#taches)
   - [Les membres](#membres)
   - [Administration](#administration)
   - [Les produits](#produits)
   - [Le panier](#panier)
- [Commandes](#commandes)
- [Documentation](#documentation)

## <a name="equipe"></a>Equipe

| Nom | Prénom | Email universitaire | Discord | Github |
| - | - | - | - | - |
| Ferreira | Alexandre | alexandre.ferreira4@etu.univ-lorraine.fr | UnknownChick#9543| [UnknownChick](https://github.com/UnknownChick) |
| Blaise | Kevin | kevin.blaise2@etu.univ-lorraine.fr | Oui#8726 | [Oui-Dev](https://github.com/Oui-Dev) |
| Paul | Alan | alan.paul1@etu.univ-lorraine.fr | drakan300#8544 | [Drakan300](https://github.com/Drakan300) |
| Otlean | Petru | petru.oltean5@etu.univ-lorraine.fr | Zephyr33#3519 | [otlean-petu](https://github.com/oltean-petru) |

## <a name="technoliges"></a>Technologies utilisées

+ HTML
+ CSS
+ PHP
+ Symfony
+ Twig
+ Composer
+ MySql
+ Bootstrap

## <a name="taches" /></a>Tâches

### <a name="membres"></a>Les membres
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

### <a name="administration"></a>Administration
* [x] Integration EasyAdmin

### <a name="produits"></a>Les produits
* [x] Création de l'entité Category() pou organiser les produits
* [x] Mapping de l'entité Category() dans EasyAdmin
* [x] Création de l'entité Product() 
* [x] Mapping de l'entité Product() dans EasyAdmin
* [x] Création des produits dans le backoffice
* [x] Création des vues pour afficher les produits pour les utilisateurs
* [x] Création d'une barre de filtre pour faciliter la navigation

### <a name="panier"></a>Le panier
* [ ] Création du panier et de la classe Cart()
  
## <a name="commandes"></a>Commandes pour lancer le projet

Ne pas oublier de modifier le fichier .env

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

## Documentation

> [Symfony](https://symfony.com/doc/current/index.html)\
> [Composer](https://getcomposer.org/doc/)
