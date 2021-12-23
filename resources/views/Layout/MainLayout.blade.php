<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta http-equiv="x-ua-compatible" content="ie=edge">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.12.0-2/css/fontawesome.min.css" />
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.12.0-2/css/all.min.css" />
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
  <script src="https://netdna.bootstrapcdn.com/twitter-bootstrap/2.3.1/js/bootstrap.min.js"></script>
  <link href="https://netdna.bootstrapcdn.com/twitter-bootstrap/2.3.1/css/bootstrap-combined.min.css" rel="stylesheet" />
  <title>Propelsoft</title>

  <!-- CSRF Token -->
  <meta name="csrf-token" content="{{ csrf_token() }}">
  <link rel="stylesheet" href="./css/app.css">
</head>

<body class="hold-transition sidebar-mini">
  <div class="wrapper">
    <!-- Navbar -->
    <nav class="main-header navbar navbar-expand navbar-white navbar-light divBorderStyle">
      <!-- Left navbar links -->
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars fa-2x"></i></a>
        </li>
      </ul>
    </nav>
    <!-- /.navbar -->

    <!-- Main Sidebar Container -->
    <aside class="main-sidebar sidebar-dark-primary elevation-4 divBorderStyle position-fixed">
      <!-- Sidebar -->
      <div class="sidebar">
        <!-- Sidebar user panel (optional) -->      
        <div class="form-group d-flex">
          <select class="form-control dropdownUIChanges d-flex" name="dropdown-test">
            <option>Select A Company </option>
            <option>Propelsoft</option>
            <option>JP Autocare</option>
            <option>Jp Autocares</option>
          </select>
        </div>
        <div class="form-group">
          <select class="form-control dropdownUIChanges " name="dropdown-test">
            <option>Select A Module </option>
            <option>PIMS</i></option>
            <option>BOOKS</option>
            <option>HRM</option>
            <option>WMS</option>
            <option>WFM</option>
          </select>
        </div>
        <hr/>
        <!-- Sidebar Menu -->
        <nav class="mt-2">
          <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
            <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
               <li class="nav-item">
              <a href="{{ url('person') }}"class="nav-link">
                
                <i class="nav-icon fa fa-users"></i>
                <p>
                  Person  
                  <!-- <span class="right badge badge-danger">New</span> -->
                </p>
              </a>
            </li>
            <li class="nav-item">
              <a href="#" class="nav-link">
                
                <i class="nav-icon fa fa-user"></i>
                <p>
                  People  
                  <!-- <span class="right badge badge-danger">New</span> -->
                </p>
              </a>
            </li>
            <!-- <li class="nav-item has-treeview">
              <a href="#" class="nav-link active">
                <i class="nav-icon fas fa-tachometer-alt"></i>
                <p>
                  Starter Pages
                  <i class="right fas fa-angle-left"></i>
                </p>
              </a>
              <ul class="nav nav-treeview">
                <li class="nav-item">
                  <a href="#" class="nav-link active">
                    <i class="fas fa-address-card nav-icon"></i>
                    <p>Active Page</p>
                  </a>
                </li>
                <li class="nav-item">
                  <a href="#" class="nav-link">
                    <i class="fas fa-circle nav-icon"></i>
                    <p>Inactive Page</p>
                  </a>
                </li>
              </ul>
            </li> -->
           
          </ul>
        </nav>
        <!-- /.sidebar-menu -->
      </div>
      <!-- /.sidebar -->
    </aside>

    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper divBorderStyle"  >
    @yield('content')
      <!-- /.content -->
    </div>
    <!-- /.content-wrapper -->


    
  </div>
  <!-- ./wrapper -->

  <!-- REQUIRED SCRIPTS -->

  <!-- jQuery -->
  <script src="./js/app.js"></script>
  <script>
    $(".dropdown-menu li a").click(function() {
      console.log("well dhsd");
      $(".btn:first-child").text($(this).text());
      $(".btn:first-child").val($(this).text());

    });
  </script>

</body>
</html>