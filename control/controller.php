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



case 'allPro':
if (isset($_POST['del'])) {
    $DeleteCat = $_POST['del'];
    $Call = $maineg->Product_Delete($DeleteCat);
      if ($Call==true) {
     echo '<script>swal("Success","Product Succesfully Deleted","success")</script>';
     // echo '<script>window.location="index.php?action=Catery"</script>';
  }
}
require_once 'view/allProducts.php';
break; 

case 'Catery':
    if (isset($_POST['del'])) {
    $DeleteCat = $_POST['del'];
    $Call = $maineg->Category_Delete($DeleteCat);
      if ($Call==true) {
     echo '<script>swal("Success","Succesfully Deleted","success")</script>';
     // echo '<script>window.location="index.php?action=Catery"</script>';
  }
}
require_once 'view/category.php';
break; 


case 'RawMatCatery':
require_once 'view/rawMatCategory.php';
break; 


case 'EditCatery':
if (isset($_POST['updateCate'])){
    $maincl = new mainClass();
    $old_category = $_POST['old_category'];
    $category = $_POST['category'];
    // $sub_category = $_POST['sub_category'];


   
      if(empty($category)){
           echo '<script>swal("warning","Sorry cant process empty field","warning");</script>';  
      }else{
         $RunQ=$maincl->Update_Category($category,$old_category);
         if ($RunQ==true){
           echo '<script>swal("Success","Category Updated Successfull","success")</script>'; 
         }else{
          echo '<script>swal("Danger","Unable to Udpdate Category","danger")</script>';   
      }
  }   
}

require_once 'view/edit_category.php';
break; 

case 'EditCUst':
if (isset($_POST['updateCate'])){
    $maincl = new mainClass();
    $title = $_POST['title'];
    $fullname = $_POST['fullname'];
    $phone = $_POST['phone'];
    $address = $_POST['address'];
    $level = $_POST['level'];
    $id = $_POST['user_id'];
      if(empty($title) || empty($fullname) || empty($phone) || empty($address) || empty($level)){
           echo '<script>swal("warning","Sorry cant process empty field","warning");</script>';  
      }else{
         $RunQ=$maincl->Update_CustomerD($title,$fullname,$phone,$address,$level,$id);
         if ($RunQ==true){
           echo '<script>swal("Success","Customer Details Updated Successfull","success")</script>'; 
         }else{
          echo '<script>swal("Danger","Unable to Udpdate Customer Details","danger")</script>';   
      }
  }   
}
require_once 'view/edit_customer.php';
break;

case 'InStock':
require_once 'view/stock.php';
break;

case 'seeStock':
require_once 'view/viewStockDetails.php';
break;


case 'seeWareStock':
require_once 'view/viewWarehouseStockDetails.php';
break;


case 'WareStock':
require_once 'view/warehouse_stock.php';
break;






// $ldate = date('Y-m-d H:m:s');


case 'editPro':

 if(isset($_POST['updateProduct'])){
             $name  = $_POST['product_name'];
             $item_id  = $_POST['product_code'];  
             $description   = $_POST['description'];
             $regular_price = $_POST['purchase_price'];
             $distributor_price = $_POST['sell_price'];
             $category      = $_POST['category'];
             if(empty($name) || empty($description) || empty($regular_price) || empty($distributor_price) || empty($category)){
                  echo '<script>swal("error","one or more fields are empty","error");</script>'; 
                    }elseif($Run = $maineg->UpdateProduct($name,$item_id,$description,$regular_price,$category,$distributor_price)){ 
              if ($Run == true) {
                    echo '<script>swal("Success","Product Updated Successfully","success");</script>';
                   // }
        }    

                } else{
                  echo '<script>swal("Error","Unable to Update Product","error");</script>';
                     } 
              }

require_once 'view/editProduct.php';
break;


case 'AddStk':
 if(isset($_POST['addStok'])){
               $product_name  = $_POST['product_name'];
               $brand  = $_POST['brand'];
               $description  = $_POST['description'];
               $color  = $_POST['color'];
               $size  = $_POST['size'];
               $category  = $_POST['category'];  
               $product_code  = $_POST['product_code'];
               $unit  = $_POST['unit'];
               $Qty  = $_POST['Qty'];
               $min_stock  = $_POST['min_stock'];
    
               $cost_price  = $_POST['cost_price'];
               $selling_price  = $_POST['selling_price'];
               // $user_login  = $_POST['user_login'];
               $user_login  = "Admin";

               $up="ABCDEFGHIJKLMNOPQRSTUVWXIZ";
               $no="1234567890";
               $down="abcdefghijklmnopqrtuvwxyz";
               $gen=substr(str_shuffle($up),0,4);
               $ge=substr(str_shuffle($down),0,4);
               $g=substr(str_shuffle ($no),0,6);
               $Token_id=$gen.$g.$ge;

               $maineg = new  mainClass();
               $DBinfo = $maineg->Targeted_information('products','product_code',$product_code);
               $image = $DBinfo['image'];
               
               $total = $cost_price * $Qty;

               // $Account = "2008_PURCHASE";
               // $Amount_paid = 0.00;
               // $amount_due = 0.00;
               // $payment_method = "Null";
               // $total_purchase =$total;
               // $transaction_source = "Purchase";
                $datex = date('Y-m-d');
                $datexUp = date('Y-m-d H:m:s');
               // $account_type ="Cash";
               // $series_name = "Liability";

                if(empty($product_name)  || empty($Qty)  || empty($cost_price)  || empty($selling_price)){

                       echo '<script>swal("error","one or more fields are empty","error");</script>'; 

                }else{


                    if ($maineg->check_if_Record_Exist('stock_table', 'item_code', $product_code) == true) {

                              $RunQ=$maineg->UpdateStockShopPlus($Qty,$datexUp,$product_code);
                              $RunQ2=$maineg->insertSTOCKlog($product_name,$brand,$datex,$description,$color,$size,$category,$Qty,$product_code,$Token_id,$unit,$cost_price,$selling_price,$total);

                              $RunQU=$maineg->UpdateStockWarehouseMinus($Qty,$datexUp,$product_code);


                                if($RunQ==true && $RunQ2 == true && $RunQU == true){
                                      echo '<script>swal("Success","New Product Stock Added","success");</script>';  
                                  } else{
                                      echo '<script>swal("Error","Unable to Add Product Stock","error");</script>';
                                 } 

                  }else{

                              // $move = move_uploaded_file($tmp,$loc);
                              $RunQ=$maineg->insertSTOCK($product_name,$brand,$datex,$description,$color,$size,$category,$Qty,$min_stock,$product_code,$Token_id,$unit,$cost_price,$selling_price); 
                              $RunQ2=$maineg->insertSTOCKlog($product_name,$brand,$datex,$description,$color,$size,$category,$Qty,$product_code,$Token_id,$unit,$cost_price,$selling_price,$total);

                              $RunQU=$maineg->UpdateStockWarehouseMinus($Qty,$datexUp,$product_code);

                               if($RunQ==true && $RunQ2 == true && $RunQU == true){
                                   echo '<script>swal("Success","New Product Stock Added","success");</script>';  
                                } else{
                                    echo '<script>swal("Error","Unable to Add Product Stock","error");</script>';
                                 } 


                  }



                  
                }
              }
require_once 'view/addStock.php';
break;


