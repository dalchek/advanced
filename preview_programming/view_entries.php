<!doctype html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <title>View My BLog</title>
    </head>
    <body>
        <h1>My Blog</h1>
        <?php 
        $dbc = mysql_connect('localhost', 'bookPHP', 'bookPHP');
        mysql_select_db('bookphp', $dbc);
        // Define the query
        $query = 'SELECT * FROM entries ORDER BY date_entered DESC';
        if ($r = mysql_query($query, $dbc)) {
            // Retrive and print every record:
            while ($row = mysql_fetch_array($r)) {
                print "<p><h3>{$row['title']}</h3>
                    {$row['entry']} <br />
                    <a href=\"edit_entry.php?id={$row['entry_id']}\">Edit</a>
                    <a href=\"delete_entry.php?id={$row['entry_id']}\">Delete</a>
                </p><hr />\n";
            }
        } else {
            print'<p style="color: red;">Could not retrieve the data because: <br />' . mysql_error($dbc) . '.</p><p>The query being run was: ' . $query .'</p>';
        }
        
        mysql_close($dbc);
        
        ?>
    </body>
</html>