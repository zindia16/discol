angular.module('LandingApp').controller('login',[
    '$scope','$http','$localStorage','$location','urls',
    function($scope,$http,$localStorage,$location,urls){
		$scope.response={};
		$scope.isBusy=false;
		//redirect if user is logged in
		if($localStorage.token){
			console.log('Redirecting to APP path: '+ROOT_URL);
			window.location.href=ROOT_URL+"app";
		}

		$scope.login = function(){
			$scope.response={};
			$http.post(urls.api+'Users/login.json',$scope.user).success(function(res){
                $scope.response = res;
				console.log(res);
                if($scope.response.success===true){
					$localStorage.token=res.token;
					$localStorage.user=res.user;
                    $scope.user = {};
					window.location.href=ROOT_URL+"app";
                }
            }).error(function(err){

            });
		};


        $scope.signup = function (){
			$scope.isBusy=true;
			$scope.response.message="";
			if(!$scope.user.first_name){
				$scope.response.message="Error: Your Name is Required!!";
				$scope.isBusy=false;
				return false;
			}
			if(!$scope.user.email){
				$scope.response.message="Error: Your email is required!!";
				$scope.isBusy=false;
				return false;
			}
			if(!$scope.user.username){
				$scope.response.message="Error: Your desired username is required!!";
				$scope.isBusy=false;
				return false;
			}
			if(!$scope.user.password){
				$scope.response.message="Error: Your desired password is required!!";
				$scope.isBusy=false;
				return false;
			}
			if(!$scope.user.confirm_password){
				$scope.response.message="Error: Please confirm your password!!";
				$scope.isBusy=false;
				return false;
			}
			if($scope.user.confirm_password!==$scope.user.password){
				$scope.response.message="Error: Password didn't matched.. please confirm again!!";
				$scope.isBusy=false;
				return false;
			}
			$scope.response.message="Trying to sign you up...";
			//$scope.isBusy=false;
			//return false;
            $http.post(urls.api+'Users/signup.json',$scope.user).success(function(res){
				$scope.isBusy=false;
                $scope.response = res;
				console.log(res);
                if($scope.response.success===true){
					$scope.response.message = "You have been successfully signed up. Go to Login page to signin to your account!!"
                    $scope.user = {};
                }
            }).error(function(err){
				$scope.response=err;
				$scope.isBusy=false;
            });
        };

    }
]);
