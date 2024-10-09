<!DOCTYPE html>
<html lang="en">
<head>
 <!---->
 <?php
$ruta_raiz = ".";

include_once "$ruta_raiz/config_title.php";
 ?>
  <title>.::<?=$institucionSigla?>::.</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  
  
  <script src="jsindex/jquery.min.js"></script>
  <script src="jsindex/bootstrap.min.js"></script>
  <style>
    /* Add a gray background color and some padding to the footer */
    footer {
      background-color: #f2f2f2;
      padding: 25px;
    }

    .carousel-inner img {
      width: 100%; /* Set width to 100% */
      min-height: 200px;
    }

    /* Hide the carousel text when the screen is less than 600 pixels wide */
    @media (max-width: 600px) {
      .carousel-caption {
        display: none; 
      }
    }
  </style>
  <script type="text/JavaScript">
            function irLogin(admin) {
                try{
                var x = screen.width - 20;
                var y = screen.height - 80;
                var param = "";
                if (admin == 1) param = "?txt_administrador=1";
                ventana=window.open("./login.php"+param,"QUIPUX","toolbar=no,directories=no,menubar=no,status=no,scrollbars=yes, width="+x+", height="+y);
                ventana.focus();
                ventana.moveTo(10, 40);
                }
                catch(e){
                    
                }
            }
        </script>
</head>
<body>

<nav class="navbar navbar-inverse">
  <div class="container-fluid">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>                        
      </button>
     
      
    </div>
    <div class="collapse navbar-collapse" id="myNavbar">
      <ul class="nav navbar-nav">
      
        <li class="active"> <div style="position:absolute; margin-top:-15px" >
      <a class="navbar-brand" href="#"><img src='imagenes/logo_ing2.png' width='120' height='45'></a>
      </div>
     
      </li>
      
       
        
      </ul>

      <div class="Preview_row__3Fkye row Preview_noSideMargin__2I-_n" style="min-height:211px;width:100%">
    <div class="Preview_componentWrapper__2i4QI" style="width:100%; min-height:211px;">
        <div class="Preview_block__16Zmu" style="background-color: rgb(42, 102, 161); min-height: 211px;">
            <div class="Preview_column__1KeVx col" style="width:100%; margin:0 auto;">
                <div class="Preview_row__3Fkye row" style="min-height:184px; width:100%">
                    <div class="Preview_column__1KeVx col" style="float:left; width:161px;">
                        <div class="Preview_componentWrapper__2i4QI" style="width:132px; min-height:139px; margin:16px 0 0 29px;">
                            <img loading="lazy" src="/images/logolisto.jpg" alt="Logo" style="width:132px; height:139px;">
                        </div>
                    </div>
                    <div class="Preview_column__1KeVx col" style="float:left; width:787px;">
                        <div class="Preview_componentWrapper__2i4QI" style="min-height:152px; margin-top:32px; margin-left:24px;">
                            <div style="text-align:center;">
                                <h2 style="font-weight: bold; font-family: Titillium Web; text-shadow: 0px 1px 0px rgba(29,29,29,1); font-size: 28px;">
                                    <a class="link3" href="/">INSTITUTO SUPERIOR TECNOLÓGICO PARTICULAR</a>
                                </h2>
                                <h2 style="font-weight: bold; font-family: Titillium Web; text-shadow: 0px 1px 0px rgba(29,29,29,1); font-size: 36px;">
                                    <a class="link3" href="/">“BOLÍVAR MADERO VARGAS”</a>
                                </h2>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<ul class="nav navbar-nav navbar-right">
    <li>
        <a href="javascript: void(0);" onclick="irLogin(1);" style="color: none;">
            <span class="glyphicon glyphicon-log-in"></span>
            <font color='white'><b>Ingresar al Sistema</b></font>
        </a>
    </li>
</ul>

    </div>
  </div>
</nav>

<div class="container">
<div class="row">
  <div class="col-sm-8">
    <div id="myCarousel" class="carousel slide" data-ride="carousel">
      <!-- Indicators -->
      <ol class="carousel-indicators">
        <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
        <li data-target="#myCarousel" data-slide-to="1"></li>
      </ol>

      <!-- Wrapper for slides -->
      <div class="carousel-inner" role="listbox">
        <div class="item active">
          <img src="<?=$banner1?>" alt="Image">
          <div class="carousel-caption">
            
            <p><a href=<?=$linkBanner1?>><?=$nombreLinkBanner1?></a></p>
          </div>      
        </div>

        <div class="item">
          <img src="<?=$banner2?>" alt="Image">
          <div class="carousel-caption">
            
          <p><a href=<?=$linkBanner2?>><?=$nombreLinkBanner2?></a></p>
          </div>      
        </div>
      </div>

      <!-- Left and right controls -->
      <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
        <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
      </a>
      <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
        <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
      </a>
    </div>
  </div>
  <div class="col-sm-4">
    <div class="well">
      <p>Some text..</p>
    </div>
    <div class="well">
       <p>Upcoming Events..</p>
    </div>
    <div class="well">
       <p>Visit Our Blog</p>
    </div>
  </div>
</div>
<hr>
</div>

<div class="container text-center">    
	<?php 
	if ($institucionNombre == "institucionNombre" ){
		echo "<font color='red' size='3'>Reemplace el archivo example.config_title.php por config_title.php y configure los nombres de su institución</font>";
	} 
	?>
  <h3><?=$institucionNombre?></h3>
  <br>

  <hr>
</div>

<br>

<footer class="container-fluid text-center">
  <p><?=$footerText?></p>
</footer>

</body>
</html>
