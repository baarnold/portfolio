package edu.greenriver.it.hr.commands;

import edu.greenriver.it.hr.OfficeStaff;
import edu.greenriver.it.hr.employees.Employee;

/**
 * Command Class - Performs a Reference Check on Employee
 * @author kuras
 *
 */
public class ReferenceCheck extends HRCommand {
	
	/**
	 * Constructor
	 * @param employee
	 */
	public ReferenceCheck(Employee employee) {
		super(employee);

	}

	@Override
	public void execute() {

		// ask the OfficeStaff class to check references (assume good)
		OfficeStaff.referenceCheck(employee);
	}

}
