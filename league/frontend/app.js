'use strict';

var app = angular.module("League", [
	'ui.router',
	'leagueServices',
	
	'HomeModule',
	'InventoryModule',
	'ItemModule'
	]);


app.config(['$stateProvider', '$urlRouterProvider', function($stateProvider, $urlRouterProvider){
	$urlRouterProvider.otherwise('/home');

	$stateProvider
	  //for routing to the home/landing page
	  .state('home', {
	    url: '/home',
	    templateUrl: 'frontend/home/home.html',
	    controller: 'HomeController'
	  })

	  .state('inventory', {
	  	url: '/inventory',
	  	templateUrl: 'frontend/inventory/inventory.html',
	  	controller: 'InventoryController'
	  })

	  //for routing to individual iot categories
	  .state('item', {
	    url: '/inventory/:itemId',
        templateUrl: 'frontend/item/item.html',
        controller:   'ItemController'
	  })

}]);