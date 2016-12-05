package edu.greenriver.it.exceptionsassignment;

/**
 * Class to test Rational object class
 * @author Benjamin Arnold
 * @version 20160205-1
 */
public class RationalDriver {
	
	public static void main(String[] args) {
		Rational first;
		Rational second;
		Rational third;
		
		// Addition
		first = new Rational(2, 3);
		second = new Rational(4, 5);
		third = first.add(second);
		System.out.println(third);
		
		//Subtraction
		third = first.subtract(second);
		System.out.println(third);
		
		//Multiplication
		third = first.multiply(second);
		System.out.println(third);
		
		//Division
		third = first.divide(second);
		System.out.println(third);
		
		//Divide by Zero
		try {
			Rational fourth = new Rational(1, 0);
		}
		catch (DivideByZeroException dbze) {
			System.out.println("Attempted to Divide By Zero");
		}
		
		//Null Argument
		try {
			Rational fifth = new Rational(null, null);
		}
		catch (NullArgumentException nae) {
			System.out.println("Attempted to pass no rationals/null fields");
		}

	}
	
}
