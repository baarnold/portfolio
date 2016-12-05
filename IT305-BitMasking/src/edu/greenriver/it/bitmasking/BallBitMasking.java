package edu.greenriver.it.bitmasking;

/**
 * This code it to perform bit masking operations
 * @author Benjamin Arnold
 * @version 20160124-1
 */
public class BallBitMasking {

	/**
	 * Driver method
	 * @param args
	 */
	public static void main(String[] args) {
		
		System.out.println(" Red  | Blue | White");

		for (int decimalNumber = 0; decimalNumber < 8; decimalNumber++) {
			DecimalToBinary(decimalNumber);
		}

	}

	/**
	 * Method to convert the passed decimal number to a visual representation of
	 * 		its binary value.  Since there are 3 balls, we only care about 3 bit
	 * 		positions.  Any binary numbers equal to or greater than 8 are ignored
	 * 		so we only need to run the method 7 times maximum
	 * @param decimal - Number in decimal
	 */
	public static void DecimalToBinary(int decimal) {

		// Set a bitMask of value 100 binary (4 decimal)
		int bitMask = 4;

		// Only print the significant bits up to 7 decimal
		for (int sigBits = 1; sigBits <= 3; sigBits++) {

			// If the bitMask AND decimal is not zero, print the bit as set
			if ((bitMask & decimal) != 0) {
				System.out.print("   1   ");

			}

			// Else the bit is zero, print the bit as unset
			else {
				System.out.print("   0   ");
			}

			// Shift the set bit in bitMask to the right 1 position
			bitMask = bitMask >> 1;
		}
		
		System.out.print("\n");
	}

}
