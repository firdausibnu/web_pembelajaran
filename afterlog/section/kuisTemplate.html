<div class="wrapper" ng-style="{'width': quiz.displayW + 'px', 'opacity': 1}">
        <div ng-click="quiz.startApp()" ng-if="quiz.started" style="padding: 20px;">
            <img src="img/start.png" />
        </div>
    <div ng-if="quiz.begin">
            <div id="quiz-{{quiz.quiz}}" class="scrolls">
                <div class="holder" ng-repeat="q in quiz.questions track by q.id" ng-style="{'width': quiz.displayWe}" ng-if="!quiz.ended">
                    <div class="panel">
                        <div class="bg-primary panel-heading" ng-bind="q.question"></div>
                        <ol>
                            <li ng-class="{'selected': (quiz.answers[quiz.position].id == q.id) && (quiz.answers[quiz.position].index == $index)}" ng-repeat="c in ::q.choices track by $index"
                            class="choice form-group" ng-click="quiz.choose(q.id, $index, c.id)">
                                <span ng-bind="c.value"> </span>
                            </li>
                        </ol>
                    </div>
                </div>
                <div class="holder fx-zoom-normal fx-ease-none fx-dur-200" ng-style="{'width': quiz.displayWe}" ng-if="quiz.ended">
                    <h3 ng-if="quiz.results.length > 0">Persentase kebenaran:</h3>
                    <p style="color: black">{{quiz.score}}  %</p>
                    <div class="row" style="margin-top:20px">
                        <div class="col-xs-4" ng-repeat="result in ::quiz.results track by result.id" style="padding:10px";>
                            Jawaban No.{{($index+1)}}
                            <br/>
                            <br/>
                            <button class="btn" ng-class="{'btn-danger': !result.result, 'btn-success': result.result}">
                                <i class="glyphicon" ng-class="{'glyphicon-remove': !result.result, 'glyphicon-ok': result.result}"></i>
                                <span ng-if="!result.result">Salah</span>
                                <span ng-if="result.result">Benar</span>
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="panel-footer" ng-if="quiz.begin && quiz.ended">
            <button class="btn btn-primary" ng-click="quiz.reload()">
                <i class="glyphicon glyphicon-refresh"></i>&nbsp;Ulangi</button>
        </div>
        <div class="panel-footer" ng-if="quiz.begin && !quiz.ended">
            <button class="btn btn-warning" ng-click="quiz.prev()" ng-disabled="quiz.position == 0" ng-if="quiz.begin && !quiz.ended">
                <i class="glyphicon glyphicon-chevron-left"></i>
            </button>
            <button class="btn btn-primary" ng-click="quiz.next()" ng-disabled="quiz.position == (quiz.questions.length - 1)" ng-if="quiz.begin && !quiz.ended">
                <i class="glyphicon glyphicon-chevron-right"></i>
            </button>
            <h3 ng-if="quiz.begin && !quiz.ended">Terjawab {{quiz.answered}} dari {{quiz.questions.length}}</h3>
            <button class="btn btn-success fx-zoom-normal fx-ease-none fx-dur-200" ng-click="quiz.submit()" ng-if="quiz.submitReady && quiz.begin && !quiz.ended">
                <i class="glyphicon glyphicon-ok"></i>&nbsp;<span>Submit</span>
            </button>
        </div>
    </div>