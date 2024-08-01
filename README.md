
#  Gestion d'une bibliothèque

## Enoncé

Ce TP consiste à développer une application Laravel pour gérer une bibliothèque.
L'application doit permettre de :
● Créer, lire, mettre à jour et supprimer des livres et des auteurs.
● Associer des livres à des auteurs.
● Afficher la liste des livres avec leurs auteurs.
● Afficher la liste des auteurs avec leurs livres.



# Fonctionnalités

- **Gestion des Livres et auteurs :**
  - Ajouter, lire, mettre à jour et supprimer des livres.
  - Associer des livres à des auteurs.
  - Afficher la liste des livres avec leurs auteurs.
  - utiliser la barre de recherche pour fitrer les livres par auteurs.



- **Interface Utilisateur :**
  - Interface moderne et styliser avec du CSS et bootstrap .
  -Validation des données entrées par l'utilisateur.
  - Pagination des résultats dans les listes de livres avec les auteurs.


## Pré-recquis

- PHP 8.0 
- Composer
- MySQL 


## Installation

1. **Clonez le Repository :**

   git clone https://github.com/votre-utilisateur/votre-repository.git
   cd votre-repository
   

2. **Installez les Dépendances :**

   ```bash
   composer install
   npm install
   ```

3. **Configurez l'Environnement :**

Configurer les paramètres de la base de données
Pour celà :

Accédez au fichier '.env'.

Ouvrez le fichier '.env' à la racine de votre projet.
Procéder à la modification des paramètres de la base de données

DB_CONNECTION : Type de connexion (mysql, pgsql, etc.).
DB_HOST : Adresse du serveur de base de données.
DB_PORT : Port du serveur de base de données.
DB_DATABASE : Nom de la base de données.
DB_USERNAME : Nom d'utilisateur pour la connexion.
DB_PASSWORD : Mot de passe associé à l'utilisateur.
Assurez-vous que ces valeurs correspondent aux informations fournies par votre serveur de base de données.

4. **Générez la Clé d'Application :**

   php artisan key:generate
   

5. **Exécutez les Migrations :**

  
   php artisan migrate
 

6. **Compilez les Assets :**


   npm run dev

7. **Démarrez le Serveur :**

   php artisan serve

   Accédez à l'application à l'adresse [http://localhost:8000].


## Captures d'Écran des interfaces


## Utilisation

- **Ajouter un Livre :** Cliquez sur "Ajouter un Livre" pour créer un nouveau livre.

![Ajouter livres](img/Capture%20d’écran%20(19).png)

- **Détails d'un Livre :** utlilisez le bouton "Voir" pour afficher les détails d'un livre.

![Détails du livre](img/Capture%20d’écran%20(22).png)

- **Modifier un Livre :** Utilisez le bouton "Modifier" dans la liste des livres pour modifier.
![Modifier un livre](img/Capture%20d’écran%20(23).png)

- **Supprimer un Livre :** Utilisez le bouton "Supprimer" pour retirer un livre.

Pour supprimer un livre , il suffit de cliquer sur le bouton "supprimer" qui s'affiche sur la liste des livres pour retirer un livre de la liste.

- **Rechercher :** Utilisez la barre de recherche pour filtrer les livres avec  les auteurs.

![Rechercher un livre](img/Capture%20d’écran%20(24).png)

- **Listes des livres :** Affichage de la liste des livres.

![liste des livres](img/Capture%20d’écran%20(20).png)

![suite de la liste des livres](<img/Capture d’écran (25).png>)

- **Pagination des résultats :** Pagination des résultats dans les listes de livres et d'auteurs.Ici quand la liste des livres atteint 4 , le prochain livre qui sera ajouter se positionne sur une autre liste et c'est grace à l'icone de pagination qu'on arrive à ouvrir cette liste.
![Icone de Pagination](<img/Capture d’écran (21).png>)

## Contributions:

Les contributions sont les bienvenues. Veuillez soumettre un pull request pour toute amélioration ou correction. Assurez-vous de suivre les bonnes pratiques de développement et de tester vos modifications.

## work

Réalisé par [Enock KPADJOUDA](LICENSE).

