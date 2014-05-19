
<?php
include '../Twig_autoload.php';
$loader=new Twig_Loader_Filesystem('templates'); //Setting Template folder
$twig=new Twig_Environment($loader);

echo $twig->render('if_statement.html',array('name'=>'sarath'));

