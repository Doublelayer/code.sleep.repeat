package strategy;

public class Item {

    private final String upc;
    private final int price;


    public Item(String upc, int price) {
        this.upc = upc;
        this.price = price;
    }

    public int getPrice() {
        return price;
    }

}
