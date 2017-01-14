<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>Laravel</title>

       <!-- Latest compiled and minified CSS -->
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
        <link rel="stylesheet" href="path/to/font-awesome/css/font-awesome.min.css">
        <link rel="stylesheet" href="/css/web.css">
        <link rel="stylesheet" href="/css/ctp-pital.css">
	</head>
	<body>
   <!--Header-->
        <header>
            <!--Contenedor de todo el header-->
            <div class="container">
               <!--Indica que se van a dividir las rejillas-->
                <div class="row">
                     <!--xs es para dispositivos pequeños, sm para medianos y lg para grandes-->
                   <div class="col-xs-12 col-sm-6 col-md-8 col-lg-8">
                        <div class="left-widget-wrap left ">
                            <a class="logo" href="index.html" title="Home">
                            <img src= "img/logo.png" class="img-responsive">
                            </a>
                        </div>
                    </div>
                     <!--al estar en un mismo container se deben dividir las 12 columnas entre el contenidoS-->
                    <div class="hidden-xs col-sm-6 col-md-4 col-lg-4 centrar">
	                     
                    <div class="right-widget-wrap right">
                            <ul id="social-area-top">
                            <a href="https://www.facebook.com/CTPdePital" target="_blank">
                                <i class="fa fa-facebook fa-2x"></i></a>
                           		 </li>
                            </ul>     
                        </div>
                    </div>
                </div>
            </div>
        </header>
        <!--Barra de Navegacion-->
        <div class="container">
        <nav class="navbar navbar-default navbar-top">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
                    <span class="sr-only">Cambiar Navegacion</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <!--<a href="index.html" class="navbar-brand">C.T.P PITAL</a>-->  
            </div>
         <!--Barra de Menu-->    
            <div class="collapse navbar-collapse navbar-ex1-collapse">
                <ul class="nav navbar-nav">
                    <li><a class="active" href="nosotros/index.html">INICIO</a></li>
                    <li><a  href="nosotros/index.html">NOSOTROS</a></li>
                   	<li class="dropdown"><a href="#" class="dropdown-toggle" data-toggle="dropdown">SERVICIOS <b class="caret"></b></a>
                        <ul class="dropdown-menu">
                            <li><a href="#">Ventas de animales</a></li>
                            <li><a href="#">Productos comestibles</a></li>
                            <li><a href="#">Ventas de servicios</a></li>
                            <li><a href="#">Otros productos</a></li>
                        </ul>
                    </li>
                    <li class="dropdown"><a href="#" class="dropdown-toggle" data-toggle="dropdown">OFERTA ACADÉMICA<b class="caret">
                    </b></a>
                        <ul class="dropdown-menu">
                            <li><a href="#">Especialidades 2017</a></li>
                            <li><a href="#">Talleres 2017</a></li>
                        </ul>
                    </li>
                </ul>
                    <ul class="nav navbar-nav navbar-right">
                    <li><a href="#">GALERÍA</a></li>
                    <li class="dropdown"><a href="#" class="dropdown-toggle" data-toggle="dropdown">CONTACTO<b class="caret"></b></a>
                        <ul class="dropdown-menu">
                           <li><a href="contacto/index.html">Administración</a></li>
                            <li><a href="#">Docentes</a></li>
                            <li><a href="#">Plan Nacional</a></li>
                            <li><a href="#">Sección Técnica Nocturna</a></li>
                            <li><a href="#">Junta Administrativa</a></li>
                        </ul>
                    </li>
                </ul>
            </div>
          </div>
        </nav>

        <div class="container">
        	@yield('content')
        </div>
	    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
	    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
	    <script src="/js/web.js" type="text/javascript" charset="utf-8" async defer></script>
    </body>
    </html>