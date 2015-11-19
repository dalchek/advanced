<!doctype html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <title>Delete a Blog Entry</title>
    </head>
    <body>
        <h1>Delete a entry</h1>
        <?php
            // Connect to a database
            $dbc = mysql_connect('localhost', 'bookPHP', 'bookPHP');
            mysql_select_db('bookphp', $dbc);
            
            if (isset($_GET['id']) && is_numeric($_GET['id'])) {
                // Define a query
                $query = "SELECT title, entry FROM entries WHERE entry_id={$_GET['id']}";
                if ($r = mysql_query($query, $dbc)) {
                    $row = mysql_fetch_array($r);
                    
                    // Make the form
                    print'<form action="delete_entry.php" method="post">
                        <p>Are you sure you want to delete this entry?</p>
                        <p>
                            <h3>' . $row['title'] . '</h3>' . 
                            $row['entry'] . '<br />
                            <input type="hidden" name="id" value="' . $_GET['id'] . '">
                            <input type="submit" name="submit" value="Delete This Entry">
                        </p>
                    </form>';
                } else {
                    print'<p style="color: red;">Could not retrieve the blog entry because: <br />' . mysql_error . '.</p><p>The query run was: ' . $query . '</p>';
                }
            } elseif (isset($_POST['id']) && is_numeric($_POST['id'])) {
                // Define the query
                $query = "DELETE FROM entries WHERE entry_id={$_POST['id']} LIMIT 1";
                $r = mysql_query($query, $dbc);
                
                //Report on the result
                if (mysql_affected_rows($dbc) == 1) {
                    print '<p>The blog entry has been deleted</p>';
                } else {
                    print'<p style="color: red;">Could ot delete the blog entry because: <br />' . mysql_error($dbc) . '</p>';
                }
            } else {
                print'<p style="color: red;">Thie page has been accessed in error.</p>';
            }
            mysql_error($dbc);  // Close the connection
        ?>
    </body>
</html>