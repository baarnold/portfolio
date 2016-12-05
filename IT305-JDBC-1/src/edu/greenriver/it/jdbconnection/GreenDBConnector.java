package edu.greenriver.it.jdbconnection;

import java.sql.Connection;
import java.sql.DriverManager;
import java.sql.ResultSet;
import java.sql.SQLException;
import java.sql.Statement;
import java.util.Properties;
import java.util.Scanner;

/**
 * Class to connect to GRC Database for Fruit table
 * @author Benjamin Arnold
 * @version 24-FEB-2016
 */
public class GreenDBConnector {

	//Boolean to determine if console menu is active
	private static boolean consoleState;

	/**
	 * Main
	 * @param args
	 */
	public static void main(String[] args) {

		//Open scanner for user input
		Scanner console = new Scanner(System.in);

		//Get a DB connection.  If successful, start console menu
		try {
			Connection dbConnection = getConnection();
			System.out.println("Connected to Database!");
			consoleState = true;
		}
		catch (SQLException sqle) {
			System.out.println("SQL exception: " + sqle.getMessage());
			consoleState = false;
		}
		catch (ClassNotFoundException cnfe) {
			System.out.println("Class not found: " + cnfe.getMessage());
			consoleState = false;
		}

		//While the consoleState is true, display console menu for user interface
		while (consoleState == true) {

			//Prompt user for selection
			System.out.println("1. Enter a new fruit");
			System.out.println("2. View fruit");
			System.out.println("3. Exit");

			int menuChoice = console.nextInt();
			
			//Consume carriage return
			console.nextLine();

			//If 1, enter a new fruit
			if (menuChoice == 1) {

				//Prompt user for input, set variables to appropriate input
				//	Type of Fruit
				System.out.println("Enter Type of Fruit: ");
				String type = console.nextLine();
				
				//	Fruit Origin
				System.out.println("Enter the Fruit's Origin (or UNKNOWN it not known): ");
				String origin = console.nextLine();
				
				//	Fruit Weight (in kilograms)
				System.out.println("Enter a Numeric Weight for the Fruit in Kilograms");
				System.out.println("(For 5 kgs, enter '5', For 0.5 kg, enter '0.5') :");
				System.out.println("Format is '000.00' : ");
				double weight = console.nextDouble();
				
				//Consume Carriage Return
				console.nextLine();
				
				//	Fruit Description
				System.out.println("Enter a Short Description of the Fruit: ");
				String description = console.nextLine();

				//Queries (handled checked exceptions)
				try {
					insertFruit(type, origin, weight, description);
				}
				catch (SQLException sqle) {
					System.out.println("SQL exception: " + sqle.getMessage());
				}
				catch (ClassNotFoundException cnfe) {
					System.out.println("Class not found: " + cnfe.getMessage());
				}

			}

			//If 2, view table of fruit
			else if (menuChoice == 2) {
				
				//Queries (handled checked exceptions)
				try {
					
					//Request input on how to sort the list
					System.out.println("How do you wish to sort the Fruit List?");
					System.out.println("1. Type (Alphabetical)");
					System.out.println("2. Origin (Alphabetical)");
					System.out.println("3. Weight (Numeric)");
					int sortChoice = console.nextInt();
					console.nextLine();
					
					//If 1, sort by type
					if (sortChoice == 1) {
						
						//Request input on ascending or descending order
						System.out.println("Ascending or Descending Order?");
						System.out.println("1. Ascending (A - Z)");
						System.out.println("2. Descending (Z - A)");
						int orderChoice = console.nextInt();
						
						//Consume carriage return
						console.nextLine();
						
						//If 1, ascending order
						if (orderChoice == 1) {
							System.out.println("Loading...");
							viewFruit("type", "ASC");
						}
						
						//Else if 2, descending order
						else if (orderChoice == 2) {
							System.out.println("Loading...");
							viewFruit("type", "DESC");
						}
						
						//Else, invalid input
						else {
							System.out.println("***Invalid Input.***\n");
						}
					}
					
					//Else if 2, sort by origin
					else if (sortChoice == 2) {
						
						//Request input on ascending or descending order
						System.out.println("Ascending or Descending Order?");
						System.out.println("1. Ascending (A - Z)");
						System.out.println("2. Descending (Z - A)");
						int orderChoice = console.nextInt();
						
						//Consume carriage return
						console.nextLine();
						
						//If 1, ascending order
						if (orderChoice == 1) {
							System.out.println("Loading...");
							viewFruit("origin", "ASC");
						}
						
						//Else if 2, descending order
						else if (orderChoice == 2) {
							System.out.println("Loading...");
							viewFruit("origin", "DESC");
						}
						
						//Else, invalid input
						else {
							System.out.println("***Invalid Input.***\n");
						}
					}
					
					//Else if 3, sort by weight
					else if (sortChoice == 3) {
						
						//Request input on ascending or descending order
						System.out.println("Ascending or Descending Order?");
						System.out.println("1. Ascending (0.0 - 999.99)");
						System.out.println("2. Descending (999.99 - 0.0)");
						int orderChoice = console.nextInt();
						
						//Consume carriage return
						console.nextLine();
						
						//If 1, ascending order
						if (orderChoice == 1) {
							System.out.println("Loading...");
							viewFruit("weight", "ASC");
						}
						
						//Else if 2, descending order
						else if (orderChoice == 2) {
							System.out.println("Loading...");
							viewFruit("weight", "DESC");
						}
						
						//Else, invalid input
						else {
							System.out.println("***Invalid Input.***\n");
						}
					}
					
					//Else, invalid input
					else {
						System.out.println("***Invalid Input.***\n");
					}

				}
				catch (SQLException sqle) {
					System.out.println("SQL exception: " + sqle.getMessage());
				}
				catch (ClassNotFoundException cnfe) {
					System.out.println("Class not found: " + cnfe.getMessage());
				}
			}

			//If 3, end consoleState
			else if (menuChoice == 3) {
				System.out.println("Terminating Program...");
				consoleState = false;
			}

			else {
				System.out.println("***Invalid Input.***\n");
			}

		}

		//Close console.  DBConnection is encapsulated elsewhere, cannot close here
		console.close();

	}

