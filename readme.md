# Install Laravel 5.6 - Bootstrap 4 - Jquery 3.3 - Fontawesome 4.7 - Startadmin

The purpose of this very simple repository is to create, quickly, a running laravel framework with Bootstrap 4, Jquery 3.3 and fontawesome.

**Javascript: the easy way.**

What do I mean?
I mean not taking advantage of the ES2015 syntax with modules.
I just want to us javascript the classic way: concatenate the js files in good order and than minify them for production.
Laravel-mix can do it for us very easily.
So, I concatenate, in this order:
1. Jquery
2. Bootstrap javascripts files. Just the ones I need, to get a smaller .js file.
3. Any other javascript library like select2, daterangepicker and so on.
4. My own javascript scripts.

**Requirements:**

* Linux OS (I use Ubuntu 16.04)
 *Porting to Windows or Mac should be very easy.*
* PHP ~7.0 and composer
*Laravel 5.5 requires PHP 7.0.0 or higher.*
* Node.js and npm

**Installation instructions**

1. Download the repository
2. Run ```./install.sh``` (bash script)
3. Edit ```.env```file
3. In the file ```webpack.mix.js``` uncoment the files that you want to load for your javascript to work, adjust your proxy for browsersync if you intend to use it.


### About Laravel. [website](https://laravel.com/)

Laravel is a web application framework with expressive, elegant syntax. We believe development must be an enjoyable and creative experience to be truly fulfilling. Laravel attempts to take the pain out of development by easing common tasks used in the majority of web projects.

### About Bootstrap 4. [website](http://getbootstrap.com/)

Bootstrap is an open source toolkit for developing with HTML, CSS, and JS. Quickly prototype your ideas or build your entire app with our Sass variables and mixins, responsive grid system, extensive prebuilt components, and powerful plugins built on jQuery.

### About Jquery. [website](https://jquery.com/)

jQuery is a fast, small, and feature-rich JavaScript library. It makes things like HTML document traversal and manipulation, event handling, animation, and Ajax much simpler with an easy-to-use API that works across a multitude of browsers. With a combination of versatility and extensibility, jQuery has changed the way that millions of people write JavaScript.

### About Fontawesome. [website](http://fontawesome.io)

Font Awesome gives you scalable vector icons that can instantly be customized — size, color, drop shadow, and anything that can be done with the power of CSS.

### About Startbootstrap [source](https://github.com/BlackrockDigital/startbootstrap-sb-admin)

SB Admin is an open source, admin dashboard template for Bootstrap created by Start Bootstrap.

### TODO

* Select which css to load and which not.

### License
This repository is open-sourced under the [MIT license](https://opensource.org/licenses/MIT).

The Laravel framework is open-sourced software licensed under the [MIT license](https://opensource.org/licenses/MIT).
