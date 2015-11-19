<!doctype html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <title>Create a Table</title>
    </head>
    <body>
        <?php 
            // Connect and select
            if ($dbc = @mysql_connect('localhost', 'bookPHP', 'bookPHP')) {
                // handle the error if database could not be selected
                if(!@mysql_select_db('bookphp', $dbc)) {
                    print '<p style="color: red;">Could not select database because: <br />' . mysql_error() . '</p>';
                    mysql_close($dbc);
                    $dbc = FALSE;
                }
            } else {
                print '<p>Could not connect to MySql: <br />' . mysql_error() . '</p>';
            }
        if ($dbc) {
            //Define the query
            $query = 'CREATE TABLE entries (
                entry_id INT UNSIGNED NOT NULL AUTO_INCREMENT PRIMARY KEY, 
                title VARCHAR(100) NOT NULL,
                entry TEXT NOT NULL,
                date_entered DATETIME NOT NULL
                )';
            
            // Execute the query:
            if (@mysql_query($query, $dbc)) {
                print '<p>The table has been created!</p>';
            } else {
                print '<p style="color: red;">Could not create table because: <br />' . mysql_errno() .'</p>
                    <p>The query being run was: ' . $query . '</p>';
            }
            mysql_close($dbc);
        }
        
        
        ?>
    </body>
</html>