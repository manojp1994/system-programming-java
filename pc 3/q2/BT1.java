import java.util.*;
import java.util.LinkedList;
class Node  {
  Node left;
  Node right;
  int data;
  Node(int data, Node left,Node right)  {
    this.data=data;
    this.left=left;
    this.right=right;
  }
  Node()  {
    data=0;
    left=null;
    right=null;
  }
  public void setdata(int data) {
    this.data=data;
  }
  public void setleft(Node left)  {
    this.left=left;
  }
  public void setright(Node right)  {
    this.right=right;
  }
  public int getdata()  {
    return data;
  }
  public Node getleft() {
    return left;
  }
  public Node getright()  {
    return right;
  }
}
class Binary{
  public Node root;
  int[] arr=new int[30];
  int i;
  int j;
  public Binary()  {
    root=null;
    i=-1;
    j=-1;
  }
  public void insert(int data)  {
    root=insert(root,data);
  }
  public Node insert(Node nd , int data)  {
    if(nd==null)  {
      nd=new Node(data,null,null);
    }
    else  {
      if(nd.getright()==null) {
          nd.right=insert(nd.right,data);
        }
        else  {
          nd.left=insert(nd.left,data);
        }
      }
    return nd;
  }
  public void levelorder()  {
    System.out.println();
    arr[++i]=root.getdata();
    System.out.print(arr[++j] + " ");
    levelorder(root);
  }
  public void levelorder(Node nd) {
    if(nd!=null)  {
      if(nd.getleft()!=null) {
        arr[++i]=nd.getleft().getdata();
        System.out.print(arr[++j] + " ");
        levelorder(nd.getleft());
      }
      if(nd.getright()!=null) {
        arr[++i]=nd.getright().getdata();
        System.out.print(arr[++j] + " ");
        levelorder(nd.getright());
      }
    }
  }
  public void display() {
    levelorder(root);
    if(root!=null)  {
      for(int i=arr.length-1;i>0;i++)  {
        System.out.println(arr[i]);
      }
    }
  }
}
public class BT1 {
  public static void main(String[] args)  {
    Scanner sc=new Scanner(System.in);
    Binary b=new Binary();
    String s=sc.nextLine();
    String[] sg=s.split(",");
      for(int i=0;i<sg.length;i++) {
        b.insert(Integer.parseInt(sg[i]));
      }
    b.levelorder();
  }
}