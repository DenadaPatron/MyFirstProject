/<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Test_Page</title>
</head>
<body>

<?php

$wantedgood = "mugs";

switch($wantedgood):
    case "specs":
        echo "You have to be 16 to buy specs";
        break;
    case "mugs":
        echo "You have to be 18 to buy mugs";
        break;
    case "sausage_rolls":
        echo "You have to be 21 to buy sausage rolls";
        break;
    default:
        echo "I don't know this particular product";

endswitch;
?>


</body>
</html>