package edu.greenriver.it.exceptionsassignment;

/**
 * This class is to create a Rational object, taking two integers or two other
 * Rational objects, and perform maths to them.
 * @author Benjamin Arnold
 * @version 20160205-1
 */
public class Rational {

	private int numerator;
	private int denominator;

	/**
	 * Constructor(int, int)
	 * @param numerInput - The Numerator int
	 * @param denomInput - The Denominator int
	 */
	public Rational(int numerInput, int denomInput) {
		if (denomInput == 0) {
			throw new DivideByZeroException("Denominator is Zero");
		}
		this.numerator = numerInput;
		this.denominator = denomInput;
	}

	/**
	 * Constructor(Rational, Rational)
	 * @param numerInput - The Numerator rational
	 * @param denomInput - The Denominator rational
	 */
	public Rational(Rational numerInput, Rational denomInput) {
		if (numerInput == null || denomInput == null) {
			throw new NullArgumentException("No Rational Object Passed");
		}
		int numerNumer = numerInput.getNumerator();
		int numerDenom = numerInput.getDenominator();
		int denomNumer = denomInput.getNumerator();
		int denomDenom = denomInput.getDenominator();

		int numerFinal = numerNumer * denomDenom;
		int denomFinal = numerDenom * denomNumer;

		if (denomFinal == 0) {
			throw new DivideByZeroException("Denominator Becomes Zero");
		}

		this.numerator = numerFinal;
		this.denominator = denomFinal;
	}

	/**
	 * Method to get the Numerator
	 * @return - int
	 */
	public int getNumerator() {

		return numerator;
	}

	/**
	 * Method to get the Denominator
	 * @return - int
	 */
	public int getDenominator() {

		return denominator;
	}

	@Override
	public String toString() {

		return numerator + "/" + denominator;
	}

	/**
	 * Method to add called Rational class with passed Rational class
	 * @param other - Rational object
	 * @return - Rational object
	 */
	public Rational add(Rational other) {

		if (other == null) {
			throw new NullArgumentException("No Rational Object Passed");
		}

		int addNumer = (this.numerator * other.denominator) + (this.denominator * other.numerator);
		int addDenom = (this.denominator * other.denominator);
		Rational addFinal = new Rational(addNumer, addDenom);
		System.out.print("The result of " + this.numerator + "/" + this.denominator + " + " + other.numerator + "/" +other.denominator + " = ");
		return addFinal;
	}

	/**
	 * Method to subtract called Rational class with passed Rational class
	 * @param other - Rational object
	 * @return - Rational object
	 */
	public Rational subtract(Rational other) {

		if (other == null) {
			throw new NullArgumentException("No Rational Object Passed");
		}

		int subNumer = (this.numerator * other.denominator) - (this.denominator * other.numerator);
		int subDenom = (this.denominator * other.denominator);
		Rational subFinal = new Rational(subNumer, subDenom);
		System.out.print("The result of " + this.numerator + "/" + this.denominator + " - " + other.numerator + "/" +other.denominator + " = ");
		return subFinal;
	}

	/**
	 * Method to multiply called Rational class with passed Rational class
	 * @param other - Rational object
	 * @return - Rational object
	 */
	public Rational multiply(Rational other) {

		if (other == null) {
			throw new NullArgumentException("No Rational Object Passed");
		}

		Rational multResult = new Rational(this.numerator * other.numerator, this.denominator * other.denominator);
		System.out.print("The result of " + this.numerator + "/" + this.denominator + " * " + other.numerator + "/" +other.denominator + " = ");
		return multResult;
	}

	/**
	 * Method to divide called Rational class with passed Rational class
	 * @param other - Rational object
	 * @return - Rational object
	 */
	public Rational divide(Rational other) {

		if (other == null) {
			throw new NullArgumentException("No Rational Object Passed");
		}

		Rational divResult = new Rational(this.numerator * other.denominator, this.denominator * other.numerator);
		System.out.print("The result of " + this.numerator + "/" + this.denominator + " / " + other.numerator + "/" +other.denominator + " = ");
		return divResult;
	}

}
