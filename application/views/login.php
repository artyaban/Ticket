
<?php $this->load->helper('url');?>
<!DOCTYPE html>
<html>
<head>

<meta charset="utf-8">
<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">

<!-- Optional theme -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap-theme.min.css" integrity="sha384-fLW2N01lMqjakBkx3l/M9EahuwpSfeNvV63J5ezn3uZzapT0u7EYsXMjQV+0En5r" crossorigin="anonymous">

<!-- Latest compiled and minified JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script>
	<title>Soporte Tecnico</title>
</head>
<body>



<header>
<div class="col-md-12" style="text-align:center; background-color:#fff;box-shadow: 3px 3px 3px #aaa;">
<p> <br></p>
<img src="<? echo base_url();?>images/logo.png">
<h4 style="color:#052467;"><em><u>"Piensa en calidad , Piensa MEXQ"</u></em></h4>
<p> <br></p>




</div>
</header>
<h2><a href="<?echo base_url(); ?>index.php/Welcome/agregar">Crear Usuario</a></h2>
<div class="col-md-12">
<center><h1>INICIAR SESIÓN</h1>
<h3>Por favor ingresa tus datos para ingresar o crea una cuenta nueva<hr></h3>


<div class="col-md-2"><br></div>
<div class="col-md-6" >
	


<form class="form-horizontal" role="form" action="<?echo base_url(); ?>index.php/Welcome/login" method="post">


  <div class="form-group">
    <label class="control-label col-sm-2" for="email">Usuario:</label>
    <div class="col-sm-10">
      <input type="text" class="form-control" id="usuario" name='usuario' placeholder="Ingresa tu usuario">
    </div>
  </div>
  <div class="form-group">
    <label class="control-label col-sm-2" for="pwd">Contraseña:</label>
    <div class="col-sm-10"> 
      <input type="password" class="form-control" id="contrasenia" name='contrasenia' placeholder="Ingresa tu contraseña">
    </div>
  </div>
  <div class="form-group"> 
    <div class="col-sm-offset-2 col-sm-10">
      
    </div>
  </div>
  <div class="form-group"> 
    <div class="col-sm-offset-2 col-sm-10">
      <button type="submit" class="btn btn-success">ENTRAR</button>
    </div>
  </div>




</div>


<div class="col-md-12">

</div>

<div class="col-md-2">
</div>
</div>
