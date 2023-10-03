
    <div class="page-title-box">
        <div class="row align-items-center">
            <div class="col-md-8">
                <h6 class="page-title">Add Payroll</h6>
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
                          <div class="media align-items-center mb-4">
                             <!-- <div class="media-body">
                                  <h4 class="mb-0"> Edit</h4>
                            </div> -->
                          </div>
                          <!-- <form method="POST" action="" enctype="multipart/form-data"> -->



                             <form method="POST" action="" enctype="multipart/form-data">

                                 <table>
                <tr class="mr-4">
                    <td>Month: </td>
                    <td>
                        <select class="form-control mr-4" name="months" id="months" onchange="Fetch_Employee_basicSalary()">
                            <option></option>
                            <option>January</option>
                            <option>Febuary</option>
                            <option>March</option>
                            <option>April</option>
                            <option>May</option>
                            <option>June</option>
                            <option>July</option>
                            <option>August</option>
                            <option>September</option>
                            <option>October</option>
                            <option>November</option>
                            <option>December</option>
                        </select>
                    </td>
                    <td>&nbsp;&nbsp;&nbsp;&nbsp;</td>
                    <td>Year: </td>

                    <td>

                        <select style="width:90px;" class="form-control" name="years" id="years" onchange="Fetch_Employee_basicSalary()">
                        <?php 
                           for($i = 1960 ; $i <= date('Y'); $i++){
                              echo "<option>$i</option>";
                           }
                        ?>
                        </select>
                    </td>

                               <td>&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</td>
                  
                                <td> Loan_Amount:</td>
                                <td>
                                    <input type="text" readonly style="width:160px;" class="form-control" name="loan_amount" id="loanid">
                                </td>
                            

                                <td> Amount_paid:</td>
                                <td>
                                    <input type="text" readonly style="width:150px;" class="form-control" name="amountPaid" id="amountPaid">
                                </td>
                           

                             
                                <td> Months:</td>
                                <td>
                                    <input type="text" readonly style="width:70px;" class="form-control" name="tenureid" id="tenureid">
                                </td>
                            

                        </tr>
                        </table><br />



              <div class="form-group row ">

                        <div class="col-sm-6">
                             <label class="col-form-label">Employee Name</label>
                                <select class="form-control text-dark;" name="Employee" id="Acount_ID" onchange="Choosesite_Under_Sel();Choosesite_Get_Loan();">  
                                   <option>-Staff Name-</option>
                                      <?php 
                                        // $maineg = new mainClass();
                                        // $maineg->selectStaff('staff');
                                        ?>
                                </select>
                        </div>

                        <div class="col-sm-6">
                          <label class="col-form-label">Basic Salary</label>
                          <input type="text" class="form-control" name="basic_salary" readonly id="basic_salaryid">
                    </div>

                        
                    </div>




                    <div class="form-group row ">

                       <div class="col-sm-6">
                        <label class="col-form-label">Others</label>
                        <input type="number" min="0" class="form-control" name="other" id="other" onkeyup="payrollMaths_earnings()">
                    </div>


                    <div class="col-sm-6">
                     <label class="col-form-label">Other Dues</label>
                     <input type="number " min="0" class="form-control" name="other_dues" id="otherdues" onkeyup="payrollMaths_earnings()" >
                    </div>

                    </div>




                    <div class="form-group row">


                         <div class="col-sm-6">
                         <label class="col-form-label">Allowance</label>
                         <input type="number" min="0" class="form-control" name="allowance" id="allowance" onkeyup="payrollMaths_earnings()">
                    </div>


                    <div class="col-sm-6">
                        <label class="col-form-label">Sanction</label>  
                        <input type="number" min="0" class="form-control" name="sanction" id="sanction" onkeyup="payrollMaths_earnings()">
                        </div>

                    </div>


                     <div class="form-group row">
                         <tr>
                                <td> Loan Amount Paying:</td>
                                <td>
                                    <input type="number" min="0" class="form-control" name="loan" id="loan_pay" placeholder="Enter Loan Amount to be Paid" onkeyup="payrollMaths_earnings()">
                                </td>
                            </tr>


                     <div class="col-sm-6">
                         <label class="col-form-label">Gross Pay</label>
                        <input type="number" min="0" class="form-control" name="gross_pay" readonly id="grosspay">
                    </div>
                    

                    <div class="col-sm-6">
                        <label class="col-form-label">Total Dues</label>
                        <input type="number" min="0" class="form-control" name="total_dues" readonly id="totaldues">
                    </div>

                    </div>



                    <div class="form-group row">

                        <div class="col-sm-6">
                         <label class="col-form-label">Net Pay</label>
                         <input type="number" min="0" class="form-control" name="net_pay" readonly id="netpay">
                       </div>


                        <div class="col-sm-6">
                            <br>
                           
                           <button type="submit" name="suBMitPayroll" class="btn btn-primary btn-block .hor-grd .btn-grd-* mt-2">
                                  Submit Payroll 
                            </button>
                        </div>
                    </div>

                </form>



                            



                        <!-- </form> -->
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
            var loan_pay = document.getElementById("loan_pay").value;
            var sanction = document.getElementById("sanction").value;
            var otherdues = document.getElementById("otherdues").value;
            var totaldues = document.getElementById("totaldues");
            var netpay = document.getElementById("netpay");
            var grosspay = document.getElementById("grosspay").value;
            var calculate_ALLdues = Number(loan_pay) + Number(sanction) + Number(otherdues);
            // var calculate_ALLdues =  Number(sanction) + Number(otherdues);
            totaldues.value = calculate_ALLdues;
            var get_NetPAY = Number(grosspay) - Number(totaldues.value);
            netpay.value = get_NetPAY;

        }

    }




    function Fetch_Employee_basicSalary() {
        var employeID = document.getElementById("Employeen").value;
        var months = document.getElementById("months").value;
        var years = document.getElementById("years").value;
        var mont_year = months + '-' + years;


        var getID = employeID.split("_");
        Fetch_salary(getID[1]);
        check_if_staffExist(getID[0], mont_year);
        //payrollMaths_earnings();
        // alert(mont_year);
        //alert(getID[1]);



        function Fetch_salary(staffID) {
            $.ajax({
                url: 'fetch_basic_salary/' + staffID,
                type: 'get',
                dataType: 'json',
                success: function(response) {
                    // alert(response);
                    var work = document.getElementById('basic_salary').value = response;
                    payrollMaths_earnings();

                }
            });
        }



        function check_if_staffExist(staff, datemont) {
            $.ajax({
                url: 'check_ifStaff/' + staff + '&&' + datemont,
                type: 'get',
                dataType: 'json',
                success: function(response) {
                    // alert(response);

                    document.getElementById('output').innerHTML = response;

                    if (document.getElementById('output').innerText == "Staff payroll has not been prepared!!!") {

                        document.getElementById('btn').disabled = false;
                        document.getElementById('output').hidden = false;

                    } else if (document.getElementById('output').innerText == "Sorry Staff payroll already exist, check another staff!!!") {

                        document.getElementById('btn').disabled = true;
                        document.getElementById('output').hidden = false;
                    }

                }
            });
        }

    }
