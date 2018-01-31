public class QueueDemo {  
 private static int capacity=10;  
 int queuearray[]=new int[10];  
 int size=0;  
 int front=-1;  
 int rear=0;  
  
public void push(int element) {  
  if (front<capacity-1) {  
   front++;  
   queuearray[front]=element;  
  } 
}  
  
public void pop(int x) {  
  if (rear<=front) {  
   rear++;    
  }
  else if (rear>front) {
    System.out.println("no deletions possible");
  }
}  
  
public void print() {  
  if (front>=rear) {    
   for (int i=rear;i<=front;i++) {  
    System.out.println(queuearray[i]);  
    }  
  }  
}  
  
public static void main(String[] args) {  
  QueueDemo queueDemo=new QueueDemo();   
  queueDemo.push(10);  
  queueDemo.push(20);  
  queueDemo.push(30);  
  queueDemo.push(40);
  System.out.println("pushed elements are : ");
  queueDemo.print();  
  queueDemo.pop(30);
  queueDemo.pop(40);  
  System.out.println("elements after poping are : ");
  queueDemo.print();  
  }  
}  