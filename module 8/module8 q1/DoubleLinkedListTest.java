public class DoubleLinkedListTest {
	public static void main(String[] args) {
	DoubleLinkedList list=new DoubleLinkedList();
	System.out.println("insert by element");
	list.insertElement(2);
	list.insertElement(4);
	list.insertElement(6);
	list.insertElement(8);
	list.insertElement(10);
	list.print();
	System.out.println("push element in front");
	list.pushFront(58);
	list.print();
	System.out.println("push element in back");
	list.pushBack(75);
	list.print();
	// System.out.println("pop by index");
	// list.pop(2);
	// list.print();
	// System.out.println("removing by element");
	// list.removeByElement(10);
	// list.print();
	// System.out.println("remove front");
	// list.popFront();
	// list.print();
	// System.out.println("remove back");
	// list.popBack();
	// list.print();
	}
}