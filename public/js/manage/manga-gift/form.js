(function () {

    var app = angular.module('application', ['angularUtils.directives.dirPagination']);

app.controller('ManageGiftController', function ($scope,$http){

    $scope.giftall = [
        {index:1,id_gift:"001",titel_trip:"gift voucher 500 บาท",promotion_type:"รางวัล",datestart_trip:"2018-02-01",dateend_trip:"2018-02-31",score_trip:"50"},
        {index:2,id_gift:"002",titel_trip:"gift voucher 500 บาท",promotion_type:"รางวัล",datestart_trip:"2018-02-01",dateend_trip:"2018-02-31",score_trip:"50"},
        {index:3,id_gift:"003",titel_trip:"gift voucher 500 บาท",promotion_type:"รางวัล",datestart_trip:"2018-02-01",dateend_trip:"2018-02-31",score_trip:"50"},
        {index:4,id_gift:"004",titel_trip:"gift voucher 500 บาท",promotion_type:"รางวัล",datestart_trip:"2018-02-01",dateend_trip:"2018-02-31",score_trip:"50"},
        {index:5,id_gift:"005",titel_trip:"gift voucher 500 บาท",promotion_type:"รางวัล",datestart_trip:"2018-02-01",dateend_trip:"2018-02-31",score_trip:"50"},
        {index:6,id_gift:"006",titel_trip:"gift voucher 500 บาท",promotion_type:"รางวัล",datestart_trip:"2018-02-01",dateend_trip:"2018-02-31",score_trip:"50"}
    ]

    $scope.AddGitf = function(data){
         
        $("#modal-managegift-Add").modal('show');

        $scope.addPhotofile = function(data){

            $('#fileUpload').trigger('click'); 
  
            document.getElementById("fileUpload").addEventListener("change", function(){
              var fullPath = this.value; // fetched value = C:\fakepath\fileName.extension
              var fileName = fullPath.split(/(\\|\/)/g).pop();  // fetch the file name
              console.log(fileName);
            }, false);      
              
          }

          $('#selectproduct').change(function(){
            console.log($(this).val());
        })

          $scope.Delete = function(){
              console.log("Delete");
          }

          $scope.SavemodalSave = function(){
            window.location.reload();
          }
       
    }

    $scope.SearchGitf = function(data){
         
        console.log("Search");
        
     }

    $scope.EditGif = function(data){
     
        $("#modal-managegift-Edit").modal('show');

        $scope.Deletephoto = function(data){
            console.log("Delete",data);
          }

          $scope.addPhotofile = function(data){

            $('#fileUpload').trigger('click'); 
  
            document.getElementById("fileUpload").addEventListener("change", function(){
              var fullPath = this.value; // fetched value = C:\fakepath\fileName.extension
              var fileName = fullPath.split(/(\\|\/)/g).pop();  // fetch the file name
              console.log(fileName);
            }, false);      
              
          }

          $('#selectproductedit').change(function(){
            console.log($(this).val());
        })

          $scope.Delete = function(){
            console.log("Delete");
        }

        $scope.SavemodalSave = function(){
          window.location.reload();
        }
       
    }

    $scope.DeleteGitf = function(data){
        
        $("#modal-confirm-Delete").modal('show');
        
    }

    $scope.SavemodalDelete = function(){
        window.location.reload();
      }
      
    });


})();






