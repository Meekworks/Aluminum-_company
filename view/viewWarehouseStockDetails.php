 
    <?php 
    $maineg = new  mainClass();
    $DBinfo = $maineg->Targeted_information(' warehouse','product_code',$_GET['InStockDetails']);
    $from = "₦";
    ?>

    <div class="page-title-box">
        <div class="row align-items-center">
            <div class="col-md-8">
                <h6 class="page-title">Warehouse Stock Product</h6>
            </div>
            <div class="col-md-4">
                <div class="float-end d-none d-md-block">
                    <div class="dropdown">
                        <a href="?action=WareStock" class="btn btn-primary waves-effect waves-light"><i class="fas fa-arrow-circle-left fa-sm  text-white"></i> Back</a>
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
                  <div class="col-lg-12 col-xl-6">
                          <div class="card">
                          <div class="card-body">
                          <div class="media align-items-center mb-4">
                             <div class="media-body">
                                  <h4 class="mb-0"> Details</h4>
                            </div>
                          </div>
                          <table class="table table-xs mb-0">   

                                    <tr>
                                        <td><b>Product Name</b></td>
                                        <td><?php echo $DBinfo['ProductName']?></td>
                                    </tr>

                                    <tr>
                                        <td><b>Brand</b></td>
                                        <td><?php echo $DBinfo['Brand']?></td>
                                    </tr>

                                    <tr>
                                        <td><b>Category</b></td>
                                        <td><?php echo $DBinfo['Category']?></td>
                                    </tr>


                                    <tr>
                                        <td><b>Status</b></td>
                                        <td><?php echo $DBinfo['status']?></td>
                                    </tr>

                                    
                                    <tr>
                                        <td><b>Description</b></td>
                                        <td><?php echo $DBinfo['description']?></td>
                                    </tr>

                                    <tr>
                                        <td><b>Color</b></td>
                                        <td><?php echo $DBinfo['Color']?></td>
                                    </tr>

                                    <tr>
                                        <td><b> Size</b></td>
                                        <td><?php echo $DBinfo['Size']?></td>
                                    </tr>

                            </table>
                            </div>
                        </div>  
                    </div>

                      <div class="col-lg-12 col-xl-6">
                        <div class="card">
                            <div class="card-body">
                                <div class="media align-items-center mb-4">
                                   
                                <div class="media-body">
                                    <h4 class="mb-0">More Details</h4>
                                </div>
                                </div>
                                
                                <table class="table table-xs mb-0">
                                   
                                    <tr>
                                        <td><b> Date Created</b></td>
                                        <td><?php echo $DBinfo['DateAdded']?></td>
                                    </tr> 

                                    <tr>
                                        <td><b>Regular Price</b></td>
                                        <td><?php echo $from."".$DBinfo['cost_price']?></td>
                                    </tr>

                                    <tr>
                                        <td><b>By Unit</b></td>
                                        <td><?php echo $DBinfo['record_form']?></td>
                                    </tr>

                                    <tr>
                                        <td><b>Token</b></td>
                                        <td><?php echo $DBinfo['token_id']?></td>
                                    </tr>

                                    <tr>
                                        <td><b>Low Stock Level</b></td>
                                        <td><?php echo $DBinfo['stock_level']?></td>
                                    </tr>

                                    <tr>
                                        <td><b>Supplier Name</b></td>
                                        <td><?php echo $DBinfo['Supplier_name']?></td>
                                    </tr>

                              

                                  
                                    <tr>
                                        <td><b>last Product Addition Date</b></td>
                                        <td><?php echo $DBinfo['LastUpdated']?></td>
                                    </tr>

                                    <tr>
                                        <td colspan="2">

                                             <div class="text-center">
                                    <img class="image-fliud mx-auto" name="image" src="view/product_image/<?php echo $DBinfo['image']?>" style="width: 300px; height: 300px; margin-top: 15px; margin-bottom: 15px;">
                                </div>
                                            
                                        </td>
                                    </tr>
                                </table> 

                               

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
           