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
                        <a class="nav-link active" href="#">Dashboard</a>
                    </li>
                     <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="{{'/clients'}}" role="button" aria-haspopup="true" aria-expanded="false">Clients</a>
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


        <div class="col-md-12">
            <h4>Events for Today</h4>
            <div class="table-responsive">


              <table id="mytable" class="table table-bordered table-striped">

                 <thead>

                     <th><input type="checkbox" id="checkall" /></th>
                     <th>Name</th>
                     <th>Date</th>
                     <th>Action</th>
                    
                 </thead>
                 <tbody>

                    <tr>
                        <td><input type="checkbox" class="checkthis" /></td>
                        <td>Christmas Season</td>
                        <td>December 25, 2022</td>
                        <td><a href="#" class="btn btn-success"><span class="fa fa-pencil"></span> Edit</a> | <a href="#" class="btn btn-danger"><span class="fa fa-pencil"></span> Delete</a></td>
                       
                    </tr>

                    <tr>
                        <td><input type="checkbox" class="checkthis" /></td>
                        <td>Araw ng Kagitingan</td>
                        <td>April 9, 2022</td>
                        <td><a href="#" class="btn btn-success"><span class="fa fa-pencil"></span> Edit</a> | <a href="#" class="btn btn-danger"><span class="fa fa-pencil"></span> Delete</a></td>
                        
                    </tr>


                    <tr>
                        <td><input type="checkbox" class="checkthis" /></td>
                        <td>Cash Allowance Distribution</td>
                        <td>May 2, 2022</td>
                        <td><a href="#" class="btn btn-success"><span class="fa fa-pencil"></span> Edit</a> | <a href="#" class="btn btn-danger"><span class="fa fa-pencil"></span> Delete</a></td>
                        
                    </tr>



                    <tr>
                        <td><input type="checkbox" class="checkthis" /></td>
                        <td>Sales Reporting by Finance OED</td>
                        <td>June 13, 2022</td>
                        <td><a href="#" class="btn btn-success"><span class="fa fa-pencil"></span> Edit</a> | <a href="#" class="btn btn-danger"><span class="fa fa-pencil"></span> Delete</a></td>
                        
                    </tr>





                </tbody>

            </table>



        </div>

    </div>

    <div class="col-md-12 ">
        <div class="row ">
            <div class="col-xl-3 col-lg-6">
                <div class="card l-bg-cherry">
                    <div class="card-statistic-3 p-4">
                        <div class="card-icon card-icon-large"><i class="fas fa-shopping-cart"></i></div>
                        <div class="mb-4">
                            <h5 class="card-title mb-0">Inquiries Today</h5>
                        </div>
                        <div class="row align-items-center mb-2 d-flex">
                            <div class="col-8">
                                <h2 class="d-flex align-items-center mb-0">
                                    7
                                </h2>
                            </div>

                        </div>
                        <div class="progress mt-1 " data-height="8" style="height: 8px;">
                            <div class="progress-bar l-bg-cyan" role="progressbar" data-width="25%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100" style="width: 25%;"></div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-3 col-lg-6">
                <div class="card l-bg-blue-dark">
                    <div class="card-statistic-3 p-4">
                        <div class="card-icon card-icon-large"><i class="fas fa-users"></i></div>
                        <div class="mb-4">
                            <h5 class="card-title mb-0">Total Burried</h5>
                        </div>
                        <div class="row align-items-center mb-2 d-flex">
                            <div class="col-8">
                                <h2 class="d-flex align-items-center mb-0">
                                    4,000
                                </h2>
                            </div>

                        </div>
                        <div class="progress mt-1 " data-height="8" style="height: 8px;">
                            <div class="progress-bar l-bg-green" role="progressbar" data-width="25%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100" style="width: 25%;"></div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-3 col-lg-6">
                <div class="card l-bg-green-dark">
                    <div class="card-statistic-3 p-4">
                        <div class="card-icon card-icon-large"><i class="fas fa-ticket-alt"></i></div>
                        <div class="mb-4">
                            <h5 class="card-title mb-0">Sales Today</h5>
                        </div>
                        <div class="row align-items-center mb-2 d-flex">
                            <div class="col-8">
                                <h2 class="d-flex align-items-center mb-0">
                                 ₱150,000
                             </h2>
                         </div>

                     </div>
                     <div class="progress mt-1 " data-height="8" style="height: 8px;">
                        <div class="progress-bar l-bg-orange" role="progressbar" data-width="25%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100" style="width: 25%;"></div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-xl-3 col-lg-6">
            <div class="card l-bg-orange-dark">
                <div class="card-statistic-3 p-4">
                    <div class="card-icon card-icon-large"><i class="fas fa-dollar-sign"></i></div>
                    <div class="mb-4">
                        <h5 class="card-title mb-0">Available Spaces</h5>
                    </div>
                    <div class="row align-items-center mb-2 d-flex">
                        <div class="col-8">
                            <h2 class="d-flex align-items-center mb-0">
                                5000
                            </h2>
                        </div>

                    </div>
                    <div class="progress mt-1 " data-height="8" style="height: 8px;">
                        <div class="progress-bar l-bg-cyan" role="progressbar" data-width="25%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100" style="width: 25%;"></div>
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
