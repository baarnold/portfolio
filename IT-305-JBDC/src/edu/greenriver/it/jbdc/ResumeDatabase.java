package edu.greenriver.it.jbdc;

import java.sql.Connection;
import java.sql.DriverManager;
import java.sql.ResultSet;
import java.sql.SQLException;
import java.sql.Statement;
import java.util.Properties;

/** Class to do JBDC and Queries for Assignment 2
 * @author Benjamin Arnold
 * @version 03-MAR-2016
 */
public class ResumeDatabase {

	private String username = "uersname";
	private String password = "password";
	private String host;
	

	/**
	 * Method to insert a new resume record into the database
	 * @param title
	 * @param name
	 * @param profile
	 * @param email
	 * @throws ClassNotFoundException
	 * @throws SQLException
	 */
	public void createResume(String title, String name, String profile, String email) throws ClassNotFoundException, SQLException {
		String query = "INSERT INTO barnold_sakila.resume ( title, name, profile, email ) "
				+ "VALUES ('" + title + "', '" + name + "', '" + profile + "', '" + email + "')";
		//System.out.println(query);	//Test Code

		
		Connection connection = getConnection();
		Statement stmt = connection.createStatement();

		int rowsAffected = stmt.executeUpdate(query);

		//If rows are affected, successful record entry
		if (rowsAffected == 1)
		{
			System.out.println("\nRecord Entered\n");
		}
		//Otherwise, no entry was made
		else
		{
			System.out.println("\nError: Record Not Entered\n");
		}
		
	}
	
	/**
	 * Method to insert a new resume skill into the database
	 * @param skill
	 * @param title
	 * @param description
	 * @throws ClassNotFoundException
	 * @throws SQLException
	 */
	public void createResumeSkill(String skill, String title, String description) throws ClassNotFoundException, SQLException {
		String query = "INSERT INTO barnold_sakila.resume_skill ( skill, resume_title, description ) "
				+ "VALUES ('" + skill + "', '" + title + "', '" + description + "')";
		//System.out.println(query);	//Test Code

		
		Connection connection = getConnection();
		Statement stmt = connection.createStatement();

		int rowsAffected = stmt.executeUpdate(query);

		//If rows are affected, successful record entry
		if (rowsAffected == 1)
		{
			System.out.println("\nRecord Entered\n");
		}
		//Otherwise, no entry was made
		else
		{
			System.out.println("\nError: Record Not Entered\n");
		}
		
	}
	
	/**
	 * Method to insert a new job experience into the database
	 * @param job
	 * @param title
	 * @param yearStart
	 * @param yearEnd
	 * @throws ClassNotFoundException
	 * @throws SQLException
	 */
	public void createResumeExp(String job, String title, String yearStart, String yearEnd, String position) throws ClassNotFoundException, SQLException {
		String query = "INSERT INTO barnold_sakila.resume_experience ( job, resume_title, year_started, year_ended, position ) "
				+ "VALUES ('" + job + "', '" + title + "', '" + yearStart + "', '" + yearEnd + "', '" + position + "')";
		//System.out.println(query);	//Test Code

		
		Connection connection = getConnection();
		Statement stmt = connection.createStatement();

		int rowsAffected = stmt.executeUpdate(query);

		//If rows are affected, successful record entry
		if (rowsAffected == 1)
		{
			System.out.println("\nRecord Entered\n");
		}
		//Otherwise, no entry was made
		else
		{
			System.out.println("\nError: Record Not Entered\n");
		}
		
	}


	/**
	 * Method to view records from the sales tables on the given date
	 * @throws SQLException
	 * @throws ClassNotFoundException
	 */
	public void getResumes() throws SQLException, ClassNotFoundException {
		
		//Maintain connection to database
		Connection connection = getConnection();
		
		//Create statements (each ResultSet requires its own statement)
		Statement stmtResume = connection.createStatement();
		Statement stmtSkill = connection.createStatement();
		Statement stmtExp = connection.createStatement();
		
		//Set statement query as string queryResume
		String queryResume = "SELECT * FROM barnold_sakila.resume";
		
		//System.out.println(queryResume);	//Test Code

		//Get a ResultSet of the query rows
		ResultSet resumeRows = stmtResume.executeQuery(queryResume);
		//System.out.println("Query Successful");	//Test Code
		

		//While resumeRows has information
		while (resumeRows.next()) {
			
			System.out.println("RESUME");
			System.out.println("******");
			
			String title = resumeRows.getString("title");
			String name = resumeRows.getString("name");
			String profile = resumeRows.getString("profile");
			String email = resumeRows.getString("email");
			
			System.out.println(name + "(" + email + ")");
			System.out.println(profile);
			
			System.out.println("\nSkills:");
			
			//Set statement query as string querySkill
			String querySkill = "SELECT * FROM barnold_sakila.resume_skill"
					+ " WHERE resume_title = '" + title +"'";
			
			//System.out.println(querySkill);	//Test Code

			//Get a ResultSet of the query rows
			ResultSet skillRows = stmtSkill.executeQuery(querySkill);
			
			//While skillRows has information
			while (skillRows.next()) {
				String skill = skillRows.getString("skill");
				String desc = skillRows.getString("description");
				
				System.out.println(skill + " - " + desc);
			}
			
			System.out.println("\nEmployment:");
			
			//Set statement query as string queryExp
			String queryExp = "SELECT * FROM barnold_sakila.resume_experience"
					+ " WHERE resume_title = '" + title +"'";
			
			//System.out.println(queryExp);	//Test Code

			//Get a ResultSet of the query rows
			ResultSet expRows = stmtExp.executeQuery(queryExp);
			
			//While expRows has information
			while (expRows.next()) {
				String job = expRows.getString("job");
				String yearStart = expRows.getString("year_started");
				String yearEnd = expRows.getString("year_ended");
				String position = expRows.getString("position");
				
				System.out.println(job + " from " + yearStart + " to " + yearEnd + " as a(n) " + position);
			}
			
			System.out.println("");
			
		}
		
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