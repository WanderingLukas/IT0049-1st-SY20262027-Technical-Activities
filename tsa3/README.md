# TSA3 – Tasks for Today Management System in Laravel

## Project Description

This project is a Laravel-based version of the Tasks for Today Management System developed for **IT0049 – Web System Technologies**.

Building upon TSA1, this activity rebuilds the application using **Laravel 13, PHP, MySQL, Eloquent ORM, and Blade Templates**.

The system allows users to view today's tasks, browse all scheduled tasks, access user profile information, and learn about the application.

## Features

- **Welcome Page** – Displays only tasks scheduled for the current date.
- **Task List** – Displays all recorded tasks ordered by date.
- **User Profile** – Displays the user's username, full name, and email address.
- **About Page** – Provides information about the application and its developer.
- **Eloquent ORM** – Retrieves and filters records from the MySQL database.
- **Database Migrations** – Creates database tables using Laravel migrations.
- **Database Seeders** – Populates the database with sample tasks and user information.
- **Blade Templates** – Displays dynamic content using Laravel's templating engine.
- **Bootstrap 5** – Provides a responsive website interface.

## Technologies Used

- Laravel 13
- PHP 8.5
- MySQL
- Eloquent ORM
- Blade Templates
- HTML and CSS
- Bootstrap 5
- Composer
- XAMPP
- phpMyAdmin

## Database

**Database Name:** `tsa3_db`

**Tables:**
- `tasks`
- `users`

The `tasks` table stores task titles, statuses, scheduled dates, and timestamps.

The `users` table stores the username, full name, email address, and timestamps.

The database contains **8 sample tasks across 3 different dates and exactly 1 user record**, populated using Laravel seeders.

## Website Access

**Local Website:** http://127.0.0.1:8000/

**Available Pages:**

- **Welcome Page:** http://127.0.0.1:8000/
- **Task List:** http://127.0.0.1:8000/tasks
- **User Profile:** http://127.0.0.1:8000/profile
- **About Page:** http://127.0.0.1:8000/about

**Note:** The local website requires the Laravel development server to be running using `php artisan serve`.

## Testing

The following functionality has been verified:

- Welcome page displays today's 4 tasks.
- Task List displays all 8 tasks ordered by date.
- Task statuses display Pending or Completed.
- Profile page retrieves the single user record from MySQL.
- About page displays project and developer information.
- Navigation links connect the four pages.

## Submission Links

**GitHub Repository:** [Insert GitHub URL]

**Hosted Website:** [Insert Hosted Website URL]

## Academic Information

**Course:** IT0049 – Web System Technologies

**Activity:** Technical Summative Assessment 3

**Title:** Tasks for Today Management System in Laravel

**Framework:** Laravel 13

**Developer:** Lukexander Virgilius De Guzman

---

Developed as part of the IT0049 Web System Technologies course.

**Additional Information:** Database migrations and seeders are located in the `database/migrations/` and `database/seeders/` directories.
