package edu.greenriver.it.hr.commands;

import edu.greenriver.it.hr.OfficeStaff;
import edu.greenriver.it.hr.employees.Employee;

/**
 * Command Class - Changes the Employee type
 * @author Benjamin Arnold
 *
 */
public class ChangeEmployeeType extends HRCommand {
	
	/**
	 * Constructor
	 * @param employee
	 */
	public ChangeEmployeeType(Employee employee) {
		super(employee);

	}

	@Override
	public void execute() {

		// changes the receiver type to either HOURLY or SALARY
		OfficeStaff.changeEmployeeStatus(employee, OfficeStaff.decideEmployeeType());
		
	}

}
