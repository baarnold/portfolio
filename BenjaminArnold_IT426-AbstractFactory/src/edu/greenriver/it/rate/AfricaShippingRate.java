package edu.greenriver.it.rate;

import edu.greenriver.it.ratefactory.IShippingRate;
import edu.greenriver.it.ratefactory.Rate;

public class AfricaShippingRate implements IShippingRate {
	private static final Rate AFRICA_RATE_PER_POUND = new Rate("Standard", 0.7);

	@Override
	public Rate getRate(String type, double weight) {

		return AFRICA_RATE_PER_POUND;
	}
}
