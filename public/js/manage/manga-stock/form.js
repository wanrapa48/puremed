(function () {


    var app = angular.module('application', ['angularUtils.directives.dirPagination']);

    app.controller('ManageStockController', function ($scope,$http){

        $scope.stockall=[
            {index:1,iduser:"001",nameuser:"ธนภพ",lastname:"ทองอิ่มสุข",amounttotal:20,datetime:"2019-02-10 19:19:19"},
            {index:2,iduser:"002",nameuser:"ธนภพ",lastname:"ทองอิ่มสุข",amounttotal:20,datetime:"2019-02-10 19:19:19"},
            {index:3,iduser:"003",nameuser:"ธนภพ",lastname:"ทองอิ่มสุข",amounttotal:20,datetime:"2019-02-10 19:19:19"},
            {index:4,iduser:"004",nameuser:"ธนภพ",lastname:"ทองอิ่มสุข",amounttotal:20,datetime:"2019-02-10 19:19:19"},
            {index:5,iduser:"005",nameuser:"ธนภพ",lastname:"ทองอิ่มสุข",amounttotal:20,datetime:"2019-02-10 19:19:19"}
        ]
    
        $scope.SearchStock = function(data){
             
            console.log("Search");
            
         }
    
        $scope.AddStock = function(){
         
            $("#modal-managestock-Add").modal('show');

            $scope.Delete = function(){
                console.log("Delete");
            }
  
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






