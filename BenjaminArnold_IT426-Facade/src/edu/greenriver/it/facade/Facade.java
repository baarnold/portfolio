package edu.greenriver.it.facade;

import edu.greenriver.it.parse.StringRegex;

/**
 * Facade class for package edu.greenriver.it.parse
 * @author Benjamin Arnold
 * @version 20161026
 */
public class Facade {

	public enum ValidationType {
		EMAIL, ZIPCODE, PHONE_NUMBER, URL
	}

	/**
	 * Method will validate any type passed to it as either EMAIL, ZIPCODE,
	 * PHONE_NUMBER, or URL
	 * @param type
	 * @param subject
	 * @return
	 */
	public boolean validate(ValidationType type, String subject) {

		boolean validate = false;
		switch (type) {
		case EMAIL:
			validate = StringRegex.isEmail(subject);
			break;

		case ZIPCODE:
			validate = StringRegex.isZipCode(subject);
			break;

		case PHONE_NUMBER:
			validate = StringRegex.isPhoneNumber(subject);
			break;

		case URL:
			validate = StringRegex.isUrl(subject);
			break;
		}
		return validate;
	}

	/**
	 * Gets instance of Operator class for method chaining.
	 * @param subject
	 * @return
	 */
	public Operator getOperator(String[] subject) {

		Operator operator = new Operator(subject);
		return operator;
	}
}
