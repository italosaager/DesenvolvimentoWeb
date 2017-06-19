<?php
require_once ('config.php');
require_once ('compararfunc.php');


$a = $_POST['carro1'];
$b = $_POST['carro2'];






$dbh= new mysqli(server, user, pass, database);
if ($dbh->connect_errno) {
    echo "<p>MySQL error no {$dbh->connect_errno} : {$dbh->connect_error}</p>";
    exit();
}



if($a === "Selecione")
{
$nome = "Nenhum Carro Selecionado";
}else{
 $sql = "SELECT * FROM `tb_carros` WHERE nme_carro = \"".$a."\"";
        $produtos = $dbh->query($sql);
        foreach ($produtos as $produto) {

$nome = $produto['nme_carro'];
$potencia = $produto['pot_carro'];
$preco = $produto['pre_carro'];
$portas = $produto['npor_carro'];
$tanque = $produto['tmt_carro'];
$consumo = $produto['con_carro'];
$malas = $produto['pmal_carro'];
$combustivel = $produto['comb_carro'];
$direcao = $produto['dir_carro'];
$cambio = $produto['camb_carro'];
$torque = $produto['tor_carro'];
}}


if($b === "Selecione")
{
$nome1 = "Nenhum Carro Selecionado";
}else{
$sql1 = "SELECT * FROM `tb_carros` WHERE nme_carro = \"".$b."\"";
$produtos1 = $dbh->query($sql1);
        foreach ($produtos1 as $produto1) {

$nome1 = $produto1['nme_carro'];
$potencia1 = $produto1['pot_carro'];
$preco1 = $produto1['pre_carro'];
$portas1 = $produto1['npor_carro'];
$tanque1 = $produto1['tmt_carro'];
$consumo1 = $produto1['con_carro'];
$malas1 = $produto1['pmal_carro'];
$combustivel1 = $produto1['comb_carro'];
$direcao1 = $produto1['dir_carro'];
$cambio1 = $produto1['camb_carro'];
$torque1 = $produto1['tor_carro'];
}
}

if($potencia > $potencia1){
$potenciacor = green;
$potenciasimbolo = "&#10004";
$potenciacor1 = red;
$potenciasimbolo1 = "&#10008";
}
if($potencia == $potencia1){
$potenciacor = gray;
$potenciasimbolo = "&#9679";
$potenciacor1 = gray;
$potenciasimbolo1 = "&#9679";
}
if($potencia < $potencia1){
$potenciacor = red;
$potenciasimbolo = "&#10008";
$potenciacor1 = green;
$potenciasimbolo1 = "&#10004";
}

if($portas > $portas1){
$portascor = green;
$portassimbolo = "&#10004";
$portascor1 = red;
$portassimbolo1 = "&#10008";
}
if($portas == $portas1){
$portascor = gray;
$portassimbolo = "&#9679";
$portascor1 = gray;
$portassimbolo1 = "&#9679";
}
if($portas < $portas1){
$portascor = red;
$portassimbolo = "&#10008";
$portascor1 = green;
$portassimbolo1 = "&#10004";
}

if($preco < $preco1){
$precocor = green;
$precosimbolo = "&#10004";
$precocor1 = red;
$precosimbolo1 = "&#10008";
}
if($preco == $preco1){
$precocor = gray;
$precosimbolo = "&#9679";
$precocor1 = gray;
$precosimbolo1 = "&#9679";
}
if($preco > $preco1){
$precocor = red;
$precosimbolo = "&#10008";
$precocor1 = green;
$precosimbolo1 = "&#10004";
}

if($tanque > $tanque1){
$tanquecor = green;
$tanquesimbolo = "&#10004";
$tanquecor1 = red;
$tanquesimbolo1 = "&#10008";
}
if($tanque == $tanque1){
$tanquecor = gray;
$tanquesimbolo = "&#9679";
$tanquecor1 = gray;
$tanquesimbolo1 = "&#9679";
}
if($tanque < $tanque1){
$tanquecor = red;
$tanquesimbolo = "&#10008";
$tanquecor1 = green;
$tanquesimbolo1 = "&#10004";
}

