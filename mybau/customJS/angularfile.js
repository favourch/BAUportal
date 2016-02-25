var myApp = angular.module('myApp', ['ngRoute']);
//var myApp = angular.module('myApp', ['ngRoute']);


myApp.config(['$routeProvider',
  function($routeProvider) {
    $routeProvider.
      // when('/home',{
      //   templateUrl: '../mybau/views/studentInfo_pane.php'
      // }).
      when('/home',{
        templateUrl: '../portal/views/personal.php'
      }).
      when('/personal',{
        templateUrl: '../portal/views/personal.php'
      }).
      when('/docs', {
        templateUrl: '../portal/views/docs.php',
      }).
      when('/academic', {
        templateUrl: '../portal/views/academic.php'
      }).
      when('/guardian', {
        templateUrl: '../portal/views/guardian.php'
      }).
      // when('/studentInfo', {
      //   templateUrl: '../mybau/views/studentInfo_pane.php'
      // }).
      // when('/login_user', {
      //   templateUrl: '../mybau/views/login_pane.php'
      // }).
      otherwise({redirectTo: '/home'});
  }]);


var landingPage = angular.module('landingPage', ['ngRoute']);

landingPage.config(['$routeProvider',
  function($routeProvider) {
    $routeProvider.
      when('/home',{
        templateUrl: '../mybau/views/studentInfo_pane.php'
      }).
      when('/studentInfo', {
        templateUrl: '../mybau/views/studentInfo_pane.php'
      }).
       when('/login_user', {
        templateUrl: '../mybau/views/login_pane.php'
      }).
      otherwise({redirectTo: '/home'});
  }]);