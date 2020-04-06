		<nav>
			
		        <ul class="containerUlNav">

					<li class="containerLiMenuNav"><a id="linkNav" href="index.php">Home</a></li>


					<?php if(!isset($_SESSION['admin'])) : ?>
						<li class="containerLiMenuNav"><a id="linkNav" href="index.php?action=connexion">Se connecter</a></li>
					<?php endif; ?>

					<?php if (isset($_SESSION['admin']) && $_SESSION['admin'] == 1 ) : ?>
						<li class="containerLiMenuNav"><a id="linkNav" href="index.php?action=administration">Administration</a></li>
						<li class="containerLiMenuNav"><a id="linkLogout" href="index.php?action=deconnexion">Déconnexion</a></li>
					<?php endif; ?>
					
					<?php if (isset($_SESSION['admin']) && $_SESSION['admin']  < 1 ) : ?>
						<li class="containerLiMenuNav"><a id="linkNav" href="index.php?action=profil">Profil</a></li>
						<li class="containLogout"><a id="linkLogout" href="index.php?action=deconnexion"><strong>Déconnexion</strong></a></li>
					<?php endif; ?>

					<li class="containerLiMenuNav"><a id="linkNav" href="index.php?action=contact">Contact</a></li>
					
		        </ul>

		</nav>