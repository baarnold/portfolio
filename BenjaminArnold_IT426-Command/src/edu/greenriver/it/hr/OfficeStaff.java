package edu.greenriver.it.hr;

import java.util.Random;

import edu.greenriver.it.hr.employees.Employee;
import edu.greenriver.it.hr.employees.EmployeeType;

/**
 * Class to perform actions of the OfficeStaff against Employee objects
 * @author Benjamin Arnold
 */
public class OfficeStaff {

	private static Random random = new Random();

	/**
	 * Performs background check on Employee
	 * @param employee - Employee
	 */
	public static void backgroundCheck(Employee employee) {

		// 100% chance to come back "good"
		System.out.println("Starting background check... success!");
	}

	/**
	 * Performs reference check on Employee
	 * @param employee - Employee
	 */
	public static void referenceCheck(Employee employee) {

		// 100% chance to be a good reference
		System.out.println("Starting reference check... success!");
	}

	/**
	 * Changes the Employee pay type
	 * @param employee - Employee
	 * @param type - EmployeeType
	 */
	public static void changeEmployeeStatus(Employee employee, EmployeeType type) {

		employee.setType(type);
		System.out.println("Employee status changed to " + type);
	}

	/**
	 * Uses a randomizer to decide on Employee Type
	 * @return EmployeeType
	 */
	public static EmployeeType decideEmployeeType() {

		int randomSelector = random.nextInt(2);

		if (randomSelector == 1) {
			return EmployeeType.SALARY;
		}
		else {
			return EmployeeType.HOURLY;
		}
	}
}
