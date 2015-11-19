<!doctype html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <title>variables</title>
    </head>
    <body>
        <?php 
            $street = "Janisa Janulisa 12";
            $number = 52;
            $city = "Niš";
            $state = "Serbia";
            $zip = 18000;
            print "Adresa je <br /> $street<br />broj $number<br />$city, $state, $zip";
        ?>
        <br />
        <?php 
            $first_name = 'Dalibor';
            $last_name = "Vlatković";
            
            $name1 = '$first_name $last_name';
            $name2 = "$first_name $last_name";
            
            print "<h1>Double quotes</h1><p>Name is $name1 <br /> name2 is $name2</p>";
            
            print '<h1> Single quotes</h1> Name1 is $name1 <br/> name2 is $name2';
        ?>

    </body>
</html>