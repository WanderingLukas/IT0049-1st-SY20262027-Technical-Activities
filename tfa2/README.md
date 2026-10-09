# [TECHNICAL] [AI-ASSISTED] Technical Fomative Assessment 2: Module 2

# TFA2 – CodeIgniter POS System with MySQL Database

## Project Description
This project is an improved version of the basic Point-of-Sale (POS) website developed using **CodeIgniter 4, PHP, and MySQL** for the IT0049 – Web System Technologies course.

Building upon TFA1, this activity replaces static PHP arrays with a real MySQL database. It demonstrates how CodeIgniter Models retrieve records from a database using Query Builder and display them through the MVC (Model-View-Controller) architecture.

## Features
The website consists of four pages:

- **Home Page (`/`)** – Displays a welcome message and navigation links.
- **About Page (`/about`)** – Provides information about the POS system.
- **Customer Accounts (`/customers`)** – Retrieves and displays customer names, emails, and phone numbers from the MySQL database.
- **User Accounts (`/users`)** – Retrieves and displays staff usernames, full names, and roles from the database.

## Programs Used
- PHP
- CodeIgniter 4
- MySQL
- phpMyAdmin
- HTML
- Composer
- XAMPP (Apache and MySQL)
- Visual Studio Code

## Database
The project uses a MySQL database containing two tables:

- **customers** – Stores customer IDs, full names, emails, phone numbers, and creation dates.
- **users** – Stores user IDs, usernames, full names, and creation dates.

CodeIgniter Models (`CustomerModel` and `UserModel`) retrieve records using the `findAll()` method.

## How to Run
1. Install XAMPP and Composer.
2. Clone or download the project into your XAMPP `htdocs` directory.
3. Open the project folder in Visual Studio Code.
4. Run `composer install` to install dependencies.
5. Start Apache and MySQL using XAMPP.
6. Open phpMyAdmin and create a MySQL database.
7. Import the project's SQL database export.
8. Configure the database connection and `app.baseURL` in the `.env` file.
9. Open the project in your browser using the configured local URL.

## Live Website
https://itlukashtfa2.infinityfree.me/

## Developer
**Lukexander Virgilius P. De Guzman**

FEU Institute of Technology

IT0049 – Web System Technologies

## Note
This project is for educational purposes only. Unlike TFA1, which uses static PHP arrays, TFA2 retrieves information from a MySQL database using CodeIgniter Models and Query Builder.

It demonstrates database integration and MVC architecture but is not a fully functional POS transaction system.
