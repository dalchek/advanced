<!doctype html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <title>Connect to mySql</title>
    </head>
    <body>
        <?php
            /* This script connect to
             * MySQL server
             */
        
             if ($dbc = @mysql_connect('localhost', 'bookPHP', 'bookPHP')) {
                 print '<p>Succesifully connected to MySQL.</p>';
                 
                 // try to create database
                 if (@mysql_query('CREATE DATABASE bookPHP', $dbc)) {
                     print '<p>The database has been created</p>';
                 } else {
                     print '<p>Could not create database because: <br />' . mysql_error($dbc) . '</p>';
                 }
                 
                 // Try to select database
                 if (@mysql_select_db('bookPHP', $dbc)) {
                     print '<p>The database has been selected</p>';
                 } else {
                     print '<p>Couled not select database because: <br />' . mysql_error($dbc) . '</p>';
                 }
                 mysql_close($dbc);
             } else {
                 print '<p style="color: red;">Could not connect to MySql: <br />' . mysql_error() . '.</p>';
             }
        ?>
    </body>
</html>