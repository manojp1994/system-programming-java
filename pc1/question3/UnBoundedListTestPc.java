import java.util.Scanner;
import java.util.*;

interface ArrayADTPC<E> {
	public void pushBack(E element);
	public void popBack();
	public void size();
	public void reallocate(int newsize);	
	public void print();
}
class UnBoundedListPc<E> implements ArrayADTPC <E> {
	E[] unboundedlist;
	int size;
	int index;
	int alpha=4;
	int beta=2;
	public UnBoundedListPc() {
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
			reallocate(beta*index);									//reallocate(w/alpha)
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
	public void print() {
		for (int i=0;i<index;i++) {
			System.out.println(unboundedlist[i]);
		}
	}
}
class UnBoundedListTestPc	{
	public static void main(String[] args)	{
		UnBoundedListPc unboundedlistpc=null;
		Integer valuei;
		int value;
		int place;
		Scanner sc = new Scanner(System.in);
		System.out.print("Case = ");
		String reader = sc.next();
		if(reader.equalsIgnoreCase("I"))
			unboundedlistpc = new UnBoundedListPc<Integer>();
		else
			System.out.println("Input = ");
		String check = "check";
		while(!check.equalsIgnoreCase("end"))	{
			check=sc.next();
			if(check.equalsIgnoreCase("push"))	{
				if(reader.equalsIgnoreCase("I"))	{
					valuei=sc.nextInt();
					unboundedlistpc.pushBack(valuei);
				}
			}
			else if(check.equalsIgnoreCase("pop"))	{
				 if(reader.equalsIgnoreCase("I"))	{
					valuei=sc.nextInt();
					unboundedlistpc.popBack();
				}
			}
			else if(check.equalsIgnoreCase("print"))	{
				unboundedlistpc.print();
			}
		}
	}
}