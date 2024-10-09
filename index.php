<!DOCTYPE html>
<html lang="en">
<head>
<?php
    $ruta_raiz = ".";
    include_once "$ruta_raiz/config_title.php";
    ?>
    <title>.::<?=$institucionSigla?>::.</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Enlaces a Bootstrap CSS desde CDN -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    
    <!-- jQuery y Bootstrap JS desde CDN -->
    <script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <style>
        footer {
            background-color: #f2f2f2;
            padding: 25px;
        }
        .carousel-inner img {
            width: 100%;
            min-height: 200px;
        }
        @media (max-width: 600px) {
            .carousel-caption {
                display: none; 
            }
        }
    </style>
    
    <script type="text/javascript">
        function irLogin(admin) {
            try {
                var x = screen.width - 20;
                var y = screen.height - 80;
                var param = "";
                if (admin == 1) param = "?txt_administrador=1";
                ventana = window.open("./login.php" + param, "QUIPUX", "toolbar=no,directories=no,menubar=no,status=no,scrollbars=yes, width=" + x + ", height=" + y);
                ventana.focus();
                ventana.moveTo(10, 40);
              } catch (e) {}
        }
    </script>
</head>
<body>

<nav class="navbar navbar-inverse">