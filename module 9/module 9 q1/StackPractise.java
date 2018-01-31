class Stacks {
		private int stackcapacity=10;
		int[] stackarray=new int[stackcapacity];
		private int top=-1;	// stack empty condition
		public void push(int element) {
			if(top+1<=stackcapacity) {
				top++;
				stackarray[top+1]=element;
				//System.out.println(top+1);
				//System.out.println(stackcapacity);
			}
			else
				System.out.println("stack over flow");
		}
		public void pop() {
			if(top==-1) {
				System.out.println("stack cannot be deleted");
			}
			if(top>=0)
				top-=1;
			System.out.println(top);
		}
	}
class StackPractise {
		public static void main(String[] args) {
			Stacks st=new Stacks();
			st.push(1);
			st.push(2);
			st.push(3);
			st.push(4);
			st.push(5);
			st.pop();
			st.pop();
			st.pop();
	}
}
