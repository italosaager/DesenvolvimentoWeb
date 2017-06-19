<?php

require_once ('config.php');
#include("config.php");

$dbh= new mysqli(server, user, pass, database);
if ($dbh->connect_errno) {
    echo "<p>MySQL error no {$dbh->connect_errno} : {$dbh->connect_error}</p>";
    exit();
}
?>

<head>
<link rel="stylesheet" href="index.css">
</head>
<body>
<nav id="navigationBar">
  <ul>
<li><a href="index.php" title="Home">Home</a></li>
<li><a href="catalogo.html"Cat&aacute;logo">Cat&aacute;logo</a></li>
<li><a href="sobre.html"Sobre">Sobre</a></li>
  </ul>
</nav>
<fieldset style="width: 98%; box-shadow:0px 1px 10px 10px lightgrey;">
<table align="center">
<tr><td></td><td><h1> <font FACE="Colonna MT" SIZE="15" color="darkblue">Compara&ccedil;&atilde;o de Carros</font> </h1></td><td></td></tr>
<tr><td><h1><font FACE="Colonna MT" SIZE="6.5" color="darkblue ">Carro 1</h1></td> <td></td> <td><h1><font FACE="Colonna MT" SIZE="6.5" color="darkblue">Carro 2</h1></td></tr>
<tr><td>
<div class="styled-select black star">
<form action="paginadecomparacao.php" method="post">
  <select name="carro1">
<option>Selecione</option>
<?php
$sql = "SELECT * FROM `tb_carros`";
        $produtos = $dbh->query($sql);
        foreach ($produtos as $produto) {
 
    echo "<option>" . $produto['nme_carro'] . "</option>"; 
}
?> 
</select>
</div></td>

<td></td>
<td><div class="styled-select black rounded">

  <select name="carro2">
<option>Selecione</option>
<?php
$sql = "SELECT * FROM `tb_carros`";
        $produtos = $dbh->query($sql);
        foreach ($produtos as $produto) {
 
    echo "<option>" . $produto['nme_carro'] . "</option>";
    
}
?> 

</select>
</div></td></tr>

<input type="submit" value="Comparar"> 

</body>
</html>