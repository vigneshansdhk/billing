<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="Start your development with a Dashboard for Bootstrap 4.">
  <meta name="author" content="Creative Tim">
  <title>Sales Create</title>
  @include('layouts.app-css')
</head>
<body>
  @include('layouts.sidebar')
  <div class="main-content" id="panel">
    <!-- Topnav -->
    @include('layouts.header')
    <div class="row">
      <div class="col-md-12">
        <form action="{{url('suppliers')}}" method="POST">
          @csrf
          <div class="card">
            <div class="card-title text-center mt-2"><h1>Suppliers form</h1></div>
            <div class="card-body">
              <div class="row">
                <div class="col-md-12">
                  @include('layouts.flash')
                </div>
              </div>
              <div class="row">
                <div class="col-md-6">
                  <div class="form-group">
                      <label>Name</label>
                      <input type="text" name="name" class="form-control" onkeyup="mt()" id="qty_metric" required>
                  </div>
                  <div class="form-group">
                      <label>SLUG
                      </label>
                      <input type="text" name="slug" class="form-control" id="qty_bags" onkeyup="bags()" required>
                  </div>

                  <div class="form-group">
                      <label>Number</label>
                      <input type="number" name="number" class="form-control" onkeyup="mt()" id="qty_metric" required>
                  </div>                
                </div>
                <div class="col-md-6">
                  <div class="form-group">
                      <label>Additional</label>
                      <input type="text" name="additional" class="form-control" required>
                  </div>
                  <div class="form-group">
                      <label>Address</label>
                      <input type="text" name="igst" class="form-control" id="qty_bags" onkeyup="bags()" required>
                  </div>  
                  <div class="form-group">
                      <label>Rate</label>
                      <input type="number" name="mobile_number"  onkeyup="taxableValue()" class="form-control" id="basic_rate" required>
                      <span id="basic-error" class="text-danger"></span>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="row">
                <div class="col-md-12">
                  <button type="submit" class="btn btn-primary form-control">Save</button>
                </div>
              </div>
            </div>
          </div>
        </form>
      </div>
    </div>
    
  </div>
  @include('layouts.app-script')
  <script type="text/javascript">
    
  </script>
</body>

</html>