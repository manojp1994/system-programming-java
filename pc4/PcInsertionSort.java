import java.util.*;
public class PcInsertionSort {
  int[] a=new int[size];
  static int size;
  PcInsertionSort(int size) {
    this.size=0;
  }
  public void insertionSort(int[] arr) {
    int n=size;
      for(int j=1;j<n;j++) {
        int key=arr[j];
        int i=j-1;
        for(;((i>=0)&&(arr[i]>key));) {
          arr[i+1]=arr[i];
          i--;
        }
        arr[i+1]=key;
      }     
  }
  public int size() {
    return size;
  }
  public void printElements(int[] arr) {
    int check=0;
    while(check<size){                               
      System.out.print(arr[check]);
        if(check<size-1)
          System.out.print(",");
        check++;
    }
    System.out.println();
  }
  public static void main(String[] args) {
    String s1;
    String s2;
    int i=0,j=0;
    Scanner sc=new Scanner(System.in);
    s1=sc.nextLine();
    String[] split1=s1.split(",");
    s2=sc.nextLine();
    String[] split2=s2.split(",");
    int[] arr1=new int[split1.length+split2.length];
    int[] arr2=new int[split2.length];
    PcInsertionSort ins=new PcInsertionSort(arr1.length);
    for(i=0;i<split1.length;i++) {
      arr1[j]=Integer.parseInt(split1[i]);
      j++;
    }
    size=j;
    j=0;
    for(i=0;i<split2.length;i++) {
      arr2[j]=Integer.parseInt(split2[i]);
      j++;
    }
    for(i=0;i<split2.length;i++) {
      arr1[size]=arr2[i];
      size++;
      ins.insertionSort(arr1);
      ins.printElements(arr1); 
    } 
  }
}