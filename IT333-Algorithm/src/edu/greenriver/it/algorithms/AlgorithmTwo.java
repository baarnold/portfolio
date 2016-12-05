package edu.greenriver.it.algorithms;

import java.util.Arrays;
import java.util.Random;
import java.util.Scanner;

/**
 * Class to fill an array with randomly generated numbers and no repeats
 * @author Benjamin Arnold
 * @version 12-APR-2016
 */
public class AlgorithmTwo {
	
	static int COUNTER = 0;
	
	/**
	 * Main Method
	 * @param args
	 */
	public static void main(String[] args) {

		//Ask user for array size
		Scanner input = new Scanner(System.in);
		System.out.println("Input Array Length: ");
		
		
		//Assign user input integer as array length
		int n = input.nextInt();
		int[] a = new int[n];
		boolean[] b = new boolean[n + 1];
		b[0] = true;

		//For each index in the array
		for(int index = 0; index < n; index++) {
			a[index] = numberGenerator(a, b);
		}
		
		//Print array contents
		System.out.println(Arrays.toString(a));
		input.close();
		System.out.println(COUNTER);
	}
	
	/**
	 * Method to generate a random integer for the array
	 * @param a -- Array of integers
	 * @return randomInt -- random integer
	 */
	public static int numberGenerator(int a[], boolean[] b) {
		
		//Create random integer
		Random rand = new Random();
		int randInt = rand.nextInt(a.length + 1);

		//If the randInt value is true
		if(b[randInt] == true) {	
			COUNTER++;
			return numberGenerator(a, b);
			
		}
		
		b[randInt] = true;
		//Return randInt
		return randInt;
	}
}
