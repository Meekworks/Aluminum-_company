
    <div class="page-title-box">
        <div class="row align-items-center">
            <div class="col-md-8">
                <h6 class="page-title">Register New Customer</h6>
            </div>

            <div class="col-md-4">
                <div class="float-end d-none d-md-block">
                    <div class="dropdown">
                        <a href="?action=Customer" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i class="fas fa-eye fa-sm text-white-50"></i> Back</a>
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
                                            <label for="example-search-input" class="col-sm-2 col-form-label">Title</label>
                                            <div class="col-sm-10">
                                               <select class="form-control" name="title" placeholder="Customer Title">
                                                      <option>--Title--</option>
                                                      <option>Mr.</option>
                                                      <option>Mrs.</option>
                                                      <option>Miss.</option>
                                                      <option>Master.</option>
                                                      <option>Cheif.</option>
                                                      <option>Doctor.</option>
                                                      <option>Engineer.</option>
                                                    </select>
                                            </div>
                                        </div>


                                        <div class="row mb-3">
                                            <label for="Category" class="col-sm-2 col-form-label">Fullname</label>
                                            <div class="col-sm-10">
                                                 <input type="text" class="form-control" name="fullname" placeholder="Fullname">
                                            </div>
                                        </div>

                                        <div class="row mb-3">
                                            <label for="Purchase Price" class="col-sm-2 col-form-label">Phone</label>
                                            <div class="col-sm-10">
                                                <input type="text" class="form-control"  name="phone" placeholder="Phone">
                                            </div>
                                        </div>

                                        <div class="row mb-3">
                                            <label for="example-tel-input" class="col-sm-2 col-form-label">Customer Address</label>
                                            <div class="col-sm-10">
                                                 <textarea type="text" class="form-control"  name="address" placeholder="Customer Address"></textarea>
                                            </div>
                                        </div>

                                        <div class="row mb-3">
                                            <label for="example-password-input" class="col-sm-2 col-form-label">Level</label>
                                            <div class="col-sm-10">
                                        <select class="form-control" name="level" placeholder="Customer Level">
                                          <option>--Level--</option>
                                          <option>Retailer</option>
                                          <option>Wholesaler</option>
                                        </select>
                                            </div>
                                        </div>

                                        

                                        <div class="row mb-3">
                                           
                                            <div class="col-sm-10 text-center mx-auto">
                                                

                                                 <button type="submit" name="RegCus" class="btn btn-primary btn-block form-control">Register Customer</button>
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
           