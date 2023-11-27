    <div class="page-title-box">
                            <div class="row align-items-center">
                                <div class="col-md-8">
                                    <h6 class="page-title">View Customer Ledger</h6>
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
                                                <th>Name </th>
                                                <th>Phone</th>
                                                <th>Email</th>
                                                <th>Paid</th>
                                                <th>Debit</th>
                                                <th>Balance</th>
                                                </tr>
                                            </thead>


                                            <tbody>
                                             <?php 
                                                    $maineg = new  mainClass();
                                                    $result = $maineg->allCustomerDebit();
                                                    $count = 1; 
                          
                                                if (!empty($result)) {
                                                foreach ($result as $k => $v) { 
                                                    $DBinfo = $maineg->Targeted_information('customer_table','customer_code',$result[$k]["account_id"]);
                                                echo '
                                               
                                                    <tr>
                                                     <td>'.$count++.'</td>
                                                     <td><a href="?action=CustInvoice&&acctno='.$result[$k]["account_id"].'" style="text-decoration:none;">'.@$DBinfo['name'].'</a></td>
                                                     <td><a href="?action=CustInvoice&&acctno='.$result[$k]["account_id"].'" style="text-decoration:none;">'.@$DBinfo['phone'].'</a></td>
                                                     <td><a href="?action=CustInvoice&&acctno='.$result[$k]["account_id"].'" style="text-decoration:none;">'.@$DBinfo['email'].'</a></td>
                                                     <td><a href="?action=CustInvoice&&acctno='.$result[$k]["account_id"].'" style="text-decoration:none;">'.number_format($result[$k]["allcredit"],2).'</a></td>
                                                     <td><a href="?action=CustInvoice&&acctno='.$result[$k]["account_id"].'" style="text-decoration:none;">'.number_format($result[$k]["alldebit"],2).'</a></td>';

                                                       if($result[$k]["allbalance"] <= 0 ){

                                                        $newcurrentBalance = '0.00';

                                                           echo '
                                                            <td><a href="?action=CustInvoice&&acctno='.$result[$k]["account_id"].'" style="text-decoration:none;">'.$newcurrentBalance.'</a></td>
                                                           ';
                                                       }else{
                                                         echo '
                                                          <td><a href="?action=CustInvoice&&acctno='.$result[$k]["account_id"].'" style="text-decoration:none;">'.number_format($result[$k]["allbalance"],2).'</a></td>
                                                         ';
                                                       }

                                                    echo '
                                                    </tr>                                       
                                                '; }}?>
                                            </tbody>
                                        </table>

                                    </div>
                                </div>
                            </div> <!-- end col -->
                        </div> <!-- end row -->


                

<script type="text/javascript">
   function confirmationDelete(anchor)
{
   var conf = confirm('Are you sure want to delete this Vendor?');
   if(conf)
      // window.location=anchor.attr("href");
      //   // window.location='?action=Catery';
      this.form.submit();
}
  </script>