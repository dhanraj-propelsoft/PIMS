@extends('Layout.MainLayout')
@section('content')

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

          <th>#</th>

          <th>First Name</th>
          <th>Last Name</th>
          <th>Email</th>
          <th>Middle Name</th>

        </tr>
      </thead>
      <tbody class="section">
        <tr>
          <td>1</td>
          <td>Clark</td>
          <td>Kent</td>
          <td>clarkkent</td>
          <td>
            <a type="button" class="btn">
              <i class="material-icons text-warning">edit</i>
            </a>
            <a type="button" class="btn">
              <i class="material-icons text-danger">delete</i>
            </a>
          </td>

        </tr>
        <tr>
          <td>2</td>
          <td>Peter</td>
          <td>Parker</td>
          <td>peterparker</td>
          <td>
            <a type="button" class="btn">
              <i class="material-icons text-warning">edit</i>
            </a>
            <a type="button" class="btn">
              <i class="material-icons text-danger">delete</i>
            </a>
          </td>

        </tr>
        <tr>
          <td>3</td>
          <td>John</td>
          <td>Carter</td>
          <td>johncarter</td>
          <td>
            <a type="button" class="btn">
              <i class="material-icons text-warning">edit</i>
            </a>
            <a type="button" class="btn">
              <i class="material-icons text-danger">delete</i>
            </a>
          </td>

        </tr>
        <tr>
          <td>1</td>
          <td>Clark</td>
          <td>Kent</td>
          <td>clarkkent</td>
          <td>
            <a type="button" class="btn">
              <i class="material-icons text-warning">edit</i>
            </a>
            <a type="button" class="btn">
              <i class="material-icons text-danger">delete</i>
            </a>
          </td>

        </tr>
        <tr>
          <td>2</td>
          <td>Peter</td>
          <td>Parker</td>
          <td>peterparker</td>
          <td>
            <a type="button" class="btn">
              <i class="material-icons text-warning">edit</i>
            </a>
            <a type="button" class="btn">
              <i class="material-icons text-danger">delete</i>
            </a>
          </td>

        </tr>
        <tr>
          <td>3</td>
          <td>John</td>
          <td>Carter</td>
          <td>johncarter</td>
          <td>
            <a type="button" class="btn">
              <i class="material-icons text-warning">edit</i>
            </a>
            <a type="button" class="btn">
              <i class="material-icons text-danger">delete</i>
            </a>
          </td>

        </tr>
        <tr>
          <td>1</td>
          <td>Clark</td>
          <td>Kent</td>
          <td>clarkkent</td>
          <td>
            <a type="button" class="btn">
              <i class="material-icons text-warning">edit</i>
            </a>
            <a type="button" class="btn">
              <i class="material-icons text-danger">delete</i>
            </a>
          </td>

        </tr>
        <tr>
          <td>2</td>
          <td>Peter</td>
          <td>Parker</td>
          <td>peterparker</td>
          <td>
            <a type="button" class="btn">
              <i class="material-icons text-warning">edit</i>
            </a>
            <a type="button" class="btn">
              <i class="material-icons text-danger">delete</i>
            </a>
          </td>
        </tr>
        <tr>
          <td>3</td>
          <td>John</td>
          <td>Carter</td>
          <td>johncarter</td>
          <td>
            <a type="button" class="btn">
              <i class="material-icons text-warning">edit</i>
            </a>
            <a type="button" class="btn">
              <i class="material-icons text-danger">delete</i>
            </a>
          </td>

        </tr>
        <tr>
          <td>1</td>
          <td>Clark</td>
          <td>Kent</td>
          <td>clarkkent</td>
          <td>
            <a type="button" class="btn">
              <i class="material-icons text-warning">edit</i>
            </a>
            <a type="button" class="btn">
              <i class="material-icons text-danger">delete</i>
            </a>
          </td>

        </tr>
        <tr>
          <td>2</td>
          <td>Peter</td>
          <td>Parker</td>
          <td>peterparker</td>
          <td>
            <a type="button" class="btn">
              <i class="material-icons text-warning">edit</i>
            </a>
            <a type="button" class="btn">
              <i class="material-icons text-danger">delete</i>
            </a>
          </td>

        </tr>
        <tr>
          <td>3</td>
          <td>John</td>
          <td>Carter</td>
          <td>johncarter</td>
          <td>
            <a type="button" class="btn">
              <i class="material-icons text-warning">edit</i>
            </a>
            <a type="button" class="btn">
              <i class="material-icons text-danger">delete</i>
            </a>
          </td>

        </tr>
        <tr>
          <td>1</td>
          <td>Clark</td>
          <td>Kent</td>
          <td>clarkkent</td>
          <td>
            <a type="button" class="btn">
              <i class="material-icons text-warning">edit</i>
            </a>
            <a type="button" class="btn">
              <i class="material-icons text-danger">delete</i>
            </a>
          </td>

        </tr>
        <tr>
          <td>2</td>
          <td>Peter</td>
          <td>Parker</td>
          <td>peterparker</td>
          <td>
            <a type="button" class="btn">
              <i class="material-icons text-warning">edit</i>
            </a>
            <a type="button" class="btn">
              <i class="material-icons text-danger">delete</i>
            </a>
          </td>

        </tr>
        <tr>
          <td>3</td>
          <td>John</td>
          <td>Carter</td>
          <td>johncarter</td>
          <td>
            <a type="button" class="btn">
              <i class="material-icons text-warning">edit</i>
            </a>
            <a type="button" class="btn">
              <i class="material-icons text-danger">delete</i>
            </a>
          </td>

        </tr>
        <tr>
          <td>1</td>
          <td>Clark</td>
          <td>Kent</td>
          <td>clarkkent</td>
          <td>
            <a type="button" class="btn">
              <i class="material-icons text-warning">edit</i>
            </a>
            <a type="button" class="btn">
              <i class="material-icons text-danger">delete</i>
            </a>
          </td>

        </tr>
        <tr>
          <td>2</td>
          <td>Peter</td>
          <td>Parker</td>
          <td>peterparker</td>
          <td>
            <a type="button" class="btn">
              <i class="material-icons text-warning">edit</i>
            </a>
            <a type="button" class="btn">
              <i class="material-icons text-danger">delete</i>
            </a>
          </td>
        </tr>
        <tr>
          <td>3</td>
          <td>John</td>
          <td>Carter</td>
          <td>johncarter</td>
          <td>
            <a type="button" class="btn">
              <i class="material-icons text-warning">edit</i>
            </a>
            <a type="button" class="btn">
              <i class="material-icons text-danger">delete</i>
            </a>
          </td>

        </tr>
        <tr>
          <td>1</td>
          <td>Clark</td>
          <td>Kent</td>
          <td>clarkkent</td>
          <td>
            <a type="button" class="btn">
              <i class="material-icons text-warning">edit</i>
            </a>
            <a type="button" class="btn">
              <i class="material-icons text-danger">delete</i>
            </a>
          </td>
        </tr>
        <tr>
          <td>2</td>
          <td>Peter</td>
          <td>Parker</td>
          <td>peterparker</td>
          <td>
            <a type="button" class="btn">
              <i class="material-icons text-warning">edit</i>
            </a>
            <a type="button" class="btn">
              <i class="material-icons text-danger">delete</i>
            </a>
          </td>

        </tr>
        <tr>
          <td>3</td>
          <td>John</td>
          <td>Carter</td>
          <td>johncarter</td>
          <td>
            <a type="button" class="btn">
              <i class="material-icons text-warning">edit</i>
            </a>
            <a type="button" class="btn">
              <i class="material-icons text-danger">delete</i>
            </a>
          </td>

        </tr>
        <tr>
          <td>1</td>
          <td>Clark</td>
          <td>Kent</td>
          <td>clarkkent</td>
          <td>
            <a type="button" class="btn">
              <i class="material-icons text-warning">edit</i>
            </a>
            <a type="button" class="btn">
              <i class="material-icons text-danger">delete</i>
            </a>
          </td>

        </tr>
        <tr>
          <td>2</td>
          <td>Peter</td>
          <td>Parker</td>
          <td>peterparker</td>
          <td>
            <a type="button" class="btn">
              <i class="material-icons text-warning">edit</i>
            </a>
            <a type="button" class="btn">
              <i class="material-icons text-danger">delete</i>
            </a>
          </td>

        </tr>
        <tr>
          <td>3</td>
          <td>John</td>
          <td>Carter</td>
          <td>johncarter</td>
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
    <!-- <table>
      <thead>
        <th>Invoice Number</th>
        <th>Purchaser</th>
        <th>Invoice Amount</th>
        <th>Invoice Date</th>
      </thead>
      <tbody>
        <tr>
          <td>INV-1233</td>
          <td>Dinesh Vaitage</td>
          <td>$300</td>
          <td>01/12/2017</td>
        </tr>
        <tr>
          <td>INV-1233</td>
          <td>Dinesh Vaitage</td>
          <td>$300</td>
          <td>01/12/2017</td>
        </tr>
        <tr>
          <td>INV-1233</td>
          <td>Dinesh Vaitage</td>
          <td>$300</td>
          <td>01/12/2017</td>
        </tr>
        <tr>
          <td>INV-1233</td>
          <td>Dinesh Vaitage</td>
          <td>$300</td>
          <td>01/12/2017</td>
        </tr>
        <tr>
          <td>INV-1233</td>
          <td>Dinesh Vaitage</td>
          <td>$300</td>
          <td>01/12/2017</td>
        </tr>
        <tr>
          <td>INV-1233</td>
          <td>Dinesh Vaitage</td>
          <td>$300</td>
          <td>01/12/2017</td>
        </tr>
        <tr>
          <td>INV-1233</td>
          <td>Dinesh Vaitage</td>
          <td>$300</td>
          <td>01/12/2017</td>
        </tr>
        <tr>
          <td>INV-1233</td>
          <td>Dinesh Vaitage</td>
          <td>$300</td>
          <td>01/12/2017</td>
        </tr>
        <tr>
          <td>INV-1233</td>
          <td>Dinesh Vaitage</td>
          <td>$300</td>
          <td>01/12/2017</td>
        </tr>
        <tr>
          <td>INV-1233</td>
          <td>Dinesh Vaitage</td>
          <td>$300</td>
          <td>01/12/2017</td>
        </tr>
        <tr>
          <td>INV-1233</td>
          <td>Dinesh Vaitage</td>
          <td>$300</td>
          <td>01/12/2017</td>
        </tr>
        <tr>
          <td>INV-1233</td>
          <td>Dinesh Vaitage</td>
          <td>$300</td>
          <td>01/12/2017</td>
        </tr>
        <tr>
          <td>INV-1233</td>
          <td>Dinesh Vaitage</td>
          <td>$300</td>
          <td>01/12/2017</td>
        </tr>
        <tr>
          <td>INV-1233</td>
          <td>Dinesh Vaitage</td>
          <td>$300</td>
          <td>01/12/2017</td>
        </tr>
        <tr>
          <td>INV-1233</td>
          <td>Dinesh Vaitage</td>
          <td>$300</td>
          <td>01/12/2017</td>
        </tr>
        <tr>
          <td>INV-1233</td>
          <td>Dinesh Vaitage</td>
          <td>$300</td>
          <td>01/12/2017</td>
        </tr>
        <tr>
          <td>INV-1233</td>
          <td>Dinesh Vaitage</td>
          <td>$300</td>
          <td>01/12/2017</td>
        </tr>
        <tr>
          <td>INV-1233</td>
          <td>Dinesh Vaitage</td>
          <td>$300</td>
          <td>01/12/2017</td>
        </tr>
      </tbody>
    </table> -->
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