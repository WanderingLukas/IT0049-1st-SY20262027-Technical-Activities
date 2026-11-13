# [TECHNICAL] [AI-ASSISTED] Technical Formative Assessment 3: Module 3

# TFA3 – CodeIgniter POS System with Forms, Validation, and File Upload

## Project Description

This project is an improved version of the Point-of-Sale (POS) website developed using **CodeIgniter 4, PHP, and MySQL** for the IT0049 – Web System Technologies course.

Building upon TFA2, this activity extends the database-driven POS application by implementing forms, server-side validation, editing functionality, and user profile picture uploads.

It demonstrates how CodeIgniter handles form submissions, validates user input, creates and updates database records, and processes uploaded images using the MVC (Model-View-Controller) architecture.

## Features

The website consists of four main pages, with additional forms for creating and editing records:

- **Home Page (`/`)** – Displays a welcome message and navigation links.
- **About Page (`/about`)** – Provides information about the POS system.
- **Customer Accounts (`/customers`)** – Displays customer names, emails, and phone numbers retrieved from MySQL, with options to add and edit customer records.
- **User Accounts (`/users`)** – Displays staff usernames, full names, roles, and profile pictures, with options to add and edit user records.

### Additional Features

- **New Customer Form (`/customers/new`)** – Allows users to register customers with required full names and valid email addresses.
- **New User Form (`/users/new`)** – Allows users to create staff accounts with required full names and unique usernames.
- **Edit Customer (`/customers/edit/{id}`)** – Allows modification of existing customer information using pre-filled forms.
- **Edit User (`/users/edit/{id}`)** – Allows modification of existing usernames and full names.
- **Form Validation** – Rejects invalid or missing information, displays validation errors, and preserves previously entered values.
- **Avatar Upload** – Allows users to upload JPG or PNG profile pictures with a maximum file size of 2 MB.
- **Image Processing** – Prepares uploaded profile pictures as 200 × 200 pixel thumbnails.
- **Avatar Display** – Displays uploaded profile pictures on the User Accounts page and uses a default placeholder image when no avatar is available.

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

The project uses a MySQL database named `pos_tfa3_db`, containing two main tables:

- **customers** – Stores customer IDs, full names, emails, phone numbers, and creation dates.
- **users** – Stores user IDs, usernames, full names, roles, creation dates, and avatar filenames.

CodeIgniter Models (`CustomerModel` and `UserModel`) handle database operations, including retrieving, inserting, and updating records.

Uploaded profile pictures are stored in `public/uploads/avatars/`, while only their generated filenames are saved in the `users.avatar` database column.

## How to Run

1. Install XAMPP and Composer.
2. Clone or download the project into your XAMPP `htdocs` directory.
3. Open the project folder in Visual Studio Code.
4. Run `composer install` to install the required dependencies.
5. Start Apache and MySQL using XAMPP.
6. Open phpMyAdmin and create a MySQL database named `pos_tfa3_db`.
7. Import the project's SQL database export.
8. Configure the database connection and `app.baseURL` in the `.env` file.
9. Make sure the `public/uploads/avatars/` directory exists and is writable.
10. Open the project in your browser using the configured local URL.

## Live Website

https://itlukashtfa3.infinityfree.me/

## Developer

**Lukexander Virgilius P. De Guzman**

FEU Institute of Technology

IT0049 – Web System Technologies

## Note

This project is for educational purposes only. Unlike TFA2, which primarily retrieves and displays records from MySQL, TFA3 introduces interactive forms, input validation, database record creation and editing, and profile picture uploads.

It demonstrates CodeIgniter's form handling, validation, file upload, image processing, and MVC architecture.

Although the application supports basic customer and user account management, it is not a fully functional POS transaction system.