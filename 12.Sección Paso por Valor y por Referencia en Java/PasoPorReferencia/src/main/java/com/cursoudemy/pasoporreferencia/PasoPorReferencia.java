/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
package com.cursoudemy.pasoporreferencia;

/**
 *
 * @author antho
 */
public class PasoPorReferencia {
    
    public static void main(String[] args) {
        
        Persona persona = new Persona();
        
        persona.setNombre("Anthony");
        
        System.out.println("Nombre: " + persona.getNombre());
        
        modificarPersona(persona);
        
        System.out.println("Nombre: " + persona.getNombre());
    }

    private static void modificarPersona(Persona persona) {
        persona.setNombre("Tomsillo");
    }
}
