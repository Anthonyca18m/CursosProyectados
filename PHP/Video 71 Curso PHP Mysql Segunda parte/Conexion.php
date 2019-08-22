<?php 
	
	try{
		
		
		$base = new PDO('mysql:host=localhost; dbname=cursophpone','root','');
		
		$base->setAttribute(PDO::ATTR_CASE, PDO::CASE_NATURAL);
		
		$base->exec("SET CHARACTER SET UTF8");
		
		}catch(Exception $e){
			
			die('Error' .  $e->getmessage());
			
			echo "Línea del error" . $e->getLine();
			
			}
	
?>