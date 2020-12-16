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
        <form action="{{url('sales')}}" method="POST">
          @csrf
          <div class="card">
            <div class="card-title text-center mt-2"><h1>Sales form</h1></div>
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
                      <input type="number" name="mobile_number"  onkeyup="" class="form-control" id="basic_rate" required>
                      <span id="basic-error" class="text-danger"></span>
                  </div>
                  <div class="form-group">
                      <label>Discount (If any)</label>
                      <input type="number" name="discount" onkeyup="" class="form-control" id="discount" required>
                      <span id="discount-error" class="text-danger"></span>
                  </div>
                  <div class="form-group">
                      <label>Total Payable amount </label>
                      <input type="number" name="total_amount" maxlength="9"  onblur="myFunction()"class="form-control" id="t_amount" required>
                      <span id="discount-error" class="text-danger"></span>
                      <p id="tot_amt" class ="mt-3 text-danger"></p>
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
    
  </div>
  @include('layouts.app-script')
  <script type="text/javascript">

    function myFunction() {
        var t_amount     =  document.getElementById('t_amount').value;

        if (t_amount == '') {
            document.getElementById('basic-error').innerHTML = 'Please enter basic amount first';
            return false;
        }

       console.log("t amount=====>"+t_amount)
        numToString(t_amount)
    } 
      

   function numToString(x)
{
    var r=0;
    var txter=x;
    var sizer=txter.length;
    var numStr="";
    if(isNaN(txter))
    {
    alert(" Invalid number");
    exit();
    }
    var n=parseInt(x);
    var places=0;
    var str="";
    var entry=0;
    while(n>=1)
    {
    r=parseInt(n%10);

    if(places<3 && entry==0)
    {
    numStr=txter.substring(txter.length-0,txter.length-3) // Checks for 1 to 999.
    str=onlyDigit(numStr); //Calls function for last 3 digits of the value.
    entry=1;
    }

    if(places==3)
    {
    numStr=txter.substring(txter.length-5,txter.length-3) 
    if(numStr!="")
    {
      str=onlyDigit(numStr)+ "Thousand"+str;
    }
    }

    if(places==5)
    {
    numStr=txter.substring(txter.length-7,txter.length-5) //Substring for 5 place to 7 place of the string
    if(numStr!="")
    {
      str=onlyDigit(numStr)+ "Lakhs"+str; //Appends the word lakhs to it
    }
    }

    if(places==6)
    {
    numStr=txter.substring(txter.length-9,txter.length-7)  //Substring for 7 place to 8 place of the string
    if(numStr!="")
    {
      str=onlyDigit(numStr)+ " Crores "+str;        //Appends the word Crores
    }
    }

    n=parseInt(n/10);
    places++;
    }
   
  document.getElementById('tot_amt').innerHTML = str + ' Rupees Only';
}




function onlyDigit(n)
{
//Arrays to store the string equivalent of the number to convert in words
var units=['','One','Two','Three','Four','Five','Six','Seven','Eight','Nine'];
var randomer=['','Eleven','Twelve','Thirteen','Fourteen','Fifteen','Sixteen','Seventeen','Eighteen','Nineteen'];
var tens=['','Ten','Twenty','Thirty','Forty','Fifty','Sixty','Seventy','Eighty','Ninety'];
var r=0;
var num=parseInt(n);
var str="";
var pl="";
var tenser="";
while(num>=1)
{
r=parseInt(num%10);
tenser=r+tenser;
 if(tenser<=19 && tenser>10) //Logic for 10 to 19 numbers
 {
 str=randomer[tenser-10];
 }
 else
 {
  if(pl==0)        //If units place then call units array.
  {
  str=units[r];
  }
  else if(pl==1)    //If tens place then call tens array.
  {
  str=tens[r]+" "+str;
  }
 }
 if(pl==2)        //If hundreds place then call units array.
 {
 str=units[r]+" Hundred "+str;
 }
 
num=parseInt(num/10);
pl++;
}
return str;
}
  </script>
</body>

</html>