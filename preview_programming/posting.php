<!doctype html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <title>Forum Posting</title>
    </head>
    <body>
        <div>
            <p>Please complete this form to submit your posting: </p>
            <form action="handle_forum.php" method="post">
                <p>First Name: <input type="text" name="first_name" size="20"></p>
                <p>Last Name: <input type="text" name="last_name" size="20"></p>
                <p>Email address: <input type="email" name="last_name" size="30"></p>
                <p>Posting: <textarea name="posting" rows="9" cols="30"></textarea></p>
                <input type="submit" name="submit" value="Send My Posting" />
            </form>
        </div>
    </body>
</html>