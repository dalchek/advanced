<!doctype html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <title>Multi dimensional array</title>
    </head>
    <body>
        <h1>Some of Larry Ulmans books</h1>
        <?php 
        
            // Create the first array:
            $phpvgs = array (1 => 'Getting Stardted with PHP', 'Variables', 'TML Forms and PHP', 'Using Numbers');
            
            // Create the second array:
            $phpadv = array (1 => 'Advanced PHP techniques', 'Developing Web Application', 'Advanced Database Concepts', 'Security Techniques');
            
            // Create the third array:
            $phpmysql = array (1 => 'Introduction to PHP', 'Programming with PHP', 'Creating Dynamic Wb Sites', 'Introduction to MySQL');
            
            // Create the multidemensional array:
            $books = array (
              'PHP VQS'             => $phpvgs,
              'PHP Advanced VQP'    => $phpadv,
              'PHP MySQL VQP'       => $phpmysql
            );
            
            // Print out some values
            print "<p>The third chapter of my first book is <i>{$books['PHP VQS'][3]}</i></p>";
            print "<p>The first chapter of my second book is <i>{$books['PHP Advanced VQP'][1]}</i></p>";
            print "<p>The fourth chapter of my forth book is <i>{$books['PHP MySQL VQP'][4]}</i></p>";
            
            // See what happen with foreach
            foreach ($books as $title => $chapters) {
                print "<p>$title</p>";
                foreach ($chapters as $number => $chapter) {
                    print "Chapter $number is $chapter <br /> ";
                }
                print"</p>";
            }
        ?>
    </body>
</html>