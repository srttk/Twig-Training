<?php
require '../Twig_autoload.php';
$loader=new Twig_Loader_String();
$twig=new Twig_Environment($loader);


/*
The do tag works exactly like the regular variable expression ({{ ... }}) just that it doesn't print
anything:
*/

# Normal expression
echo $twig->render('Something {{ 1+2 }}');
echo $twig->render('Something {% do 1+2 %}');
