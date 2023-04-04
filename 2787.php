<?php
// Xadrez

$x = fgets(STDIN);
$y = fgets(STDIN);

if((($x + $y) % 2) != 0) {
    echo "0" . PHP_EOL;
}   else {
    echo "1" . PHP_EOL;
}
?>