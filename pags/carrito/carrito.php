<!--PENDIENTE POR ANALISIS DE CALIDAD-->
<div  class="span5 pull-left">
	<div>
		<h3 class="pull-left">Mi Carrito</h3>
		<div class="pull-right" style="padding-top: 5%">
			<i class ="icon-shopping-cart"></i>
			<a class="" href="#">Ver en lista</a>
		</div>
	</div>
		<!--Al no enfocarnos en PHP aún, solo simulamos la vista-->
	<div class="clearfix"></div>
	<div>
		<div class="alert alert-success"><span>Producto <?php echo '1' ?></span></div>
		<div class="media row">
			<img class="pull-left media-object" src="img/producto.png" style="padding-left:35px">
			<strong class="pull-left" style="padding-left:15px">Cantidad: </strong>
			<input class="input-mini pull-left"type="number" name="cantidadP<?php echo 1?>" min="1" max="<?php echo 5?>">
			<i class ="icon-trash pull-right" style="padding-right: 3px;"></i>
			<label class="pull-right"><?php echo 'cajas x 12 unidades c/u'?></label>
			
		</div>
		<em  style="padding-left:25px">Precio Unitario:</em><input type="text" name="pUnit" class="input-small">
		<strong style="margin-left:15px" >Precio Total:</strong><input type="text" name="Ptotal" class="input-small">
	</div>
	
	<div>
		<div class="alert alert-success"><span>Producto <?php echo '2' ?></span></div>
		<div class="media row">
			<img class="pull-left media-object" src="img/producto.png" style="padding-left:35px">
			<strong class="pull-left" style="padding-left:15px">Cantidad: </strong>
			<input class="input-mini pull-left"type="number" name="cantidadP<?php echo 1?>" min="1" max="<?php echo 5?>">
			<i class ="icon-trash pull-right" style="padding-right: 3px;"></i>
			<label class="pull-right"><?php echo 'cajas x 12 unidades c/u'?></label>
			
		</div>
		<em  style="padding-left:25px">Precio Unitario:</em><input type="text" name="pUnit" class="input-small">
		<strong style="margin-left:15px" >Precio Total:</strong><input type="text" name="Ptotal" class="input-small">
	</div>
	
	<div>
		<div class="alert alert-success"><span>Producto <?php echo '3' ?></span></div>
		<div class="media row">
			<img class="pull-left media-object" src="img/producto.png" style="padding-left:35px">
			<strong class="pull-left" style="padding-left:15px">Cantidad: </strong>
			<input class="input-mini pull-left"type="number" name="cantidadP<?php echo 1?>" min="1" max="<?php echo 5?>">
			<i class ="icon-trash pull-right" style="padding-right: 3px;"></i>
			<label class="pull-right"><?php echo 'cajas x 12 unidades c/u'?></label>
			
		</div>
		<em  style="padding-left:25px">Precio Unitario:</em><input type="text" name="pUnit" class="input-small">
		<strong style="margin-left:15px" >Precio Total:</strong><input type="text" name="Ptotal" class="input-small">
	</div>
</div>
<div  class="span4 pull-right" style="padding-top: 5%; margin-right: 5%">
<div class="well"><form action="">
	<label>Total de compras</label>
    <input type="text" placeholder="S/." class="span2">
	<label>Fecha de entrega</label>
	<input type="date" name="fecha" class="span2">
    <label class="checkbox">
      <input type="checkbox"> Guardar lista de compras
    </label>
    <button type="submit" class="btn">Confirmar compra</button>
</form></div>
<fieldset><legend><h5>Tambien te puede interesar</h5></legend>Otros:</fieldset>
</div>
<div class="clear"></div>
<div class="pull-left">
	<input class="boton-carrito" type="button" value="Continuar comprando" />
	<input class="boton-carrito" type="button"  value="Confirmar compra"/>
</div>
<div class="clearfix"></div>