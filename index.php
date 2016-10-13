/<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Test_Page</title>
</head>
<body>

<?php

for ($i = 1; $i < 31; $i++):
     if($i % 2 == 0){
         echo "On the" . $i . "day of the month specs are available";
}
     elseif($i % 3 == 0 ){
        echo "On the" . $i . "day of the month mugs are available";
 }
    elseif($i % 4 == 0){
        echo "On the" . $i . "day of the month sausages are available";
    }









endfor;



?>


</body>
</html>