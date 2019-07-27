/*
 * Curso Java. Manipulación de cadenas. Clase String I. Vídeo 11
 * 
 * 
 * 
 * Notas de la Clase: 
 * 
	*length() devuelve la longitud de una cadena de caracteres
	
	*charAt(n) devuelve la posicion de un caracter dentro de una cadena(Empieza a contar de 0)
	
	*substring(x,y) devuelve una subcadena dentro de la cadena, X el caracter a partir del cual se extrae e Y el n° de caracteres que se quiere extraer
	
	*equals(cadena) devuelve true si dos cadenas quese comparan son iguales y false si son diferentes.Distingue mayusculas y minusculas
	
	*equalsIgnoreCase(cadena) igualq ue el anterios pero sin tener en cuenta mayusculas y minusculas

 * 
 * */

public class Manipulacion_de_Cadenas {

	public static void main(String[] args) {
		// TODO Auto-generated method stub

		String nombre = "Anthony";

		System.out.println("Mi nombre es : " + nombre);

		System.out.println("Mi nombre tiene : " + nombre.length() + " Caracteres");

		System.out.println("Este es la letra en la posición 4 : " +nombre.charAt(4));
		
		System.out.println("Primera letra del nombre : " + nombre.charAt(nombre.length()-nombre.length()));
		
		System.out.println("Última letra del nombre : " + nombre.charAt(nombre.length()-1));
		
		System.out.println(nombre.substring(4));
		
		System.out.println("Evaluando si son iguales Considerando Mayusculas Minusculas " + nombre.equals("anthony"));
		
		
		System.out.println("Evaluando si son iguales ignorando Mayusculas Minusculas " + nombre.equalsIgnoreCase("anthony"));
	}

}
