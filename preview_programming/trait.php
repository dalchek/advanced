<!doctype html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <title>Trait</title>
        <link rel="stylesheet" href="style.css">
    </head>
    <body>
        <?php # Script 6.7 - trait.php
        // The page uses the tDebug trait through the Rectangle object.
        
        // Include the trait definition:
        require 'tDebug.php';
        
        // Include the class definition:
        require 'Rectangle.php';
        
        // Create a new object:
        $r = new Rectangle(42,37);
        
        // Dump the information:
        $r->dumpObject();
        
        // Delete the object:
        unset($r);
        ?>
    </body>
</html>