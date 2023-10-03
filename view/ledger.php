
    <div class="page-title-box">
        <div class="row align-items-center">
            <div class="col-md-8">
                <h6 class="page-title">General Ledger Report</h6>
            </div>
            <div class="col-md-4">
            <div class="float-end d-none d-md-block">
                <div class="dropdown">
                    <button  type="submit" class="btn   btn-danger btn-sm float-right" name="b_print" id="disnon" onClick="window.print();"><i class="fas fa-print"></i> Print</button>
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
                  <div class="col-lg-8 col-xl-8">
                        <div class="card">
                          <div class="card-body">
                              <div class="row mx-auto">
                                <div class="col-md-4">
                                     <input type="date" class="form-control" id="fromdate">
                                </div>
                                <div class="col-md-4">
                                <div>
                                   <input type="date" class="form-control" id="todate">
                                </div>
                                </div>

                                <div class="col-md-4">
                                   <div class="checkbox">
                                        <!--  <button type="submit" class="btn btn-primary btn-block" onclick="mesansOFidentifacartion_change()">Fetch Query</button> -->
                                        <input type="submit" class="btn btn-primary btn-block" value="Fecth Query" id="ValNO" onclick="getAll();" >
                                        <!--  <button onclick="hello();">Hello</button> -->
                                    </div>
                                </div>                    
                                </div>
                                <br><br>          
        <div class="row mx-auto">
        <div class="table-responsive">
        <table class="table table-xs mb-0 table-striped mt-4" >
        <thead>
           <tr>
            <th>Name</th>
            <th></th>
            <th>Amount</th>    
           </tr>
        </thead>
        <tbody>

         <tr>
        <td><a style="text-decoration:none;" href="?action=StockinReport" target="_blank">INSTOCK :</a></td>
        <td></td>
        <td  id="instk"><b>0.00</b></td>
        </tr>

          <tr>
        <td><a style="text-decoration:none;" href="?action=salesReports" target="_blank">SALES:</a></td>
        <td></td>
        <td id="cash"><b>0.00</b></td>
        </tr>

        


        <tr>
        <td><a style="text-decoration:none;" href="?action=ReceivableReports" target="_blank">RECEIABLES:</a></td>
        <td></td>
        <td  id="receive"><b>0.00</b></td>
        </tr>



        <!--  <tr>
        <td>ZENITH BANK:</td>
        <td></td>
        <td id="zenith_bank"><b>0</b></td>
        </tr>

        <tr>
        <td>FIDELITY BANK:</td>
        <td></td>
        <td id="fidelity_bank"><b>0</b></td>
        </tr>

        <tr>
        <td>UBA BANK:</td>
        <td></td>
        <td id="unitedA_bank"><b>0</b></td>
        </tr>

         <tr>
        <td>POLARIS BANK:</td>
        <td></td>
        <td id="polaris_bank"><b>0</b></td>
        </tr>

         <tr>
        <td>HERITAGE BANK:</td>
        <td></td>
        <td id="heritage_bank"><b>0</b></td>
        </tr>-->
        

        <tr>
        <td class="text-muted">TOTAL CASH INFLOW:</td>
        <td></td>
        <td id="total_income" class="text-muted"><b>0.00</b></td>
        </tr>

        <!--<tr>
            <td><h5 class="text-danger font-weight-bold mt-4">CASH OUT FLOW:</h5></td>
            <td></td>
            <td></td>
        </tr>-->


         <tr>
        <td><a style="text-decoration:none;" href="?action=Expense" target="_blank">EXPENSES:</a></td>
        <td></td>
        <td  id="expens"><b>0.00</b></td>
        </tr>

       


        
        <tr>
        <td><a style="text-decoration:none;" href="?action=Payrol_report" target="_blank">SALARY :</a></td>
        <td></td>
        <td id="salary"><b>0.00</b></td>
        </tr>


         <tr>
        <td><a style="text-decoration:none;" href="?action=CostOfGoodsReports" target="_blank">PURCHASE:</a></td>
        <td></td>
        <td  id="cost"><b>0.00</b></td>
        </tr>

    
       <!--  <tr>
        <td>ZENITH BANK:</td>
        <td></td>
        <td id="zenith_bankD"><b>0</b></td>
        </tr>

        <tr>
        <td>FIDELITY BANK:</td>
        <td></td>
        <td id="fidelity_bankD"><b>0</b></td>
        </tr>

        <tr>
        <td>UBA BANK:</td>
        <td></td>
        <td id="unitedA_bankD"><b>0</b></td>
        </tr>

        <tr>
        <td>POLARIS BANK:</td>
        <td></td>
        <td id="polaris_bankD"><b>0</b></td>
        </tr>

        <tr>
        <td>HERITAGE BANK:</td>
        <td></td>
        <td id="heritage_bankD"><b>0</b></td>
        </tr>
        -->

        <tr>
        <td class="text-muted">TOTAL CASH OUTFLOW:</td>
        <td></td>
        <td id="total_cash_outflow" class="text-muted"><b>0.00</b></td>
        </tr>

        <tr>
        <td></td>
        <td></td>
        <td></td>
        </tr>

      <!--   <tr>
        <td class="text-success font-weight-bold">TOTAL CASH :</td>
        <td></td>
        <td id="totalCashall"><b>0.00</b></td>
        </tr> -->

        <!--  <tr>
        <td class="text-success font-weight-bold">TOTAL CASH BANK:</td>
        <td></td>
        <td id="totalBankall"><b>0</b></td>
        </tr> -->

        <tr>
        <td class="text-muted">TOTAL BALANCE:</td>
        <td></td>
        <td id="all"><b>0.00</b></td>
        </tr>

    
        </tbody>
        </table>
        </div> 
        </div>
                            </div>
                        </div>  
                    </div>
                </div>

                </div>
            </div>
        </div> <!-- end col -->
    </div> <!-- end row -->

