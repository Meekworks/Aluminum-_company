   <style>
       label{
        color: darkgray;
       }
   </style>

   <?php 
    $maineg = new  mainClass();
    $DBinfo = $maineg->Targeted_information('serial_table','id',$_GET['editS']);
    $from = "₦";
    ?> 
    <div class="page-title-box">
        <div class="row align-items-center">
            <div class="col-md-8">
                <h6 class="page-title">Edit Serial</h6>
            </div>
            <div class="col-md-4">
                <div class="float-end d-none d-md-block">
                    <div class="dropdown">
                        <a href="?action=ResetS" class="btn btn-primary btn-sm waves-effect waves-light"><i class="fas fa-arrow-circle-left btn-sm fa-sm  text-white"></i> Back</a>
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
                          <form  method="post">

                                            <div class="form-group row mb-3"> 
                                                <div class="col-sm-6">
                                                     <label class=" col-form-label"> Name</label>
                                                    <input type="text" name="serial_name"  class="form-control" value="<?php echo $DBinfo['serial_name']?>">

                                                    <input type="text" hidden value="<?php echo $DBinfo['id']?>" name="id">
                                                </div>

                                                <div class="col-sm-6">
                                                    <label class="col-form-label">Username</label>
                                                    <input type="text" name="warehouse"  class="form-control" value="<?php echo $DBinfo['warehouse']?>">
                                                </div>
                                            </div>

                                             <div class="form-group row mb-3">
                                                
                                                <div class="col-sm-6">
                                                    <label class="col-form-label">Passowrd</label>
                                                    <input type="text" name="label" class="form-control" value="<?php echo $DBinfo['label']?>">
                                                </div>


                                               <div class="col-sm-6">
                                               <label class="col-form-label">Roles</label>
                                               <select name="status" class="form-control" >
                                                <option><?php echo $DBinfo['status']?></option>
                                                <option>unassigned</option>
                                                <option>assigned</option>
                                                
                                               </select>
                                               </div>

                                            </div>

                                             <div class="form-group row">
                                                 <div class="col-sm-6">
                                                    <br><br>
                                                    <button type="submit" name="update_Serial" class="btn btn-primary btn-block form-control .hor-grd .btn-grd-*">
                                                           Reset
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
           