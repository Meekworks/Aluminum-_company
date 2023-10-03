<?php  

class mainClass{
 
  public $host = 'localhost';
  public $user = 'root';
  public $password = '';
  public $DB = 'sales_system_db';

// public $host = 'localhost';
// public $user = 'cpalumgl_ziko_user';
// public $password = 'T-+r.!DR!MI(';
// public $DB = 'cpalumgl_ziko';




function insertProduct($item_id,$name,$brand,$description,$color,$size,$category,$image,$unit,$user_login){
        $conn =  mysqli_connect($this->host, $this->user, $this->password, $this->DB);
        $name1 =  mysqli_escape_string($conn, htmlentities(trim($name)));
        $item_id1 =  mysqli_escape_string($conn, htmlentities(trim($item_id)));
        $brand1 =  mysqli_escape_string($conn, htmlentities(trim($brand)));
        $description1 =  mysqli_escape_string($conn, htmlentities(trim($description)));
        $color1 =  mysqli_escape_string($conn, htmlentities(trim($color)));
        $size1 =  mysqli_escape_string($conn, htmlentities(trim($size)));
        $unit1 =  mysqli_escape_string($conn, htmlentities(trim($unit)));
        $category1 =  mysqli_escape_string($conn, htmlentities(trim($category)));
        $image1 =  mysqli_escape_string($conn, htmlentities(trim($image)));
        $user_login1 =  mysqli_escape_string($conn, htmlentities(trim($user_login)));
        $sql = 'INSERT INTO products(product_code,product_name,brand,description,color,size,category,image,product_satuan,created_by) VALUES (?,?,?,?,?,?,?,?,?,?)';
        $query = $conn->prepare($sql);
        $query->bind_param('ssssssssss',$item_id1,$name1,$brand1,$description1,$color1,$size1,$category1,$image1,$unit1,$user_login1);
             if ($query->execute()){
                          return true;
                  }else{
                        return false;
                       }
                        $conn->close(); 
}





function UpdateProduct($name,$item_id,$description,$regular_price,$category,$distributor_price){
            $conn =  mysqli_connect($this->host, $this->user, $this->password, $this->DB);
            $sql = "UPDATE products SET description ='".$description."', purchase_price ='".$regular_price."', product_name ='".$name."',category = '".$category."',sell_price ='".$distributor_price."' WHERE product_code  ='".$item_id."'";
            $query = $conn->query($sql) or print(mysqli_error($conn));
            if ($query == true) {
              return true;  
            }else{
               return false;   
            }
            $conn->close(); 
}





function Update_Category($category,$old_category){
   $conn = mysqli_connect($this->host, $this->user, $this->password, $this->DB);
    $sql = "UPDATE category SET category ='".$category."' WHERE category  = '".$old_category."'";
    $query = $conn->query($sql) or print(mysqli_error($conn));
    if ($query == true) {
      return true;  
    }else{
       return false;   
    }
    $conn->close();
}





function Update_CustomerD($title,$fullname,$phone,$address,$level,$id){
   $conn = mysqli_connect($this->host, $this->user, $this->password, $this->DB);
    $sql = "UPDATE customer_distributor SET title ='".$title."', fullname ='".$fullname."' , phone ='".$phone."' , address ='".$address."', level ='".$level."' WHERE id ='".$id."'";
    $query = $conn->query($sql) or print(mysqli_error($conn));
    if ($query == true) {
      return true;  
    }else{
       return false;   
    }
    $conn->close();
}




function Users_Delete($data){
   $conn = mysqli_connect($this->host, $this->user, $this->password, $this->DB);
   $sql  = "DELETE FROM admin WHERE id='$data'";
   $query = $conn->query($sql) or print(mysqli_error($conn));
        if($query == true){
         return true;
        }else{
           return false;
        } 
        $conn->close();  
}




function Customer_Delete($data){
   $conn = mysqli_connect($this->host, $this->user, $this->password, $this->DB);
   $sql  = "DELETE FROM customer_distributor WHERE id='$data'";
   $query = $conn->query($sql) or print(mysqli_error($conn));
        if($query == true){
         return true;
        }else{
           return false;
        } 
        $conn->close();  
}




function Category_Delete($data){
   $conn = mysqli_connect($this->host, $this->user, $this->password, $this->DB);
   $sql  = "DELETE FROM category WHERE id='$data'";
   $query = $conn->query($sql) or print(mysqli_error($conn));
        if($query == true){
         return true;
        }else{
           return false;
        } 
        $conn->close();  
}




function Product_Delete($data){
   $conn = mysqli_connect($this->host, $this->user, $this->password, $this->DB);
   $sql  = "DELETE FROM products WHERE id='$data'";
   $query = $conn->query($sql) or print(mysqli_error($conn));
        if($query == true){
         return true;
        }else{
           return false;
        } 
        $conn->close();  
}




function UpdateStock($product_name,$datex,$quantity,$product_code,$status){
            $conn =  mysqli_connect($this->host, $this->user, $this->password, $this->DB);
            $sql = "UPDATE stock_table SET product ='".$product_name."', stock_date ='".$datex."',quantity =quantity+'".$quantity."',status ='".$status."' WHERE item_code ='".$product_code."'";
            $query = $conn->query($sql) or print(mysqli_error($conn));
            if ($query == true) {
              return true;  
            }else{
               return false;   
            }
                            $conn->close(); 
}



function UpdateStockPro($quantity,$product_code){
            $conn =  mysqli_connect($this->host, $this->user, $this->password, $this->DB);
            $sql = "UPDATE products SET stock =stock+'".$quantity."' WHERE product_code ='".$product_code."'";
            $query = $conn->query($sql) or print(mysqli_error($conn));
            if ($query == true) {
              return true;  
            }else{
               return false;   
            }
                            $conn->close(); 
}




function UpdateStocksale($qty,$product_code){
            $conn =  mysqli_connect($this->host, $this->user, $this->password, $this->DB);
            $sql = "UPDATE stock_table SET quantity =quantity-'".$qty."' WHERE item_code ='".$product_code."'";
            $query = $conn->query($sql) or print(mysqli_error($conn));
            if ($query == true) {
              return true;  
            }else{
               return false;   
            }
    $conn->close(); 
}




// function UpdateStockprosale($qty,$product_code){
//             $conn =  mysqli_connect($this->host, $this->user, $this->password, $this->DB);
//             $sql = "UPDATE products SET stock =stock-'".$qty."' WHERE product_code ='".$product_code."'";
//             $query = $conn->query($sql) or print(mysqli_error($conn));
//             if ($query == true) {
//               return true;  
//             }else{
//                return false;   
//             }
//                             $conn->close(); 
// }





function insertSTOCK($product_name,$brand,$datex,$description,$color,$size,$category,$Qty,$min_stock,$product_code,$Token_id,$unit,$cost_price,$selling_price){
      $conn = mysqli_connect($this->host, $this->user, $this->password, $this->DB);
      $product_name1 = mysqli_escape_string($conn, htmlentities(trim($product_name)));
      $brand1 = mysqli_escape_string($conn, htmlentities(trim($brand)));
      $datex1 = mysqli_escape_string($conn, htmlentities(trim($datex)));
      $description1 = mysqli_escape_string($conn, htmlentities(trim($description)));
      $color1    = mysqli_escape_string($conn, htmlentities(trim($color)));
      $size1    = mysqli_escape_string($conn, htmlentities(trim($size)));
      $category1 = mysqli_escape_string($conn, htmlentities(trim($category)));
      $Qty1     = mysqli_escape_string($conn, htmlentities(trim($Qty)));
      $min_stock1 = mysqli_escape_string($conn, htmlentities(trim($min_stock)));
      $product_code1 = mysqli_escape_string($conn, htmlentities(trim($product_code)));
      $Token_id1 = mysqli_escape_string($conn, htmlentities(trim($Token_id)));
      $unit1 = mysqli_escape_string($conn, htmlentities(trim($unit)));
      $cost_price1 = mysqli_escape_string($conn, htmlentities(trim($cost_price)));
      $selling_price1 = mysqli_escape_string($conn, htmlentities(trim($selling_price)));
      $sql = 'INSERT INTO stock_table(product,brand,stock_date,description,color,size,category,quantity,min_stock,item_code,token_id,unit,purchase_price,sell_price) VALUES (?,?,?,?,?,?,?,?,?,?,?,?,?,?)';
      $query         = $conn->prepare($sql);
      $query->bind_param('ssssssssssssss',$product_name1,$brand1,$datex1,$description1,$color1,$size1,$category1,$Qty1,$min_stock1,$product_code1,$Token_id1,$unit1,$cost_price1,$selling_price1);
           if ($query->execute()){
                        return true;
                }else{
                      return false;
                     }
                      $conn->close(); 
}




function insertSTOCKlog($product_name,$brand,$datex,$description,$color,$size,$category,$Qty,$product_code,$Token_id,$unit,$cost_price,$selling_price,$total){
      $conn = mysqli_connect($this->host, $this->user, $this->password, $this->DB);
      $product_name1 = mysqli_escape_string($conn, htmlentities(trim($product_name)));
      $brand1 = mysqli_escape_string($conn, htmlentities(trim($brand)));
      $datex1 = mysqli_escape_string($conn, htmlentities(trim($datex)));
      $description1 = mysqli_escape_string($conn, htmlentities(trim($description)));
      $color1 = mysqli_escape_string($conn, htmlentities(trim($color)));
      $size1 = mysqli_escape_string($conn, htmlentities(trim($size)));
      $category1 = mysqli_escape_string($conn, htmlentities(trim($category)));
      $Qty1 = mysqli_escape_string($conn, htmlentities(trim($Qty)));
      $product_code1 = mysqli_escape_string($conn, htmlentities(trim($product_code)));
      $Token_id1 = mysqli_escape_string($conn, htmlentities(trim($Token_id)));
      $unit1 = mysqli_escape_string($conn, htmlentities(trim($unit)));
      $cost_price1 = mysqli_escape_string($conn, htmlentities(trim($cost_price)));
      $selling_price1 = mysqli_escape_string($conn, htmlentities(trim($selling_price)));
      $total1 = mysqli_escape_string($conn, htmlentities(trim($total)));
      $sql = 'INSERT INTO stock_log(product,brand,stock_date,description,color,size,category,quantity,item_code,token_id,unit,purchase_price,sell_price,total) VALUES (?,?,?,?,?,?,?,?,?,?,?,?,?,?)';
      $query         = $conn->prepare($sql);
      $query->bind_param('ssssssssssssss',$product_name1,$brand1,$datex1,$description1,$color1,$size1,$category1,$Qty1,$product_code1,$Token_id1,$unit1,$cost_price1,$selling_price1,$total1);
           if ($query->execute()){
                        return true;
                }else{
                      return false;
                     }
                      $conn->close(); 
}





