<!doctype html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <title>Form</title>
    </head>
    <body>
        <div><p>Please complete this form to get feedback</p>
            <form action="handle_form.php" method="post">
                <p>Name:<select name="title">
                            <option value="Mr.">Mr.</option>
                            <option value="Mrs.">Mrs.</option>
                            <option value="Ms.">Ms.</option>
                        </select>
                    <input type="text" name="name" size="20" />
                </p>
                <p>Email address: <input type="text" name="email" size="20" /></p>

                <p>Response: This is...
                    <input type="radio" name="response" value="excelent" />Excelent
                    <input type="radio" name="response" value="okay" />Okay
                    <input type="radio" name="response" value="boring" />Boring
                </p>

                <p>Comments: <textarea name="comments" rows="3" cols="30"></textarea></p>
                <input type="submit" name="submit" value="send my feedback" />
            </form>
        </div>
    </body>
</html>