<!doctype html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <title>quotes</title>
    </head>
    <body>
        <?php 
            $first_name = "O'Toole";
            $last_name = 'O\'Tolle';
            
            $name1 = '$first_name $last_name';
            $name2 = "$first_name $last_name";
            
            print "<h1>Doubled quotes</h1>Name1 is $name1";
            print '<h1>Single quotes</h1>Name2 is $name2';
        ?>
    </body>
</html>