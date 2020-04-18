/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
package com.cursoudemy.pasoporvalor;

/**
 *
 * @author antho
 */
public class PasoPorValor {
    
    public static void main(String[] args) {
        
        var x = 10;
        
        System.out.println("x = " + x);
        
        cambiarValor(x);
        
        System.out.println("x = " + x);
    }

    private static void cambiarValor(int arg) {
        arg = 20;
        System.out.println("arg : " + arg);
    }
}
