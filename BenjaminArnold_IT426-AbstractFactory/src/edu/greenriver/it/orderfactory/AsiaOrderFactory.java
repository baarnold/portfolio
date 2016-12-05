package edu.greenriver.it.orderfactory;

import edu.greenriver.it.rate.AsiaShippingRate;
import edu.greenriver.it.rate.EUShippingRate;
import edu.greenriver.it.ratefactory.IShippingRate;
import edu.greenriver.it.tax.AsiaSalesTax;
import edu.greenriver.it.tax.EUSalesTax;
import edu.greenriver.it.taxfactory.ISalesTax;

public class AsiaOrderFactory implements IOrderFactory {

	private String region;

	/**
	 * @param region - String nation abbr.
	 */
	public void setRegion(String region) {

		this.region = region;
	}

	@Override
	public ISalesTax getTaxObject() {

		AsiaSalesTax taxObject = new AsiaSalesTax(region);
		return taxObject;
	}

	@Override
	public IShippingRate getRateObject() {

		AsiaShippingRate rateObject = new AsiaShippingRate();
		return rateObject;
	}

}
