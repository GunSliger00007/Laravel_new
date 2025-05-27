migration to update a column
php artisan make:migration add_address_to_users_table

for seed
php artisan db:seed

for model making
php artisan make:model Category

for contorller
php artisan make:controller UserController

make controller algoing with models and functions
This will assoicate model file with ressource controller

php artisan make:controller CategoryController --resource --model=Category --requests

list route
php artisan route:list