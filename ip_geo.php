<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>IP Geolocation</title>
        <link rel="stylesheet" href="style.css" />
</head>
<body>
    <?php
    // This page uses a web service to retrieve a user's geographic loaction
    
    // This function will perform the IP Geolocation request
    function show_ip_info($ip) {
        
        // Idenfify the URL to connect to:
        $url = 'http://freegeoip.net/csv/' . $ip;
        
        // Open the connection:
        $fp = fopen($url,'r');
        
        // Get the data:
        $read = fgetcsv($fp);
        
        // Close the file:
        fclose($fp);
        
        // Print whatever about the IP:
        echo "<p>IP Address: $ip <br />"
                . "Country: $read[2]<br />"
                . "City, State: $read[5], $read[3]<br />"
                . "Latitude: $read[7]<br />"
                . "Longitude: $read[8]</p>";
    } // End of show_ip_info() function
    
    // Get the client IP address:
    echo '<h2>Our spies tell us the following information about you</h2>';
    show_ip_info($_SERVER['REMOTE_ADDR']);
    show_ip_info(gethostbyname($url));
    ?>
</body>
</html>

