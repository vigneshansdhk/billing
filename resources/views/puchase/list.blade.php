<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="author" content="Creative Tim">
  <title>Puchases list</title>
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
              <h3 class="mb-0">Puchase History</h3>
            </div>

            <!-- Light table -->
            <div class="table-responsive">
              <table class="table align-items-center table-flush">
                <thead class="thead-light">
                  <tr>
                     <th>Sno</th>
                     <th>Invoice</th>
                     <th>Supplier</th>
                    <th>Qty</th>
                    <th>Total Invoice Value</th>
                    <th>Action</th>
                  </tr>
                </thead>
                <tbody class="list">
                    @if(count($data['puchases']) > 0)
                        <?php $i=1; ?>
                        @foreach($data['puchases'] as $puchase)
                            <tr>
                                <td>{{$i++}}</td>
                                <td>{{$puchase->invoice_serial_number}}</td>
                                <td>{{$puchase->supplier_id}}</td>
                                <td> Metric : {{$puchase->qty_metric}} ,Bags : {{$puchase->qty_bags}}</td>
                                <td>{{$puchase->total_invoice_value}}</td>
                                <td><a href="{{url('puchase')}}/{{$puchase->id}}" class="btn btn-warning">View Details</a></td>
                            </tr>
                        @endforeach
                    @else
                        <tr><td colspan="6"> No Records Found</td></tr>
                    @endif
                </tbody>
              </table>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- Argon Scripts -->
    @include('layouts.app-script')
</body>

</html>