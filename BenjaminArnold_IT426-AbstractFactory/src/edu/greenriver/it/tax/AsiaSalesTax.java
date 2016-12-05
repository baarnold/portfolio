package edu.greenriver.it.tax;

import edu.greenriver.it.taxfactory.ISalesTax;

public class AsiaSalesTax implements ISalesTax {
	
	private static final String JAPAN = "JPN";
	private static final String CHINA = "CHN";
	private static final String INDIA = "IND";
	private static final String AFGHANISTAN = "AFG";

	private String region;

	public AsiaSalesTax(String region) {

		this.region = region;
	}

	@Override
	public double calculateTax(double salesSubTotal) {

		if (region.equals(JAPAN)) {
			return salesSubTotal * 0.03;
		}
		else if (region.equals(CHINA)) {
			return salesSubTotal * 0.05;
		}
		else if (region.equals(INDIA)) {
			return salesSubTotal * 0.2;
		}
		else if (region.equals(AFGHANISTAN)) {
			return salesSubTotal * 0.15;
		}
		else {
			return salesSubTotal * 0.5;
		}

	}

}