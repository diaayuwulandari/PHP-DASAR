<?php
//pengulangan
//for
//while
//do.. while
//froach : perulangan kusus array

//for( $i = 0; $i < 5; $i++ ) {
//   echo " Hello world";
//}
//$i = 0;
// while( $i <table 5 ) {
// echo "Hello world! <br>";
// $i++;
//}
// $i = 0;
//do{
// echo "Hello world! <br>";
// $i++;
//} while ( $i < 5);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>latihan</title>
</head>
<body>
    
<table border="1" cellpadding="10" cellspacing="0"> 
   <?php 
   for( $i = 1; $i <= 3; $i++ ) {
        echo "<tr>";
        for( $j = 1; sj <= 5; $j++ ) {
            echo "<td>$i,$j</td>";
        }
        echo "</tr>";
    }
    
   ?>

</table>

</body>
</html>