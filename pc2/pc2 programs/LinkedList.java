import java.util.*;
class Node
	{
	Node next;
	Object data;

	public Node(Object _data)
	{
		next = null;
		data = _data;
	}
		
	public Object getData()
	{
		return data;
	}
		
	public void setData(Object _data)
	{
		data = _data;
	}
		
	public Node getNext()
	{
		return next;
	}
		
	public void setNext(Node _next)
	{
		next = _next;
	}
}

class Link
{
	private Node start;
	private int  size;
	private Node end;
	
	public Link()
	{
		start = new Node(null);
		size = 0;
		end=null;
	}
	
	public void insert(int element) {
		Node n=new Node(null);
		size++;
		if(start==null) {
			start=n;
			n=end;
		}
		else {
			Node temp=start;
				while(temp.getNext()!=null) {
					temp = temp.getNext();
				}
			temp.setNext(n);
		}
	}
	
	public String toString()
	{
		Node current = start.getNext();
		String output = "";
		while(current != null)
		{
			output += current.getData().toString() + ",";
			current = current.getNext();
		}
		return output;
	}
}


public class LinkedList {
	public static void main(String[] args) {
		Link link = new Link();
		Scanner scan = new Scanner(System.in);
		int size = 0;
		int found;
		String element;
		size = scan.nextInt();
		element = scan.nextLine();
		scan.next();
		found = scan.nextInt();
		int[] arr=new int[element.length()];	//array of length of elements
		int[] num = new int[size];
		StringTokenizer st = new StringTokenizer(element,",");
		int i = 0;
		while (st.hasMoreTokens()) {
			arr[i] = Integer.parseInt(st.nextToken());
			i++;
		}
		for (int k = i - 1, j = 0; k >= 0; k--) {
			num[j] = arr[k];
			link.insert(num[j]);
			j++;
		}
		System.out.println(link);
		System.out.println(num[found]);
	}
}