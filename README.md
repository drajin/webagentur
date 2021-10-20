![Imgur](https://i.imgur.com/rJxuYQu.jpg)

## Table of contents
* [General info](#general-info)
* [Features](#Featurs)
* [Screenshots](#Screenshots)
* [Technologies](#technologies)
* [Setup](#setup)

## General info
This project represents a German based web development company's web page. The main point of the project is the blog area, where the visitors have a possibility to correspondent over comment section, view  the blog, sort blog posts over tags and search. Using contact form will send emails through mailtrap. As website administrator it is possible to do the CRUD operations on posts and tags.

## Features
* Blog posts with images and tags
* Comment section
* User friendly blog panel
* URL slugs
* Mailing form

### Screenshots
![Imgur](https://i.imgur.com/Lp4VgbA.jpg) | ![Imgur](https://i.imgur.com/2z3m5JM.jpg) | ![Imgur](https://i.imgur.com/9xZulY5.jpg) | ![Imgur](https://i.imgur.com/GKyvhWs.jpg) |
|-|-|-|-|

## Technologies
* Laravel Framework 7.30.4
* Bootstrap v4.1.3

## Plugins
* CKEditor: WYSIWYG HTML Editor
* Select2 plugin replacement for select boxes

## Sources
Bootstrap theme colorlib.com - #seos
	
## Setup

### Installation Instructions
1. Download the archive or clone the project using git `git clone https://github.com/drajin/webagentur.git`

2. Rename `.env.example` file to `.env` or run `cp .env.example .env`.

   Update `.env` to your specific needs.

4. Run `php artisan migrate`.

5. Run `php artisan serve`.

   After installed, you can access `http://localhost:8000` in your browser.

6. Login

   | Email             | Username | Password | Access       |
   |-------------------|----------|----------|--------------|
   | admin@urlhub.test | admin    | admin    | Admin Access |
 
