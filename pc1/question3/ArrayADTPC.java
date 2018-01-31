public interface ArrayADTPC<E> {
	public void pushBack(E element);
	public void popBack();
	public void size();
	public void reallocate(int newsize);	
	public void print();
}