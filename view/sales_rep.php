<?php 
$var = date('H:i'); 
$xdate = date('Y-m-d'); 
$invoice  = 'IN';
$a=rand(10000,1000090);
// $b=rand(100,1);
$c=rand(1000,10);
$invoice_no= $invoice."_".$c.$a;
?>

                        <div class="page-title-box">
                            <div class="row align-items-center">
                                <div class="col-md-8">
                                    <h6 class="page-title">New Sales Order</h6>
                                </div>
                                <div class="col-md-4">
                                    <div class="float-end d-none d-md-block"><div class="dropdown"></div></div>
                                </div>
                            </div>
                        </div>

                       <div class="row">
                            <div class="col-12">
                                <div class="card">
                                    <div class="card-body">
                                        <!-- <h4 class="card-title">Example</h4> -->
                                        <form  method="post" class="repeater" enctype="multipart/form-data">
                                            <div data-repeater-list="group-a">
                                                <div class="row" data-repeater-item>
                                                    <div  class="mb-3 col-lg-4 ">
                                                    <label class="form-label" for="name">Name</label>
                                                    <select  class="form-control"  id="product_code" onchange="fetchProductdd();">
                                                    <option>--Select Customer--</option>
                                                        <?php 
                                                        $maineg = new mainClass();
                                                        $maineg->selectProductW('stockin');
                                                        ?>
                                                    </select>
                                                    <input type="text" hidden readonly class="form-control" value="<?php if(isset($_SESSION['Admin'])) {echo $Admin['username'];}?>" name="sales_rep1">
                                                    <input type="text" hidden readonly class="form-control" name="product_name" id="product_name" >
                                                     <input type="text" hidden  readonly class="form-control bg-light" name="unit" id="unit" >
                                                    </div>
                                                    <!-- end col -->

                                                      <div  class="mb-3 col-lg-2">
                                                        <label class="form-label" for="email">Category</label>
                                                        <input type="text"  readonly class="form-control bg-light" name="category" id="category" >
                                                    </div>

                                                    <div  class="mb-3 col-lg-2">
                                                        <label class="form-label" for="email">Guage</label>
                                                        <input type="text"  readonly class="form-control bg-light" name="guage" id="guage" >
                                                    </div>

                                                    <!-- end col -->
                                                    <div  class="mb-3 col-lg-2">
                                                        <label class="form-label" for="subject">Color</label>
                                                       <input type="text"  readonly class="form-control bg-light" name="color" id="color">
                                                    </div>

                                                    <div  class="mb-3 col-lg-2">
                                                        <label class="form-label" for="subject">Weight</label>
                                                       <input type="text"  readonly class="form-control bg-light" name="kg_weight" id="kg_weight">
                                                    </div>


                                                    <div  class="mb-3 col-lg-2">
                                                        <label class="form-label" for="subject">Length (Meter)</label>
                                                       <input type="text"  readonly class="form-control bg-light" name="meter_length" id="meter_length">
                                                    </div>


                                                    <div  class="mb-3 col-lg-2">
                                                        <label class="form-label" for="subject">Embossed</label>
                                                       <input type="text"  readonly class="form-control bg-light" name="embossed" id="embossed">
                                                    </div>

                                                    <div  class="mb-3 col-lg-2">
                                                        <label class="form-label" for="subject">Design</label>
                                                       <input type="text"  readonly class="form-control" name="design" id="design">
                                                    </div>

                                                    <div  class="mb-3 col-lg-2">
                                                        <label class="form-label" for="subject">Packet</label>
                                                       <input type="text"  readonly class="form-control bg-light" name="packet" id="packet">
                                                    </div>

                                                    <div  class="mb-3 col-lg-2">
                                                        <label class="form-label" for="subject">Item Code</label>
                                                       <input type="text"  readonly class="form-control bg-light" name="product_code" id="item_code">
                                                    </div>
                                                    <!-- end col -->
                                                    
                                                    <!-- end col -->
                                                    <div class="mb-3 col-lg-2 ">
                                                        <label class="form-label" for="instock">In stock</label>
                                                         <input type="text" readonly class="form-control bg-light" name="instock" id="quantity" >
                                                    </div>


                                                    <div class="mb-3 col-lg-3 ">
                                                        <label class="form-label" for="price">Price</label>
                                                         <input type="text" readonly class="form-control" name="selling_price" id="selling_price" >
                                                    </div>

                                                    <div class="mb-3 col-lg-3 ">
                                                        <label class="form-label" for="qty">Qty</label>
                                                        <input type="number" class="form-control" name="qty" id="qty" min="1" onclick="CalculateTotalSale();" onkeyup="CalculateTotalSale();" autofocus>
                                                    </div>

                                                    <div class="mb-3 col-lg-3 ">
                                                        <label class="form-label" for="total">Total</label>
                                                         <input type="text" readonly  class="form-control bg-light" name="total" id="total" >
                                                         <input type="hidden"  readonly class="form-control bg-light" name="purchase_price" id="purchase_price">
                                                    </div>

                                                    <!-- end col -->
                                                    <div class="col-lg-3 align-self-center">
                                                        <div class="d-grid">
                                                            <Button type="submit" name="addCart" class="form-control btn btn-success" id="btn_submit" style="width: 130px; height:40px;"><i class="icon icon-plus-sign"></i>Add to Cart</button> 
                                                            <!-- <input data-repeater-delete type="button" class="btn btn-primary mb-2" value="Delete"/> -->
                                                        </div>    
                                                    </div>
                                                    <!-- end col -->
                                                </div>
                                                <!-- end row -->
                                            </div>
                                            <!-- <input data-repeater-create type="button" class="btn btn-success mt-2 mt-sm-0" value="Add"/> -->
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>

        
                        <div>
                          &nbsp;&nbsp;
                        </div>

                        <div>
                          &nbsp;&nbsp;
                        </div>

                        <div>
                          &nbsp;&nbsp;
                        </div>

                        <div class="row">
                            <div class="col-12">
                                <div class="card">
                                    <div class="card-body">
                                         <?php 
                                           $maineg = new mainClass();
                                           $myCart = $maineg->select_check($_SESSION['Admin']);
                                            ?> 
                                        <form  method="post" class="repeater" enctype="multipart/form-data">
                                            <div data-repeater-list="group-a">
                                                <div class="row" data-repeater-item>

                                                     <div  class="mb-3 col-lg-2">
                                                       <label>Sales Rep</label>
                                                        <input type="text" readonly class="form-control" value="<?php if(isset($_SESSION['Admin'])) {echo @$Admin['username'];}?>" name="sales_rep" id="fromdate">
                                                    </div>

                                                    <div  class="mb-3 col-lg-2">
                                                       <label>Date</label>
                                                        <input type="date" readonly value="<?php echo $xdate;?>" class="form-control" name="order_date" id="todate">
                                                    </div>


                                                    <div  class="mb-3 col-lg-2">
                                                       <label>Time</label>
                                                        <input type="text" readonly  value="<?php echo $var; ?>" class="form-control text-center" name="timex" id="todate">
                                                    </div>

                                                    <div  class="mb-3 col-lg-3">
                                                       <label>Payment Method</label>
                                                        <select class="form-control" name="mode_payment">
                                                           <option>--Select Mode Of Payment--</option>
                                                           <option>Credit</option>
                                                           <option>Cash</option>
                                                           <option>Transfer</option>
                                                           <option>POS</option>
                                                            <option>Cash and Transfer</option>
                                                           <option>Cash and POS</option>
                                                           <option>POS and Transfer</option>
                                                        </select>
                                                    </div>


                                                    <div  class="mb-3 col-lg-3">
                                                       <label>Invoice No</label>
                                                        <input type="text" class="form-control" name="invoice_number" placeholder="Invoice Number">
                                   
                                                           <!--  <select type="text" class="form-control"  name="bank_name">
                                                              <option>---SELECT BANK ---</option> -->
                                                                  <?php 
                                                                    // $maineg = new mainClass();
                                                                    // $maineg->selectBank('bank');
                                                                    ?>
                                                            <!-- </select> -->
                                                    </div>
                                                    
                                                    
                                                </div>

                                                <br><br>

                                                 <div class="row" data-repeater-item>

                                                     <div  class="mb-3 col-lg-3">
                                                       <label>Customer Type</label>
                                                         <!-- <label>Payment Method</label> -->
                                   <select class="form-control" id="means" name="type" onchange="mesansOFidentifacartion_change();">
                                       <option>--Select Customer--</option>
                                       <option>Walk-in Customer</option>
                                       <option>Regular Customer</option>
                                   </select>
                                                    </div>

                                                    <div  class="mb-3 col-lg-3">
                                                       <label>Customer Name</label>
                                                       
                                        <input hidden type="text" class="form-control"  name="customer_name_new" id="customer_new" >
                                  
                                        <select hidden class="form-control" name="customer_name" id="customer_reg" onchange="fetchCustomeroldBalance();fetchCustomeradd();">
                                       <option>--Select Customer--</option>
                                       <?php 
                                            $maineg = new mainClass();
                                            $maineg->selectCustomer('customer_table');
                                        ?>
                                   </select>
                                                    </div>


                                                    <div  class="mb-3 col-lg-3">
                                                       <label>Address</label>
                                                           <div>
                                        <input hidden type="text" class="form-control" name="address_new" id="address_new" placeholder="Address">

                                        <input hidden readonly type="text" class="form-control" placeholder="Address " name="address" id="address_reg">
                                    </div>
                                                    </div>

                                                    <div  class="mb-3 col-lg-3">
                                                       <label>Phone</label>
                                                         <input hidden type="text" class="form-control" name="phone_new" id="phone_new" placeholder="Phone">

                                        <input hidden type="text" placeholder="phone" readonly class="form-control" name="phone" id="phone_reg">
                                                    </div>
                                                    
                                                </div>


                                                <!-- end row -->
                                            </div>
                                            <!-- <input data-repeater-create type="button" class="btn btn-success mt-2 mt-sm-0" value="Add"/> -->
                                        

                                    
                                          
                                    
                                    </div>
                                </div>
                            </div>
                        </div>




