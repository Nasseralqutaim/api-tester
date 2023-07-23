# API Tester

API Tester is a simple web application built with PHP and Laravel that allows users to test and debug API responses. It supports various HTTP methods, custom headers, and request bodies.

## Features

- Test APIs using HTTP methods (GET, POST, PUT, DELETE).
- Send custom headers with API requests.
- Include request bodies in JSON format.

## Prerequisites

Make sure you have the following installed:

- PHP version 7.3 or higher
- MySQL
- Composer (PHP package manager)
- Laravel Installer

You can install these using Homebrew (MacOS) and Composer:

```bash
# Update Homebrew
brew update

# Install PHP
brew install php@7.4

# Install MySQL
brew install mysql

# Start MySQL service
brew services start mysql

# Install Composer
brew install composer

# Install Laravel
composer global require laravel/installer

```

## Setup
1. Clone this repository to your local machine:
```
git clone https://github.com/your-username/api-tester.git
```
2. Navigate to the project directory:
```
cd api-tester
```
3. Install dependencies using Composer:
```
composer install
```
4. Create a new MySQL database for the application and update the .env file with your database credentials:
```
DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=api_tester_db
DB_USERNAME=root
DB_PASSWORD=your_mysql_password
```
5. Migrate the database:
```
php artisan migrate
```

## Usage
1. Start the development server:
```
Start the development server
```
2. Open your web browser and go to http://localhost:8000 to access the API Tester.
3. Enter the API details in the form, including the HTTP method, URL, custom headers (in JSON format), and request body (in JSON format).
4. Click on the "Test API" button to send the request and view the API response.

## Enhancements

The current version of the API Tester is functional but basic. Here are some enhancements that can be made:

Support for more HTTP methods and protocols.
Improved response visualization with syntax highlighting.
Saving API requests and responses in the database for viewing history.

## Contributing

Contributions are welcome! If you find any issues or want to add new features, feel free to create a pull request.

## License

This project is open-source and available under the MIT License.
Please feel free to modify or add any additional information as per your requirements. Save this content in a file named `README.md` in the root directory of your project on GitHub.
