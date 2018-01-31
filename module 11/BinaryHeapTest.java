class Node
	{
	Node next;
	int data;

	public Node(Node next,int data)
	{
		this.next = next;
		this.data = data;
	}
	public Object getData()
	{
		return this.data;
	}
		
	public void setData(int data)
	{
		this.data = data;
	}
		
	public Node getNext()
	{
		return this.next;
	}
		
	public void setNext(Node next)
	{
		this.next = next;
	}
}
class BinaryHeaps {
	Node start;
	Node end;
	int size;
	Node n;
	public BinaryHeaps() {
		this.start=null;
		this.end=null;
		this.size=0;
	}
	public void insert(int element) {
		size++;
		n=new Node(null,element);
		if(start==null) {
			start=n;
		}
		else {
			Node temp=start;
			while(temp.getNext()!=null) {
				temp=temp.getNext();
			}
			temp.setNext(n);
		}
		heapifyup();
	}
	public void heapify() {
		int child=size-1;
		int parent=child/2;
		int temp;
		while(parent[i]<child[i]) {
			parent[i]=child[i];
			child[i]=temp;
			temp=parent[i];
		}
	}
	public void print() {
		Node check=start;
		while(check.getNext()!=null) {
			System.out.println(check.getData());
			check=check.getNext();
		}
	System.out.println(check.getData());
	}
}
public class BinaryHeapTest {
	public static void main(String[] args) {
		BinaryHeaps heaps=new BinaryHeaps();
		heaps.insert(10);
		heaps.insert(20);
		heaps.insert(30);
		heaps.insert(40);
		heaps.insert(50);
		heaps.print();
		heaps.heapifyup();
	}
}