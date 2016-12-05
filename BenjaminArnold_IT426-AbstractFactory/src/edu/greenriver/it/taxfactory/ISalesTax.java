package edu.greenriver.it.taxfactory;

/**
 * Interface for creating SalesTax objects
 * @author Benjamin Arnold
 */
public interface ISalesTax {

	/**
	 * Calculate the sales tax subtotal to be added to the passed subtotal
	 * @param salesSubTotal - double
	 * @return
	 */
	public double calculateTax(double salesSubTotal);
}
