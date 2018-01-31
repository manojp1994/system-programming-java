import java.util.*;
import java.util.ArrayList;
@SuppressWarnings("unchecked")
public class GraphAdjacencyMatrix {
	public static void main(String[] args) {
		ArrayList <Character> list=new ArrayList <Character> ();
		Scanner sc=new Scanner(System.in);
		System.out.println("no of vertices");
		int n=sc.nextInt();
		int[][] adj=new int[n][n];
		sc.nextLine();
		System.out.println("vertex 1----->vertex2");
		String str=sc.nextLine();
		String[] tokens=str.split(", ");
		int len=tokens.length;
		char a,b;
		for(int i=0;i<tokens.length;i++) {
			a=tokens[i].charAt(1);
			b=tokens[i].charAt(3);
			if(!list.contains(a)) {
				list.add(a);
			}
			if(!list.contains(b)) {
				list.add(b);
			}
		}
		//System.out.println(vertices);
		for(int i=0;i<len;i++) {
			int p=list.indexOf(tokens[i].charAt(1));
			int q=list.indexOf(tokens[i].charAt(3));
			adj[p][q]=1;
		}
		for(int p=0;p<n;p++) {
       for(int q=0;q<n;q++) {
         	System.out.print(adj[p][q]+" ");
        }
      System.out.println();
    }
			LinkedList l = null;
        for(char c:list) {
         	l=new LinkedList<Character>();
         	l.add(c);
         	for(int i=0;i<tokens.length;i++)
         		if(tokens[i].charAt(1)==c) {
         			l.add(tokens[i].charAt(3));
         		}	
      System.out.print(l);
      System.out.print("null");
      System.out.println();
    }
  }
}
	


