<?php
//╔══════════════════════════════════════════════════════════════════════════════════════════════════════════╗
//║  INSERE registro na tabela da Base de dados
//║
//╚══════════════════════════════════════════════════════════════════════════════════════════════════════════╝
//╔══════════════════════════════════════════════════════════════════════════════════════════════════════════╗
//║  Parametros de conexao
//╚══════════════════════════════════════════════════════════════════════════════════════════════════════════╝
//╔══════════════════════════════════════════════════════════════════════════════════════════════════════════╗
		$host="localhost";
		$login="root";
		$senha="";
		$banco="fabrika";
//╚══════════════════════════════════════════════════════════════════════════════════════════════════════════╝
//╚══════════════════════════════════════════════════════════════════════════════════════════════════════════╝
//╔══════════════════════════════════════════════════════════════════════════════════════════════════════════╗
//║  Criamos a variavel de conexao
//╚══════════════════════════════════════════════════════════════════════════════════════════════════════════╝
//╔══════════════════════════════════════════════════════════════════════════════════════════════════════════╗
		$conecta = new mysqli ($host, $login, $senha, $banco);
//╚══════════════════════════════════════════════════════════════════════════════════════════════════════════╝
//╔══════════════════════════════════════════════════════════════════════════════════════════════════════════╗
//║  Definimos a query para inserir o registro na tabela na base de dados e armazenamos na variavel $sql
//╚══════════════════════════════════════════════════════════════════════════════════════════════════════════╝
//╔══════════════════════════════════════════════════════════════════════════════════════════════════════════╗
		$sqli = "INSERT INTO fabrikaUsers (User, Email, Telefone, Endereco, Senha)".
		"VALUES ('Meu Nome de Usuario','meuemail@email.com', '1155555555', 'Rua do meu user', 'Soeusei')";
//╚══════════════════════════════════════════════════════════════════════════════════════════════════════════╝
//╔══════════════════════════════════════════════════════════════════════════════════════════════════════════╗
//║  Executamos e conferimos o estado "verdadeiro ou falso" e definimos mensagens para "true or false"
//╚══════════════════════════════════════════════════════════════════════════════════════════════════════════╝
//╔══════════════════════════════════════════════════════════════════════════════════════════════════════════╗
		if ($conecta->query($sqli) === TRUE){
		echo '<div class="alert alert-success"><strong>Parabéns, </strong> Dados inseridos com sucesso! </div>';
		}else{
		echo '<div class="alert alert-danger"><strong>Que pena, </strong> não foi possível inserir os dados </div>';
		}
//╚══════════════════════════════════════════════════════════════════════════════════════════════════════════╝
//╔══════════════════════════════════════════════════════════════════════════════════════════════════════════╗
//║  Encerramos a conexao com o mysql para nao consumir mais recursos
//╚══════════════════════════════════════════════════════════════════════════════════════════════════════════╝
//╔══════════════════════════════════════════════════════════════════════════════════════════════════════════╗
		$conecta->close();
//╚══════════════════════════════════════════════════════════════════════════════════════════════════════════╝
?>