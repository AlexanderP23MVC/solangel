<?php 

include ('php/consulta.php');


?>
<!DOCTYPE html>
<html lang="es">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Especialistas</title>
	<link rel="stylesheet" href="css/normalize.css">
	<link rel="stylesheet" href="css/sweetalert2.css">
	<link rel="stylesheet" href="css/material.min.css">
	<link rel="stylesheet" href="css/material-design-iconic-font.min.css">
	<link rel="stylesheet" href="css/jquery.mCustomScrollbar.css">
	<link rel="stylesheet" href="css/main.css">
	<link rel="icon" href="Imagenes/logo2.png" type="image/png">
	<script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
	<script>window.jQuery || document.write('<script src="js/jquery-1.11.2.min.js"><\/script>')</script>
	<script src="js/material.min.js"></script>
	<script src="js/sweetalert2.min.js"></script>
	<script src="js/jquery.mCustomScrollbar.concat.min.js"></script>
	<script src="js/main.js"></script>
</head>

<style>
	.shadow-effect {
		border: none;
		color: white;
		padding: 14px 28px;
		cursor: pointer;
		border-radius: 5px;
		background-color: #ff0000ad; /* Color base del botón */
		transition: box-shadow 0.3s ease-in-out; /* Transición suave del efecto de sombra */
	  }
	  
	  .shadow-effect:hover {
		box-shadow: 0px 8px 16px rgba(0, 0, 0, 0.3); /* Aumenta el desplazamiento y la opacidad de la sombra */
	  }

</style>


<body>
	<!-- navLateral -->
	<section class="full-width navLateral">
		<div class="full-width navLateral-bg btn-menu"></div>
		<div class="full-width navLateral-body">
			<div class="full-width navLateral-body-logo text-center tittles">
				<i class="zmdi zmdi-close btn-menu"></i> SCR BDV
			</div>
			<figure class="full-width navLateral-body-tittle-menu">
				<div>
					<br>
					<br>
					<img src="assets/img/neutro.png" alt="Avatar" class="img-responsive">
				</div>
				<figcaption>

					<br>
					<span>
						Solangel Figueroa<br>
						<small>Admin</small>
					</span>
				</figcaption>
			</figure>
			<nav class="full-width">
				<ul class="full-width list-unstyle menu-principal">
					<li class="full-width">
						<a href="Home.html" class="full-width">
							<div class="navLateral-body-cl">
								<i class="zmdi zmdi-view-dashboard"></i>
							</div>
							<div class="navLateral-body-cr">
								HOME
							</div>
						</a>
					</li>

					<li class="full-width divider-menu-h"></li>
					<li class="full-width">
						<a href="#!" class="full-width btn-subMenu">
							<div class="navLateral-body-cl">
								<i class="zmdi zmdi-face"></i>
							</div>
							<div class="navLateral-body-cr">
								USUARIOS
							</div>
							<span class="zmdi zmdi-chevron-left"></span>
						</a>
						<ul class="full-width menu-principal sub-menu-options">
							<li class="full-width">
								<a href="admin.php" class="full-width">
									<div class="navLateral-body-cl">
										<i class="zmdi zmdi-account"></i>
									</div>
									<div class="navLateral-body-cr">
										ADMINISTRADORES
									</div>
								</a>
							</li>
							<li class="full-width">
								<a href="especialistas.php" class="full-width">
									<div class="navLateral-body-cl">
										<i class="zmdi zmdi-accounts"></i>
									</div>
									<div class="navLateral-body-cr">
										ESPECIALISTAS
									</div>
								</a>
							</li>
						</ul>
					</li>
					<li class="full-width divider-menu-h"></li>
					<li class="full-width">
						<a href="servers.html" class="full-width">
							<div class="navLateral-body-cl">
								<i class="zmdi zmdi-laptop"></i>
							</div>
							<div class="navLateral-body-cr">
								SERVIDORES
							</div>
						</a>
					</li>
					<li class="full-width divider-menu-h"></li>
					<li class="full-width">
						<a href="reportes.html" class="full-width">
							<div class="navLateral-body-cl">
								<i class="zmdi zmdi-file-text"></i>
							</div>
							<div class="navLateral-body-cr">
								REPORTES
							</div>
						</a>
					</li>
				</ul>
				</li>
				</ul>
			</nav>
		</div>
	</section>
	<!-- pageContent -->
	<section class="full-width pageContent">
		<!-- navBar -->
		<div class="full-width navBar">
			<div class="full-width navBar-options">
				<i class="zmdi zmdi-swap btn-menu" id="btn-menu"></i>
				<div class="mdl-tooltip" for="btn-menu">Ocultar/Mostrar</div>
				<nav class="navBar-options-list">
					<ul class="list-unstyle">
						<li class="btn-exit" id="btn-exit">
							<i class="zmdi zmdi-power"></i>
							<div class="mdl-tooltip" for="btn-exit">Salir</div>
						</li>
						<li class="text-condensedLight noLink"><small>Solangel Figueroa</small></li>
						<li class="noLink">
							<figure>
								<img src="assets/img/neutro.png" alt="Avatar" class="img-responsive">
							</figure>
						</li>
					</ul>
				</nav>
			</div>
		</div>
		<section class="full-width header-well">
			<div class="full-width header-well-icon">
				<i class="zmdi zmdi-accounts"></i>
			</div>
			<section class="full-width text-center" style="padding: 40px 0;">
				<h2 class="text-center tittles">Especialistas</h2>
				<div class="mdl-tabs__panel" id="tabListClient">
					<div class="mdl-grid">
						<div
							class="mdl-cell mdl-cell--4-col-phone mdl-cell--8-col-tablet mdl-cell--8-col-desktop mdl-cell--2-offset-desktop">
							<div class="full-width panel mdl-shadow--2dp">
								<div class="full-width panel-tittle bg-success text-center tittles">

								</div>


								<div class="full-width panel-content">
									<form action="#">
										<div class="mdl-textfield mdl-js-textfield mdl-textfield--expandable">
											<label class="mdl-button mdl-js-button mdl-button--icon" for="searchClient">
												<i class="zmdi zmdi-search"></i>
											</label>
											<div class="mdl-textfield__expandable-holder">
												<input class="mdl-textfield__input" type="text" id="searchClient">
												<label class="mdl-textfield__label"></label>
											</div>
										</div>
									</form>
									<div class="mdl-list">
									<?php 
								
								
								if(consultaEspecialistas()==0){
									echo "no hay datos ";
								}else{
								
								$datos = consultaEspecialistas();
								foreach ($datos as $dato) {
		
									
									?>

										<div class="mdl-list__item mdl-list__item--two-line">
											<span class="mdl-list__item-primary-content">
												<i class="zmdi zmdi-account mdl-list__item-avatar"></i>
												<span>
													<?php echo  $dato["nombre"]," ",$dato["apellido"]; ?>
												</span>
												<span class="mdl-list__item-sub-title"><?php echo $dato["usuario"] ?></span>
											</span>
											
											<form action="php/eliminarEspecialista.php" method="post">        
												<button class="btn shadow-effect" type="submit" formmethod="get" name="id" value="<?php echo $dato["id"]?>">Eliminar</button>
											</form>
    </form>	
											
										</div>
										<li class="full-width divider-menu-h"></li>

									<?php }}?>
									</div>
								</div>
							</div>

						</div>
					</div>
				</div>
				</div>
			</section>
</body>

</html>