/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 *
 * @author antho
 */
public class Aritmetica {
    
    int a;
    int b;

    public Aritmetica() {
        System.out.println("Constructor vacio");
    }

    public Aritmetica(int a, int b) {
        System.out.println("Ejecutando constructor con argumentos");
        this.a = a;
        this.b = b;
    }
   
    public int sumar() {
        int resultado;
        resultado = a + b;// se utilizan los atributos de la clase
        return resultado;
    }
    
    
    
}
