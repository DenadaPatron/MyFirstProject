/<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Test_Page</title>
</head>
<body>

<?php

for($i = 1; $i <=30; $i++):
    if($i%2==0){
        echo " On the " . $i .  " day, specs are available" . "<br/>\n";
    }
    elseif($i%3==0){
        echo "On the" . $i . " day, mugs are available" . "<br/> \n";
    }
    elseif($i%4==0){
        echo "On the" . $i . " day, Sausage rolls are available" . "<br/> \n";
    }
    elseif($i%2==0 && $i%3==0) {
        echo "On the" . $i . " day, specs and mugs are available" . "<br/> \n";
    }
    elseif($i%2==0 && $i%4==0){
        echo "On the" . $i . " day, specs and sausage rolls are available" . "<br/> \n";
    }










endfor;



?>


</body>
</html>