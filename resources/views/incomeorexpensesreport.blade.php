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
              <a class="nav-link active" href="{{'/incomeorexpensesreport'}}">Income/Expenses</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="{{'/employeereports'}}">Employees</a>
            </li>
          </ul>





        </div>
      </div>


      <div class="container">

        <h4>Expense or Income Report</h4>
        

        <div class="container">
          <div class="card">
            <div class="card-body">
              <div class="row">
                <div class="col col-lg-3">
                  <h1>Expenses</h1>
                </div>
                <div class="col col-lg-6">
                  <table class="table table-bordered table-condensed small table-striped">
                   <tr>
                     <th>Description</th>
                     <th>Prizes</th>
                     <th>Date</th>
                   </tr>
                   <tr>
                     <td> </td>
                     <td> </td>
                     <td> </td>
                   </tr>
                   <tr>
                     <td> </td>
                     <td> </td>
                     <td> </td>
                   </tr>
                   <tr>
                     <td> </td>
                     <td> </td>
                     <td> </td>
                   </tr>
                   <tr>
                     <td> </td>
                     <td> </td>
                     <td> </td>
                   </tr>
                   <tr>
                     <td> </td>
                     <td> </td>
                     <td> </td>
                   </tr>
                   <tr>
                     <td> </td>
                     <td> </td>
                     <td> </td>
                   </tr>
                   <tr>
                     <td> </td>
                     <td> </td>
                     <td> </td>
                   </tr>
                   <tr>
                     <td> </td>
                     <td> </td>
                     <td> </td>
                   </tr>
                   <tr>
                     <td colspan="2" class="" style="background: gray;"><center style="color: white;">TOTAL</center>  </td>
                     
                     <td> </td>
                   </tr>
                 </table>
               </div>
               <div class="col">

                <button class="btn btn-primary">+ Add Expenses</button>

               </div>
             </div>
           </div>
         </div>


                <div class="card">
            <div class="card-body">
              <div class="row">
                <div class="col col-lg-3">
                  <h1>Income</h1>
                </div>
                <div class="col col-lg-6">
                  <table class="table table-bordered table-condensed small table-striped">
                   <tr>
                     <th>Monthly Sales</th>
                     <th>Monthly Expenses</th>
                     <th>Net Income</th>
                   </tr>
                   <tr>
                     <td> </td>
                     <td> </td>
                     <td> </td>
                   </tr>
                   <tr>
                     <td> </td>
                     <td> </td>
                     <td> </td>
                   </tr>
                   <tr>
                     <td> </td>
                     <td> </td>
                     <td> </td>
                   </tr>
                   <tr>
                     <td> </td>
                     <td> </td>
                     <td> </td>
                   </tr>
                   <tr>
                     <td> </td>
                     <td> </td>
                     <td> </td>
                   </tr>
                   <tr>
                     <td> </td>
                     <td> </td>
                     <td> </td>
                   </tr>
                   <tr>
                     <td> </td>
                     <td> </td>
                     <td> </td>
                   </tr>
                   <tr>
                     <td> </td>
                     <td> </td>
                     <td> </td>
                   </tr>
                   <tr>
                     <td colspan="2" class="" style="background: gray;"><center style="color: white;">TOTAL</center>  </td>
                     
                     <td> </td>
                   </tr>
                 </table>
               </div>
               <div class="col">

               

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
