<!doctype html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <title>No soup for you!</title>
    </head>
    <body>
        <h1>Mmmm... soup</h1>
        
        <?php 
            // Create an array
            $soups = array (
                'Monday'    => 'Clam Chowder',
                'Tuesday'   => 'White Chicken Chili',
                'Wednesday' => 'Vegetarian',
                'Thursday'  => 'Chicken Noodle',
                'Friday'    => 'Tomato',
                'Saturday'  => 'Cream of Broccoli'
            );
            
            // Print each key and value
            foreach ($soups as $day => $soup) {
                print "<p>$day: $soup</p>\n";
            }
        ?>
    </body>
</html>