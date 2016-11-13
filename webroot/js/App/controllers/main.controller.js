angular.module('App').controller('Main',[
    '$scope','$localStorage','$location',
    function($scope,$localStorage,$location){
		if(!$localStorage.token){
			window.location.href=ROOT_URL+'#/login';
		}else{
			$scope.user = $localStorage.user;
		}

		$scope.logout = function(){
			$localStorage.$reset({});
			window.location.href=ROOT_URL+'#/login';
		}

		$scope.getClass = function (path) {
		  	return ($location.path().substr(0, path.length) === path) ? 'active' : '';
		}
    }

]);
