(function(global, angular, $, solaria){
    var moduleBaseUrl = baseUrl.replace(/\/+$/g,"") + '/backend/modules/cotizador-telsur/';

    solaria.controller('CotizadorTelsurModuleController', function($scope, $http, $solariaMessenger){
        var initializeConfig = function(config){
            config.data = {};
        };

        $scope.init = function () {
            if (!contents.config.id)
                initializeConfig(contents.config);
            $scope.config = angular.copy(contents.config);

        };

        $scope.submit = function(){
            $http.post(moduleBaseUrl + 'save', $scope.config)
                .success(function(response){
                    if(!$scope.config.id)
                        $scope.config.id = response.config.id;
                    $solariaMessenger.showMessage(response.message, 'success');
                })
                .error(function(errors, code){
                    $solariaMessenger.showErrors(errors);
                });
        };
    });
})(window, angular, jQuery, solaria);