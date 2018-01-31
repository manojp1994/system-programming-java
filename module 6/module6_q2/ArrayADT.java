public interface ArrayADT<E> {
	public void pushBack(E element);
	public void popBack();
	public void size();
	public void reallocate(int newsize);
	//public void Capacity();	
	public void print();
}