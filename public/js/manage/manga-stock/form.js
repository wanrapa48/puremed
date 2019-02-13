(function () {


    var app = angular.module('application', ['angularUtils.directives.dirPagination']);

    app.controller('ManageStockController', function ($scope,$http){
    
        $scope.SearchStock = function(data){
             
            console.log("Search");
            
         }
    
        $scope.EditStock = function(data){
         
            $("#modal-managestock-Edit").modal('show');
           
        }
    
        $scope.DeleteStock = function(data){
            
            $("#modal-confirm-Delete").modal('show');
            
        }
        });

})();






