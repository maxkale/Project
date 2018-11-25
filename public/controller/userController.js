app.controller('userCntrl', function ($scope, $http)
{
    $scope.sbtBtn = false;
    $scope.addUser = function (data)
    {
        $http.post('api/addUser', {data}).then(function (response)
        {
            $('#exampleModal').modal('hide');
            if (response.data.success)
            {
                alert('user create succesfully');
            } else
            {
                alert('something wents wrong');

            }

        })
    };
});