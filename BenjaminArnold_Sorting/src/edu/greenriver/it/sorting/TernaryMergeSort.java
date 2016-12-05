package edu.greenriver.it.sorting;

import java.util.Arrays;
import java.util.Random;

/**
 * This class is to create a Merge Sort that uses three 
 * 	sub-arrays rather than two.
 * @author Benjamin Arnold
 * @version 05-JUN-2016
 */
public class TernaryMergeSort {

	/**
	 * @param args
	 */
	public static void main(String[] args) {
		
		//mergeSort() on array of size one
		System.out.println("\narrayOne Starting: [3]");
		int[] arrayOne = {3};
		System.out.println("arrayOne Sorted: " + Arrays.toString(mergeSort(arrayOne)));
		
		//mergeSort() on array of size two, out of order
		System.out.println("\narrayTwo Starting: [4, 2]");
		int[] arrayTwo = {4, 2};
		System.out.println("arrayTwo Sorted: " + Arrays.toString(mergeSort(arrayTwo)));
		
		//mergeSort() on array of size three, in order
		System.out.println("\narrayTwo Starting: [1, 2, 7]");
		int[] arrayThree = {1, 2, 7};
		System.out.println("arrayThree Sorted: " + Arrays.toString(mergeSort(arrayThree)));
		
		//mergeSort() on array of size three, out of order
		System.out.println("\narrayTwo Starting: [5, 3, 9]");
		int[] arrayFour = {5, 3, 9};
		System.out.println("arrayFour Sorted: " + Arrays.toString(mergeSort(arrayFour)));
		
		//mergeSort() on array of repeat numbers
		System.out.println("\narrayTwo Starting: [1, 1, 1, 1, 1, 1, 1, 1]");
		int[] arrayFive = {1, 1, 1, 1, 1, 1, 1, 1};
		System.out.println("arrayFive Sorted: " + Arrays.toString(mergeSort(arrayFive)));

		//mergeSort() on array of descending order numbers
		System.out.println("\narrayTwo Starting: [10, 9, 8, 7, 6, 5, 4, 3, 2, 1]");
		int[] arraySix = {10, 9, 8, 7, 6, 5, 4, 3, 2, 1};
		System.out.println("arraySix Sorted: " + Arrays.toString(mergeSort(arraySix)));	

		//mergeSort() on array of 100 randomly generated elements
		Random rand = new Random();
		int[] arraySeven = new int[100];
		for(int i = 0; i < arraySeven.length; i++) {
			arraySeven[i] = rand.nextInt(100);
		}
		System.out.println("\narraySeven Length: " + arraySeven.length);
		System.out.println("Is arraySeven In Order: " + inOrder(mergeSort(arraySeven)));

		//mergeSort() on array of 1000 randomly generated elements
		int[] arrayEight = new int[1000];
		for(int i = 0; i < arrayEight.length; i++) {
			arrayEight[i] = rand.nextInt(1000);
		}
		System.out.println("\narraySeven Length: " + arrayEight.length);
		System.out.println("Is arraySeven In Order: " + inOrder(mergeSort(arrayEight)));

		//mergeSort() on array of 10000 randomly generated elements
		int[] arrayNine = new int[10000];
		for(int i = 0; i < arrayNine.length; i++) {
			arrayNine[i] = rand.nextInt(10000);
		}
		System.out.println("\narraySeven Length: " + arrayNine.length);
		System.out.println("Is arraySeven In Order: " + inOrder(mergeSort(arrayNine)));

		//mergeSort() on array of 10000 randomly generated elements
		int[] arrayTen = new int[100000];
		for(int i = 0; i < arrayTen.length; i++) {
			arrayTen[i] = rand.nextInt(100000);
		}
		System.out.println("\narraySeven Length: " + arrayTen.length);
		System.out.println("Is arraySeven In Order: " + inOrder(mergeSort(arrayTen)));
		
		
	}

