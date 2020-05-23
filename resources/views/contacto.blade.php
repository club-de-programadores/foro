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
    border-radius: 25px;

}
textarea{
    border-radius: 25px;


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

</div>

<br>
<div>
    <i class="fa fa-envelope"></i>
    <p><a href="mailto:cub.de.programadores@gmail.com">cub.de.programadores@gmail.com</a></p>
    </div>
    <br>
<label for="correo">Correo Electronico</label>
<input id="email" name="email" placeholder="Correo" type="text">
<br>
<label for="Nombre">Nombre</label>
<input id="name" name="name" placeholder="Nombre" type="text">
<br>
<textarea name="textarea" id="textarea"  cols="30" rows="10"></textarea>
<button type="submit" value="Enviar" class="btn btn-success" >Enviar</button>
</body>
</html>











@stop
