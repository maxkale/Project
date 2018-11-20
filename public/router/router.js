app.config(['$stateProvider', function ($stateProvider, $ocLazyLoadProvider)
    {
        $stateProvider
                .state('home', {
                    url: "/home",
                    views: {
                        "": {
                            templateUrl: "/home"
                        }
                    },
                    resolve: {
                        loadMyCtrl: ['$ocLazyLoad', function ($ocLazyLoad) {
                                return $ocLazyLoad.load('state1'); // Resolve promise and load before view 
                            }]
                    }
                })
                .state('User', {
                    url: "/User",
                    views: {
                        "": {
                            templateUrl: "/User"
                        }
                    },
                    resolve: {
                        loadMyCtrl: ['$ocLazyLoad', function ($ocLazyLoad) {
                                return $ocLazyLoad.load('controller/userController.js'); // Resolve promise and load before view 
                            }]
                    }
                })
                .state('dashboard', {
                    url: "/dashboard",
                    views: {
                        "": {
                            templateUrl: "/dashboard"
                        }
                    },
                    resolve: {
                        loadMyCtrl: ['$ocLazyLoad', function ($ocLazyLoad) {
                                return $ocLazyLoad.load('controller/userController.js'); // Resolve promise and load before view 
                            }]
                    }
                })
                .state('profile', {
                    url: "/profile",
                    views: {
                        "": {
                            templateUrl: "/Profile"
                        }
                    },
                    resolve: {
                        loadMyCtrl: ['$ocLazyLoad', function ($ocLazyLoad) {
                                return $ocLazyLoad.load('controller/userController.js'); // Resolve promise and load before view 
                            }]
                    }
                })
    }]);
 