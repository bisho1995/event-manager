app.controller('login',function($scope,$http,$window)
	{
		$scope.data={};
		$scope.data.email="bishoatiem@gmail.com";
		$scope.data.password="password";
		$scope.submitForm=function()
		{
			var data={email: $scope.data.email,password: $scope.data.password};
			postForm($window,$http,data);
		}
	});

function postForm($window,$http,data)
{
	let url=location.href;
	$.post(url+'/verify_login',data,gotDataAfterSendingToServer);
}

function gotDataAfterSendingToServer(data)
{
	if(data.error)
	{
		Materialize.toast(data.error,4000);
	}
	else
	{
		console.log(data);
		redirect(data.success.url);
	}
}