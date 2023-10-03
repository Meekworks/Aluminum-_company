


 <style type="text/css">
    
 body {
    margin: 0;
    font-family: Roboto, -apple-system, BlinkMacSystemFont, "Segoe UI", Roboto, "Helvetica Neue", Arial, sans-serif, "Apple Color Emoji", "Segoe UI Emoji", "Segoe UI Symbol", "Noto Color Emoji";
    font-size: 1.1rem;
    font-weight: 400;
    line-height: 1.5385;
    color: #333;
    text-align: left;
    background-color: #eee
}

.mt-50 {
    margin-top: 50px
}

.mb-50 {
    margin-bottom: 50px
}

.card {
    position: relative;
    display: -ms-flexbox;
    display: flex;
    -ms-flex-direction: column;
    flex-direction: column;
    min-width: 0;
    word-wrap: break-word;
    background-color: #fff;
    background-clip: border-box;
    border: 1px solid rgba(0, 0, 0, .125);
    border-radius: .1875rem
}

.card-img-actions {
    position: relative 
}

.card-body {
    -ms-flex: 1 1 auto;
    flex: 1 1 auto;
    padding: 1.25rem;
    text-align: center
}

.card-title {
    margin-top: 10px;
    font-size: 17px
}

.invoice-color {
    color: red !important
}

.card-header {
    padding: .9375rem 1.25rem;
    margin-bottom: 0;
    background-color: rgba(0, 0, 0, .02);
    border-bottom: 1px solid rgba(0, 0, 0, .125)
}

a {
    text-decoration: none !important
}

.btn-light {
    color: #333;
    background-color: #fafafa;
    border-color: #ddd
}

.header-elements-inline {
    display: -ms-flexbox;
    display: flex;
    -ms-flex-align: center;
    align-items: center;
    -ms-flex-pack: justify;
    justify-content: space-between;
    -ms-flex-wrap: nowrap;
    flex-wrap: nowrap
}

@media (min-width: 768px) {
   .card {
        min-width: 400px !important
    }
}

.btn-primary {
    color: #fff;
    background-color: #2196f3
}

.btn-labeled>b {
    position: absolute;
    top: -1px;
    background-color: blue;
    display: block;
    line-height: 1;
    padding: .62503rem
}

