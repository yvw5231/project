'use strict';

var leagueServices = angular.module('leagueServices', ['ngResource']);

leagueServices.factory('Item', ['$resource', function($resource) {
	return $resource('backend/get_items.php');
}]);

leagueServices.factory('User', ['$resource', function($resource) {
	return $resource();
}]);


