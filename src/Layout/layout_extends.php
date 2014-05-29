<?php
include '../Twig_autoload.php';
$loader=new Twig_Loader_Filesystem('templates');
$twig=new Twig_Environment($loader);

$template=$twig->loadTemplate('child.html');
echo $template->render(array('name'=>'sarath'));
