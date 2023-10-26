<?php
//料理数、人数を取得
[$mealNumber, $personNumber] = explode(" ", trim(fgets(STDIN)));

//各料理のカロリー を取得
for ($i = 0; $i < $mealNumber; $i++) {
     $eachMealKcal[] = trim(fgets(STDIN));
}

for ($i = 0; $i < $personNumber; $i++) {
    //就活生が 各料理を食べた量 を取得
     $eachPersonGram = explode(" ", trim(fgets(STDIN)));
     
     //各料理のカロリー × 食べた量 を足し、一人あたりの摂取カロリーを求める
     $result = array_map(function($v1, $v2) {
         return floor($v1 * $v2 / 100);
     }, $eachMealKcal, $eachPersonGram);
     
     echo array_sum($result).PHP_EOL;
}