 function insertWarehouseStock($product_code,$product_name,$brand,$category,$description,$color,$size,$cost_price,$unit,$Qty,$Token_id,$suppleir_id,$suppleir_name,$user_login,$image){
      $conn = mysqli_connect($this->host, $this->user, $this->password, $this->DB);
      $product_code1 = mysqli_escape_string($conn, htmlentities(trim($product_code)));
      $product_name1 = mysqli_escape_string($conn, htmlentities(trim($product_name)));
      $brand1    = mysqli_escape_string($conn, htmlentities(trim($brand)));
      $category1    = mysqli_escape_string($conn, htmlentities(trim($category)));
      $description1    = mysqli_escape_string($conn, htmlentities(trim($description)));
      $color1 = mysqli_escape_string($conn, htmlentities(trim($color)));
      $size1     = mysqli_escape_string($conn, htmlentities(trim($size)));
      $cost_price1 = mysqli_escape_string($conn, htmlentities(trim($cost_price)));
      $unit1 = mysqli_escape_string($conn, htmlentities(trim($unit)));
      $Qty1 = mysqli_escape_string($conn, htmlentities(trim($Qty)));
      $Token_id1 = mysqli_escape_string($conn, htmlentities(trim($Token_id)));
      $suppleir_id1 = mysqli_escape_string($conn, htmlentities(trim($suppleir_id)));
      $suppleir_name1 = mysqli_escape_string($conn, htmlentities(trim($suppleir_name)));
      $user_login1 = mysqli_escape_string($conn, htmlentities(trim($user_login)));
      $image1 = mysqli_escape_string($conn, htmlentities(trim($image)));
      $sql = 'INSERT INTO warehouse(product_code,ProductName,Brand,Category,description,Color,Size,cost_price,record_form,QuantityInStock,token_id,SupplierID,Supplier_name,performed_by,image) VALUES (?,?,?,?,?,?,?,?,?,?,?,?,?,?,?)';
      $query         = $conn->prepare($sql);
      $query->bind_param('sssssssssssssss',$product_code1,$product_name1,$brand1,$category1,$description1,$color1,$size1,$cost_price1,$unit1,$Qty1,$Token_id1,$suppleir_id1,$suppleir_name1,$user_login1,$image1);
           if ($query->execute()){
                        return true;
                }else{
                      return false;
                     }
                      $conn->close(); 
}





function insertWarehouseLog($product_code,$product_name,$brand,$category,$unit,$cost_price,$Qty,$total,$Token_id,$suppleir_id,$suppleir_name,$user_login){
      $conn = mysqli_connect($this->host, $this->user, $this->password, $this->DB);
      $product_code1 = mysqli_escape_string($conn, htmlentities(trim($product_code)));
      $product_name1 = mysqli_escape_string($conn, htmlentities(trim($product_name)));
      $brand1    = mysqli_escape_string($conn, htmlentities(trim($brand)));
      $category1    = mysqli_escape_string($conn, htmlentities(trim($category)));
      $unit1 = mysqli_escape_string($conn, htmlentities(trim($unit)));
      $cost_price1     = mysqli_escape_string($conn, htmlentities(trim($cost_price)));
      $Qty1 = mysqli_escape_string($conn, htmlentities(trim($Qty)));
      $total1 = mysqli_escape_string($conn, htmlentities(trim($total)));
      $Token_id1 = mysqli_escape_string($conn, htmlentities(trim($Token_id)));
      $suppleir_id1 = mysqli_escape_string($conn, htmlentities(trim($suppleir_id)));
      $suppleir_name1 = mysqli_escape_string($conn, htmlentities(trim($suppleir_name)));
      $user_login1 = mysqli_escape_string($conn, htmlentities(trim($user_login)));
      
      $sql = 'INSERT INTO warehouse_log(product_code,ProductName,Brand,Category,record_form,cost_price,QuantityInStock,total,token_id,SupplierID,Supplier_name,performed_by) VALUES (?,?,?,?,?,?,?,?,?,?,?,?)';
      $query         = $conn->prepare($sql);
      $query->bind_param('ssssssssssss',$product_code1,$product_name1,$brand1,$category1,$unit1,$cost_price1,$Qty1,$total1,$Token_id1,$suppleir_id1,$suppleir_name1,$user_login1);
           if ($query->execute()){
                        return true;
                }else{
                      return false;
                     }
                      $conn->close(); 
}





function insertAccountLog($transaction_id,$transaction_source,$amount,$deposit_date,$account_id,$account_type,$staff_id,$series_name){
      $conn = mysqli_connect($this->host, $this->user, $this->password, $this->DB);
      $transaction_id = mysqli_escape_string($conn, htmlentities(trim($transaction_id)));
      $transaction_source = mysqli_escape_string($conn, htmlentities(trim($transaction_source)));
      $amount = mysqli_escape_string($conn, htmlentities(trim($amount)));
      $deposit_date = mysqli_escape_string($conn, htmlentities(trim($deposit_date)));
      $account_id = mysqli_escape_string($conn, htmlentities(trim($account_id)));
      $account_type  = mysqli_escape_string($conn, htmlentities(trim($account_type)));
      $staff_id  = mysqli_escape_string($conn, htmlentities(trim($staff_id)));
      $series_name  = mysqli_escape_string($conn, htmlentities(trim($series_name)));
      $sql = 'INSERT INTO account_log(transactionID,transaction_source,amount,transaction_date,account_id,account_type,staff_id,series_name) VALUES (?,?,?,?,?,?,?,?)';
      $query = $conn->prepare($sql);
      $query->bind_param('ssssssss',$transaction_id,$transaction_source,$amount,$deposit_date,$account_id,$account_type,$staff_id,$series_name);
           if ($query->execute()){
                        return true;
                }else{
                      return false;
                     }
                      $conn->close(); 

}





function insertPurchaseLog($transaction_id,$product_name,$supplier,$supplier_id,$price,$quantity,$total,$Amount_paid,$amount_due,$payment_method,$total_purchase){
      $conn = mysqli_connect($this->host, $this->user, $this->password, $this->DB);
      $transaction_id = mysqli_escape_string($conn, htmlentities(trim($transaction_id)));
      $product_name = mysqli_escape_string($conn, htmlentities(trim($product_name)));
      $supplier    = mysqli_escape_string($conn, htmlentities(trim($supplier)));
      $supplier_id    = mysqli_escape_string($conn, htmlentities(trim($supplier_id)));
      $price = mysqli_escape_string($conn, htmlentities(trim($price)));
      $quantity     = mysqli_escape_string($conn, htmlentities(trim($quantity)));
      $total = mysqli_escape_string($conn, htmlentities(trim($total)));
      $Amount_paid = mysqli_escape_string($conn, htmlentities(trim($Amount_paid)));
      $amount_due = mysqli_escape_string($conn, htmlentities(trim($amount_due)));
      $payment_method = mysqli_escape_string($conn, htmlentities(trim($payment_method)));
      $total_purchase = mysqli_escape_string($conn, htmlentities(trim($total_purchase)));
      $sql = 'INSERT INTO purchase_log(purchase_id,product_name,supplier,supplier_id,amount,qty,total,amount_paid,amount_due,method_of_payment,total_purchase) VALUES (?,?,?,?,?,?,?,?,?,?,?)';
      $query         = $conn->prepare($sql);
      $query->bind_param('sssssssssss',$transaction_id,$product_name,$supplier,$supplier_id,$price,$quantity,$total,$Amount_paid,$amount_due,$payment_method,$total_purchase);
           if ($query->execute()){
                        return true;
                }else{
                      return false;
                     }
                      $conn->close(); 
}




function chartofAccount($Account,$total){
            $conn =  mysqli_connect($this->host, $this->user, $this->password, $this->DB);
            $sql = "UPDATE chart_of_account SET balance =balance+'".$total."' WHERE account_id ='".$Account."'";
            $query = $conn->query($sql) or print(mysqli_error($conn));
            if ($query == true) {
              return true;  
            }else{
               return false;   
            }
$conn->close(); 
}




function UpdateStockWarehouse($Qty,$datexUp,$product_code){
            $conn =  mysqli_connect($this->host, $this->user, $this->password, $this->DB);
            $sql = "UPDATE warehouse SET QuantityInStock =QuantityInStock+'".$Qty."', LastUpdated='".$datexUp."'  WHERE product_code ='".$product_code."'";
            $query = $conn->query($sql) or print(mysqli_error($conn));
            if ($query == true) {
              return true;  
            }else{
               return false;   
            }
        $conn->close(); 
}




function UpdateStockWarehouseMinus($Qty,$datexUp,$product_code){
            $conn =  mysqli_connect($this->host, $this->user, $this->password, $this->DB);
            $sql = "UPDATE warehouse SET QuantityInStock =QuantityInStock-'".$Qty."', LastUpdated='".$datexUp."'  WHERE product_code ='".$product_code."'";
            $query = $conn->query($sql) or print(mysqli_error($conn));
            if ($query == true) {
              return true;  
            }else{
               return false;   
            }
        $conn->close(); 
}



function UpdateStockShopPlus($Qty,$datexUp,$product_code){
            $conn =  mysqli_connect($this->host, $this->user, $this->password, $this->DB);
            $sql = "UPDATE stock_table SET quantity=quantity+'".$Qty."', updated_at='".$datexUp."'  WHERE item_code='".$product_code."'";
            $query = $conn->query($sql) or print(mysqli_error($conn));
            if ($query == true) {
              return true;  
            }else{
               return false;   
            }
        $conn->close(); 
}




 function insertCusDistribution($title,$fullname,$phone,$address,$Account_id,$level,$status){
      $conn = mysqli_connect($this->host, $this->user, $this->password, $this->DB);
      $title = mysqli_escape_string($conn, htmlentities(trim($title)));
      $fullname = mysqli_escape_string($conn, htmlentities(trim($fullname)));
      $phone  = mysqli_escape_string($conn, htmlentities(trim($phone)));
      $address = mysqli_escape_string($conn, htmlentities(trim($address)));
      $Account_id = mysqli_escape_string($conn, htmlentities(trim($Account_id)));
      $level = mysqli_escape_string($conn, htmlentities(trim($level)));
      $status = mysqli_escape_string($conn, htmlentities(trim($status)));
      $sql = 'INSERT INTO customer_distributor(title,fullname,phone,address,account_id,level,status) VALUES (?,?,?,?,?,?,?)';
      $query         = $conn->prepare($sql);
      $query->bind_param('sssssss',$title,$fullname,$phone,$address,$Account_id,$level,$status);
           if ($query->execute()){
                        return true;
                }else{
                      return false;
                     }
                      $conn->close(); 
}


 function cusLedger($datex,$Account_id,$balance,$Details,$passport){
      $conn = mysqli_connect($this->host, $this->user, $this->password, $this->DB);
      $datex = mysqli_escape_string($conn, htmlentities(trim($datex)));
      $passport = mysqli_escape_string($conn, htmlentities(trim($passport)));
      $Account_id = mysqli_escape_string($conn, htmlentities(trim($Account_id)));
      $balance = mysqli_escape_string($conn, htmlentities(trim($balance)));
      $Details = mysqli_escape_string($conn, htmlentities(trim($Details)));
      $sql = 'INSERT INTO customer_ledger(datex,account_id,balance,details,passport) VALUES (?,?,?,?,?)';
      $query         = $conn->prepare($sql);
      $query->bind_param('sssss',$datex,$Account_id,$balance,$Details,$passport);
           if ($query->execute()){
                        return true;
                }else{
                      return false;
                     }
                      $conn->close(); 
}



 function AssignPri($user,$GetItem_Priv){
      $conn = mysqli_connect($this->host, $this->user, $this->password, $this->DB);
      $user = mysqli_escape_string($conn, htmlentities(trim($user)));
      $GetItem_Priv = mysqli_escape_string($conn, htmlentities(trim($GetItem_Priv)));
      $sql = 'INSERT INTO priviledges_assigned(username,privileges) VALUES (?,?)';
      $query         = $conn->prepare($sql);
      $query->bind_param('ss',$user,$GetItem_Priv);
           if ($query->execute()){
                        return true;
                }else{
                      return false;
                     }
                      $conn->close(); 
}






 function addNewUser($fullname,$password,$username,$datex,$roll){
      $conn = mysqli_connect($this->host, $this->user, $this->password, $this->DB);
      $fullname = mysqli_escape_string($conn, htmlentities(trim($fullname)));
      $password = mysqli_escape_string($conn, htmlentities(trim($password)));
      $username = mysqli_escape_string($conn, htmlentities(trim($username)));
      $datex = mysqli_escape_string($conn, htmlentities(trim($datex)));
      $roll = mysqli_escape_string($conn, htmlentities(trim($roll)));
      $sql = 'INSERT INTO admin(name,password,username,reg_date,role) VALUES (?,?,?,?,?)';
      $query         = $conn->prepare($sql);
      $query->bind_param('sssss',$fullname,$password,$username,$datex,$roll);
           if ($query->execute()){
                        return true;
                }else{
                      return false;
                     }
                      $conn->close(); 
}




 function insertInvoice($invoice_no,$reference_id,$suppleir_name,$suppleir_id,$quantity,$description,$price,$total,$amount_paid,$amount_payable,$status2){
      $conn = mysqli_connect($this->host, $this->user, $this->password, $this->DB);
      $invoice_no = mysqli_escape_string($conn, htmlentities(trim($invoice_no)));
      $reference_id = mysqli_escape_string($conn, htmlentities(trim($reference_id)));
      $suppleir_name = mysqli_escape_string($conn, htmlentities(trim($suppleir_name)));
      $suppleir_id = mysqli_escape_string($conn, htmlentities(trim($suppleir_id)));
      $quantity = mysqli_escape_string($conn, htmlentities(trim($quantity)));
      $description = mysqli_escape_string($conn, htmlentities(trim($description)));
      $price = mysqli_escape_string($conn, htmlentities(trim($price)));
      $total = mysqli_escape_string($conn, htmlentities(trim($total)));
      $amount_paid = mysqli_escape_string($conn, htmlentities(trim($amount_paid)));
      $amount_payable = mysqli_escape_string($conn, htmlentities(trim($amount_payable)));
      $status2 = mysqli_escape_string($conn, htmlentities(trim($status2)));
      $sql = 'INSERT INTO invoice_table(invoice_no,reference_id,supplier_name,supplier_id,quantity,description,amount,total,amount_paid,amount_payable,status) VALUES (?,?,?,?,?,?,?,?,?,?,?)';
      $query         = $conn->prepare($sql);
      $query->bind_param('sssssssssss',$invoice_no,$reference_id,$suppleir_name,$suppleir_id,$quantity,$description,$price,$total,$amount_paid,$amount_payable,$status2);
           if ($query->execute()){
                        return true;
                }else{
                      return false;
                     }
                      $conn->close(); 
}



 function insertInvoiceDetails($invoice_id,$product_code,$product_name,$brand,$category,$mode_payment,$qty,$price,$total,$amount_paid,$due,$order_date,$customer,$cusName,$address,$phone,$sales_rep,$color,$size,$unit){
      $conn = mysqli_connect($this->host, $this->user, $this->password, $this->DB);
      $invoice_id1 = mysqli_escape_string($conn, htmlentities(trim($invoice_id)));
      $product_code1 = mysqli_escape_string($conn, htmlentities(trim($product_code)));
      $product_name1 = mysqli_escape_string($conn, htmlentities(trim($product_name)));
      $brand1 = mysqli_escape_string($conn, htmlentities(trim($brand)));
      $category1 = mysqli_escape_string($conn, htmlentities(trim($category)));
      $mode_payment1 = mysqli_escape_string($conn, htmlentities(trim($mode_payment)));
      $qty1 = mysqli_escape_string($conn, htmlentities(trim($qty)));
      $price1 = mysqli_escape_string($conn, htmlentities(trim($price)));
      $total1 = mysqli_escape_string($conn, htmlentities(trim($total)));
      $amount_paid1 = mysqli_escape_string($conn, htmlentities(trim($amount_paid)));
      $due1 = mysqli_escape_string($conn, htmlentities(trim($due)));
      $order_date1 = mysqli_escape_string($conn, htmlentities(trim($order_date)));
      $customer_name1 = mysqli_escape_string($conn, htmlentities(trim($customer)));
      $cusName1 = mysqli_escape_string($conn, htmlentities(trim($cusName)));
      $address1 = mysqli_escape_string($conn, htmlentities(trim($address)));
      $phone1 = mysqli_escape_string($conn, htmlentities(trim($phone)));
      $sales_rep1 = mysqli_escape_string($conn, htmlentities(trim($sales_rep)));
      $color1 = mysqli_escape_string($conn, htmlentities(trim($color)));
      $size1 = mysqli_escape_string($conn, htmlentities(trim($size)));
      $unit1 = mysqli_escape_string($conn, htmlentities(trim($unit)));
      $sql = 'INSERT INTO invoice_details(invoice_id,product_code,product_name,brand,category,mode_payment,qty,price,total,paid,due,order_date,customer,customer_name,address,phone,sales_rep,color,size,unit) VALUES (?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?)';
      $query         = $conn->prepare($sql);
      $query->bind_param('ssssssssssssssssssss',$invoice_id1,$product_code1,$product_name1,$brand1,$category1,$mode_payment1,$qty1,$price1,$total1,$amount_paid1,$due1,$order_date1,$customer_name1,$cusName1,$address1,$phone1,$sales_rep1,$color1,$size1,$unit1);
           if ($query->execute()){
                        return true;
                }else{
                      return false;
                     }
                      $conn->close(); 
}





 function insertInvoicelog($invoice_id,$sales_rep,$price,$timex,$order_date,$total,$amount_paid,$due){
      $conn = mysqli_connect($this->host, $this->user, $this->password, $this->DB);
      $invoice_id = mysqli_escape_string($conn, htmlentities(trim($invoice_id)));
      $timex = mysqli_escape_string($conn, htmlentities(trim($timex)));
      $order_date = mysqli_escape_string($conn, htmlentities(trim($order_date)));
      $total = mysqli_escape_string($conn, htmlentities(trim($total)));
      $amount_paid = mysqli_escape_string($conn, htmlentities(trim($amount_paid)));
      $due = mysqli_escape_string($conn, htmlentities(trim($due)));
      $price = mysqli_escape_string($conn, htmlentities(trim($price)));
      $sales_rep = mysqli_escape_string($conn, htmlentities(trim($sales_rep)));
      $sql = 'INSERT INTO invoice_tbl(invoice_id,sales_reo,amount,time_order,order_date,total,paid,due) VALUES (?,?,?,?,?,?,?,?)';
      $query         = $conn->prepare($sql);
      $query->bind_param('ssssssss',$invoice_id,$sales_rep,$price,$timex,$order_date,$total,$amount_paid,$due);
           if ($query->execute()){
                        return true;
                }else{
                      return false;
                     }
                      $conn->close(); 
}

                  
function UpdateMatStock($material_name,$plusQty,$new_price,$plusTotal,$plusAmountPaid,$plusAmountPayable,$status,$payment_Mode){
   $conn = mysqli_connect($this->host, $this->user, $this->password, $this->DB);
    $sql = "UPDATE material_stock SET quantity = '".$plusQty."', price ='".$new_price."', total_amount='".$plusTotal."',amount_paid='".$plusAmountPaid."',amoun_payable ='".$plusAmountPayable."',status='".$status."',payment_mode='".$payment_Mode."' WHERE material_name = '".$material_name."'";
    $query = $conn->query($sql) or print(mysqli_error($conn));
    if ($query == true) {
      return true;  
      }else{
      return false;   
      }
      $conn->close();
}



