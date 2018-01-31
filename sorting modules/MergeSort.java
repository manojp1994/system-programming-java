import java.util.Scanner;
public class MergeSort {
  public static void sort(int[] arr, int low, int high) {
    int N=high-low;         
    if(N<=1) {
		} 
    int mid=low + N/2; 
    sort(arr,low,mid); 
    sort(arr,mid,high); 
    int[] temp=new int[N];
    int i=low,j=mid;
    int k=0;
    while(k<N) {
      if(i==mid) 
        temp[k]=arr[j++];
        else if (j==high) 
          temp[k]=arr[i++];
        else if (arr[j]<arr[i]) 
          temp[k]=arr[j++];
        else 
          temp[k]=arr[i++];
         	k++;   
        for(k=0;k<N;k++) {
          arr[low+k]=temp[k]; 
        }
			}	
		}
  public static void main(String[] args) 	{
    Scanner scan=new Scanner( System.in );        
    System.out.println("Merge Sort Test\n");
    int n,i;
    System.out.println("Enter number of integer elements");
    n=scan.nextInt();
    int array[]=new int[n];
    System.out.println("\nEnter integer elements");
    for(i=0;i<n;i++)
      array[i]=scan.nextInt();
      sort(array,0,n);
      System.out.println("\nElements after sorting ");        
      for (i=0;i<n;i++)
        System.out.print(array[i]+" ");            
        System.out.println();            
    }    
}