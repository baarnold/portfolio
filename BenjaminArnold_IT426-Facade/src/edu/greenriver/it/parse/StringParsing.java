package edu.greenriver.it.parse;

/**
 * Class to parse a string into two substrings based on a passed delimiter
 * @author Benjamin Arnold
 */
public class StringParsing {

	/**
	 * Accepts a String, returns all characters from start of String to
	 * delimiter
	 * @param subject
	 * @param delimiter
	 * @return
	 */
	public static String before(String subject, String delimiter) {

		String[] split = subject.split(delimiter);
		String before = split[0];
		return before;
	}

	/**
	 * Accepts a String, returns all characters from delimiter to end of String
	 * @param subject
	 * @param delimiter
	 * @return
	 */
	public static String after(String subject, String delimiter) {

		String[] split = subject.split(delimiter);
		String after = split[1];
		return after;
	}
}
