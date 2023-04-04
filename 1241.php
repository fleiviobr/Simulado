<?php
// Encaixa ou Não II

$n = fgets(STDIN);

for ($i = 0; $i < $n; $i++) {
    $e = 1;
    $strings = readline();
    $string = explode(" ", $strings);
    $a = $string[0];
    $b = $string[1];

    $ta = strlen($a) - 1;
    $tb = strlen($b) - 1;
    $td = $ta - $tb;
    $k = 0;
    for ($j = $td; $j <= $ta; $j--) {
        if ($a[$j] === $b[$k]) {
            $e = 1;
        } else {
            $e = 0;
            break;
        }
        $k++;
        
    }

    if($e == 1) {
        echo "encaixa" . PHP_EOL;
    } else {
        echo "nao encaixa" . PHP_EOL;
    }
}
?>