import java.util.*;
public class Dijkstras_supply {
	public static void main(String[] args) {
    int infinity=99999;
    int counter=0;
    Scanner sc=new Scanner(System.in);
    int vertices=Integer.parseInt(sc.nextLine());
    String source=sc.nextLine();
    String s_vertices=sc.nextLine();
    String[] verticesarray=s_vertices.substring(1,s_vertices.length()-1).split(",");
    int distance[]=new int[vertices];
    int distance1[]=new int[vertices];
    int distance2[]=new int[vertices];
    String parentnode[]=new String[vertices];
    String[] dijkstraspath=new String[vertices];
    String[] parentArray=new String[vertices];
    String[] parentArray1=new String[vertices];
    int[] queue=new int[vertices];
    for(int i=0;i<vertices;i++){
      distance[i]=infinity;
    }
    ArrayList<ArrayList<Integer>> adjacencymatrix=new ArrayList<ArrayList<Integer>>();
    for(int i=0;i<vertices;i++)  {
      adjacencymatrix.add(new ArrayList<Integer>());
      String values=sc.nextLine();
      String matrixvalues[]=values.split(",");
      for(int j=0;j<vertices;j++)  {
        adjacencymatrix.get(i).add(Integer.parseInt(matrixvalues[j]));
      }
    }
    for(int i=0;i<verticesarray.length;i++) {
      if(source.equals(verticesarray[i])) {
        distance[i]=0;
        parentnode[i]=source;
        dijkstraspath[i]=source;
        parentArray[i]="";
        queue[0]=i;
        counter++;
      }
      else if(!source.equals(verticesarray[i]))  {
        distance[i]=infinity;
      }
    }
    while(counter>0) {
      int j=queue[0];
      for(int i=0;i<vertices;i++){
        int k=adjacencymatrix.get(j).get(i);
        if(adjacencymatrix.get(j).get(i)== 0) {
          k=infinity;
        }
        if(distance[i]>k+distance[j]) {
          distance[i]=k+distance[j];
          dijkstraspath[i]=dijkstraspath[j]+"->"+verticesarray[i];
          parentnode[i]=dijkstraspath[i];
          queue[counter++]=i;
        }
      }
      for(int i=0;i<parentArray.length-1;i++) {
      	parentArray[i]=parentnode[i];
      }
      for(int i=0;i<distance1.length;i++) {
      	distance1[i]=distance[i];
      }
      int index=0;
      for(int i=0;i<counter-1;i++) {
        queue[i]=queue[i+1];
        index=i+1;
      }
      queue[index]=0;
      counter--;
    }
    for(int i=0;i<distance1.length;i++) {
      for(int j=0;j<distance1.length;j++) {
        if(distance1[i]>distance1[j]) {
          int temp=distance1[i];
          distance1[i]=distance1[j];
          distance1[j]=temp;
          
          String tem=parentArray[i];
          parentArray[i]=parentArray[j];
          parentArray[j]=tem;
        }
      }
    } 
    int last=distance1.length-1;
    int first=0;
    while(first<=last) {
      // for reversing distance array 
      int t=distance1[first];
      distance1[first]=distance1[last];
      distance1[last]=t;
      // for reversing parent array 
      String te=parentArray[first];
      parentArray[first]=parentArray[last];
      parentArray[last]=te;
      first++;
      last--;
    }
    for(int i=distance1.length-1;i>=0;i--) {
      if(distance1[i]==infinity) {
        System.out.println(source+"->"+verticesarray[i]+":"+infinity);
      }
      else { 
        System.out.println(parentArray[i]+":"+distance1[i]);
      }
    }
  }
}