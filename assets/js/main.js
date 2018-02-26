var app = angular.module('app', []);

appData={
	url: "http://localhost:82/201802/CodeIgniter-3.1.7/CodeIgniter-3.1.7"
};

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

