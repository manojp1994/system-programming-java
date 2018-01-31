import java.util.Scanner;
import java.util.StringTokenizer;
import java.util.ArrayList;
@SuppressWarnings("unchecked")
class Node<E> {
	Node riNode;
	Node leNode;
	Node next;
	 E data;
	public void setData(E data) {
		this.data =data;
	}
public E getData() {
		return this.data;
	}
	public void setRiNode(Node<E> riNode) {
		this.riNode = riNode;
	}
	public Node<E> getRiNode() {
		return this.riNode;
	}
	public void setLeNode(Node<E> leNode) {
		this.leNode = leNode;
	}
	public void setNext(Node<E> next) {
		this.next = next;
	}
	public Node<E> getNext() {
		return this.next;
	}
	public Node<E> getLeNode() {
		return this.leNode;
	}
}
class BinaryTree <E extends Comparable<E>>{
	Node<E> rootNode;
	int index = 0;
	int level = 0;
	int nodePointer = 0;
	Node<E> childNode;
	Node<E> traverseNode;
	Node<E> next;
	ArrayList inOrder = new ArrayList();
	public void insertElement(E data) {
	Node<E> newNode = new Node<E>();

		newNode.setData(data);
		   if (rootNode == null)
		    {
			rootNode = newNode;
			traverseNode = newNode;
			childNode = newNode;
			next = newNode;
			this.updateLevel(level);
			this.updateNodePointer();
		} else 
		{
			if (childNode.getLeNode() == null) {
			 	childNode.setLeNode(newNode);
			} else if (childNode.getRiNode() == null)
			 {
	 			childNode.setRiNode(newNode);
	 			this.updateNodePointer();
	 			this.updateLevel(level);
			}
			next.setNext(newNode);


      		next = newNode;
		}
		index++;
	}

	public void updateNodePointer() {
		Node<E> node1 = traverseNode;
		int i = 0;
		if (nodePointer == 0) {
			childNode = rootNode;
		} else {
			while (i <= nodePointer) {
				childNode = node1;
				node1 = node1.getNext();
				i++;
			}
		}
		nodePointer++;
	}


	public void updateLevel(int presentLevel) {
		if (index == ((2^level) - 1)) {
			level++;
		}
	}

	public void inOrderTraversel(Node root) {
		if (root != null) {
			inOrderTraversel(root.getLeNode());
			if (root.getData() != null) {
				inOrder.add(root.getData());
			}
			inOrderTraversel(root.getRiNode());
		}
	}
	public static void main(String args[]) {
		BinaryTree bt=new BinaryTree();
	 	Scanner sc=new Scanner(System.in);
		String input=sc.nextLine();
		String s1[]=input.split(",");
		for(int q=0; q<s1.length;q++) {
			int data=Integer.parseInt(s1[q]);
			bt.insertElement(data);
		}
		bt.insertElement(null);
		
		bt.inOrderTraversel(bt.rootNode);
		ArrayList<Integer>numbers = bt.inOrder;
		int flag = 0;
		for (int k = 0; k < numbers.size() - 1; k++) {
			if (numbers.get(k) != null &&numbers.get(k+1) != null) {
				if (numbers.get(k) < numbers.get(k+1)) {
					continue;
				} else {
					flag = 1;
					break;
				}	
			}
		}
		if (flag == 1) 
		{
			System.out.println("False");
		} else
		 {
			System.out.println("True");
		}
	}
}


class Queue<E> {
	Node<E> front;
  	Node<E> rear;
  	int count = 0;
	public void enQueue(E data) {
		Node<E> newNode = new Node();
		newNode.setData(data);
		if (front == null) {
			front = newNode;
			rear = newNode;
			rear.setNext(front);
			count++;
		} else {
			rear.setNext(newNode);
      		rear = newNode;
      		rear.setNext(front);
      		count++;
		}
	}
	
	public void deQueue(){
    	front = front.getNext();
    	count--;
	}
	
	public boolean isEmpty(){
		if (front == null) {
			return true;
		}
		return false;
	}

	public E getFront(){
		return front.getData();
	}

	public void print() {
		Node<E> printNode = front;
		int p = 0;
		if (!isEmpty()) {
			 while (p < count) {
		      System.out.println(printNode.getData());
		      printNode = printNode.getNext();
		      p++;
		    }
		} else {
			System.out.println("Queue is empty");
		}
	   
	}
}