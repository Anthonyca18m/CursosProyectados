/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
package com.cursoudemy.mundocomputadora.entities;

import com.cursoudemy.mundocomputadora.partes.Monitor;
import com.cursoudemy.mundocomputadora.partes.Raton;
import com.cursoudemy.mundocomputadora.partes.Teclado;
import java.util.Iterator;

/**
 *
 * @author antho
 */
public class Orden {

    private int idOrden;
    private Computadora computadoras[];
    private static int contadorOrden;
    private int contadorComputadoras;
    private static int maxComputadoras = 10;

    public Orden() {
        this.idOrden = contadorOrden++;
        //Se instancia el arreglo de computadoras
        computadoras = new Computadora[maxComputadoras];
    }

    public void agregarComputadora(Computadora computadora) {

        if (contadorComputadoras < maxComputadoras) {
            //Agregamos la nueva computadora al arreglo
            //e incrementamos el contador de computadoras
            computadoras[contadorComputadoras++] = computadora;
        }
        else{
            System.out.println("Se ha superado el maximo de productos: " + maxComputadoras);
        }

    }

    public void mostrarOrden() {
        
        System.out.println("Orden #:" + idOrden);
        System.out.println("Computadoras de la orden #" + idOrden + ":");
        for (int i = 0; i < contadorComputadoras; i++) {
            System.out.println(computadoras[i]);
        }
        
    }

}
