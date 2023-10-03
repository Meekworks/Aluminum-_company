
    <div class="page-title-box">
        <div class="row align-items-center">
            <div class="col-md-8">
                <h6 class="page-title">Add Stock Store</h6>
            </div>

            <div class="col-md-4">
                <div class="float-end d-none d-md-block">
                    <div class="dropdown">
                        <a href="?action=InStock" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i class="fas fa-eye fa-sm text-white-50"></i> Back</a>
                    </div>
                </div>
            </div>
        </div>
    </div>



                        <div class="row">
                            <div class="col-12">
                                <div class="card">
                                    <div class="card-body">

                                        <!-- <h4 class="card-title">Add New Product</h4> -->
                                        <p></p><br>
                                         <form method="POST" enctype="multipart/form-data">

                                        <div class="row mb-3">
                                            <label for="example-text-input" class="col-sm-2 col-form-label">Product Name</label> 
                                           <div class="col-sm-10">
                                            <select class="form-control text-dark;" onchange="fetchProdcodr()"  id="product_code">
                                              <option>-Product Name-</option>
                                                  <?php 
                                                    $maineg = new mainClass();
                                                    $maineg->selectProductAdd('warehouse');
                                                    ?>
                                                </select>
                                                <input type="text" hidden class="form-control" id="product_name"  name="product_name">
                                            </div>
                                        </div>


                                        <div class="row mb-3">
                                             <label for="example-text-input" class="col-sm-2 col-form-label">Brand</label>
                                             <div class="col-sm-10">
                                                <input type="text" readonly class="form-control" id="brand"  name="brand" >
                                             </div>
                                        </div>


                                        <div class="row mb-3">
                                             <label for="example-text-input" class="col-sm-2 col-form-label">Description</label>
                                             <div class="col-sm-10">

                                                <textarea type="text" readonly class="form-control" id="description"  name="description" ></textarea>
                                            
                                        </div>
                                        </div>


                                        <div class="row mb-3">
                                             <label for="example-text-input" class="col-sm-2 col-form-label">Color</label>
                                             <div class="col-sm-10">
                                            <input type="text" readonly class="form-control" id="color"  name="color" >
                                        </div>
                                        </div>


                                        <div class="row mb-3">
                                             <label for="example-text-input" class="col-sm-2 col-form-label">Size</label>
                                             <div class="col-sm-10">
                                            <input type="text" readonly class="form-control" id="size"  name="size">
                                        </div>
                                        </div>


                                        <div class="row mb-3">
                                             <label for="example-text-input" class="col-sm-2 col-form-label">Category</label>
                                             <div class="col-sm-10">
                                            <input type="text" readonly class="form-control" id="category"  name="category" >
                                        </div>
                                        </div>


                                        

                                        <div class="row mb-3">
                                             <label for="example-text-input" class="col-sm-2 col-form-label">Product Code</label>
                                             <div class="col-sm-10">
                                            <input type="text" readonly class="form-control" id="itemcode"  name="product_code">
                                        </div>
                                        </div>


                                       



                                        <div class="row mb-3">
                                            <label for="Categories" class="col-sm-2 col-form-label">Unit</label>
                                            <div class="col-sm-10">
                                                 <select class="form-control text-dark;" name="unit">
                                                      <option value="">--Select Unit--</option>
                                                  
                                                        <option value="pieces">Pieces</option>
                                                        <option value="carton">Carton</option>
                                                        <option value="bag">Bag</option>
                                                        <option value="box">Box</option>
                                                        <option value="dozen">Dozen</option>
                                                        <option value="gallon">Gallon</option>
                                                        <option value="liter">Liter</option>
                                                        <option value="kg">Kilogram</option>
                                                        <option value="meter">Meter</option>
                                                        <option value="ton">Ton</option>
                                                      <?php 
                                                            // $maineg = new mainClass();
                                                            // $maineg->selectCategoryAdd('category');
                                                        ?>
                                                    </select>
                                            </div>
                                        </div>


                                        <div class="row mb-3">
                                            <label for="example-tel-input" class="col-sm-2 col-form-label">Quantity</label>
                                            <div class="col-sm-10">
                                            <input type="text" class="form-control" name="Qty" placeholder="Quantity">
                                            </div>

                                        </div>


                                        <div class="row mb-3">
                                             <label for="example-tel-input" class="col-sm-2 col-form-label">Low Stock Level</label>
                                           
                                            <div class="col-sm-10">
                                            <input type="number" class="form-control" name="min_stock" >
                                            </div>

                                        </div>



                                          <div class="row mb-3">
                                            <label for="example-tel-input" class="col-sm-2 col-form-label">Cost Price</label>
                                            <div class="col-sm-10">
                                                <input type="text" class="form-control"  id="cost_price" name="cost_price" >
                                            </div>
                                        </div>


                                        <div class="row mb-3">
                                            <label for="example-tel-input" class="col-sm-2 col-form-label">Selling Price</label>
                                            <div class="col-sm-10">
                                                <input type="text" class="form-control"  name="selling_price" >
                                            </div>
                                        </div>



                                        <div class="row mb-3 text-center">
                                           
                                            <img class="image-fliud mx-auto" name="image" id="image" style="width: 300px; height: 300px; margin-top: 15px; margin-bottom: 15px;">

                                        </div>
                                        

                                        <div class="row mb-3">
                                            <input hidden type="text" value="<?php echo @$_SESSION['adminLogin']; ?>" name="user_login">
                                            <div class="col-sm-10 text-center mx-auto">
                                                 <button type="submit" name="addStok" class="btn btn-primary btn-block form-control">Add Stock Shop</button>
                                            </div>
                                            

                                        </div>
                                        </form>
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
function fetchProdcodr() {

        if (window.XMLHttpRequest) {
           // code for IE7+, Firefox, Chrome, Opera, Safari
            xmlhttp = new XMLHttpRequest();
          } else {
            // code for IE6, IE5
            xmlhttp = new ActiveXObject("Microsoft.XMLHTTP");
        }

    var AcountID =document.getElementById('product_code').value;
    var JsExplode = AcountID;
    var url = "control/ajaxController.php?prs_code="+JsExplode;


    xmlhttp.onreadystatechange = function() {
            if (this.readyState == 4 && this.status == 200) {
        // document.getElementById('basic_salary').innerHTML = this.responseText;

        var result = this.responseText.split("_");
        // alert(result[8]);

        document.getElementById('product_name').value = result[0];
        document.getElementById('brand').value = result[1];    
        document.getElementById('description').value = result[2];
        document.getElementById('color').value = result[3];
        document.getElementById('size').value = result[4];
        document.getElementById('category').value = result[5];
        document.getElementById('itemcode').value = result[8];
        document.getElementById('cost_price').value = result[9];
        document.getElementById('image').src = "view/product_image/" + result[6];
        document.getElementById('product_satuan').value = result[7]; 
        
         

            }
        };
        xmlhttp.open("GET",url,true);
        xmlhttp.send();

        CalculateTotalSale();
}
</script>
           