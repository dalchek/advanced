<!doctype html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <title>My Little Gradebook</title>
    </head>
    <body>
        <?php 
        
        // Create the array
        $grades = array (
            'Richard'   => 95,
            'Sherwood'  => 82,
            'Tony'      => 98,
            'Franz'     => 87,
            'Melissa'   => 75,
            'Roddy'     => 85
        );
        
        // Print originaly array:
        print "<p>Originally the array looks like this: <br /><br />";
        foreach ($grades as $student => $grade) {
            print "$student: $grade<br />\n";
        }
        print "</p>";
        
        // Sort by value in reverse order, then print again:
        arsort($grades);
        print "<p>After sorting the array by value using arsort(), the array looks like this: <br />";
            foreach ($grades as $student => $grade) {
                print "$student: $grade<br />\n";
            }
        print "</p>";
        
        // Sort by key
        ksort($grades);
        print "<p>After sorting array by key usint ksort(), array looks like this: <br />";
            foreach ($grades as $student => $grade) {
                print "$student: $grade<br />\n";
            }
        print "</p>";
        ?>
    </body>
</html>