 function insertCategory($category,$date_created){
          $conn = mysqli_connect($this->host, $this->user, $this->password, $this->DB);
          $name  = mysqli_escape_string($conn, htmlentities(trim($category)));
          $date_created1 = mysqli_escape_string($conn, htmlentities(trim($date_created)));
          $sql = 'INSERT INTO category(category,date_created) VALUES (?,?)';
          $query = $conn->prepare($sql);
          $query->bind_param('ss',$name,$date_created1);
          if($query->execute()){
            return true;
          }else{
            return false;
          }
          $conn->close();
 }



  function insertSupplier($supplier_id,$supplier_name,$phone,$email,$company_address,$material){
          $conn = mysqli_connect($this->host, $this->user, $this->password, $this->DB);
          $supplier_name  = mysqli_escape_string($conn, htmlentities(trim($supplier_name)));
          $company_address  = mysqli_escape_string($conn, htmlentities(trim($company_address)));
          $phone  = mysqli_escape_string($conn, htmlentities(trim($phone)));
          $email  = mysqli_escape_string($conn, htmlentities(trim($email)));
          $material  = mysqli_escape_string($conn, htmlentities(trim($material)));
          $sql = 'INSERT INTO supplier_table(supplier_id,supplier_name,phone,email,company_address,material) VALUES (?,?,?,?,?,?)';
          $query = $conn->prepare($sql);
          $query->bind_param('ssssss',$supplier_id,$supplier_name,$phone,$email,$company_address,$material);
          if($query->execute()){
            return true;
          }else{
            return false;
          }
          $conn->close();
 }


 function fetch_Invoice($data){
  $resultset = array();
         $conn = mysqli_connect($this->host, $this->user, $this->password, $this->DB);
         $sql  = "SELECT * FROM invoice_details WHERE invoice_id='$data'";
         $query = $conn->prepare($sql);
         $query->execute();
         $result = $query->get_result();
         if($result->num_rows > 0){
             while ($rows = $result->fetch_assoc()){
                    $resultset[] = $rows;
                   }
                $conn->close();
         }
         return $resultset;

}

function allStock(){
   $conn = mysqli_connect($this->host, $this->user, $this->password, $this->DB);
   $resultset = array();
   $sql = ("SELECT * FROM stock_table");
   $query = $conn->prepare($sql);
   $query->execute();
   $result = $query->get_result();
     if($result->num_rows > 0){
         while($rows=$result->fetch_assoc()){
               $resultset[] = $rows;
       }
   }
  $conn->close();
  return $resultset;
}


function allWarehouse(){
   $conn = mysqli_connect($this->host, $this->user, $this->password, $this->DB);
   $resultset = array();
   $sql = ("SELECT * FROM warehouse");
   $query = $conn->prepare($sql);
   $query->execute();
   $result = $query->get_result();
     if($result->num_rows > 0){
         while($rows=$result->fetch_assoc()){
               $resultset[] = $rows;
       }
   }
  $conn->close();
  return $resultset;
}



function select_total_receipt($data){
   $conn = mysqli_connect($this->host,$this->user,$this->password,$this->DB);

   $sql  = "SELECT * FROM invoice_details WHERE invoice_id='$data'";
   $query = $conn->prepare($sql);
   $query->execute();
   $result = $query->get_result();
     if($result->num_rows > 0){
       while ($rows=$result->fetch_assoc()) {
             $resultset[] = $rows;
        }
    } if(!empty($resultset)){
      return $resultset;
  }
  $conn->close();
}


 function insertSize($size,$date_created){
          $conn = mysqli_connect($this->host, $this->user, $this->password, $this->DB);
          $name = mysqli_escape_string($conn, htmlentities(trim($size)));
          $date_created = mysqli_escape_string($conn, htmlentities(trim($date_created)));
          $sql ='INSERT INTO pro_size(size,date_created) VALUES(?,?)';
          $query = $conn->prepare($sql);
          $query->bind_param('ss',$size,$date_created);
          if($query->execute()){
            return true;
          }else{
            return false;
          }
          $conn->close();
}

function insertTemplate($name,$category,$type,$image){
            $conn =  mysqli_connect($this->host, $this->user, $this->password, $this->DB);
            $name          =  mysqli_escape_string($conn, htmlentities(trim($name)));
            $category      =  mysqli_escape_string($conn, htmlentities(trim($category)));
            $type          =  mysqli_escape_string($conn, htmlentities(trim($type)));
            $image         =  mysqli_escape_string($conn, htmlentities(trim($image)));
            $sql           = 'INSERT INTO templates(name,category,type,image) VALUES (?,?,?,?)';
            $query         = $conn->prepare($sql);
            $query->bind_param('ssss',$name,$category,$type,$image);
                 if ($query->execute()){
                              return true;
                      }else{
                            return false;
                           }
                            $conn->close(); 
}

function insert_Assign_Jobs($image,$type,$user,$Order_ID,$price,$quantity,$total,$uplod_file,$Job_id,$job_status,$Job_date,$job_pay_Amount,$partner,$assign_status,$job_done,$job_confirm){
          $conn       = mysqli_connect($this->host, $this->user, $this->password, $this->DB);
          $image      = mysqli_escape_string($conn, htmlentities(trim($image)));
          $type       = mysqli_escape_string($conn, htmlentities(trim($type)));
          $user       = mysqli_escape_string($conn, htmlentities(trim($user)));
          $Order_ID   = mysqli_escape_string($conn, htmlentities(trim($Order_ID)));
          $price      = mysqli_escape_string($conn, htmlentities(trim($price)));
          $quantity   = mysqli_escape_string($conn, htmlentities(trim($quantity)));
          $total      = mysqli_escape_string($conn, htmlentities(trim($total)));
          $uplod_file = mysqli_escape_string($conn, htmlentities(trim($uplod_file)));
          $Job_id     = mysqli_escape_string($conn, htmlentities(trim($Job_id)));
          $job_status = mysqli_escape_string($conn, htmlentities(trim($job_status)));
          $Job_date   = mysqli_escape_string($conn, htmlentities(trim($Job_date)));
          $job_pay_Amount = mysqli_escape_string($conn, htmlentities(trim($job_pay_Amount)));
          $partner    = mysqli_escape_string($conn, htmlentities(trim($partner)));
          $assign_status  = mysqli_escape_string($conn, htmlentities(trim($assign_status)));
          $job_done    = mysqli_escape_string($conn, htmlentities(trim($job_done)));
          $job_confirm  = mysqli_escape_string($conn, htmlentities(trim($job_confirm)));
          $sql = 'INSERT INTO Jobs(image,type,user,Order_ID,price,quantity,total,uplod_file,Job_id,
          job_status,Job_date,Jobpayment,partner,assign_status,job_done,job_confirm) VALUES (?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?)';
          $query = $conn->prepare($sql);
          $query->bind_param('ssssssssssssssss',$image,$type,$user,$Order_ID,$price,$quantity,$total,$uplod_file,$Job_id,$job_status,$Job_date,$job_pay_Amount,$partner,$assign_status,$job_done,$job_confirm);
          if($query->execute()){
            return true;
          }else{
            return false;
          }
       $conn->close();
 }

// function Assigned_Job_Delete($data){
//    $conn = mysqli_connect($this->host, $this->user, $this->password, $this->DB);
//    $sql  = "DELETE FROM order_service WHERE id='id'";
//    $query = $conn->query($sql) or print(mysqli_error($conn));
//         if($query == true){
//           echo '<script>swal("Success","Assigned Successfully","success");</script>';
//           echo '<script>window.location="?action=assign_job"</script>';
//         }else{
//           echo '<script>swal("Error","Unable To Assign Job,"error");</script>';
//         } 
//         $conn->close();  
// }

function insertType($type,$date_created){
          $conn = mysqli_connect($this->host, $this->user, $this->password, $this->DB);
          $name  = mysqli_escape_string($conn, htmlentities(trim($type)));
          $date_created = mysqli_escape_string($conn, htmlentities(trim($date_created)));
          $sql = 'INSERT INTO pro_type(type,date_created) VALUES (?,?)';
          $query = $conn->prepare($sql);
          $query->bind_param('ss',$type,$date_created);
          if($query->execute()){
            return true;
          }else{
            return false;
          }
          $conn->close();
 }

function edit_Cart($table,$filled,$data,$field2,$data2){
     $conn = mysqli_connect($this->host, $this->user, $this->password, $this->DB);
     $sql = "SELECT * FROM $table WHERE $filled = '$data' AND $field2='$data2'";
     $query = $conn->query($sql) or print(mysqli_error($conn));
     $row =  mysqli_fetch_array($query);
     if ($query == true) {
      return $row;
      }else{
     return false;
      }
    $conn->close();
}

function Update_Cart($quantity,$price,$total,$item_ID,$userID){
   $conn = mysqli_connect($this->host, $this->user, $this->password, $this->DB);
    $sql = "UPDATE addtocart SET quantity = '".$quantity."',price='".$price."',total='".$total."' WHERE item_ID = '".$item_ID."' AND  user='".$userID."'";
    $query = $conn->query($sql) or print(mysqli_error($conn));
    if ($query == true) {
      return true;  
      }else{
      return false;   
      }
      $conn->close();
}

function Update_Assign_JOB($Asign,$jobID){
   $conn = mysqli_connect($this->host, $this->user, $this->password, $this->DB);
    $sql = "UPDATE order_service SET assign_status = '".$Asign."' WHERE Job_id  = '".$jobID."'";
    $query = $conn->query($sql) or print(mysqli_error($conn));
    if ($query == true) {
      return true;  
    }else{
      return false;   


    }
    $conn->close();
}

function Update_Order($Updatee,$jobID){
   $conn = mysqli_connect($this->host, $this->user, $this->password, $this->DB);
    $sql = "UPDATE order_service SET Order_Status = '".$Updatee."' WHERE Job_id  = '".$jobID."'";
    $query = $conn->query($sql) or print(mysqli_error($conn));
    if ($query == true) {
      return true;  
    }else{
       return false;   
    }
    $conn->close();
}

function Update_Order_JOB($Updatee,$jobID){
   $conn = mysqli_connect($this->host, $this->user, $this->password, $this->DB);
    $sql = "UPDATE order_service SET Order_Status = '".$Updatee."' WHERE Job_id  = '".$jobID."'";
    $query = $conn->query($sql) or print(mysqli_error($conn));
    if ($query == true) {
      return true;  
    }else{
       return false;   
    }
    $conn->close();
}

function delete($table,$filled,$data,$field2,$data2){
    $conn = mysqli_connect($this->host, $this->user, $this->password, $this->DB);
    $sql = "DELETE FROM $table WHERE $filled = '$data' AND $field2='$data2' ";
    $query = $conn->query($sql) or print(mysqli_error($conn));
    if ($query == true) {
      return true;
    }else{
      return false;
    }
    $conn->close();
}

function delete_All($table,$filled,$data){
    $conn = mysqli_connect($this->host, $this->user, $this->password, $this->DB);
    $sql = "DELETE FROM $table WHERE $filled = '$data'";
    $query = $conn->query($sql) or print(mysqli_error($conn));
    if ($query == true) {
      return true;
    }else{
      return false;
    }
    $conn->close();
}

function Account_login($user,$pass){
    $conn = mysqli_connect($this->host,$this->user,$this->password,$this->DB);
    $pass=mysqli_escape_string($conn,htmlentities($pass));
    $sql="SELECT * FROM  users WHERE account_id='".$user."' AND password='".$pass."'";
    $query=$conn->query($sql);
      if($query->num_rows>0){
        return true;
    }else{
        return false;
    }
    $conn->close();
}


function user_login($table,$username,$password){
  $conn = mysqli_connect($this->host,$this->user,$this->password,$this->DB);
  $sql="SELECT * FROM $table WHERE username='$username' || email='$username' || phone='$username' AND password='$password'";
  $query = $conn->prepare($sql);
  // $query->bind_param('ss',$username,$password);
  $query->execute();
  $result = $query->get_result();
   if ($result->num_rows > 0) {
        return true;
    }else{
        return false;
   }
}


function partner_login($table,$data1,$data2,$username,$password,$status){
  $conn = mysqli_connect($this->host,$this->user,$this->password,$this->DB);
  $sql="SELECT * FROM $table WHERE $data1= ? AND $data2= ? AND login_status = '$status'";
  $query = $conn->prepare($sql);
   $query->bind_param('ss',$username,$password);
  $query->execute();
  $result = $query->get_result();
   if ($result->num_rows > 0) {
        return true;
      }else{
        return false;
      }
}

function Admin_login($table,$data1,$data2,$username,$password){
  $conn = mysqli_connect($this->host,$this->user,$this->password,$this->DB);
  $sql="SELECT * FROM $table WHERE $data1= ? AND $data2= ?";
  $query = $conn->prepare($sql);
  $query->bind_param('ss',$username,$password);
  $query->execute();
  $result = $query->get_result();
   if ($result->num_rows > 0){
        return true;
      }else{
        return false;
      }
}

function pcat(){
   $conn = mysqli_connect($this->host,$this->user,$this->password,$this->DB);
   $cat = $_GET['Re_f'];
   $sql  = "SELECT * FROM products WHERE category='".$cat."'";
   $query = $conn->prepare($sql);
   $query->execute();
   $result = $query->get_result();
    if($result->num_rows > 0){
      while ($rows=$result->fetch_assoc()) {
      $resultset[] = $rows;
   }
      } if(!empty($resultset)){
              return $resultset;
         }else{
          echo "<center><span class='text-center font-weight-bold p-5 mb-5 text-danger'>NO RESULT FOUND</span></center>";
        }
         $conn->close();
}

// function select_check($us){
//    $conn = mysqli_connect($this->host,$this->user,$this->password,$this->DB);
//    // $us = $_SESSION['Admin'];
//    $sql  = "SELECT * FROM addtocart WHERE sales_rep='".$us."'";
//    $query = $conn->prepare($sql);
//    $query->execute();
//    $result = $query->get_result();
//      if($result->num_rows > 0){
//        while ($rows=$result->fetch_assoc()) {
//              $resultset[] = $rows;
//         }
//     } 
//     if(!empty($resultset)){
//       return $resultset;
//   }
//   $conn->close();
// }

function cart_Delete($data){
   $conn = mysqli_connect($this->host, $this->user, $this->password, $this->DB);
   $sql  = "DELETE FROM addtocart WHERE id='$data'";
   $query = $conn->query($sql) or print(mysqli_error($conn));
        if($query == true){
         return true;
        }else{
           return false;
        } 
        $conn->close();  
}



// function select_check_design(){
//    $conn = mysqli_connect($this->host,$this->user,$this->password,$this->DB);
//    $us = $_SESSION['user'];
//    $sql  = "SELECT * FROM graphic_design WHERE user='".$us."'";
//    $query = $conn->prepare($sql);
//    $query->execute();
//    $result = $query->get_result();
//      if($result->num_rows > 0){
//        while ($rows=$result->fetch_assoc()) {
//              $resultset[] = $rows;
//         }
//     } if(!empty($resultset)){
//       return $resultset;
//   }
//   $conn->close();
// }

