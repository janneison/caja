<div class="row">
     <div class="col-lg-12">
         @include('vistasParciales.nombre_proyecto')
         <ol class="breadcrumb">
             <li><a ui-sref="home"><i class="icon-dashboard"></i> Inicio</a></li>             
         </ol>
     </div>
 </div> 
 <div class="row">
    <div class="col-lg-3">
      <div class="panel panel-info">
        <div class="panel-heading" style="cursor:pointer" ui-sref="home.periodo">
          <div class="row">
            <div class="col-xs-6">
              <i class="fa fa-briefcase fa-5x"></i>
            </div>
        <div class="col-xs-6 text-right">
          Creación de periodos
        </div>
    </div>
</div>
<a ui-sref="home.periodo">
  <div class="panel-footer announcement-bottom">
    <div class="row">
      <div class="col-xs-6">
        Ingresar
      </div>
      <div class="col-xs-6 text-right">
        <i class="fa fa-arrow-circle-right"></i>
      </div>
    </div>
    </div>
</a>
</div>
</div>
         
          <div class="col-lg-3">
            <div class="panel panel-warning">
              <div class="panel-heading" style="cursor:pointer" ui-sref="home.anticipo">
                <div class="row">
                  <div class="col-xs-6">
                    <i class="fa fa-dollar fa-5x"></i>
                  </div>

                  <div class="col-xs-6 text-right">
                    <p class="announcement-heading"></p>

                    <p class="announcement-text">Registro de Anticipos<br/><br/></p>

                  </div>

                </div>
              </div>
              
              <a ui-sref="home.anticipo">

                <div class="panel-footer announcement-bottom">

                  <div class="row">

                    <div class="col-xs-6">

                      Anticipos 

                    </div>

                    <div class="col-xs-6 text-right">

                      <i class="fa fa-arrow-circle-right"></i>

                    </div>

                  </div>

                </div>

              </a>

            </div>

          </div>
        

           <div class="col-lg-3">

            <div class="panel panel-info"  style="cursor:pointer" onClick="window.location='agregar_anticipo.php?idr=1'">

              <div class="panel-heading">

                <div class="row">

                  <div class="col-xs-6">

                    <i class="fa fa-eur fa-5x"></i>

                  </div>

                  <div class="col-xs-6 text-right">

                    <p class="announcement-heading"></p>

                    <p class="announcement-text">Consignación.<br/><br/></p>

                  </div>

                </div>

              </div>

              <a href="agregar_anticipo.php?idr=1">

                <div class="panel-footer announcement-bottom">

                  <div class="row">

                    <div class="col-xs-6">
                      Consignar
                    </div>

                    <div class="col-xs-6 text-right">

                      <i class="fa fa-arrow-circle-right"></i>

                    </div>

                  </div>

                </div>

              </a>

            </div>

          </div> 
         

          <div class="col-lg-3">
            <div class="panel panel-danger" style="cursor:pointer" onClick="window.location='agregar_registro.php'">
              <div class="panel-heading">
                <div class="row">
                  <div class="col-xs-6">
                    <i class="fa fa-list-alt fa-5x"></i>
                  </div>
                  <div class="col-xs-6 text-right">
                    <p class="announcement-heading"></p>
                    <p class="announcement-text">Registro de egresos<br/></p>
                  </div>
                </div>
              </div>
              <a href="agregar_registro.php">
                <div class="panel-footer announcement-bottom">
                  <div class="row">
                    <div class="col-xs-6">
                      Egresos
                    </div>
                    <div class="col-xs-6 text-right">
                      <i class="fa fa-arrow-circle-right"></i>
                    </div>
                  </div>
                </div>
              </a>
            </div>
          </div>    
		</div>
		<div class="row">
        
		<div class="col-lg-3">

            <div class="panel panel-success" style="cursor:pointer" onClick="window.location='consultar_registro.php'">

              <div class="panel-heading">

                <div class="row">

                  <div class="col-xs-6">

                    <i class="fa fa-search fa-5x"></i>

                  </div>

                  <div class="col-xs-6 text-right">

                    <p class="announcement-heading"></p>

                    <p class="announcement-text">Consulta de egresos</p>

                  </div>

                </div>

              </div>

              <a href="consultar_registro.php">

                <div class="panel-footer announcement-bottom">
                  <div class="row">
                    <div class="col-xs-6">
                      Consultar
                    </div>
                    <div class="col-xs-6 text-right">
                      <i class="fa fa-arrow-circle-right"></i>
                    </div>
                  </div>
                </div>
              </a>
            </div>

          </div>
          

       	  <div class="col-lg-3">

            <div class="panel panel-warning"  style="cursor:pointer" onClick="window.location='reporte_funcionario_mes.php'">

              <div class="panel-heading">

                <div class="row">

                  <div class="col-xs-6">

                    <i class="fa fa-bar-chart-o fa-5x"></i>

                  </div>

                  <div class="col-xs-6 text-right">

                    <p class="announcement-heading"></p>

                    <p class="announcement-text">Balance por responsable.<br/><br/></p>

                  </div>

                </div>

              </div>

              <a href="reporte_funcionario_mes.php">

                <div class="panel-footer announcement-bottom">

                  <div class="row">

                    <div class="col-xs-6">

                      Reporte
                    </div>

                    <div class="col-xs-6 text-right">

                      <i class="fa fa-arrow-circle-right"></i>

                    </div>

                  </div>

                </div>

              </a>

            </div>

          </div>
          
          <div class="col-lg-3">

            <div class="panel panel-warning"  style="cursor:pointer" onClick="window.location='imprimir.php?informe=1'">

              <div class="panel-heading">

                <div class="row">

                  <div class="col-xs-6">

                    <i class="fa fa-bar-chart-o fa-5x"></i>

                  </div>

                  <div class="col-xs-6 text-right">

                    <p class="announcement-heading"></p>

                    <p class="announcement-text">Exportar Excel.<br/><br/></p>

                  </div>

                </div>

              </div>

              <a href="imprimir.php?informe=1">
                <div class="panel-footer announcement-bottom">
                  <div class="row">
                    <div class="col-xs-6">
                      Reporte
                    </div>
                    <div class="col-xs-6 text-right">
                      <i class="fa fa-arrow-circle-right"></i>
                    </div>
                  </div>
                </div>
              </a>
            </div>
          </div>	
         
           <div class="col-lg-3">
            <div class="panel panel-warning"  style="cursor:pointer" onClick="window.location='agregar_devolucion.php'">
              <div class="panel-heading">
                <div class="row">
                  <div class="col-xs-6">
                    <i class="fa fa-ticket fa-5x"></i>
                  </div>
                  <div class="col-xs-6 text-right">
                    <p class="announcement-heading"></p>
                    <p class="announcement-text">Prestamos<br/><br/></p>
                  </div>
                </div>
              </div>

              <a href="agregar_devolucion.php">
                <div class="panel-footer announcement-bottom">
                  <div class="row">
                    <div class="col-xs-6">
                      Prestar
                    </div>
                    <div class="col-xs-6 text-right">
                      <i class="fa fa-arrow-circle-right"></i>
                    </div>
                  </div>
                </div>
              </a>
            </div>
          </div>
		</div>
  <div class="row">
      <div class="col-lg-3">
      <div class="panel panel-info">
        <div class="panel-heading" style="cursor:pointer" ui-sref="home.beneficiario">
          <div class="row">
            <div class="col-xs-6">
              <i class="fa fa-users fa-5x"></i>
            </div>
        <div class="col-xs-6 text-right">
          Beneficiarios
        </div>
    </div>
</div>
<a ui-sref="home.beneficiario">
  <div class="panel-footer announcement-bottom">
    <div class="row">
      <div class="col-xs-6">
        Ingresar
      </div>
      <div class="col-xs-6 text-right">
        <i class="fa fa-arrow-circle-right"></i>
      </div>
    </div>
    </div>
</a>
</div>
</div>
  </div>

	