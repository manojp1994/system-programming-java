import java.util.*;
class UnBoundedListpc<E> implements ArrayADT <E> {
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
	// public void Capacity() {
	// 	System.out.println(size);
	// }
	public void print() {
		for (int i = 0;i < size ;i++ ) {
			System.out.println(unboundedlist[i]);
		}
	}
}