<?php 

function randomize($arr){
    $randval=rand(0,count($arr));
    $newarr=array_push($arr,"pablo");
    echo $newarr[$randval];

}
?>