<?php
$maineg = new mainClass();

$action ='';
if (!empty($_GET['action'])) { 
	$action = $_GET['action'];
} 

switch ($action) {	 

case 'home':  
require_once 'view/dashboard.php';    
break;
 
 
case 'AccounSetup':   
require_once 'view/account_setup.php'; 
break; 


case 'ChartofAccount':  
require_once 'view/chart_of_account.php';
break;


case 'EditChartofAccount':  
require_once 'view/edit_chart_of_account.php';
break;

case 'ViewChartofAccount':  
require_once 'view/view_chart_of_account.php';
break;


case 'AddChartofAccount':  
if (isset($_POST['ChartAccount'])){
$account_id = $_POST['account_id'];
$description  = $_POST['description'];  
$Account_type = $_POST['Account_type'];
$account_series = $_POST['account_series'];
$status = "Active";
  if(empty($account_id) || empty($description) || empty($Account_type) || empty($account_series)){
    echo '<script>swal("error","one or more fields are empty","error");</script>'; 
  }elseif($Run = $maineg->insertCategory($category,$user)){
   if ($Run == true) {
      echo '<script>swal("Success","Category Created Successfully","success");</script>';
      } else{
      echo '<script>swal("Error","Unable to Create Category","error");</script>';
         } 
   }else{
echo '<script>swal("Error","Unable to Create Category","error");</script>';
   } 
}
require_once 'view/add_chart_of_account.php';
break;


case 'InterAcctTransfer':  
require_once 'view/inter_account_transfer.php';
break;


case 'viewInterAcctTransfer':  
require_once 'view/view_inter_account_transfer.php';
break;


case 'AddCategory':
if (isset($_POST['addCat'])){
$category = $_POST['category'];
$user  = $_POST['user'];  
  if(empty($category) || empty($user)){
    echo '<script>swal("error","one or more fields are empty","error");</script>'; 
  }elseif($Run = $maineg->insertCategory($category,$user)){
   if ($Run == true) {
      echo '<script>swal("Success","Category Created Successfully","success");</script>';
      } else{
      echo '<script>swal("Error","Unable to Create Category","error");</script>';
         } 
   }else{
echo '<script>swal("Error","Unable to Create Category","error");</script>';
   } 
}
require_once 'view/add_category.php';
break;


case 'ViewCategory':  
require_once 'view/view_category.php';
break;


case 'EditCategory':
if (isset($_POST['editCate'])){
$category = $_POST['category'];
$user  = $_POST['user'];
$id  = $_POST['id'];  
  if(empty($category) || empty($user)){
    echo '<script>swal("error","one or more fields are empty","error");</script>'; 
  }elseif($Run = $maineg->CategoryUpdate($category,$user,$id)){
   if ($Run == true) {
      echo '<script>swal("Success","Category Updated Successfully","success");</script>';
      } else{
      echo '<script>swal("Error","Unable to Update Category","error");</script>';
         } 
   }else{
echo '<script>swal("Error","Unable to Update Category","error");</script>';
   } 
}  
require_once 'view/edit_category.php';
break;


// case 'AddSubCategory':  
// require_once 'view/add_subcategory.php';
// break;

// case 'ViewSubCategory':  
// require_once 'view/view_subcategory.php';
// break;


// case 'EditSubCategory':  
// require_once 'view/edit_subcategory.php';
// break;


case 'AddItem':  
if (isset($_POST['Create_product'])){
$product_name = $_POST['product_name'];
$product_code = $_POST['product_code'];
$user  = $_POST['user'];  
  if(empty($product_name)|| empty($product_code) || empty($user)){
    echo '<script>swal("error","one or more fields are empty","error");</script>'; 
  }elseif($Run = $maineg->insertProduct($product_name,$product_code,$user)){
   if ($Run == true) {
      echo '<script>swal("Success","New Product Created Successfully","success");</script>';
      } else{
      echo '<script>swal("Error","Unable to Create New Product","error");</script>';
         } 
   }else{
echo '<script>swal("Error","Unable to Create New Product","error");</script>';
   } 
}
require_once 'view/add_item.php';
break;


case 'ViewProduct':  
require_once 'view/view_product.php';
break;



case 'EditProduct':  
if (isset($_POST['editP'])){
$name = $_POST['name'];
$user  = $_POST['user'];
$id  = $_POST['id'];  
  if(empty($name) || empty($user)){
    echo '<script>swal("error","one or more fields are empty","error");</script>'; 
  }elseif($Run = $maineg->ProductUpdate($name,$user,$id)){
   if ($Run == true) {
      echo '<script>swal("Success","Product Updated Successfully","success");</script>';
      } else{
      echo '<script>swal("Error","Unable to Update Product","error");</script>';
         } 
   }else{
echo '<script>swal("Error","Unable to Update Product","error");</script>';
   } 
}  
require_once 'view/edit_product.php';
break;



case 'AddCustomer': 
if (isset($_POST['reg_customer'])){
$customer_name = $_POST['customer_name'];
$phone  = $_POST['phone'];  
$email   = $_POST['email'];
$address = $_POST['address'];
$company_name = $_POST['company_name'];
$category = $_POST['category'];
$invoice = "0";
$refund_invoice = "0";
$user_login = $_POST['user_login'];
$furt  = 'Customer';
$a=rand(10000,1000);
$b=rand(100,1);
$c=rand(1000,10);
$customer_code= $furt."_".$c.$b;
$balance = 0;
$status = "Active";
  if(empty($customer_name) || empty($phone)){
    echo '<script>swal("error","one or more fields are empty","error");</script>'; 
  }elseif($Run = $maineg->insertCustomer($customer_name,$phone,$email,$address,$customer_code,$status,$invoice,$company_name,$category,$refund_invoice,$user_login)){
   if ($Run == true) {
           $Main =  $maineg->cusLedger($customer_code,$balance);
           if ($Main == true) {
              echo '<script>swal("Success","Customer Added Successfully","success");</script>';
         }
        } else{
        echo '<script>swal("Error","Unable to Update Product","error");</script>';
           } 
   }else{
echo '<script>swal("Error","Unable to Update Product","error");</script>';
   } 
}
require_once 'view/add_customer.php';
break;

case 'ViewStockin':  
require_once 'view/view_stockin.php';
break;

case 'ViewStockinDetails':  
require_once 'view/view_stockin_detials.php';
break;




// case 'StockOut':  
// require_once 'view/stock_out.php';
// break;

case 'StockAdjustment':  
require_once 'view/stock_adjustment.php';
break;

case 'AdjustStock':  
if(isset($_POST['adjustSt'])){
   $quantity = $_POST['quantity'];
   $new_quantity  = $_POST['new_quantity'];
   $item_code = $_POST['item_code'];
    if(empty($item_code)){
      echo '<script>swal("error","one or more fields are empty","error");</script>'; 
    }else{
    $RunQ=$maineg->StockUpdate($new_quantity,$item_code);  
    }
    if($RunQ==true){
      echo '<script>swal("Success","Stockin Details Updated Successfully","success");</script>';  
    } else{
      echo '<script>swal("Error","Unable to Update Stockin Details","error");</script>';
         } 
  }
require_once 'view/adjust_stock.php';
break;



case 'Stockin':  
if(isset($_POST['newPurch'])){
             // $inputter = $_POST['$inputter'];
             $inputter = "Admin";
             $created_date = $_POST['created_date'];
             $Invoice_no = $_POST['container_no'];
             $product_name = $_POST['product_name'];
             $product_code = $_POST['product_code'];
             $category = $_POST['category'];
             $price = $_POST['price'];
             $selling_price = $_POST['selling'];
             $quantity = $_POST['quantity'];
             $supplier = $_POST['supplier'];
             $supplier_id = $_POST['supplier_id'];
             $warehousere = $_POST['warehousere'];
             $location = $_POST['location'];
             $stock_level = $_POST['stock_level'];
             $guage = $_POST['guage'];
             $color = $_POST['color'];
             $kg_weight = $_POST['kg_weight'];
             $meter_length = $_POST['meter_length'];
             $embossed = $_POST['embossed'];
             $design = $_POST['design'];
             $packet = $_POST['packet'];
             $user = $_POST['user'];
             @$container = $_POST['container'];
             $container_series = $_POST['serial_name'];
             $Amount_paid = "0";
             $payment_method = "None";
             $satff = $user;
             $furt  = 'Purchase';
             $a=rand(10000,1000);
             $b=rand(100,1);
             $c=rand(1000,10);
             $transaction_id= $furt."_".$c.$a; 
             $account_type = "Cash";
             $Account = "2008_PURCHASE";
             $series_name = "Liability";
             $type = "Debit";
             $aa=rand(10000,1000);
             $bb=rand(100,1);
             $cc=rand(1000,10);
             $item_code = $furt."_".$cc.$aa; 
             $AssignStatus = 'assigned';
             $datex = date("Y-m-d");  
             $status2  = 'unsettled';
             $transaction_source ="Purchase";

             if($product_name == "Sealent Gum" ||  $product_name == "Twisted Nails aluminum"  ||  $product_name == "Treated Nails Stone Coated"){

                $total_packet = $selling_price * $packet;
                $total_purchase = $price * $packet;
                $amount_due = $total_packet;

                  if(empty($Invoice_no) || empty($product_name)){
                  echo '<script>swal("error","one or more fields are empty","error");</script>';

                        }elseif($Run = $maineg->insertStockin($product_name,$quantity,$price,$selling_price,$total_packet,$product_code,$item_code,$category,$guage,$color,$kg_weight,$meter_length,$embossed,$design,$packet,$stock_level,$warehousere,$container_series,@$container,$location,$total_purchase,$inputter)){ 

                   
                    if ($Run == true) {
                        $assignName=$maineg->AssignN($AssignStatus,$container_series,$warehousere);

                    $RunQLog=$maineg->insertStockinLog($Invoice_no,$product_name,$quantity,$price,$selling_price,$total_packet,$product_code,$item_code,$category,$supplier,$guage,$color,$kg_weight,$meter_length,$embossed,$design,$packet,$warehousere,$container_series,@$container,$location,$total_purchase,$inputter);

                    $RunQLog2=$maineg->insertPurchaseLog($transaction_id,$product_name,$supplier,$supplier_id,$price,$quantity,$total_packet,$Amount_paid,$amount_due,$payment_method,$total_purchase);

                    $RunQchart=$maineg->chartofAccount($Account,$total_purchase);
                    $RunQVendor=$maineg->VendorBalance($supplier_id,$total_purchase);

                    $RunQLog1=$maineg->insertAccountLog($transaction_id,$transaction_source,$total_purchase,$datex,$Account,$account_type,$satff,$series_name); 
                    

                    if ($RunQLog == true && $RunQLog2 == true && $RunQchart == true && $RunQLog1 == true && $assignName == true && $RunQVendor == true) {
                    echo '<script>swal("Success","Stockin Successful","success");</script>';
                       }
                          }else{
                            echo '<script>swal("Error","Unable to Process Stockin","error");</script>';
                          }    
                    } else{
                      echo '<script>swal("Error","Unable to Process Stockin","error");</script>';
                        }

             }elseif($product_name == "Aluminium Coils" ||  $product_name == "PPGI Coils"  ||  $product_name == "Industrial 5"){

             $totalAlum = $selling_price * $kg_weight;
             $total_purchase = $price * $kg_weight;
                $amount_due = $totalAlum;

                        if(empty($Invoice_no) || empty($product_name)){
                         echo '<script>swal("error","one or more fields are empty","error");</script>';

                         }elseif($Run = $maineg->insertStockin($product_name,$quantity,$price,$selling_price,$totalAlum,$product_code,$item_code,$category,$guage,$color,$kg_weight,$meter_length,$embossed,$design,$packet,$stock_level,$warehousere,$container_series,@$container,$location,$total_purchase,$inputter)){ 

                   
                    if ($Run == true) {
                        $assignName=$maineg->AssignN($AssignStatus,$container_series,$warehousere);

                    $RunQLog=$maineg->insertStockinLog($Invoice_no,$product_name,$quantity,$price,$selling_price,$totalAlum,$product_code,$item_code,$category,$supplier,$guage,$color,$kg_weight,$meter_length,$embossed,$design,$packet,$warehousere,$container_series,@$container,$location,$total_purchase,$inputter);

                    $RunQLog2=$maineg->insertPurchaseLog($transaction_id,$product_name,$supplier,$supplier_id,$price,$quantity,$totalAlum,$Amount_paid,$amount_due,$payment_method,$created_date,$total_purchase);

                    $RunQchart=$maineg->chartofAccount($Account,$total_purchase);
                    $RunQVendor=$maineg->VendorBalance($supplier_id,$total_purchase);

                    $RunQLog1=$maineg->insertAccountLog($transaction_id,$transaction_source,$total_purchase,$datex,$Account,$account_type,$satff,$series_name); 
                    

                    if ($RunQLog == true && $RunQLog2 == true && $RunQchart == true && $RunQLog1 == true && $assignName == true) {
                    echo '<script>swal("Success","Stockin Successful","success");</script>';
                       }
                          }else{
                            echo '<script>swal("Error","Unable to Process Stockin","error");</script>';
                          }    
            } else{
              echo '<script>swal("Error","Unable to Process Stockin","error");</script>';
                }

             }else{

                 $total = $selling_price * $quantity;
                 $total_purchase = $price * $quantity;
                $amount_due = $total;

                         if(empty($Invoice_no) || empty($product_name)){
                  echo '<script>swal("error","one or more fields are empty","error");</script>';

            }elseif($Run = $maineg->insertStockin($product_name,$quantity,$price,$selling_price,$total,$product_code,$item_code,$category,$guage,$color,$kg_weight,$meter_length,$embossed,$design,$packet,$stock_level,$warehousere,$container_series,@$container,$location,$total_purchase,$inputter)){ 

                   
                    if ($Run == true) {
                        $assignName=$maineg->AssignN($AssignStatus,$container_series,$warehousere);

                    $RunQLog=$maineg->insertStockinLog($Invoice_no,$product_name,$quantity,$price,$selling_price,$total,$product_code,$item_code,$category,$supplier,$guage,$color,$kg_weight,$meter_length,$embossed,$design,$packet,$warehousere,$container_series,@$container,$location,$total_purchase,$inputter);

                    $RunQLog2=$maineg->insertPurchaseLog($transaction_id,$product_name,$supplier,$supplier_id,$price,$quantity,$total,$Amount_paid,$amount_due,$payment_method,$created_date,$total_purchase);

                    $RunQchart=$maineg->chartofAccount($Account,$total_purchase);
                    $RunQVendor=$maineg->VendorBalance($supplier_id,$total_purchase);

                    $RunQLog1=$maineg->insertAccountLog($transaction_id,$transaction_source,$total_purchase,$datex,$Account,$account_type,$satff,$series_name); 
                    

                    if ($RunQLog == true && $RunQLog2 == true && $RunQchart == true && $RunQLog1 == true && $assignName == true) {
                    echo '<script>swal("Success","Stockin Successful","success");</script>';
                       }
                          }else{
                            echo '<script>swal("Error","Unable to Process Stockin","error");</script>';
                          }    
            } else{
              echo '<script>swal("Error","Unable to Process Stockin","error");</script>';
                }

             }   
          }
require_once 'view/stockin.php';
break;

// case 'New_Purchase':  
// if(isset($_POST['newPurch'])){
//              // $inputter = $_POST['$inputter'];
//              $inputter = "Admin";
//              $created_date = $_POST['created_date'];
//              $Invoice_no = $_POST['container_no'];
//              $product_name = $_POST['product_name'];
//              $product_code = $_POST['product_code'];
//              $category = $_POST['category'];
//              $price = $_POST['price'];
//              $selling_price = $_POST['selling'];
//              $quantity = $_POST['quantity'];
//              $supplier = $_POST['supplier'];
//              $supplier_id = $_POST['supplier_id'];
//              $warehousere = $_POST['warehousere'];
//              $location = $_POST['location'];
//              $stock_level = $_POST['stock_level'];
//              $guage = $_POST['guage'];
//              $color = $_POST['color'];
//              $kg_weight = $_POST['kg_weight'];
//              $meter_length = $_POST['meter_length'];
//              $embossed = $_POST['embossed'];
//              $design = $_POST['design'];
//              $packet = $_POST['packet'];
//              $user = $_POST['user'];
//              @$container = $_POST['container'];
//              $container_series = $_POST['serial_name'];
//              $Amount_paid = "0";
//              $payment_method = "None";
//              $satff = $user;
//              $furt  = 'Purchase';
//              $a=rand(10000,1000);
//              $b=rand(100,1);
//              $c=rand(1000,10);
//              $transaction_id= $furt."_".$c.$a; 
//              $account_type = "Cash";
//              $Account = "2008_PURCHASE";
//              $series_name = "Liability";
//              $type = "Debit";
//              $aa=rand(10000,1000);
//              $bb=rand(100,1);
//              $cc=rand(1000,10);
//              $item_code = $furt."_".$cc.$aa; 
//              $AssignStatus = 'assigned';
//              $datex = date("Y-m-d");  
//              $status2  = 'unsettled';
//              $transaction_source ="Purchase";

//              if($product_name == "Sealent Gum" ||  $product_name == "Twisted Nails aluminum"  ||  $product_name == "Treated Nails Stone Coated"){

//                 $total_packet = $selling_price * $packet;
//                 $total_purchase = $price * $packet;
//                 $amount_due = $total_packet;

//                   if(empty($Invoice_no) || empty($product_name)){
//                   echo '<script>swal("error","one or more fields are empty","error");</script>';

//                         }elseif($Run = $maineg->insertStockin($product_name,$quantity,$price,$selling_price,$total_packet,$product_code,$item_code,$category,$guage,$color,$kg_weight,$meter_length,$embossed,$design,$packet,$stock_level,$warehousere,$container_series,@$container,$location,$total_purchase,$inputter)){ 

                   
//                     if ($Run == true) {
//                         $assignName=$maineg->AssignN($AssignStatus,$container_series,$warehousere);

//                     $RunQLog=$maineg->insertStockinLog($Invoice_no,$product_name,$quantity,$price,$selling_price,$total_packet,$product_code,$item_code,$category,$supplier,$guage,$color,$kg_weight,$meter_length,$embossed,$design,$packet,$warehousere,$container_series,@$container,$location,$total_purchase,$inputter);

//                     $RunQLog2=$maineg->insertPurchaseLog($transaction_id,$product_name,$supplier,$supplier_id,$price,$quantity,$total_packet,$Amount_paid,$amount_due,$payment_method,$total_purchase);

//                     $RunQchart=$maineg->chartofAccount($Account,$total_purchase);
//                     $RunQVendor=$maineg->VendorBalance($supplier_id,$total_purchase);

//                     $RunQLog1=$maineg->insertAccountLog($transaction_id,$transaction_source,$total_purchase,$datex,$Account,$account_type,$satff,$series_name); 
                    

//                     if ($RunQLog == true && $RunQLog2 == true && $RunQchart == true && $RunQLog1 == true && $assignName == true && $RunQVendor == true) {
//                     echo '<script>swal("Success","Stockin Successful","success");</script>';
//                        }
//                           }else{
//                             echo '<script>swal("Error","Unable to Process Stockin","error");</script>';
//                           }    
//                     } else{
//                       echo '<script>swal("Error","Unable to Process Stockin","error");</script>';
//                         }

//              }elseif($product_name == "Aluminium Coils" ||  $product_name == "PPGI Coils"  ||  $product_name == "Industrial 5"){

//              $totalAlum = $selling_price * $kg_weight;
//              $total_purchase = $price * $kg_weight;
//                 $amount_due = $totalAlum;

//                         if(empty($Invoice_no) || empty($product_name)){
//                          echo '<script>swal("error","one or more fields are empty","error");</script>';

//                          }elseif($Run = $maineg->insertStockin($product_name,$quantity,$price,$selling_price,$totalAlum,$product_code,$item_code,$category,$guage,$color,$kg_weight,$meter_length,$embossed,$design,$packet,$stock_level,$warehousere,$container_series,@$container,$location,$total_purchase,$inputter)){ 

                   
//                     if ($Run == true) {
//                         $assignName=$maineg->AssignN($AssignStatus,$container_series,$warehousere);

//                     $RunQLog=$maineg->insertStockinLog($Invoice_no,$product_name,$quantity,$price,$selling_price,$totalAlum,$product_code,$item_code,$category,$supplier,$guage,$color,$kg_weight,$meter_length,$embossed,$design,$packet,$warehousere,$container_series,@$container,$location,$total_purchase,$inputter);

//                     $RunQLog2=$maineg->insertPurchaseLog($transaction_id,$product_name,$supplier,$supplier_id,$price,$quantity,$totalAlum,$Amount_paid,$amount_due,$payment_method,$created_date,$total_purchase);

//                     $RunQchart=$maineg->chartofAccount($Account,$total_purchase);
//                     $RunQVendor=$maineg->VendorBalance($supplier_id,$total_purchase);

//                     $RunQLog1=$maineg->insertAccountLog($transaction_id,$transaction_source,$total_purchase,$datex,$Account,$account_type,$satff,$series_name); 
                    

//                     if ($RunQLog == true && $RunQLog2 == true && $RunQchart == true && $RunQLog1 == true && $assignName == true) {
//                     echo '<script>swal("Success","Stockin Successful","success");</script>';
//                        }
//                           }else{
//                             echo '<script>swal("Error","Unable to Process Stockin","error");</script>';
//                           }    
//             } else{
//               echo '<script>swal("Error","Unable to Process Stockin","error");</script>';
//                 }

//              }else{

//                  $total = $selling_price * $quantity;
//                  $total_purchase = $price * $quantity;
//                 $amount_due = $total;

//                          if(empty($Invoice_no) || empty($product_name)){
//                   echo '<script>swal("error","one or more fields are empty","error");</script>';

//             }elseif($Run = $maineg->insertStockin($product_name,$quantity,$price,$selling_price,$total,$product_code,$item_code,$category,$guage,$color,$kg_weight,$meter_length,$embossed,$design,$packet,$stock_level,$warehousere,$container_series,@$container,$location,$total_purchase,$inputter)){ 

                   
//                     if ($Run == true) {
//                         $assignName=$maineg->AssignN($AssignStatus,$container_series,$warehousere);

//                     $RunQLog=$maineg->insertStockinLog($Invoice_no,$product_name,$quantity,$price,$selling_price,$total,$product_code,$item_code,$category,$supplier,$guage,$color,$kg_weight,$meter_length,$embossed,$design,$packet,$warehousere,$container_series,@$container,$location,$total_purchase,$inputter);

//                     $RunQLog2=$maineg->insertPurchaseLog($transaction_id,$product_name,$supplier,$supplier_id,$price,$quantity,$total,$Amount_paid,$amount_due,$payment_method,$created_date,$total_purchase);

//                     $RunQchart=$maineg->chartofAccount($Account,$total_purchase);
//                     $RunQVendor=$maineg->VendorBalance($supplier_id,$total_purchase);

//                     $RunQLog1=$maineg->insertAccountLog($transaction_id,$transaction_source,$total_purchase,$datex,$Account,$account_type,$satff,$series_name); 
                    

//                     if ($RunQLog == true && $RunQLog2 == true && $RunQchart == true && $RunQLog1 == true && $assignName == true) {
//                     echo '<script>swal("Success","Stockin Successful","success");</script>';
//                        }
//                           }else{
//                             echo '<script>swal("Error","Unable to Process Stockin","error");</script>';
//                           }    
//             } else{
//               echo '<script>swal("Error","Unable to Process Stockin","error");</script>';
//                 }

//              }   
//           }
// require_once 'view/new_purchase.php';
// break;



case 'EditStock':  
if (isset($_POST['editStok'])){
$product_name = $_POST['product_name'];
$category  = $_POST['category'];
$quantity  = $_POST['quantity'];
$purchase_price  = $_POST['purchase_price'];  
$selling_price  = $_POST['selling_price'];  
$total  = $_POST['total'];  
$item_code  = $_POST['item_code'];  
$guage  = $_POST['guage'];  
$color  = $_POST['color'];  
$kg_weight  = $_POST['kg_weight'];  
$meter_length  = $_POST['meter_length'];  
$embossed  = $_POST['embossed'];  
$design  = $_POST['design'];  
$packet  = $_POST['packet'];  
$stock_level  = $_POST['stock_level'];  
$warehouse  = $_POST['warehouse'];  
$container_series  = $_POST['container_series'];  
$container  = $_POST['container'];  
$location  = $_POST['location'];  
$datex = date('Y-m-d'); 

  if(empty($product_name) || empty($item_code)){
    echo '<script>swal("error","Item Code or Product Name is Empty","error");</script>'; 
  }elseif($Run = $maineg->StockinUpdate($product_name,$quantity,$purchase_price,$selling_price,$total,$category,$guage,$color,$kg_weight,$meter_length,$embossed,$design,$packet,@$low_stock_level,$warehouse,$container_series,$container,$location,$datex,$item_code)){
   if ($Run == true) {
      echo '<script>swal("Success","Stock Updated Successfully","success");</script>';
      } else{
      echo '<script>swal("Error","Unable to Update Stock","error");</script>';
         } 
   }else{
echo '<script>swal("Error","Unable to Update Stock","error");</script>';
   } 
}  
require_once 'view/edit_stock.php';
break;


case 'ReturnDamage':
 if(isset($_POST['returnItems'])){
 $return_date    =  $_POST['return_date'];
 $invoice_id    =  $_POST['invoice_id'];
 $product_name   = $_POST['product_name'];
 $customer_name  = $_POST['customer_name'];
 $return_description = $_POST['return_description'];
 $return_quantity = $_POST['return_quantity'];
 $item_code = $_POST['product_code'];
 $guage = $_POST['guage'];
 $color = $_POST['color'];
 $category  = $_POST['category'];
 $return_kg = $_POST['return_kg'];
 $return_packet = $_POST['return_packet'];
 $furt  = 're';
 $a=rand(1000,100);
 $b=rand(100,1);
 $c=rand(1000,10);
 $reference_id = $furt."_".$c."_".$a;
 $delivery = 'returned';
 $status = 'unsettled';
 $datex = date('Y-m-d');
  if(empty($return_date) || empty($product_name) || empty($customer_name) || empty($item_code)){

    echo '<script>swal("error","one or more fields are empty","error");</script>'; 

  }else{

  $RunQ=$maineg->insertReturn($reference_id,$return_date,$product_name,$customer_name,$return_description,$return_quantity,$return_kg,$return_packet,$category,$guage,$color,$status,$item_code);
   $RunU=$maineg->AddreturnToInvoice($invoice_id,$item_code,$delivery,$datex);
  if($RunQ == true && $RunU == true){
     
    echo '<script>swal("Success","Material Return  Recorded Successfully","success");</script>';  

  } else{

    echo '<script>swal("Error","Unable to Add Return  Record","error");</script>';

       } 
  }
  
}
require_once 'view/createReturn.php';
break;



case 'ChangeItem':
  if(isset($_POST['returnC'])){
 @$return_date    =  $_POST['return_date'];
 $product_name   = $_POST['product_name'];
 $customer_name  = $_POST['customer_name'];
 $return_description = $_POST['return_description'];
 $return_quantity = $_POST['return_quantity'];
 $item_code = $_POST['product_code'];
 $guage = $_POST['guage'];
 $color = $_POST['color'];
 $return_kg = $_POST['return_kg'];
 $return_packet = $_POST['return_packet'];
 $category  = $_POST['category'];
 $changed_color = $_POST['color_to'];
 $type = "Change";
 $furt  = 're';
 $a=rand(1000,100);
 $b=rand(100,1);
 $c=rand(1000,10);
 $reference_id = $furt."_".$c."_".$a;
 $status = 'unsettled';

  if(empty($return_date) || empty($product_name) || empty($customer_name) || empty($item_code)){

    echo '<script>swal("error","one or more fields are empty","error");</script>'; 

  }else{

  $RunQ=$maineg->insertReturn1($reference_id,$return_date,$product_name,$customer_name,$return_description,$return_quantity,$return_kg,$return_packet,$category,$guage,$color,$status,$item_code,$type,$changed_color);

  if($RunQ == true){

    echo '<script>swal("Success","Material Return Outward Recorded Successfully","success");</script>';  

  } else{

    echo '<script>swal("Error","Unable to Add Return Outward Record","error");</script>';

       } 
  }
  
}
require_once 'view/change_item.php';
break;




 case 'WayBill':

 if(isset($_POST['addWaybill'])){
 $datex = $_POST['datex'];
 $company_name = $_POST['company'];
 $user = $_POST['user'];
 $phone = $_POST['phone'];
 $driver  = $_POST['driver'];
 $driver_phone = $_POST['driver_phone'];
 $vehicle = $_POST['vehicle_no'];
 $location = $_POST['location'];
 $destination = $_POST['destination'];
 $customer_name = $_POST['customer_name'];
 $product_name = $_POST['product_name'];
 $qty  = $_POST['qty'];
 $product_code = $_POST['product_code'];
 $color  = $_POST['color'];
 $kg_weight = $_POST['kg_weight'];
 $packet  = $_POST['packet'];
 $meter_length = $_POST['meter_length'];
 $image = $_FILES['image']['name'];
 $tmp = $_FILES['image']['tmp_name'];
 $loc = "view/product_image/".$image;

 $furt  = 'ref';
 $a=rand(1000,100);
 $b=rand(100,1);
 $c=rand(1000,10);
 $reference_id= $furt."_".$c.$a;


   $countLoop=1;
   for($i=0; $i<sizeof($product_code);$i++){
   $Itemproduct_code  = $product_code[$i];
   $itemproduct_name   = $product_name[$i];
   $quantity   = $qty[$i];
   $Icustomer_name  = $customer_name[$i];
   $Icolor_name  = $color[$i];
   $Ikg_weight_name  = $kg_weight[$i];
   $Ipacket  = $packet[$i];
   $Imeter_length = $meter_length[$i];


  if(empty($datex) || empty($user) || empty($company_name) || empty($product_name)){
    echo '<script>swal("error","one or more fields are empty","error");</script>'; 
  }else{ 
    move_uploaded_file($tmp,$loc);
    $RunQ=$maineg->insertWaybill($datex,$company_name,$phone,$driver,$vehicle,$driver_phone,$location,$destination,$Icustomer_name,$itemproduct_name,$quantity,$Icolor_name,$Ikg_weight_name,$Imeter_length,$Ipacket,$Itemproduct_code,$user,$reference_id,$image); 
     if($RunQ){
    echo '<script>swal("Success","Waybill Added  Successfully","success");</script>';  
  } else{
    echo '<script>swal("Error","Unable to Add Waybill Record","error");</script>';
       } 

  }
    
  $countLoop++;
      }
}
require_once 'view/waybill.php';
break;


case 'ViewCusL':
require_once 'view/view_cust_ledger.php';
break;


case 'returnPage':
require_once 'view/returned.php';
break;


case 'ViewReturnInvoice':
require_once 'view/returned_invoice.php';
break;



case 'ApproveR':
if (isset($_POST['approveret'])){
   $reference_no  = $_POST['reference_no']; 
   $Newstatus = 'Approved';
   // $account_id = "6000_EXPENSES";
   $datex = date('Y-m-d H:i:s');
    $role = $_POST['user'];

    // if(){

    // }

      if(empty($reference_no) || empty($Newstatus)){
         echo '<script>swal("Error","one or more fields are empty","error");</script>'; 
      }elseif($RunU=$maineg->ApproveReturn($reference_no,$Newstatus,$datex)){
       echo '<script>swal("Success","Approved Successful","success");</script>';
        }else{
        echo '<script>swal("Error","Unable to Approve Returned Item","error");</script>';
    } 



}
require_once 'view/approve_return.php';
break;


case 'ApproveRC':
if (isset($_POST['approveretC'])){
   $reference_no  = $_POST['reference_no']; 
   $Newstatus = 'Approved';
   // $account_id = "6000_EXPENSES";
   $datex = date('Y-m-d H:i:s');
    $role = $_POST['user'];

    // if(){

    // }

      if(empty($reference_no) || empty($Newstatus)){
         echo '<script>swal("Error","one or more fields are empty","error");</script>'; 
      }elseif($RunU=$maineg->ApproveReturn($reference_no,$Newstatus,$datex)){
       echo '<script>swal("Success","Approved Successful","success");</script>';
        }else{
        echo '<script>swal("Error","Unable to Approve Returned Item","error");</script>';
    } 



}
require_once 'view/approve_returnC.php';
break;




case 'SettleR':
if (isset($_POST['settle'])){
   $reference_no  = $_POST['reference_no'];
   $item_code = $_POST['item_code']; 

   $quantity = $_POST['quantity'];  
   $Newstatus = 'Settled';
   // $account_id = "6000_EXPENSES";
   $datex = date('Y-m-d H:i:s');
      if(empty($reference_no) || empty($item_code) || empty($Newstatus)){
         echo '<script>swal("Error","one or more fields are empty","error");</script>'; 
      }elseif($RunU=$maineg->UpdateReturn($reference_no,$Newstatus,$datex)){
       if ($RunU==true) {
         $RunQ1=$maineg->UpdateReturnPur($item_code,$quantity);
         if ($RunQ1==true) {
          echo '<script>swal("Success","Update Successful","success");</script>';
              }
          } 
        }else{
        echo '<script>swal("Error","Unable to Perform Update","error");</script>';
    } 
}
require_once 'view/settleReturn.php';
break;



case 'SettleRC':
if (isset($_POST['settleC'])){
   $reference_no  = $_POST['reference_no'];
   $item_code = $_POST['item_code']; 

   $quantity = $_POST['quantity'];  
   $Newstatus = 'Settled';
   // $account_id = "6000_EXPENSES";
   $datex = date('Y-m-d H:i:s');
      if(empty($item_code) || empty($Newstatus)){
         echo '<script>swal("Error","one or more fields are empty","error");</script>'; 
      }elseif($RunU=$maineg->UpdateReturn($reference_no,$Newstatus,$datex)){
       if ($RunU==true) {
        // echo '<script>swal("Success","Update Successful","success");</script>';
         $RunQ1=$maineg->UpdateReturnPur($item_code,$quantity);
         if ($RunQ1==true) {
          echo '<script>swal("Success","Update Successful","success");</script>';
              }
          } 
        }else{
        echo '<script>swal("Error","Unable to Perform Update","error");</script>';
    } 
}
require_once 'view/settleReturnC.php';
break;



case 'returnPageC':
require_once 'view/returnedC.php';
break;


case 'StockinReport':  
require_once 'view/stockinReport.php';
break;


 
// $message = '';

// if(isset($_POST["b_print"])){
//   include('view/pdf.php');

//   $fromdate =  $_POST['fromdate'];
//   $todate =  $_POST['todate'];
  
//   $file_name = md5(rand()) . '.pdf';
//   $html_code = '../view/includes/head_links.php';
  
//   $html_code = $maineg->Send_Pdf($fromdate,$todate);
//   $pdf = new Pdf();
//   $pdf->load_html($html_code);
//   $pdf->render();
//   $file = $pdf->output();
//   file_put_contents($file_name, $file);

//   $userToreceive = 'philipchibuike1@gmail.com';

//   require 'PHPMailer-5.2-stable/PHPMailerAutoload.php';
//   $mail = new PHPMailer(true);
//   // try {
//   //Server settings
//   //$mail->SMTPDebug = 4;                                       //Enable verbose debug output
//   $mail->isSMTP();                                              //Send using SMTP
//   $mail->Host       = 'mail.glorytogloryfortune.com';           //Set the SMTP server to send through 
//   $mail->SMTPAuth   = true;                                     //Enable SMTP authentication
//   $mail->Username   = 'messagedesk@glorytogloryfortune.com';    //SMTP username
//   $mail->Password   = 'hsX3ljJj';                               //SMTP password
//   $mail->SMTPSecure = 'ssl';                                    //Enable implicit TLS encryption
//   $mail->Port       = 465;                                      //TCP port to connect to; use 587 if you have set `SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS`
                              
//   //Recipients
//   // $userToreceive = $receiver;

//   $mail->setFrom('messagedesk@glorytogloryfortune.com', 'Glory to Glory');
//   $mail->addAddress($userToreceive);     //Add a recipient

//   //Attachments
//   //$mail->addAttachment('/var/tmp/file.tar.gz');         //Add attachments
//   //$mail->addAttachment('/tmp/image.jpg', 'new.jpg');    //Optional name

//   //Content
//   $mail->isHTML(true);
//   $mail->addAttachment($file_name);                                  //Set email format to HTML
//   $mail->Subject ='Statment of Account';
//   $mail->Body    = 'Please Find Customer Details in attach PDF File';

//   $mail->AltBody = 'This is the body in plain text for non-HTML mail clients';

//   if($mail->send()){
//     $message = '<label class="text-success">Customer Statment has been sent successfully...</label>';
//   }unlink($file_name);
  

// }
case 'salesReports':
require_once 'view/salesreport.php';
break;


case 'PurchaseReports':  
require_once 'view/purchase_report.php';
break;


case 'ReceivableReports':  
require_once 'view/receivable.php';
break;

case 'CostOfGoodsReports':  
require_once 'view/cost_of_goods.php';
break;




case 'PayableReports':  
require_once 'view/payable.php';
break;


case 'ChartAcctReport':  
require_once 'view/chart_of_accountReport.php';
break;


case 'Ledger':  
require_once 'view/ledger.php';
break;



case 'Payrol_report':  
require_once 'view/payroll_report.php';
break;


case 'Expense':  
require_once 'view/expense_report.php';
break;


case 'Visit_report':  
require_once 'view/visit_report.php';
break;


case 'Return_report':  
require_once 'view/return_report.php';
break;


case 'ViewVisit':  
require_once 'view/view_vist.php';
break;


case 'getVisit':  
require_once 'view/vist_details.php';
break;


case 'Vistation':

 if(isset($_POST['Create_visit'])){
 $visitor_name = $_POST['visitor_name'];
 $gender = $_POST['gender'];
 $purpose = $_POST['purpose'];
 $who_place = $_POST['who_place'];
 $time_in  = $_POST['time_in'];
 $time_out  = $_POST['time_out'];
 @$vehicle  = $_POST['vehicle'];
 @$vehicle_no  = $_POST['vehicle_no'];
 @$vehicle_color  = $_POST['vehicle_color'];
 $datex = date('Y-m-d');

 $furt  = 'ref';
 $a=rand(1000,100);
 $b=rand(100,1);
 $c=rand(1000,10);
 $reference_id= $furt."_".$c.$a;

  if(empty($visitor_name) || empty($gender) || empty($purpose) || empty($who_place)){
    echo '<script>swal("error","one or more fields are empty","error");</script>'; 
  }else{
   
  $RunQ=$maineg->insertVisit($visitor_name,$gender,$purpose,$who_place,$time_in,$time_out,$vehicle,$vehicle_no,$vehicle_color,$datex); 
  }
  if($RunQ==true){
    echo '<script>swal("Success","Visit Recorded Successfully","success");</script>';  
  } else{
    echo '<script>swal("Error","Unable to Add Visit Record","error");</script>';
       } 
}
require_once 'view/visitation.php';
break;



case 'Transfer':  
require_once 'view/transfer_stock.php';
break;

case 'WTW':  
require_once 'view/warehouse_to_warehouse.php';
break;


case 'WTO':  
require_once 'view/warehouse_to_outlet.php';
break;


case 'OTW':  
require_once 'view/outlet_to_warehouse.php';
break;


case 'ApproveTransfer':  
require_once 'view/approve_transfer.php';
break;


case 'TransferHistory':  
require_once 'view/transfer_history.php';
break;



case 'selectSales':  
require_once 'view/select_sales.php';
break;


case 'AluminiumCoils': 
if (isset($_POST['seeItem'])){
   $sales_rep  = $_POST['sales_rep'];
   $order_date = $_POST['order_date'];  
   $timex = $_POST['timex'];
   $type   = $_POST['type'];
   $mode_payment = $_POST['mode_payment'];
   $customer_name = $_POST['customer_name'];
   $address = $_POST['address'];
   $phone   = $_POST['phone'];
   $customer_name_new = $_POST['customer_name_new'];
   $address_new = $_POST['address_new'];
   $phone_new   = $_POST['phone_new'];
   $product_code = $_POST['product_code'];
   $category = $_POST['category'];
   $product_name   = $_POST['product_name'];
   $price   = $_POST['price'];
   $guage   = $_POST['guage'];
   $color   = $_POST['color'];
   $kg_weight   = $_POST['kg_weight'];
   $meter_length   = $_POST['meter_length'];
   $embossed   = $_POST['embossed'];
   $old_price   = $_POST['old_price'];
   
   $bank = $_POST['bank_name'];
   $bank_deatils = explode('-', $bank);
   $bank_id = $bank_deatils[0];
   $bank_name = $bank_deatils[1];

   $total   = $_POST['total'];
   $cost_of_goods   = $_POST['cost_of_goods'];
   $amount_paid = $_POST['amount_paid'];

   // $old_balance   = $_POST['old_balance'];
   // $include_bal   = $_POST['include_bal'];
   // $old_amount_paid = $_POST['old_amount_paid'];
   // $new_balance = $old_balance - $old_amount_paid;
   // $total_paid = $old_amount_paid + $amount_paid;

   $grand_total = $_POST['grand_total'];
   $customer = explode('-', $customer_name);
   // $furt  = 'Inv';
   $rand=rand(10000,99999999);
   $invoice_id = $rand;
   // $invoice_id  = $_POST['invoice_no']; 
   $_SESSION['In_id'] = $invoice_id;
   $newTotal = str_replace(',', '', $total);
   $due = $grand_total - $amount_paid;
   $new_due =  $due;
   $status = "Active";
   $datex = date('Y-m-d');
   $Account = "4000_SALES";
   $Account1 = "1200_ACCOUNT_RECEIVABLE";

   $furt1  = 'Sales';
   $a1=rand(10000,1000);
   $b1=rand(100,1);
   $c1=rand(1000,10);
   $transaction_id= $furt1."_".$c1.$a1; 
   $transaction_source = "SALES";
   $account_type = "Daily Sales";
   $series_name ="Income";
   $no_id = "";
   $qty = 0;
   $account_type1 = "Account Receivable";
   $series_name1 ="Asset";
   $description = "Sales On Credit";
   $type1 = "Credit";
   $status1 = " Approved";
   $GMD1 = "Approved";
   $CEO1 = "Approved";
   $Accountant1 = "Approved";
   $status2 = "Unapproved";
   $GMD2 = "Unapproved";
   $CEO2 = "Unapproved";
   $Accountant2 = "Unapproved";
   $adjusted_option = $_POST['adjusted_option'];
   $id = $_POST['id'];

    $customer_name_new_id = $customer_name_new;

    $staockSTAS = "outstock";

     $msg_bodycredit = 'Hi Sir / Madam, There is a Request For Credit Sale Approval, Thanks!'; 
    $msg_bodyadustedprice = 'Hi Sir / Madam, There is a Request For Price Adjustment Sale Approval, Thanks!';  

    // $msg_bodycreditMa = 'Hi Ma, There is a Request For Credit Sale Approval, Thanks!'; 
    // $msg_bodyadustedpriceMa = 'Hi Ma, There is a Request For Price Adjustment Sale Approval, Thanks!';  
    
    $customer_phone = '08067683668,08164528072';
    // $customer_phoneMa =''; 
    
    // $customer_phone = '08164528072';
    // $customer_phoneMa = '08067683668';


   $result = $maineg->Get_balanceCredit($customer[1]); 
   $result1 = $maineg->Get_balanceDebit($customer[1]); 
   foreach ($result1 as $k => $v) {}                             
   foreach ($result as $k => $v) {}
   $balance1 = $result[$k]['credit'] + $amount_paid;
   $balance2 = $result1[$k]['debit'] + $due;
   $initial_balance = $balance2 - $balance1; 
   $currentBalance = $initial_balance;
   
   
   
   $resultn = $maineg->Get_bank_balanceCredit($bank_id); 
   $resultn1 = $maineg->Get_bank_balanceDebit($bank_id); 
   foreach ($resultn1 as $k => $v) {}                             
   foreach ($resultn as $k => $v) {}
   $balancen1 = $resultn[$k]['amount'];
   $balancen2 = $resultn1[$k]['amount'];

   $image = '';

   $deposit_date = date('Y-m-d');
   
   $transcation_type = "Credit";
   $transaction_source1 = " Sales";
   $initial_balancen = $balancen1;
   $currentBalancen = $amount_paid + $balancen1 - $balancen2;
 
   // if($type == "Regular Customer" && $mode_payment != "Credit" && $adjusted_option != "Yes"){
    
   //      if($currentBalance <= 0 ){
    
   //         $newcurrentBalance = '0.00';
           
   //         $cREDITchart=$maineg->insertCustomer_ledger($customer[1],$amount_paid,$due,$newcurrentBalance);
    
   //     }else{
   //         $cREDITchart=$maineg->insertCustomer_ledger($customer[1],$amount_paid,$due,$currentBalance);
   //     }
   // }

   $countLoop=1;
   for($i=0; $i<sizeof($product_code);$i++){
   $ItemPrice  = $price[$i];
   $Itemproduct_code  = $product_code[$i];
   $itemcategory   = $category[$i];
   $itemproduct_name   = $product_name[$i];
   // $quantity   = $qty[$i];
   $Itemtotal  = $total[$i];
   $Itemguage  = $guage[$i];  
   $Itemcolor  =  $color[$i];  
   $Itemkg_weight  = $kg_weight[$i];  
   $Itemmeter_length  = $meter_length[$i]; 
   $Itemembossed  =  $embossed[$i];  
   $Itemold_price  = $old_price[$i];
   $Itemcost_of_goods = $cost_of_goods[$i];
   $new_id  = $id[$i]; 



  


      if(empty($sales_rep) || empty($order_date) ||  empty($product_code) || empty($product_name)|| empty($price) || empty($kg_weight) || empty($total) || empty($invoice_id)){
      echo '<script>swal("Error","one or more fields are empty","error");</script>'; 
       
      }elseif($type == "Walk-in Customer"){


       if($mode_payment == "Credit" && $adjusted_option == "Yes"){

        $Run = $maineg->insertInvoiceDetailsPriceADJUSTAlum($_SESSION['In_id'],$Itemproduct_code,$itemproduct_name,$itemcategory,$mode_payment,$ItemPrice,$Itemtotal,$amount_paid,$due,$order_date,$no_id,$customer_name_new,$address_new,$phone_new,$sales_rep,$status2,$GMD2,$CEO2,$Accountant2,$Itemguage,$Itemcolor,$Itemkg_weight,$Itemmeter_length,$Itemembossed,$Itemold_price,$Itemcost_of_goods);

                   $clear_out = $maineg->delete_All('addtocart','sales_rep',$sales_rep);

                    if ($Run == true) {

                        $RunQ=$maineg->AUTOMATIC_SMS_API($customer_phone,$msg_bodyadustedprice);
                        //$RunQ1=$maineg->AUTOMATIC_SMS_API($customer_phoneMa,$msg_bodyadustedpriceMa);

                        echo '<script>swal("Success","Credit Sales Added, Waiting for Approval","success");</script>';
                    
                     }
               }elseif($mode_payment == "Credit"){


                $Run = $maineg->insertInvoiceDetailsCreditAlum($_SESSION['In_id'],$Itemproduct_code,$itemproduct_name,$itemcategory,$mode_payment,$ItemPrice,$Itemtotal,$amount_paid,$due,$order_date,$no_id,$customer_name_new,$address_new,$phone_new,$sales_rep,$status2,$GMD2,$CEO2,$Accountant2,$Itemcolor,$Itemmeter_length,$Itemkg_weight,$Itemguage,$Itemold_price,$Itemembossed,$Itemcost_of_goods);

                    $clear_out = $maineg->delete_All('addtocart','sales_rep',$sales_rep);

                     if ($Run == true) {

                            $RunQ=$maineg->AUTOMATIC_SMS_API($customer_phone,$msg_bodycredit);
                            //$RunQ1=$maineg->AUTOMATIC_SMS_API($customer_phoneMa,$msg_bodycreditMa);

                            echo '<script>swal("Success","Credit Sales Added, Waiting for Approval","success");</script>';

                             }

                   

                         }elseif($adjusted_option == "Yes"){

                   $Run = $maineg->insertInvoiceDetailsPriceADJUSTAlum($_SESSION['In_id'],$Itemproduct_code,$itemproduct_name,$itemcategory,$mode_payment,$ItemPrice,$Itemtotal,$amount_paid,$due,$order_date,$no_id,$customer_name_new,$address_new,$phone_new,$sales_rep,$status2,$GMD2,$CEO2,$Accountant2,$Itemguage,$Itemcolor,$Itemkg_weight,$Itemmeter_length,$Itemembossed,$Itemold_price,$Itemcost_of_goods);

                   $clear_out = $maineg->delete_All('addtocart','sales_rep',$sales_rep);

                    if ($Run == true) {

                        $RunQ=$maineg->AUTOMATIC_SMS_API($customer_phone,$msg_bodyadustedprice);
                        //$RunQ1=$maineg->AUTOMATIC_SMS_API($customer_phoneMa,$msg_bodyadustedpriceMa);

                        echo '<script>swal("Success","Credit Sales Added, Waiting for Approval","success");</script>';

                         }

               }else{

            $Run = $maineg->insertInvoiceDetailsAlum($_SESSION['In_id'],$Itemproduct_code,$itemproduct_name,$itemcategory,$mode_payment,$ItemPrice,$Itemtotal,$amount_paid,$due,$order_date,$no_id,$customer_name_new,$address_new,$phone_new,$Itemcolor,$Itemguage,$Itemold_price,$Itemkg_weight,$Itemmeter_length,$Itemembossed,$sales_rep,$status1,$GMD1,$CEO1,$Accountant1,$bank_name,$bank_id,$Itemcost_of_goods);
      
               if ($Run == true) {
                $RunQ22=$maineg->UpdateStockStatus($staockSTAS,$Itemproduct_code);
                 $Main =  $maineg->insertInvoicelog($_SESSION['In_id'],$sales_rep,$ItemPrice,$timex,$order_date,$Itemtotal,$amount_paid,$due,$status1,$GMD1,$CEO1,$Accountant1,$bank_name,$bank_id,$Itemcost_of_goods);
                  $clear_out = $maineg->delete_All('addtocart','sales_rep',$sales_rep);
                 if ($Main == true && $RunQ22==true) {
                  echo '<script>swal("Success","Transaction Successful","success");</script>';
                         }
                      } 
               }
        }elseif($type == "Regular Customer"){

       if($mode_payment == "Credit" && $adjusted_option == "Yes"){

                   $Run = $maineg->insertInvoiceDetailsPriceADJUSTAlum($_SESSION['In_id'],$Itemproduct_code,$itemproduct_name,$itemcategory,$mode_payment,$ItemPrice,$Itemtotal,$amount_paid,$due,$order_date,$customer[1],$customer[0],$address,$phone,$sales_rep,$status2,$GMD2,$CEO2,$Accountant2,$Itemguage,$Itemcolor,$Itemkg_weight,$Itemmeter_length,$Itemembossed,$Itemold_price,$Itemcost_of_goods);

                   $clear_out = $maineg->delete_All('addtocart','sales_rep',$sales_rep);

                    if ($Run == true) {

                        $RunQ=$maineg->AUTOMATIC_SMS_API($customer_phone,$msg_bodyadustedprice);
                        //$RunQ1=$maineg->AUTOMATIC_SMS_API($customer_phoneMa,$msg_bodyadustedpriceMa);

                        echo '<script>swal("Success","Credit Sales Added, Waiting for Approval","success");</script>';

                         }

               }elseif($mode_payment == "Credit"){

           $Run = $maineg->insertInvoiceDetailsCreditAlum($_SESSION['In_id'],$Itemproduct_code,$itemproduct_name,$itemcategory,$mode_payment,$ItemPrice,$Itemtotal,$amount_paid,$due,$order_date,$customer[1],$customer[0],$address,$phone,$sales_rep,$status2,$GMD2,$CEO2,$Accountant2,$Itemcolor,$Itemmeter_length,$Itemkg_weight,$Itemguage,$Itemold_price,$Itemembossed,$Itemcost_of_goods);

            $clear_out = $maineg->delete_All('addtocart','sales_rep',$sales_rep);

         if ($Run == true && $Main = true) {

            $RunQ=$maineg->AUTOMATIC_SMS_API($customer_phone,$msg_bodycredit);
            $RunQ1=$maineg->AUTOMATIC_SMS_API($customer_phoneMa,$msg_bodycreditMa);

          echo '<script>swal("Success","Credit Sales Added, Waitin for Approval","success");</script>';
        }

       }elseif( $adjusted_option == "Yes"){

                   $Run = $maineg->insertInvoiceDetailsPriceADJUSTAlum($_SESSION['In_id'],$Itemproduct_code,$itemproduct_name,$itemcategory,$mode_payment,$ItemPrice,$Itemtotal,$amount_paid,$due,$order_date,$customer[1],$customer[0],$address,$phone,$sales_rep,$status2,$GMD2,$CEO2,$Accountant2,$Itemguage,$Itemcolor,$Itemkg_weight,$Itemmeter_length,$Itemembossed,$Itemold_price,$Itemcost_of_goods);

                   $clear_out = $maineg->delete_All('addtocart','sales_rep',$sales_rep);

                    if ($Run == true) {

                        $RunQ=$maineg->AUTOMATIC_SMS_API($customer_phone,$msg_bodyadustedprice);
                        //$RunQ1=$maineg->AUTOMATIC_SMS_API($customer_phoneMa,$msg_bodyadustedpriceMa);

                        echo '<script>swal("Success","Credit Sales Added, Waiting for Approval","success");</script>';

                         }

               }else{

        $Run = $maineg->insertInvoiceDetailsAlum($_SESSION['In_id'],$Itemproduct_code,$itemproduct_name,$itemcategory,$mode_payment,$ItemPrice,$Itemtotal,$amount_paid,$due,$order_date,$customer[1],$customer[0],$address,$phone,$Itemcolor,$Itemguage,$Itemold_price,$Itemkg_weight,$Itemmeter_length,$Itemembossed,$sales_rep,$status1,$GMD1,$CEO1,$Accountant1,$bank_name,$bank_id,$Itemcost_of_goods);
      
       if ($Run == true) {
          $RunQ22=$maineg->UpdateStockStatus($staockSTAS,$Itemproduct_code);
          $Main =  $maineg->insertInvoicelog($_SESSION['In_id'],$sales_rep,$ItemPrice,$timex,$order_date,$Itemtotal,$amount_paid,$due,$status1,$GMD1,$CEO1,$Accountant1,$bank_name,$bank_id,$Itemcost_of_goods);
          $clear_out = $maineg->delete_All('addtocart','sales_rep',$sales_rep);
         if ($Main == true && $RunQ22==true) {
          echo '<script>swal("Success","Transaction Successful","success");</script>';
                }
            } 
       }

    }else{

            echo '<script>swal("Error","Unable to Perform Transaction","error");</script>';

           } 
           $countLoop++;
      }
      
    //     if($Main == true){

    //      $RunQR=$maineg->insertBankLog($bank_name,$bank_id,$transcation_type,$transaction_id,$due,$description,$initial_balancen,$currentBalancen,$deposit_date,$image);
    //  $RunQchart2=$maineg->chartofAccount($bank_id,$amount_paid);
    // $RunQchart=$maineg->chartofAccount($Account1,$due);
    // $RunQchart1=$maineg->chartofAccount($Account,$amount_paid);
    // $RunQLog1=$maineg->insertAccountLog($transaction_id,$transaction_source,$due,$datex,$Account1,$account_type1,$sales_rep,$series_name1);
    //  $RunQLog2=$maineg->insertAccountLog($transaction_id,$transaction_source,$amount_paid,$datex,$Account,$account_type,$sales_rep,$series_name);

    //   }
}


if (isset($_POST['del'])) {
    $DeleteCat = $_POST['del'];
    $Call = $maineg->cart_Delete($DeleteCat);
      if ($Call==true) {
     echo '<script>swal("Success","Item Removed","success")</script>';
     // echo '<script>window.location="index.php?action=Catery"</script>';
  }
}

require_once 'view/aluminum_coils.php';
break;




case 'SaleListAlumCoils':
if (isset($_POST['addCart'])){
    $product_code = $_POST['product_code'];
    $product_name   = $_POST['product_name'];
    $category = $_POST['category'];
    $quantity   = $_POST['kg_weight'];
    $guage   = $_POST['guage'];
    $color   = $_POST['color'];
    $meter_length   = $_POST['meter_length'];
    $embossed   = $_POST['embossed'];
    $old_price   = $_POST['old_price'];

    
    $price   = $_POST['price'];
    @$total   = $_POST['total'];
    // $new_total = str_replace(',', '', $total);
    $cart_date = $_POST['cart_date']; 
    $sales_rep  = $_POST['sales_rep1'];
    @$new_toatl = $price * $quantity;
    $purchase_price   = $_POST['purchase_price'];
    @$cost_of_goods = $purchase_price * $quantity;

     if ($maineg->check_if_Record_Exist('addtocart', 'product_code', $product_code) == true) {

        echo '<script>swal("Error","Item Already Added, Update the quantity or Select another Item","error");</script>'; 

    }else{

      if(empty($sales_rep) || empty($cart_date) ||  empty($product_code) || empty($product_name)|| empty($price) || empty($quantity) || empty($total)){
      echo '<script>swal("Error","one or more fields are empty","error");</script>'; 
        // echo '<script>alert("one or more fields are empty")</script>';
      }else{
        
        if($price < $old_price){

        $Run = $maineg->addtocartAlum($product_code,$product_name,$category,$price,$old_price,$new_toatl,$cart_date,$sales_rep,$guage,$color,$quantity,$meter_length,$embossed,$cost_of_goods);
      
       if($Run == true) {
           echo '<script>alert("Success,New Item Added");</script>';
           echo '<script>window.location="?action=AluminiumCoils"</script>';
        } else{
        echo '<script>swal("Error","Unable to Perform Transaction","error");</script>';
        } 

        }else{

        $Run = $maineg->addtocartAlum($product_code,$product_name,$category,$price,$old_price,$total,$cart_date,$sales_rep,$guage,$color,$quantity,$meter_length,$embossed,$cost_of_goods);
      
       if($Run == true) {
           echo '<script>alert("Success,New Item Added");</script>';
           echo '<script>window.location="?action=AluminiumCoils"</script>';
        } else{
        echo '<script>swal("Error","Unable to Perform Transaction","error");</script>';
        } 

        }

    }

}



}
require_once 'view/sale_addListAlumCoils.php';
break;




case 'PpgiCoils': 
if (isset($_POST['seeItem'])){
   $sales_rep  = $_POST['sales_rep'];
   $order_date = $_POST['order_date'];  
   $timex = $_POST['timex'];
   $type   = $_POST['type'];
   $mode_payment = $_POST['mode_payment'];
   $customer_name = $_POST['customer_name'];
   $address = $_POST['address'];
   $phone   = $_POST['phone'];
   $customer_name_new = $_POST['customer_name_new'];
   $address_new = $_POST['address_new'];
   $phone_new   = $_POST['phone_new'];
   $product_code = $_POST['product_code'];
   $category = $_POST['category'];
   $product_name   = $_POST['product_name'];
   $price   = $_POST['price'];
   $guage   = $_POST['guage'];
   $color   = $_POST['color'];
   $kg_weight   = $_POST['kg_weight'];
   $meter_length   = $_POST['meter_length'];
   $embossed   = $_POST['embossed'];
   $old_price   = $_POST['old_price'];
   
   $bank = $_POST['bank_name'];
   $bank_deatils = explode('-', $bank);
   $bank_id = $bank_deatils[0];
   $bank_name = $bank_deatils[1];

   $total   = $_POST['total'];
   $cost_of_goods   = $_POST['cost_of_goods'];
   $amount_paid = $_POST['amount_paid'];

   // $old_balance   = $_POST['old_balance'];
   // $include_bal   = $_POST['include_bal'];
   // $old_amount_paid = $_POST['old_amount_paid'];
   // $new_balance = $old_balance - $old_amount_paid;
   // $total_paid = $old_amount_paid + $amount_paid;

   $grand_total = $_POST['grand_total'];
   $customer = explode('-', $customer_name);
   $rand=rand(10000,99999999);
   $invoice_id = $rand;
   $_SESSION['In_id'] = $invoice_id;
   $newTotal = str_replace(',', '', $total);
   $due = $grand_total - $amount_paid;
   $new_due =  $due;
   $status = "Active";
   $datex = date('Y-m-d');
   $Account = "4000_SALES";
   $Account1 = "1200_ACCOUNT_RECEIVABLE";

   $furt1  = 'Sales';
   $a1=rand(10000,1000);
   $b1=rand(100,1);
   $c1=rand(1000,10);
   $transaction_id= $furt1."_".$c1.$a1; 
   $transaction_source = "SALES";
   $account_type = "Daily Sales";
   $series_name ="Income";
   $no_id = "";
   $qty = 0;

   $account_type1 = "Account Receivable";
   $series_name1 ="Asset";
   $description1 = "Sales On Credit";
   $type1 = "Credit";
   $status1 = " Approved";
   $GMD1 = "Approved";
   $CEO1 = "Approved";
   $Accountant1 = "Approved";
   $status2 = "Unapproved";
   $GMD2 = "Unapproved";
   $CEO2 = "Unapproved";
   $Accountant2 = "Unapproved";
   $adjusted_option = $_POST['adjusted_option'];

   $id = $_POST['id'];


    $customer_name_new_id = $customer_name_new;

    $staockSTAS = "outstock";


    //  $msg_bodycredit = 'Hi Sir, There is a Request For Credit Sale Approval, Thanks!'; 
    // $msg_bodyadustedprice = 'Hi Sir, There is a Request For Price Adjustment Sale Approval, Thanks!';  

    // $msg_bodycreditMa = 'Hi Ma, There is a Request For Credit Sale Approval, Thanks!'; 
    // $msg_bodyadustedpriceMa = 'Hi Ma, There is a Request For Price Adjustment Sale Approval, Thanks!';  
    
    // $customer_phone = '08164528072';
    // $customer_phoneMa = '08067683668';
    
     $msg_bodycredit = 'Hi Sir / Madam, There is a Request For Credit Sale Approval, Thanks!'; 
     $msg_bodyadustedprice = 'Hi Sir / Madam, There is a Request For Price Adjustment Sale Approval, Thanks!';  

    // $msg_bodycreditMa = 'Hi Ma, There is a Request For Credit Sale Approval, Thanks!'; 
    // $msg_bodyadustedpriceMa = 'Hi Ma, There is a Request For Price Adjustment Sale Approval, Thanks!';  
    
    $customer_phone = '08067683668,08164528072';
    // $customer_phoneMa =''; 

    $result = $maineg->Get_balanceCredit($customer[1]); 
   $result1 = $maineg->Get_balanceDebit($customer[1]); 
   foreach ($result1 as $k => $v) {}                             
   foreach ($result as $k => $v) {}
   $balance1 = $result[$k]['credit'] + $amount_paid;
   $balance2 = $result1[$k]['debit'] + $due;
   $initial_balance = $balance2 - $balance1; 
   $currentBalance = $initial_balance;
   
   $resultn = $maineg->Get_bank_balanceCredit($bank_id); 
   $resultn1 = $maineg->Get_bank_balanceDebit($bank_id); 
   foreach ($resultn1 as $k => $v) {}                             
   foreach ($resultn as $k => $v) {}
   $balancen1 = $resultn[$k]['amount'];
   $balancen2 = $resultn1[$k]['amount'];

   $image = '';

   $deposit_date = date('Y-m-d');
   
   $transcation_type = "Credit";
   $transaction_source1 = " Sales";
 
   $initial_balancen = $balancen1;
   $currentBalancen = $amount_paid + $balancen1 - $balancen2;

//     if($type == "Regular Customer" && $mode_payment != "Credit" && $adjusted_option != "Yes"){
//     $cREDITchart=$maineg->insertCustomer_ledger($customer[1],$amount_paid,$due,$currentBalance);
//   }


// if($type == "Regular Customer" && $mode_payment != "Credit" && $adjusted_option != "Yes"){
    
//         if($currentBalance <= 0 ){
    
//            $newcurrentBalance = '0.00';
           
//            $cREDITchart=$maineg->insertCustomer_ledger($customer[1],$amount_paid,$due,$newcurrentBalance);
    
//        }else{
//            $cREDITchart=$maineg->insertCustomer_ledger($customer[1],$amount_paid,$due,$currentBalance);
//        }
//    }


   $countLoop=1;
   for($i=0; $i<sizeof($product_code);$i++){
   $ItemPrice = $price[$i];
   $Itemproduct_code = $product_code[$i];
   $itemcategory = $category[$i];
   $itemproduct_name = $product_name[$i];
   // $quantity   = $qty[$i];
   $Itemtotal = $total[$i];
   $Itemguage = $guage[$i];  
   $Itemcolor =  $color[$i];  
   $Itemkg_weight = $kg_weight[$i];  
   $Itemmeter_length = $meter_length[$i]; 
   $Itemembossed = $embossed[$i];  
   $Itemold_price = $old_price[$i];
   $Itemcost_of_goods = $cost_of_goods[$i];
   $new_id = $id[$i];    
   


      if(empty($sales_rep) || empty($order_date) ||  empty($product_code) || empty($product_name)|| empty($price) || empty($kg_weight) || empty($total) || empty($invoice_id)){
      echo '<script>swal("Error","one or more fields are empty","error");</script>'; 
       
      }elseif($type == "Walk-in Customer"){


       if($mode_payment == "Credit" && $adjusted_option == "Yes"){

                   $Run = $maineg->insertInvoiceDetailsPriceADJUSTAlum($_SESSION['In_id'],$Itemproduct_code,$itemproduct_name,$itemcategory,$mode_payment,$ItemPrice,$Itemtotal,$amount_paid,$due,$order_date,$no_id,$customer_name_new,$address_new,$phone_new,$sales_rep,$status2,$GMD2,$CEO2,$Accountant2,$Itemguage,$Itemcolor,$Itemkg_weight,$Itemmeter_length,$Itemembossed,$Itemold_price,$Itemcost_of_goods);

                   $clear_out = $maineg->delete_All('addtocart','sales_rep',$sales_rep);

                    if ($Run == true) {

                        $RunQ=$maineg->AUTOMATIC_SMS_API($customer_phone,$msg_bodyadustedprice);
                        //$RunQ1=$maineg->AUTOMATIC_SMS_API($customer_phoneMa,$msg_bodyadustedpriceMa);

                        echo '<script>swal("Success","Credit Sales Added, Waiting for Approval","success");</script>';

                         }

               }elseif($mode_payment == "Credit"){

        $Run = $maineg->insertInvoiceDetailsCreditAlum($_SESSION['In_id'],$Itemproduct_code,$itemproduct_name,$itemcategory,$mode_payment,$ItemPrice,$Itemtotal,$amount_paid,$due,$order_date,$no_id,$customer_name_new,$address_new,$phone_new,$sales_rep,$status2,$GMD2,$CEO2,$Accountant2,$Itemcolor,$Itemmeter_length,$Itemkg_weight,$Itemguage,$Itemold_price,$Itemembossed,$Itemcost_of_goods);

        $clear_out = $maineg->delete_All('addtocart','sales_rep',$sales_rep);

         if ($Run == true) {

             $RunQ=$maineg->AUTOMATIC_SMS_API($customer_phone,$msg_bodycredit);
           // $RunQ1=$maineg->AUTOMATIC_SMS_API($customer_phoneMa,$msg_bodycreditMa);

                echo '<script>swal("Success","Credit Sales Added, Waiting for Approval","success");</script>';

                 }


               }elseif( $adjusted_option == "Yes"){

                   $Run = $maineg->insertInvoiceDetailsPriceADJUSTAlum($_SESSION['In_id'],$Itemproduct_code,$itemproduct_name,$itemcategory,$mode_payment,$ItemPrice,$Itemtotal,$amount_paid,$due,$order_date,$no_id,$customer_name_new,$address_new,$phone_new,$sales_rep,$status2,$GMD2,$CEO2,$Accountant2,$Itemguage,$Itemcolor,$Itemkg_weight,$Itemmeter_length,$Itemembossed,$Itemold_price,$Itemcost_of_goods);

                   $clear_out = $maineg->delete_All('addtocart','sales_rep',$sales_rep);

                    if ($Run == true) {

                        $RunQ=$maineg->AUTOMATIC_SMS_API($customer_phone,$msg_bodyadustedprice);
                        //$RunQ1=$maineg->AUTOMATIC_SMS_API($customer_phoneMa,$msg_bodyadustedpriceMa);

                        echo '<script>swal("Success","Credit Sales Added, Waiting for Approval","success");</script>';

                         }

               }else{

            $Run = $maineg->insertInvoiceDetailsAlum($_SESSION['In_id'],$Itemproduct_code,$itemproduct_name,$itemcategory,$mode_payment,$ItemPrice,$Itemtotal,$amount_paid,$due,$order_date,$no_id,$customer_name_new,$address_new,$phone_new,$Itemcolor,$Itemguage,$Itemold_price,$Itemkg_weight,$Itemmeter_length,$Itemembossed,$sales_rep,$status1,$GMD1,$CEO1,$Accountant1,$bank_name,$bank_id,$Itemcost_of_goods);
      
               if ($Run == true) {
                $RunQ22=$maineg->UpdateStockStatus($staockSTAS,$Itemproduct_code);
                 $Main =  $maineg->insertInvoicelog($_SESSION['In_id'],$sales_rep,$ItemPrice,$timex,$order_date,$Itemtotal,$amount_paid,$due,$status1,$GMD1,$CEO1,$Accountant1,$bank_name,$bank_id,$Itemcost_of_goods);
                  $clear_out = $maineg->delete_All('addtocart','sales_rep',$sales_rep);
                 if ($Main == true && $RunQ22==true) {
                  echo '<script>swal("Success","Transaction Successful","success");</script>';
                         }
                      } 
               }

        }elseif($type == "Regular Customer"){

       if($mode_payment == "Credit" && $adjusted_option == "Yes"){

                 $Run = $maineg->insertInvoiceDetailsPriceADJUSTAlum($_SESSION['In_id'],$Itemproduct_code,$itemproduct_name,$itemcategory,$mode_payment,$ItemPrice,$Itemtotal,$amount_paid,$due,$order_date,$customer[1],$customer[0],$address,$phone,$sales_rep,$status2,$GMD2,$CEO2,$Accountant2,$Itemguage,$Itemcolor,$Itemkg_weight,$Itemmeter_length,$Itemembossed,$Itemold_price,$Itemcost_of_goods);

                    $clear_out = $maineg->delete_All('addtocart','sales_rep',$sales_rep);

                 if ($Run == true) {

                        $RunQ=$maineg->AUTOMATIC_SMS_API($customer_phone,$msg_bodyadustedprice);
                        //$RunQ1=$maineg->AUTOMATIC_SMS_API($customer_phoneMa,$msg_bodyadustedpriceMa);

                        echo '<script>swal("Success","Credit Sales Added, Waiting for Approval","success");</script>';

                    }

               }elseif($mode_payment == "Credit"){

           $Run = $maineg->insertInvoiceDetailsCreditAlum($_SESSION['In_id'],$Itemproduct_code,$itemproduct_name,$itemcategory,$mode_payment,$ItemPrice,$Itemtotal,$amount_paid,$due,$order_date,$customer[1],$customer[0],$address,$phone,$sales_rep,$status2,$GMD2,$CEO2,$Accountant2,$Itemcolor,$Itemmeter_length,$Itemkg_weight,$Itemguage,$Itemold_price,$Itemembossed,$Itemcost_of_goods);

            // $Main =  $maineg->insertInvoicelog($_SESSION['In_id'],$sales_rep,$ItemPrice,$timex,$order_date,$Itemtotal,$amount_paid,$due,$status2,$GMD2,$CEO2,$Accountant2);
            $clear_out = $maineg->delete_All('addtocart','sales_rep',$sales_rep);

         if ($Run == true && $Main = true) {

            $RunQ=$maineg->AUTOMATIC_SMS_API($customer_phone,$msg_bodycredit);
            //$RunQ1=$maineg->AUTOMATIC_SMS_API($customer_phoneMa,$msg_bodycreditMa);

          echo '<script>swal("Success","Credit Sales Added, Waitin for Approval","success");</script>';
        }

       }elseif( $adjusted_option == "Yes"){

                   $Run = $maineg->insertInvoiceDetailsPriceADJUSTAlum($_SESSION['In_id'],$Itemproduct_code,$itemproduct_name,$itemcategory,$mode_payment,$ItemPrice,$Itemtotal,$amount_paid,$due,$order_date,$customer[1],$customer[0],$address,$phone,$sales_rep,$status2,$GMD2,$CEO2,$Accountant2,$Itemguage,$Itemcolor,$Itemkg_weight,$Itemmeter_length,$Itemembossed,$Itemold_price,$Itemcost_of_goods);

                   $clear_out = $maineg->delete_All('addtocart','sales_rep',$sales_rep);

                    if ($Run == true) {

                        $RunQ=$maineg->AUTOMATIC_SMS_API($customer_phone,$msg_bodyadustedprice);
                        //$RunQ1=$maineg->AUTOMATIC_SMS_API($customer_phoneMa,$msg_bodyadustedpriceMa);

                        echo '<script>swal("Success","Credit Sales Added, Waiting for Approval","success");</script>';

                         }

               }else{


        $Run = $maineg->insertInvoiceDetailsAlum($_SESSION['In_id'],$Itemproduct_code,$itemproduct_name,$itemcategory,$mode_payment,$ItemPrice,$Itemtotal,$amount_paid,$due,$order_date,$customer[1],$customer[0],$address,$phone,$Itemcolor,$Itemguage,$Itemold_price,$Itemkg_weight,$Itemmeter_length,$Itemembossed,$sales_rep,$status1,$GMD1,$CEO1,$Accountant1,$bank_name,$bank_id,$Itemcost_of_goods);
      
       if ($Run == true) {
          $RunQ22=$maineg->UpdateStockStatus($staockSTAS,$Itemproduct_code);
         $Main =  $maineg->insertInvoicelog($_SESSION['In_id'],$sales_rep,$ItemPrice,$timex,$order_date,$Itemtotal,$amount_paid,$due,$status1,$GMD1,$CEO1,$Accountant1,$bank_name,$bank_id,$Itemcost_of_goods);
          $clear_out = $maineg->delete_All('addtocart','sales_rep',$sales_rep);
         if ($Main == true && $RunQ22==true) {
          echo '<script>swal("Success","Transaction Successful","success");</script>';
                }
            } 
       }

    }else{

            echo '<script>swal("Error","Unable to Perform Transaction","error");</script>';

           } 
           $countLoop++;
      }
      
    //     if($Main == true){

    //      $RunQR=$maineg->insertBankLog($bank_name,$bank_id,$transcation_type,$transaction_id,$due,$description,$initial_balancen,$currentBalancen,$deposit_date,$image);
    //  $RunQchart2=$maineg->chartofAccount($bank_id,$amount_paid);
    // $RunQchart=$maineg->chartofAccount($Account1,$due);
    // $RunQchart1=$maineg->chartofAccount($Account,$amount_paid);
    // $RunQLog1=$maineg->insertAccountLog($transaction_id,$transaction_source,$due,$datex,$Account1,$account_type1,$sales_rep,$series_name1);
    //  $RunQLog2=$maineg->insertAccountLog($transaction_id,$transaction_source,$amount_paid,$datex,$Account,$account_type,$sales_rep,$series_name);

    //   }
}


if (isset($_POST['del'])) {
    $DeleteCat = $_POST['del'];
    $Call = $maineg->cart_Delete($DeleteCat);
      if ($Call==true) {
     echo '<script>swal("Success","Item Removed","success")</script>';
     // echo '<script>window.location="index.php?action=Catery"</script>';
  }
}

require_once 'view/ppgi_coils.php';
break;




case 'SaleListPPGICoils':
if (isset($_POST['addCart'])){
    $product_code = $_POST['product_code'];
    $product_name   = $_POST['product_name'];
    $category = $_POST['category'];
    $quantity   = $_POST['kg_weight'];
    $guage   = $_POST['guage'];
    $color   = $_POST['color'];
    $meter_length   = $_POST['meter_length'];
    $embossed   = $_POST['embossed'];
    $old_price   = $_POST['old_price'];
    $price   = $_POST['price'];
    @$total   = $_POST['total'];
    // $new_total = str_replace(',', '', $total);
    $cart_date = $_POST['cart_date']; 
    $sales_rep  = $_POST['sales_rep1'];
    @$new_toatl = $price * $quantity;
    $purchase_price   = $_POST['purchase_price'];
    @$cost_of_goods = $purchase_price * $quantity;

     if ($maineg->check_if_Record_Exist('addtocart', 'product_code', $product_code) == true) {

        echo '<script>swal("Error","Item Already Added, Update the quantity or Select another Item","error");</script>'; 

    }else{

      if(empty($sales_rep) || empty($cart_date) ||  empty($product_code) || empty($product_name)|| empty($price) || empty($quantity) || empty($total)){
      echo '<script>swal("Error","one or more fields are empty","error");</script>'; 
        // echo '<script>alert("one or more fields are empty")</script>';
      }else{
        
        if($price < $old_price){

        $Run = $maineg->addtocartAlum($product_code,$product_name,$category,$price,$old_price,$new_toatl,$cart_date,$sales_rep,$guage,$color,$quantity,$meter_length,$embossed,$cost_of_goods);
      
       if($Run == true) {
           echo '<script>alert("Success,New Item Added");</script>';
           echo '<script>window.location="?action=PpgiCoils"</script>';
        } else{
        echo '<script>swal("Error","Unable to Perform Transaction","error");</script>';
        } 

        }else{

        $Run = $maineg->addtocartAlum($product_code,$product_name,$category,$price,$old_price,$total,$cart_date,$sales_rep,$guage,$color,$quantity,$meter_length,$embossed,$cost_of_goods);
      
       if($Run == true) {
           echo '<script>alert("Success,New Item Added");</script>';
           echo '<script>window.location="?action=PpgiCoils"</script>';
        } else{
        echo '<script>swal("Error","Unable to Perform Transaction","error");</script>';
        } 

        }
    }

    }
}
require_once 'view/sale_addListPPGICoils.php';
break;










case 'INDUST5': 
if (isset($_POST['seeItem'])){
   $sales_rep  = $_POST['sales_rep'];
   $order_date = $_POST['order_date'];  
   $timex = $_POST['timex'];
   $type   = $_POST['type'];
   $mode_payment = $_POST['mode_payment'];
   $customer_name = $_POST['customer_name'];
   $address = $_POST['address'];
   $phone   = $_POST['phone'];
   $customer_name_new = $_POST['customer_name_new'];
   $address_new = $_POST['address_new'];
   $phone_new   = $_POST['phone_new'];
   $product_code = $_POST['product_code'];
   $category = $_POST['category'];
   $product_name   = $_POST['product_name'];
   $price   = $_POST['price'];
   $guage   = $_POST['guage'];
   $color   = $_POST['color'];
   $kg_weight   = $_POST['kg_weight'];
   $meter_length   = $_POST['meter_length'];
   $embossed   = $_POST['embossed'];
   $old_price   = $_POST['old_price'];
   
   $bank = $_POST['bank_name'];
   $bank_deatils = explode('-', $bank);
   $bank_id = $bank_deatils[0];
   $bank_name = $bank_deatils[1];

   $total   = $_POST['total'];
   $cost_of_goods   = $_POST['cost_of_goods'];
   $amount_paid = $_POST['amount_paid'];

   // $old_balance   = $_POST['old_balance'];
   // $include_bal   = $_POST['include_bal'];
   // $old_amount_paid = $_POST['old_amount_paid'];
   // $new_balance = $old_balance - $old_amount_paid;
   // $total_paid = $old_amount_paid + $amount_paid;

   $grand_total = $_POST['grand_total'];
   $customer = explode('-', $customer_name);
   $rand=rand(10000,99999999);
   $invoice_id = $rand;
   $_SESSION['In_id'] = $invoice_id;
   $newTotal = str_replace(',', '', $total);
   $due = $grand_total - $amount_paid;
   $new_due =  $due;
   $status = "Active";
   $datex = date('Y-m-d');
   $Account = "4000_SALES";
   $Account1 = "1200_ACCOUNT_RECEIVABLE";

   $furt1  = 'Sales';
   $a1=rand(10000,1000);
   $b1=rand(100,1);
   $c1=rand(1000,10);
   $transaction_id= $furt1."_".$c1.$a1; 
   $transaction_source = "SALES";
   $account_type = "Daily Sales";
   $series_name ="Income";
   $no_id = "";
   $qty = 0;

   $account_type1 = "Account Receivable";
   $series_name1 ="Asset";
   $description = "Sales On Credit";
   $type1 = "Credit";
   $status1 = " Approved";
   $GMD1 = "Approved";
   $CEO1 = "Approved";
   $Accountant1 = "Approved";
   $status2 = "Unapproved";
   $GMD2 = "Unapproved";
   $CEO2 = "Unapproved";
   $Accountant2 = "Unapproved";
   $adjusted_option = $_POST['adjusted_option'];
   $id = $_POST['id'];


    $customer_name_new_id = $customer_name_new;

    $staockSTAS = "outstock";

    // $msg_bodycredit = 'Hi Sir, There is a Request For Credit Sale Approval, Thanks!'; 
    // $msg_bodyadustedprice = 'Hi Sir, There is a Request For Price Adjustment Sale Approval, Thanks!';  

    // $msg_bodycreditMa = 'Hi Ma, There is a Request For Credit Sale Approval, Thanks!'; 
    // $msg_bodyadustedpriceMa = 'Hi Ma, There is a Request For Price Adjustment Sale Approval, Thanks!';  
    
    // $customer_phone = '08164528072';
    // $customer_phoneMa = '08067683668';
    
     $msg_bodycredit = 'Hi Sir / Madam, There is a Request For Credit Sale Approval, Thanks!'; 
    $msg_bodyadustedprice = 'Hi Sir / Madam, There is a Request For Price Adjustment Sale Approval, Thanks!';  

    // $msg_bodycreditMa = 'Hi Ma, There is a Request For Credit Sale Approval, Thanks!'; 
    // $msg_bodyadustedpriceMa = 'Hi Ma, There is a Request For Price Adjustment Sale Approval, Thanks!';  
    
    $customer_phone = '08067683668,08164528072';
    // $customer_phoneMa =''; 

    $result = $maineg->Get_balanceCredit($customer[1]); 
   $result1 = $maineg->Get_balanceDebit($customer[1]); 
   foreach ($result1 as $k => $v) {}                             
   foreach ($result as $k => $v) {}
   $balance1 = $result[$k]['credit'] + $amount_paid;
   $balance2 = $result1[$k]['debit'] + $due;
   $initial_balance = $balance2 - $balance1; 
   $currentBalance = $initial_balance;
   
   
   $resultn = $maineg->Get_bank_balanceCredit($bank_id); 
   $resultn1 = $maineg->Get_bank_balanceDebit($bank_id); 
   foreach ($resultn1 as $k => $v) {}                             
   foreach ($resultn as $k => $v) {}
   $balancen1 = $resultn[$k]['amount'];
   $balancen2 = $resultn1[$k]['amount'];

   $image = '';

   $deposit_date = date('Y-m-d');
   
   $transcation_type = "Credit";
   $transaction_source1 = " Sales";
 
   $initial_balancen = $balancen1;
   $currentBalancen = $amount_paid + $balancen1 - $balancen2;

//     if($type == "Regular Customer" && $mode_payment != "Credit" && $adjusted_option != "Yes"){
//     $cREDITchart=$maineg->insertCustomer_ledger($customer[1],$amount_paid,$due,$currentBalance);
//   }

    
   //  if($type == "Regular Customer" && $mode_payment != "Credit" && $adjusted_option != "Yes"){
    
   //      if($currentBalance <= 0 ){
    
   //         $newcurrentBalance = '0.00';
           
   //         $cREDITchart=$maineg->insertCustomer_ledger($customer[1],$amount_paid,$due,$newcurrentBalance);
    
   //     }else{
   //         $cREDITchart=$maineg->insertCustomer_ledger($customer[1],$amount_paid,$due,$currentBalance);
   //     }
   // }


   $countLoop=1;
   for($i=0; $i<sizeof($product_code);$i++){
   $ItemPrice  = $price[$i];
   $Itemproduct_code  = $product_code[$i];
   $itemcategory   = $category[$i];
   $itemproduct_name   = $product_name[$i];
   // $quantity   = $qty[$i];
   $Itemtotal  = $total[$i];
   $Itemguage  = $guage[$i];  
   $Itemcolor  =  $color[$i];  
   $Itemkg_weight  = $kg_weight[$i];  
   $Itemmeter_length  = $meter_length[$i]; 
   $Itemembossed  =  $embossed[$i];  
   $Itemold_price  = $old_price[$i];
   $Itemcost_of_goods = $cost_of_goods[$i];
   $new_id  = $id[$i];    
   


      if(empty($sales_rep) || empty($order_date) ||  empty($product_code) || empty($product_name)|| empty($price) || empty($kg_weight) || empty($total) || empty($invoice_id)){
      echo '<script>swal("Error","one or more fields are empty","error");</script>'; 
       
      }elseif($type == "Walk-in Customer"){


       if($mode_payment == "Credit" && $adjusted_option == "Yes"){

                   $Run = $maineg->insertInvoiceDetailsPriceADJUSTAlum($_SESSION['In_id'],$Itemproduct_code,$itemproduct_name,$itemcategory,$mode_payment,$ItemPrice,$Itemtotal,$amount_paid,$due,$order_date,$no_id,$customer_name_new,$address_new,$phone_new,$sales_rep,$status2,$GMD2,$CEO2,$Accountant2,$Itemguage,$Itemcolor,$Itemkg_weight,$Itemmeter_length,$Itemembossed,$Itemold_price,$Itemcost_of_goods);

                   $clear_out = $maineg->delete_All('addtocart','sales_rep',$sales_rep);

                    if ($Run == true) {

                        $RunQ=$maineg->AUTOMATIC_SMS_API($customer_phone,$msg_bodyadustedprice);
                        //$RunQ1=$maineg->AUTOMATIC_SMS_API($customer_phoneMa,$msg_bodyadustedpriceMa);

                        echo '<script>swal("Success","Credit Sales Added, Waiting for Approval","success");</script>';

                         }

               }elseif($mode_payment == "Credit"){

        $Run = $maineg->insertInvoiceDetailsCreditAlum($_SESSION['In_id'],$Itemproduct_code,$itemproduct_name,$itemcategory,$mode_payment,$ItemPrice,$Itemtotal,$amount_paid,$due,$order_date,$no_id,$customer_name_new,$address_new,$phone_new,$sales_rep,$status2,$GMD2,$CEO2,$Accountant2,$Itemcolor,$Itemmeter_length,$Itemkg_weight,$Itemguage,$Itemold_price,$Itemembossed,$Itemcost_of_goods);

        $clear_out = $maineg->delete_All('addtocart','sales_rep',$sales_rep);

         if ($Run == true) {

            $RunQ=$maineg->AUTOMATIC_SMS_API($customer_phone,$msg_bodycredit);
            //$RunQ1=$maineg->AUTOMATIC_SMS_API($customer_phoneMa,$msg_bodycreditMa);

                echo '<script>swal("Success","Credit Sales Added, Waiting for Approval","success");</script>';

                 }


               }elseif( $adjusted_option == "Yes"){

                   $Run = $maineg->insertInvoiceDetailsPriceADJUSTAlum($_SESSION['In_id'],$Itemproduct_code,$itemproduct_name,$itemcategory,$mode_payment,$ItemPrice,$Itemtotal,$amount_paid,$due,$order_date,$no_id,$customer_name_new,$address_new,$phone_new,$sales_rep,$status2,$GMD2,$CEO2,$Accountant2,$Itemguage,$Itemcolor,$Itemkg_weight,$Itemmeter_length,$Itemembossed,$Itemold_price,$Itemcost_of_goods);

                   $clear_out = $maineg->delete_All('addtocart','sales_rep',$sales_rep);

                    if ($Run == true) {

                        $RunQ=$maineg->AUTOMATIC_SMS_API($customer_phone,$msg_bodyadustedprice);
                        //$RunQ1=$maineg->AUTOMATIC_SMS_API($customer_phoneMa,$msg_bodyadustedpriceMa);

                        echo '<script>swal("Success","Credit Sales Added, Waiting for Approval","success");</script>';

                         }

               }else{

            $Run = $maineg->insertInvoiceDetailsAlum($_SESSION['In_id'],$Itemproduct_code,$itemproduct_name,$itemcategory,$mode_payment,$ItemPrice,$Itemtotal,$amount_paid,$due,$order_date,$no_id,$customer_name_new,$address_new,$phone_new,$Itemcolor,$Itemguage,$Itemold_price,$Itemkg_weight,$Itemmeter_length,$Itemembossed,$sales_rep,$status1,$GMD1,$CEO1,$Accountant1,$bank_name,$bank_id,$Itemcost_of_goods);
      
               if ($Run == true) {
                $RunQ22=$maineg->UpdateStockStatus($staockSTAS,$Itemproduct_code);
                 $Main =  $maineg->insertInvoicelog($_SESSION['In_id'],$sales_rep,$ItemPrice,$timex,$order_date,$Itemtotal,$amount_paid,$due,$status1,$GMD1,$CEO1,$Accountant1,$bank_name,$bank_id,$Itemcost_of_goods);
                  $clear_out = $maineg->delete_All('addtocart','sales_rep',$sales_rep);
                 if ($Main == true && $RunQ22==true) {
                  echo '<script>swal("Success","Transaction Successful","success");</script>';
                         }
                      } 
               }
        }elseif($type == "Regular Customer"){

       if($mode_payment == "Credit" && $adjusted_option == "Yes"){

                   $Run = $maineg->insertInvoiceDetailsPriceADJUSTAlum($_SESSION['In_id'],$Itemproduct_code,$itemproduct_name,$itemcategory,$mode_payment,$ItemPrice,$Itemtotal,$amount_paid,$due,$order_date,$customer[1],$customer[0],$address,$phone,$sales_rep,$status2,$GMD2,$CEO2,$Accountant2,$Itemguage,$Itemcolor,$Itemkg_weight,$Itemmeter_length,$Itemembossed,$Itemold_price,$Itemcost_of_goods);

                   $clear_out = $maineg->delete_All('addtocart','sales_rep',$sales_rep);

                    if ($Run == true) {

                        $RunQ=$maineg->AUTOMATIC_SMS_API($customer_phone,$msg_bodyadustedprice);
                        //$RunQ1=$maineg->AUTOMATIC_SMS_API($customer_phoneMa,$msg_bodyadustedpriceMa);

                        echo '<script>swal("Success","Credit Sales Added, Waiting for Approval","success");</script>';

                         }

               }elseif($mode_payment == "Credit"){

           $Run = $maineg->insertInvoiceDetailsCreditAlum($_SESSION['In_id'],$Itemproduct_code,$itemproduct_name,$itemcategory,$mode_payment,$ItemPrice,$Itemtotal,$amount_paid,$due,$order_date,$customer[1],$customer[0],$address,$phone,$sales_rep,$status2,$GMD2,$CEO2,$Accountant2,$Itemcolor,$Itemmeter_length,$Itemkg_weight,$Itemguage,$Itemold_price,$Itemembossed,$Itemcost_of_goods);

            // $Main =  $maineg->insertInvoicelog($_SESSION['In_id'],$sales_rep,$ItemPrice,$timex,$order_date,$Itemtotal,$amount_paid,$due,$status2,$GMD2,$CEO2,$Accountant2);
            $clear_out = $maineg->delete_All('addtocart','sales_rep',$sales_rep);

         if ($Run == true && $Main = true) {
               
            $RunQ=$maineg->AUTOMATIC_SMS_API($customer_phone,$msg_bodycredit);
            //$RunQ1=$maineg->AUTOMATIC_SMS_API($customer_phoneMa,$msg_bodycreditMa);

          echo '<script>swal("Success","Credit Sales Added, Waitin for Approval","success");</script>';
        }

       }elseif( $adjusted_option == "Yes"){

                   $Run = $maineg->insertInvoiceDetailsPriceADJUSTAlum($_SESSION['In_id'],$Itemproduct_code,$itemproduct_name,$itemcategory,$mode_payment,$ItemPrice,$Itemtotal,$amount_paid,$due,$order_date,$customer[1],$customer[0],$address,$phone,$sales_rep,$status2,$GMD2,$CEO2,$Accountant2,$Itemguage,$Itemcolor,$Itemkg_weight,$Itemmeter_length,$Itemembossed,$Itemold_price,$Itemcost_of_goods);

                   $clear_out = $maineg->delete_All('addtocart','sales_rep',$sales_rep);

                    if ($Run == true) {

                        $RunQ=$maineg->AUTOMATIC_SMS_API($customer_phone,$msg_bodyadustedprice);
                        //$RunQ1=$maineg->AUTOMATIC_SMS_API($customer_phoneMa,$msg_bodyadustedpriceMa);

                        echo '<script>swal("Success","Credit Sales Added, Waiting for Approval","success");</script>';

                         }

               }else{

        $Run = $maineg->insertInvoiceDetailsAlum($_SESSION['In_id'],$Itemproduct_code,$itemproduct_name,$itemcategory,$mode_payment,$ItemPrice,$Itemtotal,$amount_paid,$due,$order_date,$customer[1],$customer[0],$address,$phone,$Itemcolor,$Itemguage,$Itemold_price,$Itemkg_weight,$Itemmeter_length,$Itemembossed,$sales_rep,$status1,$GMD1,$CEO1,$Accountant1,$bank_name,$bank_id,$Itemcost_of_goods);
      
       if ($Run == true) {
          $RunQ22=$maineg->UpdateStockStatus($staockSTAS,$Itemproduct_code);
         $Main =  $maineg->insertInvoicelog($_SESSION['In_id'],$sales_rep,$ItemPrice,$timex,$order_date,$Itemtotal,$amount_paid,$due,$status1,$GMD1,$CEO1,$Accountant1,$bank_name,$bank_id,$Itemcost_of_goods);
          $clear_out = $maineg->delete_All('addtocart','sales_rep',$sales_rep);
         if ($Main == true && $RunQ22==true) {
          echo '<script>swal("Success","Transaction Successful","success");</script>';
                }
            } 
       }

    }else{

            echo '<script>swal("Error","Unable to Perform Transaction","error");</script>';

           } 
           $countLoop++;
      }
      
    //   if($Main == true){

    //      $RunQR=$maineg->insertBankLog($bank_name,$bank_id,$transcation_type,$transaction_id,$due,$description,$initial_balancen,$currentBalancen,$deposit_date,$image);
    //  $RunQchart2=$maineg->chartofAccount($bank_id,$amount_paid);
    // $RunQchart=$maineg->chartofAccount($Account1,$due);
    // $RunQchart1=$maineg->chartofAccount($Account,$amount_paid);
    // $RunQLog1=$maineg->insertAccountLog($transaction_id,$transaction_source,$due,$datex,$Account1,$account_type1,$sales_rep,$series_name1);
    //  $RunQLog2=$maineg->insertAccountLog($transaction_id,$transaction_source,$amount_paid,$datex,$Account,$account_type,$sales_rep,$series_name);

    //   }
}


if (isset($_POST['del'])) {
    $DeleteCat = $_POST['del'];
    $Call = $maineg->cart_Delete($DeleteCat);
      if ($Call==true) {
     echo '<script>swal("Success","Item Removed","success")</script>';
     // echo '<script>window.location="index.php?action=Catery"</script>';
  }
}

require_once 'view/industrial_5.php';
break;




case 'SaleListIndustrial5':
if (isset($_POST['addCart'])){
    $product_code = $_POST['product_code'];
    $product_name   = $_POST['product_name'];
    $category = $_POST['category'];
    $quantity   = $_POST['kg_weight'];
    $guage   = $_POST['guage'];
    $color   = $_POST['color'];
    $meter_length   = $_POST['meter_length'];
    $embossed   = $_POST['embossed'];
    $old_price   = $_POST['old_price'];
    $price   = $_POST['price'];
    @$total   = $_POST['total'];
    // $new_total = str_replace(',', '', $total);
    $cart_date = $_POST['cart_date']; 
    $sales_rep  = $_POST['sales_rep1'];
    @$new_toatl = $price * $quantity;
    $purchase_price   = $_POST['purchase_price'];
    @$cost_of_goods = $purchase_price * $quantity;

     if ($maineg->check_if_Record_Exist('addtocart', 'product_code', $product_code) == true) {

        echo '<script>swal("Error","Item Already Added, Update the quantity or Select another Item","error");</script>'; 

    }else{

      if(empty($sales_rep) || empty($cart_date) ||  empty($product_code) || empty($product_name)|| empty($price) || empty($quantity) || empty($total)){
      echo '<script>swal("Error","one or more fields are empty","error");</script>'; 
        // echo '<script>alert("one or more fields are empty")</script>';
      }else{
        
        if($price < $old_price){

        $Run = $maineg->addtocartAlum($product_code,$product_name,$category,$price,$old_price,$new_toatl,$cart_date,$sales_rep,$guage,$color,$quantity,$meter_length,$embossed,$cost_of_goods);
      
       if($Run == true) {
           echo '<script>alert("Success,New Item Added");</script>';
           echo '<script>window.location="?action=INDUST5"</script>';
        } else{
        echo '<script>swal("Error","Unable to Perform Transaction","error");</script>';
        } 

        }else{

        $Run = $maineg->addtocartAlum($product_code,$product_name,$category,$price,$old_price,$total,$cart_date,$sales_rep,$guage,$color,$quantity,$meter_length,$embossed,$cost_of_goods);
      
       if($Run == true) {
           echo '<script>alert("Success,New Item Added");</script>';
           echo '<script>window.location="?action=INDUST5"</script>';
        } else{
        echo '<script>swal("Error","Unable to Perform Transaction","error");</script>';
        } 

        }

    }
}
}
require_once 'view/sale_addListINDUST5.php';
break;







case 'CameroonZinc': 
if (isset($_POST['seeItem'])){
   $sales_rep  = $_POST['sales_rep'];
   $order_date = $_POST['order_date'];  
   $timex = $_POST['timex'];
   $type   = $_POST['type'];
   $mode_payment = $_POST['mode_payment'];
   $customer_name = $_POST['customer_name'];
   $address = $_POST['address'];
   $phone   = $_POST['phone'];
   $customer_name_new = $_POST['customer_name_new'];
   $address_new = $_POST['address_new'];
   $phone_new   = $_POST['phone_new'];
   $product_code = $_POST['product_code'];
   $category = $_POST['category'];
   $product_name   = $_POST['product_name'];
   $price   = $_POST['price'];
   $guage   = $_POST['guage'];
   $color   = $_POST['color'];
   $qty   = $_POST['quantity'];
   $embossed   = $_POST['embossed'];
   $old_price   = $_POST['old_price'];

   
   $bank = $_POST['bank_name'];
   $bank_deatils = explode('-', $bank);
   $bank_id = $bank_deatils[0];
   $bank_name = $bank_deatils[1];

   $total   = $_POST['total'];
   $amount_paid = $_POST['amount_paid'];
   $cost_of_goods   = $_POST['cost_of_goods'];
   $grand_total = $_POST['grand_total'];
   $customer = explode('-', $customer_name);
    $rand=rand(10000,99999999);
   $invoice_id = $rand;
   $_SESSION['In_id'] = $invoice_id;
   $newTotal = str_replace(',', '', $total);
   $due = $grand_total - $amount_paid;
   $new_due =  $due;
   $status = "Active";
   $datex = date('Y-m-d');
   $Account = "4000_SALES";
   $Account1 = "1200_ACCOUNT_RECEIVABLE";

   $furt1  = 'Sales';
   $a1=rand(10000,1000);
   $b1=rand(100,1);
   $c1=rand(1000,10);
   $transaction_id= $furt1."_".$c1.$a1; 
   $transaction_source = "SALES";
   $account_type = "Daily Sales";
   $series_name ="Income";
   $no_id = "";
   // $qty = 0;

   $account_type1 = "Account Receivable";
   $series_name1 ="Asset";
   $description = "Sales On Credit";
   $type1 = "Credit";
   $status1 = " Approved";
   $GMD1 = "Approved";
   $CEO1 = "Approved";
   $Accountant1 = "Approved";
   $status2 = "Unapproved";
   $GMD2 = "Unapproved";
   $CEO2 = "Unapproved";
   $Accountant2 = "Unapproved";
   $adjusted_option = $_POST['adjusted_option'];
   $id = $_POST['id'];


    $customer_name_new_id = $customer_name_new;

    $staockSTAS = "outstock";

    // $msg_bodycredit = 'Hi Sir, There is a Request For Credit Sale Approval, Thanks!'; 
    // $msg_bodyadustedprice = 'Hi Sir, There is a Request For Price Adjustment Sale Approval, Thanks!';  

    // $msg_bodycreditMa = 'Hi Ma, There is a Request For Credit Sale Approval, Thanks!'; 
    // $msg_bodyadustedpriceMa = 'Hi Ma, There is a Request For Price Adjustment Sale Approval, Thanks!';  
    
    // $customer_phone = '08164528072';
    // $customer_phoneMa = '08067683668';
    
     $msg_bodycredit = 'Hi Sir / Madam, There is a Request For Credit Sale Approval, Thanks!'; 
    $msg_bodyadustedprice = 'Hi Sir / Madam, There is a Request For Price Adjustment Sale Approval, Thanks!';  

    // $msg_bodycreditMa = 'Hi Ma, There is a Request For Credit Sale Approval, Thanks!'; 
    // $msg_bodyadustedpriceMa = 'Hi Ma, There is a Request For Price Adjustment Sale Approval, Thanks!';  
    
    $customer_phone = '08067683668,08164528072';
    // $customer_phoneMa =''; 


    $result = $maineg->Get_balanceCredit($customer[1]); 
   $result1 = $maineg->Get_balanceDebit($customer[1]); 
   foreach ($result1 as $k => $v) {}                             
   foreach ($result as $k => $v) {}
   $balance1 = $result[$k]['credit'] + $amount_paid;
   $balance2 = $result1[$k]['debit'] + $due;
   $initial_balance = $balance2 - $balance1; 
   $currentBalance = $initial_balance;
   
   $resultn = $maineg->Get_bank_balanceCredit($bank_id); 
   $resultn1 = $maineg->Get_bank_balanceDebit($bank_id); 
   foreach ($resultn1 as $k => $v) {}                             
   foreach ($resultn as $k => $v) {}
   $balancen1 = $resultn[$k]['amount'];
   $balancen2 = $resultn1[$k]['amount'];

   $image = '';

   $deposit_date = date('Y-m-d');
   
   $transcation_type = "Credit";
   $transaction_source1 = " Sales";
 
   $initial_balancen = $balancen1;
   $currentBalancen = $amount_paid + $balancen1 - $balancen2;

//     if($type == "Regular Customer" && $mode_payment != "Credit" && $adjusted_option != "Yes"){
//     $cREDITchart=$maineg->insertCustomer_ledger($customer[1],$amount_paid,$due,$currentBalance);
//   }

   
   // if($type == "Regular Customer" && $mode_payment != "Credit" && $adjusted_option != "Yes"){
    
   //      if($currentBalance <= 0 ){
    
   //         $newcurrentBalance = '0.00';
           
   //         $cREDITchart=$maineg->insertCustomer_ledger($customer[1],$amount_paid,$due,$newcurrentBalance);
    
   //     }else{
   //         $cREDITchart=$maineg->insertCustomer_ledger($customer[1],$amount_paid,$due,$currentBalance);
   //     }
   // }


   $countLoop=1;
   for($i=0; $i<sizeof($product_code);$i++){
   $ItemPrice  = $price[$i];
   $Itemproduct_code  = $product_code[$i];
   $itemcategory   = $category[$i];
   $itemproduct_name   = $product_name[$i];
   $quantity   = $qty[$i];
   $Itemtotal  = $total[$i];
   $Itemguage  = $guage[$i];  
   $Itemcolor  =  $color[$i];  
   $Itemembossed  =  $embossed[$i];  
   $Itemold_price  = $old_price[$i];
   $Itemcost_of_goods = $cost_of_goods[$i];
   $new_id  = $id[$i];    
   


      if(empty($sales_rep) || empty($order_date) ||  empty($product_code) || empty($product_name)|| empty($price) || empty($quantity) || empty($total) || empty($invoice_id)){
      echo '<script>swal("Error","one or more fields are empty","error");</script>'; 
       
      }elseif($type == "Walk-in Customer"){


       if($mode_payment == "Credit" && $adjusted_option == "Yes"){

                   $Run = $maineg->insertInvoiceDetailsPriceADJUSTZinc($_SESSION['In_id'],$Itemproduct_code,$itemproduct_name,$itemcategory,$mode_payment,$quantity,$ItemPrice,$Itemtotal,$amount_paid,$due,$order_date,$no_id,$customer_name_new,$address_new,$phone_new,$sales_rep,$status2,$GMD2,$CEO2,$Accountant2,$Itemguage,$Itemcolor,$Itemembossed,$Itemold_price,$Itemcost_of_goods);

                   $clear_out = $maineg->delete_All('addtocart','sales_rep',$sales_rep);

                    if ($Run == true) {

                        $RunQ=$maineg->AUTOMATIC_SMS_API($customer_phone,$msg_bodyadustedprice);
                        //$RunQ1=$maineg->AUTOMATIC_SMS_API($customer_phoneMa,$msg_bodyadustedpriceMa);

                        echo '<script>swal("Success","Credit Sales Added, Waiting for Approval","success");</script>';

                         }

               }elseif($mode_payment == "Credit"){

        $Run = $maineg->insertInvoiceDetailsCreditZinc($_SESSION['In_id'],$Itemproduct_code,$itemproduct_name,$itemcategory,$mode_payment,$quantity,$ItemPrice,$Itemtotal,$amount_paid,$due,$order_date,$no_id,$customer_name_new,$address_new,$phone_new,$sales_rep,$status2,$GMD2,$CEO2,$Accountant2,$Itemguage,$Itemcolor,$Itemembossed,$Itemold_price,$Itemcost_of_goods);

        $clear_out = $maineg->delete_All('addtocart','sales_rep',$sales_rep);

         if ($Run == true) {

             $RunQ=$maineg->AUTOMATIC_SMS_API($customer_phone,$msg_bodycredit);
             //$RunQ1=$maineg->AUTOMATIC_SMS_API($customer_phoneMa,$msg_bodycreditMa);

                echo '<script>swal("Success","Credit Sales Added, Waiting for Approval","success");</script>';

                 }


               }elseif( $adjusted_option == "Yes"){

                   $Run = $maineg->insertInvoiceDetailsPriceADJUSTZinc($_SESSION['In_id'],$Itemproduct_code,$itemproduct_name,$itemcategory,$mode_payment,$quantity,$ItemPrice,$Itemtotal,$amount_paid,$due,$order_date,$no_id,$customer_name_new,$address_new,$phone_new,$sales_rep,$status2,$GMD2,$CEO2,$Accountant2,$Itemguage,$Itemcolor,$Itemembossed,$Itemold_price,$Itemcost_of_goods);

                   $clear_out = $maineg->delete_All('addtocart','sales_rep',$sales_rep);

                    if ($Run == true) {

                        $RunQ=$maineg->AUTOMATIC_SMS_API($customer_phone,$msg_bodyadustedprice);
                        //$RunQ1=$maineg->AUTOMATIC_SMS_API($customer_phoneMa,$msg_bodyadustedpriceMa);

                        echo '<script>swal("Success","Credit Sales Added, Waiting for Approval","success");</script>';

                         }

               }else{

            $Run = $maineg->insertInvoiceDetailsZinc($_SESSION['In_id'],$Itemproduct_code,$itemproduct_name,$itemcategory,$mode_payment,$quantity,$ItemPrice,$Itemtotal,$amount_paid,$due,$order_date,$no_id,$customer_name_new,$address_new,$phone_new,$Itemcolor,$Itemguage,$Itemold_price,$Itemembossed,$sales_rep,$status1,$GMD1,$CEO1,$Accountant1,$bank_name,$bank_id,$Itemcost_of_goods);
      
               if ($Run == true) {
                $RunQ=$maineg->UpdateStocksale($quantity,$Itemproduct_code);
                 $Main =  $maineg->insertInvoicelog($_SESSION['In_id'],$sales_rep,$ItemPrice,$timex,$order_date,$Itemtotal,$amount_paid,$due,$status1,$GMD1,$CEO1,$Accountant1,$bank_name,$bank_id,$Itemcost_of_goods);
  
                  $clear_out = $maineg->delete_All('addtocart','sales_rep',$sales_rep);
                 if ($Main == true && $RunQchart == true  && $RunQLog1 == true) {
                  echo '<script>swal("Success","Transaction Successful","success");</script>';
                         }
                      } 
               }
        }elseif($type == "Regular Customer"){

       if($mode_payment == "Credit" && $adjusted_option == "Yes"){

                   $Run = $maineg->insertInvoiceDetailsPriceADJUSTZinc($_SESSION['In_id'],$Itemproduct_code,$itemproduct_name,$itemcategory,$mode_payment,$quantity,$ItemPrice,$Itemtotal,$amount_paid,$due,$order_date,$customer[1],$customer[0],$address,$phone,$sales_rep,$status2,$GMD2,$CEO2,$Accountant2,$Itemguage,$Itemcolor,$Itemembossed,$Itemold_price,$Itemcost_of_goods);

                   $clear_out = $maineg->delete_All('addtocart','sales_rep',$sales_rep);

                    if ($Run == true) {


                        $RunQ=$maineg->AUTOMATIC_SMS_API($customer_phone,$msg_bodyadustedprice);
                         //$RunQ1=$maineg->AUTOMATIC_SMS_API($customer_phoneMa,$msg_bodyadustedpriceMa);

                        echo '<script>swal("Success","Credit Sales Added, Waiting for Approval","success");</script>';

                         }

               }elseif($mode_payment == "Credit"){

           $Run = $maineg->insertInvoiceDetailsCreditZinc($_SESSION['In_id'],$Itemproduct_code,$itemproduct_name,$itemcategory,$mode_payment,$quantity,$ItemPrice,$Itemtotal,$amount_paid,$due,$order_date,$customer[1],$customer[0],$address,$phone,$sales_rep,$status2,$GMD2,$CEO2,$Accountant2,$Itemguage,$Itemcolor,$Itemembossed,$Itemold_price,$Itemcost_of_goods);

            // $Main =  $maineg->insertInvoicelog($_SESSION['In_id'],$sales_rep,$ItemPrice,$timex,$order_date,$Itemtotal,$amount_paid,$due,$status2,$GMD2,$CEO2,$Accountant2);
            $clear_out = $maineg->delete_All('addtocart','sales_rep',$sales_rep);

         if ($Run == true) {

         $RunQ=$maineg->AUTOMATIC_SMS_API($customer_phone,$msg_bodycredit);
           $RunQ1=$maineg->AUTOMATIC_SMS_API($customer_phoneMa,$msg_bodycreditMa);

          echo '<script>swal("Success","Credit Sales Added, Waitin for Approval","success");</script>';
        }

       }elseif( $adjusted_option == "Yes"){

                   $Run = $maineg->insertInvoiceDetailsPriceADJUSTZinc($_SESSION['In_id'],$Itemproduct_code,$itemproduct_name,$itemcategory,$mode_payment,$quantity,$ItemPrice,$Itemtotal,$amount_paid,$due,$order_date,$customer[1],$customer[0],$address,$phone,$sales_rep,$status2,$GMD2,$CEO2,$Accountant2,$Itemguage,$Itemcolor,$Itemembossed,$Itemold_price,$Itemcost_of_goods);

                   $clear_out = $maineg->delete_All('addtocart','sales_rep',$sales_rep);

                    if ($Run == true) {


                        $RunQ=$maineg->AUTOMATIC_SMS_API($customer_phone,$msg_bodyadustedprice);
                        // $RunQ1=$maineg->AUTOMATIC_SMS_API($customer_phoneMa,$msg_bodyadustedpriceMa);

                        echo '<script>swal("Success","Credit Sales Added, Waiting for Approval","success");</script>';

                         }

               }else{

        $Run = $maineg->insertInvoiceDetailsZinc($_SESSION['In_id'],$Itemproduct_code,$itemproduct_name,$itemcategory,$mode_payment,$quantity,$ItemPrice,$Itemtotal,$amount_paid,$due,$order_date,$customer[1],$customer[0],$address,$phone,$Itemcolor,$Itemguage,$Itemold_price,$Itemembossed,$sales_rep,$status1,$GMD1,$CEO1,$Accountant1,$bank_name,$bank_id,$Itemcost_of_goods);
      
       if ($Run == true) {
         $Main = $maineg->insertInvoicelog($_SESSION['In_id'],$sales_rep,$ItemPrice,$timex,$order_date,$Itemtotal,$amount_paid,$due,$status1,$GMD1,$CEO1,$Accountant1,$bank_name,$bank_id,$Itemcost_of_goods);
           $RunQ=$maineg->UpdateStocksale($quantity,$Itemproduct_code);
          $clear_out = $maineg->delete_All('addtocart','sales_rep',$sales_rep);
         if ($Main == true && $RunQ == true) {
          echo '<script>swal("Success","Transaction Successful","success");</script>';
                }
            } 
       }

    }else{

            echo '<script>swal("Error","Unable to Perform Transaction","error");</script>';

           } 
           $countLoop++;
      }
      
    //   if($Main == true){

    //      $RunQR=$maineg->insertBankLog($bank_name,$bank_id,$transcation_type,$transaction_id,$due,$description,$initial_balancen,$currentBalancen,$deposit_date,$image);
    //  $RunQchart2=$maineg->chartofAccount($bank_id,$amount_paid);
    // $RunQchart=$maineg->chartofAccount($Account1,$due);
    // $RunQchart1=$maineg->chartofAccount($Account,$amount_paid);
    // $RunQLog1=$maineg->insertAccountLog($transaction_id,$transaction_source,$due,$datex,$Account1,$account_type1,$sales_rep,$series_name1);
    //  $RunQLog2=$maineg->insertAccountLog($transaction_id,$transaction_source,$amount_paid,$datex,$Account,$account_type,$sales_rep,$series_name);

    //   }
}


if (isset($_POST['del'])) {
    $DeleteCat = $_POST['del'];
    $Call = $maineg->cart_Delete($DeleteCat);
      if ($Call==true) {
     echo '<script>swal("Success","Item Removed","success")</script>';
     // echo '<script>window.location="index.php?action=Catery"</script>';
  }
}

require_once 'view/cameroon_zinc.php';
break;




case 'SaleListCameroonZinc':
if (isset($_POST['addCart'])){
    $product_code = $_POST['product_code'];
    $product_name   = $_POST['product_name'];
    $category = $_POST['category'];
    $quantity   = $_POST['quantity'];
    $guage   = $_POST['guage'];
    $color   = $_POST['color'];
    $embossed   = $_POST['embossed'];
    $old_price   = $_POST['old_price'];
    $price   = $_POST['price'];
    @$total   = $_POST['total'];
    // $new_total = str_replace(',', '', $total);
    $cart_date = $_POST['cart_date']; 
    $sales_rep  = $_POST['sales_rep1'];
    @$new_toatl = $price * $quantity;
    $purchase_price   = $_POST['purchase_price'];
    @$cost_of_goods = $purchase_price * $quantity;

     if ($maineg->check_if_Record_Exist('addtocart', 'product_code', $product_code) == true) {

        echo '<script>swal("Error","Item Already Added, Update the quantity or Select another Item","error");</script>'; 

    }else{

      if(empty($sales_rep) || empty($cart_date) ||  empty($product_code) || empty($product_name)|| empty($price) || empty($quantity) || empty($total)){
      echo '<script>swal("Error","one or more fields are empty","error");</script>'; 
        // echo '<script>alert("one or more fields are empty")</script>';
      }else{
        
        if($price < $old_price){

        $Run = $maineg->addtocartZinc($product_code,$product_name,$category,$quantity,$price,$old_price,$total,$cart_date,$sales_rep,$guage,$color,$embossed,$cost_of_goods);
      
       if($Run == true) {
           echo '<script>alert("Success,New Item Added");</script>';
           echo '<script>window.location="?action=CameroonZinc"</script>';
        } else{
        echo '<script>swal("Error","Unable to Perform Transaction","error");</script>';
        } 

        }else{

        $Run = $maineg->addtocartZinc($product_code,$product_name,$category,$quantity,$price,$old_price,$total,$cart_date,$sales_rep,$guage,$color,$embossed,$cost_of_goods);
      
       if($Run == true) {
           echo '<script>alert("Success,New Item Added");</script>';
           echo '<script>window.location="?action=CameroonZinc"</script>';
        } else{
        echo '<script>swal("Error","Unable to Perform Transaction","error");</script>';
        } 

        }

    }
}
}
require_once 'view/sale_addListCameroonZinc.php';
break;



case 'Zinc': 
if (isset($_POST['seeItem'])){
   $sales_rep  = $_POST['sales_rep'];
   $order_date = $_POST['order_date'];  
   $timex = $_POST['timex'];
   $type   = $_POST['type'];
   $mode_payment = $_POST['mode_payment'];
   $customer_name = $_POST['customer_name'];
   $address = $_POST['address'];
   $phone   = $_POST['phone'];
   $customer_name_new = $_POST['customer_name_new'];
   $address_new = $_POST['address_new'];
   $phone_new   = $_POST['phone_new'];
   $product_code = $_POST['product_code'];
   $category = $_POST['category'];
   $product_name   = $_POST['product_name'];
   $price   = $_POST['price'];
   $guage   = $_POST['guage'];
   $color   = $_POST['color'];
   $qty   = $_POST['quantity'];
   $embossed   = $_POST['embossed'];
   $old_price   = $_POST['old_price'];
   
   $bank = $_POST['bank_name'];
   $bank_deatils = explode('-', $bank);
   $bank_id = $bank_deatils[0];
   $bank_name = $bank_deatils[1];

   $total   = $_POST['total'];
   $amount_paid = $_POST['amount_paid'];
   $cost_of_goods   = $_POST['cost_of_goods'];
   $grand_total = $_POST['grand_total'];
   $customer = explode('-', $customer_name);
   // $invoice_id  = $_POST['invoice_no']; 
    $rand=rand(10000,99999999);
   $invoice_id = $rand;
   $_SESSION['In_id'] = $invoice_id;
   $newTotal = str_replace(',', '', $total);
   $due = $grand_total - $amount_paid;
   $new_due =  $due;
   $status = "Active";
   $datex = date('Y-m-d');
   $Account = "4000_SALES";
   $Account1 = "1200_ACCOUNT_RECEIVABLE";

   $furt1  = 'Sales';
   $a1=rand(10000,1000);
   $b1=rand(100,1);
   $c1=rand(1000,10);
   $transaction_id= $furt1."_".$c1.$a1; 
   $transaction_source = "SALES";
   $account_type = "Daily Sales";
   $series_name ="Income";
   $no_id = "";
   // $qty = 0;

   $account_type1 = "Account Receivable";
   $series_name1 ="Asset";
   $description = "Sales On Credit";
   $type1 = "Credit";
   $status1 = " Approved";
   $GMD1 = "Approved";
   $CEO1 = "Approved";
   $Accountant1 = "Approved";
   $status2 = "Unapproved";
   $GMD2 = "Unapproved";
   $CEO2 = "Unapproved";
   $Accountant2 = "Unapproved";
   $adjusted_option = $_POST['adjusted_option'];
   $id = $_POST['id'];

   $customer_name_new_id = $customer_name_new;
   $staockSTAS = "outstock";

//   $msg_bodycredit = 'Hi Sir, There is a Request For Credit Sale Approval, Thanks!'; 
//     $msg_bodyadustedprice = 'Hi Sir, There is a Request For Price Adjustment Sale Approval, Thanks!';  

//     $msg_bodycreditMa = 'Hi Ma, There is a Request For Credit Sale Approval, Thanks!'; 
//     $msg_bodyadustedpriceMa = 'Hi Ma, There is a Request For Price Adjustment Sale Approval, Thanks!';  
    
//     $customer_phone = '08164528072';
    //$customer_phoneMa = '08067683668';
    
     $msg_bodycredit = 'Hi Sir / Madam, There is a Request For Credit Sale Approval, Thanks!'; 
    $msg_bodyadustedprice = 'Hi Sir / Madam, There is a Request For Price Adjustment Sale Approval, Thanks!';  

    // $msg_bodycreditMa = 'Hi Ma, There is a Request For Credit Sale Approval, Thanks!'; 
    // $msg_bodyadustedpriceMa = 'Hi Ma, There is a Request For Price Adjustment Sale Approval, Thanks!';  
    
    $customer_phone = '08067683668,08164528072';
    // $customer_phoneMa =''; 


    $result = $maineg->Get_balanceCredit($customer[1]); 
   $result1 = $maineg->Get_balanceDebit($customer[1]); 
   foreach ($result1 as $k => $v) {}                             
   foreach ($result as $k => $v) {}
   $balance1 = $result[$k]['credit'] + $amount_paid;
   $balance2 = $result1[$k]['debit'] + $due;
   $initial_balance = $balance2 - $balance1; 
   $currentBalance = $initial_balance;
   
   
   $resultn = $maineg->Get_bank_balanceCredit($bank_id); 
   $resultn1 = $maineg->Get_bank_balanceDebit($bank_id); 
   foreach ($resultn1 as $k => $v) {}                             
   foreach ($resultn as $k => $v) {}
   $balancen1 = $resultn[$k]['amount'];
   $balancen2 = $resultn1[$k]['amount'];

   $image = '';

   $deposit_date = date('Y-m-d');
   
   $transcation_type = "Credit";
   $transaction_source1 = " Sales";
 
   $initial_balancen = $balancen1;
   $currentBalancen = $amount_paid + $balancen1 - $balancen2;

    //     if($type == "Regular Customer" && $mode_payment != "Credit" && $adjusted_option != "Yes"){
    //     $cREDITchart=$maineg->insertCustomer_ledger($customer[1],$amount_paid,$due,$currentBalance);
    //   }


       // if($type == "Regular Customer" && $mode_payment != "Credit" && $adjusted_option != "Yes"){
        
       //      if($currentBalance <= 0 ){
        
       //         $newcurrentBalance = '0.00';
               
       //         $cREDITchart=$maineg->insertCustomer_ledger($customer[1],$amount_paid,$due,$newcurrentBalance);
        
       //     }else{
               
       //         $cREDITchart=$maineg->insertCustomer_ledger($customer[1],$amount_paid,$due,$currentBalance);
               
       //     }
       // }

   $countLoop=1;
   for($i=0; $i<sizeof($product_code);$i++){
   $ItemPrice  = $price[$i];
   $Itemproduct_code  = $product_code[$i];
   $itemcategory   = $category[$i];
   $itemproduct_name   = $product_name[$i];
   $quantity   = $qty[$i];
   $Itemtotal  = $total[$i];
   $Itemguage  = $guage[$i];  
   $Itemcolor  =  $color[$i];  
   $Itemembossed  =  $embossed[$i];  
   $Itemold_price  = $old_price[$i];
   $Itemcost_of_goods = $cost_of_goods[$i];
   $new_id  = $id[$i];    


      if(empty($sales_rep) || empty($order_date) ||  empty($product_code) || empty($product_name)|| empty($price) || empty($quantity) || empty($total) || empty($invoice_id)){
      echo '<script>swal("Error","one or more fields are empty","error");</script>'; 
       
      }elseif($type == "Walk-in Customer"){


       if($mode_payment == "Credit" && $adjusted_option == "Yes"){

                   $Run = $maineg->insertInvoiceDetailsPriceADJUSTZinc($_SESSION['In_id'],$Itemproduct_code,$itemproduct_name,$itemcategory,$mode_payment,$quantity,$ItemPrice,$Itemtotal,$amount_paid,$due,$order_date,$no_id,$customer_name_new,$address_new,$phone_new,$sales_rep,$status2,$GMD2,$CEO2,$Accountant2,$Itemguage,$Itemcolor,$Itemembossed,$Itemold_price,$Itemcost_of_goods);

                   $clear_out = $maineg->delete_All('addtocart','sales_rep',$sales_rep);

                    if ($Run == true) {

                             $RunQ=$maineg->AUTOMATIC_SMS_API($customer_phone,$msg_bodyadustedprice);
                             //$RunQ1=$maineg->AUTOMATIC_SMS_API($customer_phoneMa,$msg_bodyadustedpriceMa);

                        echo '<script>swal("Success","Credit Sales Added, Waiting for Approval","success");</script>';

                         }

               }elseif($mode_payment == "Credit"){

        $Run = $maineg->insertInvoiceDetailsCreditZinc($_SESSION['In_id'],$Itemproduct_code,$itemproduct_name,$itemcategory,$mode_payment,$quantity,$ItemPrice,$Itemtotal,$amount_paid,$due,$order_date,$no_id,$customer_name_new,$address_new,$phone_new,$sales_rep,$status2,$GMD2,$CEO2,$Accountant2,$Itemguage,$Itemcolor,$Itemembossed,$Itemold_price,$Itemcost_of_goods);

        $clear_out = $maineg->delete_All('addtocart','sales_rep',$sales_rep);

         if ($Run == true) {

            $RunQ=$maineg->AUTOMATIC_SMS_API($customer_phone,$msg_bodycredit);
            //$RunQ1=$maineg->AUTOMATIC_SMS_API($customer_phoneMa,$msg_bodycreditMa);

                echo '<script>swal("Success","Credit Sales Added, Waiting for Approval","success");</script>';

                 }


               }elseif( $adjusted_option == "Yes"){

                   $Run = $maineg->insertInvoiceDetailsPriceADJUSTZinc($_SESSION['In_id'],$Itemproduct_code,$itemproduct_name,$itemcategory,$mode_payment,$quantity,$ItemPrice,$Itemtotal,$amount_paid,$due,$order_date,$no_id,$customer_name_new,$address_new,$phone_new,$sales_rep,$status2,$GMD2,$CEO2,$Accountant2,$Itemguage,$Itemcolor,$Itemembossed,$Itemold_price,$Itemcost_of_goods);

                   $clear_out = $maineg->delete_All('addtocart','sales_rep',$sales_rep);

                    if ($Run == true) {

                             $RunQ=$maineg->AUTOMATIC_SMS_API($customer_phone,$msg_bodyadustedprice);
                             //$RunQ1=$maineg->AUTOMATIC_SMS_API($customer_phoneMa,$msg_bodyadustedpriceMa);

                        echo '<script>swal("Success","Credit Sales Added, Waiting for Approval","success");</script>';

                         }

               }else{

            $Run = $maineg->insertInvoiceDetailsZinc($_SESSION['In_id'],$Itemproduct_code,$itemproduct_name,$itemcategory,$mode_payment,$quantity,$ItemPrice,$Itemtotal,$amount_paid,$due,$order_date,$no_id,$customer_name_new,$address_new,$phone_new,$Itemcolor,$Itemguage,$Itemold_price,$Itemembossed,$sales_rep,$status1,$GMD1,$CEO1,$Accountant1,$bank_name,$bank_id,$Itemcost_of_goods);
      
               if ($Run == true) {
                // $RunQ22=$maineg->UpdateStockStatus($staockSTAS,$Itemproduct_code);
                 $Main =  $maineg->insertInvoicelog($_SESSION['In_id'],$sales_rep,$ItemPrice,$timex,$order_date,$Itemtotal,$amount_paid,$due,$status1,$GMD1,$CEO1,$Accountant1,$bank_name,$bank_id,$Itemcost_of_goods);
                   $RunQ=$maineg->UpdateStocksale($quantity,$Itemproduct_code);
                  $clear_out = $maineg->delete_All('addtocart','sales_rep',$sales_rep);
                 if ($Main == true && $RunQ == true) {
                  echo '<script>swal("Success","Transaction Successful","success");</script>';
                         }
                      } 
               }
        }elseif($type == "Regular Customer"){

       if($mode_payment == "Credit" && $adjusted_option == "Yes"){

                   $Run = $maineg->insertInvoiceDetailsPriceADJUSTZinc($_SESSION['In_id'],$Itemproduct_code,$itemproduct_name,$itemcategory,$mode_payment,$quantity,$ItemPrice,$Itemtotal,$amount_paid,$due,$order_date,$customer[1],$customer[0],$address,$phone,$sales_rep,$status2,$GMD2,$CEO2,$Accountant2,$Itemguage,$Itemcolor,$Itemembossed,$Itemold_price,$Itemcost_of_goods);

                   $clear_out = $maineg->delete_All('addtocart','sales_rep',$sales_rep);

                    if ($Run == true) {

                         $RunQ=$maineg->AUTOMATIC_SMS_API($customer_phone,$msg_bodyadustedprice);
                         //$RunQ1=$maineg->AUTOMATIC_SMS_API($customer_phoneMa,$msg_bodyadustedpriceMa);
 
                        echo '<script>swal("Success","Credit Sales Added, Waiting for Approval","success");</script>';

                         }

               }elseif($mode_payment == "Credit"){

           $Run = $maineg->insertInvoiceDetailsCreditZinc($_SESSION['In_id'],$Itemproduct_code,$itemproduct_name,$itemcategory,$mode_payment,$quantity,$ItemPrice,$Itemtotal,$amount_paid,$due,$order_date,$customer[1],$customer[0],$address,$phone,$sales_rep,$status2,$GMD2,$CEO2,$Accountant2,$Itemguage,$Itemcolor,$Itemembossed,$Itemold_price,$Itemcost_of_goods);

            // $Main =  $maineg->insertInvoicelog($_SESSION['In_id'],$sales_rep,$ItemPrice,$timex,$order_date,$Itemtotal,$amount_paid,$due,$status2,$GMD2,$CEO2,$Accountant2);
            $clear_out = $maineg->delete_All('addtocart','sales_rep',$sales_rep);

         if ($Run == true && $Main = true) {

             $RunQ=$maineg->AUTOMATIC_SMS_API($customer_phone,$msg_bodycredit);
             //$RunQ1=$maineg->AUTOMATIC_SMS_API($customer_phoneMa,$msg_bodycreditMa);

          echo '<script>swal("Success","Credit Sales Added, Waitin for Approval","success");</script>';
        }

       }elseif( $adjusted_option == "Yes"){

                   $Run = $maineg->insertInvoiceDetailsPriceADJUSTZinc($_SESSION['In_id'],$Itemproduct_code,$itemproduct_name,$itemcategory,$mode_payment,$quantity,$ItemPrice,$Itemtotal,$amount_paid,$due,$order_date,$customer[1],$customer[0],$address,$phone,$sales_rep,$status2,$GMD2,$CEO2,$Accountant2,$Itemguage,$Itemcolor,$Itemembossed,$Itemold_price,$Itemcost_of_goods);

                   $clear_out = $maineg->delete_All('addtocart','sales_rep',$sales_rep);

                    if ($Run == true) {

                         $RunQ=$maineg->AUTOMATIC_SMS_API($customer_phone,$msg_bodyadustedprice);
                        // $RunQ1=$maineg->AUTOMATIC_SMS_API($customer_phoneMa,$msg_bodyadustedpriceMa);
 
                        echo '<script>swal("Success","Credit Sales Added, Waiting for Approval","success");</script>';

                         }

               }else{

        $Run = $maineg->insertInvoiceDetailsZinc($_SESSION['In_id'],$Itemproduct_code,$itemproduct_name,$itemcategory,$mode_payment,$quantity,$ItemPrice,$Itemtotal,$amount_paid,$due,$order_date,$customer[1],$customer[0],$address,$phone,$Itemcolor,$Itemguage,$Itemold_price,$Itemembossed,$sales_rep,$status1,$GMD1,$CEO1,$Accountant1,$bank_name,$bank_id,$Itemcost_of_goods);
      
       if ($Run == true) {
         $Main =  $maineg->insertInvoicelog($_SESSION['In_id'],$sales_rep,$ItemPrice,$timex,$order_date,$Itemtotal,$amount_paid,$due,$status1,$GMD1,$CEO1,$Accountant1,$bank_name,$bank_id,$Itemcost_of_goods);
           $RunQ=$maineg->UpdateStocksale($quantity,$Itemproduct_code);
          $clear_out = $maineg->delete_All('addtocart','sales_rep',$sales_rep);
         if ($Main == true && $RunQ == true) {
          echo '<script>swal("Success","Transaction Successful","success");</script>';
                }
            } 
       }

    }else{

            echo '<script>swal("Error","Unable to Perform Transaction","error");</script>';

           } 
           $countLoop++;
      }
    //      if($Main == true){

    //      $RunQR=$maineg->insertBankLog($bank_name,$bank_id,$transcation_type,$transaction_id,$due,$description,$initial_balancen,$currentBalancen,$deposit_date,$image);
    //  $RunQchart2=$maineg->chartofAccount($bank_id,$amount_paid);
    // $RunQchart=$maineg->chartofAccount($Account1,$due);
    // $RunQchart1=$maineg->chartofAccount($Account,$amount_paid);
    // $RunQLog1=$maineg->insertAccountLog($transaction_id,$transaction_source,$due,$datex,$Account1,$account_type1,$sales_rep,$series_name1);
    //  $RunQLog2=$maineg->insertAccountLog($transaction_id,$transaction_source,$amount_paid,$datex,$Account,$account_type,$sales_rep,$series_name);

    //   }
}


if (isset($_POST['del'])) {
    $DeleteCat = $_POST['del'];
    $Call = $maineg->cart_Delete($DeleteCat);
      if ($Call==true) {
     echo '<script>swal("Success","Item Removed","success")</script>';
     // echo '<script>window.location="index.php?action=Catery"</script>';
  }
}

require_once 'view/zinc.php';
break;




case 'SaleListZinc':
if (isset($_POST['addCart'])){
    $product_code = $_POST['product_code'];
    $product_name   = $_POST['product_name'];
    $category = $_POST['category'];
    $quantity   = $_POST['quantity'];
    $guage   = $_POST['guage'];
    $color   = $_POST['color'];
    $embossed   = $_POST['embossed'];
    $old_price   = $_POST['old_price'];
    $price   = $_POST['price'];
    @$total   = $_POST['total'];
    // $new_total = str_replace(',', '', $total);
    $cart_date = $_POST['cart_date']; 
    $sales_rep  = $_POST['sales_rep1'];
    @$new_toatl = $price * $quantity;
    $purchase_price   = $_POST['purchase_price'];
    @$cost_of_goods = $purchase_price * $quantity;

     if ($maineg->check_if_Record_Exist('addtocart', 'product_code', $product_code) == true) {

        echo '<script>swal("Error","Item Already Added, Update the quantity or Select another Item","error");</script>'; 

    }else{

      if(empty($sales_rep) || empty($cart_date) ||  empty($product_code) || empty($product_name)|| empty($price) || empty($quantity) || empty($total)){
      echo '<script>swal("Error","one or more fields are empty","error");</script>'; 
        // echo '<script>alert("one or more fields are empty")</script>';
      }else{
        
        if($price < $old_price){

        $Run = $maineg->addtocartZinc($product_code,$product_name,$category,$quantity,$price,$old_price,$total,$cart_date,$sales_rep,$guage,$color,$embossed,$cost_of_goods);
      
       if($Run == true) {
           echo '<script>alert("Success,New Item Added");</script>';
           echo '<script>window.location="?action=Zinc"</script>';
        } else{
        echo '<script>swal("Error","Unable to Perform Transaction","error");</script>';
        } 

        }else{

        $Run = $maineg->addtocartZinc($product_code,$product_name,$category,$quantity,$price,$old_price,$total,$cart_date,$sales_rep,$guage,$color,$embossed,$cost_of_goods);
      
       if($Run == true) {
           echo '<script>alert("Success,New Item Added");</script>';
           echo '<script>window.location="?action=Zinc"</script>';
        } else{
        echo '<script>swal("Error","Unable to Perform Transaction","error");</script>';
        } 

        }

    }
}
}
require_once 'view/sale_addListZinc.php';
break;








case 'Stoncoated': 
if (isset($_POST['seeItem'])){
   $sales_rep  = $_POST['sales_rep'];
   $order_date = $_POST['order_date'];  
   $timex = $_POST['timex'];
   $type   = $_POST['type'];
   $mode_payment = $_POST['mode_payment'];
   $customer_name = $_POST['customer_name'];
   $address = $_POST['address'];
   $phone   = $_POST['phone'];
   $customer_name_new = $_POST['customer_name_new'];
   $address_new = $_POST['address_new'];
   $phone_new   = $_POST['phone_new'];
   $product_code = $_POST['product_code'];
   $category = $_POST['category'];
   $product_name   = $_POST['product_name'];
   $price   = $_POST['price'];
   $guage   = $_POST['guage'];
   $color   = $_POST['color'];
   $qty   = $_POST['quantity'];
   $design   = $_POST['design'];
   $old_price   = $_POST['old_price'];
   
   $bank = $_POST['bank_name'];
   $bank_deatils = explode('-', $bank);
   $bank_id = $bank_deatils[0];
   $bank_name = $bank_deatils[1];

   $total   = $_POST['total'];
   $amount_paid = $_POST['amount_paid'];
   $cost_of_goods   = $_POST['cost_of_goods'];
   $grand_total = $_POST['grand_total'];
   $customer = explode('-', $customer_name);
   $rand=rand(10000,99999999);
   $invoice_id = $rand; 
   $_SESSION['In_id'] = $invoice_id;
   $newTotal = str_replace(',', '', $total);
   $due = $grand_total - $amount_paid;
   $new_due =  $due;
   $status = "Active";
   $datex = date('Y-m-d');
   $Account = "4000_SALES";
   $Account1 = "1200_ACCOUNT_RECEIVABLE";

   $furt1  = 'Sales';
   $a1=rand(10000,1000);
   $b1=rand(100,1);
   $c1=rand(1000,10);
   $transaction_id= $furt1."_".$c1.$a1; 
   $transaction_source = "SALES";
   $account_type = "Daily Sales";
   $series_name ="Income";
   $no_id = "";
   // $qty = 0;

   $account_type1 = "Account Receivable";
   $series_name1 ="Asset";
   $description = "Sales On Credit";
   $type1 = "Credit";
   $status1 = " Approved";
   $GMD1 = "Approved";
   $CEO1 = "Approved";
   $Accountant1 = "Approved";
   $status2 = "Unapproved";
   $GMD2 = "Unapproved";
   $CEO2 = "Unapproved";
   $Accountant2 = "Unapproved";
   $adjusted_option = $_POST['adjusted_option'];
   $id = $_POST['id'];


    $customer_name_new_id = $customer_name_new;

    $staockSTAS = "outstock";
    // $msg_bodycredit = 'Hi Sir, There is a Request For Credit Sale Approval, Thanks!'; 
    // $msg_bodyadustedprice = 'Hi Sir, There is a Request For Price Adjustment Sale Approval, Thanks!';  

    // $msg_bodycreditMa = 'Hi Ma, There is a Request For Credit Sale Approval, Thanks!'; 
    // $msg_bodyadustedpriceMa = 'Hi Ma, There is a Request For Price Adjustment Sale Approval, Thanks!';  
    
    // $customer_phone = '08164528072';
    // $customer_phoneMa = '08067683668';
    
     $msg_bodycredit = 'Hi Sir / Madam, There is a Request For Credit Sale Approval, Thanks!'; 
    $msg_bodyadustedprice = 'Hi Sir / Madam, There is a Request For Price Adjustment Sale Approval, Thanks!';  

    // $msg_bodycreditMa = 'Hi Ma, There is a Request For Credit Sale Approval, Thanks!'; 
    // $msg_bodyadustedpriceMa = 'Hi Ma, There is a Request For Price Adjustment Sale Approval, Thanks!';  
    
    $customer_phone = '08067683668,08164528072';
    // $customer_phoneMa =''; 


    $result = $maineg->Get_balanceCredit($customer[1]); 
   $result1 = $maineg->Get_balanceDebit($customer[1]); 
   foreach ($result1 as $k => $v) {}                             
   foreach ($result as $k => $v) {}
   $balance1 = $result[$k]['credit'] + $amount_paid;
   $balance2 = $result1[$k]['debit'] + $due;
   $initial_balance = $balance2 - $balance1; 
   $currentBalance = $initial_balance;
   
   
   $resultn = $maineg->Get_bank_balanceCredit($bank_id); 
   $resultn1 = $maineg->Get_bank_balanceDebit($bank_id); 
   foreach ($resultn1 as $k => $v) {}                             
   foreach ($resultn as $k => $v) {}
   $balancen1 = $resultn[$k]['amount'];
   $balancen2 = $resultn1[$k]['amount'];

   $image = '';

   $deposit_date = date('Y-m-d');
   
   $transcation_type = "Credit";
   $transaction_source1 = " Sales";
 
   $initial_balancen = $balancen1;
   $currentBalancen = $amount_paid + $balancen1 - $balancen2;

//     if($type == "Regular Customer" && $mode_payment != "Credit" && $adjusted_option != "Yes"){
//     $cREDITchart=$maineg->insertCustomer_ledger($customer[1],$amount_paid,$due,$currentBalance);
//   }

    
   //  if($type == "Regular Customer" && $mode_payment != "Credit" && $adjusted_option != "Yes"){
    
   //      if($currentBalance <= 0 ){
    
   //         $newcurrentBalance = '0.00';
           
   //         $cREDITchart=$maineg->insertCustomer_ledger($customer[1],$amount_paid,$due,$newcurrentBalance);
    
   //     }else{
   //         $cREDITchart=$maineg->insertCustomer_ledger($customer[1],$amount_paid,$due,$currentBalance);
   //     }
   // }


   $countLoop=1;
   for($i=0; $i<sizeof($product_code);$i++){
   $ItemPrice  = $price[$i];
   $Itemproduct_code  = $product_code[$i];
   $itemcategory   = $category[$i];
   $itemproduct_name   = $product_name[$i];
   $quantity   = $qty[$i];
   $Itemtotal  = $total[$i];
   $Itemguage  = $guage[$i];  
   $Itemcolor  =  $color[$i];  
   $Itemdesign  =  $design[$i];  
   $Itemold_price  = $old_price[$i];
   $Itemcost_of_goods = $cost_of_goods[$i];
   $new_id  = $id[$i];    
   


      if(empty($sales_rep) || empty($order_date) ||  empty($product_code) || empty($product_name)|| empty($price) || empty($quantity) || empty($total) || empty($invoice_id)){
      echo '<script>swal("Error","one or more fields are empty","error");</script>'; 
       
      }elseif($type == "Walk-in Customer"){


       if($mode_payment == "Credit" && $adjusted_option == "Yes"){

                   $Run = $maineg->insertInvoiceDetailsPriceADJUSTCoted($_SESSION['In_id'],$Itemproduct_code,$itemproduct_name,$itemcategory,$mode_payment,$quantity,$ItemPrice,$Itemtotal,$amount_paid,$due,$order_date,$no_id,$customer_name_new,$address_new,$phone_new,$sales_rep,$status2,$GMD2,$CEO2,$Accountant2,$Itemguage,$Itemcolor,$Itemdesign,$Itemold_price,$Itemcost_of_goods);

                   $clear_out = $maineg->delete_All('addtocart','sales_rep',$sales_rep);

                    if ($Run == true) {

                        $RunQ=$maineg->AUTOMATIC_SMS_API($customer_phone,$msg_bodyadustedprice);
                         //$RunQ1=$maineg->AUTOMATIC_SMS_API($customer_phoneMa,$msg_bodyadustedpriceMa);

                        echo '<script>swal("Success","Credit Sales Added, Waiting for Approval","success");</script>';

                         }

               }elseif($mode_payment == "Credit"){

        $Run = $maineg->insertInvoiceDetailsCreditCoatd($_SESSION['In_id'],$Itemproduct_code,$itemproduct_name,$itemcategory,$mode_payment,$quantity,$ItemPrice,$Itemtotal,$amount_paid,$due,$order_date,$no_id,$customer_name_new,$address_new,$phone_new,$sales_rep,$status2,$GMD2,$CEO2,$Accountant2,$Itemguage,$Itemcolor,$Itemdesign,$Itemold_price,$Itemcost_of_goods);

        $clear_out = $maineg->delete_All('addtocart','sales_rep',$sales_rep);

         if ($Run == true) {

             $RunQ=$maineg->AUTOMATIC_SMS_API($customer_phone,$msg_bodycredit);
              //$RunQ1=$maineg->AUTOMATIC_SMS_API($customer_phoneMa,$msg_bodycreditMa);

                echo '<script>swal("Success","Credit Sales Added, Waiting for Approval","success");</script>';

                 }


               }elseif( $adjusted_option == "Yes"){

                   $Run = $maineg->insertInvoiceDetailsPriceADJUSTCoted($_SESSION['In_id'],$Itemproduct_code,$itemproduct_name,$itemcategory,$mode_payment,$quantity,$ItemPrice,$Itemtotal,$amount_paid,$due,$order_date,$no_id,$customer_name_new,$address_new,$phone_new,$sales_rep,$status2,$GMD2,$CEO2,$Accountant2,$Itemguage,$Itemcolor,$Itemdesign,$Itemold_price,$Itemcost_of_goods);

                   $clear_out = $maineg->delete_All('addtocart','sales_rep',$sales_rep);

                    if ($Run == true) {

                        $RunQ=$maineg->AUTOMATIC_SMS_API($customer_phone,$msg_bodyadustedprice);
                         //$RunQ1=$maineg->AUTOMATIC_SMS_API($customer_phoneMa,$msg_bodyadustedpriceMa);

                        echo '<script>swal("Success","Credit Sales Added, Waiting for Approval","success");</script>';

                         }

               }else{

            $Run = $maineg->insertInvoiceDetailsCoated($_SESSION['In_id'],$Itemproduct_code,$itemproduct_name,$itemcategory,$mode_payment,$quantity,$ItemPrice,$Itemtotal,$amount_paid,$due,$order_date,$no_id,$customer_name_new,$address_new,$phone_new,$Itemcolor,$Itemguage,$Itemold_price,$Itemdesign,$sales_rep,$status1,$GMD1,$CEO1,$Accountant1,$bank_name,$bank_id,$Itemcost_of_goods);
      
               if ($Run == true) {
                 $Main =  $maineg->insertInvoicelog($_SESSION['In_id'],$sales_rep,$ItemPrice,$timex,$order_date,$Itemtotal,$amount_paid,$due,$status1,$GMD1,$CEO1,$Accountant1,$bank_name,$bank_id);
                   $RunQ=$maineg->UpdateStocksale($quantity,$Itemproduct_code);
                  $clear_out = $maineg->delete_All('addtocart','sales_rep',$sales_rep);
                 if ($Main == true && $RunQ == true) {
                  echo '<script>swal("Success","Transaction Successful","success");</script>';
                         }
                      } 
               }
        }elseif($type == "Regular Customer"){

       if($mode_payment == "Credit" && $adjusted_option == "Yes"){

                   $Run = $maineg->insertInvoiceDetailsPriceADJUSTCoted($_SESSION['In_id'],$Itemproduct_code,$itemproduct_name,$itemcategory,$mode_payment,$quantity,$ItemPrice,$Itemtotal,$amount_paid,$due,$order_date,$customer[1],$customer[0],$address,$phone,$sales_rep,$status2,$GMD2,$CEO2,$Accountant2,$Itemguage,$Itemcolor,$Itemdesign,$Itemold_pric,$Itemcost_of_goodse);

                   $clear_out = $maineg->delete_All('addtocart','sales_rep',$sales_rep);

                    if ($Run == true) {
                    
                        $RunQ=$maineg->AUTOMATIC_SMS_API($customer_phone,$msg_bodyadustedprice);
                        //$RunQ1=$maineg->AUTOMATIC_SMS_API($customer_phoneMa,$msg_bodyadustedpriceMa);

                        echo '<script>swal("Success","Credit Sales Added, Waiting for Approval","success");</script>';

                         }

               }elseif($mode_payment == "Credit"){

           $Run = $maineg->insertInvoiceDetailsCreditCoatd($_SESSION['In_id'],$Itemproduct_code,$itemproduct_name,$itemcategory,$mode_payment,$quantity,$ItemPrice,$Itemtotal,$amount_paid,$due,$order_date,$customer[1],$customer[0],$address,$phone,$sales_rep,$status2,$GMD2,$CEO2,$Accountant2,$Itemguage,$Itemcolor,$Itemdesign,$Itemold_price,$Itemcost_of_goods);

            // $Main =  $maineg->insertInvoicelog($_SESSION['In_id'],$sales_rep,$ItemPrice,$timex,$order_date,$Itemtotal,$amount_paid,$due,$status2,$GMD2,$CEO2,$Accountant2);
            $clear_out = $maineg->delete_All('addtocart','sales_rep',$sales_rep);

         if ($Run == true && $Main = true) {

              $RunQ=$maineg->AUTOMATIC_SMS_API($customer_phone,$msg_bodycredit);
             // $RunQ1=$maineg->AUTOMATIC_SMS_API($customer_phoneMa,$msg_bodycreditMa);

          echo '<script>swal("Success","Credit Sales Added, Waitin for Approval","success");</script>';
        }

       }elseif( $adjusted_option == "Yes"){

                   $Run = $maineg->insertInvoiceDetailsPriceADJUSTCoted($_SESSION['In_id'],$Itemproduct_code,$itemproduct_name,$itemcategory,$mode_payment,$quantity,$ItemPrice,$Itemtotal,$amount_paid,$due,$order_date,$customer[1],$customer[0],$address,$phone,$sales_rep,$status2,$GMD2,$CEO2,$Accountant2,$Itemguage,$Itemcolor,$Itemdesign,$Itemold_pric,$Itemcost_of_goodse);

                   $clear_out = $maineg->delete_All('addtocart','sales_rep',$sales_rep);

                    if ($Run == true) {
                    
                        $RunQ=$maineg->AUTOMATIC_SMS_API($customer_phone,$msg_bodyadustedprice);
                       // $RunQ1=$maineg->AUTOMATIC_SMS_API($customer_phoneMa,$msg_bodyadustedpriceMa);

                        echo '<script>swal("Success","Credit Sales Added, Waiting for Approval","success");</script>';

                         }

               }else{

        $Run = $maineg->insertInvoiceDetailsCoated($_SESSION['In_id'],$Itemproduct_code,$itemproduct_name,$itemcategory,$mode_payment,$quantity,$ItemPrice,$Itemtotal,$amount_paid,$due,$order_date,$customer[1],$customer[0],$address,$phone,$Itemcolor,$Itemguage,$Itemold_price,$Itemdesign,$sales_rep,$status1,$GMD1,$CEO1,$Accountant1,$bank_name,$bank_id,$Itemcost_of_goods);
      
       if ($Run == true) {
         $Main =  $maineg->insertInvoicelog($_SESSION['In_id'],$sales_rep,$ItemPrice,$timex,$order_date,$Itemtotal,$amount_paid,$due,$status1,$GMD1,$CEO1,$Accountant1,$bank_name,$bank_id,$Itemcost_of_goods);
           $RunQ=$maineg->UpdateStocksale($quantity,$Itemproduct_code);
          $clear_out = $maineg->delete_All('addtocart','sales_rep',$sales_rep);
         if ($Main == true && $RunQ == true) {
          echo '<script>swal("Success","Transaction Successful","success");</script>';
                }
            } 
       }

    }else{

            echo '<script>swal("Error","Unable to Perform Transaction","error");</script>';

           } 
           $countLoop++;
      }
      
    //     if($Main == true){

    //      $RunQR=$maineg->insertBankLog($bank_name,$bank_id,$transcation_type,$transaction_id,$due,$description,$initial_balancen,$currentBalancen,$deposit_date,$image);
    //  $RunQchart2=$maineg->chartofAccount($bank_id,$amount_paid);
    // $RunQchart=$maineg->chartofAccount($Account1,$due);
    // $RunQchart1=$maineg->chartofAccount($Account,$amount_paid);
    // $RunQLog1=$maineg->insertAccountLog($transaction_id,$transaction_source,$due,$datex,$Account1,$account_type1,$sales_rep,$series_name1);
    //  $RunQLog2=$maineg->insertAccountLog($transaction_id,$transaction_source,$amount_paid,$datex,$Account,$account_type,$sales_rep,$series_name);

      //}
}


if (isset($_POST['del'])) {
    $DeleteCat = $_POST['del'];
    $Call = $maineg->cart_Delete($DeleteCat);
      if ($Call==true) {
     echo '<script>swal("Success","Item Removed","success")</script>';
     // echo '<script>window.location="index.php?action=Catery"</script>';
  }
}

require_once 'view/stone_coated_tiles.php';
break;




case 'SaleListStoneCoat':
if (isset($_POST['addCart'])){
    $product_code = $_POST['product_code'];
    $product_name   = $_POST['product_name'];
    $category = $_POST['category'];
    $quantity   = $_POST['quantity'];
    $guage   = $_POST['guage'];
    $color   = $_POST['color'];
    $design   = $_POST['design'];
    $old_price   = $_POST['old_price'];
    $price   = $_POST['price'];
    @$total   = $_POST['total'];
    // $new_total = str_replace(',', '', $total);
    $cart_date = $_POST['cart_date']; 
    $sales_rep  = $_POST['sales_rep1'];
    @$new_toatl = $price * $quantity;
    $purchase_price   = $_POST['purchase_price'];
    @$cost_of_goods = $purchase_price * $quantity;

     if ($maineg->check_if_Record_Exist('addtocart', 'product_code', $product_code) == true) {

        echo '<script>swal("Error","Item Already Added, Update the quantity or Select another Item","error");</script>'; 

    }else{

      if(empty($sales_rep) || empty($cart_date) ||  empty($product_code) || empty($product_name)|| empty($price) || empty($quantity) || empty($total)){
      echo '<script>swal("Error","one or more fields are empty","error");</script>'; 
        // echo '<script>alert("one or more fields are empty")</script>';
      }else{
        
        if($price < $old_price){

        $Run = $maineg->addtocartStoneCoat($product_code,$product_name,$category,$quantity,$price,$old_price,$total,$cart_date,$sales_rep,$guage,$color,$design,$cost_of_goods);
      
       if($Run == true) {
           echo '<script>alert("Success,New Item Added");</script>';
           echo '<script>window.location="?action=Stoncoated"</script>';
        } else{
        echo '<script>swal("Error","Unable to Perform Transaction","error");</script>';
        } 

        }else{

        $Run = $maineg->addtocartStoneCoat($product_code,$product_name,$category,$quantity,$price,$old_price,$total,$cart_date,$sales_rep,$guage,$color,$design,$cost_of_goods);
      
       if($Run == true) {
           echo '<script>alert("Success,New Item Added");</script>';
           echo '<script>window.location="?action=Stoncoated"</script>';
        } else{
        echo '<script>swal("Error","Unable to Perform Transaction","error");</script>';
        } 

        }

    }
}
}
require_once 'view/sale_addStoneCoated.php';
break;





case 'Flatsheet': 
if (isset($_POST['seeItem'])){
   $sales_rep  = $_POST['sales_rep'];
   $order_date = $_POST['order_date'];  
   $timex = $_POST['timex'];
   $type   = $_POST['type'];
   $mode_payment = $_POST['mode_payment'];
   $customer_name = $_POST['customer_name'];
   $address = $_POST['address'];
   $phone   = $_POST['phone'];
   $customer_name_new = $_POST['customer_name_new'];
   $address_new = $_POST['address_new'];
   $phone_new   = $_POST['phone_new'];
   $product_code = $_POST['product_code'];
   $category = $_POST['category'];
   $product_name   = $_POST['product_name'];
   $price   = $_POST['price'];
   $guage   = $_POST['guage'];
   $color   = $_POST['color'];
   $qty   = $_POST['quantity'];
   // $design   = $_POST['design'];
   $old_price   = $_POST['old_price'];
   
   $bank = $_POST['bank_name'];
   $bank_deatils = explode('-', $bank);
   $bank_id = $bank_deatils[0];
   $bank_name = $bank_deatils[1];
   $cost_of_goods   = $_POST['cost_of_goods'];
   $total   = $_POST['total'];
   $amount_paid = $_POST['amount_paid'];

   $grand_total = $_POST['grand_total'];
   $customer = explode('-', $customer_name);
   // $invoice_id  = $_POST['invoice_no']; 
   $rand=rand(10000,99999999);
   $invoice_id = $rand;
   $_SESSION['In_id'] = $invoice_id;
   $newTotal = str_replace(',', '', $total);
   $due = $grand_total - $amount_paid;
   $new_due =  $due;
   $status = "Active";
   $datex = date('Y-m-d');
   $Account = "4000_SALES";
   $Account1 = "1200_ACCOUNT_RECEIVABLE";

   $furt1  = 'Sales';
   $a1=rand(10000,1000);
   $b1=rand(100,1);
   $c1=rand(1000,10);
   $transaction_id= $furt1."_".$c1.$a1; 
   $transaction_source = "SALES";
   $account_type = "Daily Sales";
   $series_name ="Income";
   $no_id = "";
   // $qty = 0;

   $account_type1 = "Account Receivable";
   $series_name1 ="Asset";
   $description = "Sales On Credit";
   $type1 = "Credit";
   $status1 = " Approved";
   $GMD1 = "Approved";
   $CEO1 = "Approved";
   $Accountant1 = "Approved";
   $status2 = "Unapproved";
   $GMD2 = "Unapproved";
   $CEO2 = "Unapproved";
   $Accountant2 = "Unapproved";
   $adjusted_option = $_POST['adjusted_option'];
   $id = $_POST['id'];


    $customer_name_new_id = $customer_name_new;

    $staockSTAS = "outstock";

    // $msg_bodycredit = 'Hi Sir, There is a Request For Credit Sale Approval, Thanks!'; 
    // $msg_bodyadustedprice = 'Hi Sir, There is a Request For Price Adjustment Sale Approval, Thanks!';  

    // $msg_bodycreditMa = 'Hi Ma, There is a Request For Credit Sale Approval, Thanks!'; 
    // $msg_bodyadustedpriceMa = 'Hi Ma, There is a Request For Price Adjustment Sale Approval, Thanks!';  
    
    // $customer_phone = '08164528072';
    // $customer_phoneMa = '08067683668';
    
     $msg_bodycredit = 'Hi Sir / Madam, There is a Request For Credit Sale Approval, Thanks!'; 
    $msg_bodyadustedprice = 'Hi Sir / Madam, There is a Request For Price Adjustment Sale Approval, Thanks!';  

    // $msg_bodycreditMa = 'Hi Ma, There is a Request For Credit Sale Approval, Thanks!'; 
    // $msg_bodyadustedpriceMa = 'Hi Ma, There is a Request For Price Adjustment Sale Approval, Thanks!';  
    
    $customer_phone = '08067683668,08164528072';
    // $customer_phoneMa =''; 



    $result = $maineg->Get_balanceCredit($customer[1]); 
   $result1 = $maineg->Get_balanceDebit($customer[1]); 
   foreach ($result1 as $k => $v) {}                             
   foreach ($result as $k => $v) {}
   $balance1 = $result[$k]['credit'] + $amount_paid;
   $balance2 = $result1[$k]['debit'] + $due;
   $initial_balance = $balance2 - $balance1; 
   $currentBalance = $initial_balance;
   
    $resultn = $maineg->Get_bank_balanceCredit($bank_id); 
   $resultn1 = $maineg->Get_bank_balanceDebit($bank_id); 
   foreach ($resultn1 as $k => $v) {}                             
   foreach ($resultn as $k => $v) {}
   $balancen1 = $resultn[$k]['amount'];
   $balancen2 = $resultn1[$k]['amount'];

   $image = '';

   $deposit_date = date('Y-m-d');
   
   $transcation_type = "Credit";
   $transaction_source1 = " Sales";
 
   $initial_balancen = $balancen1;
   $currentBalancen = $amount_paid + $balancen1 - $balancen2;

    //     if($type == "Regular Customer" && $mode_payment != "Credit" && $adjusted_option != "Yes"){
    //     $cREDITchart=$maineg->insertCustomer_ledger($customer[1],$amount_paid,$due,$currentBalance);
    //   }
    
   //  if($type == "Regular Customer" && $mode_payment != "Credit" && $adjusted_option != "Yes"){
    
   //      if($currentBalance <= 0 ){
    
   //         $newcurrentBalance = '0.00';
           
   //         $cREDITchart=$maineg->insertCustomer_ledger($customer[1],$amount_paid,$due,$newcurrentBalance);
    
   //     }else{
   //         $cREDITchart=$maineg->insertCustomer_ledger($customer[1],$amount_paid,$due,$currentBalance);
   //     }
   // }

   $countLoop=1;
   for($i=0; $i<sizeof($product_code);$i++){
   $ItemPrice  = $price[$i];
   $Itemproduct_code  = $product_code[$i];
   $itemcategory   = $category[$i];
   $itemproduct_name   = $product_name[$i];
   $quantity   = $qty[$i];
   $Itemtotal  = $total[$i];
   $Itemguage  = $guage[$i];  
   $Itemcolor  =  $color[$i];  
   // $Itemdesign  =  $design[$i];  
   $Itemold_price  = $old_price[$i];
   $Itemcost_of_goods = $cost_of_goods[$i];
   $new_id  = $id[$i];    
   


      if(empty($sales_rep) || empty($order_date) ||  empty($product_code) || empty($product_name)|| empty($price) || empty($quantity) || empty($total) || empty($invoice_id)){
      echo '<script>swal("Error","one or more fields are empty","error");</script>'; 
       
      }elseif($type == "Walk-in Customer"){


       if($mode_payment == "Credit" && $adjusted_option == "Yes"){

                   $Run = $maineg->insertInvoiceDetailsPriceADJUSTFlat($_SESSION['In_id'],$Itemproduct_code,$itemproduct_name,$itemcategory,$mode_payment,$quantity,$ItemPrice,$Itemtotal,$amount_paid,$due,$order_date,$no_id,$customer_name_new,$address_new,$phone_new,$sales_rep,$status2,$GMD2,$CEO2,$Accountant2,$Itemguage,$Itemcolor,$Itemold_price,$Itemcost_of_goods);

                   $clear_out = $maineg->delete_All('addtocart','sales_rep',$sales_rep);

                    if ($Run == true) {

                        $RunQ=$maineg->AUTOMATIC_SMS_API($customer_phone,$msg_bodyadustedprice);
                        //$RunQ1=$maineg->AUTOMATIC_SMS_API($customer_phoneMa,$msg_bodyadustedpriceMa);

                        echo '<script>swal("Success","Credit Sales Added, Waiting for Approval","success");</script>';

                         }

               }elseif($mode_payment == "Credit"){

        $Run = $maineg->insertInvoiceDetailsCreditFlat($_SESSION['In_id'],$Itemproduct_code,$itemproduct_name,$itemcategory,$mode_payment,$quantity,$ItemPrice,$Itemtotal,$amount_paid,$due,$order_date,$no_id,$customer_name_new,$address_new,$phone_new,$sales_rep,$status2,$GMD2,$CEO2,$Accountant2,$Itemguage,$Itemcolor,$Itemold_price,$Itemcost_of_goods);

        $clear_out = $maineg->delete_All('addtocart','sales_rep',$sales_rep);

         if ($Run == true) {

            $RunQ=$maineg->AUTOMATIC_SMS_API($customer_phone,$msg_bodycredit);
            //$RunQ1=$maineg->AUTOMATIC_SMS_API($customer_phoneMa,$msg_bodycreditMa);


                echo '<script>swal("Success","Credit Sales Added, Waiting for Approval","success");</script>';

                 }


               }elseif( $adjusted_option == "Yes"){

                   $Run = $maineg->insertInvoiceDetailsPriceADJUSTFlat($_SESSION['In_id'],$Itemproduct_code,$itemproduct_name,$itemcategory,$mode_payment,$quantity,$ItemPrice,$Itemtotal,$amount_paid,$due,$order_date,$no_id,$customer_name_new,$address_new,$phone_new,$sales_rep,$status2,$GMD2,$CEO2,$Accountant2,$Itemguage,$Itemcolor,$Itemold_price,$Itemcost_of_goods);

                   $clear_out = $maineg->delete_All('addtocart','sales_rep',$sales_rep);

                    if ($Run == true) {

                        $RunQ=$maineg->AUTOMATIC_SMS_API($customer_phone,$msg_bodyadustedprice);
                       // $RunQ1=$maineg->AUTOMATIC_SMS_API($customer_phoneMa,$msg_bodyadustedpriceMa);

                        echo '<script>swal("Success","Credit Sales Added, Waiting for Approval","success");</script>';

                         }

               }else{

            $Run = $maineg->insertInvoiceDetailsFlat($_SESSION['In_id'],$Itemproduct_code,$itemproduct_name,$itemcategory,$mode_payment,$quantity,$ItemPrice,$Itemtotal,$amount_paid,$due,$order_date,$no_id,$customer_name_new,$address_new,$phone_new,$Itemcolor,$Itemguage,$Itemold_price,$sales_rep,$status1,$GMD1,$CEO1,$Accountant1,$bank_name,$bank_id,$Itemcost_of_goods);
      
               if ($Run == true) {
                 $Main =  $maineg->insertInvoicelog($_SESSION['In_id'],$sales_rep,$ItemPrice,$timex,$order_date,$Itemtotal,$amount_paid,$due,$status1,$GMD1,$CEO1,$Accountant1,$bank_name,$bank_id,$Itemcost_of_goods);
                   $RunQ=$maineg->UpdateStocksale($quantity,$Itemproduct_code);
                  $clear_out = $maineg->delete_All('addtocart','sales_rep',$sales_rep);
                 if ($Main == true && $RunQ == true) {
                  echo '<script>swal("Success","Transaction Successful","success");</script>';
                         }
                      } 
               }
        }elseif($type == "Regular Customer"){

       if($mode_payment == "Credit" && $adjusted_option == "Yes"){

                   $Run = $maineg->insertInvoiceDetailsPriceADJUSTFlat($_SESSION['In_id'],$Itemproduct_code,$itemproduct_name,$itemcategory,$mode_payment,$quantity,$ItemPrice,$Itemtotal,$amount_paid,$due,$order_date,$customer[1],$customer[0],$address,$phone,$sales_rep,$status2,$GMD2,$CEO2,$Accountant2,$Itemguage,$Itemcolor,$Itemold_price,$Itemcost_of_goods);

                   $clear_out = $maineg->delete_All('addtocart','sales_rep',$sales_rep);

                    if ($Run == true) {

                        $RunQ=$maineg->AUTOMATIC_SMS_API($customer_phone,$msg_bodyadustedprice);
                        //$RunQ1=$maineg->AUTOMATIC_SMS_API($customer_phoneMa,$msg_bodyadustedpriceMa);

                        echo '<script>swal("Success","Credit Sales Added, Waiting for Approval","success");</script>';

                         }

               }elseif($mode_payment == "Credit"){

           $Run = $maineg->insertInvoiceDetailsCreditFlat($_SESSION['In_id'],$Itemproduct_code,$itemproduct_name,$itemcategory,$mode_payment,$quantity,$ItemPrice,$Itemtotal,$amount_paid,$due,$order_date,$customer[1],$customer[0],$address,$phone,$sales_rep,$status2,$GMD2,$CEO2,$Accountant2,$Itemguage,$Itemcolor,$Itemold_price,$Itemcost_of_goods);

            // $Main =  $maineg->insertInvoicelog($_SESSION['In_id'],$sales_rep,$ItemPrice,$timex,$order_date,$Itemtotal,$amount_paid,$due,$status2,$GMD2,$CEO2,$Accountant2);
            $clear_out = $maineg->delete_All('addtocart','sales_rep',$sales_rep);

         if ($Run == true && $Main = true) {

             $RunQ=$maineg->AUTOMATIC_SMS_API($customer_phone,$msg_bodycredit);
             //$RunQ1=$maineg->AUTOMATIC_SMS_API($customer_phoneMa,$msg_bodycreditMa);

          echo '<script>swal("Success","Credit Sales Added, Waitin for Approval","success");</script>';
        }

       }elseif( $adjusted_option == "Yes"){

                   $Run = $maineg->insertInvoiceDetailsPriceADJUSTFlat($_SESSION['In_id'],$Itemproduct_code,$itemproduct_name,$itemcategory,$mode_payment,$quantity,$ItemPrice,$Itemtotal,$amount_paid,$due,$order_date,$customer[1],$customer[0],$address,$phone,$sales_rep,$status2,$GMD2,$CEO2,$Accountant2,$Itemguage,$Itemcolor,$Itemold_price,$Itemcost_of_goods);

                   $clear_out = $maineg->delete_All('addtocart','sales_rep',$sales_rep);

                    if ($Run == true) {

                        $RunQ=$maineg->AUTOMATIC_SMS_API($customer_phone,$msg_bodyadustedprice);
                        //$RunQ1=$maineg->AUTOMATIC_SMS_API($customer_phoneMa,$msg_bodyadustedpriceMa);

                        echo '<script>swal("Success","Credit Sales Added, Waiting for Approval","success");</script>';

                         }

               }else{

        $Run = $maineg->insertInvoiceDetailsFlat($_SESSION['In_id'],$Itemproduct_code,$itemproduct_name,$itemcategory,$mode_payment,$quantity,$ItemPrice,$Itemtotal,$amount_paid,$due,$order_date,$customer[1],$customer[0],$address,$phone,$Itemcolor,$Itemguage,$Itemold_price,$sales_rep,$status1,$GMD1,$CEO1,$Accountant1,$bank_name,$bank_id,$Itemcost_of_goods);
      
       if ($Run == true) {
         
         $Main =  $maineg->insertInvoicelog($_SESSION['In_id'],$sales_rep,$ItemPrice,$timex,$order_date,$Itemtotal,$amount_paid,$due,$status1,$GMD1,$CEO1,$Accountant1,$bank_name,$bank_id,$Itemcost_of_goods);
           $RunQ=$maineg->UpdateStocksale($quantity,$Itemproduct_code);
          $clear_out = $maineg->delete_All('addtocart','sales_rep',$sales_rep);
         if ($Main == true && $RunQ == true) {
          echo '<script>swal("Success","Transaction Successful","success");</script>';
                }
            } 
       }

    }else{

            echo '<script>swal("Error","Unable to Perform Transaction","error");</script>';

           } 
           $countLoop++;
      }
      
    //     if($Main == true){

    //      $RunQR=$maineg->insertBankLog($bank_name,$bank_id,$transcation_type,$transaction_id,$due,$description,$initial_balancen,$currentBalancen,$deposit_date,$image);
    //  $RunQchart2=$maineg->chartofAccount($bank_id,$amount_paid);
    // $RunQchart=$maineg->chartofAccount($Account1,$due);
    // $RunQchart1=$maineg->chartofAccount($Account,$amount_paid);
    // $RunQLog1=$maineg->insertAccountLog($transaction_id,$transaction_source,$due,$datex,$Account1,$account_type1,$sales_rep,$series_name1);
    //  $RunQLog2=$maineg->insertAccountLog($transaction_id,$transaction_source,$amount_paid,$datex,$Account,$account_type,$sales_rep,$series_name);

    //   }
}


if (isset($_POST['del'])) {
    $DeleteCat = $_POST['del'];
    $Call = $maineg->cart_Delete($DeleteCat);
      if ($Call==true) {
     echo '<script>swal("Success","Item Removed","success")</script>';
     // echo '<script>window.location="index.php?action=Catery"</script>';
  }
}

require_once 'view/flat_sheet.php';
break;




case 'SaleListFlatsheet':
if (isset($_POST['addCart'])){
    $product_code = $_POST['product_code'];
    $product_name   = $_POST['product_name'];
    $category = $_POST['category'];
    $quantity   = $_POST['quantity'];
    $guage   = $_POST['guage'];
    $color   = $_POST['color'];
    // $design   = $_POST['design'];
    $old_price   = $_POST['old_price'];
    $price   = $_POST['price'];
    @$total   = $_POST['total'];
    // $new_total = str_replace(',', '', $total);
    $cart_date = $_POST['cart_date']; 
    $sales_rep  = $_POST['sales_rep1'];
    @$new_toatl = $price * $quantity;
    $purchase_price   = $_POST['purchase_price'];
    @$cost_of_goods = $purchase_price * $quantity;


     if ($maineg->check_if_Record_Exist('addtocart', 'product_code', $product_code) == true) {

        echo '<script>swal("Error","Item Already Added, Update the quantity or Select another Item","error");</script>'; 

    }else{

      if(empty($sales_rep) || empty($cart_date) ||  empty($product_code) || empty($product_name)|| empty($price) || empty($quantity) || empty($total)){
      echo '<script>swal("Error","one or more fields are empty","error");</script>'; 
        // echo '<script>alert("one or more fields are empty")</script>';
      }else{
        
        if($price < $old_price){

        $Run = $maineg->addtocartFlat($product_code,$product_name,$category,$quantity,$price,$old_price,$total,$cart_date,$sales_rep,$guage,$color,$cost_of_goods);
      
       if($Run == true) {
           echo '<script>alert("Success,New Item Added");</script>';
           echo '<script>window.location="?action=Flatsheet"</script>';
        } else{
        echo '<script>swal("Error","Unable to Perform Transaction","error");</script>';
        } 

        }else{

        $Run = $maineg->addtocartFlat($product_code,$product_name,$category,$quantity,$price,$old_price,$total,$cart_date,$sales_rep,$guage,$color,$cost_of_goods);
      
       if($Run == true) {
           echo '<script>alert("Success,New Item Added");</script>';
           echo '<script>window.location="?action=Flatsheet"</script>';
        } else{
        echo '<script>swal("Error","Unable to Perform Transaction","error");</script>';
        } 

        }

    }
}
}
require_once 'view/sale_addFlatSheet.php';
break;



case 'Sealent': 
if (isset($_POST['seeItem'])){
   $sales_rep  = $_POST['sales_rep'];
   $order_date = $_POST['order_date'];  
   $timex = $_POST['timex'];
   $type   = $_POST['type'];
   $mode_payment = $_POST['mode_payment'];
   $customer_name = $_POST['customer_name'];
   $address = $_POST['address'];
   $phone   = $_POST['phone'];
   $customer_name_new = $_POST['customer_name_new'];
   $address_new = $_POST['address_new'];
   $phone_new   = $_POST['phone_new'];
   $product_code = $_POST['product_code'];
   $category = $_POST['category'];
   $product_name   = $_POST['product_name'];
   $price   = $_POST['price'];
   // $guage   = $_POST['guage'];
   // $color   = $_POST['color'];
   $packet   = $_POST['packet'];
   // $design   = $_POST['design'];
   $old_price   = $_POST['old_price'];
   
   
   $bank = $_POST['bank_name'];
   $bank_deatils = explode('-', $bank);
   $bank_id = $bank_deatils[0];
   $bank_name = $bank_deatils[1];

   $total   = $_POST['total'];
   $amount_paid = $_POST['amount_paid'];
   $cost_of_goods   = $_POST['cost_of_goods'];
   $grand_total = $_POST['grand_total'];
   $customer = explode('-', $customer_name);
   // $invoice_id  = $_POST['invoice_no']; 
   $rand=rand(10000,99999999);
   $invoice_id = $rand;
   $_SESSION['In_id'] = $invoice_id;
   $newTotal = str_replace(',', '', $total);
   $due = $grand_total - $amount_paid;
   $new_due =  $due;
   $status = "Active";
   $datex = date('Y-m-d');
   $Account = "4000_SALES";
   $Account1 = "1200_ACCOUNT_RECEIVABLE";

   $furt1  = 'Sales';
   $a1=rand(10000,1000);
   $b1=rand(100,1);
   $c1=rand(1000,10);
   $transaction_id= $furt1."_".$c1.$a1; 
   $transaction_source = "SALES";
   $account_type = "Daily Sales";
   $series_name ="Income";
   $no_id = "";
   // $qty = 0;

   $account_type1 = "Account Receivable";
   $series_name1 ="Asset";
   $description = "Sales On Credit";
   $type1 = "Credit";
   $status1 = " Approved";
   $GMD1 = "Approved";
   $CEO1 = "Approved";
   $Accountant1 = "Approved";
   $status2 = "Unapproved";
   $GMD2 = "Unapproved";
   $CEO2 = "Unapproved";
   $Accountant2 = "Unapproved";
   $adjusted_option = $_POST['adjusted_option'];
   $id = $_POST['id'];


    $customer_name_new_id = $customer_name_new;

    $staockSTAS = "outstock";
    // $msg_bodycredit = 'Hi Sir, There is a Request For Credit Sale Approval, Thanks!'; 
    // $msg_bodyadustedprice = 'Hi Sir, There is a Request For Price Adjustment Sale Approval, Thanks!';  

    // $msg_bodycreditMa = 'Hi Ma, There is a Request For Credit Sale Approval, Thanks!'; 
    // $msg_bodyadustedpriceMa = 'Hi Ma, There is a Request For Price Adjustment Sale Approval, Thanks!';  
    
    // $customer_phone = '08164528072';
    // $customer_phoneMa = '08067683668';
    
     $msg_bodycredit = 'Hi Sir / Madam, There is a Request For Credit Sale Approval, Thanks!'; 
    $msg_bodyadustedprice = 'Hi Sir / Madam, There is a Request For Price Adjustment Sale Approval, Thanks!';  

    // $msg_bodycreditMa = 'Hi Ma, There is a Request For Credit Sale Approval, Thanks!'; 
    // $msg_bodyadustedpriceMa = 'Hi Ma, There is a Request For Price Adjustment Sale Approval, Thanks!';  
    
    $customer_phone = '08067683668,08164528072';
    // $customer_phoneMa =''; 

    $result = $maineg->Get_balanceCredit($customer[1]); 
   $result1 = $maineg->Get_balanceDebit($customer[1]); 
   foreach ($result1 as $k => $v) {}                             
   foreach ($result as $k => $v) {}
   $balance1 = $result[$k]['credit'] + $amount_paid;
   $balance2 = $result1[$k]['debit'] + $due;
   $initial_balance = $balance2 - $balance1; 
   $currentBalance = $initial_balance;
   
   $resultn = $maineg->Get_bank_balanceCredit($bank_id); 
   $resultn1 = $maineg->Get_bank_balanceDebit($bank_id); 
   foreach ($resultn1 as $k => $v) {}                             
   foreach ($resultn as $k => $v) {}
   $balancen1 = $resultn[$k]['amount'];
   $balancen2 = $resultn1[$k]['amount'];

   $image = '';

   $deposit_date = date('Y-m-d');
   
   $transcation_type = "Credit";
   $transaction_source1 = " Sales";
 
   $initial_balancen = $balancen1;
   $currentBalancen = $amount_paid + $balancen1 - $balancen2;

//     if($type == "Regular Customer" && $mode_payment != "Credit" && $adjusted_option != "Yes"){
//     $cREDITchart=$maineg->insertCustomer_ledger($customer[1],$amount_paid,$due,$currentBalance);
//   }


   // if($type == "Regular Customer" && $mode_payment != "Credit" && $adjusted_option != "Yes"){
    
   //      if($currentBalance <= 0 ){
    
   //         $newcurrentBalance = '0.00';
           
   //         $cREDITchart=$maineg->insertCustomer_ledger($customer[1],$amount_paid,$due,$newcurrentBalance);
    
   //     }else{
   //         $cREDITchart=$maineg->insertCustomer_ledger($customer[1],$amount_paid,$due,$currentBalance);
   //     }
   // }


   $countLoop=1;
   for($i=0; $i<sizeof($product_code);$i++){
   $ItemPrice  = $price[$i];
   $Itemproduct_code  = $product_code[$i];
   $itemcategory   = $category[$i];
   $itemproduct_name   = $product_name[$i];
   $itempacket   = $packet[$i];
   $Itemtotal  = $total[$i];
   $Qtyy  = 0;  
   // $Itemguage  = $guage[$i];  
   // $Itemcolor  =  $color[$i];  
   // $Itemdesign  =  $design[$i];  
   $Itemold_price  = $old_price[$i];
    $Itemcost_of_goods = $cost_of_goods[$i];
   $new_id  = $id[$i];    
   


      if(empty($sales_rep) || empty($order_date) ||  empty($product_code) || empty($product_name)|| empty($price) || empty($total) || empty($invoice_id)){
      echo '<script>swal("Error","one or more fields are empty","error");</script>'; 
       
      }elseif($type == "Walk-in Customer"){


       if($mode_payment == "Credit" && $adjusted_option == "Yes"){

                   $Run = $maineg->insertInvoiceDetailsPriceADJUSTPack($_SESSION['In_id'],$Itemproduct_code,$itemproduct_name,$itemcategory,$mode_payment,$ItemPrice,$Itemtotal,$amount_paid,$due,$order_date,$no_id,$customer_name_new,$address_new,$phone_new,$sales_rep,$status2,$GMD2,$CEO2,$Accountant2,$Itemold_price,$itempacket,$Itemcost_of_goods);

                   $clear_out = $maineg->delete_All('addtocart','sales_rep',$sales_rep);

                    if ($Run == true) {

                        $RunQ=$maineg->AUTOMATIC_SMS_API($customer_phone,$msg_bodyadustedprice);
                        //$RunQ1=$maineg->AUTOMATIC_SMS_API($customer_phoneMa,$msg_bodyadustedpriceMa);

                        echo '<script>swal("Success","Credit Sales Added, Waiting for Approval","success");</script>';

                         }

               }elseif($mode_payment == "Credit"){

        $Run = $maineg->insertInvoiceDetailsCreditPack($_SESSION['In_id'],$Itemproduct_code,$itemproduct_name,$itemcategory,$mode_payment,$Qtyy,$ItemPrice,$Itemtotal,$amount_paid,$due,$order_date,$no_id,$customer_name_new,$address_new,$phone_new,$sales_rep,$status2,$GMD2,$CEO2,$Accountant2,$Itemold_price,$itempacket,$Itemcost_of_goods);

        $clear_out = $maineg->delete_All('addtocart','sales_rep',$sales_rep);

         if ($Run == true) {

            $RunQ=$maineg->AUTOMATIC_SMS_API($customer_phone,$msg_bodycredit);
            //$RunQ1=$maineg->AUTOMATIC_SMS_API($customer_phoneMa,$msg_bodycreditMa);

                echo '<script>swal("Success","Credit Sales Added, Waiting for Approval","success");</script>';

                 }


               }elseif( $adjusted_option == "Yes"){

                   $Run = $maineg->insertInvoiceDetailsPriceADJUSTPack($_SESSION['In_id'],$Itemproduct_code,$itemproduct_name,$itemcategory,$mode_payment,$ItemPrice,$Itemtotal,$amount_paid,$due,$order_date,$no_id,$customer_name_new,$address_new,$phone_new,$sales_rep,$status2,$GMD2,$CEO2,$Accountant2,$Itemold_price,$itempacket,$Itemcost_of_goods);

                   $clear_out = $maineg->delete_All('addtocart','sales_rep',$sales_rep);

                    if ($Run == true) {

                        $RunQ=$maineg->AUTOMATIC_SMS_API($customer_phone,$msg_bodyadustedprice);
                        //$RunQ1=$maineg->AUTOMATIC_SMS_API($customer_phoneMa,$msg_bodyadustedpriceMa);

                        echo '<script>swal("Success","Credit Sales Added, Waiting for Approval","success");</script>';

                         }

               }else{

            $Run = $maineg->insertInvoiceDetailsPack($_SESSION['In_id'],$Itemproduct_code,$itemproduct_name,$itemcategory,$mode_payment,$Qtyy,$ItemPrice,$Itemtotal,$amount_paid,$due,$order_date,$no_id,$customer_name_new,$address_new,$phone_new,$Itemold_price,$itempacket,$sales_rep,$status1,$GMD1,$CEO1,$Accountant1,$bank_name,$bank_id,$Itemcost_of_goods);
      
               if ($Run == true) {
                // $RunQ22=$maineg->UpdateStockStatus($staockSTAS,$Itemproduct_code);
                 $Main =  $maineg->insertInvoicelog($_SESSION['In_id'],$sales_rep,$ItemPrice,$timex,$order_date,$Itemtotal,$amount_paid,$due,$status1,$GMD1,$CEO1,$Accountant1,$bank_name,$bank_id,$Itemcost_of_goods);
                   $RunQ=$maineg->UpdateStocksalePacket($itempacket,$Itemproduct_code);
                  $clear_out = $maineg->delete_All('addtocart','sales_rep',$sales_rep);
                 if ($Main == true  && $RunQ == true) {
                  echo '<script>swal("Success","Transaction Successful","success");</script>';
                         }
                      } 
               }
        }elseif($type == "Regular Customer"){

       if($mode_payment == "Credit" && $adjusted_option == "Yes"){

                   $Run = $maineg->insertInvoiceDetailsPriceADJUSTPack($_SESSION['In_id'],$Itemproduct_code,$itemproduct_name,$itemcategory,$mode_payment,$ItemPrice,$Itemtotal,$amount_paid,$due,$order_date,$customer[1],$customer[0],$address,$phone,$sales_rep,$status2,$GMD2,$CEO2,$Accountant2,$Itemold_price,$itempacket,$Itemcost_of_goods);

                   $clear_out = $maineg->delete_All('addtocart','sales_rep',$sales_rep);

                    if ($Run == true) {

                         $RunQ=$maineg->AUTOMATIC_SMS_API($customer_phone,$msg_bodyadustedprice);
                         //$RunQ1=$maineg->AUTOMATIC_SMS_API($customer_phoneMa,$msg_bodyadustedpriceMa);

                        echo '<script>swal("Success","Credit Sales Added, Waiting for Approval","success");</script>';

                         }

               }elseif($mode_payment == "Credit"){

           $Run = $maineg->insertInvoiceDetailsCreditPack($_SESSION['In_id'],$Itemproduct_code,$itemproduct_name,$itemcategory,$mode_payment,$Qtyy,$ItemPrice,$Itemtotal,$amount_paid,$due,$order_date,$customer[1],$customer[0],$address,$phone,$sales_rep,$status2,$GMD2,$CEO2,$Accountant2,$Itemold_price,$itempacket,$Itemcost_of_goods);

            // $Main =  $maineg->insertInvoicelog($_SESSION['In_id'],$sales_rep,$ItemPrice,$timex,$order_date,$Itemtotal,$amount_paid,$due,$status2,$GMD2,$CEO2,$Accountant2);
            $clear_out = $maineg->delete_All('addtocart','sales_rep',$sales_rep);

         if ($Run == true && $Main = true) {

            $RunQ=$maineg->AUTOMATIC_SMS_API($customer_phone,$msg_bodycredit);
            //$RunQ1=$maineg->AUTOMATIC_SMS_API($customer_phoneMa,$msg_bodycreditMa);
          echo '<script>swal("Success","Credit Sales Added, Waitin for Approval","success");</script>';
        }

       }elseif( $adjusted_option == "Yes"){

                   $Run = $maineg->insertInvoiceDetailsPriceADJUSTPack($_SESSION['In_id'],$Itemproduct_code,$itemproduct_name,$itemcategory,$mode_payment,$ItemPrice,$Itemtotal,$amount_paid,$due,$order_date,$customer[1],$customer[0],$address,$phone,$sales_rep,$status2,$GMD2,$CEO2,$Accountant2,$Itemold_price,$itempacket,$Itemcost_of_goods);

                   $clear_out = $maineg->delete_All('addtocart','sales_rep',$sales_rep);

                    if ($Run == true) {

                         $RunQ=$maineg->AUTOMATIC_SMS_API($customer_phone,$msg_bodyadustedprice);
                         //$RunQ1=$maineg->AUTOMATIC_SMS_API($customer_phoneMa,$msg_bodyadustedpriceMa);

                        echo '<script>swal("Success","Credit Sales Added, Waiting for Approval","success");</script>';

                         }

               }else{

        $Run = $maineg->insertInvoiceDetailsPack($_SESSION['In_id'],$Itemproduct_code,$itemproduct_name,$itemcategory,$mode_payment,$Qtyy,$ItemPrice,$Itemtotal,$amount_paid,$due,$order_date,$customer[1],$customer[0],$address,$phone,$Itemold_price,$itempacket,$sales_rep,$status1,$GMD1,$CEO1,$Accountant1,$bank_name,$bank_id,$Itemcost_of_goods);
      
       if ($Run == true) {
         $Main =  $maineg->insertInvoicelog($_SESSION['In_id'],$sales_rep,$ItemPrice,$timex,$order_date,$Itemtotal,$amount_paid,$due,$status1,$GMD1,$CEO1,$Accountant1,$bank_name,$bank_id,$Itemcost_of_goods);
           $RunQ=$maineg->UpdateStocksalePacket($itempacket,$Itemproduct_code);
          $clear_out = $maineg->delete_All('addtocart','sales_rep',$sales_rep);
         if ($Main == true && $RunQ == true) {
          echo '<script>swal("Success","Transaction Successful","success");</script>';
                }
            } 
       }

    }else{

            echo '<script>swal("Error","Unable to Perform Transaction","error");</script>';

           } 
           $countLoop++;
      }
      
    //  if($Main == true){

    //      $RunQR=$maineg->insertBankLog($bank_name,$bank_id,$transcation_type,$transaction_id,$due,$description,$initial_balancen,$currentBalancen,$deposit_date,$image);
    //  $RunQchart2=$maineg->chartofAccount($bank_id,$amount_paid);
    // $RunQchart=$maineg->chartofAccount($Account1,$due);
    // $RunQchart1=$maineg->chartofAccount($Account,$amount_paid);
    // $RunQLog1=$maineg->insertAccountLog($transaction_id,$transaction_source,$due,$datex,$Account1,$account_type1,$sales_rep,$series_name1);
    //  $RunQLog2=$maineg->insertAccountLog($transaction_id,$transaction_source,$amount_paid,$datex,$Account,$account_type,$sales_rep,$series_name);

    //   }
}


if (isset($_POST['del'])) {
    $DeleteCat = $_POST['del'];
    $Call = $maineg->cart_Delete($DeleteCat);
      if ($Call==true) {
     echo '<script>swal("Success","Item Removed","success")</script>';
     // echo '<script>window.location="index.php?action=Catery"</script>';
  }
}

require_once 'view/Sealent_gum.php';
break;




case 'SaleListGum':
if (isset($_POST['addCart'])){
    $product_code = $_POST['product_code'];
    $product_name   = $_POST['product_name'];
    $category = $_POST['category'];
    $packet   = $_POST['packet'];
 
    // $design   = $_POST['design'];
    $old_price   = $_POST['old_price'];
    $price   = $_POST['price'];
    @$total   = $_POST['total'];
    // $new_total = str_replace(',', '', $total);
    $cart_date = $_POST['cart_date']; 
    $sales_rep  = $_POST['sales_rep1'];
    @$new_toatl = $price * $packet;
    $purchase_price   = $_POST['purchase_price'];
    @$cost_of_goods = $purchase_price * $packet;

     if ($maineg->check_if_Record_Exist('addtocart', 'product_code', $product_code) == true) {

        echo '<script>swal("Error","Item Already Added, Update the quantity or Select another Item","error");</script>'; 

    }else{

      if(empty($sales_rep) || empty($cart_date) ||  empty($product_code) || empty($product_name)|| empty($price) || empty($packet) || empty($total)){
      echo '<script>swal("Error","one or more fields are empty","error");</script>'; 
        // echo '<script>alert("one or more fields are empty")</script>';
      }else{
        
        if($price < $old_price){

        $Run = $maineg->addtocartPack($product_code,$product_name,$category,$price,$old_price,$total,$cart_date,$sales_rep,$packet,$cost_of_goods);
      
       if($Run == true) {
           echo '<script>alert("Success,New Item Added");</script>';
           echo '<script>window.location="?action=Sealent"</script>';
        } else{
        echo '<script>swal("Error","Unable to Perform Transaction","error");</script>';
        } 

        }else{

        $Run = $maineg->addtocartPack($product_code,$product_name,$category,$price,$old_price,$total,$cart_date,$sales_rep,$packet,$cost_of_goods);
      
       if($Run == true) {
           echo '<script>alert("Success,New Item Added");</script>';
           echo '<script>window.location="?action=Sealent"</script>';
        } else{
        echo '<script>swal("Error","Unable to Perform Transaction","error");</script>';
        } 

        }

    }
}
}
require_once 'view/sale_addSealentGum.php';
break;



case 'Twisted': 
if (isset($_POST['seeItem'])){
   $sales_rep  = $_POST['sales_rep'];
   $order_date = $_POST['order_date'];  
   $timex = $_POST['timex'];
   $type   = $_POST['type'];
   $mode_payment = $_POST['mode_payment'];
   $customer_name = $_POST['customer_name'];
   $address = $_POST['address'];
   $phone   = $_POST['phone'];
   $customer_name_new = $_POST['customer_name_new'];
   $address_new = $_POST['address_new'];
   $phone_new   = $_POST['phone_new'];
   $product_code = $_POST['product_code'];
   $category = $_POST['category'];
   $product_name   = $_POST['product_name'];
   $price   = $_POST['price'];
   // $guage   = $_POST['guage'];
   // $color   = $_POST['color'];
   $packet   = $_POST['packet'];
   // $design   = $_POST['design'];
   $old_price   = $_POST['old_price'];
   
   
   $bank = $_POST['bank_name'];
   $bank_deatils = explode('-', $bank);
   $bank_id = $bank_deatils[0];
   $bank_name = $bank_deatils[1];


   $total   = $_POST['total'];
   $amount_paid = $_POST['amount_paid'];
   $cost_of_goods   = $_POST['cost_of_goods'];
   $grand_total = $_POST['grand_total'];
   $customer = explode('-', $customer_name);
   $rand=rand(10000,99999999);
   $invoice_id = $rand; 
   $_SESSION['In_id'] = $invoice_id;
   $newTotal = str_replace(',', '', $total);
   $due = $grand_total - $amount_paid;
   $new_due =  $due;
   $status = "Active";
   $datex = date('Y-m-d');
   $Account = "4000_SALES";
   $Account1 = "1200_ACCOUNT_RECEIVABLE";

   $furt1  = 'Sales';
   $a1=rand(10000,1000);
   $b1=rand(100,1);
   $c1=rand(1000,10);
   $transaction_id= $furt1."_".$c1.$a1; 
   $transaction_source = "SALES";
   $account_type = "Daily Sales";
   $series_name ="Income";
   $no_id = "";
   
   $account_type1 = "Account Receivable";
   $series_name1 ="Asset";
   $description = "Sales On Credit";
   $type1 = "Credit";
   $status1 = " Approved";
   $GMD1 = "Approved";
   $CEO1 = "Approved";
   $Accountant1 = "Approved";
   $status2 = "Unapproved";
   $GMD2 = "Unapproved";
   $CEO2 = "Unapproved";
   $Accountant2 = "Unapproved";
   $adjusted_option = $_POST['adjusted_option'];
   $id = $_POST['id'];


    $customer_name_new_id = $customer_name_new;

    $staockSTAS = "outstock";
    // $msg_bodycredit = 'Hi Sir, There is a Request For Credit Sale Approval, Thanks!'; 
    // $msg_bodyadustedprice = 'Hi Sir, There is a Request For Price Adjustment Sale Approval, Thanks!';  

    // $msg_bodycreditMa = 'Hi Ma, There is a Request For Credit Sale Approval, Thanks!'; 
    // $msg_bodyadustedpriceMa = 'Hi Ma, There is a Request For Price Adjustment Sale Approval, Thanks!';  
    
    // $customer_phone = '08164528072';
    // $customer_phoneMa = '08067683668';
    
     $msg_bodycredit = 'Hi Sir / Madam, There is a Request For Credit Sale Approval, Thanks!'; 
    $msg_bodyadustedprice = 'Hi Sir / Madam, There is a Request For Price Adjustment Sale Approval, Thanks!';  

    // $msg_bodycreditMa = 'Hi Ma, There is a Request For Credit Sale Approval, Thanks!'; 
    // $msg_bodyadustedpriceMa = 'Hi Ma, There is a Request For Price Adjustment Sale Approval, Thanks!';  
    
    $customer_phone = '08067683668,08164528072';
    // $customer_phoneMa =''; 

    $result = $maineg->Get_balanceCredit($customer[1]); 
   $result1 = $maineg->Get_balanceDebit($customer[1]); 
   foreach ($result1 as $k => $v) {}                             
   foreach ($result as $k => $v) {}
   $balance1 = $result[$k]['credit'] + $amount_paid;
   $balance2 = $result1[$k]['debit'] + $due;
   $initial_balance = $balance2 - $balance1; 
   $currentBalance = $initial_balance;
   
   $resultn = $maineg->Get_bank_balanceCredit($bank_id); 
   $resultn1 = $maineg->Get_bank_balanceDebit($bank_id); 
   foreach ($resultn1 as $k => $v) {}                             
   foreach ($resultn as $k => $v) {}
   $balancen1 = $resultn[$k]['amount'];
   $balancen2 = $resultn1[$k]['amount'];

   $image = '';

   $deposit_date = date('Y-m-d');
   
   $transcation_type = "Credit";
   $transaction_source1 = " Sales";
 
   $initial_balancen = $balancen1;
   $currentBalancen = $amount_paid + $balancen1 - $balancen2;

//     if($type == "Regular Customer" && $mode_payment != "Credit" && $adjusted_option != "Yes"){
//     $cREDITchart=$maineg->insertCustomer_ledger($customer[1],$amount_paid,$due,$currentBalance);
//   }


   //  if($type == "Regular Customer" && $mode_payment != "Credit" && $adjusted_option != "Yes"){
    
   //      if($currentBalance <= 0 ){
    
   //         $newcurrentBalance = '0.00';
           
   //         $cREDITchart=$maineg->insertCustomer_ledger($customer[1],$amount_paid,$due,$newcurrentBalance);
    
   //     }else{
   //         $cREDITchart=$maineg->insertCustomer_ledger($customer[1],$amount_paid,$due,$currentBalance);
   //     }
   // }



   $countLoop=1;
   for($i=0; $i<sizeof($product_code);$i++){
   $ItemPrice  = $price[$i];
   $Itemproduct_code  = $product_code[$i];
   $itemcategory   = $category[$i];
   $itemproduct_name   = $product_name[$i];
   $itempacket   = $packet[$i];
   $Itemtotal  = $total[$i];
    $Qtyy  = 0;  
   // $Itemguage  = $guage[$i];  
   // $Itemcolor  =  $color[$i];  
   // $Itemdesign  =  $design[$i];  
   $Itemold_price  = $old_price[$i];
    $Itemcost_of_goods = $cost_of_goods[$i];
   $new_id  = $id[$i];    
   


      if(empty($sales_rep) || empty($order_date) ||  empty($product_code) || empty($product_name)|| empty($price) || empty($total) || empty($invoice_id)){
      echo '<script>swal("Error","one or more fields are empty","error");</script>'; 
       
      }elseif($type == "Walk-in Customer"){


       if($mode_payment == "Credit" && $adjusted_option == "Yes"){

                   $Run = $maineg->insertInvoiceDetailsPriceADJUSTPack($_SESSION['In_id'],$Itemproduct_code,$itemproduct_name,$itemcategory,$mode_payment,$ItemPrice,$Itemtotal,$amount_paid,$due,$order_date,$no_id,$customer_name_new,$address_new,$phone_new,$sales_rep,$status2,$GMD2,$CEO2,$Accountant2,$Itemold_price,$itempacket,$Itemcost_of_goods);

                   $clear_out = $maineg->delete_All('addtocart','sales_rep',$sales_rep);

                    if ($Run == true) {

                         $RunQ=$maineg->AUTOMATIC_SMS_API($customer_phone,$msg_bodyadustedprice);
                         //$RunQ1=$maineg->AUTOMATIC_SMS_API($customer_phoneMa,$msg_bodyadustedpriceMa);

                        echo '<script>swal("Success","Credit Sales Added, Waiting for Approval","success");</script>';

                         }

               }elseif($mode_payment == "Credit"){

        $Run = $maineg->insertInvoiceDetailsCreditPack($_SESSION['In_id'],$Itemproduct_code,$itemproduct_name,$itemcategory,$mode_payment,$Qtyy,$ItemPrice,$Itemtotal,$amount_paid,$due,$order_date,$no_id,$customer_name_new,$address_new,$phone_new,$sales_rep,$status2,$GMD2,$CEO2,$Accountant2,$Itemold_price,$itempacket);

        $clear_out = $maineg->delete_All('addtocart','sales_rep',$sales_rep);

         if ($Run == true) {

            $RunQ=$maineg->AUTOMATIC_SMS_API($customer_phone,$msg_bodycredit);
            //$RunQ1=$maineg->AUTOMATIC_SMS_API($customer_phoneMa,$msg_bodycreditMa);

                echo '<script>swal("Success","Credit Sales Added, Waiting for Approval","success");</script>';

                 }


               }elseif( $adjusted_option == "Yes"){

                   $Run = $maineg->insertInvoiceDetailsPriceADJUSTPack($_SESSION['In_id'],$Itemproduct_code,$itemproduct_name,$itemcategory,$mode_payment,$ItemPrice,$Itemtotal,$amount_paid,$due,$order_date,$no_id,$customer_name_new,$address_new,$phone_new,$sales_rep,$status2,$GMD2,$CEO2,$Accountant2,$Itemold_price,$itempacket,$Itemcost_of_goods);

                   $clear_out = $maineg->delete_All('addtocart','sales_rep',$sales_rep);

                    if ($Run == true) {

                         $RunQ=$maineg->AUTOMATIC_SMS_API($customer_phone,$msg_bodyadustedprice);
                         //$RunQ1=$maineg->AUTOMATIC_SMS_API($customer_phoneMa,$msg_bodyadustedpriceMa);

                        echo '<script>swal("Success","Credit Sales Added, Waiting for Approval","success");</script>';

                         }

               }else{

            $Run = $maineg->insertInvoiceDetailsPack($_SESSION['In_id'],$Itemproduct_code,$itemproduct_name,$itemcategory,$mode_payment,$Qtyy,$ItemPrice,$Itemtotal,$amount_paid,$due,$order_date,$no_id,$customer_name_new,$address_new,$phone_new,$Itemold_price,$itempacket,$sales_rep,$status1,$GMD1,$CEO1,$Accountant1,$bank_name,$bank_id,$Itemcost_of_goods);
      
               if ($Run == true) {
                 $Main =  $maineg->insertInvoicelog($_SESSION['In_id'],$sales_rep,$ItemPrice,$timex,$order_date,$Itemtotal,$amount_paid,$due,$status1,$GMD1,$CEO1,$Accountant1,$bank_name,$bank_id,$Itemcost_of_goods);
                   $RunQ=$maineg->UpdateStocksalePacket($itempacket,$Itemproduct_code);
                
                  $clear_out = $maineg->delete_All('addtocart','sales_rep',$sales_rep);
                 if ($Main == true  && $RunQ == true) {
                  echo '<script>swal("Success","Transaction Successful","success");</script>';
                         }
                      } 
               }
        }elseif($type == "Regular Customer"){

       if($mode_payment == "Credit" && $adjusted_option == "Yes"){

                   $Run = $maineg->insertInvoiceDetailsPriceADJUSTPack($_SESSION['In_id'],$Itemproduct_code,$itemproduct_name,$itemcategory,$mode_payment,$ItemPrice,$Itemtotal,$amount_paid,$due,$order_date,$customer[1],$customer[0],$address,$phone,$sales_rep,$status2,$GMD2,$CEO2,$Accountant2,$Itemold_price,$itempacket,$Itemcost_of_goods);

                   $clear_out = $maineg->delete_All('addtocart','sales_rep',$sales_rep);

                    if ($Run == true) {

                        $RunQ=$maineg->AUTOMATIC_SMS_API($customer_phone,$msg_bodyadustedprice);
                        //$RunQ1=$maineg->AUTOMATIC_SMS_API($customer_phoneMa,$msg_bodyadustedpriceMa);

                        echo '<script>swal("Success","Credit Sales Added, Waiting for Approval","success");</script>';

                         }

               }elseif($mode_payment == "Credit"){

           $Run = $maineg->insertInvoiceDetailsCreditPack($_SESSION['In_id'],$Itemproduct_code,$itemproduct_name,$itemcategory,$mode_payment,$Qtyy,$ItemPrice,$Itemtotal,$amount_paid,$due,$order_date,$customer[1],$customer[0],$address,$phone,$sales_rep,$status2,$GMD2,$CEO2,$Accountant2,$Itemold_price,$itempacket,$Itemcost_of_goods);

            // $Main =  $maineg->insertInvoicelog($_SESSION['In_id'],$sales_rep,$ItemPrice,$timex,$order_date,$Itemtotal,$amount_paid,$due,$status2,$GMD2,$CEO2,$Accountant2);
            $clear_out = $maineg->delete_All('addtocart','sales_rep',$sales_rep);

         if ($Run == true && $Main = true) {

           $RunQ=$maineg->AUTOMATIC_SMS_API($customer_phone,$msg_bodycredit);
           //$RunQ1=$maineg->AUTOMATIC_SMS_API($customer_phoneMa,$msg_bodycreditMa);

          echo '<script>swal("Success","Credit Sales Added, Waitin for Approval","success");</script>';
        }

       }elseif( $adjusted_option == "Yes"){

                   $Run = $maineg->insertInvoiceDetailsPriceADJUSTPack($_SESSION['In_id'],$Itemproduct_code,$itemproduct_name,$itemcategory,$mode_payment,$ItemPrice,$Itemtotal,$amount_paid,$due,$order_date,$customer[1],$customer[0],$address,$phone,$sales_rep,$status2,$GMD2,$CEO2,$Accountant2,$Itemold_price,$itempacket,$Itemcost_of_goods);

                   $clear_out = $maineg->delete_All('addtocart','sales_rep',$sales_rep);

                    if ($Run == true) {

                        $RunQ=$maineg->AUTOMATIC_SMS_API($customer_phone,$msg_bodyadustedprice);
                        //$RunQ1=$maineg->AUTOMATIC_SMS_API($customer_phoneMa,$msg_bodyadustedpriceMa);

                        echo '<script>swal("Success","Credit Sales Added, Waiting for Approval","success");</script>';

                         }

               }else{

        $Run = $maineg->insertInvoiceDetailsPack($_SESSION['In_id'],$Itemproduct_code,$itemproduct_name,$itemcategory,$mode_payment,$Qtyy,$ItemPrice,$Itemtotal,$amount_paid,$due,$order_date,$customer[1],$customer[0],$address,$phone,$Itemold_price,$itempacket,$sales_rep,$status1,$GMD1,$CEO1,$Accountant1,$bank_name,$bank_id,$Itemcost_of_goods);
      
       if ($Run == true) {
         
         $Main =  $maineg->insertInvoicelog($_SESSION['In_id'],$sales_rep,$ItemPrice,$timex,$order_date,$Itemtotal,$amount_paid,$due,$status1,$GMD1,$CEO1,$Accountant1,$bank_name,$bank_id,$Itemcost_of_goods);
           $RunQ=$maineg->UpdateStocksalePacket($itempacket,$Itemproduct_code);
         
          $clear_out = $maineg->delete_All('addtocart','sales_rep',$sales_rep);
         if ($Main == true && $RunQ == true) {
          echo '<script>swal("Success","Transaction Successful","success");</script>';
                }
            } 
       }

    }else{

            echo '<script>swal("Error","Unable to Perform Transaction","error");</script>';

           } 
           $countLoop++;
      }
      
    //    if($Main == true){

    //      $RunQR=$maineg->insertBankLog($bank_name,$bank_id,$transcation_type,$transaction_id,$due,$description,$initial_balancen,$currentBalancen,$deposit_date,$image);
    //  $RunQchart2=$maineg->chartofAccount($bank_id,$amount_paid);
    // $RunQchart=$maineg->chartofAccount($Account1,$due);
    // $RunQchart1=$maineg->chartofAccount($Account,$amount_paid);
    // $RunQLog1=$maineg->insertAccountLog($transaction_id,$transaction_source,$due,$datex,$Account1,$account_type1,$sales_rep,$series_name1);
    //  $RunQLog2=$maineg->insertAccountLog($transaction_id,$transaction_source,$amount_paid,$datex,$Account,$account_type,$sales_rep,$series_name);

    //   }
}


if (isset($_POST['del'])) {
    $DeleteCat = $_POST['del'];
    $Call = $maineg->cart_Delete($DeleteCat);
      if ($Call==true) {
     echo '<script>swal("Success","Item Removed","success")</script>';
     // echo '<script>window.location="index.php?action=Catery"</script>';
  }
}

require_once 'view/twisted_nails.php';
break;




case 'Twisttedass':
if (isset($_POST['addCart'])){
    $product_code = $_POST['product_code'];
    $product_name   = $_POST['product_name'];
    $category = $_POST['category'];
    $packet   = $_POST['packet'];
 
    // $design   = $_POST['design'];
    $old_price   = $_POST['old_price'];
    $price   = $_POST['price'];
    @$total   = $_POST['total'];
    // $new_total = str_replace(',', '', $total);
    $cart_date = $_POST['cart_date']; 
    $sales_rep  = $_POST['sales_rep1'];
    @$new_toatl = $price * $packet;
    $purchase_price   = $_POST['purchase_price'];
    @$cost_of_goods = $purchase_price * $packet;

     if ($maineg->check_if_Record_Exist('addtocart', 'product_code', $product_code) == true) {

        echo '<script>swal("Error","Item Already Added, Update the quantity or Select another Item","error");</script>'; 

    }else{

      if(empty($sales_rep) || empty($cart_date) ||  empty($product_code) || empty($product_name)|| empty($price) || empty($packet) || empty($total)){
      echo '<script>swal("Error","one or more fields are empty","error");</script>'; 
        // echo '<script>alert("one or more fields are empty")</script>';
      }else{
        
        if($price < $old_price){

        $Run = $maineg->addtocartPack($product_code,$product_name,$category,$price,$old_price,$total,$cart_date,$sales_rep,$packet,$cost_of_goods);
      
       if($Run == true) {
           echo '<script>alert("Success,New Item Added");</script>';
           echo '<script>window.location="?action=Twisted"</script>';
        } else{
        echo '<script>swal("Error","Unable to Perform Transaction","error");</script>';
        } 

        }else{

        $Run = $maineg->addtocartPack($product_code,$product_name,$category,$price,$old_price,$total,$cart_date,$sales_rep,$packet,$cost_of_goods);
      
       if($Run == true) {
           echo '<script>alert("Success,New Item Added");</script>';
           echo '<script>window.location="?action=Twisted"</script>';
        } else{
        echo '<script>swal("Error","Unable to Perform Transaction","error");</script>';
        } 

        }

    }
}
}
require_once 'view/sale_addTwistedNail.php';
break;







case 'Treated': 
if (isset($_POST['seeItem'])){
   $sales_rep  = $_POST['sales_rep'];
   $order_date = $_POST['order_date'];  
   $timex = $_POST['timex'];
   $type   = $_POST['type'];
   $mode_payment = $_POST['mode_payment'];
   $customer_name = $_POST['customer_name'];
   $address = $_POST['address'];
   $phone   = $_POST['phone'];
   $customer_name_new = $_POST['customer_name_new'];
   $address_new = $_POST['address_new'];
   $phone_new   = $_POST['phone_new'];
   $product_code = $_POST['product_code'];
   $category = $_POST['category'];
   $product_name   = $_POST['product_name'];
   $price   = $_POST['price'];
   // $guage   = $_POST['guage'];
   // $color   = $_POST['color'];
   $packet   = $_POST['packet'];
   // $design   = $_POST['design'];
   $old_price   = $_POST['old_price'];
   
   
   $bank = $_POST['bank_name'];
   $bank_deatils = explode('-', $bank);
   $bank_id = $bank_deatils[0];
   $bank_name = $bank_deatils[1];

   $total   = $_POST['total'];
   $amount_paid = $_POST['amount_paid'];
   $cost_of_goods   = $_POST['cost_of_goods'];
   $grand_total = $_POST['grand_total'];
   $customer = explode('-', $customer_name);
   $rand=rand(10000,99999999);
   $invoice_id = $rand;  
   $_SESSION['In_id'] = $invoice_id;
   $newTotal = str_replace(',', '', $total);
   $due = $grand_total - $amount_paid;
   $new_due =  $due;
   $status = "Active";
   $datex = date('Y-m-d');
   $Account = "4000_SALES";
   $Account1 = "1200_ACCOUNT_RECEIVABLE";

   $furt1  = 'Sales';
   $a1=rand(10000,1000);
   $b1=rand(100,1);
   $c1=rand(1000,10);
   $transaction_id= $furt1."_".$c1.$a1; 
   $transaction_source = "SALES";
   $account_type = "Daily Sales";
   $series_name ="Income";
   $no_id = "";
   $qty = 0;

   $account_type1 = "Account Receivable";
   $series_name1 ="Asset";
   $description = "Sales On Credit";
   $type1 = "Credit";
   $status1 = " Approved";
   $GMD1 = "Approved";
   $CEO1 = "Approved";
   $Accountant1 = "Approved";
   $status2 = "Unapproved";
   $GMD2 = "Unapproved";
   $CEO2 = "Unapproved";
   $Accountant2 = "Unapproved";
   $adjusted_option = $_POST['adjusted_option'];
   $id = $_POST['id'];


    $customer_name_new_id = $customer_name_new;

    $staockSTAS = "outstock";
    $msg_bodycredit = 'Hi Sir / Madam, There is a Request For Credit Sale Approval, Thanks!'; 
    $msg_bodyadustedprice = 'Hi Sir / Madam, There is a Request For Price Adjustment Sale Approval, Thanks!';  

    // $msg_bodycreditMa = 'Hi Ma, There is a Request For Credit Sale Approval, Thanks!'; 
    // $msg_bodyadustedpriceMa = 'Hi Ma, There is a Request For Price Adjustment Sale Approval, Thanks!';  
    
    $customer_phone = '08067683668,08164528072';
    // $customer_phoneMa =''; 


    $result = $maineg->Get_balanceCredit($customer[1]); 
   $result1 = $maineg->Get_balanceDebit($customer[1]); 
   foreach ($result1 as $k => $v) {}                             
   foreach ($result as $k => $v) {}
   $balance1 = $result[$k]['credit'] + $amount_paid;
   $balance2 = $result1[$k]['debit'] + $due;
   $initial_balance = $balance2 - $balance1; 
   $currentBalance = $initial_balance;
   
   
   $resultn = $maineg->Get_bank_balanceCredit($bank_id); 
   $resultn1 = $maineg->Get_bank_balanceDebit($bank_id); 
   foreach ($resultn1 as $k => $v) {}                             
   foreach ($resultn as $k => $v) {}
   $balancen1 = $resultn[$k]['amount'];
   $balancen2 = $resultn1[$k]['amount'];

   $image = '';

   $deposit_date = date('Y-m-d');
   
   $transcation_type = "Credit";
   $transaction_source1 = " Sales";
 
   $initial_balancen = $balancen1;
   $currentBalancen = $amount_paid + $balancen1 - $balancen2;


//     if($type == "Regular Customer" && $mode_payment != "Credit" && $adjusted_option != "Yes"){
//     $cREDITchart=$maineg->insertCustomer_ledger($customer[1],$amount_paid,$due,$currentBalance);
//   }

  // if($type == "Regular Customer" && $mode_payment != "Credit" && $adjusted_option != "Yes"){
    
  //       if($currentBalance <= 0 ){
    
  //          $newcurrentBalance = '0.00';
           
  //          $cREDITchart=$maineg->insertCustomer_ledger($customer[1],$amount_paid,$due,$newcurrentBalance);
    
  //      }else{
  //          $cREDITchart=$maineg->insertCustomer_ledger($customer[1],$amount_paid,$due,$currentBalance);
  //      }
  //  }


   $countLoop=1;
   for($i=0; $i<sizeof($product_code);$i++){
   $ItemPrice  = $price[$i];
   $Itemproduct_code  = $product_code[$i];
   $itemcategory   = $category[$i];
   $itemproduct_name   = $product_name[$i];
   $itempacket   = $packet[$i];
   $Itemtotal  = $total[$i];
   $Qtyy  = $qty;  
   // $Itemcolor  =  $color[$i];  
   // $Itemdesign  =  $design[$i];  
   $Itemold_price  = $old_price[$i];
    $Itemcost_of_goods = $cost_of_goods[$i];
   $new_id  = $id[$i];    
   


      if(empty($sales_rep) || empty($order_date) ||  empty($product_code) || empty($product_name)|| empty($price) || empty($total) || empty($invoice_id)){
      echo '<script>swal("Error","one or more fields are empty","error");</script>'; 
       
      }elseif($type == "Walk-in Customer"){


       if($mode_payment == "Credit" && $adjusted_option == "Yes"){

                   $Run = $maineg->insertInvoiceDetailsPriceADJUSTPack($_SESSION['In_id'],$Itemproduct_code,$itemproduct_name,$itemcategory,$mode_payment,$ItemPrice,$Itemtotal,$amount_paid,$due,$order_date,$no_id,$customer_name_new,$address_new,$phone_new,$sales_rep,$status2,$GMD2,$CEO2,$Accountant2,$Itemold_price,$itempacket,$Itemcost_of_goods);

                   $clear_out = $maineg->delete_All('addtocart','sales_rep',$sales_rep);

                    if ($Run == true) {

                         $RunQ=$maineg->AUTOMATIC_SMS_API($customer_phone,$msg_bodyadustedprice);
                         //$RunQ1=$maineg->AUTOMATIC_SMS_API($customer_phoneMa,$msg_bodyadustedpriceMa);

                        echo '<script>swal("Success","Credit Sales Added, Waiting for Approval","success");</script>';

                         }

               }elseif($mode_payment == "Credit"){

        $Run = $maineg->insertInvoiceDetailsCreditPack($_SESSION['In_id'],$Itemproduct_code,$itemproduct_name,$itemcategory,$mode_payment,$Qtyy,$ItemPrice,$Itemtotal,$amount_paid,$due,$order_date,$no_id,$customer_name_new,$address_new,$phone_new,$sales_rep,$status2,$GMD2,$CEO2,$Accountant2,$Itemold_price,$itempacket,$Itemcost_of_goods);

        $clear_out = $maineg->delete_All('addtocart','sales_rep',$sales_rep);

         if ($Run == true) {

            $RunQ=$maineg->AUTOMATIC_SMS_API($customer_phone,$msg_bodycredit);
           // $RunQ1=$maineg->AUTOMATIC_SMS_API($customer_phoneMa,$msg_bodycreditMa);

                echo '<script>swal("Success","Credit Sales Added, Waiting for Approval","success");</script>';

                 }


               }elseif( $adjusted_option == "Yes"){

                   $Run = $maineg->insertInvoiceDetailsPriceADJUSTPack($_SESSION['In_id'],$Itemproduct_code,$itemproduct_name,$itemcategory,$mode_payment,$ItemPrice,$Itemtotal,$amount_paid,$due,$order_date,$no_id,$customer_name_new,$address_new,$phone_new,$sales_rep,$status2,$GMD2,$CEO2,$Accountant2,$Itemold_price,$itempacket,$Itemcost_of_goods);

                   $clear_out = $maineg->delete_All('addtocart','sales_rep',$sales_rep);

                    if ($Run == true) {

                         $RunQ=$maineg->AUTOMATIC_SMS_API($customer_phone,$msg_bodyadustedprice);
                         //$RunQ1=$maineg->AUTOMATIC_SMS_API($customer_phoneMa,$msg_bodyadustedpriceMa);

                        echo '<script>swal("Success","Credit Sales Added, Waiting for Approval","success");</script>';

                         }

               }else{

            $Run = $maineg->insertInvoiceDetailsPack($_SESSION['In_id'],$Itemproduct_code,$itemproduct_name,$itemcategory,$mode_payment,$Qtyy,$ItemPrice,$Itemtotal,$amount_paid,$due,$order_date,$no_id,$customer_name_new,$address_new,$phone_new,$Itemold_price,$itempacket,$sales_rep,$status1,$GMD1,$CEO1,$Accountant1,$bank_name,$bank_id,$Itemcost_of_goods);
      
               if ($Run == true) {
                // $RunQ22=$maineg->UpdateStockStatus($staockSTAS,$Itemproduct_code);
                 $Main =  $maineg->insertInvoicelog($_SESSION['In_id'],$sales_rep,$ItemPrice,$timex,$order_date,$Itemtotal,$amount_paid,$due,$status1,$GMD1,$CEO1,$Accountant1,$bank_name,$bank_id,$Itemcost_of_goods);
                   $RunQ=$maineg->UpdateStocksalePacket($itempacket,$Itemproduct_code);
                    
                  $clear_out = $maineg->delete_All('addtocart','sales_rep',$sales_rep);
                 if ($Main == true  && $RunQ == true) {
                  echo '<script>swal("Success","Transaction Successful","success");</script>';
                         }
                      } 
               }
        }elseif($type == "Regular Customer"){

       if($mode_payment == "Credit" && $adjusted_option == "Yes"){

                   $Run = $maineg->insertInvoiceDetailsPriceADJUSTPack($_SESSION['In_id'],$Itemproduct_code,$itemproduct_name,$itemcategory,$mode_payment,$ItemPrice,$Itemtotal,$amount_paid,$due,$order_date,$customer[1],$customer[0],$address,$phone,$sales_rep,$status2,$GMD2,$CEO2,$Accountant2,$Itemold_price,$itempacket,$Itemcost_of_goods);

                   $clear_out = $maineg->delete_All('addtocart','sales_rep',$sales_rep);

                    if ($Run == true) {

                        $RunQ=$maineg->AUTOMATIC_SMS_API($customer_phone,$msg_bodyadustedprice);
                        //$RunQ1=$maineg->AUTOMATIC_SMS_API($customer_phoneMa,$msg_bodyadustedpriceMa);

                        echo '<script>swal("Success","Credit Sales Added, Waiting for Approval","success");</script>';

                         }

               }elseif($mode_payment == "Credit"){

           $Run = $maineg->insertInvoiceDetailsCreditPack($_SESSION['In_id'],$Itemproduct_code,$itemproduct_name,$itemcategory,$mode_payment,$Qtyy,$ItemPrice,$Itemtotal,$amount_paid,$due,$order_date,$customer[1],$customer[0],$address,$phone,$sales_rep,$status2,$GMD2,$CEO2,$Accountant2,$Itemold_price,$itempacket,$Itemcost_of_goods);

            // $Main =  $maineg->insertInvoicelog($_SESSION['In_id'],$sales_rep,$ItemPrice,$timex,$order_date,$Itemtotal,$amount_paid,$due,$status2,$GMD2,$CEO2,$Accountant2);
            $clear_out = $maineg->delete_All('addtocart','sales_rep',$sales_rep);

         if ($Run == true && $Main = true) {

            $RunQ=$maineg->AUTOMATIC_SMS_API($customer_phone,$msg_bodycredit);
            //$RunQ1=$maineg->AUTOMATIC_SMS_API($customer_phoneMa,$msg_bodycreditMa);

          echo '<script>swal("Success","Credit Sales Added, Waitin for Approval","success");</script>';
        }

       }elseif( $adjusted_option == "Yes"){

                   $Run = $maineg->insertInvoiceDetailsPriceADJUSTPack($_SESSION['In_id'],$Itemproduct_code,$itemproduct_name,$itemcategory,$mode_payment,$ItemPrice,$Itemtotal,$amount_paid,$due,$order_date,$customer[1],$customer[0],$address,$phone,$sales_rep,$status2,$GMD2,$CEO2,$Accountant2,$Itemold_price,$itempacket,$Itemcost_of_goods);

                   $clear_out = $maineg->delete_All('addtocart','sales_rep',$sales_rep);

                    if ($Run == true) {

                        $RunQ=$maineg->AUTOMATIC_SMS_API($customer_phone,$msg_bodyadustedprice);
                       // $RunQ1=$maineg->AUTOMATIC_SMS_API($customer_phoneMa,$msg_bodyadustedpriceMa);

                        echo '<script>swal("Success","Credit Sales Added, Waiting for Approval","success");</script>';

                         }

               }else{

        $Run = $maineg->insertInvoiceDetailsPack($_SESSION['In_id'],$Itemproduct_code,$itemproduct_name,$itemcategory,$mode_payment,$Qtyy,$ItemPrice,$Itemtotal,$amount_paid,$due,$order_date,$customer[1],$customer[0],$address,$phone,$Itemold_price,$itempacket,$sales_rep,$status1,$GMD1,$CEO1,$Accountant1,$bank_name,$bank_id,$Itemcost_of_goods);
      
       if ($Run == true) {
         $Main =  $maineg->insertInvoicelog($_SESSION['In_id'],$sales_rep,$ItemPrice,$timex,$order_date,$Itemtotal,$amount_paid,$due,$status1,$GMD1,$CEO1,$Accountant1,$bank_name,$bank_id,$Itemcost_of_goods);
          $RunQchart=$maineg->chartofAccount($Account1,$Itemtotal);
           $RunQ=$maineg->UpdateStocksalePacket($itempacket,$Itemproduct_code);
          $clear_out = $maineg->delete_All('addtocart','sales_rep',$sales_rep);
         if ($Main == true && $RunQ == true ) {
          echo '<script>swal("Success","Transaction Successful","success");</script>';
                }
            } 
       }

    }else{

            echo '<script>swal("Error","Unable to Perform Transaction","error");</script>';

           } 
           $countLoop++;
      }
      
    //   if($Main == true){

    //      $RunQR=$maineg->insertBankLog($bank_name,$bank_id,$transcation_type,$transaction_id,$due,$description,$initial_balancen,$currentBalancen,$deposit_date,$image);
    //  $RunQchart2=$maineg->chartofAccount($bank_id,$amount_paid);
    // $RunQchart=$maineg->chartofAccount($Account1,$due);
    // $RunQchart1=$maineg->chartofAccount($Account,$amount_paid);
    // $RunQLog1=$maineg->insertAccountLog($transaction_id,$transaction_source,$due,$datex,$Account1,$account_type1,$sales_rep,$series_name1);
    //  $RunQLog2=$maineg->insertAccountLog($transaction_id,$transaction_source,$amount_paid,$datex,$Account,$account_type,$sales_rep,$series_name);

    //   }
}


if (isset($_POST['del'])) {
    $DeleteCat = $_POST['del'];
    $Call = $maineg->cart_Delete($DeleteCat);
      if ($Call==true) {
     echo '<script>swal("Success","Item Removed","success")</script>';
     // echo '<script>window.location="index.php?action=Catery"</script>';
  }
}

require_once 'view/treated_nails.php';
break;




case 'Treatedd':
if (isset($_POST['addCart'])){
    $product_code = $_POST['product_code'];
    $product_name   = $_POST['product_name'];
    $category = $_POST['category'];
    $packet   = $_POST['packet'];
 
    // $design   = $_POST['design'];
    $old_price   = $_POST['old_price'];
    $price   = $_POST['price'];
    @$total   = $_POST['total'];
    // $new_total = str_replace(',', '', $total);
    $cart_date = $_POST['cart_date']; 
    $sales_rep  = $_POST['sales_rep1'];
    @$new_toatl = $price * $packet;
    $purchase_price   = $_POST['purchase_price'];
    @$cost_of_goods = $purchase_price * $packet;

     if ($maineg->check_if_Record_Exist('addtocart', 'product_code', $product_code) == true) {

        echo '<script>swal("Error","Item Already Added, Update the quantity or Select another Item","error");</script>'; 

    }else{

      if(empty($sales_rep) || empty($cart_date) ||  empty($product_code) || empty($product_name)|| empty($price) || empty($packet) || empty($total)){
      echo '<script>swal("Error","one or more fields are empty","error");</script>'; 
        // echo '<script>alert("one or more fields are empty")</script>';
      }else{
        
        if($price < $old_price){

        $Run = $maineg->addtocartPack($product_code,$product_name,$category,$price,$old_price,$total,$cart_date,$sales_rep,$packet,$cost_of_goods);
      
       if($Run == true) {
           echo '<script>alert("Success,New Item Added");</script>';
           echo '<script>window.location="?action=Treated"</script>';
        } else{
        echo '<script>swal("Error","Unable to Perform Transaction","error");</script>';
        } 

        }else{

        $Run = $maineg->addtocartPack($product_code,$product_name,$category,$price,$old_price,$total,$cart_date,$sales_rep,$packet,$cost_of_goods);
      
       if($Run == true) {
           echo '<script>alert("Success,New Item Added");</script>';
           echo '<script>window.location="?action=Treated"</script>';
        } else{
        echo '<script>swal("Error","Unable to Perform Transaction","error");</script>';
        } 

        }

    }
}                                                                                                                                                                                                                                                                                                                                                             
}
require_once 'view/sale_addTreatedNail.php';
break;




// case 'Sales':  

//  if (isset($_POST['seeItem'])){
//    $sales_rep  = $_POST['sales_rep'];
//    $order_date = $_POST['order_date'];  
//    $timex = $_POST['timex'];
//    $type   = $_POST['type'];
//    $mode_payment = $_POST['mode_payment'];
//    $customer_name = $_POST['customer_name'];
//    $address = $_POST['address'];
//    $phone   = $_POST['phone'];
//    $customer_name_new = $_POST['customer_name_new'];
//    $address_new = $_POST['address_new'];
//    $phone_new   = $_POST['phone_new'];
//    $product_code = $_POST['product_code'];
//    $category = $_POST['category'];
//    $product_name   = $_POST['product_name'];
//    $price   = $_POST['price'];
//    $qty   = $_POST['quantity'];
//    $total   = $_POST['total'];
//    $amount_paid = $_POST['amount_paid'];

//    // $old_balance   = $_POST['old_balance'];
//    // $include_bal   = $_POST['include_bal'];
//    // $old_amount_paid = $_POST['old_amount_paid'];
//    // $new_balance = $old_balance - $old_amount_paid;
//    // $total_paid = $old_amount_paid + $amount_paid;

//    $grand_total = $_POST['grand_total'];
//    $customer = explode('-', $customer_name);
//    $furt  = 'Inv';
//    $a=rand(10000,1000);
//    $b=rand(100,1);
//    $c=rand(1000,10);
//    $invoice_id = $furt."_".$c."_".$b;
//    $_SESSION['In_id']= $invoice_id;
//    $newTotal = str_replace(',', '', $total);
//    $due = $grand_total - $amount_paid;
//    $new_due =  $due;
//    /*$due_old = $grand_total - $old_amount_paid;*/
//    // $total_due = $due_old + $due;
//    $status = "Active";
//    $datex = date('Y-m-d');
//    $Account = "4000_SALES";
//    $Account1 = "1200_ACCOUNT_RECEIVABLE";

//    $furt1  = 'Sales';
//    $a1=rand(10000,1000);
//    $b1=rand(100,1);
//    $c1=rand(1000,10);
//    $transaction_id= $furt1."_".$c1.$a1; 
//    $transaction_source = "SALES";
//    $account_type = "Daily Sales";
//    $series_name ="Income";
//    $no_id = "";

//    $account_type1 = "Account Receivable";
//    $series_name1 ="Asset";
//    $description = "Sales On Credit";
//    $type1 = "Credit";
//    $status1 = " Approved";
//    $GMD1 = "Approved";
//    $CEO1 = "Approved";
//    $Accountant1 = "Approved";
//    $status2 = "Unapproved";
//    $GMD2 = "Unapproved";
//    $CEO2 = "Unapproved";
//    $Accountant2 = "Unapproved";

//    $customer_name_new_id = $customer_name_new;


//    $countLoop=1;
//    for($i=0; $i<sizeof($price);$i++){
//    $ItemPrice  = $price[$i];
//    $Itemproduct_code  = $product_code[$i];
//    $itemcategory   = $category[$i];
//    $itemproduct_name   = $product_name[$i];
//    $quantity   = $qty[$i];
//    $Itemtotal  = $total[$i];

  
//       if(empty($sales_rep) || empty($order_date) ||  empty($product_code) || empty($product_name)|| empty($price) || empty($qty) || empty($total)){
//       echo '<script>swal("Error","one or more fields are empty","error");</script>'; 
       
//       }elseif($type == "Walk-in Customer"){


//        if($mode_payment == "Credit"){

//         $Run = $maineg->insertInvoiceDetailsCredit($_SESSION['In_id'],$Itemproduct_code,$itemproduct_name,$itemcategory,$mode_payment,$quantity,$ItemPrice,$Itemtotal,$amount_paid,$due,$order_date,$no_id,$customer_name_new,$address_new,$phone_new,$sales_rep,$status2,$GMD2,$CEO2,$Accountant2);

//         // $Main =  $maineg->insertInvoicelog($_SESSION['In_id'],$sales_rep,$ItemPrice,$timex,$order_date,$Itemtotal,$amount_paid,$due,$status2,$GMD2,$CEO2,$Accountant2);
//         $clear_out = $maineg->delete_All('addtocart','sales_rep',$sales_rep);

//          if ($Run == true) {

//                 echo '<script>swal("Success","Credit Sales Added, Waiting for Approval","success");</script>';

//                  }

//        }elseif($amount_paid == $grand_total){

//         $Run = $maineg->insertInvoiceDetails($_SESSION['In_id'],$Itemproduct_code,$itemproduct_name,$itemcategory,$mode_payment,$quantity,$ItemPrice,$Itemtotal,$amount_paid,$due,$order_date,$no_id,$customer_name_new,$address_new,$phone_new,$sales_rep,$status1,$GMD1,$CEO1,$Accountant1);
      
//        if ($Run == true) {
//          $Main =  $maineg->insertInvoicelog($_SESSION['In_id'],$sales_rep,$ItemPrice,$timex,$order_date,$Itemtotal,$amount_paid,$due,$status1,$GMD1,$CEO1,$Accountant1);
          
        
//          // $RunQ1=$maineg->UpdateStockprosale($quantity,$Itemproduct_code);
//           $RunQchart=$maineg->chartofAccount($Account,$Itemtotal);
//           $RunQLog1=$maineg->insertAccountLog($transaction_id,$transaction_source,$Itemtotal,$datex,$Account,$account_type,$sales_rep,$series_name); 

//            if($itemproduct_name == "Sealent Gum" ||  $itemproduct_name == "Twisted Nails aluminum"  ||  $itemproduct_name == "Treated Nails Stone Coated"){
//              $RunQ=$maineg->UpdateStocksalePacket($quantity,$Itemproduct_code);

//             }elseif($itemproduct_name == "Aluminium Coils" ||  $itemproduct_name == "PPGI Coils"  ||  $itemproduct_name == "Industrial 5"){
//                  $RunQ=$maineg->UpdateStocksaleMeter($quantity,$Itemproduct_code);

//             }else{
//                 $RunQ=$maineg->UpdateStocksale($quantity,$Itemproduct_code);
//             }

//           $clear_out = $maineg->delete_All('addtocart','sales_rep',$sales_rep);
//          if ($Main == true && $RunQ==true && $RunQchart == true && $RunQLog1 == true) {
//           echo '<script>swal("Success","Transaction Successful","success");</script>';
//                  }
//               } 

//        }else{


//             $Run = $maineg->insertInvoiceDetails($_SESSION['In_id'],$Itemproduct_code,$itemproduct_name,$itemcategory,$mode_payment,$quantity,$ItemPrice,$Itemtotal,$amount_paid,$due,$order_date,$no_id,$customer_name_new,$address_new,$phone_new,$sales_rep,$status1,$GMD1,$CEO1,$Accountant1);
      
//        if ($Run == true) {
//          $Main =  $maineg->insertInvoicelog($_SESSION['In_id'],$sales_rep,$ItemPrice,$timex,$order_date,$Itemtotal,$amount_paid,$due,$status1,$GMD1,$CEO1,$Accountant1);
//           if ($itemproduct_name == "Sealent Gum" ||  $itemproduct_name == "Twisted Nails aluminum"  ||  $itemproduct_name == "Treated Nails Stone Coated") {
//                 $RunQ=$maineg->UpdateStocksalePacket($quantity,$Itemproduct_code);
//             }


//             if ($itemproduct_name == "Aluminium Coils" ||  $itemproduct_name == "PPGI Coils"  ||  $itemproduct_name == "Industrial 5") {
//                   $RunQ=$maineg->UpdateStocksaleMeter($quantity,$Itemproduct_code);

//             }


//             if ($itemproduct_name == "Cameroon Zinc" ||  $itemproduct_name == "Flat Sheet"  ||  $itemproduct_name == "Stone Coated Roof Tiles" ||  $itemproduct_name == "Zinc") {
//                 $RunQ=$maineg->UpdateStocksale($quantity,$Itemproduct_code);
//             }
//           $RunQchart=$maineg->chartofAccount($Account1,$Itemtotal);
//            // $RunQLogPay=$maineg->insertReceivable($datex,$description,$type1,$Itemtotal,$amount_paid,$due,$customer_name_new_id,$customer_name_new,$mode_payment,$Account1,$transaction_id,$sales_rep);
//           $RunQLog1=$maineg->insertAccountLog($transaction_id,$transaction_source,$Itemtotal,$datex,$Account1,$account_type1,$sales_rep,$series_name1); 
//           $clear_out = $maineg->delete_All('addtocart','sales_rep',$sales_rep);
//          if ($Main == true && $RunQ==true && $RunQchart == true  && $RunQLog1 == true) {
//           echo '<script>swal("Success","Transaction Successful","success");</script>';
//                  }
//               } 
//        }
//         }elseif($type == "Regular Customer"){

//        if($mode_payment == "Credit"){

//            $Run = $maineg->insertInvoiceDetailsCredit($_SESSION['In_id'],$Itemproduct_code,$itemproduct_name,$itemcategory,$mode_payment,$quantity,$ItemPrice,$Itemtotal,$amount_paid,$due,$order_date,$customer[1],$customer[0],$address,$phone,$sales_rep,$status2,$GMD2,$CEO2,$Accountant2);

//             // $Main =  $maineg->insertInvoicelog($_SESSION['In_id'],$sales_rep,$ItemPrice,$timex,$order_date,$Itemtotal,$amount_paid,$due,$status2,$GMD2,$CEO2,$Accountant2);
//             $clear_out = $maineg->delete_All('addtocart','sales_rep',$sales_rep);

//          if ($Run == true && $Main = true) {
//           echo '<script>swal("Success","Credit Sales Added, Waitin for Approval","success");</script>';
//         }

//        }elseif($amount_paid == $grand_total){

//        $Run = $maineg->insertInvoiceDetails($_SESSION['In_id'],$Itemproduct_code,$itemproduct_name,$itemcategory,$mode_payment,$quantity,$ItemPrice,$Itemtotal,$amount_paid,$due,$order_date,$customer[1],$customer[0],$address,$phone,$sales_rep,$status1,$GMD1,$CEO1,$Accountant1);
      
//        if ($Run == true) {
//          $Main =  $maineg->insertInvoicelog($_SESSION['In_id'],$sales_rep,$ItemPrice,$timex,$order_date,$Itemtotal,$amount_paid,$due,$status1,$GMD1,$CEO1,$Accountant1);
//             if ($itemproduct_name == "Sealent Gum" ||  $itemproduct_name == "Twisted Nails aluminum"  ||  $itemproduct_name == "Treated Nails Stone Coated") {
//                 $RunQ=$maineg->UpdateStocksalePacket($quantity,$Itemproduct_code);
//             }


//             if ($itemproduct_name == "Aluminium Coils" ||  $itemproduct_name == "PPGI Coils"  ||  $itemproduct_name == "Industrial 5") {
//                   $RunQ=$maineg->UpdateStocksaleMeter($quantity,$Itemproduct_code);

//             }


//             if ($itemproduct_name == "Cameroon Zinc" ||  $itemproduct_name == "Flat Sheet"  ||  $itemproduct_name == "Stone Coated Roof Tiles" ||  $itemproduct_name == "Zinc") {
//                 $RunQ=$maineg->UpdateStocksale($quantity,$Itemproduct_code);
//             }
//          $RunQchart=$maineg->chartofAccount($Account,$Itemtotal);
//           $cREDITchart=$maineg->addcREDIT($customer[1],$amount_paid);
//           $RunQLog1=$maineg->insertAccountLog($transaction_id,$transaction_source,$Itemtotal,$datex,$Account,$account_type,$sales_rep,$series_name);
//           $clear_out = $maineg->delete_All('addtocart','sales_rep',$sales_rep);
//          if ($Main == true && $RunQ==true && $RunQchart==true && $RunQLog1==true) {
//           echo '<script>swal("Success","Transaction Successful","success");</script>';
//          }
//         }  

//        }else{

//         $Run = $maineg->insertInvoiceDetails($_SESSION['In_id'],$Itemproduct_code,$itemproduct_name,$itemcategory,$mode_payment,$quantity,$ItemPrice,$Itemtotal,$amount_paid,$due,$order_date,$customer[1],$customer[0],$address,$phone,$sales_rep,$status1,$GMD1,$CEO1,$Accountant1);
      
//        if ($Run == true) {
//          $Main =  $maineg->insertInvoicelog($_SESSION['In_id'],$sales_rep,$ItemPrice,$timex,$order_date,$Itemtotal,$amount_paid,$due,$status1,$GMD1,$CEO1,$Accountant1);


//             if ($itemproduct_name == "Sealent Gum" ||  $itemproduct_name == "Twisted Nails aluminum"  ||  $itemproduct_name == "Treated Nails Stone Coated") {
//                 $RunQ=$maineg->UpdateStocksalePacket($quantity,$Itemproduct_code);
//             }


//             if ($itemproduct_name == "Aluminium Coils" ||  $itemproduct_name == "PPGI Coils"  ||  $itemproduct_name == "Industrial 5") {
//                   $RunQ=$maineg->UpdateStocksaleMeter($quantity,$Itemproduct_code);

//             }


//             if ($itemproduct_name == "Cameroon Zinc" ||  $itemproduct_name == "Flat Sheet"  ||  $itemproduct_name == "Stone Coated Roof Tiles" ||  $itemproduct_name == "Zinc") {
//                 $RunQ=$maineg->UpdateStocksale($quantity,$Itemproduct_code);
//             }


//          // $RunQ1=$maineg->UpdateStockprosale($quantity,$Itemproduct_code);
//           $RunQchart=$maineg->chartofAccount($Account1,$Itemtotal);
//           $cREDITchart=$maineg->addcREDITALL($customer[1],$amount_paid,$due,$new_due);
//           $cREDITchart=$maineg->addcREDIT22($customer[1],$due);
          
//            // $RunQLogPay=$maineg->insertReceivable($datex,$description,$type,$Itemtotal,$amount_paid,$due,$customer[1],$customer[0],$mode_payment,$Account1,$transaction_id,$sales_rep);
//           $RunQLog1=$maineg->insertAccountLog($transaction_id,$transaction_source,$Itemtotal,$datex,$Account1,$account_type1,$sales_rep,$series_name1); 
//           $clear_out = $maineg->delete_All('addtocart','sales_rep',$sales_rep);
//          if ($Main == true && $RunQ==true && $RunQchart == true && $RunQLog1 == true) {
//           echo '<script>swal("Success","Transaction Successful","success");</script>';
//                 }
//             } 
//        }

//     }else{

//             echo '<script>swal("Error","Unable to Perform Transaction","error");</script>';

//            } 
//            $countLoop++;
//       }
// }



// if (isset($_POST['del'])) {
//     $DeleteCat = $_POST['del'];
//     $Call = $maineg->cart_Delete($DeleteCat);
//       if ($Call==true) {
//      echo '<script>swal("Success","Item Removed","success")</script>';
//      // echo '<script>window.location="index.php?action=Catery"</script>';
//   }
// }



// if(isset($_POST['updatec'])){
//      $id = $_POST['new_id'];
//      $quantity = $_POST['new_qty'];
//      $price = $_POST['new_price'];
//      $total = $_POST['new_total'];

//       $Call = $maineg->cart_Update($id, $quantity, $price, $total);

//       if ($Call == true) {
//             echo '<script>swal("Success",Item Qty Updated","success");</script>';
//         } else{
//           echo '<script>swal("Error","Unable to Update Qty","error");</script>';
//              } 
//       }



//     if(isset($_GET['Emptycart'])){
//      $maincl = new mainClass();
//      $maincl->delete_All('addtocart','user',$_GET['Emptycart']);
//         if($maincl == true){
//          echo '<script>alert("Your Cart have Cleared")</script>'; 
//          echo '<script>window.location="?action=checkOUT"</script>';
//      }else{
//          echo '<script>alert("opps unable to delete ")</script>';    
//      }
//    }

// require_once 'view/sales.php';
// break;



case 'SaleList':
if (isset($_POST['addCart'])){
    $product_code = $_POST['product_code'];
    $product_name   = $_POST['product_name'];
    $category = $_POST['category'];
    $quantity   = $_POST['qty'];
    $price   = $_POST['price'];
    $total   = $_POST['total'];
    // $new_total = str_replace(',', '', $total);
    $cart_date = $_POST['cart_date']; 
    $sales_rep  = $_POST['sales_rep1'];

      if(empty($sales_rep) || empty($cart_date) ||  empty($product_code) || empty($product_name)|| empty($price) || empty($quantity) || empty($total)){
      echo '<script>swal("Error","one or more fields are empty","error");</script>'; 
        // echo '<script>alert("one or more fields are empty")</script>';
      }else{
        $Run = $maineg->addtocart($product_code,$product_name,$category,$quantity,$price,$total,$cart_date,$sales_rep);
      
       if($Run == true) {
           echo '<script>alert("Success,New Item Added");</script>';
           echo '<script>window.location="?action=Sales"</script>';
        } else{
        echo '<script>swal("Error","Unable to Perform Transaction","error");</script>';
        } 
    }
}
require_once 'view/sale_addList.php';
break;



case 'printedWay':  
    if(isset($_POST['b_print'])){
   @$invoice_id = $_POST['refrence'];
   $delivery = "delivered";
    if(empty($invoice_id) || empty($delivery)){
        echo '<script>swal("error","one or more fields are empty","error")</script>'; 
      }else{
             $RunQ=$maineg->deliveredWaybill($delivery,$invoice_id); 
             
            if ($RunQ == true) {
                
                //$RunQ=$maineg->deliveredstock($delivery,$invoice_id); 
              echo '<script>swal("Success","Message Sent Successfully","success");</script>'; 
            }else{
             echo '<script>swal("Error","Unable Update Waybill","error");</script>';
           } 
       }
    }
require_once  'view/printed_waybill.php';
break;




case 'approve_credit_sale':  
require_once  'view/approve_sale.php';
break;



case 'approve_aject_Sales':  
require_once  'view/complete_price_adustment_sale.php';
break;




case 'approve_det':
//     ini_set('display_startup_errors',1); 
// ini_set('display_errors',1);
// error_reporting(-1);
    // echo "ok";
if (isset($_POST['CreditItem'])){
   $sales_rep  = $_POST['sales_rep'];
   $order_date = $_POST['order_date'];  
   $timex = $_POST['timex'];
   $type   = "Regular Customer";
   $customer = $_POST['customer'];
   $customer_name = $_POST['customer_name'];
   $address = $_POST['address'];
   $phone   = $_POST['phone'];
   // $customer_name_new = $_POST['customer_name_new'];
   $product_code = $_POST['product_code'];
   $category = $_POST['category'];
   $product_name   = $_POST['product_name'];
   $price  = $_POST['price']; 
   $amount_paid  = $_POST['amount_paid'];                                              
   $qty = $_POST['quantity'];
   $kg_weight = $_POST['kg_weight'];
   $meter_length = $_POST['meter_length'];
   $packet = $_POST['packet'];
   $guage = $_POST['guage'];
   $color = $_POST['color'];
   $old_price = $_POST['old_price'];
   $embossed = $_POST['embossed'];
   $design = $_POST['design'];
   $total = $_POST['total'];
   $invoice_id = $_POST['invoice_id']; 
   $grand_total = $_POST['grand_total'];
   // $customer = explode('-', $customer_name);
   $newTotal = str_replace(',', '', $total);
   $due = $grand_total - $amount_paid;
   $status = "Active";
   $datex = date('Y-m-d');
   $Account = "4000_SALES";
   $Account1 = "1200_ACCOUNT_RECEIVABLE";

   $furt1  = 'Sales';
   $a1=rand(10000,1000);
   $b1=rand(100,1);
   $c1=rand(1000,10);
   $transaction_id= $furt1."_".$c1.$a1; 
   $transaction_source = "CREDIT SALES";
   $description = "Sales On Credit";
   $mode_payment = "Credit";
   $status1 = " Approved";
   $GMD1 = "Approved";
   $CEO1 = "Approved";
   $Accountant1 = "Approved";
   $account_type1 = "Account Receivable";
   $series_name1 ="Asset";
   $new_due =  $due;
   // $customer_name_new_id = $customer_name_new;

    $staockSTAS = "outstock";
     $aproval = "Approved";
    $RunQ22="";


    $cost_of_goods   = $_POST['cost_of_goods'];


$result = $maineg->Get_balanceCredit($customer_name); 
   $result1 = $maineg->Get_balanceDebit($customer_name); 
   foreach ($result1 as $k => $v) {}                             
   foreach ($result as $k => $v) {}
   $balance1 = $result[$k]['credit'] + $amount_paid;
   $balance2 = $result1[$k]['debit'] + $due;
   $initial_balance = $balance2 - $balance1; 
   $currentBalance = $initial_balance;

//     if($type == "Regular Customer"){
//     $cREDITchart=$maineg->insertCustomer_ledger($customer[1],$amount_paid,$due,$currentBalance);
//   }


//   if($type == "Regular Customer"){
    
//         if($currentBalance <= 0 ){
    
//           $newcurrentBalance = '0.00';
           
//           $cREDITchart=$maineg->insertCustomer_ledger($customer[1],$amount_paid,$due,$newcurrentBalance);
    
//       }else{
//           $cREDITchart=$maineg->insertCustomer_ledger($customer[1],$amount_paid,$due,$currentBalance);
//       }
//   }


   $countLoop=1;
   for($i=0; $i<sizeof($product_code);$i++){
   $ItemPrice = $price[$i];
   $Itemproduct_code = $product_code[$i];
   $itemcategory = $category[$i];
   $itemproduct_name = $product_name[$i];
   $quantity = $qty[$i];
   $Itemkg_weight = $kg_weight[$i];
   $Itemmeter_length = $meter_length[$i];
   $itempacket = $packet[$i];
   $Itemguage = $guage[$i];
   $Itemcolor = $color[$i];
   $Itemembossed = $embossed[$i];
   $Itemold_price = $old_price[$i];
   $Itemdesign = $design[$i];
   $Itemtotal  = $total[$i];
   $Itemcost_of_goods = $cost_of_goods[$i];
   $bank_name = "None";
   $bank_id = "None"; 

    if(empty($sales_rep) || empty($order_date) ||  empty($product_code) || empty($product_name)|| empty($price) || empty($total)){
          
          echo '<script>swal("Error","one or more fields are empty","error");</script>'; 

    }else{

        
               $Run = $maineg->insertInvoiceDetailSales($invoice_id,$Itemproduct_code,$itemproduct_name,$itemcategory,$mode_payment,$quantity,$ItemPrice,$Itemtotal,$amount_paid,$due,$order_date,$customer,$customer_name,$address,$phone,$Itemcolor,$Itemguage,$Itemold_price,$Itemkg_weight,$Itemmeter_length,$Itemembossed,$Itemdesign,$itempacket,$sales_rep,$status1,$GMD1,$CEO1,$Accountant1,$bank_name,$bank_id,$Itemcost_of_goods);

               if ($Run == true) {
                 $maineg->UpdateCreditTAB($aproval,$invoice_id);
                 // $UpdateSto = $maineg->UpdateStockStatus($staockSTAS,$Itemproduct_code);


                  if($itemproduct_name === "Aluminium Coils" || $itemproduct_name === "PPGI Coils"  || $itemproduct_name === "Industrial 5"){

                       $update22 = $maineg->UpdateStockStatus($staockSTAS,$Itemproduct_code);

                     }elseif($itemproduct_name === "Cameroon Zinc" || $itemproduct_name === "Flat Sheet" || $itemproduct_name === "Stone Coated Roof Tiles" || $itemproduct_name === "Zinc"){

                      $update22 =  $maineg->UpdateStocksale($quantity,$Itemproduct_code);

                     }elseif($itemproduct_name === "Sealent Gum" || $itemproduct_name === "Twisted Nails aluminum" || $itemproduct_name === "Treated Nails Stone Coated"){

                      $update22 =  $maineg->UpdateStocksalePacket($itempacket,$Itemproduct_code);
                        
                     }


                 $Main =  $maineg->insertInvoicelog($invoice_id,$sales_rep,$ItemPrice,$timex,$order_date,$Itemtotal,$amount_paid,$due,$status1,$GMD1,$CEO1,$Accountant1,$bank_name,$bank_id,$Itemcost_of_goods);
                 
                  $clear_out = $maineg->delete_All('addtocart','sales_rep',$sales_rep);
                 if ($Main == true && $update22 == true) {
                  echo '<script>swal("Success","Transaction Successful","success");</script>';
                         }
                      
                    }else{
                echo '<script>swal("Error","Unable to Perform Transaction","error");</script>';
                   } 
   
     }

     $countLoop++;
    
    }
    // $RunQchart=$maineg->chartofAccount($Account1,$due);
    // $RunQchart1=$maineg->chartofAccount($Account,$amount_paid);
    // $RunQLog1=$maineg->insertAccountLog($transaction_id,$transaction_source,$amount_paid,$datex,$Account1,$account_type1,$sales_rep,$series_name1);
}
require_once 'view/approve_sale_details.php';
break;



// case 'approve_det':
// //     ini_set('display_startup_errors',1); 
// // ini_set('display_errors',1);
// // error_reporting(-1);
//     // echo "ok";
// if (isset($_POST['CreditItem'])){
//   $sales_rep  = $_POST['sales_rep'];
//   $order_date = $_POST['order_date'];  
//   $timex = $_POST['timex'];
//   $type   = "Regular Customer";
//   $customer = $_POST['customer'];
//   $customer_name = $_POST['customer_name'];
//   $address = $_POST['address'];
//   $phone   = $_POST['phone'];
//   // $customer_name_new = $_POST['customer_name_new'];
//   $product_code = $_POST['product_code'];
//   $category = $_POST['category'];
//   $product_name   = $_POST['product_name'];
//   $price  = $_POST['price']; 
//   $amount_paid  = $_POST['amount_paid'];                                              
//   $qty = $_POST['quantity'];
//   $kg_weight = $_POST['kg_weight'];
//   $meter_length = $_POST['meter_length'];
//   $packet = $_POST['packet'];
//   $guage = $_POST['guage'];
//   $color = $_POST['color'];
//   $old_price = $_POST['old_price'];
//   $embossed = $_POST['embossed'];
//   $design = $_POST['design'];
//   $total = $_POST['total'];
//   $invoice_id = $_POST['invoice_id']; 
//   $grand_total = $_POST['grand_total'];
//   // $customer = explode('-', $customer_name);
//   $newTotal = str_replace(',', '', $total);
//   $due = $grand_total - $amount_paid;
//   $status = "Active";
//   $datex = date('Y-m-d');
//   $Account = "4000_SALES";
//   $Account1 = "1200_ACCOUNT_RECEIVABLE";

//   $furt1  = 'Sales';
//   $a1=rand(10000,1000);
//   $b1=rand(100,1);
//   $c1=rand(1000,10);
//   $transaction_id= $furt1."_".$c1.$a1; 
//   $transaction_source = "CREDIT SALES";
//   $description = "Sales On Credit";
//   $mode_payment = "Credit";
//   $status1 = " Approved";
//   $GMD1 = "Approved";
//   $CEO1 = "Approved";
//   $Accountant1 = "Approved";
//   $account_type1 = "Account Receivable";
//   $series_name1 ="Asset";
//   $new_due =  $due;
//   // $customer_name_new_id = $customer_name_new;

//     $staockSTAS = "outstock";
//      $aproval = "Approved";
//     $RunQ22="";


//     $cost_of_goods   = $_POST['cost_of_goods'];


// $result = $maineg->Get_balanceCredit($customer_name); 
//   $result1 = $maineg->Get_balanceDebit($customer_name); 
//   foreach ($result1 as $k => $v) {}                             
//   foreach ($result as $k => $v) {}
//   $balance1 = $result[$k]['credit'] + $amount_paid;
//   $balance2 = $result1[$k]['debit'] + $due;
//   $initial_balance = $balance1 - $balance2; 
//   $currentBalance = $initial_balance;

//     if($type == "Regular Customer" && $mode_payment != "Credit" && $adjusted_option != "Yes"){
//     $cREDITchart=$maineg->insertCustomer_ledger($customer[1],$amount_paid,$due,$currentBalance);
//   }


//   $countLoop=1;
//   for($i=0; $i<sizeof($product_code);$i++){
//   $ItemPrice = $price[$i];
//   $Itemproduct_code = $product_code[$i];
//   $itemcategory = $category[$i];
//   $itemproduct_name = $product_name[$i];
//   $quantity = $qty[$i];
//   $Itemkg_weight = $kg_weight[$i];
//   $Itemmeter_length = $meter_length[$i];
//   $itempacket = $packet[$i];
//   $Itemguage = $guage[$i];
//   $Itemcolor = $color[$i];
//   $Itemembossed = $embossed[$i];
//   $Itemold_price = $old_price[$i];
//   $Itemdesign = $design[$i];
//   $Itemtotal  = $total[$i];
//   $Itemcost_of_goods = $cost_of_goods[$i];
//   $bank_name = "None";
//   $bank_id = "None"; 

//     if(empty($sales_rep) || empty($order_date) ||  empty($product_code) || empty($product_name)|| empty($price) || empty($total)){
          
//           echo '<script>swal("Error","one or more fields are empty","error");</script>'; 

//     }else{

        
//               $Run = $maineg->insertInvoiceDetailSales($invoice_id,$Itemproduct_code,$itemproduct_name,$itemcategory,$mode_payment,$quantity,$ItemPrice,$Itemtotal,$amount_paid,$due,$order_date,$customer,$customer_name,$address,$phone,$Itemcolor,$Itemguage,$Itemold_price,$Itemkg_weight,$Itemmeter_length,$Itemembossed,$Itemdesign,$itempacket,$sales_rep,$status1,$GMD1,$CEO1,$Accountant1,$bank_name,$bank_id,$Itemcost_of_goods);

//               if ($Run == true) {
//                  $maineg->UpdateCreditTAB($aproval,$invoice_id);
//                  // $UpdateSto = $maineg->UpdateStockStatus($staockSTAS,$Itemproduct_code);


//                   if($itemproduct_name === "Aluminium Coils" || $itemproduct_name === "PPGI Coils"  || $itemproduct_name === "Industrial 5"){

//                       $update22 = $maineg->UpdateStockStatus($staockSTAS,$Itemproduct_code);

//                      }elseif($itemproduct_name === "Cameroon Zinc" || $itemproduct_name === "Flat Sheet" || $itemproduct_name === "Stone Coated Roof Tiles" || $itemproduct_name === "Zinc"){

//                       $update22 =  $maineg->UpdateStocksale($quantity,$Itemproduct_code);

//                      }elseif($itemproduct_name === "Sealent Gum" || $itemproduct_name === "Twisted Nails aluminum" || $itemproduct_name === "Treated Nails Stone Coated"){

//                       $update22 =  $maineg->UpdateStocksalePacket($itempacket,$Itemproduct_code);
                        
//                      }


//                  $Main =  $maineg->insertInvoicelog($invoice_id,$sales_rep,$ItemPrice,$timex,$order_date,$Itemtotal,$amount_paid,$due,$status1,$GMD1,$CEO1,$Accountant1,$bank_name,$bank_id,$Itemcost_of_goods);
//                  $RunQchart=$maineg->chartofAccount($Account1,$Itemtotal);
            

//                  $RunQLog1=$maineg->insertAccountLog($transaction_id,$transaction_source,$Itemtotal,$datex,$Account1,$account_type1,$sales_rep,$series_name1);
//                   $clear_out = $maineg->delete_All('addtocart','sales_rep',$sales_rep);
//                  if ($Main == true && $RunQchart == true && $RunQLog1 == true && $update22 == true) {
//                   echo '<script>swal("Success","Transaction Successful","success");</script>';
//                          }
                      
//                     }else{
//                 echo '<script>swal("Error","Unable to Perform Transaction","error");</script>';
//                   } 
   
//      }

//      $countLoop++;
    
//     }
// }
// require_once 'view/approve_sale_details.php';
// break;




// case 'approve_AdjustPSale':
// if (isset($_POST['AdjustItem'])){
//   $sales_rep  = $_POST['sales_rep'];
//   $order_date = $_POST['order_date'];  
//   $timex = $_POST['timex'];
//   $type   = "Regular Customer";
//   $customer = $_POST['customer'];
//   $customer_name = $_POST['customer_name'];
//   $address = $_POST['address'];
//   $phone   = $_POST['phone'];
//   // $customer_name_new = $_POST['customer_name_new'];
//   $product_code = $_POST['product_code'];
//   $category = $_POST['category'];
//   $product_name   = $_POST['product_name'];
//   $price  = $_POST['price']; 
//   $amount_paid  = $_POST['amount_paid'];                                              
//   $qty = $_POST['quantity'];
//   $kg_weight = $_POST['kg_weight'];
//   $meter_length = $_POST['meter_length'];
//   $packet = $_POST['packet'];
//   $guage = $_POST['guage'];
//   $color = $_POST['color'];
//   $old_price = $_POST['old_price'];
//   $embossed = $_POST['embossed'];
//   $design = $_POST['design'];
//   $total = $_POST['total'];
//   $invoice_id = $_POST['invoice_id']; 
//   $grand_total = $_POST['grand_total'];
//   // $customer = explode('-', $customer_name);
//   $newTotal = str_replace(',', '', $total);
//   $due = $grand_total - $amount_paid;
//   $status = "Active";
//   $datex = date('Y-m-d');
//   $Account = "4000_SALES";
//   $Account1 = "1200_ACCOUNT_RECEIVABLE";
   
//   $bank = $_POST['bank_name'];
//   $bank_deatils = explode('-', $bank);
//   $bank_id = $bank_deatils[0];
//   $bank_name = $bank_deatils[1];

//   $furt1  = 'Sales';
//   $a1=rand(10000,1000);
//   $b1=rand(100,1);
//   $c1=rand(1000,10);
//   $transaction_id= $furt1."_".$c1.$a1; 
//   $transaction_source = "CREDIT SALES";
//   $description = "Sales On Credit";
//   $mode_payment = "Credit";
//   $status1 = " Approved";
//   $GMD1 = "Approved";
//   $CEO1 = "Approved";
//   $Accountant1 = "Approved";
//   $account_type1 = "Account Receivable";
//   $series_name1 ="Asset";
//   $new_due =  $due;
//   // $customer_name_new_id = $customer_name_new;

//     $staockSTAS = "outstock";
//     $aproval = "Approved";
//     $RunQ22="";

   
//   $cost_of_goods   = $_POST['cost_of_goods'];
   
//   $result = $maineg->Get_balanceCredit($customer_name); 
//   $result1 = $maineg->Get_balanceDebit($customer_name); 
//   foreach ($result1 as $k => $v) {}                             
//   foreach ($result as $k => $v) {}
//   $balance1 = $result[$k]['credit'] + $amount_paid;
//   $balance2 = $result1[$k]['debit'] + $due;
//   $initial_balance = $balance1 - $balance2; 
//   $currentBalance = $initial_balance;

//     if($type == "Regular Customer" && $mode_payment != "Credit" && $adjusted_option != "Yes"){
//     $cREDITchart=$maineg->insertCustomer_ledger($customer[1],$amount_paid,$due,$currentBalance);
//   }


//   $countLoop=1;
//   for($i=0; $i<sizeof($product_code);$i++){
//   $ItemPrice  = $price[$i];
//   $Itemproduct_code  = $product_code[$i];
//   $itemcategory   = $category[$i];
//   $itemproduct_name   = $product_name[$i];
//   $quantity   = $qty[$i];
//   $Itemkg_weight   = $kg_weight[$i];
//   $Itemmeter_length = $meter_length[$i];
//   $itempacket = $packet[$i];
//   $Itemguage = $guage[$i];
//   $Itemcolor = $color[$i];
//   $Itemembossed = $embossed[$i];
//   $Itemold_price = $old_price[$i];
//   $Itemdesign = $design[$i];
//   $Itemcost_of_goods = $cost_of_goods[$i];
   
//   $Itemtotal  = $total[$i];

//     if(empty($sales_rep) || empty($order_date) ||  empty($product_code) || empty($product_name)|| empty($price) || empty($total)){

//             echo '<script>swal("Error","one or more fields are empty","error");</script>'; 

//     }else{

    
//     $Run = $maineg->insertInvoiceDetailSales($invoice_id,$Itemproduct_code,$itemproduct_name,$itemcategory,$mode_payment,$quantity,$ItemPrice,$Itemtotal,$amount_paid,$due,$order_date,$customer,$customer_name,$address,$phone,$Itemcolor,$Itemguage,$Itemold_price,$Itemkg_weight,$Itemmeter_length,$Itemembossed,$Itemdesign,$itempacket,$sales_rep,$status1,$GMD1,$CEO1,$Accountant1,$bank_name,$bank_id,$Itemcost_of_goods);

//               if ($Run == true) {
//                  $maineg->UpdateCreditTABAdjust($aproval,$invoice_id);


//                      if($itemproduct_name === "Aluminium Coils" || $itemproduct_name === "PPGI Coils"  || $itemproduct_name === "Industrial 5"){

//                       $update22 = $maineg->UpdateStockStatus($staockSTAS,$Itemproduct_code);

//                      }elseif($itemproduct_name === "Cameroon Zinc" || $itemproduct_name === "Flat Sheet" || $itemproduct_name === "Stone Coated Roof Tiles" || $itemproduct_name === "Zinc"){

//                       $update22 =  $maineg->UpdateStocksale($quantity,$Itemproduct_code);

//                      }elseif($itemproduct_name === "Sealent Gum" || $itemproduct_name === "Twisted Nails aluminum" || $itemproduct_name === "Treated Nails Stone Coated"){

//                       $update22 =  $maineg->UpdateStocksalePacket($itempacket,$Itemproduct_code);
                        
//                      }

                 
//                  $Main =  $maineg->insertInvoicelog($invoice_id,$sales_rep,$ItemPrice,$timex,$order_date,$Itemtotal,$amount_paid,$due,$status1,$GMD1,$CEO1,$Accountant1,$bank_name,$bank_id,$Itemcost_of_goods);
//                  $RunQchart=$maineg->chartofAccount($Account1,$Itemtotal);
//                  $RunQLog1=$maineg->insertAccountLog($transaction_id,$transaction_source,$Itemtotal,$datex,$Account1,$account_type1,$sales_rep,$series_name1);

//                   $clear_out = $maineg->delete_All('addtocart','sales_rep',$sales_rep);
//                  if ($Main == true && $RunQchart == true && $RunQLog1 == true && $update22 == true) {
//                   echo '<script>swal("Success","Transaction Successful","success");</script>';
//                          } 
//                 }else{
//             echo '<script>swal("Error","Unable to Perform Transaction","error");</script>';
//               } 
   
//      }

//      $countLoop++;
    
//     }
// }
// require_once 'view/approve_adjusted_price_details.php';
// break;



case 'approve_AdjustPSale':
if (isset($_POST['AdjustItem'])){
   $sales_rep  = $_POST['sales_rep'];
   $order_date = $_POST['order_date'];  
   $timex = $_POST['timex'];
   $type   = "Regular Customer";
   $customer = $_POST['customer'];
   $customer_name = $_POST['customer_name'];
   $address = $_POST['address'];
   $phone   = $_POST['phone'];
   // $customer_name_new = $_POST['customer_name_new'];
   $product_code = $_POST['product_code'];
   $category = $_POST['category'];
   $product_name   = $_POST['product_name'];
   $price  = $_POST['price']; 
   $amount_paid  = $_POST['amount_paid'];                                              
   $qty = $_POST['quantity'];
   $kg_weight = $_POST['kg_weight'];
   $meter_length = $_POST['meter_length'];
   $packet = $_POST['packet'];
   $guage = $_POST['guage'];
   $color = $_POST['color'];
   $old_price = $_POST['old_price'];
   $embossed = $_POST['embossed'];
   $design = $_POST['design'];
   $total = $_POST['total'];
   $invoice_id = $_POST['invoice_id']; 
   $grand_total = $_POST['grand_total'];
   // $customer = explode('-', $customer_name);
   $newTotal = str_replace(',', '', $total);
   $due = $grand_total - $amount_paid;
   $status = "Active";
   $datex = date('Y-m-d');
   $Account = "4000_SALES";
   $Account1 = "1200_ACCOUNT_RECEIVABLE";
   
    $transaction_source = "SALES";
   $account_type = "Daily Sales";
   $series_name ="Income";
   
   $bank = $_POST['bank_name'];
   $bank_deatils = explode('-', $bank);
   $bank_id = $bank_deatils[0];
   $bank_name = $bank_deatils[1];

   $furt1  = 'Sales';
   $a1=rand(10000,1000);
   $b1=rand(100,1);
   $c1=rand(1000,10);
   $transaction_id= $furt1."_".$c1.$a1; 
   $transaction_source1 = "CREDIT SALES";
   $description = "Sales On Credit";
   $mode_payment = "Credit";
   $status1 = " Approved";
   $GMD1 = "Approved";
   $CEO1 = "Approved";
   $Accountant1 = "Approved";
   $account_type1 = "Account Receivable";
   $series_name1 ="Asset";
   $new_due =  $due;
   // $customer_name_new_id = $customer_name_new;

    $staockSTAS = "outstock";
    $aproval = "Approved";
    $RunQ22="";

   
   $cost_of_goods   = $_POST['cost_of_goods'];
   
   $result = $maineg->Get_balanceCredit($customer_name); 
   $result1 = $maineg->Get_balanceDebit($customer_name); 
   foreach ($result1 as $k => $v) {}                             
   foreach ($result as $k => $v) {}
   $balance1 = $result[$k]['credit'] + $amount_paid;
   $balance2 = $result1[$k]['debit'] + $due;
   $initial_balance = $balance2 - $balance1; 
   $currentBalance = $initial_balance;


   $resultn = $maineg->Get_bank_balanceCredit($bank_id); 
   $resultn1 = $maineg->Get_bank_balanceDebit($bank_id); 
   foreach ($resultn1 as $k => $v) {}                             
   foreach ($resultn as $k => $v) {}
   $balancen1 = $resultn[$k]['amount'];
   $balancen2 = $resultn1[$k]['amount'];

   $image = '';

   $deposit_date = date('Y-m-d');
   
   $transcation_type = "Credit";
   $transaction_source1 = "Adjusted Price Sales";
 
   $initial_balancen = $balancen1;
   $currentBalancen = $amount_paid + $balancen1 - $balancen2;

//     if($type == "Regular Customer" && $mode_payment != "Credit" && $adjusted_option != "Yes"){
//     $cREDITchart=$maineg->insertCustomer_ledger($customer[1],$amount_paid,$due,$currentBalance);
//   }


//   if($type == "Regular Customer"){
    
//         if($currentBalance <= 0 ){
    
//           $newcurrentBalance = '0.00';
           
//           $cREDITchart=$maineg->insertCustomer_ledger($customer[1],$amount_paid,$due,$newcurrentBalance);
    
//       }else{
//           $cREDITchart=$maineg->insertCustomer_ledger($customer[1],$amount_paid,$due,$currentBalance);
//       }
//   }


   $countLoop=1;
   for($i=0; $i<sizeof($product_code);$i++){
   $ItemPrice  = $price[$i];
   $Itemproduct_code  = $product_code[$i];
   $itemcategory   = $category[$i];
   $itemproduct_name   = $product_name[$i];
   $quantity   = $qty[$i];
   $Itemkg_weight   = $kg_weight[$i];
   $Itemmeter_length = $meter_length[$i];
   $itempacket = $packet[$i];
   $Itemguage = $guage[$i];
   $Itemcolor = $color[$i];
   $Itemembossed = $embossed[$i];
   $Itemold_price = $old_price[$i];
   $Itemdesign = $design[$i];
   $Itemcost_of_goods = $cost_of_goods[$i];
   
   $Itemtotal  = $total[$i];

    if(empty($sales_rep) || empty($order_date) ||  empty($product_code) || empty($product_name)|| empty($price) || empty($total)){

            echo '<script>swal("Error","one or more fields are empty","error");</script>'; 

    }else{





    
    $Run = $maineg->insertInvoiceDetailSales($invoice_id,$Itemproduct_code,$itemproduct_name,$itemcategory,$mode_payment,$quantity,$ItemPrice,$Itemtotal,$amount_paid,$due,$order_date,$customer,$customer_name,$address,$phone,$Itemcolor,$Itemguage,$Itemold_price,$Itemkg_weight,$Itemmeter_length,$Itemembossed,$Itemdesign,$itempacket,$sales_rep,$status1,$GMD1,$CEO1,$Accountant1,$bank_name,$bank_id,$Itemcost_of_goods);

               if ($Run == true) {
                 $maineg->UpdateCreditTABAdjust($aproval,$invoice_id);


                     if($itemproduct_name === "Aluminium Coils" || $itemproduct_name === "PPGI Coils"  || $itemproduct_name === "Industrial 5"){

                       $update22 = $maineg->UpdateStockStatus($staockSTAS,$Itemproduct_code);

                     }elseif($itemproduct_name === "Cameroon Zinc" || $itemproduct_name === "Flat Sheet" || $itemproduct_name === "Stone Coated Roof Tiles" || $itemproduct_name === "Zinc"){

                      $update22 =  $maineg->UpdateStocksale($quantity,$Itemproduct_code);

                     }elseif($itemproduct_name === "Sealent Gum" || $itemproduct_name === "Twisted Nails aluminum" || $itemproduct_name === "Treated Nails Stone Coated"){

                      $update22 =  $maineg->UpdateStocksalePacket($itempacket,$Itemproduct_code);
                        
                     }

                 
                 $Main =  $maineg->insertInvoicelog($invoice_id,$sales_rep,$ItemPrice,$timex,$order_date,$Itemtotal,$amount_paid,$due,$status1,$GMD1,$CEO1,$Accountant1,$bank_name,$bank_id,$Itemcost_of_goods);
                
                 

                  $clear_out = $maineg->delete_All('addtocart','sales_rep',$sales_rep);
                 if ($Main == true && $update22 == true) {
                  echo '<script>swal("Success","Transaction Successful","success");</script>';
                         } 
                }else{
            echo '<script>swal("Error","Unable to Perform Transaction","error");</script>';
               } 
   
     }

     $countLoop++;

    }
    //  $RunQR=$maineg->insertBankLog($bank_name,$bank_id,$transcation_type,$transaction_id,$due,$description,$initial_balancen,$currentBalancen,$deposit_date,$image);
    //  $RunQchart2=$maineg->chartofAccount($bank_id,$amount_paid);
    // $RunQchart=$maineg->chartofAccount($Account1,$due);
    // $RunQchart1=$maineg->chartofAccount($Account,$amount_paid);
    //  $RunQLog1=$maineg->insertAccountLog($transaction_id,$transaction_source1,$due,$datex,$Account1,$account_type1,$sales_rep,$series_name1);
    //  $RunQLog2=$maineg->insertAccountLog($transaction_id,$transaction_source,$amount_paid,$datex,$Account,$account_type,$sales_rep,$series_name);
}
require_once 'view/approve_adjusted_price_details.php';
break;




case 'AddExpense':
if(isset($_POST['RequestSubmit'])){
     $requestName  = $_POST['requestName'];
     $description = $_POST['description'];
     $vendor_contractor = $_POST['vendor_contractor'];
     $amount  = $_POST['amount'];
     $staff  = $_POST['staff'];
     $type  = 'Expense';  
     $furt  = 'expense';
     $a=rand(1000,100);
     $b=rand(100,1);
     $c=rand(1000,10);
     $request_no= $furt."_".$c."_".$a;
     $datex = date('Y-m-d');
     $status = 'Unapproved';
     @$StaffId = explode('-', $staff);
     $newStaff = '';
     $staff_name = $staff;
     $record_by = $_POST['record_by'];
     $invoice_no = '';
     $customer_name = $staff;
     $bank_name ="";
     $trans_type = 'debit';
     $account_id = '1001_PETTY_CASH';
     $request_Amount = $amount;
      if(empty($requestName) || empty($description) || empty($vendor_contractor) || empty($amount) || empty($staff)){

        echo '<script>swal("error","one or more fields are empty","error");</script>'; 

      }else{

        $RunQ=$maineg->insertRequest($datex,$requestName,$request_no,$vendor_contractor,$description,$amount,$newStaff,$record_by,$status,$type,$staff_name);

          if($RunQ==true){
        $Run = $maineg->insertPaymentBank($datex,$invoice_no,$customer_name,$amount,$description,$request_no,$type,$bank_name,$record_by,$trans_type);
        $RunQ1=$maineg->chartofAccount($account_id,$request_Amount);
        echo '<script>swal("Success","New Request Submitted","success");</script>';  
           } else{
        echo '<script>swal("Error","Unable to Submit Request","error");</script>';
        }
    }
   
}
//$Run = $maineg->insertPaymentBank($voucher_date,$invoice_no,$customer_name,$amount,$purpose,$voucher_id,$type,$bank_name,$user,$trans_type
require_once 'view/add_expense.php';
break;


case 'AllRequest':
require_once 'view/allRequest.php';
break;


case 'OtherIn':
require_once 'view/other_incomer.php';
break;





case 'CEO_APPROVE':
 if(isset($_POST['ceoApprove'])){
 $invoice_no = $_POST['invoice_no'];
 $ceo_comment = $_POST['ceo_comment'];
 $ceo = "Approved";

$DBinfo = $maineg->Targeted_information('admin','username',$_SESSION['Admin']);

if($DBinfo['role'] != "CEO"){
     echo '<script>swal("Error","You dont have right to approve this sales","error");</script>';

}else{

 $Call = $maineg->Ceo_Update($invoice_no,$ceo,$ceo_comment);

 if($Call == true) {
            echo '<script>swal("Success","Ceo Approval Successful","success");</script>'; 
              echo '<script>window.location="?action=approve_credit_sale"</script>';  
    } else{
            echo '<script>swal("Error","Unable to Approval","error");</script>';
    } 
 }
}



 if(isset($_POST['canceCeo'])){
 $invoice_no = $_POST['invoice_no'];
 // @$user = $_POST['user'];
 $ceo = "Cancceled";
 $ceo1 = "Cancceled";
 $ceo2 = "Cancceled";
 $ceo3 = "Cancceled";

  $ceo_comment = $_POST['ceo_comment'];

$DBinfo = $maineg->Targeted_information('admin','username',$_SESSION['Admin']);

if($DBinfo['role'] != "CEO"){
     echo '<script>swal("Error","You dont have right to Cancel this sales","error");</script>';

}else{

 $Call = $maineg->Ceo_Update1($invoice_no,$ceo,$ceo1,$ceo2,$ceo3,$ceo_comment);

 if($Call == true) {
            echo '<script>swal("Success","Ceo Cancellation Successful","success");</script>'; 
             echo '<script>window.location="?action=approve_credit_sale"</script>'; 
    } else{
            echo '<script>swal("Error","Unable to Cancel","error");</script>';
    } 
 }
}
require_once 'view/ceo_approve.php';
break;



case 'Approve_InSale':
 if(isset($_POST['appSales'])){
 $invoice_no = $_POST['invoice_no'];
 // $ceo_comment = $_POST['ceo_comment'];
 $app = "Approved";


$DBinfo = $maineg->Targeted_information('admin','username',$_SESSION['Admin']);


if($DBinfo['role'] != "CEO"){
     echo '<script>swal("Error","You dont have right to approve this sales","error");</script>';

}else{

$DBinfo3 = $maineg->Targeted_information('invoice_details','invoice_id',$invoice_no);


$bank_name = $DBinfo3['bank_name'];
$bank_id = $DBinfo3['bank_id'];
$mode_payment = $DBinfo3['mode_payment'];
$amount_paid = $DBinfo3['paid'];
$transaction_source = "SALES";
$description = "Sales On Credit";
$Account = "4000_SALES";
$Account1 = "1200_ACCOUNT_RECEIVABLE";
$sales_rep = $DBinfo3['sales_rep'];
$customer_id = $DBinfo3['customer'];
$customer = $DBinfo3['customer_name'];

$datex = date('Y-m-d');
   $account_type1 = "Account Receivable";
   $series_name1 ="Asset";
   $series_name ="Income";
   $account_type = "Daily Sales";



$transaction_id= @$furt1."_".@$c1.@$a1; 

$myCart = $maineg->select_checkiNVOICEtO($invoice_no);
 $item_price = 0;          
if(!empty($myCart)){
  foreach($myCart as $item){
    $item_price +=  ((int)$item['total']);
  }
}

$grand_total = $item_price;
$due = $grand_total - $amount_paid;

// var_dump($due);
// return;

 $result = $maineg->Get_balanceCredit($customer_id); 
   $result1 = $maineg->Get_balanceDebit($customer_id); 
   foreach ($result1 as $k => $v) {}                             
   foreach ($result as $k => $v) {}
   $balance1 = $result[$k]['credit'] + $amount_paid;
   $balance2 = $result1[$k]['debit'] + $due;
   $initial_balance = $balance2 - $balance1; 
   $currentBalance = $initial_balance;



if($mode_payment != 'Credit'){
   if($bank_id != 'None'){

    $resultn = $maineg->Get_bank_balanceCredit($bank_id); 
   $resultn1 = $maineg->Get_bank_balanceDebit($bank_id); 
   foreach ($resultn1 as $k => $v) {}                             
   foreach ($resultn as $k => $v) {}
   $balancen1 = $resultn[$k]['amount'];
   $balancen2 = $resultn1[$k]['amount'];
   

   $image = '';

   $deposit_date = date('Y-m-d');
   
   $transcation_type = "Credit";
   $transaction_source1 = " Sales";
   $initial_balancen = $balancen1;
   $currentBalancen = $amount_paid + $balancen1 - $balancen2;
 
   if($customer_id != ""){
    
        if($currentBalance <= 0 ){
    
           $newcurrentBalance = '0.00';
           
           $cREDITchart=$maineg->insertCustomer_ledger($customer_id,$amount_paid,$due,$newcurrentBalance);
    
       }else{
           $cREDITchart=$maineg->insertCustomer_ledger($customer_id,$amount_paid,$due,$currentBalance);
       }
   }

}


    $Call = $maineg->SaleApp_Update($invoice_no,$app);
    $RunQR=$maineg->insertBankLog($bank_name,$bank_id,$transcation_type,$transaction_id,$amount_paid,$description,$initial_balancen,$currentBalancen,$deposit_date,$image);
     $RunQchart2=$maineg->chartofAccount($bank_id,$amount_paid);
    $RunQchart=$maineg->chartofAccount($Account1,$due);
    $RunQchart1=$maineg->chartofAccount($Account,$amount_paid);
    $RunQLog1=$maineg->insertAccountLog($transaction_id,$transaction_source,$due,$datex,$Account1,$account_type1,$sales_rep,$series_name1);
     $RunQLog2=$maineg->insertAccountLog($transaction_id,$transaction_source,$amount_paid,$datex,$Account,$account_type,$sales_rep,$series_name);

   

 if($Call == true && $RunQR == true && $RunQchart2 == true &&  $RunQchart == true  &&  $RunQLog1 == true &&  $RunQLog1 == true &&  $RunQLog2 == true) {
            echo '<script>swal("Success","Ceo Approval Successful","success");</script>'; 
              //echo '<script>window.location="?action=Invoice"</script>';  
    } else{
            echo '<script>swal("Error","Unable to Approval","error");</script>';
    } 
 


}else{

 $Call = $maineg->SaleApp_Update($invoice_no,$app);



 if($Call == true) {

        echo '<script>swal("Success","Ceo Approval Successful","success");</script>'; 
         echo '<script>window.location="?action=Invoice"</script>'; 

    } else{

        echo '<script>swal("Error","Unable to Approval","error");</script>';
    } 
 }

}
}

require_once 'view/approve_invoice_sale.php';
break;




case 'confirm_InSale':
 if(isset($_POST['confirmSales'])){
 $invoice_no = $_POST['invoice_no'];
 // $ceo_comment = $_POST['ceo_comment'];
 $CONF = "confirmed";

$DBinfo = $maineg->Targeted_information('admin','username',$_SESSION['Admin']);

if($DBinfo['role'] == "Accountant" || $DBinfo['role'] == "CEO"){
    
     $Call = $maineg->SalecONFIRM_Update($invoice_no,$CONF);

 if($Call == true) {
            echo '<script>swal("Success","Sales Confirmation Successful","success");</script>'; 
              echo '<script>window.location="?action=Invoice"</script>';  
    } else{
            echo '<script>swal("Error","Unable to Confirm Sale","error");</script>';
    }
    
    
     

}else{

   echo '<script>swal("Error","You dont have right to approve this sales","error");</script>';
   
 }
}

require_once 'view/confirm_invoice_sale.php';
break;



case 'CEO_APPROVE_PRICE_SALE':

 if(isset($_POST['ceoApprovePA'])){
 $invoice_no = $_POST['invoice_no'];
 $ceo_comment = $_POST['ceo_comment'];
 $ceo = "Approved";

$DBinfo = $maineg->Targeted_information('admin','username',$_SESSION['Admin']);

if($DBinfo['role'] != "CEO"){
     echo '<script>swal("Error","You dont have right to approve this sales","error");</script>';
}else{

    $Call = $maineg->Ceo_Adjust_Price_Update($invoice_no,$ceo,$ceo_comment);

 if($Call == true) {
            echo '<script>swal("Success","Ceo Approval Successful","success");</script>';   
    } else{
            echo '<script>swal("Error","Unable to Approval","error");</script>';
    } 
 }
}


 if(isset($_POST['canceCeoAP'])){
 $invoice_no = $_POST['invoice_no'];
 // @$user = $_POST['user'];
 $ceo = "Cancceled";
  $ceo_comment = $_POST['ceo_comment'];

$DBinfo = $maineg->Targeted_information('admin','username',$_SESSION['Admin']);

if($DBinfo['role'] != "CEO"){
     echo '<script>swal("Error","You dont have right to approve this sales","error");</script>';

}else{

 $Call = $maineg->cancelCeo_Adjust_Price_Update($invoice_no,$ceo,$ceo_comment);

 if($Call == true) {
            echo '<script>swal("Success","Ceo Cancellation Successful","success");</script>'; 
             //echo '<script>window.location="?action=approve_aject_Sales"</script>'; 
    } else{
            echo '<script>swal("Error","Unable to Cancel","error");</script>';
    } 
 }
}
require_once 'view/ceo_approve_price.php';
break;



case 'GMD_APPROVE':
if(isset($_POST['gdmApprove'])){
$invoice_no = $_POST['invoice_no'];
$gdm = "Approved";
$DBinfo = $maineg->Targeted_information('admin','username',$_SESSION['Admin']);


if($DBinfo['role'] == "Operational Manager" || $DBinfo['role'] == "CEO"){

     $Call = $maineg->Gmd_Update($invoice_no,$gdm);

if($Call == true) {
            echo '<script>swal("Success","Gmd Approval Successful","success");</script>';  
    } else{
            echo '<script>swal("Error","Unable to Approve","error");</script>';
    } 

}else{

      echo '<script>swal("Error","You dont have right to approve this sales","error");</script>';

}

}

require_once 'view/gmd_approve.php';
break;





case 'EditPriceAdust':
  if(isset($_POST['updatePrice'])){
     $product_code = $_POST['id'];
     $old_price = $_POST['old_price'];
     $price = $_POST['price'];
     $invoice_id =  $_POST['invoice_id'];


     $qty = $_POST['qty'];
     $kg_weight = $_POST['kg_weight'];
     $packet = $_POST['packet'];

    if($qty > 0){

      $new_quantity = $qty;

    }elseif($kg_weight > 0){

       $new_quantity = $kg_weight;

    }elseif($packet > 0){

       $new_quantity = $packet;

    }


     $new_total = $price * $new_quantity;

      $Call = $maineg->PriceEdit_Update($product_code,$price,$new_total);

      if ($Call == true) {
            echo '<script>window.location="?action=CEO_APPROVE_PRICE_SALE&&CEOADeatails='.$invoice_id.'"</script>';
        } else{
          echo '<script>swal("Error","Unable to Update Qty","error");</script>';
             } 
      }
require_once 'view/editprice.php';
break;


case 'ACCOUNTANT_APPROVE':
if(isset($_POST['acctApprove'])){
$invoice_no = $_POST['invoice_no'];
$acct = "Approved";
$DBinfo = $maineg->Targeted_information('admin','username',$_SESSION['Admin']);


if($DBinfo['role'] == "Accountant" || $DBinfo['role'] == "CEO"){

$Call = $maineg->acctt_Update($invoice_no,$acct);

if($Call == true) {
            echo '<script>swal("Success","Accountant Approval Successful","success");</script>';  
    } else{
            echo '<script>swal("Error","Unable to Approve","error");</script>';
    } 


}else{

    echo '<script>swal("Error","You dont have right to approve this sales","error");</script>';

}
}
require_once 'view/accountant_approve.php';
break;


case 'ReceivePayment':
require_once 'view/receive_payment.php';
break;


case 'ReceivePaymentall':
require_once 'view/receive_payment_all.php';
break;




case 'DueInvoice':
if (isset($_POST['payadue'])){
   $invoice_id  = $_POST['invoice_id'];
   $customer = $_POST['customer'];  
   $customer_name = $_POST['customer_name']; 
   $phone = $_POST['phone'];
   $sales_date = $_POST['order_date'];
   $due_balance = $_POST['due_balance'];
   $due = $_POST['due'];
   $account_id = "1200_ACCOUNT_RECEIVABLE";
   $account_id2 = "4000_SALES";
   $amount = $due;
   $transaction_id = $invoice_id;
   $transaction_source = "Sales Due Payment";
   $series_name = "Income";
   $account_type = "Cash_Sales";

   $description = $transaction_source;

   $user_login = $_POST['user_login'];

   $bank = $_POST['bank_name'];
   $bank_deatils = explode('-', $bank);
   $bank_id = $bank_deatils[0];
   $bank_name = $bank_deatils[1];

   $notin = 0.00;

   $DBinfo = $maineg->Targeted_information('customer_ledger','account_id',$customer);
   $balance = $DBinfo['balance'] - $due;
   
   $invoice_bal = $due_balance - $due;


   $result = $maineg->Get_balanceCredit($customer); 
   $result1 = $maineg->Get_balanceDebit($customer); 
   foreach ($result1 as $k => $v) {}                             
   foreach ($result as $k => $v) {}
   $balance1 = $result[$k]['credit'] + $due;
   $balance2 = $result1[$k]['debit'];
   $initial_balance = $balance1 - $balance2; 
   $currentBalance = $initial_balance;

   // $furt  = 'dep';
   // $a=rand(10000,1000);
   // $b=rand(100,1);
   // $c=rand(1000,10);
   // $transaction_id1= $furt."_".$c."_".$b;
   $resultn = $maineg->Get_bank_balanceCredit($bank_id); 
   $resultn1 = $maineg->Get_bank_balanceDebit($bank_id); 
   foreach ($resultn1 as $k => $v) {}                             
   foreach ($resultn as $k => $v) {}
   $balancen1 = $resultn[$k]['amount'];
   $balancen2 = $resultn1[$k]['amount'];

   $DBinfo4 = $maineg->Targeted_information('invoice_details','invoice_id',$invoice_id);

   $deposit_date = date('Y-m-d');
   
   $transcation_type = "Credit";
   $transaction_source1 = "Due Invoice Payment";

     $type1 = "Credit Payment";
 
   $initial_balancen = $balancen1;
   $currentBalancen = $amount + $balancen1 - $balancen2;

    $image         = $_FILES['image']['name'];
    $tmp           = $_FILES['image']['tmp_name'];
    $loc           = "view/product_image/".$image;
    
   $msg_body = 'Hi '.$customer_name.' We received payment credit of '.number_format($due).', and Your Invoice Balance is '.number_format($invoice_bal).', Thanks.';

   // $mode_payment ="Cash";
   $datex = date('Y-m-d H:i:s');
   $status = 'settled';
    if(empty($invoice_id)  || empty($sales_date) || empty($due)){
       echo '<script>swal("Error","one or more fields are empty","error");</script>'; 
    }elseif($due > $due_balance){

         echo '<script>swal("Error","Amount Entered Exceeds Due Amount for this Invoice, Cannot Fund Customer Account through this Process","error");</script>'; 

    }elseif($due < 0){

         echo '<script>swal("Error","Amount Must be greater than 0","error");</script>'; 

    }elseif($RunUlog=$maineg->UpdateDueInvoicelog($invoice_id,$due)){

        $RunUNew=$maineg->UpdateDueInvoiceNew($invoice_id,$due);

        // $DBinfo = $maineg->Targeted_information('admin','username',$_SESSION['Admin']);
          $DBinfo1 = $maineg->Targeted_information('customer_table','customer_code',$customer);



        if(!empty($customer)){
                                    
             $RunUNew=$maineg->addcREDIT2244($DBinfo1['customer_code'],$due,$notin,$currentBalance);
        }


          if(!empty($phone)){

             $RunQ=$maineg->AUTOMATIC_SMS_API($phone,$msg_body);
        }

        if(!empty($bank_id) && !empty($bank_id)){
           move_uploaded_file($tmp,$loc);
          $RunQR=$maineg->insertBankLog($bank_name,$bank_id,$transcation_type,$transaction_id,$due,$description,$initial_balancen,$currentBalancen,$deposit_date,$image); 
             $RunQchart2=$maineg->chartofAccount($bank_id,$due);
        }

     if ($RunUlog==true && $RunUNew==true) {
       $RunQ1=$maineg->chartofAccountMinus($account_id,$due);
       $RunQ3=$maineg->chartofAccount($account_id2,$amount);
       $RunQ2=$maineg->insertAccountLog($transaction_id,$transaction_source,$amount,$sales_date,$account_id,$account_type,'none',$series_name);
       $RunQLogPay=$maineg->insertReceivable($deposit_date,$transaction_source1,$type1,$due,'0.00',$invoice_bal,$customer,$customer_name,'null',$account_id,$invoice_id,$user_login);
       if ($RunQ1==true && $RunQ2==true) {
        echo '<script>swal("Success","Transaction Successful","success");</script>';
            }
          } 
      }else{
        echo '<script>swal("Error","Unable to Perform Transaction","error");</script>';
    } 
}


require_once 'view/payDueInvoice.php';
break;


case 'ReceiptPrint':
require_once 'view/receipt_print.php';
break;


case 'ReceiptExpense':
require_once 'view/receipt_expense.php';
break;


case 'ReceiptOIncome':
require_once 'view/receipt_otherincome.php';
break;




case 'Ledger':
require_once 'view/cash_flow_analysis_report.php';
break;


case 'ApproveReq':
if (isset($_POST['approvee'])){
   $request_no  = $_POST['request_no'];
   $request_name = $_POST['request_name'];  
   $vendor_name = $_POST['vendor_name'];  
   $description = $_POST['description'];
   $request_date = $_POST['request_date'];
   $request_Amount = $_POST['request_Amount'];
   @$request_by = $_POST['request_by'];
   $status = $_POST['status'];
   $approved_by = $_POST['approvedBy'];
   $Newstatus = 'Approved';
   $account_id = "6000_EXPENSES";
   $account_id1 = "1001_PETTY_CASH";
   $amount = $request_Amount;
   $transaction_id = $request_no;
   $transaction_source = "Expense";
   $series_name = "Expenses";
   $account_type = "Expenses";
   $datex = date('Y-m-d H:i:s');
      if(empty($request_no) || empty($request_name) || empty($vendor_name) || empty($request_Amount) || empty($Newstatus)){
         echo '<script>swal("Error","one or more fields are empty","error");</script>'; 
      }elseif($RunU=$maineg->UpdateRequest($request_no,$request_Amount,$approved_by,$Newstatus,$datex)){
       if ($RunU==true) {
         $RunQ1=$maineg->chartofAccount($account_id,$request_Amount);
         //$RunQ4=$maineg->chartofAccountDebit($account_id1,$request_Amount);
         $RunQ2=$maineg->insertAccountLog($transaction_id,$transaction_source,$amount,$request_date,$account_id,$account_type,$request_by,$series_name);

         if ($RunQ1==true && $RunQ2==true) {
          echo '<script>swal("Success","Transaction Successful","success");</script>';
              }
            } 
        }else{
        echo '<script>swal("Error","Unable to Perform Transaction","error");</script>';
    } 
}



 if(isset($_POST['disaproveReq'])){
 $request_no  = $_POST['request_no'];
 $Newstatus = "Disapproved";
 $datex = date('Y-m-d H:i:s');

$DBinfo = $maineg->Targeted_information('admin','username',$_SESSION['Admin']);

if($DBinfo['role'] != "CEO"){
     echo '<script>swal("Error","You dont have right to this request","error");</script>';

}else{

 $Call = $maineg->UpdateRequestReject($request_no,$Newstatus,$datex);

 if($Call == true) {
            echo '<script>swal("Success","Requst Cancellation Successful","success");</script>'; 
    } else{
            echo '<script>swal("Error","Unable to Cancel","error");</script>';
    } 
 }
}
require_once 'view/approveRequest.php';
break;



case 'StaffBFund':
if(isset($_POST['sendLoan'])){
     $borrowed_date  = $_POST['borrowed_date'];
     $staff_name = $_POST['staff_name'];
     @$loan_type = $_POST['loan_type'];
     @$tenure  = $_POST['tenure'];
     $description  = $_POST['description'];
     $user  = $_POST['user'];
     $amount  = $_POST['amount'];
     $amount_paid  = 0;
     $furt  = 'staff_loan';
     $a=rand(1000,100);
     $b=rand(100,1);
     $c=rand(1000,10);
     $reference_no= $furt."_".$c."_".$a;
     // @$status = $_POST['status'];
      @$status = "Approved";
     $staffdetails = explode('-', $staff_name);
     $staff_fullname = $staffdetails[0]." ".$staffdetails[1];
     $staff_id = $staffdetails[2];
      if(empty($staff_fullname) || empty($description) || empty($borrowed_date) || empty($amount) || empty($tenure)){
        echo '<script>swal("error","one or more fields are empty","error");</script>'; 
      }else{
      @$RunQ=$maineg->insertStaffLoan($borrowed_date,$staff_fullname,$staff_id,$loan_type,$tenure,$reference_no,$description,$amount,$amount_paid,$status,$user);  
      }
      if(@$RunQ==true){
        echo '<script>swal("Success","New Request Submitted","success");</script>';  
      } else{
        echo '<script>swal("Error","Unable to Submit Request","error");</script>';
        } 
    }
require_once 'view/staff_borrowed_funds.php';
break;


case 'Invoice':
require_once 'view/generateInvoice.php';
break;

case 'InvoiceOld':
require_once 'view/invoice_old.php';
break;

case 'InvoiceOldD':
require_once 'view/invoice_old_details.php';
break;



case 'MakeWayBill':
require_once 'view/make_waybill.php';
break;





case 'Swaybill':
require_once 'view/waybillDetails.php';
break;


case 'GetBill':
require_once 'view/waybi.php';
break;



case 'ADDwaybill':
if(isset($_POST['b_print'])){
   @$invoice_id = $_POST['refrence'];
   $delivery = "delivered";
    if(empty($invoice_id) || empty($delivery)){
        echo '<script>swal("error","one or more fields are empty","error")</script>'; 
      }else{
             $RunQ=$maineg->deliveredWaybill($delivery,$invoice_id); 
             
            if ($RunQ == true) {
                
                //$RunQ=$maineg->deliveredstock($delivery,$invoice_id); 
              echo '<script>swal("Success","Message Sent Successfully","success");</script>'; 
            }else{
             echo '<script>swal("Error","Unable Update Waybill","error");</script>';
           } 
       }
    }
require_once 'view/get_waybill.php';
break;


case 'AllLoan':
require_once 'view/allLoan.php';
break;


case 'getInvoice':
if(isset($_POST['b_print'])){

  $msg_body = $_POST['msg_body'];
  @$customer_phone = $_POST['customer_phone'];
   @$invoice_id = $_POST['invoice_id'];
   $delivery = "delivered";

  
    if(empty($customer_phone) || empty($msg_body)){
        echo '<script>swal("error","Please select a minimum of one customer","error")</script>'; 
      }else{
             $RunQ=$maineg->deliveredInvoice($delivery,$invoice_id); 
             $RunQ=$maineg->AUTOMATIC_SMS_API($customer_phone,$msg_body);
            if ($RunQ == 0) {
              echo '<script>swal("Success","Message Sent Successfully","success");</script>'; 
            }else{
             echo '<script>swal("Error","Unable to Send Message","error");</script>';
           } 
       }
    }
require_once 'view/get_invoice.php';
break;


case 'quoteDetails':
require_once 'view/quoteDetails.php';
break;


case 'ViewCustomer': 
if (isset($_POST['del'])) {
    $DeleteCut = $_POST['del'];
    $Call = $maineg->Customer_Delete($DeleteCut);
      if ($Call==true) {
     echo '<script>swal("Success","Removed Succesfully","success")</script>';
  }
} 
require_once 'view/view_customer.php';
break;


case 'editCustomer': 
if(isset($_POST['update_customer'])){
   $customer_code = $_POST['customer_code'];
   $customer_name  = $_POST['customer_name'];
   $phone = $_POST['phone'];
   $email = $_POST['email'];
   $company_name = $_POST['company_name'];
   $address  = $_POST['address'];
   $category  = $_POST['category'];
    if(empty($customer_code)){
      echo '<script>swal("error","one or more fields are empty","error");</script>'; 
    }else{
    $RunQ=$maineg->CustomerUpdate($customer_name,$phone,$email,$address,$company_name,$category,$customer_code);  
    }
    if($RunQ==true){
      echo '<script>swal("Success","Customer Details Updated Successfully","success");</script>';  
    } else{
      echo '<script>swal("Error","Unable to Update Customer Details","error");</script>';
         } 
  }
require_once 'view/edit_customer.php';
break;


case 'viewCustomerS': 
require_once 'view/view_customer_single.php';
break;



case 'AddPayroll':  
   if(isset($_POST['suBMitPayroll'])){
   $Employee  = $_POST['Employee'];
   $basic_salary = $_POST['basic_salary'];
   $allowance = $_POST['allowance'];
   $other  = $_POST['other'];
   @$loan_amount  = $_POST['loan_amount'];
   @$amountPaid = $_POST['amountPaid'];
   @$loan  = $_POST['loan'];
   $gross_pay  = $_POST['gross_pay'];
   $sanction  = $_POST['sanction'];
   $other_dues  = $_POST['other_dues'];
   $total_dues  = $_POST['total_dues'];
   $net_pay  = $_POST['net_pay'];
   $years  = $_POST['years'];
   $months  = $_POST['months'];
   $type  = "company_staff";
   $status  = "unpaid";

   $getLoan = $amountPaid + $loan;
   $state1 = 'settled';
   $state2 = 'active';

   $date_month = $months.'-'.$years;
   $employeeName = explode('-', $Employee);
   $staffID = $employeeName[0];
    if(empty($Employee) || empty($gross_pay) || empty($net_pay) || empty($years) || empty($months)){
      echo '<script>swal("error","one or more fields are empty","error");</script>'; 
      // echo '<script>alert("one or more fields are empty")</script>';
    }elseif ($maineg->check_if_Record_Exist2('payroll', 'month_year', $date_month,'staff_id',$employeeName[0]) == true) {
          echo '<script>swal("Warning","Sorry Staff payroll already exist for This Month, check another staff!!!","warning");</script>'; 
    }else{
    if ($maineg->check_if_Record_Exist('payroll', 'month_year', $date_month) == true) {
      if ($maineg->check_if_Record_Exist2('staff_loan_table', 'staff_id',$employeeName[0],'state','active') == true) {
         $RunQ=$maineg->insertSalaryStaffLoan($date_month,$employeeName[1],$basic_salary,$allowance,$other,$gross_pay,$sanction,$other_dues,$loan,$type,$total_dues,$net_pay,$employeeName[0]);
            if ($RunQ == true) {
               $RunQ1=$maineg->insertSalaryUpdate($date_month,$net_pay);
               if($getLoan >= $loan_amount){
                    $RunQ2=$maineg->insertLoanUpdate($loan,$state1,$staffID);
                  }else{
                    $RunQ2=$maineg->insertLoanUpdate($loan,$state2,$staffID);
                  }

               if($RunQ1==true){
                     echo '<script>swal("Success","Worker Record Added Successfully","success");</script>'; 
              } else{
                     echo '<script>swal("Error","Unable to Add Worker Record","error");</script>';
              } 
           }

      }else{

            $RunQ=$maineg->insertSalaryStaff($date_month,$employeeName[1],$basic_salary,$allowance,$other,$gross_pay,$sanction,$other_dues,$type,$total_dues,$net_pay,$employeeName[0]);
            if ($RunQ == true) {
               $RunQ1=$maineg->insertSalaryUpdate($date_month,$net_pay);
               if($RunQ1==true){
      echo '<script>swal("Success","Worker Record Added Successfully","success");</script>'; 
              } else{
               echo '<script>swal("Error","Unable to Add Worker Record","error");</script>';
              } 
           }
      }
       

    }else{


      if ($maineg->check_if_Record_Exist2('staff_loan_table', 'staff_id',$employeeName[0],'state','active') == true) {
         $RunQ=$maineg->insertSalaryStaffLoan($date_month,$employeeName[1],$basic_salary,$allowance,$other,$gross_pay,$sanction,$other_dues,$loan,$type,$total_dues,$net_pay,$employeeName[0]);
            if ($RunQ == true) {
               $RunQ1=$maineg->insertSalarylog($date_month,$net_pay,$status,$type);
               if($getLoan >= $loan_amount){
                    $RunQ2=$maineg->insertLoanUpdate($loan,$state1,$staffID);
                  }else{
                    $RunQ2=$maineg->insertLoanUpdate($loan,$state2,$staffID);
                  }
               if($RunQ1==true){
              echo '<script>swal("Success","Staff Record Added Successfully","success");</script>'; 
              } else{
               echo '<script>swal("Error","Unable to Add Worker Record","error");</script>';
              } 
           }

      }else{

        $RunQ=$maineg->insertSalaryStaff($date_month,$employeeName[1],$basic_salary,$allowance,$other,$gross_pay,$sanction,$other_dues,$type,$total_dues,$net_pay,$employeeName[0]);
      if ($RunQ == true) {
         $RunQ1=$maineg->insertSalarylog($date_month,$net_pay,$status,$type);
         if($RunQ1==true){
  echo '<script>swal("Success","Staff Record Added Successfully","success");</script>';
           } else{
            echo '<script>swal("Error","Unable to Add Worker Record","error");</script>';
          } 
      }
        
      }

    } 
  }


}
require_once 'view/add_payroll.php';
break;


case 'viewMont_yearPayroll':
require_once 'view/viewpayrol_montyear.php';
break;


case 'ViewPayroll':  
require_once 'view/view_payroll.php';
break;


case 'payrollsingle':
if(isset($_POST['PaySalaryS'])){
     $monthYEAR = $_POST['monthYEAR'];
     $amount = $_POST['net_pay'];
     $staff_id = $_POST['staff_id'];
     $status = "paid";
     $transaction_date = date('Y-m-d');
     $furt  = 'Salary'; 
     $a=rand(10000,1000);
     $b=rand(100,1);
     $c=rand(1000,10);
     $transaction_id = $furt."_".$c."_".$b; 
     $transaction_source = "SALARY";
     $series_name = "Liability";
     $account_type = "Liability";
     $account_id = "2001_SALARY";
     // $data = $maineg->select_allPay($monthYEAR);  
      if(empty($monthYEAR) || empty($amount) || empty($status)){
        echo '<script>swal("error","one or more fields are empty","error");</script>'; 
        // echo '<script>alert("one or more fields are empty")</script>';
      }else{
      // $RunQ=$maineg->insertPayall($monthYEAR,$status);  
      $RunQ2=$maineg->insertPayall22($monthYEAR,$status,$staff_id); 
       $RunQ3=$maineg->insertPayall3($amount);
       $RunQSalary=$maineg->insertAccountLog($transaction_id,$transaction_source,$amount,$transaction_date,$account_id,$account_type,'none',$series_name);
      }
      if($RunQ2 ==true && $RunQ3 ==true){
        echo '<script>swal("Success","Salary Payment Successfully Updated","success");</script>';  
      } else{
        echo '<script>swal("Error","Unable to Update Salary Record","error");</script>';
           } 
    }
require_once 'view/do_payrollsingle.php';
break;


case 'SinglePayroll':  
require_once 'view/payroll_single.php';
break;


case 'PaySalaryAll':
 if(isset($_POST['PaySalary'])){
     $monthYEAR = $_POST['monthYEAR'];
     $amount = $_POST['amount'];
     $status = "paid";
     // $data = $maineg->select_allPay($monthYEAR);  
     $transaction_date = date('Y-m-d');
     $furt  = 'Salary'; 
     $a=rand(10000,1000);
     $b=rand(100,1);
     $c=rand(1000,10);
     $transaction_id = $furt."_".$c."_".$b; 
     $transaction_source = "SALARY";
     $series_name = "Liability";
     $account_type = "Liability";
     $account_id = "2001_SALARY";
      if(empty($monthYEAR) || empty($amount) || empty($status)){
        echo '<script>swal("error","one or more fields are empty","error");</script>'; 
        // echo '<script>alert("one or more fields are empty")</script>';
      }else{
      $RunQ=$maineg->insertPayall($monthYEAR,$status);  
      $RunQ2=$maineg->insertPayall2($monthYEAR,$status);
      $RunQ3=$maineg->insertPayall3($amount);
      $RunQSalary=$maineg->insertAccountLog($transaction_id,$transaction_source,$amount,$transaction_date,$account_id,$account_type,'none',$series_name);
      }
      if($RunQ ==true && $RunQ2 ==true && $RunQ3 ==true){
        echo '<script>swal("Success","Salary Payment Successfully Updated","success");</script>';  
      } else{
        echo '<script>swal("Error","Unable to Update Salary Record","error");</script>';
           } 
    }
require_once 'view/paysalaryall.php';
break;


case 'AddUser': 
if(isset($_POST['AddUser'])){
   $user  = $_POST['user'];
   $username = $_POST['username'];
   $password = $_POST['password'];
   $role = $_POST['role'];
   $datex = date("Y-m-d");
    if(empty($username) || empty($password) || empty($role)){
      echo '<script>swal("error","one or more fields are empty","error");</script>'; 
      // echo '<script>alert("one or more fields are empty")</script>';
    }else{

    $RunQ=$maineg->insertUser($user,$password,$username,$role,$datex);  
    }
    if($RunQ==true){
      echo '<script>swal("Success","User Added Successfully","success");</script>';  
    } else{
      echo '<script>swal("Error","Unable to Add User","error");</script>';
         } 
  } 
require_once 'view/add_user.php';
break;


case 'ViewUser':
 if (isset($_POST['del'])) {
    $DeleteCat = $_POST['del'];
    $Call = $maineg->User_Delete($DeleteCat);
      if ($Call==true) {
     echo '<script>swal("Success","Removed Succesfully","success")</script>';
  }
} 
require_once 'view/view_user.php';
break;


case 'editUser':
  if(isset($_POST['update_user'])){
     $product_code = $_POST['id'];
     $firstname = $_POST['firstname'];
     $password = $_POST['password'];
     $role = $_POST['role'];

      $Call = $maineg->Uesr_Update($product_code,$firstname,$password,$role);

      if ($Call == true) {
            echo '<script>swal("Success","User Updated Successfully","success");</script>';  
        } else{
          echo '<script>swal("Error","Unable to Update Qty","error");</script>';
             } 
      }
require_once 'view/edituser.php';
break;

case 'editSeries':
  if(isset($_POST['update_Serial'])){
     $id = $_POST['id'];
     $serial_name = $_POST['serial_name'];
     $warehouse = $_POST['warehouse'];
     $label = $_POST['label'];
     $status = $_POST['status'];

      $Call = $maineg->Update_Series($id,$serial_name,$warehouse,$label,$status);

      if ($Call == true) {
            echo '<script>swal("Success","Updated Successfully","success");</script>';  
        } else{
          echo '<script>swal("Error","Unable to Update","error");</script>';
             } 
      }
require_once 'view/edit_serial.php';
break;


case 'ResetS':
require_once 'view/reset_serial_name.php';
break;



case 'EditAddCart':
  if(isset($_POST['updateCart'])){
     $product_code = $_POST['id'];
     $new_quantity = $_POST['new_quantity'];
     $price = $_POST['price'];
     // $total = $_POST['new_total'];
     $new_total = $price * $new_quantity;

      $Call = $maineg->cartEdit_Update($product_code,$new_quantity,$new_total);

      if ($Call == true) {
            echo '<script>window.location="?action=Sales"</script>';
        } else{
          echo '<script>swal("Error","Unable to Update Qty","error");</script>';
             } 
      }
require_once 'view/editcart.php';
break;


case 'addVendor': 
if(isset($_POST['submit_vendor'])){
   $contact_name  = $_POST['contact_name'];
   $phone = $_POST['phone'];
   $email = $_POST['email'];
   $company_name = $_POST['company_name'];
   $company_address  = $_POST['company_address'];
   $furt  = 'Vendor';
   $a=rand(1000,100);
   $b=rand(1000,1);
   $c=rand(1000,10);
   $supplier_id= $furt."_".$b.$a;
    if(empty($contact_name) || empty($company_address) || empty($phone)){
      echo '<script>swal("error","one or more fields are empty","error");</script>'; 
      // echo '<script>alert("one or more fields are empty")</script>';
    }else{

    $RunQ=$maineg->insertSupplier($supplier_id,$contact_name,$phone,$email,$company_address,$company_name);  
    }
    if($RunQ==true){
      echo '<script>swal("Success","Vendor Added Successfully","success");</script>';  
    } else{
      echo '<script>swal("Error","Unable to Add Vendor","error");</script>';
         } 
  }
require_once 'view/add_vendor.php';
break;


case 'editVendor': 
if(isset($_POST['submit_vendor'])){
   $supplier_id = $_POST['supplier_id'];
   $contact_name  = $_POST['contact_name'];
   $phone = $_POST['phone'];
   $email = $_POST['email'];
   $company_name = $_POST['company_name'];
   $company_address  = $_POST['company_address'];
    if(empty($supplier_id)){
      echo '<script>swal("error","one or more fields are empty","error");</script>'; 
    }else{

    $RunQ=$maineg->VendorUpdate($contact_name,$phone,$email,$company_address,$company_name,$supplier_id);  
    }
    if($RunQ==true){
      echo '<script>swal("Success","Vendor Details Updated Successfully","success");</script>';  
    } else{
      echo '<script>swal("Error","Unable to Update Vendor Details","error");</script>';
         } 
  }
require_once 'view/edit_vendor.php';
break;


case 'View_vendor':  
 if (isset($_POST['del'])) {
    $DeleteCat = $_POST['del'];
    $Call = $maineg->Vendor_Delete($DeleteCat);
      if ($Call==true) {
     echo '<script>swal("Success","Removed Succesfully","success")</script>';
  }
}
require_once 'view/view_vendor.php';
break;


case 'addStaff':
if (isset($_POST['RegStaff'])){
       $first_name  = $_POST['first_name'];
       $last_names  = $_POST['last_name'];  
       $phone_no   = $_POST['phone'];
       $Email = $_POST['Email'];
       $date_of_birth = $_POST['date_of_birth'];
       $gender = $_POST['gender'];
       $resident_address = $_POST['resident_address'];
       $marital_status = $_POST['marital_status'];
       $home_town = $_POST['hometown'];
       $basic_salary = $_POST['basic_salary'];
       $institution_position = $_POST['position'];
       $department = $_POST['department'];
       $supervisor = $_POST['supervisor'];
       $category = $_POST['category'];
       $grantor_name = $_POST['grantor_name'];
       $grantor_phone = $_POST['grantor_phone'];
       $grantor_address = $_POST['grantor_address'];
       $grantor_relationship = $_POST['grantor_relationship'];
       $passport = $_FILES['passport']['name'];
       $tmp = $_FILES['passport']['tmp_name'];
       $loc = "view/product_image/".$passport;
       $furt  = 'Staff';
       $a=rand(10000,1000);
       $b=rand(100,1);
       $c=rand(1000,10);
       $Staff_id= $furt."_".$c.$b;
       $status = "Verified";
       $datex = $_POST['start_date'];

        if(empty($first_name) || empty($last_names) || empty($resident_address) || empty($home_town) || empty($phone_no) || empty($institution_position)|| empty($marital_status) || empty($basic_salary) || empty($grantor_name) || empty($grantor_phone)){
          echo '<script>swal("error","one or more fields are empty","error");</script>'; 
          }elseif(move_uploaded_file($tmp,$loc)){

          $Run = $maineg->insertStaff($Staff_id,$first_name,$last_names,$resident_address,$phone_no,$Email,$date_of_birth,$home_town,$institution_position,$department,$gender,$marital_status,$passport,$status,$basic_salary,$category,$supervisor,$grantor_name,$grantor_address,$grantor_phone,$grantor_relationship,$datex);

           if ($Run == true) {
          echo '<script>swal("Success","Staff Added Successfully","success");</script>';
        } else{
          echo '<script>swal("Error","Unable to Register Staff","error");</script>';
     } 
    }
}
require_once 'view/add_staff.php';
break;


case 'View_staff': 
if (isset($_POST['del'])) {
    $DeleteStaff = $_POST['del'];
    $Call = $maineg->Staff_Delete($DeleteStaff);
      if ($Call==true) {
     echo '<script>swal("Success","Removed Succesfully","success")</script>';
  }
} 
require_once 'view/view_staff.php';
break;



case 'editStaff': 
if(isset($_POST['updateStaff'])){
   $firstname = $_POST['firstname'];
   $lastname  = $_POST['lastname'];
   $staff_id  = $_POST['staff_id'];
   $basic_salary  = $_POST['basic_salary'];
   $grantor_name  = $_POST['grantor_name'];
   $resident_address = $_POST['resident_address'];
   $grantor_address  = $_POST['grantor_address'];
   $gender  = $_POST['gender'];
   $grantor_phone  = $_POST['grantor_phone'];
   $phone = $_POST['phone'];
   $email = $_POST['email'];
   $position = $_POST['position'];
   $appointment_date  = $_POST['appointment_date'];
   @$department  = $_POST['department'];
   $home_town  = $_POST['home_town'];
   $status  = $_POST['status'];
   $marital_status  = $_POST['marital_status'];
   $category  = $_POST['category'];
   $date_of_birth  = $_POST['date_of_birth'];
   $supervisor  = $_POST['supervisor'];
   $relationship  = $_POST['relationship'];
   $updated_at = date('Y m d H:m:s');
    if(empty($staff_id)){
      echo '<script>swal("error","one or more fields are empty","error");</script>'; 
    }else{
     
    $RunQ=$maineg->staffUpdate($staff_id,$firstname,$lastname,$resident_address,$phone,$email,$date_of_birth,$home_town,$position,$department,$gender,$marital_status,$status,$basic_salary,$category,$supervisor,$updated_at,$grantor_name,$grantor_address,$grantor_phone,$relationship,$appointment_date);  
    }
    if($RunQ==true){
      echo '<script>swal("Success","Staff Details Updated Successfully","success");</script>';  
    } else{
      echo '<script>swal("Error","Unable to Update Staff Details","error");</script>';
         } 
  }
require_once 'view/edit_staff.php';
break;


case 'View_vendor':  
 if (isset($_POST['del'])) {
    $DeleteCat = $_POST['del'];
    $Call = $maineg->Vendor_Delete($DeleteCat);
      if ($Call==true) {
     echo '<script>swal("Success","Removed Succesfully","success")</script>';
  }
}
require_once 'view/view_vendor.php';
break;


case 'ManagePrice':  
require_once 'view/manage_price.php';
break;


case 'PriceManage':
if (isset($_POST['PriceM'])){
$new_selling_price = $_POST['new_selling_price'];
$item_code  = $_POST['item_code'];
 
  if(empty($new_selling_price) || empty($item_code)){
    echo '<script>swal("error","one or more fields are empty","error");</script>'; 
  }elseif($Run = $maineg->ManagePrice($new_selling_price,$item_code)){
   if ($Run == true) {
      echo '<script>swal("Success","Price Updated Successfully","success");</script>';
      } else{
      echo '<script>swal("Error","Unable to Update Price","error");</script>';
         } 
   }else{
echo '<script>swal("Error","Unable to Update Price","error");</script>';
   } 
}    
require_once 'view/price_management.php';
break;


case 'AddWarehouse':  
if (isset($_POST['addWare'])){
@$warehouse = $_POST['warehouse'];
@$location = $_POST['location'];
$furt = 'WA';
$a=rand(10000,1000);
$b=rand(100,1);
$c=rand(1000,10);
$code= $furt."_".$c.$b;
$user = $_POST['user'];
  if(empty($warehouse) || empty($code) || empty($user) || empty($location)){
    echo '<script>swal("error","one or more fields are empty","error");</script>'; 
  }elseif($Run = $maineg->insertWarehouse($warehouse,$location,$code,$user)){
   if ($Run == true) {
      echo '<script>swal("Success","Warehouse Created Successfully","success");</script>';
      } else{
      echo '<script>swal("Error","Unable to Create Warehouse","error");</script>';
         } 
   }else{
echo '<script>swal("Error","Unable to Create Warehouse","error");</script>';
   } 
}
require_once 'view/add_warehouse.php';
break;


case 'ViewWarehouse':  
require_once 'view/view_warehouse.php';
break;


case 'AddSalesUnit': 
if (isset($_POST['Create_Outlet'])){
$branch_name = $_POST['branch_name'];
$phone = $_POST['phone'];
$country = $_POST['country'];
$address = $_POST['address'];
$currency = $_POST['currency'];
$user = $_POST['user'];
  if(empty($branch_name) || empty($phone) || empty($country) || empty($address) || empty($currency) || empty($user)){
    echo '<script>swal("error","one or more fields are empty","error");</script>'; 
  }elseif($Run = $maineg->insertOutlet($branch_name,$phone,$country,$address,$currency,$user)){
   if ($Run == true) {
      echo '<script>swal("Success","Warehouse Created Successfully","success");</script>';
      } else{
      echo '<script>swal("Error","Unable to Create Warehouse","error");</script>';
         } 
   }else{
echo '<script>swal("Error","Unable to Create Warehouse","error");</script>';
   } 
} 
require_once 'view/sales_unit.php';
break;


case 'ViewSaleOutlet':  
require_once 'view/view_outlet.php';
break;


case 'SendEmail':
if(isset($_POST['send_email'])){
  $subject = $_POST['subject'];
  $msg_body = $_POST['msg_body'];
  @$customer_email = $_POST['customer_email'];
    if(empty($customer_email)){
        echo '<script>swal("error","Please select a minimum of one customer","error");</script>'; 
      }else{
           $itemIDsize = count($customer_email);
            for ($i = 0; $i < sizeof($customer_email); $i++) {
               $RunQ=$maineg->other_email($customer_email[$i], $subject, $msg_body);
                $itemIDsize--;
            if ($itemIDsize == 0 && $RunQ == true) {
              echo '<script>swal("Success","Message Sent Successfully","success");</script>'; 
            }else{
             echo '<script>swal("Error","Unable to Send Message","error");</script>';
           } 
       }
    }
  }  
require_once 'view/send_email.php';
break;


case 'SendSms':  
if(isset($_POST['send_sms'])){
  // $subject = $_POST['subject'];
  $msg_body = $_POST['msg_body'];
  @$customer_phone = $_POST['customer_phone'];
    if(empty($customer_phone)){
        echo '<script>swal("error","Please select a minimum of one customer","error");</script>'; 
      }else{
          
       $commasaprated = implode(',' , $customer_phone);
       $RunQ=$maineg->AUTOMATIC_SMS_API($commasaprated,$msg_body);

        // var_dump($commasaprated);
        // return;
        if ($RunQ == 0) {
              echo '<script>swal("Success","Message Sent Successfully","success");</script>'; 
            }else{
             echo '<script>swal("Error","Unable to Send Message","error");</script>';
           } 


       //     $itemIDsize = count($customer_phone);
       //      for ($i = 0; $i < sizeof($customer_phone); $i++) {
       //         $RunQ=$maineg->AUTOMATIC_SMS_API($customer_phone[$i],$msg_body);
       //          $itemIDsize--;
       //      if ($itemIDsize == 0) {
       //        echo '<script>swal("Success","Message Sent Successfully","success");</script>'; 
       //      }else{
       //       echo '<script>swal("Error","Unable to Send Message","error");</script>';
       //     } 
       // }
    }
  }
require_once 'view/send_sms.php';
break;


case 'add_Sms_List':
if(isset($_POST['send_smsS'])){

  $msg_body = $_POST['msg_body'];
  @$customer_phone = $_POST['customer_phone'];
    if(empty($customer_phone) || empty($msg_body)){
        echo '<script>swal("error","Please select a minimum of one customer","error")</script>'; 
      }else{
             $RunQ=$maineg->AUTOMATIC_SMS_API($customer_phone,$msg_body);
            if ($RunQ == 0) {
              echo '<script>swal("Success","Message Sent Successfully","success");</script>'; 
            }else{
             echo '<script>swal("Error","Unable to Send Message","error");</script>';
           } 
       }
    }
  
require_once 'view/add_new_sms_list.php';
break;



case 'send_Email_Single':
if (isset($_POST['snd'])){
    $receiver =$_POST['receiver'];
    $subject = $_POST['subject'];
    $message = trim($_POST['message']);
  @$customer_phone = $_POST['customer_phone'];
    if(empty($receiver) || empty($message)){
        echo '<script>swal("error","Please select a minimum of one Receiver  And Type In some Message,"error")</script>'; 
      }else{
             $RunQ=$maineg->other_email($receiver,$subject,$message);
            if ($RunQ == true) {
              echo '<script>swal("Success","Message Sent Successfully","success");</script>'; 
            }else{
             echo '<script>swal("Error","Unable to Send Message","error");</script>';
           } 
       }
    }
  
require_once 'view/send_email_single.php';
break;


case 'ProfitLossAccount':  
require_once 'view/profit_loss_statement.php';
break;


case 'BalanceSheet':  
require_once 'view/balance_sheet.php';
break;


case 'PaymentVoucher':  
require_once 'view/payment_voucher.php';
break;




case 'PaymentCashVoucher':  
if (isset($_POST['get_voucher'])){
$voucher_date = $_POST['voucher_date'];
$invoice_no = $_POST['invoice_no'];
$customer_name = $_POST['customer_name'];
$amount = $_POST['amount'];
$purpose = $_POST['purpose'];
$type = "Cash Payment";
$user = $_POST['user_login'];
$furt = 'Vuc';
$a=rand(10000,9999999);
$voucher_id= $furt."_".$a;
  if(empty($voucher_date) || empty($customer_name) || empty($amount) || empty($purpose) || empty($user)){
    echo '<script>swal("error","one or more fields are empty","error");</script>'; 
  }elseif($Run = $maineg->insertPaymentCash($voucher_date,$invoice_no,$customer_name,$amount,$purpose,$voucher_id,$type,$user)){
   if ($Run == true) {
      echo '<script>swal("Success","Cash Payment Voucher Created Successfully","success");</script>';
      } else{
      echo '<script>swal("Error","Unable to Create Cash Payment Voucher","error");</script>';
         } 
   }else{
echo '<script>swal("Error","Unable to Create Cash Payment Voucher","error");</script>';
   } 
} 
require_once 'view/cash_payment_voucher.php';
break;





case 'addOtherIncome':  
if (isset($_POST['get_voucher'])){
$voucher_date = $_POST['voucher_date'];
@$invoice_no = $_POST['invoice_no'];
$customer_name = $_POST['customer_name'];
$amount = $_POST['amount'];
$purpose = $_POST['purpose'];
$type = "Bank Payment";
$user = $_POST['user_login'];
$bank_name = $_POST['bank_name'];
$trans_type = 'credit';
$account_id = "1001_PETTY_CASH";
$furt = 'OtInc';
$a=rand(10000,9999999);
$voucher_id= $furt."_".$a;
  if(empty($voucher_date) || empty($customer_name) || empty($amount) || empty($purpose) || empty($user)){
    echo '<script>swal("error","one or more fields are empty","error");</script>'; 
  }elseif($Run = $maineg->insertPaymentBank($voucher_date,$invoice_no,$customer_name,$amount,$purpose,$voucher_id,$type,$bank_name,$user,$trans_type)){
   if ($Run == true) {
         $RunQ1=$maineg->chartofAccount($account_id,$amount);
      echo '<script>swal("Success","Other Income Added Successfully","success");</script>';
      } else{
        echo '<script>swal("Error","Unable to Add Other Income","error");</script>';
         } 
   }else{
        echo '<script>swal("Error","Unable to Add Other Income","error");</script>';
   } 
} 
require_once 'view/add_other_income.php';
break;





case 'PaymentBankVoucher':  
if (isset($_POST['get_voucher'])){
$voucher_date = $_POST['voucher_date'];
$invoice_no = $_POST['invoice_no'];
$customer_name = $_POST['customer_name'];
$amount = $_POST['amount'];
$purpose = $_POST['purpose'];
$type = "Bank Payment";
$user = $_POST['user_login'];
$bank_name = $_POST['bank_name'];
$furt = 'Vuc';
$a=rand(10000,9999999);
$voucher_id= $furt."_".$a;
  if(empty($voucher_date) || empty($customer_name) || empty($amount) || empty($purpose) || empty($user)){
    echo '<script>swal("error","one or more fields are empty","error");</script>'; 
  }elseif($Run = $maineg->insertPaymentBank($voucher_date,$invoice_no,$customer_name,$amount,$purpose,$voucher_id,$type,$bank_name,$user)){
    if ($Run == true) {
      echo '<script>swal("Success","Bank Payment Voucher Created Successfully","success");</script>';
      } else{
      echo '<script>swal("Error","Unable to Create Bank Payment Voucher","error");</script>';
         } 
    }else{
echo '<script>swal("Error","Unable to Create Bank Payment Voucher","error");</script>';
    } 
} 
require_once 'view/bank_payment_voucher.php';
break;


case 'ReceiptVoucher':  
require_once 'view/receipt_voucher.php';
break;


case 'Journal':  
require_once 'view/journal.php';
break;


case 'BankJ':  
require_once 'view/bank_journal.php';
break;



case 'recieve':  
require_once 'view/receive.php';
break;



case 'FundCustomer':  
if(isset($_POST['fund'])){
               $deposit_date = $_POST['deposit_date'];
               $bank = $_POST['bank_name'];
               $customer = $_POST['customer_name'];
               $description = $_POST['description'];
               $amount = $_POST['amount'];
               $staff_id = $_POST['user_login'];
               $OldBal = $_POST['old_balance'];
               $bank_deatils = explode('-', $bank);
               $customer_deatils = explode('-', $customer);
               $bank_id = $bank_deatils[0];
               $bank_name = $bank_deatils[1];
               $customer_id = $customer_deatils[1];
               $customer_name = $customer_deatils[0];
               $furt  = 'dep';
               $a=rand(10000,1000);
               $b=rand(100,1);
               $c=rand(1000,10);
               $transaction_id= $furt."_".$c."_".$b;
               $result = $maineg->Get_bank_balanceCredit($bank_id); 
               $result1 = $maineg->Get_bank_balanceDebit($bank_id); 
               foreach ($result1 as $k => $v) {}                             
               foreach ($result as $k => $v) {}
               $balance1 = $result[$k]['amount'];
               $balance2 = $result1[$k]['amount'];
               $transcation_type = "Credit";
               $transaction_source = "Bank Deposit";
               $transaction_source1 = "Customer Bank Deposit";
               $series_name = "Credit";
               $account_id = $bank_id;
               $account_type = "Cash";
               $account_type1 = "Customer Ledger";
               $initial_balance = $balance1;
               $currentBalance = $amount + $balance1 - $balance2;

               $Balance = $OldBal - $amount;

               $debit = 0;

               $image         = $_FILES['image']['name'];
               $tmp           = $_FILES['image']['tmp_name'];
               $loc           = "view/product_image/".$image;

               if(empty($bank_id) || empty($amount) || empty($bank_name) || empty($transaction_id)){
                  echo '<script>swal("error","one or more fields are empty","error");</script>';
                }else{
                move_uploaded_file($tmp,$loc);
                $cREDITchart=$maineg->insertCustomer_ledger($customer_id,$amount,$debit,$Balance);
                $RunQ=$maineg->insertBankLog($bank_name,$bank_id,$transcation_type,$transaction_id,$amount,$description,$initial_balance,$currentBalance,$deposit_date,$image); 
                $RunQ2=$maineg->insertAccountLog($transaction_id,$transaction_source,$amount,$deposit_date,$account_id,$account_type,$staff_id,$series_name);
                $RunQ3=$maineg->insertAccountLog($transaction_id,$transaction_source1,$amount,$deposit_date,$customer_id,$account_type1,$staff_id,$series_name);
                $RunQ1=$maineg->chartofAccount($account_id,$amount);
                }
                if($RunQ==true &&  $RunQ2 == true && $RunQ1 == true  && $cREDITchart == true  && $RunQ3 == true){
                  echo '<script>swal("Success","Bank Deposit Record Successfully Added","success");</script>';  
                } else{
                  echo '<script>swal("Error","Unable to Record Bank Transaction","error");</script>';
                  } 
              }
require_once 'view/fund_customer.php';
break;


case 'RecordDeposit':  
if(isset($_POST['recordDeposit'])){
               $deposit_date = $_POST['deposit_date'];
               $bank = $_POST['bank_name'];
               $description = $_POST['description'];
               $amount = $_POST['amount'];
               $staff_id = $_POST['staff_id'];
               $bank_deatils = explode('-', $bank);
               $bank_id = $bank_deatils[0];
               $bank_name = $bank_deatils[1];
               $furt  = 'dep';
               $a=rand(10000,1000);
               $b=rand(100,1);
               $c=rand(1000,10);
               $transaction_id= $furt."_".$c."_".$b;
               $result = $maineg->Get_bank_balanceCredit($bank_id); 
               $result1 = $maineg->Get_bank_balanceDebit($bank_id); 
               foreach ($result1 as $k => $v) {}                             
               foreach ($result as $k => $v) {}
               $balance1 = $result[$k]['amount'];
               $balance2 = $result1[$k]['amount'];
               $transcation_type = "Credit";
               $transaction_source = "Bank Deposit";
               $series_name = "Credit";
               $account_id = $bank_id;
               $account_type = "Cash";
               $initial_balance = $balance1;
               $currentBalance = $amount + $balance1 - $balance2;

               $image         = $_FILES['image']['name'];
               $tmp           = $_FILES['image']['tmp_name'];
               $loc           = "view/product_image/".$image;

               if(empty($bank_id) || empty($amount) || empty($bank_name) || empty($transaction_id)){
                  echo '<script>swal("error","one or more fields are empty","error");</script>';
                }else{
                  move_uploaded_file($tmp,$loc);
                $RunQ=$maineg->insertBankLog($bank_name,$bank_id,$transcation_type,$transaction_id,$amount,$description,$initial_balance,$currentBalance,$deposit_date,$image); 
                $RunQ2=$maineg->insertAccountLog($transaction_id,$transaction_source,$amount,$deposit_date,$account_id,$account_type,$staff_id,$series_name);
                $RunQ1=$maineg->chartofAccount($account_id,$amount);
                }
                if($RunQ==true &&  $RunQ2 == true && $RunQ1 == true){
                  echo '<script>swal("Success","Bank Deposit Record Successfully Added","success");</script>';  
                } else{
                  echo '<script>swal("Error","Unable to Record Bank Transaction","error");</script>';
                  } 
              }
require_once 'view/bank_deposit.php';
break;


case 'RecordWithdrawal':
if(isset($_POST['recordWithdraw'])){
               $withdraw_date = $_POST['withdraw_date'];
               $bank = $_POST['bank_name'];
               $description = $_POST['description'];
               $amount = $_POST['amount'];
               $staff_id = $_POST['staff_id'];
               $bank_deatils = explode('-', $bank);
               $bank_id = $bank_deatils[0];
               $bank_name = $bank_deatils[1];
               $furt  = 'with';
               $a=rand(10000,1000);
               $b=rand(100,1);
               $c=rand(1000,10);
               $transaction_id= $furt."_".$c."_".$b;
               $result = $maineg->Get_bank_balanceCredit($bank_id); 
               $result1 = $maineg->Get_bank_balanceDebit($bank_id); 
               foreach ($result1 as $k => $v) {}                             
               foreach ($result as $k => $v) {}
               $balanceCredit = $result[$k]['amount'];
               $balanceDebit = $result1[$k]['amount'];
               $transcation_type = "Debit";
               $transaction_source = "Bank Withdrawal";
               $series_name = "Debit";
               $account_id = $bank_id;
               $account_type = "Cash";
               $initial_balance = $balanceCredit;
               $balce = $balanceCredit - $balanceDebit;
               $currentBalance = $balce - (int)$amount;

               $image         = $_FILES['image']['name'];
               $tmp           = $_FILES['image']['tmp_name'];
               $loc           = "view/product_image/".$image;

               if(empty($bank_id) || empty($amount) || empty($bank_name) || empty($transaction_id)){
                  echo '<script>swal("error","one or more fields are empty","error");</script>';
                }else{
                $RunQ=$maineg->insertBankLog($bank_name,$bank_id,$transcation_type,$transaction_id,$amount,$description,$initial_balance,$currentBalance,$withdraw_date,$image); 
                $RunQ2=$maineg->insertAccountLog($transaction_id,$transaction_source,$amount,$withdraw_date,$account_id,$account_type,$staff_id,$series_name);
                $RunQ1=$maineg->chartofAccountDebit($account_id,$amount);
                }
                if($RunQ==true &&  $RunQ2 == true && $RunQ1 == true){
                  echo '<script>swal("Success","Bank Withdrawal Record Successfully Added","success");</script>';  
                } else{
                  echo '<script>swal("Error","Unable to Record Bank Transaction","error");</script>';
                  } 
              }  
require_once 'view/bank_withdrawal.php';
break;



case 'ReceiptCashVoucher':  
if (isset($_POST['get_voucher'])){
$voucher_date = $_POST['voucher_date'];
$invoice_no=rand(10000,999999);
// $invoice_no = $_POST['invoice_no'];
$customer_name = $_POST['customer_name'];
$amount = $_POST['amount'];
$purpose = $_POST['purpose'];
$type = "Cash Receipt";
$user = $_POST['user_login'];
$receipt_image = $_FILES['receipt_image']['name'];
$tmp = $_FILES['receipt_image']['tmp_name'];
$loc = "view/product_image/".$receipt_image;
$furt = 'Vucr';
$a=rand(10000,9999999);
$voucher_id= $furt."_".$a;
  if(empty($voucher_date) || empty($customer_name) || empty($amount) || empty($purpose) || empty($user)){
    echo '<script>swal("error","one or more fields are empty","error");</script>'; 
  }elseif($Run = $maineg->insertReceiptCash($voucher_date,$invoice_no,$customer_name,$amount,$purpose,$voucher_id,$type,$receipt_image,$user)){
          move_uploaded_file($tmp,$loc);
   if ($Run == true) {
      echo '<script>swal("Success","Cash Receipt Voucher Created Successfully","success");</script>';
      } else{
      echo '<script>swal("Error","Unable to Create Cash Receipt Voucher","error");</script>';
         } 
   }else{
echo '<script>swal("Error","Unable to Create Cash Receipt Voucher","error");</script>';
   } 
} 
require_once 'view/cash_receipt_voucher.php';
break;


case 'ReceiptBankVoucher': 
if (isset($_POST['get_voucher'])){
$voucher_date = $_POST['voucher_date'];
$invoice_no = $_POST['invoice_no'];
$customer_name = $_POST['customer_name'];
$amount = $_POST['amount'];
$purpose = $_POST['purpose'];
$type = "Bank Receipt";
$user = $_POST['user_login'];
$bank_name = $_POST['bank_name'];
$receipt_image = $_FILES['receipt_image']['name'];
$tmp = $_FILES['receipt_image']['tmp_name'];
$loc = "view/product_image/".$receipt_image;
$furt = 'Vucr';
$a=rand(10000,9999999);
$voucher_id= $furt."_".$a;
  if(empty($voucher_date) || empty($customer_name) || empty($amount) || empty($purpose) || empty($user)){
    echo '<script>swal("error","one or more fields are empty","error");</script>'; 
  }elseif(move_uploaded_file($tmp,$loc)){
    $Run = $maineg->insertReceiptBank($voucher_date,$invoice_no,$customer_name,$amount,$purpose,$voucher_id,$type,$bank_name,$receipt_image,$user);
   if ($Run == true) {
      echo '<script>swal("Success","Bank Receipt Voucher Created Successfully","success");</script>';
      } else{
      echo '<script>swal("Error","Unable to Create Bank Receipt Voucher","error");</script>';
         } 
   }else{
echo '<script>swal("Error","Unable to Create Bank Receipt Voucher","error");</script>';
   } 
}  
require_once 'view/bank_receipt_voucher.php';
break;


case 'VoucherReport': 
require_once 'view/voucher_reports.php';
break;


case 'PaymentReport': 
require_once 'view/payment_voucher_reports.php';
break;


case 'ReceiptReport': 
require_once 'view/receipt_voucher_reports.php';
break;


case 'PaymentReportDetails': 
require_once 'view/payment_voucher_reports_details.php';
break;


case 'ReceiptReportDetails': 
require_once 'view/receipt_voucher_reports_details.php';
break; 

case 'BankReport': 
require_once 'view/bank_report.php';
break;

case 'InvoiceReport': 
require_once 'view/invoice_report.php';
break;


case 'WaybilReport':
require_once 'view/waybill_report.php';
break;


case 'ReceivePaymentReport':
require_once 'view/receive_payment_report.php';
break;


case 'HandBook':
require_once 'view/hand_book.php';
break;


case 'PrintedInvoice':
require_once 'view/printed_invoice.php';
break;


case 'CustInvoice':
require_once 'view/customerInvoice.php';
break;

case 'DetailsCustInvoice':
require_once 'view/customer_invoice_details.php';
break;


case 'CusLedgerReport':
require_once 'view/customer_ledger__report.php';
break;


//////////////////////////////////////New Features////////////////////////////////////////////////////////////////


case 'Salesrep': 

if (isset($_POST['addCart'])){
    $product_code = $_POST['product_code'];
    $product_name   = $_POST['product_name'];
    $category = $_POST['category'];
    $quantity   = $_POST['qty'];
    $guage   = $_POST['guage'];
    $color   = $_POST['color'];
    $kg_weight   = $_POST['kg_weight'];
    $meter_length   = $_POST['meter_length'];
    $embossed   = $_POST['embossed'];
    $design   = $_POST['design'];
    $packet   = $_POST['packet'];
    // $old_price   = $_POST['old_price'];
    $price   = $_POST['selling_price'];
    @$total   = $_POST['total'];
    // $new_total = str_replace(',', '', $total);
    $cart_date = date("Y-m-d"); 
    $sales_rep  = $_POST['sales_rep1'];
    @$new_toatl = $price * $quantity;
    $purchase_price   = $_POST['purchase_price'];
    @$cost_of_goods = $purchase_price * $quantity;

     if ($maineg->check_if_Record_Exist('addtocart_new', 'product_code', $product_code) == true) {

            echo '<script>swal("Error","Item Already Added, Update the quantity or Select another Item","error");</script>'; 

    }else{

          if(empty($sales_rep) || empty($cart_date) ||  empty($product_code) || empty($product_name)|| empty($price) || empty($quantity) || empty($total)){
          echo '<script>swal("Error","one or more fields are empty","error");</script>'; 
            // echo '<script>alert("one or more fields are empty")</script>';

      }else{
        
        // if($price < $old_price){

        $Run = $maineg->addtocartAlum($product_code,$product_name,$category,$quantity,$price,$new_toatl,$cart_date,$sales_rep,$guage,$color,$meter_length,$meter_length,$embossed,$design,$packet,$cost_of_goods);
      
       if($Run == true) {

                echo '<script>alert("Success,New Item Added");</script>';
                echo '<script>window.location="?action=Salesrep"</script>';

        }else{

                echo '<script>swal("Error","Unable to Perform Transaction","error");</script>';

        } 

        // }else{

       //  $Run = $maineg->addtocartAlum($product_code,$product_name,$category,$price,$old_price,$total,$cart_date,$sales_rep,$guage,$color,$quantity,$meter_length,$embossed,$cost_of_goods);
      
       // if($Run == true) {
       //     echo '<script>alert("Success,New Item Added");</script>';
       //     echo '<script>window.location="?action=AluminiumCoils"</script>';
       //  } else{
       //  echo '<script>swal("Error","Unable to Perform Transaction","error");</script>';
       //  } 
        // }

        }

    }

}



if (isset($_POST['recordItem'])){
   $sales_rep  = $_POST['sales_rep'];
   $order_date = $_POST['order_date'];  
   $timex = $_POST['timex'];
   $type   = $_POST['type'];
   $mode_payment = $_POST['mode_payment'];
   $invoice_number = $_POST['invoice_number'];
   $customer_name = $_POST['customer_name'];
   $address = $_POST['address'];
   $phone   = $_POST['phone'];
   $customer_name_new = $_POST['customer_name_new'];
   $address_new = $_POST['address_new'];
   $phone_new   = $_POST['phone_new'];
   $product_code = $_POST['product_code'];
   $category = $_POST['category'];
   $product_name   = $_POST['product_name'];
   $price   = $_POST['price'];
   $guage   = $_POST['guage'];
   $color   = $_POST['color'];
   $kg_weight   = $_POST['kg_weight'];
   $meter_length   = $_POST['meter_length'];
   $embossed   = $_POST['embossed'];
   $design   = $_POST['design'];
   $packet   = $_POST['packet'];
   $old_price   = $_POST['old_price'];
   
   $bank = $_POST['bank_name'];
   $bank_deatils = explode('-', $bank);
   $bank_id = $bank_deatils[0];
   $bank_name = $bank_deatils[1];

   $total   = $_POST['total'];
   $cost_of_goods   = $_POST['cost_of_goods'];
   $amount_paid = $_POST['amount_paid'];

   // $old_balance   = $_POST['old_balance'];
   // $include_bal   = $_POST['include_bal'];
   // $old_amount_paid = $_POST['old_amount_paid'];
   // $new_balance = $old_balance - $old_amount_paid;
   // $total_paid = $old_amount_paid + $amount_paid;

   $grand_total = $_POST['grand_total'];
   $customer = explode('-', $customer_name);
   // $furt  = 'Inv';
   $invoice_id = $invoice_number;
   // $invoice_id  = $_POST['invoice_no']; 
   $_SESSION['In_id'] = $invoice_id;
   $newTotal = str_replace(',', '', $total);
   $due = $grand_total - $amount_paid;
   $new_due =  $due;
   $status = "Active";
   $datex = date('Y-m-d');
   $Account = "4000_SALES";
   $Account1 = "1200_ACCOUNT_RECEIVABLE";

   $furt1  = 'Sales';
   $a1=rand(10000,1000);
   $b1=rand(100,1);
   $c1=rand(1000,10);
   $transaction_id= $furt1."_".$c1.$a1; 
   $transaction_source = "SALES";
   $account_type = "Daily Sales";
   $series_name ="Income";
   $no_id = "";
   $qty = 0;
   $account_type1 = "Account Receivable";
   $series_name1 ="Asset";
   $description = "Sales On Credit";
   $type1 = "Credit";
   $status1 = " Approved";
   $GMD1 = "Approved";
   $CEO1 = "Approved";
   $Accountant1 = "Approved";
   $status2 = "Unapproved";
   $GMD2 = "Unapproved";
   $CEO2 = "Unapproved";
   $Accountant2 = "Unapproved";
   $adjusted_option = $_POST['adjusted_option'];
   $id = $_POST['id'];

    $customer_name_new_id = $customer_name_new;

    $staockSTAS = "outstock";

     $msg_bodycredit = 'Hi Sir / Madam, There is a Request For Credit Sale Approval, Thanks!'; 
    $msg_bodyadustedprice = 'Hi Sir / Madam, There is a Request For Price Adjustment Sale Approval, Thanks!';  

    // $msg_bodycreditMa = 'Hi Ma, There is a Request For Credit Sale Approval, Thanks!'; 
    // $msg_bodyadustedpriceMa = 'Hi Ma, There is a Request For Price Adjustment Sale Approval, Thanks!';  
    
    $customer_phone = '08067683668,08164528072';
    // $customer_phoneMa =''; 
    
    // $customer_phone = '08164528072';
    // $customer_phoneMa = '08067683668';


   $result = $maineg->Get_balanceCredit($customer[1]); 
   $result1 = $maineg->Get_balanceDebit($customer[1]); 
   foreach ($result1 as $k => $v) {}                             
   foreach ($result as $k => $v) {}
   $balance1 = $result[$k]['credit'] + $amount_paid;
   $balance2 = $result1[$k]['debit'] + $due;
   $initial_balance = $balance2 - $balance1; 
   $currentBalance = $initial_balance;
   
   
   
   $resultn = $maineg->Get_bank_balanceCredit($bank_id); 
   $resultn1 = $maineg->Get_bank_balanceDebit($bank_id); 
   foreach ($resultn1 as $k => $v) {}                             
   foreach ($resultn as $k => $v) {}
   $balancen1 = $resultn[$k]['amount'];
   $balancen2 = $resultn1[$k]['amount'];

   $image = '';

   $deposit_date = date('Y-m-d');
   
   $transcation_type = "Credit";
   $transaction_source1 = " Sales";
   $initial_balancen = $balancen1;
   $currentBalancen = $amount_paid + $balancen1 - $balancen2;
 
   $countLoop=1;
   for($i=0; $i<sizeof($product_code);$i++){
   $ItemPrice  = $price[$i];
   $Itemproduct_code  = $product_code[$i];
   $itemcategory   = $category[$i];
   $itemproduct_name   = $product_name[$i];
   // $quantity   = $qty[$i];
   $Itemtotal  = $total[$i];
   $Itemguage  = $guage[$i];  
   $Itemcolor  =  $color[$i];  
   $Itemkg_weight  = $kg_weight[$i];  
   $Itemmeter_length  = $meter_length[$i]; 
   $Itemembossed  =  $embossed[$i];  
   $Itemold_price  = $old_price[$i];
   $Itemcost_of_goods = $cost_of_goods[$i];
   $new_id  = $id[$i]; 


      if(empty($sales_rep) || empty($order_date) ||  empty($product_code) || empty($product_name)|| empty($price) || empty($kg_weight) || empty($total) || empty($invoice_id)){
      echo '<script>swal("Error","one or more fields are empty","error");</script>'; 
       
      }elseif(empty($invoice_number)){

        $Run = $maineg->insertInvoiceDetailsCreditAlum($_SESSION['In_id'],$Itemproduct_code,$itemproduct_name,$itemcategory,$mode_payment,$ItemPrice,$Itemtotal,$amount_paid,$due,$order_date,$no_id,$customer_name_new,$address_new,$phone_new,$sales_rep,$status2,$GMD2,$CEO2,$Accountant2,$Itemcolor,$Itemmeter_length,$Itemkg_weight,$Itemguage,$Itemold_price,$Itemembossed,$Itemcost_of_goods);

                    $clear_out = $maineg->delete_All('addtocart_new','sales_rep',$sales_rep);

                    if ($Run == true) {

                        echo '<script>swal("Success","Sales Invoices Added","success");</script>';
                    
                     }
    
    }else{

            echo '<script>swal("Error","Unable to Sales Invoices","error");</script>';

        } 

           $countLoop++;

      }
      
}



if (isset($_POST['seeItem'])){
   $sales_rep  = $_POST['sales_rep'];
   $order_date = $_POST['order_date'];  
   $timex = $_POST['timex'];
   $type   = $_POST['type'];
   $mode_payment = $_POST['mode_payment'];
   $customer_name = $_POST['customer_name'];
   $address = $_POST['address'];
   $phone   = $_POST['phone'];
   $customer_name_new = $_POST['customer_name_new'];
   $address_new = $_POST['address_new'];
   $phone_new   = $_POST['phone_new'];
   $product_code = $_POST['product_code'];
   $category = $_POST['category'];
   $product_name   = $_POST['product_name'];
   $price   = $_POST['price'];
   $guage   = $_POST['guage'];
   $color   = $_POST['color'];
   $kg_weight   = $_POST['kg_weight'];
   $meter_length   = $_POST['meter_length'];
   $embossed   = $_POST['embossed'];
   $old_price   = $_POST['old_price'];
   
   $bank = $_POST['bank_name'];
   $bank_deatils = explode('-', $bank);
   $bank_id = $bank_deatils[0];
   $bank_name = $bank_deatils[1];

   $total   = $_POST['total'];
   $cost_of_goods   = $_POST['cost_of_goods'];
   $amount_paid = $_POST['amount_paid'];

   // $old_balance   = $_POST['old_balance'];
   // $include_bal   = $_POST['include_bal'];
   // $old_amount_paid = $_POST['old_amount_paid'];
   // $new_balance = $old_balance - $old_amount_paid;
   // $total_paid = $old_amount_paid + $amount_paid;

   $grand_total = $_POST['grand_total'];
   $customer = explode('-', $customer_name);
   // $furt  = 'Inv';
   $rand=rand(10000,99999999);
   $invoice_id = $rand;
   // $invoice_id  = $_POST['invoice_no']; 
   $_SESSION['In_id'] = $invoice_id;
   $newTotal = str_replace(',', '', $total);
   $due = $grand_total - $amount_paid;
   $new_due =  $due;
   $status = "Active";
   $datex = date('Y-m-d');
   $Account = "4000_SALES";
   $Account1 = "1200_ACCOUNT_RECEIVABLE";

   $furt1  = 'Sales';
   $a1=rand(10000,1000);
   $b1=rand(100,1);
   $c1=rand(1000,10);
   $transaction_id= $furt1."_".$c1.$a1; 
   $transaction_source = "SALES";
   $account_type = "Daily Sales";
   $series_name ="Income";
   $no_id = "";
   $qty = 0;
   $account_type1 = "Account Receivable";
   $series_name1 ="Asset";
   $description = "Sales On Credit";
   $type1 = "Credit";
   $status1 = " Approved";
   $GMD1 = "Approved";
   $CEO1 = "Approved";
   $Accountant1 = "Approved";
   $status2 = "Unapproved";
   $GMD2 = "Unapproved";
   $CEO2 = "Unapproved";
   $Accountant2 = "Unapproved";
   $adjusted_option = $_POST['adjusted_option'];
   $id = $_POST['id'];

    $customer_name_new_id = $customer_name_new;

    $staockSTAS = "outstock";

     $msg_bodycredit = 'Hi Sir / Madam, There is a Request For Credit Sale Approval, Thanks!'; 
    $msg_bodyadustedprice = 'Hi Sir / Madam, There is a Request For Price Adjustment Sale Approval, Thanks!';  

    // $msg_bodycreditMa = 'Hi Ma, There is a Request For Credit Sale Approval, Thanks!'; 
    // $msg_bodyadustedpriceMa = 'Hi Ma, There is a Request For Price Adjustment Sale Approval, Thanks!';  
    
    $customer_phone = '08067683668,08164528072';
    // $customer_phoneMa =''; 
    
    // $customer_phone = '08164528072';
    // $customer_phoneMa = '08067683668';


   $result = $maineg->Get_balanceCredit($customer[1]); 
   $result1 = $maineg->Get_balanceDebit($customer[1]); 
   foreach ($result1 as $k => $v) {}                             
   foreach ($result as $k => $v) {}
   $balance1 = $result[$k]['credit'] + $amount_paid;
   $balance2 = $result1[$k]['debit'] + $due;
   $initial_balance = $balance2 - $balance1; 
   $currentBalance = $initial_balance;
   
   
   
   $resultn = $maineg->Get_bank_balanceCredit($bank_id); 
   $resultn1 = $maineg->Get_bank_balanceDebit($bank_id); 
   foreach ($resultn1 as $k => $v) {}                             
   foreach ($resultn as $k => $v) {}
   $balancen1 = $resultn[$k]['amount'];
   $balancen2 = $resultn1[$k]['amount'];

   $image = '';

   $deposit_date = date('Y-m-d');
   
   $transcation_type = "Credit";
   $transaction_source1 = " Sales";
   $initial_balancen = $balancen1;
   $currentBalancen = $amount_paid + $balancen1 - $balancen2;
 
   // if($type == "Regular Customer" && $mode_payment != "Credit" && $adjusted_option != "Yes"){
    
   //      if($currentBalance <= 0 ){
    
   //         $newcurrentBalance = '0.00';
           
   //         $cREDITchart=$maineg->insertCustomer_ledger($customer[1],$amount_paid,$due,$newcurrentBalance);
    
   //     }else{
   //         $cREDITchart=$maineg->insertCustomer_ledger($customer[1],$amount_paid,$due,$currentBalance);
   //     }
   // }

   $countLoop=1;
   for($i=0; $i<sizeof($product_code);$i++){
   $ItemPrice  = $price[$i];
   $Itemproduct_code  = $product_code[$i];
   $itemcategory   = $category[$i];
   $itemproduct_name   = $product_name[$i];
   // $quantity   = $qty[$i];
   $Itemtotal  = $total[$i];
   $Itemguage  = $guage[$i];  
   $Itemcolor  =  $color[$i];  
   $Itemkg_weight  = $kg_weight[$i];  
   $Itemmeter_length  = $meter_length[$i]; 
   $Itemembossed  =  $embossed[$i];  
   $Itemold_price  = $old_price[$i];
   $Itemcost_of_goods = $cost_of_goods[$i];
   $new_id  = $id[$i]; 



  


      if(empty($sales_rep) || empty($order_date) ||  empty($product_code) || empty($product_name)|| empty($price) || empty($kg_weight) || empty($total) || empty($invoice_id)){
      echo '<script>swal("Error","one or more fields are empty","error");</script>'; 
       
      }elseif($type == "Walk-in Customer"){


       if($mode_payment == "Credit" && $adjusted_option == "Yes"){

        $Run = $maineg->insertInvoiceDetailsPriceADJUSTAlum($_SESSION['In_id'],$Itemproduct_code,$itemproduct_name,$itemcategory,$mode_payment,$ItemPrice,$Itemtotal,$amount_paid,$due,$order_date,$no_id,$customer_name_new,$address_new,$phone_new,$sales_rep,$status2,$GMD2,$CEO2,$Accountant2,$Itemguage,$Itemcolor,$Itemkg_weight,$Itemmeter_length,$Itemembossed,$Itemold_price,$Itemcost_of_goods);

                   $clear_out = $maineg->delete_All('addtocart','sales_rep',$sales_rep);

                    if ($Run == true) {

                        $RunQ=$maineg->AUTOMATIC_SMS_API($customer_phone,$msg_bodyadustedprice);
                        //$RunQ1=$maineg->AUTOMATIC_SMS_API($customer_phoneMa,$msg_bodyadustedpriceMa);

                        echo '<script>swal("Success","Credit Sales Added, Waiting for Approval","success");</script>';
                    
                     }
               }elseif($mode_payment == "Credit"){


                $Run = $maineg->insertInvoiceDetailsCreditAlum($_SESSION['In_id'],$Itemproduct_code,$itemproduct_name,$itemcategory,$mode_payment,$ItemPrice,$Itemtotal,$amount_paid,$due,$order_date,$no_id,$customer_name_new,$address_new,$phone_new,$sales_rep,$status2,$GMD2,$CEO2,$Accountant2,$Itemcolor,$Itemmeter_length,$Itemkg_weight,$Itemguage,$Itemold_price,$Itemembossed,$Itemcost_of_goods);

                    $clear_out = $maineg->delete_All('addtocart','sales_rep',$sales_rep);

                     if ($Run == true) {

                            $RunQ=$maineg->AUTOMATIC_SMS_API($customer_phone,$msg_bodycredit);
                            //$RunQ1=$maineg->AUTOMATIC_SMS_API($customer_phoneMa,$msg_bodycreditMa);

                            echo '<script>swal("Success","Credit Sales Added, Waiting for Approval","success");</script>';

                             }

                   

                         }elseif($adjusted_option == "Yes"){

                   $Run = $maineg->insertInvoiceDetailsPriceADJUSTAlum($_SESSION['In_id'],$Itemproduct_code,$itemproduct_name,$itemcategory,$mode_payment,$ItemPrice,$Itemtotal,$amount_paid,$due,$order_date,$no_id,$customer_name_new,$address_new,$phone_new,$sales_rep,$status2,$GMD2,$CEO2,$Accountant2,$Itemguage,$Itemcolor,$Itemkg_weight,$Itemmeter_length,$Itemembossed,$Itemold_price,$Itemcost_of_goods);

                   $clear_out = $maineg->delete_All('addtocart','sales_rep',$sales_rep);

                    if ($Run == true) {

                        $RunQ=$maineg->AUTOMATIC_SMS_API($customer_phone,$msg_bodyadustedprice);
                        //$RunQ1=$maineg->AUTOMATIC_SMS_API($customer_phoneMa,$msg_bodyadustedpriceMa);

                        echo '<script>swal("Success","Credit Sales Added, Waiting for Approval","success");</script>';

                         }

               }else{

            $Run = $maineg->insertInvoiceDetailsAlum($_SESSION['In_id'],$Itemproduct_code,$itemproduct_name,$itemcategory,$mode_payment,$ItemPrice,$Itemtotal,$amount_paid,$due,$order_date,$no_id,$customer_name_new,$address_new,$phone_new,$Itemcolor,$Itemguage,$Itemold_price,$Itemkg_weight,$Itemmeter_length,$Itemembossed,$sales_rep,$status1,$GMD1,$CEO1,$Accountant1,$bank_name,$bank_id,$Itemcost_of_goods);
      
               if ($Run == true) {
                $RunQ22=$maineg->UpdateStockStatus($staockSTAS,$Itemproduct_code);
                 $Main =  $maineg->insertInvoicelog($_SESSION['In_id'],$sales_rep,$ItemPrice,$timex,$order_date,$Itemtotal,$amount_paid,$due,$status1,$GMD1,$CEO1,$Accountant1,$bank_name,$bank_id,$Itemcost_of_goods);
                  $clear_out = $maineg->delete_All('addtocart','sales_rep',$sales_rep);
                 if ($Main == true && $RunQ22==true) {
                  echo '<script>swal("Success","Transaction Successful","success");</script>';
                         }
                      } 
               }
        }elseif($type == "Regular Customer"){

       if($mode_payment == "Credit" && $adjusted_option == "Yes"){

                   $Run = $maineg->insertInvoiceDetailsPriceADJUSTAlum($_SESSION['In_id'],$Itemproduct_code,$itemproduct_name,$itemcategory,$mode_payment,$ItemPrice,$Itemtotal,$amount_paid,$due,$order_date,$customer[1],$customer[0],$address,$phone,$sales_rep,$status2,$GMD2,$CEO2,$Accountant2,$Itemguage,$Itemcolor,$Itemkg_weight,$Itemmeter_length,$Itemembossed,$Itemold_price,$Itemcost_of_goods);

                   $clear_out = $maineg->delete_All('addtocart','sales_rep',$sales_rep);

                    if ($Run == true) {

                        $RunQ=$maineg->AUTOMATIC_SMS_API($customer_phone,$msg_bodyadustedprice);
                        //$RunQ1=$maineg->AUTOMATIC_SMS_API($customer_phoneMa,$msg_bodyadustedpriceMa);

                        echo '<script>swal("Success","Credit Sales Added, Waiting for Approval","success");</script>';

                         }

               }elseif($mode_payment == "Credit"){

           $Run = $maineg->insertInvoiceDetailsCreditAlum($_SESSION['In_id'],$Itemproduct_code,$itemproduct_name,$itemcategory,$mode_payment,$ItemPrice,$Itemtotal,$amount_paid,$due,$order_date,$customer[1],$customer[0],$address,$phone,$sales_rep,$status2,$GMD2,$CEO2,$Accountant2,$Itemcolor,$Itemmeter_length,$Itemkg_weight,$Itemguage,$Itemold_price,$Itemembossed,$Itemcost_of_goods);

            $clear_out = $maineg->delete_All('addtocart','sales_rep',$sales_rep);

         if ($Run == true && $Main = true) {

            $RunQ=$maineg->AUTOMATIC_SMS_API($customer_phone,$msg_bodycredit);
            $RunQ1=$maineg->AUTOMATIC_SMS_API($customer_phoneMa,$msg_bodycreditMa);

          echo '<script>swal("Success","Credit Sales Added, Waitin for Approval","success");</script>';
        }

       }elseif( $adjusted_option == "Yes"){

                   $Run = $maineg->insertInvoiceDetailsPriceADJUSTAlum($_SESSION['In_id'],$Itemproduct_code,$itemproduct_name,$itemcategory,$mode_payment,$ItemPrice,$Itemtotal,$amount_paid,$due,$order_date,$customer[1],$customer[0],$address,$phone,$sales_rep,$status2,$GMD2,$CEO2,$Accountant2,$Itemguage,$Itemcolor,$Itemkg_weight,$Itemmeter_length,$Itemembossed,$Itemold_price,$Itemcost_of_goods);

                   $clear_out = $maineg->delete_All('addtocart','sales_rep',$sales_rep);

                    if ($Run == true) {

                        $RunQ=$maineg->AUTOMATIC_SMS_API($customer_phone,$msg_bodyadustedprice);
                        //$RunQ1=$maineg->AUTOMATIC_SMS_API($customer_phoneMa,$msg_bodyadustedpriceMa);

                        echo '<script>swal("Success","Credit Sales Added, Waiting for Approval","success");</script>';

                         }

               }else{

        $Run = $maineg->insertInvoiceDetailsAlum($_SESSION['In_id'],$Itemproduct_code,$itemproduct_name,$itemcategory,$mode_payment,$ItemPrice,$Itemtotal,$amount_paid,$due,$order_date,$customer[1],$customer[0],$address,$phone,$Itemcolor,$Itemguage,$Itemold_price,$Itemkg_weight,$Itemmeter_length,$Itemembossed,$sales_rep,$status1,$GMD1,$CEO1,$Accountant1,$bank_name,$bank_id,$Itemcost_of_goods);
      
       if ($Run == true) {
          $RunQ22=$maineg->UpdateStockStatus($staockSTAS,$Itemproduct_code);
          $Main =  $maineg->insertInvoicelog($_SESSION['In_id'],$sales_rep,$ItemPrice,$timex,$order_date,$Itemtotal,$amount_paid,$due,$status1,$GMD1,$CEO1,$Accountant1,$bank_name,$bank_id,$Itemcost_of_goods);
          $clear_out = $maineg->delete_All('addtocart','sales_rep',$sales_rep);
         if ($Main == true && $RunQ22==true) {
          echo '<script>swal("Success","Transaction Successful","success");</script>';
                }
            } 
       }

    }else{

            echo '<script>swal("Error","Unable to Perform Transaction","error");</script>';

           } 
           $countLoop++;
      }
      
    //     if($Main == true){

    //      $RunQR=$maineg->insertBankLog($bank_name,$bank_id,$transcation_type,$transaction_id,$due,$description,$initial_balancen,$currentBalancen,$deposit_date,$image);
    //  $RunQchart2=$maineg->chartofAccount($bank_id,$amount_paid);
    // $RunQchart=$maineg->chartofAccount($Account1,$due);
    // $RunQchart1=$maineg->chartofAccount($Account,$amount_paid);
    // $RunQLog1=$maineg->insertAccountLog($transaction_id,$transaction_source,$due,$datex,$Account1,$account_type1,$sales_rep,$series_name1);
    //  $RunQLog2=$maineg->insertAccountLog($transaction_id,$transaction_source,$amount_paid,$datex,$Account,$account_type,$sales_rep,$series_name);

    //   }
}


if (isset($_POST['del'])) {
    $DeleteCat = $_POST['del'];
    $Call = $maineg->cart_Delete($DeleteCat);
      if ($Call==true) {
     echo '<script>swal("Success","Item Removed","success")</script>';
     // echo '<script>window.location="index.php?action=Catery"</script>';
  }
}

require_once 'view/sales_rep.php';
break;




default:
require_once "view/sales_rep.php";
break;
}



?>