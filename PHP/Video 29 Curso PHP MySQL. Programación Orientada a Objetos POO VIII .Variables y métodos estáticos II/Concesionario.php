<?php

	class Compra_vehiculo{
		
		private $precio_base;
		
		private static $ayuda= 0;
		
				
		function Compra_vehiculo($gama){
			
			if($gama=="urbano"){
				
					$this->precio_base=10000;
				
			}else if($gama=="compacto"){
				
				
					$this->precio_base=20000;	
				
			}
			
			else if($gama=="berlina"){
				
					$this->precio_base=30000;	
				
			}		
			
			
		}// fin constructor
		
		static function Descuento(){
			
				if(date("m-d-y") < "01-09-2019"){//decimos si el dia es mayor al actual entonces hay descuento sino no
				self::$ayuda = 4500;
				//self:: sirve para referenciar una variable estatica
				}
			}
		
		
		function climatizador(){		
			
			
				$this->precio_base+=2000;					
			
			
		}// fin climatizador
		
		
		function navegador_gps(){
			
			$this->precio_base+=2500;	
			
		}//fin navegador gps
		
		
		
		function tapiceria_cuero($color){
			
			if($color=="blanco"){
			
				$this->precio_base+=3000;
			}
			
			else if($color=="beige"){
				
				$this->precio_base+=3500;
				
			}
			
			else{
				
				$this->precio_base+=5000;
				
			}
			
		}// fin tapicería
		
		
		
		function precio_final(){
			
			$valor_final=$this->precio_base-self::$ayuda;//para hacer referencia a un campo estático es de está manera
														// en este caso la variable estática es $ayuda
			return $valor_final;	
			
		}// fin precio final
		
		
		
	}// fin clase


?>