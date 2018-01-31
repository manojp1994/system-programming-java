import java.util.Scanner;
public class Reverse {
	public static void main(String[] args) {
	int rev=0;
	Scanner sc=new Scanner(System.in); 
	System.out.print("enter the number to be reversed : ");
	int n=sc.nextInt();
	while(n!=0) {
		rev=rev*10;
		rev=rev+n%10;
		n=n/10;
	}
	System.out.print("reverse of number is : " + rev);
	}
}