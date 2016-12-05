/**
 * 
 */
package edu.greenriver.it.companies;

import java.util.ArrayList;
import java.util.List;

/**
 * This class is to create a Company with Name, Address, and Unique Identifier (string)
 * @author Benjamin Arnold
 * @version 1-JUL-2016
 */
public class Company {

	//Declare variables
	private String companyName;
	private String companyAddress;
	private String companyAbrev;
	private List<Employee> employees = new ArrayList<Employee>();
	
	/**
	 * Constructor
	 * @param companyName
	 * @param companyAddress
	 * @param companyAbrev
	 * @param employees
	 */
	public Company(String companyName, String companyAddress, String companyAbrev, ArrayList<Employee> employees) {
		
		super();
		this.companyName = companyName;
		this.companyAddress = companyAddress;
		this.companyAbrev = companyAbrev;
		this.employees = employees;
	}

	/**
	 * Method to return the company name
	 * @return String - companyName
	 */
	public String getCompanyName() {
	
		return companyName;
	}
	
	/**
	 * Method to get the company address
	 * @return String - companyAddress
	 */
	public String getCompanyAddress() {
	
		return companyAddress;
	}
	
	/**
	 * Method to get the company abbreviation as a unique identifier
	 * @return String - companyAbrev
	 */
	public String getCompanyAbrev() {
	
		return companyAbrev;
	}
	
	/**
	 * Method to set the company name
	 * @param String companyName
	 */
	public void setCompanyName(String companyName) {
	
		this.companyName = companyName;
	}
	
	/**
	 * Method to set the company address (Number Street City, State ZIP)
	 * @param String companyAddress
	 */
	public void setCompanyAddress(String companyAddress) {
	
		this.companyAddress = companyAddress;
	}
	
	/**
	 * Method to set company unique identifier (Abbreviation as a String)
	 * @param String companyAbrev
	 */
	public void setCompanyAbrev(String companyAbrev) {
	
		this.companyAbrev = companyAbrev;
	}

	
	/**
	 * Method to get list of employees
	 * @return employees
	 */
	public List<Employee> getEmployees() {
	
		return employees;
	}

	
	/**
	 * Method to set list of employees
	 * @param employees
	 */
	public void setEmployees(List<Employee> employees) {
	
		this.employees = employees;
	}
	
	
}
