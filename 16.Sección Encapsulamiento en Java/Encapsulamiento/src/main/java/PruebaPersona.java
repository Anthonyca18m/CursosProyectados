/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 *
 * @author antho
 */
public class PruebaPersona {
    public static void main(String[] args) {
        
        Persona persona = new Persona("Anthony", 5000, false);
        
        System.out.println("Nombre: " + persona.getNombre());
        System.out.println("Sueldo: " + persona.getSueldo());
        System.out.println("Eliminado: " + persona.getEliminado());
        
        System.out.println(persona.toString());
    }
}