case 'AddWarehouse':
 if(isset($_POST['addWare'])){
               $product_name  = $_POST['product_name'];
               $brand  = $_POST['brand'];
               $description  = $_POST['description'];
               $color  = $_POST['color'];
               $size  = $_POST['size'];
               $category  = $_POST['category'];  
               $product_code  = $_POST['product_code'];
               $cost_price  = $_POST['cost_price'];
               $unit  = $_POST['unit'];
               $Qty  = $_POST['Qty'];
               $supplier  = $_POST['supplier'];
               $suppleir_data = explode('-', $supplier);
               $suppleir_id = $suppleir_data[0];
               $suppleir_name = $suppleir_data[1];
               // $user_login  = $_POST['user_login'];
               $user_login  = "Admin";

               $up="ABCDEFGHIJKLMNOPQRSTUVWXIZ";
               $no="1234567890";
               $down="abcdefghijklmnopqrtuvwxyz";
               $gen=substr(str_shuffle($up),0,4);
               $ge=substr(str_shuffle($down),0,4);
               $g=substr(str_shuffle ($no),0,6);
               $Token_id=$gen.$g.$ge;

               $maineg = new  mainClass();
               $DBinfo = $maineg->Targeted_information('products','product_code',$product_code);
               $image = $DBinfo['image'];;
               // $tmp   = $_FILES['image']['tmp_name'];
               // $loc   = "view/product_image/".$image;
              
               $total  = $cost_price * $Qty;

               $Account = "2008_PURCHASE";
               $Amount_paid = 0.00;
               $amount_due = 0.00;
               $payment_method = "Null";
               $total_purchase =$total;
               $transaction_source = "Purchase";
               $datex = date('Y-m-d');
               $datexUp = date('Y-m-d H:m:s');
               $account_type ="Cash";
               $series_name = "Liability";

                if(empty($product_name)  || empty($Qty)  || empty($cost_price)  || empty($supplier)){

                       echo '<script>swal("error","one or more fields are empty","error");</script>'; 

                }else{


                    if ($maineg->check_if_Record_Exist('warehouse', 'product_code', $product_code) == true) {

                              $RunQ=$maineg->UpdateStockWarehouse($Qty,$datexUp,$product_code);
                              $RunQ2=$maineg->insertWarehouseLog($product_code,$product_name,$brand,$category,$unit,$cost_price,$Qty,$total,$Token_id,$suppleir_id,$suppleir_name,$user_login);

                              $RunQLog2=$maineg->insertPurchaseLog($Token_id,$product_name,$suppleir_name,$suppleir_id,$cost_price,$Qty,$total,$Amount_paid,$amount_due,$payment_method,$total_purchase);

                               $RunQchart=$maineg->chartofAccount($Account,$total_purchase);

                               $RunQLog1=$maineg->insertAccountLog($Token_id,$transaction_source,$total_purchase,$datex,$Account,$account_type,$user_login,$series_name);


                                if($RunQ==true && $RunQ2 == true && $RunQLog2 == true && $RunQchart == true && $RunQLog1 == true){
                                      echo '<script>swal("Success","New Product Stock Added","success");</script>';  
                                  } else{
                                      echo '<script>swal("Error","Unable to Add Product Stock","error");</script>';
                                 } 

                  }else{

                              // $move = move_uploaded_file($tmp,$loc);
                              $RunQ=$maineg->insertWarehouseStock($product_code,$product_name,$brand,$category,$description,$color,$size,$cost_price,$unit,$Qty,$Token_id,$suppleir_id,$suppleir_name,$user_login,$image);
                              $RunQ2=$maineg->insertWarehouseLog($product_code,$product_name,$brand,$category,$unit,$cost_price,$Qty,$total,$Token_id,$suppleir_id,$suppleir_name,$user_login);

                              $RunQLog2=$maineg->insertPurchaseLog($Token_id,$product_name,$suppleir_name,$suppleir_id,$cost_price,$Qty,$total,$Amount_paid,$amount_due,$payment_method,$total_purchase);

                               $RunQchart=$maineg->chartofAccount($Account,$total_purchase);

                               $RunQLog1=$maineg->insertAccountLog($Token_id,$transaction_source,$total_purchase,$datex,$Account,$account_type,$user_login,$series_name);

                               if($RunQ==true && $RunQ2 == true && $RunQLog2 == true && $RunQchart == true && $RunQLog1 == true){
                                   echo '<script>swal("Success","New Product Stock Added","success");</script>';  
                                } else{
                                    echo '<script>swal("Error","Unable to Add Product Stock","error");</script>';
                                 } 


                  }



                  
                }

                

              }
require_once 'view/add_warehouse.php';
break;



case 'addSupplier':
if(isset($_POST['submitSupplier'])){
               $supplier_name  = $_POST['supplier_name'];
               $company_address = $_POST['company_address'];
               $phone = $_POST['phone'];
               $email = $_POST['email'];
               $material  = $_POST['material'];
                $furt  = 'sup';
               $a=rand(10000,1000);
               $b=rand(100,1);
                $c=rand(1000,10);
                 $supplier_id= $furt."_".$b."_".$a;
                if(empty($supplier_name) || empty($company_address) || empty($phone)){
                  echo '<script>swal("error","one or more fields are empty","error");</script>'; 
                  // echo '<script>alert("one or more fields are empty")</script>';
                }else{
                $RunQ=$maineg->insertSupplier($supplier_id,$supplier_name,$phone,$email,$company_address,$material);  
                }
                if($RunQ==true){
                  echo '<script>swal("Success","Supplier Added Successfully","success");</script>';  
                } else{
                  echo '<script>swal("Error","Unable to Add Supplier","error");</script>';
                     } 
              }
require_once 'view/CreatSupplier.php';
break;


case 'SupplierPage':
require_once 'view/supplier.php';
break;


case 'returnOutPage':
require_once 'view/return_outward.php';
break;


case 'addReturnOuts':
 if(isset($_POST['ReturnOut'])){
               $product_name  = $_POST['product_name'];
               $datex = $_POST['datex'];
               $description = $_POST['description'];
               $category = $_POST['category'];
               $quantity  = $_POST['Qty'];
               $low_stock_level  = $_POST['stock_level']; 
               $furt  = 'stock';
               $a=rand(10000,1000);
               $b=rand(100,1);
                $c=rand(1000,10);
                 $item_id= $furt."_".$c."_".$a;
                 $regular_price  = $_POST['regular_price'];
                 $distributor_price  = $_POST['distributor_price'];
                 $staff = 'none';
                 $status  = 'In-Stock';
                if(empty($product_name) || empty($datex) || empty($description) || empty($category) || empty($quantity) || empty($low_stock_level) || empty($regular_price)|| empty($distributor_price)){
                  echo '<script>swal("error","one or more fields are empty","error");</script>'; 
                  echo '<script>alert("one or more fields are empty")</script>';
                }else{
                $RunQ=$maineg->insertSTOCK($product_name,$datex,$description,$category,$quantity,$low_stock_level,$item_id,$staff,$regular_price,$distributor_price,$status);  
                }
                if($RunQ==true){
                  echo '<script>swal("Success","New Product Added","success");</script>';  
                } else{
                  echo '<script>swal("Error","Unable to Add Product","error");</script>';
                     } 
              }
require_once 'view/createReturnOutward.php';
break;



case 'ProAnalysis':
require_once 'view/production_analysis.php';
break;


case 'RmateriALS':
require_once 'view/raw_material_stock.php';
break;


case 'Users':
 if (isset($_POST['del'])) {
    $DeleteCat = $_POST['del'];
    $Call = $maineg->Users_Delete($DeleteCat);
      if ($Call==true) {
     echo '<script>swal("Success","Succesfully Deleted","success")</script>';
     // echo '<script>window.location="index.php?action=Catery"</script>';
  }
}
require_once 'view/users.php';
break;



