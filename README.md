# Final Task Fullstack Developer VIX Rakamin Academy at Investree

Building a Simple Blog Using laravel Blade and Laravel UI and Building rest api and oauth tokens using laravel framework and laravel passport

## Local installation

1. Clone the github repo:

    ```bash
    git clone https://github.com/adityatriand/task-5-fullstack.git
    ```
2. Go the project directory:

    ```bash
    cd task-5-fullstack
    ```
3. Install the project dependencies:
    ```bash
    composer install
    ```
4. Don't forget to copy .env.example to root folder and rename it as .env after that config like this:
   ```bash
    DB_CONNECTION=mysql
    DB_HOST=127.0.0.1
    DB_PORT=3306
    DB_DATABASE=db_task_investree
    DB_USERNAME=root
    DB_PASSWORD=
   ```
5. Run your XAMPP and create an empty Database named db_task_investree
6. Create tables into database using Laravel migration:
    ```bash
    php artisan migrate
    ```
7. Seed your database with this command:
    ```bash
    php artisan db:seed
    ```
8. Create the application key:
    ```bash
    php artisan key:generate
    ```
9. Create the encryption keys needed to generate secure access tokens:
    ```bash
    php artisan passport:install
    ```
9. Start the laravel server:
    ```bash
    php artisan serve
    ```
10. Lastly, open your browser and type localhost:8000, and enjoy the feature
## Account Test
You can use this account on your local to try available feature from this app after finished install

email: test@example.com
</br>password: password
