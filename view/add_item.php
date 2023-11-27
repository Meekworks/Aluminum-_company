
    <div class="page-title-box">
        <div class="row align-items-center">
            <div class="col-md-8">
                <h6 class="page-title">Create New Product</h6>
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

                                        <h4 class="card-title">Add New Product</h4>
                                        <p></p><br>
                                        <form method="post">
                                           

                                                  <div class="form-group row ">
                                                <div class="col-sm-6">
                                                     <label class="col-form-label">Product Name</label>
                                                    <input type="text" name="product_name" class="form-control"
                                                    placeholder="New Product Name">
                                                </div>


                                
                                            <div class="col-sm-6">
                                             <label class="col-form-label">Product Code</label>
                                               <div class="row">
                                                <div class="col-sm-8">

            
                                                    <input type="text" name="product_code" class="form-control"
                                                    placeholder="Product Code" id="productcode">

                                                    <input type="text" hidden name="user" value="<?php echo $Admin['username']; ?>">
                                                   
                                                </div>

                                                <div class="col-sm-4">
                                                    <input type="button"  style="height:38px;" class="btn btn-success" value="Generate" onclick="GenerateInvoiceNumber()">
                                                 
                                                </div>
                                               </div>
                                            </div>
                                        </div>




                                             <div class="form-group row ">

                                                <div class="col-sm-6">
                                                   <br>
                                                   <button type="submit" name="Create_product" class="btn btn-primary btn-block form-control .hor-grd .btn-grd-* mt-2">
                                                          Create 
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