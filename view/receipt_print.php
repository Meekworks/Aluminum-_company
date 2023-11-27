        <?php 
            $maineg = new  mainClass();
            $DBinfo = $maineg->Targeted_information('invoice_details','invoice_id',$_GET['PrintDeatails']);
             $DBinfo3 = $maineg->Targeted_informationlast('receiveable','transaction_id',$DBinfo['invoice_id']);
            
            ?>
      
    <div class="page-title-box">
                            <div class="row align-items-center">
                                <div class="col-md-8">
                                    <h6 class="page-title">Receive Payment</h6>
                                </div>
                                <div class="col-md-4">
                                    <div class="float-end d-none d-md-block">
                                        <div class="dropdown">
                                            <a href="?action=ReceivePaymentall" class="btn btn-primary btn-sm waves-effect waves-light"><i class="fas fa-arrow-circle-left  fa-sm text-white"></i> Back</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>


                        <div class="row">
                            <div class="col-12">
                                <div class="card">
                                    <div class="card-body">
                                        <table  class="table table-striped table-bordered p-4 dt-responsive nowrap" style="border-collapse: collapse; border-spacing: 0; width: 100%;">

                                            <tbody><tr>
                            <td></td>
                            <td class="container" width="600">
                                <div class="content">
                                    <table class="main" width="100%" cellpadding="0" cellspacing="0">
                                        <tbody><tr>
                                            <td class="content-wrap aligncenter">
                                                <table width="100%" cellpadding="0" cellspacing="0">
                                                    <tbody><tr>
                                                        <td class="content-block">
                                                            <h2>Thanks for Your Patronage</h2>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td class="content-block">
                                                            <table class="invoice p-4">
                                                                <tbody><tr>
                                                                    <td> Name:&nbsp;&nbsp; <?php echo $DBinfo['customer_name']?><br>Invoice: &nbsp;&nbsp;<?php echo $DBinfo['invoice_id']?><br>Date:&nbsp;&nbsp;<?php echo $DBinfo3['datet']?> <br>Phone:&nbsp;&nbsp; <?php echo $DBinfo['phone']?> </td>
                                                                    
                                                                </tr>
                                                                <tr>
                                                                    <td>
                                                                        <table class="invoice-items" cellpadding="0" cellspacing="0">
                                                                            <tbody>
                                                                            <tr>
                                                                                <td>Previous Bal:</td>
                                                                                <td class="alignright">
                                                                                <?php $maineg = new mainClass();
                                                                                $result = $maineg->Get_invoice_grand_toal($DBinfo['invoice_id']);?>
                                                                                </td>
                                                                            </tr>
                                                                            <tr>
                                                                                <td>Amount Paid:</td>
                                                                                <td class="alignright"><?php echo number_format($DBinfo['paid'])?></td>
                                                                            </tr>
                                                                            <!--<tr>-->
                                                                            <!--    <td>Due Balance:</td>-->
                                                                            <!--    <td class="alignright"><?php //echo number_format($DBinfo['due'])?></td>-->
                                                                            <!--</tr>-->
                                                                            <tr class="total">
                                                                                <td class="" width="80%">Due Balance: &nbsp;&nbsp;&nbsp;</td>
                                                                                <td class="alignright "><?php echo number_format($DBinfo['due'])?></td>
                                                                            </tr>
                                                                        </tbody></table>
                                                                    </td>
                                                                </tr>
                                                            </tbody></table>
                                                        </td>
                                                    </tr>
                                                   
                                                    <tr>
                                                        <td class="content-block">
                                                            CP ALUM GLOBAL & IMPAX, LTD. <br>   KM 3, Asaba/Ibusa Express, Asaba
                                                        </td>
                                                    </tr>

                                                      <tr>
                                                        <td class="content-block">
                                                           <button typ="submit" class="btn  btn-danger btn-sm ml-3" name="b_print" class="ipt" onclick="window.print()">
                                                          <i class="fas fa-print"></i> Print
                                                      </button>
                                                        </td>
                                                    </tr> 
                                                </tbody></table>
                                            </td>
                                        </tr>
                                    </tbody></table>
                                    <div class="footer">
                                        <table width="100%">
                                            <tbody><tr>
                                                <td class="aligncenter content-block ee">Questions? Email <a href="mailto:">Info@cpalumimpex.com</a></td>
                                            </tr>
                                        </tbody></table>
                                    </div></div>
                            </td>
                            <td></td>
                        </tr>
                    </tbody>
                                            
                                        </table>
                                    </div>
                                </div>
                            </div> <!-- end col -->
                        </div> <!-- end row -->


                
<script>
jQuery.noConflict()(function ($) { // this was missing for me
    // $(document).ready(function() { 

    //    other code here....

    // });

    $(document).ready(function() {
      $('#dataTable').DataTable({

        //"select":true,
        // "searching": false,
        // "ordering": false
      });

    });
});
Call the dataTables jQuery plugin

// $(document).ready( function () {
//     $('#table_id').DataTable();
// } );

