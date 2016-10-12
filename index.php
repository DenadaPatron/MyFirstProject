/<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Test_Page</title>
</head>
<body>

<?php

$provisionedActivities = array("Specs", "Drugs", "Rock and Roll");

$provisionedActivities[1] = "Hugs"; //changes drugs with hugs

unset($provisionedActivities[2]); // deletes rock and roll

foreach($provisionedActivities as $x):
        print "<p>$x</p>";      //provides all the possible options
endforeach;


?>


</body>
</html>