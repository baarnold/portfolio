/**
 * 
 */
package edu.greenriver.it.companies;

/**
 * This Class is to grant FinancialAnalyst methods to Employee classes
 * @author Benjamin Arnold
 * @version 1-JUL-2016
 */
public class FinancialAnalyst extends Employee {

	// Declare variables
	private int approvalAmount;
	private String expenseAmount = "Not Authorized";

	/**
	 * Method to create a FinancialAnalyst from superclass Employee
	 * @param empID
	 * @param empName
	 * @param empSex
	 * @param empBirthday
	 * @param empJoinDate
	 */
	public FinancialAnalyst(int empID, String empName, String empSex, String empBirthday, String empJoinDate,
			int approvalAmount) {

		super(empID, empName, empSex, empBirthday, empJoinDate);
		this.approvalAmount = approvalAmount;
	}

	
	/**
	 * Method to get the amount an analyst may approve for expenses
	 * @return int - approvalAmount
	 */
	public int getApprovalAmount() {
	
		return approvalAmount;
	}

	
	/**
	 * Method to set the amount an analyst may approve for expenses
	 * @param int approvalAmount
	 */
	public void setApprovalAmount(int approvalAmount) {
	
		this.approvalAmount = approvalAmount;
	}
	
	/**
	 * Method to get the amount the Administrator may approve for expenses
	 * @return String - approveAmount
	 */
	public String getExpenseAmount() {
		
		return expenseAmount;
	}


	/* (non-Javadoc)
	 * @see java.lang.Object#toString()
	 */
	@Override
	public String toString() {

		return "FinancialAnalyst [approvalAmount=" + approvalAmount + ", expenseAmount=" + expenseAmount
				+ ", toString()=" + super.toString() + "]";
	}
	
	
}
