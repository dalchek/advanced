<!doctype html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <title>Registration form</title>
    </head>
    <body>
        <div>
            <p>Please complete this form to register</p>
            <form action="handle_reg.php" method="post">
                <p>Email address: <input type="text" name="email" size="30"></p>
                <p>Password: <input type="password" name="password" size="30"></p>
                <p>Confirm password: <input type="password" name="confirm" size="30"></p>
                <p>Date Of Birth:
                    <select name="month" id="">
                        <option value="">Month</option>
                        <option value="1">January</option>
                        <option value="2">February</option>
                        <option value="3">Mart</option>
                        <option value="4">April</option>
                        <option value="5">May</option>
                        <option value="6">June</option>
                        <option value="7">July</option>
                        <option value="8">August</option>
                        <option value="9">September</option>
                        <option value="10">October</option>
                        <option value="11">November</option>
                        <option value="12">December</option>
                    </select>
                    <select name="Day" id="">
                        <option value="">Day</option>
                        <?php 
                            for ($i = 1; $i <= 31; $i++) {
                                print"<option value=\"$i\">$i</option>\n";
                            }
                        ?>
                    </select>
                     <input type="text" name="year" placeholder="YYYY" size="4">
                </p>
                <p>Favorite color: 
                    <select name="color" id="">
                        <option value="">Pick one</option>
                        <option value="green">Green</option>
                        <option value="red">Red</option>
                        <option value="blue">Blue</option>
                        <option value="yellow">Yellow</option>
                    </select>
                </p>
                <p><input type="checkbox" name="terms" value="Yes">I agree to the terms (whatever they may be).</p>
                <p><input type="submit" name="submit" value="register"></p>
            </form>
        </div>
    </body>
</html>