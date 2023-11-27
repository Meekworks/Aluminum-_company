  
         <?php 
        $var = date('H:i'); 
        $xdate = date('Y-m-d'); 
        ?>
        
        <?php 
            $maineg = new  mainClass();
            // $DBinfo = $maineg->Targeted_information('invoice_details','invoice_id',$_GET['PayDueDeatails']);
            $DBinfo3 = $maineg->Targeted_Requestlast('request_table');
            
            
            ?>

    <div class="page-title-box">
        <div class="row align-items-center">
            <div class="col-md-8">
                <h6 class="page-title">New Expense</h6>
            </div>
            <div class="col-md-4">
                <div class="float-end d-none d-md-block">
                    <div class="dropdown">
                        <!-- <a href="?action=viewExpense" class="btn btn-primary waves-effect waves-light"><i class="fas fa-eye  fa-sm text-white"></i> View Expense</a> -->
                        <a href="?action=ReceiptExpense&&PrintDeatails=<?php echo $DBinfo3['request_no'];?>" class=" d-sm-inline-block btn btn-sm btn-success ml-2   float-right shadow-sm"><i class="fas fa-download fa-sm text-white"></i> Generate Expense Receipt</a>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-body">
                     <form method="post">
                    <div class="row mt-3">
                       
                  <div class="col-lg-12 col-xl-8 mx-auto text-center">
                      <div class="card ">
                          <div class="card-body">

                          <table class="table table-bordered table-stripped table-xs mb-0">   

                           <tr>
                                <td><b>Expenses</b></td>
                                <td>
                                <select type="text" class="form-control" id="means"  name="requestName" onchange="mesansOFidentifacartion_change();">
                                <option selected disabled>---SELECT EXPENSES---</option>
                                <option>Advertising & Promotions</option>
                                <option>Transportation Expense</option>
                                <option>Gas Expenses</option>
                                <option>Subscription & Services</option>
                                <option>Donations</option>
                                <option>Dishonoured Cheque</option>
                                <option>Electricity</option>
                                <option>Entertainment</option>
                                <option>Accounting Fees</option>
                                <option>Motor Vehicle Expenses</option>
                                <option>Contractors $ Trainings</option>
                                <option>Printing & Stationery</option>
                                <option>Bank Error</option>
                                <option>Bank Interest</option>
                                <option>Bank Charges</option>
                                <option>Legal Fees</option>
                                <option>Computer Equipment</option>
                                <option>Expenses</option>
                                <option>Renting</option>
                                <option>Repairs & Maintenance</option>
                                <option>Standing Order</option>
                                </select>
                            </td>
                            </tr>

                              <tr>
                                <td><b>Description</b></td>
                                <td>
                                 <textarea type="text"  class="form-control text-dark" name="description">
                                 </textarea>
                                </td>
                            </tr>

                          <!--   <tr>
                                <td><b>Expense Type</b></td>
                                <td>
                                   <select name="type" class="form-control" >
                                        <option>--Request Type--</option>
                                        <option>Reciept</option>
                                        <option>No-reciept</option>
                                    </select>
                                </td>
                            </tr> -->

                            <tr>
                                <td><b>Vendor / Contractor</b></td>
                                <td>
                                  <input type="text" name="vendor_contractor" class="form-control" placeholder="Enter Vendor Name or No Vendor">
                                </td>
                            </tr>  
                           
                             <tr>
                                <td><b>Cost</b></td>
                                <td>
                                  <input type="text" name="amount" class="form-control">
                                </td>
                            </tr>

                              <tr>
                                <td hidden id="vehicle_td1"><b>Vehicle Number</b></td>
                                <td hidden id="vehicle_td2">
                                <input type="text" class="form-control" hidden name="vehicle" id="vehicle">
                                </td>
                            </tr>

                              <tr>
                                <td><b>Name</b></td>
                                <td>

                                    <input type="text" name="staff" class="form-control">

                                  <input type="text" hidden value="<?php echo $Admin['username'];?>" name="record_by">
                                </td>
                            </tr>

                             <tr>
                                <td colspan="2">
                                     <button type="submit" name="RequestSubmit" class="btn btn-primary form-control">Submit Expense</button>
                                </td>
                             </tr>

                        

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
           