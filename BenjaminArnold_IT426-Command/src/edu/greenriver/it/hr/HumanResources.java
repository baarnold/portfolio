package edu.greenriver.it.hr;

import java.util.ArrayList;
import java.util.List;
import java.util.Map;
import java.util.TreeMap;

import edu.greenriver.it.hr.commands.AddEmployee;
import edu.greenriver.it.hr.commands.BackgroundCheck;
import edu.greenriver.it.hr.commands.ChangeEmployeeType;
import edu.greenriver.it.hr.commands.ConsoleOutput;
import edu.greenriver.it.hr.commands.HRCommand;
import edu.greenriver.it.hr.commands.ReferenceCheck;
import edu.greenriver.it.hr.employees.Employee;

/**
 * Human Resources Class to execute commands and store employee objects.
 * @author Benjamin Arnold
 */
public class HumanResources {

	// list of commands to complete (first come, first serve)
	private List<HRCommand> todos = new ArrayList<HRCommand>();

	// list of Employees
	private Map<String, Employee> namesToApplicants = new TreeMap<String, Employee>();

	// public methods

	/**
	 * Creates commands, puts them in an ArrayList, and executes them.
	 */
	public void testHiringProcess() {

		// add command items for adding 10 new applicants to our HR system
		allCommandsForEmployee(new Employee("Sue Martinez"));
		allCommandsForEmployee(new Employee("Stacy Miller"));
		allCommandsForEmployee(new Employee("Garrett Wilson"));
		allCommandsForEmployee(new Employee("Francis Miller"));
		allCommandsForEmployee(new Employee("Sue Rodriguez"));

		executeCommands();

		System.out.println();

		// print new employees
		printEmployees();

	}

	/**
	 * Create all five commands for a single passed Employee object
	 * @param employee - Employee
	 */
	public void allCommandsForEmployee(Employee employee) {

		todos.add(new ConsoleOutput(employee));
		todos.add(new BackgroundCheck(employee));
		todos.add(new ReferenceCheck(employee));
		todos.add(new ChangeEmployeeType(employee));
		todos.add(new AddEmployee(employee, this));
	}

	/**
	 * Execute all commands in the todos
	 */
	public void executeCommands() {

		while (todos.size() > 0) {

			todos.get(0).execute();
			todos.remove(0);
		}
	}

	/**
	 * Print every Employee object's toString()
	 */
	public void printEmployees() {

		for (Map.Entry entry : namesToApplicants.entrySet()) {
			System.out.println(entry.getValue().toString());
		}
	}

	/**
	 * Add applicant Employee to the namesToApplicants map
	 * @param employee - Employee
	 */
	public void addApplicant(Employee employee) {

		namesToApplicants.put(employee.getName(), employee);
		System.out.println("New employee added to the system.");
	}
}
