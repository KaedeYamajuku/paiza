<?php
[$column, $line] = explode(' ', trim(fgets(STDIN)));

[$a1, $a2] = explode(' ', trim(fgets(STDIN)));
[$b1, $b2] = explode(' ', trim(fgets(STDIN)));

//等差数列の公差を求める
$commonDiffLine1 = $b1 - $a1; //1列目の公差
$commonDiffColumn1 = $a2 - $a1; //1行目の公差
$deffBetweenCommonDiffColumn = ($b2 - $b1) - ($a2 - $a1); //各行の公差の差

//1列目の数列を作る
for ($i = 0; $i < $column; $i++) {
    $line1[] = $a1 + $commonDiffLine1 * $i;
}

//１列目の各項に公差を足して各行を作る
for ($i = 0; $i < $column; $i++) {
    $columns = [];
    for ($j = 0; $j < $line; $j++) {
        $columns[] = $line1[$i] + $commonDiffColumn1 * $j;
    }
    $commonDiffColumn1 += $deffBetweenCommonDiffColumn;
    $answer[] = $columns;
}

//出力
for ($i = 0; $i < $column; $i++) {
    for ($j = 0; $j < $line; $j++) {
        echo $answer[$i][$j];

        //空白の調整
        if ($j === $line - 1) {
            break;
        }
        echo ' ';
    }
    echo PHP_EOL;
}
