import java.util.*;
class Node  {
  Node left;
  Node right;
  int data;
  Node(int data,Node left,Node right) {
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
  Binary()  {
    root=null;
  }
  public void insert(int data)  {
    root=insert(root,data);
  }
  public Node insert(Node nd , int data)  {
    if(nd==null)  {
      nd=new Node(data,null,null);
    }
    else  {
      if(data<=nd.getdata())
        nd.left=insert(nd.getleft(),data);
      else
        nd.right=insert(nd.getright(), data);
      }
    return nd;
  }
  public void delete(int value) {
    root=delete(root,value);
  }
    public boolean search(int val)  {
      return search(root,val);
    }
  public boolean search(Node nd,int val)  {
    boolean flag=false;
    while((nd!=null) && !flag)  {
      int var=nd.getdata();
      if(val<var) {
        nd=nd.getleft();
      }
      else if(val>var)  {
        nd=nd.getright();
      }
      else  {
        flag=true;
        break;
      }
    }
    return flag;
  }
  public void inorder() {
    System.out.println();
    inorder(root);
  }
  public void inorder(Node nd)  {
    if(nd!=null)  {
      inorder(nd.getleft());
      System.out.print(nd.getdata() + ",");
      inorder(nd.getright()); 
    }
  }
  public void postorder() {
    System.out.println();
    postorder(root);
  }
  public void postorder(Node nd)  {
    if(nd!=null)  {
      postorder(nd.getleft());
      postorder(nd.getright());
      System.out.print(nd.getdata() + ",");
    }
  }
  public Node delete(Node nd,int k) {
    Node p,p2,n;
    if(nd.getdata()==k) {
      Node lt,rt;
      lt=nd.getleft();
      rt=nd.getright();
        if(lt==null && rt==null)  {
          return null;
        }
        else if(lt==null) {
          p=rt;
          return p;
        }
        else if(rt==null) {
          p=lt;
          return p;
        }
        else  {
          p2=rt;
          p=rt;
          while(p.getleft()!=null)  {
            p=p.getleft();
            p.setleft(lt);
            return p2;
          }
        }
      }  
      if(k<nd.getdata()) {
        n=delete(nd.getleft(), k);
        nd.setleft(n);
      }
      else  {
        n=delete(nd.getright(), k);
        nd.setright(n);             
      }    
      return nd;
    }
  }
public class BinarySearchTree {
  public static void main(String[] args)  {
    Binary b=new Binary();
    int i=0;
    //int[] arr;
    Scanner sc=new Scanner(System.in);
    String input=sc.nextLine();
    String[] str=input.split(" |\\,");
    do  {
      switch(str[i])  {
        case "I": b.insert(Integer.parseInt(str[i+1]));
                  b.inorder();
                  break;
        case "D": b.delete(Integer.parseInt(str[i+1]));
                  b.postorder();
                  break;
        case "S": b.search(Integer.parseInt(str[i+1]));
                  break;
        case "end": System.exit(0);          
      }
      i++;
    }while(true);
  }
}