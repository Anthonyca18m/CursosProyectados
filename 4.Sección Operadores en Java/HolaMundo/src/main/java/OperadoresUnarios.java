/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 *
 * @author antho
 */
public class OperadoresUnarios {

    public static void main(String[] args) {

        int a = 3;
        int b = -a;

        System.out.println("b = " + b);

        boolean c = true;
        boolean d = !c;

        System.out.println("d = " + d);

        //incremento
        //preincremento
        int e = 3;
        int f = ++e;
        
        System.out.println("e = " + e);
        System.out.println("f = " + f);
        
        //postincremento
        int g = 5;
        int h = g++;
        
        System.out.println("g = " + g);
        System.out.println("h = " + h);
        
        
        //predecremento
        
        int i = 3;
        int j = --e;
        
        System.out.println("i = " + i);
        System.out.println("j = " + j);
        
        //postdrecremento
        
        int l = 5;
        int m = g--;
        
        System.out.println("l = " + l);
        System.out.println("m = " + m);
    }
}
