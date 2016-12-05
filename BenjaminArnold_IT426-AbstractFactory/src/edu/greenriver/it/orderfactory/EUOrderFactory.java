package edu.greenriver.it.orderfactory;

import edu.greenriver.it.rate.EUShippingRate;
import edu.greenriver.it.ratefactory.IShippingRate;
import edu.greenriver.it.tax.EUSalesTax;
import edu.greenriver.it.taxfactory.ISalesTax;

/**
 * Factory to create EU Orders
 * @author Benjamin Arnold
 */
public class EUOrderFactory implements IOrderFactory {

	private String region;

	/**
	 * @param region - String nation abbr.
	 */
	public void setRegion(String region) {

		this.region = region;
	}

	@Override
	public ISalesTax getTaxObject() {

		EUSalesTax taxObject = new EUSalesTax(region);
		return taxObject;
	}

	@Override
	public IShippingRate getRateObject() {

		EUShippingRate rateObject = new EUShippingRate();
		return rateObject;
	}

}
