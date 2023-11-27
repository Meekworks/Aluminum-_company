<style type="text/css">
    label{
        color: darkgray;
    }
</style>

<?php 
$url = $_SERVER['REQUEST_URI'];
$date_year = explode('&&', $url);
$maineg = new  mainClass();
$DBinfo = $maineg->Targeted_information('payroll_log','month_year',$date_year[1]);
$status = $DBinfo['status'];
?>


<div class="page-title-box">
    <div class="row align-items-center">
        <div class="col-md-8">
            <h6 class="page-title">Payroll info</h6>
        </div>

        <div class="col-md-4">
            <div class="float-end d-none d-md-block">
                <div class="dropdown">
                    <a href="?action=ViewPayroll" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i class="fas fa-arrow-circle-left text-white-50"></i> Back</a>
                </div>
            </div>
        </div>
    </div>
</div>



                        <div class="row">
                            <div class="col-12">
                                <div class="card">
                                    <div class="card-body">

                                        
                                      <form method="POST" action="" enctype="multipart/form-data">
                                           
                                             
                                            <div class="form-group row mb-3">

                                                <div class="col-sm-6">
                                                     <label class=" col-form-label">Month Year</label>
                                                    <input readonly type="text" readonly class="form-control " value=" <?php echo $DBinfo['month_year']?>"  >
                                                </div>

                                                <div class="col-sm-6">
                                                    <label class="col-form-label">Status</label><br>
                                                     <?php
                                                        if($status == "paid"){
                                                            echo '<span class="btn btn-success">'.$DBinfo['status'].'</span>';

                                                            }else{
                                                                echo '<span  class="btn btn-danger">'.$DBinfo['status'].'</span>';
                                                        }
                                                    ?>
                                                    
                                                </div>
                                            </div>


                                           



                                             <div class="form-group row mb-3">


                                                <div class="col-sm-6">
                                                    <label class="col-form-label">Amount</label>
                                                    <input  class="form-control"  value="<?php echo "₦".number_format($DBinfo['Amount']);?>">
                                                    <input type="number" name="amount" value="<?php echo $DBinfo['Amount']?>" hidden>
                                                    <input type="text" name="monthYEAR" value="<?php echo $DBinfo['month_year']?>" hidden>
                                                </div>

                                                 <div class="col-sm-6">
                                                     <label class="col-form-label text-white">rerr</label>
                                                   
                                                  <br>


                                                     <?php
                                    if($status == "paid"){
                                    echo '<button type="submit" name="PaySalary" class="btn btn-primary btn-block form-control .hor-grd .btn-grd-*" id="btn" disabled>Pay Salary</button>';
                                    }else{
                                        echo '<button type="submit" name="PaySalary" class="btn btn-primary btn-block form-control .hor-grd .btn-grd-*" id="btn">Pay Salary</button>';
                                }
                                ?>
                                                </div>
                                            </div>


                                        </form>

                                        </div>
                                        <!-- end row -->
                                       
                                        <!-- end row -->
                                      
                                        <!-- end row -->
                                    </div><!-- end cardbody -->
                                </div><!-- end card -->
                            </div> <!-- end col -->
                        </div> <!-- end row -->
                    </div> <!-- container-fluid -->

                        </div>  
                    </div>
                </div>

                </div>
            </div>
        </div> <!-- end col -->
    </div> <!-- end row -->

    <script type="text/javascript">
        function GenerateInvoiceNumber() {
        var fieldID = document.getElementById("productcode");
        var number = Math.floor(Math.random() * 90000) + 10000;
        var word = "101";
        var JoinOn = word + number;
        fieldID.value = JoinOn;
         }

     </script>