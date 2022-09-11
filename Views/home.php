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
					/*border: solid #000 0.01px;*/
				}
				.name a{
					color: #142748;
					font-family: 'segoe ui'; 
					font-size: 16px;
					text-decoration: none;
				}
				@media only screen and (max-width: 1024px){
					.name{
						display: block;
						width: calc(100% - 40px);
						margin: 20px  20px;
					}
				}
			</style>

			<a href="../">Plataforma</a><a href=""> / Home</a>
		</div>
		
		<style type="text/css">
			.container{
				display: block;
				width: 1366px;
				height: 100vh;
				margin: 0 auto;
				/*border: solid 1px #000;*/
			}
			.notifications, .news{
				display: block;
				float: left;
				}
				.notifications h1, .news h1{
					display: block;
					width: 100%;
					font-size: 22px;
					font-family: 'Segoe UI';
					font-weight: normal;
				}
				
				.notifications{
					width: calc(35% - 45px);
					margin-left: 5px;
					margin-right: 40px;
				}
				
				.borda{
					display: block;
					margin: 5px 0 25px 0;
					width: 45px;
					height: 4px;
					background-color: #000;
					border-radius: 2px;
				}

			.news{
				width: calc(65% - 45px);
				margin-left: 40px;
				margin-right: 5px;
				} 
				.post_news{
					display: block;
					width: calc(100% - 45px);
					min-width: 360px;
					max-width: 840px;
					margin-bottom: 10px;
					height: 220px;
					background-color: #fff;
					box-shadow: 0px 0px 0.25em #777;
					border-radius: 15px;
					overflow: hidden;
					list-style: none;
					}
					.thumb{
						display: block;
						float: left;
						width: 50%;
						height: 220px;
						background-color: #999;
					}

					.sep_post_news{
						display: inline-block;
						width: calc(50%);
						height: 220px;
						padding: 20px;
						}
						.post_news h2, .post_news h3{
							
							font-family: 'Segoe UI';
							font-weight: normal;
						}
						.post_news h2{
							margin: 6.5px 20px 0px 20px;
							font-size: 18px;
						}
						.post_news h3{
							margin: 0px 20px 15px 20px;
							font-size: 12px;
						}
						
						.post_news p{ 
							display: block;
							width: calc(100% - 40px);
							min-height: 95px;
							max-height: 95px;
							padding-bottom: 6px;
							margin: 6.5px 20px 5px 20px;
							text-align: justify;
							font-family: segoe ui;
							font-size: 12px;
						}

			
			.post_notif{
				display: block;
				width: 100%;
				height: 75px;
				margin-top: 15px;
				list-style: none;
				cursor: pointer;
				}

				.post_notif img{
					display: block;
					float: left;
					width: 75px;
					height: 75px;
					border-radius: 50px;
					margin-right: 20px;
					background-color: rgba(0, 0, 0, 0.15);
				}

				.notif_title{
					display: block;
					float: left;
					width: 100px;
					height: 15px;
					margin-top: 20px;
					background-color: rgba(0, 0, 0, 0.15);
				}

				.notif_subtitle{
					display: block;
					float: left;
					width: 300px;
					height: 15px;
					margin-top: 5px;
					background-color: rgba(0, 0, 0, 0.15);
				}
		
			@media only screen and (max-width: 1365px){
				/*aplica o container 1024*/ 

				.container{
					width: 1024px;
				}
				.post_notif img{
					width: 50px;
					height: 50px;
					margin-right: 15px;
				}
				.notif_title{
					height: 10px;
					margin-top: 10px;
				}
				.notif_subtitle{
					width: 200px;
					height: 15px;
					margin-top: 5px;
				}
			}

			@media only screen and (max-width: 1024px){
				/*aplica o container 640*/ 

				.container{
					width: 640px;
				}

				.notifications h1, .news h1, .borda{
					display: none;
				}

				.news{
					display: none;
					width: calc(100% - 40px);
					margin-left: 20px;
					/*border: solid 1px #000;*/
					}
					.post_news{
						width: calc(100% - 0px);
						margin-bottom: 10px;
						height: 220px;
						}
						.thumb{
							width: 50%;
							height: 220px;
						}

						.sep_post_news{
							width: calc(50%);
							height: 220px;
							padding: 20px;
						}

				.notifications{
					display: block;
					width: calc(100% - 40px);
					margin-left: 20px;
					/*border: solid 1px #000;*/
					}
					.notif_title{
						width: 200px;
						height: 15px;
						margin-top: 10px;
					}
					.notif_subtitle{
						width: 350px;
					}
			}

			@media only screen and (max-width: 640px){
				/*aplica o container 360*/ 

				.container{
					width: 360px;
				}

				.news{
					width: calc(100% - 0px);
					margin-left: 0px;
					border-radius: 0px;
				}
				.post_news{
					height: 175px;
					}
					.thumb{
						width: 50%;
						height: 175px;
					}

					.sep_post_news{
						height: 175px;
						padding: 5px;
						}
						.post_news h2{
							margin: 6.5px 15px 0px 15px;
							font-size: 18px;
						}
						.post_news h3{
							margin: 0px 15px 15px 15px;
							font-size: 12px;
						}
						
						.post_news p{ 
							display: block;
							width: calc(100% - 40px);
							min-height: 95px;
							max-height: 95px;
							padding-bottom: 6px;
							margin: 6.5px 15px 5px 15px;
							text-align: justify;
							font-family: segoe ui;
							font-size: 10px;
						}
				.notif_title{
					width: 100px;
					height: 15px;
					margin-top: 10px;
				}
				.notif_subtitle{
					width: 200px;
				}
			}
		</style>

		<ul id="mn_home_mobile">
			<style type="text/css">
				#mn_home_mobile{display: none;}

				@media only screen and (max-width: 1024px){
					#mn_home_mobile{
						display: block;
						width: 100%;
						height: 50px;
						margin-bottom: 15px;
						/*border: solid #000 0.01px;*/
						}
						#mn_home_mobile li{
							display: block;
							float: left;
							margin: 7px 0px 7px 20px;
							list-style: none;
							border-radius: 30px;
							background-color: rgba(0, 0, 0, 0.05);
						}
						#mn_home_mobile li a{
							display: block;
							color: #fff;
							width: 125px;
							height: 30px;
							text-decoration: none;
							font-family: segoe ui;
							font-size: 16px;
							text-align: center;
							margin-top: 4px;
						}
				}
				@media only screen and (max-width: 640px){
					#mn_home_mobile li{margin: 7px 0px 7px 20px;}
				}


			</style>

			<li style="background-color:#142748;"><a href="?viewHome=news" id="btn_news">Notícias</a></li>
			<li><a style="color: #142748;" href="?viewHome=notify" id="btn_notify">Notificações</a></li>
		</ul>

		<div class="news">
			<h1>Notícias</h1>
			<div class="borda"></div>
			
			<ul>
				<li class="post_news">
					<img class="thumb" src="https://th.bing.com/th/id/R.dcb3a2f37a734b353d8f5f310aadfc75?rik=acfvmdZCVxAMAQ&pid=ImgRaw&r=0">
					<div class="sep_post_news">
						<h2>Titulo</h2>
						<h3>Subtitulo</h3>

						<p>
							Texto Texto Texto Texto Texto Texto Texto Texto Texto Texto Texto Texto Texto Texto Texto Texto Texto 
							Texto Texto Texto Texto Texto 
						</p>
					</div>
				</li>

				<li class="post_news">
					<img class="thumb" src="https://th.bing.com/th/id/R.dcb3a2f37a734b353d8f5f310aadfc75?rik=acfvmdZCVxAMAQ&pid=ImgRaw&r=0">
					<div class="sep_post_news">
						<h2>Titulo</h2>
						<h3>Subtitulo</h3>

						<p>
							Texto Texto Texto Texto Texto Texto Texto Texto Texto Texto Texto Texto Texto Texto Texto Texto Texto 
							Texto Texto Texto Texto Texto   
						</p>
					</div>
				</li>

				<li class="post_news">
					<img class="thumb" src="https://th.bing.com/th/id/R.dcb3a2f37a734b353d8f5f310aadfc75?rik=acfvmdZCVxAMAQ&pid=ImgRaw&r=0">
					<div class="sep_post_news">
						<h2>Titulo</h2>
						<h3>Subtitulo</h3>

						<p>
							Texto Texto Texto Texto Texto Texto Texto Texto Texto Texto Texto Texto Texto Texto Texto Texto Texto 
							Texto Texto Texto Texto Texto 
						</p>
					</div>
				</li>

				<li class="post_news">
					<img class="thumb" src="https://th.bing.com/th/id/R.dcb3a2f37a734b353d8f5f310aadfc75?rik=acfvmdZCVxAMAQ&pid=ImgRaw&r=0">
					<div class="sep_post_news">
						<h2>Titulo</h2>
						<h3>Subtitulo</h3>

						<p>
							Texto Texto Texto Texto Texto Texto Texto Texto Texto Texto Texto Texto Texto Texto Texto Texto Texto 
							Texto Texto Texto Texto Texto  
						</p>
					</div>
				</li>

				
			</ul>
		</div>

		<div class="notifications">
			<h1>Notíficações</h1>
			<div class="borda"></div>

			<ul>
				<li class="post_notif">
					<img src="data:image/jpeg;base64,/9j/4AAQSkZJRgABAQAAAQABAAD/2wCEAAkGBwgHBwcHBw0NBwcHCA0HBwcHDQ8ICQcNFREWIhURExUYHSggGBolJx8VITEhJSkrLi4uFx8zODMsNygtLisBCgoKBQUFDgUFDisZExkrKysrKysrKysrKysrKysrKysrKysrKysrKysrKysrKysrKysrKysrKysrKysrKysrK//AABEIAOEA4QMBIgACEQEDEQH/xAAXAAEBAQEAAAAAAAAAAAAAAAAAAQcD/8QAGRABAQEBAQEAAAAAAAAAAAAAAAERQTFh/8QAFAEBAAAAAAAAAAAAAAAAAAAAAP/EABQRAQAAAAAAAAAAAAAAAAAAAAD/2gAMAwEAAhEDEQA/ANP2m1ADau1ADTaAGm0ANptADTQA02gBptADaaAGm0ANNADTQA00ANNoAbfoAFAAAAAAAAAAAAAAAAAAAAAAAAAAAAAACgAAAAAAAAAAAAAAAAAAAAAAAAAAAAFCgAAAAAAAAAAAAAAAAAAAAAAAAAAAAF6FAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAoAAAAAAAAAAAAAAAAAAAAAAAAAAAABQoAAAAAAAAAAAAAAAAAAAAAAAAAAAABfQoAAAAAAAAAAAAAAAAAAAAAAAAAAAAAF6AAAAAAAAAAAAAAAAAAAAAAAAAAAAAXoAAAAAAAAAAAAAAAAAAAAAAAAAAAAAF6FAAAAAAAAAAAAAAAAAAAAAAAAAAAAAKFAAAAAAAAAAAAAAAAAAAAAAAAAAAAAKAAAAAAAAAAAAAAAAAAAAAAAAAAAAABehegAAAAAAAAAAAAAAAAAAAAAAAAAAAAOl9AAAAAAAAAAAAAAAAAAAAAAAAAAAAAB/9k=">
					<div class="notif_title"></div>
					<div class="notif_subtitle"></div>
				</li>
				<li class="post_notif">
					<img src="data:image/jpeg;base64,/9j/4AAQSkZJRgABAQAAAQABAAD/2wCEAAkGBwgHBwcHBw0NBwcHCA0HBwcHDQ8ICQcNFREWIhURExUYHSggGBolJx8VITEhJSkrLi4uFx8zODMsNygtLisBCgoKBQUFDgUFDisZExkrKysrKysrKysrKysrKysrKysrKysrKysrKysrKysrKysrKysrKysrKysrKysrKysrK//AABEIAOEA4QMBIgACEQEDEQH/xAAXAAEBAQEAAAAAAAAAAAAAAAAAAQcD/8QAGRABAQEBAQEAAAAAAAAAAAAAAAERQTFh/8QAFAEBAAAAAAAAAAAAAAAAAAAAAP/EABQRAQAAAAAAAAAAAAAAAAAAAAD/2gAMAwEAAhEDEQA/ANP2m1ADau1ADTaAGm0ANptADTQA02gBptADaaAGm0ANNADTQA00ANNoAbfoAFAAAAAAAAAAAAAAAAAAAAAAAAAAAAAACgAAAAAAAAAAAAAAAAAAAAAAAAAAAAFCgAAAAAAAAAAAAAAAAAAAAAAAAAAAAF6FAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAoAAAAAAAAAAAAAAAAAAAAAAAAAAAABQoAAAAAAAAAAAAAAAAAAAAAAAAAAAABfQoAAAAAAAAAAAAAAAAAAAAAAAAAAAAAF6AAAAAAAAAAAAAAAAAAAAAAAAAAAAAXoAAAAAAAAAAAAAAAAAAAAAAAAAAAAAF6FAAAAAAAAAAAAAAAAAAAAAAAAAAAAAKFAAAAAAAAAAAAAAAAAAAAAAAAAAAAAKAAAAAAAAAAAAAAAAAAAAAAAAAAAAABehegAAAAAAAAAAAAAAAAAAAAAAAAAAAAOl9AAAAAAAAAAAAAAAAAAAAAAAAAAAAAB/9k=">
					<div class="notif_title"></div>
					<div class="notif_subtitle"></div>
				</li>
				<li class="post_notif">
					<img src="data:image/jpeg;base64,/9j/4AAQSkZJRgABAQAAAQABAAD/2wCEAAkGBwgHBwcHBw0NBwcHCA0HBwcHDQ8ICQcNFREWIhURExUYHSggGBolJx8VITEhJSkrLi4uFx8zODMsNygtLisBCgoKBQUFDgUFDisZExkrKysrKysrKysrKysrKysrKysrKysrKysrKysrKysrKysrKysrKysrKysrKysrKysrK//AABEIAOEA4QMBIgACEQEDEQH/xAAXAAEBAQEAAAAAAAAAAAAAAAAAAQcD/8QAGRABAQEBAQEAAAAAAAAAAAAAAAERQTFh/8QAFAEBAAAAAAAAAAAAAAAAAAAAAP/EABQRAQAAAAAAAAAAAAAAAAAAAAD/2gAMAwEAAhEDEQA/ANP2m1ADau1ADTaAGm0ANptADTQA02gBptADaaAGm0ANNADTQA00ANNoAbfoAFAAAAAAAAAAAAAAAAAAAAAAAAAAAAAACgAAAAAAAAAAAAAAAAAAAAAAAAAAAAFCgAAAAAAAAAAAAAAAAAAAAAAAAAAAAF6FAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAoAAAAAAAAAAAAAAAAAAAAAAAAAAAABQoAAAAAAAAAAAAAAAAAAAAAAAAAAAABfQoAAAAAAAAAAAAAAAAAAAAAAAAAAAAAF6AAAAAAAAAAAAAAAAAAAAAAAAAAAAAXoAAAAAAAAAAAAAAAAAAAAAAAAAAAAAF6FAAAAAAAAAAAAAAAAAAAAAAAAAAAAAKFAAAAAAAAAAAAAAAAAAAAAAAAAAAAAKAAAAAAAAAAAAAAAAAAAAAAAAAAAAABehegAAAAAAAAAAAAAAAAAAAAAAAAAAAAOl9AAAAAAAAAAAAAAAAAAAAAAAAAAAAAB/9k=">
					<div class="notif_title"></div>
					<div class="notif_subtitle"></div>
				</li>
				<li class="post_notif">
					<img src="data:image/jpeg;base64,/9j/4AAQSkZJRgABAQAAAQABAAD/2wCEAAkGBwgHBwcHBw0NBwcHCA0HBwcHDQ8ICQcNFREWIhURExUYHSggGBolJx8VITEhJSkrLi4uFx8zODMsNygtLisBCgoKBQUFDgUFDisZExkrKysrKysrKysrKysrKysrKysrKysrKysrKysrKysrKysrKysrKysrKysrKysrKysrK//AABEIAOEA4QMBIgACEQEDEQH/xAAXAAEBAQEAAAAAAAAAAAAAAAAAAQcD/8QAGRABAQEBAQEAAAAAAAAAAAAAAAERQTFh/8QAFAEBAAAAAAAAAAAAAAAAAAAAAP/EABQRAQAAAAAAAAAAAAAAAAAAAAD/2gAMAwEAAhEDEQA/ANP2m1ADau1ADTaAGm0ANptADTQA02gBptADaaAGm0ANNADTQA00ANNoAbfoAFAAAAAAAAAAAAAAAAAAAAAAAAAAAAAACgAAAAAAAAAAAAAAAAAAAAAAAAAAAAFCgAAAAAAAAAAAAAAAAAAAAAAAAAAAAF6FAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAoAAAAAAAAAAAAAAAAAAAAAAAAAAAABQoAAAAAAAAAAAAAAAAAAAAAAAAAAAABfQoAAAAAAAAAAAAAAAAAAAAAAAAAAAAAF6AAAAAAAAAAAAAAAAAAAAAAAAAAAAAXoAAAAAAAAAAAAAAAAAAAAAAAAAAAAAF6FAAAAAAAAAAAAAAAAAAAAAAAAAAAAAKFAAAAAAAAAAAAAAAAAAAAAAAAAAAAAKAAAAAAAAAAAAAAAAAAAAAAAAAAAAABehegAAAAAAAAAAAAAAAAAAAAAAAAAAAAOl9AAAAAAAAAAAAAAAAAAAAAAAAAAAAAB/9k=">
					<div class="notif_title"></div>
					<div class="notif_subtitle"></div>
				</li>
				<li class="post_notif">
					<img src="data:image/jpeg;base64,/9j/4AAQSkZJRgABAQAAAQABAAD/2wCEAAkGBwgHBwcHBw0NBwcHCA0HBwcHDQ8ICQcNFREWIhURExUYHSggGBolJx8VITEhJSkrLi4uFx8zODMsNygtLisBCgoKBQUFDgUFDisZExkrKysrKysrKysrKysrKysrKysrKysrKysrKysrKysrKysrKysrKysrKysrKysrKysrK//AABEIAOEA4QMBIgACEQEDEQH/xAAXAAEBAQEAAAAAAAAAAAAAAAAAAQcD/8QAGRABAQEBAQEAAAAAAAAAAAAAAAERQTFh/8QAFAEBAAAAAAAAAAAAAAAAAAAAAP/EABQRAQAAAAAAAAAAAAAAAAAAAAD/2gAMAwEAAhEDEQA/ANP2m1ADau1ADTaAGm0ANptADTQA02gBptADaaAGm0ANNADTQA00ANNoAbfoAFAAAAAAAAAAAAAAAAAAAAAAAAAAAAAACgAAAAAAAAAAAAAAAAAAAAAAAAAAAAFCgAAAAAAAAAAAAAAAAAAAAAAAAAAAAF6FAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAoAAAAAAAAAAAAAAAAAAAAAAAAAAAABQoAAAAAAAAAAAAAAAAAAAAAAAAAAAABfQoAAAAAAAAAAAAAAAAAAAAAAAAAAAAAF6AAAAAAAAAAAAAAAAAAAAAAAAAAAAAXoAAAAAAAAAAAAAAAAAAAAAAAAAAAAAF6FAAAAAAAAAAAAAAAAAAAAAAAAAAAAAKFAAAAAAAAAAAAAAAAAAAAAAAAAAAAAKAAAAAAAAAAAAAAAAAAAAAAAAAAAAABehegAAAAAAAAAAAAAAAAAAAAAAAAAAAAOl9AAAAAAAAAAAAAAAAAAAAAAAAAAAAAB/9k=">
					<div class="notif_title"></div>
					<div class="notif_subtitle"></div>
				</li>
				<li class="post_notif">
					<img src="data:image/jpeg;base64,/9j/4AAQSkZJRgABAQAAAQABAAD/2wCEAAkGBwgHBwcHBw0NBwcHCA0HBwcHDQ8ICQcNFREWIhURExUYHSggGBolJx8VITEhJSkrLi4uFx8zODMsNygtLisBCgoKBQUFDgUFDisZExkrKysrKysrKysrKysrKysrKysrKysrKysrKysrKysrKysrKysrKysrKysrKysrKysrK//AABEIAOEA4QMBIgACEQEDEQH/xAAXAAEBAQEAAAAAAAAAAAAAAAAAAQcD/8QAGRABAQEBAQEAAAAAAAAAAAAAAAERQTFh/8QAFAEBAAAAAAAAAAAAAAAAAAAAAP/EABQRAQAAAAAAAAAAAAAAAAAAAAD/2gAMAwEAAhEDEQA/ANP2m1ADau1ADTaAGm0ANptADTQA02gBptADaaAGm0ANNADTQA00ANNoAbfoAFAAAAAAAAAAAAAAAAAAAAAAAAAAAAAACgAAAAAAAAAAAAAAAAAAAAAAAAAAAAFCgAAAAAAAAAAAAAAAAAAAAAAAAAAAAF6FAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAoAAAAAAAAAAAAAAAAAAAAAAAAAAAABQoAAAAAAAAAAAAAAAAAAAAAAAAAAAABfQoAAAAAAAAAAAAAAAAAAAAAAAAAAAAAF6AAAAAAAAAAAAAAAAAAAAAAAAAAAAAXoAAAAAAAAAAAAAAAAAAAAAAAAAAAAAF6FAAAAAAAAAAAAAAAAAAAAAAAAAAAAAKFAAAAAAAAAAAAAAAAAAAAAAAAAAAAAKAAAAAAAAAAAAAAAAAAAAAAAAAAAAABehegAAAAAAAAAAAAAAAAAAAAAAAAAAAAOl9AAAAAAAAAAAAAAAAAAAAAAAAAAAAAB/9k=">
					<div class="notif_title"></div>
					<div class="notif_subtitle"></div>
				</li>
			</ul>
		</div>
	</div>

	
	
    <!-- //CENTER -->

</body>
</html>