package edu.greenriver.it.bitmasking;

public class BooleanArray {

	// Define new array with 32 indices
	int[] booleanArray = new int[32];

	/**
	 * Method to set the value at requested index to 1 (true)
	 * @param index - Integer (0 - 31)
	 */
	public void setTrue(int index) {

		// If the index is valid, continue
		if (index >= 0 && index <= 31) {

			booleanArray[index] = 1;
		}

		// Else the index is invalid
		else {

			System.out.println("Invalid Index: " + index + "\nMust be between 0 and 31:");
		}

	}

	/**
	 * Method to set the value at requested index to 0 (false)
	 * @param index - Integer (0 - 31)
	 */
	public void setFalse(int index) {

		// If the index is valid, continue
		if (index >= 0 && index <= 31) {

			booleanArray[index] = 0;
		}

		// Else the index is invalid
		else {

			System.out.println("Invalid Index: " + index + "\nMust be between 0 and 31:");
		}

	}

	/**
	 * Method to determine if value at requested index is true (1)
	 * @param index - Integer (0 - 31)
	 * @return boolean
	 */
	boolean isTrue(int index) {

		// If the index is valid, continue
		if (index >= 0 && index <= 31) {

			// If the requested index is set to 1, return true
			if (booleanArray[index] == 1) {

				return true;
			}

			// Else the requested index is not set to 1, return false
			else {

				return false;
			}

		}
		// Else the index is invalid, return false with prompt
		else {

			System.out.println("Invalid Index: " + index + "\nMust be between 0 and 31:");
			return false;
		}

	}
}
