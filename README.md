# Laravel Fortify Project

This project is a Laravel application integrated with Laravel Fortify for authentication features.

## Installation

1. Clone the repository:

    ```sh
    git clone <repository-url>
    cd laravel-fortify-01
    ```

2. Install dependencies:

    ```sh
    composer install
    npm install
    ```

3. Copy the example environment file and configure the environment variables:

    ```sh
    cp .env.example .env
    php artisan key:generate
    ```

4. Run the database migrations:

    ```sh
    php artisan migrate
    ```

5. Start the development server:
    ```sh
    php artisan serve
    ```

## Features

-   User Registration
-   User Login
-   Email Verification
-   Password Reset
-   Two-Factor Authentication
-   Dark Mode

## Configuration

The authentication views are defined in the `FortifyServiceProvider`:

```php
// filepath: d:\VS_COde\Laravel_25\laravel-fortify-01\app\Providers\FortifyServiceProvider.php
// ...existing code...
Fortify::registerView(function () {
    return view('auth.register');
});

Fortify::loginView(function () {
    return view('auth.login');
});

Fortify::verifyEmailView(function () {
    return view('auth.verifiedEmail');
});

Fortify::requestPasswordResetLinkView(function () {
    return view('auth.reset_password');
});

Fortify::resetPasswordView(function () {
    return view('auth.reset_password_change');
});
// ...existing code...
```

## Rate Limiting

Rate limiting is configured for login and two-factor authentication:

```php
// filepath: d:\VS_COde\Laravel_25\laravel-fortify-01\app\Providers\FortifyServiceProvider.php
// ...existing code...
RateLimiter::for('login', function (Request $request) {
    $throttleKey = Str::transliterate(Str::lower($request->input(Fortify::username())) . '|' . $request->ip());

    return Limit::perMinute(5)->by($throttleKey);
});

RateLimiter::for('two-factor', function (Request $request) {
    return Limit::perMinute(5)->by($request->session()->get('login.id'));
});
// ...existing code...
```

## Laravel Fortify: Complete Guide

https://chatgpt.com/share/67d6cd37-8110-8001-aec9-fa2c88332ed1
