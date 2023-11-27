
    <div class="page-title-box">
        <div class="row align-items-center">
            <div class="col-md-8">
                <h6 class="page-title">Add Category</h6>
            </div>

           <!--  <div class="col-md-4">
                <div class="float-end d-none d-md-block">
                    <div class="dropdown">
                        <a href="?action=allPro" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i class="fas fa-eye fa-sm text-white-50"></i> View Products</a>
                    </div>
                </div>
            </div> -->
        </div>
    </div>



                        <div class="row">
                            <div class="col-12">
                                <div class="card">
                                    <div class="card-body">

                                        <form method="post">
                                        
                                            <div class="form-group row mb-3">
                                                <div class="col-sm-6">
                                                       <label class="col-form-label">Category Name</label>
                                                    <input type="text" name="category" class="form-control"
                                                    placeholder="Enter Category Name">
                                                    <input type="text" hidden name="user" value="<?php echo $Admin['username']; ?>" >
                                                </div>
                                                <br>
                                            </div>

                                            <div class="form-group row ">
                                                <div class="col-sm-6">
                                                   
                                                   <button type="submit" name="addCat" class="btn btn-primary btn-block form-control .hor-grd .btn-grd-* mt-2">Add Category
                                                   </button>
                                                </div>
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
        function GenerateInvoiceNumber() {
        var fieldID = document.getElementById("productcode");
        var number = Math.floor(Math.random() * 90000) + 10000;
        var word = "101";
        var JoinOn = word + number;
        fieldID.value = JoinOn;
         }

     </script>