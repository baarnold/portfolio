package edu.greenriver.it.facade;

import edu.greenriver.it.parse.StringOperations;

/**
 * Store instance of a String Array
 * @author Benjamin Arnold
 * @version 20161027
 */
public class Operator {

	private String[] subject;

	/**
	 * @param subject
	 */
	public Operator(String[] subject) {
		this.subject = subject;
	}

	/**
	 * @return the subject
	 */
	public String[] getSubject() {

		return subject;
	}
	
	/**
	 * Removes all instances of a given String in the Operator String Array
	 * @param search
	 * @return
	 */
	public Operator filter(String search) {

		subject = StringOperations.filter(subject, search);
		return this;
	}
	
	/**
	 * Removes all duplicate Strings in the Operator String Array
	 * @return
	 */
	public Operator removeDuplicates() {

		subject = StringOperations.removeDuplicates(subject);
		return this;
	}
	
	/**
	 * Resizes the Operator String Array to given length, truncating or padding as needed
	 * @param length
	 * @return
	 */
	public Operator resize(int length) {

		subject = StringOperations.resize(subject, length);
		return this;
	}
}
