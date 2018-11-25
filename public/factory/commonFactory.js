angular.module('app').service('factoryCommon', function ($http)
{
    function getResponse(path) {
        return  $http.get(path).then(function (response)
        {
            if (response.data.success)
            {
                return response.data.records;
            } else
            {
                return {};
            }
        })
    }
    function postResponse(path, obj) {
        return  $http.post(path, obj).then(function (response)
        {
            if (response.data.success)
            {
                return response.data.records;
            } else
            {
                return {};
            }
        })
    }
    this.getCountry = function ()
    {
        return getResponse('getCountry');
    }
    this.getState = function (country_id)
    {
        return postResponse('getState', {country_id: country_id});
    }
    this.getCity = function (state_id)
    {
        return postResponse('getCity', {state_id: state_id});
    }
});