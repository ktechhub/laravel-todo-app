# Laravel to do app with login and register.

## About Laravel

Laravel is a web application framework with expressive, elegant syntax. We believe development must be an enjoyable and creative experience to be truly fulfilling. Laravel takes the pain out of development by easing common tasks used in many web projects, such as:

- [Simple, fast routing engine](https://laravel.com/docs/routing).
- [Powerful dependency injection container](https://laravel.com/docs/container).
- Multiple back-ends for [session](https://laravel.com/docs/session) and [cache](https://laravel.com/docs/cache) storage.
- Expressive, intuitive [database ORM](https://laravel.com/docs/eloquent).
- Database agnostic [schema migrations](https://laravel.com/docs/migrations).
- [Robust background job processing](https://laravel.com/docs/queues).
- [Real-time event broadcasting](https://laravel.com/docs/broadcasting).

Laravel is accessible, powerful, and provides tools required for large, robust applications.

## Check the live app

[http://ktechhub-todo-app.herokuapp.com/](http://ktechhub-todo-app.herokuapp.com/)


## Install and run the project

### Clone the project
`git clone https://github.com/ktechhub/laravel-todo-app.git`

### Composer install

`composer install`

### Copy the .env file
`cp .env.example .env`

### Create a database and update the database credentials
```php
DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=todo
DB_USERNAME=root
DB_PASSWORD=
```

### Run the migrations
`php artisan migrate`

### Run the seeder for the default user and todo items
`php artisan db:seed`

This creates a new user with the credentials below:

```
Email: kalkulus@ktechhub.com
Password: ktechhub
```

### Start the server

`php artisan serve`

The server is located at [http://127.0.0.1:8000](http://127.0.0.1:8000)

You can login with the credentials shown... 
