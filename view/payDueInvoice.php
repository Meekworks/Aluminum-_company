    <?php 
    $maineg = new  mainClass();
    $DBinfo = $maineg->Targeted_information('invoice_details','invoice_id',$_GET['PayDueDeatails']);
    $from = "₦";
    ?>


    <div class="page-title-box">
        <div class="row align-items-center">
            <div class="col-md-8">
                <h6 class="page-title">Pay Credit Invoice</h6>
            </div>
            <div class="col-md-4">
                <div class="float-end d-none d-md-block">
                    <div class="dropdown">
                        <a href="?action=creditSales" class="d-none d-sm-inline-block btn btn-primary btn-sm shadow-sm"><i class="fas fa-arrow-circle-left fa-sm -textwhite-50"></i> Back</a>
                           
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
                          <form method="POST">
                          <table class="table table-xs mb-0">   
                                    <tr>
                                        <td><b>Invoice No</b></td>
                                        <td><input readonly type="text" class="form-control" name="invoice_id" value="<?php echo $DBinfo['invoice_id']?>"></td>
                                    </tr>


                                    <tr>
                                        <td><b>Total Amount</b></td>
                                        <td><input type="text" readonly class="form-control" value="<?php 
                                                    $maineg = new mainClass();
                                          $result = $maineg->Get_invoice_grand_toal($DBinfo['invoice_id']);
                                                    ?>" name="total"></td>
                                    </tr>

                                    <tr>
                                        <td><b>Paid Amount</b></td>
                                        <td><input type="text" readonly class="form-control" value="<?php echo $DBinfo['paid']?>" name="amount_paid"></td>
                                    </tr>
 
                                      
                                    
                                      <tr>
                                        <td><b>Due Balance</b></td>
                                        <td><input type="text" readonly class="form-control" name="due_balance"  value="<?php echo $DBinfo['due']?>"></td>
                                      </tr>

                                       <tr>
                                        <td><b>Phone</b></td>
                                        <td><input type="text" class="form-control" readonly  name="phone" value="<?php echo $DBinfo['phone']?>"></td>
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
                                        <h4 class="mb-0">More Details</h4>
                                         
                                    </div>
                                </div>
                                

                                <table class="table table-xs mb-0">
                                   

                                   

                                      <tr>
                                        <td><b>Date</b></td>
                                        <td><input type="text" readonly class="form-control" name="order_date" value="<?php echo $DBinfo['order_date']?>"></td>
                                    </tr>

                                        <tr>
                                        <td><b>Customer ID</b></td>
                                        <td><input type="text" readonly class="form-control"  name="customer" value="<?php echo $DBinfo['customer']?>"></td>
                                    </tr>

                                    <tr>
                                        <td><b>Customer Name</b></td>
                                        <td><input type="text" readonly class="form-control"  name="customer_name" value="<?php echo $DBinfo['customer_name']?>"></td>
                                    </tr>


                                   

                                     <tr>
                                        <td><b>Amount Paying Now</b></td>
                                        <td><input type="text" class="form-control"  name="due" value="0"></td>
                                    </tr>

                                  


                                    <tr>
                                        <td colspan="2">

                                            <?php 
                                            if($DBinfo['due'] <= 0){

                                                echo '
                                            <button type="submit"   id="submit-btn"  name="payadue" class="btn btn-primary btn-block form-control disabled">Pay Due Balance</button>';

                                            }else{


                                                echo '
                                            <button type="submit"   id="submit-btn"  name="payadue" class="btn btn-primary btn-block form-control">Pay Due Balance</button>';

                                            }
                                            
                                            ?>
                                            <input type="text" hidden name="user_login" value="<?php echo $Admin['username']; ?>">
                                            
                                        </td>
                                    </tr>
                                </table> 
                            </div>
                            </form>
                        </div>  
                    </div>
                </div>

                </div>
            </div>
        </div> <!-- end col -->
    </div> <!-- end row -->

<!-- <script type="text/javascript">
    // Global variable to store the initial load time
    var initialLoadTime = new Date().getTime();
    
    // Function to check if the specified duration has passed since the initial load
    function canReload() {
      var currentTime = new Date().getTime();
      var elapsedTime = currentTime - initialLoadTime;
      
      // Specify the duration in milliseconds (5 minutes in this example)
      var duration = 5 * 60 * 1000;
      
      // Return true if the duration has passed, allowing the page to be reloaded
      return elapsedTime >= duration;
    }
    
    // Function to handle page reload attempts
    function handleReload() {
      if (!canReload()) {
        // Prevent the page from being reloaded
        alert('Please wait for few minutes, you can not refresh this page now.');
        return false;
      }
    }
    
    // Attach the 'handleReload' function to the 'beforeunload' event
    window.onbeforeunload = handleReload;
  </script> -->
    

      <script>
    var loadFile = function(event) {
        var output = document.getElementById('output');
        output.src = URL.createObjectURL(event.target.files[0]);
        output.onload = function() {
            URL.revokeObjectURL(output.src) // free memory
        }
    };
</script>


<!-- <script>
  if ( window.history.replaceState ) {
  window.history.replaceState( null, null, window.location.href );
}
</script> -->