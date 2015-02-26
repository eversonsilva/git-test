<?php

$P1 = 8;
$M1 = 7.5;
$M2 = 8;
$Proj1 = 9; 
$Proj2 = 6;
$Proj3 = 4;
$Proj4 = 7;
$TrabF = 8.5;
$Proc = 7;
$PF = 6;

$MI = (30*$P1 + 10*$M1 + 10*$M2 + 5*$Proj1 + 5*$Proj2 + 5*$Proj3 + 5*$Proj4 + 10*$TrabF + 20*$Proc)/100;

if ($MI >= 7.5){
    $MF = $MI;
    echo 'Aprovado sem Prova Final';
    echo 'Parabéns!!! Boas férias';
} 
else {
    $MF = ($MI + $PF)/2;

if ($MF >= 5.0){
    echo 'Aprovado com Prova Final';
    echo 'Agora pode descansar tranquilo';
}

else {
    echo 'Reprovado';
    echo 'Não foi dessa vez. Ano que vem tem mais TWII';
    echo 'Media Intermediária: '+MI;
    echo 'Media Final: '+MF;
}}
?>
