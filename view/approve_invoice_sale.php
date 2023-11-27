         
<?php 
$maineg = new  mainClass();
$DBinfo = $maineg->Targeted_information('invoice_details','invoice_id',$_GET['SalesDeatails']);
 $DBinfo1 = $maineg->Targeted_information('customer_table','customer_code',$DBinfo["customer"]);
  $DBinfo2 = $maineg->Targeted_information('customer_ledger','account_id',$DBinfo["customer"]);
$from = "₦";
?>
    <div class="page-title-box">
                            <div class="row align-items-center">
                                <div class="col-md-8">
                                    <h6 class="page-title">APPROVE</h6>
                                </div>
                                <div class="col-md-4">
                                    <div class="float-end d-none d-md-block">
                                        <div class="dropdown">
                                            <a href="?action=Invoice" class="btn btn-primary waves-effect waves-light"><i class="fas fa-arrow-circle-left  fa-sm  text-white"></i> Back</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>


                        <div class="row">
                            <form method="post">
                            <div class="col-12">
                                <div class="card">
                                    <div class="card-body">
                                         <?php $det = $DBinfo['invoice_id']?>

                                                 <div class="float-right">
                                        <ul>
                                              <?php 
                                            if($DBinfo['customer_name'] == ""){
                                                 echo ' <li>  Name: <b><span>No Name</span></b></li>';
                                            }else{
                                                echo ' <li>  Name: <b><span>'.$DBinfo['customer_name'].'</span></b></li>';
                                            }?>
                                           
                                            <li>Sales Rep: <b> <span><?php echo $DBinfo['sales_rep']?></span></b></li>
                        
                                              <?php 
                                            if($DBinfo['customer'] == "" || $DBinfo['customer'] == null){
                                                 echo ' <li>  Old Balance: <b><span>No Balance</span></b></li>';
                                            }else{
                                                echo ' <li> Old Balance: <b><span>'.@$DBinfo2['balance'].'</span></b></li>';
                                            }?>
                                        </ul>
                                      
                                </div>

                                 <h2>Invoice: <span class="text-success"><?php echo $DBinfo['invoice_id']?></span></h2>
                                 <input hidden type="text" name="invoice_no" value="<?php echo $DBinfo['invoice_id']?>">
                                  <br>
                                <table  class="table table-striped table-bordered dt-responsive nowrap" style="border-collapse: collapse; border-spacing: 0; width: 100%;">
                                            <thead>


                                                 <tr>
                                                <th>#</th>
                                                <th>Item Name</th> 
                                                <th>Category</th>
                                                <th>Qty</th>
                                                <th>KG</th>
                                                <th>Packet</th>
                                                <th>Guage</th>
                                                <th>Meter</th>
                                                <th>Color</th>
                                                <th>Price</th>
                                                <th>Total</th>
                                                 </tr>
                                            </thead>


                                            <tbody>
                                            <?php 
                            $maineg = new  mainClass();
                            $result = $maineg->GetCeditSallCusapprove($det);
                            $count = 1; 
      
                            if (!empty($result)) {
                            foreach ($result as $k => $v) { 
                            echo '
                            <tr>
                             <td>'.$count++.'</td>
                             <td>'.$result[$k]["product_name"].'</td>
                             <td>'.$result[$k]["category"].'</td>';
                               if ($result[$k]["qty"] == "") {
                               echo  '<td>0</td>';
                             }else{
                               echo '<td>'.$result[$k]["qty"].'</td>'; 
                             }

                             if ($result[$k]["kg_weight"] == "" ) {
                               echo  '<td>0</td>';
                             }else{
                               echo '<td>'.$result[$k]["kg_weight"].'</td>'; 
                             }


                             if ($result[$k]["packet"] == "" ) {
                               echo  '<td>0</td>';
                             }else{
                               echo '<td>'.$result[$k]["packet"].'</td>'; 
                             }  

                               if ($result[$k]["guage"] == "") {
                               echo  '<td>0</td>';
                             }else{
                               echo '<td>'.$result[$k]["guage"].'</td>'; 
                             }

                               if ($result[$k]["meter_length"] == "") {
                               echo  '<td>0</td>';
                             }else{
                               echo '<td>'.$result[$k]["meter_length"].'</td>'; 
                             }

                              if ($result[$k]["color"] == "") {
                               echo  '<td>None</td>';
                             }else{
                               echo '<td>'.$result[$k]["color"].'</td>'; 
                             }
                             echo'
                             <td>'.$result[$k]["price"].'</td>
                             <td>'.$result[$k]["total"].'</td>
                            </tr>
                            '; }}?>

                            <br><br>

                            
                              <?php 
                              $maineg = new mainClass();
                              $myCart = $maineg->select_checkcREDITapp($det);
                              $item_quantity = 0;
                              $item_price = 0;
                              $item_discount = 0;
                              $total_discount = 0;
                              $Discount = 0;
                               if(!empty($myCart)){
                                  foreach($myCart as $item){
                                
                                    $item_price += ((int)$item['total']);
                                    // $item_quantity +=  ((int)$item['qty']);
                                  }
                               }
                              ?>

                        </tbody>
                </table>





                <table>
        <tbody>

      <div data-repeater-list="group-a">
             <div class="row" data-repeater-item>
                                                 
                                                  

        <div  class="mb-3 col-lg-3">
            <label class="form-label" for="email">Total Amount:</label>
            <span class="text-success"><h4> ₦<?php  echo number_format($item_price);?></h4></span>
            <input type="text" hidden required  class="form-control" name="grand_total" value="<?php  echo $item_price;?>">
        </div>

        <div  class="mb-3 col-lg-2">
            <label class="form-label" for="email">New Balance</label>
            <input readonly type="text" value="<?php echo $item_price - $myCart[$k]['paid'];?>" class="form-control" name="amount_paid" >
        </div>

        <div  class="mb-3 col-lg-3">
            <label class="form-label" for="email">Amount Paid</label>
            <input readonly type="text" value="<?php echo $myCart[$k]['paid'] ;?>" class="form-control" name="amount_paid" >
        </div>


         <div  class="mb-3 col-lg-2">
            <label class="form-label text-white" for="email">BUTTON</label>
              <?php

                if($DBinfo['approve_sale'] == "Approved"){
                    echo '<span class="text-white">approve<button disabled class="btn btn-success btn-block form-control mt-4">Approved</button></span></span>';
                }else{
                    echo '<span class="text-white">approve<button  name="appSales" type="submit" class="btn btn-primary btn-block form-control">Approve</button></span>';
                }   

                ?>
                 <input type="text" hidden name="user" value="<?php echo $Admin['username']; ?>">
        </div>

                </div>
            </form>
        </div>
    </tbody>
</table>




                                    </div>
                                </div>
                            </div> <!-- end col -->
                        </div> <!-- end row -->


                

                        <script type="text/javascript">
                           function confirmationDelete(anchor)
                        {
                           var conf = confirm('Are you sure want to delete this record?');
                           if(conf)
                              // window.location=anchor.attr("href");
                              //   // window.location='?action=Catery';
                              this.form.submit();
                        }
                        </script>