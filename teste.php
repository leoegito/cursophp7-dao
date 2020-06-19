<?php
require_once('config.php');

$usuario = new Usuario();

$usuario->loadById(33);

echo "<br><br><br>" .$usuario;

$usuario->setDeslogin('tubarao');
$usuario->setDessenha('ondaondaolhaaonda');

echo "<br><br><br>" .$usuario;

//$sql = new Sql();
//$sql->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

//$qry = 'UPDATE tb_usuarios SET deslogin =';
//$qry .= $usuario->getDeslogin();
//$qry .= ", dessenha = ";
//$qry .= $usuario->getDessenha();
//$qry .= " WHERE idusuario = ";
//$qry .= $usuario->getIdusuario();

//$qry = "UPDATE tb_usuarios SET deslogin = :LOGIN, dessenha = :PASS WHERE id = :ID";

$sql = new PDO('mysql:host=localhost;dbname=dbphp7;charset=utf8','root','');

try{
	$stmt = $sql->prepare("UPDATE tb_usuarios SET deslogin = :LOGIN, dessenha = :PASS WHERE idusuario = :ID");
	$stmt->execute(array(
		':LOGIN'=> $usuario->getDeslogin(),
		':PASS'=>$usuario->getDessenha(),
		':ID'=> 33
	));

	$foo = array('LOGIN'=>$usuario->getDeslogin(),':ID'=>$usuario->getIdusuario());
	var_dump($foo);
	}
catch(PDOException $e){
	echo 'Error: ' .$e->getMessage();
}


//$sql->query('UPDATE tb_usuarios SET deslogin = '.$usuario->getDeslogin() .', dessenha ='.$usuario->getDessenha() .' WHERE idusuario = 34');


?>