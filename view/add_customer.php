
    <div class="page-title-box">
        <div class="row align-items-center">
            <div class="col-md-8">
                <h6 class="page-title">Add Customer</h6>
            </div>
        </div>
    </div>



                        <div class="row">
                            <div class="col-12">
                                <div class="card">
                                    <div class="card-body">

                                      
                                        <form action="" method="post">

                                             <div class="form-group row mb-3 ">
                                                <div class="col-sm-6">
                                                     <label class="col-form-label">Customer Name</label>
                                                    <input type="text" name="customer_name" class="form-control"
                                                    placeholder="Customer Name">
                                                </div>

                                                <div class="col-sm-6">
                                                <label class="col-form-label">Phone</label>  
                                                <input type="text" name="phone" class="form-control"
                                                        placeholder="phone">
                                                </div>
                                            </div>


                                            <div class="form-group row mb-3 ">

                                            <div class="col-sm-6">
                                                  <label class="col-form-label">Email</label>
                                                  <input type="text" name="email" class="form-control"
                                                placeholder="Email">
                                            </div>


                                            <div class="col-sm-6">
                                             <label class="col-form-label">Company Name (Optional)</label>
                                             <input type="text" name="company_name" class="form-control" placeholder="Company Name">
                                            </div>
                                            </div>


                                            <div class="form-group row mb-3">
                                            <div class="col-sm-6">
                                                 <label class="col-form-label">Delivery Address</label>
                                                <input type="text" name="address" class="form-control"
                                                placeholder="Delivery Address">
                                            </div>


                                            <div class="col-sm-6">
                                             <label class="col-form-label">Select Category</label>
                                               <select name="category" class="form-control" >
                                                    <option>Retailer</option>
                                                    <option>End User</option>
                                                    <option>Wholesaler</option>
                                               </select>
                                            </div>
                                            </div>
                                     
                                              
                                             <div class="form-group row mb-3 ">
                                                <div class="col-sm-6">
                                                <input type="text" hidden value="<?php echo $Admin['username'];?>" name="user_login">
                                                   <button type="submit" name="reg_customer" class="btn btn-primary btn-block form-control .hor-grd .btn-grd-* mt-2">Create</button>
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