<script type="text/javascript">
   function confirmationDelete(anchor)
{
   var conf = confirm('Are you sure want to delete this Staff?');
   if(conf)
      // window.location=anchor.attr("href");
      //   // window.location='?action=Catery';
      this.form.submit();
}
</script>


<style type="text/css">
    ------------------------------------- */
* {
    margin: 0;
    padding: 0;
    font-family: "Helvetica Neue", "Helvetica", Helvetica, Arial, sans-serif;
    box-sizing: border-box;
    font-size: 14px;
}

img {
    max-width: 100%;
}

body {
    -webkit-font-smoothing: antialiased;
    -webkit-text-size-adjust: none;
    width: 100% !important;
    height: 100%;
    line-height: 1.6;
}

/* Let's make sure all tables have defaults */
table td {
    vertical-align: top;
}

/* -------------------------------------
    BODY & CONTAINER
------------------------------------- */
body {
    background-color: #f6f6f6;
}

.body-wrap {
    background-color: #f6f6f6;
    width: 100%;
}

.container {
    display: block !important;
    max-width: 600px !important;
    margin: 0 auto !important;
    /* makes it centered */
    clear: both !important;
}

.content {
    max-width: 600px;
    margin: 0 auto;
    display: block;
    padding: 20px;
}

/* -------------------------------------
    HEADER, FOOTER, MAIN
------------------------------------- */
.main {
    background: #fff;
    border: 1px solid #e9e9e9;
    border-radius: 3px;
}

.content-wrap {
    padding: 20px;
}

.content-block {
    padding: 0 0 20px;
}

.header {
    width: 100%;
    margin-bottom: 20px;
}

.footer {
    width: 100%;
    clear: both;
    color: #999;
    padding: 20px;
}
.footer a {
    color: #999;
}
.footer p, .footer a, .footer unsubscribe, .footer td {
    font-size: 12px;
}

/* -------------------------------------
    TYPOGRAPHY
------------------------------------- */
h1, h2, h3 {
    font-family: "Helvetica Neue", Helvetica, Arial, "Lucida Grande", sans-serif;
    color: #000;
    margin: 40px 0 0;
    line-height: 1.2;
    font-weight: 400;
}

h1 {
    font-size: 32px;
    font-weight: 500;
}

h2 {
    font-size: 24px;
}

h3 {
    font-size: 18px;
}

h4 {
    font-size: 14px;
    font-weight: 600;
}

p, ul, ol {
    margin-bottom: 10px;
    font-weight: normal;
}
p li, ul li, ol li {
    margin-left: 5px;
    list-style-position: inside;
}

/* -------------------------------------
    LINKS & BUTTONS
------------------------------------- */
a {
    color: #1ab394;
    text-decoration: none;
}

/*.btn-primary {
    text-decoration: none;
    color: #FFF;
    background-color: #1ab394;
    border: solid #1ab394;
    border-width: 5px 10px;
    line-height: 2;
    font-weight: bold;
    text-align: center;
    cursor: pointer;
    display: inline-block;
    border-radius: 5px;
    text-transform: capitalize;
}*/

/* -------------------------------------
    OTHER STYLES THAT MIGHT BE USEFUL
------------------------------------- */
.last {
    margin-bottom: 0;
}

.first {
    margin-top: 0;
}

.aligncenter {
    text-align: center;
}

.alignright {
    text-align: right;
}

.alignleft {
    text-align: left;
}

.clear {
    clear: both;
}

/* -------------------------------------
    ALERTS
    Change the class depending on warning email, good email or bad email
------------------------------------- */
.alert {
    font-size: 16px;
    color: #fff;
    font-weight: 500;
    padding: 20px;
    text-align: center;
    border-radius: 3px 3px 0 0;
}
.alert a {
    color: #fff;
    text-decoration: none;
    font-weight: 500;
    font-size: 16px;
}
.alert.alert-warning {
    background: #f8ac59;
}
.alert.alert-bad {
    background: #ed5565;
}
.alert.alert-good {
    background: #1ab394;
}

/* -------------------------------------
    INVOICE
    Styles for the billing table
------------------------------------- */
.invoice {
    margin: 40px auto;
    text-align: left;
    width: 90%;
}
.invoice td {
    padding: 5px 0;
}
.invoice .invoice-items {
    width: 100%;
}
.invoice .invoice-items td {
    border-top: #eee 1px solid;
}
.invoice .invoice-items .total td {
    border-top: 2px solid #333;
    border-bottom: 2px solid #333;
    font-weight: 700;
}

/* -------------------------------------
    RESPONSIVE AND MOBILE FRIENDLY STYLES
------------------------------------- */
@media only screen and (max-width: 640px) {
    h1, h2, h3, h4 {
        font-weight: 600 !important;
        margin: 20px 0 5px !important;
    }

    h1 {
        font-size: 22px !important;
    }

    h2 {
        font-size: 18px !important;
    }

    h3 {
        font-size: 16px !important;
    }

    .container {
        width: 100% !important;
    }

    .content, .content-wrap {
        padding: 10px !important;
    }

    .invoice {
        width: 100% !important;
    }
}

</style>