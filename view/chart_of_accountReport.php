    <div class="page-title-box">
                            <div class="row align-items-center">
                                <div class="col-md-8">
                                    <h6 class="page-title">Chart of Account Report</h6>
                                </div>
                                <div class="col-md-4">
                                    <div class="float-end d-none d-md-block">
                                        <div class="dropdown">
                                            <a href="?action=ChartofAccount" class="d-none d-sm-inline-block btn-sm btn btn-primary shadow-sm float-right"> <i class="fas fa-arrow-circle-left fa-sm text-white-50 "> </i> Back</a>
                                            <button  type="submit" class="btn   btn-danger btn-sm float-right" name="b_print" id="disnon" onClick="window.print();"><i class="fas fa-print"></i> Print</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>


                        <div data-repeater-list="group-a">
             <div class="row" data-repeater-item>
                                                 
                                                  

        <div  class="mb-3 col-lg-4">
            <input type="date" class="form-control" id="fromdate">
        </div>

        <div  class="mb-3 col-lg-4">
            <input type="date" class="form-control" id="todate">
        </div>

        <div  class="mb-3 col-lg-4">
           <input type="submit" class="btn btn-primary btn-block form-control" value="Get Report" id="ValNO" onclick="mesansOFidentifacartion_change();getMeSalesTotalcash();getMeSalesTotal();getMeSalesTotalPurchase();getMeSalesTotalSalary();getMeSalesTotalExpense();" >
        </div>



    </div>

</div>



                        <div class="row">
                            <div class="col-12">
                                <div class="card">
                                    <div class="card-body">
                                        <table class="table table-striped table-bordered dt-responsive nowrap" style="border-collapse: collapse; border-spacing: 0; width: 100%;">
                                            <thead>
                                                <tr>
                                                <th>No</th>
                                                <th>Date</th>
                                                <th>Account ID</th>
                                                <th>Series Name</th>
                                                <th>Account Type</th>
                                                <th>Amount</th>
                                                <th>Performed By</th>
                                                </tr>
                                            </thead>

                                            <tbody id="tblBody">
                                 
                                            </tbody>
                                        </table>

                                         <table class="mt-4 float-right" id="tabSum">
                                                <tr>
                                                    <td class="bg-light">Total Sales: </td>
                                                    <td><b class="form-control btn btn-primary" id="sales">0</b></td>     
                                                    <td>&nbsp;</td>

                                                    <td class="bg-light"> Total Receivable:  </td>
                                                    <td><b class="form-control btn btn-success" id="sum_receivable">0</b></td>
                                                    <td>&nbsp;&nbsp;</td> 

                                                    <td class="bg-light"> Total Purchase:  </td>
                                                    <td><b class="form-control btn btn-success" id="sum_purchase">0</b></td>
                                                    <td>&nbsp;&nbsp;</td> 

                                                    <td class="bg-light"> Total Salary:  </td>
                                                    <td><b class="form-control btn btn-success" id="sum_salary">0</b></td>
                                                    <td>&nbsp;&nbsp;</td> 

                                                    <td class="bg-light"> Total Expense:  </td>
                                                    <td><b class="form-control btn btn-success" id="sum_expense">0</b></td>
                                                    <td>&nbsp;&nbsp;</td> 
                                                </tr>
                                            </table>

                                    </div>
                                </div>
                            </div> <!-- end col -->
                        </div> <!-- end row -->


 
<script>
function mesansOFidentifacartion_change() {
        if (window.XMLHttpRequest) {
           // code for IE7+, Firefox, Chrome, Opera, Safari
            xmlhttp = new XMLHttpRequest();
          } else {
            // code for IE6, IE5
            xmlhttp = new ActiveXObject("Microsoft.XMLHTTP");
        }

    // var AcountID =document.getElementById('product_code').value;
    // var JsExplode = AcountID;
    var fromdate = document.getElementById("fromdate").value;
    var todate = document.getElementById("todate").value;
    var tr = fromdate+"_"+todate;
    var url = "Control/ajaxController.php?chart_of_account="+tr;


    xmlhttp.onreadystatechange = function() {
            if (this.readyState == 4 && this.status == 200) {
                 document.getElementById("tblBody").innerHTML = this.responseText;
             // $("#tblBody").html(this.responseText);
        // document.getElementById('basic_salary').innerHTML = this.responseText;
            }
        };
        xmlhttp.open("GET",url,true);
        xmlhttp.send();
}





