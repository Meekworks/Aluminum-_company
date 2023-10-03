   <?php 
        $var = date('H:i'); 
        $xdate = date('Y-m-d'); 
    ?> 

    <div class="page-title-box">
                            <div class="row align-items-center">
                                <div class="col-md-8">
                                    <h6 class="page-title">New Sales Transaction</h6>
                                </div>
                                <div class="col-md-4">
                                    <div class="float-end d-none d-md-block">
                                        <div class="dropdown">
                                            <button  type="submit" class="btn   btn-danger btn-sm float-right" name="b_print" id="disnon" onClick="window.print();"><i class="fas fa-print"></i> Print
                                            </button>
                                        </div>
                                    </div>
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
                                                         <select  class="form-control"  id="product_code" onchange="fetchImage();fetchProductdd();">
                                                               <option>--Select Customer--</option>
                                                               <?php 
                                                                    $maineg = new mainClass();
                                                                    $maineg->selectProduct('stock_table');
                                                                ?>
                                                         </select>
                                                          <input type="text" hidden readonly class="form-control" value="<?php if(isset($_SESSION['Admin'])) {echo $Admin['username'];}?>" name="sales_rep1">
                                                    <input type="text" hidden readonly class="form-control" name="product_name" id="product" >
                                                     <input type="text" hidden  readonly class="form-control" name="unit" id="unit" >
                                                    </div>
                                                    <!-- end col -->

                                                    <div  class="mb-3 col-lg-2">
                                                        <label class="form-label" for="email">Brand</label>
                                                        <input type="text"  readonly class="form-control" name="brand" id="brand" >
                                                    </div>

                                                    <div  class="mb-3 col-lg-2">
                                                        <label class="form-label" for="email">Category</label>
                                                        <input type="text"  readonly class="form-control" name="category" id="category" >
                                                    </div>
                                                    <!-- end col -->
                                                    <div  class="mb-3 col-lg-2">
                                                        <label class="form-label" for="subject">Color</label>
                                                       <input type="text"  readonly class="form-control" name="color" id="color">
                                                    </div>

                                                    <div  class="mb-3 col-lg-2">
                                                        <label class="form-label" for="subject">Size</label>
                                                       <input type="text"  readonly class="form-control" name="size" id="size">
                                                    </div>


                                                    <!-- end col -->
                                                    <div class="mb-3 col-lg-2">
                                                        <label class="form-label" for="resume">Product Code</label>
                                                        <input type="text"  class="form-control" name="product_code" id="p_code"  onkeyup="fetchProdcodr();">
                                                        
                                                    </div>
                                                    <!-- end col -->
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
                                                    <!-- end col -->
                                                    <div class="col-lg-2 align-self-center">
                                                        <div class="d-grid">
                                                            <Button type="submit" name="addCart" class="form-control btn btn-success" id="btn_submit" style="width: 130px; height:40px;"><i class="icon icon-plus-sign"></i> Add to Cart</button> 
                                                            <!-- <input data-repeater-delete type="button" class="btn btn-primary mb-2" value="Delete"/> -->
                                                        </div>    
                                                    </div>
                                                    <!-- end col -->
                                                </div>
                                                <!-- end row -->
                                            </div>
                                            <!-- <input data-repeater-create type="button" class="btn btn-success mt-2 mt-sm-0" value="Add"/> -->
                                        </form>

                                    
                                           <div class="text-center"> <!-- Add 'text-center' class to center the content horizontally -->
                                                <img class="image-fliud mx-auto" id="image" style="width: 300px; height: 300px; margin-top: 15px; margin-bottom: 15px;" >
                                            </div>
                                    
                                    </div>
                                </div>
                            </div>
                        </div>



                        <div class="row">
                            <div class="col-12">
                                <div class="card">
                                    <div class="card-body">
                                        <?php 
                                           $maineg = new mainClass();
                                           $myCart = $maineg->select_check();
                                        ?> 
                                        <form  method="post" class="repeater" enctype="multipart/form-data">
                                            <div data-repeater-list="group-a">
                                                <div class="row" data-repeater-item>

                                                     <div  class="mb-3 col-lg-3">
                                                       <label>Sales Rep</label>
                                                        <input type="text" readonly class="form-control" value="<?php if(isset($_SESSION['Admin'])) {echo @$Admin['username'];}?>" name="sales_rep" id="fromdate">
                                                    </div>

                                                    <div  class="mb-3 col-lg-3">
                                                       <label>Date</label>
                                                        <input type="date" readonly value="<?php echo $xdate;?>" class="form-control" name="order_date" id="todate">
                                                    </div>


                                                    <div  class="mb-3 col-lg-3">
                                                       <label>Time</label>
                                                        <input type="text" readonly  value="<?php echo $var; ?>" class="form-control text-center" name="timex" id="todate">
                                                    </div>

                                                    <div  class="mb-3 col-lg-3">
                                                       <label>Payment</label>
                                                        <select class="form-control" name="mode_payment">
                                                           <option>--Sales Payment--</option>
                                                           <option>Cash </option>
                                                           <option>Credit </option>
                                                           <option>Transfer</option>
                                                           
                                                            <!-- <option>Cash and Transfer</option>
                                                           <option>Cash and POS</option>
                                                           <option>POS and Transfer</option> -->
                                                       </select>
                                                    </div>
                                                    
                                                    
                                                </div>

                                                <br><br>

                                                 <div class="row" data-repeater-item>

                                                     <div  class="mb-3 col-lg-3">
                                                       <label>Customer Type</label>
                                                         <select class="form-control" id="means" name="type" onchange="mesansOFidentifacartion_change();">
                                                           <option>--Select Customer--</option>
                                                           <option>Walk-in Customer</option>
                                                           <option>Regular Customer</option>
                                                       </select>
                                                    </div>

                                                    <div  class="mb-3 col-lg-3">
                                                       <label>Customer Name</label>
                                                        <input hidden type="text" class="form-control" name="customer_name_new" id="customer_new" placeholder="Customer Name">
                                                      
                                                        <select hidden class="form-control" name="customer_name" id="customer_reg" onchange="fetchCustomeradd();">
                                                           <option>--Select Customer--</option>
                                                           <?php 
                                                                $maineg = new mainClass();
                                                                $maineg->selectCustomer('customer_distributor');
                                                            ?>
                                                       </select>
                                                    </div>


                                                    <div  class="mb-3 col-lg-3">
                                                       <label>Address</label>
                                                         <input hidden type="text" class="form-control" name="address_new" id="address_new" placeholder="Address">
                                                        <input hidden readonly type="text" class="form-control" placeholder="Address " name="address" id="address_reg">
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
                                        <?php 
                                           $maineg = new mainClass();
                                           $myCart = $maineg->select_check();
                                        ?> 
                                        
                                            <div data-repeater-list="group-a">
                                                <div class="row" data-repeater-item>

                                                  <div class="table-responsive table-striped  table-xs">
      <table class="table table-bordered table-striped table-hover" id="resultTable" data-responsive="table">
  
        <thead>
        <tr style="background-color: #383838; color: #FFFFFF;" >
            <th> Product Code </th>
            <th> Name</th>
            <th> Color</th>
            <th> Unit</th>
            <th> Qty </th>
            <th> Price </th>
            <th> Amount </th>
            <th> Edit </th>
            <th> Remove </th>
             
          </tr>
        </thead>

      
        <tbody>
            <?php
            if (!empty($myCart)) {
                foreach ($myCart as $k => $v) {?> 
          
            <tr class="record">

                <td>
                    <h5 class="nomargin" style=" display: inline-flex;"><?php echo $myCart[$k]['product_code'];?></h5>
                    <input type="hidden" value="<?php echo $myCart[$k]['product_code'];?>" name="product_code[]">
                </td>


                <td>
                    <h5 class="nomargin" style=" display: inline-flex;"><?php echo $myCart[$k]['product_name'];?></h5>
                    <input type="hidden" value="<?php echo $myCart[$k]['product_name'];?>" name="product_name[]">
                    <input type="hidden" value="<?php echo $myCart[$k]['brand'];?>" name="brand[]">
                    <input type="hidden" value="<?php echo $myCart[$k]['category'];?>" name="category[]">
                    <input type="hidden" value="<?php echo $myCart[$k]['id'];?>" name="id[]">
                </td>

                 <td>
                    <h5 class="nomargin" style=" display: inline-flex;"><?php echo $myCart[$k]['color'];?></h5>
                    <input type="hidden"  value="<?php echo $myCart[$k]['color'];?>" name="color[]">
                    <input type="hidden"  value="<?php echo $myCart[$k]['size'];?>" name="size[]">
                </td>


                 <td>
                    <h5 class="nomargin" style=" display: inline-flex;"><?php echo $myCart[$k]['unit'];?></h5>
                    <input type="hidden" value="<?php echo $myCart[$k]['unit'];?>" name="unit[]">
                </td>

                 
                <td>
                    <input type="number" readonly style="width:100px;" class="form-control" value="<?php echo $myCart[$k]['quantity'];?>" name="quantity[]">
                </td>


                <td>
                    <h5 class="nomargin" style="display:inline-flex;"><?php echo $myCart[$k]['price'];?></h5>
                    <input type="hidden" value="<?php echo $myCart[$k]['price'];?>" name="price[]">
                </td>

                 
                <td>
                    <h5 class="nomargin" style="display:inline-flex;"><?php echo $myCart[$k]['total'];?></h5>
                    <input type="hidden" value="<?php echo $myCart[$k]['total'];?>" name="total[]">
                </td>

                 <td>
                    <a class="btn btn-primary " href="?action=EditAddCart&&editAdd=<?php echo $myCart[$k]["id"];?>"><i class="fas fa-redo "></i></a> 
                </td>

           
                <td>
                    <button type="submit" name="del" class="btn btn-danger  btn-responsive text-white" onclick="javascript:confirmationDelete($(this));return false;" id="<?php echo $myCart[$k]['id'];?>" value="<?php echo $myCart[$k]['id'];?>"><i class="fas fa-times"></i>
                    </button>
                </td>
               
            </tr>
          
         <?php }}?>

           <?php 
          $maineg = new mainClass();
          $myCart = $maineg->select_check($Admin['username']);
          $item_quantity = 0;
          $item_price = 0;
          $item_discount = 0;
          $total_discount = 0;
          $Discount = 0;
           if(!empty($myCart)){
              foreach($myCart as $item){
            
                $item_price += ((int)$item['total']);
                $item_quantity +=  ((int)$item['quantity']);
              }
           }
        ?>

           <tr>
          <th colspan="5" ><font size=6><strong> Total: <span class="text-success"> ₦<?php  echo number_format($item_price);?></span></strong></font>
            <input type="text" hidden required  class="form-control" name="grand_total" value="<?php  echo $item_price;?>">
          </th>


          <th colspan="2">
            <p>Amount Paying:</p><input type="text" value="0" class="form-control" name="amount_paid" placeholder="Amount Paying">
          </th>

        </tr>

    </tbody>
      </table>
      <br>
      
        <?php /*if (@$myCart[$k]['id'] == null){
             echo '<div class="alert alert-danger">
        <h3><center>No Sales Available!!</center> </h3>
      </div>';
           
            }else{
                echo'';}*/?>

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



     function CalculateTotal(){
        var Qty = document.getElementById('qty').value;
        var ratePrice = document.getElementById('rate').value;
        

        var SumAmount = ratePrice * Qty;

        document.getElementById('TotalAmount').value = number_format(SumAmount);
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
    var url = "Control/ajaxController.php?customer_reg="+JsExplode[2];


    xmlhttp.onreadystatechange = function() {
            if (this.readyState == 4 && this.status == 200) {
        // document.getElementById('basic_salary').innerHTML = this.responseText;
       var result = this.responseText.split("-");
        document.getElementById('address_reg').value = result[0];
        document.getElementById('phone_reg').value = result[1];
        
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
       var result = this.responseText.split("_");
          document.getElementById('product').value = result[0];
        document.getElementById('brand').value = result[1];
        document.getElementById('category').value = result[2];
        

        if(result[3] >= 1){
           document.getElementById('instock').value = "In-stock";
        }else{
            document.getElementById('instock').value = "Out-stock";
        }    

        document.getElementById('price').value = result[4];
        document.getElementById('color').value = result[5];
         
        document.getElementById('size').value = result[6];
        document.getElementById('p_code').value = result[7];
         document.getElementById('unit').value = result[8];


            }
        };
        xmlhttp.open("GET",url,true);
        xmlhttp.send();

        CalculateTotalSale();
        // fetchImage();
}










 function CalculateTotalSale(){
        var Qty = document.getElementById('qty').value;
        var ratePrice = document.getElementById('price').value;
        var SumAmount = ratePrice * Qty;
        // document.getElementById('total').value = SumAmount;

        var sumTotalCash = parseFloat(SumAmount);
        var formattedSum = sumTotalCash.toLocaleString();
        document.getElementById('total').value = formattedSum;

}
  

  function fetchImage() {

        if (window.XMLHttpRequest) {
           // code for IE7+, Firefox, Chrome, Opera, Safari
            xmlhttp = new XMLHttpRequest();
          } else {
            // code for IE6, IE5
            xmlhttp = new ActiveXObject("Microsoft.XMLHTTP");
        }

    var AcountID =document.getElementById('product_code').value;
    var JsExplode = AcountID;
    var url = "Control/ajaxController.php?proimage="+JsExplode;


    xmlhttp.onreadystatechange = function() {
            if (this.readyState == 4 && this.status == 200) {
        // document.getElementById('basic_salary').innerHTML = this.responseText;

        document.getElementById('image').src = "view/product_image/" + this.responseText;   
            }
        };
        xmlhttp.open("GET",url,true);
        xmlhttp.send();
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