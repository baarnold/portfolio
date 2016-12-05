/**
 * 
 */
package edu.greenriver.it.facadedriver;

import java.util.Arrays;

import edu.greenriver.it.facade.Facade;
import edu.greenriver.it.facade.Operator;

/**
 * Driver class to test Facade
 * @author Benjamin Arnold
 * @version 20161027
 */
public class Driver {

	/**
	 * @param args
	 */
	public static void main(String[] args) {
		Facade facade = new Facade();
		String emailOne = "my_email@gmail.com";
		String emailTwo = "e@e.com";
		String emailThree = "catch@22@.msn.com";
		System.out.println("Is the following a valid email?\n " + emailOne + " : " 
				+ facade.validate(Facade.ValidationType.EMAIL, emailOne) + "\n");
		System.out.println("Is the following a valid email?\n " + emailTwo + " : " 
				+ facade.validate(Facade.ValidationType.EMAIL, emailTwo) + "\n");
		System.out.println("Is the following a valid email?\n " + emailThree + " : " 
				+ facade.validate(Facade.ValidationType.EMAIL, emailThree) + "\n");
		
		String zipOne = "99999";
		String zipTwo = "88888-0000";
		String zipThree = "9999";
		String zipFour = "xxxxx";
		System.out.println("Is the following a valid Zip Code?\n " + zipOne + " : " 
				+ facade.validate(Facade.ValidationType.ZIPCODE, zipOne) + "\n");
		System.out.println("Is the following a valid Zip Code?\n " + zipTwo + " : " 
				+ facade.validate(Facade.ValidationType.ZIPCODE, zipTwo) + "\n");
		System.out.println("Is the following a valid Zip Code?\n " + zipThree + " : " 
				+ facade.validate(Facade.ValidationType.ZIPCODE, zipThree) + "\n");
		System.out.println("Is the following a valid Zip Code?\n " + zipFour + " : " 
				+ facade.validate(Facade.ValidationType.ZIPCODE, zipFour) + "\n");
		
		String[] arrayOne = {"blue", "red", "white", "blue", "yellow", "yellow", "", "red", "red"};
		Operator operatorOne = new Operator(arrayOne);
		System.out.println("Operator Initialized: \n"  
				+ Arrays.toString(operatorOne.getSubject()) + "\n");
		operatorOne.filter("yellow").resize(5);
		System.out.println("Operator Reduced: \n "
				+ Arrays.toString(operatorOne.getSubject()));
	}

}