case 'AddNewUser':
if (isset($_POST['RegUser'])){
             $username = $_POST['username'];
             $fullname = $_POST['fullname'];  
             $password = $_POST['password'];
             $roll = $_POST['roll'];
             $datex = date('Y-m-d');
                if(empty($username) || empty($fullname) || empty($password) || empty($roll)){
                  echo '<script>swal("error","one or more fields are empty","error");</script>'; 
                  // echo '<script>alert("one or more fields are empty")</script>';
                }elseif($Run = $maineg->addNewUser($fullname,$password,$username,$datex,$roll)){
                if ($Run == true) {
                    echo '<script>swal("Success","User Added Successfully","success");</script>';
                   } else{
                  echo '<script>swal("Error","Unable to Add User","error");</script>';
        } 
    }
}
require_once 'view/add_user.php';
break;



case 'cus_Distribut':
if (isset($_POST['RegCus'])){
             $title  = $_POST['title'];
             $fullname  = $_POST['fullname'];  
             $phone = $_POST['phone'];
             $address = $_POST['address'];
             $level = $_POST['level'];
             $furt  = 'Cus';
             $a=rand(10000,1000);
             $b=rand(100,1);
             $c=rand(1000,10);
             $Account_id= $furt.$c.$b;
             $status = "Active";
                if(empty($title) || empty($fullname) || empty($phone) || empty($address) || empty($level)){
                  echo '<script>swal("error","one or more fields are empty","error");</script>'; 
                  // echo '<script>alert("one or more fields are empty")</script>';
                }elseif($Run = $maineg->insertCusDistribution($title,$fullname,$phone,$address,$Account_id,$level,$status)){
                   if ($Run == true) {
                  echo '<script>swal("Success","Customer Registered Successfully","success");</script>';
                   }else{
                  echo '<script>swal("Error","Unable to Register Customer","error");</script>';
            } 
      }
}
require_once 'view/customer_distributor.php';
break;


case 'addStaff':
if (isset($_POST['RegStaff'])){
             $first_name  = $_POST['first_name'];
             $phone  = $_POST['phone'];  
             $email   = $_POST['email'];
             $address = $_POST['address'];
             $deposit = $_POST['deposit'];
             // $passport = $_POST['passport'];
             // $teller   = $_POST['teller'];
             $passport      = $_FILES['passport']['name'];
             $tmp           = $_FILES['passport']['tmp_name'];
             $loc           = "view/product_image/".$passport;

             $teller         = $_FILES['teller']['name'];
             $tmp1           = $_FILES['teller']['tmp_name'];
             $loc1           = "view/product_image/".$teller;
             $furt  = 'CusDis';
             $a=rand(10000,1000);
             $b=rand(100,1);
             $c=rand(1000,10);
             $Account_id= $furt."_".$c."_".$b;
             $balance = $deposit;
             $status = "Active";
             $datex = date('Y-m-d');
             $Details = "First Deposit Through Registration";
                if(empty($name) || empty($phone) || empty($deposit)){
                  echo '<script>swal("error","one or more fields are empty","error");</script>'; 
                  echo '<script>alert("one or more fields are empty")</script>';
                }elseif(move_uploaded_file($tmp,$loc)){
                       move_uploaded_file($tmp1,$loc1);
                $Run = $maineg->insertCusDistribution($name,$phone,$email,$address,$Account_id,$passport,$teller,$deposit,$balance,$status);
                 if ($Run == true) {
                   $Main =  $maineg->cusLedger($datex,$Account_id,$balance,$Details,$passport);
                   if ($Main == true) {
                    echo '<script>swal("Success","Product Updated Successfully","success");</script>';
                   }
                  }    

                } else{
                  echo '<script>swal("Error","Unable to Update Product","error");</script>';
                     } 
}
require_once 'view/addStaff.php';
break;



case 'sales':
ini_set('display_errors', 1);
  ini_set('display_startup_errors', 1); 
  error_reporting(E_ALL);

if (isset($_POST['addCart'])){
    $product_code = $_POST['product_code'];
    $product_name   = $_POST['product_name'];
    $brand = $_POST['brand'];
    $category = $_POST['category'];
    $color = $_POST['color'];
    $size = $_POST['size']; 
    $quantity   = $_POST['qty'];
    $price   = $_POST['price'];
    $total   = $_POST['total'];
    $unit   = $_POST['unit'];
    $new_total = str_replace(',', '', $total);
    $cart_date =  date('Y-m-d'); 
    $sales_rep  = $_POST['sales_rep1'];


      if(empty($sales_rep) || empty($cart_date) ||  empty($product_code) || empty($product_name)|| empty($price) || empty($quantity) || empty($new_total)){
      echo '<script>swal("Error","one or more fields are empty","error");</script>'; 
        // echo '<script>alert("one or more fields are empty")</script>';
      }else{
        $Run = $maineg->addtocartInsert($product_code,$product_name,$brand,$category,$color,$size,$quantity,$price,$new_total,$cart_date,$sales_rep,$unit);
      
      if($Run == true) {
          echo '<script>swal("Success","New Item Added","success");</script>';
        } else{
        echo '<script>swal("Error","Unable to Perform Transaction","error");</script>';
          } 
}

}


 if (isset($_POST['del'])) {
    $DeleteCat = $_POST['del'];
    $Call = $maineg->cart_Delete($DeleteCat);
      if ($Call==true) {
     echo '<script>swal("Success","Item Removed","success")</script>';
     // echo '<script>window.location="index.php?action=Catery"</script>';
  }
}



  // if(isset($_POST['updatec'])){
  //    $id = $_POST['new_id'];
  //    $quantity = $_POST['new_qty'];
  //    $price = $_POST['new_price'];
  //    $total = $_POST['new_total'];

  //     $Call = $maineg->cart_Update($id, $quantity, $price, $total);

  //     if ($Call == true) {
  //           echo '<script>swal("Success",Item Qty Updated","success");</script>';
  //       } else{
  //         echo '<script>swal("Error","Unable to Update Qty","error");</script>';
  //            } 
  //     }






    if(isset($_GET['Emptycart'])){
     $maincl = new mainClass();
     $maincl->delete_All('addtocart','user',$_GET['Emptycart']);
        if($maincl == true){
         echo '<script>alert("Your Cart have Cleared")</script>'; 
         echo '<script>window.location="?action=checkOUT"</script>';
     }else{
         echo '<script>alert("opps unable to delete ")</script>';    
     }
  }



 


