 <!-- Page Heading -->
 <div class="row">
     <div class="col-lg-12">
         @include('vistasParciales.nombre_proyecto')
         <ol class="breadcrumb">
             <li><a ui-sref="home"><i class="icon-dashboard"></i> Inicio</a></li>             
             <li><a ui-sref='home.beneficiario'><i class="icon-dashboard"></i> Registrar</a></li>
             <li class="active"><i class="icon-dashboard"></i> Consultar</li>
         </ol>
     </div>
 </div>                
<div class="row" ng-init='consultar()'>
    <div class="panel panel-primary">
        
        <div class="panel-heading">
           <h3 class="panel-title">Consultar beneficiario</h3>
         </div>

         <div class="panel-body">
            
                <table class="table table-bordered table-hover table-striped tablesorter">
                    <thead>
                     <tr>
                       <th>Id</th>
                       <th>Nombre</th>
                       <th>Identificacion</th>
                       <th>Direccion</th>
                       <th>Telefono</th>
                   </tr>
                    </thead>
                    <tbody>
                        <tr ng-repeat='item in ListaBeneficiario'>
                            <td>{{item.id}}</td>
                            <td>{{item.nombre}}</td>
                            <td>{{item.identificacion}}</td>
                            <td>{{item.direccion}}</td>
                            <td>{{item.telefono}}</td>
                        </tr>
                    </tbody>
                </table>
          
         </div>
    </div>
</div>



