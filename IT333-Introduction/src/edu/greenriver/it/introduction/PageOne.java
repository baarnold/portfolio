package edu.greenriver.it.introduction;

import java.util.Arrays;
import java.util.Scanner;

/**
 * Class for Exercise - Introduction (IT333) Problem 1
 * @author Benjamin Arnold
 * @version 01-APR-2016
 */
public class PageOne {

	/**
	 * Main method
	 * @param args
	 */
	public static void main(String[] args) {

		// Premade array of numbers with no order or meaning
		int[] array = { 0, 14, 35, 64, 8, 99, 3, 56, 32, 5, 23, 24, 13, 1, 7 };
		System.out.println("Given the following array of numbers:");
		System.out.println(Arrays.toString(array));
		// Prompt user for which element they desire
		System.out.println("Choose the kth largest number you wish to see (15 numbers total): ");

		// Define Scanner input as user input
		Scanner input = new Scanner(System.in);

		// Define nthFib as the int input from user
		int kthLargest = input.nextInt();

		// Sort the array
		Arrays.sort(array);

		// If the input is valid
		if (kthLargest > 0 && kthLargest < 16) {

			// Print the element at 15 - kthLargest
			// (1st largest is 15 - 1, or element 14, the largest element)
			System.out.println(array[array.length - kthLargest]);
			
		}
	}
}
