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
              <a class="nav-link active" href="{{'/salesreport'}}">Sales</a>
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

        <h4>Sales Report</h4>
        
         <div class="input-group rounded col-md-4 float-right">
                  <input type="search" class="form-control rounded" placeholder="Search" aria-label="Search" aria-describedby="search-addon" />
                  <span class="input-group-text border-0" id="search-addon">
                    <i class="fas fa-search"></i> Enter
                </span>
            </div>

           <div class="table-responsive">


              <table id="mytable" class="table table-bordered table-hover table-striped">

                <tr>
                  <th>Description</th>
                  <th>Price</th>
                  <th>Quantity</th>
                  <th>Total</th>
                  <th>Date</th>
                  <th>Action</th>
                </tr>

                <tr>
                  <td> </td>
                  <td> </td>
                  <td> </td>
                  <td> </td>
                  <td> </td>
                  <td><span class="badge badge-success">Edit</span> | <span class="badge badge-danger">Remove</span></td>
                </tr>

                   <tr>
                  <td> </td>
                  <td> </td>
                  <td> </td>
                  <td> </td>
                  <td> </td>
                  <td><span class="badge badge-success">Edit</span> | <span class="badge badge-danger">Remove</span></td>
                </tr>

                   <tr>
                  <td> </td>
                  <td> </td>
                  <td> </td>
                  <td> </td>
                  <td> </td>
                  <td><span class="badge badge-success">Edit</span> | <span class="badge badge-danger">Remove</span></td>
                </tr>

                   <tr>
                  <td> </td>
                  <td> </td>
                  <td> </td>
                  <td> </td>
                  <td> </td>
                  <td><span class="badge badge-success">Edit</span> | <span class="badge badge-danger">Remove</span></td>
                </tr>

                   <tr>
                  <td> </td>
                  <td> </td>
                  <td> </td>
                  <td> </td>
                  <td> </td>
                  <td><span class="badge badge-success">Edit</span> | <span class="badge badge-danger">Remove</span></td>
                </tr>

                   <tr>
                  <td> </td>
                  <td> </td>
                  <td> </td>
                  <td> </td>
                  <td> </td>
                  <td><span class="badge badge-success">Edit</span> | <span class="badge badge-danger">Remove</span></td>
                </tr>

                   <tr>
                  <td> </td>
                  <td> </td>
                  <td> </td>
                  <td> </td>
                  <td> </td>
                  <td><span class="badge badge-success">Edit</span> | <span class="badge badge-danger">Remove</span></td>
                </tr>

              </table>
          </div>
        

      </div>
    </div>



  </div>
</div>

@endsection
