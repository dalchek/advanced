<!doctype html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <title>Sticky Text Inputs</title>
    </head>
    <body>
        <?php 
            /* This script defines and 
             * calls a function that creates a sticky text input
             */
        
             // A third argument is optiona (it has a default value).
        function make_text_input ($name, $label, $size = 20) {
            // Begin paragraph and a label:
            print '<p><label>' . $label . ': ';
            
            // Begin the input:
            print '<input type="text" name="' . $name . '" size="' . $size . '" ';
            
            // Add the value
            if (isset($_POST[$name])) {
                print ' value="' . htmlspecialchars ($_POST[$name]) . '"';
            }
            print '></label></p>';
        }
        
        // Make the form
        print'<form action = "" method="post">';
            make_text_input('first_name', 'First Name');
            make_text_input('last_name', 'Last Name', 30);
            make_text_input('email', 'Email Address', 50);
        print'<input type="submit" name="submit" value="Register!"></form>';
        
        ?>
    </body>
</html>