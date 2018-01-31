import java.util.*;
public class Search {
	public static void main(String args[])	{
		int i=0,n,search,a[];
		int flag=0;
		Scanner sc=new Scanner(System.in);
    System.out.println("Enter number of elements");
    n=sc.nextInt(); 
    a=new int[n];
 		System.out.println("Enter" + n + "integers");
 		for (i=0;i<n;i++)	{
      a[i]=sc.nextInt();
    }
 		System.out.println("Enter value to find");
   	search=sc.nextInt();
 		for(i=0;i<n;i++)	{
      if (a[i]==search) {
      	flag=0;
        System.out.println("Success");
        break;
     	}
   	}
   	if(i==n)
   		flag=-1;
   	System.out.println(flag);
   	System.out.println(p0[]);
    System.out.println("failure");
	}
}
