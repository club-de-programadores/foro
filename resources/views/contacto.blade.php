@extends(Config::get('chatter.master_file_extend'))
<meta http-equiv="Expires" content="0">
<meta http-equiv="Last-Modified" content="0">
<meta http-equiv="Cache-Control" content="no-cache, mustrevalidate">
<meta http-equiv="Pragma" content="no-cache">
@section(Config::get('chatter.yields.head'))
	<link href="/vendor/devdojo/chatter/assets/css/chatter.css?1.2" media="all" rel="stylesheet">

@stop

@section('content')

<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">

  <style>
body{
text-align: center;

}
input{
    border-radius: 25px ;
    border-style: solid;
  border-color: black;
    text-align: center;


}
textarea{
    border-radius: 10px;
    width: 500px;
    border-style: solid;
  border-color: black;

}
.container{
  justify-content: center;
}
.margin{

    margin: 5px;
}
  </style>
  <title>Contactos</title>
</head>
<body>
<h1>Contactos</h1>
<br>
<div>
    <i class="fa fa-whatsapp"></i>
    <a href="https://chat.whatsapp.com/JqmKhNypRY0EllgYo6YHM5">WhatsApp</a>


<br>
    <i class="fa fa-envelope"></i>
    <p><a href="mailto:cub.de.programadores@gmail.com">cub.de.programadores@gmail.com</a></p>
    </div>
<br>

<form action="{{ route('contacto.store') }}" method="POST">
        @csrf
            <div class="container" >
    <div style="float: right" >

             <label for="correo">Correo Electronico</label>
<input  id="email" name="email" placeholder="Correo" type="text">
<br>
    </div>
<div style="float: left" >
    <label for="Nombre">Nombre</label>
<input id="name" name="name" placeholder="Nombre" type="text">
<br></div>

            </div>
            <div style="float: none" ><textarea class="" name="comentario" id="comentario" placeholder="Tu mensaje" cols="30" rows="10"></textarea>
</div>
<div class="margin">
    <button style="float:right " type="submit" value="Enviar" class="btn btn-success" >Enviar</button>
</div>

</form>


</body>
</html>











@stop
