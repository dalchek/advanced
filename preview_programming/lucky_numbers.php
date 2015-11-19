<!doctype html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <title>Lucky numbers</title>
    </head>
    <body>
        <?php 
            //Create three random numbers
            $n1 = rand (1, 99);
            $n2 = rand (1, 99);
            $n3 = rand (1, 99);
            
            // Print out the numbers:
            print"<p>
                Your lucky numbers are: <br />
                $n1 <br />
                $n2 <br />
                $n3 <br />
            </p>";
        ?>
    </body>
</html>