if($consumo > $consumo1){
$consumocor = green;
$consumosimbolo = "&#10004";
$consumocor1 = red;
$consumosimbolo1 = "&#10008";
}
if($consumo == $consumo1){
$consumocor = gray;
$consumosimbolo = "&#9679";
$consumocor1 = gray;
$consumosimbolo1 = "&#9679";
}
if($consumo < $consumo1){
$consumocor = red;
$consumosimbolo = "&#10008";
$consumocor1 = green;
$consumosimbolo1 = "&#10004";
}

if($malas > $malas1){
$malascor = green;
$malassimbolo = "&#10004";
$malascor1 = red;
$malassimbolo1 = "&#10008";
}
if($malas == $malas1){
$malascor = gray;
$malassimbolo = "&#9679";
$malascor1 = gray;
$malassimbolo1 = "&#9679";
}
if($malas < $malas1){
$malascor = red;
$malassimbolo = "&#10008";
$malascor1 = green;
$malassimbolo1 = "&#10004";
}



if($combustivel === "Flex" && $combustivel1 === "Gasolina"){
$combustivelcor = green;
$combustivelsimbolo = "&#10004";
$combustivelcor1 = red;
$combustivelsimbolo1 = "&#10008";
}
if($combustivel === $combustivel1){
$combustivelcor = gray;
$combustivelsimbolo = "&#9679";
$combustivelcor1 = gray;
$combustivelsimbolo1 = "&#9679";
}
if($combustivel1 === "Flex" && $combustivel === "Gasolina"){
$combustivelcor = red;
$combustivelsimbolo = "&#10008";
$combustivelcor1 = green;
$combustivelsimbolo1 = "&#10004";
}



if($direcao === "Eletrica" && $direcao1 === "Hidraulica"){
$direcaocor = green;
$direcaosimbolo = "&#10004";
$direcaocor1 = red;
$direcaosimbolo1 = "&#10008";
}
if($direcao=== $direcao1){
$direcaocor = gray;
$direcaosimbolo = "&#9679";
$direcaocor1 = gray;
$direcaosimbolo1 = "&#9679";
}
if($direcao1 === "Eletrica" && $direcao === "Hidraulica"){
$direcaocor = red;
$direcaosimbolo = "&#10008";
$direcaocor1 = green;
$direcaosimbolo1 = "&#10004";
}

if($cambio === "Automatico" && $cambio1 === "Manual"){
$cambiocor = green;
$cambiosimbolo = "&#10004";
$cambiocor1 = red;
$cambiosimbolo1 = "&#10008";
}
if($cambio === $cambio1){
$cambiocor = gray;
$cambiosimbolo = "&#9679";
$cambiocor1 = gray;
$cambiosimbolo1 = "&#9679";
}
if($cambio1 === "Automatico" && $cambio === "Manual"){
$cambiocor = red;
$cambiosimbolo = "&#10008";
$cambiocor1 = green;
$cambiosimbolo1 = "&#10004";
}


if($torque > $torque1){
$torquecor = green;
$torquesimbolo = "&#10004";
$torquecor1 = red;
$torquesimbolo1 = "&#10008";
}
if($torque == $torque1){
$torquecor = gray;
$torquesimbolo = "&#9679";
$torquecor1 = gray;
$torquesimbolo1 = "&#9679";
}
if($torque < $torque1){
$torquecor = red;
$torquesimbolo = "&#10008";
$torquecor1 = green;
$torquesimbolo1 = "&#10004";
}

