   <style>
       label{
        color: darkgray;
       }
   </style>


    <div class="page-title-box">
        <div class="row align-items-center">
            <div class="col-md-8">
                <h6 class="page-title">Return Product</h6>
            </div>
            <div class="col-md-4">
                <div class="float-end d-none d-md-block">
                    <div class="dropdown">
                        <a href="?action=returnPage" class="btn btn-primary btn-sm waves-effect waves-light"><i class="fas fa-eye fa-sm  text-white"></i> View Returned </a>
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
                  <div class="col-lg-8 col-xl-8">
                          <div class="card">
                          <div class="card-body">
                          <div class="media align-items-center mb-4">
                             <div class="media-body">
                                  <h4 class="mb-0"> Record Return</h4>
                            </div>
                          </div> 
                         <form method="post" action="" enctype="multipart/form-data">

                             <div class="form-group mb-4 bg-white">
                                <label >Return Date</label>
                                <input type="date" class="form-control" name="return_date">
                              </div>
                      
                      
                                <div class="form-group mb-4 bg-white">
                                <label >Invoice No</label>
                                    <input required  type="text" class="form-control"   name="invoice_id" placeholder="Enter Invoice No" >
                                  </div>

                                <div class="form-group mb-4 bg-white"> 
                                 <label>Product Name</label>
                                  <select class="form-control"  id="product_name" name="product_code" onchange="fetchOpening();fetchProductdd();">
                                    <option selected disabled>--Select Product--</option>
                                    <?php 
                                      $maineg = new mainClass();
                                      $maineg->selectProductNameR('stockin');
                                     ?>
                                    </select>  

                                    <input type="text"   id="p_name" name="product_name" hidden> 
                                    <input type="text"   id="guage"  hidden>
                                    <input type="text"   id="color"  hidden>                     
                                    </div>


                                    <div class="form-group mb-4 bg-white"> 
                                 <label >Customer Name</label>
                                   <select  class="form-control" name="customer_name" id="customer_reg" onchange="fetchCustomeradd();">
                                       <option>--Select Customer--</option>
                                       <?php 
                                            $maineg = new mainClass();
                                            $maineg->selectCustomer('customer_table');
                                        ?>
                                   </select>                       
                                    </div>



                                   <div class="form-group mb-4 bg-white">
                                   <label >Description</label>
                                   <textarea required type="text" class="form-control" name="return_description" placeholder="Return Description">
                                   </textarea>
                                   </div>


                                  <div class="form-group mb-4 bg-white">
                                    <label >Return Quantity</label>
                                    <input  type="text" class="form-control"  id="new_qty" name="return_quantity" placeholder="Enter Quantity (Optional)" onkeyup="CalculateTotal();">
                                  </div>
                                  
                                  
                                  <div class="form-group mb-4 bg-white">
                                    <label >Return wieght (KG)</label>
                                    <input  type="text" class="form-control"   name="return_kg" placeholder="Enter Kg_weight (Optional)" >
                                  </div>



                                <div class="form-group mb-4 bg-white">
                                    <label >Return Packet</label>
                                    <input  type="text" class="form-control"  name="return_packet" placeholder="Enter Packet (Optional)" >
                                  </div>


                                   <div class="form-group mb-4 bg-white">
                                  <label >New Category</label>
                                  <input  type="text" class="form-control" hidden  id="category" name="category" placeholder="Return Category">
                                </div>


                                 <div class="form-group mb-4 bg-white">
                                  <label >New Guage</label>
                                  <input  type="text" class="form-control"  id="" name="guage" placeholder="Guage">
                                </div>

                                 <div class="form-group mb-4 bg-white">
                                  <label >Color</label>
                                  <input  type="text" class="form-control"  id="" name="color" placeholder="Color">
                                </div>


                                <div class="checkbox">
                                   <button type="submit" name="returnItems" class="btn btn-primary btn-block form-control">Return Item</button>
                                </div>

                               </form>
                            </div>
                        </div>  
                    </div>

                </div>

                </div>
            </div>
        </div> <!-- end col -->
    </div> <!-- end row -->


<script type="text/javascript">
     function CalculateTotal(){
        var Qty = document.getElementById('new_qty').value;
        var ratePrice = document.getElementById('new_price').value;
        var SumAmount = ratePrice * Qty;
        document.getElementById('new_total').value = number_format(SumAmount);
     }
</script>


<script type="text/javascript">
function fetchOpening() {
        if (window.XMLHttpRequest) {
           // code for IE7+, Firefox, Chrome, Opera, Safari
            xmlhttp = new XMLHttpRequest();
          } else {
            // code for IE6, IE5
            xmlhttp = new ActiveXObject("Microsoft.XMLHTTP");
        }

    var AcountID =document.getElementById('product_name').value;
    var JsExplode = AcountID;
    var url = "Control/ajaxController.php?product_name1="+JsExplode;

    //   var AcountID =document.getElementById('product_name').value;
    // var JsExplode = AcountID.split("_");
    // var url = "Control/ajaxController.php?product_name1="+JsExplode[1];

    xmlhttp.onreadystatechange = function() {
            if (this.readyState == 4 && this.status == 200) {

        // document.getElementById('proid').value = this.responseText;
        var result = this.responseText.split("-");
        document.getElementById('category').value = result[0];
        document.getElementById('guage').value = result[1];
        document.getElementById('color').value = result[2];
        document.getElementById('p_name').value = result[3];

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

    var AcountID =document.getElementById('distributor').value;
    var JsExplode = AcountID.split("-");
    var url = "Control/ajaxController.php?distributor="+JsExplode[1];


    xmlhttp.onreadystatechange = function() {
            if (this.readyState == 4 && this.status == 200) {
        document.getElementById('distributor_address').value = this.responseText;
       // var result = this.responseText.split("-");
       //  document.getElementById('address').value = result[0];
        
        // alert(this.responseText);
        
            }
        };
        xmlhttp.open("GET",url,true);
        xmlhttp.send();
}

</script>
