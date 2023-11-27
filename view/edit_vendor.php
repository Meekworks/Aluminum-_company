                     <?php 
            $maineg = new  mainClass();
            $DBinfo = $maineg->Targeted_information('supplier_table','supplier_id',$_GET['editVenDeatails']);
            $from = "₦";
            ?>
    <div class="page-title-box">
        <div class="row align-items-center">
            <div class="col-md-8">
                <h6 class="page-title">Edit Supplier</h6>
            </div>
            <div class="col-md-4">
                <div class="float-end d-none d-md-block">
                    <div class="dropdown">
                        <a href="?action=View_vendor" class="btn btn-primary btn-sm waves-effect waves-light"><i class="fas fa-arrow-circle-left fa-sm  text-white"></i> Back</a>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-body">
                    <div class="row mt-3">
                  <div class="col-lg-12 col-xl-12">
                          <div class="card">
                          <div class="card-body">
                          <div class="media align-items-center mb-4">
                             <div class="media-body">
                                  <h4 class="mb-0"> Edit</h4>
                            </div>
                          </div>
                          <form method="POST" action="" enctype="multipart/form-data">

                           
                                           
                                             
                                            <div class="form-group row">

                                                <div class="col-sm-6">
                                                     <label class=" col-form-label">Contact Name</label>
                                                    <input type="text" name="contact_name"  class="form-control" value="<?php echo $DBinfo['supplier_name']?>">

                                                    <input type="text" hidden value="<?php echo $DBinfo['supplier_id']?>" name="supplier_id">
                                                </div>

                                                <div class="col-sm-6">
                                                    <label class="col-form-label">Phone</label>
                                                    <input type="text" name="phone" class="form-control" value="<?php echo $DBinfo['phone']?>">
                                                </div>
                                            </div>

                                             <div class="form-group row">
                                                
                                                <div class="col-sm-6">
                                                    <label class="col-form-label">Email</label>
                                                    <input type="text" name="email" class="form-control" value="<?php echo $DBinfo['email']?>">
                                                </div>

                                                <div class="col-sm-6">
                                                    <label class="col-form-label">Company Name </label>
                                                    <input type="text" name="company_name" class="form-control" value="<?php echo $DBinfo['company_name']?>">
                                                </div>

                                            </div>

                                             <div class="form-group row">
                                            
                                                <div class="col-sm-6">
                                                    <label class="col-form-label">Company Address</label>
                                                    <textarea type="text" name="company_address" class="form-control"> <?php echo $DBinfo['company_address']?> </textarea>

                                                </div>

                                                 <div class="col-sm-6">
                                                    <br><br>
                                                    <button type="submit" name="submit_vendor" class="btn btn-primary form-control btn-block .hor-grd .btn-grd-*">
                                                           Update Vendor
                                                    </button>
                                                </div>

                                            </div>
                                        </form>
                            </div>
                        </div>  
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
           