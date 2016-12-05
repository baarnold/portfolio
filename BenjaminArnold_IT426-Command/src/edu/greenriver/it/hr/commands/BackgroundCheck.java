package edu.greenriver.it.hr.commands;

import edu.greenriver.it.hr.OfficeStaff;
import edu.greenriver.it.hr.employees.Employee;

/**
 * Command Class - Performs a Background Check on Employee
 * @author Benjamin Arnold
 *
 */
public class BackgroundCheck extends HRCommand{
	
	/**
	 * Constructor
	 * @param employee
	 */
	public BackgroundCheck(Employee employee) {
		super(employee);

	}

	@Override
	public void execute() {

		//asks the OfficeStaff class to run a background check (assume success)
		OfficeStaff.backgroundCheck(employee);
	}

}
