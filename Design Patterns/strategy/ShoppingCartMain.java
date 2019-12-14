package strategy;

public class ShoppingCartMain {
    public static void main(String[] args) {
        ShoppingCart cart = new ShoppingCart();

        Item item1 = new Item("1234" , 10);
        Item item2 = new Item("4534" , 40);

        cart.addItem(item1);
        cart.addItem(item2);

        // paypal pay
        cart.pay(new PaypalImpl("test@paypal.de", "1234"));

        // credit/debit
        cart.pay(new CreditCardImpl("Doublelayer", "435234523405234", "864", "12/20"));

    }
}