if($a === "Selecione" )
{
$potenciacor1 = gray;
$potenciasimbolo1 = "&#9679";
$precocor1 = gray;
$precosimbolo1 = "&#9679";
$tanquecor1 = gray;
$tanquesimbolo1 = "&#9679";
$portascor1 = gray;
$portassimbolo1 = "&#9679";
$consumocor1 = gray;
$consumosimbolo1 = "&#9679";
$malascor1 = gray;
$malassimbolo1 = "&#9679";
$combustivelcor1 = gray;
$combustivelsimbolo1 = "&#9679";
$direcaocor1 = gray;
$direcaosimbolo1 = "&#9679";
$cambiocor1 = gray;
$cambiosimbolo1 = "&#9679";
$torquecor1 = gray;
$torquesimbolo1 = "&#9679";

}

if($b === "Selecione" )
{
$potenciacor = gray;
$potenciasimbolo = "&#9679";
$precocor = gray;
$precosimbolo = "&#9679";
$tanquecor = gray;
$tanquesimbolo = "&#9679";
$portascor = gray;
$portassimbolo = "&#9679";
$consumocor = gray;
$consumosimbolo = "&#9679";
$malascor = gray;
$malassimbolo = "&#9679";
$combustivelcor = gray;
$combustivelsimbolo = "&#9679";
$direcaocor = gray;
$direcaosimbolo = "&#9679";
$cambiocor = gray;
$cambiosimbolo = "&#9679";
$torquecor = gray;
$torquesimbolo = "&#9679";

}


?>

<!DOCTYPE html>

<head>

<link rel="stylesheet" href="comparar.css">

</head>

<body>

<nav id="navigationBar">

  <ul>

    <li><a href="index.php" title="Home">Home</a></li>
    <li><a href="catalogo.html" title="Cat&aacute;logo">Cat&aacute;logo</a></li>
    <li><a href="sobre.html"Sobre">Sobre</a></li>   
  </ul>

</nav>



<h1 align="center";>Resultado da Compara&ccedil;&atilde;o</h1>
<table border="0" align="center";>

<td >
<fieldset style="box-shadow:0px 1px 10px 10px lightgrey;">
<legend>

<b style="font-size: 30px;">
<?php
echo $nome;
?>
</b>

</legend>

<table align="left">

<tr><td>
<table align="left"><tr><td><div class="container"> 
<img src="
<?php  echo "carrosmesmotamanho/" . $nome . ".jpg" ?>
">

</div></td></tr>
</table>
</td></tr>


<tr><td>
<table width="80%"; align="left";>

<?php

        foreach ($produtos as $produto) {
            echo "<tr>". "<td>" . "Pot&ecirc;ncia: " .$potencia . " cv" . "</td>".  "<td style=" . "color:" . $potenciacor . ">" . $potenciasimbolo ."</td>" .  "</tr>".

"<tr>". "<td>" . "Pre&ccedil;o: " . "R$ " . $preco. "</td>".  "<td style=" . "color:" . $precocor . ">" . $precosimbolo ."</td>" .  "</tr>".

"<tr>". "<td>" . "N&uacute;mero de Portas: " .$portas . " Portas" . "</td>".  "<td style=" . "color:" . $portascor . ">" . $portassimbolo . "</td>" .  "</tr>".

"<tr>". "<td>" . "Tamanho do Tanque: " .$tanque . " Litros" . "</td>".  "<td style=" . "color:" . $tanquecor . ">" . $tanquesimbolo ."</td>" .  "</tr>".

"<tr>". "<td>" . "Consumo: " .$consumo . " Km/L" . "</td>".  "<td style=" . "color:" . $consumocor . ">" . $consumosimbolo ."</td>" .  "</tr>".

"<tr>". "<td>" . "Porta Malas: " .$malas . " Litros" . "</td>".  "<td style=" . "color:" . $malascor . ">" . $malassimbolo ."</td>" .  "</tr>".

"<tr>". "<td>" . "Combust&iacute;vel: " .$combustivel. "</td>".  "<td style=" . "color:" . $combustivelcor . ">" . $combustivelsimbolo ."</td>" .  "</tr>".

"<tr>". "<td>" . "Dire&ccedil;&atilde;o: " .$direcao. "</td>".  "<td style=" . "color:" . $direcaocor . ">" . $direcaosimbolo ."</td>" .  "</tr>".

"<tr>". "<td>" . "C&acirc;mbio: " .$cambio. "</td>".  "<td style=" . "color:" . $cambiocor . ">" . $cambiosimbolo ."</td>" .  "</tr>".

"<tr>". "<td>" . "Torque: " .$torque. " kgfm" .  "</td>".  "<td style=" . "color:" . $torquecor . ">" . $torquesimbolo ."</td>" .  "</tr>".

"<tr>";
        }



        ?>



