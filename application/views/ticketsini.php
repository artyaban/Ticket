<?
foreach ($query2 as $key => $value) {
	?>
<div class='col-md-10' style='color:#052467; margin: 20px;  box-shadow: 7px 7px 7px #aaa; background-color: yellow ; border: solid #000 10px'>
<h1 style='text-shadow: 3px 3px 3px #ccc'> Ticket</h1>
<div class='col-md-5'>

	<h3>Numero de ticket:  <?echo $value->id;?></h3><?
	?><h3>Titulo:  <?echo $value->titulo;?></h3><?
	?><h3>Descripcion:  <?echo $value->descripcion;?></h3><?
	?><h3>Status:  <?echo $value->status;?></h3></div><div class='col-md-5'><?
	?><h3>Estado:  <?echo $value->estado;?></h3><?
	?><h3>Ciudad:  <?echo $value->ciudad;?></h3><?
	?><h3>Fecha:  <?echo $value->fecha;?></h3>
	</div><hr><p> Ticket Encontrado</p><hr>
	<hr><p> Este ticket aun no se a resuelto.</p><hr>
	
	
	<center><button onclick="alert('ticket Cancelado');" class='btn btn-danger'>Cancelar Ticket</button></center>
</div>
<?echo '<br>';
}
