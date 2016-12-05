package edu.greenriver.it.exceptions;

import java.util.*;

/**
 * This class is to test handling exceptions
 * @author Benjamin Arnold
 * @version 20160129-1
 */
public class HandlingExceptions {
	
	public static String firstName;
	public static String lastName;
	
	/**
	 * Main
	 * @param args
	 */
	public static void main(String[] args) {
		
		try {
			Scanner input = new Scanner(System.in);

			System.out.println("Please Enter Account First Name: ");
			firstName = input.nextLine();
			
			System.out.println("Please Enter Account Last Name: ");
			lastName = input.nextLine();
			input.close();
			
			System.out.println("Welcome " + firstName + " " + lastName);
		}
		catch (NoSuchElementException nsee){
			System.out.println("No Line Found: " + nsee.getMessage());
		}
		catch (IllegalStateException ise) {
			System.out.println("Input Scanner Inoperable: " + ise.getMessage());
		}
	}
	

}
