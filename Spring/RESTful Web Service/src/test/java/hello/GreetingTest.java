package hello;

import static org.hamcrest.CoreMatchers.containsString;
import static org.junit.Assert.*;

import org.junit.Test;

public class GreetingTest {

    private Greeting greeting = new Greeting(1, "Test");

    @Test
    public void greetingShouldReturnID() {
        assertEquals("Greeting should return ID", greeting.getID(), 1);
    }

    @Test
    public void greetingShouldReturnContant() {
        assertThat("Greeting should return Content", greeting.getContent(), containsString("Test"));
    }

}