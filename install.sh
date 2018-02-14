clear
echo "Hi, We are going to install the Laravel framework and all his dependencies."
composer install
php -r "file_exists('.env') || copy('.env.example', '.env');"
php artisan key:generate

echo "Running npm will install all the necessary files to have laravel mix runing and also all the necessary files to have bootstrap, jquery, popper and fontawesome."
npm install

echo "Now edit your .env file to fill in the details about database and all other necessary settings"
