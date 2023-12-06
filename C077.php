<?php
[$numStudent, $numQuestion] = explode(" ", trim(fgets(STDIN)));

//それぞれの提出日が期限を過ぎているか判定し、点数を計算
for ($i = 0; $i < $numStudent; $i++) {
    [$submissionDate, $numCorrectAnswer] = explode(" ", trim(fgets(STDIN)));

    if ($submissionDate < 1) {
        $score = floor(100 / $numQuestion * $numCorrectAnswer);
    } elseif ($submissionDate < 10) {
        $score = floor((100 / $numQuestion * $numCorrectAnswer) / 100 * 80);
    } else {
        $score = 0;
    }

    //A~Dを判定
    if ($score >= 80) {
        echo 'A' . PHP_EOL;
    } elseif ($score >= 70) {
        echo 'B' . PHP_EOL;
    } elseif ($score >= 60) {
        echo 'C' . PHP_EOL;
    } else {
        echo 'D' . PHP_EOL;
    }
}
