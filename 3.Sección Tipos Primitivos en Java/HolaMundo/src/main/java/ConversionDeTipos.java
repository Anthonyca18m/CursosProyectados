/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 *
 * @author antho
 */
public class ConversionDeTipos {

    public static void main(String[] args) {

        //Convertir un String a Integer
        var edad = Integer.parseInt("20");
        System.out.println(edad + 10);

        //Convertir a Double
        double valorPI = Double.parseDouble("3.141615");
        System.out.println(valorPI + 10);

        char c = "hola".charAt(0);

        System.out.println(c);

    }
}
