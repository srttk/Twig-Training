<?php
include '../Twig_autoload.php';
$loader=new Twig_Loader_Filesystem('templates');
$twig=new Twig_Environment($loader);

$layout=$twig->loadTemplate('base.html');
$twig->render('child.html');
