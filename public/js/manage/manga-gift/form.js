(function () {

    var app = angular.module('application', ['angularUtils.directives.dirPagination']);

app.controller('ManageGiftController', function ($scope,$http){

    $scope.AddGitf = function(data){
         
        $("#modal-managegift-Add").modal('show');
       
    }

    $scope.SearchGitf = function(data){
         
        console.log("Search");
        
     }

    $scope.EditGitf = function(data){
     
        $("#modal-managegift-Edit").modal('show');
       
    }

    $scope.DeleteGitf = function(data){
        
        $("#modal-confirm-Delete").modal('show');
        
    }
    });


})();






