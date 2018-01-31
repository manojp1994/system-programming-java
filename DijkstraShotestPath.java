import java.util.*;
import java.io.*;

class DijkstraShotestPath {
	static int[][] matrix;
	static int parent = 0;
	static int[] parents;
	static ArrayList<String> order = new ArrayList<>();
	static ArrayList<String> unscanned = new ArrayList<>();
	static ArrayList<Integer> unsc = new ArrayList<>();
	public DijkstraShotestPath(int vertices) {
		parents = new int[vertices];
		matrix = new int[vertices][vertices];
	}
	public DijkstraShotestPath(){

	}

	
	public static void main(String[] args) throws Exception {
		DijkstraShotestPath obj = new DijkstraShotestPath();
		BufferedReader br = new BufferedReader (new InputStreamReader(System.in));
		int noOfVertices = Integer.parseInt(br.readLine());
		String v = br.readLine();
		
		String[] vertices = obj.tokenizing(v,noOfVertices);
		ArrayList<String> vertice = new ArrayList<>();
		String[] sd = obj.splitLogic(br.readLine());
		String source = sd[0];
		String dest = sd[1];
		DijkstraShotestPath dsp = new DijkstraShotestPath(noOfVertices);
		
		for (int i = 0; i < noOfVertices; i++) {
			vertice.add(vertices[i]);
			obj.adjacencyMatrix(i, br.readLine());
		}
		obj.realLogic(source, dest, noOfVertices, vertice);
	}

	public String[] splitLogic(String line) {
		String[] sd = line.split(",");
		return sd;
	}
	public String[] tokenizing(String v , int noOfVertices){
		StringTokenizer st = new StringTokenizer(v, "(),");
		String[] vertices = new String[noOfVertices];
		int p = 0;
		while (st.hasMoreTokens()) {
			vertices[p] = st.nextToken();
			p++;
		}
		return vertices;
	}

	public void adjacencyMatrix(int row, String edges) {
		String[] eds = edges.split(",");
		for (int i = 0; i < eds.length; i++) {
			matrix[row][i] = Integer.parseInt(eds[i]);
		}
	}

	public int[][] getAdMatrix() {
		return matrix;
	}

	public String delMin(ArrayList<String> vertices) {
		int e = unsc.get(0);
		String ret = "";
		int ind = 0;
		if (unscanned.size() == 1) {
			ret = unscanned.get(0);
			ind = 0;
			parent = unsc.get(ind);
			unscanned.remove(0);
			unsc.remove(0);
		} else {
			for (String v : unscanned) {
				if (unsc.get(unscanned.indexOf(v)) < e) {
					e = unsc.get(unscanned.indexOf(v));
					ind = unscanned.indexOf(v);
				}
			}
			ret = unscanned.get(unsc.indexOf(e));
			parent = unsc.get(ind);
			order.add(ret);
			unscanned.remove(ind);
			unsc.remove(ind);
		}
		return ret;
	}

	public void realLogic(String source, String destination, int noOfVertices, ArrayList<String> vertices) {
		int[][] mat = getAdMatrix();
		int[] d = new int[noOfVertices];
		ArrayList<String> scanned = new ArrayList<>();
		for (int i = 0; i < noOfVertices; i++) {
			if (i == vertices.indexOf(source)) {
				d[i] = 0;
			} else {
				d[i] = 99999;
			}
		}
		unscanned.add(source);
		unsc.add(0);
		while (!unscanned.isEmpty()) {
			String u = delMin(vertices);
			int e = vertices.indexOf(u);
			for (int j = 0; j < noOfVertices; j++) {
				if (mat[e][j] != 0) {
					if (d[j] > mat[e][j] + parent) {
						d[j] = mat[e][j] + parent;
						if (unscanned.contains(vertices.get(j))) {
							int in = unscanned.indexOf(vertices.get(j));
							if (unsc.get(in) > d[j]) {
								unsc.set(in, d[j]);
							}
							parents[j] = vertices.indexOf(u);
						} else {
							unscanned.add(vertices.get(j));
							unsc.add(d[j]);
							parents[j] = vertices.indexOf(u);
						}
					}
				}
			}
			if (u.equals(destination)) {
				break;
			}
		}
		int i = vertices.indexOf(destination);
		ArrayList<String> op = new ArrayList<String>();
        int j;
        op.add(vertices.get(i));
        j = i;
        while(j!= vertices.indexOf(source)) {
            j =parents[j];
            op.add(vertices.get(j));
        }
		for (int w = op.size() -1; w >= 0; w--) {
			String p = op.get(w);
			ArrayList<String> op1 = new ArrayList<String>();
			int u = vertices.indexOf(p);
			int k;
            op1.add(vertices.get(u));
            k = u;
            while(k!= vertices.indexOf(source)) {
                k =parents[k];
                op1.add(vertices.get(k));
            }
            int l = op1.size() - 1;
            do {
            	System.out.print(op1.get(l)+ "->");
            	l--;
            } while (l > 0);
            System.out.println(op1.get(0) + " : " + d[u]);
		}
		
	}

}

