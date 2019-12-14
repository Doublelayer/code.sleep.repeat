package mediator;

import java.util.ArrayList;
import java.util.List;

class ChatClient {
    public static void main(String[] args) {
        ChatMediator mediator = new ChatMediatorImpl();
        User user1 = new UserImpl(mediator, "Pankaj");
        User user2 = new UserImpl(mediator, "Lisa");
        User user3 = new UserImpl(mediator, "Saurabh");
        User user4 = new UserImpl(mediator, "David");
        mediator.addUser(user1);
        mediator.addUser(user2);
        mediator.addUser(user3);
        mediator.addUser(user4);

        user1.send("Hi All");
    }

}

/*
 * Interface that will define the contract for concrete mediators
 */
interface ChatMediator {
    public void sendMessage(String message, User user);

    public void addUser(User user);
}

/*
 * Concrete Mediator class. It will have a list of users in the group and
 * provide logic for the communication between the users
 */

class ChatMediatorImpl implements ChatMediator {
    private List<User> users;

    public ChatMediatorImpl() {
        this.users = new ArrayList<>();
    }

    @Override
    public void addUser(User user) {
        this.users.add(user);
    }

    @Override
    public void sendMessage(String message, User user) {
        for (User u : this.users) {
            // message should not be received by the user sending it
            if (u != user) {
                u.receive(message);
            }
        }
    }
}

/*
 * Users can send and receive messages. We use an abstract class. NOTICE: User
 * has a reference to the mediator object. Its requierd fot the communication
 * between different users
 */
abstract class User {
    protected ChatMediator mediator;
    protected String name;

    public User(ChatMediator mediator, String name) {
        this.mediator = mediator;
        this.name = name;
    }

    public abstract void send(String message);

    public abstract void receive(String message);
}

/*
 * Concrete User class to be used by the system
 */
class UserImpl extends User {
    public UserImpl(ChatMediator mediator, String name) {
        super(mediator, name);
    }

    @Override
    public void send(String msg) {
        System.out.println(this.name + ": Sending Message = " + msg);
        mediator.sendMessage(msg, this);
    }

    @Override
    public void receive(String msg) {
        System.out.println(this.name + ": Received Message: " + msg);
    }

}