<?php 
	
	function getDatabaseConnexion() {
		try {
		    $user = "root";
			$pass = "root";
			$pdo = new PDO('mysql:host=localhost;dbname=auth_system', $user, $pass);
			 $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
			return $pdo;
			
		} catch (PDOException $e) {
		    print "Erreur !: " . $e->getMessage() . "<br/>";
		    die();
		}
	}

	
	// récupere tous les users
	function getAllUsers() {
		$con = getDatabaseConnexion();
		$requete = 'SELECT * from users';
		$rows = $con->query($requete);
		return $rows;
	}

	// creer un user
	function createUser($nom, $prenom, $age, $adresse) {
		try {
			$con = getDatabaseConnexion();
			$sql = "INSERT INTO users (identifiant, email, mdpass) 
					VALUES ('$identifiant', '$email', '$mdpass')";
	    	$con->exec($sql);
		}
	    catch(PDOException $e) {
	    	echo $sql . "<br>" . $e->getMessage();
	    }
	}

	//recupere un user
	function readUser($id) {
		$con = getDatabaseConnexion();
		$requete = "SELECT * from users where id = '$id' ";
		$stmt = $con->query($requete);
		$row = $stmt->fetchAll();
		if (!empty($row)) {
			return $row[0];
		}
		
	}

	//met à jour le user
	function updateUser($id, $email, $identifiant, $mdpass) {
		try {
			$con = getDatabaseConnexion();
			$requete = "UPDATE users set 
						email = '$email',
						identifiant = '$identifiant',
						mdpass = '$mdpass',
						where id = '$id' ";
			$stmt = $con->query($requete);
		}
	    catch(PDOException $e) {
	    	echo $sql . "<br>" . $e->getMessage();
	    }
	}

	// suprime un user
	function deleteUser($id) {
		try {
			$con = getDatabaseConnexion();
			$requete = "DELETE from users where id = '$id' ";
			$stmt = $con->query($requete);
		}
	    catch(PDOException $e) {
	    	echo $sql . "<br>" . $e->getMessage();
	    }
	}

	function getNewUser() {
		$user['id'] = "";
		$user['email'] = "";
		$user['identifiant'] = "";
		$user['mdpass'] = "";
		
	}
	


 ?>