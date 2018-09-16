 	<?php
		if (isset($con)) 
		{
	?>
	<!-- Modal -->
	<div class="modal fade" id="nuevoProducto" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
	  <div class="modal-dialog" role="document">
		<div class="modal-content">
		  <div class="modal-header">
			<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
			<h4 class="modal-title" id="myModalLabel"><i class='glyphicon glyphicon-edit'></i> Agregar nuevo producto</h4>
		  </div>
		  <div class="modal-body">
			<form class="form-horizontal" method="post" id="guardar_producto" name="guardar_producto">
			<div id="resultados_ajax_productos"></div>
			  

<!-- formulario  -->

			  <div class="form-group">
				<label for="codigo" class="col-sm-3 control-label">Código</label>
				<div class="col-sm-8">
				  <input type="text" class="form-control" id="codigo" name="codigo" placeholder="Código del producto" required>
				</div>
			  </div>
			  
			  <div class="form-group">
				<label for="nombre" class="col-sm-3 control-label">Nombre</label>
				<div class="col-sm-8">
					<textarea class="form-control" id="nombre" name="nombre" placeholder="Nombre del producto" required maxlength="255" ></textarea>
				  
				</div>
			  </div>
			  
			    <div class="form-group">
				<label for="nombre" class="col-sm-3 control-label">Descripcion</label>
				<div class="col-sm-8">
					<textarea class="form-control" id="descripcion_prod" name="descripcion_prod" placeholder="Nombre del producto" required maxlength="255" ></textarea>
				  
				</div>
			  </div>

			  <div class="form-group">
				<label for="codigo" class="col-sm-3 control-label">Stock</label>
				<div class="col-sm-8">
				  <input type="text" class="form-control" id="stock_prod" name="stock_prod" placeholder="stock_prod" required>
				</div>
			  </div>


			  <div class="form-group">
				<label for="codigo" class="col-sm-3 control-label">Stock Minimo</label>
				<div class="col-sm-8">
				  <input type="text" class="form-control" id="stockmin_prod" name="stockmin_prod" placeholder="stock_min" required>
				</div>
			  </div>

			  <div class="form-group">
				<label for="codigo" class="col-sm-3 control-label">Precio Costo</label>
				<div class="col-sm-8">
				  <input type="text" class="form-control" id="preciocosto_prod" name="preciocosto_prod" placeholder="preciocosto_prod" required>
				</div>
			  </div>


			  <div class="form-group">
				<label for="codigo" class="col-sm-3 control-label">Precio Venta</label>
				<div class="col-sm-8">
				  <input type="text" class="form-control" id="precioventa_prod" name="precioventa_prod" placeholder="precioventa_prod" required>
				</div>
			  </div>



		

			  
			 
			 
			
		  </div>
		  <div class="modal-footer">
			<button type="button" class="btn btn-default" data-dismiss="modal">Cerrar</button>
			<button type="submit" class="btn btn-primary" id="guardar_datos">Guardar datos</button>
		  </div>
		  </form>
		</div>
	  </div>
	</div>
	<?php
		}
	?>