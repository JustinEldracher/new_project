# new_project

##Basic website template with jQuery, Bootstrap, and Font Awesome.

This project should be self-explanatory to most programmers, but I'll add some hints.

##CSS
All CSS code resides in `./css/`, and particularly in `./css/custom.css`.  This file is the only one that is referenced in
the HTML because it uses `@import` to include all the other style sheets.  I've found this makes it very easy to switch
stylesheets (themes) as you can just comment out the `@import` statement in the CSS without having to worry about the HTML.

In `./css/custom.css` I have included some basic styles to customize the Bootstrap navigation bar.  Just change the colors
to match your theme and you're done!

##JS
JavaScripts are found in `./js/`, and once again you will find a `./js/custom.js` file that you can add your own scripts to.
I have included a variety of Bootstrap plugins in this project, but if you don't want to use them you must remove the
initialization code from `./js/plugins.js` in addition to removing the `<script>` elements.  I have included a few of my own
jQuery plugins in `./js/plugins.js`, so I would suggest taking a look at that file regardless! :wink:

##`page.php`
Many of you are probably wondering what that is all about.  I have found that it is easier to have all my standard HTML
(header, navigation links, footer, etc.) in one file so I don't have to repeat it all the time.  That's what this PHP
script is for.  It has three variables embedded in the text it prints out: `$title`, `$script`, and `$body` which correspond
to the title of the HTML document, some custom JavaScript for the page, and the main content of the page.  More variables can
be added for more control, so it is a very flexible and easy-to-use layout.

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
