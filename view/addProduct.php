            <?php 
            // $maineg = new  mainClass();
            // $DBinfo = $maineg->Targeted_information('products','product_code',$_GET['editProDeatails']);
            // $from = "₦";
            ?>

    <div class="page-title-box">
        <div class="row align-items-center">
            <div class="col-md-8">
                <h6 class="page-title">Create Products</h6>
            </div>

            <div class="col-md-4">
                <div class="float-end d-none d-md-block">
                    <div class="dropdown">
                        <a href="?action=allPro" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i class="fas fa-eye fa-sm text-white-50"></i> View Products</a>
                    </div>
                </div>
            </div>
        </div>
    </div>



                        <div class="row">
                            <div class="col-10">
                                <div class="card">
                                    <div class="card-body">

                                        <h4 class="card-title">Add New Product</h4>
                                        <p></p><br>
                                        <form method="POST" action="" enctype="multipart/form-data">
                                        <div class="row mb-3">
                                          <label for="example-text-input" class="col-sm-2 col-form-label">Name</label>
                                            <div class="col-sm-10">
                                                <input class="form-control" type="text" placeholder="Product Name" id="name" name="name">
                                            </div>
                                        </div>


                                        <div class="row mb-3">
                                          <label for="example-text-input" class="col-sm-2 col-form-label">Brand</label>
                                            <div class="col-sm-10">
                                                <input class="form-control" type="text" placeholder="Product Brand" id="brand" name="brand">
                                            </div>
                                        </div>



                                        <div class="row mb-3">
                                            <label for="example-search-input" class="col-sm-2 col-form-label">Description</label>
                                            <div class="col-sm-10">
                                                <textarea class="form-control" type="text"  name="description" style="height: 100px !important;" ></textarea>
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
                                                  <select class="form-control text-dark;" name="category">
                                                      <option value="">-Category-</option>
                                                      <?php 
                                                            $maineg = new mainClass();
                                                            $maineg->selectCategoryAdd('category');
                                                        ?>
                                                    </select>
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
                                            <label for="example-number-input" class="col-sm-2 col-form-label">Add Product Image</label>
                                            <div class="col-sm-10">
                                                <input type="file" class="filestyle" data-buttonname="btn-secondary" id="image" name="image" placeholder="Image"  accept="image/*" onchange="loadFile(event)">

                                                <img class="img-fluid image-responsive w-100n mx-auto" style="height:200px;padding-left: 250px;" id="output" />
                                            </div>
                                        </div>

                                        <div class="row mb-3">
                                           
                                            <div class="col-sm-10 text-center mx-auto">
                                                
                                                 <input hidden type="text" value="<?php echo @$_SESSION['adminLogin']; ?>" name="user_login">
                                                 <button type="submit" name="createproduct" class="btn btn-primary form-control">Add Product</button>
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
           