if (isset($_POST['updateQ'])) {
    $maincl = new mainClass();
    $GETall_ID = array($_GET['UpdateID']);
    for ($i=0; $i<sizeof($GETall_ID); $i++) { 
    $price=$_POST['price'];
    $qty=$_POST['qty'];
    $total = $price[$i]*$qty[$i];
    if(empty($qty[$i])){
          echo '<script>swal("warning","Sorry cant process empty field","warning");</script>';  
      }else{
         $RunQ=$maincl->Update_Cart($qty[$i],$price[$i],$total,$_GET['UpdateID'],$_SESSION['user']);
         if ($RunQ==true){
          echo '<script>alert("Item has been Updated")</script>'; 
          echo '<script>window.location="?action=checkOUT"</script>';
         }else{
          echo '<script>alert("opps unable to Udpdate Item ")</script>'; 
         }
      }
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
  $brand   = $_POST['brand'];
  $color   = $_POST['color'];
  $size   = $_POST['size'];
  $unit   = $_POST['unit'];
  $price   = $_POST['price'];
   
  $qty   = $_POST['quantity'];
  $total   = $_POST['total'];
  $amount_paid = $_POST['amount_paid'];
  $grand_total = $_POST['grand_total'];
  $customer = explode('-', $customer_name);
  $cusName = $customer[0]." ".$customer[1];
  $furt  = 'Inv';
  $a=rand(10000,1000);
  $b=rand(100,1);
  $c=rand(1000,10);
  $invoice_id = $furt."_".$c."_".$b;
  $_SESSION['In_id']= $invoice_id;
  $newTotal = str_replace(',', '', $total);
   
  $due = $grand_total - $amount_paid;
  $status = "Active";
  $datex = date('Y-m-d');

  $Account = "4000_SALES";
  $Account2 = "1200_ACCOUNT_RECEIVABLE";


   // $furt1  = 'Sales';
   // $a1=rand(10000,1000);
   // $b1=rand(100,1);
   // $c1=rand(1000,10);
   $transaction_id= $_SESSION['In_id'];
   $transaction_source1 = "CREDIT SALES";
   $description = "Sales On Credit";
   $mode_payment1 = "Credit";
   $account_type1 = "Account Receivable";
   $account_type = "Sales";
   $series_name1 ="Asset";
   $new_due =  $due;
   $customer_name_new_id = $customer_name_new;

  $transaction_source = "SALES";
  $series_name = "Income";  


   
  $countLoop=1;
  for($i=0; $i<count($price);$i++){
  $ItemPrice  = $price[$i];
  $Itemproduct_code  = $product_code[$i];
  $itemcategory   = $category[$i];
  $itemproduct_name   = $product_name[$i];
  $itembrand  = $brand[$i];
  $itemcolor  = $color[$i];
  $itemsize   = $size[$i];
  $itemunit   = $unit[$i];
  $quantity   = $qty[$i];
  $Itemtotal  = $total[$i];
  // $subTotal   = $quantity*$ItemPrice;
                            
  // $Details = "First Deposit Through Registration";
      if(empty($sales_rep) || empty($order_date) ||  empty($product_code) || empty($product_name)|| empty($price) || empty($qty) || empty($total)){
      echo '<script>swal("Error","one or more fields are empty","error");</script>'; 
        // echo '<script>alert("one or more fields are empty")</script>';
      }elseif($type == "Walk-in Customer"){
        $Run = $maineg->insertInvoiceDetails($_SESSION['In_id'],$Itemproduct_code,$itemproduct_name,$itembrand,$itemcategory,$mode_payment,$quantity,$ItemPrice,$Itemtotal,$amount_paid,$due,$order_date,$customer_name_new_id,$customer_name_new,$address_new,$phone_new,$sales_rep,$itemcolor,$itemsize,$itemunit);
      
      if ($Run == true) {
         $Main =  $maineg->insertInvoicelog($_SESSION['In_id'],$sales_rep,$ItemPrice,$timex,$order_date,$Itemtotal,$amount_paid,$due);
         $RunQ=$maineg->UpdateStocksale($quantity,$Itemproduct_code);
         // $RunQ1=$maineg->UpdateStockprosale($quantity,$Itemproduct_code);
         $RunQchart=$maineg->chartofAccount($Account,$grand_total);
         $RunQLog1=$maineg->insertAccountLog($transaction_id,$transaction_source,$grand_total,$datex,$Account,$account_type,$sales_rep,$series_name);

           if($mode_payment == "Credit" ){
            $RunQchart2=$maineg->chartofAccount($Account2,$due);
            $RunQLog2=$maineg->insertAccountLog($transaction_id,$transaction_source1,$grand_total,$datex,$Account2,$account_type1,$sales_rep,$series_name1);

           }

          $clear_out = $maineg->delete_All('addtocart','sales_rep',$sales_rep);
         if ($Main == true && $RunQ==true && $RunQchart == true && $RunQLog1 == true) {
          echo '<script>swal("Success","Sales Successful","success");</script>';
           }
        } 

        }elseif($type == "Regular Customer"){

        $Run = $maineg->insertInvoiceDetails($_SESSION['In_id'],$Itemproduct_code,$itemproduct_name,$itembrand,$itemcategory,$mode_payment,$quantity,$ItemPrice,$Itemtotal,$amount_paid,$due,$order_date,$customer[2],$cusName,$address,$phone,$sales_rep,$itemcolor,$itemsize,$itemunit);
      
      if ($Run == true) {
         $Main =  $maineg->insertInvoicelog($_SESSION['In_id'],$sales_rep,$ItemPrice,$timex,$order_date,$Itemtotal,$amount_paid,$due);
         $RunQ=$maineg->UpdateStocksale($quantity,$Itemproduct_code);
         // $RunQ1=$maineg->UpdateStockprosale($quantity,$Itemproduct_code);
         $RunQchart=$maineg->chartofAccount($Account,$grand_total);
         $RunQLog1=$maineg->insertAccountLog($transaction_id,$transaction_source,$grand_total,$datex,$Account,$account_type,$sales_rep,$series_name);

         if($mode_payment == "Credit" ){
            $RunQchart2=$maineg->chartofAccount($Account2,$due);
            $RunQLog2=$maineg->insertAccountLog($transaction_id,$transaction_source1,$grand_total,$datex,$Account2,$account_type1,$sales_rep,$series_name1);

           }

          $clear_out = $maineg->delete_All('addtocart','sales_rep',$sales_rep);
         if ($Main == true && $RunQ==true && $RunQchart == true && $RunQLog1 == true) {
          echo '<script>swal("Success","Sales Successful","success");</script>';
         }


        }  

      } else{
        echo '<script>swal("Error","Unable to Perform Transaction","error");</script>';
          } 
          $countLoop++;
      }
}
require_once 'view/sales.php';
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
            echo '<script>window.location="?action=sales"</script>';
        } else{
          echo '<script>swal("Error","Unable to Update Qty","error");</script>';
             } 
      }  
require_once 'view/editcart.php';
break;

 
            
case 'Order':
if (isset($_POST['updateO'])){
    $maincl = new mainClass();
    $select = $maincl->Fetch_Orders();
    $jobID = $_GET['Job_id'];
    $Order_Status='Paid';
   //echo '<script>alert("'.$total.'")</script>'; 
      if(empty($Order_Status)){
           echo '<script>swal("warning","Sorry cant process empty field","warning");</script>';  
      }else{
         $RunQ=$maincl->Update_Order_JOB($Order_Status,$jobID);
         if ($RunQ==true){
           echo '<script>alert("Item has been Updated")</script>'; 
           echo '<script>window.location="?action=Order"</script>';
         }else{
          echo '<script>alert("opps unable to Udpdate Item ")</script>';   
      }
  }   
}

require_once 'view/Order.php';
break;

case 'Customer':
 if (isset($_POST['del'])) {
    $DeleteCat = $_POST['del'];
    $Call = $maineg->Customer_Delete($DeleteCat);
      if ($Call==true) {
     echo '<script>swal("Success","Succesfully Deleted","success")</script>';
     // echo '<script>window.location="index.php?action=Catery"</script>';
  }
}
require_once 'view/Customers.php';
break;



case 'Previlige':
// if (isset($_POST['AssignPrivilege'])){
//              $Privilege  = $_POST['Privilege'];
//              $username  = $_POST['username'];  
//              $user = explode('-', $username);
//              $user[0];
//                 if(empty($Privilege) || empty($username)){
//                   echo '<script>swal("error","one or more fields are empty","error");</script>'; 
//                   // echo '<script>alert("one or more fields are empty")</script>';
//                 }elseif ($maineg->check_if_Record_Existtwo('priviledges_assigned','username',$user[1],'privileges',$Privilege) == true) {
//                   echo '<script>swal("error","This Privilege Already Assigned To This User","error");</script>'; 
//                 }elseif($Run = $maineg->AssignPri($user[1],$Privilege)){
//                    if ($Run == true) {
//                   echo '<script>swal("Success","Privilege Assigned Successfully","success");</script>';
//                    }
//             }else{
//               echo '<script>swal("Error","Unable to Assign Priviledge","error");</script>'; 

