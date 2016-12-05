package edu.greenriver.it.tax;

import edu.greenriver.it.taxfactory.ISalesTax;

/**
 * Concrete class for creating EU SalesTax objects
 * @author Benjamin Arnold
 */
public class EUSalesTax implements ISalesTax {
	
	private static final String GERMANY = "GER";
	private static final String FRANCE = "FRA";
	private static final String GREAT_BRITAIN = "GRB";
	private static final String SWEDEN = "SWE";

	private String region;

	public EUSalesTax(String region) {

		this.region = region;
	}

	@Override
	public double calculateTax(double salesSubTotal) {

		if (region.equals(GERMANY)) {
			return salesSubTotal * 0.03;
		}
		else if (region.equals(FRANCE)) {
			return salesSubTotal * 0.05;
		}
		else if (region.equals(GREAT_BRITAIN)) {
			return salesSubTotal * 0.2;
		}
		else if (region.equals(SWEDEN)) {
			return salesSubTotal * 0.15;
		}
		else {
			return salesSubTotal * 0.0;
		}

	}

}
