<!doctype html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <title>Pets</title>
        <link rel="stylesheet" href="style.css">
    </head>
    <body>
        <?php # Script 5.3 - pets2.php
        // This page defines and uses the Pet, Cat and Dog classes
        
        #***** CLASSES *****#
        
        /* Class Pet.
         * The class contains one attribute: name.
         * THe class contains four methods:
         * - __construct()
         * - eat()
         * - sleep()
         * - play()
         */
        
        class Pet {
            public $name;
            function __construct($pet_name) {
                $this->name = $pet_name;
            }
            
            function eat() {
                echo "<p>$this->name is eating.</p>";
            }
            
            function sleep() {
                echo "<p>$this->name is sleeping.</p>";
            }
            
            // Pets can play
            
            function play() {
                echo "$this->name is playing.";
            }
        } // End of class Pet
        
        /* Cat class extends Pet.
         * Cat overrides play().
         */
        
        class Cat extends Pet {
            function play() {
                echo "<p>$this->name is climbing</p>";
            }
        } // End of subclass Cat
        
        /* Dog class extends Pet.
         * Dog overrides play().
         */
        
        class Dog extends Pet {
            function play() {
                echo "$this->name is fetching.";
            }
        } // End of subclass Dog
        
        #***** END OF CLASSES *****#
        
        // Create a dog:
        $dog = new Dog('Satchel');
        
        // Create a cat:
        $cat = new Cat('Bucky');
        
        // Create an unknown type of pet:
        $pet = new Pet('Rob');
        
        // Feed them:
        $dog->eat();
        $cat->eat();
        $pet->eat();
        
        // Nap time:
        $dog->sleep();
        $cat->sleep();
        $pet->sleep();
        
        // Have them play:
        $dog->play();
        $cat->play();
        $pet->play();
        
        // Delete the objects:
        unset($dog, $cat, $pet);
        ?>
    </body>
</html>