<?php
[$line, $column] = explode(" ", trim(fgets(STDIN)));

//爆弾がある行数 * 全体の列数
// + 爆弾がある列数* (全体の行数 - 爆弾がある行数)

//各行の処理
$includeBombLine = 0;

for ($i = 0; $i < $line; $i++) {
    $eachLine[] = str_split(trim(fgets(STDIN)));

    if (in_array('#', $eachLine[$i])) {
        $includeBombLine++;
        //$includeBombLine = 爆弾がある行数
    }
}

//各列の処理
$includeBombColumn = 0;

for ($i = 0; $i < $column; $i++) {
    $eachColumn[] = array_column($eachLine, $i);

    if (in_array('#', $eachColumn[$i])) {
        $includeBombColumn++;
        //$includeBombColumn = 爆弾がある列数
    }
}

$answer = $includeBombLine * $column + $includeBombColumn * ($line - $includeBombLine);

echo $answer;
