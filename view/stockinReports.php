    <div class="page-title-box">
                            <div class="row align-items-center">
                                <div class="col-md-8">
                                    <h6 class="page-title">Stock Report</h6>
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

                        <div class="row mx-auto">
                                <div class="col-md-4">
                                    <!-- <label>Payment Method</label> -->
                    
                                 <input type="date" class="form-control" id="fromdate">
                                    

                                </div>
                                <div class="col-md-4">

                                    <div>
                                       
                                   <input type="date" class="form-control" id="todate">
                                    </div>
                                </div>


                                <div class="col-md-4">
                                  <div class="checkbox">
                                    <!-- <button type="submit" class="btn btn-primary btn-block" onclick="fetchdstock()">Fetch Query</button> -->
                                     <input type="submit" class="btn btn-primary btn-block" value="Fecth Query" id="ValNO" onclick="mesansOFidentifacartion_change();getMeSalesTotal();getMeSalesTotalcash();" >
                                        </div>
                                </div>
                                     
                                  
                            </div>
                            <br><br>


                        <div class="row">
                            <div class="col-12">
                                <div class="card">
                                    <div class="card-body">
                                        <table class="table table-striped table-bordered dt-responsive nowrap" style="border-collapse: collapse; border-spacing: 0; width: 100%;">
                                            <thead>
                                                <tr>
                                                 <th>No</th>
                                                <th>Stock Date</th>
                                                <th>Product ID</th>
                                                <th>Product Name</th>
                                                <th>Purchase Price</th>
                                                <th>Qty</th>
                                                <th>Total</th> 
                                                </tr>
                                            </thead>

                                            <tbody id="tblBody">
                                 
                                            </tbody>
                                        </table>

                                        <table class="mt-4 float-right" id="tabSum">
                                            <tr>
                                                <td class="bg-light">Total Stockin Performed (Amount): </td>
                                                <td><b class="form-control btn btn-primary" id="sum_total_cash">0</b></td>     
                                                <td>&nbsp;</td>
                                                <td class="bg-light"> Total Stockin Performed (Qty)  :  </td>
                                                <td><b class="form-control btn btn-success" id="sum_total_">0</b></td>
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
    var url = "Control/ajaxController.php?ordr_date="+tr;


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
    var url = "Control/ajaxController.php?gettotal_stock="+tr;
    xmlhttp.onreadystatechange = function() {
            if (this.readyState == 4 && this.status == 200) {

                 // document.getElementById("sum_total_").innerHTML = this.responseText;



                 var sumTotalCash = parseFloat(this.responseText); // Convert to a number if it's not already

                // Format the number with commas for thousands separators
                var formattedSum = sumTotalCash.toLocaleString();

                // Set the formatted number as the innerHTML of the element
                document.getElementById("sum_total_").innerHTML = formattedSum;


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
    var url = "Control/ajaxController.php?gettotalcash_stock="+tr;
    xmlhttp.onreadystatechange = function() {
            if (this.readyState == 4 && this.status == 200) {

                 // document.getElementById("sum_total_cash").innerHTML = this.responseText;

                var sumTotalCash = parseFloat(this.responseText); // Convert to a number if it's not already

                // Format the number with commas for thousands separators
                var formattedSum = sumTotalCash.toLocaleString();

                // Set the formatted number as the innerHTML of the element
                document.getElementById("sum_total_cash").innerHTML = formattedSum;

            }
        };
        xmlhttp.open("GET",url,true);
        xmlhttp.send();
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
