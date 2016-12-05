package edu.greenriver.it.ratefactory;

/**
 * Class to store the SHipping Type and the Rate for use in ShippingRate
 * interface
 * @author Benjamin Arnold
 */
public class Rate {

	private String shippingType;
	private double rate;

	/**
	 * @param shippingType
	 * @param rate
	 */
	public Rate(String shippingType, double rate) {
		this.shippingType = shippingType;
		this.rate = rate;
	}

	/**
	 * @return the shippingType
	 */
	public String getShippingType() {

		return shippingType;
	}

	/**
	 * @return the rate
	 */
	public double getRate() {

		return rate;
	}

}
