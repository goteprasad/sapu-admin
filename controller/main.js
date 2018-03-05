sapuApp.controller('mainCtrl',function($scope)
{

    if(localStorage.getItem("user")=='null')
    {

   // alert("if"+localStorage.getItem("user"));
            window.location.href = 'login.html';
    }
    else
    {
        //alert("else"+localStorage.getItem("user"));

    }    
    if(localStorage.getItem("user")==null)
    {
 			window.location.href = 'login.html';
    }
    else
    {


    }
    
    $scope.logout = function()
     {
   
            localStorage.setItem("user",null);
            window.location.href = 'login.html';
     };


});


