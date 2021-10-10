## Test `Builder::cursor()`

To run this test:

1. Check out the project.

2. Copy the `.env` file:

    ```
    php -r "file_exists('.env') || copy('.env.example', '.env');"
    ```

3. Set up the SQL credentials, pointing to an empty database.

4. Run the migrations and seeder:

    ```
    php artisan migrate --seed
    ```

5. Run the actual test:

    ```
    php artisan test:cursor
    ```
