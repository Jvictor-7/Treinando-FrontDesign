<!-- /SIDEBAR/ -->
<div id="sidebar" onmouseleave="mn_sidebar_close()">

    <script type="text/javascript">
        function mn_sidebar() {
          document.getElementById("sidebar").style.display = "block";
        }
        function mn_sidebar_close(){
            document.getElementById("sidebar").style.display = "none";
        }
    </script>

    <style type="text/css">
        #sidebar{
            display: none;
            position: fixed;
            width: 300px;
            height: 100vh;
            background-color: #142748;
            box-shadow: 1px 1px 0.3em #111;
        }

        #ban_perfil{
            display: block;
            width: calc(100% - 70px);
            height: 65px;
            margin: 35px;
            /*border: solid 1px #fff;*/
            }

            #ban_perfil img{
                display: block;
                float: left;
                width: 65px;
                height: 65px;
                border-radius: 50px;
            }

            #it_perfil_sidebar{
                display: block;
                float: left;
                margin-left: 15px;
                width: calc(100% - 80px);
                /*border: solid 1px #fff;*/
            }

            #it_perfil_sidebar h1, #it_perfil_sidebar h2{
                font-family: segoe ui;
                font-weight: normal;
            }

            #it_perfil_sidebar h1{
                margin-top: 15px;
                color: #fff;
                font-size: 14px;
            }
            #it_perfil_sidebar h2{
                margin-top: -10px;
                font-size: 12px;
                color: rgba(255, 255, 255, 0.65);
            }
    
        #mn_pri_sidebar{
            display: block;
            width: calc(100% - 70px);
            margin: 35px;
            /*border: solid 1px #fff;*/
        }
        #mn_pri_sidebar li{
            list-style-image: url('../img/dot.png');
            margin-bottom: 10px;
        }

        #mn_pri_sidebar li a{
            display: block;
            text-decoration: none;
            font-size: 20px;
            font-family: segoe ui;
            color: #fff;
        }
    </style>

    <div id="ban_perfil">
        <img src="http://localhost/New_Design/img/perfil.jpeg">
        <div id="it_perfil_sidebar">
            <h1>Bem vindo, Elon Musk</h1>
            <h2>Monitor</h2>
        </div>
    </div>

    <ul id="mn_pri_sidebar">
        <li><a href="home.php">Home</a></li>
        <li><a href="cadastro.php">Cadastro</a></li>
        <li><a href="comunicacao.php">Comunicação</a></li>
        <li><a href="monitoria.php">Monitoria</a></li>
    </ul>

    <button onclick="myFunction('Demo1')" class="w3-button w3-block w3-black w3-left-align">button</button>

    <div id="Demo1" class="w3-hide">
        <a class="w3-button w3-block w3-left-align" href="#">Link 1</a>
        <a class="w3-button w3-block w3-left-align" href="#">Link 2</a>
        <a class="w3-button w3-block w3-left-align" href="#">Link 3</a>

        <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
        <script>
        function myFunction(id) {
          var x = document.getElementById(id);
          if (x.className.indexOf("w3-show") == -1) {
            x.className += " w3-show";
          } else { 
            x.className = x.className.replace(" w3-show", "");
          }
        }
        </script>
    </div>
    

</div>
<!-- //MENU PRINCIPAL -->