var myApp = angular.module('myApp', ['ngRoute']);
//var myApp = angular.module('myApp', ['ngRoute']);


myApp.config(['$routeProvider',
  function($routeProvider) {
    $routeProvider.
      when('/home',{
        templateUrl: '../portal/views/personal.php'
      }).
      when('/docs', {
        templateUrl: '../portal/views/docs.php',
      }).
      // when('/women', {
      //   templateUrl: '/views/womenpage.html',
      //   controller: 'game2'
      // }).
      when('/academic', {
        templateUrl: '../portal/views/academic.php'
      }).
      when('/guardian', {
        templateUrl: '../portal/views/guardian.php'
      }).
      otherwise({redirectTo: '/home'});
  }]);
