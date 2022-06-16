var app = angular.module("myapp",[]);  
 app.controller("usercontroller", function($scope, $http){  
      $scope.insertData = function(){  
           $http.post(  
                "insert.php",  
                {'firstname':$scope.firstname, 'lastname':$scope.lastname}  
           ).success(function(data){  
                alert(data);  
                $scope.firstname = null;  
                $scope.lastname = null;  
                $scope.displayData();  
           });  
      }  
      $scope.displayData = function(){  
           $http.get("select.php")  
           .success(function(data){  
                $scope.names = data;  
           });  
      }  
 });  