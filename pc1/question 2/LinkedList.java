import java.util.*;
class Link
{
	private Node head;
	private int listCount;
	
	public Link()
	{
		head = new Node(null);
		listCount = 0;
	}
	
	public void add(Object data)
	{
		Node temp = new Node(data);
		Node current = head;
		while(current.getNext() != null)
		{
			current = current.getNext();
		}
		current.setNext(temp);
		listCount++;
	}
	
	public Object get(int index)
	{
		if(index<=0)
			return null;
		Node current = head.getNext();
		for(int i=1;i<index;i++)
		{
			if(current.getNext()==null)
				return null;
			current=current.getNext();
		}
		return current.getData();
	}
		
	public int size()
	{
		return listCount;
	}
	
	public String toString()
	{
		Node current=head.getNext();
		String output="";
		while(current!=null)
		{
			output+=current.getData().toString()+",";
			current=current.getNext();
		}
		return output;
	}
	
	class Node
	{
		Node next;
		Object data;

		public Node(Object _data)
		{
			next=null;
			data=_data;
		}
		
		public Node(Object _data, Node _next)
		{
			next =_next;
			data =_data;
		}
		
		public Object getData()
		{
			return data;
		}
		
		public void setData(Object _data)
		{
			data=_data;
		}
		
		public Node getNext()
		{
			return next;
		}
		
		public void setNext(Node _next)
		{
			next=_next;
		}
	}
}

public class LinkedList {
	public static void main(String[] args) {
		Link l=new Link();
		Scanner scan=new Scanner(System.in);
		int size=0;
		String ele;
		size=scan.nextInt();
		scan.nextLine();
		ele=scan.nextLine();
		int[] arr=new int[ele.length()];
		int[] num=new int[size];
		StringTokenizer st=new StringTokenizer(ele,",");
		int i=0;
		while (st.hasMoreTokens()) {
			arr[i]=Integer.parseInt(st.nextToken());
			i++;
		}
		num[0]=arr[0];
		l.add(num[0]);
		for (int k=1;k<num.length;k++) {
			num[k]=2+num[k-1];
			l.add(num[k]);
		}
		System.out.println(l);
	}
}