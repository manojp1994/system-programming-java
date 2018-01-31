class StackNode {
	private int data;
	private StackNode stacknode;
	public StackNode(int data, StackNode stacknode) {
		this.data=data;
		this.stacknode=stacknode;
	}
	public void setData(int data) {
		this.data=data;
	}
	public void setstackNode(StackNode stacknode) {
		this.stacknode=stacknode;
	}
	public int getData() {
		return this.data;
	}
	public StackNode getstackNode() {
		return this.stacknode;
	}
}
class StackLinkedList {
	int size;
	StackNode top;
	StackNode node;
	public StackLinkedList() {
		size=0;
		top=null;
	}
	public StackNode isEmpty() {
		return top=null;
	}
	public void push(int element) {
		size++;
		node = new StackNode (element, null);
		if(top==null) {
			top=node;
		}
		else if(top!=node) {
			node.setstackNode(top);
				top=node;
		}
	}
	public void pop() {
		StackNode store = top;
        top = store.getstackNode();
        size-- ;
	}
	public void print() {
		StackNode check = top;
		while(top!=null) {
			System.out.println(top.getData());
			top=top.getstackNode();
		}
	}
}
public class StackLinkedListTest {
	public static void main(String[] args) {
		StackLinkedList list=new StackLinkedList();
		list.push(20);
		list.push(30);
		list.push(40);
		list.push(50);
		list.print();
		list.pop();
		list.pop();
		list.print();
	}
}