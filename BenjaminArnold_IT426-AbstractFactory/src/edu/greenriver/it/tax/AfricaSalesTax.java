package edu.greenriver.it.tax;

import edu.greenriver.it.ratefactory.IShippingRate;
import edu.greenriver.it.taxfactory.ISalesTax;

public class AfricaSalesTax implements ISalesTax{
	
	private static final String EGYPT = "EGT";
	private static final String ALGERIA = "ALG";
	private static final String SOUTH_AFRICA = "SOA";
	private static final String MADAGASCAR = "MAD";

	private String region;

	public AfricaSalesTax(String region) {

		this.region = region;
	}

	@Override
	public double calculateTax(double salesSubTotal) {

		if (region.equals(EGYPT)) {
			return salesSubTotal * 0.03;
		}
		else if (region.equals(ALGERIA)) {
			return salesSubTotal * 0.05;
		}
		else if (region.equals(SOUTH_AFRICA)) {
			return salesSubTotal * 0.2;
		}
		else if (region.equals(MADAGASCAR)) {
			return salesSubTotal * 0.15;
		}
		else {
			return salesSubTotal * 0.0;
		}

	}

}
