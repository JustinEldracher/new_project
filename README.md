# new_project

##Basic website template with jQuery, Bootstrap, and Font Awesome.

This project should be self-explanatory to most programmers, but I'll add some hints.

##`page.php`
Many of you are probably wondering what that is all about.  I have found that it is easier to have all my standard HTML
(header, navigation links, footer, etc.) in one file so I don't have to repeat it all the time.  That's what this PHP
script is for.  It has three variables embedded in the text it prints out: `$title`, `$script`, and `$body` which correspond
to the tile of the HTML document, some custom JavaScript for the page, and the main content of the page.  More variables can
be added for more control, so it is a very flexible and easy layout.

The main advantage is that all your code runs before anything is sent to the browser, so you can always use `header()`!

##Use:
Simply assign values to the variable in your script (they do have default values) and include `page.php`

```php
<?php
  $title = "My Page!";
  $body = "<h1>Hello World!</h1>";
  
  include "page.php";
?>
```
