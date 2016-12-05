package edu.greenriver.it.exceptions;

/**
 * This class throws an exception for a Bad Name, extending Exception
 * @author Benjamin Arnold
 * @version 20160129-1
 */
public class BadNameException extends Exception{
	String message;
	String theBadName;
	
	/**
	 * Two Parameter Constructor
	 * @param message - Message to be passed
	 * @param theBadName - The bad name that was input
	 */
	public BadNameException(String message, String theBadName) {
		super(message);
		this.theBadName = theBadName;
	}
	
	/**
	 * One Parameter Constructor
	 * @param theBadName - The bad name that was input
	 */
	public BadNameException(String theBadName) {
		super(theBadName);
		this.theBadName = theBadName;
	}
	
	/**
	 * Gets the bad name
	 * @return - theBadName
	 */
	public String getBadName() {
		return this.theBadName;
	}
}
