<?php 

$num = 13;

if ($num == 1 && $num % 3 != 0) {
    echo $num.'は素数です';
}elseif ($num == 1 && $num % 2 != 0) {
    echo $num.'は素数です';
}
else if ($num % 3 == 0 || $num % 2 == 0) {
    echo $num.'は素数ではありません';
}else{
    echo $num.'は素数です';
}

?>