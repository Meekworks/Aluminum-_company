 <?php 
            $maineg = new  mainClass();
            $DBinfo = $maineg->Targeted_information('addtocart_new','id',$_GET['editAdd']);
            ?>     
    <div class="page-title-box">
        <div class="row align-items-center">
            <div class="col-md-8">
                <h6 class="page-title">Edit List</h6>
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
                            <form method="POST">
                          <div class="card-body">
                         <!--  <div class="media align-items-center mb-4">
                             <div class="media-body">
                                  <h4 class="mb-0"> Details</h4>
                            </div>
                          </div> -->
                          <div class="col-sm-12">
                                                    <label class="col-form-label">Quantity</label>
                                        <input  type="text" class="form-control" value="<?php echo $DBinfo['quantity'];?>" name="quantity">
                                        <br>
                                         <label class="col-form-label">New Quantity</label>
                                         <input  type="text" class="form-control"  name="new_quantity">
                                        <input type="text" hidden  name="price" value="<?php echo $DBinfo['selling_price']; ?>">
                                        <input type="text" hidden name="id" value="<?php echo $DBinfo['id']; ?>">
                                        </div><br>

                                        <button type="submit" name="updateCart" class="btn btn-primary btn-block form-control .hor-grd .btn-grd-* mt-2">Update Item </button>
                            </div>
                        </div>
                        </form>  
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
           