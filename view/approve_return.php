   <style>
       label, b{
        color: darkgray;
       }
   </style>
    <?php 
    $maineg = new  mainClass();
    $DBinfo = $maineg->Targeted_information('return_table','reference_no',$_GET['viewUnapprove']);
    // $from = "₦";
    ?>
    <div class="page-title-box">
        <div class="row align-items-center">
            <div class="col-md-8">
                <h6 class="page-title">Approve Returned Item</h6>
            </div>
            <div class="col-md-4">
                <div class="float-end d-none d-md-block">
                    <div class="dropdown">
                        <a href="?action=returnPage" class="btn btn-primary btn-sm waves-effect waves-light"><i class="fas fa-arrow-circle-left btn-sm fa-sm  text-white"></i> Back</a>
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

                        <div class="row mt-3">
                          <div class="col-lg-12 col-xl-6">
                             <div class="media align-items-center mb-4">
                                   
                                    <div class="media-body">
                                        <h4 class="mb-0 text-muted"> Details</h4>
                                         
                                    </div>
                                </div>

                                <form method="POST">

                             <table class="table table-xs mb-0">  

                                <tr>
                                        <td><b>Request No</b></td>
                                        <td><input readonly type="text" class="form-control" name="reference_no" value="<?php echo $DBinfo['reference_no']?>"></td>
                                      </tr>

                                      <tr>
                                        <td><b>Request Name</b></td>
                                        <td> <input type="text" readonly class="form-control" value="<?php echo $DBinfo['product_name']?>" name="product_name"></td>
                                    </tr>
                                     
                                    <tr>
                                        <td><b>Supplier ID</b></td>
                                        <td> <input type="text" readonly class="form-control" value="<?php echo $DBinfo['customer']?>" name="customer"></td>
                                    </tr>

                                      <tr>
                                        <td><b>Description</b></td>
                                        <td>
                                            <input class="form-control" readonly id="summernote"  name="return_description"  value="<?php echo $DBinfo['return_description']?>">
                                           </td>
                                      </tr>

                                      <tr>
                                        <td><b>Category</b></td>
                                        <td><input type="text" readonly class="form-control" name="type" value="<?php echo $DBinfo['category']?>"></td>
                                    </tr>

                                      <tr>
                                        <td><b>Status</b></td>
                                        <td><input type="text" readonly class="form-control" name="status" value="<?php echo $DBinfo['status']?>"></td>
                                    </tr>
                                </table>


                        </div>

                        <div class="col-lg-12 col-xl-6">

                           


                                <table class="table table-xs mb-0">
                                     <div class="media align-items-center mb-4">
                                   
                                    <div class="media-body">
                                        <h4 class="mb-0 text-muted"> More Details</h4>
                                         
                                    </div>
                                </div>
                                    <tr>
                                        <td><b>Date</b></td>
                                        <td><input type="text" readonly class="form-control" name="refund_date" value="<?php echo $DBinfo['return_date']?>"></td>
                                    </tr>

                                    <tr>
                                        <td><b>Guage </b></td>
                                        <td><input readonly type="text" class="form-control" name="guage"  value="<?php echo $DBinfo['guage']?>"></td>
                                    </tr>

                                    <tr>
                                        <td><b>Quantity</b></td>
                                        <td><input type="text" readonly class="form-control"  name="quantity" value="<?php echo $DBinfo['quantity']?>"></td>
                                    </tr>

                                    <tr>
                                        <td><b>Color</b></td>
                                        <td><input type="text" readonly class="form-control" name="color" value="<?php echo $DBinfo['color']?>"></td>
                                        <input type="text" hidden name="user" value="<?php echo $Admin['username']; ?>">
                                    </tr>


                                     <tr>
                                        <td><b>Type</b></td>
                                        <td><input type="text" readonly class="form-control" name="type" value="<?php echo $DBinfo['type']?>"></td>
                                    </tr>

                                    <tr>
                                        <td><b>Type</b></td>
                                        <td><input type="text" readonly class="form-control" name="item_code" value="<?php echo $DBinfo['item_code']?>"></td>
                                    </tr>
                                    
                                    <tr>
                                     <?php 
                                        if($DBinfo['approval'] == "Unapproved"){
                                            echo '
                                        <td colspan="2">
                                            <button type="submit" name="approveret" class="btn btn-danger btn-block form-control">Approve Returned Item</button>
                                        </td>';
                                        }else{
                                             echo '
                                        <td colspan="2">
                                            <button type="submit" disabled name="settle" class="btn btn-light btn-block form-control">Approved</button>
                                        </td>';
                                        }

                                     ?>
                                    
                                    </tr>


                                </table> 
                                </form>


                        </div>
                    </div>
                    
                        
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
           