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
        <form action="{{url('sales')}}" method="POST">
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
                <div class="col-md-6">
                  <div class="form-group">
                      <label>Supplier</label>
                      <select class="form-control" name="supplier_id" required>
                          <option value="">SELECT SUPPLIER</option>
                          @foreach($data['suppliers'] as $supplier)
                                  <option value="{{$supplier->id}}">{{$supplier->name}}</option>
                          @endforeach
                      </select>
                  </div>
                  <div class="form-group">
                      <label>One Bag price</label>
                      <input type="number" name="bag_per_price" class="form-control" onkeyup="mt()" id="qty_metric" required>
                  </div>
                  <div class="form-group">
                      <label>QTY of the Bags
                      </label>
                      <input type="number" name="qty" class="form-control" id="qty_bags" onkeyup="bags()" required>
                  </div>

                  <div class="form-group">
                      <label>CGST %</label>
                      <input type="number" name="cgst" class="form-control" onkeyup="mt()" id="qty_metric" required>
                  </div>
                  <div class="form-group">
                      <label>IGST %</label>
                      <input type="number" name="igst" class="form-control" id="qty_bags" onkeyup="bags()" required>
                  </div>                  
                </div>
                <div class="col-md-6">
                  <div class="form-group">
                      <label>Customer Name</label>
                      <input type="text" name="customer_name" class="form-control" required>
                  </div>
                  <div class="form-group">
                      <label>Customer Mobile number</label>
                      <input type="number" name="mobile_number"  onkeyup="taxableValue()" class="form-control" id="basic_rate" required>
                      <span id="basic-error" class="text-danger"></span>
                  </div>
                  <div class="form-group">
                      <label>Discount (If any)</label>
                      <input type="number" name="discount" onkeyup="taxableValue()" class="form-control" id="discount" required>
                      <span id="discount-error" class="text-danger"></span>
                  </div>
                  <div class="form-group">
                      <label>Total Payable amount </label>
                      <input type="number" name="total_amount" onkeyup="taxableValue()" class="form-control" id="discount" required>
                      <span id="discount-error" class="text-danger"></span>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="card">
            <div class="card-title text-center mt-2"><h1>Payment mode</h1></div>
            <div class="card-body">
              <div class="row">
                <div class="col-md-6">
                  <div class="form-group">
                      <label>Payment Receiving </label>
                      <select class="form-control" name="payment_mode" required>
                          <option value="">SELECT Payment Value</option>
                          <option value="nocash">NO Cash</option>
                          <option value="full">Full Payment</option>
                          <option value="balance">Balance</option>
                      </select>
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="form-group">
                      <label>Payment Receive amount</label>
                      <input type="number" name="payment_receive_amount" class="form-control" required>
                  </div>
                </div>
              </div>
              <div class="row">
                <div class="col-md-6">
                  <div class="form-group">
                      <label>Payment Mode</label>
                      <select class="form-control" name="payment_type" required>
                          <option value="">SELECT Payment method</option>
                          <option value="cash">Cash</option>
                          <option value="account">Ac to Ac Transfer</option>
                      </select>
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="form-group">
                      <label>IMPS REf number</label>
                      <input type="text" name="ref_number" class="form-control" required>
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
</body>
</html>