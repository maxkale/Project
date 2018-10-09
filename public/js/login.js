var app = angular.module('loginApp', []);
app.controller('loginController', function ($scope, $http)
{
    $scope.userAuth = function (userData)
    {
        $http.post('user/auth', {userData}).then(function (response)
        {
            window.location = '/home';
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
