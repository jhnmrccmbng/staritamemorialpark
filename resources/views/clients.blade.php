@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">

                <div class="card-body">
                    @if (session('status'))
                    <div class="alert alert-success" role="alert">
                        {{ session('status') }}
                    </div>
                    @endif

                    <ul class="nav nav-tabs">
                      <li class="nav-item">
                        <a class="nav-link " href="{{'/'}}">Dashboard</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle active" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">Clients</a>
                        <div class="dropdown-menu">

                          <a class="dropdown-item" href="{{'/clients'}}">Clients Record</a>
                          <a class="dropdown-item" href="{{'/clientsreport'}}">Clients Report</a>
                         
                      </div>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="{{'/clientsinquiries'}}">Inquiry</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{'/salesreport'}}">Sales</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{'/incomeorexpensesreport'}}">Income/Expenses</a>
                </li>
                <li class="nav-item">
                     <a class="nav-link" href="{{'/employeereports'}}">Employees</a>
                </li>
            </ul>





        </div>
    </div>


    <div class="container">

        <div class="row">


            <div class="col-md-12">
                <h4>Clients Record</h4>

            <button type="button" class="btn btn-outline-primary" data-toggle="modal" data-target="#addclient">+ Add Client</button>

                <div class="input-group rounded col-md-4 float-right">
                  <input type="search" class="form-control rounded" placeholder="Search" aria-label="Search" aria-describedby="search-addon" />
                  <span class="input-group-text border-0" id="search-addon">
                    <i class="fas fa-search"></i> Enter
                </span>
            </div>

            <br>
            <br>

            <div class="table-responsive">


              <table id="mytable" class="table table-bordered table-hover table-striped">

                 <thead>

                     <th>ID</th>
                     <th>First Name</th>
                     <th>Last Name</th>
                     <th>Burial Type</th>
                     <th>Location</th>
                     <th>Date</th>
                     <th>Edit</th>

                     <th>Delete</th>
                 </thead>
                 <tbody>

                    <tr>
                        <td>202201</td>
                        <td>Klark</td>
                        <td>Kent</td>
                        <td>Apartment</td>
                        <td>A-23</td>
                        <td>January 1, 1990</td>
                        <td><p data-placement="top" data-toggle="tooltip" title="Edit"><button class="btn btn-success btn-xs" data-title="Edit" data-toggle="modal" data-target="#edit" ><span class="glyphicon glyphicon-pencil"></span>Edit</button></p></td>
                        <td><p data-placement="top" data-toggle="tooltip" title="Delete"><button class="btn btn-danger btn-xs" data-title="Delete" data-toggle="modal" data-target="#delete" ><span class="glyphicon glyphicon-trash"></span>Delete</button></p></td>
                    </tr>

                    <tr>
                        <td>202202</td>
                        <td>Bruce </td>
                        <td>Wayne</td>
                        <td>Mausoleum</td>
                        <td>B-26</td>
                        <td>March 1, 1980</td>
                        <td><p data-placement="top" data-toggle="tooltip" title="Edit"><button class="btn btn-success btn-xs" data-title="Edit" data-toggle="modal" data-target="#edit" ><span class="glyphicon glyphicon-pencil"></span>Edit</button></p></td>
                        <td><p data-placement="top" data-toggle="tooltip" title="Delete"><button class="btn btn-danger btn-xs" data-title="Delete" data-toggle="modal" data-target="#delete" ><span class="glyphicon glyphicon-trash"></span>Delete</button></p></td>
                    </tr>


                    <tr>
                        <td>202203</td>
                        <td>Steeve</td>
                        <td>Rogers</td>
                        <td>Above Ground</td>
                        <td>C-10</td>
                        <td>December 1, 1990</td>
                        <td><p data-placement="top" data-toggle="tooltip" title="Edit"><button class="btn btn-success btn-xs" data-title="Edit" data-toggle="modal" data-target="#edit" ><span class="glyphicon glyphicon-pencil"></span>Edit</button></p></td>
                        <td><p data-placement="top" data-toggle="tooltip" title="Delete"><button class="btn btn-danger btn-xs" data-title="Delete" data-toggle="modal" data-target="#delete" ><span class="glyphicon glyphicon-trash"></span>Delete</button></p></td>
                    </tr>



                </tbody>

            </table>

            <nav aria-label="Page navigation example ">
  <ul class="pagination float-right">
    <li class="page-item">
      <a class="page-link" href="#" aria-label="Previous">
        <span aria-hidden="true">&laquo;</span>
        <span class="sr-only">Previous</span>
      </a>
    </li>
    <li class="page-item"><a class="page-link" href="#">1</a></li>
    <li class="page-item"><a class="page-link" href="#">2</a></li>
    <li class="page-item"><a class="page-link" href="#">3</a></li>
    <li class="page-item">
      <a class="page-link" href="#" aria-label="Next">
        <span aria-hidden="true">&raquo;</span>
        <span class="sr-only">Next</span>
      </a>
    </li>
  </ul>
