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
	public void setLink(Node Link) {
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
	private Node n;
	public ReverseTest() {
		this.start=null;
		this.end=null;
		this.size=0;
	}
	public void add(int element) {
		size++;
		n=new Node(element,null);
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
	// public void reversePrint() {
	// 	Node check=start;
	// 	while(check.getLink()!=null) {
	// 		check=check.getLink();
	// 		check=null;
	// 	}
	// }
	public void print() {
		Node check1=start;
		while(check1.getLink()!=null) {
			System.out.println(check1.getData()+ " ");
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
		//rn.reversePrint();
		//rn.print();
	}
}

