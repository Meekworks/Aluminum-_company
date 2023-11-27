         
                        <?php 
            $maineg = new  mainClass();
            $DBinfo = $maineg->Targeted_information('stockin','item_code',$_GET['PriceManageDeatails']);
            $from = "₦";
            ?>                    
  
    
    <div class="page-title-box">
        <div class="row align-items-center">
            <div class="col-md-8">
                <h6 class="page-title">Price Management</h6>
            </div>

            <div class="col-md-4">
                <div class="float-end d-none d-md-block">
                    <div class="dropdown">
                        <a href="?action=ManagePrice" class="btn btn-primary btn-sm waves-effect waves-light"><i class=" text-white"></i> Back</a>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <div class="row">
        <div class="col-8">
            <div class="card">
                <div class="card-body">
                    <div class="row mt-3">
                  <div class="col-lg-6 col-xl-12">
                          <div class="card">
                         <form accept="" method="post">
                                           
                                             
                                            <div class="form-group row mb-3">

                                                <div class="col-sm-6">
                                                     <label class=" col-form-label">Item Name</label>
                                                    <input type="text" readonly name="firstname"  class="form-control" value="<?php echo @$DBinfo['product_name']?>">

                                                </div>

                                                <div class="col-sm-6">
                                                    <label class="col-form-label">Item Code</label>
                                                    <input type="text" readonly  name="item_code" class="form-control" value="<?php echo $DBinfo['item_code']?>">
                                                    
                                                </div>
                                            </div>

                                            
                                             <div class="form-group row mb-3">
                                            
                                                <div class="col-sm-6">
                                                    <label class="col-form-label">Selling Price</label>
                                                    <input type="text" readonly name="selling_price"  class="form-control" value="<?php echo $DBinfo['selling_price']?>">
                                                    
                                                </div>
                                                 

                                                 <div class="col-sm-6">
                                                    <label class="col-form-label">New Selling Price</label>
                                                     <input type="text"  required class="form-control " name="new_selling_price">
                                                    
                                                </div>
                                            </div>


                                             <div class="form-group row mb-3">
                                               
                                                <div class="col-sm-6">
                                                    <button type="submit" name="PriceM" class="btn btn-primary btn-block form-control .hor-grd .btn-grd-* mt-2">Update Price</button>
                                                </div>
                                              
                                            </div>


                                        </form>

 
                    </div>

                     
                </div>

                </div>
            </div>
        </div> <!-- end col -->
    </div> <!-- end row -->

     <script>
    var loadFile = function(event) {
        var output = document.getElementById('output');
        output.src = URL.createObjectURL(event.target.files[0]);
        output.onload = function() {
            URL.revokeObjectURL(output.src) // free memory
        }
    };
</script>
           