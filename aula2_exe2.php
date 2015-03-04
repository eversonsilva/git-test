<?php
$num = 5;
$cont = 0;

for ($i = 1; $i <= $num; $i++) {
    if ($num % $i == 0) {
        $cont = $cont + 1;
    }
}
if ($cont == 2) {
    echo"<b>Este número é primo</b>";
} else {
    echo"<b>Não é primo</b>";
}
?>