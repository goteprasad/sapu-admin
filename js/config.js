sapuApp.config(function($routeProvider) {
    $routeProvider
    .when("/", {
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
        templateUrl : "views/birth.html"
    })
    .when("/health", {
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
    });
});


