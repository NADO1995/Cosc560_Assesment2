

## COSC560 – Assignment 2

**GitHub Repository:**
https://github.com/NADO1995/Cosc560_Assesment2

**Student Name:** Tshering Dorji
**Student ID:** 220292677

---

## Project Overview

This project is a Laravel Admin Panel Application developed for COSC560 Assignment 2. The application allows an admin user to manage posts and categories.

The project extends the Laravel CRUD concepts by adding authentication, admin access control, Eloquent relationships, route model binding, factories and seeders, and a custom 404 page.

---

## Features

* Laravel authentication
* Admin-only access
* Post CRUD operations
* Category CRUD operations
* Post and Category relationship
* Post and User relationship
* Route model binding
* Form validation
* Factories and seeders
* Custom 404 page
* Fallback route
* Bootstrap interface

---

## Technologies Used

* PHP
* Laravel
* MySQL
* XAMPP
* Blade Templates
* Bootstrap
* Composer
* Git
* GitHub
* Visual Studio Code

---

## Authentication

The application contains two types of users:

### Admin User

Email: [admin@example.com](mailto:admin@example.com)
Password: password

The admin user can log in and access the admin panel.

### Normal User

Email: [user@example.com](mailto:user@example.com)
Password: password

The normal user is restricted from accessing the admin application.

An `AdminMiddleware` is used to check the user type and protect the admin routes.

---

## Posts

The admin user can perform the following operations:

* Create a post
* View posts
* Edit a post
* Delete a post

Each post contains:

* Title
* Content
* User
* Category
* Active status

When creating or editing a post, the admin can select a category from the available categories.

---

## Categories

The admin user can also manage categories.

The following operations are available:

* Create a category
* View categories
* Edit a category
* Delete a category

Each category contains a name and content.

---

## Database Relationships

Eloquent relationships are used between the models.

### Post Model

A Post belongs to a Category.

A Post belongs to a User.

### Category Model

A Category has many Posts.

Foreign keys are used in the posts table to connect posts with users and categories.

---

## Factories and Seeders

Factories and seeders are used to generate sample data for testing.

The database contains:

* 2 users
* 5 categories
* 10 posts

The two users include one admin user and one normal user.

---

## Route Model Binding

Route model binding is used for both Posts and Categories.

This allows Laravel to automatically find the correct Post or Category when viewing, editing, updating or deleting a record.

---

## Custom 404 Page

A custom 404 page was created for invalid URLs.

A fallback route displays the custom Page Not Found screen when a requested route does not exist.

The page also contains a button that allows the user to return to the admin section.

---

## Validation

Validation is used when creating and updating posts and categories.

For Posts:

* Title is required and limited to 50 characters
* Content is required
* Category is required
* Active status must be Yes or No

For Categories:

* Name is required and limited to 50 characters
* Content is required

---

## Testing

The application was manually tested in the browser.

The following functions were tested:

* Admin login
* Normal user access restriction
* Create Post
* View Post
* Edit Post
* Delete Post
* Create Category
* View Category
* Edit Category
* Delete Category
* Category selection for posts
* Route model binding
* Custom 404 page
* Fallback route

The admin user was able to access the admin panel successfully, while the normal user was restricted from accessing the application.

---

## Approach

I started by setting up the Laravel project and database. I created the required migrations, models, factories and seeders for users, posts and categories.

After setting up the database, I created the controllers and Blade views for managing posts and categories. I then added the relationships between Post, Category and User.

Laravel authentication was used for login functionality. I created admin middleware to restrict the admin section so that only the admin user can access it.

Finally, I added route model binding and a custom fallback page and manually tested the application.

---

## Challenges Faced

One of the challenges was restricting access so that only the admin user could access the admin section. This was solved by creating `AdminMiddleware` and checking the user type.

Another challenge was correctly connecting posts with categories and users. This was solved by using foreign keys in the posts table and Eloquent relationships in the models.

I also had to make sure route model binding worked correctly for both posts and categories. Testing each CRUD operation helped identify and fix issues during development.

---
## Login Details

### Admin User
Email: admin@example.com
Password: password

### Normal User
Email: user@example.com
Password: password

The admin user can log in and access the admin panel.

The normal user is included for testing the access restriction and should not be able to log in to the admin application.