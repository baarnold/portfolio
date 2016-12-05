package edu.greenriver.it.exceptionsassignment;

/**
 * Custom RuntimeException class
 * @author Benjamin Arnold
 * @version 20160205-1
 */
public class DivideByZeroException extends RuntimeException {

	Rational rational;

	/**
	 * Default Constructor
	 */
	public DivideByZeroException() {
		super();
	}

	/**
	 * Constructor passing String message to superclass Runtime Exception
	 * @param message - String
	 */
	public DivideByZeroException(String message) {
		super(message);
	}

	/**
	 * Constructor storing Rational object
	 * @param rational - Rational object
	 */
	public DivideByZeroException(Rational rational) {
		this.rational = rational;
	}

	/**
	 * method to get Rational
	 * @return - Rational object
	 */
	public Rational getRational() {

		return rational;
	}

}
