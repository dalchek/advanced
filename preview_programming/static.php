<!doctype html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <title>Static</title>
        <link rel="stylesheet" href="style.css">
    </head>
    <body>
        <?php # Script 5.6 - static.php
            // This page defines and uses the Pet, Cat and Dog classes.
        
        #***** CLASES *****#
        
        /* Class Pet.
         * The class contains two attributes:
         * - protected name
         * - private static _count
         * The class contains three methods:
         * - __construct()
         * - __ destruct()
         * - public static getCount()
         */
        class Pet {
            // Declare the attributes:
            protected $name;
            private static $_count = 0;
            
            // Constructor assigns the pet's name
            // And increments the counter:
            function __construct($pet_name) {
                $this->name = $pet_name;
                echo <<<EOT
                    <p style="color: red;position: relative; top: 17px;">Pet name is $this->name:</p>
EOT;
                
                // Increment the counter:
                self::$_count++;
            }
            
            // Destructor decrements the counter:
            function __destruct() {
                self::$_count--;
            }
            
            // Static method for returning the counter:
            public static function getCount() {
                return self::$_count;
            }
        } // End of class Pet
        
        /* Cat class extends Pet */
        class Cat extends Pet {
            
        } // End of Cat subclass
        
        /* Dog class extends Pet */
        class Dog extends Pet {
            
        } // End of Dog subclass
        
        /* Ferret class extends Pet */
        class Ferret extends Pet {
            
        } // End of Ferret subclass
        
        /* PygmyMarmoset class extends Pet */
        class PygmyMarmoset extends Pet {
            
        } // End of PygmyMarmoset subclass
        
        #***** END OF CLASSES *****#
        
        // Create a dog:
        $dog = new Dog('Old Yeller');
        
        // Print the number of pets:
        echo '<p>After creating a dog, I now have ' . Pet::getCount() . ' pet(s)</p>';
        
        // Create a cat
        $cat = new Cat('Bucky');
        echo '<p>After creating a Cat, I now have ' . Pet::getCount() . ' pet(s)</p>';
        
        // Create another pet
        $ferret = new Ferret('Fungo');
        echo '<p>After creating a Ferret, I now have ' . Pet::getCount() . ' pet(s).</p>';
        
        // Tragedy stroles!
        unset($dog);
        echo '<p>After tragedy strikes, I now have ' . Pet::getCount() . ' pet(s).</p>';
        
        // Pygmy Marmosets are so cute:
        $pygmymarmoset = new PygmyMarmoset('Toodles');
        echo '<p>After creating a Pygmy Marmoset, I now have ' . Pet::getCount() . ' pet(s).</p>';
        
        // Delete the objects
        unset($cat, $feret, $pygmymarmoset);
        ?>
    </body>
</html>