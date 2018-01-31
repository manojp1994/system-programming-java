import java.util.*;
class DoubleNode {
	DoubleNode nextlink;
	DoubleNode prevlink;
	int data;
	public DoubleNode(DoubleNode nextlink,int data,DoubleNode prevlink) {
		this.nextlink=nextlink;
		this.prevlink=prevlink;
		this.data=data;
	}
	public void setNextlink(DoubleNode nextlink) {
		this.nextlink=nextlink;
	}
	public DoubleNode getNextlink() {
		return this.nextlink;
	}
	public void setPrevlink(DoubleNode prevlink) {
		this.prevlink=prevlink;
	}
	public DoubleNode getPrevlink() {
		return this.prevlink;
	}
	public void setData(int data) {
		this.data=data;
	}
	public int getData() {
		return this.data;
	}
}
class DoubleLinkedList {
	DoubleNode start;
	DoubleNode end;
	int size;
	public DoubleLinkedList() {
		this.start=null;
		this.end=null;
		this.size=0;
	}
	public void insertElement(int ele) {
		size+=1;
		DoubleNode dn=new DoubleNode(null,ele,null);
		if(start==null) {
			start=dn;
			end=start;
		}
		else {
			DoubleNode temp=start;
			while(temp.getNextlink()!=null) {
				temp=temp.getNextlink();
			}
			temp.setNextlink(dn);
			dn.setPrevlink(temp);
			end=dn;
		}
	}
	public void display(){
		DoubleNode check = start;
		while(check.getNextlink() != null) {
			System.out.print(check.getData()+"->");
			check = check.getNextlink();
		}
		System.out.println(check.getData());
	}
	public void reverseDisplay(){
		DoubleNode check = end;
		while(check.getPrevlink() != null) {
			System.out.print(check.getData()+"->");
			check = check.getPrevlink();
		}
		System.out.println(check.getData());
	}
	public boolean search(int ele) {
		DoubleNode check=start;
		while(check!=null) {
			if(check.getData()==ele)
				return true;
			check=check.getNextlink();
		}
		return false;
	}
	public void delete(int ele) {
		DoubleNode previous=start;
		DoubleNode check=start;
		while(check.getData()!=ele) {
			//System.out.println(check.getData());
			previous = check;
			check = check.getNextlink();
		}
		previous.setNextlink(check.getNextlink());
    check.setNextlink(null);
	}
}
public class Doublelinkrev {
	public static void main(String[] args) {
		DoubleLinkedList dll=new DoubleLinkedList();
		Scanner sc=new Scanner(System.in);
		String s=sc.nextLine();
		String inputs[]=s.split("->");
		for(int i=0;i<inputs.length;i++) {
			dll.insertElement(Integer.parseInt(inputs[i]));
		}
		System.out.println("display");
		dll.display();
		System.out.println("reverse display");
		dll.reverseDisplay();
		// System.out.print("search element status : ");
		// System.out.println(dll.search(4));
		System.out.println("deleted element is : ");
		dll.delete(2);
		dll.display();
	}
}