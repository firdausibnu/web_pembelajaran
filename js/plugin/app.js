var app = angular.module('alfi', ['ngAnimate', 'ng-fx']);

app.directive('quiz', [
    function () {
        return {
            restrict: 'A',
            scope: true,
            templateUrl: 'section/kuisTemplate.html',
            bindToController: {quiz: '@'},
            controllerAs: 'quiz',
            controller: ['$http', '$timeout',
                function ($http, $timeout) {
                    var vm = this;
                    vm.init = function () {
                        vm.displayW = 650; // Gunakan ini untuk set lebar dari tampilan utama aplikasi secara global
                        vm.displayWe = 470; // Gunakan ini untuk set lebar dari tampilan utama aplikasi secara global
                        vm.started = true;
                        vm.begin = false;
                        vm.ended = false;
                    };
                    vm.init();

                    vm.reset = function () {
                        vm.questions = [];
                        vm.answers = [];
                        vm.answered = 0;
                        vm.position = 0;
                        vm.submitReady = false;
                    };
                    vm.run = function () {
                        $http.get('kuis' + vm.quiz + '/questions.php').success(function (response) { // Change the endpoint as you wish
                            vm.questions = response.result;
                            angular.forEach(response.result, function (value, key) {
                                vm.answers.push({'id': value.id, 'answer': 0});
                            });
                        });
                        vm.startApp = function () {
                            var s = $timeout(function () {
                                vm.started = false;
                                vm.begin = true;
                                $timeout.cancel(s);
                            });
                        };
                        vm.submit = function () {
                            if (vm.position === vm.questions.length - 1) {
                                $http.post('kuis' + vm.quiz + '/submit.php', vm.answers).success(function (response) {
                                    vm.results = response.result;
                                    console.log(JSON.stringify(vm.results));
                                    var correct = 0;
                                    angular.forEach(vm.results, function (value) {
                                        if (value.result) {
                                            console.log(value.result);
                                            correct++;
                                        }
                                    });
                                    vm.score = Math.round(((correct / vm.results.length) * 100) * 100) / 100;
                                    var distance = (470 * vm.results.length - 1);
                                    console.log(vm.results.length);
                                    console.log(distance);
                                    vm.ended = true;
                                    angular.element('#quiz-' + vm.quiz + '.scrolls').animate({scrollLeft: distance}, 500);
                                    console.log(vm.results);
                                });
                            }
                        }
                        vm.next = function () {
                            if (vm.position < vm.questions.length - 1) {
                                var distance = 470 + (470 * vm.position);
                                console.log(distance);
                                angular.element('#quiz-' + vm.quiz + '.scrolls').animate({scrollLeft: distance}, 500);
                                vm.position++;
                                if (vm.position === vm.questions.length - 1) {
                                    vm.submitReady = true;
                                }
                            }
                        };
                        vm.prev = function () {
                            if (vm.position > 0) {
                                vm.submitReady = false;
                                var distance = (470 * (vm.position)) - 470;
                                console.log(distance);
                                angular.element('#quiz-' + vm.quiz + '.scrolls').animate({scrollLeft: distance}, 500);
                                vm.position--;
                                if (vm.position === vm.questions.length - 2) {
                                    vm.submitReady = false;
                                }
                            }
                        };
                        vm.choose = function (id, index, answerId) {
                            console.log(vm.answers[vm.position].answer);
                            if (vm.answers[vm.position].answer === 0) { // If hasn't answered, iterate the vm.answered
                                vm.answered++;
                            }
                            vm.answers[vm.position] = {"id": id, "index": index, "answer": answerId};
                        };

                        vm.reload = function () {
                            vm.init();
                            vm.reset();
                            vm.run();
                        };
                    };
                    vm.reset();
                    vm.run();
                }]
        };
    }]);