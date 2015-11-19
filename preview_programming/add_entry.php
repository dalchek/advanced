<!doctype html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <title>Add a Blog Entry</title>
    </head>
    <body>
        <?php 
            /* This script add blog entry
             * into database.
             */
        
             if ($_SERVER['REQUEST_METHOD'] == 'POST') {
                 // Connect and select
                 $dbc = mysql_connect('localhost', 'bookPHP', 'bookPHP');
                 mysql_select_db('bookphp', $dbc);
                 
                 // Validate the form data
                 $problem = FALSE;
                 if (!empty($_POST['title']) AND !empty($_POST['entry'])) {
                     $title = mysql_real_escape_string(trim(strip_tags($_POST['title'])), $dbc);
                     $entry = mysql_real_escape_string(trim(strip_tags($_POST['entry'])), $dbc);
                 } else {
                     print '<p style="color: red;">Please insert both fields. Title and and entry.</p>';
                     $problem = TRUE;
                 }
                 
                 if (!$problem) {
                     // Define the query
                     $query = "INSERT INTO entries(entry_id, title, entry, date_entered) VALUES (0, '$title', '$entry', NOW())";
                     
                     // Execute the query:
                     if (@mysql_query($query, $dbc)) {
                         print '<p>The blog entry has been added.</p>';
                     } else {
                         print '<p style="color: red;">Could not add entry because: <br />' . mysql_error($dbc) .'</p>';
                     }
                } // No problem
                mysql_close($dbc);
             } // End of form submition
        ?>
        <!-- Display the form -->
        <form action="add_entry.php" method="post">
            <p>Enter Title: <input type="text" name="title" size="40" maxsize="100"></p>
            <p>Enter Entry: <textarea type="text" name="entry" cols="40" rows="5"></textarea></p>
            <input type="submit" name="submit" value="Post this entry!">
        </form>
    </body>
</html>