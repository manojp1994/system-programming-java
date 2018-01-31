import java.util.*;

class Node
{
  Node next;
  int data;
  public Node() {

  }
  public Node(int x)  {
        data = x;
        next = null;
  }
}
class Hash  {
  private Node[] table;
  private int size ;
  Node first;
  public Hash(int tableSize)  {
    table = new Node[ tableSize ];
    size = 0;
    first = null;
  }
  public boolean isEmpty()  {
    return size == 0;
  }
  public void makeEmpty() {
    int l = table.length;
    table = new Node[l];
    size = 0;
  }
  public int getSize()  {
    return size;
  }
  public void insert(int val) {
    size++;
    int pos = myhash(val);        
    Node nptr = new Node(val);
    if (table[pos] == null)
    table[pos] = nptr;
    else {
    nptr.next = table[pos];
    table[pos] = nptr;
      }
    }
  public void remove(int val) {
    int pos = myhash(val);    
    Node start = table[pos];
    Node end = start;
    if(start.data == val)  {
      size--;
      table[pos] = start.next;
      return;
      }
      while (end.next != null && end.next.data != val)
      end = end.next;
      if (end.next == null) {
        return;
      }
      size--;
      if(end.next.next == null)  {
        end.next = null;
        return;
      }
      end.next = end.next.next;
      table[pos] = start;
    }
  private int myhash(Integer x )  {
    int hashVal = x.hashCode( );
    hashVal %= table.length;
    if (hashVal<0)
    hashVal+=table.length;
    return hashVal;
  }
  public void printHashTable () {
    System.out.println();
    for (int i=0;i<table.length;i++)  {
      System.out.print (i + " : ");             
      Node first = table[i];
      while(first != null)  {
        System.out.print(first.data +",");
        first = first.next;
      }
      System.out.println();
    }
  }   
}

public class Test { 
  public static void main(String[] args) {
        Scanner scan = new Scanner(System.in);
        Hash h = new Hash(10);
        String input = scan.nextLine();
        StringTokenizer st = new StringTokenizer(input,",");
        while (st.hasMoreTokens()) {
            String collect = st.nextToken();
            if(collect.startsWith("I")) {
                StringTokenizer st1 = new StringTokenizer(collect,"I");
                h.insert(Integer.parseInt(st1.nextToken()));
            }
            else if (collect.startsWith("R")) {
                StringTokenizer st2 = new StringTokenizer(collect,"R");
                h.remove(Integer.parseInt(st2.nextToken()));
            }
        }
        h.printHashTable();
    }
}