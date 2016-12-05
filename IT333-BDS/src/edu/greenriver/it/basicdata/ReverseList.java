package edu.greenriver.it.basicdata;

import java.util.*;

/**
 * Class to complete Exercise - Basic Data Structures Problem 2
 * @author Benjamin Arnold
 * @version 17-APR-2016
 */
public class ReverseList {
	
	/**
	 * Main Method
	 * @param args
	 */
	public static void main(String[] args) {
		List<String> listL = new ArrayList<String>();
		
		listL.add("A");
		listL.add("B");
		listL.add("C");
		listL.add("D");
		listL.add("E");
		listL.add("F");
		
		reverseList(listL);
	}
	
	/**
	 * Method to reverse the passed list elements
	 * @param listInput - List of Objects
	 * @return listInput reversed
	 */
	public static List reverseList(List listInput) {
	
		for(int i = listInput.size(); i > 0; i--) {
			System.out.println(i);
			listInput.add(listInput.get(i-1));

		}
		
		for(int j = 0; j < listInput.size(); j++) {
			listInput.remove(0);
		}
		
		return listInput;
	}
}
