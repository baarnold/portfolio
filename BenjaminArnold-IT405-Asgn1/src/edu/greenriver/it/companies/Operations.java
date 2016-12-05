/**
 * 
 */
package edu.greenriver.it.companies;


/**
 * This Class is to grant Operations methods to Employee classes
 * @author Benjamin Arnold
 * @version 1-JUL-2016
 */
public class Operations extends Employee {
	
	private String expenseAmount = "Not Authorized";
	private String approvalAmount = "Not Authorized";

	public Operations(int empID, String empName, String empSex, String empBirthday, String empJoinDate) {
		
		super(empID, empName, empSex, empBirthday, empJoinDate);
	}

	
	/**
	 * Method that gets the remaining amount the Operations may sign for expenses
	 * @return the expenseAmount
	 */
	public String getExpenseAmount() {
	
		return expenseAmount;
	}

	
	/**
	 * Method that gets the amount an analyst may approve for expenses
	 * @return the approvalAmount
	 */
	public String getApprovalAmount() {
	
		return approvalAmount;
	}


	/* (non-Javadoc)
	 * @see java.lang.Object#toString()
	 */
	@Override
	public String toString() {

		return "Operations [expenseAmount=" + expenseAmount + ", approvalAmount=" + approvalAmount + ", toString()="
				+ super.toString() + "]";
	}
	
	
	

}
