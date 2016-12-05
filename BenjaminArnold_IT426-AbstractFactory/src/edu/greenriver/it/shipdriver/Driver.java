package edu.greenriver.it.shipdriver;

import edu.greenriver.it.console.Console;
import edu.greenriver.it.orderfactory.AfricaOrderFactory;
import edu.greenriver.it.orderfactory.AsiaOrderFactory;
import edu.greenriver.it.orderfactory.EUOrderFactory;
import edu.greenriver.it.orderfactory.IOrderFactory;
import edu.greenriver.it.orderfactory.USOrderFactory;

/**
 * Driver class for Abstract Factory testing of OrderFactory, ShippingRate, and
 * SalesTax
 * @author Benjamin Arnold
 */
public class Driver {

	public static void main(String[] args) {

		boolean menuState = true;
		int menuSelect;
		IOrderFactory newOrder;

		while (menuState == true) {

			System.out.println("Benjamin Arnold's Order Manager");
			System.out.println();
			System.out.println("Where would you like to ship?: ");
			System.out.println("1: Within the US");
			System.out.println("2: Within the EU");
			System.out.println("3: Within Asia");
			System.out.println("3: Within Africa");
			System.out.println("5: Exit");

			menuSelect = Console.getInt("Make Selection");

			if (menuSelect == 1) {

				newOrder = new USOrderFactory();

				int zipCodeSelect;
				int typeSelection;

				String name;
				String type;

				double weight;
				double shippingCost;
				double subtotal;
				double shippingTax;

				zipCodeSelect = Console.getInt("Enter Destination Five-Digit Zip Code (EX: 36301)");
				((USOrderFactory) newOrder).setZipCode(zipCodeSelect);

				name = Console.getString("Enter Name of Shipping Order");
				weight = Console.getDouble("Enter Weight of Shipping Order");

				System.out.println("Shipping Options: ");
				System.out.println("1: Standard");
				System.out.println("2: Priority");

				typeSelection = Console.getInt("Enter Shipping Type");

				if (typeSelection == 2) {
					type = "Priority";
				}
				else {
					type = "Standard";
				}

				System.out.println("*************************");
				System.out.println("Order Name: \t" + name);
				System.out.println("Order Weight: \t" + weight + "lbs");
				System.out.println("Shipping Type: \t" + type + " Shipping");

				shippingCost = newOrder.getRateObject().getRate(type, weight).getRate();
				subtotal = shippingCost;
				shippingTax = newOrder.getTaxObject().calculateTax(weight);

				System.out.println("Shipping Cost: \t" + shippingCost + " US Dollars Flat Rate");
				System.out.println("Subtotal: \t" + subtotal + " US Dollars");
				System.out.println("Shipping Tax: \t" + shippingTax + " US Dollars");
				System.out.println("TOTAL COST: \t" + (subtotal + shippingTax) + " US Dollars");
				System.out.println("*************************");
			}
			else if (menuSelect == 2) {

				newOrder = new EUOrderFactory();

				String regionSelect;
				String name;

				double weight;
				double shippingCost;
				double subtotal;
				double shippingTax;

				System.out.println("Only Standard Shipping is available in the EU.\n");
				regionSelect = Console.getString("Enter Three-Letter Country Abbreviation (EX: Germany -> GER)");
				regionSelect = regionSelect.toUpperCase();
				((EUOrderFactory) newOrder).setRegion(regionSelect);

				name = Console.getString("Enter Name of Shipping Order");
				weight = Console.getDouble("Enter Weight of Shipping Order");

				System.out.println("*************************");
				System.out.println("Order Name: \t" + name);
				System.out.println("Order Weight: \t" + weight + "lbs");
				System.out.println("Shipping Type: \tStandard EU");

				shippingCost = newOrder.getRateObject().getRate("Standard", weight).getRate();
				subtotal = (weight * shippingCost);
				shippingTax = newOrder.getTaxObject().calculateTax(weight);

				System.out.println("Shipping Cost: \t" + shippingCost + " Euros Per Pound");
				System.out.println("Subtotal: \t" + subtotal + " Euros");
				System.out.println("Shipping Tax: \t" + shippingTax + " Euros");
				System.out.println("TOTAL COST: \t" + (subtotal + shippingTax) + " Euros");
				System.out.println("*************************");
			}
			else if (menuSelect == 3) {

				newOrder = new AsiaOrderFactory();

				String regionSelect;
				String name;

				double weight;
				double shippingCost;
				double subtotal;
				double shippingTax;

				System.out.println("Only Standard Shipping is available in Asia.\n");
				regionSelect = Console.getString("Enter Three-Letter Country Abbreviation (EX: Japan -> JPN)");
				regionSelect = regionSelect.toUpperCase();
				((AsiaOrderFactory) newOrder).setRegion(regionSelect);

				name = Console.getString("Enter Name of Shipping Order");
				weight = Console.getDouble("Enter Weight of Shipping Order");

				System.out.println("*************************");
				System.out.println("Order Name: \t" + name);
				System.out.println("Order Weight: \t" + weight + "lbs");
				System.out.println("Shipping Type: \tStandard EU");

				shippingCost = newOrder.getRateObject().getRate("Standard", weight).getRate();
				subtotal = (weight * shippingCost);
				shippingTax = newOrder.getTaxObject().calculateTax(weight);

				System.out.println("Shipping Cost: \t" + shippingCost + " Euros Per Pound");
				System.out.println("Subtotal: \t" + subtotal + " Euros");
				System.out.println("Shipping Tax: \t" + shippingTax + " Euros");
				System.out.println("TOTAL COST: \t" + (subtotal + shippingTax) + " Euros");
				System.out.println("*************************");
			}
			else if (menuSelect == 4){
				newOrder = new AfricaOrderFactory();

				String regionSelect;
				String name;

				double weight;
				double shippingCost;
				double subtotal;
				double shippingTax;

				System.out.println("Only Standard Shipping is available in the EU.\n");
				regionSelect = Console.getString("Enter Three-Letter Country Abbreviation (EX: Germany -> GER)");
				regionSelect = regionSelect.toUpperCase();
				((AfricaOrderFactory) newOrder).setRegion(regionSelect);

				name = Console.getString("Enter Name of Shipping Order");
				weight = Console.getDouble("Enter Weight of Shipping Order");

				System.out.println("*************************");
				System.out.println("Order Name: \t" + name);
				System.out.println("Order Weight: \t" + weight + "lbs");
				System.out.println("Shipping Type: \tStandard EU");

				shippingCost = newOrder.getRateObject().getRate("Standard", weight).getRate();
				subtotal = (weight * shippingCost);
				shippingTax = newOrder.getTaxObject().calculateTax(weight);

				System.out.println("Shipping Cost: \t" + shippingCost + " Euros Per Pound");
				System.out.println("Subtotal: \t" + subtotal + " Euros");
				System.out.println("Shipping Tax: \t" + shippingTax + " Euros");
				System.out.println("TOTAL COST: \t" + (subtotal + shippingTax) + " Euros");
				System.out.println("*************************");
			}
			else if (menuSelect == 5) {

				System.out.println("Exitting Program...\n");
				menuState = false;
				break;
			}

		}
	}
}
