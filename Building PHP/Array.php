<?php

$aMonths = array("Jan","Feb","March","April","May");

echo " 3rd Month Is " . $aMonths[2 ],"<br/>";

$aReverse = array("Jan"=>1,"Feb"=>2,"Mar"=>3,"April"=>4,"May"=>5);

echo "Feb is The " . $aReverse["Feb"] . "Month" , "<br/>";

print_r($aMonths);

echo "<br/>";
    
print_r($aReverse);

echo "<br/>";

if (array_key_exists("May", $aReverse))
{
    echo "its May month", "<br/>";
}

Print_r(array_keys($aReverse));
echo "<br/>";
echo "<br/>";   

//Iteration
foreach($aMonths as $sMonth )
{
    echo $sMonth,"<br/>";
}