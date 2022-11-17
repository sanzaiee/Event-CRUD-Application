### Environment

-   **[Laravel v9](https://laravel.com/docs/9.x)**
-   **[phpv8.0.2] (https://www.php.net/releases/8.1/en.php)**
-   **[Composer v2](https://getcomposer.org/)**
-   **[Mysql v8](https://www.mysql.com/)**
-   **[Node v 16](https://nodejs.org/en/)**

### Installation Steps

-   **Clone Repository** `git clone <GIT_URL>`
-   **Copy .env.example as .env**
-   **Configure database**
-   **Install composer dependencies** `composer install`
-   **Generate Key** `php artisan key:generate`
-   **Run migration** `php artisan migrate`
-   **Install Npm** `npm install`
-   **Generate Assets** `npm run dev` **In one terminal**
-   **Server the Project** `php artisan serve` **In another terminal**

**NOTE: Run `npm run dev` & `php artisan serve` simutaneously to keep on complining vite else gives error for vite mainfest**

### Description And Project Consist of

-   **MVC Architecture**
-   **Used Repository pattern to separate data access layer and business logic**
-   **Used cache to prevent unnecessary database hit every time**
-   **Backend and Client Side Validation**
