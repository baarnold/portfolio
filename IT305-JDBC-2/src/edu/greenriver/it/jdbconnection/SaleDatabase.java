package edu.greenriver.it.jdbconnection;

import java.sql.Connection;
import java.sql.DriverManager;
import java.sql.ResultSet;
import java.sql.SQLException;
import java.sql.Statement;
import java.util.Properties;

/** Class to do JBDC and Queries for Assignment 2
 * @author Benjamin Arnold
 * @version 28-FEB-2016
 */
public class SaleDatabase {

	private String username = "barnold_user";
	private String password = "it305user";
	private String host;
	
	/**
	 * Method to create new sale record
	 * @param typeIn
	 * @param originIn
	 * @param weightIn
	 * @param descIn
	 * @throws ClassNotFoundException
	 * @throws SQLException
	 */
	public void createSale(String first_name, String last_name, String sale_date) throws ClassNotFoundException, SQLException {
		String query = "INSERT INTO barnold_sakila.sale ( first_name, last_name, sale_date ) "
				+ "VALUES ('" + first_name + "', '" + last_name + "', '" + sale_date + "')";
		System.out.println(query);	//Test Code

		
		Connection connection = getConnection();
		Statement stmt = connection.createStatement();

		int rowsAffected = stmt.executeUpdate(query);

		//If rows are affected, successful record entry
		if (rowsAffected == 1)
		{
			System.out.println("Record Entered");
		}
		//Otherwise, no entry was made
		else
		{
			System.out.println("Error: Record Not Entered");
		}
		
	}
	
	/**
	 * Method to create sale item
	 * @param sale_id
	 * @param item_id
	 * @param quantity
	 * @throws ClassNotFoundException
	 * @throws SQLException
	 */
	public void createSaleItem(int sale_id, int item_id, int quantity) throws ClassNotFoundException, SQLException {
		String query = "INSERT INTO barnold_sakila.sale_item ( sale_id, item_id, quantity ) "
				+ "VALUES ( " + sale_id + ", " + item_id + ", " + quantity + " )";
		System.out.println(query);	//Test Code

		
		Connection connection = getConnection();
		Statement stmt = connection.createStatement();

		int rowsAffected = stmt.executeUpdate(query);

		//If rows are affected, successful record entry
		if (rowsAffected == 1)
		{
			System.out.println("Record Entered");
		}
		//Otherwise, no entry was made
		else
		{
			System.out.println("Error: Record Not Entered");
		}
	}
	
	/**
	 * Method to update table sale_item quantity
	 * @param sale_item_id
	 * @param quantity
	 * @throws ClassNotFoundException
	 * @throws SQLException
	 */
	public void updateQuantity(int sale_item_id, int quantity) throws ClassNotFoundException, SQLException {
		String query = "UPDATE barnold_sakila.sale_item SET quantity = " + quantity +
				" WHERE sale_item_id = " + sale_item_id + ";";
		System.out.println(query);	//Test Code

		
		Connection connection = getConnection();
		Statement stmt = connection.createStatement();

		int rowsAffected = stmt.executeUpdate(query);

		//If rows are affected, successful record entry
		if (rowsAffected == 1)
		{
			System.out.println("Record Entered");
		}
		//Otherwise, no entry was made
		else
		{
			System.out.println("Error: Record Not Entered");
		}
	}
	
	/**
	 * Delete a record from sale and sale_item tables based on sale_id
	 * @param sale_id
	 * @throws ClassNotFoundException
	 * @throws SQLException
	 */
	public void deleteSale(int sale_id) throws ClassNotFoundException, SQLException {
		String query = "DELETE FROM barnold_sakila.sale WHERE sale_id = " + sale_id + ";"
				+ " DELETE FROM barnold_sakila.sale_item WHERE sale_id = " + sale_id + ";";
		System.out.println(query);	//Test Code

		
		Connection connection = getConnection();
		Statement stmt = connection.createStatement();

		int rowsAffected = stmt.executeUpdate(query);

		//If rows are affected, successful record entry
		if (rowsAffected == 1)
		{
			System.out.println("Record Entered");
		}
		//Otherwise, no entry was made
		else
		{
			System.out.println("Error: Record Not Entered");
		}
	}

	/**
	 * Method to view records from the sales tables on the given date
	 * @throws SQLException
	 * @throws ClassNotFoundException
	 */
	public ResultSet getSalesByDate(String sale_date) throws SQLException, ClassNotFoundException {
		
		//Maintain connection to database
		Connection connection = getConnection();
		
		//Create statement
		Statement stmt = connection.createStatement();
		
		//Set statement query as string query
		String query = "SELECT sale.last_name, sale.first_name, sale.sale_date, "
				+ "sale_item.quantity, item.item_name, item.price FROM barnold_sakila.sale JOIN "
				+ "barnold_sakila.sale_item ON sale.sale_id = sale_item.sale_id JOIN barnold_sakila.item ON "
				+ "sale_item.item_id = item.item_id WHERE sale_date = "
				+ "'" + sale_date + "';";
		
		System.out.println(query);	//Test Code

		//Get a ResultSet of the query rows
		ResultSet rows = stmt.executeQuery(query);
		System.out.println("Record Entered");
		
		return rows;
		
		/*
		//While rows has information
		while (rows.next()) {
			String lastName = rows.getString("last_name");
			String firstName = rows.getString("first_name");
			String saleDate = rows.getString("first_name");
			int quantity = rows.getInt("quantity");
			String itemName = rows.getString("item_name");
			double price = rows.getDouble("price");
			System.out.println("Customer Name: " + lastName + ", " + firstName);
			System.out.println("Sale Date: " + saleDate);
			System.out.println("Order Item: " + itemName);
			System.out.println("Order Quantity: " + quantity);
			System.out.println("Order Price Per Unit: $ " + price + " USD");
			System.out.println("Total Price: $ " + (price * quantity) + " USD");
			System.out.println("***********\n");
		}*/
	}

	/**
	 * Method to get DB connection
	 * @return
	 * @throws ClassNotFoundException
	 * @throws SQLException
	 */
	public Connection getConnection() throws ClassNotFoundException, SQLException {

		Properties props = new Properties();

		// credentials
		props.put("user", username);
		props.put("password", password);

		// reference the Connector/J jar file
		Class.forName("com.mysql.jdbc.Driver");

		// get a connection using a "connection string"
		Connection myConnection = DriverManager.getConnection("jdbc:mysql://barnold.greenrivertech.net:3306/", props);

		return myConnection;
	}
}