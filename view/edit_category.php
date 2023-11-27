 
             <?php 
                $maineg = new  mainClass();
                $DBinfo = $maineg->Targeted_information('category','id',$_GET['editCate']);
                // $from = "₦";
                ?>   

    <div class="page-title-box">
        <div class="row align-items-center">
            <div class="col-md-8">
                <h6 class="page-title">Edit Category</h6>
            </div>
            <div class="col-md-4">
                <div class="float-end d-none d-md-block">
                    <div class="dropdown">
                        <a href="?action=ViewCategory" class="btn btn-primary waves-effect waves-light"><i class="fas fa-arrow-circle-left fa-sm  text-white"></i> Back</a>
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
                         


                              <form method="post">
                                        
                                             <div class="form-group row mb-3">
                                                <div class="col-sm-6">
                                                       <label class="col-form-label">Category </label>
                                            
                                    <input type="text" class="form-control" value="<?php echo $DBinfo['category']?>" name="category">
                                     <input type="text" hidden value="<?php echo $DBinfo['category']?>" name="old_category">
                                     <input type="text" hidden name="user" value="<?php echo $Admin['username']; ?>">
                          <input type="text" hidden name="id" value="<?php echo $DBinfo['id']; ?>">
                                                </div>

                                              
                                            </div>

                                            <div class="form-group row ">
                                                <div class="col-sm-6">
                                                   
                                                  <button type="submit" name="editCate" class="btn btn-primary btn-block form-control">Edit Category</button>
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
           