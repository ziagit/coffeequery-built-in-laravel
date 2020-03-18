
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8" />
  <link rel="apple-touch-icon" sizes="76x76" href="{{asset('new-theme/img/monkeyclass.png')}}">
  <link rel="icon" type="image/png" href="{{asset('images/brand/coffeequery.png')}}">
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
  <title>
    Admin-CoffeeQuery
  </title>
  <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0, shrink-to-fit=no' name='viewport' />
  <!--     Fonts and icons     -->
  <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700,200" rel="stylesheet" />
  <link href="https://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css" rel="stylesheet">
  <!-- CSS Files -->
  <link href="{{asset('new-theme/css/bootstrap.min.css')}}" rel="stylesheet" />
  <link href="{{asset('new-theme/css/paper-dashboard.css?v=2.0.0')}}" rel="stylesheet" />
  <link href="{{asset('new-theme/demo/demo.css')}}" rel="stylesheet" />
  <link href="{{ asset('prism/prism.css') }}" rel="stylesheet">
  <style>
  .actv{
    color: #51cbce !important;
  }
</style>
</head>

<body class="">
  <div class="wrapper ">
    <div class="sidebar" data-color="white" data-active-color="danger">
   
      <div class="logo">
        <a href="/" class="simple-text logo-mini">
          <div class="logo-image-small">
            <img src="{{asset('images/brand/coffeequery.png')}}">
          </div>
        </a>
        <a href="/" class="simple-text logo-normal">
          Coffee<span style="color:#ffbc00;"> Query</span>
        </a>
      </div>
      <div class="sidebar-wrapper">
        <ul class="nav">
          <li>
            <a href="/dashboard"  class="{{Request::is('dashboard') ? 'actv': ''}} ">
              <i class="nc-icon nc-bank {{Request::is('dashboard') ? 'actv': ''}} "></i>
              <p>Dashboard</p>
            </a>
          </li>
          <li>
            <a href="admin-company" class="{{Request::is('admin-company') ? 'actv': ''}} nav-link">
              <i class="nc-icon nc-minimal-right {{Request::is('admin-company') ? 'actv': ''}} "></i>
              <p>Company</p>
            </a>
          </li>
          <li>
            <a href="admin-posts"  class="{{Request::is('admin-posts') ? 'actv': ''}} ">
              <i class="nc-icon nc-minimal-right {{Request::is('admin-posts') ? 'actv': ''}} "></i>
              <p>Posts</p>
            </a>
          </li>
          <li>
            <a href="admin-projects"  class="{{Request::is('admin-projects') ? 'actv': ''}} ">
              <i class="nc-icon nc-minimal-right {{Request::is('admin-projects') ? 'actv': ''}} "></i>
              <p>Projects</p>
            </a>
          </li>
          <li>
            <a href="admin-team" class="{{Request::is('admin-team') ? 'actv': ''}} nav-link">
              <i class="nc-icon nc-minimal-right {{Request::is('admin-team') ? 'actv': ''}} "></i>
              <p>Team</p>
            </a>
          </li>
          <li>
            <a href="admin-techs" class="{{Request::is('admin-techs') ? 'actv': ''}} nav-link">
              <i class="nc-icon nc-minimal-right {{Request::is('admin-techs') ? 'actv': ''}} "></i>
              <p>Techs</p>
            </a>
          </li>
          <li>
            <a href="admin-techinfo" class="{{Request::is('admin-techinfo') ? 'actv': ''}} nav-link">
              <i class="nc-icon nc-minimal-right {{Request::is('admin-techinfo') ? 'actv': ''}} "></i>
              <p>Techs Data</p>
            </a>
          </li>
          <li>
            <a href="admin-contacts" class="{{Request::is('admin-contacts') ? 'actv': ''}} nav-link">
              <i class="nc-icon nc-minimal-right {{Request::is('admin-contacts') ? 'actv': ''}} "></i>
              <p>Contacts</p>
            </a>
          </li>
          <li>
            <a href="admin-users" class="{{Request::is('admin-user') ? 'actv': ''}} nav-link">
              <i class="nc-icon nc-minimal-right {{Request::is('admin-user') ? 'actv': ''}} "></i>
              <p>Users</p>
            </a>
          </li>
        </ul>
      </div>
    </div>
    <div class="main-panel">
      <!-- Navbar -->
      <nav class="navbar navbar-expand-lg navbar-absolute fixed-top navbar-transparent">
        <div class="container-fluid">
          <div class="navbar-wrapper">
            <div class="navbar-toggle">
              <button type="button" class="navbar-toggler">
                <span class="navbar-toggler-bar bar1"></span>
                <span class="navbar-toggler-bar bar2"></span>
                <span class="navbar-toggler-bar bar3"></span>
              </button>
            </div>
            <a class="navbar-brand" href="#pablo">Coffee Query - Dashboard</a>
          </div>
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navigation" aria-controls="navigation-index" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-bar navbar-kebab"></span>
            <span class="navbar-toggler-bar navbar-kebab"></span>
            <span class="navbar-toggler-bar navbar-kebab"></span>
          </button>
          <div class="collapse navbar-collapse justify-content-end" id="navigation">
            <form>
              <div class="input-group no-border">
                <input type="text" value="" class="form-control" placeholder="Search...">
                <div class="input-group-append">
                  <div class="input-group-text">
                    <i class="nc-icon nc-zoom-split"></i>
                  </div>
                </div>
              </div>
            </form>
            <ul class="navbar-nav">
              <li class="nav-item">
                <a class="nav-link btn-rotate" href="#pablo">
                  <i class="nc-icon nc-bell-55 "></i>
                  <p>
                    <span class="d-lg-none d-md-block">Account</span>
                  </p>
                </a>
              </li>
              <li class="nav-item btn-rotate dropdown">
                <a class="nav-link dropdown-toggle" href="http://monkeyclass.com" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                  <i class="nc-icon nc-settings-gear-65"></i>
                  <p>
                    <span class="d-lg-none d-md-block">Some Actions</span>
                  </p>
                </a>
                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdownMenuLink">
                  <a class="dropdown-item" href="/user/profile">User Profile</a>
                  <a class="dropdown-item" href="#">Settings</a>
                  <form id="logout-form" action="{{ route('logout') }}" method="POST">
                    {{ csrf_field() }}
                    <button type="submit" style="background-color: #fff;color:#66615B;;font-size:14px;border: none;margin-left: 10px; cursor:pointer;">Logout</button>                    
                </form> 
                  
                </div>
              </li>
            </ul>
          </div>
        </div>
      </nav>
      <!-- End Navbar -->
      
      <div class="content">
        @yield('content')
      </div>
      <footer class="footer footer-black  footer-white ">
        <div class="container-fluid">
          <div class="row">
            <nav class="footer-nav">
              <ul>
                <li>
                  <a href="/" target="_blank">Coffee Query</a>
                </li>
              </ul>
            </nav>
            <div class="credits ml-auto">
              <span class="copyright">
                ©
                <script>
                  document.write(new Date().getFullYear())
                </script>, made with 💗 by Coffee Query Team
              </span>
            </div>
          </div>
        </div>
      </footer>
    </div>
  </div>
  <!--   Core JS Files   -->
  <script src="{{ asset('prism/prism.js') }}"></script>

  <script src="{{asset('new-theme/js/core/jquery.min.js')}}"></script>
  <script src="{{asset('new-theme/js/core/popper.min.js')}}"></script>
  <script src="{{asset('new-theme/js/core/bootstrap.min.js')}}"></script>
  <script src="{{asset('new-theme/js/plugins/perfect-scrollbar.jquery.min.js')}}"></script>
  <!--  Google Maps Plugin    -->
  <script src="https://maps.googleapis.com/maps/api/js?key=YOUR_KEY_HERE"></script>
  <!-- Chart JS -->
  <script src="{{asset('new-theme/js/plugins/chartjs.min.js')}}"></script>
  <!--  Notifications Plugin    -->
  <script src="{{asset('new-theme/js/plugins/bootstrap-notify.js')}}"></script>
  <!-- Control Center for Now Ui Dashboard: parallax effects, scripts for the example pages etc -->
  <script src="{{asset('new-theme/js/paper-dashboard.min.js?v=2.0.0')}}" type="text/javascript"></script>
  <!-- Paper Dashboard DEMO methods, don't include it in your project! -->
  <script src="{{asset('new-theme/demo/demo.js')}}"></script>
  <script>

   $('#editPostModal').on('show.bs.modal', function(event){
       var button = $(event.relatedTarget)
       var id = button.data('id')
       var title = button.data('title')
       var subtitle = button.data('subtitle')
       var body = button.data('body')
       console.log('check body: ', body);
       var modal = $(this)
       modal.find('.modal-body #id').val(id)
       modal.find('.modal-body #title').val(title)
       modal.find('.modal-body #subtitle').val(subtitle)
       modal.find('.modal-body #body').html(body)
   });
   $('#editProjectModal').on('show.bs.modal', function(event){
       var button = $(event.relatedTarget)
       var id = button.data('id')
       var title = button.data('title')
       var subtitle = button.data('subtitle')
       var body = button.data('body')
       var modal = $(this)
       modal.find('.modal-body #id').val(id)
       modal.find('.modal-body #title').val(title)
       modal.find('.modal-body #subtitle').val(subtitle)
       modal.find('.modal-body #body').val(body)
   });
   $('#editCompanyModal').on('show.bs.modal', function(event){
       var button = $(event.relatedTarget)
       var id = button.data('id')
       var name = button.data('name')
       var slogan = button.data('slogan')
       var details = button.data('details')
       var modal = $(this)
       modal.find('.modal-body #id').val(id)
       modal.find('.modal-body #name').val(name)
       modal.find('.modal-body #slogan').val(slogan)
       modal.find('.modal-body #details').val(details)
   });
   $('#editTeamModal').on('show.bs.modal', function(event){
       var button = $(event.relatedTarget)
       var id = button.data('id')
       var name = button.data('name')
       var position = button.data('position')
       var details = button.data('details')
       var modal = $(this)
       modal.find('.modal-body #id').val(id)
       modal.find('.modal-body #name').val(name)
       modal.find('.modal-body #position').val(position)
       modal.find('.modal-body #details').val(details)
   });
   $('#editTechModal').on('show.bs.modal', function(event){
       var button = $(event.relatedTarget)
       var id = button.data('id')
       var name = button.data('name')
       var brand = button.data('brand')
       var details = button.data('details')
       var date = button.data('date')
       var users = button.data('users')
       var modal = $(this)
       modal.find('.modal-body #id').val(id)
       modal.find('.modal-body #name').val(name)
       modal.find('.modal-body #brand').val(brand)
       modal.find('.modal-body #details').val(details)
       modal.find('.modal-body #date').val(date)
       modal.find('.modal-body #users').val(users)
   });
   $('#editTechinfoModal').on('show.bs.modal', function(event){
       var button = $(event.relatedTarget)
       var id = button.data('id')
       var date = button.data('date')
       var users = button.data('users')
       var techs = button.data('techs')
       var modal = $(this)
       modal.find('.modal-body #id').val(id)
       modal.find('.modal-body #date').val(date)
       modal.find('.modal-body #users').val(users)
       modal.find('.modal-body #techs').val(techs)
   });
   $('#addTechinfoModal').on('show.bs.modal', function(event){
       var button = $(event.relatedTarget)
       var techs = button.data('techs')
       var modal = $(this)
       modal.find('.modal-body #techs').val(techs)
   });

   $('#editContactModal').on('show.bs.modal', function(event){
       var button = $(event.relatedTarget)
       var id = button.data('id')
       var name = button.data('name')
       var email = button.data('email')
       var message = button.data('message')
       var modal = $(this)
       modal.find('.modal-body #id').val(id)
       modal.find('.modal-body #name').val(name)
       modal.find('.modal-body #email').val(email)
       modal.find('.modal-body #message').val(message)
   });

   $('#editUserModal').on('show.bs.modal', function(event){
       var button = $(event.relatedTarget)
       var id = button.data('id')
       var name = button.data('name')
       var email = button.data('email')
       var role = button.data('role')
       var password = button.data('password')
       var modal = $(this)
       modal.find('.modal-body #id').val(id)
       modal.find('.modal-body #name').val(name)
       modal.find('.modal-body #email').val(email)
       modal.find('.modal-body #role').val(role)
       modal.find('.modal-body #password').val(password)
   });
   $('#addTeamModal').on('show.bs.modal', function(event){
       var button = $(event.relatedTarget)
       var id = button.data('id')
       var modal = $(this)
       modal.find('.modal-body #companyId').val(id)
   });

   setTimeout(function() {
        $('.alert-success').css('display','none');
          }, 500);

    $(document).ready(function() {
      // Javascript method's body can be found in assets/assets-for-demo/js/demo.js
      demo.initChartsPages();
    });

    $(document).ready(function($) {
      $('#deleteitem').on("submit", function(e){
        if(!confirm('Are you sure?')){
          e.preventDefault();
        }
      });
    });

  </script>
</body>

</html>
