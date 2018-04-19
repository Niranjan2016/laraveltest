## Laravel Test
This is a test laravel project with a custom register and login implementation

## Motivation
Laravel has inbuilt login system but in real life scenarios, there are cases where simple authentication is not sufficient. So this project serves as starting point to custom registration and login using Laravel.

## Tech/framework used
<b>Built with</b>
- [LAMP](https://en.wikipedia.org/wiki/LAMP_(software_bundle))
- [Composer](https://getcomposer.org/)
- [Laravel 5.6](https://laravel.com/)


## Features
This project provides custom registration and login.

## Installation
Please follow these steps for installation
1. Clone the project to your local system

    git clone https://github.com/Niranjan2016/laraveltest.git

2. Clone will create folder "laraveltest"

    cd laraveltest/

3. Create .env file

    cp .env.example .env

4. Modify database settings in .env

5. Install the laravel 

    composer install

6. To run laravel we need to generate key

    php artisan key:generate

7. Run the migrations so that database tables are created

    php artisan migrate

8. Start the application

    php artisan serve

## How to use?
Now we have two links in the top right corner namely Login and register
1. The register will provide facility to register  
2. Login will provide facility to Login  

MIT © [Niranjan Nimbalkar]()