@media print{
    .sticky-footer, .scroll-to-top, .navbar, .navbar-nav, .card-header, .form, .yu, .d-sm-inline-block{
        display: none !important;
    }
 </style>
 </style>


 <div class="container-fluid">
          <!-- Page Heading -->
          <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h1 class="h3 mb-0 text-gray-800 yu">Receipt</h1>
              <div class="float-right">
           

           <a href="?action=viewQuote"  class=" d-sm-inline-block btn btn-primary btn-sm shadow-sm float-right "><i class="fas fa-arrow-circle-left fa-sm text-white-50 "></i> Back</a>
          </div>
          </div>
          <!-- Content Row -->
          

<?php 
            $maineg = new  mainClass();
            $DBinfo = $maineg->Targeted_information('invoice_details','invoice_id',$_GET['replyQ']);
            $count = 1;
            // $del = 1500;
            ?>
            
            
            
           <div class="ticket mx-auto">
            <!-- <img src="./logo.png" alt="Logo"> --><center>
            <h6 id="ggd" class="font-weight-bold text-primary" style="font-size:60px; text-decoration: none;">ZIKO<span id="ggd" class="text-danger"><i> FABRICS</i></span></h6></center>
            <p style="color: black !important;" class="centered">RECEIPT 
                <br>Address: 
                <!-- <br>Address line 2 -->
                <br>Date:<?php echo $DBinfo['order_date']?>
                <br>Invoice #<?php echo $DBinfo['invoice_id']?>
            </p>
            <table style="color: black !important;" class="table table-bordered">
                <thead>
                    <tr class="text-center">
                        <th class="quantity">Qty.</th>
                        <th class="description">Item</th>
                        <th class="price">Price</th>
                        <th class="Amount">Amount</th>
                                
                    </tr>
                </thead>
                
                <tbody class="text-center">
                    
                                                              <?php 
                           $maineg = new mainClass();
                           $result = $maineg->fetch_Invoice($_GET['replyQ']);
                           $count = 1;
                             if(!empty($result)){
                                 foreach ($result as $k => $v) {
                            ?>
                    <tr>
                        <td class="quantity" style="max-width:80px !imporant;"><?php echo  number_format($result[$k]['qty']); ?></td>
                        <td class="description"><?php echo $result[$k]['product_name']?></td>
                        <td class="price"><?php echo number_format($result[$k]['price']);?></td>
                        <td class="Amount"><?php echo number_format($result[$k]['total']);?></td>
                    </tr>
                    <?php }}?>
                   
                </tbody>
            </table>
            <table>
                 <tr style="font-size:40px;">
                        
                        <th class="text-left"> Paid:</th>
                        <td class="text-right"><h6 style="font-size:60px;" class="font-weight-bold ">₦<?php echo number_format($DBinfo['paid']);?></h6></td>

                         <?php 
                                                  $maineg = new mainClass();
                                                   $myCart = $maineg->select_total_receipt($_GET['replyQ']);
                                                   $item_quantity = 0;
                                                   $item_price = 0;
                                                   $item_discount = 0;
                                                   $total_discount = 0;
                                                   $Discount = 0;
                                                    if(!empty($myCart)){
                                                       foreach($myCart as $item){
                                                    
                                                        $item_price += ((int)$item['qty'] * (int)$item['price']);
                                                         $item_quantity +=  ((int)$item['qty']);

                                                        $duee = (int)$item_price - (int)$item['paid'];
                                                       }
                                                    }
                                                ?>
                    </tr>

                    <tr style="font-size:40px;">
                                            <th class="text-left font-weight-bold">Balance:</th>
                                            <td class="text-right font-weight-bold"><h6 style="font-size:60px;" class="font-weight-bold">₦<?php echo number_format($duee);?></h6></td>
                                        </tr>
                                         <tr style="font-size:40px;">
                                            <th class="text-left">Total:</th>
                                            <td class="text-right  ">
                                                <h5 style="font-size:60px;" class="font-weight-bold">₦<?php  echo number_format($item_price);?></h5>
                                            </td>
                                        </tr>
            </table>
            <p style="color: black !important;" class="centered">Thanks for your purchase!
                <br>ZIKO FABRICS</p>
        </div>  
        <center>
        <button  id="btnPrint" class="hidden-print btn btn-sm btn-danger mx-auto">Print</button>
        </center>
        <script src="script.js"></script>
            
           
            
            
            
            
     <style type="text/css">
    * {
    /*font-size: 28px;*/
    font-family: 'Times New Roman';
}
p{
   font-size: 60px; 
}

td,
th,
tr,
table {
    border-top: 1px solid black;
    border-collapse: collapse;
    font-size: 60px;
}

/*td.description,*/
/*th.description {*/
/*    width: 105px;*/
/*    max-width: 105px;*/
/*}*/

/*td.quantity,*/
/*th.quantity {*/
/*    width: 70px !imporant;*/
/*    max-width: 70px !imporant;*/
/*    word-break: break-all;*/
/*}*/

/*td.price,*/
/*th.price {*/
/*    width: 110px;*/
/*    max-width: 110px;*/
/*    word-break: break-all;*/
/*}*/

.centered {
    text-align: center;
    align-content: center;
}

.ticket {
    width: 850px;
    max-width: 850px;
}

img {
    max-width: inherit;
    width: inherit;
}

@media print {
    .hidden-print,
    .hidden-print * {
        display: none !important;
    }

    .sticky-footer, .scroll-to-top, .navbar, .navbar-nav, .card-header, .form, .yu, .d-sm-inline-block{
        display: none !important;
    }
    
    #ggd {
        color:black !important;
    }
}
</style>


<script type="text/javascript">
    const $btnPrint = document.querySelector("#btnPrint");
$btnPrint.addEventListener("click", () => {
    window.print();
});
</script>       
            
            
            
  

   <script>
    var loadFile = function(event) {
        var output = document.getElementById('output');
        output.src = URL.createObjectURL(event.target.files[0]);
        output.onload = function() {
            URL.revokeObjectURL(output.src) // free memory
        }
    };
</script>



<script>
    function saveDiv(el) {
        //for printing a particular div

        var restorepage = document.body.innerHTML;
        var printcontent = document.getElementById(el).innerHTML;
        document.body.innerHTML = printcontent;

        //document.getElementById("btn").hidden = true;  
        window.print();
        location.reload();
        return false;
    }



</script>