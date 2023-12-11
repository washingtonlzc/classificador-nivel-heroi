<?php

// Recebe o nome e a experiencia do heroi atraves do metodo post no php porém vou digitar no codigo mesmo.
//Recebe o nome do herói:
$nome = $_POST['nome'];
//Recebe a quantidade de experiência do herói:
$xp = $_POST['xp'];

// Converte a entrada para um número
$xp = intval($xp);

// Estrutura de decisão, determina o nível com base na quantidade de experiência
if ($xp < 1000) {
    $nivel = "Ferro";
} elseif ($xp >= 1001 && $xp <= 2000) {
    $nivel = "Bronze";
} elseif ($xp >= 2001 && $xp <= 5000) {
    $nivel = "Prata";
} elseif ($xp >= 5001 && $xp <= 7000) { 
    $nivel = "Ouro";
} elseif ($xp >= 7001 && $xp <= 8000) {
    $nivel = "Platina";
} elseif ($xp >= 8001 && $xp <= 9000) {
    $nivel = "Ascendente";
} elseif ($xp >= 9001 && $xp <= 10000) {
    $nivel = "Imortal";
} else {
    $nivel = "Radiante";
}

// Exibe a mensagem final
echo "O Herói de nome <b>".$nome."</b> está no nível de <b>".$nivel."\n";

?>
