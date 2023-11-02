<?php
//参加者の人数と歌う小節数を取得
[$singerNumber, $songLength] = explode(" ", trim(fgets(STDIN)));

//正しい音程を取得
for ($i = 0; $i < $songLength; $i++) {
    $correctHzData[] = trim(fgets(STDIN));
}

//それぞれの参加者の音程を取得
for ($i = 0; $i < $singerNumber; $i++) {
    $eacSingerHzData = [];
    for ($j = 0; $j < $songLength; $j++) {
        $eacSingerHzData[] = trim(fgets(STDIN));
    }

    $allSingerHzData[] = $eacSingerHzData;

    //正しい音程と比較
    $answer = [];
    foreach ($eacSingerHzData as $key => $val) {
        $answer[] = abs($correctHzData[$key] - $val);
    }

    //点数を算出
    $score = 100;
    for ($k = 0; $k < $songLength; $k++) {

        if ($answer[$k] >= 0 && $answer[$k] <= 5) {
            $score = $score;
        } elseif ($answer[$k] <= 10) {
            $score -= 1;
        } elseif ($answer[$k] <= 20) {
            $score -= 2;
        } elseif ($answer[$k] <= 30) {
            $score -= 3;
        } else {
            $score -= 5;
        }

        if ($score < 0) {
            $score = 0;
        }
    }
    $allScoreData[] = $score;
}

echo max($allScoreData);
