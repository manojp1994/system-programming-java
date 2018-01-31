import java.util.*;
public class InsertionSort {
  public static void main(String[] args) {
    Scanner sc=new Scanner(System.in);
    int j=0;
    System.out.print("enter no of elements : ");
    int n=sc.nextInt();
    int[] a=new int[n];
    System.out.print("enter elements for sorting : ");
    for(int i=0;i<n;i++)
      a[i]=sc.nextInt();
        for(int i=0;i<n;i++) {
          int key=a[i];
          j=i-1;
        while(j>=0 && a[j]>key) {
            a[j+1]=a[j];
            j=j-1;
          }
          a[j+1]=key;
        }
        System.out.println("elements after sorting : ");
        for(int i=0;i<n;i++) {
          System.out.println(a[i]+" ");
    }
  }
}
     
