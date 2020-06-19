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

//carrega login
//$usuario = new Usuario();
//$usuario->login('leoegito','123456');
//echo $usuario;

//$aluno = new Usuario("aluno","123");
//$aluno->setDeslogin('procedureteste');
//$aluno->setDessenha('1234');


//$aluno->login($aluno->getDeslogin(),$aluno->getDessenha());

//var_dump($aluno);

//--------------------------------------------------------//
// 				Muito Importante				 		 //
// O problema o tempo todo estava na procedure,         //
// pois a mesma usava id_usuario ao inves de           //
// idusuario. Dessa forma, nao era possivel rea-      //
// lizar o select no banco de dados, pois a coluna   //
// nao existia, retornando NULL nos dois campos que //
// nao haviam sido informados anteriormente pelos  // 
// setters.										  //
//-----------------------------------------------//

//Criando novo usuario com insert
//$aluno = new Usuario("novousuario123","senhadificil123");
//$aluno->insert();


/*  Alterando o banco de dados com UPDATE
$usuario = new Usuario('teste32','senha32');

$usuario->loadById(34);
echo "<br><br><br>" .$usuario;

$usuario->update('meufilho','funcionapqp'); 
echo "<br><br><br>" .$usuario;
*/

$usuario = new Usuario();

$usuario->loadById(7);

$usuario->delete();

echo $usuario;

?>