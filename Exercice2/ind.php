<?php 
   require 'ExerciceXP-Gold2 .php';


    $product1 = new Produit();
    $product1->name = 'iPhone 14'.'<br>';
    echo $product1->name;
    $product2 = new Produit();
    $product2->name = 'iPhone 14 Pro'.'<br>';
    echo $product2->name;

 ?>