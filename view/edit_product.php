            
           <?php 
            $maineg = new  mainClass();
            $DBinfo = $maineg->Targeted_information('products','id',$_GET['editPro']);
            ?>  
    <div class="page-title-box">
        <div class="row align-items-center">
            <div class="col-md-8">
                <h6 class="page-title">Edit Product</h6>
            </div>
            <div class="col-md-4">
                <div class="float-end d-none d-md-block">
                    <div class="dropdown">
                        <a href="?action=ViewProduct" class="btn btn-primary waves-effect waves-light"><i class="fas fa-arrow-circle-left btn-sm fa-sm  text-white"></i> Back</a>
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
                          <!--<div class="media align-items-center mb-4">
                             <div class="media-body">
                                  <h4 class="mb-0"> Edit</h4>
                            </div>
                          </div> -->
                          <form method="post">

                                        <div class="form-group row">
                                        <div class="col-sm-6">
                                         <label class="col-form-label">Product Name</label>
                                        <input  type="text" class="form-control" value="<?php echo $DBinfo['name'];?>" name="name">
                                        <input type="text" hidden  name="user" value="<?php echo $Admin['username']; ?>">
                                        <input type="text" hidden name="id" value="<?php echo $DBinfo['id']; ?>">
                                                </div>
                                            </div>


                                            <div class="form-group row mt-3">
                                               
                                                <div class="col-sm-6">
                                                    <button type="submit" name="editP" class="btn btn-primary btn-block form-control .hor-grd .btn-grd-* mt-2">Update Product</button>
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
           