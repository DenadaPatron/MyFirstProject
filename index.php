/<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Test_Page</title>
</head>
<body>

<?php

for($i = 1; $i <=30; $i++):

    $ends = array('th','st','nd','rd','th','th','th','th','th','th');
    if (($i %100) >= 11 && ($i%100) <= 13)
        $a = $i. 'th';
    else
        $a = $i. $ends[$i % 10];



    if($i%2==0 && $i%3==0 && $i%4==0){
        echo "On the " . $a .  " day, specs, mugs and sausage rolls are available" . "<br/> \n";
    }
    elseif($i%3==0 && $i%4==0){
        echo "On the " . $a . " day, mugs and sausage rolls are available" . "<br/ \n>";
    }
    elseif($i%2==0 && $i%4==0){
        echo "On the " . $a . " day, specs and sausage rolls are available" . "<br/> \n";
    }
    elseif($i%2==0 && $i%3==0) {
        echo "On the " . $a . " day, specs and mugs are available" . "<br/> \n";
    }
    elseif($i%2==0){
        echo " On the " . $a .  " day, specs are available" . "<br/>\n";
    }
    elseif($i%3==0){
        echo "On the " . $a . " day, mugs are available" . "<br/> \n";
    }
    elseif($i%4==0){
        echo "On the " . $a. " day, Sausage rolls are available" . "<br/> \n";
    }
    else{
        echo "On the " . $a. " day, nothing is available" . "<br/> \n";
    }
endfor;



?>


</body>
</html>