/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 *
 * @author antho
 */
public class TipoInteger {

    public static void main(String[] args) {
        //byte short, int , long

        byte num = 127;

        System.out.println(num);

        System.out.println("bits tipo byte " + Byte.SIZE);
        System.out.println("BITES tipo byte " + Byte.BYTES);
        System.out.println("valor minimo tipo byte " + Byte.MIN_VALUE);
        System.out.println("valor maximo tipo byte " + Byte.MAX_VALUE);
        
        /* ********************************************************* */
        System.out.println("\n\n");
        
        short num2 = 32767;

        System.out.println(num2);

        System.out.println("bits tipo Short " + Short.SIZE);
        System.out.println("BITES tipo Short " + Short.BYTES);
        System.out.println("valor minimo tipo Short " + Short.MIN_VALUE);
        System.out.println("valor maximo tipo Short " + Short.MAX_VALUE);
        
        /* ********************************************************* */
        System.out.println("\n\n");
        
        int num3 = 2147483647;

        System.out.println(num3);

        System.out.println("bits tipo Integer " + Integer.SIZE);
        System.out.println("BITES tipo Integer " + Integer.BYTES);
        System.out.println("valor minimo tipo Integer " + Integer.MIN_VALUE);
        System.out.println("valor maximo tipo Integer " + Integer.MAX_VALUE);
        
        /* ********************************************************* */
        System.out.println("\n\n");
        
        long num4 = 9223372036854775807L;// siempre ponerle la l o L al final del numero porque asi reconoce los numeros de tipo long

        System.out.println(num4);

        System.out.println("bits tipo Long " + Long.SIZE);
        System.out.println("BITES tipo Long " + Long.BYTES);
        System.out.println("valor minimo tipo Long " + Long.MIN_VALUE);
        System.out.println("valor maximo tipo Long " + Long.MAX_VALUE);
    }

}
