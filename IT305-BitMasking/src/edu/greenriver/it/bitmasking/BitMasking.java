package edu.greenriver.it.bitmasking;

/**
 * This code it to perform bit masking operations
 * @author Benjamin Arnold
 * @version 20160124-1
 */
public class BitMasking {

	/**
	 * Driver method
	 * @param args
	 */
	public static void main(String[] args) {

		for (int decimalNumber = 0; decimalNumber < 120; decimalNumber++) {
			DecimalToBinary(decimalNumber);
		}

	}

	/**
	 * Method to convert the passed decimal number to a visual representation of
	 * its binary value
	 * @param decimal - Number in decimal
	 */
	public static void DecimalToBinary(int decimal) {

		System.out.print(decimal + " => ");

		// Set a bitMask of value 100 binary (4 decimal)
		int bitMask = 128;

		// Only print the significant bits up to 7 decimal
		for (int sigBits = 1; sigBits <= 8; sigBits++) {

			// If the bitMask AND decimal is not zero, print the bit as set
			if ((bitMask & decimal) != 0) {
				System.out.print(1);

			}

			// Else the bit is zero, print the bit as unset
			else {
				System.out.print(0);
			}

			// Shift the set bit in bitMask to the right 1 position
			bitMask = bitMask >> 1;
		}
		
		System.out.print("\n");
	}

}