<div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-body">
                <div data-repeater-list="group-a">
                <div class="row" data-repeater-item>
                  <div class="table-responsive table-striped  table-xs">
                <table class="table table-bordered table-striped table-hover mb-4">
                    <thead>
                        <tr>
                        	<th>#</th>
                            <th>Name</th>
                            <th>Quantity</th>
                            <th>Weight</th>
                            <th>Price</th>
                            <th>Amount</th>
                            <th>Edit</th>
                            <th>Remove</th>
                        </tr>
                    </thead>

                <tbody>
                    <?php
                    $no = 1;
                    if (!empty($myCart)) {
                        foreach ($myCart as $k => $v) {?> 
                  
                    <tr class="record">
                            <td><h6 class="nomargin" style=" display: inline-flex;"><?php echo $no++; ?>
                              </h6>
                          </td>
                             <td>
                                <input type="hidden" value="<?php echo $myCart[$k]['product_code'];?>" name="product_code[]">

                                <input type="hidden" value="<?php echo $myCart[$k]['cost_of_goods'];?>" name="cost_of_goods[]">

                                  <h6 class="nomargin" style=" display: inline-flex;"><?php echo $myCart[$k]['product_name'];?>
                              </h6>
                                <input type="hidden" value="<?php echo $myCart[$k]['product_name'];?>" name="product_name[]">
                                <input type="hidden"   value="<?php echo $myCart[$k]['category'];?>" name="category[]">
                                <input type="hidden" value="<?php echo $myCart[$k]['guage'];?>" name="guage[]">
                                <input type="hidden" value="<?php echo $myCart[$k]['color'];?>" name="color[]">
                                <input type="hidden" value="<?php echo $myCart[$k]['meter_length'];?>" name="meter_length[]">
                                <input type="hidden" value="<?php echo $myCart[$k]['embossed'];?>" name="embossed[]">
                                <input type="hidden" value="<?php echo $myCart[$k]['design'];?>" name="design[]">
                                <input type="hidden" value="<?php echo $myCart[$k]['packet'];?>" name="packet[]">
                                 <!-- <input type="hidden" value="<?php //echo $myCart[$k]['old_price'];?>" name="old_price[]"> -->
                                <input type="hidden" value="<?php echo $myCart[$k]['id'];?>" name="id[]">
                              </td>

                              <td>
                                <input type="number" readonly style="width:100px;" class="form-control" value="<?php echo $myCart[$k]['quantity'];?>" name="quantity[]">
                             </td>
                             
                             <td>
                                <input type="number" readonly style="width:100px;" class="form-control" value="<?php echo $myCart[$k]['kg_weight'];?>" name="kg_weight[]">
                             </td>
                             <td>
                                
                              
                            <h6 class="nomargin" style="display: inline-flex;"><?php echo $myCart[$k]['selling_price'];?></h6>
                                <input type="hidden" value="<?php echo $myCart[$k]['selling_price'];?>" name="price[]">

                             </td>
                             
                             <td>
                                   <h6 class="nomargin" style=" display: inline-flex;"><?php echo $myCart[$k]['total'];?>
                              </h6>
                                <input type="hidden" value="<?php echo $myCart[$k]['total'];?>" name="total[]">
                             </td>

                             <td>
                                <a class="btn btn-primary " href="?action=EditAddCart&&editAdd=<?php echo $myCart[$k]["id"];?>">Edit</a> 
                            </td>
                       
                            <td><button type="submit" name="del" class="btn btn-danger  btn-responsive text-white" onclick="javascript:confirmationDelete($(this));return false;" id="<?php echo $myCart[$k]['id'];?>" value="<?php echo $myCart[$k]['id'];?>">Delete</i></button></td>
                            
                           
                        </tr>

                 <?php }}?>

                     <?php 
              $maineg = new mainClass();
              $myCart = $maineg->select_check($_SESSION['Admin']);
              $item_quantity = 0;
              $item_price = 0;
              $item_discount = 0;
              $total_discount = 0;
              $Discount = 0;
               if(!empty($myCart)){
                  foreach($myCart as $item){
                
                    $item_price += ((int)$item['kg_weight'] * (int)$item['selling_price']);
                    $item_quantity +=  ((int)$item['kg_weight']);
                  }
               }
            ?>

            </tbody>
              </table>

    <table>
        <tbody>

      <div data-repeater-list="group-a">
             <div class="row" data-repeater-item>
                                                 
                                                  

        <div  class="mb-3 col-lg-3">
            <label class="form-label" for="email">Total:</label>
            <span class="text-success"><h4> ₦<?php  echo number_format($item_price);?></h4></span>
            <input type="text" hidden required  class="form-control" id="grand_total"  name="grand_total" value="<?php  echo $item_price;?>">
        </div>

      <!--  <div  class="mb-3 col-lg-2">
            <label class="form-label" for="email">Price_Ajusted</label>
            <select class="form-control"  name="adjusted_option"> <option>No</option><option>Yes</option></select>
        </div>recordItem -->

    <!--      <div  class="mb-3 col-lg-3">
            <label class="form-label" for="email">Invoice No</label>
            <input type="text" class="form-control" name="number_number" placeholder="Invoice Number">
        </div> -->

      <!--   <div  class="mb-3 col-lg-3">
            <label class="form-label" for="email">Amount_Paying</label>
            <input type="text" value="0" class="form-control" id="amount_paid" name="amount_paid" placeholder="Amount Paying" onkeyup="CalculateBalance()">
        </div>


         <div  class="mb-3 col-lg-2">
            <label class="form-label" for="email">Current_Balance</label>
            <input type="text" readonly class="form-control" id="old_balance" name="old_balance" placeholder="Balance will appear here">
        </div>

        <div  class="mb-3 col-lg-2">
            <label class="form-label" for="email">Old_Balance</label>
            <input type="text" readonly class="form-control" id="oldBal"  placeholder="Balance will appear here"></span>
        </div> -->

    </div>

