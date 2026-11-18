# TFA4 – CodeIgniter POS System with Sessions and Authentication

## Project Description

This project is an enhanced version of the Point-of-Sale (POS) System developed for **IT0049 – Web System Technologies**.

Building upon TFA3, this activity implements user authentication, password hashing, session management, and route protection using **CodeIgniter 4, PHP, and MySQL**.

The system requires users to log in before accessing Customer Accounts and User Accounts.

## Features

- **Login System** – Authenticates registered users using their username and password.
- **Password Hashing** – Uses `password_hash()` to securely store passwords and `password_verify()` to validate login credentials.
- **Session Management** – Maintains the user's authenticated state during navigation.
- **Authentication Filter** – Prevents unauthenticated users from accessing protected pages.
- **Logout System** – Destroys the current session and redirects to the login page.
- **Customer Accounts** – Provides customer record management using CRUD operations.
- **User Accounts** – Allows staff account creation, editing, and avatar uploads.
- **MySQL Database** – Stores customer information, user records, roles, and hashed passwords.

## Technologies Used

- CodeIgniter 4
- PHP
- MySQL
- HTML and CSS
- Bootstrap 5 (Login Page)
- XAMPP
- phpMyAdmin

## Database

**Database Name:** `pos_tfa4_db`

**Tables:**
- `customers`
- `users`

The `users` table includes a password column that stores hashed passwords.

## Authentication Workflow

1. The user opens the login page.
2. The user enters a username and password.
3. The system retrieves the matching user record.
4. The entered password is verified against the stored hash.
5. Upon successful authentication, the system creates a session.
6. The authenticated user can access protected Customer and User Accounts pages.
7. Logging out destroys the session and redirects to the login page.

## Installation and Setup

1. Download or clone the GitHub repository.
2. Place the project folder inside the XAMPP `htdocs` directory.
3. Start Apache and MySQL using XAMPP.
4. Create a MySQL database named `pos_tfa4_db`.
5. Import the provided SQL database export or run the provided migrations and seeders.
6. Configure the `.env` file with your local database credentials and application base URL.
7. Install PHP dependencies using `composer install` if necessary.
8. Open the application in your browser.

**Local URL:**

`http://localhost/deGuzman/tfa4/`

**Login URL:**

`http://localhost/deGuzman/tfa4/login`

## Security Features

- Hashed passwords using PHP's `password_hash()`.
- Password verification using `password_verify()`.
- Authentication sessions.
- Session regeneration after successful login.
- Protected routes using a CodeIgniter Filter.
- Session destruction during logout.
- CSRF tokens in authentication and user creation forms.

## Testing

The following functionality should be verified before submission:

- Login with valid credentials.
- Login with invalid credentials.
- Access protected pages while logged out.
- Access protected pages while logged in.
- Create new users with hashed passwords.
- Logout and verify that the session is destroyed.

## Submission Links

**GitHub Repository:** https://github.com/WanderingLukas/IT0049-1st-SY20262027-Technical-Activities/tree/714fe23ab405081e3a6986f65dc740f6ac54eeb8/tfa4

**Hosted Website:** https://itlukashtfa4.infinityfree.me/


## Academic Information

**Course:** IT0049 – Web System Technologies

**Activity:** Technical Formative Assessment 4

**Title:** Who's Allowed In? Sessions and Authentication

**Framework:** CodeIgniter 4

---

Developed as part of the IT0049 Web System Technologies course.

Additional Info: Database SQL is located in the `database` folder of the project inside the app/Database/"pos_tfa4_db.sql".
