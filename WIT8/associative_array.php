<!DOCTYPE html>
<html>
    <head>
        <title>PHP</title>
    </head>
    <body>
        <center>
            <h1>Associative Array in PHP</h1>
            <p style='width: 70%'>
                Associative arrays are used to store key value pairs. For example, to store the marks of different subject of a student in an array, a numerically indexed array would not be the best choice. Instead, we could use the respective subject’s names as the keys in our associative array, and the value would be their respective marks gained.
            </p>
            <?php
                $marks = array("WIT" => 100, "DAA" => 95, "MATHS" => 92, "OB" => 90, "OS" => 94);
                print_r($marks);
            ?>
        </center>
    </body>
</html>