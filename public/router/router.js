 "use strict";
app.config(['$stateProvider',function($stateProvider,$ocLazyLoad)
{
   $stateProvider
                .state('home',{
                   url:'/home',
                   templateUrl:'/home'                   
        })
		 .state('User',{
                   url:'/User',
                   templateUrl:'/User' ,
				resolve: {
				 return $ocLazyLoad.load ({
										
											    files: ['src/controllerJsFile.js']
												  });
							});
			}
}]);