(function () {

    var app = angular.module('application', ['angularUtils.directives.dirPagination']);
 
    app.controller('ManageTripController', function ($scope,$http){

        $scope.tripall = [
            {index:1,id_trip:"001",titel_trip:"ทะเลลหรรษา",promotion_type:"ทริป",datestart_trip:"2018-02-01",dateend_trip:"2018-02-31",score_trip:"50"},
            {index:2,id_trip:"002",titel_trip:"ทะเลลหรรษา",promotion_type:"ทริป",datestart_trip:"2018-02-01",dateend_trip:"2018-02-31",score_trip:"50"},
            {index:3,id_trip:"003",titel_trip:"ทะเลลหรรษา",promotion_type:"ทริป",datestart_trip:"2018-02-01",dateend_trip:"2018-02-31",score_trip:"50"},
            {index:4,id_trip:"004",titel_trip:"ทะเลลหรรษา",promotion_type:"ทริป",datestart_trip:"2018-02-01",dateend_trip:"2018-02-31",score_trip:"50"},
            {index:5,id_trip:"005",titel_trip:"ทะเลลหรรษา",promotion_type:"ทริป",datestart_trip:"2018-02-01",dateend_trip:"2018-02-31",score_trip:"50"},
            {index:6,id_trip:"006",titel_trip:"ทะเลลหรรษา",promotion_type:"ทริป",datestart_trip:"2018-02-01",dateend_trip:"2018-02-31",score_trip:"50"}
        ]

        $scope.AddTrip = function(data){
         
            $("#modal-managetrip-Add").modal('show');

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

        $scope.SearchTrip = function(data){
         
           console.log("Search");
           
        }

        $scope.EditTrip = function(data){
         
            $("#modal-managetrip-Edit").modal('show');

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

        $scope.DeleteTrip = function(data){
            
            $("#modal-confirm-Delete").modal('show');
            
        }

        $scope.SavemodalDelete = function(){
          window.location.reload();
        }

     });
 
 
 })();