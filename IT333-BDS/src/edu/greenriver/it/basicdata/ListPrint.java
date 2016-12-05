package edu.greenriver.it.basicdata;

import java.util.*;

/**
 * Class to complete Excise - Basic Data Structures Problem 1a
 * @author Benjamin Arnold
 * @version 17-APR-2016
 */
public class ListPrint {
	
	/**
	 * Main Method
	 * @param args
	 */
	public static void main(String[] args) {
		List<Integer> listL = new ArrayList<Integer>();
		List<Integer> listP = new ArrayList<Integer>();
		
		listL.add(6);
		listL.add(36);
		listL.add(216);
		listL.add(73);
		listL.add(5120);
		listL.add(94);
		listL.add(1);
		listL.add(42);
		listL.add(84);
		listL.add(234);
		
		listP.add(0);
		listP.add(3);
		listP.add(5);
		listP.add(7);
		listP.add(9);
		Collections.sort(listP);
		
		printLots(listL, listP);
	}
	
	/**
	 * Method to take two lists, L and P, and print L elements at P element indexes
	 * @param L - Integer ArrayList
	 * @param P - Integer ArrayList
	 */
	public static void printLots(List L, List P) {


		for (int i = 0; i < P.size(); i++) {
			Integer pIndex = (Integer) P.get(i);
			System.out.println(L.get(pIndex));
			
		}
		
	}
	
}
