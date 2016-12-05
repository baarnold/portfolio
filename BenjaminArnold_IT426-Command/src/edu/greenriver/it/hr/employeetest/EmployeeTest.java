package edu.greenriver.it.hr.employeetest;

import edu.greenriver.it.hr.HumanResources;

/**
 * Class to test the HumanResource Command Classes
 * @author Benjamin Arnold
 *
 */
public class EmployeeTest
{
    public static void main(String[] args)
    {
        //test hiring process
        HumanResources hr = new HumanResources();
        hr.testHiringProcess();
        
    }
}
