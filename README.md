# Check PHP configuration
php --ini

# Check installed PHP modules
php -m

# Ensure required PHP extensions are installed
# Ensure 'fileinfo' and 'zip' are available

# Create a new Laravel project
composer create-project laravel/laravel lab-practice

# Navigate to the project directory
cd lab-practice

# Start the Laravel development server
php artisan serve

# Create a new view file
php artisan make:view books.create

# Create a model with a factory
php artisan make:model Book -f

# Create a migration for the books table
php artisan make:migration create_books_table

# Run migrations
php artisan migrate

# Seed the database with test data
php artisan db:seed

# Create a controller for managing books
php artisan make:controller BookController
