<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="Start your development with a Dashboard for Bootstrap 4.">
  <meta name="author" content="Creative Tim">
  <title>Billing</title>
  @include('layouts.app-css')
</head>

<body>
  @include('layouts.sidebar')
  <div class="main-content" id="panel">
    <!-- Topnav -->
    @include('layouts.header')
    <div class="row">
      <div class="col-md-12">
        <form action="{{url('puchase')}}" method="POST">
          @csrf
          <div class="card">
            <div class="card-title text-center mt-2"><h1>Puchase form</h1></div>
            <div class="card-body">
              <div class="row">
                <div class="col-md-12">
                  @include('layouts.flash')
                </div>
              </div>
              <div class="row">
                <div class="col-md-6">
                  <div class="form-group">
                      <label>Invoice serial number</label>
                      <input type="text" name="invoice_serial_number" class="form-control" required>
                  </div>
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
                      <label>QTY In Metric Ton</label>
                      <input type="text" name="qty_metric" class="form-control" onkeyup="mt()" id="qty_metric" required>
                  </div>
                  <div class="form-group">
                      <label>QTY In Bags
                      </label>
                      <input type="text" name="qty_bags" class="form-control" id="qty_bags" onkeyup="bags()" required>
                  </div>
                  <div class="form-group">
                      <label>IGST @
                      </label>
                      <input type="text" name="igst" class="form-control" onkeyup="gst()" id="igst" required>
                      <span id="amont-error" class="text-danger"></span>
                  </div>
                  <div class="form-group">
                      <label>IGST for above gst in Amount
                      </label>
                      <input type="text" name="igst_amount" class="form-control" id="igst_amount" required>
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="form-group">
                      <label>Invoice Date</label>
                      <input type="date" name="invoice_date" class="form-control" required>
                  </div>
                  <div class="form-group">
                      <label>HSN CODE</label>
                      <input type="text" name="hsn_code" class="form-control" required>
                  </div>
                  <div class="form-group">
                      <label>Basic Rate</label>
                      <input type="text" name="basic_rate"  onkeyup="taxableValue()" class="form-control" id="basic_rate" required>
                      <span id="basic-error" class="text-danger"></span>

                  </div>
                  <div class="form-group">
                      <label>Discount (If any)</label>
                      <input type="text" name="discount" onkeyup="taxableValue()" class="form-control" id="discount" required>
                      <span id="discount-error" class="text-danger"></span>

                  </div>
                  <div class="form-group">
                      <label>Taxable value of Supply of goods</label>
                      <input type="text" name="tax_value" class="form-control" id="tax_value" required>
                  </div>
                  <div class="form-group">
                      <label>Total invoice value</label>
                      <input type="text" name="total_invoice_value" class="form-control" id="total_invoice_value" required>
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
    function gst(){

        var amount =  document.getElementById('tax_value').value;
        if (amount == '') {
          document.getElementById('amont-error').innerHTML = 'Please enter Taxable value first';
          return false;
        }

        var value  = document.getElementById('igst').value;
        var gst    = (amount * value)/100;
        document.getElementById('igst_amount').value = gst;

        var total =  parseFloat(amount) + parseFloat(gst); 

        document.getElementById('total_invoice_value').value = total;
    }

    function taxableValue() {
        var basic     =  document.getElementById('basic_rate').value;
        var discount  =  document.getElementById('discount').value;

        if (basic == '') {
            document.getElementById('basic-error').innerHTML = 'Please enter basic amount first';
            return false;
        }

        if (discount == '') {
            document.getElementById('discount-error').innerHTML = 'Please enter Discount value ';
            return false;
        }

        document.getElementById('tax_value').value = basic - discount;
        
    }

    function mt(){
       var mt   = document.getElementById('qty_metric').value*20;
       document.getElementById('qty_bags').value= mt;
      
    }

    function bags(){
        var bag = document.getElementById('qty_bags').value;
        document.getElementById('qty_metric').value= bag/20;
    }
  </script>
</body>

</html>