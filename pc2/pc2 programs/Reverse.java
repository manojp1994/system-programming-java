import java.util.*;

public class Reverse {  
  
  private static Node head;  
  private static class Node {  
    private int value;  
    private Node next;  
      Node(int value) {  
        this.value = value;  
      }  
 }  
  
 public void add(Node node) {  
  
  if (head == null) {  
   head = node;  
  } 
  else {  
   Node temp = head;  
   while (temp.next != null)  
    temp = temp.next;  
   temp.next = node;  
  }  
 }  
  
  
 public void display(Node head) {  
  Node temp = head;
  int n=10;  
  while (temp != null) {  
   System.out.format("%d,", temp.value);  
   temp = temp.next;  
  }  
  System.out.println();  
 }  

public static Node reverseLinkedList(Node currentNode)  
 {
Node previousNode=null;  
  Node nextNode;  
  while(currentNode!=null)  
  {  
   nextNode=currentNode.next;  
   currentNode.next=previousNode;   
   previousNode=currentNode;  
   currentNode=nextNode;  
  }  
  return previousNode;  
 }  
  
 public static void main(String[] args) {  
  Reverse list = new Reverse();   
    Scanner scan = new Scanner(System.in);
    int size = 0;
    int find;
    String element;
    size = scan.nextInt();
    scan.nextLine();
    element = scan.nextLine();
    int[] array = new int[element.length()];
    int[] num = new int[size];
    StringTokenizer str = new StringTokenizer(element,",");
    int i = 0;
    while (str.hasMoreTokens()) {
      array[i] = Integer.parseInt(str.nextToken());
      list.add(new Node(array[i]));
      i++;
    }  
  Node reverseHead=reverseLinkedList(head);   
  list.display(reverseHead);  
   
 }  
} 