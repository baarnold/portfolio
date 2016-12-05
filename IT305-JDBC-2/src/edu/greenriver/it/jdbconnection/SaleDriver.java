package edu.greenriver.it.jdbconnection;

import java.sql.Connection;
import java.sql.SQLException;

/**
 * Class Driver to test SaleDatabase class
 * @author Benjamin Arnold
 * @version 28-FEB-2016
 */
public class SaleDriver {

	public static void main(String[] args) {
		
		SaleDatabase sales = new SaleDatabase();
		
		try {
			
			sales.getConnection();
			System.out.println("Connected to Database!");
			
		}
		catch (ClassNotFoundException | SQLException e1) {
			// TODO Auto-generated catch block
			System.out.println("Connection Error");
			e1.printStackTrace();
		}
		
		try {
			sales.createSale("Hal", "Jordan", "2015-05-05");
		}
		catch (ClassNotFoundException | SQLException e) {
			// TODO Auto-generated catch block
			System.out.println("createSale Error");
			e.printStackTrace();
		}
		
		try {
			sales.createSaleItem(4, 4, 10);
		}
		catch (ClassNotFoundException | SQLException e) {
			// TODO Auto-generated catch block
			System.out.println("createSaleItem error");
			e.printStackTrace();
		}
		
		try {
			sales.getSalesByDate("2015-12-25");
		}
		catch (ClassNotFoundException | SQLException e) {
			// TODO Auto-generated catch block
			System.out.println("getSalesByDate error");
			e.printStackTrace();
		}
		
		try {
			sales.updateQuantity(7, 5);
		}
		catch (ClassNotFoundException | SQLException e) {
			// TODO Auto-generated catch block
			System.out.println("updateQuantity error");
			e.printStackTrace();
		}
		
		try {
			sales.deleteSale(3);
		}
		catch (ClassNotFoundException | SQLException e) {
			// TODO Auto-generated catch block
			System.out.println("deleteSale error");
			e.printStackTrace();
		}
		

	}

}
