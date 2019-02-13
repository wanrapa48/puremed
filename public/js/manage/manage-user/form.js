(function () {
	'use strict';
    var app = angular.module('application', ['angularUtils.directives.dirPagination']);

   app.controller('ManageUsersController', function ($scope,$http){

    $scope.user = [{index:1,user_id:"0012",user_name:"test@test.com",user_password:"12dste",
    name_user:"ธนภพ",lastname_user:"บุญยิ่ง",Position:"PM",Level:"VIP1"},{index:2,user_id:"0012",user_name:"test@test.com",user_password:"12dste",
    name_user:"ธนภพ",lastname_user:"บุญยิ่ง",Position:"PM",Level:"VIP1"},{index:3,user_id:"0012",user_name:"test@test.com",user_password:"12dste",
    name_user:"ธนภพ",lastname_user:"บุญยิ่ง",Position:"PM",Level:"VIP1"},{index:4,user_id:"0012",user_name:"test@test.com",user_password:"12dste",
    name_user:"ธนภพ",lastname_user:"บุญยิ่ง",Position:"PM",Level:"VIP1"},{index:5,user_id:"0012",user_name:"test@test.com",user_password:"12dste",
    name_user:"ธนภพ",lastname_user:"บุญยิ่ง",Position:"PM",Level:"VIP1"},{index:6,user_id:"0012",user_name:"test@test.com",user_password:"12dste",
    name_user:"ธนภพ",lastname_user:"บุญยิ่ง",Position:"PM",Level:"VIP1"},{index:7,user_id:"0012",user_name:"test@test.com",user_password:"12dste",
    name_user:"ธนภพ",lastname_user:"บุญยิ่ง",Position:"PM",Level:"VIP1"},{index:8,user_id:"0012",user_name:"test@test.com",user_password:"12dste",
    name_user:"ธนภพ",lastname_user:"บุญยิ่ง",Position:"PM",Level:"VIP1"},{index:9,user_id:"0012",user_name:"test@test.com",user_password:"12dste",
    name_user:"ธนภพ",lastname_user:"บุญยิ่ง",Position:"PM",Level:"VIP1"},{index:10,user_id:"0012",user_name:"test@test.com",user_password:"12dste",
    name_user:"ธนภพ",lastname_user:"บุญยิ่ง",Position:"PM",Level:"VIP1"},{index:11,user_id:"0012",user_name:"test@test.com",user_password:"12dste",
    name_user:"ธนภพ",lastname_user:"บุญยิ่ง",Position:"PM",Level:"VIP1"},{index:12,user_id:"0012",user_name:"test@test.com",user_password:"12dste",
    name_user:"ธนภพ",lastname_user:"บุญยิ่ง",Position:"PM",Level:"VIP1"},{index:13,user_id:"0012",user_name:"test@test.com",user_password:"12dste",
    name_user:"ธนภพ",lastname_user:"บุญยิ่ง",Position:"PM",Level:"VIP1"},{index:14,user_id:"0012",user_name:"test@test.com",user_password:"12dste",
    name_user:"ธนภพ",lastname_user:"บุญยิ่ง",Position:"PM",Level:"VIP1"},{index:15,user_id:"0012",user_name:"test@test.com",user_password:"12dste",
    name_user:"ธนภพ",lastname_user:"บุญยิ่ง",Position:"PM",Level:"VIP1"},{index:16,user_id:"0012",user_name:"test@test.com",user_password:"12dste",
    name_user:"ธนภพ",lastname_user:"บุญยิ่ง",Position:"PM",Level:"VIP1"},{index:17,user_id:"0012",user_name:"test@test.com",user_password:"12dste",
    name_user:"ธนภพ",lastname_user:"บุญยิ่ง",Position:"PM",Level:"VIP1"},{index:18,user_id:"0012",user_name:"test@test.com",user_password:"12dste",
    name_user:"ธนภพ",lastname_user:"บุญยิ่ง",Position:"PM",Level:"VIP1"},{index:19,user_id:"0012",user_name:"test@test.com",user_password:"12dste",
    name_user:"ธนภพ",lastname_user:"บุญยิ่ง",Position:"PM",Level:"VIP1"},{index:20,user_id:"0012",user_name:"test@test.com",user_password:"12dste",
    name_user:"ธนภพ",lastname_user:"บุญยิ่ง",Position:"PM",Level:"VIP1"}];
    //console.log($scope.user);

    $scope.EditUser = function(data){


        document.getElementById("fileName").innerHTML = "ไม่ได้เลือกไฟล์ใด";
        document.getElementById("fileNamecard").innerHTML = "ไม่ได้เลือกไฟล์ใด";

        $("#modal-manageuser-Edit").modal('show');

        $scope.addPhotofile = function(data){

          $('#fileUpload').trigger('click'); 

          document.getElementById("fileUpload").addEventListener("change", function(){
            var fullPath = this.value; // fetched value = C:\fakepath\fileName.extension
            var fileName = fullPath.split(/(\\|\/)/g).pop();  // fetch the file name
            document.getElementById("fileName").innerHTML = fileName;  // display the file name
            console.log(fileName);
          }, false);

            
        }

        $scope.addPhotocardfile = function(data){

          $('#filecardUpload').trigger('click'); 

          document.getElementById("filecardUpload").addEventListener("change", function(){
            var fullPathcard = this.value; // fetched value = C:\fakepath\fileName.extension
            var fileNamecard = fullPathcard.split(/(\\|\/)/g).pop();  // fetch the file name
            document.getElementById("fileNamecard").innerHTML = fileNamecard;  // display the file name
            console.log(fileName);
          }, false);
            
        }

        $scope.Savemodal = function(){
          $("#modal-confirm-Save").modal('show');
        }
    }

    $scope.DeleteUser = function(){
      $("#modal-confirm-Delete").modal('show');
    }

    $scope.SavemodalDelete = function(){
      window.location.reload();
    }
     
    });


})();






