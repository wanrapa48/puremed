(function () {


    var app = angular.module('application', ['angularUtils.directives.dirPagination']);

    app.controller('ManageStockDetailController', function ($scope,$http){

        $scope.stockall=[
            {index:1,idproduct:"0120",nameproduct:"Mini Kito",price_agle:530,amount:20,score:100,datetime:"2019-02-10 19:19:19"},
            {index:2,idproduct:"0121",nameproduct:"Ruby Kito Collagen",price_agle:530,amount:20,score:100,datetime:"2019-02-10 19:19:19"},
            {index:3,idproduct:"0122",nameproduct:"Fiber Beery",price_agle:530,amount:20,score:100,datetime:"2019-02-10 19:19:19"},
            {index:4,idproduct:"0123",nameproduct:"Ruby Kito Fiber",price_agle:530,amount:20,score:100,datetime:"2019-02-10 19:19:19"}
            
        ]
    
        $scope.SearchStock = function(data){
             
            console.log("Search");
            
         }
    
        $scope.AddStock = function(){
         
            $("#modal-managestock-Add").modal('show');
  
            $scope.SavemodalSave = function(){
              window.location.reload();
            }
           
        }

        $scope.EditStock = function(data){
            $("#modal-managestock-Edit").modal('show');
            
            $scope.SavemodalSave = function(){
                window.location.reload();
              }
        }
    
        $scope.DeleteStock = function(data){
            
            $("#modal-confirm-Delete").modal('show');
            
        }
        
        $scope.SavemodalDelete = function(){
            window.location.reload();
          }

        });

})();






