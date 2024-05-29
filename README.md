# SysCube Blog

**Description:**  
“SysCube Blog” is a fictional blog website that consists of articles related to technology. It is a full-stack blog application with basic CRUD functionality using Laravel & CSS Bootstrap.

## Features

   - User Authentication and Authorization
   - Users will be able to log in to the system.
   - Users will be able to create, read(all the posts), update, delete(own posts) and also like and comment on them.
   - The user is blocked temporarily if login attempt fails three times.
   - Data validation and sanitization.

## Requirements

- **XAMPP Server**
- **Laravel**
- **CSS/Bootstrap**

## Setup Instructions

### Cloning the Repository

1. Clone the repository to your local machine (typically at htdocs):
    ```bash
    git clone https://github.com/raazkhnl/syscube-blog.git
    cd syscube-blog
    ```

### App Setup (Laravel)

2. Navigate to the Laravel project directory:
    ```bash
    cd backend
    ```

3. Install the necessary dependencies:
    ```bash
    composer install
    ```

4. Copy the `.env.example` file to `.env` and configure your environment variables:
    ```bash
    cp .env.example .env
    ```

5. Generate the application key:
    ```bash
    php artisan key:generate
    ```

6. Set up the database:
    - Create a database named `syscube_blog` in MySQL.
    - Update the `.env` file with your database credentials:
        ```
        DB_CONNECTION=mysql
        DB_HOST=127.0.0.1
        DB_PORT=3306
        DB_DATABASE=syscube_blog
        DB_USERNAME=root
        DB_PASSWORD=
        ```

7. Run the migrations to create the database tables:
    ```bash
    php artisan migrate
    ```

8. Seed the database with sample data (optional):
    ```bash
    php artisan db:seed
    ```
     ```bash
    user@user.com : 12345678
    admin@admin.com : 12345678
    ```
9. Create Storage link:
    ```bash
    php artisan storage:link
    ```   

10. Start the Laravel development server:
    ```bash
    php artisan serve
    ```

### Running the Application

11. Open your web browser and navigate to the Laravel server URL (typically `http://127.0.0.1:8000`).

## Troubleshooting

- Ensure that the MySQL server is running via XAMPP.
- Double-check your `.env` file for correct database credentials.
- If migrations fail, try running:
    ```bash
    php artisan migrate:refresh --seed
    ```
- If images fail, try running:
    ```bash
    php artisan storage:link
    ```


## License

This project is licensed under the MIT License. See the [LICENSE](LICENSE) file for details.

## Author

RaaZ Khanal  
[raazkhnl@gmail.com](mailto:raazkhnl@gmail.com)
