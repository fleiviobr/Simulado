<?php
// Encaixa ou Não II

$n = readline();

for ($i = 0; $i < $n; $i++) {
    $strings = fgets(STDIN);
    $string = explode(" ", $strings);
    $a = $string[0];
    $b = $string[1];

    $ta = strlen($a) - 1;
    $tb = strlen($b) - 1;
    
    if ($ta >= $tb){
        $td = $ta - $tb;
        $k = 0;
        for ($j = $td; $j <= $ta; $j++) {
            if ($a[$j] == $b[$k]) {
                $e = 1;
            } else {
                $e = 0;
                break;
            }            
            $k++;
        }
    } else {
        $e = 0;
    }

    if($e == 1) {
        echo "encaixa" . PHP_EOL;
    } 
    else {
        echo "nao encaixa" . PHP_EOL;
    }
}
?>