<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="author" content="Creative Tim">
  <title>Customers list</title>
  <!-- Favicon -->
  @include('layouts.app-css')
</head>
   
<body>
  <!-- Sidenav -->
  @include('layouts.sidebar')
  <!-- Main content -->
  <div class="main-content" id="panel">
    <!-- Topnav -->
    @include('layouts.header')
    <div class="container-fluid mt-4">
      <div class="row">
        <div class="col-md-12">
          @include('layouts.flash')
        </div>
      </div>

      <div class="row">
        <div class="col">
          <div class="card">
            <!-- Card header -->
            <div class="card-header border-0">
              <h3 class="mb-0">Customers History</h3>
            </div>

            <div class="table-responsive">
              <table class="table align-items-center table-flush">
                <thead class="thead-light">
                  <tr>
                     <th>Sno</th>
                     <th>Name</th>
                     <th>Email</th>
                     <th>Remarks</th>
                     <th>Action</th>
                  </tr>
                </thead>
                <tbody class="list">
                        <?php $i=1; ?>
                        @foreach($customer_data['alldata'] as $customers)
                            <tr>
                                <td>{{$i++}}</td>
                                <td>{{$customers->name}}</td>
                                <td>{{$customers->email}}</td>
                                <td>{{$customers->remarks}}</td>
                                <td><a href="{{url('customers/list')}}/{{$customers->id}}" class="btn btn-warning">View Details</a></td>
                                <td><a href="{{url('customers/delete')}}/{{$customers->id}}" class="btn btn-warning">Delete</a></td>
                                </tr>
                        @endforeach
                </tbody>
              </table>
             @include('layouts.app-script')
             <div class="card-footer">
                  {{$customer_data['alldata']->links()}}
                 </div>
    </body>
    </html>
