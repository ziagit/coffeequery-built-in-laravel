@extends('layouts.app')
@section('content')
<script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>

<script type="text/javascript">
    // Load google charts
    var analytics = <?php echo $techs; ?>;
    google.charts.load('current', {'packages':['corechart']});
    google.charts.setOnLoadCallback(drawChart);

    // Draw the chart and set the chart values
    function drawChart() {
    var data = google.visualization.arrayToDataTable(analytics);

    // Optional; add a title and set the width and height of the chart
    var options = {
        'title':'Most Loved JS Frameworks', 
        'height':400,
        'colors': ['#b52e31', '#41B882', '#61dbfb']
        };

    // Display the chart inside the <div> element with id="piechart"
    var chart = new google.visualization.PieChart(document.getElementById('piechart'));
    chart.draw(data, options);
    }
</script> 
<div>
    <div id="piechart"></div>
</div>

<div>
  <h2>Free Angular, Vuejs and React Resources</h2>
  <p>The following links provide you top resources of Angular, Vuejs and React.</p>
  <div class="panel-group">

        <div class="js-fr col-xs-12 col-sm-6 col-md-4 col-lg-4">
                <div class="panel panel-danger">
                <div class="panel-heading"><img src="{{asset('images/coffeequery/angular.svg')}}" alt="" width="22"> Angular</div>
                <div class="panel-body angular">
                    <ul>
                        <h3>📑 Resources</h3>
                        <li><a href="https://angular.io/docs" target="_blank">Website $ Documentation</a></li>
                        <li><a href="https://github.com/angular/angular" target="_blank">GitHub Repository</a></li>
                        <li><a href="https://blog.angular.io/" target="_blank">ِOfficial Blog</a></li>
                        <li><a href="https://alligator.io/angular/" target="_blank">Aligator</a></li>
                        <li><a href="https://www.youtube.com/channel/UCSJbGtTlrDami-tDGPUV9-w/search?query=angular" target="_blank">Academind</a></li>
                    </ul>
                    <ul>
                        <h3>🛠 Tools</h3>
                        <li><a href="https://material.angular.io/" target="_blank">Angular Material Design</a></li>
                        <li><a href="https://ng-bootstrap.github.io/" target="_blank">Angular Bootstrap</a></li>
                        <li><a href="https://github.com/angular/angular-cli" target="_blank">Angular CLI</a></li>
                        <li><a href="https://rxjs-dev.firebaseapp.com/" target="_blank">RXJS</a></li>
                        <li><a href="https://www.typescriptlang.org/" target="_blank">TypeScript</a></li>
                    </ul>
                </div>
            </div>
        </div>

        <div class="js-fr col-xs-12 col-sm-6 col-md-4 col-lg-4">
            <div class="panel panel-success">
            <div class="panel-heading"><img src="{{asset('images/coffeequery/vue.svg')}}" alt="" width="22"> Vue</div>
            <div class="panel-body vue">
            <ul>
                <h3>📑 Resources</h3>
                <li><a href="https://vuejs.org/v2/guide/" target="_blank">Website & Documentation</a></li>
                <li><a href="https://vuejs.org/v2/cookbook/" target="_blank">Vue Cookbook</a></li>
                <li><a href="https://vuejsdevelopers.com/" target="_blank">Vuejs Developers</a></li>
                <li><a href="https://github.com/vuejs/vue" target="_blank">GitHub Repository</a></li>
                <li><a href="https://alligator.io/vuejs/" target="_blank">Aligator</a></li>
                <li><a href="https://www.youtube.com/channel/UCSJbGtTlrDami-tDGPUV9-w/search?query=vuejs" target="_blank">Academind</a></li>
            </ul>
            <ul>
                <h3>🛠 Tools</h3>
                <li><a href="https://vuematerial.io/" target="_blank">Vuejs Material Design</a></li>
                <li><a href="https://vuetifyjs.com/en/" target="_blank">Vuetify</a></li>
                <li><a href="https://bootstrap-vue.js.org/" target="_blank">Vue Bootstrap</a></li>
                <li><a href="https://vuex.vuejs.org/guide/" target="_blank">VueX</a></li>
                <li><a href="https://nuxtjs.org/" target="_blank">Nuxtjs</a></li>
                <li><a href="https://router.vuejs.org/" target="_blank">Vue Router</a></li>
            </ul>
            </div>
            </div>
        </div>

        <div class="js-fr col-xs-12 col-sm-6 col-md-4 col-lg-4">
            <div class="panel panel-info">
            <div class="panel-heading"><img src="{{asset('images/coffeequery/react.svg')}}" alt="" width="22"> React</div>
            <div class="panel-body react">
            <ul>
                <h3>📑 Resources</h3>
                <li><a href="https://reactjs.org/docs/getting-started.html" target="_blank">Website & Documentation</a></li>
                <li><a href="https://facebook.github.io/react-native/" target="_blank">React Native</a></li>
                <li><a href="https://reactjs.org/blog" target="_blank">Official Blog</a></li>
                <li><a href="https://github.com/facebook/react" target="_blank">GitHub Repository</a></li>
                <li><a href="https://alligator.io/react/" target="_blank">Aligator</a></li>
                <li><a href="https://www.youtube.com/channel/UCSJbGtTlrDami-tDGPUV9-w/search?query=react" target="_blank">Academind</a></li>
            </ul>
            <ul>
                <h3>🛠 Tools</h3>
                <li><a href="https://github.com/facebook/create-react-app" target="_blank">Creat React App</a></li>
                <li><a href="https://reacttraining.com/react-router/" target="_blank">React Router</a></li>
                <li><a href="https://redux.js.org/" target="_blank">Redux</a></li>
                <li><a href="https://github.com/mobxjs/mobx" target="_blank">MobX</a></li>
            </ul>
            </div>
            </div>
        </div>
  </div>
</div>
@endsection
