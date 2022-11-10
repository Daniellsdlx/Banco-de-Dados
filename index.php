<?php
include_once "conexao.php";// inclui e avalia o arquivo informado durante a execução
try{
//execução da instrução sql
$consulta = $conectar -> query("SELECT * FROM login");
echo "<a href='formUsuario.php'>Novo Cadastro</a><br><br><h1>Listagem de Usuários</h1>";
echo "<table border='1'<tr><td>Nome</td><td>Login</td><td>Ações</td></tr>";
//percorre todos os registro na consulta
while($linha = $consulta->fetch(PDO::FETCH_ASSOC)){
echo "<tr><td>$linha[nome]</td><td>$linha[login]</td><td><a href='formEditar.php?id=$linha[id]'>Editar</a> - <a
href='excluir.php?id=$linha[id]'> Excluir</a></td></tr>";
}
echo "</table>";
echo $consulta->rowCount()." Registros Exibidos";
} catch(PDOException $e){
echo $e->getMessage();
}
?>