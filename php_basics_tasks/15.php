<?php
function calculator(int $a, int $b, string $operator){
    switch ($operator)
    {
        case '+':
            echo '$a'+'$b';
            break;
        case '-':
            echo '$a'-'$b';
            break;
        case '*':
            echo '$a'*'$b';
            break;
        case '/':
            if ($b != 0){
                echo '$a'/'$b';
            }
            echo 'dimension by 0';
            break;
        case '%':
            echo '$a'% '$b';
            break;
        default:
            echo 'Operatop not found';
            break;
    }
}
?>