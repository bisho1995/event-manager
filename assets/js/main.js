var app = angular.module('app', []);



function redirect(href)
{
	window.location.href=href;
}





$(document).ready(function()
{
	$(".button-collapse").sideNav();
	$(".preloader-container").css('display', 'none');
});