//       }
// }
if(isset($_POST['AssignPrivilege'])){
  // $staffIDD = $_POST['staffIDD'];
  // $PrivilegName = $_POST['PrivilegName'];
   
   

             @$Privilege  = $_POST['PrivilegName'];
             @$username  = $_POST['staffIDD'];  
             $user = explode('-', $username);
             $user[1];

     // $data = $maineg->select_allPay($monthYEAR);  
      if(empty($Privilege)){
        echo '<script>swal("error","Please select a minimum of one priviledge","error");</script>'; 
        // echo '<script>alert("one or more fields are empty")</script>';
      }else{
           $itemIDsize = count($Privilege);
            for ($i = 1; $i < sizeof($Privilege); $i++) {
                $GetItem_Priv = $Privilege[$i];

            if ($maineg->check_if_Record_Existtwo('priviledges_assigned', 'username', $user[1], 'privileges',$GetItem_Priv) == true) {
              echo '<script>swal("error","some priviledge has been Assign And will not Assign Again","error");</script>';
            }else{
            $RunQ=$maineg->AssignPri($user[1],$GetItem_Priv);
            $itemIDsize--;
            if ($RunQ == true) {
              echo '<script>swal("Success","Privilege Assigned Successfully ","success");</script>'; 
            }else{
             echo '<script>swal("Error","Unable to Assign Priviledge","error");</script>';
           } 

         }

       }
    }




  }
require_once 'view/AssignPrivilege.php';
break;

case 'PreviligeAdd':
require_once 'view/Privilege.php';
break;

case 'CustomerL':
require_once 'view/customer_ledger.php';
break;

case 'viewQuote':
require_once 'view/viewQuotes.php';
break;

case 'Invoice':
require_once 'view/generateInvoice.php';
break;

case 'InvoiceDetails':
require_once 'view/invoiceDetails.php';
break;

case 'genQuote':
require_once 'view/generateQuote.php';
break;

case 'quoteDetails':
require_once 'view/quoteDetails.php';
break;

case 'refer':
require_once 'view/referal.php';
break;

case 'seePro':
require_once 'view/productDetails.php';
break;


case 'salesReport':
require_once 'view/salesReport.php';
break;



case 'stockinReport':
require_once 'view/stockinReports.php';
break;


case 'seeUser':
require_once 'view/userDetails.php';
break;

case 'seePartner':
require_once 'view/partnerDetails.php';
break;

case 'seeReferal':
require_once 'view/referDetails.php';
break;

case 'Bonus':
require_once 'view/rewards.php';
break;
    
case 'addPro':
      if(isset($_POST['createproduct'])){
               $name  = $_POST['name'];
               $brand  = $_POST['brand'];  
               $furt  = 'Pro';
               $a=rand(10000,1000);
               $b=rand(100,1);
               $c=rand(1000,10);
               $item_id= $furt."-".$c.$a;
               $description   = $_POST['description'];
               $color = $_POST['color'];
               $size = $_POST['size'];
               $category = $_POST['category'];
               $unit = $_POST['unit'];  
               // $user_login = $_POST['user_login'];
               $user_login = "Admin";
     
               $image         = $_FILES['image']['name'];
               $tmp           = $_FILES['image']['tmp_name'];
               $loc           = "view/product_image/".$image;
               //  $datex = date('Y-m-d');
               // $status  = 'In-Stock';
               // $total  = $regular_price * $stock;
                if(empty($name) || empty($description)  || empty($item_id) || empty($image)){
                  echo '<script>swal("error","one or more fields are empty","error");</script>'; 
                  echo '<script>alert("one or more fields are empty")</script>';
                 }elseif(move_uploaded_file($tmp,$loc)){
                $Run = $maineg->insertProduct($item_id,$name,$brand,$description,$color,$size,$category,$image,$unit,$user_login);
                 if ($Run == true) {
                  echo '<script>swal("Success","New Product Added","success");</script>';
                   // $Main =  $maineg->insertSTOCK($name,$datex,$description,$color,$category,$stock,$min_stock,$item_id,$regular_price,$distributor_price,$status);
                   // $RunQ2=$maineg->insertSTOCKlog($name,$datex,$description,$color,$category,$stock,$item_id,$regular_price,$distributor_price,$total);
                   // if ($Main == true && $RunQ2 == true) {
                    
                   // }
                  } else{
                  echo '<script>swal("Error","Unable to Add Product","error");</script>';
                     }    

                } else{
                  echo '<script>swal("Error","Unable to Add Product","error");</script>';
                     } 
              }
require_once 'view/addProduct.php';
break;


case 'addCategory':
      if(isset($_POST['addCategory'])){
          $name = $_POST['name'];
          // $subcategory = $_POST['subcategory'];
          $date_created  = date('Y-m-d');
      if(empty($name)){
          echo '<script>swal("error","one or more field are empty","error");</script>'; 
    }elseif($maineg->insertCategory($name,$date_created)){
          echo '<script>swal("Success","New category Added","success");</script>';   
                } 
    else{
         echo '<script>swal("Error","Unable to Add category","error");</script>';
                } 
        }
require_once 'view/addCategory.php';
break;

case 'addRawMatCategory':
      if(isset($_POST['addMate'])){
          $material_cate = $_POST['material_cate'];
          $material_type = $_POST['material_type'];
          $date_created  = date('Y-m-d');
      if(empty($material_cate)){
          echo '<script>swal("error","one or more field are empty","error");</script>'; 
    }elseif($maineg->insertMaterialCategory($material_cate,$material_type,$date_created)){
          echo '<script>swal("Success","New material category Added","success");</script>';   
                } 
    else{
         echo '<script>swal("Error","Unable to Add category","error");</script>';
                } 
        }
require_once 'view/addRawMatCategory.php';
break;

case 'addSize':
            if(isset($_POST['addSize'])){
               $name = $_POST['name'];
               $date_created  = date('Y-m-d');
                if(empty($name)){
                  echo '<script>swal("error","one or more field are empty","error");</script>'; 
                }elseif($maineg->insertSize($name,$date_created)){
                        echo '<script>swal("Success","New Product Size Added","success");</script>';
                } 
                else{
                  echo '<script>swal("Error","Unable to Add  Product Size","error");</script>';
                     } 
                  }
require_once 'view/addSize.php';
break;

case 'addType':
                if(isset($_POST['addType'])){
                     $name = $_POST['name'];
                     $date_created  = date('Y-m-d');
                if(empty($name)){
                  echo '<script>swal("error","one or more field are empty","error");</script>'; 
                }elseif($maineg->insertType($name,$date_created)){
                        echo '<script>swal("Success","New Product Type Added","success");</script>';
                } 
                else{
                  echo '<script>swal("Error","Unable to Add Product Type","error");</script>';
                     } 
                  }
require_once 'view/addType.php';
break;

case 'addTemplate':
     if(isset($_POST['addTemplate'])){
      $name     = $_POST['name'];
      $category = $_POST['category'];
      $type     = $_POST['type'];
      $image    = $_FILES['image']['name'];
      $tmp      = $_FILES['image']['tmp_name'];
      $loc      = "view/product_image/".$image;
       if(empty($name) || empty($category) ||  empty($image) || empty($type)){
                  echo '<script>swal("error","one or more fields are empty","error");</script>'; 
                  echo '<script>alert("one or more fields are empty")</script>';
                }elseif(move_uploaded_file($tmp,$loc)){
                        $maineg->insertTemplate($name,$category,$type,$image);
                        echo '<script>swal("Success","New Template Added","success");</script>';
                } 
                else{
                  echo '<script>swal("Error","Unable to Add Template","error");</script>';
          } 
     } 
