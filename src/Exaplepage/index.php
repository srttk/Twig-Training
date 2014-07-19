<?php
require '../Twig_autoload.php';

$loader=new Twig_Loader_Filesystem('templates');
$twig=new Twig_Environment($loader);

$data=array(
	'brand'=>'Stacketo',
	'title'=>'Hello Universe'
);
echo $twig->render('home.html',$data);