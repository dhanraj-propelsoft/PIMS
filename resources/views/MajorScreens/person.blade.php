@extends('Layout.MainLayout')
@section('content')
<script>
  /* When the user clicks on the button,
toggle between hiding and showing the dropdown content */
  function myFunction() {
    document.getElementById("myDropdown").classList.toggle("show");
  }
  // Close the dropdown if the user clicks outside of it
  window.onclick = function(event) {
    if (!event.target.matches('.dropbtn,i')) {
      var dropdowns = document.getElementsByClassName("dropdown-content");
      var i;
      for (i = 0; i < dropdowns.length; i++) {
        var openDropdown = dropdowns[i];
        if (openDropdown.classList.contains('show')) {
          openDropdown.classList.remove('show');
        }
      }
    }
  }
</script>







<div class="content-header">
  <div class="container-fluid">

    <div class="row mb-2 MajorScreenHeaderstyle">
      <div class="col-sm-6">
        <h1 class="m-0 text-dark">{{ $pageName }}</h1>
      </div><!-- /.col -->
      <div class="col-sm-6">
        <ol class="breadcrumb float-sm-right">
          <li class="breadcrumb-item"><a href="#">{{$module}}</a></li>
          <li class="breadcrumb-item active">{{ $pagePath }}</li>
          <li>
            <div class=" dropdown">
              <button onclick="myFunction()" class="dropbtn"> <i class="fa fa-ellipsis-v "></i>
                <div id="myDropdown" class="dropdown-content">
                  <a href="#home">Home</a>
                  <a href="#about">About</a>
                  <a href="#contact">Contact</a>
                </div>
            </div>
          </li>
        </ol>
      </div><!-- /.col -->
    </div>
    <!-- /.row -->
  </div>
  <!-- /.container-fluid -->
</div>

<div class="content MajorScreenbodystyle">
  <div class="">
    <div style="float: right; margin-top:-12px"> <input type="text" id="search-table" placeholder="Search..." /></div>
    <br>
    <table class="table">
      <thead>
        <tr>

          <th>Name</th>

          <th>Alias</th>
          <th>Life Status</th>
          <th>Depone Status</th>
          <th>User Status</th>
          <th>Last Login</th>
          <th>Action Status</th>

        </tr>
      </thead>
      <tbody class="section">


        <tr>
          <td>Dhana Raj</td>
          <td>Dhana</td>
          <td>Live</td>
          <td>Self</td>
          <td>Yes</td>
          <td>Today 10pm</td>
          <td>
            <a type="button" class="btn">
              <i class="material-icons text-warning">edit</i>
            </a>
            <a type="button" class="btn">
              <i class="material-icons text-danger">delete</i>
            </a>
          </td>
        </tr>

      </tbody>
    </table>

  </div>


</div>
<link href="https://fonts.googleapis.com/css2?family=Material+Icons" rel="stylesheet" />

<script>
  $(document).ready(function() {

    $("#search-table").on("keyup", function() { //here #input textbox id 
      var value = $(this).val().toLowerCase();
      console.log(value);
      $(".table tbody tr").filter(function() { //here #table table body id 
        $(this).toggle($(this).text().toLowerCase().indexOf(value) > -1)
      });
    });

  });
</script>
</div>

@endsection