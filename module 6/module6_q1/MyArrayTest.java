 import java.util.Scanner;
 interface ListADT<E> {
	public void add(E element);
	public void removeIndex(int index);
	public void removeElement(E element);
	public void readElement(int index);
	public void modifyIndex(int index, E element);
	public void modifyElement(E element1, E element2);
}
@SuppressWarnings("unchecked")
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


class MyArrayTest {
	public static void main(String[] args) {
		MyArray myarray=null;
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
			myarray = new MyArray<Integer>();
		else if(reader.equalsIgnoreCase("C"))
			myarray = new MyArray<Character>();
		else if(reader.equalsIgnoreCase("S"))
			myarray = new MyArray<String>();
		else if(reader.equalsIgnoreCase("F"))
			myarray = new MyArray<Float>();
		else
			System.out.println("enter correct input");
		String check = "star";
		while(!check.equalsIgnoreCase("end")){
			check=sc.next();
			if(check.equalsIgnoreCase("add")){
				if(reader.equalsIgnoreCase("S")){
					values=sc.nextLine();
					myarray.add(values);
				}
				else if(reader.equalsIgnoreCase("C")){
					valuec=sc.next();
					myarray.add(valuec);
				}
				else if(reader.equalsIgnoreCase("I")){
					valuei=sc.nextInt();
					myarray.add(valuei);
				}
				else if(reader.equalsIgnoreCase("F")){
					valuef=sc.nextFloat();
					myarray.add(valuef);
				}
				
			}else if(check.equalsIgnoreCase("read")){
				value = sc.nextInt();
				myarray.readElement(value);
			}else if(check.equalsIgnoreCase("removeElement")){
				if(reader.equalsIgnoreCase("S")){
					values=sc.nextLine();
					myarray.removeElement(values);
				}
				else if(reader.equalsIgnoreCase("C")){
					valuec=sc.next();
					myarray.removeElement(valuec);
				}
				else if(reader.equalsIgnoreCase("I")){
					valuei=sc.nextInt();
					myarray.removeElement(valuei);
				}
				else if(reader.equalsIgnoreCase("F")){
					valuef=sc.nextFloat();
					myarray.removeElement(valuef);
				}

				
			}else if(check.equalsIgnoreCase("removeIndex")){
				valuei = sc.nextInt();
				myarray.removeIndex(valuei);

			}else if(check.equalsIgnoreCase("modifyIndex")){
				place = sc.nextInt();
				if(reader.equalsIgnoreCase("S")){
					values=sc.nextLine();
					myarray.modifyIndex(place,values);
				}
				else if(reader.equalsIgnoreCase("C")){
					valuec=sc.next();
					myarray.modifyIndex(place,valuec);
				}
				else if(reader.equalsIgnoreCase("I")){
					valuei=sc.nextInt();
					myarray.modifyIndex(place,valuei);
				}
				else if(reader.equalsIgnoreCase("F")){
					valuef=sc.nextFloat();
					myarray.modifyIndex(place,valuef);
				}
					

				
			}else if(check.equalsIgnoreCase("modifyElement")){
				String values1;
				String valuec1;
				Integer valuei1;
				float valuef1;
				if(reader.equalsIgnoreCase("S")){
					values=sc.nextLine();
					values1 =sc.nextLine();
					myarray.modifyElement(values,values1);
				}
				else if(reader.equalsIgnoreCase("C")){
					valuec=sc.next();
					valuec1=sc.next();
					myarray.modifyElement(valuec,valuec1);
				}
				else if(reader.equalsIgnoreCase("I")){
					valuei=sc.nextInt();
					valuei1=sc.nextInt();
					myarray.modifyElement(valuei,valuei1);
				}
				else if(reader.equalsIgnoreCase("F")){
					valuef=sc.nextFloat();
					valuef1=sc.nextFloat();
					myarray.modifyElement(valuef,valuef1);
				}

				
			}else if(check.equalsIgnoreCase("print")){
				myarray.print();
			}
		}
	}
}