app.config(['$stateProvider',function($stateProvider)
{
   $stateProvider
                .state('home',{
                   url:'/home',
                   templateUrl:'/home'                   
        });
}])