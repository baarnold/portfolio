package edu.greenriver.it.fileio;

import java.io.File;

import javax.xml.bind.JAXBContext;
import javax.xml.bind.JAXBException;
import javax.xml.bind.Marshaller;

import edu.greenriver.it.products.Product;

/**
 * Writes and reads products to XML files
 * @author Benjamin Arnold
 *
 */
public class XmlWriter implements Writer {

	
	
	@Override
	public void saveObject(Product obj) {

		String fileName = obj.getProductName() + ".xml";
		String filePath = new File(".").getAbsolutePath()+"//data//" + fileName;
		
		try {
			JAXBContext context = JAXBContext.newInstance(Product.class);
			Marshaller marshaller = context.createMarshaller();
			marshaller.setProperty(Marshaller.JAXB_FORMATTED_OUTPUT, true);
			marshaller.marshal(obj, new File(filePath));
		}
		catch (JAXBException e) {
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
