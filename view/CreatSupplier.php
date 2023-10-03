
    <div class="page-title-box">
        <div class="row align-items-center">
            <div class="col-md-8">
                <h6 class="page-title">Add Supplier</h6>
            </div>

            <div class="col-md-4">
                <div class="float-end d-none d-md-block">
                    <div class="dropdown">
                        <a href="?action=SupplierPage" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i class="fas fa-eye fa-sm text-white-50"></i> View Suppliers</a>
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
                                        <form method="POST" action="" enctype="multipart/form-data">

                                        <div class="row mb-3">
                                            <label for="example-search-input" class="col-sm-2 col-form-label">Supplier Name</label>
                                            <div class="col-sm-10">
                                               <input type="text" class="form-control" name="supplier_name" placeholder="Supplier Name">
                                            </div>
                                        </div>


                                        <div class="row mb-3">
                                            <label for="Category" class="col-sm-2 col-form-label">Company Address</label>
                                            <div class="col-sm-10">
                                                <input type="text" class="form-control" name="company_address" placeholder="Company Address">
                                            </div>
                                        </div>


                                        <div class="row mb-3">
                                            <label for="Purchase Price" class="col-sm-2 col-form-label">Phone Number</label>
                                            <div class="col-sm-10">
                                                 <input type="text" class="form-control" name="phone" placeholder="Enter Phon Number">
                                            </div>
                                        </div>


                                        <div class="row mb-3">
                                            <label for="example-tel-input" class="col-sm-2 col-form-label">Email Address</label>
                                            <div class="col-sm-10">
                                             <input type="text" class="form-control" name="email" placeholder="Email Address (Optional)">
                                            </div>
                                        </div>

                                        <div class="row mb-3">
                                            <label for="example-password-input" class="col-sm-2 col-form-label">Product</label>
                                            <div class="col-sm-10">
                                             <input type="text" class="form-control" name="material" placeholder="Product category">
                                            </div>
                                        </div>

                                        

                                        <div class="row mb-3">
                                           
                                            <div class="col-sm-10 text-center mx-auto">
                                                <button type="submit" name="submitSupplier" class="btn btn-primary btn-block form-control">Add Supplier</button>

                                                 <!-- <button type="submit" name="RegCus" class="btn btn-primary btn-block form-control">Register Customer</button> -->
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
           