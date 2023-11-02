<?php
$userNumber = trim(fgets(STDIN));

for ($i = 0; $i < $userNumber; $i++) {
    //IDを取得
    $userID[] = trim(fgets(STDIN));
    //IDの数値部分だけを取得
    $splitIDNumber[] = preg_replace('|[^0-9]|', "", $userID[$i]);
}

//数値の順序と文字列を対応させる
array_multisort($splitIDNumber, $userID, SORT_NUMERIC);

foreach ($userID as $answer) {
    echo $answer . PHP_EOL;
}
