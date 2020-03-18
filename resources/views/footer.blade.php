
@if($message = Session::get('subscribed'))
    <div class="alert">
        <p>{{$message}}</p>
    </div>
@endif
<div class="container">
    <div class="row">
        <form class="form-horizontal" method="POST" action="{{url('subscribe')}}" enctype="multipart/form-data">
        {{ csrf_field() }}
        <div class=" col-xs-12 col-sm-4 col-lg-4 col-xl-4">
            <div class="input-group">
            <input type="email" name="email" class="form-control" placeholder="Eamil">
            <span class="input-group-btn">
                <button class="btn btn-success" type="submit">Subscribe</button>
            </span>
            </div>
        </div>
        </form>
    </div>
    <div class="row">
        <div class="col-xs-12 col-sm-4 col-md-4 col-lg-4 col-xl-4">
            <h3>Note:</h3>
            <p>We link and guide through implementation of 3rd party products via affiliate or sponsored links.</p>
        </div>
        <div class="col-xs-12 col-sm-4 col-md-4 col-lg-4 col-xl-4">
            <h3>Top Courses</h3>
            <ul>
                <li><a href="#">Angular 9</a></li>
                <li><a href="#">Ionic 4</a></li>
                <li><a href="#">Vue.js 3</a></li>
                <li><a href="#">Laravel 6</a></li>
            </ul>
        </div>
        <div class="col-xs-12 col-sm-4 col-md-4 col-lg-4 col-xl-4">
            <h3>Open Source Apps</h3>
            <ul>
                <li><a href="https://erpnext.com/">ERPNext</a></li>
                <li><a href="https://dolibarr.org/">Dolibarr</a></li>
                <li><a href="https://odoo.com/">ODOO</a></li>
            </ul>
        </div>
    </div>
    <div class="row" style="text-align:center;padding-top:20px;">
        <p>2020 © CoffeeQuery.com</p>
    </div>
</div>
