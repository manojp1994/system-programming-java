import java.util.*;
import java.util.ArrayList;
public class AdjacentGraphs {
	public static void main(String[] args) {
		ArrayList <Character> list=new ArrayList <Character>();
		int count=0;
		Scanner sc=new Scanner(System.in);
		System.out.println("no of vertices");
		int n=sc.nextInt();
		sc.nextLine();
		System.out.println("Enter the elements of matrix");
		int[][] adj=new int[n][n];
		 	for(int i=0;i<n;i++)	{
        for(int j =0;j<n;j++)	{
          adj[i][j] = sc.nextInt();
        }
      }
      for(int i=0;i<n;i++)	{
       	for(int j=i;j<n;j++)	{
            if(adj[i][j]==1)
            count++;
        }
      }
    System.out.println(count);
  }
}