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
					font-weight: 500;
					font-size: 32px;
				}
				#subtitle_pag{
					margin-top: -10px;
					margin-bottom: 35px;
					font-family: 'segoe ui';
					font-size: 18px;
					font-weight: normal;
				}

		</style>

		<div id="div_title_pag">
			<h1 id="title_pag">Gestão da plataforma</h1>
			<h2 id="subtitle_pag">Dados e estatísticas gerais</h2>
		</div>

		<style type="text/css">

			#list_BD h1, #container_statistic h1{
				display: block;
				width: 100%;
				font-size: 22px;
				font-family: 'Segoe UI';
				font-weight: normal;
			}
			.borda{
				display: block;
				margin: 5px 0 25px 0;
				width: 45px;
				height: 4px;
				background-color: #000;
				border-radius: 2px;
			}

			#list_BD, #container_statistic{
				display: block;
				float: left;
				/*border: 1px solid #000;*/
				margin-left: 40px;
			}
			#list_BD{
				width: calc(30% - 40px);
				}
				#list_BD li{list-style: none;}
				#list_BD li a{
					display: inline-block;
					text-decoration: none;
					margin-bottom: 10px;
					padding: 7.5px 25px;
					border-radius: 30px;
					background-color: rgba(0,0,0,0.05);
					color: #142748;
				}
			#list_BD li a:hover{background-color: rgba(0,0,0,0.10);}

			#container_statistic{
				width: calc(70% - 40px);
			}
			#container_statistic img{
				width: 100%;
			}
		</style>

		<ul id="list_BD">
			<h1>Banco de dados</h1>
			<div class="borda"></div>

			<li><a href="cadastro/list_users.php?x=57">Lista de usuários</a></li>
			<li><a href="cadastro/list_campi.php">Lista de campi</a></li>
			<li><a href="cadastro/list_institutos.php">Lista de institutos</a></li>
			<li><a href="cadastro/list_disciplinas.php">Lista de disciplinas</a></li>
			<li><a href="cadastro/list_processos.php">Lista de processos seletivos</a></li>			
		</ul>

		<div id="container_statistic">
			<h1>Estatíticas</h1>
			<div class="borda"></div>
			<img src="../img/statistic.png">
		</div>
    </div>
    <!-- //CENTER -->


</body>
</html>