package edu.greenriver.it.introduction;

import java.util.Scanner;

/**
 * Class for Exercise - Introduction (IT333) Problem 2a (and consequently 2b)
 * @author Benjamin Arnold
 * @version 03-APR-2016
 */
public class Fibonacci {

	/**
	 * Main Method
	 * @param args
	 */
	public static void main(String[] args) {

		// Prompt user for how many numbers they wish to count up to
		System.out.println("How Many Fibonacci Numbers Do You Wish To See?: ");

		// Define Scanner input as user input
		Scanner input = new Scanner(System.in);

		// Define nthFib as the int input from user
		int nthFib = input.nextInt();
		
		fibonacciArray(nthFib);

	}

	public static void fibonacciArray(int nthFib) {

		// Create int array up to nthFib in size and populate first two
		int[] fibArray = new int[nthFib];
		fibArray[0] = 0;
		fibArray[1] = 1;

		// For each element in the array, starting on the Second (Zero based)
		for (int i = 2; i < nthFib; i++) {

			fibArray[i] = fibArray[i - 1] + fibArray[i - 2];

		}

		// For each element in the array
		for (int i = 0; i < nthFib; i++) {
			System.out.print(fibArray[i] + " ");
		}

	}
}
