<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title></title>
</head>
<body>
	<?php 
        
        class Produit 
        {
        	public $name;
        	public $description;
        	public $price;

        	public function __construct($name,$description,$price)
        	{
        		$this->name= $name;
        		$this->description= $description;
        		$this->price= $price;
        	}

        	public function getName()
        	{
        		return $this->name;
        	}
         
        }

	 ?>



</body>
</html>