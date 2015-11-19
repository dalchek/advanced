<!doctype html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <title>Cost Calculator</title>
    </head>
    <body>
        <?php
        
            // Define a tax rate:
            $tax = 8.75;
        
            // This function performe calculation
        
            function calculate_total ($quantity, $price) {
                global $tax;
                $total = $quantity * $price;
                $taxrate = ($tax/100) + 1;
                $total = $total * $taxrate;
                $total = number_format ($total, 2);
                
                return $total;          // return value of total
            }
            
            // check for a form submission:
            if (isset($_POST['submitted'])) {
                if (is_numeric($_POST['quantity']) AND is_numeric($_POST['price'])) {
                    $total = calculate_total($_POST['quantity'], $_POST['price']);
                    print "<p>Your total comes to $ <b>$total</b>, including the $tax percent tax rate</p>";
                } else {
                    print 'Please enter a valid quantity and price';
                }
            }
        ?>
        <form action="calculator.php" method="post">
            <p>Quantity: <input type="text" name="quantity" size="3"></p>
            <p>Price: <input type="text" name="price" size="5"></p>
            <input type="submit" name="submit" value="Calculate Price">
            <input type="hidden" name="submitted" value="true">
        </form>
    </body>
</html>