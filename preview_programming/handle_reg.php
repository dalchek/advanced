<!doctype html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <title>Registration</title>
        <style>
            .error { color: red; font-style: italic; }
        </style>
    </head>
    <body>
        <h1>Registration Results</h1>
        <?php 
            /* This script receives 
             * seven values from 
             * register.html:
             */
        
             // Address error managemnet if you want
        
             // Flag variable to track success
             $okay = TRUE;
             
             // Validate the email address:
             if (empty($_POST['email'])) {
                 print'<p class="error">Please enter your email adderss.</p>';
                 $okay = FALSE;
             }
             // Validate password:
             if (empty($_POST['password'])) {
                 print'<p class="error">Please enter your password.</p>';
                 $okay = FALSE;
             }
             
             // Check two passwords form equality:
             if ($_POST['password'] != $_POST['confirm']) {
                 print'<p class="error">* Your confirmed password doesnt match the original password!</p>';
             }
             $age = 2014 - $_POST['year'];
             // Validate the birth year:
             if (is_numeric($_POST['year']) AND (strlen($_POST['year']) == 4) ) {
                 if ($_POST['year'] < 2014) {
                     $age = 2014 - $_POST['year'];
                 } else {
                   print '<p class="error">* Aither enter your birth date wrong or you come from the future.</p>';
                   $okay = FALSE;
                 }
             } else {
                print'<p class="error">* Please enter the year you were born as four digits.</p>';
             }  
             
             // Validate the tearms
             if (!isset($_POST['terms'])) {
                 print'<p class="error">* You must accept the tearms.</p>';
                 $okay = FALSE;
             }
             
             // Validate the color
             switch($_POST['color']) {
                 case 'red':
                     $color_type = 'primary';
                     break;
                 case 'yellow':
                     $color_type = 'primary';
                     break;
                 case 'green':
                     $color_type = 'secondary';
                     break;
                 case 'blue':
                     $color_type = 'primary';
                     break;
                 default:
                     print'<p class="error">Please select your favorite color</p>';
                     $okay = FALSE;
                     break;
             }
             
             if ($okay) {
                 print '<p>You have been successfully registered (but no really).<p>';
                 print"<p>You will turn $age this year.</p>";
                 print"<p>Your favorite color is $color_type color.</p>";
             }
        ?>
    </body>
</html>