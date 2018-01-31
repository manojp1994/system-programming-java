import java.util.Scanner;
import java.util.*;
public class UnBoundedListTest {
	public static void main(String[] args) {
		UnBoundedList unboundedlist=null;
		String values;
		Integer valuei;
		float valuef;
		String valuec;
		int value;
		int place;
		Scanner sc = new Scanner(System.in);
		System.out.println("enter I for Interger");
		System.out.println("enter C for Character");
		System.out.println("enter S for String");
		System.out.println("enter F for Float");
		String reader = sc.next();
		if(reader.equalsIgnoreCase("I"))
			unboundedlist = new UnBoundedList<Integer>();
		else if(reader.equalsIgnoreCase("C"))
			unboundedlist = new UnBoundedList<Character>();
		else if(reader.equalsIgnoreCase("S"))
			unboundedlist = new UnBoundedList<String>();
		else if(reader.equalsIgnoreCase("F"))
			unboundedlist = new UnBoundedList<Float>();
		else
			System.out.println("enter correct input");
		String check = "star";
		while(!check.equalsIgnoreCase("end")){
			check=sc.next();
			if(check.equalsIgnoreCase("push")){
				if(reader.equalsIgnoreCase("S")){
					values=sc.nextLine();
					unboundedlist.pushBack(values);
				}
				else if(reader.equalsIgnoreCase("C")){
					valuec=sc.next();
					unboundedlist.pushBack(valuec);
				}
				else if(reader.equalsIgnoreCase("I")){
					valuei=sc.nextInt();
					unboundedlist.pushBack(valuei);
					unboundedlist.print();
				}
				else if(reader.equalsIgnoreCase("F")){
					valuef=sc.nextFloat();
					unboundedlist.pushBack(valuef);
				}
				
			}else if(check.equalsIgnoreCase("pop")){
				if(reader.equalsIgnoreCase("S")){
					values=sc.nextLine();
					unboundedlist.popBack();
				}
				else if(reader.equalsIgnoreCase("C")){
					valuec=sc.next();
					unboundedlist.popBack();
				}
				else if(reader.equalsIgnoreCase("I")){
					valuei=sc.nextInt();
					unboundedlist.popBack();
					unboundedlist.print();
				}
				else if(reader.equalsIgnoreCase("F")){
					valuef=sc.nextFloat();
					unboundedlist.popBack();
				}
	
			
				
			}else if(check.equalsIgnoreCase("print")){
				unboundedlist.print();
			}
		}
	}
}
class UnBoundedList<E> implements ArrayADT <E> {
	E[] unboundedlist;
	int size;
	int index;
	int alpha=4;
	int beta=2;
	public UnBoundedList() {
		this.size=1;
		this.index=0;
		unboundedlist=(E[]) new Object[size];
	}
	public void pushBack(E element) {
		if(index==size) {
		reallocate(beta*index);
	}
		unboundedlist[index]=element;
		index++;
	}
	public void popBack() {
		if(alpha*(index-1)<=size && index>0) {
			reallocate(size/alpha);									//reallocate(w/alpha)
		} 
		for(int i=size-1;i<1;i--) {
			if(unboundedlist[i]!=null){
				unboundedlist[i]=null; 
			index--;
			break;		
			}
		}
	}
	public void size() {
			System.out.println(index);	
	}
	public void reallocate(int newsize) {
		unboundedlist=Arrays.copyOf(unboundedlist,newsize);
		size=newsize;
	}
	 public void Capacity() {
	 	System.out.println(size);
	 }
	public void print() {
		for (int i = 0;i < size ;i++ ) {
			System.out.println(unboundedlist[i]);
		}
	}
}
 interface ArrayADT<E> {
	public void pushBack(E element);
	public void popBack();
	public void size();
	public void reallocate(int newsize);
	public void Capacity();	
	public void print();
}