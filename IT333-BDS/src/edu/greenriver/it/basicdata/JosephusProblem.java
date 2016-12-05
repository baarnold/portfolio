package edu.greenriver.it.basicdata;

import java.util.ArrayList;
import java.util.Scanner;

/**
 * Class to complete Excise - Basic Data Structures Problem 3a
 * @author Benjamin Arnold
 * @version 18-APR-2016
 */
public class JosephusProblem {

	/**
	 * Main Method
	 * @param args
	 */
	public static void main(String[] args) {
		
		//Create new ArrayList of Integer Objects
		ArrayList<Integer> joList = new ArrayList<Integer>();
		
		//New Scanner for User Input
		Scanner input = new Scanner(System.in);
		
		//Query user for number of people in the list
		System.out.println("Enter the number of people: ");
		int people = input.nextInt();
		
		//Query user for the distance to pass the deathorb
		System.out.println("Enter the distance to pass: ");
		int distance = input.nextInt();
		
		//For each of the people, add a new Integer to joList
		for (int i = 0; i <= people; i++) {
			joList.add(i);
		}
		
		//While joList has more than 1 person (the winner) left
		while (joList.size() > 1) {
			
			//Remove the person at the distance passed
			joList.remove(distance);
			
			//Adjust number of people
			people = people - 1;
			
			//If there is more than one person left, adjust the
			//	distance length to account for the missing person
			if(people > 1) {
				distance = (2 * distance - 1) % people;
			}
		}
		
		//Print the winning number/last person alive
		System.out.println("Winner is: " + joList.get(0));
		
	}
}
