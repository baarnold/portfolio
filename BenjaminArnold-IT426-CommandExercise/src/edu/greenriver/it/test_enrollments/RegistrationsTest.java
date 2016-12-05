package edu.greenriver.it.test_enrollments;

import java.util.Queue;
import java.util.Scanner;
import java.util.Stack;
import java.util.concurrent.LinkedBlockingQueue;

import edu.greenriver.it.commands.CommandType;
import edu.greenriver.it.commands.DropCommand;
import edu.greenriver.it.commands.ICommand;
import edu.greenriver.it.commands.RegisterCommand;
import edu.greenriver.it.registrations.GRClass;
import edu.greenriver.it.registrations.Student;

public class RegistrationsTest {

	private static Queue<ICommand> commandQueue = new LinkedBlockingQueue<ICommand>();
	private static Stack<ICommand> undoStack = new Stack<ICommand>();
	private static Scanner console = new Scanner(System.in);
	private static Student[] students;
	private static GRClass[] classes;

	public static void main(String[] args) {

		// get some classes and students to test
		students = getStudents();
		classes = getClasses();

		// present a menu to the user to give them actions to perform
		menuShowAndSelect();

		console.close();
	}

	public static void menuShowAndSelect() {

		while (true) {
			printMenu();
			menuSelection();
		}
		
	}

	public static void printMenu() {

		// print commands as menu options
		CommandType[] types = CommandType.values();
		for (int i = 0; i < types.length; i++) {
			System.out.println((i + 1) + ": " + types[i].toString());
		}

		// print an execute menu option
		System.out.println("x: Execute all commands in the command queue");

		// print out undo option
		System.out.println("z: Undo last command");
	}

	public static void menuSelection() {

		// perform the users choice
		String choice = console.nextLine();

		switch (choice) {
		case "1":
			registerStudent();
			break;
		case "2":
			dropStudent();
			break;
		case "x":
			executeCommandQueue();
			break;
		case "z":
			undoLastCommand();
			break;
		}
	}
	
	public static void undoLastCommand() {
		//be care that there is a past command
		if (!undoStack.isEmpty()) {
			//pull off last command and unexecute the command
			ICommand last = undoStack.pop();
			
			last.unexecute();
		}
	}
	
	public static void executeCommandQueue() {
		while (!commandQueue.isEmpty()){
			ICommand command = commandQueue.remove();
			command.execute();
			
			//keep track of executed commands to undo later
			undoStack.push(command);
		}
	}

	public static void registerStudent() {

		ICommand register = new RegisterCommand(getStudentFromUser(), getClassFromUser());
		
		commandQueue.add(register);
	}

	public static void dropStudent() {
		ICommand drop = new DropCommand(getStudentFromUser(), getClassFromUser());
		
		commandQueue.add(drop);
	}

	public static Student getStudentFromUser() {

		System.out.println("Enter a student name: ");
		String studentName = console.nextLine();

		// look for student
		for (int i = 0; i < students.length; i++) {
			if (students[i].getName().equals(studentName)) {
				return students[i];
			}
		}
		throw new IllegalStateException("Error finding student: " + studentName);
	}

	public static GRClass getClassFromUser() {

		System.out.println("Enter a class name: ");
		String className = console.nextLine();

		// look for student
		for (int i = 0; i < classes.length; i++) {
			if (classes[i].getName().equals(className)) {
				return classes[i];
			}
		}
		throw new IllegalStateException("Error finding class: " + className);
	}

	public static GRClass[] getClasses() {

		return new GRClass[] { new GRClass("IT 426", "TC 120", 4), new GRClass("IT 333", "TC 206", 3),
				new GRClass("IT 301", "KC 309", 4) };
	}

	public static Student[] getStudents() {

		return new Student[] { new Student("Lindsay"), new Student("Barrack"), new Student("Susan"),
				new Student("Tyler"), new Student("Joseph") };
	}
}
