<?php
include '../Twig_autoload.php';

# Example using Twig_Loader_String
$loader=new Twig_Loader_String();
$twig=new Twig_Environment($loader);
echo $twig->render("Hello {{name}}",array('name'=>"World"));
