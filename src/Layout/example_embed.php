<?php
include '../Twig_autoload.php';
$loader=new Twig_Loader_Filesystem('templates');
$twig=new Twig_Environment($loader);

$template=$twig->loadTemplate('example_embed.html');
echo $template->render(array('name'=>'sarath'));