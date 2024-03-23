<img src="screenshots/insta-clon login.png"/>
# Insta-Clone

## A clone of the instagram

This is just a simple demo teaching the power of laravel with Jetstream and tailwind css.

## How to install

### 1 Clone this repository

### 2. Run the following command

```
npm install
npm run dev
```

but if you wish to contribute to this project and want to work add your own code, then, you will need to run the following command
```npm run watch```

### 3. Install the the laravel dependencies

with the following command (Note: make sure you run this command on another terminal without closing the previous terminal)
```composer install```

### 4. Migrate your database

You will need to install and migrate the database tables. with this you may need to update the .env file with your database credentials after which you will need to run the following command

``` php artisan migrate ```
### 5. start your server

```php artisan serve```

### 6. Generate Laravel Key (Optional)

Sometimes you may get an error for the first time asking you to generate a key. simply run the following command.

``` php artisan key:generate ```
You can checkout some laravel documentations [here](./Laravel-doc.md)
