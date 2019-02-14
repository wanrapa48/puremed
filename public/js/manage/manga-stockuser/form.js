(function () {


    var app = angular.module('application', ['angularUtils.directives.dirPagination']);

    app.controller('ManageStockUserController', function ($scope,$http){

        $scope.stockuserall=[
            {index:1,iduser:"001",nameuser:"ธนภพ",lastname:"ทองอิ่มสุข",amounttotal:20,datetime:"2019-02-10 19:19:19"},
            {index:2,iduser:"002",nameuser:"ธนภพ",lastname:"ทองอิ่มสุข",amounttotal:20,datetime:"2019-02-10 19:19:19"},
            {index:3,iduser:"003",nameuser:"ธนภพ",lastname:"ทองอิ่มสุข",amounttotal:20,datetime:"2019-02-10 19:19:19"},
            {index:4,iduser:"004",nameuser:"ธนภพ",lastname:"ทองอิ่มสุข",amounttotal:20,datetime:"2019-02-10 19:19:19"},
            {index:5,iduser:"005",nameuser:"ธนภพ",lastname:"ทองอิ่มสุข",amounttotal:20,datetime:"2019-02-10 19:19:19"}
        ]
    
        $scope.SearchStock = function(data){
             
            console.log("Search");
            
         }
    
        });

})();






