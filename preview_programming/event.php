<!doctype html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <title>Event days</title>
    </head>
    <body>
        <?php 
            print"<p>You want to add an event called <b>{$_POST['name']}</b> which take place on: <br />";
            
            // Print each weekday
            if(isset($_POST['days']) AND is_array($_POST['days'])) {
                foreach ($_POST['days'] as $day) {
                    print"$day <br />\n";
                }
            } else {
                print 'Please select at least one weekday for this event!';
            }
            
            // Complete the paragraph
            print"</p>";
        
        ?>
    </body>
</html>