package edu.greenriver.it.exceptions;

import java.util.Scanner;

/**
 * This class is to test exceptions
 * @author Benjamin Arnold
 * 20160127-1
 */
public class BankAccount {
	
	public static int bankAccountID;
	public static String firstName;
	public static String lastName;
	public static float accountBalance;

	/**
	 * Main
	 * @param args
	 */
	public static void main(String[] args) {
		Scanner input = new Scanner(System.in);
		
		System.out.println("Please Enter Account ID: ");
		bankAccountID = input.nextInt();
		System.out.println("Please Enter Account First Name: ");
		input.nextLine();
		firstName = input.nextLine();
		System.out.println("Please Enter Account Last Name: ");
		//input.next();
		lastName = input.nextLine();
		System.out.println("Please Enter Account Balance: ");
		//input.next();
		accountBalance = input.nextInt();
		//input.next();
		input.close();
		BankAccount(bankAccountID, firstName, lastName, accountBalance);
		
	}

	

	/**
	 * Constructor for BankAccount
	 * @param bankAccountID
	 * @param firstName
	 * @param lastName
	 * @param accountBalance
	 */
	public static void BankAccount(int idInput, String fName, String lName, float accBal) {
		
		//If bankAccountID is outside range, throw exception
		if(idInput < 1000 || idInput > 9999) {
			throw new RuntimeException("Account ID Outside Range (1000-9999)");
		}
		else {
			bankAccountID = idInput;
		}
		
		//If first name is not given, throw exception
		if(fName == null || fName.trim().equals("")) {
			throw new NullPointerException("First Name Required");
		}
		else {
			firstName = fName;
		}
		
		//If last name is not given, throw exception
		if(lName == null || lName.trim().equals("")) {
			throw new NullPointerException("Last Name Required");
		}
		else {
			lastName = lName;
		}
		
		//If account balance is negative, throw exception
		if (accBal < 0) {
			throw new IllegalStateException("Cannot Start With Negative Balance");
		}
		else {
			accountBalance = accBal;
		}
		
	}
	
	
	
}