require_once 'view/addTemplate.php';
break;

case 'assign_job':
if(isset($_GET['ConfirmJobs'])){
     $job_confirm = "Confirmed";
     $job_status  = "completed";

  $RunQ =$maineg->ComfirmJobs_Add_MONEY($_GET['Amount'],$_GET['partnerName']);
  if ($RunQ==true) {
    $RunQ2 =$maineg-> UPdate_status($job_confirm,$job_status,$_GET['ConfirmJobs']);
    if ($RunQ2==true) {
       echo "<script>alert('Job Confirmed Successfully')</script>";
    }else{
       echo "<script>alert('Job Confirmation not Successful Something went wrong please try again !')</script>";
    }
  }
}

require_once 'view/assign_Job.php';
break;
case 'jobAssign':
            if(isset($_POST['Assign'])){
                     $image         = @$_POST['image'];
                     $type          = @$_POST['type'];
                     $user          = @$_POST['user'];
                     $Order_ID      = @$_POST['Order_ID'];
                     $price         = @$_POST['price'];
                     $quantity      = @$_POST['quantity'];
                     $total         = @$_POST['total'];
                     $uplod_file    = @$_POST['uplod_file']; 
                     $Job_id        = @$_POST['Job_id'];
                     $job_status    = "in_progress";
                     $Job_date      = date('Y-m-d');
                     $job_pay_Amount= @$_POST['Jobpayment'];
                     $partner       = @$_POST['partner'];
                     $assign_status = 'Assigned';
                     $job_done      = "Not Done";
                     $job_confirm   = "Not Confirmed";
                if(empty($user)){
                  echo '<script>swal("error","one or more field are empty","error");</script>';
                }elseif($Run = $maineg->insert_Assign_Jobs($image,$type,$user,$Order_ID,$price,$quantity,$total,$uplod_file,$Job_id,$job_status,$Job_date,$job_pay_Amount,$partner,$assign_status,$job_done,$job_confirm)){
                  if ($Run == true) {
                   $Main =  $maineg->Update_Assign_JOB($assign_status,$Job_id);
                   if ($Main == true) {
                    echo '<script>alert("Job Assign Successfull")</script>';
                      echo '<script>window.location="?action=assign_job"</script>'; 
                   }
                  }         
                }else{
                  echo '<script>swal("Error","Unable to Assign a Job","error");</script>';
                     } 
                  }
require_once 'view/Job_Asigning.php';
break;





case 'sendQuote':
     if(isset($_POST['update'])){
     $name        = $_POST['name'];
     $email       = $_POST['email'];
     $phone       = $_POST['phone'];
     $address     = $_POST['address'];
     $description = $_POST['description'];
     $qty         = $_POST['qty'];
     $design      = $_POST['design'];
     $type        = $_POST['type'];
     $price       = $_POST['price'];
     $total       = $qty*$price;
     $QuoteID     = $_POST['QuoteID'];
     $Quote_date  = $_POST['Quote_date'];
     if (empty($name) || empty($email) || empty($phone) || empty($address) || empty($description) || empty($qty) || empty($design) || empty($type) || empty($price) || empty($QuoteID) || 
         empty($Quote_date)){
             echo '<script>alert("one or more fields are empty")</script>';      
     }else{
        $maineg->Update_Quote($name,$email,$phone,$address,$description,$qty,$design,$type,$price,$total,$QuoteID,$Quote_date,$_GET['edits']);
        echo '<script>window.location="?action=viewQuote"</script>';
        }
      }
require_once 'view/Quote_Send_Update.php';
break;



case 'OrderSUp':
            if(isset($_POST['UpdateOrder'])){
                     $image         = $_POST['image'];
                     $type          = $_POST['type'];
                     $user          = $_POST['user'];
                     $Order_ID      = $_POST['Order_ID'];
                     $price         = $_POST['price'];
                     $quantity      = $_POST['quantity'];
                     $total         = $_POST['total'];
                     $Job_id        = $_POST['Job_id'];
                     $Order_Status  = "Paid";
                if(empty($image) ||empty($type) ||empty($user)){
                  echo '<script>swal("error","one or more field are empty","error");</script>'; 
                }elseif($Run = $maineg->Update_Order($Order_Status,$Job_id)){
                    echo '<script>alert("Order Updated Successfull")</script>';
                      echo '<script>window.location="?action=Order"</script>';      
                } 
                else{
                  echo '<script>swal("Error","Unable to Assign a Job","error");</script>';
                     } 
                  }
require_once 'view/Order_Status_Updates.php';
break;

case 'credit':
require_once 'view/credit.php';
break;

case 'debit':
  if(isset($_POST['debit'])) {
    $conn = mysqli_connect($maineg->host,$maineg->user,$maineg->password,$maineg->DB);
      $sql = "SELECT a.username,a.email, a.lastname, a.firstname,a.phone,a.AccountName,a.AccountNumber,a.Bankname,a.serviceType,a.companyName,a.balance,a.partnerID,a.status,a.address,a.city,b.username,b.amount,b.request_status,b.date_request,b.debit_date FROM partner AS a, widthdrowal_request AS b WHERE a.username = '".$_GET['debitpartner']."' AND b.username = '".$_GET['debitpartner']."'";
      $qu = $conn->query($sql);
      if ($qu->num_rows > 0) {
        if ($gt = $qu->fetch_assoc()) {
            $damount = $_POST['amount'];
            $actual_amount = $gt['balance'];
            $mainamount = $actual_amount - $damount;
            $request_stats = "debited";
            $debited_date = date('d-D/M/Y h:m:s');
            $sql = "UPDATE partner SET balance ='$mainamount' WHERE username = '".$gt['username']."'";
            $sql1 = "UPDATE widthdrowal_request SET request_status='$request_stats', debit_date='$debited_date' WHERE username = '".$gt['username']."'";
            $qu = $conn->query($sql) or print(mysqli_error($conn));
            $qu1 = $conn->query($sql1) or print(mysqli_error($conn));
               if ($qu == true && $qu1 == true) {
            require './PHPMailer-5.2-stable/PHPMailerAutoload.php';
            $mail = new PHPMailer;
            //$mail->SMTPDebug = 3;                               // Enable verbose debug output
            //$mail->SMTPDebug = SMTP::DEBUG_SERVER;
            $mail->isSMTP();                                      // Set mailer to use SMTP
            $mail->Host = 'mail.fortuneinvestment.co';  // Specify main and backup SMTP servers
            $mail->SMTPAuth = true;                               // Enable SMTP authentication
            $mail->Username = 'contact@fortuneinvestment.co';                 // SMTP username
            $mail->Password = 'fortune@2020';                           // SMTP password
            $mail->SMTPSecure = 'ssl';                            // Enable TLS encryption, `ssl` also 
            $mail->Port = 465;                                    // TCP port to connect to
            $mail->setFrom('contact@fortuneinvestment.co','contact@fortuneinvestment.co');
            $mail->addAddress($gt['email']);     // Add a recipient
            //$mail->addAttachment('/tmp/image.jpg', 'new.jpg');    // Optional name
            $mail->isHTML(true);
            // Set email format to HTML
            $mail->Subject = "Debit Alert";
            $mail->Body    =  '

               <div style="background-color:black;color:white;font-weight:bold;text-align:center; line-height:50px;">Debit alert information</div>

                Your Account has been Debited with the Sum of: "'.$damount.'" Your new Balance is "'.$mainamount.'"

';

$mail->AltBody = 'Partner Debit alert message ';
if(!$mail->send()) {
   echo 'Message could not be sent.';
   echo 'Mailer Error: ' . $mail->ErrorInfo;
} else {          
          echo '<script>alert("Account Debited Successfully!!")</script>';
          echo '<script>window.location="index.php?action=WithDraw"</script>';
          //echo'<script> swal("success","Message Delievered","success");</script>';
        }
      }
    }
  }
}
        // else{
     //          //echo $myclass->errormessage();

     //             echo '<script>alert("error")</script>';
     //            print(mysqli_error($conn));
     // }

