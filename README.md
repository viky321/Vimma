# Vimma - Fruit Cultivation Website

## Overview

Welcome to Vimma! This is a website dedicated to our family-run fruit cultivation business. Our site provides information about our fruit-growing practices, offers a gallery of our produce, and includes a contact form for inquiries.

## Features

- **Home Page**: Describes our fruit cultivation practices, including blueberries, strawberries, and aronia.
- **Gallery**: A gallery showcasing images of our fruits.
- **Contact Page**: A form for users to send us inquiries. The form data is stored in a PostgreSQL database.

## Technology Stack

- **Backend**: PHP with Laravel
- **Frontend**: JavaScript, HTML, CSS
- **Database**: PostgreSQL

## Installation and Setup

To set up the project locally, follow these steps:

1. **Clone the Repository**

   ```bash
   git clone https://github.com/yourusername/vimma.git
   cd vimma

Install: 

composer install
npm install

Set Up the Environment

Copy the .env.example file to .env and update the environment variables, including database configuration:



cp .env.example .env

Update the .env file with your PostgreSQL database credentials:


DB_CONNECTION=pgsql
DB_HOST=127.0.0.1
DB_PORT=5432
DB_DATABASE=your_database_name
DB_USERNAME=your_database_user
DB_PASSWORD=your_database_password

Generate the Application Key : 

php artisan key:generate

Run Database Migrations : 

php artisan migrate

Start the Development Server:

php artisan serve
npm run dev for javascript


Open your browser and navigate to http://127.0.0.1:8000 to see the application in action.


This project is licensed under the MIT License - see the LICENSE file for details.


Acknowledgements :

Laravel Framework
PostgreSQL Database
FancyBox for image viewing