function select_check_invoice($data){
   $conn = mysqli_connect($this->host,$this->user,$this->password,$this->DB);
   $us = @$_SESSION['user'];
   $sql  = "SELECT * FROM jobs WHERE user='".$us."' AND Order_ID='".$data."' ";
   $query = $conn->prepare($sql);
   $query->execute();
   $result = $query->get_result();
      if($result->num_rows > 0){
          while ($rows=$result->fetch_assoc()) {
                 $resultset[] = $rows;
       }
    } if(!empty($resultset)){
      return $resultset;
   }
  $conn->close();
}

function display_Summary(){
   $conn = mysqli_connect($this->host,$this->user,$this->password,$this->DB);
   $us = $_SESSION['user'];
   $sql  = "SELECT * FROM order_service WHERE user='".$us."' AND Order_Status='UnPaid'";
   $query = $conn->prepare($sql);
   $query->execute();
   $result = $query->get_result();
     if($result->num_rows > 0){
          while ($rows=$result->fetch_assoc()) {
                 $resultset[] = $rows;
          }
     } if(!empty($resultset)){
              return $resultset;
  }
  $conn->close();
}

function dataselect($table,$field){
    $conn = mysqli_connect($this->host,$this->user,$this->password,$this->DB);
    $sql = "SELECT * FROM $table WHERE username ='$field' || email='$field' || phone='$field'";
    $query = $conn->prepare($sql);
    // $query->bind_param('s',$field);
    $query->execute();
    $result = $query->get_result();
      if($result->num_rows > 0){
        if($data = $result->fetch_assoc()){
          return $data;
        }
      }if(!empty($resultset)){
        return $resultset;
      }
      $conn->close();
}

function dataselectPartner($table,$field){
    $conn = mysqli_connect($this->host,$this->user,$this->password,$this->DB);
    $sql = "SELECT * FROM $table WHERE username ='$field'";
    $query = $conn->prepare($sql);
    $query->bind_param('s',$field);
    $query->execute();
    $result = $query->get_result();
      if($result->num_rows > 0){
        if($data = $result->fetch_assoc()){
          return $data;
        }
      }if(!empty($resultset)){
        return $resultset;
      }
      $conn->close();
}

function fetch_Admin_login_data($table,$filled,$data){
   $conn = mysqli_connect($this->host,$this->user,$this->password,$this->DB);
   $sql  = ("SELECT * FROM $table WHERE $filled ='$data' ");
   $query = $conn->query($sql) or print(mysqli_error($conn));
   $row = mysqli_fetch_array($query);
   if($query == true){
    return $row;
   }else{
    return false;
   }
   $conn->close();
}


function cart_Update($id,$quantity,$price,$total){
   $conn = mysqli_connect($this->host, $this->user, $this->password, $this->DB);

   $new_total = $price * $quantity;

   $sql  = "UPDATE addtocart SET quantity = '".$quantity."', total = '".$new_total."' WHERE id ='".$id."'";
   $query = $conn->query($sql) or print(mysqli_error($conn));
        if($query == true){
         return true;
        }else{
           return false;
        } 
        $conn->close();  
}


function cartEdit_Update($product_code,$new_quantity,$new_total){
   $conn = mysqli_connect($this->host, $this->user, $this->password, $this->DB);
    $sql = "UPDATE addtocart SET quantity ='".$new_quantity."', total ='".$new_total."' WHERE id ='".$product_code."'";
    $query = $conn->query($sql) or print(mysqli_error($conn));
    if ($query == true) {
      return true;  
    }else{
      return false;   
    }
    $conn->close();
}




function addtocartInsert($product_code,$product_name,$brand,$category,$color,$size,$quantity,$price,$new_total,$cart_date,$sales_rep,$unit){
  $conn = mysqli_connect($this->host, $this->user, $this->password, $this->DB);
  $product_code1          =  mysqli_escape_string($conn, htmlentities(trim($product_code)));
  $product_name1          =  mysqli_escape_string($conn, htmlentities(trim($product_name)));
  $brand1         =  mysqli_escape_string($conn, htmlentities(trim($brand)));
  $category1              =  mysqli_escape_string($conn, htmlentities(trim($category)));
  $color1              =  mysqli_escape_string($conn, htmlentities(trim($color)));
  $size1              =  mysqli_escape_string($conn, htmlentities(trim($size)));
  $price1                 =  mysqli_escape_string($conn, htmlentities(trim($price)));
  $quantity1              =  mysqli_escape_string($conn, htmlentities(trim($quantity)));
  $cart_date1             =  mysqli_escape_string($conn, htmlentities(trim($cart_date)));
  $sales_rep1             =  mysqli_escape_string($conn, htmlentities(trim($sales_rep)));
  $new_total1                 =  mysqli_escape_string($conn, htmlentities(trim($new_total)));
  $unit1                 =  mysqli_escape_string($conn, htmlentities(trim($unit)));
  $sql = 'INSERT INTO addtocart(product_code,product_name,brand,category,color,size,quantity,price,total,cart_date,sales_rep,unit) VALUES (?,?,?,?,?,?,?,?,?,?,?,?)';
   // $query = $conn->prepare($sql);
   $query = $conn->prepare($sql);
   $query->bind_param('ssssssssssss',$product_code1,$product_name1,$brand1,$category1,$color1,$size1,$quantity1,$price1,$new_total1,$cart_date1,$sales_rep1,$unit1);
     if ($query->execute()){
         return true;
      }else{
         return false;
      }
   $conn->close();
}



function select_check(){
   $conn = mysqli_connect($this->host,$this->user,$this->password,$this->DB);
   $us = $_SESSION['Admin'];
   $sql  = "SELECT * FROM addtocart WHERE sales_rep='".$us."'";
   $query = $conn->prepare($sql);
   $query->execute();
   $result = $query->get_result();
     if($result->num_rows > 0){
       while ($rows=$result->fetch_assoc()) {
             $resultset[] = $rows;
        }
    } if(!empty($resultset)){
      return $resultset;
  }
  $conn->close();
}


function addToCart(){
   $conn = mysqli_connect($this->host, $this->user, $this->password, $this->DB);
   $resultset = array();
   $sql = ("SELECT * FROM products ORDER BY id ASC");
   $query =$conn->prepare($sql);
   $query->execute();
   $result = $query->get_result();
    if($result->num_rows > 0){
        while ($rows=$result->fetch_assoc()) {
               $resultset[] = $rows;
      }
  }$conn->close();
      return $resultset;
}

function CheckOut_User_cart($image,$type,$category,$quantity,$uplod_file,$price,$total,$order_date,$timez,$month_year,$delivery,$user,$email,$phone,$Order_ID,$Order_Status,$jobID){
  $conn       = mysqli_connect($this->host, $this->user, $this->password, $this->DB);
  $image      = mysqli_escape_string($conn, htmlentities(trim($image)));
  $type       = mysqli_escape_string($conn, htmlentities(trim($type)));
  $category   = mysqli_escape_string($conn, htmlentities(trim($category)));
  $quantity   = mysqli_escape_string($conn, htmlentities(trim($quantity)));
  $uplod_file = mysqli_escape_string($conn, htmlentities(trim($uplod_file)));
  $price      = mysqli_escape_string($conn, htmlentities(trim($price)));
  $total      = mysqli_escape_string($conn, htmlentities(trim($total)));
  $order_date = mysqli_escape_string($conn, htmlentities(trim($order_date)));
  $timez      = mysqli_escape_string($conn, htmlentities(trim($timez)));
  $month_year = mysqli_escape_string($conn, htmlentities(trim($month_year)));
  $delivery   = mysqli_escape_string($conn, htmlentities(trim($delivery)));
  $user       = mysqli_escape_string($conn, htmlentities(trim($user)));
  $email      = mysqli_escape_string($conn, htmlentities(trim($email)));
  $phone      = mysqli_escape_string($conn, htmlentities(trim($phone)));
  $Order_ID   = mysqli_escape_string($conn, htmlentities(trim($Order_ID)));
  $sql = "INSERT INTO order_service(image,type,category,quantity,uplod_file,price,total,order_date,timez,month_year,
  delivery,user,email,phone,Order_ID,Order_Status,Job_id) 
     VALUES(?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?)";
  $query = $conn->prepare($sql) or print(mysqli_error($conn));
  $query->bind_param('sssssssssssssssss',$image,$type,$category,$quantity,$uplod_file,$price,$total,$order_date,$timez,$month_year,$delivery,$user,$email,$phone,$Order_ID,$Order_Status,$jobID);
   if ($query->execute()){
      return true;
  $this->checkOut_Items_InCart($user); 
  }else{
      return false;
  }
   $conn->close();
}

function checkOut_Items_InCart($data){
   $conn = mysqli_connect($this->host, $this->user, $this->password, $this->DB);
   $sql  = "DELETE FROM addtocart WHERE user='".$data."'";
   $query = $conn->query($sql) or print(mysqli_error($conn));
     if($query == true){
        echo '<script>swal("Success","Check Out Successful","success");</script>';
        echo '<script>window.location="?action=checkOUT"</script>';
    }else{
          echo '<script>swal("Error","Unable To Check Out","error");</script>';
    } 
 $conn->close();  
}

function allProductAdmin(){
   $conn = mysqli_connect($this->host, $this->user, $this->password, $this->DB);
   $resultset = array();
   $sql = ("SELECT * FROM products");
   $query = $conn->prepare($sql);
   $query->execute();
   $result = $query->get_result();
     if($result->num_rows > 0){
       while($rows=$result->fetch_assoc()){
          $resultset[] = $rows;
     }
   }$conn->close();
 return $resultset;
}



function SelectTemplate($data){
   $conn = mysqli_connect($this->host, $this->user, $this->password, $this->DB);
   $resultset = array();
   $sql = ("SELECT * FROM templates WHERE category='$data'");
   $query = $conn->prepare($sql);
   $query->execute();
   $result = $query->get_result();
     if($result->num_rows > 0){
        while($rows=$result->fetch_assoc()){
          $resultset[] = $rows;
     }
   }$conn->close();
 return $resultset;
}


function selectAllProduct(){
   $conn = mysqli_connect($this->host, $this->user, $this->password, $this->DB);
   $resultset = array();
   $sql = ("SELECT * FROM products");
   $query = $conn->prepare($sql);
   $query->execute();
   $result = $query->get_result();
     if($result->num_rows > 0){
        while($rows=$result->fetch_assoc()){
          $resultset[] = $rows;
    }
  }$conn->close();
     return $resultset;
}

function allReferal(){
   $conn = mysqli_connect($this->host, $this->user, $this->password, $this->DB);
   $resultset = array();
   $sql = ("SELECT a.*,b.referral_id,b.reference_id FROM users a INNER JOIN (referral b) ON a.referral_id=b.referral_id");
   $query = $conn->prepare($sql);
   $query->execute();
   $result = $query->get_result();
     if($result->num_rows > 0){
        while ($rows=$result->fetch_assoc()){
              $resultset[] = $rows;
    }
  }
  $conn->close();
  return $resultset;
}

function Targeted_information_single($table,$field,$data){
   $conn = mysqli_connect($this->host, $this->user, $this->password, $this->DB);
   $sql = ("SELECT a.*,b.referral_id,b.reference_id FROM $table a INNER JOIN (referral b) ON a.referral_id=b.referral_id WHERE a.$field = '$data' ");
   $query = $conn->query($sql) or print(mysqli_error($conn));
   $row = mysqli_fetch_array($query);
   if($query == true){
       return $row;
    }else{
       return false;
  }
   $conn->close();
}

function allCategory(){
   $conn = mysqli_connect($this->host, $this->user, $this->password, $this->DB);
   $resultset = array();
   $sql = ("SELECT * FROM category");
   $query = $conn->prepare($sql);
   $query->execute();
   $result = $query->get_result();
     if($result->num_rows > 0){
         while($rows=$result->fetch_assoc()){
               $resultset[] = $rows;
       }
   }
  $conn->close();
  return $resultset;
} 


function allMaterialCategory(){
   $conn = mysqli_connect($this->host, $this->user, $this->password, $this->DB);
   $resultset = array();
   $sql = ("SELECT * FROM material_category");
   $query = $conn->prepare($sql);
   $query->execute();
   $result = $query->get_result();
     if($result->num_rows > 0){
         while($rows=$result->fetch_assoc()){
               $resultset[] = $rows;
       }
   }
  $conn->close();
  return $resultset;
} 


// function allStock(){
//    $conn = mysqli_connect($this->host, $this->user, $this->password, $this->DB);
//    $resultset = array();
//    $sql = ("SELECT * FROM stock");
//    $query = $conn->prepare($sql);
//    $query->execute();
//    $result = $query->get_result();
//      if($result->num_rows > 0){
//          while($rows=$result->fetch_assoc()){
//                $resultset[] = $rows;
//        }
//    }
//   $conn->close();
//   return $resultset;
// }

function GETcurrentNumber($data,$tableName,$columnName,$dataChecked){
   $conn = mysqli_connect($this->host, $this->user, $this->password, $this->DB);
   $resultset = array();
   $sql = ("SELECT $data FROM $tableName WHERE $columnName='$dataChecked'");
   $query = $conn->prepare($sql);
   $query->execute();
   $result = $query->get_result();
     if($result->num_rows > 0){
         while($rows=$result->fetch_assoc()){
               $resultset[] = $rows;
       }
   }
  $conn->close();
  return $resultset;
}

function check_if_Record_Exist($tableName,$columnName,$dataChecked){
   $conn = mysqli_connect($this->host, $this->user, $this->password, $this->DB);
   $resultset = array();
   $sql = ("SELECT * FROM $tableName WHERE $columnName='$dataChecked'");
   $query= $conn->query($sql); 
      while($fetch=$query->fetch_assoc()){
        if($fetch==true){
            return true;             
       }else{
            return false;
       }
    }
  $conn->close(); 
}


function check_if_Record_Existtwo($tableName,$columnName,$dataChecked,$columnName1,$dataChecked1){
   $conn = mysqli_connect($this->host, $this->user, $this->password, $this->DB);
   $resultset = array();
   $sql = ("SELECT * FROM $tableName WHERE $columnName='$dataChecked' AND $columnName1='$dataChecked1'");
   $query= $conn->query($sql); 
      while($fetch=$query->fetch_assoc()){
        if($fetch==true){
            return true;             
       }else{
            return false;
       }
    }
  $conn->close(); 
}


function allRawMaterial(){
   $conn = mysqli_connect($this->host, $this->user, $this->password, $this->DB);
   $resultset = array();
   $sql = ("SELECT * FROM material_stock");
   $query = $conn->prepare($sql);
   $query->execute();
   $result = $query->get_result();
     if($result->num_rows > 0){
         while($rows=$result->fetch_assoc()){
               $resultset[] = $rows;
       }
   }
  $conn->close();
  return $resultset;
}

function allSupplier(){
   $conn = mysqli_connect($this->host, $this->user, $this->password, $this->DB);
   $resultset = array();
   $sql = ("SELECT * FROM supplier_table");
   $query = $conn->prepare($sql);
   $query->execute();
   $result = $query->get_result();
     if($result->num_rows > 0){
         while($rows=$result->fetch_assoc()){
               $resultset[] = $rows;
       }
   }
  $conn->close();
  return $resultset;
}

