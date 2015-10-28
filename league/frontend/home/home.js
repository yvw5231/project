var HomeModule = angular.module('HomeModule', []);

HomeModule.controller("HomeController", ['$scope', '$stateParams', 'Item', function($scope, $stateParams, Item){
	$scope.item = Item.get();

}]);

document.getElementById("nav01").innerHTML =
"<ul id='menu'>" +
"<li><a href='index.html'>Home</a></li>" +
"<li><a href='ShowAddress.php'>Data</a></li>" +
// "<li><a href='about.html'>About</a></li>" +
"</ul>";