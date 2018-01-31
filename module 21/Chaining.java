import java.util.*;
class Hash {
	String data;
	int frequency;
	Hash link;
	public Hash(String data) {
		this.data=data;
		this.frequency=1;
		link=null;
	}
	public void setContent(String data) {
		this.data=data;
	}
	public void setFrequency(int frequency) {
		this.frequency=frequency;
	}
	public void setLink(Hash link) {
		this.link=link;
	}
	public Hash getLink() {
		return this.link;
	}
	public int getFrequency() {
		return this.frequency;
	}
	public String getData() {
		return this.data;
	}
}
class Hashing {
	int size=100;
	Hash[] table=new Hash[size];
	public void stringgiver(String[] reciever)	{
		int count=0;
		for (int i=0;i<reciever.length;i++) {
			String str=reciever[i];
			count=hashoperation(str);
			if(table[count]==null) {
				table[count]=new Hash(str);
			}
			else {
				Hash checker=table[count];
				for(;checker!=null;) {
					if(checker.getData().equalsIgnoreCase(str))	{
						checker.setFrequency(checker.getFrequency()+1);
						break;
					}
					else if(checker.getLink()==null)	{
						checker.setLink(new Hash(str));
						break;
					}
					checker=checker.getLink();
				}
			}
		}
	}
	public int size() {
		return size;
	} 
	public int hashoperation(String inputstring) {
		int count=0;
		int n=0;
		for(int i=0;i<inputstring.length();i++) {
			count+=(int)inputstring.charAt(i);
			n=count%100;
		}
		return n;
	}
	public String toString() {
		String total=" ";
		for (Hash input : table) {
			for(;input!=null;){
				total+="[" + input.getData()+ "-" +input.getFrequency() + "]";
				input=input.getLink();
			}
		}
		total+=" ";
		return total;
	}
}
public class Chaining {
	public static void main(String[] args) {
		Hashing hg = new Hashing();
		Scanner sc=new Scanner(System.in);
		String check=sc.nextLine();
		if(check.contains("."))
			check=check.replace("."," ");
		if(check.contains(","))
			check=check.replace(","," ");
			String[] reciever=check.split(" ");
			hg.stringgiver(reciever);
		System.out.println(hg);
	}
}