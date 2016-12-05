package edu.greenriver.it.parse;

import java.util.Arrays;
import java.util.HashSet;
import java.util.Set;

/**
 * Class to accept String Arrays and remove duplicates, filter Strings from
 * arrays and resize any String Arrays to a new length
 * @author Benjamin Arnold
 * @version 20161026
 */
public class StringOperations {

	/**
	 * Accepts a String Array and returns a new Array with all duplicates
	 * removed
	 * @param values
	 * @return
	 */
	public static String[] removeDuplicates(String[] values) {

		Set<String> stringSet = new HashSet<>(Arrays.asList(values));
		String[] newArray = stringSet.toArray(new String[0]);
		return newArray;
	}

	/**
	 * Accepts a String Array and an int, creates a new array with given size
	 * @param values
	 * @param newLength
	 * @return
	 */
	public static String[] resize(String[] values, int newLength) {

		String[] newArray = Arrays.copyOf(values, newLength);
		return newArray;
	}

	/**
	 * Accepts a String Array and removes all instances of a given String
	 * @param values
	 * @param search
	 * @return
	 */
	public static String[] filter(String[] values, String search) {

		if (values == null) {
			return null;
		}
		else if (values.length <= 0) {
			return values;
		}
		else {
			String[] newArray = new String[values.length - 1];
			int count = 0;
			for (String i : values) {
				if (!i.equals(search)) {
					newArray[count++] = i;
				}
			}
			return newArray;
		}

	}
}
