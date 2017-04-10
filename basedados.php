<?php


//credenciais de ligacao a bd

$servidor = "localhost";

$utilizador = "root";

$password = "";

$basedados = "livraria";

// ligacao com a base de dados  nos parametros anterioress

$ligacao = mysql_connect($servidor, $utilizador, $password) or die ('Erro de ligacao à base de dados');

mysql_select_db($basedados, $ligacao);

// consultar a bd


$consulta = "SELECT * FROM autor;";

$resultado = mysql_query($consulta);

// organizar e apresentar os dados

while ($registo = mysql_fetch_assoc($resultado)) {
    
    echo $registo['nome_autor']; 
}

?>