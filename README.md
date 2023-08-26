# API Product Project

Welcome to the API Product Project! This project is a RESTful API that allows you to manage products, perform CRUD operations, and utilize user authentication using Laravel and Sanctum.

## Table of Contents
- [Introduction](#introduction)
- [Features](#features)
- [Installation](#installation)
- [Usage](#usage)
- [Endpoints](#endpoints)
- [Authentication](#authentication)
- [Responses](#responses)
- [Contributing](#contributing)
- [License](#license)

## Introduction

The API Product Project is a web application built with Laravel framework. It provides a set of API endpoints that enable users to manage product data and interact with the application.

## Features

- User registration and authentication
- Get a list of products
- Get details of a specific product
- Search for products by name
- Create, update, and delete products

## Installation

1. Clone the repository: `git clone https://github.com/your-username/api-product-project.git`
2. Navigate to the project directory: `cd api-product-project`
3. Install Composer dependencies: `composer install`
4. Create a copy of the `.env.example` file and rename it to `.env`
5. Generate an application key: `php artisan key:generate`
6. Set up your database connection in the `.env` file
7. Run database migrations: `php artisan migrate`
8. Start the development server: `php artisan serve`

## Usage

1. Register a new user using the `/register` endpoint.
2. Log in with your registered credentials using the `/login` endpoint.
3. Use the obtained access token in the request headers for protected routes.
4. Explore the available endpoints for managing products.

## Endpoints

- `POST /register`: Register a new user.
- `POST /login`: Log in an existing user.
- `GET /products`: Get a list of products.
- `GET /products/{id}`: Get details of a specific product.
- `GET /products/search/{name}`: Search for products by name.
- `POST /products`: Create a new product.
- `PUT /products/{id}`: Update an existing product.
- `DELETE /products/{id}`: Delete an existing product.
- `POST /logout`: Log out the user and invalidate the access token.

## Authentication

- The API uses token-based authentication via Laravel Sanctum.
- Include the access token as a Bearer Token in the request headers for protected routes.

## Responses

- Successful responses return relevant data in JSON format.
- Errors return appropriate error messages with status codes.

## Contributing

Contributions are welcome! If you find any issues or want to enhance the project, feel free to submit a pull request.

## License

This project is licensed under the MIT License. See the [LICENSE](LICENSE) file for details.

---
