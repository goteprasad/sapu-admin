sapuApp.controller('birthctrl',function($scope)
{

   
    if(localStorage.getItem("user")==null)
    {
 			window.location.href = 'login.html';
    }
    else
    {

    }
     $scope.myData = [
    {
        firstName: "Cox",
        lastName: "Carney",
        company: "Enormo",
        employed: true
    },
    {
        firstName: "Lorraine",
        lastName: "Wise",
        company: "Comveyer",
        employed: false
    },
    {
        firstName: "Nancy",
        lastName: "Waters",
        company: "Fuelton",
        employed: false
    }
  ];
   


});