function getMeSalesTotal() {
        if (window.XMLHttpRequest) {
           // code for IE7+, Firefox, Chrome, Opera, Safari
            xmlhttp = new XMLHttpRequest();
          } else {
            // code for IE6, IE5
            xmlhttp = new ActiveXObject("Microsoft.XMLHTTP");
        }
    var fromdate = document.getElementById("fromdate").value;
    var todate = document.getElementById("todate").value;
    var tr = fromdate+"_"+todate;
    var url = "Control/ajaxController.php?getCash="+tr;
    xmlhttp.onreadystatechange = function() {
            if (this.readyState == 4 && this.status == 200) {
                 document.getElementById("sales").innerHTML = this.responseText;
            }
        };
        xmlhttp.open("GET",url,true);
        xmlhttp.send();
}



function getMeSalesTotalcash() {
        if (window.XMLHttpRequest) {
           // code for IE7+, Firefox, Chrome, Opera, Safari
            xmlhttp = new XMLHttpRequest();
          } else {
            // code for IE6, IE5
            xmlhttp = new ActiveXObject("Microsoft.XMLHTTP");
        }
    var fromdate = document.getElementById("fromdate").value;
    var todate = document.getElementById("todate").value;
    var tr = fromdate+"_"+todate;
    var url = "Control/ajaxController.php?getCustomerD="+tr;
    xmlhttp.onreadystatechange = function() {
            if (this.readyState == 4 && this.status == 200) {
                 document.getElementById("sum_receivable").innerHTML = this.responseText;
            }
        };
        xmlhttp.open("GET",url,true);
        xmlhttp.send();
}


function getMeSalesTotalPurchase() {
        if (window.XMLHttpRequest) {
           // code for IE7+, Firefox, Chrome, Opera, Safari
            xmlhttp = new XMLHttpRequest();
          } else {
            // code for IE6, IE5
            xmlhttp = new ActiveXObject("Microsoft.XMLHTTP");
        }
    var fromdate = document.getElementById("fromdate").value;
    var todate = document.getElementById("todate").value;
    var tr = fromdate+"_"+todate;
    var url = "Control/ajaxController.php?getPurchaseA="+tr;
    xmlhttp.onreadystatechange = function() {
            if (this.readyState == 4 && this.status == 200) {
                 document.getElementById("sum_purchase").innerHTML = this.responseText;
            }
        };
        xmlhttp.open("GET",url,true);
        xmlhttp.send();
}



function getMeSalesTotalSalary() {
        if (window.XMLHttpRequest) {
           // code for IE7+, Firefox, Chrome, Opera, Safari
            xmlhttp = new XMLHttpRequest();
          } else {
            // code for IE6, IE5
            xmlhttp = new ActiveXObject("Microsoft.XMLHTTP");
        }
    var fromdate = document.getElementById("fromdate").value;
    var todate = document.getElementById("todate").value;
    var tr = fromdate+"_"+todate;
    var url = "Control/ajaxController.php?getSalaryA="+tr;
    xmlhttp.onreadystatechange = function() {
            if (this.readyState == 4 && this.status == 200) {
                 document.getElementById("sum_salary").innerHTML = this.responseText;
            }
        };
        xmlhttp.open("GET",url,true);
        xmlhttp.send();
}



function getMeSalesTotalExpense() {
        if (window.XMLHttpRequest) {
           // code for IE7+, Firefox, Chrome, Opera, Safari
            xmlhttp = new XMLHttpRequest();
          } else {
            // code for IE6, IE5
            xmlhttp = new ActiveXObject("Microsoft.XMLHTTP");
        }
    var fromdate = document.getElementById("fromdate").value;
    var todate = document.getElementById("todate").value;
    var tr = fromdate+"_"+todate;
    var url = "Control/ajaxController.php?getExpense="+tr;
    xmlhttp.onreadystatechange = function() {
            if (this.readyState == 4 && this.status == 200) {
                 document.getElementById("sum_expense").innerHTML = this.responseText;
            }
        };
        xmlhttp.open("GET",url,true);
        xmlhttp.send();
}
      
</script>

