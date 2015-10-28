var HomeModule = angular.module('HomeModule', []);

HomeModule.controller("HomeController", ['$scope', '$stateParams', 'Item', function($scope, $stateParams, Item){
	$scope.item = Item.query();

}]);