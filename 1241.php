<?php
// Encaixa ou nao II
    $n = intval(trim(fgets(STDIN)));
    
    while($n>0){
        $c=0;
        $entrada = explode(' ', trim(fgets(STDIN)));
        $one = strrev($entrada[0]);
        $two =  strrev($entrada[1]);
        $lenOne = strlen($one);
        $lenTwo = strlen($two);
    
            if($lenOne >= $lenTwo){
                for($i=0; $i<$lenOne; $i++){
                    if($one[$i] == $two[$i]){
                        $c++;
                    }else{
                        $i++;
                    }
                }
            }
            if($c == $lenTwo){
                echo "encaixa" . PHP_EOL;
            }else{
                echo "nao encaixa" . PHP_EOL;
            }
        $n--;
    }
    
?>