import java.util.*;
class Merge {
	public static void main(String[] args) {
		Scanner sc=new Scanner(System.in);
		System.out.println("enter m size : ");
		int m=sc.nextInt();
		System.out.println("enter arr1 elements : ");
		int[] arr1=new int[m];
		for(int i=0;i<=arr1.length-1;i++) {
			arr1[i]=sc.nextInt();
		}
		Arrays.sort(arr1);
		System.out.println("enter n size : ");
		int n=sc.nextInt();
		System.out.println("enter arr2 elements : ");
		int[] arr2=new int[n];
		for(int i=0;i<=arr2.length-1;i++) {
			arr2[i]=sc.nextInt();
		}
		Arrays.sort(arr2);
		int[] mergearray=new int[m+n];
		System.arraycopy(arr1,0,mergearray,0,arr1.length);
		System.arraycopy(arr2,0,mergearray,arr1.length,arr2.length);
		System.out.println("merged array is : ");
		for(int i=0;i<=mergearray.length-1;i++) {
			System.out.println(mergearray[i]);
		}
	}
}