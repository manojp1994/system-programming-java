 class MyArray<E> implements ListADT <E> {
	E[] myarray;
	int index=0;
	int size=10;
	public MyArray() {
	this.index=index;
	this.size=size;
	myarray=(E[])new Object[size];
	}
	
	public void add(E element) {
		myarray[index]=element;
		index++;
	}
	
	public void  removeIndex(int index) {
		if(index<size) {
			for(int i=index;i<size-1;i++) {
				myarray[i]=myarray[i+1];
			}
			size--;
		}
	}
	
	public void removeElement(E element) {
		for(int i=0;i<size;i++) {
			if(element.equals(myarray[i])) {
				removeIndex(i);
			}
		}
	}

	public void readElement(int index) {
		System.out.println(myarray[index]);
	}
		
	public void modifyIndex(int index, E element) {
		myarray[index]=element;
	}
	
	public void modifyElement(E element1, E element2) {
		for(int i=0;i<size;i++) {
			if(myarray[i].equals(element2)) {
				myarray[i]=element1;
				break;
			}
		}
	}
	public void print() {
		for(int i=0;i<size;i++)
			if(myarray[i]!=null)
		System.out.println(myarray[i]);
	}
}