</script>



<script type="text/javascript">
  function mesansOFGetting_totalNumb() {
      var total_bag = document.getElementById('total_bag').value;
      var no_workers = document.getElementById('no_workers').value;
      var getStock =  Number(total_bag) / Number(no_workers);
      document.getElementById('total_each').value = number_format(getStock);

        // var tota_bag = document.getElementById('total_each').value;
      var getTotalAmount = total_bag * 2;  
       document.getElementById('total_amount').value = number_format(getTotalAmount);

        var getTotalAmount1 = getStock * 2;  
       document.getElementById('total_per_each').value = number_format(getTotalAmount1);
 
    }

</script>




<script type="text/javascript">

   function Choosesite_Under_Sel() {

        if (window.XMLHttpRequest) {
           // code for IE7+, Firefox, Chrome, Opera, Safari
            xmlhttp = new XMLHttpRequest();
          } else {
            // code for IE6, IE5
            xmlhttp = new ActiveXObject("Microsoft.XMLHTTP");
        }

    var AcountID =document.getElementById('Acount_ID').value;
    var JsExplode = AcountID.split("-");
    var url = "Control/ajaxController.php?Acount_ID="+JsExplode[0];


    xmlhttp.onreadystatechange = function() {
            if (this.readyState == 4 && this.status == 200) {
        // document.getElementById('basic_salary').innerHTML = this.responseText;
        document.getElementById('basic_salaryid').value = this.responseText;
        
        // alert(this.responseText);
        
            }
        };
        xmlhttp.open("GET",url,true);
        xmlhttp.send();


    
}


function Choosesite_Get_Loan() {

        if (window.XMLHttpRequest) {
           // code for IE7+, Firefox, Chrome, Opera, Safari
            xmlhttp = new XMLHttpRequest();
          } else {
            // code for IE6, IE5
            xmlhttp = new ActiveXObject("Microsoft.XMLHTTP");
        }

    var AcountID =document.getElementById('Acount_ID').value;
    var JsExplode = AcountID.split("-");
    var url = "Control/ajaxController.php?getLoan="+JsExplode[0];


    xmlhttp.onreadystatechange = function() {
            if (this.readyState == 4 && this.status == 200) {
        // document.getElementById('basic_salary').innerHTML = this.responseText;
        // document.getElementById('loan').value = this.responseText;

        var result = this.responseText.split("-");
        if(result[0] == 0 || result[0] == 'Null' && result[1] == 'Null' || result[1] == 'undefined' && result[2] == 'Null' || result[2] == 'undefined'){
            document.getElementById('loanid').value = 0;
            document.getElementById('amountPaid').value = 0;
            document.getElementById('tenureid').value = 0;
        }else{
            document.getElementById('loanid').value = result[0];
            document.getElementById('amountPaid').value = result[1];
            document.getElementById('tenureid').value = result[2];
        }

        // alert(this.responseText);
        
            }
        };
        xmlhttp.open("GET",url,true);
        xmlhttp.send();


    
}

</script>



