<!doctype html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <title>Login</title>
    </head>
    <body>
        <h1>Login</h1>
        <?php
            /* This script check a user
             * login bu checking the stored values
             * in text file
             */
        
             // Identify the file to use
        
             $file = './users/users.txt';
             if ($_SERVER['REQUEST_METHOD'] == 'POST') {
                 $loggedin = FALSE;
                 
                 // Enable auto detect line setting
                 ini_set('auto_detect_line_endings', 1);
                 
                 // Open the files
                 $fp = fopen($file, 'rb');
                 while ( $line = fgetcsv($fp, 200, "\t") ) {
                     // Check the file data against the submitted data:
                     if (($line[0] == $_POST['username']) AND ($line[1] == md5(trim($_POST['password'])))) {
                         $loggedin = TRUE;
                         // Stop looping through the file
                         break;
                     } // end of if
                 } // end of while
                 fclose($fp);
                 
                 // print a message
                 if ($loggedin) {
                     print '<p>You are now logged in.</p>';
                 } else {
                     print '<p style="color: red;">The user name and password you entered do not match those on file.</p>';
                 }
             } else { // Display the form
                 // Leave PHP and display the form
                ?>
            <form action="login.php" method="post">
                <p>Username: <input type="text" name="username" size="20"></p>
                <p>Password: <input type="password" name="password" size="20"></p>
                <input type="submit" name="submit" value="Login">
            </form>
        <?php } ?>
    </body>
</html>