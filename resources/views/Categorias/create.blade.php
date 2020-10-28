@extends('layout.general')
@section('breadcum')
<li class="active">Cuenta</li>    
@endsection
@section('menu')
<ul class="nav menu">
    <li class="active">
        <a href="#"><em class="fa fa-dashboard">&nbsp;</em>Sucesos</a>
    </li>
    <li><a href="#"><em class="fa fa-calendar">&nbsp;</em>Propuestas</a></li>
    <li><a href="#"><em class="fa fa-bar-chart">&nbsp;</em>Preguntas</a></li>
    <li><a href="#"><em class="fa fa-toggle-off">&nbsp;</em>Estado de cuenta</a></li>
    <li><a href="#"><em class="fa fa-power-off">&nbsp;</em> Logout</a></li>
</ul>
@endsection
@section('content')  
</style>
</head>
<body>
<div class="signup-form">
    <form action="/examples/actions/confirmation.php" method="post">
		<h2>CREAR UNA NUEVA CATEGORIA</h2>
     
        <div class="form-group">
        	<input type="Nombre de la sección:" class="form-control" name="Nombre de la sección" placeholder="Nombre de la sección" required="required">
        </div>
		<div class="form-group">
     
		<div class="form-group">
            <input type="Discripcion de la sección " class="form-control" name="Discripcion de la sección " placeholder="Discripcion de la sección " required="required">
        </div>     
   
       
		<div class="form-group">
            <button type="submit" class="btn btn-success btn-lg btn-block">Aceptar</button>
        </div>
    </form>
	
</body>
@endsection