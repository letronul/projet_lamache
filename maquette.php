<!DOCTYPE html>
<html lang="fr">
	
	<?php include("include/header.html"); ?>

	<body>
		
		<h1>APPLI SWAG PROF</h1>

		<div class="content">
			
			<!-- Barre de menu -->
			<?php include("include/navbar.php"); ?>
			
			
			<?php include("include/menu.php"); ?>
			
			<div class="main">
				<div class="panel panel-default">
					<div class="panel-body">
						
						<ul class="nav nav-pills">
						  <li role="presentation" class="active"><a href="#">Mes notes</a></li>
						  <li role="presentation"><a href="#">Eleves</a></li>
						  <li role="presentation"><a href="#">Autres</a></li>
						</ul>
						
						<div class="panel panel-default">
						  <div class="panel-heading">RPI - prog. avancé</div>

						  <table class="table">
							  <tr>
								<th>Intitulé</th>
								<th>date</th>
								<th>Moyenne</th>
								<th>Coefficient</th>
								<th>Best</th>
								<th>Worst</th>
								<th><a href="#"><span class="glyphicon glyphicon-file"></span></a></th>
								
							  </tr>
							  
							  <tr>
								<td>note 2</td>
								<td>11 janvier 2015</td>
								<td>
									<div class="progress">
									  <div class="progress-bar progress-bar-info" role="progressbar" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100" style="width: 20%">
										<p>4/20</p>
									  </div>
									</div>
								</td>
								<td>0.5</td>
								<td>15</td>
								<td>1</td>
								<td><a href="#"><span class="glyphicon glyphicon-search"></span></a></span></td>
								<td><a href="#"><span class="glyphicon glyphicon-remove"></span></a></span></td>
							  </tr>
							  
							  <tr>
								<td>note 1</td>
								<td>3 fevrier 2015</td>
								<td>
									<div class="progress">
									  <div class="progress-bar progress-bar-info" role="progressbar" aria-valuenow="70" aria-valuemin="0" aria-valuemax="100" style="width: 70%">
										<p>17/20</p>
									  </div>
									</div>
								</td>
								<td>0.5</td>
								<td>15</td>
								<td>1</td>
								<td><a href="#"><span class="glyphicon glyphicon-search"></span></a></span></td>
								<td><a href="#"><span class="glyphicon glyphicon-remove"></span></a></span></td>
							  </tr>
							  
							  <tr>
								<td>note 3</td>
								<td>11 avril 2015</td>
								<td>
									<div class="progress">
									  <div class="progress-bar progress-bar-info" role="progressbar" aria-valuenow="550" aria-valuemin="0" aria-valuemax="100" style="width: 55%">
										<p>12/20</p>
									  </div>
									</div>
								</td>
								<td>0.5</td>
								<td>15</td>
								<td>1</td>
								<td><a href="#"><span class="glyphicon glyphicon-search"></span></a></span></td>
								<td><a href="#"><span class="glyphicon glyphicon-remove"></span></a></span></td>
							  </tr>
							  
						  </table>
						</div>
						
					</div>
				</div>		
			</div>
			
			<?php include("include/footer.php"); ?>
			
		</div>
	</body>
	
	
	
	<?php include("include/script.html"); ?>
</html>
 
 