require_once 'view/Debit.php';
break;

case 'WithDraw':

$userdetail = $maineg->dataselect2('widthdrowal_request');

require_once 'view/withdrawal_Request.php';
break;

case 'QuoteReply':
require_once 'view/Quote_Reply.php';
break;
  
case 'logout':
require_once 'view/logout.php';
break;

case 'Message':
require_once 'view/message.php';
break;

case 'messageCustomer':
     if(isset($_POST['send_message'])){
     $customer     = $_POST['user'];
     $partner      = $_POST['partner'];
     $job_id       = $_POST['Job_id'];
     $message      = $_POST['message'];
     $message_date = date('Y-m-d');
     if (empty($customer) || empty($partner) || empty($message)){
             echo '<script>alert("one or more fields are empty")</script>';      
     }else{
        $maineg->Insert_Message_Correction($customer,$partner,$job_id,$message,$message_date);
        echo '<script>window.location="?action=Message"</script>';
        } 
    }
require_once 'view/messageCustomer.php';
break;

// case 'newsletter':
// require_once 'view/Newsletter.php';
// break;


case 'ChartofAccount':  
require_once 'view/chart_of_account.php';
break;


case 'ChartAcctReport':  
require_once 'view/chart_of_accountReport.php';
break;


case 'ProfitLossAccount':  
require_once 'view/profit_loss_statement.php';
break;


case 'Ledger':  
require_once 'view/ledger.php';
break;


case 'creditSales':  
require_once 'view/credit_sales.php';
break;

case 'creditSalesCus':  
require_once 'view/credit_sales_customer.php';
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

   // $bank = $_POST['bank_name'];
   // $bank_deatils = explode('-', $bank);
   // $bank_id = $bank_deatils[0];
   // $bank_name = $bank_deatils[1];

   // $notin = 0.00;

   // $DBinfo = $maineg->Targeted_information('customer_ledger','account_id',$customer);
   // $balance = $DBinfo['balance'] - $due;
   
   $invoice_bal = $due_balance - $due;


   // $result = $maineg->Get_balanceCredit($customer); 
   // $result1 = $maineg->Get_balanceDebit($customer); 
   // foreach ($result1 as $k => $v) {}                             
   // foreach ($result as $k => $v) {}
   // $balance1 = $result[$k]['credit'] + $due;
   // $balance2 = $result1[$k]['debit'];
   // $initial_balance = $balance1 - $balance2; 
   // $currentBalance = $initial_balance;

   // $resultn = $maineg->Get_bank_balanceCredit($bank_id); 
   // $resultn1 = $maineg->Get_bank_balanceDebit($bank_id); 
   // foreach ($resultn1 as $k => $v) {}                             
   // foreach ($resultn as $k => $v) {}
   // $balancen1 = $resultn[$k]['amount'];
   // $balancen2 = $resultn1[$k]['amount'];

   //$DBinfo4 = $maineg->Targeted_information('invoice_details','invoice_id',$invoice_id);

   $deposit_date = date('Y-m-d');
   
   $transcation_type = "Credit";
   $transaction_source1 = "Due Invoice Payment";

     $type1 = "Credit Payment";
 
   // $initial_balancen = $balancen1;
   // $currentBalancen = $amount + $balancen1 - $balancen2;

    // $image         = $_FILES['image']['name'];
    // $tmp           = $_FILES['image']['tmp_name'];
    // $loc           = "view/product_image/".$image;
    
   // $msg_body = 'Hi '.$customer_name.' We received payment credit of '.number_format($due).', and Your Invoice Balance is '.number_format($invoice_bal).', Thanks.';

   // $mode_payment ="Cash";
   $datex = date('Y-m-d H:i:s');
   $status = 'settled';
    if(empty($invoice_id)  || empty($sales_date) || empty($due)){
       echo '<script>swal("Error","one or more fields are empty","error");</script>'; 
    }elseif($due > $due_balance){

         echo '<script>swal("Error","Amount Entered Exceeds Due Amount for this Invoice","error");</script>'; 

    }elseif($due < 0){

         echo '<script>swal("Error","Amount Must be greater than 0","error");</script>'; 

    }elseif($RunUlog=$maineg->UpdateDueInvoicelog($invoice_id,$due)){

        $RunUNew=$maineg->UpdateDueInvoiceNew($invoice_id,$due);

        // $DBinfo = $maineg->Targeted_information('admin','username',$_SESSION['Admin']);
          // $DBinfo1 = $maineg->Targeted_information('customer_table','customer_code',$customer);



        // if(!empty($customer)){
                                    
        //      $RunUNew=$maineg->addcREDIT2244($DBinfo1['customer_code'],$due,$notin,$currentBalance);
        // }


        //   if(!empty($phone)){

        //      $RunQ=$maineg->AUTOMATIC_SMS_API($phone,$msg_body);
        // }

        // if(!empty($bank_id) && !empty($bank_id)){
        //    move_uploaded_file($tmp,$loc);
        //   $RunQR=$maineg->insertBankLog($bank_name,$bank_id,$transcation_type,$transaction_id,$due,$description,$initial_balancen,$currentBalancen,$deposit_date,$image); 
        //      $RunQchart2=$maineg->chartofAccount($bank_id,$due);
        // }

     if ($RunUlog==true && $RunUNew==true) {
       $RunQ1=$maineg->chartofAccountMinus($account_id,$due);
       $RunQ3=$maineg->chartofAccount($account_id2,$amount);
       $RunQ2=$maineg->insertAccountLog($transaction_id,$transaction_source,$amount,$sales_date,$account_id,$account_type,'none',$series_name);
       // $RunQLogPay=$maineg->insertReceivable($deposit_date,$transaction_source1,$type1,$due,'0.00',$invoice_bal,$customer,$customer_name,'null',$account_id,$invoice_id,$user_login);
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



case 'Returnitem':
 if(isset($_POST['returnItems'])){
 $return_date    =  $_POST['return_date'];
 $invoice_id    =  $_POST['invoice_id'];
 $product_name   = $_POST['product_name'];
 $customer_name  = $_POST['customer_name'];
 $return_description = $_POST['description'];
 $return_quantity = $_POST['Qty'];
 $item_code = $_POST['p_code'];
 $size = $_POST['size'];
 $color = $_POST['color'];
 $brand  = $_POST['brand'];
 $unit  = $_POST['unit'];
 $category  = $_POST['category'];
 // $return_kg = $_POST['return_kg'];
 // $return_packet = $_POST['return_packet'];
 $furt  = 're';
 $a=rand(1000,100);
 $b=rand(100,1);
 $c=rand(1000,10);
 $reference_id = $furt.$c.$a;
 // $delivery = 'returned';
 $status = 'unsettled';
 $datex = date('Y-m-d');

  if(empty($return_date) || empty($product_name) || empty($customer_name) || empty($item_code)){

      echo '<script>swal("error","one or more fields are empty","error");</script>'; 

  }else{

  $RunQ=$maineg->insertReturn($reference_id,$invoice_id,$return_date,$product_name,$brand,$customer_name,$return_description,$return_quantity,$category,$unit,$color,$size,$status,$item_code);
   // $RunU=$maineg->AddreturnToInvoice($invoice_id,$item_code,$delivery,$datex);
  if($RunQ == true){
     
    echo '<script>swal("Success","Product Return  Recorded Successfully","success");</script>';  

  } else{

    echo '<script>swal("Error","Unable to Add Return Record","error");</script>';

       } 
  }
  
}
require_once 'view/returned_item.php';
break;


case 'editVendor': 
if(isset($_POST['submit_vendor'])){
   $supplier_id = $_POST['supplier_id'];
   $contact_name  = $_POST['contact_name'];
   $phone = $_POST['phone'];
   $email = $_POST['email'];
   $material = $_POST['material'];
   $company_address  = $_POST['company_address'];
    if(empty($supplier_id)){
      echo '<script>swal("error","one or more fields are empty","error");</script>'; 
    }else{

    $RunQ=$maineg->VendorUpdate($contact_name,$phone,$email,$company_address,$material,$supplier_id);  
    }
    if($RunQ==true){
      echo '<script>swal("Success","Vendor Details Updated Successfully","success");</script>';  
    } else{
      echo '<script>swal("Error","Unable to Update Vendor Details","error");</script>';
         } 
  }
require_once 'view/edit_vendor.php';
break;


case 'viewReturned':  
require_once 'view/view_returned.php';
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
       // if ($RunU==true) {
        // echo '<script>swal("Success","Update Successful","success");</script>';
         // $RunQ1=$maineg->UpdateReturnPur($item_code,$quantity);
         if ($RunU==true) {

                  echo '<script>swal("Success","Update Successful","success");</script>';

              }else{

                  echo '<script>swal("Error","Unable to Perform Update","error");</script>';

            }
          // } 
        }else{
                  echo '<script>swal("Error","Unable to Perform Update","error");</script>';
    } 
}
require_once 'view/settleReturn.php';
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
     $request_no= $furt.$c.$a;
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
        // $Run = $maineg->insertPaymentBank($datex,$invoice_no,$customer_name,$amount,$description,$request_no,$type,$bank_name,$record_by,$trans_type);
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


