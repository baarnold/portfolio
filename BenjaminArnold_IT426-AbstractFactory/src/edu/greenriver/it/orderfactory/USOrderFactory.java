package edu.greenriver.it.orderfactory;

import edu.greenriver.it.rate.USShippingRate;
import edu.greenriver.it.ratefactory.IShippingRate;
import edu.greenriver.it.tax.USSalesTax;
import edu.greenriver.it.taxfactory.ISalesTax;

/**
 * Factory for creating US Orders
 * @author Benjamin Arnold
 */
public class USOrderFactory implements IOrderFactory {

	private int zipCode;

	/**
	 * @param zipCode - int 00000 -> 99999
	 */
	public void setZipCode(int zipCode) {

		this.zipCode = zipCode;
	}

	@Override
	public ISalesTax getTaxObject() {

		USSalesTax taxObject = new USSalesTax(zipCode);
		return taxObject;
	}

	@Override
	public IShippingRate getRateObject() {

		USShippingRate rateObject = new USShippingRate();
		return rateObject;
	}

}
