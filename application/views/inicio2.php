<div class="col-md-1">
	
</div>
<div class="col-md-10" > 
<br><center><h2>...Bienvenido Administrador...</h2></center>
<table class="table table-striped" style="border: solid 3px #000;">
<thead>
<tr style='border:solid #000 3px;'>
<td style='border:solid #000 3px;'><h5>Num. Ticket</h5></td>
<td style='border:solid #000 3px;'><h5>Status</h5></td>

<td style='border:solid #000 3px;'> <h5>Titulo</h5></td>
<td style='border:solid #000 3px;'> <h5>Fecha</h5></td>
<td style='border:solid #000 3px;'> <h5>DETALLES</h5></td>
<td style='border:solid #000 3px;'> <h5>CERRAR TICKET</h5></td>
<td style='border:solid #000 3px;'> <h5>RESPONDER</h5></td>
</tr>
</thead><tbody>
<? foreach ($query as $key => $value) {?>

<tr style='border:solid #000 3px;'>
<form action='<?echo base_url(); ?>index.php/Welcome/vermas' method='post'>
<input value="<?echo $value->id;?>" type='hidden' name='ticket'>
<td  style='border:solid #000 3px;'><h3><?echo $value->id;?></h3></td>
<td  style='border:solid #000 3px;'><h5><?echo $value->status;?></h5></td>
<td style='border:solid #000 3px;'><?echo $value->titulo;?></td>
<td  style='border:solid #000 3px;'><?echo $value->fecha;?></td>
<td  style='border:solid #000 3px;'><center><button type='submit' class='btn btn-warning'>VER DETALLES</button></center></td></form>


<form action='<?echo base_url(); ?>index.php/Welcome/cerrar' method='post'>
<input value="<?echo $value->id;?>" type='hidden' name='ticket'>
<td  style='border:solid #000 3px;'><center><a onclick='alert("ticket cerrado");' class='btn btn-danger'>CERRAR TICKET</a>
</center></td>
</form>



<form action='<?echo base_url(); ?>index.php/Welcome/respuesta' method='post'>
<input value="<?echo $value->id;?>" type='hidden' name='ticket'>
<td style='border:solid #000 3px;'><center><button type='submit' class='btn btn-success'>RESPONDER
</button>
</center>
</td>



</form>
</tr>


<?}?>

</tbody>
</table>
</div><div class="col-md-2"></div>