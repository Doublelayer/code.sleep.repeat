# Building Java Projects with Maven

🧠 Concepts Covered:

    - create an application that provides the time of day and then build it with Maven
    - Define a simple Maven build
    - Installing Maven
    - Create a Maven project definition.
      - Maven projects are defined with an XML file named pom.xml.
      - Among other things, this file gives the project’s name, version, and dependencies that it has on external libraries
    - Create pom.xml
    - Build Java code
    ```
    mvnn compile
    ```
    - package
        - will compile java code and run any test and finish by packing the code up in a JAR file
        - the name of the JAR file will be based on the project`s <artifacID> and <version> e.g. gs-maven-0.1.0.jar
    ```
    mvnn package
    ```
    - execute the JAR file
    ```
    java -jar target/gs-maven-0.1.0.jar
    ```
    -  install project’s JAR file to that local repository (repository of dependencies on local machine for quick acces to project dependencies)
        - will compile, test and package the project`s code annd copy it into the local dependency repository, ready for another project to reference it as a dependency
    ```
    mvnn install
    ```
    - Declare Dependencies
    - Write a Test
    ```
    mvn test
    ```
