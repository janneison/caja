<!-- Page Heading -->
 <div class="row">
     <div class="col-lg-12">
         @include('vistasParciales.nombre_proyecto')
         <ol class="breadcrumb">
             <li><a ui-sref="home"><i class="icon-dashboard"></i> Inicio</a></li>             
             <li><a ui-sref='home.periodo'><i class="icon-dashboard"></i> Registrar</a></li>
             <li class="active"><i class="icon-dashboard"></i> Consultar</li>
         </ol>
     </div>
 </div>                
<div class="row" ng-init='consultarPeriodo()'>
    <div class="panel panel-primary">
        
        <div class="panel-heading">
           <h3 class="panel-title">Consultar Periodos</h3>
         </div>

         <div class="panel-body">
            
                <table class="table table-bordered table-hover table-striped tablesorter">
                    <thead>
                     <tr>
                       <th>Id</th>
                       <th>Nombre</th>
                       <th>Funcionario</th>
                       <th>Fecha Inicio</th>
                       <th>Fecha Fin</th>
                       <th>Entradas </th>
                       <th>Consignaciones </th>
                       <th>Egresos </th>
                       <th>Opciones </th>
                   </tr>
                    </thead>
                    <tbody>
                        <tr ng-repeat='item in ListaPeriodos'>
                            <td>{{item.id}}</td>
                            <td>{{item.nombre}}</td>
                            <td>{{item.nombre_completo}}</td>
                            <td>{{item.fecha_inicio}}</td>
                            <td>{{item.fecha_final}}</td>
                            <td>{{item.anticipos | currency:'$':2  }}</td>
                            <td>{{item.consignaciones | currency:'$':2  }}</td>
                            <td>{{item.egresos | currency:'$':2  }}</td>
                            <td>
                                <a ui-sref='home.editar_periodo({id:item.id})'><i class='fa fa-pencil fa-2x'></i></a> 
                                <a ui-sref='home.periodo'><i class='fa fa-bars fa-2x'></i></a>
                            </td>
                        </tr>
                    </tbody>
                </table>
         </div>
    </div>
</div>



