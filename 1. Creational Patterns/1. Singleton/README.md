1. Definition
    - Lets you sure that a class has only one instance.
        - Share same resource: a database connection, a file, ... 
    - Providing a global access point to this instance.
        - They're handy, but unsafe, any code can potentially overwrite the contents of those variables and crash the app.
        - Lets access object from anywhere in the program.


2. Singleton has two steps to implement:
    - Make constructor is private, to prevent using the new keyword to create new instance
    - Create a static method to initial instance of class, and save it in a static field. 

3. Applicability
    - Use the Singleton when a class should have just a single instance
    - Use the Singleton pattern when you need stricter control over global variables

4. Pros
    - Can be sure that a class has only one single instance
    - Global access point to that instance
    - Singleton object is initialized only when it's requested for the first time

5. Cons
    - Violates the `Single Responsibility Principle`
    - It's bad design, when the components know too much about each other
    - The pattern requires special treatment in a multithreaded environment so that multiple threads won’t create a singleton object several times.
    - Difficult to unit test because many test frameworks rely on inheritance when producing mock objects