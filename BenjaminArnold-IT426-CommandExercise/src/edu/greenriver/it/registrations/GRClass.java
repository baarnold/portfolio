package edu.greenriver.it.registrations;

import java.util.ArrayList;
import java.util.Collections;
import java.util.List;

public class GRClass {

	// track # of seats, class name, location, enrolled students
	private String name;
	private String location;
	private int seats;

	// students enrolled or on wait list
	private List<Student> enrolledStudents = new ArrayList<Student>();
	private List<Student> waitListedStudents = new ArrayList<Student>();

	/**
	 * @param name
	 * @param location
	 * @param seats
	 */
	public GRClass(String name, String location, int seats) {

		this.name = name;
		this.location = location;
		this.seats = seats;
	}

	public boolean registerStudent(Student student) {

		if (!hasStudent(student)) {

			// is the class full
			if (enrolledStudents.size() == seats) {
				// add student to waitlist
				waitListedStudents.add(student);
			}
			else {
				enrolledStudents.add(student);
			}
			
			return true;
		}
		
		return false;

	}
	
	public boolean dropStudent(Student student) {
		if (hasStudent(student)) {
			
			if (waitListedStudents.contains(student)) {
				waitListedStudents.remove(student);
			}
			else {
				enrolledStudents.remove(student);
				
				if (waitListedStudents.size() > 0) {
					
					enrolledStudents.add(waitListedStudents.get(0));
				}
			}
			
			return true;
		}
		
		return false;
	}

	public boolean hasStudent(Student student) {

		return enrolledStudents.contains(student) || 
				waitListedStudents.contains(student);

	}

	/**
	 * @return the name
	 */
	public String getName() {

		return name;
	}

	/**
	 * @return the location
	 */
	public String getLocation() {

		return location;
	}

	/**
	 * @return the seats
	 */
	public int getSeats() {

		return seats;
	}

	/**
	 * @return the enrolledStudents
	 */
	public List<Student> getEnrolledStudents() {

		return Collections.unmodifiableList(enrolledStudents);
	}

	/**
	 * @return the waitListedStudents
	 */
	public List<Student> getWaitListedStudents() {

		return Collections.unmodifiableList(waitListedStudents);
	}

	public String toString() {

		return name;
	}

}
