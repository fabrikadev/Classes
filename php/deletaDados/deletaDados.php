<?php
//╔══════════════════════════════════════════════════════════════════════════════════════════════════════════╗
//║  Deleta registro da tabela dentro da Base de dados
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
//╔══════════════════════════════════════════════════════════════════════════════════════════════════════════╗
//║  Criamos a variavel de conexao
//╚══════════════════════════════════════════════════════════════════════════════════════════════════════════╝
//╔══════════════════════════════════════════════════════════════════════════════════════════════════════════╗
    $conecta = new mysqli ($host, $login, $senha, $banco);
//╚══════════════════════════════════════════════════════════════════════════════════════════════════════════╝
//╔══════════════════════════════════════════════════════════════════════════════════════════════════════════╗
//║  Definimos a query para apagar o registro da tabela na base de dados e armazenamos na variavel $sql
//╚══════════════════════════════════════════════════════════════════════════════════════════════════════════╝
//╔══════════════════════════════════════════════════════════════════════════════════════════════════════════╗
    $sqli = "DELETE FROM fabrikaUsers WHERE email='meuemail@email.com'";
//╚══════════════════════════════════════════════════════════════════════════════════════════════════════════╝
//╔══════════════════════════════════════════════════════════════════════════════════════════════════════════╗
//║  Executamos e conferimos o estado "verdadeiro ou falso" e definimos mensagens para "true or false"
//╚══════════════════════════════════════════════════════════════════════════════════════════════════════════╝
//╔══════════════════════════════════════════════════════════════════════════════════════════════════════════╗
    if ($conecta->query($sqli) === TRUE){
    echo '<div class="alert alert-success"><strong>Parabéns, </strong> Dados apagados com sucesso! </div>';
    }else{
    echo '<div class="alert alert-danger"><strong>Que pena, </strong> não foi possível apagar os dados </div>';
    }
//╚══════════════════════════════════════════════════════════════════════════════════════════════════════════╝
//╔══════════════════════════════════════════════════════════════════════════════════════════════════════════╗
//║  Encerramos a conexao com o mysql para nao consumir mais recursos
//╚══════════════════════════════════════════════════════════════════════════════════════════════════════════╝
//╔══════════════════════════════════════════════════════════════════════════════════════════════════════════╗
    $conecta->close();
//╚══════════════════════════════════════════════════════════════════════════════════════════════════════════╝
?>
