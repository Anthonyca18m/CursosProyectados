/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 *
 * @author antho
 */
public class BreakContinue {

    public static void main(String[] args) {

        for (int i = 0; i < 10; i++) {

            if ((i % 2) == 0) {
                System.out.println("i: " + i);
            } else {
                break;
            }

        }

        for (int i = 0; i < 10; i++) {

            if ((i % 2) != 0) {
                continue;
            } else {
                System.out.println("i: " + i);
            }

        }
    }
}
