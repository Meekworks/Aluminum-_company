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
                                    <h6 class="page-title">New Sales PPGI Coils  </h6>
                                </div>
                                <div class="col-md-4">
                                    <div class="float-end d-none d-md-block">
                                        <div class="dropdown">
                                            <a href="?action=selectSales" class=" d-sm-inline-block btn btn-sm btn-primary ml-2 mr-4  float-right shadow-sm"><i class="fas fa-arrow-circle-left  fa-sm text-white"></i> Back</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>



                                  <div class="row">
                            <div class="col-12">
                               <div class="card">
                                    <div class="card-body">
                                        <table id="datatable-buttons" class="table table-striped table-bordered dt-responsive nowrap" style="border-collapse: collapse; border-spacing: 0; width: 100%;">
                                      <thead>
                                            <tr>
                                            <th>Name</th>
                                            <th>Warehouse</th>
                                            <th>Series</th>
                                            <th>Location</th>
                                            <th>Guage</th>
                                            <th>Color</th>
                                            <th>Kg_Weight</th>
                                            <th>Meter</th>
                                            <th>Action</th>
                                            </tr>
                                       </thead>
                                    <tbody>
                                             
                                    <?php 
                                    $maineg = new  mainClass();
                                    $result = $maineg->GetStockinnew('PPGI Coils');
                                    $count = 1; 
                                   

                                    if (!empty($result)) {
                                    foreach ($result as $k => $v) { 
                                    echo '
                                     <tr>
                                     
                                     <td>'.$result[$k]["product_name"].'</td>
                                     <td>'.$result[$k]["warehouse"].'</td>
                                     <td>'.$result[$k]["container_series"].'</td>
                                     <td>'.$result[$k]["location"].'</td>
                                     <td>'.$result[$k]["guage"].'</td>
                                     <td>'.$result[$k]["color"].'</td>
                                     <td>'.$result[$k]["kg_weight"].'</td>
                                     <td>'.$result[$k]["meter_length"].'</td>
                                     <td><a class="btn btn-primary btn-sm btn-responsive text-white" href="?action=SaleListPPGICoils&&saleDeatails='.$result[$k]["item_code"].'">Add_List</a></td>
                                    </tr>
                                    '; }}?>

                                    </tbody>
                                </table>
                            </div>
                        </div>

</div>

 </div>
                        </div>
        


                      <!--       <div class="row">
                            <div class="col-12">
                                <div class="card">
                                    <div class="card-body">
                                       
                                        <form  method="post" class="repeater" enctype="multipart/form-data">

                                            <div data-repeater-list="group-a">
                                                <div class="row" data-repeater-item>
                                                    <div  class="mb-3 col-lg-4 ">
                                                        <label class="form-label" for="name">Name</label>
                                                         <select  class="form-control"  id="product_code" onchange="fetchImage();fetchProductdd();">
                                                               <option>--Select Customer--</option>
                                                               <?php 
                                                                    //$maineg = new mainClass();
                                                                   // $maineg->selectProduct('stock_table');
                                                                ?>
                                                         </select>
                                                          <input type="text" hidden readonly class="form-control" value="<?php //if(isset($_SESSION['Admin'])) {echo $Admin['username'];}?>" name="sales_rep1">
                                                    <input type="text" hidden readonly class="form-control" name="product_name" id="product" >
                                                     <input type="text" hidden  readonly class="form-control" name="unit" id="unit" >
                                                    </div>
                                                  

                                                    <div  class="mb-3 col-lg-2">
                                                        <label class="form-label" for="email">Brand</label>
                                                        <input type="text"  readonly class="form-control" name="brand" id="brand" >
                                                    </div>

                                                    <div  class="mb-3 col-lg-2">
                                                        <label class="form-label" for="email">Category</label>
                                                        <input type="text"  readonly class="form-control" name="category" id="category" >
                                                    </div>
                                                  
                                                    <div  class="mb-3 col-lg-2">
                                                        <label class="form-label" for="subject">Color</label>
                                                       <input type="text"  readonly class="form-control" name="color" id="color">
                                                    </div>

                                                    <div  class="mb-3 col-lg-2">
                                                        <label class="form-label" for="subject">Size</label>
                                                       <input type="text"  readonly class="form-control" name="size" id="size">
                                                    </div>


                                                    <div class="mb-3 col-lg-2">
                                                        <label class="form-label" for="resume">Product Code</label>
                                                        <input type="text"  class="form-control" name="product_code" id="p_code"  onkeyup="fetchProdcodr();">
                                                        
                                                    </div>
                                                   
                                                    <div class="mb-3 col-lg-2 ">
                                                        <label class="form-label" for="instock">In stock</label>
                                                         <input type="text" readonly class="form-control" name="instock" id="instock" >
                                                    </div>


                                                    <div class="mb-3 col-lg-2 ">
                                                        <label class="form-label" for="price">Price</label>
                                                         <input type="text" readonly class="form-control" name="price" id="price" >
                                                    </div>

                                                    <div class="mb-3 col-lg-2 ">
                                                        <label class="form-label" for="qty">Qty</label>
                                                        <input type="number" class="form-control" name="qty" id="qty" min="1" onclick="CalculateTotalSale();" onkeyup="CalculateTotalSale();" autofocus>
                                                    </div>

                                                    <div class="mb-3 col-lg-2 ">
                                                        <label class="form-label" for="total">Total</label>
                                                         <input type="text" readonly  class="form-control" name="total" id="total" >
                                                    </div>
                                                    
                                                    <div class="col-lg-2 align-self-center">
                                                        <div class="d-grid">
                                                            <Button type="submit" name="addCart" class="form-control btn btn-success" id="btn_submit" style="width: 130px; height:40px;"><i class="icon icon-plus-sign"></i> Add to Cart</button> 
                                                     
                                                        </div>    
                                                    </div>
                                               
                                                </div>
                                                
                                            </div>
                                           
                                        </form>

                                    
                                           <div class="text-center"> 
                                                <img class="image-fliud mx-auto" id="image" style="width: 300px; height: 300px; margin-top: 15px; margin-bottom: 15px;" >
                                            </div>
                                    
                                    </div>
                                </div>
                            </div>
                        </div> -->



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
                                                       <label>Bank</label>
                                   
                                        <select type="text" class="form-control"  name="bank_name">
                                          <option>---SELECT BANK ---</option>
                                              <?php 
                                                $maineg = new mainClass();
                                                $maineg->selectBank('bank');
                                                ?>
                                        </select>
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
        	<th> #</th>
            <th> Name</th>
           
            <th> Weight </th>
            <th> Price </th>
            <th> Amount </th>
            <th> Edit </th>
            <th> Remove </th>
           
             
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
                         <input type="hidden" value="<?php echo $myCart[$k]['old_price'];?>" name="old_price[]">
                        <input type="hidden" value="<?php echo $myCart[$k]['id'];?>" name="id[]">
                      </td>
                     
                     <td>
                        <input type="number" readonly style="width:100px;" class="form-control" value="<?php echo $myCart[$k]['kg_weight'];?>" name="kg_weight[]">
                     </td>
                     <td>
                        
                      
                           <h6 class="nomargin" style="display: inline-flex;"><?php echo $myCart[$k]['price'];?>
                      </h6>
                        <input type="hidden" value="<?php echo $myCart[$k]['price'];?>" name="price[]">

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
        
            $item_price += ((int)$item['kg_weight'] * (int)$item['price']);
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

        <div  class="mb-3 col-lg-2">
            <label class="form-label" for="email">Price_Ajusted</label>
            <select class="form-control"  name="adjusted_option"> <option>No</option><option>Yes</option></select>
        </div>

        <div  class="mb-3 col-lg-3">
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
        </div>

    </div>

</div>
</tbody>
      </table>

      <br>
        <div class="checkbox text-center">
        <button type="submit" name="seeItem" class="btn btn-success btn-block mx-auto" style="width:300px;">Make Sale <i class="fa fa-angle-right"></i></button>
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
        var ratePrice = document.getElementById('rate').value;
        

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
        document.getElementById('name').value = result[0];
        document.getElementById('category').value = result[1];
        if(result[2] >= 1){
           document.getElementById('instock').value = result[2];
        }else{
            document.getElementById('instock').value = "Not-Avaliable";
        }    
        document.getElementById('price').value = result[3];
        // document.getElementById('image').src = "view/product_image/" + result[4];     
            }
        };
        xmlhttp.open("GET",url,true);
        xmlhttp.send();

        CalculateTotalSale();
}


 function CalculateTotalSale(){
        var Qty = document.getElementById('qty').value;
        var ratePrice = document.getElementById('price').value;
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