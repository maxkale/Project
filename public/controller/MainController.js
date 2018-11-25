app.controller('MainController', function ($scope, $rootScope, $http)
{
    $rootScope.employeeData = [];
    $scope.getLoginUserData = function ()
    {
        $http.get('getCurrentUser').then(function (response)
        {
            $rootScope.employeeData = response.data;
        });
    };
    $scope.getLoginUserData();
    $rootScope.$on('updateUser', function (evt, data)
    {
        $scope.getLoginUserData();

    });

});
