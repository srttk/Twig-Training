<?php
require '../Twig_autoload.php';
$loader=new Twig_Loader_String();
$twig=new Twig_Environment($loader);

# Filter Uppercase
//echo $twig->render(' {% filter upper %} Hello world {%endfilter%}');

#Filter Lower
//echo $twig->render('{% filter lower %} Hello world {%endfilter%}');

#Filter Chain Lower and escape
echo $twig->render('{% filter lower|escape %} Hello world <script>alert("Hack");</script> {%endfilter%}');