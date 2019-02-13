(function () {

    var app = angular.module('application', ['angularUtils.directives.dirPagination']);

    app.controller('ManageProductController', function ($scope,$http){

        $scope.productall = [
            {index:1,id_product:"P0001",name_product:"Mini Kito",score_product:400,group_product:"คอลลาเจน",preice_retail:350,price_agle:300},
            {index:2,id_product:"P0002",name_product:"Ruby Kito Collagen",score_product:500,group_product:"คอลลาเจน",preice_retail:550,price_agle:500},
            {index:3,id_product:"P0003",name_product:"Fiber Beery",score_product:300,group_product:"ดีท็อก",preice_retail:350,price_agle:300},
            {index:4,id_product:"P0004",name_product:"Ruby Kito Fiber",score_product:400,group_product:"ดีท็อก",preice_retail:250,price_agle:200}
        ]
    
        $scope.AddProduct = function(data){
             
            document.getElementById("fileName").innerHTML = "ไม่ได้เลือกไฟล์ใด";

            $("#modal-manageproduct-Add").modal('show');

            $scope.addPhotofile = function(data){

                $('#fileUpload').trigger('click'); 
      
                document.getElementById("fileUpload").addEventListener("change", function(){
                  var fullPath = this.value; // fetched value = C:\fakepath\fileName.extension
                  var fileName = fullPath.split(/(\\|\/)/g).pop();  // fetch the file name
                  document.getElementById("fileName").innerHTML = fileName;  // display the file name
                  console.log(fileName);
                }, false);
      
                  
              }

              $scope.SavemodalSave = function(){
                window.location.reload();
              }

        }
    
        $scope.SearcProduct = function(data){
             
            console.log("Search");
            
         }
    
        $scope.EditProduct = function(data){

            document.getElementById("fileNameedit").innerHTML = "ไม่ได้เลือกไฟล์ใด";
         
            $("#modal-manageproduct-Edit").modal('show');

            $scope.editPhotofile = function(data){

                document.getElementById("fileNameedit").innerHTML = "ไม่ได้เลือกไฟล์ใด";
            
                $('#editfileUpload').trigger('click'); 
      
                document.getElementById("editfileUpload").addEventListener("change", function(){
                  var fullPathedit = this.value; // fetched value = C:\fakepath\fileName.extension
                  var fileNameedit = fullPathedit.split(/(\\|\/)/g).pop();  // fetch the file name
                  document.getElementById("fileNameedit").innerHTML = fileNameedit;  // display the file name
                  console.log(fileNameedit);
                }, false);
      
                  
              }
              $scope.SavemodalSave = function(){
                window.location.reload();
              }
           
        }
    
        $scope.DeleteProduct = function(data){
            
            $("#modal-confirm-Delete").modal('show');
            
        }

        $scope.SavemodalDelete = function(){
            window.location.reload();
          }
        });

})();






