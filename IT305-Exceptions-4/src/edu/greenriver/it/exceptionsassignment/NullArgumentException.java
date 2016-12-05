package edu.greenriver.it.exceptionsassignment;

/**
 * Custom RuntimeException class
 * @author Benjamin Arnold
 * @version 20160205-1
 */
public class NullArgumentException extends RuntimeException {

	/**
	 * Default Constructor, using superclass RuntimeException
	 */
	public NullArgumentException() {
		super();
	}

	/**
	 * Constructor passing String message to superclass Runtime Exception
	 * @param message - String
	 */
	public NullArgumentException(String message) {
		super(message);
	}

}
