<!doctype html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <title>Triangle</title>
        <link rel="stylesheet" href="style.css">
    </head>
    <body>
        <?php # Script 6.3 - abstract.php
            // This page uses the Triangle class, which is derived from Shape
            require 'shape.php';
            require 'triangle.php';
            
            // Set the triangle's sides:
            $side1 = 5;
            $side2 = 10;
            $side3 = 13;
            
            // Print a little introduction:
            echo "<h2>With sides of $side1, $side2, and $side3...</h2>";
            
            // Create a new triangle:
            $t = new Triangle($side1, $side2, $side3);
            
            // Print the afea.
            echo '<p>The area of the triangle is ' . $t->getArea() . '</p>';
            
            // Print the perimeter
            echo '<p>The perimeter of the triangle is ' . $t->getPerimeter() . '</p>';
            
            // Delete object
            unset($t);
        ?>
    </body>
</html>