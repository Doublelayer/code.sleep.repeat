package observer;

import java.util.ArrayList;
import java.util.List;

interface Subject {

    public void register(Observer obj);

    public void unregister(Observer obj);

    void notifyObservers();

    Object getUpdate();
}

interface Observer {
    void update();

    void setSubject(Subject sub);
}

class MyTopic implements Subject {
    private List<Observer> observers;
    private String message;
    private boolean changed;
    private final Object MUTEX = new Object();

    public MyTopic() {
        this.observers = new ArrayList<>();
    }

    @Override
    public void register(Observer obj) {
        if (obj == null)
            throw new NullPointerException("Null Observer");
        synchronized (MUTEX) {
            if (!observers.contains(obj))
                observers.add(obj);
        }
    }

    @Override
    public void unregister(Observer obj) {
        synchronized (MUTEX) {
            observers.remove(obj);
        }
    }

    @Override
    public void notifyObservers() {

    }

    @Override
    public Object getUpdate() {
        return null;
    }


}