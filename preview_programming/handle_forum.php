<!doctype html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <title>Forum posting</title>
    </head>
    <body>
        <?php 
            // Get value from the $_POST array:
            $first_name = trim($_POST['first_name']);
            $last_name = trim($_POST['last_name']);
            $posting = trim(nl2br( $_POST['posting']));
            
            // Create a full name variable
            $name = $first_name . ' ' . $last_name;
            
            // Get a word count:
            $words = str_word_count($posting);
            
            // Get a snippet of the posting:
            $short_version = substr($posting, 0, 10);
            
            // Bad words which are not allow
            $posting = str_ireplace('fuck', '****', $posting);
            $posting = str_ireplace('shit', '****', $posting);
            $posting = str_ireplace('pussy', '****', $posting);
            // Print message
            print"<div>Thank you, $name, for your posting:
                    <p>$posting</p>
                        <p>Your post has $words words.
                            <br /> Here is only first 10 letters from the post.
                            <br /><b>$short_version</b>... Tnx.</p>
                  </div>";
            
            // Make a link to another page
            $name = urlencode($name);
            $email = urlencode($_POST['email']);
            print"<p>Click  <a href=\"thanks.php?name=$name&email=$email\">here</a> to continue</p>"
        ?>
    </body>
</html>