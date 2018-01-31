public interface ListADT<E> {
	public void add(E element);
	public void removeIndex(int index);
	public void removeElement(E element);
	public void readElement(int index);
	public void modifyIndex(int index, E element);
	public void modifyElement(E element1, E element2);
}
