package edu.greenriver.it.fileio;

import java.io.File;
import java.io.FileWriter;
import java.io.IOException;

import org.json.simple.JSONObject;

import edu.greenriver.it.products.Product;

/**
 * Writes and reads products to JSON object files
 * @author Benjamin Arnold
 *
 */
public class JsonWriter implements Writer {
	
	@Override
	public void saveObject(Product obj) {

		String fileName = obj.getProductName() + ".json";
		String filePath = new File(".").getAbsolutePath()+"//data//" + fileName;
		JSONObject product = new JSONObject();
		
		product.put("productName", obj.getProductName());
		product.put("productPrice", obj.getProductPrice());
		product.put("keywords", obj.getKeywords());

		File file = new File(filePath);
		
		try {
			file.createNewFile();
			FileWriter fileWriter = new FileWriter(file);

			fileWriter.write(product.toJSONString());
			fileWriter.flush();
			fileWriter.close();
		}
		catch (IOException e) {
			// TODO Auto-generated catch block
			e.printStackTrace();
		}


		
	}

	@Override
	public Product loadObject(String name) {

		// TODO Auto-generated method stub
		return null;
	}

}
