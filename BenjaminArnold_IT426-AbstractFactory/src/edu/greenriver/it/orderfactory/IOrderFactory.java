package edu.greenriver.it.orderfactory;

import edu.greenriver.it.ratefactory.IShippingRate;
import edu.greenriver.it.taxfactory.ISalesTax;

/**
 * Interface for creating an Order Factory object
 * @author Benjamin Arnold
 */
public interface IOrderFactory {

	/**
	 * Create a sales tax object
	 * @return
	 */
	public ISalesTax getTaxObject();

	/**
	 * Create a shipping rate object
	 * @return
	 */
	public IShippingRate getRateObject();
}
