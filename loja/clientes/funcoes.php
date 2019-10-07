<?php 
require_once('../config.php');
require_once(DBAPI);

$cliente = null;
$cliente = null;

function index() {
	global $cliente;
	$cliente = find_all('clientes');
}

function add(){
	if(!Empty($_POST['cliente'])){
		try{
			$database = open_database();

			$sql = $database->prepare('INSERT INTO CLIENTES VALUES(?,?,?,?,?,?,?,?,?)');
			$sql->bindValue(1, null);
			$sql->bindValue(2, $cliente['nome']);
			$sql->bindValue(3, $cliente['rua']);
			$sql->bindValue(4, $cliente['numero_casa']);
			$sql->bindValue(5, $cliente['bairro']);
			$sql->bindValue(6, $cliente['CPF']);
			$sql->bindValue(7, $cliente['RG']);
			$sql->bindValue(8, $cliente['telefone']);
			$sql->bindValue(9, $cliente['localo_de_trabalho']);
			
			$sql->execute();

			$_SESSION['message'] = 'Cadastro de clientes realizados com sucesso.';
			$_SESSION['type'] = 'seccess';
		}
		catch(Exception $e){

			$_SESSION['message'] = 'ERRO - '.$e->getMessage();
			$_SESSION['type'] = 'danger';
		}
		header('location: '.BASEURL.'clientes');
	}
}

function edit(){
	if(isset($_GET['id'])){
		$id = $_GET['id'];
		if(isset($_POST['cliente'])){
			try{
				$cliente = $_POST['cliente'];
				$database = open_database();
		
				$sql = $database->prepare('UPDATE CLIENTES SET NOME=?, RUA=?, NUMERO_CASA=?, BAIRRO=?, CPF=?, RG=?, TELEFONE=?, LOCAL_DE_TRABALHO=? WHERE IDCLIENTE=?');

				$sql->bindValue(1, $cliente['nome']);
				$sql->bindValue(2, $cliente['rua']);
				$sql->bindValue(3, $cliente['numero_casa']);
				$sql->bindValue(4, $cliente['bairro']);
				$sql->bindValue(5, $cliente['CPF']);
				$sql->bindValue(6, $cliente['RG']);
				$sql->bindValue(7, $cliente['telefone']);
				$sql->bindValue(8, $cliente['localo_de_trabalho']);
				$sql->bindValue(9, $id);
				
				$sql->execute();
		
				$_SESSION['message'] = 'Cliente alterado com sucesso com sucesso.';
				$_SESSION['type'] = 'seccess';
		
			}
			catch(Exception $e){
		
				$_SESSION['message'] = 'ERRO - '.$e->getMessage();
				$_SESSION['type'] = 'danger';
			}
			header('location: '.BASEURL.'clientes');
			close_database();
		}
		else{
			global $cliente;
			$cliente = find('clientes', $id);
		}
	}
	else{
		header('location: '.BASEURL.'clientes');
	}
}

function view($id = null){
	global $cliente;
	$cliente = find('clientes', $id);
}

 function delete($id = null)
	{
		$database = open_database();

		try{
			if($id){
				$sql = $database ->prepare("DELETE FROM CLIENTES WHERE  IDCLIENTE=?");
				$sql->bindValue(1,$id,PDO::PARAM_INT);
				$sql->execute();

				session_start();
				$_SESSION['message'] = 'Cliente deletado com sucesso...';
				$_SESSION['type'] = 'sucess';
			}
		}
		catch(Exception $e){
			session_star();
			$_SESSION['message'] = 'ERRO :'.$e->getMessage();
			$_SESSION['type'] = 'danger';
		}
		close_database($database);
		header('location: '.BASEURL.'/clientes');
	}
 ?>