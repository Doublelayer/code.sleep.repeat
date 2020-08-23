package behavior_patterns.strategy;

public class PaypalImpl implements IPaymentStrategy {

    private final String email;
    private final String password;

    public PaypalImpl(String email, String password) {
        this.email = email;
        this.password = password;
    }

    @Override
    public void pay(int amount) {
        System.out.println(String.format("%s paid using Paypal.", amount));
    }
}