<script>
function getAll(){
    getinCash();
    getinExpense();
    getinRece();
    getinPur();
    getSalary();
    getinSTK();
    // getinCusD();
    // getZenithB();
    // getFIDELITYB();
    // getUBAB();
    // getPOLARIS();
    // getHERITAGEB();
    // getEXPENSEA();
    
    // getPurchase();
    // getZenithDebit();
    // getFIDELITYDebit();
    // getUBABDebit();
    // getPOLARISDebit();
    // getHERITAGEBDebit();
    // getinRece();


    

}






function getinExpense() {
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
    var url = "Control/ajaxController.php?geterxpense="+tr;


    xmlhttp.onreadystatechange = function() {
            if (this.readyState == 4 && this.status == 200) {
                 document.getElementById("expens").innerHTML = this.responseText;
             // $("#tblBody").html(this.responseText);
        // document.getElementById('basic_salary').innerHTML = this.responseText;
        getTotalIncom();
        getTotalIncom1();
        // getTotalall();
            }
        };
        xmlhttp.open("GET",url,true);
        xmlhttp.send();
}
















function getinCash() {
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
    var url = "Control/ajaxController.php?getCash1="+tr;


    xmlhttp.onreadystatechange = function() {
            if (this.readyState == 4 && this.status == 200) {
                 document.getElementById("cash").innerHTML = this.responseText;
             // $("#tblBody").html(this.responseText);
        // document.getElementById('basic_salary').innerHTML = this.responseText;
        getTotalIncom();
        getTotalIncom1();
        // getTotalall();
            }
        };
        xmlhttp.open("GET",url,true);
        xmlhttp.send();
}


function getinRece() {
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
    var url = "Control/ajaxController.php?getrece="+tr;


    xmlhttp.onreadystatechange = function() {
            if (this.readyState == 4 && this.status == 200) {
                 document.getElementById("receive").innerHTML = this.responseText;
             // $("#tblBody").html(this.responseText);
        // document.getElementById('basic_salary').innerHTML = this.responseText;
        getTotalIncom();
        getTotalIncom1();
        // getTotalall();
            }
        };
        xmlhttp.open("GET",url,true);
        xmlhttp.send();
}


