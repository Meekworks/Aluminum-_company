     <?php 
            $maineg = new  mainClass();
            $DBinfo = $maineg->Targeted_information('return_table','reference_no',$_GET['viewUnsettleC']);
            // $from = "₦";
            ?>

    <div class="page-title-box">
        <div class="row align-items-center">
            <div class="col-md-8">
                <h6 class="page-title">Confirm Returned  Product</h6>
            </div>
            <div class="col-md-4">
                <div class="float-end d-none d-md-block">
                    <div class="dropdown">
                        <a href="?action=viewReturned" class="btn btn-primary waves-effect waves-light"><i class="fas fa-arrow-circle-left fa-sm  text-white"></i> Back</a>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-body">
                     <form method="post">
                    <div class="row mt-3">
                       
                  <div class="col-lg-12 col-xl-6">
                      <div class="card">
                          <div class="card-body">

                          <table class="table table-xs mb-0">   

                         <tr>
                            <td><b>Reference No</b></td>
                            <td><input readonly type="text" class="form-control" name="reference_no" value="<?php echo $DBinfo['reference_no']?>"></td>
                        </tr>
                         
                        <tr>
                            <td><b>Product Name</b></td>
                            <td> <input type="text" class="form-control" value="<?php echo $DBinfo['product_name']?>" name="product_name"></td>
                        </tr>


                        <tr>
                            <td><b>Brand</b></td>
                            <td> <input type="text" class="form-control" value="<?php echo $DBinfo['brand']?>" name="brand"></td>
                        </tr>


                         <tr>
                            <td><b>Customer</b></td>
                            <td> <input type="text" class="form-control" value="<?php echo $DBinfo['customer']?>" name="customer"></td>
                        </tr>

                        <tr>
                            <td><b>Product Code</b></td>
                            <td><input type="text" class="form-control"  name="item_code" value="<?php echo $DBinfo['item_code']?>"></td>
                         </tr>

                          <tr>
                            <td><b>return_description</b></td>
                            <td><textarea class="form-control"  name="description" ><?php echo $DBinfo['return_description']?></textarea></td>
                          </tr>

                        </table>
                        </div>
                    </div>  
                </div>

                  <div class="col-lg-12 col-xl-6">
                    <div class="card">
                        <div class="card-body">

                            <table class="table table-xs mb-0">
                                <tr>
                                    <td><b>Retured Date</b></td>
                                    <td><input type="text" class="form-control"  name="return_date" value="<?php echo $DBinfo['return_date']?>"></td>
                                </tr>
                               

                                <tr>
                                    <td><b>Category</b></td>
                                    <td><input type="text" class="form-control"  name="category" value="<?php echo $DBinfo['category']?>"></td>
                                </tr>

                                 <tr>
                                    <td><b>Quantity</b></td>
                                    <td><input type="text" class="form-control" name="quantity" value="<?php echo $DBinfo['quantity']?>"></td>
                                </tr>


                                <tr>
                                    <td><b>Color</b></td>
                                    <td><input type="text" class="form-control" name="color" value="<?php echo $DBinfo['color']?>"></td>
                                </tr>


                                <tr>
                                    <td><b>Size</b></td>
                                    <td><input type="text" class="form-control"  name="size" value="<?php echo $DBinfo['size']?>"></td>
                                </tr>


                                <tr>
                                    <td><b>Status</b></td>
                                    <td><input type="text" class="form-control"  name="status" value="<?php echo $DBinfo['status']?>"></td>
                                </tr>


                                <tr>
                                    <td colspan="2">

                                        <?php
      
                                       if( $DBinfo['status'] == "Settled"){

                                        echo '<button disabled type="submit" name="settleC" class="btn btn-primary btn-block form-control">Confirm /  Settle Returnd Item  </button>';

                                       }else{

                                        echo '<button type="submit" name="settleC" class="btn btn-primary btn-block form-control">Confirm /  Settle Returnd Item  </button>';

                                       }
                                       ?>
                                    

                                    </td>
                                </tr>

                            </table> 
                        </div>
                    </div>  
                </div>
            </form>
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
           