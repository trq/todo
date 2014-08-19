(function() {
    var app = angular.module('todo', []);

    app.controller('TodoController', ['$http', function($http) {
        var self = this;

        $http.get('/api/todos', {headers: {Accept: 'application/json'}}).success(function(data) {
            self.items = data.todos;
        });
    }]);
})();
