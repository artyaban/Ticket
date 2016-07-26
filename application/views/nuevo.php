

<script>
function muestraciudad()
{
	alert('entre');
	if(document.getElementById('estado').value=='Aguascalientes')
		{document.className('Aguascalientes').style.display='';}
	if(document.getElementById('estado').value=='Baja California')
		{document.getElementById('BajaCalifornia').style.display='';}
}

</script>
<div class="col-md-12">


<form class="form-horizontal"  action="<?echo base_url();?>index.php/Welcome/registrarticket" method='post'>
<h3> Porfavor ingresa los datos necesarios para generar el ticket</h3>
<hr>

<div class="form-group">
<label class="control-label col-sm-2" >Titulo</label>
 <div class="col-sm-6"><input type="text"  class='form-control' name="titulo"></div>
</div>




<div class="form-group">
<label class="control-label col-sm-2" >descripcion </label>
 <div class="col-sm-6"><input type="text"  class='form-control' name="descripcion"></div>
</div>

<input type="hidden"  class='form-control' name="status" value='abierto'>


<div class="form-group">
<label class="control-label col-sm-2" >Fecha</label>
 <div class="col-sm-6"><input type="date"  class='form-control' name="fecha"></div>
</div>




<div class="form-group">
<label class="control-label col-sm-2" >Prioridad</label>
 <div class="col-sm-6"><select   class='form-control' name="prioridad">
  <option value="alta">Alta</option>
    <option value="media">Media</option>
      <option value="baja">Baja</option>

 </select></div>
</div>

<div class="form-group">
<label class="control-label col-sm-2" >Estado</label>
 <div class="col-sm-6">
 <select   class='form-control' name="estado" id='estado' onchange="muestraciudad()">
<option value="Aguascalientes">Aguascalientes</option>
<option value="Baja California">Baja California</option>
<option value="Baja California Sur">Baja California Sur</option>
<option value="Campeche">Campeche</option>
<option value="Chiapas">Chiapas</option>
<option value="Chihuahua">Chihuahua</option>
<option value="Coahuila">Coahuila</option>
<option value="Colima">Colima</option>
<option value="Distrito Federal">Distrito Federal</option>
<option value="Durango">Durango</option>
<option value="Estado de México">Estado de México</option>
<option value="Guanajuato">Guanajuato</option>
<option value="Guerrero">Guerrero</option>
<option value="Hidalgo">Hidalgo</option>
<option value="Jalisco">Jalisco</option>
<option value="Michoacán">Michoacán</option>
<option value="Morelos">Morelos</option>
<option value="Nayarit">Nayarit</option>
<option value="Nuevo León">Nuevo León</option>
<option value="Oaxaca">Oaxaca</option>
<option value="Puebla">Puebla</option>
<option value="Querétaro">Querétaro</option>
<option value="Quintana Roo">Quintana Roo</option>
<option value="San Luis Potosí">San Luis Potosí</option>
<option value="Sinaloa">Sinaloa</option>
<option value="Sonora">Sonora</option>
<option value="Tabasco">Tabasco</option>
<option value="Tamaulipas">Tamaulipas</option>
<option value="Tlaxcala">Tlaxcala</option>
<option value="Veracruz">Veracruz</option>
<option value="Yucatán">Yucatán</option>
<option value="Zacatecas">Zacatecas</option>

 </select></div>
</div>





<div class="form-group">
<label class="control-label col-sm-2" >Ciudad</label>
 <div class="col-sm-6"><select   class='form-control' name="ciudad">



