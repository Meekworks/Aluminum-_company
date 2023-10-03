   <?php 
            $maineg = new  mainClass();
            $DBinfo = $maineg->Targeted_information('products','product_code',$_GET['editProDeatails']);
            $from = "₦";
            ?>

    <div class="page-title-box">
        <div class="row align-items-center">
            <div class="col-md-8">
                <h6 class="page-title">Edit Product</h6>
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
                            <td><b>Product code</b></td>
                            <td><input readonly type="text" class="form-control" name="product_code" value="<?php echo $DBinfo['product_code']?>"></td>
                        </tr>
                         
                        <tr>
                            <td><b>Product Name</b></td>
                            <td> <input type="text" class="form-control" value="<?php echo $DBinfo['product_name']?>" name="product_name" placeholder="Product Name"></td>
                        </tr>

                          <tr>
                            <td><b>Description</b></td>
                            <td><textarea class="form-control" id="summernote" placeholder="Description" name="description" ><?php echo $DBinfo['description']?></textarea></td>
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
                                        <td><b>Purchase Price</b></td>
                                        <td><input type="text" class="form-control" id="price" name="purchase_price" value="<?php echo $DBinfo['purchase_price']?>"></td>
                                    </tr>

                                    <tr>
                                        <td><b>Sell Price</b></td>
                                        <td><input type="text" class="form-control" id="price" name="sell_price" value="<?php echo $DBinfo['sell_price']?>"></td>
                                    </tr>

                                    <tr>
                                        <td><b>Category</b></td>
                                        <td>
                                            <select class="form-control text-dark;" name="category">
                                              <option><?php echo $DBinfo['category']?></option>
                                              <?php 
                                                $maineg = new mainClass();
                                                $maineg->selectCategoryAdd('category');
                                                ?>
                                            </select>
                                        </td>
                                    </tr>

                                    <tr>
                                        <td colspan="2">
                                            <button type="submit" name="updateProduct" class="btn btn-primary btn-block">Update Product</button>
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
           