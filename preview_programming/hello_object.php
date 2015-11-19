<!doctype html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <title>Hello, World!</title>
    </head>
    <body>
        <?php #Script 4.2 - Hello_object.php
            /*
             * This page uses the HelloWorld class.
             * This page just says "Hello, world!".
             */

            // Include the class definition:
            require('HelloWorld.php');

            // create the object
            $obj = new HelloWorld();

            // Call the sayHello() method
            $obj->sayHello();

            // Say hello in different languages:
            $obj->sayHello('Italian');
            $obj->sayHello('Dutch');
            $obj->sayHello('French');

            // Delete the object:
            unset($obj);
        ?>
    </body>
</html>