function allReturn(){
   $conn = mysqli_connect($this->host, $this->user, $this->password, $this->DB);
   $resultset = array();
   $sql = ("SELECT * FROM return_table");
   $query = $conn->prepare($sql);
   $query->execute();
   $result = $query->get_result();
     if($result->num_rows > 0){
         while($rows=$result->fetch_assoc()){
               $resultset[] = $rows;
       }
   }
  $conn->close();
  return $resultset;
}

// function selectCategory($table){
//   $conn = mysqli_connect($this->host, $this->user, $this->password, $this->DB);
//   $sql  = "SELECT * FROM $table";
//   $query= $conn->query($sql); 
//     while($fetch=$query->fetch_assoc()){
//          if($fetch['category']=="Monogramming") {
//   }  elseif ($fetch['category']=="KordPrinting"){  
//   }else{
//     echo '<a class="dropdown-item" href="?action=procats&&?cat='.$fetch['id'].'&Re_f='.$fetch['category'].'">'.$fetch['category'].'</a>';
//     }
//  }
// $conn->close();     
// }

// function selectPartner($table){
//    $conn = mysqli_connect($this->host, $this->user, $this->password, $this->DB);
//    $sql  = "SELECT * FROM $table";
//    $query= $conn->query($sql); 
//      while($fetch=$query->fetch_assoc()){
//        if($fetch==true){
//            echo '<option>'.$fetch['username'].'</option>';                  
//       }
//    }
//   $conn->close();     
// }


function selectCate($table){
   $conn = mysqli_connect($this->host, $this->user, $this->password, $this->DB);
   $sql  = "SELECT * FROM $table";
   $query= $conn->query($sql); 
     while($fetch=$query->fetch_assoc()){
       if($fetch==true){
           echo '<option>'.$fetch['category'].'</option>';                  
      }
   }
  $conn->close();     
}


function selectPartner($table){
   $conn = mysqli_connect($this->host, $this->user, $this->password, $this->DB);
   $sql  = "SELECT * FROM $table";
   $query= $conn->query($sql); 
     while($fetch=$query->fetch_assoc()){
       if($fetch==true){
           echo '<option>'.$fetch['username'].'</option>';                  
      }
   }
  $conn->close();     
}

function selectQuote($table){
   $conn = mysqli_connect($this->host, $this->user, $this->password, $this->DB);
   $sql  = "SELECT * FROM $table";
   $query= $conn->query($sql); 
      while($fetch=$query->fetch_assoc()){
        if($fetch==true){
             echo '<option>'.$fetch['name'].'</option>';                  
       }
    }
  $conn->close();     
}

function Select_All_DATA_Invoice(){
  $resultset= array();
  $conn = mysqli_connect($this->host,$this->user,$this->password,$this->DB);
  $sql = "SELECT * FROM jobs WHERE job_status='completed' GROUP BY Order_ID ";
  $query = $conn->prepare($sql);
  $query->execute();
  $result =$query->get_result();
     if ($result->num_rows > 0) {
  while ($row = $result->fetch_assoc()) {
         $resultset[]= $row;
     }
  }
  return $resultset;
}



function Select_All_DATA($table){
    $resultset= array();
        $conn = mysqli_connect($this->host,$this->user,$this->password,$this->DB);
            $sql = "SELECT * FROM $table";
                $query = $conn->prepare($sql);
                    $query->execute();
                        $result =$query->get_result();
                            if ($result->num_rows > 0) {
                                while ($row = $result->fetch_assoc()) {
                                    $resultset[]= $row;
                                      }
                                     }
                                    return $resultset;
                                                    }

function selectRegularAdd($table){
   $conn = mysqli_connect($this->host, $this->user, $this->password, $this->DB);
   $sql  = "SELECT * FROM $table";
   $query= $conn->query($sql); 
       while($fetch=$query->fetch_assoc()){
         
      echo '<option class="dropdown-item" value="'.$fetch['regular_price'].'">₦'.$fetch['regular_price']. " " .$fetch['name'].'</option>';
        
    }
  $conn->close();     
}

function selectDistributorAdd($table){
   $conn = mysqli_connect($this->host, $this->user, $this->password, $this->DB);
   $sql  = "SELECT * FROM $table";
   $query= $conn->query($sql); 
       while($fetch=$query->fetch_assoc()){
         
      echo '<option class="dropdown-item" value="'.$fetch['distributor_price'].'">₦'.$fetch['distributor_price']. " " .$fetch['name'].'</option>';
        
    }
  $conn->close();     
}

function selectCustomer($table){
   $conn = mysqli_connect($this->host, $this->user, $this->password, $this->DB);
   $sql  = "SELECT * FROM $table";
   $query= $conn->query($sql); 
       while($fetch=$query->fetch_assoc()){
         
      echo '<option class="dropdown-item">'.$fetch['title']."-".$fetch['fullname']. "-" .$fetch['account_id'].'</option>';
        
    }
  $conn->close();     
}


function selectPrivilege($table){
   $conn = mysqli_connect($this->host, $this->user, $this->password, $this->DB);
   $sql  = "SELECT * FROM $table";
   $query= $conn->query($sql); 
       while($fetch=$query->fetch_assoc()){
         
      echo '<option class="dropdown-item">'.$fetch['privilege_Name'].'</option>';
        
    }
  $conn->close();     
}


function GET_Privilege(){
         $resultset = array();
         $conn = mysqli_connect($this->host, $this->user, $this->password, $this->DB);
         $sql  = "SELECT * FROM privilege";
         $query = $conn->prepare($sql);
         $query->execute();
         $result = $query->get_result();
         if($result->num_rows > 0){
             while ($rows = $result->fetch_assoc()){
                    $resultset[] = $rows;
                   }
            $conn->close();
         }
         return $resultset;
}



function selectUsertoPrivilege($table){
   $conn = mysqli_connect($this->host, $this->user, $this->password, $this->DB);
   $sql  = "SELECT * FROM $table";
   $query= $conn->query($sql); 
       while($fetch=$query->fetch_assoc()){
         
      echo '<option class="dropdown-item">'.$fetch['name']. "-" .$fetch['username'].'</option>';
        
    }
  $conn->close();     
}







function selectProduct($table){
   $conn = mysqli_connect($this->host, $this->user, $this->password, $this->DB);
   $sql  = "SELECT * FROM $table";
   $query= $conn->query($sql); 
       while($fetch=$query->fetch_assoc()){
         
      echo '<option class="dropdown-item" value="'.$fetch['item_code'].'">'.$fetch['product']." _".$fetch['unit']." _".$fetch['color']." _".$fetch['size'].'</option>';
        
    }
  $conn->close();     
}


function selectProductAdd($table){
 $conn = mysqli_connect($this->host, $this->user, $this->password, $this->DB);
   $sql  = "SELECT * FROM $table";
   $query= $conn->query($sql); 
       while($fetch=$query->fetch_assoc()){
         
      echo '<option class="dropdown-item" value="'.$fetch["product_code"].'">'.$fetch['ProductName'].'</option>';
        
    }
  $conn->close();     
}


function selectProductWare($table){
 $conn = mysqli_connect($this->host, $this->user, $this->password, $this->DB);
   $sql  = "SELECT * FROM $table";
   $query= $conn->query($sql); 
       while($fetch=$query->fetch_assoc()){
         
      echo '<option class="dropdown-item" value="'.$fetch["product_code"].'">'.$fetch['product_name'].'</option>';
        
    }
  $conn->close();     
}


function selectSupplierAdd($table){
   $conn = mysqli_connect($this->host, $this->user, $this->password, $this->DB);
   $sql  = "SELECT * FROM $table";
   $query= $conn->query($sql); 
       while($fetch=$query->fetch_assoc()){
         
      echo '<option class="dropdown-item">'.$fetch['supplier_id']. "-" .$fetch['supplier_name'].'</option>';
        
    }
  $conn->close();     
}



function Fetch_Priviledge_Assigned($table,$data){
    $resultset= array();
      $conn = mysqli_connect($this->host,$this->user,$this->password,$this->DB);
        $sql = "SELECT * FROM $table WHERE username='$data'";
                $query = $conn->prepare($sql);
                    $query->execute();
                        $result =$query->get_result();
                            if ($result->num_rows > 0) {
                                while ($row = $result->fetch_assoc()) {
                                    $resultset[]= $row;
                                      }
                                     }
                                    return $resultset;
}





function selectCategoryAdd($table){
   $conn = mysqli_connect($this->host, $this->user, $this->password, $this->DB);
   $sql  = "SELECT * FROM $table";
   $query= $conn->query($sql); 
       while($fetch=$query->fetch_assoc()){
          if($fetch['category']=="Monogramming") {
        }elseif ($fetch['category']=="KordPrinting"){  
     }else{
      echo '<option class="dropdown-item" href="?action=procats&&?cat='.$fetch['id'].'&Re_f='.$fetch['category'].'">'.$fetch['category'].'</option>';
        }
    }
  $conn->close();     
}



function selectRawMaterialAdd($table){
   $conn = mysqli_connect($this->host, $this->user, $this->password, $this->DB);
   $sql  = "SELECT * FROM $table";
   $query= $conn->query($sql); 
       while($fetch=$query->fetch_assoc()){
         
      echo '<option class="dropdown-item">'.$fetch['material'].'</option>';
        
    }
  $conn->close();     
}



function selectCategory($table){
   $conn = mysqli_connect($this->host, $this->user, $this->password, $this->DB);
   $sql  = "SELECT * FROM $table";
   $query= $conn->query($sql); 
       while($fetch=$query->fetch_assoc()){
         
      echo '<option class="dropdown-item">'.$fetch['material'].'</option>';
        
    }
  $conn->close();     
}


function selectSupplierNameAdd($table){
   $conn = mysqli_connect($this->host, $this->user, $this->password, $this->DB);
   $sql  = "SELECT * FROM $table";
   $query= $conn->query($sql); 
       while($fetch=$query->fetch_assoc()){
         
     echo '<option class="dropdown-item">'.$fetch['supplier_id']. "-" .$fetch['supplier_name'].'</option>';
        
    }
  $conn->close();     
}


function selectSupplierNameRes($table){
   $conn = mysqli_connect($this->host, $this->user, $this->password, $this->DB);
   $sql  = "SELECT * FROM $table";
   $query= $conn->query($sql); 
       while($fetch=$query->fetch_assoc()){
         
     echo '<option class="dropdown-item">'.$fetch['supplier_name'].'</option>';
        
    }
  $conn->close();     
}


function selectSupplierIDRes($table){
   $conn = mysqli_connect($this->host, $this->user, $this->password, $this->DB);
   $sql  = "SELECT * FROM $table";
   $query= $conn->query($sql); 
       while($fetch=$query->fetch_assoc()){
         
     echo '<option class="dropdown-item" value="'.$fetch['supplier_id'].'">'.$fetch['supplier_id']. "-" .$fetch['supplier_name'].'</option>';
        
    }
  $conn->close();     
}







function selectCategorygraphic($table){
   $conn = mysqli_connect($this->host, $this->user, $this->password, $this->DB);
   $sql  = "SELECT * FROM $table";
   $query= $conn->query($sql); 
       while($fetch=$query->fetch_assoc()){
          if($fetch['category']=="Monogramming") {
        }elseif ($fetch['category']=="KordPrinting"){  
     }else{
      echo '<option class="dropdown-item" href="?action=procats&&?cat='.$fetch['id'].'&Re_f='.$fetch['category'].'">'.$fetch['category'].'</option>';
        }
    }
  $conn->close();     
}

function selecttypeAdd($table){
   $conn = mysqli_connect($this->host, $this->user, $this->password, $this->DB);
   $sql  = "SELECT * FROM $table";
   $query= $conn->query($sql); 
      while($fetch=$query->fetch_assoc()){
          if($fetch['type']=="Monogramming") {
    }elseif ($fetch['type']=="KordPrinting"){  
      }else{
        echo '<option href="?action=procats&&?cat='.$fetch['id'].'&Re_f='.$fetch['type'].'">'.$fetch['type'].'</option>';
          }
       }
   $conn->close();     
}
 
function userAccount($firstname,$lastname,$password,$confirmpassword,$email,$username,$phone,$via,$address,$account_id,$referral_id,$status,$reg_date){
   $conn = mysqli_connect($this->host, $this->user, $this->password, $this->DB);
   $firstname             =  mysqli_escape_string($conn, htmlentities(trim($firstname)));
   $lastname              =  mysqli_escape_string($conn, htmlentities(trim($lastname)));
   $password              =  mysqli_escape_string($conn, htmlentities(trim($password)));
   $confirmpassword       =  mysqli_escape_string($conn, htmlentities(trim($confirmpassword)));
   $email                 =  mysqli_escape_string($conn, htmlentities(trim($email)));
   $username              =  mysqli_escape_string($conn, htmlentities(trim($username)));
   $phone                 =  mysqli_escape_string($conn, htmlentities(trim($phone)));
   $via                   =  mysqli_escape_string($conn, htmlentities(trim($via)));
   $address               =  mysqli_escape_string($conn, htmlentities(trim($address)));
   $account_id            =  mysqli_escape_string($conn, htmlentities(trim($account_id)));
   $referral_id           =  mysqli_escape_string($conn, htmlentities(trim($referral_id)));
   $status                =  mysqli_escape_string($conn, htmlentities(trim($status)));
   $reg_date              =  mysqli_escape_string($conn, htmlentities(trim($reg_date)));
   $sql = 'INSERT INTO users(firstname,lastname,password,confirmpassword,email,username,phone,via,address,
        account_id,referral_id,status,reg_date) VALUES (?,?,?,?,?,?,?,?,?,?,?,?,?)';
   // $sql2 = 'INSERT INTO referral(referral_id,reference_id) VALUES(?,?)';
   $query = $conn->prepare($sql);
   // $query2 = $conn->prepare($sql2);
   $query->bind_param('sssssssssssss',$firstname,$lastname,$password,$confirmpassword,$email,$username,$phone,$via,$address,$account_id,$referral_id,$status,$reg_date);
   // $query2->bind_param('ss',$referral_id,$reference_id);
      if ($query->execute()){
          return true;
      }else{
          return false;
      }
      $conn->close();
}

