package edu.greenriver.it.producttest;

import javax.swing.plaf.synth.SynthSeparatorUI;

import edu.greenriver.it.console.Console;
import edu.greenriver.it.fileio.JsonWriter;
import edu.greenriver.it.fileio.ObjectWriter;
import edu.greenriver.it.fileio.XmlWriter;
import edu.greenriver.it.products.Product;

/**
 * Driver class for Strategy pattern assignment using Products
 * @author Benjamin Arnold
 *
 */
public class Driver {

	/**
	 * Main Method
	 * @param args
	 */
	public static void main(String[] args) {
		
		Product product = new Product();
		boolean menuState = true;
		int selection;
		ObjectWriter objWriter = new ObjectWriter();
		JsonWriter jsonWriter = new JsonWriter();
		XmlWriter xmlWriter = new XmlWriter();
		
		while (menuState == true) {
			
			System.out.println("Benjamin Arnold's Product Manager");
			System.out.println("Write a product to file");
			System.out.println(product.toString());
			System.out.println();
			System.out.println("1: Save as JSON");
			System.out.println("2: Save as XML");
			System.out.println("3: Save as Java Object");
			System.out.println("4: Exit");
			
			selection = Console.getInt("Make Selection");
			
			if (selection == 1) {

				jsonWriter.saveObject(product);
				System.out.println("Saving to file...");
				System.out.println("Object saved to file.\n");
				System.out.println("loadObject() error\n\n");
			}
			else if (selection == 2) {
				
				xmlWriter.saveObject(product);
				System.out.println("Saving to file...");
				System.out.println("Object saved to file.\n");
				System.out.println("loadObject() error\n\n");
			}
			else if (selection == 3) {
				
				objWriter.saveObject(product);
				System.out.println("Saving to file...");
				System.out.println("Object saved to file.\n");
				System.out.println("loadObject() error\n\n");
			}
			else if (selection == 4) {
				System.out.println("Exitting Program...\n");
				menuState = false;
				break;
			}
		}

				
	}

}
