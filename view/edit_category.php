        <?php 
            $maineg = new  mainClass();
            $DBinfo = $maineg->Targeted_information('category','id',$_GET['editCateDeatails']);
            $from = "₦";
            ?>

    <div class="page-title-box">
        <div class="row align-items-center">
            <div class="col-md-8">
                <h6 class="page-title">Edit Category</h6>
            </div>
            <div class="col-md-4">
                <div class="float-end d-none d-md-block">
                    <div class="dropdown">
                        <a href="?action=Catery" class="btn btn-primary waves-effect waves-light"><i class="fas fa-arrow-circle-left fa-sm  text-white"></i> Back</a>
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
                  <div class="col-lg-12 col-xl-8">
                        <div class="card">
                          <div class="card-body">
                              <div class="media align-items-center mb-4">
                                 <!-- <div class="media-body">
                                      <h4 class="mb-0"> Details</h4>
                                </div> -->
                              </div>
                              <form method="POST">
                          <table class="table table-xs mb-0">   

                            <tr>
                                <td><b>Category</b></td>
                                <td> <input type="text" class="form-control" value="<?php echo $DBinfo['category']?>" name="category">
                                     <input type="text" hidden value="<?php echo $DBinfo['category']?>" name="old_category">
                                </td>
                            </tr>
                             
                            <!--   
                            <tr>
                               <td><b>Product code</b></td>
                               <td><input type="text" class="form-control" name="sub_category" value="<?php echo $DBinfo['sub_category']?>"></td>
                            </tr> 
                             -->

                            <tr>
                            <td colspan="2">
                                <button type="submit" name="updateCate" class="btn btn-primary btn-block">Edit Category</button>
                            </td>
                            </tr>

                            </table>
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
           