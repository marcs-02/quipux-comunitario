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
  
  <link rel="stylesheet" href="estilos/navbar.css">
  
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

    <div class="Preview_row__3Fkye row Preview_noSideMargin__2I-_n" style="min-height:211px;width:100%">
        <div data-id="1726B602-E1DD-4BCE-8F3E-689133FBEDE1" data-kind="SECTION"
            style="width:100%;min-height:211px;left:auto;margin-top:0;margin-left:0"
            class="Preview_componentWrapper__2i4QI">
            <div id="Header" data-in-template="true" data-id="1726B602-E1DD-4BCE-8F3E-689133FBEDE1" data-kind="Block"
                data-specific-kind="SECTION" data-pin="0" data-stretch="true" class="Preview_block__16Zmu">
                <div class="StripPreview_backgroundComponent__3YmQM"
                    style="background-color: rgb(42, 102, 161); padding-bottom: 27px; min-height: 211px;">
                    <div class="Preview_column__1KeVx col" style="width:100%;margin:0 auto">
                        <div class="Preview_row__3Fkye row" style="min-height:184px;width:100%">
                            <div class="Preview_column__1KeVx col" style="width:161px;float:left">
                                <div data-id="BA2CDFAD-4042-4ECE-89CF-3811EB2058FD" data-kind="IMAGE"
                                    style="width:132px;min-height:139px;margin-top:16px;margin-left:29px"
                                    class="Preview_componentWrapper__2i4QI">
                                    <img loading="lazy" style="display:block;margin:0" src="images/logolisto.jpg"
                                        width="132" height="139">
                                </div>
                            </div>
                            <div class="Preview_column__1KeVx col" style="width:787px;float:left">
                                <div data-id="9B90E271-A64A-43E1-92E7-89CD3660B8B5" data-kind="TEXT"
                                    style="width:763px;min-height:152px;margin-top:32px;margin-left:24px"
                                    class="Preview_componentWrapper__2i4QI">
                                    <h2 style="font-weight: bold; font-family: Titillium Web; font-size: 28px;">
                                        <a href="/"> INSTITUTO SUPERIOR TECNOLÓGICO PARTICULAR</a>
                                    </h2>
                                    <h2 style="font-weight: bold; font-family: Titillium Web; font-size: 36px;">
                                        <a href="/">&nbsp; "BOLÍVAR MADERO VARGAS"</a>
                                    </h2>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
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
