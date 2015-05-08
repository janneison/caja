<!-- Page Heading -->
 <div class="row">
     <div class="col-lg-12">
         @include('vistasParciales.nombre_proyecto')
         <ol class="breadcrumb">
             <li><a ui-sref="home.inicio"><i class="icon-dashboard"></i> Inicio</a></li>
             <li class="active"><i class="icon-dashboard"></i> Anticipo</li>
            <li><a ui-sref='home.consultar_periodo'><i class="icon-dashboard"></i> Consultar</a></li>
         </ol>
     </div>
 </div> 
<div class="row">
          <div class="col-lg-12">
             <div class="panel panel-info">
              <div class="panel-heading">
                <h3 class="panel-title">Registro de Anticipos</h3>
              </div>
              <div class="panel-body">

                <div class="form-group">

                  <form name="" id="form" method="post" action="guardarAnticipo.php">

                  <div class="row">

                      <div class="col-lg-6">

                          <label>Fecha:</label>

                          <input class="form-control" type="text" name="fecha" class="tcal" id="fecha" required/>

                          <p class="help-block">* Indique la fecha del anticipo.</p>

                          <label for="centro_costo">Centro Costo:</label>

                          <input class="form-control" type="text" name="centro_costo" id="centro_costo" >

                          <p class="help-block">Indique el centro de costo.</p>

                          <label for="monto">Monto:</label>

                          <div class="form-group input-group">
		                      <span class="input-group-addon">$</span>
		                      <input class="form-control" type="text" onkeypress="return soloNumeros(event);" name="monto" id="monto"  required>
		                      <span class="input-group-addon">.00</span>
		                 </div>

                          <p class="help-block">* Indique el monto.</p>

                          <label for="id_funcionario">Funcionario quien recibe:</label>

                          <select class="form-control" name="id_funcionario" size="1" id="id_funcionario" required>

                          <option value="">[Seleccione...]</option>
                          @foreach($funcionarios as $row)
                          <option value='[[$row->id]]'>[[$row->persona->nombre_completo() ]]</option>
                          @endforeach
                           </select>

                           <p class="help-block">* escoja el funcionario.</p>

                      </div>

                      <div class="col-lg-6">

                           <!-- otro tab -->

                        <label>Entidad:</label>
                        <select class="form-control" id="banco" name="banco" required>
                         @foreach($bancos as $row)
                          <option value='[[$row->id]]'>[[$row->nombre ]]</option>
                          @endforeach
                        </select>

                            <p class="help-block">* Indique la entidad bancaria de la cuenta destino.</p>

                           <label for="numero_trans">Numero trans:</label>

                           <input class="form-control" type="text" name="numero_trans" id="numero_trans">

                           <p class="help-block">Numero de la transaccion.</p>

                           <label for="observacion">Observacion:</label>

                           <textarea class="form-control" id="observacion" name="observacion"></textarea>

                           <p class="help-block">Observación adicional.</p>

                      </div>  

                    </div>

                    <input class="btn btn-primary" id="btnGuardar" type="submit" name="btnGuardar" value="Guardar" />

                  </form>

                  

                <br>

                </div>

              </div>

            </div>

          </div>

        </div><!-- fin de la fila -->
