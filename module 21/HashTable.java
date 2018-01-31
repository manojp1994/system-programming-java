//keys words, value frequency;
import java.util.*;
class Node
{
	private String data;
	private int frequency;
	Node(String data, int frequency)
	{
		this.data = data;
		this.frequency = frequency;
	}
	public void setData(String data)
	{
		 this.data=data;
	}
	public String getData()
	{
		return data;
	}
	public void setFrequency(int frequency)
	{
		this.frequency=frequency;
	}
	public int getfrequency()
	{
		return frequency;
	}
}
class BinaryHeap
{
	private Node[] heapArr;
	private int count;
	BinaryHeap()
	{
		heapArr = new Node[101];
		count = 1;
	}
	public void insert(Node element)
	{
		if(count == 102)
		{
			if(element.getfrequency() > heapArr[1].getfrequency())
			{
				heapArr[1] = element;
				bubbleDown();
			}
		}
		else
		{
			heapArr[count] = element;
			if(count >= 2)
				bubbleUp(count);
			count++;
		}
	}
	private void bubbleUp(int lastIndex)
	{
		int temp = lastIndex;
		while(temp != 1)
		{
			int parent = temp/2;
			if(heapArr[parent].getfrequency() > heapArr[temp].getfrequency())
			{
				Node temp1 = heapArr[parent];
				heapArr[parent] = heapArr[temp];
				heapArr[temp] = temp1;
			}
			temp = parent;
		}
	}
	private void bubbleDown()
	{
		int parent = 1;
		int left = 2;
		int right = 3;
		while(left < count)
		{
			int index = left;
			if(right < count)
			{
				if(heapArr[left].getfrequency() > heapArr[right].getfrequency())
				{
					index = right;
				}
			}
			if(heapArr[index].getfrequency() < heapArr[parent].getfrequency())
			{
				Node temp = heapArr[parent];
				heapArr[parent] = heapArr[index];
				heapArr[index] = temp;
				parent = index;
				left = parent*2;
				right = left+1;
			}
			else
				break;
		}
	}
	public void printArr()
	{
		int temp = count;
		ArrayList<Node> fin = new ArrayList<Node>();
		//System.out.println("COUNT IS : "+count);
		while(temp != 1)
		{
			fin.add(heapArr[1]);
			//System.out.println(heapArr[1].getData());
			heapArr[1] = heapArr[temp-1];
			temp--;
			count--;
			bubbleDown();
		}
		for(int i= fin.size()-1;i>-1;i--)
			System.out.println(fin.get(i).getData()+"frequency is: "+fin.get(i).getfrequency());
		// for(int i=1; i<count;i++)
		// 	System.out.println(heapArr[i].getData());
	}
}
class HashingImplementation
{
	private Hashtable<String, Integer> ht;
	HashingImplementation()
	{
		ht = new Hashtable<String, Integer>();
	}
	public void add(String data)
	{
		if(ht.containsKey(data))
		{
			int count = ht.get(data);
			count = count +1;
			ht.put(data, count);
		}
		else
		{
			ht.put(data, 1);
		}
	}
	public Hashtable<String, Integer> getHashedtable()
	{
		return ht;
	}
	public void print()
	{
		for(Map.Entry m:ht.entrySet())
		{  
   			System.out.println(m.getKey()+" "+m.getValue());
  		}  
	}
}
public class HashTable
{
	public static void main(String args[])
	{
		ArrayList<String> wordsArr = new ArrayList<String>();
		wordsArr.add("hello");
		wordsArr.add("hello");
		wordsArr.add("hello");
		wordsArr.add("tammu");
		wordsArr.add("hello");
		wordsArr.add("sample");
		wordsArr.add("hello");
		wordsArr.add("tammu");
		wordsArr.add("mmm");
		wordsArr.add("dharma");
		HashingImplementation h = new HashingImplementation();
		for(int i=0; i<wordsArr.size();i++)
		{
			h.add(wordsArr.get(i));
		}
		BinaryHeap bh = new BinaryHeap();
		Hashtable<String, Integer> finalOut = h.getHashedtable();
		for(Map.Entry m:finalOut.entrySet())
		{
			Node nd = new Node((String)m.getKey(), (int)m.getValue());
   			bh.insert(nd);
  		}
  		bh.printArr();
	}
}