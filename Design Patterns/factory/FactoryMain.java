package factory;

public class FactoryMain {
    public static void main(String[] args) {
        Computer laptop = ComputerFactory.getComputer("laptop","2 GB","500 GB","2.4 GHz");
        Computer server = ComputerFactory.getComputer("server","16 GB","1 TB","2.9 GHz");
        System.out.println(String.format("Factory Laptop Config: %s", laptop));
        System.out.println(String.format("Factory Server Config: %s", server));
    }
}
