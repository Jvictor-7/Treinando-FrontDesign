<?php
	include('../includes/head.php');
	include('../includes/top_bar.php');

	include('../includes/mn_pri.php');
?>
	
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

		<a href="">Plataforma</a><a href=""> / Home</a>

	</div>


	<!-- CENTER -->
	<div class="container">
		<style type="text/css">
			.container{
				display: flex;
				flex-direction: row;
				width: 100%;
			}
			.notifications, .news{
				display: block;
				height: calc(100vh - 225px);
				background-color: #999;
			}
			.news{
				width: calc(65% - 45px);
				margin-left: 40px;
				margin-right: 5px;
			} 
			.notifications{
				width: calc(35% - 45px);
				margin-left: 5px;
				margin-right: 40px;
			}

			.notifications h1, .news h1{
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

			.post{
				display: block;
				width: 100%;
				min-width: 880px;
				height: 220px;
				background-color: #fff;
				box-shadow: 1px 1px 0.1em #777;
				
				}
				.post img{
					display: block;
					float: left;
					margin-right: 15px;
					width: 440px;
					height: 220px;
					background-color: transparent;
				}
				.post h2, .post h3{
					display: block;
					float: left;
					width: 400px;
					font-family: 'Segoe UI';
					font-weight: normal;
				}
				.post h2{margin-top:15px; font-size: 18px;}
				.post h3{font-size: 12px;}
				
				.post p{ 
					display: block;
					float: left;
					width: 370px;
					border: 1px solid #000;
					font-family: 'Segoe UI';
					text-align: justify;
				}
		</style>

		<div class="news">
			<h1>Notícias</h1>
			<div class="borda"></div>

			<div class="post">
				<img src="#">
				<h2>Titulo</h2>
				<h3>Subtitulo</h3>

				<p>Descricao:TextoTextoTextoTextoTextoTextoTexto
				TextoTextoTextoTextoTextoTextoTextoTextoTextoTexto
				TextoTextoTextoTextoTextoTextoTextoTextoTexto.
				</p>
			</div>
		</div>

		<div class="notifications">
			<h1>Notíficações</h1>
			<div class="borda"></div>
		</div>
	</div>
	
    <!-- //CENTER -->


</body>
</html>