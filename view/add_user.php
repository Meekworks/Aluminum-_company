

                        <div class="page-title-box">
                            <div class="row align-items-center">
                                <div class="col-md-8">
                                    <h6 class="page-title">Register New User</h6>
                                </div>

                                <div class="col-md-4">
                                    <div class="float-end d-none d-md-block">
                                        <div class="dropdown">
                                            <a href="?action=Users" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i class="fas fa-eye fa-sm text-white-50"></i>Back</a>
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
                                           <label for="example-text-input" class="col-sm-2 col-form-label">Fullname</label>
                                            <div class="col-sm-10">
                                                <input type="text" class="form-control"  name="fullname" placeholder="Fullname ">
                                            </div>
                                        </div>
               

                                        <div class="row mb-3">
                                            <label for="example-text-input" class="col-sm-2 col-form-label">Username</label>
                                            <div class="col-sm-10">
                                               <input type="text" class="form-control" id="name" name="username" placeholder="Username">
                                            </div>
                                        </div>


                                        <div class="row mb-3">
                                            <label for="example-text-input" class="col-sm-2 col-form-label">Password</label>
                                            <div class="col-sm-10">
                                               <input type="password" class="form-control" name="password" placeholder="password">
                                            </div>
                                        </div>



                                        <div class="row mb-3">
                                            <label for="Category" class="col-sm-2 col-form-label">User Roll</label>
                                            <div class="col-sm-10">
                                                <select type="text" class="form-control"  name="roll" placeholder="Roll">
                                                    <option value="">-Select Roll-</option>
                                                    <!-- <option>Admin</option> -->
                                                    <option>Operator</option>
                                                    <option>Sales Rep</option>
                                                    <option>Stock Manager</option>
                                                </select>
                                            </div>
                                        </div>
                                        
                                        <div class="row mb-3">
                                            <div class="col-sm-10 text-center mx-auto">
                                                 <button type="submit" name="RegUser" class="btn btn-primary form-control">Register User</button>
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
           