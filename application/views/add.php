
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

	<script>
		function checa()
		{
			if(document.getElementById('pass2').value!='' && document.getElementById('pass1').value!='' )
			{
			
				if(document.getElementById('pass1').value==document.getElementById('pass2').value)
				{
					document.getElementById('boton').disabled = false;
					document.getElementById('boton').className = 'btn btn-success';
				}else 
				{
					alert('tus contraseñas no coinciden');
					document.getElementById('pass1').value='';
					document.getElementById('pass2').value='';
					document.getElementById('boton').disabled = true;
					document.getElementById('boton').className = 'btn btn-danger';

				}

			}

		}

		function mostrar()
		{
			if(document.getElementById('pass1').type == 'password')
			{
				document.getElementById('pass1').type= 'text';
			}else
			{
				document.getElementById('pass1').type= 'password';
			}
			

		}

		function oculta()
		{
			document.getElementById('pass1').type= 'password';
		}
	</script>
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
<center><h2 style="margin: 10px; text-shadow: 3px 3px 3px #ccc">Ingresa tus datos..</h2></center>
<div class="col-md-10" style="margin:5px;">

<div class="col-md-5">

<form action="<?echo base_url(); ?>index.php/Welcome/insertaruser" method="post">
	
<label>Nombre: <input class="form form-control" type="text" name="nombre" required></label><br>
<label>Apellido:<input class="form form-control" type="text" name="apellido" requiered> </label><br>
<label>Numero de empleado:<input class="form form-control" type="text" name="numempleado" required> </label><br>
<label>Puesto:<input class="form form-control" type="text" name='puesto' required></label><br>
<label>Telefono:<input class="form form-control" type="text" name='telefono' required></label><br>
<label>Extension:<input class="form form-control" type="text" name='extension'></label><br>
<label>Correo:<input class="form form-control" name='correo' type="mail" required></label><br>
</div>


<div class="col-md-5">
<br>
<label>Celular:<input class="form form-control" type="text" name="celular"></label><br>
<label>Area:<input class="form form-control" type="text" name="area"></label><br>
<label>Planta: <input class="form form-control" type="text" name='planta'></label><br>
<label>Sucursal:<input class="form form-control" type="text" name='sucursal'> </label><br>
<label>Usuario: <input class="form form-control" type="text" name='usuario' required></label><br>

<label>Contraseña: <input class="form form-control" type="password" id='pass1'onchange='checa();' name='contrasenia' required></label>
<a onclick="mostrar();">Mostrar contraseña</a>
<label>Repite tu Contraseña: 
<input class="form form-control" type='password' id='pass2' onfocus='oculta()' onchange='checa();' type="text" required></label><br>
<button class="btn  btn-danger" id='boton' type="submit" disabled>REGISTRAR</button>
</div>

</form>

</div>


</body>