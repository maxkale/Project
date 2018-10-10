var app = angular.module('loginApp', []);
app.controller('loginController', function ($scope, $http)
{
    $scope.invalidBtn = false;
    $scope.userAuth = function (userData)
    {
        $scope.invalidBtn = false;
        $http.post('user/auth', {userData}).then(function (response)
        {
            if (response.data.success)
            {
                window.location = '/home';
            } else
            {
                $scope.invalidBtn = true;
            }
        });
    };
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
