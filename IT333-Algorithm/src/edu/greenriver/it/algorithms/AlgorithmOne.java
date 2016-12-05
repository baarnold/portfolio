package edu.greenriver.it.algorithms;

import java.util.Arrays;
import java.util.Random;
import java.util.Scanner;

/**
 * Class to fill an array with randomly generated numbers and no repeats
 * @author Benjamin Arnold
 * @version 12-APR-2016
 */
public class AlgorithmOne {
	
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

		//For each index in the array
		for(int index = 0; index < n; index++) {
			a[index] = numberGenerator(a);
		}
		
		//Print array contents
		System.out.println(Arrays.toString(a));
		System.out.println(COUNTER);
		input.close();
	}
	
	/**
	 * Method to generate a random integer for the array
	 * @param a -- Array of integers
	 * @return randomInt -- random integer
	 */
	public static int numberGenerator(int a[]) {
		
		//Create random integer
		Random rand = new Random();
		int randInt = rand.nextInt(a.length + 1);

		//For each index in the array
		for(int index = 0; index < a.length; index++) {
			
			//If the randInt equals an index integer, generate new int recursively
			if(a[index] == randInt) {
				
				COUNTER++;
				return numberGenerator(a);
				
			}
		}
		
		//Return randInt
		return randInt;
	}
	
	
}
