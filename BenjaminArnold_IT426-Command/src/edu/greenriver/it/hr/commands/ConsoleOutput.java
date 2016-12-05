package edu.greenriver.it.hr.commands;

import edu.greenriver.it.hr.employees.Employee;

/**
 * Command Class - Performs a Console Output
 * @author Benjamin Arnold
 *
 */
public class ConsoleOutput extends HRCommand {
	
	/**
	 * Constructor
	 * @param employee
	 */
	public ConsoleOutput(Employee employee) {
		super(employee);

	}

	@Override
	public void execute() {

		System.out.println("\nHiring new employee: " + employee.getName());
		
	}

}
