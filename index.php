/<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Test_Page</title>
</head>
<body>

<?php
$days = 0;
$specs = 0;
$mugs = 0;
$sausages = 0;



do{
    $todaysGood = rand(0,2);
    $days = $days + 1;


    if($todaysGood == 1){
        echo "On the ". $days ." day of month specs are available" . "<br/ \n>";
        $specs = $specs + 1;
    }

    elseif($todaysGood == 2){
        echo "On the " . $days . " day of month mugs are available" . "<br/ \n>";
        $mugs = $mugs + 1;
    }

    elseif($todaysGood = 0){
        echo "On the " .$days . " day of the month sausages are available" . "<br/ \n>";
        $sausages = $sausages + 1;
    }

    else{
        echo "No more goods available this month.";
    }
}
while(($days <= 30) && ($specs <7) && ($mugs < 7) && ($sausages <7))

















//$todaysGood = rand(0,2);

//The	previous	effort	to	only	have	specs,	mugs,	and	sausage	rolls	available	on	certain	days	failed.	There	were	too
//many	days	where	nothing	was	on	offer	to	the	good	people	of	Aberdeen!	It	has	been	decided	that	a	random
//good	will	be	offered	each	day	but	that	there	is	only	a	limited	stock	(7	items)	of	each	item	available.	Once	one
//good	runs	out,	all	supply	for	the	rest	of	the	month	is	cut.	Create	a	page	that	will	print	out	something	similar	to
//the	following:
//On the 1st of the month specs are available
//On the 2nd of the month mugs are available
//…
//On the 17th of the month sausage rolls are available
//No more goods are available this month
//On	the	4th of	the	month	specs	and	sausage	rolls	are	available


?>


</body>
</html>