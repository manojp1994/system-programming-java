public class StackDemo {  
  private int capacity=10;  
  int stackarray[]=new int[capacity];  
  int top=-1;  
  public void push(int element) {  
    if (top<capacity-1) {  
    top++;  
    stackarray[top]=element;   
    } 
    else {  
    System.out.println("Stack Overflow");  
    }  
  }  
  public void pop() {  
    if(top>=0) {  
    top--;  
    System.out.println("Poped elements are");  
    } 
    //else {  
    //System.out.println("Stack Underflow");  
    //}  
  }  
  public void printElements() {  
    if(top>=0) {  
    System.out.println("Elements in stack :");  
    for (int i=0;i<=top;i++) {  
    System.out.println(stackarray[i]);  
      }  
    }  
  }  
  public static void main(String[] args) {  
    StackDemo stackDemo = new StackDemo();    
    stackDemo.push(10);  
    stackDemo.push(20);  
    stackDemo.push(30);  
    stackDemo.push(40); 
    stackDemo.printElements(); 
    stackDemo.pop();  
    stackDemo.pop();
    stackDemo.printElements();  
  }  
}  