	<?php 

	require_once "../classes/Usuario.php";
	require_once "../classes/Login.php";
	$user = new Usuario();
	$user->setNome($_POST['nome']);
	$user->setSobrenome($_POST['sobrenome']);
	$user->setEmail($_POST['email']);
	$user->setSenha(password_hash($_POST['password'], PASSWORD_BCRYPT));
	$user->setNascimento($_POST['nascimento']);

	if(isset($_POST["exampleRadios"])){
		$exampleRadios = $_POST["exampleRadios"]);	
	}else{
		$exampleRadios = false;
	}

	if(isset($_POST["exampleRadio"])){
		$exampleRadio = $_POST["exampleRadio"]);	
	}else{
		$exampleRadio = false;
	}

	if(isset($_POST["nao"])){
		$nao = $_POST["nao"]);	
	}else{
		$nao = false;
	}

	if(isset($_POST["miopia"])){
		$miopia = $_POST["miopia"]);	
	}else{
		$miopia = false;
	}


	if(isset($_POST["daltonismo"])){
		$daltonismo = $_POST["daltonismo"]);	
	}else{
		$daltonismo = false;
	}

	if(isset($_POST["astigmatismo"])){
		$astigmatismo = $_POST["astigmatismo"]);	
	}else{
		$astigmatismo = false;
	}

	if(isset($_POST["hipermetropia"])){
		$hipermetropia = $_POST["hipermetropia"]);	
	}else{
		$hipermetropia = false;
	}

	if(isset($_POST["outros"])){
		$outros = $_POST["outros"]);	
	}else{
		$outros = false;
	}

	if(isset($_POST["case"])){
		$case = $_POST["case"]);	
	}else{
		$case = false;
	}

	if(isset($_POST["exampleRadios2"])){
		$exampleRadios2 = $_POST["exampleRadios2"]);	
	}else{
		$exampleRadios2 = false;
	}

	if(isset($_POST['case'])){
		
	}else{
		
	}
	
	/**
	 * verificação de miopia e astigmatismo
	 */
	if($miopia == 0 && $astigmatismo == 3){
		$user->setPerfil(8);
		create($user);
	}else{
		if($miopia == 0){
			$usert->setPerfil(1);
			create($user);
		}else{
			if($astigmatismo == 3){
				$user->setPerfil(5);
				create($user);
			}else{
				if($outros == 0){
					$usert->setPerfil(1);
					create($user);
				}else{
					if($hipermetropia == 2){
						$user->setPerfil(5);
						create($user);
					}
				}
			}
		}else{
			$user->setPerfil(8);
			create($user);
		}
	}

	function create($data){
		$cad = new Login();
		if (!$cad->create($data)) {
			header('location: ../index.php?id=1');
		}else{
			header('location: ../index.php?id=2');
		}
	}

 ?>