function partnerAccount($firstname,$lastname,$username,$email,$password,$phone,$via,$AccountName,$AccountNumber,$Bankname,$companyName,$serviceType,$address,$city,$partnerID,$balance,$status,$reg_date){
  $conn = mysqli_connect($this->host, $this->user, $this->password, $this->DB);
  $firstname             =  mysqli_escape_string($conn, htmlentities(trim($firstname)));
  $lastname              =  mysqli_escape_string($conn, htmlentities(trim($lastname)));
  $username              =  mysqli_escape_string($conn, htmlentities(trim($username)));
  $email                 =  mysqli_escape_string($conn, htmlentities(trim($email)));
  $password              =  mysqli_escape_string($conn, htmlentities(trim($password)));
  $phone                 =  mysqli_escape_string($conn, htmlentities(trim($phone)));
  $via                   =  mysqli_escape_string($conn, htmlentities(trim($via)));
  $AccountName           =  mysqli_escape_string($conn, htmlentities(trim($AccountName)));
  $AccountNumber         =  mysqli_escape_string($conn, htmlentities(trim($AccountNumber)));
  $Bankname              =  mysqli_escape_string($conn, htmlentities(trim($Bankname)));
  $companyName           =  mysqli_escape_string($conn, htmlentities(trim($companyName)));
  $serviceType           =  mysqli_escape_string($conn, htmlentities(trim($serviceType)));
  $address               =  mysqli_escape_string($conn, htmlentities(trim($address)));
  $city                  =  mysqli_escape_string($conn, htmlentities(trim($city)));
  $partnerID             =  mysqli_escape_string($conn, htmlentities(trim($partnerID)));
  $balance               =  mysqli_escape_string($conn, htmlentities(trim($balance)));
  $status                =  mysqli_escape_string($conn, htmlentities(trim($status)));
  $reg_date              =  mysqli_escape_string($conn, htmlentities(trim($reg_date)));
  $sql = 'INSERT INTO partner(firstname,lastname,username,email,password,phone,via,AccountName,AccountNumber,Bankname,companyName,serviceType,address,city,partnerID,balance,status,reg_date) VALUES (?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?)';
  $query = $conn->prepare($sql);
  $query->bind_param('ssssssssssssssssss',$firstname,$lastname,$username,$email,$password,$phone,
  $via,$AccountName,$AccountNumber,$Bankname,$companyName,$serviceType,$address,$city,$partnerID,$balance,$status,$reg_date);
    if ($query->execute()){
        return true;
    }else{
        return false;
    }
    $conn->close();
}


function addToCarts($image,$type,$category,$style,$description,$price,$quantity,$size,$color,$lamination,$printing,$delivery,$uplod_file,$design_description,$logo_name,$logo_slogan,$field_or_industry,$product_or_services,$add_date,$user,$email,$phone,$total,$ID){
  $conn = mysqli_connect($this->host, $this->user, $this->password, $this->DB);
  $image                 =  mysqli_escape_string($conn, htmlentities(trim($image)));
  $type                  =  mysqli_escape_string($conn, htmlentities(trim($type)));
  $category              =  mysqli_escape_string($conn, htmlentities(trim($category)));
  $style                 =  mysqli_escape_string($conn, htmlentities(trim($style)));
  $description           =  mysqli_escape_string($conn, htmlentities(trim($description)));
  $price                 =  mysqli_escape_string($conn, htmlentities(trim($price)));
  $quantity              =  mysqli_escape_string($conn, htmlentities(trim($quantity)));
  $size                  =  mysqli_escape_string($conn, htmlentities(trim($size)));
  $color                 =  mysqli_escape_string($conn, htmlentities(trim($color)));
  $lamination            =  mysqli_escape_string($conn, htmlentities(trim($lamination)));
  $printing              =  mysqli_escape_string($conn, htmlentities(trim($printing)));
  $delivery              =  mysqli_escape_string($conn, htmlentities(trim($delivery)));
  $uplod_file            =  mysqli_escape_string($conn, htmlentities(trim($uplod_file)));
  $design_description    =  mysqli_escape_string($conn, htmlentities(trim($design_description)));
  $logo_name             =  mysqli_escape_string($conn, htmlentities(trim($logo_name)));
  $logo_slogan           =  mysqli_escape_string($conn, htmlentities(trim($logo_slogan)));
  $field_or_industry     =  mysqli_escape_string($conn, htmlentities(trim($field_or_industry)));
  $product_or_services   =  mysqli_escape_string($conn, htmlentities(trim($product_or_services)));
  $add_date              =  mysqli_escape_string($conn, htmlentities(trim($add_date)));
  $user                  =  mysqli_escape_string($conn, htmlentities(trim($user)));
  $email                 =  mysqli_escape_string($conn, htmlentities(trim($email)));
  $phone                 =  mysqli_escape_string($conn, htmlentities(trim($phone)));
  $total                 =  mysqli_escape_string($conn, htmlentities(trim($total)));
  $ID                    =  mysqli_escape_string($conn, htmlentities(trim($ID)));
  $sql = 'INSERT INTO addtocart(image,type,category,style,description,price,quantity,size,color,lamination,
          printing,delivery,uplod_file,design_description,logo_name,logo_slogan,field_or_industry,product_or_services,add_date,user,email,phone,total,item_ID) VALUES (?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?)';
   $query = $conn->prepare($sql);
   $query->bind_param('ssssssssssssssssssssssss',$image,$type,$category,$style,$description,$price,$quantity,$size,$color,$lamination,$printing,$delivery,$uplod_file,$design_description,$logo_name,$logo_slogan,$field_or_industry,$product_or_services,$add_date,$user,$email,$phone,$total,$ID);
     if ($query->execute()){
         return true;
      }else{
         return false;
      }
   $conn->close();
}

function Insert_Order_Quote($name,$email,$phone,$address,$description,$qty,$design,$Quote_date,$QuoteID){
         $conn = mysqli_connect($this->host, $this->user, $this->password, $this->DB);
         $name            =  mysqli_escape_string($conn, htmlentities(trim($name)));
         $email           =  mysqli_escape_string($conn, htmlentities(trim($email)));
         $phone           =  mysqli_escape_string($conn, htmlentities(trim($phone)));
         $address         =  mysqli_escape_string($conn, htmlentities(trim($address)));
         $description     =  mysqli_escape_string($conn, htmlentities(trim($description)));
         $qty             =  mysqli_escape_string($conn, htmlentities(trim($qty)));
         $design          =  mysqli_escape_string($conn, htmlentities(trim($design)));
         $Quote_date      =  mysqli_escape_string($conn, htmlentities(trim($Quote_date)));
         $QuoteID         =  mysqli_escape_string($conn, htmlentities(trim($QuoteID)));
         $sql = 'INSERT INTO order_quote(name,email,phone,address,description,qty,design,Quote_date,QuoteID) VALUES (?,?,?,?,?,?,?,?,?)';
          $query = $conn->prepare($sql);
          $query->bind_param('sssssssss',$name,$email,$phone,$address,$description,$qty,$design,$Quote_date,$QuoteID);
            if ($query->execute()){
                  return true;
                    }else{
                       return false;
                           }
        $conn->close();
}
  
function Insert_Graphic_Design($category,$colors,$details,$price,$quantity,$total,$info,$designIdea,$user,$email,$phone,$add_date){
         $conn = mysqli_connect($this->host, $this->user, $this->password, $this->DB);
         $category        =  mysqli_escape_string($conn, htmlentities(trim($category)));
         $colors          =  mysqli_escape_string($conn, htmlentities(trim($colors)));
         $details         =  mysqli_escape_string($conn, htmlentities(trim($details)));
         $price           =  mysqli_escape_string($conn, htmlentities(trim($price)));
         $quantity        =  mysqli_escape_string($conn, htmlentities(trim($quantity)));
         $total           =  mysqli_escape_string($conn, htmlentities(trim($total)));
         $info            =  mysqli_escape_string($conn, htmlentities(trim($info)));
         $designIdea      =  mysqli_escape_string($conn, htmlentities(trim($designIdea)));
         $user            =  mysqli_escape_string($conn, htmlentities(trim($user)));
         $email           =  mysqli_escape_string($conn, htmlentities(trim($email)));
         $phone           =  mysqli_escape_string($conn, htmlentities(trim($phone)));
         $add_date        =  mysqli_escape_string($conn, htmlentities(trim($add_date)));
         $sql = 'INSERT INTO graphic_design(category,colors,details,price,quantity,total,info,designIdea,user,email,phone,add_date) VALUES (?,?,?,?,?,?,?,?,?,?,?,?)';
          $query = $conn->prepare($sql);
          $query->bind_param('ssssssssssss',$category,$colors,$details,$price,$quantity,$total,$info,$designIdea,$user,$email,$phone,$add_date);
            if ($query->execute()){
                  return true;
                    }else{
                       return false;
                      }
        $conn->close();
}


function Insert_Message_Correction($customer,$partner,$job_id,$message,$message_date){
         $conn = mysqli_connect($this->host, $this->user, $this->password, $this->DB);
         $customer       =  mysqli_escape_string($conn, htmlentities(trim($customer)));
         $partner        =  mysqli_escape_string($conn, htmlentities(trim($partner)));
         $job_id         =  mysqli_escape_string($conn, htmlentities(trim($job_id)));
         $message        =  mysqli_escape_string($conn, htmlentities(trim($message)));
         $message_date   =  mysqli_escape_string($conn, htmlentities(trim($message_date)));
         $sql = 'INSERT INTO correction_message(customer,partner,job_id,message,msg_date) VALUES (?,?,?,?,?)';
          $query = $conn->prepare($sql);
          $query->bind_param('sssss',$customer,$partner,$job_id,$message,$message_date);
            if ($query->execute()){
                  return true;
                    }else{
                       return false;
                      }
        $conn->close();
}

function check_If_Email_Exist($table,$filled,$data){
         $conn = mysqli_connect($this->host, $this->user, $this->password, $this->DB);
         $sql = "SELECT * FROM $table WHERE $filled = '$data' ";
         $query = $conn->query($sql) or print(mysqli_error($conn));
         $row = mysqli_num_rows($query);
            if ($row == true){
                return true;
            }else{
                return false;
          }
                $conn->close();
}

function count_Mycart($table,$row,$data){
          $conn = mysqli_connect($this->host, $this->user, $this->password, $this->DB);
          $sql = "SELECT COUNT(`cart_id`) FROM $table WHERE $row='$data' ";
          $query = $conn->query($sql) or print(mysqli_error($conn));
          $count = mysqli_fetch_row($query);
          echo $count[0];
          $conn->close();
}

function count_Message($table,$row,$data){
          $conn = mysqli_connect($this->host, $this->user, $this->password, $this->DB);
          $sql = "SELECT COUNT(`id`) FROM $table WHERE $row='$data' ";
          $query = $conn->query($sql) or print(mysqli_error($conn));
          $count = mysqli_fetch_row($query);
          echo $count[0];
          $conn->close();
}


function count_Mycart_and_REDIRECT($table,$row,$data){
          $conn = mysqli_connect($this->host, $this->user, $this->password, $this->DB);
          $sql = "SELECT COUNT(`cart_id`) FROM $table WHERE $row='$data' ";
          $query = $conn->query($sql) or print(mysqli_error($conn));
          $count = mysqli_fetch_row($query);

          if ($count[0]=="0") {
          include("View/emptycart.php");
          }else{
           include("View/cartlist.php");
          }
          $conn->close();
}

function check_If_ITEM_IS_IN_CART($table,$filled,$data,$field2,$data2){
         $conn = mysqli_connect($this->host, $this->user, $this->password, $this->DB);
         $sql = "SELECT * FROM $table WHERE $filled = '$data' AND $field2='$data2' ";
         $query = $conn->query($sql) or print(mysqli_error($conn));
         $row = mysqli_num_rows($query);
            if ($row == true){
                return true;
            }else{
                return false;
          } 
          $conn->close();
}

function users(){
         $resultset = array();
         $conn = mysqli_connect($this->host, $this->user, $this->password, $this->DB);
         $sql  = "SELECT * FROM admin";
         $query = $conn->prepare($sql);
         $query->execute();
         $result = $query->get_result();
         if($result->num_rows > 0){
             while ($rows = $result->fetch_assoc()){
                    $resultset[] = $rows;
                   }
            $conn->close();
         }
         return $resultset;
}


function customer(){
         $resultset = array();
         $conn = mysqli_connect($this->host, $this->user, $this->password, $this->DB);
         $sql  = "SELECT * FROM customer_distributor";
         $query = $conn->prepare($sql);
         $query->execute();
         $result = $query->get_result();
         if($result->num_rows > 0){
             while ($rows = $result->fetch_assoc()){
                    $resultset[] = $rows;
                   }
            $conn->close();
         }
         return $resultset;
}



function daily_sales(){
         $resultset = array();
         $conn = mysqli_connect($this->host, $this->user, $this->password, $this->DB);
         $sql  = "SELECT * FROM invoice_details WHERE  order_date  =current_date";
         $query = $conn->prepare($sql);
         $query->execute();
         $result = $query->get_result();
         if($result->num_rows > 0){
             while ($rows = $result->fetch_assoc()){
                    $resultset[] = $rows;
                   }
            $conn->close();
         }
         return $resultset;
}


function daily_salesall(){
         $resultset = array();
         $conn = mysqli_connect($this->host, $this->user, $this->password, $this->DB);
         $sql  = "SELECT * FROM invoice_details ORDER BY `order_date` DESC";
         $query = $conn->prepare($sql);
         $query->execute();
         $result = $query->get_result();
         if($result->num_rows > 0){
             while ($rows = $result->fetch_assoc()){
                    $resultset[] = $rows;
                   }
            $conn->close();
         }
         return $resultset;
}


function daily_stockall(){
         $resultset = array();
         $conn = mysqli_connect($this->host, $this->user, $this->password, $this->DB);
         $sql  = "SELECT * FROM stock_log ORDER BY `stock_date` DESC";
         $query = $conn->prepare($sql);
         $query->execute();
         $result = $query->get_result();
         if($result->num_rows > 0){
             while ($rows = $result->fetch_assoc()){
                    $resultset[] = $rows;
                   }
            $conn->close();
         }
         return $resultset;
}



function partner(){
         $resultset = array();
         $conn = mysqli_connect($this->host, $this->user, $this->password, $this->DB);
         $sql  = "SELECT * FROM partner";
         $query = $conn->prepare($sql);
         $query->execute();
         $result = $query->get_result();
         if($result->num_rows > 0){
             while ($rows = $result->fetch_assoc()){
                    $resultset[] = $rows;
                   }
                $conn->close();
         }
         return $resultset;
}




function Fetch_Orders(){
         $resultset = array();
         $conn = mysqli_connect($this->host, $this->user, $this->password, $this->DB);
         $sql  = "SELECT * FROM order_service";
         $query = $conn->prepare($sql);
         $query->execute();
         $result = $query->get_result();
         if($result->num_rows > 0){
             while ($rows = $result->fetch_assoc()){
                    $resultset[] = $rows;
                   }
                $conn->close();
         }
         return $resultset;


}


function Fetch_Orders_complete(){
         $resultset = array();
         $conn = mysqli_connect($this->host, $this->user, $this->password, $this->DB);
         $sql  = "SELECT * FROM jobs WHERE job_status='completed'";
         $query = $conn->prepare($sql);
         $query->execute();
         $result = $query->get_result();
         if($result->num_rows > 0){
             while ($rows = $result->fetch_assoc()){
                    $resultset[] = $rows;
                   }
                $conn->close();
         }
         return $resultset;

}

function Fetch_Orders_Done(){
         $resultset = array();
         $conn = mysqli_connect($this->host, $this->user, $this->password, $this->DB);
         $sql  = "SELECT * FROM jobs WHERE    job_done='Done'";
         $query = $conn->prepare($sql);
         $query->execute();
         $result = $query->get_result();
         if($result->num_rows > 0){
             while ($rows = $result->fetch_assoc()){
                    $resultset[] = $rows;
                   }
                $conn->close();
         }
         return $resultset;

}

