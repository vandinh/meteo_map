'use strict';

var meteo = angular.module('meteoMap', []);

meteo.controller('citiesCtrl', ['$http', '$scope', function ($http, $scope) {
        console.log("cities");
        $scope.cities = [];
        $http(
                {
                    method: 'get',
                    url: 'http://localhost/test_bjt/meteo_map/cities',
                    headers: {
                        'Content-Type': 'application/json'
                    }
                })
                .then(function (response) {
                    $scope.cities = response.data.cities;
                })
                .catch(function (response) {
                    $scope.cities = response.data;
                    $scope.status = response.status;
                });
    }
]);

meteo.controller('cityCtrl', ['$http', '$scope', function ($http, $scope) {
        $scope.details = function (name) {
            $http({
                method: 'get',
                url: 'http://localhost/test_bjt/meteo_map' + name,
                headers: {
                    'Content-Type': 'application/json'
                }
            }).then(function (response) {
                $scope.city = response.data.city;
                $scope.status = response.status;
            }, function (response) {
                $scope.city = response.data;
                $scope.status = response.status;
            });
        };
    }
]);
 