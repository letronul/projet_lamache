<!-- PRECODE ICI -->


<!DOCTYPE html>
<html lang="fr">
	
	<?php include("include/header.html"); ?>

	<body>
		
		<h1></h1>

		<div class="content">
			
			<div class="connexion">
				<div class="panel panel-default">
					<div class="panel-body">
						
							<!-- CODE ICI -->
							
							
							
						<form method="post" action="index.php">

							<center> 
								<legend>Connexion au Panel</legend> 
								</br>
									<div class="form-group">
									  <label class="col-lg-2 control-label"></label>
									  <div class="col-lg-10">
										<input type="text" class="form-control" name="login" placeholder="Login">
									  </div>
									</div>
									
									<br/><br/><br/>

									<div class="form-group">
									  <label class="col-lg-2 control-label"></label>
									  <div class="col-lg-10">
										<input type="password" class="form-control" name="password" placeholder="Mot de passe">
									  </div>
									</div>
							</center>
							
							<br/><br/>
							
							<center><button type="submit" name="submit" class="btn btn-primary">Connexion</button></center>

						</form>
						
					</div>
				</div>		
			</div>
			
			<?php include("include/footer.php"); ?>
			
		</div>
	</body>
	
	<?php include("include/script.html"); ?>
</html>
 
 
