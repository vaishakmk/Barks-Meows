<?php

$myfunarr = array(  
    "January"   => "first",   "February" => "second",
    "March"     => "third",   "April"    => "fourth",
    "May"       => "fifth",   "June"     => "sixth",
    "July"      => "seventh", "August"   => "eighth",
    "September" => "ninth",   "October"  => "tenth",
    "November"  => "eleventh","December" => "twelfth"
    );      

foreach($myfunarr as $month=>$value ){
    echo "Name : $month \n Value: $value<br>";
}

?>

