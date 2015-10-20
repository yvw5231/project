'use strict';

var app = angular.module("League", [
	'ui.router',
	'leagueServices'
	]);


app.config(['$stateProvider', '$urlRouterProvider', function($stateProvider, $urlRouterProvider){
	$urlRouterProvider.otherwise('/home');

	$stateProvider
	  //for routing to the home/landing page
	  .state('home', {
	    url: '/home',
	    templateUrl: 'frontend/templates/home.html',
	    controller: 'HomeController'
	  })

	  .state('inventory', {
	  	url: '/inventory',
	  	templateUrl: 'frontend/templates/inventory.html',
	  	controller: 'InventoryController'
	  })

	  //for routing to individual iot categories
	  .state('item', {
	    url: '/inventory/:itemId',
        templateUrl: 'frontend/templates/item.html',
        controller:   'ItemController'
	  })

}]);


app.controller("InventoryController", ['$scope', function($scope){

}]);

app.controller("ItemController", ['$scope', function($scope){

}]);

app.controller("HomeController", ['$scope', function($scope){
	//get promotional items?
	//implement last
}]);

var leagueServices = angular.module('leagueServices', ['ngResource']);

leagueServices.factory('Item', ['$resource', function($resource) {
	return $resource();
}]);


