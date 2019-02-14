(function () {

    var app = angular.module('application', ['angularUtils.directives.dirPagination']);

    app.controller('ManageComController', function ($scope,$http){

        $scope.comall= [
            {index:1,level:"VIP1",detail:"สั่งสินค้าครบ 1000 ชิ้น อย่างเดียว x15"},
            {index:2,level:"VIP2",detail:"สั่งสินค้าครบ 1000 ชิ้น คละ x10"},
            {index:3,level:"VIP3",detail:"มีสองสายที่เป็น vip ได้ 1 level 100%"},
            {index:4,level:"VIP4",detail:"ได้ ทั้งสาย 50% ที่เป็น vip แล้วเราต้องเป็น vip"},
            {index:5,level:"B1",detail:"สินค้าตัวเดียวกัน 500 ชิ้น x10"},
            {index:6,level:"B2",detail:"สินค้าคละได้ x5"},
        ]
    
        $scope.AddCom = function(data){
             
            $("#modal-managecom-Add").modal('show');

            $scope.SavemodalSave = function(){
                window.location.reload();
              }
           
        }
    
        $scope.SearchCom = function(data){
             
            console.log("Search");
            
         }
    
        $scope.EditCom = function(data){
         
            $("#modal-managecom-Edit").modal('show');

            $scope.SavemodalSave = function(){
                window.location.reload();
              }
           
        }
    
        $scope.DeleteCom = function(data){
            
            $("#modal-confirm-Delete").modal('show');
            
        }

        
    $scope.SavemodalDelete = function(){
        window.location.reload();
      }
      
        });

})();






