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

        <h4>Clients Record</h4>
        
        <button type="button" class="btn btn-outline-primary" data-toggle="modal" data-target="#addclient">Add Purchase</button>
         <button type="button" class="btn btn-outline-success" data-toggle="modal" data-target="#addclient">Edit</button>

        <div class="input-group rounded col-md-4 float-right">
          <input type="search" class="form-control rounded" placeholder="Search" aria-label="Search" aria-describedby="search-addon" />
          <span class="input-group-text border-0" id="search-addon">
            <i class="fas fa-search"></i> Enter
          </span>
        </div>
        
        <div class="row">



          <div class="col-md-4">
            <div class="card">
              <div class="card-body">

                <table class="table table-condensed table-striped table-hover small">
                  <tr>
                    <th>ID</th>
                    <th>Name</th>
                    <th>Balance</th>
                  </tr>

                  <tr>
                    <td><input type="radio"/> 202201</td>
                    <td>Clark Kent</td>
                    <td>Fully Paid</td>
                  </tr>

                  <tr>
                    <td><input type="radio"/> 202202</td>
                    <td>Bruce Weyne</td>
                    <td>Partially Paid</td>
                  </tr>

                  <tr>
                    <td><input type="radio"/> 202203</td>
                    <td>Steeve Rogers</td>
                    <td>Partially Paid</td>
                  </tr>


                </table>

              </div>
            </div>
          </div>
          <div class="col-md-8">
            <div class="card">
              <div class="card-body">

                <table class="table table-condensed table-bordered small">
                  <tr>
                    <th>Name of Deaceased Person</th>
                    <th>Purchases</th>
                    <th>Quantity</th>
                    <th>Payor</th>
                    <th>Amount</th>
                    <th>Date</th>
                  </tr>

                  <tr>
                    <td rowspan="4">Klark Kent</td>
                    <td>1 Apartment</td>
                    <td>1</td>
                    <td>Willy Wonka</td>
                    <td>Php 5,000</td>
                    <td>January 09, 1990</td>
                  </tr>

                  <tr>
                    <td>Stand Flowers</td>
                    <td>2</td>
                    <td>Willy Wonka</td>
                    <td>Php 4,000</td>
                    <td>July 01, 1990</td>
                  </tr>

                  <tr>
                    <td>Cleaning</td>
                    <td>1</td>
                    <td>Hugh Jackman</td>
                    <td>Php 500</td>
                    <td>November 01, 1990</td>
                  </tr>

                   <tr>
                    <td>Big Candles</td>
                    <td>4</td>
                    <td>Hugh Jackman</td>
                    <td>Php 200</td>
                    <td>November 01, 1990</td>
                  </tr>

                  <tr></tr>


                </table>

                <hr></hr>

                <table class="table table-responsive small">

                  <tr>
                    <th>Purchases</th>
                    <th>Quantity</th>
                    <th>Payor</th>
                    <th>Amount</th>
                    <th>Date</th>
                    <th>Action</th>
                  </tr>

                  <tr class="small">
                    <td><input type="text" class="form-control" name=""></td>
                    <td><input type="text" class="form-control" name=""></td>
                    <td><input type="text" class="form-control" name=""></td>
                    <td><input type="number" class="form-control" name=""></td>
                    <td><input type="date" class="form-control" name=""></td>
                    <td><button class="btn btn-primary btn-sm">Add</button></td>
                  </tr>


                  
                </table>

              </div>
            </div>
          </div>
        </div>


      </div>
    </div>



  </div>
</div>
</div>
@endsection
