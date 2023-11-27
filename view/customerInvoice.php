    <div class="page-title-box">
                            <div class="row align-items-center">
                                <div class="col-md-8">
                                    <h6 class="page-title">Customer Invoice</h6>
                                </div>

                                 <div class="col-md-4">
                <div class="float-end d-none d-md-block">
                    <div class="dropdown">
                        <a href="?action=ViewCusL" class="btn btn-primary btn-sm waves-effect waves-light"><i class="fas fa-arrow-circle-left fa-sm  text-white"></i> Back</a>
                    </div>
                </div>
            </div>
                               
                            </div>

                           
                        </div>


                          <div data-repeater-list="group-a">
             <div class="row" data-repeater-item>
                                                 
                                                  

        <div  class="mb-3 col-lg-4">
            <!-- <label class="form-label" for="email">From</label> -->
            
                                 <input type="date" name="fromdate"  class="form-control" id="fromdate">
        </div>

        <div  class="mb-3 col-lg-4">
            <!-- <label class="form-label" for="email">To</label> -->
             <input type="date" class="form-control" name="todate" id="todate">
            <input type="text" hidden class="form-control" name="cust_id" id="cust_id" value="<?php echo $_GET['acctno']; ?>">
        </div>

        <div  class="mb-3 col-lg-4">
            <!-- <label class="form-label" for="email">Amount_Paying</label> -->
             <input type="submit" class="btn btn-primary btn-block form-control" value="Search" id="ValNO" onclick="mesansOFidentifacartion_change();getMeSalesTotal();getMeSalesTotalcash();" >
        </div>



    </div>

</div>


                     

                     <br><br>          
                 <div class="row" id="div_print">  
                <h5 class="mx-auto">
                    <!-- <span>Sales Report For</span> -->
                    <b>
                    <span id="start"></span>
                    <!-- <span class="text-danger">&nbsp;&nbsp;&nbsp;-To-&nbsp;</span> -->
                    <span id="end"></span>
                </b>
                </h5>
                <div class="table-responsive">
                                           <table class="table table-xs table-striped table-bordered mb-0">
                                              <thead>
                                                    <tr>
                                                   <th>SN</th>
                                                     <th>Date</th>
                                                     <th>Time</th>
                                                     <th>Invoice</th>
                                                      <th>Product </th> 
                                                     <th>Price</th> 
                                                     <th>Total</th> 
                                                     <th>Cost</th>
                                                    
                                                     <th>##</th>
                                                    </tr>
                                               </thead>
                                            <tbody id="tblBody">
                                 
                                            </tbody>
                                            </table>

                                             

   
    
    


 <table class="mt-4 float-left" >
            <tr>
                <!-- <td colspan="2"> <input type="text" name="email" id="disnon" class="form-control" placeholder="Enter Email"> </td> -->
                <!-- <td> <input type="submit" name="action" class="btn btn-danger mx-auto " value="PDF Send"></td>      -->
                <td>&nbsp;</td>
                 <td class="bg-light"><?php //echo $message; ?></td>
            </tr>
        </table>
 </form>

                                       </div> 
                                    </div>
 </div>


                

<script type="text/javascript"> 

function startDate() {
var fromdate = document.getElementById("fromdate").value;
const d = new Date(fromdate);
let getdate = d.toDateString();
var all =  document.getElementById("start").innerHTML = getdate;
}

function End_date() {
var todate = document.getElementById("todate").value;
const d = new Date(todate);
let getdate = d.toDateString();
var all =  document.getElementById("end").innerHTML = getdate;
}

    // function printdiv(printpage) {
    //     var headstr = "<html><head><title></title></head><body>";
    //     var footstr = "</body>";
    //     var newstr = document.all.item(printpage).innerHTML;
    //     var oldstr = document.body.innerHTML;
    //     document.body.innerHTML = headstr + newstr + footstr;
    //     window.print();
    //     document.body.innerHTML = oldstr;
    //     return false;
    // }

</script>


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
    var todate = document.getElementById("todate").value;cust_id
    var cust_id = document.getElementById("cust_id").value;
    var tr = fromdate+"*"+todate+"*"+cust_id;
    var url = "Control/ajaxController.php?custInv="+tr;

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
    var url = "Control/ajaxController.php?gettotal="+tr;
    xmlhttp.onreadystatechange = function() {
            if (this.readyState == 4 && this.status == 200) {
                 document.getElementById("sum_total_").innerHTML = this.responseText;
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
    var url = "Control/ajaxController.php?gettotalcash="+tr;
    xmlhttp.onreadystatechange = function() {
            if (this.readyState == 4 && this.status == 200) {
                 document.getElementById("sum_total_cash").innerHTML =this.responseText;
            }
        };
        xmlhttp.open("GET",url,true);
        xmlhttp.send();
}
      
</script>