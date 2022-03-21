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
              <a class="nav-link active" href="{{'/clientsinquiries'}}">Inquiry</a>
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

        <h4>Clients Inquiry</h4>
        
           <div class="table-responsive">


              <table id="mytable" class="table table-bordered table-hover table-striped">

                <tr>
                  <th>Name</th>
                  <th>Type of Inquiry</th>
                  <th>Messages</th>
                  <th>Contact No.</th>
                  <th>Email</th>
                  <th>Action</th>
                </tr>

                <tr>
                  <td>Bruce Wayne</td>
                  <td>Prices</td>
                  <td>What are the prices of Apartment, Mauseleum?</td>
                  <td>9123455679</td>
                  <td>google@gmail.com</td>
                  <td><span class="badge badge-success">Done </span></td>
                </tr>

                 <tr>
                  <td>Scarlet Jane</td>
                  <td>Services</td>
                  <td>What are services can you offer?</td>
                  <td>9123455679</td>
                  <td>yahoo@yahoo.com</td>
                  <td><span class="badge badge-success">Done </span></td>
                </tr>

                  <tr>
                  <td>Tom Holland</td>
                  <td>Life Plan</td>
                  <td>What are the inclusion when I avail Life Plan?</td>
                  <td>9123455679</td>
                  <td>facebook@yahoo.com</td>
                  <td><span class="badge badge-warning">Pending </span></td>
                </tr>

              </table>
          </div>
        

      </div>
    </div>



  </div>
</div>

@endsection
