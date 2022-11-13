<html>
	<title> MEU CEP </title>
	<h1>Busca CEP Bertholdo</h1>
	<!--Teste Processo Seletivo Bertholdo--> 
	<h2>Inserir da seguinte forma: 00000-000</h2>

	<p>Não sabe o seu CEP? 

	<style>
		body{
			background-color: #C8A2C8;
			text-align: center;
			text-decoration-color: #ffffff;
		}
	</style>
	
<a href="https://buscacepinter.correios.com.br/app/endereco/index.php">Consulte Aqui</a></p>
<!-- Foi implementado link para acessar O CEP, caso cliente não saiba, direcionando o mesmo para o site dos correios---> 



<body> 
		<form action="index.php" method="post"> <!--Erro 1: Digitação errada: "Idex" impedindo de encontar a página html, foi corrigido para "index"-->  
		<label> Insira o CEP: </label>
		<input type="text" name="cep">
		<input type="submit" value="Enviar">
	</body>

	

</html>

<?php

if(!empty($_POST['cep'])){
	
	$cep = $_POST['cep']; 

	$address = (get_address($cep)); // Erro 2 de digitação corrigido : cp para cep

	echo "<br><br>CEP Informado: $cep<br>";
	echo "Rua: $address->logradouro<br>"; //Erro 3 de digitação corrigido : logadoro = logadouro
	echo "Bairro: $address->bairro<br>"; // //Erro 4 de digitação corrigido = address
	echo "Estado: $address->uf<br>";
}// //Erro 5 de digitação corrigido = address

function get_address($cep){
	
	
	$cep = preg_replace("/[^0-9]/", "", $cep);
	$url = "http://viacep.com.br/ws/$cep/xml/"; 
	//Erro 6 de digitação corrigido = "barra faltando impedindo o comando de encontrar a API ViaCep"

	$xml = simplexml_load_file($url);
	return $xml;
}

?>

