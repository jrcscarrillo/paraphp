<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

function distancia($arr1, $arr2) {
    $dis = 0; 
    $arr3 = [];
    for ($i = 0; $i < count($arr1); $i++) {
        for ($j = 0; $j < count($arr2); $j++) {
            if ($arr1[$i] === $arr2[$j] or $arr1[$i] == NULL ) {
                $arr3[$dis] = $arr1[$i];
                $arr1[$i] = NULL;
                $arr2[$j] = NULL;
                $dis++;
                break;
            } 
        }
    }
    
    for ($j = 0; $j < count($arr2); $j++) {
        for ($i = 0; $i < count($arr1); $i++) {
            if ($arr1[$i] == NULL or $arr2[$j] == NULL) {
                
            } else {
            if ($arr2[$j] === $arr1[$i]) {
                $arr3[$dis] = $arr2[$j];
                $arr1[$i] = NULL;
                $arr2[$j] = NULL;
                $dis++;
                break;
                }
        }
        }
    }
    return $dis;
}
$str1 = "boat";
$str2 = "got";
$arr1 = str_split($str1);
$arr2 = str_split($str2);
//var_dump($arr3, $arr2, $arr1); 
$val = distancia($arr1, $arr2);
echo 'Resultado ' . ++$val;
        ?>
    </body>
</ht

ml>
