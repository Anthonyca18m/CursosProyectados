/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 *
 * @author antho
 */
public class ForConEtiquetas {

    public static void main(String[] args) {

        inicioo:
        for (int i = 0; i < 10; i++) {

            if ((i % 2) == 0) {
                System.out.println("i: " + i);
            } else {
                break inicioo;
            }

        }

        inicio:
        for (int i = 0; i < 10; i++) {

            if ((i % 2) != 0) {
                continue inicio;
            } else {
                System.out.println("i: " + i);
            }

        }
    }

}
