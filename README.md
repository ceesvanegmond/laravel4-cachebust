<h1>Cachebusting package for Laravel 4</h1>

This package allows you to use cachebusting helpers for your images. This feature adds an timestamp (modified date) to the file. So the user always will have the latest version of the image.
In your .blade files, use the cachebust() method at an imagepath.

Do not forget to add this in config/app.php under providers:
<pre>
  	'CeesVanEgmond\Minify\MinifyServiceProvider',
</pre>

Dont forget to add this in your public/.htaccess to make it work:

<pre>
  <IfModule mod_rewrite.c>
    RewriteCond %{REQUEST_FILENAME} !-f
	RewriteCond %{REQUEST_FILENAME} !-d
	RewriteRule ^(.+)\.(\d+)\.(js|css|png|jpg|gif)$ $1.$3 [L]
 </IfModule>
 </pre>
 
 You may now use it like this:
 <pre>
  img src="{{ cachebust('images/image.png') }}">
 </pre>
 Or with Blade templating:
  <pre>
  	{{ HTML::image( cachebust('images/image.png') ) }}
 </pre>
 Is you have any questions, bugs of comments, mention it in this repository.
