<?php
//交通費、宿泊費、インターンの回数を取得
[$trainExpenses, $accommodationFee, $internTimes] = explode(" ", trim(fgets(STDIN)));

//総額をカウントする変数を用意する
$amountCosts = 0;
//最初と最後の行き帰りの分の交通費を足す
$amountCosts += $trainExpenses * 2;

for ($i = 0; $i < $internTimes; $i++) {
    //インターンの日数を取得する
    $date[] = explode(" ", trim(fgets(STDIN)));
}

for ($i = 0; $i < $internTimes - 1; $i++) {
    //インターンの合間の日数を求める
    $betweenInternTerms = $date[$i + 1][0] - $date[$i][1];

    //合間の日数の宿泊費と往復の交通費を比較する
    if ($accommodationFee * $betweenInternTerms > $trainExpenses * 2) {
        $amountCosts += $trainExpenses * 2;
    } else {
        $amountCosts += $accommodationFee * $betweenInternTerms;
    }
}

echo $amountCosts;
