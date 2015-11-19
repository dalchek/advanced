<!doctype html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <title>I have this sorted out</title>
    </head>
    <body>
        <?php 
            /* This script receives a string in $_POST['words']. It then turns it into an array,
             * sorts the array alphabetically, and teprints it.
             */
             // Turn the incoming string into an array:
             $words_array = explode(',', $_POST['words']);
             
             // Sort the array:
             sort($words_array);
             
             // Turn the array back into a string:
             $string_words = implode('<br />', $words_array);
             
             // Print the result:
             print"<p>An alphabetical version of your list is: <br /><br />$string_words</p>";
             
        ?>
    </body>
</html>