function Fetch_Orders_in_progress(){
         $resultset = array();
         $conn = mysqli_connect($this->host, $this->user, $this->password, $this->DB);
         $sql  = "SELECT * FROM jobs WHERE job_status='in_progress'";
         $query = $conn->prepare($sql);
         $query->execute();
         $result = $query->get_result();
         if($result->num_rows > 0){
             while ($rows = $result->fetch_assoc()){
                    $resultset[] = $rows;
                   }
                $conn->close();
         }
         return $resultset;

}




 function fetch_Order_Invoice($data){
  $resultset = array();
         $conn = mysqli_connect($this->host, $this->user, $this->password, $this->DB);
         $sql  = "SELECT * FROM jobs WHERE Order_ID='$data'";
         $query = $conn->prepare($sql);
         $query->execute();
         $result = $query->get_result();
         if($result->num_rows > 0){
             while ($rows = $result->fetch_assoc()){
                    $resultset[] = $rows;
                   }
                $conn->close();
         }
         return $resultset;

}


 function fetch_Quote_Send($data){
  $resultset = array();
         $conn = mysqli_connect($this->host, $this->user, $this->password, $this->DB);
         $sql  = "SELECT * FROM order_quote WHERE id='$data'";
         $query = $conn->prepare($sql);
         $query->execute();
         $result = $query->get_result();
         if($result->num_rows > 0){
             while ($rows = $result->fetch_assoc()){
                    $resultset[] = $rows;
                   }
                $conn->close();
         }
         return $resultset;

}


function sumTotal_ordered_item($data){
        $conn = mysqli_connect($this->host, $this->user, $this->password, $this->DB);
        $sql = "SELECT SUM(total) as count FROM order_service WHERE user='$data' AND Order_Status='UnPaid'";
        $query = $conn->query($sql) or print(mysqli_error($conn));
        $gtotal = 0;
        $result = $row=$query->fetch_assoc();
        $gtotal = $result['count'];
        if($total=0){
        }else{
          return $gtotal;
        }
}


function sumTotal_completed_items($data,$data1){
        $conn = mysqli_connect($this->host, $this->user, $this->password, $this->DB);
        $sql = "SELECT SUM(total) as count FROM jobs WHERE user='$data' AND Order_ID='$data1'";
        $query = $conn->query($sql) or print(mysqli_error($conn));
        $gtotal = 0;
        $result = $row=$query->fetch_assoc();
        $gtotal = $result['count'];
        if($total=0){
        }else{
          return $gtotal;
        }
}



function Fetch_All_Quotes(){
         $resultset = array();
         $conn = mysqli_connect($this->host, $this->user, $this->password, $this->DB);
         $sql  = "SELECT * FROM invoice_details GROUP BY invoice_id ORDER BY `order_date` DESC";
         $query = $conn->prepare($sql);
         $query->execute();
         $result = $query->get_result();
         if($result->num_rows > 0){
             while ($rows = $result->fetch_assoc()){
                    $resultset[] = $rows;
                   }
                $conn->close();
         }
         return $resultset;


}



function edit_Quote($table,$filled,$data){
    $conn = mysqli_connect($this->host, $this->user, $this->password, $this->DB);
     $sql = "SELECT * FROM $table WHERE $filled = '$data'";
      $query = $conn->query($sql) or print(mysqli_error($conn));
      $row =  mysqli_fetch_array($query);
   if ($query == true) {
  return $row;
    }else{
  return false;
}
    $conn->close();
}


function Update_Quote($name,$email,$phone,$address,$description,$qty,$design,$type,$price,$total,$QuoteID,$Quote_date){
    $conn = mysqli_connect($this->host, $this->user, $this->password, $this->DB);
    $sql = "UPDATE order_quote SET name = '".$name."',  email = '".$email."', phone = '".$phone."', address = '".$address."', description = '".$description."' , qty = '".$qty."', design = '".$design."', type = '".$type."', price = '".$price."', total = '".$total."', QuoteID = '".$QuoteID."', Quote_date = '".$Quote_date."' WHERE QuoteID = '".$QuoteID."'";
    $query = $conn->query($sql) or print(mysqli_error($conn));
    if ($query == true) {
      echo "<script>alert('Quote Updated succeessfuly')</script";    
    }else{
        echo "<script>alert('Error Updating Quote')</script";    
    }
        $conn->close();
}


function Fetch_Assigned_Order($table,$field,$data){
         $resultset = array();
         $conn = mysqli_connect($this->host, $this->user, $this->password, $this->DB);
         $sql  = ("SELECT * FROM $table WHERE $field = '$data' ");
         $query = $conn->prepare($sql);
         $query->execute();
         $result = $query->get_result();
         if($result->num_rows > 0){
             while ($rows = $result->fetch_assoc()){
                    $resultset[] = $rows;
                   }
                $conn->close();
         }
         return $resultset;
}


function Fetch_message_assigned($table,$field,$data){
         $resultset = array();
         $conn = mysqli_connect($this->host, $this->user, $this->password, $this->DB);
         $sql  = ("SELECT * FROM $table WHERE $field = '$data' ");
         $query = $conn->prepare($sql);
         $query->execute();
         $result = $query->get_result();
         if($result->num_rows > 0){
             while ($rows = $result->fetch_assoc()){
                    $resultset[] = $rows;
                   }
                $conn->close();
         }
         return $resultset;
}



function My_Count_Fetchstock($table){
      $conn = mysqli_connect($this->host,$this->user,$this->password,$this->DB);
         $q="SELECT SUM(quantity) FROM $table";
              $que=$conn->query($q)or print(mysqli_error($conn));
                  $count=mysqli_fetch_row($que);
                      echo $count[0];
         $conn->close();
      }


      function My_Count_FetchLOWS($table){
      $conn = mysqli_connect($this->host,$this->user,$this->password,$this->DB);
         $q="SELECT COUNT(min_stock) FROM $table WHERE min_stock < 10";
              $que=$conn->query($q)or print(mysqli_error($conn));
                  $count=mysqli_fetch_row($que);
                  if($count == true){
                      echo $count[0];
                  }else{
                    echo "Nothing";
                  }

         $conn->close();
      }


function My_Count_Fetchtotal($table){
      $conn = mysqli_connect($this->host,$this->user,$this->password,$this->DB);
         $q="SELECT COUNT(id) FROM $table WHERE  order_date  =current_date";
              $que=$conn->query($q)or print(mysqli_error($conn));
                  $count=mysqli_fetch_row($que);
                      echo $count[0];
         $conn->close();
      }


      function My_Count_Fetchiincom($table){
      $conn = mysqli_connect($this->host,$this->user,$this->password,$this->DB);
         $q="SELECT SUM(total) FROM $table WHERE  order_date=current_date";
              $que=$conn->query($q)or print(mysqli_error($conn));
                  $count=mysqli_fetch_row($que);
                      echo $count[0];
         $conn->close();
      }





      // function My_Count_Fetch($table){
      // $conn = mysqli_connect($this->host,$this->user,$this->password,$this->DB);
      //    $q="SELECT SUM(quantity) FROM $table";
      //         $que=$conn->query($q)or print(mysqli_error($conn));
      //             $count=mysqli_fetch_row($que);
      //                 echo $count[0];
      //    $conn->close();
      // }

//       function sumTotal_ordered_item($data){
//         $conn = mysqli_connect($this->host, $this->user, $this->password, $this->DB);
//         $sql = "SELECT SUM(total) as count FROM order_service WHERE user='$data' AND Order_Status='UnPaid'";
//         $query = $conn->query($sql) or print(mysqli_error($conn));
//         $gtotal = 0;
//         $result = $row=$query->fetch_assoc();
//         $gtotal = $result['count'];
//         if($total=0){
//         }else{
//           return $gtotal;
//         }
// }



function My_Count_Fetch_USER(){
      $conn = mysqli_connect($this->host,$this->user,$this->password,$this->DB);
      $us = $_SESSION['user'];
         $q="SELECT COUNT(`id`) FROM order_service WHERE user='".$us."' ";
              $que=$conn->query($q)or print(mysqli_error($conn));
                  $count=mysqli_fetch_row($que);
                      echo $count[0];
         $conn->close();
      }



function My_Count_Fetch_Partner($table,$field,$data){
      $conn = mysqli_connect($this->host,$this->user,$this->password,$this->DB);
         $q="SELECT COUNT(`id`) FROM  $table WHERE $field = '$data' ";
              $que=$conn->query($q)or print(mysqli_error($conn));
                  $count=mysqli_fetch_row($que);
                      echo $count[0];
         $conn->close();
}


function My_Count_Fetch_Partner_done($table,$field,$data,$field1,$data1){
      $conn = mysqli_connect($this->host,$this->user,$this->password,$this->DB);
         $q="SELECT COUNT(`id`) FROM  $table WHERE $field = '$data' AND $field1 = '$data1' ";
              $que=$conn->query($q)or print(mysqli_error($conn));
                  $count=mysqli_fetch_row($que);
                      echo $count[0];
         $conn->close();
}



function Fetch_Orders_User(){
         $resultset = array();
         $conn = mysqli_connect($this->host, $this->user, $this->password, $this->DB);
         $us = $_SESSION['user'];
         $sql  = "SELECT * FROM order_service WHERE user='".$us."'";
         $query = $conn->prepare($sql);
         $query->execute();
         $result = $query->get_result();
         if($result->num_rows > 0){
             while ($rows = $result->fetch_assoc()){
                    $resultset[] = $rows;
                   }
                $conn->close();
         }
         return $resultset;
}







function status_partner_customer($status){
         $resultset = array();
         $conn = mysqli_connect($this->host, $this->user, $this->password, $this->DB);
         $sql  = "SELECT * FROM users WHERE status=?";
         $query = $conn->prepare($sql);
         $query->bind_param('s',$status);
         $query->execute();
         $result = $query->get_result();
         if($result->num_rows > 0){
            while ($rows = $result->fetch_assoc()) {
                $resultset[] = $rows;
                }
                $conn->close();
         }
         return $resultset;

}



function getProductFeatures(){
     $resultset = array();
     $conn = mysqli_connect($this->host, $this->user, $this->password, $this->DB);
     $sql = "SELECT * FROM  products order by rand() limit 12;";
     $query = $conn->prepare($sql);
     $query->execute();
     $result = $query->get_result();
            // fetch all posts as an associative array called $category
     if ($result->num_rows > 0) {
            while($rows = $result->fetch_assoc()) 
                {
                    $resultset[] = $rows;
                }
            $conn->close();     
     }
     return $resultset;
            
}


function My_Count_parner($table,$row,$data){
      $conn = mysqli_connect($this->host,$this->user,$this->password,$this->DB);
         $q="SELECT COUNT(`id`) FROM $table WHERE $row='$data'";
              $que=$conn->query($q)or print(mysqli_error($conn));
                  $count=mysqli_fetch_row($que);
                      echo $count[0];     
         $conn->close();
      }

function siteAccount($category){
         $conn = mysqli_connect($this->host, $this->user, $this->password, $this->DB);
         $resultset = array();
         $sql = ("SELECT * FROM products WHERE category ='$category' ");
         $query = $conn->prepare($sql);
         $query->execute();  
         $result = $query->get_result();
               if ($result->num_rows > 0){
                     while ($rows=$result->fetch_assoc()){
                             $resultset[] =  $rows;
                           }
                        }
         $conn->close();
        return $resultset;
}

function Targeted_information($table,$field,$data){
         $conn = mysqli_connect($this->host, $this->user, $this->password, $this->DB);
         $sql = ("SELECT * FROM $table WHERE $field = '$data' ");
         $query = $conn->query($sql) or print(mysqli_error($conn));
         $row = mysqli_fetch_array($query);
             if($query == true){
                    return $row;
                }else{
                    return false;
                    }
        $conn->close();
}


function numberOfJobs(){
            $conn = mysqli_connect($this->host, $this->user, $this->password, $this->DB);
                  $sql = "SELECT quantity,type, COUNT(`user`) AS total FROM order_service GROUP BY Order_ID";
                       $query = $conn->query($sql) or print(mysqli_error($conn));
                          $result = $query->fetch_row();
                         echo $result[0];
                           $conn->close();
}
  
function numberRefered(){
            $conn = mysqli_connect($this->host, $this->user, $this->password, $this->DB);
            $sql = "SELECT reference_id, COUNT(*) AS total FROM users GROUP BY reference_id";
            $query = $conn->query($sql) or print(mysqli_error($conn));
            $result = $query->fetch_row();
                  echo $result[0];
            $conn->close();
}
      
function display_Receipt(){
   $conn = mysqli_connect($this->host,$this->user,$this->password,$this->DB);
   $sql ="SELECT Order_ID, group_concat(`Job_id`) as Items FROM jobs GROUP BY Order_ID ORDER BY Order_ID;";
   $query = $conn->prepare($sql);
   $query->execute();
         $result = $query->get_result();
            if($result->num_rows > 0){
               while ($rows=$result->fetch_assoc()) {
                      $resultset[] = $rows;
               }
            } if(!empty($resultset)){
              return $resultset;
        }
  $conn->close();
}

function Approvepartner(){
   if (isset($_POST['Approve'])) {
     $conn = mysqli_connect($this->host,$this->user,$this->password,$this->DB);
     $sq = "SELECT * FROM partner WHERE id='".$_GET['ApprovePartner']."'";
     $qu = $conn->prepare($sq);
     $qu->execute();
     $result = $qu->get_result();
   if ($result->num_rows > 0) {
   if ($gt = $result->fetch_assoc()) {  
       $login_status = "Approved";
          $sql="UPDATE partner SET login_status = '$login_status' WHERE id='".$gt['id']."'";
             $me = $conn->prepare($sql) or print(mysqli_error($conn));
   if ($me->execute()) {
                echo "<script>alert('Partner Approved Successfully')</script>";
           }else{
                echo "<script>alert('Partner Approval not Successful Something went wrong please try again !')</script>";
                        }
                    }
                } 
            }
        }

function DoneJobs(){
   if (isset($_GET['DoneJobs'])) {
     $conn = mysqli_connect($this->host,$this->user,$this->password,$this->DB);
             $sq = "SELECT * FROM jobs WHERE id='".$_GET['DoneJobs']."'";
            $qu = $conn->prepare($sq);
            $qu->execute();
            $result = $qu->get_result();
        if ($result->num_rows > 0) {
        if ($gt = $result->fetch_assoc()) {  
              $job_done = "Done";
                 $sql="UPDATE jobs SET job_done = '$job_done' WHERE id='".$gt['id']."'";
                    $me = $conn->prepare($sql) or print(mysqli_error($conn));
        if ($me->execute()) {
                 echo "<script>alert('Job Completed Successfully')</script>";
           }else{
                 echo "<script>alert('Job Completion not Successful Something went wrong please try again !')</script>";
                        }
                    }
                } 
            }
        }


function ComfirmJobs_Add_MONEY($getAmount,$getUSER){
   $conn = mysqli_connect($this->host,$this->user,$this->password,$this->DB);
   $sql = "UPDATE  partner SET balance =balance+'$getAmount' WHERE username= '$getUSER' ";
   $qu = $conn->prepare($sql);
   if ($qu->execute()) {
       return true;
   }else{
       return false;
   }
}

