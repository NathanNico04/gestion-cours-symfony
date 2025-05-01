# Site de gestion de cours en Symfony

## Mon premier programme

- Configuration de l'environnement de programmation Docker et phpStorm (changer le mail, le nom, le gooduser et le uid), `id` dans le terminal pour connaître le good user et le uid

- Pour créer un projet, aller dans le container avec  `docker exec-ti nomContainer bash` ensuite `symfony new nomprojet --webapp`

- Lancer un server local (se rendre dans le dossier du projet) `symfony server:start--no-tls--listen-ip=0.0.0.0--d`

- Visualiser le site `http://localhost:5000` sur chrome

- Créer un contrôleur `symfony console make:controller nomController`

- Ajout d'une nouvelle route dans `Controller/HelloController.php`


---


## Utilissation rapide d'une base de données 

#### Programmation de l'entité `Cours`

| Nom         | Type     |
| ----------- | -------- |
| Semestre    | integer  |
| nom         | string   |
| Descriptio  | text     |

- Création de l'entité, mettre la ligne `DATABASE_URL="sqlite:///%kernel.project_dir%/var/data_%kernel.environment%.db"` en enlevant le `#` pour accéder a une base de donnée sqlite ensuite lancer la commande `symfony console doctrine:database:create`  pour ajouter une doctrine, puis créer l'entité avec `symfony console make:entity nomEntite`

- Création de la table dans la base de données, création d'un fichier migration `symfony console make:migration` et ensuite création de la table `symfony console doctrine:migrations:migrate` (à faire lors de la récupération des fichiers via git)

- Création d'une fixture, installer le package fixture `symfony composer require orm-fixtures --dev`, ensuite `symfony console make:fixture` et pour finir charger les fixtures `symfony console doctrine:fixtures:load`
