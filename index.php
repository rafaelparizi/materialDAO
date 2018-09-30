<?php 

require_once("config.php");
/*
// $sql = new Sql();

// $usuarios = $sql->select("SELECT * FROM tb_usuarios");

// echo json_encode($usuarios);

//Carrega um usuário
$root = new Usuario();
$root->loadById(1);
echo $root;

echo "<br>";

//Carrega uma lista de usuários
$lista = new Usuario();
echo json_encode($lista->getList());

echo "<br>";

//Carrega uma lista de usuários pelo login
$search = new Usuario();
echo json_encode($search->search("rpa"));

echo "<br>";

//Carrega usuário usando login e senha
$usuario = new Usuario();
$usuario->login("usuario","user");
echo $usuario;

echo "<br>";

echo "<br>";

//Criando um novo usuário
$aluno = new Usuario("rparizi1","1111");
$aluno->insert();

echo $aluno;
*/

//Alterar um usuário
/*
$usuario = new Usuario();
$usuario->loadById(6);

$usuario->update("professor","hahahaha");

echo $usuario;
*/

$usuario = new Usuario();
$usuario->loadById(6);
$usuario->delete();
echo $usuario;

 ?>