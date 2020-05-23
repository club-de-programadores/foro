@extends(Config::get('chatter.master_file_extend'))
<meta http-equiv="Expires" content="0">
<meta http-equiv="Last-Modified" content="0">
<meta http-equiv="Cache-Control" content="no-cache, mustrevalidate">
<meta http-equiv="Pragma" content="no-cache">
@section(Config::get('chatter.yields.head'))
	<link href="/vendor/devdojo/chatter/assets/css/chatter.css?1.2" media="all" rel="stylesheet">

@stop

@section('content')
<style>
    h1{
border:blue 5px;


    }
body{
text-decoration-color: aliceblue;

    }
.row{
margin-left: 20px;
margin-right: 20px;

  background-color: #fafafa;
  margin: 1rem;
  padding: 1rem;
  border: 2px solid #ccc;
  /* IMPORTANTE */
}
img{
height: 300px;

}


</style>
<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">

  <title>Equipo</title>
</head>
<body>
    <h1 style="text-align: center">Nuestro Equipo</h1>

  <div class="row">
       @foreach ($equipos as $equipo)

    <div class="col-3">
      <div class="card-deck" style="width: 18rem; ">
            <div class="card bg-dark" >
              <img class="card-img-top"  src="{{URL::asset('images/')}}/{{$equipo->foto}}" alt="Card image cap">
              <div class="card-body">
                <h5 class="card-title" style="color: white">{{$equipo->nombre}} - {{$equipo->apellido}}</h5>
                <p class="card-text"style="color: white">{{$equipo->descripcion}}</p>
                <div class="card-footer">
                    <a href="mailto:{{$equipo->email}}">{{$equipo->email}}</a>
                  </div>
              </div>
            </div>
                   </div>
</div>
  @endforeach

  <script>

var img_tag = document.getElementsByName("img")
img_tag.style.with = "350px"
img_tag.style.height = "350px"
  </script>
</body>
</html>











@stop
