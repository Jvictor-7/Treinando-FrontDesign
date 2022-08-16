<?php
	include('../includes/head.php');
	include('../includes/top_bar.php');

	include('../includes/mn_pri.php');
?>
	
	<div class="div"><a href="">Plataforma/Home</a></div>


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
				width: calc(50% - 15px);
				height: 100px;
				background-color: #000;
			}
			.news{
				margin-left: 10px;
				margin-right: 5px;
			} 
			.notifications{
				margin-left: 5px;
				margin-right: 10px;
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