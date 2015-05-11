confControllers.controller('BeneficiarioController', function ($scope,$location,authUsuario,SessionService,SessionSet,$state,$http) {

	$scope.beneficiarioVO={id:'',nombre:'nombre', identificacion:'', direccion:'', telefono:'',_token:authUsuario.token()};
	$scope.ListaBeneficiario=[];

	if ($state.params.id > 0) {

		$http.get("beneficiario/consultarporcodigo/"+$state.params.id).success(function(data, status, headers, config) {

	 	$scope.beneficiarioVO=data;
	 	
      });

	}

	$scope.guardar=function(){

		if ($scope.beneficiarioVO.id > 0) {

			$http.post("beneficiario/actualizar",$scope.beneficiarioVO).success(function(data, status, headers, config) {

		 	if (data=='Success') {
		 		alert('Actualizado con exito');  
		 		$state.go('home.consultar_beneficiario');
		 		//$scope.nuevo();
		 	}else{
		 		alert('error');   
		 	}
		 	
	      });

		}else{

			$http.post("beneficiario/registrar",$scope.beneficiarioVO).success(function(data, status, headers, config) {

		 	if (data=='Success') {
		 		alert(data);  
		 		$scope.nuevo();
		 	}else{
		 		alert('error');   
		 	}
		 	
	      });

		}

	}

	$scope.consultar=function(pagina){
		if(pagina===undefined){pagina= 0};
	$http.post("beneficiario/consultar?page="+pagina,{_token:authUsuario.token()}).success(function(data, status, headers, config) {

	 	$scope.ListaBeneficiario=data;
	 	
      });

	}

	$scope.nuevo=function(){

		$scope.beneficiarioVO.id='';
		$scope.beneficiarioVO.nombre='';
		$scope.beneficiarioVO.identificacion='';
		$scope.beneficiarioVO.direccion='';
		$scope.beneficiarioVO.telefono='';
		$scope.beneficiarioVO._token=authUsuario.token();

	}

	$scope.crearArray = function(num){
		var array = [];
		for (var i = 0; i < num; i++) {
			array.push(i+1);
		};
		return array;
	}

});