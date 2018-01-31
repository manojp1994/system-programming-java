import java.util.*;

class Vertex {
  public int label;
  public boolean visited;
  public int vertex(int label) {
    label=lab;
    visited=false;
  }
}
class Search {
  private final int maxVertices=20;
  private vertex[] vertexlist;
  private int[][] adjMatrix;
  private int vertexCount;
  private Stack thestack;
  public Search() {
    vertexlist=new Vertex[maxVertices];
    adjMatrix=new int[maxVertices][maxVertices];
    vertexCount=0;
    for(int y=0;y<maxVertices;y++) {
      for(int x=0;x<maxVertices;x++) {
        adjMatrix[x][y]=0;
      }
    }
  thestack=new Stack();
  }
  public void addVertex(int lab) {
    vertexlist[vertexCount++]=new Vertex(lab);
  }
  
}