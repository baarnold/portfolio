package edu.greenriver.it.hr.commands;

import edu.greenriver.it.hr.employees.Employee;

/**
 * Abstract Command Class - Provides default methods and constructor for
 * 	package commands
 * @author Benjamin Arnold
 *
 */
public abstract class HRCommand
{
	protected Employee employee;
	
    public abstract void execute();

	/**
	 * @param employee - Employee
	 */
	public HRCommand(Employee employee) {

		this.employee = employee;
	}

    
}
