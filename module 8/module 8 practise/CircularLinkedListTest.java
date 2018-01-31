class SinglyNode {
	private int data;
	private SinglyNode node;
	
	public SinglyNode(int data,SinglyNode node) {
		this.data=data;
		this.node=null;
	}
	public void setData(int data) {
		this.data=data;
	}
	public void setNode(SinglyNode node) {
		this.node=node;
	}
	public int getData() {
		return this.data;
	}
	public SinglyNode getNode() {
		return this.node;
	}
}
class CircularLinkedList {
	private SinglyNode start;
	private SinglyNode end;
	//private CircularNode n;
	private int size;
	public CircularLinkedList() {
		this.start=null;
		this.end=null;
		this.size=0;
	}
	public void insert(int element) {
		SinglyNode n=new SinglyNode(element,null);
		size++;
		if(start==null) {
			start=n;
			n=end;
		}
		else {
			SinglyNode temp=start;
				while(temp.getNode()!=null) {
					temp = temp.getNode();
				}
			temp.setNode(n);
		}
	}
	 public void delete() {

	 }
	public void print(){
		SinglyNode check = start;
		while(check!=null){
			System.out.println(check.getData());
			check=check.getNode();
		}
	}
}
public class SinglyNodeTest {
	public static void main(String[] args) {
		SinglyNode list=new SinglyNode();
			list.insert(1);
			list.insert(2);
			list.insert(3);
			list.insert(4);
			list.insert(5);
			list.insert(6);
			list.insert(7);
			list.insert(8);
			list.insert(9);
			list.insert(10);
			list.print();
	}
}