function getinPur() {
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
    // var url = "Control/ajaxController.php?getpurc="+tr;
     var url = "Control/ajaxController.php?getPU="+tr;


    xmlhttp.onreadystatechange = function() {
            if (this.readyState == 4 && this.status == 200) {
                 document.getElementById("cost").innerHTML = this.responseText;
             // $("#tblBody").html(this.responseText);
        // document.getElementById('basic_salary').innerHTML = this.responseText;
        getTotalIncom();
        getTotalIncom1();
        // getTotalall();
            }
        };
        xmlhttp.open("GET",url,true);
        xmlhttp.send();
}



function getinSTK() {
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
    var url = "Control/ajaxController.php?getSTKK="+tr;


    xmlhttp.onreadystatechange = function() {
            if (this.readyState == 4 && this.status == 200) {
                 document.getElementById("instk").innerHTML = this.responseText;
             // $("#tblBody").html(this.responseText);
        // document.getElementById('basic_salary').innerHTML = this.responseText;
        getTotalIncom();
        getTotalIncom1();
        // getTotalall();
            }
        };
        xmlhttp.open("GET",url,true);
        xmlhttp.send();
}







function getSalary() {
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
                 document.getElementById("salary").innerHTML = this.responseText;
        getTotaloutflow();
        getTotalCash();
        getTotalall();
            }
        };
        xmlhttp.open("GET",url,true);
        xmlhttp.send();
}


</script>



<script type="text/javascript">
   function getTotalIncom(){
         var cash = document.getElementById('cash').innerText;
         var receive = document.getElementById('receive').innerText;
         var instk = document.getElementById('instk').innerText;

         

          cash1 = cash.split(',').join('');
          receive1 = receive.split(',').join('');
           instk1 = instk.split(',').join('');

         var SumAmount = Number(cash1) + Number(instk1) + Number(receive1);
         
         document.getElementById('total_income').innerHTML = number_format(SumAmount);
     }
</script>


<script type="text/javascript">
   function getTotaloutflow(){
         var expense = document.getElementById('expens').innerText;
         var salary = document.getElementById('salary').innerText;
         var purchase = document.getElementById('cost').innerText;

         expense1 = expense.split(',').join('');
         salary1 = salary.split(',').join('');
         purchase1 = purchase.split(',').join('');

         var SumAmount = Number(expense1) + Number(salary1) + Number(purchase1);
         
         document.getElementById('total_cash_outflow').innerHTML = number_format(SumAmount);
     }



function getTotalIncom1(){
         var cash = document.getElementById('cash').innerText;
         var receive = document.getElementById('receive').innerText;
         var instk = document.getElementById('instk').innerText;

          cash1 = cash.split(',').join('');
          receive1 = receive.split(',').join('');
          instk1 = instk.split(',').join('');

         var SumAmount = Number(cash1) + Number(receive1) + Number(instk1); 


         var expense = document.getElementById('expens').innerText;
         var purchase = document.getElementById('cost').innerText;
         var salary = document.getElementById('salary').innerText;

          expense1 = expense.split(',').join('');
         purchase1 = purchase.split(',').join('');
         salary1 = salary.split(',').join('');

          var SumAmountDebitCash = Number(expense1) + Number(purchase1) + Number(salary1);

          var TotalCash = Number(SumAmount) - Number(SumAmountDebitCash);
         
         document.getElementById('all').innerHTML = number_format(TotalCash);
         
     }


</script>



<style type="text/css">
    @media print{
        .sticky-footer, .scroll-to-top, .navbar, .navbar-nav, .sidebar, .sidebar-dark, .card-header, .form, .yu, .dataoption{
            display: none !important;
        }

        #disnon {
            display: none !important;
        }

        #ValNO {
            display: none !important;
        }


        tr td:nth-child(even) {background: gray;}
        tr td:nth-child(odd) {background: white;}
    }

    @page {
        size: A4;
    }
</style>
