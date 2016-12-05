package edu.greenriver.it.rate;

import edu.greenriver.it.ratefactory.IShippingRate;
import edu.greenriver.it.ratefactory.Rate;

/**
 * Concrete class to create an EU ShippingRate object
 * @author Benjamin Arnold
 */
public class EUShippingRate implements IShippingRate {

	private static final Rate EU_RATE_PER_POUND = new Rate("Standard", 0.5);

	@Override
	public Rate getRate(String type, double weight) {

		return EU_RATE_PER_POUND;
	}

}
