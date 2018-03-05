sapuApp.config(function($routeProvider) {
    $routeProvider
    .when("/", {
        controller: "DashboardCtrl",
        templateUrl : "views/dashboard.html"
    })
    .when("/profile", {
        templateUrl : "views/profile.html"
    })
    .when("/setting", {
        templateUrl : "views/setting.html"
    })
    .when("/arogya-mitra", {
        templateUrl : "views/arogya-mitra.html"
    })
    .when("/birth", {
        controller: "birthctrl",
        templateUrl : "views/birth.html"
    })
    .when("/health", {
         controller: "helthCtrl",        
        templateUrl : "views/health.html"
    })
    .when("/events", {
        templateUrl : "views/events.html"
    })
    .when("/arogya-bank", {
        templateUrl : "views/arogya-bank.html"
    })
    .when("/monthly-reports", {
        templateUrl : "views/monthly-reports.html"
    })
    .when("/surveyor_details",{
        templateUrl : 'views/surveyor_details.html',
        controller: 'SurveyorCtrl'
    });
});


$HOST="http://www.hatchers.in/sapu/index.php";
//$HOST="http://localhost/sapu/index.php";