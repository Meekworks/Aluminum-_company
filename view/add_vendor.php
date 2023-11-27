
    <div class="page-title-box">
        <div class="row align-items-center">
            <div class="col-md-8">
                <h6 class="page-title">Add New Vendor</h6>
            </div>

          
        </div>
    </div>



                        <div class="row">
                            <div class="col-12">
                                <div class="card">
                                    <div class="card-body">

                                        <h4 class="card-title">Add New Product</h4>
                                        <p></p><br>
                                        <form accept="" method="post">
                                            
                                             
                                            <div class="form-group row mb-3">

                                                <div class="col-sm-6">
                                                     <label class=" col-form-label">Contact Name</label>
                                                    <input type="text" name="contact_name"  class="form-control"
                                                    placeholder="First Name">
                                                </div>

                                                <div class="col-sm-6">
                                                    <label class="col-form-label">Phone</label>
                                                    <input type="text" name="phone" class="form-control"
                                                    placeholder="Phone">
                                                </div>
                                            </div>

                                             <div class="form-group row mb-3">
                                                
                                                <div class="col-sm-6">
                                                    <label class="col-form-label">Email</label>
                                                    <input type="text" name="email" class="form-control"
                                                    placeholder="Email">
                                                </div>

                                                <div class="col-sm-6">
                                                    <label class="col-form-label">Comapny Name (Optional)</label>
                                                    <input type="text" name="company_name" class="form-control"
                                                    placeholder="Comapny Name">
                                                </div>

                                            </div>

                                             <div class="form-group row mb-3">
                                            
                                                <div class="col-sm-6">
                                                    <label class="col-form-label">Company Address</label>
                                                    <textarea type="text" name="company_address" class="form-control"
                                                    placeholder="Company  Address"></textarea>

                                                </div>

                                                 <div class="col-sm-6">
                                                    <br><br>
                                                    <button type="submit" name="submit_vendor" class="btn btn-primary btn-block form-control .hor-grd .btn-grd-*">
                                                           Add Vendor
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