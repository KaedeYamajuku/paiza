<?php
//売上データの個数と売り上げの倍数を取得する
[$dataCount, $multiple] = explode(" ", trim(fgets(STDIN)));

for ($i = 0; $i < $dataCount; $i++) {
     //各年度の売り上げを取得する
     $eachYearSales = trim(fgets(STDIN));
     //各年度のグラフの横幅を求める
     $eachGraphCount[] = $eachYearSales / $multiple;
}

//グラフの横幅の最大値を求める
$graphCount = max($eachGraphCount);

foreach ($eachGraphCount as $index => $n){
    echo ($index + 1). ':';
    //記号を$eachGraphCountの値に沿って出力する
    for ($i = 0; $i < $n; $i++) {
         echo '*';
    }
    for ($i = 0; $i < $graphCount - $n; $i++) {
         echo '.';
    }
    echo PHP_EOL;
}