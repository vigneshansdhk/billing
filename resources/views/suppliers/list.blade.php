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
              <h3 class="mb-0">Suppliers History</h3>
            </div>

            <div class="table-responsive">
              <table class="table align-items-center table-flush">
                <thead class="thead-light">
                  <tr>
                     <th>Sno</th>
                     <th>Name</th>
                     <th>slug</th>
                     <th>number</th>
                     <th>address</th>
                     <th>additional</th>
                     <th>rate</th>
                  </tr>
                </thead>
                <tbody class="list">
                    @if(count($supplier_data['supdata']) > 0)
                        <?php $i=1; ?>
                        @foreach($supplier_data['supdata'] as $suppliers)
                            <tr>
                                <td>{{$i++}}</td>
                                <td>{{$suppliers->name}}</td>
                                <td>{{$suppliers->slug}}</td>
                                <td>{{$suppliers->number}}</td>
                                <td>{{$suppliers->address}}</td>
                                <td>{{$suppliers->additional}}</td>
                                <td>{{$suppliers->rate}}</td>
                                <td><a href="{{url('suppliers/list')}}/{{$suppliers->id}}" class="btn btn-warning">View Details</a></td>
                                <td><a href="{{url('suppliers/delete')}}/{{$suppliers ->id}}" class="btn btn-warning">Delete</a></td>
                                </tr>
                        @endforeach
                    @else
                        <tr><td colspan="6"> No Records Found</td></tr>
                    @endif
                </tbody>
              </table>
        @include('layouts.app-script')

    </body>
    </html>
