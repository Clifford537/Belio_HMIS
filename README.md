# NFyom HMIS - Laravel Nova & Laravel Forge

HMIS (Hospital Management Information System) is a Laravel application built with Laravel Nova for administration and Laravel Forge for server management. It provides a comprehensive solution for managing hospital operations efficiently.

## Features

- **User Management**: Manage users with different roles and permissions.
- **Patient Management**: Track patient records, appointments, and medical history.
- **Doctor Management**: Manage doctor information, schedules, and appointments.
- **Reports and Analytics**: Generate reports and analyze data for insights into hospital operations.

## Installation

1. **Clone the repository:**

    ```bash
    git clone <repository-url>
    ```

2. **Navigate to the project directory:**

    ```bash
    cd nfyom-hmis
    ```

3. **Install dependencies:**

    ```bash
    composer install
    ```

4. **Copy the `.env.example` file to `.env`:**

    ```bash
    cp .env.example .env
    ```

5. **Generate application key:**

    ```bash
    php artisan key:generate
    ```

6. **Configure your database connection in the `.env` file:**

    ```plaintext
    DB_CONNECTION=mysql
    DB_HOST=127.0.0.1
    DB_PORT=3306
    DB_DATABASE=your_database
    DB_USERNAME=your_username
    DB_PASSWORD=your_password
    ```

7. **Migrate and seed the database:**

    ```bash
    php artisan migrate --seed
    ```

8. **Install Laravel Nova:**

    ```bash
    php artisan nova:install
    ```

9. **Install Laravel Forge:**

    ```bash
    php artisan forge:install
    ```

10. **Serve the application:**

    ```bash
    php artisan serve
    ```

11. **Visit** [http://localhost:8000](http://localhost:8000) **in your web browser to access the application.**

## Configuration

- **Environment Variables**: Configure environment variables in the `.env` file for database connection, mail settings, and other application settings.
- **Roles and Permissions**: Define roles and permissions using Laravel Nova's authorization system to control access to different parts of the application.

