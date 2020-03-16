/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 *
 * @author antho
 */
public class Switch {

    public static void main(String[] args) {

        var numero = 0;
        var numeroTexto = "numero desconocido";

        switch (numero) {
            case 1:
                numeroTexto = "numero 1";
                break;
            case 2:
                numeroTexto = "numero 2";
                break;
            default:
                break;
        }
        
        System.out.println(numeroTexto);
    }
}
