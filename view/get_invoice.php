 <?php
            $maineg = new mainClass();
            @$resultset= $maineg->Fetch_Priviledge_Assigned('priviledges_assigned',$_SESSION['Admin']);
            @$DBinfo33 = $maineg->Targeted_information('admin','username',$_SESSION['Admin']);
        ?>
<div class="page-title-box">
    <div class="row align-items-center">
        <div class="col-md-8">
            <h6 class="page-title">Invoice</h6>
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

  <?php 
            $maineg = new  mainClass();
            $DBinfo = $maineg->Targeted_information('invoice_details','invoice_id',$_GET['replyQ']);
            $DBinfo1 = $maineg->Targeted_information('customer_ledger','account_id',$DBinfo["customer"]);
            $count = 1;
            // $del = 1500;


            ?>


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

        $peroduct = $item['product_name'];
        $total = $item['total'];

        @$due = (int)$item['due'];
        @$paid = (int)$item['paid'];
    
        $item_price += ((int)$item['total']);


      }
   }
?>


                         <?php 
                            @$total_balnce = $DBinfo1['balance'] + $duee;
                            @$customer_msg =  'Hi, Dear '.$DBinfo['customer_name'].' Thank You for Your Purchase is'
                           .number_format($item_price).', Current Balance :'.number_format($duee).'. Old balnce: '.$DBinfo1['balance'].', Total Balance: '.number_format($total_balnce).', Other Details is on the Invoice';
                         ?>
          


                        <div class="row">
                            <div class="col-12">
                                <div class="card">
                                    <div class="card-body">
        
                                        <div class="row">
                                            <div class="col-12">
                                                <div class="invoice-title"><?php $det = $DBinfo['invoice_id']?>
                                                    <h4 class="float-end font-size-16"><strong>Order # <?php echo $DBinfo['invoice_id']?></strong></h4>
                                                    <h3>
                                                        <img src="assets/images/logo-sm.png" alt="logo" height="24"/>
                                                    </h3>
                                                </div>
                                                <hr>
                                                <div class="row">
                                                    <div class="col-6">
                                                        <address>
                                                            <strong>Billed To:</strong><br>
                                                            Name: </i><?php echo $DBinfo['customer_name']?><br>
                                                            Address: </i><?php echo $DBinfo['address']?><br>
                                                            Phone: </i><?php echo $DBinfo['phone']?><br>
                                                            <!-- Springfield, ST 54321 -->
                                                        </address>
                                                    </div>
                                                    <div class="col-6 text-end">
                                                        <address>
                                                            <strong>Shipped To:</strong><br>
                                                            Kenny Rigdon<br>
                                                            1234 Main<br>
                                                            Apt. 4B<br>
                                                            Springfield, ST 54321
                                                        </address>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-6 mt-4">
                                                        <address>
                                                            <strong>Payment Method:</strong><br>
                                                            Visa ending **** 4242<br>
                                                            jsmith@email.com
                                                        </address>
                                                    </div>
                                                    <div class="col-6 mt-4 text-end">
                                                        <address>
                                                            <strong>Order Date:</strong><br>
                                                            <?php echo $DBinfo['order_date']?><br><br>
                                                        </address>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
        
                                        <div class="row">
                                            <div class="col-12">
                                                <div>
                                                    <div class="p-2">
                                                        <h3 class="font-size-16"><strong>Invoice summary</strong></h3>
                                                    </div>
                                                    <div class="">
                                                        <div class="table-responsive">
                                                            <table class="table">
                                                                <thead>
                                                                <tr>
                                                                    <td><strong>SN</strong></td>
                                                                    <td ><strong>Item</strong></td>
                                                                    <td class="text-center"><strong>Color</strong></td>
                                                                    <td class="text-center"><strong>Kg</strong></td>
                                                                    <td><strong>Packet</strong></td>
                                                                    <td><strong>Qty</strong></td>
                                                                    <td><strong>Meter</strong></td>
                                                                    <td><strong>Guage</strong></td>
                                                                    <td><strong>Price</strong></td>
                                                                    <td><strong>Amount</strong></td>
                                                                </tr>
                                                                </thead>
                                                                <tbody>
                                                                <!-- foreach ($order->lineItems as $line) or some such thing here -->
                                                                <?php 
                                                                      $maineg = new mainClass();
                                                                      $result = $maineg->fetch_Invoice($_GET['replyQ']);
                                                                      $count = 1;
                                                                        if(!empty($result)){
                                                                            foreach ($result as $k => $v) {
                                                                        ?>
                                                                        <tr>
                                                                        <td width="20px" ><?php echo $count++;?></td>
                                                                        <td><?php echo $result[$k]['product_name']?></td>
                                                                        <td><?php echo $result[$k]['color']?> </td>
                                                                             <?php
                                                                                 if (@$result[$k]["kg_weight"] == "") {
                                                                           echo  '<td>0</td>';
                                                                         }else{
                                                                           echo '<td>'.@$result[$k]["kg_weight"].'</td>'; 
                                                                         }
                                                                         ?>

                                                                          <?php
                                                                                 if (@$result[$k]["packet"] == "") {
                                                                           echo  '<td>0</td>';
                                                                         }else{
                                                                           echo '<td>'.@$result[$k]["packet"].'</td>'; 
                                                                         }
                                                                         ?>
                                                                            
                                                                            
                                                                            <?php
                                                                                 if (@$result[$k]["qty"] == "") {
                                                                           echo  '<td>0</td>';
                                                                         }else{
                                                                           echo '<td>'.@$result[$k]["qty"].'</td>'; 
                                                                         }
                                                                         ?>

                                                                           <?php
                                                                                 if (@$result[$k]["meter_length"] == "") {
                                                                           echo  '<td>0</td>';
                                                                         }else{
                                                                           echo '<td>'.@$result[$k]["meter_length"].'</td>'; 
                                                                         }
                                                                         ?>

                                                                          <?php
                                                                                 if (@$result[$k]["guage"] == "") {
                                                                           echo  '<td>0</td>';
                                                                         }else{
                                                                           echo '<td>'.@$result[$k]["guage"].'</td>'; 
                                                                         }
                                                                         ?>
                                                                            
                                                                            <td><?php echo number_format(@$result[$k]['price']);?></td>
                                                                            <td><?php echo number_format($result[$k]['total']);?></td>
                                                                        </tr>
                                                                            <?php }}?>

                                                       
                                                                <tr>
                                                                    <td class="no-line text-center">
                                                                    <td class="no-line"></td>
                                                                    <td class="no-line"></td>
                                                                    <td class="no-line text-center">
                                                                    <td class="no-line"></td>
                                                                    <td class="no-line"></td>
                                                                    <td class="no-line text-center">
                                                                    <td class="no-line"></td>
                                                                    <td class="no-line"><strong>Amount Paid:</strong></td>
                                                                    <td class="thick-line text-end">₦<?php echo number_format(@$paid);?></td>
                                                                </tr>

                                                                <tr>
                                                                    <td class="no-line text-center">
                                                                    <td class="no-line"></td>
                                                                    <td class="no-line"></td>
                                                                    <td class="no-line text-center">
                                                                    <td class="no-line"></td>
                                                                    <td class="no-line"></td>
                                                                    <td class="no-line text-center">
                                                                    <td class="no-line"></td>
                                                                       <td class="no-line">     <strong>Balance:</strong></td>
                                                                    <td class="no-line text-end">₦<?php echo number_format(@$due);?></td>
                                                                </tr> 

                                                                <tr>
                                                                    <td class="no-line text-center">
                                                                    <td class="no-line"></td>
                                                                    <td class="no-line"></td>
                                                                    <td class="no-line text-center">
                                                                    <td class="no-line"></td>
                                                                    <td class="no-line"></td>
                                                                    <td class="no-line text-center">
                                                                    <td class="no-line"></td>
                                                                    <td class="no-line">   <strong>Total</strong></td>
                                                                    <td class="no-line text-end"><h4 class="m-0">₦<?php  echo number_format($item_price);?></h4></td>
                                                                </tr>
<!-- 
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
                                                                        
                                                                    <td class="no-line text-end"><h4 class="m-0">Signature:_____________________________</h4></td>
                                                                </tr> -->
                                                                </tbody>
                                                            </table>
                                                        </div>
        
                                                        <div class="d-print-none">
                                                            <div class="float-end">
                                                                <a href="javascript:window.print()" class="btn btn-success waves-effect waves-light"><i class="fa fa-print"></i></a>
                                                                <!-- <a href="#" class="btn btn-primary waves-effect waves-light">Send</a> -->
                                                                <!-- <a href="?action=getInvoice&&replyQ=<?php //echo $DBinfo['invoice_id']?>&&<?php //echo $DBinfo['invoice_id']?>" class="btn btn-primary waves-effect waves-light" name="SendQuote" value="Send Quote">View Receipt</a> -->
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
        
                                            </div>
                                        </div>