</table>
</td></tr>


</table>
</fieldset>

</td><td>
<fieldset style="box-shadow:0px 1px 10px 10px lightgrey; ">


<legend><b style="font-size: 30px;">
<?php
echo $nome1;
?></b>
</legend>

<table align="center">

<tr><td>
<table align="right"><tr><td><div class="container"> 
<img src=" 
<?php  echo "carrosmesmotamanho/" . $nome1 . ".jpg" ?>
">

</div></td></tr></table></td></tr>

<tr><td>
<table  align="left";>


<?php
        
        foreach ($produtos1 as $produto1) {
            echo "<tr>". "<td>" . "Pot&ecirc;ncia: " .$potencia1 . " cv" . "</td>".  "<td style=" . "color:" . $potenciacor1 . ">" . $potenciasimbolo1 . "</td>" .  "</tr>".

"<tr>". "<td>" . "Pre&ccedil;o: " ."R$ " . $preco1. "</td>".  "<td style=" . "color:" . $precocor1 . ">" . $precosimbolo1 ."</td>" .  "</tr>".

"<tr>". "<td>" . "N&uacute;mero de Portas: " .$portas1. " Portas" .  "</td>".  "<td style=" . "color:" . $portascor1 . ">" . $portassimbolo1 . "</td>" .  "</tr>".

"<tr>". "<td>" . "Tamanho do Tanque: " .$tanque1. " Litros" . "</td>".  "<td style=" . "color:" . $tanquecor1 . ">" . $tanquesimbolo1 ."</td>" .  "</tr>".

"<tr>". "<td>" . "Consumo: " .$consumo1. " Km/L" . "</td>".  "<td style=" . "color:" . $consumocor1 . ">" . $consumosimbolo1 ."</td>" .  "</tr>".

"<tr>". "<td>" . "Porta Malas: " .$malas1 . " Litros". "</td>".  "<td style=" . "color:" . $malascor1 . ">" . $malassimbolo1 ."</td>" .  "</tr>".

"<tr>". "<td>" . "Combust&iacute;vel: " .$combustivel1. "</td>".  "<td style=" . "color:" . $combustivelcor1 . ">" . $combustivelsimbolo1 ."</td>" .  "</tr>".

"<tr>". "<td>" . "Dire&ccedil;&atilde;o: " .$direcao1. "</td>".  "<td style=" . "color:" . $direcaocor1 . ">" . $direcaosimbolo1 ."</td>" .  "</tr>".

"<tr>". "<td>" . "C&acirc;mbio: " .$cambio1. "</td>".  "<td style=" . "color:" . $cambiocor1 . ">" . $cambiosimbolo1 ."</td>" .  "</tr>".

"<tr>". "<td>" . "Torque: " .$torque1. " kgfm" . "</td>".  "<td style=" . "color:" . $torquecor1 . ">" . $torquesimbolo1 ."</td>" .  "</tr>".


"<tr>";
        }
        ?>

</table>
</td></tr>
</table>
</fieldset>
</td>




<tr><td><a style="top: 80%; left: 180%" href="index.php" class="botao">Nova Compara&ccedil;&atilde;o</a>

</td></tr>
</table>



</body>

</html>