package edu.greenriver.it.jbdc;

import java.sql.SQLException;
import java.util.Scanner;

/**
 * Class to connect to GRC Database for Resumes tables
 * @author Benjamin Arnold
 * @version 04-MAR-2016
 */
public class ResumeManager {
	
	//Boolean to determine if console menu is active
	private static boolean consoleState;

	/**
	 * Main
	 * @param args
	 */
	public static void main(String[] args) {
		
		ResumeDatabase resumes = new ResumeDatabase();

		//Open scanner for user input
		Scanner console = new Scanner(System.in);

		//Get a DB connection.  If successful, start console menu
		try {
			resumes.getConnection();
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
			System.out.println("1. Build a new resume");
			System.out.println("2. View all resumes");
			System.out.println("3. Exit");

			int menuChoice = console.nextInt();
			
			//Consume carriage return
			console.nextLine();

			//If 1, enter a new resume
			if (menuChoice == 1) {
				
				//Boolean to ensure successful query before continuing
				boolean querySuccess;
				boolean newSkill = true;
				boolean newJob = true;

				//Prompt user for input, set variables to appropriate input
				//	Resume Title
				System.out.println("Enter a Resume Title: ");
				String title = console.nextLine();
				
				//	Writer Name
				System.out.println("Enter Your Name: ");
				String name = console.nextLine();
				
				//	Writer Profile
				System.out.println("Enter a profile: ");
				String profile = console.nextLine();
				
				//	Writer Email Address
				System.out.println("Enter an email address: ");
				String email = console.nextLine();

				//Queries (handled checked exceptions)
				try {
					resumes.createResume(title, name, profile, email);
					querySuccess = true;
				}
				catch (SQLException sqle) {
					System.out.println("SQL exception: " + sqle.getMessage());
					querySuccess = false;
				}
				catch (ClassNotFoundException cnfe) {
					System.out.println("Class not found: " + cnfe.getMessage());
					querySuccess = false;
				}
				
				//While the query is successful, prompt user for valid skills
				while (querySuccess == true && newSkill == true) {
					
					//Prompt user for input, set variables to appropriate input
					//	Skill
					System.out.println("Enter a skill: ");
					String skill = console.nextLine();
					
					//	Description
					System.out.println("Enter a description: ");
					String description = console.nextLine();

					//Queries (handled checked exceptions)
					try {
						resumes.createResumeSkill(skill, title, description);
					}
					catch (SQLException sqle) {
						System.out.println("SQL exception: " + sqle.getMessage());
					}
					catch (ClassNotFoundException cnfe) {
						System.out.println("Class not found: " + cnfe.getMessage());
					}
					
					//If query is successful, prompt user for more skills
					System.out.println("Enter another skill? (y/n)");
					String skillChoice = console.nextLine();
					
					//Prompt user if new skills are to be added
					if (skillChoice.equals("Y") || skillChoice.equals("y")) {
						newSkill = true;
					}
					else if (skillChoice.equals("N") || skillChoice.equals("n")) {
						newSkill = false;
					}

				}
				
				while (querySuccess == true && newJob == true) {
					
					//Prompt user for input, set variables to appropriate input
					//	Past job
					System.out.println("Enter past employment: ");
					String job = console.nextLine();
					
					//	Year Started
					System.out.println("Enter year started (YYYY-MM-DD): ");
					String yearStart = console.nextLine();
					
					//	Year Ended
					System.out.println("Enter year ended (YYYY-MM-DD): ");
					String yearEnd = console.nextLine();
					
					//	Year Ended
					System.out.println("Enter job position: ");
					String position = console.nextLine();

					//Queries (handled checked exceptions)
					try {
						resumes.createResumeExp(job, title, yearStart, yearEnd, position);
					}
					catch (SQLException sqle) {
						System.out.println("SQL exception: " + sqle.getMessage());
					}
					catch (ClassNotFoundException cnfe) {
						System.out.println("Class not found: " + cnfe.getMessage());
					}
					
					//If query is successful, prompt user for more experience
					System.out.println("Enter another job? (y/n)");
					String expChoice = console.nextLine();
					
					//Use the querySuccess to determine whether to continue adding skills
					if (expChoice.equals("Y") || expChoice.equals("y")) {
						newJob = true;
					}
					else if (expChoice.equals("N") || expChoice.equals("n")) {
						newJob = false;
					}

				}

			}
			
			

			//If 2, view resumes
			else if (menuChoice == 2) {

				try {
					resumes.getResumes();
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

}