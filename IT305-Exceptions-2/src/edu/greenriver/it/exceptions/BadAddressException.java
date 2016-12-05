package edu.greenriver.it.exceptions;

/**
 * This class throws an exception for a Bad Address, extending RunetimeException
 * @author Benjamin Arnold
 * @version 20160129-1
 */
public class BadAddressException extends RuntimeException {

	/**
	 * Default Constructor
	 */
	public BadAddressException() {
		super("BadAddressException");

	}

	/**
	 * Parameter Constructor
	 * @param message - Message to be passed
	 */
	public BadAddressException(String message) {
		super(message);

	}

}
