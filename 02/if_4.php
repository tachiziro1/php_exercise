<?php 

$score_math = 300;
$score_english = 600;

if ($score_math >= 60 && $score_english >= 60) {
    echo '合格です';
}elseif ($score_math >= 60 && $score_english >=30) {
    echo '再試験';
}elseif ($score_math >= 30 && $score_english >= 60) {
    echo '再試験';
}else {
    echo '不合格';
}


?>