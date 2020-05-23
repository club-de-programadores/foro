<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
	
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>{{ config('title', 'FORUMS CLUB PROGRAMADORES') }}</title>
    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}"></script>
    @yield('js')
	<!-- Fonts -->


    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<style>

}
.main {
	max-height: 550px;;
	background-color: #292c2f;
	color: white;
	font-size: 38pt;
	text-align: center;
	line-height: 550px;
}
footer{
	bottom: 0;
}
.footer-distributed{
	background-color: #292c2f;
	box-shadow: 0 1px 1px 0 rgba(0, 0, 0, 0.12);
	box-sizing: border-box;
	width: 100%;
	text-align: left;
	font: bold 16px sans-serif;

	padding: 55px 50px;
	margin-top: 80px;
}

.footer-distributed .footer-left,
.footer-distributed .footer-center,
.footer-distributed .footer-right{
	display: inline-block;
	vertical-align: top;
}

.footer-distributed .footer-left{
	width: 40%;
}

.footer-distributed h3{
	color:  #ffffff;
	font: normal 36px 'Cookie', cursive;
	margin: 0;
}

.footer-distributed h3 span{
	color:  #5383d3;
}


.footer-distributed .footer-links{
	color:  #ffffff;
	margin: 20px 0 12px;
	padding: 0;
}

.footer-distributed .footer-links a{
	display:inline-block;
	line-height: 1.8;
	text-decoration: none;
	color:  inherit;
}

.footer-distributed .footer-company-name{
	color:  #8f9296;
	font-size: 14px;
	font-weight: normal;
	margin: 0;
}


.footer-distributed .footer-center{
	width: 35%;
}

.footer-distributed .footer-center i{
	background-color:  #33383b;
	color: #ffffff;
	font-size: 25px;
	width: 38px;
	height: 38px;
	border-radius: 50%;
	text-align: center;
	line-height: 42px;
	margin: 10px 15px;
	vertical-align: middle;
}

.footer-distributed .footer-center i.fa-envelope{
	font-size: 17px;
	line-height: 38px;
}

.footer-distributed .footer-center p{
	display: inline-block;
	color: #ffffff;
	vertical-align: middle;
	margin:0;
}

.footer-distributed .footer-center p span{
	display:block;
	font-weight: normal;
	font-size:14px;
	line-height:2;
}

.footer-distributed .footer-center p a{
	color:  #5383d3;
	text-decoration: none;;
}

.footer-distributed .footer-right{
	width: 20%;
}

.footer-distributed .footer-company-about{
	line-height: 20px;
	color:  #92999f;
	font-size: 13px;
	font-weight: normal;
	margin: 0;
}

.footer-distributed .footer-company-about span{
	display: block;
	color:  #ffffff;
	font-size: 14px;
	font-weight: bold;
	margin-bottom: 20px;
}

.footer-distributed .footer-icons{
	margin-top: 25px;
}

.footer-distributed .footer-icons a{
	display: inline-block;
	cursor: pointer;
	background-color:  #33383b;
	border-radius: 2px;

	font-size: 40px;
	color: #ffffff;
	text-align: center;
	line-height: 35px;

	margin-right: 3px;
	margin-bottom: 5px;
}


@media (max-width: 880px) {

	.footer-distributed{
		font: bold 14px sans-serif;

	}

	.footer-distributed .footer-left,
	.footer-distributed .footer-center,
	.footer-distributed .footer-right{
		display: block;
		width: 100%;
		margin-bottom: 40px;
		text-align: center;
	}

	.footer-distributed .footer-center i{
		margin-left: 0;
	}
	.main {
		line-height: normal;
		font-size: auto;
	}

}

</style>
<!-- Enlazamos el código base -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
<script src="https://www.jqueryscript.net/demo/jQuery-Plugin-To-Show-A-Popup-Only-Once-Per-Visitor-First-Visit-Popup/jquery.firstVisitPopup.js"></script>
<!-- /enlazamos el código base -->


<!-- Estilo del Modal Popup -->
<style>

#container {
  max-width: 1000px;
  margin: 0 auto;
  background: #EEE;
}

#fvpp-blackout {
  display: none;
  z-index: 499;
  position: fixed;
  width: 100%;
  height: 100%;
  top: 0;
  left: 0;
  background: #000;
  opacity: 0.5;
}

#my-welcome-message {
  display: none;
  z-index: 500;
  position: fixed;
  width: 36%;
  left: 30%;
  top: 20%;
  padding: 20px 2%;
  font-family: Calibri, Arial, sans-serif;
  background: #FFF;
}