	/**
	 * Method to get a database connection
	 * @return Connection
	 * @throws ClassNotFoundException
	 * @throws SQLException
	 */
	public static Connection getConnection() throws ClassNotFoundException, SQLException {

		Properties props = new Properties();

		//Credentials
		props.put("user", "barnold_user");
		props.put("password", "it305user");

		//Reference the Connector/J jar file
		Class.forName("com.mysql.jdbc.Driver");

		//Get connection using "connection string"
		Connection myConnection = DriverManager.getConnection("jdbc:mysql://barnold.greenrivertech.net:3306/", props);

		return myConnection;
	}

	/**
	 * Method to insert Fruit information into database
	 * @param typeIn
	 * @param originIn
	 * @param weightIn
	 * @param descIn
	 * @throws ClassNotFoundException
	 * @throws SQLException
	 */
	public static void insertFruit(String typeIn, String originIn, double weightIn, String descIn) throws ClassNotFoundException, SQLException {
		String query = "INSERT INTO barnold_sakila.fruit (type, origin, weight, description) "
				+ "VALUES ('" + typeIn + "', '" + originIn + "', " + weightIn + ", '" + descIn + "')";
		//System.out.println(query);	Test Code

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
	 * Method to view the Fruit table from database
	 * @throws SQLException
	 * @throws ClassNotFoundException
	 */
	public static void viewFruit(String sort, String order) throws SQLException, ClassNotFoundException {
		
		//Maintain connection to database
		Connection connection = getConnection();
		
		//Create statement
		Statement stmt = connection.createStatement();
		
		//Set statement query as string query
		String query = "SELECT * FROM barnold_sakila.fruit "
				+ "ORDER BY " + sort + " " + order + ";";

		//Get a ResultSet of the query rows
		ResultSet rows = stmt.executeQuery(query);
		
		//While rows has information
		while (rows.next()) {
			String fruitType = rows.getString("type");
			String fruitOrigin = rows.getString("origin");
			double fruitWeight = rows.getDouble("weight");
			String fruitDesc = rows.getString("description");
			System.out.println("Fruit Type: " + fruitType);
			System.out.println("Fruit Origin: " + fruitOrigin);
			System.out.println("Fruit Weight: " + fruitWeight +" kg");
			System.out.println("Fruit Description: " + fruitDesc);
			System.out.println("***********\n");
		}
		
		//Display options selected after displaying statement
		System.out.println("Sorted by: " + sort);
		System.out.println("Order: " + order);
	}

}