<?php

$nome = "Hon Yuri";

$Sobrenome = "Medeiros";

$AnoNascimento = "23/10/1991";

$Email = "Yurimedeiros23@gmail.com";

$Telefone = "(11) 9 5126-9763";

$Endereco = "Rua Purus 362 Casa 4";

$NomeCompleto = $nome . " " . $Sobrenome . " " . $AnoNascimento . " " . $Email . " " . $Telefone . " " . $Endereco;

echo $NomeCompleto;

exit;

echo $nome;

echo "<br/>";

unset($nome);

if (isset($nome)) {

	echo $nome; }

?>