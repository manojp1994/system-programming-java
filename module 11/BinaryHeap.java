import java.util.*;

class BinaryHeap1
{
  int[] arr;
  int size;
  BinaryHeap1()
  {
    arr=new int[20];
    size=0; 
  }
  public void insert(int i)
  {
    arr[size]=i;
    heapifyup();
    size++;
  }
  public void delete()
  {
    arr[1]=arr[size];
    size--;
    heapifydown();
  }
  public void heapifyup()
  {
    for(int i=size;i>=1;i--)
      {
        if(arr[i]<(arr[i/2]))
          {
            int temp=arr[i];
            arr[i]=arr[i/2];
            arr[i/2]=temp;
          }
      }
    display();
  }
  public void heapifydown()
    {
      for(int i=1;i<size;i++)
        {
          if(arr[2*i]==0 && arr[(2*i)+1]==0)
            {
            //return;
            }
          else if(arr[i]>arr[2*i] || arr[i]>arr[(2*i)+1])
            {
              if(arr[2*i]!=0 && arr[(2*i)+1]==0)
                {
                  int temp=arr[i];
                  arr[i]=arr[2*i];
                  arr[2*i]=temp;
                }
              else if(arr[2*i]>arr[(2*i)+1])
                {
                  int temp=arr[i];
                  arr[i]=arr[(2*i)+1];
                  arr[(2*i)+1]=temp;
                }
              else
                {
                int temp=arr[i];
                arr[i]=arr[2*i];
                arr[2*i]=temp;
                }
              }
            }
          display();
        }  
  public void modify(int index , int value)
  {
    for(int i=1;i<=size;i++)
      {
        if(i==index) {
          if(i==1) {
            arr[i]=value;
            heapifydown();
          }
          else {
            arr[i] = value;
            heapifyup();
          }
        }
      }
    }
  public void display()
    {
      for(int i=1;i<=size;i++)
        {
          System.out.print(arr[i]+" ");
        }
        System.out.println();
    }
}
public class BinaryHeap
{
  public static void main(String[] args)
    {
      BinaryHeap1 bh=new BinaryHeap1();
      int i=0;
      Scanner sc=new Scanner(System.in);
      String n=sc.nextLine();
      //
      String[] str=n.split(",");
      //do
      //{ 
        //switch(str[i])
        //{
            //case"i": 
      bh.insert(Integer.parseInt(str[i+1]));
            //break;
            //case"d": bh.delete();
            //break;
            //case"mo": bh.modify(Integer.parseInt(str[i+1]),Integer.parseInt(str[i+2]));
            //break;
            //case"end": System.exit(0);          
        //}
        //i++;
    //}while(true);
  }
} 