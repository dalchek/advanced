<!doctype html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <title>Rectangle</title>
    </head>
    <body>
        <?php #Script 4.4 - rectangle1.php
            /*
             * This page uses the Rectangle class
             * This page shows a bunch of information about a rectangle.
             */
        
             // Inlcude the class definition
             require('Rectangle.php');
             
             // Define the necessary variables:
             $widht = 160;
             $height = 75;
             
             // Ptint a little introduction:
             echo "<h2>With a width of $widht and a height of $height...</h2>";
             
             // Create a new object:
             $r = new Rectangle();
             
             // Assign the rectangle dimensions:
             $r->setSize($widht, $height);
             
             // Print the area:
             echo '<p>The area of the rectangle is ' . $r->getArea() . '</p>';
             
             // Print the perimeter:
             echo '<p>The perimeter of the rectangle is ' . $r->getPerimeter() . '</p>';
             
             // If this a square?
             echo '<p>This rectangle is ';
             if($r->isSquare()) {
                 echo 'also';
             } else {
                 echo 'not';
             }
             echo ' a square.</p>';
             
             // Delete the object:
             unset($r);
                
        ?>
    </body>
</html>