#fvpp-close {
  position: absolute;
  top: 10px;
  right: 20px;
  cursor: pointer;
  padding: 2px 16px;
  background-color: #292192;
  color: white;
}

#fvpp-dialog h2 {
  font-size: 2em;
  margin: 0;
}

#fvpp-dialog p { margin: 0; }
</style>
<!-- /modal popup -->

<!-- El modal -->
<div id="my-welcome-message" style="display: none;">
          <h2><i class="fa fa-user-md" aria-hidden="true"></i>
			COVID-19</h2>
          <p>
El mundo atraviesa momentos difíciles. <br> Y para enfrentarlos, nada mejor que el optimismo <br>
✓ permanecer en casa mientras se está enfermo, <br>
✓ taparse la boca y la nariz con el codo doblado o con un pañuelo de papel al toser o estornudar. Hay que deshacerse de los pañuelos de papel usados inmediatamente, <br>
✓ lavarse las manos con agua y jabón frecuentemente <br>
 ✓ limpiar frecuentemente superficies y objetos que se hayan tocado.

		  </p>
        <a id="fvpp-close">✖</a></div>
</div>
<!-- /el modal -->
    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
@yield('css')
</head>
<body >
    <div id="app">
        <nav class="navbar navbar-expand-md navbar-text-white bg-secondary">
            <div class="container">

                <a class="navbar-brand " href="{{ url('/') }}">
                    <div style="color: white" class="btn btn-outline-primary"><strong>{{ config('title', 'FORUMS CLUB PROGRAMADORES') }}</strong></div>
                </a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <!-- Left Side Of Navbar -->
                    <ul class="navbar-nav mr-auto">
                    </ul>
                    <nav class="navbar navbar-light float-right">

                      </nav>
                    <!-- Right Side Of Navbar -->
                    <ul class="navbar-nav ml-auto">
                        <!-- Authentication Links -->
                        @guest
                            <li class="nav-item">
                                <a style="margin-right: 5px" class="nav-link btn btn-outline-dark" href="{{ route('login') }}">{{ __('Inicia sesión') }}</a>
                            </li>
                            @if (Route::has('register'))
                                <li class="nav-item">
                                    <a class="nav-link btn btn-outline-dark" href="{{ route('register') }}">{{ __('Registrate') }}</a>
                                </li>
                            @endif
                        @else
                            <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    {{ Auth::user()->name }} <span class="caret"></span>
                                </a>

                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                        @csrf
                                    </form>
                                    <div> <a href="http://127.0.0.1/test/">Editar perfil</a> </div>
                                </div>
                            </li>
                        @endguest
                    </ul>
                </div>
            </div>
        </nav>

        <main class="py-4">
            @yield('content')
        </main>

    </div>
    <br><br><br><br>
    <footer>
		<footer class="footer-distributed">

		<div class="footer-left">

		<h3>Club de Programadores</h3>

		<p class="footer-links">
		<a href="https://chat.whatsapp.com/JqmKhNypRY0EllgYo6YHM5">WhatsApp</a>
	    ·
        <a href="{{Url('equipo')}}">Nuestro equipo</a>
	·
		<a href="#">Contact</a>
		</p>

		<p class="footer-company-name">Club de programadores &copy; 2020</p>
		</div>

		<div class="footer-center">


		<div>
            <i class="fa fa-whatsapp"></i>
            <a href="https://chat.whatsapp.com/JqmKhNypRY0EllgYo6YHM5">WhatsApp</a>

		</div>

		<div>
		<i class="fa fa-envelope"></i>
		<p><a href="mailto:cub.de.programadores@gmail.com">cub.de.programadores@gmail.com</a></p>
		</div>

		</div>

		<div class="footer-right">

		<p class="footer-company-about">
        <span>Donde ayudar es nuetro lema</span>

		</p>

		<div class="footer-icons">
		<a href="https://github.com/club-de-programadores"><i class="fa fa-github"></i></a>
		</div>

		</div>

		</footer>



      </footer>
      <script language="JavaScript" type="text/javascript">
/* Leer la cookie */
$(function () {
				$('#my-welcome-message').firstVisitPopup({
					cookieName : 'homepage',
					showAgainSelector: '#show-message'
				});
			});


  var _gaq = _gaq || [];
  _gaq.push(['_setAccount', 'UA-36251023-1']);
  _gaq.push(['_setDomainName', 'jqueryscript.net']);
  _gaq.push(['_trackPageview']);

  (function() {
    var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
    ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
    var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
  })();

/* /leer la cookie */
        </script>

    </body>
</html>
