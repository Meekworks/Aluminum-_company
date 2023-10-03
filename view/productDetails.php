    <?php 
    $maineg = new  mainClass();
    $DBinfo = $maineg->Targeted_information('products','id',$_GET['viewProduct']);
    $from = "₦";
    ?>


    <div class="page-title-box">
        <div class="row align-items-center">
            <div class="col-md-8">
                <h6 class="page-title">All Products</h6>
            </div>
            <div class="col-md-4">
                <div class="float-end d-none d-md-block">
                    <div class="dropdown">
                        <a href="?action=allPro" class="btn btn-primary waves-effect waves-light"><i class="fas fa-arrow-circle-left fa-sm  text-white"></i> Back</a>
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
                                        <td><b>Name</b></td>
                                        <td><?php echo $DBinfo['product_name']?></td>
                                    </tr>


                                    <tr>
                                        <td><b>Brand</b></td>
                                        <td><?php echo $DBinfo['brand']?></td>
                                    </tr>

                                    <tr>
                                        <td><b>Product Code</b></td>
                                        <td><?php echo $DBinfo['product_code']?></td>
                                    </tr>
 
                                      
                                    
                                      <tr>
                                        <td><b>Description</b></td>
                                        <td><?php echo $DBinfo['description']?></td>
                                      </tr>


                                       <tr>
                                        <td><b>Color</b></td>
                                        <td><?php echo $from."".$DBinfo['color']?></td>
                                    </tr>

                                    <tr>
                                        <td><b>Size</b></td>
                                        <td><?php echo $from."".$DBinfo['size']?></td>
                                    </tr>

                                    <tr>
                                        <td><b>Category</b></td>
                                        <td><?php echo $DBinfo['category']?></td>
                                    </tr>


                                    <tr>
                                        <td><b>Product Satuan</b></td>
                                        <td><?php echo $DBinfo['product_satuan']?></td>
                                    </tr>

                                     <tr>
                                        <td><b>By</b></td>
                                        <td><?php echo $DBinfo['created_by']?></td>
                                    </tr>

                                     <tr>
                                        <td><b>Date</b></td>
                                        <td><?php echo $DBinfo['created_at']?></td>
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
                                        <h4 class="mb-0">Product Image</h4>
                                         
                                    </div>
                                </div>
                                

                                <table class="table table-xs mb-0">
                                   

                                    <tr>
                                        
                                        <td colspan="2">
                                          <img class="image-fliud mx-auto" style="width: 400px; height:400px;" src="view/product_image/<?php echo $DBinfo['image']?>">
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

