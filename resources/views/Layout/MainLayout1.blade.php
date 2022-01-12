<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta http-equiv="x-ua-compatible" content="ie=edge">
  <title>Propel</title>
  <!-- CSRF Token -->
  <meta name="csrf-token" content="{{ csrf_token() }}">
  <link rel="stylesheet" href="/css/app.css">
  <!-- <link rel="stylesheet" href="/css/tableStyle.css"> -->
  <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js"></script>
  <script type="text/javascript" src="https://code.jquery.com/jquery-1.11.3.min.js"></script>
  <script type="text/javascript" src="https://cdn.datatables.net/1.10.8/js/jquery.dataTables.min.js"></script>
</head>
<body class="hold-transition sidebar-mini" style="overflow-x:hidden;overflow-y:hidden;">
  <div class="wrapper">
    <!-- Navbar -->
    <nav class="main-header navbar navbar-expand navbar-white navbar-light TopHeaderDivBorderStyle">
      <div class="container" style="margin-left: -10px!important">
        <div class="row">
          <div class="col">
            <ul class="navbar-nav">
              <li class="nav-item">
                <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars fa-2x"></i></a>
              </li>
            </ul>
          </div>
        </div>
        <div class="row" style="
  border-radius: 10px;margin-right:-25px">
          
        </div>
      </div>
    </nav>
    <!-- /.navbar -->
    <!-- Main Sidebar Container -->
    <aside class="main-sidebar sidebar-dark-primary  divBorderStyle position-fixed">
      <!-- Sidebar -->
      <div class="sidebar">
        <label class="dropdown">
          <div class="dd-button">
            <img src="https://toppng.com/uploads/preview/capital-letter-p-11552740111tldksxyht1.png" style="width:60px;border-radius: 50%;height:30px;">
          </div>
          <input type="checkbox" class="dd-input" id="test">
          <ul class="dd-menu">
            <li>Action</li>
            <li>Another action</li>
            <li>Something else here</li>
            <li class="divider"></li>
            <li>
              <a href="http://rane.io" style="color: #000000;">Link to Rane.io</a>
            </li>
          </ul>
        </label>
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
        <hr />
        <!-- Sidebar Menu -->
        <nav class="mt-2">
          <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
            <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
            <li class="nav-item">
              <a href="{{ url('api/person') }}" class="nav-link">
                <i class="nav-icon fa fa-users"></i>
                <p>
                  Person
                  <!-- <span class="right badge badge-danger">New</span> -->
                </p>
              </a>
            </li>
            <li class="nav-item">
              <a href="{{ url('people') }}" class="nav-link">
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
    <div class="content-wrapper MainContentDivBorderStyle">
      @yield('content')
      <!-- /.content -->
    </div>
    <!-- /.content-wrapper -->
  </div>
  <!-- ./wrapper -->
  <!-- REQUIRED SCRIPTS -->
  <!-- jQuery -->
  <script src="./js/app.js"></script>
  <script src="js/ListTable.js"></script>
  <script>
    $(document).ready(function() {
    });
    $(".dropdown-menu li a").click(function() {
      console.log("well dhsd");
      $(".btn:first-child").text($(this).text());
      $(".btn:first-child").val($(this).text());
    });
  </script>
  <!-- #region datatables files -->
  <link rel="stylesheet" type="text/css" href="//cdn.datatables.net/1.10.12/css/jquery.dataTables.min.css" />
  <script src="//cdn.datatables.net/1.10.12/js/jquery.dataTables.min.js"></script>
  <!-- #endregion -->
</body>
</html>