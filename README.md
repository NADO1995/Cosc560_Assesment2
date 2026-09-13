# COSC560 Assessment 3 Laravel Backend

GitHub Repository:

https://github.com/NADO1995/Cosc560_Assesment2

Student Name: Tshering Dorji  
Student ID: 220292677

## About

This project is the Laravel backend for COSC560 Assessment 3.

It is an extension of my Assessment 2 Laravel application. For Assessment 3, I created a new Git branch called `assessment3` and added Laravel Sanctum API authentication and API endpoints for the React TypeScript frontend.

The backend provides API functions to:

- View all posts
- View one post
- Create a post
- Edit a post
- Delete a post

## Technologies Used

- PHP
- Laravel
- Laravel Sanctum
- MySQL
- XAMPP
- Composer
- Git
- GitHub
- Visual Studio Code
- Postman

## Database

Database name:

```text
2026_UNE_COSC560_TsheringDorji
```

The database contains users, categories, posts and personal access tokens.

Seeded users are included for testing.

### Admin User

Email:

```text
admin@example.com
```

Password:

```text
password
```

### Normal User

Email:

```text
user@example.com
```

Password:

```text
password
```

## Laravel Sanctum

Laravel Sanctum is used to protect the API routes.

The admin user can log in through the API and receive an authentication token.

The token is sent in the Authorization header when the React frontend communicates with the Laravel backend.

## API Endpoints

The following API endpoints are available:

```text
GET /api/posts
```

Returns all posts.

```text
GET /api/posts/{id}
```

Returns one post.

```text
POST /api/posts
```

Creates a new post.

```text
PUT /api/posts/{id}
```

Updates an existing post.

```text
DELETE /api/posts/{id}
```

Deletes a post.

The login endpoint is:

```text
POST /api/login
```

## Validation

Validation is used when creating and updating posts.

Post fields include:

- Title
- Content
- Category
- Active status

## How to Run

1. Open the Laravel project in VS Code.

2. Start MySQL in XAMPP.

3. Open the terminal.

4. Install PHP dependencies if required:

```bash
composer install
```

5. Make sure the `.env` file contains the correct database settings.

Example:

```text
DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=2026_UNE_COSC560_TsheringDorji
DB_USERNAME=root
DB_PASSWORD=
```

6. Run the database migrations and seeders:

```bash
php artisan migrate --seed
```

7. Start the Laravel server:

```bash
php artisan serve
```

The Laravel backend should run at:

```text
http://127.0.0.1:8000
```

## Testing

The API endpoints were tested using Postman.

The following functions were tested successfully:

- Get all posts
- Get one post
- Create post
- Update post
- Delete post
- Sanctum login and authentication

The React frontend was also tested with the Laravel backend.

## Approach

I continued from my Assessment 2 Laravel project and created a new branch for Assessment 3.

I installed Laravel Sanctum and added API authentication. I then created API routes and controller functions for viewing, creating, updating and deleting posts.

After creating the API, I tested each endpoint using Postman. I then connected the Laravel backend to the React TypeScript frontend using the Fetch API and Sanctum token authentication.

## Challenges

One challenge was setting up Sanctum authentication correctly and making sure protected API routes accepted the token.

Another challenge was connecting the React frontend to the Laravel API and making sure the correct token was included in the Authorization header.

I also had to check the database connection and make sure the correct database name and seeded users were available.

Testing the API with Postman helped me find and fix these issues.