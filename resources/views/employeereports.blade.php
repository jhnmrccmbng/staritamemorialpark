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
  <button type="button" class="btn btn-primary">Add</button>
  <button type="button" class="btn btn-success">Edit</button>
  <button type="button" class="btn btn-danger">Delete</button>
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
                 
                </tr>

                <tr>
                  <td>SR-2022-01</td>
                  <td>John Wick</td>
                  <td>CEO</td>
                  <td>Owner</td>
                  <td>-----</td>
                </tr>

                <tr>
                  <td>SR-2022-02</td>
                  <td>Clark Kent</td>
                  <td>Guard</td>
                  <td>Regular</td>
                  <td>-----</td>
                </tr>

                <tr>
                  <td>SR-2022-03</td>
                  <td>Vico Sotto</td>
                  <td>Accounting</td>
                  <td>Regular</td>
                  <td>-----</td>
                </tr>

                <tr>
                  <td>SR-2022-04</td>
                  <td>Bruce Wayne</td>
                  <td>Caretaker</td>
                  <td>Regular</td>
                  <td>-----</td>
                </tr>

                <tr>
                  <td>SR-2022-05</td>
                  <td>Steeve Rogers</td>
                  <td>Caretaker</td>
                  <td>Regular</td>
                  <td>-----</td>
                </tr>

              </table>
          </div>
        

      </div>
    </div>



  </div>
</div>

@endsection
