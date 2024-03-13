<?php
	include 'registre.php';
	include 'mesFunctionsSQL.php';
	include 'mesFunctionsTable.php';

	$id = $_GET["id"];
	if ($id == 0) {
		$user = getNewUser();
		$action = "CREATE";
		$libelle = "Creer";
	} else {
		$user = readUser($id);
		$action = "UPDATE";
		$libelle = "Mettre a jour";
	 
	}
	
	


?>

<html>
<header>
	<link rel="stylesheet" href="style.css">
</header>
<body>

		
	<form action="createUpdate.php" method="get">
	<p>	
		<a href="index.php">Liste des utilisateurs</a>

		<input type="hidden" name="id" value="<?php echo $user['id'];  ?>"/>
		<input type="hidden" name="action" value="<?php echo $action;  ?>"/>
		 <div>
        	<label for="mdpass">mdpass:</label>
        	<input type="password" id="mdpass" name="mdpass" value="<?php echo $user['mdpass'];  ?>">
	    </div>
	    <div>
	        <label for="email">email</label>
	        <input type="text" id="email" name="email" value="<?php echo $user['email'];  ?>">
	    </div>
	    <div>
	        <label for="identifiant">identifiant:</label>
	        <input type="text" id="identifiant" name="identifiant" value="<?php echo $user['identifiant'];  ?>">
	    </div>
		<div class="button">
			<button type="submit"><?php echo $libelle;  ?></button>
		</div>
	</p>
	</form>
	<br>
	<form action="createUpdate.php" method="get">
	<p>	
		<!-- ... -->
	    <div>
        	<label for="mdpass">Mot de passe:</label>
        	<input type="password" id="mdpass" name="mdpass" value="">
	    </div>
	    <!-- ... -->
	</p>
	</form>
	<br>

	<?php if ($action!="CREATE") { ?>
	<form action="createUpdate.php" method="get">
		<input type="hidden" name="action" value="DELETE"/>
		<input type="hidden" name="id" value="<?php echo $user['id'];  ?>"/>
		<p>
		<div class="button">
			<button type="submit">Supprimer</button>
		</div>
		</p>
	</form>
	<?php } ?>

</body>
</html>