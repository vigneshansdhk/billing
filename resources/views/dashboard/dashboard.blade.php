<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="Start your development with a Dashboard for Bootstrap 4.">
  <meta name="author" content="Creative Tim">
  <title>Dashboard</title>
  @include('layouts.app-css')
</head>
<body>
  @include('layouts.sidebar')
  <div class="main-content" id="panel">
    <!-- Topnav -->
    @include('layouts.header')
    <div class="header bg-primary pb-6">
      <div class="container-fluid">
        <div class="header-body">
          <!-- Card stats -->
          <div class="row">
            <div class="col-xl-3 col-md-6">
              <div class="card card-stats mt-2">
                <!-- Card body -->
                <div class="card-body">
                  <div class="row mt-2">
                    <div class="col">
                      <h5 class="card-title text-uppercase text-muted mb-0">Total Sales</h5>
                      <span class="h2 font-weight-bold mb-0">zvdds</span>
                    </div>
                    <div class="col-auto">
                      <div class="icon icon-shape bg-gradient-info text-white rounded-circle shadow">
                        <i class="ni ni-chart-bar-32"></i>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-xl-3 col-md-6">
              <div class="card card-stats mt-2">
                <!-- Card body -->
                <div class="card-body">
                  <div class="row mt-2">
                    <div class="col">
                      <h5 class="card-title text-uppercase text-muted mb-0">Total Buy</h5>
                      <span class="h2 font-weight-bold mb-0">zvdds</span>
                    </div>
                    <div class="col-auto">
                      <div class="icon icon-shape bg-gradient-info text-white rounded-circle shadow">
                        <i class="ni ni-chart-bar-32"></i>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    
  </div>
  @include('layouts.app-script')
</body>

</html>