class Node {
	Node link;
	int data;
	
	public Node(int data) {
		this.data=data;
	}
	public void setLink(Node link) {
		this.link=link;
	}
	public void setData(int data) {
		this.data=data;
	}
	public Node getLink() {
		return this.link;
	}
	public int getData() {
		return this.data;
	}
}
class QueueNode {
	private Node front;
	private Node rear;
	private int size;

	public QueueNode() {
		front=null;
		rear=null;
		this.size=0;
	}
	public void addQueue(int element) {
		size++;
		Node newlink=new Node(element);
		newlink.link=null;
		if(rear==null)
			rear=newlink;
		else {
			Node temp=rear;
			temp.link=newlink;
			temp=newlink;
		}
	}
	public void removeQueue() {
		int t=rear.data;  
     if(rear.link==null)  
       rear=null;  
     rear=rear.link;
	}
	
	public void print() {
		Node check = front;
		while(front!=null) {
			System.out.println(front.getData());
			front=front.getLink();
		}
	}
}

public class Queuesingle {
	public static void main(String[] args) {
		QueueNode qn=new QueueNode();
		qn.addQueue(10);
		qn.addQueue(20);
		qn.addQueue(30);
		qn.addQueue(40);
		System.out.println("pushed elements are : ");
		qn.print();
		qn.removeQueue();
		qn.removeQueue();
		System.out.println("pushed elements are : ");
		qn.print();
	}
}