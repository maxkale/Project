angular.module('app').controller('profileCntl', function ($rootScope, $scope, $http, factoryCommon)
{
    $scope.userData = {};
    $scope.sbBtn = false;
    $scope.userData = $rootScope.employeeData;
    factoryCommon.getCountry().then(function (response)
    {
        $scope.countryList = response;
    });

    $scope.getState = function (country_id)
    {
        $scope.stateList = [];
        $scope.cityList = [];
        if (angular.isDefined(country_id))
        {
            factoryCommon.getState(country_id).then(function (response)
            {
                $scope.stateList = response;
            });
        }
    }
    $scope.getCity = function (state_id) {
        if (angular.isDefined(state_id))
        {
            factoryCommon.getCity($scope.userData.state_id).then(function (response)
            {
                $scope.cityList = response;
            });
        }
    }
    ;
    $scope.putResponse = function (path, data)
    {
        $http.put(path, data).then(function (response)
        {
            return response;
        });
    };
    $scope.getState($scope.userData.country_id);
    $scope.getCity($scope.userData.state_id);
    $scope.updateUser = function (data)
    {
        $scope.sbBtn = false;
        $http.put('Profile', {userData: data}).then(function (response)
        {
            if (response.data.success)
            {
                $rootScope.$emit('updateUser', {});
                alert('Updated User Profile SuccessFully');
            } else
            {
                alert('Something Wents Wrong');
            }
        }, function ()
        {
            alert('server Congested');
        });
//     

    };
});