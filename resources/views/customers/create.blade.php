<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    @include('layouts.app-css')
</head>
<body>
@include('layouts.sidebar')
<div class="main-content" id="panel">
    <!-- Topnav -->
    @include('layouts.header')
    <div class="row">
      <div class="col-md-12">
        <!-- @if(session('message'))
            <div class= "alert alert-success">{{session('message')}}</div>
         @endif -->
        <form action="{{url('customers')}}" method="POST">
          @csrf
          <div class="card">
            <div class="card-title text-center mt-2"><h1>Registration Form</h1></div>
            <div class="card-body">
              <div class="row">
                <div class="col-md-12">
                  @include('layouts.flash')
                </div>
              </div>
              <div class="row">
                <div class="col-md-12">
                  <div class="form-group">
                      <label>Name</label>
                      <input type="text" name="name" class="form-control" onkeyup="mt()" id="qty_metric" required>
                  </div>
                  <div class="form-group">
                      <label>email
                      </label>
                      <input type="email" name="email" class="form-control" id="qty_bags" onkeyup="bags()" required>
                  </div>

                  <div class="form-group">
                      <label>Remarks</label>
                      <textarea col="50" row="40" name="remarks" class="form-control" onkeyup="mt()" id="qty_metric" required></textarea>
                  </div>                 
                </div>
               
                <button type="submit" class="btn btn-primary form-control">Save</button>
           </div>
          </div>
        </form>
      </div>
    </div>
    @include('layouts.app-script')
</body>
</html>