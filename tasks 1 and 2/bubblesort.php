<?php

$ary = [9,4,7,1,8,2];

$aryLength = count($ary);

for($j = 0; $j < $aryLength; $j++){
    if ($j+1 < $aryLength){
        if ($ary[$j] > $ary[$j+1]){
            $temp = $ary[$j];
            $ary[$j] = $ary[$j+1];
            $ary[$j+1] = $temp;
        }
    }

for($i = 0; $i < $aryLength; $i++){
    if ($i+1 < $aryLength){
        if ($ary[$i] > $ary[$i+1]){
            $temp = $ary[$i];
            $ary[$i] = $ary[$i+1];
            $ary[$i+1] = $temp;
        }
    }
}};
print_r($ary);