'use strict';

angular.module('phonecat', [])
    .controller('Home', function($scope, $http) {
        $http.get('data/phones/phones.json').then(function(response){
            $scope.telefones = response.data;
        });
        
        $scope.ui_estado = 'lista';
        $scope.telefone = null;
        
        $scope.mostrarDetalhes = function(telefone) {
            $scope.ui_estado = 'detalhes';
            $http.get('data/phones/' + telefone.id + '.json').then(
                function(response){
                    $scope.telefone = response.data;
                    $scope.telefone.imageUrl = $scope.telefone.images[0];
                });
        };
        
        $scope.mostrarLista = function() {
            $scope.ui_estado = 'lista';
        };
        
        $scope.mostrarImagem = function(imagem) {
            console.log(imagem);
            $scope.telefone.imageUrl = imagem;
        }
    });