/**
 * 
 */
package edu.greenriver.it.companies;

/**
 * This class is to create an Employee with an ID, Name, Sex, Birthday, and Join
 * Date
 * @author Benjamin Arnold
 * @version 1-JUL-2016
 */
public class Employee {

	// Declare variables
	private int empID;
	private String empName;
	private String empSex;
	private String empBirthday;
	private String empJoinDate;

	/**
	 * Default Constructor
	 * @param empName
	 */
	public Employee(String empName) {

		super();
		this.empName = empName;
	}

	/**
	 * Overloaded Constructor
	 * @param empID
	 * @param empName
	 * @param empSex
	 * @param empBirthday
	 * @param empJoinDate
	 */
	public Employee(int empID, String empName, String empSex, String empBirthday, String empJoinDate) {

		super();
		this.empID = empID;
		this.empName = empName;
		this.empSex = empSex;
		this.empBirthday = empBirthday;
		this.empJoinDate = empJoinDate;
	}

	/**
	 * Method to get the employee ID
	 * @return Int - empID
	 */
	public int getEmpID() {

		return empID;
	}

	/**
	 * Method to get the employee name (first and last)
	 * @return String - empName
	 */
	public String getEmpName() {

		return empName;
	}

	/**
	 * Method to get the employee sex (M or F)
	 * @return String - empSex
	 */
	public String getEmpSex() {

		return empSex;
	}

	/**
	 * Method to get the employee birthday
	 * @return String - empBirthday
	 */
	public String getEmpBirthday() {

		return empBirthday;
	}

	/**
	 * Method to get the date the employee joined company
	 * @return String - empJoinDate
	 */
	public String getEmpJoinDate() {

		return empJoinDate;
	}

	/**
	 * Method to set the employee ID
	 * @param int empID
	 */
	public void setEmpID(int empID) {

		this.empID = empID;
	}

	/**
	 * Method to set the employee name
	 * @param String empName ("First Last")
	 */
	public void setEmpName(String empName) {

		this.empName = empName;
	}

	/**
	 * Method to set the employee gender
	 * @param String empGender (M or F)
	 */
	public void setEmpGender(String empSex) {

		this.empSex = empSex;
	}

	/**
	 * Method to set the employee birthday
	 * @param String empBirthday (DD-MM-YYYY)
	 */
	public void setEmpBirthday(String empBirthday) {

		this.empBirthday = empBirthday;
	}

	/**
	 * Method to set the date employee joined company
	 * @param String empJoinDate (DD-MM-YYYY)
	 */
	public void setEmpJoinDate(String empJoinDate) {

		this.empJoinDate = empJoinDate;
	}

	/* (non-Javadoc)
	 * @see java.lang.Object#toString()
	 */
	@Override
	public String toString() {

		return "Employee [empID=" + empID + ", empName=" + empName + ", empSex=" + empSex + ", empBirthday="
				+ empBirthday + ", empJoinDate=" + empJoinDate + "]";
	}

	
}
