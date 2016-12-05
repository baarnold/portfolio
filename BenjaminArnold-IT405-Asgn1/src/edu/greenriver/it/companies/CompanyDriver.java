/**
 * 
 */
package edu.greenriver.it.companies;

import java.util.ArrayList;

/**
 * This Class is the Driver for the Companies package for IT405 Assignment 1
 * @author Benjamin Arnold
 * @version 1-JUL-2016
 */
public class CompanyDriver {

	/**
	 * Main method
	 * @param args
	 */
	public static void main(String[] args) {

		// Construct first company
		String firstCompName = "Blackdawn Shipping LLC";
		String firstCompAddress = "367 Alcaz Road Silver Pines, WA 98077";
		String firstCompAbbrev = "BDS";
		ArrayList<Employee> firstCompEmpList = new ArrayList<Employee>();

		// Construct First Company Employees
		Administrator bdsAdmin = new Administrator(12, "John Dunraven", "M", "14-03-1975", "23-09-2003", 10000);
		FinancialAnalyst bdsFinAn = new FinancialAnalyst(13, "Reina Vasquez", "F", "02-02-1976", "03-10-2003", 10000);
		Operations bdsOps1 = new Operations(14, "Zoe Doukas", "F", "17-06-1991", "09-10-2003");
		Operations bdsOps2 = new Operations(15, "Wayne Wright", "M", "12-02-1984", "09-12-2003");
		Operations bdsOps3 = new Operations(16, "Jasminder Singh", "F", "11-12-1982", "09-12-2003");

		firstCompEmpList.add(bdsAdmin);
		firstCompEmpList.add(bdsFinAn);
		firstCompEmpList.add(bdsOps1);
		firstCompEmpList.add(bdsOps2);
		firstCompEmpList.add(bdsOps3);

		Company bds = new Company(firstCompName, firstCompAddress, firstCompAbbrev, firstCompEmpList);

		System.out.println("********        ********\nCompany: " + bds.getCompanyName());
		System.out.println("\nEmployees\n========");

		for (int i = 0; i < bds.getEmployees().size(); i++) {
			Employee temp = bds.getEmployees().get(i);
			System.out.println("Name: " + temp.getEmpName());
			System.out.println("	Employee ID: " + bds.getCompanyAbrev() + temp.getEmpID());
			System.out.println("	Sex: " + temp.getEmpSex());
			System.out.println("	Birthday: " + temp.getEmpBirthday());
			System.out.println("	Date Joined: " + temp.getEmpJoinDate());
			System.out.println("");

		}

		// Construct first company
		String secCompName = "Fenris Sporting Goods";
		String secCompAddress = "1212 Fenris Drive Silver Pines, WA 98077";
		String secCompAbbrev = "FSG";
		ArrayList<Employee> secCompEmpList = new ArrayList<Employee>();

		// Construct First Company Employees
		Administrator fsgAdmin = new Administrator(77768, "Derek Renn", "M", "13-06-1989", "23-09-2010", 10000);
		FinancialAnalyst fsgFinAn = new FinancialAnalyst(77798, "Laraine Sinclair", "F", "02-02-1992", "03-10-2010", 10000);
		Operations fsgOps1 = new Operations(77804, "Catriona O'Dougal", "F", "11-09-1991", "09-10-2010");
		Operations fsgOps2 = new Operations(77844, "Rowena Albricht", "F", "12-01-1988", "09-12-2010");
		Operations fsgOps3 = new Operations(77851, "Lothar Zeigler", "M", "11-12-1992", "09-01-2011");

		secCompEmpList.add(fsgAdmin);
		secCompEmpList.add(fsgFinAn);
		secCompEmpList.add(fsgOps1);
		secCompEmpList.add(fsgOps2);
		secCompEmpList.add(fsgOps3);

		Company fsg = new Company(secCompName, secCompAddress, secCompAbbrev, secCompEmpList);

		System.out.println("\n********        ********\nCompany: " + fsg.getCompanyName());
		System.out.println("\nEmployees\n========");

		for (int i = 0; i < fsg.getEmployees().size(); i++) {
			Employee temp = fsg.getEmployees().get(i);
			System.out.println("Name: " + temp.getEmpName());
			System.out.println("	Employee ID: " + fsg.getCompanyAbrev() + temp.getEmpID());
			System.out.println("	Sex: " + temp.getEmpSex());
			System.out.println("	Birthday: " + temp.getEmpBirthday());
			System.out.println("	Date Joined: " + temp.getEmpJoinDate());
			System.out.println("");

		}

	}

}
