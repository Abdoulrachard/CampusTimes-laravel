## CAMPUSTIMES 

## Description

Le projet campustimes est un projet qui consiste à déployer une application capable de gérer la planification des emplois du temps.

## Preview

### - Authentification

![Auth Screenshot](./docs/auth.png)

### - Inscription

![Auth Screenshot](./docs/register.png)

### Dashboard (Admin)

![Dashboard Admin Screenshot](./docs/dash.png)

### Dashboard (Étudiant)

![Dashboard Étudiant Screenshot](./docs/user-dashboard.png)

### Dashboard (Professeur)

![Dashboard Professeur Screenshot](./docs/user-dashboard.png)

### Liste des emplois du temps (Admin)

![Liste Emplois du Temps Screenshot](./docs/timetable.png)

### Visualisation d'un emploi du temps

![Visualisation Emploi du Temps Screenshot](./docs/view-timetable.png)

## DEMO

Vous pouvez tester le démo de l'application sur la version en ligne avec ce compte administrateur :

- Email : johndoe@example.com
- Mot de passe : admin007

## Installation

Pour récupérer et lancer l'application sur votre machine, assurez-vous d'abord d'avoir PHP et Composer installés. Ensuite, procédez aux étapes suivantes :

```bash
git clone https://github.com/Abdoulrachard/Campustimes-laravel.git
```
```bash
cd campustimes-laravel
```

```bash	
composer install
```
```bash 
cp .env.example .env 
```
```bash	
php artisan key:generate
```
```bash	
php artisan migrate
```

```bash	
php artisan serve
```
L'application va démarrer sur l'adresse http://localhost:8000 :  copiez cette adresse et ouvrez-la dans le navigateur.
L'application est maintenant lancée !

Si vous avez besoin d'aide, contactez-moi directement à [abdoulrachard@gmail.com](mailto:abdoulrachard@gmail.com).


