 <?php 
$maineg = new  mainClass();
$DBinfo = $maineg->Targeted_information2('payroll','staff_id',$_GET['singlePayRoll'],'month_year',$_GET['singlemonDate']);
$status = $DBinfo['status'];
?>

<style>
   label{
    color:darkgray;
   }
</style>

    <div class="page-title-box">
        <div class="row align-items-center">
            <div class="col-md-8">
                <h6 class="page-title">Payroll Single</h6>
            </div>
            <div class="col-md-4">
                <div class="float-end d-none d-md-block">
                    <div class="dropdown">
                        <a href="?action=ViewPayroll" class="btn btn-primary btn-sm waves-effect waves-light"><i class="fas fa-arrow-circle-left fa-sm  text-white"></i> Back</a>
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
                          <!-- <div class="media align-items-center mb-4">
                             <div class="media-body">
                                  <h4 class="mb-0"> Edit</h4>
                            </div>
                          </div> -->
                           <form method="post">
                                           
                                             
                                            <div class="form-group row mb-3">

                                                <div class="col-sm-6">
                                                     <label class=" col-form-label">Month</label>
                                                    <input readonly type="text" class="form-control" value="<?php echo $DBinfo['month_year']?>" name="monthYEAR" >
                                                </div>

                                                <div class="col-sm-6">
                                                    <label class="col-form-label">Sanction</label>
                                                    <input type="number" min="0" class="form-control" name="sanction" id="sanction" readonly onkeyup="payrollMaths_earnings()" value="<?php echo $DBinfo['sanction']?>">
                                                </div>
                                            </div>

                                             <div class="form-group row mb-3">
                                                
                                                <div class="col-sm-6">
                                                    <label class="col-form-label">Name</label>
                                                    <input readonly type="text" class="form-control" value="<?php echo $DBinfo['employee_name']?>" name="Employee" >
                                                </div>

                                                <div class="col-sm-6">
                                                    <label class="col-form-label">other Dues</label>
                                                    <input type="number " min="0" class="form-control" name="other_dues" readonly id="otherdues" onkeyup="payrollMaths_earnings()" value="<?php echo $DBinfo['other_deduction']?>" >
                                                </div>

                                            </div>

                                             <div class="form-group row mb-3">
                                            
                                                <div class="col-sm-6">
                                                    <label class="col-form-label">Basic Salary</label>
                                                    <input readonly type="text" class="form-control" name="basic_salary"  id="basic_salaryid" value="<?php echo $DBinfo['bsaic_salary']?>">

                                                </div>
                                                 

                                               <div class="col-sm-6">
                                               <label class="col-form-label">Total Dues:</label>
                                               <input type="number" min="0" class="form-control" name="total_dues" readonly id="totaldues" value="<?php echo $DBinfo['total_due']?>">
                                               </div>
                                            </div>



                                             <div class="form-group row mb-3">
                                            
                                                <div class="col-sm-6">
                                                    <label class="col-form-label">Allowance</label>
                                                    <input type="number" min="0" class="form-control" name="allowance" id="allowance" readonly value="<?php echo $DBinfo['allowance']?>" onkeyup="payrollMaths_earnings()">

                                                </div>
                                                 

                                               <div class="col-sm-6">
                                               <label class="col-form-label">Net Pay</label>
                                              <input type="number" min="0" class="form-control" name="net_pay" readonly id="netpay" value="<?php echo $DBinfo['net_pay']?>">
                                               </div>
                                            </div>



                                             <div class="form-group row mb-3">
                                            
                                                <div class="col-sm-6">
                                                    <label class="col-form-label">Others</label>
                                                    <input type="number" min="0" class="form-control" name="other" id="other" readonly value="<?php echo $DBinfo['others']?>" onkeyup="payrollMaths_earnings()">
                                                </div>
                                                 

                                               <div class="col-sm-6">
                                               <label class="col-form-label">Status</label>
                                               <input type="text"  class="form-control" name="staff_id" readonly id="staff_id" value="<?php echo $DBinfo['staff_id']?>">
                                               </div>
                                            </div>


                                             <div class="form-group row mb-3">
                                            
                                                <div class="col-sm-6">
                                                    <label class="col-form-label">Gross Pay</label>
                                                   <input type="number" min="0" class="form-control" name="gross_pay" readonly id="grosspay" value="<?php echo $DBinfo['gross_pay']?>">

                                                </div>

                                                 <div class="col-sm-6">
                                                    <label class="col-form-label">Type</label>
                                                   <input type="text" class="form-control" name="type" readonly value="<?php echo $DBinfo['type']?>">

                                                </div>
                                                 

                                           
                                               </div>
                                           



                                             <div class="form-group row mb-3">
                                                 <div class="col-sm-6">
                                                   
                                                  <br>

                                                     <?php
                                    if($status == "paid"){
                                    echo '
                                    <button type="submit" name="PaySalaryS" class="btn btn-primary btn-block form-control .hor-grd .btn-grd-*" id="btn" disabled>Pay Salary</button>';
                                    }else{
                                        echo '<button type="submit" name="PaySalaryS" class="btn btn-primary form-control btn-block .hor-grd .btn-grd-*" id="btn">Pay Salary</button>';
                                }
                                ?>
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


//     function startRandomizer(){

//   window.setTimeout( function(){

//     window.alert("Hello World " + Math.random() * 1000);
//     startRandomizer();

//   }, Math.random() * 100 + 1000); // From 10 to 110 secconds

// } 

// startRandomizer();
</script>
            

        
<script>
    function payrollMaths_earnings() {
        var basic_salary = document.getElementById("basic_salaryid").value;
        var allowance = document.getElementById("allowance").value;
        var other = document.getElementById("other").value;
        var netpay = document.getElementById("netpay");
        var totaldues = document.getElementById("totaldues");

        var grosspay = document.getElementById("grosspay");
        var Grosspay_total = Number(basic_salary) + Number(allowance) + Number(other);

        grosspay.value = Grosspay_total;
        var getNetPay = Number(grosspay.value) - Number(totaldues.value);
        netpay.value = getNetPay;
        PayrollMaths_deduction();
       


        function PayrollMaths_deduction() {
            var sanction = document.getElementById("sanction").value;
            var otherdues = document.getElementById("otherdues").value;
            var totaldues = document.getElementById("totaldues");
            var netpay = document.getElementById("netpay");
            var grosspay = document.getElementById("grosspay").value;
            var calculate_ALLdues = Number(sanction)  + Number(otherdues);
            totaldues.value = calculate_ALLdues;
            var get_NetPAY = Number(grosspay) - Number(totaldues.value);
            netpay.value = get_NetPAY;

        }

    }
</script>
           