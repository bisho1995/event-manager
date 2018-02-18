app.controller('register',function($scope,$window,$http)
{
    $scope.data={
        errors: 0
    };
    $scope.data.display=
    {
        success:false,
        error:false,
    };
    $scope.data.success="Success";
    $scope.data.error="Error";
    $scope.data.full_name="Full Name";
    $scope.data.email="bishoatiem@gmail.com";
    $scope.data.team_name="Team Name";
    $scope.data.password="password";
    $scope.data.confirm_password="password";
    $scope.submitForm=function()
    {
        submitTheForm($scope);
    };
});

function submitTheForm($scope)
{
    itemsValidation($scope);
    if(!isThereAnError($scope)) 
        sendDataToServer($scope);
}

function sendDataToServer($scope)
{
    let url=location.href;
    let data=getDataJsonObject($scope);
    displaySpinner();
    $.post(url+'/register_new_team',data,gotDataAfterSendingToServer);
}

function getDataJsonObject($scope)
{
    let data={
        fullname: $scope.data.full_name,
        email: $scope.data.email,
        teamname: $scope.data.team_name,
        password: $scope.data.password,
        confirm_password: $scope.data.confirm_password,
    };
    return data;
}

function gotDataAfterSendingToServer(data)
{
    console.log(data);
    hideSpinner();
}

function itemsValidation($scope)
{
    if(checkThePasswords($scope)==true)
    {

    }
}

function checkThePasswords($scope)
{
    if(!passwordsMatch($scope.data.password,$scope.data.confirm_password))
    {
        let messageText="The passwords do not match.";
        setErrorMessage($scope,messageText);
        setErrorStatus($scope);
        displayErrorMessage($scope);
        return false;
    }
    return true;
}

function setErrorStatus($scope)
{
    $scope.data.errors++;
}

function passwordsMatch(pass1,pass2)
{
    return pass1.localeCompare(pass2)==0;
}

function setErrorMessage($scope,data)
{
    $scope.data.error=data;
}

function displayErrorMessage($scope)
{
    $scope.data.display.error=true;
}
function displaySuccessMessage($scope)
{
    $scope.data.display.success=true;
}

function isThereAnError($scope)
{
    return $scope.data.errors!==0;
}