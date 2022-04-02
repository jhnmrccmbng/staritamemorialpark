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
              <a class="nav-link dropdown-toggle " data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">Clients</a>
              <div class="dropdown-menu">

                <a class="dropdown-item" href="{{'/clients'}}">Clients Record</a>
                <a class="dropdown-item" href="{{'/clientsreport'}}">Clients Report</a>

              </div>
            </li>
            <li class="nav-item">
              <a class="nav-link " href="{{'/clientsinquiries'}}">Inquiry</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="{{'/salesreport'}}">Sales</a>
            </li>
            <li class="nav-item">
             <a class="nav-link" href="{{'/incomeorexpensesreport'}}">Income/Expenses</a>
            </li>
            <li class="nav-item">
               <a class="nav-link active" href="{{'/employeereports'}}">Employees</a>
            </li>
          </ul>





        </div>
      </div>


      <div class="container">

        <h4>Employee Reports</h4>
        
        <div class="btn-group" role="group" aria-label="Basic example">
  <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#addemployee">Add</button>
 
</div>

        <div class="input-group rounded col-md-4 float-right">
          <input type="search" class="form-control rounded" placeholder="Search" aria-label="Search" aria-describedby="search-addon" />
          <span class="input-group-text border-0" id="search-addon">
            <i class="fas fa-search"></i> Enter
          </span>
        </div>
        

           <div class="table-responsive">


              <table id="mytable" class="table table-bordered table-hover table-striped">

                <tr>
                  <th>Employee ID</th>
                  <th>Name</th>
                  <th>Position</th>
                  <th>Status</th>
                  <th>Salary</th>
                  <th>Action</th>
                 
                </tr>

                <tr>
                  <td>SR-2022-01</td>
                  <td>John Wick</td>
                  <td>CEO</td>
                  <td>Owner</td>
                  <td>-----</td><td>
                   <button type="button" class="btn btn-success">Edit</button>
                    <button type="button" class="btn btn-danger">Delete</button>
                  </td>
                </tr>

                <tr>
                  <td>SR-2022-02</td>
                  <td>Clark Kent</td>
                  <td>Guard</td>
                  <td>Regular</td>
                  <td>-----</td><td>
                   <button type="button" class="btn btn-success">Edit</button>
                    <button type="button" class="btn btn-danger">Delete</button>
                  </td>
                </tr>

                <tr>
                  <td>SR-2022-03</td>
                  <td>Vico Sotto</td>
                  <td>Accounting</td>
                  <td>Regular</td>
                  <td>-----</td><td>
                   <button type="button" class="btn btn-success">Edit</button>
                    <button type="button" class="btn btn-danger">Delete</button>
                  </td>
                </tr>

                <tr>
                  <td>SR-2022-04</td>
                  <td>Bruce Wayne</td>
                  <td>Caretaker</td>
                  <td>Regular</td>
                  <td>-----</td><td>
                   <button type="button" class="btn btn-success">Edit</button>
                    <button type="button" class="btn btn-danger">Delete</button>
                  </td>
                </tr>

                <tr>
                  <td>SR-2022-05</td>
                  <td>Steeve Rogers</td>
                  <td>Caretaker</td>
                  <td>Regular</td>
                  <td>-----</td><td>
                   <button type="button" class="btn btn-success">Edit</button>
                    <button type="button" class="btn btn-danger">Delete</button>
                  </td>
                </tr>



              </table>
          </div>
        

      </div>
    </div>



  </div>
</div>

<!-- Modal -->
<div class="modal fade" id="addemployee" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
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
    <label for="exampleInputEmail1">Name</label>
    <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="">

  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">Position</label>
    <input type="text" class="form-control" id="exampleInputPassword1">
  </div>
   <div class="form-group">
    <label for="exampleInputPassword1">Status</label>
    <input type="text" class="form-control" id="exampleInputPassword1">
  </div>
   <div class="form-group">
    <label for="exampleInputPassword1">Salary</label>
    <input type="number" class="form-control" id="exampleInputPassword1">
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

@endsection
