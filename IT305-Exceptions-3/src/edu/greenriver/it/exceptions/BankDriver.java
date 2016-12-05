package edu.greenriver.it.exceptions;

import java.util.*;

/**
 * This class is a driver for BankAccount class, handling exceptions from BankAccount
 * @author Benjamin Arnold
 * @version 20160129-2
 */
public class BankDriver {
	
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
		// input.next();
		lastName = input.nextLine();
		System.out.println("Please Enter Account Balance: ");
		// input.next();
		accountBalance = input.nextInt();
		input.nextLine();

		try {
			BankAccount.BankAccount(bankAccountID, firstName, lastName, accountBalance);
		}
		catch (NullPointerException npe) {
			System.out.println(npe.getMessage());
			System.out.println("Please Input Valid First Name: ");
			firstName = input.nextLine();
			System.out.println("Please Input Valid Last Name: ");
			lastName = input.nextLine();
		}
		catch (IllegalStateException ise) {
			System.out.println(ise.getMessage());
			System.out.println("Please Input Valid, Positive Balance: ");
			accountBalance = input.nextInt();
		}
		catch (RuntimeException re) {
			System.out.println(re.getMessage());
			System.out.println("Please Input Valid ID :");
			bankAccountID = input.nextInt();
		}
		

	}
}
