<!doctype html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <title>handel form</title>
    </head>
    <body>
        <?php
            ini_set('display_errors', 1);
            error_reporting(E_ALL | E_STRICT);
            $title = $_POST['title'];
            $name = $_POST['name'];
            $response = $_POST['response'];
            $comments = stripslashes($_POST['comments']);
        
            print"<p>Thank you $title $name for your comment.</p>
                <p>You stardted that you found this example to be '<b>$response</b>' and added: <br />$comments</p>";
        ?>
        
    </body>
</html>