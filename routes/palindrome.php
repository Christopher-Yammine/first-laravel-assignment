<?php

function checkPalindrome ($arr){
    for ($i=0; $i<count($arr);$i++)
    {   
        $arrofchar=array();
        $arrofchar=str_split($arr[i]);
        $len=count($arrofchar);
        $reversearr = array();
        for ($j=$len-1;$j>0;$j--){
            $reversearr[].=$arrofchar[$j];
        }
        if ($arrofchar == $reversearr) {
            echo "$arr is a palindrome";
        } else {
            echo "$arr is not a palindrome";
        }
    }
}
?>