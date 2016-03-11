<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<div class="menu">
				<div class="panel panel-default">
					<div class="panel-body">
						<?php
							echo "Nom : " . $_SESSION['nom'].'<br>';
							echo "Prénom : " .$_SESSION['prenom'].'<br>';
							echo "Login : " .$_SESSION['login'].'<br>';
							echo "Fonction : " .$_SESSION['privilege'].'<br>'.'<br>';
							
						?>
					</div>
				</div>
				
				<div class="panel panel-default">
					
				  <div class="panel-body">
					 
					<h3>Mes Classes</h3>
					  
					<h4>STS</h4>
					<ul>
						<li><a href ="index.php">prog. avancé</a></li>
						<li><a href ="#">sécurité réseau</a></li>
						<li><a href ="#">enseignement du plaisir</a></li>
					</ul>
					
					<h4>RPI</h4>
					<ul>
						<li><a href ="#">prog. avancé</a></li>
						<li><a href ="#">Administration Linux</a></li>
						<li><a href ="#">Conception BDD</a></li>
					</ul>
					
				  </div>
				</div>
			</div>
