public class LinkedList {
	Node start;
	Node end;
	Node n;
	Node temp;
	int size;
	public LinkedList() {
		start=null;
		end=null;
		size=0;
	}
	public void insertElement(int element) {
		n=new Node(element,null);
		size++;
		if(start==null) {
			start=n;
			end=start;
			temp=n;
		}
		else{
			start.setNext(n);
			temp=n;
			end=n;
		}
	}
	public void pushFront(int element) {
		n=new Node(element,start);
		size++;
		start=n;
	}
	public void pushBack(int element) {
		Node check = start;
		n=new Node(element,null);
		size++;
		while (check!=null) {
			if(check.getNext()==null){
				check.setNext(n);
				end = n;
				break;
			}
			check=check.getNext();
		}
	}
	public void pop(int index){
		size--;
		int count = 0;
		Node check = start;
		Node flag = null;
		while(check!=null){
			if(count==index){
				flag=check;
				break;
			}
			count++;
			check = check.getNext();
		}
		check = start;
		while(check!=null){
			if(check.getNext()==flag){
				check.setNext(flag.getNext());
				flag=null;
				break;
			}
			check = check.getNext();
		}
	}
	public void removeByElement(int element) {
		int count = 0;
		Node check = start;
		while(check!=null) {
			if(check.getData()==element) {
				pop(count);
				break;
			}
			count++;
			check=check.getNext();
		}
	}
	public void popFront() {
		if(start!=null) {
			start=start.getNext();
			pop(0);
			size--;
		}
	}
	public void popBack() {
		pop(size);
		size--;
	}
	public void print(){
		Node check = start;
		while(check!=null){
			System.out.println(check.getData());
			check=check.getNext();
		}
	}
}
