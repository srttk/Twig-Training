<?php
require '../Twig_autoload.php';
$loader=new Twig_Loader_Filesystem('templates');
$twig=new Twig_Environment($loader);

echo  $twig->render('variables.html',array('names'=>array('Sarath','Jeffrey'),'web'=>array('search'=>'Google','social-net'=>'Facebook')));

