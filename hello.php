<?php

require './vendor/autoload.php';

$loader = new \Twig\Loader\FilesystemLoader('hello/');
$twig = new \Twig\Environment($loader, array(
   'cache' => 'hello/cache',
   'cache' => false
));

$template = $twig->Load('hello.tpl');

$valores = array('NOME'=> 'Hello World');

$template->display($valores);