function UPdate_status($job_confirm,$job_status,$getID){
    $conn = mysqli_connect($this->host,$this->user,$this->password,$this->DB);
    $sql = "UPDATE jobs SET job_confirm='$job_confirm', job_status = '$job_status' WHERE id='$getID' ";
    $qu = $conn->prepare($sql);
if ($qu->execute()) {
      return true;
  }else{
      return false;
    }
 }
 
 function Updating_Quantity($data1,$data2,$data3,$data4){
     $conn = mysqli_connect($this->host,$this->user,$this->password,$this->DB);
     $sql = "UPDATE addtocart SET quantity='$data1', total='$data2' WHERE cart_id='$data3' AND user='$data4'";
     $query = $conn->query($sql) or print(mysqli_error($conn));
  if($query == true){
      echo'<script>alert("Quantity Successfully Changed");</script>';
      echo '<script>window.location="?action=checkOUT"</script>';
    }else{
      echo'<script>alert("Unable to Update Quantity")</script>';
     }
}

function searchItem($data){
    $resultset = array();
    $conn = mysqli_connect($this->host,$this->user,$this->password,$this->DB);
    $sql = "SELECT * FROM products WHERE name LIKE'%$data%'";
    $query = $conn->prepare($sql);
    $query->execute();
    $result = $query->get_result();
    if ($result->num_rows > 0) {
       while ($rows = $result->fetch_assoc()) {
             $resultset[] = $rows;
        }
     }
    return $resultset;
}

function payment($paymentStatus,$method,$reference,$user,$data){
   $conn = mysqli_connect($this->host,$this->user,$this->password,$this->DB);
   $sql = "UPDATE order_service SET Order_Status ='$paymentStatus',paymentMethod='$method',refernce='$reference' WHERE user='$user' AND Order_ID='$data' ";
   $qu = $conn->prepare($sql);
   if ($qu->execute()) {
       return true;
   }else{
       return false;
   }
}


function CustomerTotal($data,$data1){
    $conn = mysqli_connect($this->host, $this->user, $this->password, $this->DB);
    $sql = "SELECT MONTHNAME(order_date) AS month_year, SUM(total) AS count FROM order_service WHERE user='$data' AND Order_Status='$data1' GROUP BY MONTH(order_date)";
    $query = $conn->query($sql) or print(mysqli_error($conn));
    $gtotal = 0;
    $result = $row=$query->fetch_assoc();
    $gtotal = $result['count'];
    if($total=0){
    }else{
      return $gtotal;  
    }
}


function sumTotal_Monthly_Services($data,$data1){
    $conn = mysqli_connect($this->host, $this->user, $this->password, $this->DB);
    $sql = "SELECT SUM(total) as count FROM order_service WHERE user='$data' AND Order_Status='$data1'";
    $query = $conn->query($sql) or print(mysqli_error($conn));
    $gtotal = 0;
    $result = $row=$query->fetch_assoc();
    $gtotal = $result['count'];
    if($total=0){
    }else{
      return $gtotal;  
    }
}

function sumTotal_Partner_Balance($data){
    $conn = mysqli_connect($this->host, $this->user, $this->password, $this->DB);
    $sql = "SELECT SUM(total) as count FROM jobs WHERE partner='$data'";
    $query = $conn->query($sql) or print(mysqli_error($conn));
    $gtotal = 0;
    $result = $row=$query->fetch_assoc();
    $gtotal = $result['count'];
    if($total=0){
    }else{
      return $gtotal;  
    }
}

function widthdrow_request($username,$amount,$date){
    $conn = mysqli_connect($this->host, $this->user, $this->password, $this->DB);
    $sql = "INSERT INTO widthdrowal_request (username,amount,date_request) VALUES(?,?,?)";
    $qu = $conn->prepare($sql);
    $qu->bind_param('sss',$username,$amount,$date);
    if ($qu->execute()) {
        return true;
    }else{
        return false;
    }
}

function dataselect2($table){
      $resultset = array();
      $conn = mysqli_connect($this->host, $this->user,$this->password,$this->DB);
      $sql = "SELECT * FROM $table";
      $query = $conn->prepare($sql);
      $query->execute();
      $result = $query->get_result();
      if($result->num_rows > 0){
         while ($rows = $result->fetch_assoc()){
      $resultset[] = $rows;
       }
        $conn->close();
     }
        return $resultset;
    }    



function listUserEmail(){
         $conn = mysqli_connect($this->host, $this->user, $this->password, $this->DB);
         $resultset = array();
         $sql = ("SELECT * FROM users");
         $query = $conn->prepare($sql);
         $query->execute();  
         $result = $query->get_result();
               if ($result->num_rows > 0){
                     while ($rows=$result->fetch_assoc()){
                             $resultset[] =  $rows;
                           }
                        }
         $conn->close();
        return $resultset;
}




function ChartAccount(){
         $resultset = array();
         $conn = mysqli_connect($this->host, $this->user, $this->password, $this->DB);
         $sql  = "SELECT * FROM chart_of_account WHERE account_id !='1001_PETTY_CASH' ";
         $query = $conn->prepare($sql);
         $query->execute();
         $result = $query->get_result();
         if($result->num_rows > 0){
             while ($rows = $result->fetch_assoc()){
                    $resultset[] = $rows;
                   }
            $conn->close();
         }
         return $resultset;
}



function GetreceiveDueall(){
   $conn = mysqli_connect($this->host, $this->user, $this->password, $this->DB);
   $resultset = array();
   //$sql = ("SELECT *, SUM(DISTINCT due) as total_amount FROM invoice_details WHERE due > 0 GROUP BY customer ORDER BY order_date DESC");
   $sql = ("SELECT *, SUM(due) as total_amount FROM invoice_details WHERE due > 0 GROUP BY customer ORDER BY order_date DESC");
   $query = $conn->prepare($sql);
   $query->execute();
   $result = $query->get_result();
     if($result->num_rows > 0){
         while($rows=$result->fetch_assoc()){
               $resultset[] = $rows;
       }
   }

  $conn->close();
  return $resultset;
}



function GetreceiveDue($data){
   $conn = mysqli_connect($this->host, $this->user, $this->password, $this->DB);
   $resultset = array();
   $sql = ("SELECT *  FROM invoice_details WHERE due > 0 AND customer='$data' ORDER BY order_date DESC");
   $query = $conn->prepare($sql);
   $query->execute();
   $result = $query->get_result();
     if($result->num_rows > 0){
         while($rows=$result->fetch_assoc()){
               $resultset[] = $rows;
       }
   }

  $conn->close();
  return $resultset;
}





function Get_invoice_grand_toal($data){
      $conn = mysqli_connect($this->host,$this->user,$this->password,$this->DB);
         $q="SELECT SUM(total) FROM invoice_details WHERE  invoice_id  ='$data' ";
              $que=$conn->query($q)or print(mysqli_error($conn));
                  $count=mysqli_fetch_row($que);
                      echo number_format($count[0],2);
         $conn->close();
    }





function UpdateDueInvoicelog($invoice_id,$due){
    $conn =  mysqli_connect($this->host, $this->user, $this->password, $this->DB);
    $sql = "UPDATE invoice_tbl SET due =due -'".$due."', paid =paid +'".$due."' WHERE invoice_id ='".$invoice_id."' ";
    $query = $conn->query($sql) or print(mysqli_error($conn));
    if ($query == true) {
      return true;  
    }else{
       return false;   
    }
    $conn->close(); 
}





function UpdateDueInvoiceNew($invoice_id,$due){
    $conn =  mysqli_connect($this->host, $this->user, $this->password, $this->DB);
    $sql = "UPDATE invoice_details SET paid =paid +'".$due."', due=due-'".$due."' WHERE invoice_id ='".$invoice_id."' ";
    $query = $conn->query($sql) or print(mysqli_error($conn));
    if ($query == true) {
      return true;  
    }else{
       return false;   
    }
    $conn->close(); 
}





function chartofAccountMinus($account_id1,$amount_due){
            $conn =  mysqli_connect($this->host, $this->user, $this->password, $this->DB);
            $sql = "UPDATE chart_of_account SET balance =balance-'".$amount_due."' WHERE account_id ='".$account_id1."'";
            $query = $conn->query($sql) or print(mysqli_error($conn));
            if ($query == true) {
              return true;  
            }else{
               return false;   
            }
$conn->close(); 
}
   



function VendorUpdate($contact_name,$phone,$email,$company_address,$material,$supplier_id){
   $conn = mysqli_connect($this->host, $this->user, $this->password, $this->DB);
    $sql = "UPDATE supplier_table SET supplier_name = '".$contact_name."', phone ='".$phone."', email ='".$email."', company_address ='".$company_address."', material ='".$material."' WHERE supplier_id ='".$supplier_id."'";
    $query = $conn->query($sql) or print(mysqli_error($conn));
    if ($query == true) {
      return true;  
    }else{
      return false;   
    }
    $conn->close();
}




function insertReturn($reference_id,$invoice_id,$return_date,$product_name,$brand,$customer_name,$return_description,$return_quantity,$category,$unit,$color,$size,$status,$item_code){
          $conn = mysqli_connect($this->host, $this->user, $this->password, $this->DB);
          $reference_id1  = mysqli_escape_string($conn, htmlentities(trim($reference_id)));
          $invoice_id1  = mysqli_escape_string($conn, htmlentities(trim($invoice_id)));
          $return_date1  = mysqli_escape_string($conn, htmlentities(trim($return_date)));
          $product_name1  = mysqli_escape_string($conn, htmlentities(trim($product_name)));
          $brand1  = mysqli_escape_string($conn, htmlentities(trim($brand)));
          $customer_name1  = mysqli_escape_string($conn, htmlentities(trim($customer_name)));
          $return_description1  = mysqli_escape_string($conn, htmlentities(trim($return_description)));
          $return_quantity1  = mysqli_escape_string($conn, htmlentities(trim($return_quantity)));
          $category1  = mysqli_escape_string($conn, htmlentities(trim($category)));
          $unit1  = mysqli_escape_string($conn, htmlentities(trim($unit)));
          $color1  = mysqli_escape_string($conn, htmlentities(trim($color)));
          $size1  = mysqli_escape_string($conn, htmlentities(trim($size)));
          $status1  = mysqli_escape_string($conn, htmlentities(trim($status)));
          $item_code1  = mysqli_escape_string($conn, htmlentities(trim($item_code)));
          $sql = 'INSERT INTO return_table(reference_no,invoice_id,return_date,product_name,brand,customer,return_description,quantity,category,unit,color,size,status,item_code) VALUES (?,?,?,?,?,?,?,?,?,?,?,?,?,?)';
          $query = $conn->prepare($sql);
          $query->bind_param('ssssssssssssss',$reference_id1,$invoice_id1,$return_date1,$product_name1,$brand1,$customer_name1,$return_description1,$return_quantity1,$category1,$unit1,$color1,$size1,$status1,$item_code1);
          if($query->execute()){
            return true;
          }else{
            return false;
          }
          $conn->close();
 }



 function UpdateReturn($reference_no,$Newstatus,$datex){
    $conn =  mysqli_connect($this->host, $this->user, $this->password, $this->DB);
    $sql = "UPDATE return_table SET status ='".$Newstatus."', updated_at='".$datex."' WHERE reference_no='".$reference_no."' ";
    $query = $conn->query($sql) or print(mysqli_error($conn));
    if ($query == true) {
      return true;  
    }else{
       return false;   
    }
    $conn->close(); 
}




function insertRequest($datex,$requestName,$request_no,$vendor_contractor,$description,$amount,$staff,$record_by,$status,$type,$staff_name){
      $conn = mysqli_connect($this->host, $this->user, $this->password, $this->DB);
      $datex1 = mysqli_escape_string($conn, htmlentities(trim($datex)));
      $requestName1 = mysqli_escape_string($conn, htmlentities(trim($requestName)));
      $request_no1    = mysqli_escape_string($conn, htmlentities(trim($request_no)));
      $vendor_contractor1    = mysqli_escape_string($conn, htmlentities(trim($vendor_contractor)));
      $description1 = mysqli_escape_string($conn, htmlentities(trim($description)));
      $amount1     = mysqli_escape_string($conn, htmlentities(trim($amount)));
      $staff1 = mysqli_escape_string($conn, htmlentities(trim($staff)));
      $record_by1 = mysqli_escape_string($conn, htmlentities(trim($record_by)));
      $status1 = mysqli_escape_string($conn, htmlentities(trim($status)));
      $type1 = mysqli_escape_string($conn, htmlentities(trim($type)));
      $staff_name1 = mysqli_escape_string($conn, htmlentities(trim($staff_name)));
      $sql = 'INSERT INTO request_table(request_date,request_name,request_no,vendor_name,description,amount,request_by,approved_by,status,type,staff_name) VALUES (?,?,?,?,?,?,?,?,?,?,?)';
      $query         = $conn->prepare($sql);
      $query->bind_param('sssssssssss',$datex1,$requestName1,$request_no1,$vendor_contractor1,$description1,$amount1,$staff1,$record_by1,$status1,$type1,$staff_name1);
           if ($query->execute()){
                        return true;
                }else{
                      return false;
                     }
                      $conn->close(); 
} 




function allRequest(){
   $conn = mysqli_connect($this->host, $this->user, $this->password, $this->DB);
   $resultset = array();
   $sql = ("SELECT *, DATE_FORMAT(created_at, '%H:%i:%s') AS time_created_at FROM request_table ORDER BY request_date DESC ");
   $query = $conn->prepare($sql);
   $query->execute();
   $result = $query->get_result();
     if($result->num_rows > 0){
       while($rows=$result->fetch_assoc()){
          $resultset[] = $rows;
     }
   }$conn->close();
 return $resultset;
}



function UpdateRequest($request_no,$request_Amount,$approved_by,$Newstatus,$datex) {
     $conn = mysqli_connect($this->host,$this->user,$this->password,$this->DB);
     $sql = "UPDATE request_table SET amount =?, approved_by =?, status =?, updated_at =? WHERE request_no =? ";
     $query = $conn->prepare($sql);
     $query->bind_param('sssss',$request_Amount,$approved_by,$Newstatus,$datex,$request_no);
     $query->execute();
     $conn->close();
     if ($query == true) {
          return true;
     }else{
          return false;
          }            
}


function GetStockin(){
   $conn = mysqli_connect($this->host, $this->user, $this->password, $this->DB);
   $resultset = array();
   $sql = ("SELECT * FROM stock_table");
   $query = $conn->prepare($sql);
   $query->execute();
   $result = $query->get_result();
     if($result->num_rows > 0){
         while($rows=$result->fetch_assoc()){
               $resultset[] = $rows;
       }
   }
  $conn->close();
  return $resultset;
}


function ManagePrice($new_selling_price,$item_code){
   $conn = mysqli_connect($this->host, $this->user, $this->password, $this->DB);
    $sql = "UPDATE stock_table SET sell_price ='".$new_selling_price."' WHERE item_code ='".$item_code."'";
    $query = $conn->query($sql) or print(mysqli_error($conn));
    if ($query == true) {
      return true;  
    }else{
      return false;   
    }
    $conn->close();
}



}
?>

