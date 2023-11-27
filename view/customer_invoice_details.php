<?php 
$maineg = new  mainClass();
$DBinfo = $maineg->Targeted_information('invoice_details','invoice_id',$_GET['SelCus']);
?>

    <div class="page-title-box">
        <div class="row align-items-center">
            <div class="col-md-8">
                <h6 class="page-title">Invoice Details</h6>
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


    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-body">
                    <div class="row mt-3">
                  <div class="col-lg-12 col-xl-12">
                          <div class="card">
                          <div class="card-body">
                         <!--  <div class="media align-items-center mb-4">
                             <div class="media-body">
                                  <h4 class="mb-0"> View Customer</h4>
                            </div>
                          </div> -->
            

                                         <div class="row">
                            <div class="col-12">
                                <div class="card">
                                    <div class="card-body">
                                        <table id="datatable-buttons" class="table table-striped table-bordered dt-responsive nowrap" style="border-collapse: collapse; border-spacing: 0; width: 100%;">
                                            <thead>
                                                 <?php $det = $DBinfo['invoice_id']?>

                                <h4 class="float-right">Invoice: <span class="text-success"><?php echo $DBinfo['invoice_id']?></span></h4>
                                <br>
                                <div class="float-left mb-4">
                                    <ul >
                                        <li>Customer Name: <b><span><?php echo $DBinfo['customer_name']?></span></b></li>
                                        <li>Address: <b><span><?php echo $DBinfo['address']?></span></b></li>
                                        <li>Phone: <b><span><?php echo $DBinfo['phone']?></span></b></li>
                                    </ul>
                                </div>
                                 <input hidden type="text" name="invoice_no" value="<?php echo $DBinfo['invoice_id']?>">
                                  <tr>
                                    <th>#</th>
                                    <th>Date</th>
                                    <th>Customer</th> 
                                    <th>Item Name</th> 
                                    <th>Qty</th>
                                    <th>Color</th>
                                    <th>Meter</th>
                                    <th>kg</th>
                                    <th>Packet</th>
                                    <th>Item Code</th>
                                    <th>Price</th>
                                    <th>Amount</th>
                                    </tr>
                               </thead>
                            <tbody>
                            <?php 
                            $maineg = new  mainClass();
                            $result = $maineg->GetCeditSallCus1($det);
                            $count = 1; 
      
                            if (!empty($result)) {
                            foreach ($result as $k => $v) { 
                            echo '
                            <tr>
                             <td>'.$count++.'</td>
                             <td >'.$result[$k]["order_date"].'</td>
                             <td>'.$result[$k]["customer_name"].'</td>
                             <td>'.$result[$k]["product_name"].'</td>';

                             if ($result[$k]["qty"] == "") {
                               echo  '<td >0</td>';
                             }else{
                               echo '<td >'.$result[$k]["qty"].'</td>'; 
                             }

                             if (@$result[$k]["color"] == "") {
                               echo  '<td >None</td>';
                             }else{
                               echo '<td >'.@$result[$k]["color"].'</td>'; 
                             }

                             if (@$result[$k]["meter_length"] == "" || @$result[$k]["meter_length"] == "0.00") {
                               echo  '<td>0</td>';
                             }else{
                               echo '<td>'.@$result[$k]["meter_length"].'</td>'; 
                             }

                             if (@$result[$k]["kg_weight"] == "" || @$result[$k]["kg_weight"] == "0.00") {
                               echo  '<td>0</td>';
                             }else{
                               echo '<td>'.@$result[$k]["kg_weight"].'</td>'; 
                             }

                             if ($result[$k]["packet"] == "" || $result[$k]["packet"] == "0.00") {
                               echo  '<td>0</td>';
                             }else{
                               echo '<td>'.$result[$k]["packet"].'</td>'; 
                             } 
                             echo'
                             <td>'.$result[$k]["product_code"].'</td>
                             <td>'.$result[$k]["price"].'</td>
                             <td>'.$result[$k]["total"].'</td>
                             
                    
                            </tr>
                            '; }}?>
                              
                                 
                                            </tbody>
                                            </table>

                                                 <tbody>
                           

                              

                           <?php 
                          $maineg = new mainClass();
                          $myCart = $maineg->select_checkiNVOICEtO($DBinfo['invoice_id']);
                          $item_quantity = 0;
                          $item_price = 0;
                          $item_discount = 0;
                          $total_discount = 0;
                          $Discount = 0;
                           if(!empty($myCart)){
                              foreach($myCart as $item){
                            
                                $item_price += ((int)$item['total']);
                              }
                           }
                        ?>

    
                            </tbody>
                                             <table class="mt-4 float-right" id="tabSum">
                                                <tr>
                <td class="bg-light">Balance : </td>
                <td><b class="form-control btn btn-info" id="sum_total_cash" ><?php  echo $result[$k]["due"];?></b></td>     
                <td>&nbsp;</td>
                
            
                <td class="bg-light">Paid : </td>
                <td><b class="form-control btn btn-primary" id="sum_total_cash" ><?php echo  $result[$k]["paid"];?></b></td>     
                <td>&nbsp;</td>
                
          
                <td class="bg-light">Total : </td>
                <td><b class="form-control btn btn-success" id="sum_total_cash" ><?php  echo $item_price;?></b></td>     
                <td>&nbsp;</td>
                
            </tr>

                                            </table>
                                       </div> 
                                    </div>
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
    var loadFile = function(event) {
        var output = document.getElementById('output');
        output.src = URL.createObjectURL(event.target.files[0]);
        output.onload = function() {
            URL.revokeObjectURL(output.src) // free memory
        }
    };
</script>
           