</div>
</tbody>
      </table>

      <br>
        <div class="checkbox text-center">
        <button type="submit" name="recordItem" class="btn btn-success btn-block mx-auto" style="width:300px;">Record Invoice <i class="fa fa-angle-right"></i></button>
        </div>
  
    </div>
                                                                              
    </div>
    <!-- end row -->
</div>
             
    </div>
</div>
</div>
</div>

</form>
                        
                

<script type="text/javascript">

    function CalculateBalance(){
        var g_total = document.getElementById('grand_total').value;
        var amount_paid = document.getElementById('amount_paid').value;
        var Balance = g_total - amount_paid;
        document.getElementById('old_balance').value = number_format(Balance);
     }





     function CalculateTotal(){
        var Qty = document.getElementById('qty').value;
        var ratePrice = document.getElementById('selling_price').value;
        

        var SumAmount = ratePrice * Qty;

        document.getElementById('total').value = number_format(SumAmount);
     }
</script>

                               
<script>
    function mesansOFidentifacartion_change() {
        var means = document.getElementById('means').value;

        if (means == "Walk-in Customer") {
            document.getElementById('customer_new').hidden = false;
            document.getElementById('customer_reg').hidden = true;
            document.getElementById('address_new').hidden = false;
            document.getElementById('address_reg').hidden = true;
            document.getElementById('phone_new').hidden = false;
            document.getElementById('phone_reg').hidden = true;
           

        } else if (means == "Regular Customer") {
           document.getElementById('customer_new').hidden = true;
            document.getElementById('customer_reg').hidden = false;
            document.getElementById('address_new').hidden = true;
            document.getElementById('address_reg').hidden = false;
            document.getElementById('phone_new').hidden = true;
            document.getElementById('phone_reg').hidden = false;
       

        } else {
           document.getElementById('customer_new').hidden = true;
            document.getElementById('customer_reg').hidden = true;
            document.getElementById('address_new').hidden = true;
            document.getElementById('address_reg').hidden = true;
            document.getElementById('phone_new').hidden = true;
            document.getElementById('phone_reg').hidden = true;
    
        }
        // alert(means);


    }
