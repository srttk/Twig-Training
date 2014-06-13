<?php
require_once '../Twig_autoload.php';

$loader=new Twig_Loader_Filesystem('templates');
$view=new Twig_Environment($loader);
echo $view->render('layout/home.html',array('title'=>'This is my site'));