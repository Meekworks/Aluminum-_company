      <?php 
            $maineg = new  mainClass();
            $DBinfo = $maineg->Targeted_information('request_table','request_no',$_GET['ApproveDeatails']);
            // $from = "₦";
            ?>

    <div class="page-title-box">
        <div class="row align-items-center">
            <div class="col-md-8">
                <h6 class="page-title">Confirm Expense </h6>
            </div>
            <div class="col-md-4">
                <div class="float-end d-none d-md-block">
                    <div class="dropdown">
                        <a href="?action=viewExpense" class="btn btn-primary btn-sm waves-effect waves-light"><i class=" text-white"></i> Back</a>
                        <!-- <a href="?action=ReceiptExpense&&PrintDeatails=<?php //echo $DBinfo3['request_no'];?>" class=" d-sm-inline-block btn btn-sm btn-success ml-2   float-right shadow-sm"><i class="fas fa-download fa-sm text-white"></i> Generate Expense Receipt</a> -->
                    </div>
                </div>
            </div>
        </div>
    </div>


    <div class="row">
        <div class="col-12">
            <div class="card">  <?php 
            // $maineg = new  mainClass();
            // $DBinfo = $maineg->Targeted_information('request_table','request_no',$_GET['ApproveDeatails']);
            // $from = "₦";
            ?>
                <div class="card-body">
                     <form method="post">
                    <div class="row mt-3">
                       
                  <div class="col-lg-12 col-xl-6 ">
                      <div class="card ">
                          <div class="card-body">

                          <table class="table table-xs mb-0">   

                            <tr>
                                <td><b>Expense No</b></td>
                                <td><input readonly type="text" class="form-control" name="request_no" value="<?php echo $DBinfo['request_no']?>"></td>
                            </tr>
                         
                            <tr>
                                <td><b>Expense Name</b></td>
                                <td> <input type="text" readonly class="form-control" value="<?php echo $DBinfo['request_name']?>" name="request_name"></td>
                            </tr>


                            <tr>
                                <td><b>Vendor / Seller</b></td>
                                <td>
                                  <input type="text" name="vendor_name" class="form-control" value="<?php echo $DBinfo['vendor_name']?>">
                                </td>
                            </tr>  


                            <tr>
                                <td><b>Description</b></td>
                                <td>
                                <input class="form-control" readonly id="summernote" placeholder="Description" name="description"  value="<?php echo $DBinfo['description']?>">
                               </td>
                            </tr>

                           


                       <!--  <tr>
                            <td colspan="2"><button type="submit" name="RequestSubmit" class="btn btn-primary btn-block form-control">Recored Expense</button></td>
                        </tr> -->

                        

                        </table>
                        </div>
                    </div>  
                </div>


                <div class="col-lg-12 col-xl-6 ">
                      <div class="card ">
                          <div class="card-body">

                          <table class="table table-xs mb-0">   

                             <tr>
                                        <td><b>Date</b></td>
                                        <td><input type="text" readonly class="form-control" name="request_date" value="<?php echo $DBinfo['request_date']?>"></td>
                                    </tr>

                                    <tr>
                                        <td><b>Request_Amount </b></td>
                                        <td><input type="text" class="form-control" name="request_Amount"  value="<?php echo $DBinfo['amount']?>"></td>
                                    </tr>

                                  <!--   <tr>
                                        <td><b>Request By </b></td>
                                        <td><input type="text" readonly class="form-control"  name="request_by" value="<?php //echo $DBinfo['request_by']?>"></td>
                                    </tr> -->

                                    <tr>
                                        <td><b>Status</b></td>
                                        <td><input type="text" readonly class="form-control" name="status" value="<?php echo $DBinfo['status']?>"></td>
                                    </tr>

                                     <tr hidden>
                                        <td hidden><b>Sales Rep</b></td>
                                        <td><input hidden type="text" readonly class="form-control" value="<?php if(isset($_SESSION['Admin'])) {echo $Admin['username'];}?>" name="approvedBy" value="<?php echo $Admin['username'];?>"></td>
                                    </tr>

                                     </tr>

                                     <tr>
                                <td><b>Request By</b></td>
                                <td>
                                <input class="form-control" readonly id="summernote"  name="staff_name"  value="<?php echo $DBinfo['staff_name']?>">
                               </td>
                          </tr>

                                    <tr>
                                        <td colspan="2">
                                            <?php
                                            if($DBinfo['status'] == "Unapproved"){
                                                echo '<button type="submit" name="approvee" class="btn btn-primary btn-block form-control">Confirm Expense</button>';
                                            
                                            }else{
                                             echo '<button type="submit" name="approvee" class="btn btn-primary btn-block form-control" disabled>Already Confirmed</button>';
                                            }
                                            ?>
                                            
                                        </td>
                                        
                                       
                                   
                                   <!--  <tr>
                                         <td colspan="2"> -->
                                            <?php
                                            // if($DBinfo['status'] == "Unapproved"){
                                            //        echo '<button type="submit" name="disaproveReq" class="btn btn-warning btn-block">Cancel</button>';
                                            
                                            // }else{
                                            //  echo '<button type="submit" name="disaproveReq" class="btn btn-warning btn-block" disabled>Already Approve or Cancelled</button>';
                                            // }
                                            ?>
                                            
                                       <!--  </td>
                                    </tr> -->
<!-- 

                        <tr>
                            <td colspan="2"><button type="submit" name="RequestSubmit" class="btn btn-primary btn-block form-control">Recored Expense</button></td>
                        </tr> -->

                        

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
           