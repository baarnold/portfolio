package edu.greenriver.it.exceptions;

import java.util.Scanner;

/**
 * Driver to test BadNameException
 * @author Benjamin Arnold
 * @version 20160129-1
 */
public class ExceptionDriverCode {

	static String firstName;
	static String lastName;
	static Scanner input = new Scanner(System.in);
	static String hold;

	/**
	 * Main
	 * @param args
	 */
	public static void main(String[] args) {

		try {
			getUserInput();
		}
		catch (BadNameException b) {
			System.out.println("Invalid Name :" + b.getMessage());
		}

	}

	/**
	 * Method to get the user input of a first name and last name
	 * @return - First Name and Last Name as a string
	 * @throws BadNameException - If either First Name or Last Name are under 3 characters
	 */
	public static String getUserInput() throws BadNameException {

		System.out.println("Please Enter Account First Name: ");
		hold = input.next();
		if (hold.length() < 3) {
			throw new BadNameException(hold);
		}
		else {
			firstName = hold;
		}

		System.out.println("Please Enter Account Last Name: ");
		hold = input.next();
		if (hold.length() < 3) {
			throw new BadNameException(hold);
		}
		else {
			lastName = hold;
		}

		return firstName + " " + lastName;
	}
}
