package edu.greenriver.it.fileio;

import java.io.File;
import java.io.FileInputStream;
import java.io.FileNotFoundException;
import java.io.FileOutputStream;
import java.io.IOException;
import java.io.ObjectInputStream;
import java.io.ObjectOutputStream;

import edu.greenriver.it.products.Product;

/**
 * Writes and reads products to Java object files
 * @author Benjamin Arnold
 *
 */
public class ObjectWriter implements Writer {


	@Override
	public void saveObject(Product obj) {
		
		String fileName = obj.getProductName() + ".dat";

		try {
			
			FileOutputStream write = new FileOutputStream(new File(".").getAbsolutePath()+"//data//" + fileName);
			ObjectOutputStream object = new ObjectOutputStream(write);
			
			object.writeObject(obj.getProductName());
			object.writeObject(obj.getProductPrice());
			object.writeObject(obj.getKeywords());
			
			object.close();
		}
		catch (FileNotFoundException e) {
			// TODO Auto-generated catch block
			e.printStackTrace();
		}
		catch (IOException e) {
			// TODO Auto-generated catch block
			e.printStackTrace();
		}
		

		
		
	}

	@Override
	public Product loadObject(String name) {

		Product product = null;
		String fileName = name;
		
		try {
			FileInputStream read = new FileInputStream(new File(".").getAbsolutePath()+"//data//" + fileName);
			ObjectInputStream object = new ObjectInputStream(read);
			
			String productName = (String) object.readObject();
			product = new Product(productName, 00.00);

		}
		catch (FileNotFoundException e) {
			// TODO Auto-generated catch block
			e.printStackTrace();
		}
		catch (IOException e) {
			// TODO Auto-generated catch block
			e.printStackTrace();
		}
		catch (ClassNotFoundException e) {
			// TODO Auto-generated catch block
			e.printStackTrace();
		}
		
		return product;
	}
	
}
