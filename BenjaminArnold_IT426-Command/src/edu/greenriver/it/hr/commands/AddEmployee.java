package edu.greenriver.it.hr.commands;

import edu.greenriver.it.hr.HumanResources;
import edu.greenriver.it.hr.employees.Employee;

/**
 * Command Class - Adds Employee to the HumanResources 
 * 	namesToApplicants Map
 * @author Benjamin Arnold
 *
 */
public class AddEmployee extends HRCommand {
	
	HumanResources hr;
	
	/**
	 * Constructor
	 * @param employee - Employee
	 * @param hr - HumanResources
	 */
	public AddEmployee(Employee employee, HumanResources hr) {
		super(employee);
		this.hr = hr;

	}

	@Override
	public void execute() {

		hr.addApplicant(employee);
		
	}

}
