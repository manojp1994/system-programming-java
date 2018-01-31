import java.util.*;
public class SeleSorting {
	public static void main(String[] args) {
		Scanner sc=new Scanner(System.in);
		int i=0,j=1,temp;
		System.out.print("enter no of elements to be sorted : ");
		int n=sc.nextInt();
		int a[]=new int[n];
		System.out.print("enter elements to be sorted : ");
		for(i=0;i<n;i++) 
			a[i]=sc.nextInt();
			for(i=0;i<n;i++) {						
				for(j=0;j<n;j++) {
					if (a[i] < a[j]) {
						temp=a[i];
						a[i]=a[j];
						a[j]=temp;
					}
				}
			}
		System.out.print("elements after sorting : ");
		for(i=0;i<n;i++) 
		System.out.print(a[i]+" "); 
	}
}
