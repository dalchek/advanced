<?php

/* This page uses the MCrypt library
 * to encrypt some data.
 * the data will then be stored in a session
 * as will the encryption IV
 */

// Start the session
session_start(); 
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>A more secure session</title>
</head>
<body>
    <?php // Encrypt and store the data
    
    // Create the key:
    $key = md5('77 public drop-shadow Java');
    
    // data to be encrypted:
    $data = 'rosebud';
    
    // open the cipher:
    // Using Rijndael 256 in CBC mode
    $m = mcrypt_module_open('rijndael-256','','cbc','');
    
    // Create the IV:
    // USe MCRYPT_RAND on windows instead of MCRYPT_DEV_RANDOM.
    $iv = mcrypt_create_iv(mcrypt_enc_get_iv_size($m),MCRYPT_RAND);
    
    // Initialize the encryption:
    mcrypt_generic_init($m, $key, $iv);
    
    // Encrypt the data:
    $data = mcrypt_generic($m,$data);
    
    // Close the encryyption handler:
    
    mcrypt_generic_deinit($m);
    
    // Close the cipher:
    mcrypt_module_close($m);
    
    // STore the data:
    $_SESSION['thing1'] = base64_encode($data);
    $_SESSION['thing2'] = base64_encode($iv);
    
    // Print the encrypted format of the data:
    echo '<p>The data has been stored. Its value is ' . base64_encode($data) . '.</p>';
    
?>
	
</body>
</html>



