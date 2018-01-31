import java.util.*;
class Node {
	private Node link;
	private int data;
	public Node(int data,Node link) {
		this.data=data;
		this.link=link;
	}
	public void setData(int data) {
		this.data=data;
	}
	public void setLink(Node link) {
		this.link=link;
	}
	public int getData() {
		return this.data;
	}
	public Node getLink() {
		return this.link;
	}
}
 class ReverseTest {
	private Node start;
	private Node end;
	private int size;
	int[] array=new int[15];
	public ReverseTest() {
		this.start=null;
		this.end=null;
		this.size=0;
	}
	public void add(int element) {
		size++;
		Node n=new Node(element,null);
		if(start==null) {
			start=n;
		}
		else {
			Node temp=start;
			while(temp.getLink()!=null) {
				temp=temp.getLink();
			}
			temp.setLink(n);
		}
	}
	public static Node reverse(Node currentNode)  
 	{  
// For first node, previousNode will be null  
	Node previousNode=null;  
  	Node nextNode;  
  	while(currentNode!=null)  
  	{  
   	nextNode=currentNode.link;  
  // reversing the link  
   	currentNode.link=previousNode;  
  // moving currentNode and previousNode by 1 node  
   	previousNode=currentNode;  
   	currentNode=nextNode;  
  	}  
  		return previousNode;  
	}	  
	public void print() {
		Node check1=start;
		while(check1.getLink()!=null) {
			System.out.println(check1.getData()+" ");
			check1=check1.getLink();
		}
		System.out.println(check1.getData());
	}
public static void main(String[] args) {
	ReverseTest rn=new ReverseTest();

	// Scanner sc = new Scanner(System.in);
	// int n=sc.nextInt();
	// String ele;
	// sc.nextLine();
	// ele=sc.nextLine();

		rn.add(1);
		rn.add(2);
		rn.add(3);
		rn.add(4);
		rn.add(5);
		rn.add(6);
		rn.add(7);
		rn.add(8);
		rn.add(9);
		rn.add(10);
		rn.print();
		rn.reverse();
		rn.print();
	}
}

