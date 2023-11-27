     <?php 
    $maineg = new  mainClass();
    $DBinfo = $maineg->Targeted_information('invoice_details','customer',$_GET['CustId']);
    // $DBinfo["customer"] = $CustomerID;
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
                                        <table id="datatable-buttons" class="table table-striped table-bordered dt-responsive nowrap" style="border-collapse: collapse; border-spacing: 0; width: 100%;">
                                            <thead>
                                                <tr>
                                                 <th>#</th>
                                                <th>datex</th> 
                                                <th>Customer Name</th>
                                                <th>Phone</th>
                                                <th>Invoice ID</th>
                                                <th> Amounnt</th>
                                                <th>Action</th>
                                                </tr>
                                            </thead>

                                            <tbody>
                                             <?php 
                                                $maineg = new  mainClass();
                                                $result = $maineg->GetreceiveDue($DBinfo["customer"]);
                                                $count = 1; 
                                                
                                                if (!empty($result)) {
                                                foreach ($result as $k => $v) { 
                                                echo '
                                                <tr>
                                                 <td>'.$count++.'</td>
                                                 <td>'.$result[$k]["order_date"]." <br/>".$result[$k]["time_created_at"].'</td>
                                                 <td>'.$result[$k]["customer_name"].'</td>
                                                  <td>'.$result[$k]["phone"].'</td>
                                                 <td>'.$result[$k]["invoice_id"].'</td>
                                                 <td>'.number_format($result[$k]["due"]).'</td>
                                                 <td><a class="btn btn-primary btn-sm btn-responsive text-white" href="?action=DueInvoice&&PayDueDeatails='.$result[$k]["invoice_id"].'">Pay Balane</a></td>
                                                  
                                                </tr>
                                                '; }}?>
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