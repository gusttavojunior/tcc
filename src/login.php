<?php 

	require_once "../classes/Usuario.php";
	require_once "../classes/Login.php";
	$user = new Usuario();

	$login = new Login();


	$user->setSenha($_POST['password']);
	$user->setEmail($_POST['email']);
	$resp = $login->logar($user);
	
	if($resp){ 
		session_destroy();
		session_start();
		$_SESSION['perfil'] = $resp[0]->perfil;
		header("location: ../index.php?id=1");
		}else{
		header("location: ../index.php?id=2");
	}



 ?>