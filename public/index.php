<?php
require_once '../vendor/autoload.php';

$product = ['product1', 'product2', 'product3', 'product4', 'product5'];
$loader = new \Twig\Loader\FilesystemLoader('../src/View');
$twig = new \Twig\Environment($loader);

echo $twig->render('index.html.twig', ['product' => $product]);








// require 'vendor/autoload.php';
// $loader = new Twig\Loader\FilesystemLoader(__DIR__.'View');
// $twig = new Twig\Environment($loader);
// echo $twig->render('hello.html.twig', array('name' => 'Morgane'));
?>

