
var testApp = angular.module('testApp', []);

testApp.controller('mainController', ['$scope', '$http', 
	function($scope, $http){

	console.log("Good to go");	

/*
	$scope.users = [
	{
		'id' : 4,
		'name' : 'Richard',
		'email': 'richard@great.com'
	},
	{
		'id' : 4,
		'name' : 'Richard',
		'email': 'richard@great.com'
	}
	
	
	];

	*/

	$scope.users = [];

	var retrieveUsers = function(){
			$http.get("localhost:8000/resource/users")
				.success(function(data, status, headers, config){
					$scope.users = data;
				})

				.error(function(data, status, headers, config){
					switch(status){
						case 401: {
							$scope.message = "You must be logged";
							break;

						}
							

						case 500: {
							$scope.message = "Server internal error.";
							break;

						}
							
					}

					console.log(data, status);
				});

		};


		retrieveUsers();






}]);