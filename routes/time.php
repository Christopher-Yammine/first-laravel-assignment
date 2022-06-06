
<?php
$mydate=getdate(date("U"));

$oldday=14;
$oldmonth=4;
$oldyear=1732;

$daydiff=abs($oldday-$mydate[mday]);
$monthdiff=abs($oldmonth-$myday[mon]);
$yeardiff=$mydate[year]-$oldyear;

$timeinsec=$daydiff*86400 + $monthdiff*86400*30 + $yeardiff*86400*30*12;
echo "$timeinsec";

?>