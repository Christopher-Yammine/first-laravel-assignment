<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class tasks extends Controller
{
    public function checkPalindrome (){
            
            $arr=["anna","jreich"];
        for ($i=0; $i<count($arr);$i++)
        {   
            $arrofchar=array();
            $arrofchar=str_split($arr[$i]);
            $len=count($arrofchar);
            $reversearr = array();
            for ($j=$len-1;$j>=0;$j--){
                $reversearr[].=$arrofchar[$j];
            }
            
           
            if (implode("",$arrofchar) == implode("",$reversearr)) {
                echo $arrofchar." is a palindrome <br>";
            } else {
                echo $arrofchar." is not a palindrome <br>";
            }
        }
    }
   
    public function randomGroups(){
      $arr=["a","v","f","g","1123"];
      shuffle($arr);
      $result=[];
      for ($i=0;$i<sizeof($arr);$i+=2){
          if($i+1<sizeof($arr)){
            array_push($result,[$arr[$i],$arr[$i+1]]);   
          } else {
              array_push($result,[$arr[$i]]);
          }
          
      }
      print_r($result);
    }

    public function randomize(){

        $arr=array();
        array_push($arr,"chris","pablo","yammine","clarita");
        
        $newarr=array_push($arr,"pablo");
        $randval=rand(0,count($arr)-1);
        $random='';
        $random.=$arr[$randval];
        echo "$random";
    
    }
    public function timeDiff(){
        $mydate=getdate(date("U"));
        
        $oldday=14;
        $oldmonth=4;
        $oldyear=1732;
        
        $daydiff=abs($oldday-$mydate["mday"]);
        $monthdiff=abs($oldmonth-$mydate["mon"]);
        $yeardiff=$mydate["year"]-$oldyear;
        
        $timeinsec=$daydiff*86400 + $monthdiff*86400*30 + $yeardiff*86400*30*12;
        echo "$timeinsec";
        }
    public function onlyText(){
        $msg='{"attachments":[{"fallback":"How much does a hipster weigh? An instagram.","footer":"<https://icanhazdadjoke.com/j/GlGBIY0wAAd|permalink> - <https://icanhazdadjoke.com|icanhazdadjoke.com>","text":"How much does a hipster weigh? An instagram."}],"response_type":"in_channel","username":"icanhazdadjoke"}';
        $message=json_decode($msg,1);
        print_r($message["attachments"][0]["text"]);
    }
    public function beer(){
        $url = "https://api.punkapi.com/v2/beers";

        $curl = curl_init($url);
        curl_setopt($curl, CURLOPT_URL, $url);
        curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
        
        //for debug only!
        curl_setopt($curl, CURLOPT_SSL_VERIFYHOST, false);
        curl_setopt($curl, CURLOPT_SSL_VERIFYPEER, false);
        
        $resp = curl_exec($curl);
        curl_close($curl);
        // var_dump($resp);
        $beers = json_decode($resp, true);
        //var_dump($beers);
        $chi=array_column($beers,"id");
        $element=array_rand($chi,1);
        print_r($beers[$element]["description"]);
        
        
        }
}