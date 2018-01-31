import java.util.Scanner;
class Binary {
	public static void main(String[] args) {
		Operations op=new Operations();
		Scanner sc=new Scanner(System.in);
		long n=sc.nextInt();
		long quo=n;
		int rem;
		while(quo!=1) {
		quo=n/2;
		rem=(int)n%2;
		n=quo;
		op.push(rem);
		//System.out.println(rem);
		}
		op.push(1);
		op.pop();
	}
}
class Operations {
	private int top=-1;
	private int size=0;
	private int[] array1=new int[50];
	private int[] array2=new int[50];
	public void push(int element) {
		array1[size]=element;
		//System.out.println(array1[size]);
		size++;
	}
	public void pop() {
		for(int i=size-1;i>=0;i--)
		System.out.println(array1[i]);
	}
}