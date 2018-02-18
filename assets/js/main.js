var app = angular.module('app', []);



function redirect(href)
{
	window.location.href=href;
}


function displaySpinner()
{
	$(".preloader-container").fadeIn();
}

function hideSpinner()
{
	$(".preloader-container").fadeOut();
}


$(document).ready(function()
{
	$(".button-collapse").sideNav();
	hideSpinner();
});

