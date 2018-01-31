class DoubleNode {
	private int data;
	public DoubleNode next;
	public DoubleNode previous;
	public DoubleNode(DoubleNode next,int data,DoubleNode previous) {
		this.data=data;
		this.next=next;
		this.previous=previous;
	}
	public DoubleNode() {
		
	}
	public void setData(int data) {
		this.data=data;
	}
	public void setNext(DoubleNode next) {
		this.next=next;
	}
	public void setPrevious(DoubleNode previous) {
		this.previous=previous;
	}
	public DoubleNode getNext() {
		return this.next;
	}
	public int getData() {
		return this.data;
	}
	public DoubleNode getPrevious() {
		return this.previous;
	}
}