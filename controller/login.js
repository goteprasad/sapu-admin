
        
sapuApp.controller("loginCtrl",function($scope,$http,$rootScope)
{


        $scope.login = function(){
            $scope.mobile;
            $scope.password;
          
//            $http.get('http://www.hatchers.in/sapu/index.php/api/web_api_v1/login',{
//                mobile: $scope.mobile,
//                password: $scope.password,
//                format: "JSON"
//            }).then(function(response){
//               //alert(JSON.stringify(response)); 
//               alert(response.data);
//               if(response.data[0].status === 1){
//                   window.location.href = 'index.html';
//               }
//            });
            
            $http({
        method : "GET",
        url : $HOST+"/api/web_api_v1/login?format=json&mobile="+$scope.mobile+"&password="+$scope.password
        
    }).then(function mySuccess(response) {
       // alert(JSON.stringify(response));
       /*
        login.js:25 {"data":{"status":"Success","count":1,"type":"login","result":[{"user_name":"vishal","mobile":"9975294782","dob":"2018-01-03","password":"user@123","type":"A","id":"1"}],"message":"Login successfully"},"status":200,"config":{"method":"GET","transformRequest":[null],"transformResponse":[null],"jsonpCallbackParam":"callback","url":"http://www.hatchers.in/sapu/index.php/api/web_api_v1/login?format=json&mobile=9975294782&password=user@123","headers":{"Accept":"application/json, text/plain,"}},"statusText":"OK"}
        */
        if(response.data.status==="Success"){
            
           
            console.log(JSON.stringify(response));
            var udata=response.data.result;
            localStorage.setItem("user",udata);
            window.location.href = 'index.html';
        }
    }, function myError(response) {
        alert(response.statusText);
    });
        };    
});