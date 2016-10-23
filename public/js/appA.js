app = new angular.module('app',[]);


app.config(['$routeProvider',function($routeProvider){

     $routeProvider
     .when('/admin',
        {
        controller:'painelController',
        templateUrl:'templates/painelAdmin.html'
        }).
    when('/admin',
        {
        controller:'bannerController',
        templateUrl:'templates/banner.html'
        });

    app.controller('painelController',function($scope){
        $scope.descricao='daniel';
    });

}]);