<!doctype html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <title>Scope of variable</title>
    </head>
    <body>
        <?php 
            function add_one() {
                global $n;
                $n = $n+5;
                print 'Added one <br />';
            }
            $n = 3;
            print"\$n equals $n <br />";
            add_one($n);
            print "\$n equals $n <br />";
        ?>
    </body>
</html>