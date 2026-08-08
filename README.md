# Hello Laravel – Professional Laravel Development Environment

## 1. Project Title

**Hello Laravel – Professional Laravel Development Environment**

## 2. Introduction

Laravel is a PHP web application framework used to develop modern web applications. It provides developers with an organized structure and tools that make web application development easier and more efficient.

The purpose of this project is to configure a Laravel development environment and create a basic Laravel application for the Week 2 laboratory activity in ITST 302 – Client-Server Technologies.

This project demonstrates the installation and verification of PHP, Composer, Laravel, Git, MySQL, and Visual Studio Code. It also demonstrates how to create, run, customize, document, and manage a Laravel application using Git.

## 3. Objectives

The objectives of this activity are:

1. Install and verify PHP.
2. Install and verify Composer.
3. Install and verify Laravel.
4. Install and verify Git.
5. Install and verify MySQL.
6. Configure Visual Studio Code for Laravel development.
7. Create and run a Laravel application locally.
8. Customize the Laravel homepage.
9. Document the development process.
10. Practice Git version control.
11. Upload the project to GitHub.

## 4. Development Environment

The following software and tools were used:

| Software           | Purpose                          |
| ------------------ | -------------------------------- |
| Windows 11         | Operating System                 |
| PHP                | Server-side programming language |
| Composer           | PHP dependency manager           |
| Laravel            | PHP web application framework    |
| Git                | Version control                  |
| MySQL              | Database management system       |
| Visual Studio Code | Code editor                      |

### Verification Commands

PHP:

```bash
php -v
```

Composer:

```bash
composer -V
```

Laravel:

```bash
laravel -V
```

Git:

```bash
git --version
```

MySQL:

```bash
mysql --version
```

## 5. Installation and Setup

### PHP

PHP was installed and verified using the following command:

```bash
php -v
```

The command displayed the installed PHP version, confirming that PHP was properly installed and accessible through the command line.

### Composer

Composer was installed to manage PHP dependencies and Laravel packages.

The installation was verified using:

```bash
composer -V
```

### Laravel

Laravel was installed and verified using:

```bash
laravel -V
```

This confirmed that the Laravel installer was available.

### Git

Git was installed for version control.

The installation was verified using:

```bash
git --version
```

### MySQL

MySQL was installed as the database management system for Laravel development.

The installation was verified using:

```bash
mysql --version
```

### Visual Studio Code

Visual Studio Code was used as the main code editor for the Laravel project.

The Laravel project was opened in Visual Studio Code so that the application files could be edited and managed.

### Creating the Laravel Project

The Laravel project was created using:

```bash
composer create-project laravel/laravel hello-laravel
```

The project was created inside the following folder:

```text
hello-laravel
```

### Running the Laravel Application

The Laravel development server was started using:

```bash
php artisan serve
```

The application was then opened in a web browser using:

```text
http://127.0.0.1:8000
```

The Laravel application successfully loaded in the browser.

## 6. Project Structure

The main Laravel project contains the following important directories and files:

```text
hello-laravel/
├── app/
├── bootstrap/
├── config/
├── database/
├── public/
├── resources/
├── routes/
├── storage/
├── tests/
├── vendor/
├── .env
├── .gitignore
├── artisan
├── composer.json
├── composer.lock
└── README.md
```

### app

The `app` directory contains the main application code, including controllers, models, and other classes.

### routes

The `routes` directory contains the application's route definitions.

### resources

The `resources` directory contains views and other frontend resources.

### public

The `public` directory contains files that are publicly accessible by the application.

### config

The `config` directory contains Laravel configuration files.

### database

The `database` directory contains database migrations, seeders, and factories.

### storage

The `storage` directory contains generated files, logs, and cached files.

## 7. Problems Encountered

During the Laravel setup, several problems were encountered.

### Problem 1: PHP Configuration

One problem encountered during the setup was related to the PHP configuration. Laravel and Composer require PHP to be correctly installed and accessible from the command line.

### Solution

The PHP installation was checked using:

```bash
php -v
```

The PHP configuration was then corrected so that the PHP command could be used from the terminal.

### Problem 2: Database Driver Error

A database connection problem occurred when running Laravel database commands. The error indicated that the required database driver could not be found.

### Solution

The PHP MySQL extension was enabled in the PHP configuration. After enabling the required extension, the Laravel application was able to communicate with MySQL.

### Problem 3: Laravel Database Configuration

Another problem involved the Laravel database configuration. The application initially attempted to use a database configuration that was not available.

### Solution

The Laravel `.env` configuration was checked and updated so that the application could use the correct database connection.

## 8. Screenshots

The project documentation includes screenshots showing the following:

1. PHP version verification.
2. Composer version verification.
3. Laravel version verification.
4. Git version verification.
5. MySQL version verification.
6. Visual Studio Code with the Laravel project.
7. Laravel project running with `php artisan serve`.
8. Laravel homepage displayed in the browser.
9. Laravel project files and folders.
10. Git/GitHub repository.

The screenshots provide evidence that the required development environment was successfully configured.

## 9. Reflection

This activity helped me understand how to set up a complete Laravel development environment.

I learned how PHP, Composer, Laravel, Git, MySQL, and Visual Studio Code work together when developing a web application.

I also learned how to verify software installations using command-line commands such as `php -v`, `composer -V`, `laravel -V`, `git --version`, and `mysql --version`.

Creating and running the Laravel application helped me understand the basic workflow of Laravel development. The `php artisan serve` command allowed me to run the application locally and view it through a web browser.

The database configuration problems also helped me understand that Laravel depends on the correct PHP extensions and database settings when communicating with MySQL.

Git was also an important part of the activity because it allows developers to track changes and manage their source code. Uploading the project to GitHub also provides a way to store and share the project.

Overall, this activity gave me practical experience in setting up Laravel, troubleshooting configuration problems, running a web application, and managing the project using Git.

## 10. References

Laravel Documentation:
https://laravel.com/docs

PHP Documentation:
https://www.php.net/docs.php

Composer Documentation:
https://getcomposer.org/doc/

Git Documentation:
https://git-scm.com/doc/

Visual Studio Code Documentation:
https://code.visualstudio.com/docs

## 11. Student Information

**Student Name:** [REPLACE WITH YOUR NAME]

**Student Number:** [REPLACE WITH YOUR STUDENT NUMBER]

**Course:** ITST 302 – Client-Server Technologies

**Section:** [REPLACE WITH YOUR SECTION]

**Activity:** Week 2 – Laravel Development Environment

## License

This project was created for educational purposes as part of the ITST 302 – Client-Server Technologies Week 2 laboratory activity.
