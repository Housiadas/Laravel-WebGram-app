# Laravel-WebGram-app
This is a website that clones some functionalities of Instagram, such as follow button, feed of the followers, add posts, etc. It was built based on Laravel framework.

### Laravel installation and environment set up.
* install composer dependency manager for PHP.
* download  Laravel installer through composer
```
composer global require laravel/installer
```
then run ```laravel new``` command will create a fresh Laravel installation in the directory you specify.<br/>
* install node.js
* also with laravel ships the vue.js forntend framework.


### Authentication system
```
composer require laravel/ui
php artisan ui:auth
php artisan ui:vue -auth
php artisan ui:auth -views
```
### Database
if you want to use sqlite as a database system for development change ```.env``` file.

### Migrate database
```php artisan migrate```
### Make models
```php artisan make:model Profiles -m```
### Apply frontend changes.
Every time you change scss files or vue.js components make sure to run
```npm run dev``` or ```npm run watch```
### Make controller
```php artisan make:controller ProfilesController```
