
<?php 
    $maineg = new  mainClass();
    $DBinfo = $maineg->Targeted_information('invoice_details','invoice_id',$_GET['SelQuote']);
?>
 
<div class="page-title-box">
    <div class="row align-items-center">
        <div class="col-md-8">
            <h6 class="page-title">Invoice Details</h6>
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
                            <div class="col-12">
                                <div class="card">
                                    <div class="card-body">
        
                                        <div class="row"><?php $det = $DBinfo['invoice_id']?>
                                            <div class="col-12">
                                                <div class="invoice-title">
                                                    <h4 class="float-end font-size-16"><strong>Order # <?php echo $DBinfo['invoice_id']?></strong></h4>
                                                    <!-- <h3>
                                                        <img src="assets/images/logo-sm.png" alt="logo" height="24"/>
                                                    </h3> -->
                                                </div>
                                                <!-- <hr> -->
                                                <div class="row">
                                                    <div class="col-6">
                                                        <address>
                                                            <strong>Billed To:</strong><br>
                                                            Name: <?php echo $DBinfo['customer_name']?><br>
                                                            Address: <?php echo $DBinfo['address']?><br>
                                                            Phone: <?php echo $DBinfo['phone']?><br>
                                                            <!-- Springfield, ST 54321 -->
                                                        </address>
                                                    </div>
                                                    
                                                </div>
                                               
                                            </div>
                                        </div>
        
                                        <div class="row">
                                            <div class="col-12">
                                                <div>
                                                    <div class="p-2">
                                                        <!-- <h3 class="font-size-16"><strong>Order summary</strong></h3> -->
                                                    </div>
                                                    <div class="">
                                                        <div class="table-responsive">
                                                            <table class="table">
                                                                <thead>
                                                                <tr>
                                                                    <td><strong>SN</strong></td>
                                                                    <td ><strong>Date</strong></td>
                                                                    <td><strong>Customer</strong></td>
                                                                    <td><strong>Item Name</strong></td>
                                                                    <td><strong>Qty</strong></td>
                                                                    <td><strong>Color</strong></td>
                                                                    <td><strong>Meter</strong></td>
                                                                    <td><strong>kg</strong></td>
                                                                    <td><strong>Packet</strong></td>
                                                                    <td><strong>Item Code</strong></td>
                                                                    <td><strong>Price</strong></td>
                                                                    <td><strong>Amount</strong></td>
                                                                </tr>
                                                                </thead>
                                                                <tbody>
                                                                <!-- foreach ($order->lineItems as $line) or some such thing here -->
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
                             <td>'.number_format($result[$k]["total"]).'</td>
                             
                    
                            </tr>
                            '; }}?>

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

                                                       
                                                       
                                                                <tr>
                                                                    <td class="no-line"></td>
                                                                    <td class="no-line"></td>
                                                                    <td class="no-line text-center">
                                                                         <td class="no-line"></td>
                                                                    <td class="no-line"></td>
                                                                    <td class="no-line text-center">
                                                                         <td class="no-line"></td>
                                                                    <td class="no-line"></td>
                                                                    <td class="no-line text-center">
                                                                    <td class="no-line"></td>
                                                                      <td class="no-line">   <strong>Total</strong></td>
                                                                    <td class="no-line text-end"><h4 class="m-0"><?php  echo number_format($item_price);?></h4></td>
                                                                </tr>
                                                                </tbody>
                                                            </table>
                                                        </div>
        
                                                        <div class="d-print-none">
                                                            <div class="float-end">
                                                                <!-- <a href="javascript:window.print()" class="btn btn-success waves-effect waves-light"><i class="fa fa-print"></i></a> -->
                                                                <!-- <a href="#" class="btn btn-primary waves-effect waves-light">Send</a> -->
                                                                <a href="?action=getInvoice&&replyQ=<?php echo $DBinfo['invoice_id']?>&&<?php echo $DBinfo['invoice_id']?>" class="btn btn-primary waves-effect waves-light" name="SendQuote" value="Send Quote">View Receipt</a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
        
                                            </div>
                                        </div>