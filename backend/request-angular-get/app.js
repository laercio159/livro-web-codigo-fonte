(function(){

angular.module('silex-request-get', [])
.controller('Home', function($scope, $http){
    $scope.somar = function() {
        $http.get('/livro-web-codigo-fonte/backend/request-angular-get/', {
            params: {numero1 : $scope.numero1, numero2 : $scope.numero2}
        }).then(function(response){
            $scope.resultado = response.data;
        });
    };
});

})();
