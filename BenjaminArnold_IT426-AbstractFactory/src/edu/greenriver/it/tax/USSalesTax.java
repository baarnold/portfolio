package edu.greenriver.it.tax;

import edu.greenriver.it.taxfactory.ISalesTax;

/**
 * Concrete class for creating US SalesTax objects
 * @author Benjamin Arnold
 */
public class USSalesTax implements ISalesTax {
	
	private static final int US_WEST_COAST = 1;
	private static final int US_CENTRAL = 5;
	private static final int US_EAST_COAST = 10;

	private int zipCode;

	public USSalesTax(int zipCode) {

		this.zipCode = zipCode;
	}

	@Override
	public double calculateTax(double salesSubTotal) {

		if (zipCode > US_WEST_COAST) {
			return salesSubTotal * 0.12;
		}
		else if (zipCode > US_CENTRAL) {
			return salesSubTotal * 0.25;
		}
		else if (zipCode > US_EAST_COAST) {
			return salesSubTotal * 0.35;
		}
		else {
			return salesSubTotal * 0.4;
		}
	}

}