	/**
	 * Method to sort an array of integers
	 * @param inputArray - array of integers
	 */
	public static int[] mergeSort(int[] inputArray) {
		
		//Declare size variable as inputArray length
		int size = inputArray.length;
		
		//If array is less than 2 elements, return array
		if (size < 2) {
			return inputArray;
		}
		
		//Else if array is less than 3 elements
		else if (size < 3) {
			
			//If element 0 is greater than element 1, swap and return array
			if (inputArray[0] > inputArray[1]) {
				int temp = inputArray[0];
				inputArray[0] = inputArray[1];
				inputArray[1] = temp;
				return inputArray;
			}
			
			//Else return array
			else {
				return inputArray;
			}
		}
		
		//Else the array is large enough to sort with three sub-arrays
		else {
			
			//Declare variables
			int high = inputArray.length - 1;
			int low = 0;
			int numberOfElements = high - low + 1;
			int mid1 = low + (numberOfElements / 3);
			int mid2 = low + (2 * numberOfElements / 3);
			
			//Create sub-arrays, using mid1 as the low for middle and mid2 as the low for high
			int[] left = subArray(inputArray, low, mid1 - 1);
			int[] middle = subArray(inputArray, mid1, mid2 - 1);
			int[] right = subArray(inputArray, mid2, high);
			
			//Recursively sort sub-arrays
			mergeSort(left);
			mergeSort(middle);
			mergeSort(right);
			
			//Merge left, middle, and right into array
			merge(inputArray, left, middle, right);
			
			//Return the array
			return inputArray;
		}
	}
	
	/**
	 * Method to split passed inputArray into subArray from index low to high
	 * @param inputArray - Array of int
	 * @param low - int
	 * @param high - int
	 * @return subArray - Array of int
	 */
	public static int[] subArray(int[] inputArray, int low, int high) {
		
		//Declare variables for size and a new subArray
		int numberOfElements = high - low + 1;
		int[] subArray = new int[numberOfElements];
		
		//For each element until subArray size
		for (int i = 0; i < numberOfElements; i++) {
			
			//subArray[i] is the element at inputArray low + i
			subArray[i] = inputArray[i + low];
		}
		
		//Return subArray
		return subArray;
	}
	
	/**
	 * Method to merge the three subArrays into the result array.
	 * @param resultArray - Array to return as result
	 * @param leftSub - left sub-array
	 * @param midSub - middle sub-array
	 * @param rightSub - right sub-array
	 */
	public static void merge(int[] resultArray, int[] leftSub, 
							 int[] midSub, int[] rightSub) {
		
		//Declare variables for each subArray index
		int leftIndex = 0;
		int midIndex = 0;
		int rightIndex = 0;
		
		//For each index of the resultArray
		for (int i = 0; i < resultArray.length; i++) {
			
			//If the leftSub is not exhausted
			if(leftIndex < leftSub.length) {
				
				//If midSub is exhausted OR element at leftIndex is smaller than midIndex
				//	AND rightSub is exhausted OR leftIndex is smaller than rightIndex
				if((midIndex >= midSub.length || leftSub[leftIndex] <= midSub[midIndex]) && 
						( rightIndex >= rightSub.length || leftSub[leftIndex] <= rightSub[rightIndex])) {
					
					resultArray[i] = leftSub[leftIndex];
					leftIndex++;
				}
				
				//Else if leftSub is exhausted OR element at midIndex is smaller than leftIndex
				//	AND rightSub is exhausted OR midIndex is smaller than rightIndex
				else if (midIndex < midSub.length && (leftIndex >= leftSub.length || midSub[midIndex] <= leftSub[leftIndex]) &&
						(rightIndex >= rightSub.length || midSub[midIndex] <= rightSub[rightIndex])) {
					
					resultArray[i] = midSub[midIndex];
					midIndex++;
				}
				
				//Else leftSub is exhausted OR element at rightIndex is smaller than leftIndex
				//	AND midSub is exhausted OR rightIndex is smaller than midIndex
				else {
					resultArray[i] = rightSub[rightIndex];
					rightIndex++;
				}
			}
			
			//Else leftSub is exhausted but midSub is not exhausted
			else if (leftIndex >= leftSub.length && midIndex < midSub.length){
				
				//If rightSub is exhausted OR midIndex is smaller than rightIndex
				if (rightIndex >= rightSub.length || midSub[midIndex] <= rightSub[rightIndex]) {
					
					resultArray[i] = midSub[midIndex];
					midIndex++;
				}
				
				//Else element at rightIndex is smaller than leftIndex OR leftSub is exhausted
				//	AND rightIndex is smaller than midIndex OR midSub is exhausted
				else {
					resultArray[i] = rightSub[rightIndex];
					rightIndex++;
				}
			}
			
			//Else leftSub and midSub are exhausted
			else {
				resultArray[i] = rightSub[rightIndex];
				rightIndex++;
			}
		}
	}
	
	/**
	 * Method to determine if elements are in ascending order
	 * @param inputArray - array of int
	 * @return
	 */
	public static boolean inOrder(int[] inputArray) {

		int size = inputArray.length;
		
		//For each element of the inputArray
		for (int i = 0; i < size - 1; i++) {
			
			//if the second index is less than the first index
			if (inputArray[i + 1] < inputArray[i]) {
				
				//Elements not in order, return false
				return false;
			}
		}
		
		//Return true if all elements are in order
		return true;
	}
}
