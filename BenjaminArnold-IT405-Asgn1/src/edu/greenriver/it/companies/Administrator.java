/**
 * 
 */
package edu.greenriver.it.companies;


/**
 * This Class is to grant Administrator methods to Employee classes
 * @author Benjamin Arnold
 * @version 1-JUL-2016
 */
public class Administrator extends Employee {
	
	private int expenseAmount;
	private String approvalAmount = "Not Authorized";

	/**
	 * Method to create an Administrator from Employee
	 * @param empID
	 * @param empName
	 * @param empSex
	 * @param empBirthday
	 * @param empJoinDate
	 */
	public Administrator(int empID, String empName, String empSex, 
			String empBirthday, String empJoinDate, int expenseAmount) {
		
		super(empID, empName, empSex, empBirthday, empJoinDate);
		this.expenseAmount = expenseAmount;
	}

	
	/**
	 * Method that gets the remaining amount the Administrator may sign for expenses
	 * @return int - expenseAmount
	 */
	public int getExpenseAmount() {
	
		return expenseAmount;
	}

	
	/**
	 * Method that sets the amount the Administrator may sign for expenses
	 * @param int expenseAmount
	 */
	public void setExpenseAmount(int expenseAmount) {
	
		this.expenseAmount = expenseAmount;
	}
	
	/**
	 * Method to get the amount the Administrator may approve for expenses
	 * @return String - approveAmount
	 */
	public String getApprovalAmount() {
		
		return approvalAmount;
	}


	/* (non-Javadoc)
	 * @see java.lang.Object#toString()
	 */
	@Override
	public String toString() {

		return "Administrator [expenseAmount=" + expenseAmount + ", approvalAmount=" + approvalAmount + ", toString()="
				+ super.toString() + "]";
	}


}
