<?php 
   require 'ExerciceXP-Gold3.php';


    $product1 = new Produit('iPhone 12', 'This is a great iPhone', 799.99);
    $product2 = new Produit('iPhone 12 Pro', 'This is a great iPhone', 799.99);
    echo $product1->getName().'<br>';
    echo $product2->getName();

 ?>