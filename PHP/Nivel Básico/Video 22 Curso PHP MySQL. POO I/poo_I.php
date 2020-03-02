<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>

	<!-- 
			Concepto de Programacion Orientada a objetos (POO).
			Creacion de clases(objetos) en POO.
			Concepto y creacion de instancia de clase.
			
			Que es POO?
				* Trasladar el concepto y comportamiento de los objetos de la vida real al código de programación.
				* El objetivo es la reutilización de código y hacer más fácil la programación.

			OBJETO (Ejemplo un objeto CARRO)
				Tiene propiedades(atributos):
					* Color
					* Peso
					* Alto
					* Largo...
				Tiene un comportamiento(¿Que es capaz de hacer?):
					* Arrancar
					* Frenar
					* Girar
					* Acelerar
			clase (Seguimos con el ejemplo del CARRO)
				Es un modelo donde se ractan las características comunes de un grupo de objetos
					Todos los carros tienen asientos, ruedas, color, ventanas, etc...

			INSTANCIA (Seguimos con el ejemplo del CARRO)
				Ejemplar perteneciente a una clase.
					Tenemos una maquina que hace carros y podemos utilizarlo para crear más carros
					pero no todos son iguales, son parecidos, lo cual podemos instanciar la maquina a la
					clase para poder crear un carro con similares características para reutilizar código y ahorrar tiempo.
	-->

<?php 
	//creacmos una clase
	class Coche{

	}

	//instanciamos la clase en una variable
	$audi = new Coche();

	$mercedez = new Coche();
	
?>
</body>
</html>