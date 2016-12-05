package edu.greenriver.it.rate;

import edu.greenriver.it.ratefactory.IShippingRate;
import edu.greenriver.it.ratefactory.Rate;

/**
 * Concrete class for creating a US SHippingRate object
 * @author Benjamin Arnold
 */
public class USShippingRate implements IShippingRate {

	private static final Rate RATE_UNDER_ONE_POUND = new Rate("Standard", 1);
	private static final Rate RATE_BETWEEN_ONE_AND_FIVE_POUNDS = new Rate("Standard", 5);
	private static final Rate RATE_BETWEEN_SIX_AND_TEN_POUNDS = new Rate("Standard", 10);
	private static final Rate RATE_ABOVE_TEN_POUNDS = new Rate("Standard", 15);
	private static final Rate RATE_PRIORITY = new Rate("Priority", 3);

	private static final double ONE_POUND = 1;
	private static final double FIVE_POUNDS = 5;
	private static final double TEN_POUNDS = 10;

	@Override
	public Rate getRate(String type, double weight) {

		if (type.equals("Standard")) {

			if (weight > TEN_POUNDS) {

				return RATE_ABOVE_TEN_POUNDS;
			}
			else if (weight > FIVE_POUNDS) {

				return RATE_BETWEEN_SIX_AND_TEN_POUNDS;
			}
			else if (weight >= ONE_POUND) {

				return RATE_BETWEEN_ONE_AND_FIVE_POUNDS;
			}
			else {

				return RATE_UNDER_ONE_POUND;
			}

		}
		else if (type.equals("Priority")) {

			return RATE_PRIORITY;
		}

		else {
			return null;
		}
	}
}