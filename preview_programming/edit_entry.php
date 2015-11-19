<!doctype html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <title>Edit a blog entry</title>
    </head>
    <body>
        <?php
            /* This script edits a blog entry using an update query */
        
            // Connect and select
            $dbc = mysql_connect('localhost', 'bookPHP', 'bookPHP');
            mysql_select_db('bookphp', $dbc);
            
            if (isset($_GET['id']) && is_numeric($_GET['id'])) {
                // Define the query
                $query = "SELECT title, entry FROM entries WHERE entry_id={$_GET['id']}";
                if ($r = mysql_query($query, $dbc)) {
                    // Run the query
                    $row = mysql_fetch_array($r); // Retrieve the information
                    // Make the form
                    print '<form action="edit_entry.php" method="post">
                                <p>Entry title: <input type="text" name="title" size="40" maxsize="100" value="' . htmlentities($row['title']) . '"></p>
                                <p>Entry text: <textarea name="entry" id="" cols="40" rows="5">' . htmlentities($row['entry']) . '</textarea></p>
                                <input type="hidden" name="id" value="' . $_GET['id'] . '">
                                <input type="submit" name="submit" value="Update this entry">
                            </form>';
                } else {
                    // Could not get the information
                    print '<p style="color: red;">Could not retrieve the blog entry because: <br />' . mysql_error($dbc) . '.</p><p>The query being run was: ' . $query . '</p>';
                }
            } elseif (isset($_POST['id']) && is_numeric($_POST['id'])) {
                // Validate and secure the form data:
                $problem = FALSE;
                if (!empty($_POST['title']) && !empty($_POST['entry'])) {
                    $title = mysql_real_escape_string(trim(strip_tags($_POST['title'])), $dbc);
                    $entry = mysql_real_escape_string(trim(strip_tags($_POST['entry'])), $dbc);
                } else {
                    print '<p style="color: red;">Please submit both a title and an entry.</p>';
                    $problem = TRUE;
                }
                if (!$problem) {
                    // Define the query.
                    $query = "UPDATE entries SET title='$title',  entry='$entry' WHERE entry_id={$_POST['id']}";
                    $r = mysql_query($query, $dbc);
                    
                    // Report on the result:
                    if (mysql_affected_rows($dbc) == 1) {
                        print '<p>The blog entry has been updated.</p>';
                    } else {
                        print '<p style="color: red;">Could not update the tntry because: <br />' . mysql_error($dbc) . '.</p><p>The query being run was: ' . $query . '</p>';
                    }
                } // No problem!
            } else {
                print '<p style="color: red;">This page has been accessed in error.</p>';
            }
            mysql_close($dbc);
        ?>
    </body>
</html>