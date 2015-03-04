<?php
$n = 15;
$ant = 0;
$result = 1;
$aux = 0;

if ($n == 1) {
    $result = 0;
    echo $result;
} else {
    for ($cont = 1; $cont < $n; $cont++) {
        echo $ant;
        $aux = $ant + $result;
        $ant = $result;
        $result = $aux;
    }
}
echo $ant;

?>
