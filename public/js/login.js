var app = angular.module('loginApp', []);
app.controller('loginController', function ($scope, $http, $timeout)
{
    $scope.invalidBtn = false;
    $scope.logData = {};
    $scope.userAuth = function (userData)
    {
        $scope.invalidBtn = false;
        $http.post('user/auth', {userData}).then(function (response)
        {
            if (response.data.success)
            {
                window.location = '/#!/profile';
                location.reload();
                $scope.logData = {};
            } else
            {
                $scope.invalidBtn = true;
            }
        }, function (resp)
        {
            $scope.invalidBtn = true;
        });
    };
    $scope.forgetPassword = function (data)
    {
        $scope.invalidBtn = false;
        $scope.error = 3;
        $http.post('application/forgetPassword', {data: data}).then(function (reposonse)
        {
            if (reposonse.data.success)
            {
                $scope.error = 0;
                $timeout(function ()
                {
                    $scope.logData = {};
                    location.reload();
                }, 5000);


            } else
            {
                $scope.error = 1;
            }
        })
    }
});
$(document).ready(function () {
    $('#goRight').on('click', function () {
        $('#slideBox').animate({
            'marginLeft': '0'
        });
        $('.topLayer').animate({
            'marginLeft': '100%'
        });
    });
    $('#goLeft').on('click', function () {
        $('#slideBox').animate({
            'marginLeft': '50%'
        });
        $('.topLayer').animate({
            'marginLeft': '0'
        });
    });
});