</nav>

      </div>

  </div>
</div>
</div>


<div class="modal fade" id="edit" tabindex="-1" role="dialog" aria-labelledby="edit" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-hidden="true"><span class="glyphicon glyphicon-remove" aria-hidden="true"></span></button>
        <h4 class="modal-title custom_align" id="Heading">Edit Your Detail</h4>
    </div>
    <div class="modal-body">
      <div class="form-group">
        <input class="form-control " type="text" placeholder="Klark">
    </div>
    <div class="form-group">

        <input class="form-control " type="text" placeholder="Kent">
    </div>
    <div class="form-group">
        <input class="form-control " type="text" placeholder="Apartment">
    </div>
     <div class="form-group">
        <input class="form-control " type="text" placeholder="A-23">
    </div>
     <div class="form-group">
        <input class="form-control " type="text" placeholder="January 1, 1990">
    </div>
</div>
<div class="modal-footer ">
    <button type="button" class="btn btn-success btn-lg" style="width: 100%;"><span class="glyphicon glyphicon-ok-sign"></span> Update</button>
</div>
</div>
<!-- /.modal-content --> 
</div>
<!-- /.modal-dialog --> 
</div>



<div class="modal fade" id="delete" tabindex="-1" role="dialog" aria-labelledby="edit" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-hidden="true"><span class="glyphicon glyphicon-remove" aria-hidden="true"></span></button>
        <h4 class="modal-title custom_align" id="Heading">Delete this entry</h4>
    </div>
    <div class="modal-body">

     <div class="alert alert-danger"><span class="glyphicon glyphicon-warning-sign"></span> Are you sure you want to delete this Record?</div>

 </div>
 <div class="modal-footer ">
    <button type="button" class="btn btn-success" ><span class="glyphicon glyphicon-ok-sign"></span> Yes</button>
    <button type="button" class="btn btn-default" data-dismiss="modal"><span class="glyphicon glyphicon-remove"></span> No</button>
</div>
</div>
<!-- /.modal-content --> 
</div>
<!-- /.modal-dialog --> 
</div>



<!-- Modal -->
<div class="modal fade" id="addclient" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Create Client Record</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form>
  <div class="form-group">
    <label for="exampleInputEmail1">First Name</label>
    <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="">

  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">Last Name</label>
    <input type="text" class="form-control" id="exampleInputPassword1">
  </div>
   <div class="form-group">
    <label for="exampleInputPassword1">Burial Type</label>
    <input type="text" class="form-control" id="exampleInputPassword1">
  </div>
   <div class="form-group">
    <label for="exampleInputPassword1">Location</label>
    <input type="text" class="form-control" id="exampleInputPassword1">
  </div>
   <div class="form-group">
    <label for="exampleInputPassword1">Date</label>
    <input type="date" class="form-control" id="exampleInputPassword1">
  </div>
 
</form>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Save Record</button>
      </div>
    </div>
  </div>
</div>

</div>
</div>
</div>
@endsection
