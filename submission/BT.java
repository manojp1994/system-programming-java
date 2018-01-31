import java.util.*;

class Node {
    int data;
    Node leftNode;
    Node rightNode;

    public Node(int data, Node prevnode, Node nextNode) {
        this.data = data;
        this.leftNode = prevnode;
        this.rightNode = nextNode;
    }
    public void setData(int data) {
        this.data = data;
    }
    public int getData() {
        return data;
    }
    public void setLeftNode(Node leftNode) {
        this.leftNode = leftNode;
    }
    public Node getLeftNode() {
        return leftNode;
    }
    public void setRightNode(Node rightNode) {
        this.rightNode = rightNode;
    }
    public Node getRightNode() {
        return rightNode;
    }
}

class BinTree {
    Node root;
    Queue<Node> q;
    int count;
    
    public BinTree() {
        root = null;
        q = new LinkedList<Node>();
        count = 0;
    }
    public void insert(int value) {
        Node n = new Node(value,null,null);
        if(root == null) {
            root = n;
            q.add(root);
            return;
        }
        Node node = q.peek();
        if(node.getLeftNode() == null) {
            node.setLeftNode(n);
            q.add(n);
            count++;
        }
        else if(node.getRightNode() == null) {
            node.setRightNode(n);
            q.add(n);
            count++;
        }
        if(count == 2) {
            q.remove();
            count = 0;
        }
    }
    public Node getNode() {
        return root;
    }
    public void preTraversal(Node root) {
        if(root == null)
            return;
        System.out.print(root.getData()+" ");
        preTraversal(root.getLeftNode());
        preTraversal(root.getRightNode());
    }
    public void inTraversal(Node root) {
        if(root == null)
            return;
        inTraversal(root.getLeftNode());
        System.out.print(root.getData()+" ");
        inTraversal(root.getRightNode());
        //System.out.println("\n");
    }
    public void postTraversal(Node root) {
        if(root == null)
            return;
        postTraversal(root.getLeftNode());
        postTraversal(root.getRightNode());
        System.out.print(root.getData()+" ");
    }
}

public class BT {
    public static void main(String[] args) {
        BinTree b = new BinTree();
        Scanner sc = new Scanner(System.in);
        String values = sc.nextLine();
        StringTokenizer st = new StringTokenizer(values," ");
        while(st.hasMoreTokens()) {
            String str = st.nextToken();
            b.insert(Integer.parseInt(str));
        }
        System.out.println();
        b.preTraversal(b.getNode());
        System.out.println();
        b.inTraversal(b.getNode());
        System.out.println();
        b.postTraversal(b.getNode());
    }
}