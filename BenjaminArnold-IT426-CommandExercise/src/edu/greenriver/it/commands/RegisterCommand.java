package edu.greenriver.it.commands;

import edu.greenriver.it.registrations.GRClass;
import edu.greenriver.it.registrations.Student;

public class RegisterCommand extends AbstractEnrollmentCommand {

	/**
	 * @param student
	 * @param aClass
	 */
	public RegisterCommand(Student student, GRClass aClass) {

		super(student, aClass);
	}

	@Override
	public void execute() {

		registerStudent();
		
	}

	@Override
	public void unexecute() {
		
		if (somethingChanged) {
			dropStudent();
		}
	}
	
}
