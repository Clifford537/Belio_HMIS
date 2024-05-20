# Belio HMIS - Hospital Management Information System

Belio HMIS is a comprehensive Hospital Management Information System built using Laravel with InfyOm for rapid development. It offers a suite of features to efficiently manage hospital operations.

## Features

- **User Management**: Administer users with various roles and permissions.
- **Patient Management**: Track patient records, appointments, and medical history.
- **Doctor Management**: Manage doctor information, schedules, and appointments.
- **Inventory Management**: Monitor medical supplies, equipment, and stock levels.
- **Billing and Invoicing**: Generate invoices and manage billing for services provided.
- **Reports and Analytics**: Generate reports and analyze data for insights into hospital operations.

## Installation

1. **Clone the repository:**

    ```bash
    git clone https://github.com/Clifford537/Belio_HMIS.git
    ```

2. **Navigate to the project directory:**

    ```bash
    cd Belio_HMIS
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

7. **Generate necessary files using InfyOm:**

    ```bash
    php artisan infyom:install
    ```

8. **Migrate and seed the database:**

    ```bash
    php artisan migrate --seed
    ```

9. **Serve the application:**

    ```bash
    php artisan serve
    ```

10. **Visit** [http://localhost:8000](http://localhost:8000) **in your web browser to access the application.**

## Configuration

- **Environment Variables**: Configure environment variables in the `.env` file for database connection, mail settings, and other application settings.
- **Roles and Permissions**: Define roles and permissions to control access to different parts of the application.
- **Customization**: Customize the application according to your specific requirements by modifying resources, views, and controllers.


## Contributors

- [Clifford Mukosh](https://github.com/Clifford537) 