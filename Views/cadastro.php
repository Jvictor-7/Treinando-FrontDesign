<?php
	include('../includes/head.php');
	include('../includes/sidebar.php');
	include('../includes/top_bar.php');
	include('../includes/mn_pri.php');
?>

	<!-- CENTER -->
	<div class="container">
		<div class="name">
			<style type="text/css">
				.name{
					display: block;
					width: calc(100% - 80px);
					margin: 30px  40px;
				}
				.name a{
				color: #142748;
				font-family: 'segoe ui'; 
				font-size: 16px;
				text-decoration: none;
				}
			</style>

			<a href="../">Plataforma</a><a href=""> / Cadastro</a>

		</div>
		
		<style type="text/css">
			.container{
				display: block;
				width: 1280px;
				height: 100vh;
				margin: 0 auto;
			}

			#div_title_pag{
				display: block;
				width: calc(100% - 80px);
				margin: 30px  40px;
				}
				#title_pag{
					font-family: 'segoe ui';
					font-size: 32px;
				}
				#subtitle_pag{
					font-family: 'segoe ui';
					font-size: 18px;
					font-weight: normal;
				}

		</style>

		<div id="div_title_pag">
			<h1 id="title_pag">Gestão da plataforma</h1>
			<h2 id="subtitle_pag">Dados e estatísticas gerais</h2>
		</div>

		<div>
			</br></br>
			<a href="cadastro/list_users.php?x=57">lista de usuarios</a>
			</br></br>
			<a href="cadastro/list_campi.php">lista de campi</a>
			</br></br>
			<a href="cadastro/list_institutos.php">lista de Institutos</a>
			</br></br>
			<a href="cadastro/list_disciplinas.php">lista de Disciplinas</a>
			</br></br>
			<a href="cadastro/list_processos.php">lista de Processos seletivos</a>
		</div>

    </div>
    <!-- //CENTER -->


</body>
</html>