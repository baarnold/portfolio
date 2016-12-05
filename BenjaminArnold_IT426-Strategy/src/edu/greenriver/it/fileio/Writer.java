package edu.greenriver.it.fileio;

import edu.greenriver.it.products.Product;

/**
 * Writer interface for Product I/O
 * @author Benjamin Arnold
 * @version 20161018
 */
public interface Writer {
	
	void saveObject(Product obj);
	
	Product loadObject(String name);
	
}
