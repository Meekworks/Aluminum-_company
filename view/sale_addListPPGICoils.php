<?php 

$var = date('H:i'); 
$xdate = date('Y-m-d'); 

$invoice  = 'IN';
$a=rand(10000,1000090);
// $b=rand(100,1);
$c=rand(1000,10);
$invoice_no= $invoice."_".$c.$a;
?>



    <?php 
    $maineg = new  mainClass();
    $DBinfo = $maineg->Targeted_information('stockin','item_code',$_GET['saleDeatails']);
    $from = "₦";   
    ?>
    <div class="page-title-box">
        <div class="row align-items-center">
            <div class="col-md-8">
                <h6 class="page-title">Add to list PPGI Coils</h6>
            </div>
            <div class="col-md-4">
                <div class="float-end d-none d-md-block">
                    <div class="dropdown">
                        <a href="?action=PpgiCoils" class="btn btn-primary waves-effect waves-light"><i class="fas fa-arrow-circle-left fa-sm  text-white"></i> Back</a>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-body">
                    <div class="row mt-3">
                  <div class="col-lg-12 col-xl-12">
                          <div class="card">
                          <div class="card-body">
                          <!-- <div class="media align-items-center mb-4">
                             <div class="media-body">
                                  <h4 class="mb-0"> Details</h4>
                            </div>
                          </div> -->
                          <div class="card-block table-border-style">
                                             <form method="post" enctype="multipart/form-data">
                                            <!-- <div class="table-responsive"> -->
                                                       <table class="table table-hover">
                                              <!--  <thead>
                                                    <tr>
                                                    <th>Product</th>
                                                    
                                                    <th>Product Name</th>
                                                    
                                                    <th>Price</th>
                                                    <th>Adjust Price</th>
                                                    <th>KG_Weight</th>
                                                    <th>Current_Amount</th>
                                                    <th>Action</th>
                                                    </tr>
                                               </thead> -->

                                               <tbody>
                                                   <div data-repeater-list="group-a">
             <div class="row" data-repeater-item>
                                                 
                                                  

        <div  class="mb-3 col-lg-3">
            <label class="form-label" for="email">Product:</label>
            <input type="text" hidden  readonly class="form-control" name="purchase_price" value="<?php echo $DBinfo['purchase_price']?>">

             <input type="text" readonly class="form-control" name="product_code" value="<?php echo $DBinfo['item_code']?>">

             <input type="text" hidden readonly class="form-control" value="<?php if(isset($_SESSION['Admin'])) {echo $Admin['username'];}?>" name="sales_rep1">

              <input type="date" hidden readonly value="<?php echo $xdate;?>" class="form-control" name="cart_date" id="todate">

            <input type="text" hidden  readonly class="form-control" name="category" value="<?php echo $DBinfo['category']?>">

            <input type="text" hidden  readonly class="form-control" name="guage" value="<?php echo $DBinfo['guage']?>">

            <input type="text" hidden  readonly class="form-control" name="color" value="<?php echo $DBinfo['color']?>">

            <input type="text" hidden  readonly class="form-control"   value="<?php echo $DBinfo['kg_weight']?>">

            <input type="text" hidden  readonly class="form-control" name="meter_length" value="<?php echo $DBinfo['meter_length']?>">

            <input type="text" hidden  readonly class="form-control" name="embossed" value="<?php echo $DBinfo['embossed']?>">
        </div>

        <div  class="mb-3 col-lg-3">
            <label class="form-label" for="email">Product Name</label>
            <input type="text" readonly class="form-control" name="product_name" value="<?php echo $DBinfo['product_name']?>">
        </div>

        <div  class="mb-3 col-lg-3">
            <label class="form-label" for="email"> Price</label>
            <input type="text"  readonly class="form-control" name="old_price"  value="<?php echo $DBinfo['selling_price']?>">
        </div>


         

        <div  class="mb-3 col-lg-3">
            <label class="form-label" for="email">Adjust Price</label>
            <input type="text"   class="form-control"  id="price" name="price" value="<?php echo $DBinfo['selling_price']?>">
        </div>

        <div  class="mb-3 col-lg-3">
            <label class="form-label" for="email">KG_Weight</label>
            <input type="number" readonly min="1" class="form-control" name="kg_weight" id="qty" value="<?php echo $DBinfo['kg_weight']?>"  onkeyup="CalculateTotalSale();">
        </div>

          <div  class="mb-3 col-lg-3">
            <label class="form-label" for="email">Current_Amount</label>
            <input type="text" readonly required class="form-control" name="total" id="total">
        </div>


        <div  class="mb-3 col-lg-3">
            <label class="form-label text-white" for="email">Action</label>
           <Button type="submit" name="addCart" class="form-control btn btn-success text-center" id="btn_submit" ><i class="icon icon-plus-sign"></i> Add List</button>
        </div>


    </div>

</div>
                                               </tbody>

                                            


                                   
                                           
                                               

                                        </table>
                                            </div>
                                        </form>
                                        </div>
                            </div>
                        </div>  
                    <!-- </div> -->

                </div>

                </div>
            </div>
        </div> <!-- end col -->
    </div> <!-- end row -->

 
<script type="text/javascript">



function CalculateTotalSale(){
        var Qty = document.getElementById('qty').value;
        var ratePrice = document.getElementById('price').value;
        var SumAmount = ratePrice * Qty;
        document.getElementById('total').value =SumAmount;
}


if(window.attachEvent) {
    window.attachEvent('onload', CalculateTotalSale);
} else {
    if(window.onload) {
        var curronload = window.onload;
        var newonload = function(evt) {
            curronload(evt);
            yourFunctionName(evt);
        };
        window.onload = newonload;
    } else {
        window.onload = CalculateTotalSale;
    }
}
  
</script>