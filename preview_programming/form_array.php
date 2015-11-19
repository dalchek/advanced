<!doctype html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <title>Add an Event</title>
    </head>
    <body>
        <div>
            <p>Use this form to add an event</p>
            <form action="event.php" method="post">
                <p>Event Name: <input type="text" name="name" size="30"></p>
                <p>Event days:
                    <input type="checkbox" name="days[]" value="Sunday">Sun
                    <input type="checkbox" name="days[]" value="Monday">Mon
                    <input type="checkbox" name="days[]" value="Tuesday">Tue
                    <input type="checkbox" name="days[]" value="Wednesday">Wed
                    <input type="checkbox" name="days[]" value="Thursday">Thu
                    <input type="checkbox" name="days[]" value="Friday">Fri
                    <input type="checkbox" name="days[]" value="Saturday">Sat
                    <input type="submit" name="submit" value="Add an event">
                </p>
            </form>
        </div>
    </body>
</html>