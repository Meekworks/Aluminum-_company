            <?php 
            // $maineg = new  mainClass();
            // $DBinfo = $maineg->Targeted_information('products','product_code',$_GET['editProDeatails']);
            // $from = "₦";
            ?>

    <div class="page-title-box">
        <div class="row align-items-center">
            <div class="col-md-8">
                <h6 class="page-title">Record Return Item</h6>
            </div>

            <div class="col-md-4">
                <div class="float-end d-none d-md-block">
                    <div class="dropdown">
                        <a href="?action=viewReturned" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i class="fas fa-eye fa-sm text-white-50"></i> View Returned Items</a>
                    </div>
                </div>
            </div>
        </div>
    </div>



                        <div class="row">
                            <div class="col-8">
                                <div class="card">
                                    <div class="card-body">
                                        <p></p><br>
                                        <form method="POST" action="" enctype="multipart/form-data">


                                        <div class="row mb-3">
                                          <label for="example-text-input" class="col-sm-2 col-form-label">Date</label>
                                            <div class="col-sm-10">
                                            <input class="form-control" type="date" name="return_date">
                                            </div>
                                        </div>

                                        
                                        <div class="row mb-3">
                                          <label for="example-text-input" class="col-sm-2 col-form-label">Invoice</label>
                                            <div class="col-sm-10">
                                            <input class="form-control" type="text" placeholder="Enter Invoice Number" id="invoice_id" onkeyup="fetchItemId()" name="invoice_id">
                                            </div>
                                        </div>
                

                                        <div class="row mb-3">
                                          <label for="name" class="col-sm-2 col-form-label">Name</label>
                                            <div class="col-sm-10">
                                                  <select  class="form-control"  id="product_code" onchange="fetchProductdd();">
                                                               <option>--Select Customer--</option>
                                                               <?php 
                                                                    $maineg = new mainClass();
                                                                    $maineg->selectProduct('stock_table');
                                                                ?>
                                                         </select>
                                                    <input type="text" hidden readonly class="form-control" name="product_name" id="product" >

                                                    <input type="hidden" name="p_code" id="p_code">
                                                     <input type="text" hidden  readonly class="form-control" name="unit" id="unit" >
                                            </div>
                                        </div>

                                   

                                        <div class="row mb-3">
                                          <label for="example-text-input" class="col-sm-2 col-form-label">Brand</label>
                                            <div class="col-sm-10">
                                                <input class="form-control" type="text" placeholder="Product Brand" id="brand" name="brand">
                                            </div>
                                        </div>


                                        <div class="row mb-3">
                                          <label for="example-text-input" class="col-sm-2 col-form-label">Customer</label>
                                            <div class="col-sm-10">
                                               
                                                <input  class="form-control" type="text"  id="custN" name="customer_name">
                                                 <input hidden class="form-control" type="text"  id="inid" >
                                                
                                            </div>
                                        </div>



                                     


                                         <div class="row mb-3">
                                            <label for="example-search-input" class="col-sm-2 col-form-label">Color</label>
                                            <div class="col-sm-10">
                                                <input class="form-control" type="text"  id="color" name="color">
                                                
                                            </div>
                                        </div>


                                        <div class="row mb-3">
                                            <label for="example-search-input" class="col-sm-2 col-form-label">Size</label>
                                            <div class="col-sm-10">
                                                <input class="form-control" type="text"  id="size" name="size">
                                
                                            </div>
                                        </div>


                                        <div class="row mb-3">
                                            <label for="Category" class="col-sm-2 col-form-label">Category</label>
                                            <div class="col-sm-10">
                                                <input class="form-control" type="text"  id="category" name="category">
                            
                                            </div>
                                        </div>


                                           <div class="row mb-3">
                                            <label for="example-search-input" class="col-sm-2 col-form-label"> Return Description</label>
                                            <div class="col-sm-10">
                                                <textarea class="form-control" type="text"  name="description" style="height: 100px !important;" ></textarea>
                                            </div>
                                        </div>

                                        <div class="row mb-5">
                                            <label for="example-search-input" class="col-sm-2 col-form-label">Quantity</label>
                                            <div class="col-sm-10">
                                                <input class="form-control" type="text"  name="Qty">
                                                
                                            </div>
                                        </div>
                                        



                                        <div class="row mb-3">
                                            <div class="col-sm-10 text-center mx-auto">
                                                 <input hidden type="text" value="<?php echo @$_SESSION['Admin']; ?>" name="user_login">
                                                 <button type="submit" name="returnItems" class="btn btn-primary form-control">Record Return</button>
                                            </div>
                                            </form>
                                        </div>
                                        <!-- end row -->
                                       
                                        <!-- end row -->
                                      
                                        <!-- end row -->
                                    </div><!-- end cardbody -->
                                </div><!-- end card -->
                            </div> <!-- end col -->
                        </div> <!-- end row -->
                    </div> <!-- container-fluid -->

                        </div>  
                    </div>
                </div>

                </div>
            </div>
        </div> <!-- end col -->
    </div> <!-- end row -->

<script type="text/javascript">
    function myFunction() {
    // Get the checkbox
     var checkBox = document.getElementById("myCheck");
   // Get the output text
    var text = document.getElementById("text");

  // If the checkbox is checked, display the output text
    if (checkBox.checked == true){
       text.style.display = "block";
  } else {
    text.style.display = "none";
 }
} 
</script>


<script>
    var loadFile = function(event) {
        var output = document.getElementById('output');
        output.src = URL.createObjectURL(event.target.files[0]);
        output.onload = function() {
            URL.revokeObjectURL(output.src) // free memory
        }
    };
</script>
           


<script>
    
 function fetchItemId() {

        if (window.XMLHttpRequest) {
           // code for IE7+, Firefox, Chrome, Opera, Safari
            xmlhttp = new XMLHttpRequest();
          } else {
            // code for IE6, IE5
            xmlhttp = new ActiveXObject("Microsoft.XMLHTTP");
        }

    var AcountID =document.getElementById('invoice_id').value;
    var JsExplode = AcountID;
    var url = "Control/ajaxController.php?inv_id="+JsExplode;


    xmlhttp.onreadystatechange = function() {
            if (this.readyState == 4 && this.status == 200) {
        // document.getElementById('basic_salary').innerHTML = this.responseText;
       var result = this.responseText.split("-");
          document.getElementById('custN').value = result[0];
          document.getElementById('inid').value = result[1];
    
            }
        };
        xmlhttp.open("GET",url,true);
        xmlhttp.send();

        CalculateTotalSale();
        // fetchImage();
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
        

        // if(result[3] >= 1){
        //    document.getElementById('instock').value = "In-stock";
        // }else{
        //     document.getElementById('instock').value = "Out-stock";
        // }    

        // document.getElementById('price').value = result[4];
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




</script>