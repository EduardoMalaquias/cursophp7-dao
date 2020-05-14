<?php 

	require_once("config.php");

	// $sql = new Sql();

	// $usuarios = $sql->select("SELECT * FROM tb_usuarios");

	// echo json_encode($usuarios);

	// Carrega apenas 1 usuario
	// $root = new Usuario();
	// $root->loadById(3);
	// echo $root;

	// Carrega uma lista de usuarios
	//$lista = Usuario::getList();
	//echo json_encode($lista);

	// Carrega uma lista de usuarios buscando pelo login
	//$search = Usuario::search("fe");
	//echo json_encode($search);

	// Carrega um usuario usando login e senha
	//$usuario = new Usuario();
	//$usuario->login("root", "!@#$");
	//echo $usuario;

	// Criando um novo usuario
	//$aluno = new Usuario("aluno", "@lun0");
	//$aluno->insert();
	//echo $aluno;

	// Alterar um usuario
	// $usuario = new Usuario();
	// $usuario->loadById(7);
	// $usuario->update("professor", "!@#$%");
	// echo $usuario;

	// Deletar usuario
	$usuario = new Usuario();
	$usuario->loadById(7);
	$usuario->delete();
	echo $usuario;

 ?>