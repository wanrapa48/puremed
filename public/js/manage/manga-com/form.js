(function () {

    var app = angular.module('application', ['angularUtils.directives.dirPagination']);

    app.controller('ManageComController', function ($scope,$http){
    
        $scope.AddCom = function(data){
             
            $("#modal-managecom-Add").modal('show');
           
        }
    
        $scope.SearchCom = function(data){
             
            console.log("Search");
            
         }
    
        $scope.EditCom = function(data){
         
            $("#modal-managecom-Edit").modal('show');
           
        }
    
        $scope.DeleteCom = function(data){
            
            $("#modal-confirm-Delete").modal('show');
            
        }
        });

})();






