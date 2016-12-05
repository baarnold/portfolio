package edu.greenriver.it.parse;

import java.util.regex.Matcher;
import java.util.regex.Pattern;

/**
 * Class to determine passed Strings as either emails, zip codes, phone numbers
 * or web address urls
 * @author Benjamin Arnold
 * @version 20161026
 */
public class StringRegex {

	/**
	 * Accepts String and returns if it is a valid email address
	 * @param subject
	 * @return
	 */
	public static boolean isEmail(String subject) {

		String emailRegex = "^[a-z0-9._%+-]+@[a-z0-9.-]+\\.[a-z]{2,4}$";
		Pattern pattern = Pattern.compile(emailRegex);
		Matcher matcher = pattern.matcher(subject);

		if (matcher.matches()) {
			return true;
		}
		else {
			return false;
		}
	}

	/**
	 * Accepts String and returns if it is a valid zip code
	 * @param subject
	 * @return
	 */
	public static boolean isZipCode(String subject) {

		boolean result = false;
		String zipRegex = "^\\d{5}(-\\d{4})?$";
		Pattern pattern = Pattern.compile(zipRegex);
		Matcher matcher = pattern.matcher(subject);

		if (matcher.matches()) {
			return result = true;
		}
		else {
			return result;
		}
	}

	/**
	 * Accepts String and returns if it is a valid phone number
	 * @param subject
	 * @return
	 */
	public static boolean isPhoneNumber(String subject) {

		boolean result = false;
		String phoneRegex = "^(\\d{3}-?\\d{3}-?\\d{4})$";
		Pattern pattern = Pattern.compile(phoneRegex);
		Matcher matcher = pattern.matcher(subject);

		if (matcher.matches()) {
			return result = true;
		}
		else {
			return result;
		}
	}

	/**
	 * Accepts String and returns if it is a valid url
	 * @param subject
	 * @return
	 */
	public static boolean isUrl(String subject) {

		boolean result = false;
		String urlRegex = "^(https?:\\/\\/)?([\\da-z\\.-]+)\\.([a-z\\.]{2,6})([\\/\\w \\.-]*)*\\/?$";
		Pattern pattern = Pattern.compile(urlRegex);
		Matcher matcher = pattern.matcher(subject);

		if (matcher.matches()) {
			return result = true;
		}
		else {
			return result;
		}
	}
}
