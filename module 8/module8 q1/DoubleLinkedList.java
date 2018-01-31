public class DoubleLinkedList {
	int size;
	DoubleNode start;
	DoubleNode end;
	DoubleNode dn;
	public DoubleLinkedList() {
		this.size=0;
		this.start=null;
		this.end=null;
	}
	public void insertElement(int element) {
		dn=new DoubleNode(null,element,null);
		size++;
		if(start==null) {
			start=dn;
			dn.next = null;
			start.previous = null;
			end=start;
		}
		else {
			end.next = dn;
			dn.next = null;
			end=dn;
			//System.out.println(dn);
		}
	}
	public void pushFront(int element) {
		dn=new DoubleNode(end,element,start);
		size++;
		start=dn;
	}
	public void pushBack(int element) {
		DoubleNode check = start;
		dn=new DoubleNode(null,element,null);
		size++;
		while (check!=null) {
			if(check.getNext()==null){
				check.setNext(dn);
				end = dn;
				break;
			}
			check=check.getNext();
		}
	}
	public void print(){
		DoubleNode check = start;
		while(check!=null){
			System.out.println(check.getData());
			check=check.getNext();
		}
	}	 
}