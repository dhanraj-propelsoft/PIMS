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
    <div class="tableFixHead">
        <table id="employee_table" class="table table-striped table-bordered table-sm table-md" align="center" cellpadding=10>
            <!-- <input type="text" id="max" name="max"> -->

            <input id="tableSearchBoxFilter" type="text" placeholder="Search.." style="">

            <thead>
                <tr id="HeadRow">
                    <th>S.no</th>
                    <th id="name_col_head">Name</th>
                    <th id="age_col_head">Age</th>
                    <th id="city_col_head">City</th>
                    <th id="mob_col_head">Mobile</th>
                    <th id="remark_col_head">Remarks</th>

                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>1</td>
                    <td class="name_col">Amit</td>
                    <td class="age_col">26</td>
                    <td class="city_col">Agra</td>
                    <td class="mob_col">9087654321</td>
                    <td class="remark_col">Good</td>


                </tr>
                <tr>
                    <td>1</td>
                    <td class="name_col">Amit</td>
                    <td class="age_col">26</td>
                    <td class="city_col">Agra</td>
                    <td class="mob_col">9087654321</td>
                    <td class="remark_col">Good</td>


                </tr>
                <tr>
                    <td>1</td>
                    <td class="name_col">Amit</td>
                    <td class="age_col">26</td>
                    <td class="city_col">Agra</td>
                    <td class="mob_col">9087654321</td>
                    <td class="remark_col">Good</td>


                </tr>
                <tr>
                    <td>1</td>
                    <td class="name_col">Amit</td>
                    <td class="age_col">26</td>
                    <td class="city_col">Agra</td>
                    <td class="mob_col">9087654321</td>
                    <td class="remark_col">Good</td>


                </tr>
                <tr>
                    <td>1</td>
                    <td class="name_col">Amit</td>
                    <td class="age_col">26</td>
                    <td class="city_col">Agra</td>
                    <td class="mob_col">9087654321</td>
                    <td class="remark_col">Good</td>


                </tr>
                <tr>
                    <td>1</td>
                    <td class="name_col">Amit</td>
                    <td class="age_col">26</td>
                    <td class="city_col">Agra</td>
                    <td class="mob_col">9087654321</td>
                    <td class="remark_col">Good</td>


                </tr>
                <tr>
                    <td>1</td>
                    <td class="name_col">Amit</td>
                    <td class="age_col">26</td>
                    <td class="city_col">Agra</td>
                    <td class="mob_col">9087654321</td>
                    <td class="remark_col">Good</td>


                </tr>
                <tr>
                    <td>1</td>
                    <td class="name_col">Amit</td>
                    <td class="age_col">26</td>
                    <td class="city_col">Agra</td>
                    <td class="mob_col">9087654321</td>
                    <td class="remark_col">Good</td>


                </tr>
                <tr>
                    <td>1</td>
                    <td class="name_col">Amit</td>
                    <td class="age_col">26</td>
                    <td class="city_col">Agra</td>
                    <td class="mob_col">9087654321</td>
                    <td class="remark_col">Good</td>


                </tr>
                <tr>
                    <td>1</td>
                    <td class="name_col">Amit</td>
                    <td class="age_col">26</td>
                    <td class="city_col">Agra</td>
                    <td class="mob_col">9087654321</td>
                    <td class="remark_col">Good</td>


                </tr>
                <tr>
                    <td>1</td>
                    <td class="name_col">Amit</td>
                    <td class="age_col">26</td>
                    <td class="city_col">Agra</td>
                    <td class="mob_col">9087654321</td>
                    <td class="remark_col">Good</td>


                </tr>
                <tr>
                    <td>1</td>
                    <td class="name_col">Amit</td>
                    <td class="age_col">26</td>
                    <td class="city_col">Agra</td>
                    <td class="mob_col">9087654321</td>
                    <td class="remark_col">Good</td>


                </tr>

                <tr>
                    <td>2</td>
                    <td class="name_col">Rahul</td>
                    <td class="age_col">22</td>
                    <td class="city_col">Mumbai</td>
                    <td class="mob_col">9087654321</td>
                    <td class="remark_col">Good</td>
                </tr>

                <tr>
                    <td>3</td>
                    <td class="name_col">Manoj</td>
                    <td class="age_col">31</td>
                    <td class="city_col">Delhi</td>
                    <td class="mob_col">9087654321</td>
                    <td class="remark_col">Good</td>
                </tr>

                <tr>
                    <td>4</td>
                    <td class="name_col">Rashmi</td>
                    <td class="age_col">25</td>
                    <td class="city_col">Bhopal</td>
                    <td class="mob_col">9087654321</td>
                    <td class="remark_col">Good</td>
                </tr>

                <tr>
                    <td>5</td>
                    <td class="name_col">Shivam</td>
                    <td class="age_col">23</td>
                    <td class="city_col">Jaipur</td>
                    <td class="mob_col">9087654321</td>
                    <td class="remark_col">Average</td>
                </tr>

                <tr>
                    <td>6</td>
                    <td class="name_col">Vignesh</td>
                    <td class="age_col">23</td>
                    <td class="city_col">Trichy</td>
                    <td class="mob_col">9087654321</td>
                    <td class="remark_col">Good</td>
                </tr>
                <tr>
                    <td>7</td>
                    <td class="name_col">Vignesh</td>
                    <td class="age_col">23</td>
                    <td class="city_col">Trichy</td>
                    <td class="mob_col">9087654321</td>
                    <td class="remark_col">Average</td>
                </tr>
                <tr>
                    <td>8</td>
                    <td class="name_col">Vignesh</td>
                    <td class="age_col">23</td>
                    <td class="city_col">Trichy</td>
                    <td class="mob_col">9087654321</td>
                    <td class="remark_col">Good</td>
                </tr>
                <tr>
                    <td>9</td>
                    <td class="name_col">Vignesh</td>
                    <td class="age_col">23</td>
                    <td class="city_col">Trichy</td>
                    <td class="mob_col">9087654321</td>
                    <td class="remark_col">Average</td>
                </tr>
                <tr>
                    <td>10</td>
                    <td class="name_col">Vignesh</td>
                    <td class="age_col">23</td>
                    <td class="city_col">Trichy</td>
                    <td class="mob_col">9087654321</td>
                    <td class="remark_col">Good</td>
                </tr>
                <tr>
                    <td>11</td>
                    <td class="name_col">Vignesh</td>
                    <td class="age_col">23</td>
                    <td class="city_col">Trichy</td>
                    <td class="mob_col">9087654321</td>
                    <td class="remark_col">Average</td>
                </tr>
                <tr>
                    <td>12</td>
                    <td class="name_col">Maddy</td>
                    <td class="age_col">24</td>
                    <td class="city_col">Mumbai</td>
                    <td class="mob_col">9087654321</td>
                    <td class="remark_col">Good</td>
                </tr>
                <tr>
                    <td>13</td>
                    <td class="name_col">Shivam</td>
                    <td class="age_col">23</td>
                    <td class="city_col">Jaipur</td>
                    <td class="mob_col">9087654321</td>
                    <td class="remark_col">Bad</td>
                </tr>
                <tr>
                    <td>14</td>
                    <td class="name_col">Shivam</td>
                    <td class="age_col">23</td>
                    <td class="city_col">Jaipur</td>
                    <td class="mob_col">9087654321</td>
                    <td class="remark_col">Good</td>
                </tr>
                <tr>
                    <td>15</td>
                    <td class="name_col">Shivam</td>
                    <td class="age_col">23</td>
                    <td class="city_col">Jaipur</td>
                    <td class="mob_col">9087654321</td>
                    <td class="remark_col">Average</td>
                </tr>
            </tbody>
        </table>
        <div class="pagination">
            <ul class="pagination" id="numbers">
            </ul>
        </div>





        <!-- /.row -->
    </div><!-- /.container-fluid -->
</div>


</div>

@endsection