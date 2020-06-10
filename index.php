<?php

require_once('config.php');

//$sql = new Sql();

//$usuarios = $sql->select('SELECT * FROM tb_usuarios');

//echo json_encode($usuarios);


//carrega um usuario pelo id
//$teste = new Usuario();
//$teste->loadById(4);
//echo $teste;

//carrega uma lista de usuarios
//$lista = Usuario::getList();
//echo json_encode($lista);


//carrega uma lista de usuarios pesquisando pelo loguin
//$search = Usuario::search('t');
//echo json_encode($search);

$usuario = new Usuario();
$usuario->login('leoegito','123456');

echo $usuario;

?>