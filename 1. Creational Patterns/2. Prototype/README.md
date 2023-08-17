1. Problem
    - You have an object, and you want to create an exact copy of it. Normal, we create new object from class of object copied,
    then go to all the fields of the origin object and copy their values over to the new object.
    But there'a catch. Some of object's fields may be private, and not visible from outside of the object itself
    - Another problem: Your code will dependent on that class has object to copy.

2. Solution
    - The pattern declares a common interface for all objects that support cloning, that interface contains just a single `clone` method.
    - An object that supports cloning is called a `prototype`

3. Applicability
    - Use the Prototype pattern when your code shouldn’t depend on the concrete classes of objects that you need to copy.
    - Use the pattern when you want to reduce the number of subclasses that only differ in the way they initialize their respective objects.

4. Pros
    - Clone object without coupling to their concrete class
    - You can get rid of repeated initialization code in favor of cloning pre-built prototypes.
    - You can produce complex objects more conveniently.
    - You get an alternative to inheritance when dealing with configuration presets for complex objects.

5. Cons
    - Cloning complex objects that have circular references might be very tricky