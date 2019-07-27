import java.util.Scanner;

/*
 
 * Curso Java. Estructuras principales VI. Clase Math. Vídeo 9
 * Curso Java. Estructuras principales VII. Clase Math II. Vídeo 10

	Notas de la CLASE:
	
	* Math.sqrt(n): raiz cuadrada de un numero
	
	*Math.pow(base, exponente): potencia de un numero
	
	*Math.sin(angulo).Math.con(angulo).Math.tan.(angulo).Math.atan(angulo)
	
	*Math.round(decimal): redondeo de un numero
	
	*MatH.PI: constante de clase con el numero PI
	
	*

 */
public class Calculos_con_Math {

		public static void main(String[] arg) {
			
			double raiz = Math.sqrt(9);
			
			float num1 = 5.85f;
			int resultado = Math.round(num1);
			
			/*Esto se llama refundición 
			 *  int resultado = (int) Math.round(num1);
			 * 
			 * */
			
			double base = 5;
			double exponente = 3;
			
			resultado = (int)Math.pow(base, exponente);
			
			
			
			System.out.println("El resultado de "+ base + " elevado a " + exponente + " es : " +resultado);
			
			
		}
}
