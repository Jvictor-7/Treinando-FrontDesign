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
		</style>

		<a href="">Plataforma / Home</a>

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
				display: flex;
				width: calc(50% - 45px);
				height: calc(100vh - 225px);
				background-color: #000;
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
		</style>

		<div class="news">

		</div>

		<div class="notifications">

		</div>
	</div>
	
    <!-- //CENTER -->


</body>
</html>