<?php
include '../Twig_autoload.php';
$loader=new Twig_Loader_Filesystem('templates'); //Setting Template folder
$twig=new Twig_Environment($loader);
$data['names']=['PHP','Java Script','Python','Ruby'];
$data['links']=array(
	array('title'=>'Git Repository','url'=>'http://github.com/saratonite'),
	array('title'=>'Git Page','url'=>'http://saratonite.github.io')
	);
echo $twig->render('for_loop.html',$data);