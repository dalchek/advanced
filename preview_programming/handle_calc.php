<!doctype html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <title>Product cost calculator</title>
        <style>
            .number { font-weight: bold; }
        </style>
    </head>
    <body>
        <?php 
            $price = $_POST['price'];
            $quantity = $_POST['quantity'];
            $discount = $_POST['discount'];
            $tax = $_POST['tax'];
            $shipping = $_POST['shipping'];
            $payments = $_POST['payments'];
            
            // Calculate the total:
            $total = (($price * $quantity) + $shipping) - $discount;
            
            // Determine the tax rate:
            $taxrate = $tax/100;
            $taxrate++;
            
            // Factor in the tax rate:
            $total = $total * $taxrate;
            
            // Calculate the monthly payments: 
            $monthly = $total / $payments;
            
            $total = number_format($total, 2);
            $monthly = number_format($monthly, 2);
            
            // Print results:
            print "<p>You have sekected to purchase: <br />
                        <span class=\"number\">$quantity</span> widget(s) at <br />
                        $<span class=\"number\">$price</span> price each plus a $<span class=\"number\">$tax</span> percent tax rate. <br />
                            
                            After your $<span class=\"number\">$discount</span> discount, the total cost is $<span class=\"number\">$total</span>.<br />
                            Divided over <span class=\"number\">$payments</span> monthly payments, that would be $ <span class=\"number\">$monthly</span> each.
                   </p>"
        ?>
    </body>
</html>