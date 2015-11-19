<?php 

/* This page uses the MCrypt libraryy
 * to decrypt data stored in the session
 */

session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>A More Secure Session</title>
</head>
<body>
    <?php
    // Make sure the session data exists:
    if(isset($_SESSION['thing1'],$_SESSION['thing2'])) {
        
        // Create the key:
        $key = md5('77 public drop-shadow Java');
        
        // Open the cipher...
        // Using Rijndael 256 in CBC mode:
        $m = mcrypt_module_open('rijndael-256', '', 'cbc', '');
        
        // Decode the IV:
        $iv = base64_decode($_SESSION['thing2']);
        
        // Initialize the encryption:
        mcrypt_generic_init($m, $key, $iv);
        
        // Decript the data:
        $data = mdecrypt_generic($m, base64_decode($_SESSION['thing1']));
        
        // Close the encryption handler:
        mcrypt_generic_deinit($m);
        
        // Close the cipher:
        mcrypt_module_close($m);
        
        // Print the data:
        echo '<p>The session has been read. Its value is "' . trim($data) . '"</p>';
    } else { // No data
    echo '<p>there\'s nothing to see here.</p>';
    }
?>
</body>
</html>

