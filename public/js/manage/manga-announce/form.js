$(document).ready(function() {
  $('.nav li a ').click(function () {
      $('.nav li a .collapse').removeClass('in');
  });
});
(function () {
    var app = angular.module('application', ['angularUtils.directives.dirPagination']);
 
    app.controller('ManageAnnounceController', function ($scope,$http){

        $scope.announceall = [
        {index:1,id_announce:"001",user_name:"PFH Offcial",titel_announce:"เคล็ดลับชองทับทิม ดื่มทับทิมสิคะ",date_announce:"2018-02-01 10:43:59"},
        {index:2,id_announce:"001",user_name:"PFH Offcial",titel_announce:"เคล็ดลับชองทับทิม ดื่มทับทิมสิคะ",date_announce:"2018-02-01 10:43:59"},
        {index:3,id_announce:"001",user_name:"PFH Offcial",titel_announce:"เคล็ดลับชองทับทิม ดื่มทับทิมสิคะ",date_announce:"2018-02-01 10:43:59"},
        {index:4,id_announce:"001",user_name:"PFH Offcial",titel_announce:"เคล็ดลับชองทับทิม ดื่มทับทิมสิคะ",date_announce:"2018-02-01 10:43:59"},
        {index:5,id_announce:"001",user_name:"PFH Offcial",titel_announce:"เคล็ดลับชองทับทิม ดื่มทับทิมสิคะ",date_announce:"2018-02-01 10:43:59"},
        {index:6,id_announce:"001",user_name:"PFH Offcial",titel_announce:"เคล็ดลับชองทับทิม ดื่มทับทิมสิคะ",date_announce:"2018-02-01 10:43:59"},
        {index:7,id_announce:"001",user_name:"PFH Offcial",titel_announce:"เคล็ดลับชองทับทิม ดื่มทับทิมสิคะ",date_announce:"2018-02-01 10:43:59"},
        {index:8,id_announce:"001",user_name:"PFH Offcial",titel_announce:"เคล็ดลับชองทับทิม ดื่มทับทิมสิคะ",date_announce:"2018-02-01 10:43:59"},
        {index:9,id_announce:"001",user_name:"PFH Offcial",titel_announce:"เคล็ดลับชองทับทิม ดื่มทับทิมสิคะ",date_announce:"2018-02-01 10:43:59"},
        {index:10,id_announce:"001",user_name:"PFH Offcial",titel_announce:"เคล็ดลับชองทับทิม ดื่มทับทิมสิคะ",date_announce:"2018-02-01 10:43:59"},
        {index:11,id_announce:"001",user_name:"PFH Offcial",titel_announce:"เคล็ดลับชองทับทิม ดื่มทับทิมสิคะ",date_announce:"2018-02-01 10:43:59"},
        {index:12,id_announce:"001",user_name:"PFH Offcial",titel_announce:"เคล็ดลับชองทับทิม ดื่มทับทิมสิคะ",date_announce:"2018-02-01 10:43:59"},
        {index:13,id_announce:"001",user_name:"PFH Offcial",titel_announce:"เคล็ดลับชองทับทิม ดื่มทับทิมสิคะ",date_announce:"2018-02-01 10:43:59"},
        {index:14,id_announce:"001",user_name:"PFH Offcial",titel_announce:"เคล็ดลับชองทับทิม ดื่มทับทิมสิคะ",date_announce:"2018-02-01 10:43:59"},
        {index:15,id_announce:"001",user_name:"PFH Offcial",titel_announce:"เคล็ดลับชองทับทิม ดื่มทับทิมสิคะ",date_announce:"2018-02-01 10:43:59"},
        {index:16,id_announce:"001",user_name:"PFH Offcial",titel_announce:"เคล็ดลับชองทับทิม ดื่มทับทิมสิคะ",date_announce:"2018-02-01 10:43:59"},
        {index:17,id_announce:"001",user_name:"PFH Offcial",titel_announce:"เคล็ดลับชองทับทิม ดื่มทับทิมสิคะ",date_announce:"2018-02-01 10:43:59"},
        {index:18,id_announce:"001",user_name:"PFH Offcial",titel_announce:"เคล็ดลับชองทับทิม ดื่มทับทิมสิคะ",date_announce:"2018-02-01 10:43:59"},
        {index:19,id_announce:"001",user_name:"PFH Offcial",titel_announce:"เคล็ดลับชองทับทิม ดื่มทับทิมสิคะ",date_announce:"2018-02-01 10:43:59"},
        {index:20,id_announce:"001",user_name:"PFH Offcial",titel_announce:"เคล็ดลับชองทับทิม ดื่มทับทิมสิคะ",date_announce:"2018-02-01 10:43:59"},
        {index:21,id_announce:"001",user_name:"PFH Offcial",titel_announce:"เคล็ดลับชองทับทิม ดื่มทับทิมสิคะ",date_announce:"2018-02-01 10:43:59"},
        {index:22,id_announce:"001",user_name:"PFH Offcial",titel_announce:"เคล็ดลับชองทับทิม ดื่มทับทิมสิคะ",date_announce:"2018-02-01 10:43:59"},
        {index:23,id_announce:"001",user_name:"PFH Offcial",titel_announce:"เคล็ดลับชองทับทิม ดื่มทับทิมสิคะ",date_announce:"2018-02-01 10:43:59"},
        {index:24,id_announce:"001",user_name:"PFH Offcial",titel_announce:"เคล็ดลับชองทับทิม ดื่มทับทิมสิคะ",date_announce:"2018-02-01 10:43:59"}]

        $scope.AddAnnounce = function(data){
         
            document.getElementById("fileName").innerHTML = "ไม่ได้เลือกไฟล์ใด";

            $("#modal-manageannounce-Add").modal('show');
            

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

        $scope.EditAnnounce = function(data){

            document.getElementById("fileNameedit").innerHTML = "ไม่ได้เลือกไฟล์ใด";
            
            $("#modal-manageannounce-Edit").modal('show');
            
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

        $scope.DeleteAnnounce = function(data){

            $("#modal-confirm-Delete").modal('show');
            
        }

        $scope.SavemodalDelete = function(){
            window.location.reload();
          }

     });
 
 
 })();
 
 
 
 
 
 
 