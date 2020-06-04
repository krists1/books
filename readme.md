<p align="center"><img src="https://laravel.com/assets/img/components/logo-laravel.svg"></p>

<p align="center">
<a href="https://travis-ci.org/laravel/framework"><img src="https://travis-ci.org/laravel/framework.svg" alt="Build Status"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://poser.pugx.org/laravel/framework/d/total.svg" alt="Total Downloads"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://poser.pugx.org/laravel/framework/v/stable.svg" alt="Latest Stable Version"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://poser.pugx.org/laravel/framework/license.svg" alt="License"></a>
</p>

# Basic laravel skill test

This is a little test project to evaluate basic knowledge of Laravel for a student or a job applicant.

## Prerequisites

Installed on your machine:
- PHP 7+ 
- MySQL 5.5+ (can use  any other Eloquent compatible SQL, just you'll have to configure it yourself)
- Latest [Composer](https://getcomposer.org/download/) version  
- Latest NodeJS with NPM
 
 At least basic knowledge of PHP, Laravel, SQL will be necessary.  

## Set up

- download source code
- copy `.env.example` -> `.env` file. Create a MySQL database (or PostrgeSQL, or any other SQL you prefer) and change database settings in `.env` file accordingly. 
- run `bash install.sh`, it will do "composer install", generate keys and run DB migrations 
- run the app by `php artisan serve` (or configure it to run on your web server)
- test it by opening http://127.0.0.1:8000/ in a browser

## Tasks

What you have here is a very simple and mostly standard Laravel project with a few pages that can do CRUD operations.
The project is a virtual bookshelf, that contains a list of books, authors, publishers and some reviews.   
Your task will be to fix the reviews page of the project, as some functions are missing or broken.

1. In ["add/edit reviews" form](http://127.0.0.1:8000/review/create) you can save the data only if it passes validation. But if you enter something wrong, and submit the form, 
the data that you entered are gone after a page reload. Please fix the form, so that the fields stay filled until the form submits successfully, or user navigates elsewhere.    

2. In the same form, there is a bug in the code, as it does not allow to submit it if the "published" checkbox stays unchecked. 
That should not be the case, as the user might want to enter some unpublished reviews, to finish them later. 
Please fix the form, so that both, checked and unchecked states are valid and stored in database when submitted.   

3. Add a [slug](https://en.wikipedia.org/wiki/Clean_URL#Slug) field to the books table, and when adding a new book, generate it automatically from the book's title.
A slug should be unique for any book, so come up with a suffix, or some other way to distinguish identical titles. 
Remake the links to the books, so that a book info page is opened by `/book/{slug}` and not `/book/{id}`.
Example: [/book/1](http://127.0.0.1:8000/book/1) should not work, instead [/book/balta-gramata](http://127.0.0.1:8000/book/balta-gramata) should open "Baltā grāmata" information page.

4. In [reviews page](http://127.0.0.1:8000/review), you can see a list of all reviews about all books.
Please, add a filtering option (it can be as a simple dropdown, or an autocomplete select box) to this page, so that it would be possible for user to select reviews for a specific book.    
The filtered list should also be accessible directly by a link `/book/{book-slug}/reviews`.
Example: [/book/balta-gramata/reviews](http://127.0.0.1:8000/book/balta-gramata/reviews) should open a list of reviews for "Baltā grāmata" book.

5. Project currently utilizes [Bootstrap](https://getbootstrap.com/docs/4.3/getting-started/download/) version 4.3.0, update it to match version 4.3.1.

## License

This is open-sourced software licensed under the [MIT license](https://opensource.org/licenses/MIT).
