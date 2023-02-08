<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title></title>
</head>
<body>

	<?php 

    /**
     * 
     */
    class MyCalculator
    {
    	
    	public function add($value1,$value2)
    	{
    		echo "La somme de ". $value1 .' + '.$value2 . ' =' .($value1+$value2);
    	}
    	public function multiply($value1,$value2)
    	{
    		echo " <br> Le produit de ".$value1.' * '.$value2.' =' .  ($value1*$value2);
    		
    	}
    	public function devide($value1,$value2)
    	{
    		echo " <br> La quotient entre ".$value1.' / '.$value2. ' =' . ((float)$value1/$value2);
    	}
    }
 ?>

</body>
</html>