</script>


<script type="text/javascript">

        // function displayResult(event) {
 




   function UpdateQty(event) {
    // AcountID = AcountID_new;
    
    var AcountID = event.target.value;

        if (window.XMLHttpRequest) {
           // code for IE7+, Firefox, Chrome, Opera, Safari
            xmlhttp = new XMLHttpRequest();
          } else {
            // code for IE6, IE5
            xmlhttp = new ActiveXObject("Microsoft.XMLHTTP");
        }

    var url = "Control/ajaxController.php?update="+AcountID;


    xmlhttp.onreadystatechange = function() {
            if (this.readyState == 4 && this.status == 200) {
        // document.getElementById('basic_salary').innerHTML = this.responseText;
       var result = this.responseText.split("-");
        document.getElementById('new_id').value = result[0];
        document.getElementById('new_qty').value = result[1];
         document.getElementById('new_price').value = result[2];
        document.getElementById('new_total').value = result[3];
        // alert(this.responseText)
            }
        };
        xmlhttp.open("GET",url,true);
        xmlhttp.send(); 
}

// }


   



   function fetchCustomeradd() {

        if (window.XMLHttpRequest) {
           // code for IE7+, Firefox, Chrome, Opera, Safari
            xmlhttp = new XMLHttpRequest();
          } else {
            // code for IE6, IE5
            xmlhttp = new ActiveXObject("Microsoft.XMLHTTP");
        }

    var AcountID =document.getElementById('customer_reg').value;
    var JsExplode = AcountID.split("-");
    var url = "Control/ajaxController.php?customer_reg="+JsExplode[1];


    xmlhttp.onreadystatechange = function() {
            if (this.readyState == 4 && this.status == 200) {
        // document.getElementById('basic_salary').innerHTML = this.responseText;
       var result = this.responseText.split("-");
        document.getElementById('address_reg').value = result[0];
        document.getElementById('phone_reg').value = result[1];
        document.getElementById('old_balance').value = result[2];
        
        // alert(this.responseText);
        
            }
        };
        xmlhttp.open("GET",url,true);
        xmlhttp.send();

        
    
}




   function fetchCustomeroldBalance() {

        if (window.XMLHttpRequest) {
           // code for IE7+, Firefox, Chrome, Opera, Safari
            xmlhttp = new XMLHttpRequest();
          } else {
            // code for IE6, IE5
            xmlhttp = new ActiveXObject("Microsoft.XMLHTTP");
        }

    var AcountID =document.getElementById('customer_reg').value;
    var JsExplode = AcountID.split("-");
    var url = "Control/ajaxController.php?customer_regOd="+JsExplode[1];


    xmlhttp.onreadystatechange = function() {
            if (this.readyState == 4 && this.status == 200) {
        document.getElementById('oldBal').value = this.responseText;
       // var result = this.responseText.split("-");
       //  document.getElementById('address_reg').value = result[0];
       //  document.getElementById('phone_reg').value = result[1];
       //  document.getElementById('old_balance').value = result[2];
        
        // alert(this.responseText);
        
            }
        };
        xmlhttp.open("GET",url,true);
        xmlhttp.send();

        
    
}


 function fetchProductdd() {

        if (window.XMLHttpRequest) {
           // code for IE7+, Firefox, Chrome, Opera, Safari
            xmlhttp = new XMLHttpRequest();
          } else {
            // code for IE6, IE5
            xmlhttp = new ActiveXObject("Microsoft.XMLHTTP");
        }

    var AcountID =document.getElementById('product_code').value;
    var JsExplode = AcountID;
    var url = "Control/ajaxController.php?product_code="+JsExplode;


    xmlhttp.onreadystatechange = function() {
            if (this.readyState == 4 && this.status == 200) {
        // document.getElementById('basic_salary').innerHTML = this.responseText;
       var result = this.responseText.split("-");
        document.getElementById('product_name').value = result[0];
        document.getElementById('category').value = result[1];
        document.getElementById('guage').value = result[2];
        document.getElementById('color').value = result[3];
        document.getElementById('kg_weight').value = result[4];
        document.getElementById('meter_length').value = result[5];
        document.getElementById('embossed').value = result[6];
        document.getElementById('design').value = result[7];
        document.getElementById('packet').value = result[8];
        document.getElementById('quantity').value = result[9];
        document.getElementById('selling_price').value = result[10];
        document.getElementById('item_code').value = result[11];
        document.getElementById('purchase_price').value = result[12];
        // document.getElementById('image').src = "view/product_image/" + result[4];     
            }
        };
        xmlhttp.open("GET",url,true);
        xmlhttp.send();

        CalculateTotalSale();
}


 function CalculateTotalSale(){
        var Qty = document.getElementById('qty').value;
        var ratePrice = document.getElementById('selling_price').value;
        var SumAmount = ratePrice * Qty;
        document.getElementById('total').value =SumAmount;
}
  

</script>

<script type="text/javascript">
   function confirmationDelete(anchor)
{
   var conf = confirm('Are you sure want to delete this record?');
   if(conf)
      // window.location=anchor.attr("href");
      //   // window.location='?action=Catery';
      this.form.submit();
}
</script>