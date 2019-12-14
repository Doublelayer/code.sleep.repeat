package strategy;

import java.util.Formatter;

public class CreditCardImpl implements IPaymentStrategy {

    private final String nm;
    private final String ccNum;
    private final String cvv;
    private final String expiryDate;

    public CreditCardImpl(String nm, String ccNum, String cvv, String expiryDate) {
        this.nm = nm;
        this.ccNum = ccNum;
        this.cvv = cvv;
        this.expiryDate = expiryDate;
    }

    @Override
    public void pay(int amount) {
        System.out.println(String.format("%s paid with credit/debit card.", amount));
    }
}
