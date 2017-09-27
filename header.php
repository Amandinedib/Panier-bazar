<?php

$tabMembre=array('username'=> 'toto','mdp'=>'toto','nom'=>'patate','prenom'=>'monsieur','role'=>'admin');

function formidable($nom){
	if(isset($_POST[$nom]) && $_POST[$nom]!= '') echo $_POST[$nom]; 
	}


	if (isset($_POST['mdp']) AND $_POST['username'])  {
		if (($tabMembre['username'] == $_POST['username']) && ($tabMembre['mdp'] == $_POST['mdp'])){
			
			$_SESSION = $tabMembre;

			header("location:panier.php?");
		} else{
		
		echo '<strong>Erreur: vous n\'êtes pas enregistré !</strong>';
	}
	
echo '<br>';
		
		}

?>
<div class="bazar">

	<h1>Bazar & Co</h1>
</div>
<form action="" method="POST">
	<p>Connectez vous à votre espace personnel</p>

	<label>Username</label>
	<input type="text" name="username" class="nom" placeholder=" Username" value="<?php formidable('nom');  ?>" >
	<br><br>
	<label>Password</label>
	<input  type="password" name="mdp" class="mdp" placeholder=" Password" value="<?php formidable('mdp');  ?>" >
	
	<br><br>
	<input class="bouton" type="submit" value="Log In">
</form>
<br>
<br>
<a class="voirpanier" href="panier.php">Voir le panier (<?php print $panier_count; ?> produits)</a>