<option style='display:none' value="Aguascalientes" class="Aguascalientes">Aguascalientes</option>
<option style='display:none' value="Ensenada" class="Baja California">Ensenada</option>
<option style='display:none' value="Mexicali" class="Baja California">Mexicali</option>
<option style='display:none' value="Tijuana" class="Baja California">Tijuana</option>
<option style='display:none' value="La Paz" class="Baja California Sur">La Paz</option>
<option style='display:none' value="Los Cabos" class="Baja California Sur">Los Cabos</option>
<option style='display:none' value="Campeche" class="Campeche">Campeche</option>
<option style='display:none' value="Ciudad del Carmen" class="Campeche">Ciudad del Carmen</option>
<option style='display:none' value="Tapachula" class="Chiapas">Tapachula</option>
<option style='display:none' value="Tuxtla Gutiérrez" class="Chiapas">Tuxtla Gutiérrez</option>
<option style='display:none' value="Chihuahua" class="Chihuahua">Chihuahua</option>
<option style='display:none' value="Juárez" class="Chihuahua">Juárez</option>
<option style='display:none' value="La Laguna" class="Coahuila de Zaragoza">La Laguna</option>
<option style='display:none' value="Monclova-Frontera" class="Coahuila de Zaragoza">Monclova-Frontera</option>
<option style='display:none' value="Piedras Negras" class="Coahuila de Zaragoza">Piedras Negras</option>
<option style='display:none' value="Saltillo" class="Coahuila de Zaragoza">Saltillo</option>
<option style='display:none' value="Colima-Villa de Álvarez" class="Colima">Colima-Villa de Álvarez</option>
<option style='display:none' value="Manzanillo" class="Colima">Manzanillo</option>
<option style='display:none' value="Tecomán" class="Colima">Tecomán</option>
<option style='display:none' value="Valle de México" class="Distrito Federal">Valle de México</option>
<option style='display:none' value="Durango" class="Durango">Durango</option>
<option style='display:none' value="Celaya" class="Guanajuato">Celaya</option>
<option style='display:none' value="Guanajuato" class="Guanajuato">Guanajuato</option>
<option style='display:none' value="Irapuato" class="Guanajuato">Irapuato</option>
<option style='display:none' value="La Piedad-Pénjamo" class="Guanajuato">La Piedad-Pénjamo</option>
<option style='display:none' value="León" class="Guanajuato">León</option>
<option style='display:none' value="Salamanca" class="Guanajuato">Salamanca</option>
<option style='display:none' value="San Francisco del Rincón" class="Guanajuato">San Francisco del Rincón</option>
<option style='display:none' value="Acapulco" class="Guerrero">Acapulco</option>
<option style='display:none' value="Chilpancingo" class="Guerrero">Chilpancingo</option>
<option style='display:none' value="Pachuca" class="Hidalgo">Pachuca</option>
<option style='display:none' value="Tula" class="Hidalgo">Tula</option>
<option style='display:none' value="Tulancingo" class="Hidalgo">Tulancingo</option>
<option style='display:none' value="Guadalajara" class="Jalisco">Guadalajara</option>
<option style='display:none' value="Ocotlán" class="Jalisco">Ocotlán</option>
<option style='display:none' value="Puerto Vallarta" class="Jalisco">Puerto Vallarta</option>
<option style='display:none' value="Morelia" class="Michoacán de Ocampo">Morelia</option>
<option style='display:none' value="Uruapan" class="Michoacán de Ocampo">Uruapan</option>
<option style='display:none' value="Zamora-Jacona" class="Michoacán de Ocampo">Zamora-Jacona</option>
<option style='display:none' value="Cuautla" class="Morelos">Cuautla</option>
<option style='display:none' value="Cuernavaca" class="Morelos">Cuernavaca</option>
<option style='display:none' value="Toluca" class="México">Toluca</option>
<option style='display:none' value="Tepic" class="Nayarit">Tepic</option>
<option style='display:none' value="Monterrey" class="Nuevo León">Monterrey</option>
<option style='display:none' value="Oaxaca" class="Oaxaca">Oaxaca</option>
<option style='display:none' value="Tehuantepec-Salina Cruz" class="Oaxaca">Tehuantepec-Salina Cruz</option>
<option style='display:none' value="Puebla-Tlaxcala" class="Puebla">Puebla-Tlaxcala</option>
<option style='display:none' value="Tehuacán" class="Puebla">Tehuacán</option>
<option style='display:none' value="Querétaro" class="Querétaro">Querétaro</option>
<option style='display:none' value="San Juan del Río" class="Querétaro">San Juan del Río</option>
<option style='display:none' value="Cancún" class="Quintana Roo">Cancún</option>
<option style='display:none' value="Chetumal" class="Quintana Roo">Chetumal</option>
<option style='display:none' value="Rioverde-Ciudad Fernández" class="San Luis Potosí">Rioverde-Ciudad Fernández</option>
<option style='display:none' value="San Luis Potosí-Soledad" class="San Luis Potosí">San Luis Potosí-Soledad</option>
<option style='display:none' value="Culiacán" class="Sinaloa">Culiacán</option>
<option style='display:none' value="Los Mochis" class="Sinaloa">Los Mochis</option>
<option style='display:none' value="Mazatlán" class="Sinaloa">Mazatlán</option>
<option style='display:none' value="Ciudad Obregón" class="Sonora">Ciudad Obregón</option>
<option style='display:none' value="Guaymas" class="Sonora">Guaymas</option>
<option style='display:none' value="Hermosillo" class="Sonora">Hermosillo</option>
<option style='display:none' value="Cárdenas" class="Tabasco">Cárdenas</option>
<option style='display:none' value="Villahermosa" class="Tabasco">Villahermosa</option>
<option style='display:none' value="Ciudad Victoria" class="Tamaulipas">Ciudad Victoria</option>
<option style='display:none' value="Matamoros" class="Tamaulipas">Matamoros</option>
<option style='display:none' value="Nuevo Laredo" class="Tamaulipas">Nuevo Laredo</option>
<option style='display:none' value="Reynosa-Río Bravo" class="Tamaulipas">Reynosa-Río Bravo</option>
<option style='display:none' value="Tampico-Pánuco" class="Tamaulipas">Tampico-Pánuco</option>
<option style='display:none' value="Tlaxcala-Apizaco" class="Tlaxcala">Tlaxcala-Apizaco</option>
<option style='display:none' value="Coatzacoalcos" class="Veracruz de Ignacio de la Llave">Coatzacoalcos</option>
<option style='display:none' value="Córdoba" class="Veracruz de Ignacio de la Llave">Córdoba</option>
<option style='display:none' value="Minatitlán" class="Veracruz de Ignacio de la Llave">Minatitlán</option>
<option style='display:none' value="Orizaba" class="Veracruz de Ignacio de la Llave">Orizaba</option>
<option style='display:none' value="Poza Rica" class="Veracruz de Ignacio de la Llave">Poza Rica</option>
<option style='display:none' value="Veracruz" class="Veracruz de Ignacio de la Llave">Veracruz</option>
<option style='display:none' value="Xalapa" class="Veracruz de Ignacio de la Llave">Xalapa</option>
<option style='display:none' value="Mérida" class="Yucatán">Mérida</option>
<option style='display:none' value="Zacatecas-Guadalupe" class="Zacatecas">Zacatecas-Guadalupe</option>


 </select></div>
</div>




<button class="btn btn-success" type="submit">Registrar Ticket</button>
<hr>
</form>
</div>