// case 'AddPayroll':  
//    if(isset($_POST['suBMitPayroll'])){
//    $Employee  = $_POST['Employee'];
//    $basic_salary = $_POST['basic_salary'];
//    $allowance = $_POST['allowance'];
//    $other  = $_POST['other'];
//    @$loan_amount  = $_POST['loan_amount'];
//    @$amountPaid = $_POST['amountPaid'];
//    @$loan  = $_POST['loan'];
//    $gross_pay  = $_POST['gross_pay'];
//    $sanction  = $_POST['sanction'];
//    $other_dues  = $_POST['other_dues'];
//    $total_dues  = $_POST['total_dues'];
//    $net_pay  = $_POST['net_pay'];
//    $years  = $_POST['years'];
//    $months  = $_POST['months'];
   
//     }elseif ($maineg->check_if_Record_Exist2('payroll', 'month_year', $date_month,'staff_id',$employeeName[0]) == true) {
//           echo '<script>swal("Warning","Sorry Staff payroll already exist for This Month, check another staff!!!","warning");</script>'; 
//     }else{
//     if ($maineg->check_if_Record_Exist('payroll', 'month_year', $date_month) == true) {
//       if ($maineg->check_if_Record_Exist2('staff_loan_table', 'staff_id',$employeeName[0],'state','active') == true) {
//          $RunQ=$maineg->insertSalaryStaffLoan($date_month,$employeeName[1],$basic_salary,$allowance,$other,$gross_pay,$sanction,$other_dues,$loan,$type,$total_dues,$net_pay,$employeeName[0]);
//             if ($RunQ == true) {
//                $RunQ1=$maineg->insertSalaryUpdate($date_month,$net_pay);
//                if($getLoan >= $loan_amount){
//                     $RunQ2=$maineg->insertLoanUpdate($loan,$state1,$staffID);
//                   }else{
//                     $RunQ2=$maineg->insertLoanUpdate($loan,$state2,$staffID);
//                   }

//                if($RunQ1==true){
//                      echo '<script>swal("Success","Worker Record Added Successfully","success");</script>'; 
//               } else{
//                      echo '<script>swal("Error","Unable to Add Worker Record","error");</script>';
//               } 
//            }

//       }else{

//             $RunQ=$maineg->insertSalaryStaff($date_month,$employeeName[1],$basic_salary,$allowance,$other,$gross_pay,$sanction,$other_dues,$type,$total_dues,$net_pay,$employeeName[0]);
//             if ($RunQ == true) {
//                $RunQ1=$maineg->insertSalaryUpdate($date_month,$net_pay);
//                if($RunQ1==true){
//       echo '<script>swal("Success","Worker Record Added Successfully","success");</script>'; 
//               } else{
//                echo '<script>swal("Error","Unable to Add Worker Record","error");</script>';
//               } 
//            }
//       }
       

//     }else{


//       if ($maineg->check_if_Record_Exist2('staff_loan_table', 'staff_id',$employeeName[0],'state','active') == true) {
//          $RunQ=$maineg->insertSalaryStaffLoan($date_month,$employeeName[1],$basic_salary,$allowance,$other,$gross_pay,$sanction,$other_dues,$loan,$type,$total_dues,$net_pay,$employeeName[0]);
//             if ($RunQ == true) {
//                $RunQ1=$maineg->insertSalarylog($date_month,$net_pay,$status,$type);
//                if($getLoan >= $loan_amount){
//                     $RunQ2=$maineg->insertLoanUpdate($loan,$state1,$staffID);
//                   }else{
//                     $RunQ2=$maineg->insertLoanUpdate($loan,$state2,$staffID);
//                   }
//                if($RunQ1==true){
//               echo '<script>swal("Success","Staff Record Added Successfully","success");</script>'; 
//               } else{
//                echo '<script>swal("Error","Unable to Add Worker Record","error");</script>';
//               } 
//            }

//       }else{

//         $RunQ=$maineg->insertSalaryStaff($date_month,$employeeName[1],$basic_salary,$allowance,$other,$gross_pay,$sanction,$other_dues,$type,$total_dues,$net_pay,$employeeName[0]);
//       if ($RunQ == true) {
//          $RunQ1=$maineg->insertSalarylog($date_month,$net_pay,$status,$type);
//          if($RunQ1==true){
//   echo '<script>swal("Success","Staff Record Added Successfully","success");</script>';
//            } else{
//             echo '<script>swal("Error","Unable to Add Worker Record","error");</script>';
//           } 
//       }
        
//       }

//     } 
//   }


// }
// require_once 'view/add_payroll.php';
// break;


case 'viewExpense':  
require_once 'view/view_expense.php';
break;



case 'ApproveReq':
if (isset($_POST['approvee'])){
   $request_no  = $_POST['request_no'];
   $request_name = $_POST['request_name'];  
   $vendor_name = $_POST['vendor_name'];  
   $description = $_POST['description'];
   $request_date = $_POST['request_date'];
   $request_Amount = $_POST['request_Amount'];
   $request_by = $_POST['staff_name'];
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



//  if(isset($_POST['disaproveReq'])){
//  $request_no  = $_POST['request_no'];
//  $Newstatus = "Disapproved";
//  $datex = date('Y-m-d H:i:s');

// $DBinfo = $maineg->Targeted_information('admin','username',$_SESSION['Admin']);

// if($DBinfo['role'] != "CEO"){
//      echo '<script>swal("Error","You dont have right to this request","error");</script>';

// }else{

//  $Call = $maineg->UpdateRequestReject($request_no,$Newstatus,$datex);

//  if($Call == true) {
//             echo '<script>swal("Success","Requst Cancellation Successful","success");</script>'; 
//     } else{
//             echo '<script>swal("Error","Unable to Cancel","error");</script>';
//     } 
//  }
// }
require_once 'view/approveRequest.php';
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




default:
require_once "view/dashboard.php";
break;
}



?>