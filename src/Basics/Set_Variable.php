<?php
require '../Twig_autoload.php';
$loader=new Twig_Loader_String();
$twig=new Twig_Environment($loader);

echo $twig->render('Hello {{name}} {% set msg="Thanks"%} {{msg}}',['name'=>'Universe']);