package edu.greenriver.it.products;

import java.util.ArrayList;
import java.util.Arrays;
import java.util.List;

import javax.xml.bind.annotation.XmlElement;
import javax.xml.bind.annotation.XmlRootElement;

/**
 * Class to store Product Information
 * @author Benjamin Arnold
 * @version 20161018
 */
@XmlRootElement
public class Product {

	private String productName;
	private double productPrice;
	private List<String> keywords = new ArrayList<String>();

	/**
	 * Default Constructor
	 */
	public Product() {

		productName = "archery set";
		productPrice = 59.00;
		keywords.add("archer");
		keywords.add("bow");
		keywords.add("arrow");
		keywords.add("target");
		new Product(productName, productPrice);
	}

	/**
	 * Parameterized Constructor
	 * @param productName
	 * @param productPrice
	 * @param keywords
	 */
	public Product(String productName, double productPrice) {

		this.productName = productName;
		this.productPrice = productPrice;

	}

	/**
	 * @return the productName
	 */
	@XmlElement
	public String getProductName() {

		return productName;
	}

	/**
	 * @return the productPrice
	 */
	@XmlElement
	public double getProductPrice() {

		return productPrice;
	}

	/**
	 * @return the keywords
	 */
	@XmlElement
	public List<String> getKeywords() {

		return keywords;
	}
	
	public void addKeywords(String key) {
		
		keywords.add(key);
	}

	@Override
	public String toString() {

		return "Product [productName=" + productName + ", productPrice=" + productPrice + ", keywords=" + keywords
				+ "]";
	}

	

}
