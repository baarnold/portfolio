package edu.greenriver.it.rate;

import edu.greenriver.it.ratefactory.IShippingRate;
import edu.greenriver.it.ratefactory.Rate;

public class AsiaShippingRate implements IShippingRate {


	private static final Rate EU_RATE_PER_POUND = new Rate("Standard", 0.8);

	@Override
	public Rate getRate(String type, double weight) {

		return EU_RATE_PER_POUND;
	}

}

