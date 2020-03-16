
import java.util.Scanner;

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 *
 * @author antho
 */
public class SwitchMeses {
    
    public static void main(String[] args) {
        
        Scanner scanner = new Scanner(System.in);
        
        System.out.println("Ingrese numero de mes:");
        var mes = scanner.nextInt();
        String estacion = null;
        
        switch (mes){
            case 1: case 2: case 12:
                estacion = "Invierno";
                break;
            case 3: case 4: case 5:
                estacion = "Primavera";
                break;
            case 6: case 7: case 8 :
                estacion = "Verano";
            case 9: case 10: case 11:
                estacion = "Otoño";
                break;
            default:
                estacion = "Incorrecto";
                break;
        }
        
        System.out.println("Mes: " + mes + " Estación: " + estacion);
    }
}
