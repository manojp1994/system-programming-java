import java.util.*;
import java.io.*;

class BellmanFord {
	static int[][] matrix;
	static int parent = 0;
	static int[] parents;
	static ArrayList<String> order = new ArrayList<>();
	static ArrayList<String> unscanned = new ArrayList<>();
	static ArrayList<Integer> unsc = new ArrayList<>();
	public BellmanFord(String source, int vertices) {
		parents = new int[vertices];
		for (int i = 0; i < vertices; i++) {
			order.add(source);
		}
		matrix = new int[vertices][vertices];
	}

	public static void adjacencyMatrix(int row, String edges) {
		String[] eds = edges.split(",");
		for (int i = 0; i < eds.length; i++) {
			matrix[row][i] = Integer.parseInt(eds[i]);
		}
	}

	public static int[][] getAdMatrix() {

		return matrix;
	}

	

	public static void realLogic(String source, int noOfVertices, ArrayList<String> vertices) {
		int[][] mat = getAdMatrix();
		int g = 0;
		boolean equal = true;
		boolean cycle = false;
		int[] d = new int[noOfVertices];
		ArrayList<String> scanned = new ArrayList<>();
		for (int i = 0; i < noOfVertices; i++) {
			if (i == vertices.indexOf(source)) {
				d[i] = 0;
			} else {
				d[i] = 9999;
			}
		}
		for (int p = 0; p < noOfVertices-1; p++) {
			int[] kt = d;
			equal = true;
			for (int i = 0; i < noOfVertices; i++) {
				for (int j = 0; j < noOfVertices; j++) {
					if (mat[i][j] != 9999) {
						if ((d[i] + mat[i][j]) < d[j]) {
							d[j] = d[i] + mat[i][j];
							parents[j] = i;
						}
					}
				}
			}
			if (p != 0) {
				for (int q = 0; q < noOfVertices; q++) {
					if (kt[q] != d[q]) {
						equal = false;
					}
				}
				if (!equal) {
					continue;
				} else {
					equal = false;
					g = p+1;
					break;
				}
			}
		}
		for (int row = 0; row < noOfVertices; row++) {
			for (int j = 0; j < noOfVertices; j++) {
				if (mat[row][j] != 9999) {
					if (d[row] + mat[row][j] < d[j]) {
						System.out.println("The graph has negative cycles.");
						System.out.println("9999");
						cycle = true;
						break;
					}
				}
			}
			if (cycle) {
			 	break;
			}
			if (equal) {
				g = noOfVertices - 1;
			}
		}
		if (!cycle) {
	        for (int i = 0; i < noOfVertices; i++) {
	            ArrayList<String> op = new ArrayList<String>();
	            int j;
	            op.add(vertices.get(i));
	            j = i;
	            while(j != vertices.indexOf(source)) {
	                j =parents[j];
	                op.add(vertices.get(j));
	            }
	            if (vertices.get(i).equals(source)) {
	            	for (int l = op.size()-1;l >= 0 ;l--) {
		                System.out.print(op.get(l)+ "->");
		            }
		            System.out.println(op.get(0) + ":" + d[i]);	
	            } else {
	            	for (int l = op.size()-1;l > 0 ;l--) {
		                System.out.print(op.get(l)+ "->");
		            }
		            System.out.println(op.get(0) + ":" + d[i]);
	            }
	        }
			System.out.println(g);
		}
	}

	public static void main(String[] args) throws Exception {
		BufferedReader br = new BufferedReader (new InputStreamReader(System.in));
		int noOfVertices = Integer.parseInt(br.readLine());
		ArrayList<String> vertice = new ArrayList<>();
		String v = br.readLine();
		String source = br.readLine();
		StringTokenizer st = new StringTokenizer(v, "(),");
		String[] vertices = new String[noOfVertices];
		BellmanFord dsp = new BellmanFord(source, noOfVertices);
		int p = 0;
		while (st.hasMoreTokens()) {
			vertices[p] = st.nextToken();
			p++;
		}
		for (int i = 0; i < noOfVertices; i++) {
			vertice.add(vertices[i]);
			adjacencyMatrix(i, br.readLine());
		}
		realLogic(source, noOfVertices, vertice);
	}
}