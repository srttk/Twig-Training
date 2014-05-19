<?php
include '../Twig_autoload.php';
$loader=new Twig_Loader_Filesystem('templates'); //Setting Template folder
$twig=new Twig_Environment($loader);
#Creating a new Twig_Template instance

$template=$twig->loadTemplate('helloworld.html');
echo $template->render(array('name'=>'World'));



#Shortcut method
//echo $twig->render('helloworld.html',array('name'=>'World'));

#Test 1 : Without array variables
// echo $twig->render('helloworld.html');

