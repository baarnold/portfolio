package edu.greenriver.it.algorithms;

import java.util.Arrays;
import java.util.Random;
import java.util.Scanner;

/**
 * Class to fill an array with randomly swapped elements
 * @author Benjamin Arnold
 * @version 15-APR-2016
 */
public class AlgorithmThree {
	
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


		//For each index in the array, populate from 1 to n
		for(int index = 0; index < n; index++) {
			a[index] = index + 1;
		}
		
		//For each index in the array, swap the index i with a random index
		for(int i = 0; i < n; i++)
		{
			Random rand = new Random();
		    swapElements(a, i, rand.nextInt(n));
		}
		
		//Print array contents
		System.out.println(Arrays.toString(a));
		System.out.println(COUNTER);
		input.close();
	}
	
	/**
	 * Method to swap elements from int array a at indices first and second
	 * @param a -- int[]
	 * @param first -- int, first index to swap
	 * @param second -- int, second index to swap
	 */
	public static void swapElements(int[] a, int first, int second) {
		int temp = a[first];
		a[first] = a[second];
		a[second] = temp;
		COUNTER++;
	}

}
