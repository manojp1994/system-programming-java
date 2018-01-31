import java.util.*;
class Link {
	LinkTest ob = new LinkTest();
	private Link node;
	private int data;
	 public Link(Link node,int data) {
	 this.node=node;
	 this.data=data;
	}
	 public void setNode(Link node) {
	 	this.node=node;
	}
	 public void setData(int data) {
	 	this.data=data;
	}
	 public Link getNode() {
	 	return this.node;
	}
	 public int getData() {
	 	return this.data;
	}
	public String toString()
	{
		Link current=start.getNode();
		String output=" ";
		while(current!=null)
		{
			output=output+current.getNode().toString() + ",";
			current=current.getNode();
		}
		return output;
	}
}
class LinkTest {
	private Link start;
	private Link end;
	private	Link n;
	private int size;
	public LinkTest() {
		this.start=null;
		this.end=null;
		this.size=0;
	}
	public void add(int element) {
		size++;
		n=new Link(null,element);
		if(start==null) {
			start=n;
		}
		else {
			Link temp=start;
			while(temp.getNode()!=null) {
				temp=temp.getNode();
			}
			temp.setNode(n);
		}
	}
	// public void reversePrint(Link current) {
	//  	Link check1=start;
	//  	while(check1.getNode()!=null) {
	//  		check1=check1.getNode();
	//  		//check1=null;
	//  	}
	//  	check1.setNode(n)
	//  	System.out.println(check1.getData());
	//  	check1=null;
	//  }
	// public void print() {
	// 	Link check=start;
	// 	while(check.getNode() != null) {
	// 		//System.out.print(check.getData() + " ");
	// 		check=check.getNode();
	// 	}
	// 	//System.out.println(check.getData());
	// }
	public static void main(String[] args) {
		LinkTest lt=new LinkTest();
		// lt.add(1);
		// lt.add(2);
		// lt.add(3);
		// lt.add(4);
		// lt.add(5);
		// lt.add(6);
		// lt.add(7);
		// lt.print();
		// lt.reversePrint();
		// lt.print();
		Scanner sc=new Scanner(System.in);
		int size=0;
		int found;
		String element;
		size = sc.nextInt();
		element = sc.nextLine();
		sc.next();
		found = sc.nextInt();
		int[] array=new int[element.length()];
		int[] array1=new int[size];
		StringTokenizer st=new StringTokenizer(element,",");
		int i=0;
		while (st.hasMoreTokens()) {
			array[i] = Integer.parseInt(st.nextToken());
			i++;
		}
		for (int k=i-1,j=0;k>=0;k--) {
			array1[j]=array[k];
			lt.add(array1[j]);
			j++;
		}
		System.out.println(lt);
		System.out.println(array1[found]);
	}
}