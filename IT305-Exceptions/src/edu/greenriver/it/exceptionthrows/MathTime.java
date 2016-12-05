package edu.greenriver.it.exceptionthrows;

import java.util.Scanner;

/**
 * This class is to throw an exception
 * @author Benjamin Arnold
 * 20160127-1
 */
public class MathTime {

	/**
	 * Main
	 * @param args
	 */
	public static void main(String[] args) {
		int a;
		int b;
		Scanner input = new Scanner(System.in);
		
		System.out.println("Please Enter a dividend and divor: ");
		a = input.nextInt();
		b = input.nextInt();
		System.out.println(divisionNumbers(a, b));
	}

	/**
	 * Divides input a by input b
	 * @param a - Integer
	 * @param b - Integer
	 * @return c - Integer
	 * @throws ArithmeticException - If b == 0
	 */
	public static int divisionNumbers(int a, int b) throws ArithmeticException{

		if(b == 0) {
			throw new ArithmeticException("Cannot Divide By Zero");
		}
		else {
			int c = a / b;
			return c;
		}
	}

}
