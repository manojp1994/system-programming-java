import java.util.*;

class Capitalize {
	public static void main(String[] args) {
	String s=" ";
	int i=0;
	int n;
	Scanner sc=new Scanner(System.in);
 	System.out.println("Enter a string");
    s=sc.nextLine();
	n=s.length();
	for(i=0;i<n;i++) {
		if (i==0) {
			char capitalize = Character.toUpperCase(s.charAt(0));
			System.out.println(capitalize);
		}
		if(s.charAt(i)=='?' || s.charAt(i)=='.' || s.charAt(i)=='!') {
			char capitalize=Character.toUpperCase(s.charAt(i+1));
			System.out.println(capitalize);
			}
		}
	}
}