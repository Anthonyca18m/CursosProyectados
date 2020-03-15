/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 *
 * @author antho
 */
public class TipoChar {
    public static void main(String[] args) {
        
        System.out.println("bits en el Tipo Char: " + Character.SIZE);
        System.out.println("bytes en el Tipo Char: " + Character.BYTES);
        System.out.println("minimo valor en el Tipo Char: " + Character.MIN_VALUE);
        System.out.println("maximo valor en el Tipo Char: " + Character.MAX_VALUE);
        
        char charVar = '\u0021';
        char charDecimalVar = 33;
        
        System.out.println(charVar + " " + charDecimalVar);
    }
}
