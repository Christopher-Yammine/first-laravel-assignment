<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class tasks extends Controller
{
    public function checkPalindrome ($arr){
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

    public function randomGroups($arr){
        $len=count($arr);
        $random1=rand(0,$len);
        $random2=rand(0,$len-1);
        
        $newarr=array();
        for ($i=0;$i<ceil($len/2);$i++){
            $random1=rand(0,$len);
            $random2=rand(0,$len-1);
            $newarr[$i]=array_splice($arr,$random1,1);
            $newarr[$i].=array_splice($arr,$random2,1);
            $len=$len-2;
        }
        echo "$newarr";
        
    }

    public function randomize($arr){
        $randval=rand(0,count($arr));
        $newarr=array_push($arr,"pablo");
        echo $newarr[$randval];
    
    }
    public function timeDiff(){
        $mydate=getdate(date("U"));
        
        $oldday=14;
        $oldmonth=4;
        $oldyear=1732;
        
        $daydiff=abs($oldday-$mydate[mday]);
        $monthdiff=abs($oldmonth-$myday[mon]);
        $yeardiff=$mydate[year]-$oldyear;
        
        $timeinsec=$daydiff*86400 + $monthdiff*86400*30 + $yeardiff*86400*30*12;
        echo "$timeinsec";
        }
}
