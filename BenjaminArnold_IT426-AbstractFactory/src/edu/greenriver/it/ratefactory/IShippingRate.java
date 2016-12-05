package edu.greenriver.it.ratefactory;

/**
 * Interface to create a ShippingRate object
 * @author Benjamin Arnold
 */
public interface IShippingRate {

	/**
	 * Create a shipping rate
	 * @param type - String
	 * @param weight - double
	 * @return
	 */
	public Rate getRate(String type, double weight);

}
