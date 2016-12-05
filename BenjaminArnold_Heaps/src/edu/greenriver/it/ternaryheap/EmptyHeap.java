package edu.greenriver.it.ternaryheap;

import java.util.Collection;
import java.util.Iterator;
import java.util.NoSuchElementException;
import java.util.Queue;

/**
 * Class to develop a Ternary Heap, with 3 children to each node
 * @author Benjamin Arnold
 * @version 22-MAY-2016
 * @param <T>
 */
public class EmptyHeap<T extends Comparable<T>> implements Queue<T> {
	
	//Default starting capacity
	private static final int INITIAL_CAPACITY = 10;
	
	//Declare new array of T
	private T[] ternaryHeap;
	
	//Define size and nextIndex
	private int size;
	private int nextIndex = 1;
	
	/**
	 * Default Constructor
	 */
	@SuppressWarnings("unchecked")
	public EmptyHeap() {
		
		//Create default ternaryHeap array
		ternaryHeap = (T[]) new Comparable[INITIAL_CAPACITY + 1];
	}

	/**
	 * Add new element to the ternary heap
	 */
	@Override
	public boolean add(T newElement) // insert() operation
	{
		if (nextIndex == ternaryHeap.length) {
			resize();
		}
		
		//Add element at next available index
		ternaryHeap[nextIndex] = newElement;
		
		//Percolate the element up 
		percolateUp(nextIndex);
		
		//Increment nextIndex and size
		nextIndex++;
		size++;
		
		return true;
	}
	
	/**
	 * Method to resize the heap
	 */
	@SuppressWarnings("unchecked")
	private void resize() {
		
		//Define new array double the size of the previous array
		T[] newTernaryHeap = (T[]) new Comparable[ternaryHeap.length * 2];
		
		//For each element in the original ternaryHeap
		for (int i = 0; i < ternaryHeap.length; i++) {
			
			//Copy elements from ternaryHeap to newTernaryHeap in order
			newTernaryHeap[i] = ternaryHeap[i];
		}
		
		//Set ternaryHeap defined to newTernaryHeap
		ternaryHeap = newTernaryHeap;
	}
	
	/**
	 * Method to percolate an element up to its proper place in the ternary heap
	 * @param newElement
	 */
	private void percolateUp(int index) {
		
		//While the current index is not the root
		while (index > 1) {
			int parentIndex = (index + 1)/3;
			
			//If the current index is smaller than the parent index
			if (ternaryHeap[index].compareTo(ternaryHeap[parentIndex]) < 0) {
				swap(index, parentIndex);
			}
			
			//Set current index to parent index and percolateUp
			index = parentIndex;
			
		}
	}
	
	/**
	 * Method to percolate an element down to its proper place in the ternary heap
	 * @param index
	 */
	private void percolateDown(int index) {
		
		//While the last node with children
		while (index <= (size + 1) / 3) {
			
			//Children Node Indices
			int leftChild = (3 * index) - 1;
			int midChild = (3 * index);
			int rightChild = (3 * index) + 1;
			
			//Index to determine which index is smallest between Middle and Right
			int smallestChild;
			
			//Index to check default set to Left Child
			int indexToCheck = leftChild;
			
			//If there is a right child AND it is smaller than the middle child
			if (rightChild < size && ternaryHeap[rightChild].compareTo(ternaryHeap[midChild]) < 0) {
				//Smallest child is right child
				smallestChild = rightChild;
			}
			else {
				//Smallest child is middle child
				smallestChild = midChild;
			}
			
			//If there is a middle child AND the middle child is smaller than the previously smallest child
			if (smallestChild < size && ternaryHeap[smallestChild].compareTo(ternaryHeap[leftChild]) < 0) {
				indexToCheck = smallestChild;
			}
			
			//If the child is smaller than the parent
			if (ternaryHeap[indexToCheck].compareTo(ternaryHeap[index]) < 0) {
				
				//Swap parent element with child element
				swap(indexToCheck, index);
				
				index = indexToCheck;
			}
			//Else parent is smaller than children
			else {
				
				//Break the loop
				break;
			}
		}
	}
	
	/**
	 * Method to swap elements at indices first and second
	 * @param first
	 * @param second
	 */
	private void swap(int first, int second) {
		T temp = ternaryHeap[first];
		ternaryHeap[first] = ternaryHeap[second];
		ternaryHeap[second] = temp;
	}

	/**
	 * Peeks at the first element of the priority queue
	 */
	@Override
	public T peek() // findMin() operation
	{
		//If the ternary heap is empty, throw exception
		if (isEmpty()) {
			throw new NoSuchElementException("The heap is empty");
		}
		
		//Return element at root
		return ternaryHeap[1];
	}

	/**
	 * Removes root element
	 */
	@Override
	public T remove() {
		
		//If the ternary heap is empty, throw exception
		if (isEmpty()) {
			throw new NoSuchElementException("The heap is empty"); 
		}
		
		//Store the root element in index 0 for referencing
		ternaryHeap[0] = ternaryHeap[1];
		
		//Swap root with last used index (size)
		swap(1, size);
		
		//Decrement counters
		size--;
		nextIndex--;
		
		percolateDown(1);
		
		return ternaryHeap[0];
	}

	/**
	 * Returns size of the ternaryHeap
	 */
	@Override
	public int size() {
		
		return size;
	}

	/**
	 * Returns whether the size is zero
	 */
	@Override
	public boolean isEmpty() {
		
		return size == 0;
	}

	/**
	 * Method to clear the ternary heap
	 */
	@SuppressWarnings("unchecked")
	@Override
	public void clear() {
		size = 0;
		ternaryHeap = (T[]) new Comparable[INITIAL_CAPACITY + 1];
	}
	
	

	// ignore methods below this

	@Override
	public boolean remove(Object search) {
		
		throw new UnsupportedOperationException("Method not supported.");
	}

	@Override
	public boolean contains(Object search) {
		
		throw new UnsupportedOperationException("Method not supported.");
	}

	@Override
	public T poll() {
		
		throw new UnsupportedOperationException("Method not supported.");
	}

	@Override
	public T element() {
		
		throw new UnsupportedOperationException("Method not supported.");
	}

	@Override
	public boolean offer(T e) {
		
		throw new UnsupportedOperationException("Method not supported.");
	}

	@Override
	public boolean addAll(Collection<? extends T> c) {
		
		throw new UnsupportedOperationException("Method not supported.");
	}

	@Override
	public boolean containsAll(Collection<?> c) {
		
		throw new UnsupportedOperationException("Method not supported.");
	}

	@Override
	public boolean removeAll(Collection<?> c) {
		
		throw new UnsupportedOperationException("Method not supported.");
	}

	@Override
	public boolean retainAll(Collection<?> c) {
		
		throw new UnsupportedOperationException("Method not supported.");
	}

	@Override
	public Iterator<T> iterator() {
		
		throw new UnsupportedOperationException("Method not supported.");
	}

	@Override
	public Object[] toArray() {
		
		throw new UnsupportedOperationException("Method not supported.");
	}

	@Override
	public <T> T[] toArray(T[] a) {
		
		throw new UnsupportedOperationException("Method not supported.");
	}
}
