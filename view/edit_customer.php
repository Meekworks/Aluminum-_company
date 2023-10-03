      <?php 
        $maineg = new  mainClass();
        $DBinfo = $maineg->Targeted_information('customer_distributor','id',$_GET['editCustDeatails']);
        $from = "₦";
        ?>
    <div class="page-title-box">
        <div class="row align-items-center">
            <div class="col-md-8">
                <h6 class="page-title">Edit Customer</h6>
            </div>
            <div class="col-md-4">
                <div class="float-end d-none d-md-block">
                    <div class="dropdown">
                        <a href="?action=Customer" class="btn btn-primary waves-effect waves-light"><i class="fas fa-arrow-circle-left fa-sm  text-white"></i> Back</a>
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
                             <div class="media-body">
                                  <h4 class="mb-0"> Details</h4>
                            </div>
                          </div>
                          <form method="POST" action="" enctype="multipart/form-data">
                          <table class="table table-xs mb-0">   

                         <tr>
                                        <td><b>Title</b></td>
                                        <td> 
                                             <select class="form-control" name="title" placeholder="Customer Title">
                                                      <option><?php echo $DBinfo['title']?></option>
                                                      <option>Mr.</option>
                                                      <option>Mrs.</option>
                                                      <option>Miss.</option>
                                                      <option>Master.</option>
                                                      <option>Cheif.</option>
                                                      <option>Doctor.</option>
                                                      <option>Engineer.</option>
                                            </select>
                                        </td>
                                    </tr>

                                    <tr>
                                        <td><b>Fullname</b></td>
                                        <td>
                                          <input type="text" class="form-control" value="<?php echo $DBinfo['fullname']?>" name="fullname">

                                          <input type="text" hidden value="<?php echo $DBinfo['id']?>" name="user_id">
                                        </td>
                                    </tr>


                                      <tr>
                                        <td><b>Phone</b></td>
                                        <td>
                                          <input type="text" class="form-control" value="<?php echo $DBinfo['phone']?>" name="phone">
                                        </td>
                                    </tr>

                                      <tr>
                                        <td><b>Address</b></td>
                                        <td>
                                          <input type="text" class="form-control" value="<?php echo $DBinfo['address']?>" name="address">
                                        </td>
                                    </tr>

                                     <tr>
                                        <td><b>Level</b></td>
                                        <td> 
                                            <select class="form-control" name="level">
                                              <option><?php echo $DBinfo['level']?></option>
                                              <option>Retailer</option>
                                              <option>Wholesaler</option>
                                            </select>
                                        </td>
                                    </tr>


                   
                                    <tr>
                                        <td colspan="2">
                                            <button type="submit" name="updateCate" class="btn btn-primary btn-block form-control">Edit Category</button>
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
           