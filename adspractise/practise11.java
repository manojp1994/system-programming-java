import java.util.*;
class Link {
	private int data;
	private Link next;
	public Link(int data,Link next)	{
		this.data=data;
		this.next=next;
	}
	public void setData(int data) {
		this.data=data;
	}
	public int getData() {
		return this.data;
	}
	public void setNext(Link next) {
		this.next=next;
	}
	public Link getNext() {
		return this.next;
	}
}
class SinglyLinkedlist {
	private Link start;
	private int size;
	private Link end;
	private Link n;
	private Link temp;
	public SinglyLinkedlist()	{
		this.start=null;
		this.size=0;
		this.end=null;
	}
	public void insert(int element) {
		n=new Link(element,null);
		size++;
		if(start==null) {
			start=n;
			temp=n;
			end=start;
		}
		else {
			temp.setNext(n);
			temp=n;
			end=n;
		}
	}
	// public void Remove(int element)	{
	//  	private Link check=null;
	//  	private int count=0;
	//  	if(element==check.getData()) {
	//  		;
	//  	}
	// }
	public void print() {
		Link check=start;
		while(check!=null){
			System.out.println(check.getData());
			check=check.getNext();
		}
	}
}
public class practise11 {
	public static void main(String[] args) {
		SinglyLinkedlist sl=new SinglyLinkedlist();
		sl.insert(10);
		sl.insert(20);
		sl.insert(30);
		sl.insert(40);
		sl.insert(50);
		sl.insert(60);
		sl.insert(70);
		sl.print();
	}
}