package edu.greenriver.it.ternaryheap;

import java.util.Random;

/**
 * Class to test the EmptyHeap Ternary Heap class for IT333
 * @author Benjamin Arnold
 * @version 22-MAY-2016
 */
public class TernaryHeapDriver {
	
	/**
	 * Main driver
	 * @param args
	 */
	public static void main(String[] args) {
		
		System.out.println("Benjamin Arnold's Ternary Heap\n******************************");
		
		//Declare a new EmptyHeap of integer objects
		EmptyHeap<Integer> heap = new EmptyHeap<Integer>();

		//Declare a new random generator
		Random random = new Random();
		
		//For 100 iterations
		for (int i = 0; i < 100; i++) {
			//Add random number (1 -> 100) to the heap
			heap.add(random.nextInt(100));
		}
		System.out.println("\nHeap Created.  Heap has: " + heap.size() + " element(s).");
		System.out.println("Peeking at first element: " + heap.peek());

		//While the heap is not empty, remove elements
		while (!heap.isEmpty()) {
			System.out.print(heap.remove() + " ");
		}
		System.out.println("Clearing Heap.");
		heap.clear();
		
		//For 1000 iterations
		for (int i = 0; i < 1000; i++) {
			//Add random number (1 -> 1000) to the heap
			heap.add(random.nextInt(1000));
		}
		System.out.println("\nHeap Created.  Heap has: " + heap.size() + " element(s).");
		System.out.println("Peeking at first element: " + heap.peek());

		//While the heap is not empty, remove elements
		while (!heap.isEmpty()) {
			System.out.print(heap.remove() + " ");
		}
		System.out.println("Clearing Heap.");
		heap.clear();
		
		//For 10000 iterations
		for (int i = 0; i < 10000; i++) {
			//Add random number (1 -> 10000) to the heap
			heap.add(random.nextInt(10000));
		}
		System.out.println("\nHeap Created.  Heap has: " + heap.size() + " element(s).");
		System.out.println("Peeking at first element: " + heap.peek());
		
		//While the heap is not empty, remove elements
		while (!heap.isEmpty()) {
			heap.remove();
		}
		System.out.println("Clearing Heap.");
		heap.clear();
		
		//For 100000 iterations
		for (int i = 0; i < 100000; i++) {
			//Add random number (1 -> 100000) to the heap
			heap.add(random.nextInt(100000));
		}
		System.out.println("\nHeap Created.  Heap has: " + heap.size() + " element(s).");
		System.out.println("Peeking at first element: " + heap.peek());

		//While the heap is not empty, remove elements
		while (!heap.isEmpty()) {
			heap.remove();
		}
		System.out.println("Clearing Heap.");
		heap.clear();
		
		heap.add(5);
		System.out.println("\nHeap Created.  Heap has: " + heap.size() + " element(s).");
		System.out.println("Peeking at first element: " + heap.peek());
		System.out.println("Calling remove() on heap with one element...");
		System.out.println(heap.remove());
		System.out.println("Clearing Heap.");
		heap.clear();
		
		System.out.println("\nCalling remove() on empty heap...");
		heap.remove();
	}
}
