var myApp = angular.module('myApp', ['ngRoute']);
//var myApp = angular.module('myApp', ['ngRoute']);


myApp.config(['$routeProvider',
  function($routeProvider) {
    $routeProvider.
      when('/home',{
        templateUrl: 'test.bau.edu.ng/mo_tweaking/mybau/portal/views/personal.html'
      }).
      when('/docs', {
        templateUrl: 'test.bau.edu.ng/mo_tweaking/mybau/portal/views/docs.html',
      }).
      // when('/women', {
      //   templateUrl: '/views/womenpage.html',
      //   controller: 'game2'
      // }).
      when('/academic', {
        templateUrl: 'test.bau.edu.ng/mo_tweaking/mybau/portal/views/academic.html'
      }).
      when('/guardian', {
        templateUrl: 'test.bau.edu.ng/mo_tweaking/mybau/portal/views/guardian.html'
      }).
      otherwise({redirectTo: '/home'});
  }]);
