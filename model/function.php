<?php  

class mainClass{
 
  public $host = 'localhost';
  public $user = 'root';
  public $password = '';
  public $DB = 'cpalumgl_alumi';

// public $host = 'localhost';
// public $user = 'cpalumgl_alumiuser';
// public $password = 'lrvOM9u]92Xd';
// public $DB = 'cpalumgl_alumi';





function insertInvoicelog($invoice_id,$sales_rep,$price,$timex,$order_date,$total,$amount_paid,$due,$status,$GMD,$CEO,$Accountant,$bank_name,$bank_id,$Itemcost_of_goods){
      $conn = mysqli_connect($this->host, $this->user, $this->password, $this->DB);
      $invoice_id = mysqli_escape_string($conn, htmlentities(trim($invoice_id)));
      $timex = mysqli_escape_string($conn, htmlentities(trim($timex)));
      $order_date = mysqli_escape_string($conn, htmlentities(trim($order_date)));
      $total = mysqli_escape_string($conn, htmlentities(trim($total)));
      $amount_paid = mysqli_escape_string($conn, htmlentities(trim($amount_paid)));
      $due = mysqli_escape_string($conn, htmlentities(trim($due)));
      $price = mysqli_escape_string($conn, htmlentities(trim($price)));
      $sales_rep = mysqli_escape_string($conn, htmlentities(trim($sales_rep)));
      $status = mysqli_escape_string($conn, htmlentities(trim($status)));
      $GMD = mysqli_escape_string($conn, htmlentities(trim($GMD)));
      $CEO = mysqli_escape_string($conn, htmlentities(trim($CEO)));
      $bank_name = mysqli_escape_string($conn, htmlentities(trim($bank_name)));
      $bank_id = mysqli_escape_string($conn, htmlentities(trim($bank_id)));
      $Itemcost_of_goods = mysqli_escape_string($conn, htmlentities(trim($Itemcost_of_goods)));
      $sql = 'INSERT INTO invoice_tbl(invoice_id,sales_reo,amount,time_order,order_date,total,paid,due,status,CEO,GMD,Accountant,bank_name,bank_id,cost_of_goods) VALUES (?,?,?,?,?,?,?,?,?,?,?,?,?,?,?)';
      $query         = $conn->prepare($sql);
      $query->bind_param('sssssssssssssss',$invoice_id,$sales_rep,$price,$timex,$order_date,$total,$amount_paid,$due,$status,$GMD,$CEO,$Accountant,$bank_name,$bank_id,$Itemcost_of_goods);
           if ($query->execute()){
                        return true;
                }else{
                      return false;
                     }
                      $conn->close(); 
}


//  function insertInvoiceDetails($invoice_id,$product_code,$product_name,$category,$mode_payment,$qty,$price,$total,$amount_paid,$due,$order_date,$customer,$customer_name,$address,$phone,$Itemcolor,$Itemguage,$Itemold_price,$Itemkg_weight,$Itemmeter_length,$Itemembossed,$sales_rep,$status,$GMD,$CEO,$Accountant){
//       $conn = mysqli_connect($this->host, $this->user, $this->password, $this->DB);
//       $invoice_id = mysqli_escape_string($conn, htmlentities(trim($invoice_id)));
//       $product_code = mysqli_escape_string($conn, htmlentities(trim($product_code)));
//       $product_name = mysqli_escape_string($conn, htmlentities(trim($product_name)));
//       $category = mysqli_escape_string($conn, htmlentities(trim($category)));
//       $mode_payment = mysqli_escape_string($conn, htmlentities(trim($mode_payment)));
//       $qty = mysqli_escape_string($conn, htmlentities(trim($qty)));
//       $price = mysqli_escape_string($conn, htmlentities(trim($price)));
//       $total = mysqli_escape_string($conn, htmlentities(trim($total)));
//       $order_date = mysqli_escape_string($conn, htmlentities(trim($order_date)));
//       $customer = mysqli_escape_string($conn, htmlentities(trim($customer)));
//       $customer_name = mysqli_escape_string($conn, htmlentities(trim($customer_name)));
//       $address = mysqli_escape_string($conn, htmlentities(trim($address)));
//       $phone = mysqli_escape_string($conn, htmlentities(trim($phone)));
//       $sales_rep = mysqli_escape_string($conn, htmlentities(trim($sales_rep)));
//       $status = mysqli_escape_string($conn, htmlentities(trim($status)));
//       $GMD = mysqli_escape_string($conn, htmlentities(trim($GMD)));
//       $CEO = mysqli_escape_string($conn, htmlentities(trim($CEO)));
//       $Accountant = mysqli_escape_string($conn, htmlentities(trim($Accountant)));
//       $sql = 'INSERT INTO invoice_details(invoice_id,product_code,product_name,category,mode_payment,qty,price,total,paid,due,order_date,customer,customer_name,address,phone,sales_rep,status,CEO,GMD,Accountant) VALUES (?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?)';
//       $query         = $conn->prepare($sql);
//       $query->bind_param('ssssssssssssssssssss',$invoice_id,$product_code,$product_name,$category,$mode_payment,$qty,$price,$total,$amount_paid,$due,$order_date,$customer,$customer_name,$address,$phone,$sales_rep,$status,$GMD,$CEO,$Accountant);
//            if ($query->execute()){
//                         return true;
//                 }else{
//                       return false;
//                      }
//                       $conn->close(); 
// }



 function insertInvoiceDetailSales($invoice_id,$Itemproduct_code,$itemproduct_name,$itemcategory,$mode_payment,$quantity,$ItemPrice,$Itemtotal,$amount_paid,$due,$order_date,$customer,$customer_name,$address,$phone,$Itemcolor,$Itemguage,$Itemold_price,$Itemkg_weight,$Itemmeter_length,$Itemembossed,$Itemdesign,$itempacket,$sales_rep,$status1,$GMD1,$CEO1,$Accountant1,$bank_name,$bank_id,$Itemcost_of_goods){
      $conn = mysqli_connect($this->host, $this->user, $this->password, $this->DB);
      $invoice_id = mysqli_escape_string($conn, htmlentities(trim($invoice_id)));
      $Itemproduct_code = mysqli_escape_string($conn, htmlentities(trim($Itemproduct_code)));
      $itemproduct_name = mysqli_escape_string($conn, htmlentities(trim($itemproduct_name)));
      $itemcategory = mysqli_escape_string($conn, htmlentities(trim($itemcategory)));
      $mode_payment = mysqli_escape_string($conn, htmlentities(trim($mode_payment)));
      $ItemPrice = mysqli_escape_string($conn, htmlentities(trim($ItemPrice)));
      $Itemtotal = mysqli_escape_string($conn, htmlentities(trim($Itemtotal)));
      $amount_paid = mysqli_escape_string($conn, htmlentities(trim($amount_paid)));
      $quantity = mysqli_escape_string($conn, htmlentities(trim($quantity)));
      $due = mysqli_escape_string($conn, htmlentities(trim($due)));
      $itempacket = mysqli_escape_string($conn, htmlentities(trim($itempacket)));
      $Itemdesign = mysqli_escape_string($conn, htmlentities(trim($Itemdesign)));
      $order_date = mysqli_escape_string($conn, htmlentities(trim($order_date)));
      $customer = mysqli_escape_string($conn, htmlentities(trim($customer)));
      $customer_name = mysqli_escape_string($conn, htmlentities(trim($customer_name)));
      $address = mysqli_escape_string($conn, htmlentities(trim($address)));
      $phone = mysqli_escape_string($conn, htmlentities(trim($phone)));
      $Itemcolor = mysqli_escape_string($conn, htmlentities(trim($Itemcolor)));
      $Itemguage = mysqli_escape_string($conn, htmlentities(trim($Itemguage)));
      $Itemold_price = mysqli_escape_string($conn, htmlentities(trim($Itemold_price)));
      $Itemkg_weight = mysqli_escape_string($conn, htmlentities(trim($Itemkg_weight)));
      $Itemmeter_length = mysqli_escape_string($conn, htmlentities(trim($Itemmeter_length)));
      $Itemembossed = mysqli_escape_string($conn, htmlentities(trim($Itemembossed)));
      $sales_rep = mysqli_escape_string($conn, htmlentities(trim($sales_rep)));
      $status1 = mysqli_escape_string($conn, htmlentities(trim($status1)));
      $GMD1 = mysqli_escape_string($conn, htmlentities(trim($GMD1)));
      $CEO1 = mysqli_escape_string($conn, htmlentities(trim($CEO1)));
      $Accountant1 = mysqli_escape_string($conn, htmlentities(trim($Accountant1)));
      $bank_name = mysqli_escape_string($conn, htmlentities(trim($bank_name)));
      $bank_id = mysqli_escape_string($conn, htmlentities(trim($bank_id)));
      $Itemcost_of_goods = mysqli_escape_string($conn, htmlentities(trim($Itemcost_of_goods)));
      $sql = 'INSERT INTO invoice_details(invoice_id,product_code,product_name,category,mode_payment,qty,price,total,paid,due,order_date,customer,customer_name,address,phone,color,guage,old_price,kg_weight,meter_length,embossed,design,packet,sales_rep,status,CEO,GMD,Accountant,bank_name,bank_id,cost_of_goods) VALUES (?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?)';
      $query = $conn->prepare($sql);
      $query->bind_param('sssssssssssssssssssssssssssssss',$invoice_id,$Itemproduct_code,$itemproduct_name,$itemcategory,$mode_payment,$quantity,$ItemPrice,$Itemtotal,$amount_paid,$due,$order_date,$customer,$customer_name,$address,$phone,$Itemcolor,$Itemguage,$Itemold_price,$Itemkg_weight,$Itemmeter_length,$Itemembossed,$Itemdesign,$itempacket,$sales_rep,$status1,$GMD1,$CEO1,$Accountant1,$bank_name,$bank_id,$Itemcost_of_goods);
           if ($query->execute()){
                        return true;
                }else{
                      return false;
                     }
                      $conn->close(); 
}



 function insertInvoiceDetailsAlum($invoice_id,$Itemproduct_code,$itemproduct_name,$itemcategory,$mode_payment,$ItemPrice,$Itemtotal,$amount_paid,$due,$order_date,$customer,$customer_name,$address,$phone,$Itemcolor,$Itemguage,$Itemold_price,$Itemkg_weight,$Itemmeter_length,$Itemembossed,$sales_rep,$status,$CEO,$GMD,$Accountant,$bank_name,$bank_id,$Itemcost_of_goods){
      $conn = mysqli_connect($this->host, $this->user, $this->password, $this->DB);
      $invoice_id = mysqli_escape_string($conn, htmlentities(trim($invoice_id)));
      $Itemproduct_code = mysqli_escape_string($conn, htmlentities(trim($Itemproduct_code)));
      $itemproduct_name = mysqli_escape_string($conn, htmlentities(trim($itemproduct_name)));
      $itemcategory = mysqli_escape_string($conn, htmlentities(trim($itemcategory)));
      $mode_payment = mysqli_escape_string($conn, htmlentities(trim($mode_payment)));
      $ItemPrice = mysqli_escape_string($conn, htmlentities(trim($ItemPrice)));
      $Itemtotal = mysqli_escape_string($conn, htmlentities(trim($Itemtotal)));
      $amount_paid = mysqli_escape_string($conn, htmlentities(trim($amount_paid)));
      $due = mysqli_escape_string($conn, htmlentities(trim($due)));
      $order_date = mysqli_escape_string($conn, htmlentities(trim($order_date)));
      $customer = mysqli_escape_string($conn, htmlentities(trim($customer)));
      $customer_name = mysqli_escape_string($conn, htmlentities(trim($customer_name)));
      $address = mysqli_escape_string($conn, htmlentities(trim($address)));
      $phone = mysqli_escape_string($conn, htmlentities(trim($phone)));
      $Itemcolor = mysqli_escape_string($conn, htmlentities(trim($Itemcolor)));
      $Itemguage = mysqli_escape_string($conn, htmlentities(trim($Itemguage)));
      $Itemold_price = mysqli_escape_string($conn, htmlentities(trim($Itemold_price)));
      $Itemkg_weight = mysqli_escape_string($conn, htmlentities(trim($Itemkg_weight)));
      $Itemmeter_length = mysqli_escape_string($conn, htmlentities(trim($Itemmeter_length)));
      $Itemembossed = mysqli_escape_string($conn, htmlentities(trim($Itemembossed)));
      $sales_rep = mysqli_escape_string($conn, htmlentities(trim($sales_rep)));
      $status = mysqli_escape_string($conn, htmlentities(trim($status)));
      $GMD = mysqli_escape_string($conn, htmlentities(trim($GMD)));
      $CEO = mysqli_escape_string($conn, htmlentities(trim($CEO)));
      $Accountant = mysqli_escape_string($conn, htmlentities(trim($Accountant)));
      $bank_name = mysqli_escape_string($conn, htmlentities(trim($bank_name)));
      $bank_id = mysqli_escape_string($conn, htmlentities(trim($bank_id)));
      $Itemcost_of_goods = mysqli_escape_string($conn, htmlentities(trim($Itemcost_of_goods)));
      $sql = 'INSERT INTO invoice_details(invoice_id,product_code,product_name,category,mode_payment,price,total,paid,due,order_date,customer,customer_name,address,phone,color,guage,old_price,kg_weight,meter_length,embossed,sales_rep,status,CEO,GMD,Accountant,bank_name,bank_id,cost_of_goods) VALUES (?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?)';
      $query         = $conn->prepare($sql);
      $query->bind_param('ssssssssssssssssssssssssssss',$invoice_id,$Itemproduct_code,$itemproduct_name,$itemcategory,$mode_payment,$ItemPrice,$Itemtotal,$amount_paid,$due,$order_date,$customer,$customer_name,$address,$phone,$Itemcolor,$Itemguage,$Itemold_price,$Itemkg_weight,$Itemmeter_length,$Itemembossed,$sales_rep,$status,$CEO,$GMD,$Accountant,$bank_name,$bank_id,$Itemcost_of_goods);
           if ($query->execute()){
                        return true;
                }else{
                      return false;
                     }
                      $conn->close(); 
}




 function insertInvoiceDetailsZinc($invoice_id,$Itemproduct_code,$itemproduct_name,$itemcategory,$mode_payment,$qty,$ItemPrice,$Itemtotal,$amount_paid,$due,$order_date,$customer,$customer_name,$address,$phone,$Itemcolor,$Itemguage,$Itemold_price,$Itemembossed,$sales_rep,$status,$CEO,$GMD,$Accountant,$bank_name,$bank_id,$Itemcost_of_goods){
      $conn = mysqli_connect($this->host, $this->user, $this->password, $this->DB);
      $invoice_id = mysqli_escape_string($conn, htmlentities(trim($invoice_id)));
      $Itemproduct_code = mysqli_escape_string($conn, htmlentities(trim($Itemproduct_code)));
      $itemproduct_name = mysqli_escape_string($conn, htmlentities(trim($itemproduct_name)));
      $itemcategory = mysqli_escape_string($conn, htmlentities(trim($itemcategory)));
      $mode_payment = mysqli_escape_string($conn, htmlentities(trim($mode_payment)));
      $ItemPrice = mysqli_escape_string($conn, htmlentities(trim($ItemPrice)));
      $Itemtotal = mysqli_escape_string($conn, htmlentities(trim($Itemtotal)));
      $amount_paid = mysqli_escape_string($conn, htmlentities(trim($amount_paid)));
      $due = mysqli_escape_string($conn, htmlentities(trim($due)));
      $order_date = mysqli_escape_string($conn, htmlentities(trim($order_date)));
      $customer = mysqli_escape_string($conn, htmlentities(trim($customer)));
      $customer_name = mysqli_escape_string($conn, htmlentities(trim($customer_name)));
      $address = mysqli_escape_string($conn, htmlentities(trim($address)));
      $phone = mysqli_escape_string($conn, htmlentities(trim($phone)));
      $Itemcolor = mysqli_escape_string($conn, htmlentities(trim($Itemcolor)));
      $Itemguage = mysqli_escape_string($conn, htmlentities(trim($Itemguage)));
      $Itemold_price = mysqli_escape_string($conn, htmlentities(trim($Itemold_price)));
      $qty = mysqli_escape_string($conn, htmlentities(trim($qty)));
      
      $Itemembossed = mysqli_escape_string($conn, htmlentities(trim($Itemembossed)));
      $sales_rep = mysqli_escape_string($conn, htmlentities(trim($sales_rep)));
      $status = mysqli_escape_string($conn, htmlentities(trim($status)));
      $GMD = mysqli_escape_string($conn, htmlentities(trim($GMD)));
      $CEO = mysqli_escape_string($conn, htmlentities(trim($CEO)));
      $Accountant = mysqli_escape_string($conn, htmlentities(trim($Accountant)));
      $bank_name = mysqli_escape_string($conn, htmlentities(trim($bank_name)));
      $bank_id = mysqli_escape_string($conn, htmlentities(trim($bank_id)));
      $cost_of_goods = mysqli_escape_string($conn, htmlentities(trim($cost_of_goods)));
      $sql = 'INSERT INTO invoice_details(invoice_id,product_code,product_name,category,mode_payment,qty,price,total,paid,due,order_date,customer,customer_name,address,phone,color,guage,old_price,embossed,sales_rep,status,CEO,GMD,Accountant,bank_name,bank_id,cost_of_goods) VALUES (?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?)';
      $query         = $conn->prepare($sql);
      $query->bind_param('sssssssssssssssssssssssssss',$invoice_id,$Itemproduct_code,$itemproduct_name,$itemcategory,$mode_payment,$qty,$ItemPrice,$Itemtotal,$amount_paid,$due,$order_date,$customer,$customer_name,$address,$phone,$Itemcolor,$Itemguage,$Itemold_price,$Itemembossed,$sales_rep,$status,$CEO,$GMD,$Accountant,$bank_name,$bank_id,$Itemcost_of_goods);
           if ($query->execute()){
                        return true;
                }else{
                      return false;
                     }
                      $conn->close(); 
}



 function insertInvoiceDetailsCoated($invoice_id,$Itemproduct_code,$itemproduct_name,$itemcategory,$mode_payment,$qty,$ItemPrice,$Itemtotal,$amount_paid,$due,$order_date,$customer,$customer_name,$address,$phone,$Itemcolor,$Itemguage,$Itemold_price,$design,$sales_rep,$status,$CEO,$GMD,$Accountant,$bank_name,$bank_id,$Itemcost_of_goods){
      $conn = mysqli_connect($this->host, $this->user, $this->password, $this->DB);
      $invoice_id = mysqli_escape_string($conn, htmlentities(trim($invoice_id)));
      $Itemproduct_code = mysqli_escape_string($conn, htmlentities(trim($Itemproduct_code)));
      $itemproduct_name = mysqli_escape_string($conn, htmlentities(trim($itemproduct_name)));
      $itemcategory = mysqli_escape_string($conn, htmlentities(trim($itemcategory)));
      $mode_payment = mysqli_escape_string($conn, htmlentities(trim($mode_payment)));
      $ItemPrice = mysqli_escape_string($conn, htmlentities(trim($ItemPrice)));
      $Itemtotal = mysqli_escape_string($conn, htmlentities(trim($Itemtotal)));
      $amount_paid = mysqli_escape_string($conn, htmlentities(trim($amount_paid)));
      $due = mysqli_escape_string($conn, htmlentities(trim($due)));
      $order_date = mysqli_escape_string($conn, htmlentities(trim($order_date)));
      $customer = mysqli_escape_string($conn, htmlentities(trim($customer)));
      $customer_name = mysqli_escape_string($conn, htmlentities(trim($customer_name)));
      $address = mysqli_escape_string($conn, htmlentities(trim($address)));
      $phone = mysqli_escape_string($conn, htmlentities(trim($phone)));
      $Itemcolor = mysqli_escape_string($conn, htmlentities(trim($Itemcolor)));
      $Itemguage = mysqli_escape_string($conn, htmlentities(trim($Itemguage)));
      $Itemold_price = mysqli_escape_string($conn, htmlentities(trim($Itemold_price)));
      $qty = mysqli_escape_string($conn, htmlentities(trim($qty)));
      
      $design = mysqli_escape_string($conn, htmlentities(trim($design)));
      $sales_rep = mysqli_escape_string($conn, htmlentities(trim($sales_rep)));
      $status = mysqli_escape_string($conn, htmlentities(trim($status)));
      $GMD = mysqli_escape_string($conn, htmlentities(trim($GMD)));
      $CEO = mysqli_escape_string($conn, htmlentities(trim($CEO)));
      $Accountant = mysqli_escape_string($conn, htmlentities(trim($Accountant)));
      $bank_name = mysqli_escape_string($conn, htmlentities(trim($bank_name)));
      $bank_id = mysqli_escape_string($conn, htmlentities(trim($bank_id)));
      $Itemcost_of_goods = mysqli_escape_string($conn, htmlentities(trim($Itemcost_of_goods)));
      $sql = 'INSERT INTO invoice_details(invoice_id,product_code,product_name,category,mode_payment,qty,price,total,paid,due,order_date,customer,customer_name,address,phone,color,guage,old_price,design,sales_rep,status,CEO,GMD,Accountant,bank_name,bank_id,cost_of_goods) VALUES (?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?)';
      $query         = $conn->prepare($sql);
      $query->bind_param('sssssssssssssssssssssssssss',$invoice_id,$Itemproduct_code,$itemproduct_name,$itemcategory,$mode_payment,$qty,$ItemPrice,$Itemtotal,$amount_paid,$due,$order_date,$customer,$customer_name,$address,$phone,$Itemcolor,$Itemguage,$Itemold_price,$Itemembossed,$sales_rep,$status,$CEO,$GMD,$Accountant,$bank_name,$bank_id,$Itemcost_of_goods);
           if ($query->execute()){
                        return true;
                }else{
                      return false;
                     }
                      $conn->close(); 
}

 function insertInvoiceDetailsFlat($invoice_id,$Itemproduct_code,$itemproduct_name,$itemcategory,$mode_payment,$qty,$ItemPrice,$Itemtotal,$amount_paid,$due,$order_date,$customer,$customer_name,$address,$phone,$Itemcolor,$Itemguage,$Itemold_price,$sales_rep,$status,$CEO,$GMD,$Accountant,$bank_name,$bank_id){
      $conn = mysqli_connect($this->host, $this->user, $this->password, $this->DB);
      $invoice_id = mysqli_escape_string($conn, htmlentities(trim($invoice_id)));
      $Itemproduct_code = mysqli_escape_string($conn, htmlentities(trim($Itemproduct_code)));
      $itemproduct_name = mysqli_escape_string($conn, htmlentities(trim($itemproduct_name)));
      $itemcategory = mysqli_escape_string($conn, htmlentities(trim($itemcategory)));
      $mode_payment = mysqli_escape_string($conn, htmlentities(trim($mode_payment)));
      $ItemPrice = mysqli_escape_string($conn, htmlentities(trim($ItemPrice)));
      $Itemtotal = mysqli_escape_string($conn, htmlentities(trim($Itemtotal)));
      $amount_paid = mysqli_escape_string($conn, htmlentities(trim($amount_paid)));
      $due = mysqli_escape_string($conn, htmlentities(trim($due)));
      $order_date = mysqli_escape_string($conn, htmlentities(trim($order_date)));
      $customer = mysqli_escape_string($conn, htmlentities(trim($customer)));
      $customer_name = mysqli_escape_string($conn, htmlentities(trim($customer_name)));
      $address = mysqli_escape_string($conn, htmlentities(trim($address)));
      $phone = mysqli_escape_string($conn, htmlentities(trim($phone)));
      $Itemcolor = mysqli_escape_string($conn, htmlentities(trim($Itemcolor)));
      $Itemguage = mysqli_escape_string($conn, htmlentities(trim($Itemguage)));
      $Itemold_price = mysqli_escape_string($conn, htmlentities(trim($Itemold_price)));
      $qty = mysqli_escape_string($conn, htmlentities(trim($qty)));
      
      
      $sales_rep = mysqli_escape_string($conn, htmlentities(trim($sales_rep)));
      $status = mysqli_escape_string($conn, htmlentities(trim($status)));
      $GMD = mysqli_escape_string($conn, htmlentities(trim($GMD)));
      $CEO = mysqli_escape_string($conn, htmlentities(trim($CEO)));
      $Accountant = mysqli_escape_string($conn, htmlentities(trim($Accountant)));
      $bank_name = mysqli_escape_string($conn, htmlentities(trim($bank_name)));
      $bank_id = mysqli_escape_string($conn, htmlentities(trim($bank_id)));
      $sql = 'INSERT INTO invoice_details(invoice_id,product_code,product_name,category,mode_payment,qty,price,total,paid,due,order_date,customer,customer_name,address,phone,color,guage,old_price,sales_rep,status,CEO,GMD,Accountant,bank_name,bank_id) VALUES (?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?)';
      $query         = $conn->prepare($sql);
      $query->bind_param('sssssssssssssssssssssssss',$invoice_id,$Itemproduct_code,$itemproduct_name,$itemcategory,$mode_payment,$qty,$ItemPrice,$Itemtotal,$amount_paid,$due,$order_date,$customer,$customer_name,$address,$phone,$Itemcolor,$Itemguage,$Itemold_price,$sales_rep,$status,$CEO,$GMD,$Accountant,$bank_name,$bank_id);
           if ($query->execute()){
                        return true;
                }else{
                      return false;
                     }
                      $conn->close(); 
}



function insertInvoiceDetailsPack($invoice_id,$Itemproduct_code,$itemproduct_name,$itemcategory,$mode_payment,$qty,$ItemPrice,$Itemtotal,$amount_paid,$due,$order_date,$customer,$customer_name,$address,$phone,$Itemold_price,$sales_rep,$status,$CEO,$GMD,$Accountant,$bank_name,$bank_id,$Itemcost_of_goods){
      $conn = mysqli_connect($this->host, $this->user, $this->password, $this->DB);
      $invoice_id = mysqli_escape_string($conn, htmlentities(trim($invoice_id)));
      $Itemproduct_code = mysqli_escape_string($conn, htmlentities(trim($Itemproduct_code)));
      $itemproduct_name = mysqli_escape_string($conn, htmlentities(trim($itemproduct_name)));
      $itemcategory = mysqli_escape_string($conn, htmlentities(trim($itemcategory)));
      $mode_payment = mysqli_escape_string($conn, htmlentities(trim($mode_payment)));
      $ItemPrice = mysqli_escape_string($conn, htmlentities(trim($ItemPrice)));
      $Itemtotal = mysqli_escape_string($conn, htmlentities(trim($Itemtotal)));
      $amount_paid = mysqli_escape_string($conn, htmlentities(trim($amount_paid)));
      $due = mysqli_escape_string($conn, htmlentities(trim($due)));
      $order_date = mysqli_escape_string($conn, htmlentities(trim($order_date)));
      $customer = mysqli_escape_string($conn, htmlentities(trim($customer)));
      $customer_name = mysqli_escape_string($conn, htmlentities(trim($customer_name)));
      $address = mysqli_escape_string($conn, htmlentities(trim($address)));
      $phone = mysqli_escape_string($conn, htmlentities(trim($phone)));
    
      $Itemold_price = mysqli_escape_string($conn, htmlentities(trim($Itemold_price)));
      $qty = mysqli_escape_string($conn, htmlentities(trim($qty)));
      
      
      $sales_rep = mysqli_escape_string($conn, htmlentities(trim($sales_rep)));
      $status = mysqli_escape_string($conn, htmlentities(trim($status)));
      $GMD = mysqli_escape_string($conn, htmlentities(trim($GMD)));
      $CEO = mysqli_escape_string($conn, htmlentities(trim($CEO)));
      $Accountant = mysqli_escape_string($conn, htmlentities(trim($Accountant)));
      $bank_name = mysqli_escape_string($conn, htmlentities(trim($bank_name)));
      $bank_id = mysqli_escape_string($conn, htmlentities(trim($bank_id)));
      $Itemcost_of_goods = mysqli_escape_string($conn, htmlentities(trim($Itemcost_of_goods)));
      $sql = 'INSERT INTO invoice_details(invoice_id,product_code,product_name,category,mode_payment,qty,price,total,paid,due,order_date,customer,customer_name,address,phone,old_price,sales_rep,status,CEO,GMD,Accountant,bank_name,bank_id,cost_of_goods) VALUES (?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?)';
      $query         = $conn->prepare($sql);
      $query->bind_param('ssssssssssssssssssssssss',$invoice_id,$Itemproduct_code,$itemproduct_name,$itemcategory,$mode_payment,$qty,$ItemPrice,$Itemtotal,$amount_paid,$due,$order_date,$customer,$customer_name,$address,$phone,$Itemold_price,$sales_rep,$status,$CEO,$GMD,$Accountant,$bank_name,$bank_id,$Itemcost_of_goods);
           if ($query->execute()){
                        return true;
                }else{
                      return false;
                     }
                      $conn->close(); 
}



 function insertInvoiceDetailsCreditAlum($invoice_id,$product_code,$product_name,$category,$mode_payment,$price,$total,$amount_paid,$due,$order_date,$customer,$customer_name,$address,$phone,$sales_rep,$status,$GMD,$CEO,$Accountant,$Itemcolor,$Itemmeter_length,$Itemkg_weight,$Itemguage,$Itemold_price,$Itemembossed,$Itemcost_of_goods){
      $conn = mysqli_connect($this->host, $this->user, $this->password, $this->DB);
      $invoice_id = mysqli_escape_string($conn, htmlentities(trim($invoice_id)));
      $product_code = mysqli_escape_string($conn, htmlentities(trim($product_code)));
      $product_name = mysqli_escape_string($conn, htmlentities(trim($product_name)));
      $category = mysqli_escape_string($conn, htmlentities(trim($category)));
      $mode_payment = mysqli_escape_string($conn, htmlentities(trim($mode_payment)));
      
      $price = mysqli_escape_string($conn, htmlentities(trim($price)));
      $total = mysqli_escape_string($conn, htmlentities(trim($total)));
      $order_date = mysqli_escape_string($conn, htmlentities(trim($order_date)));
      $customer = mysqli_escape_string($conn, htmlentities(trim($customer)));
      $customer_name = mysqli_escape_string($conn, htmlentities(trim($customer_name)));
      $address = mysqli_escape_string($conn, htmlentities(trim($address)));
      $phone = mysqli_escape_string($conn, htmlentities(trim($phone)));
      $sales_rep = mysqli_escape_string($conn, htmlentities(trim($sales_rep)));
      $status = mysqli_escape_string($conn, htmlentities(trim($status)));
      $GMD = mysqli_escape_string($conn, htmlentities(trim($GMD)));
      $CEO = mysqli_escape_string($conn, htmlentities(trim($CEO)));
      $Itemguage = mysqli_escape_string($conn, htmlentities(trim($Itemguage)));
      $Itemcolor = mysqli_escape_string($conn, htmlentities(trim($Itemcolor)));
      $Itemkg_weight = mysqli_escape_string($conn, htmlentities(trim($Itemkg_weight)));
      $Itemmeter_length = mysqli_escape_string($conn, htmlentities(trim($Itemmeter_length)));
      $Itemembossed = mysqli_escape_string($conn, htmlentities(trim($Itemembossed)));
      $Itemold_price = mysqli_escape_string($conn, htmlentities(trim($Itemold_price)));
      $Accountant = mysqli_escape_string($conn, htmlentities(trim($Accountant)));
      $Itemcost_of_goods = mysqli_escape_string($conn, htmlentities(trim($Itemcost_of_goods)));
      $sql = 'INSERT INTO sale_credit_table(invoice_id,product_code,product_name,category,mode_payment,price,total,paid,due,order_date,customer,customer_name,address,phone,sales_rep,status,GMD,CEO,Accountant,color,meter_length,kg_weight,guage,old_price,embossed,cost_of_goods) VALUES (?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?)';
      $query         = $conn->prepare($sql);
      $query->bind_param('ssssssssssssssssssssssssss',$invoice_id,$product_code,$product_name,$category,$mode_payment,$price,$total,$amount_paid,$due,$order_date,$customer,$customer_name,$address,$phone,$sales_rep,$status,$GMD,$CEO,$Accountant,$Itemcolor,$Itemmeter_length,$Itemkg_weight,$Itemguage,$Itemold_price,$Itemembossed,$Itemcost_of_goods);
           if ($query->execute()){
                        return true;
                }else{
                      return false;
                     }
                      $conn->close(); 
}




function insertInvoiceDetailsPriceADJUSTAlum($invoice_id,$product_code,$product_name,$category,$mode_payment,$price,$total,$amount_paid,$due,$order_date,$customer,$customer_name,$address,$phone,$sales_rep,$status,$GMD,$CEO,$Accountant,$Itemguage,$Itemcolor,$Itemkg_weight,$Itemmeter_length,$Itemembossed,$Itemold_price,$Itemcost_of_goods){
      $conn = mysqli_connect($this->host, $this->user, $this->password, $this->DB);
      $invoice_id = mysqli_escape_string($conn, htmlentities(trim($invoice_id)));
      $product_code = mysqli_escape_string($conn, htmlentities(trim($product_code)));
      $product_name = mysqli_escape_string($conn, htmlentities(trim($product_name)));
      $category = mysqli_escape_string($conn, htmlentities(trim($category)));
      $mode_payment = mysqli_escape_string($conn, htmlentities(trim($mode_payment)));
      $price = mysqli_escape_string($conn, htmlentities(trim($price)));
      $total = mysqli_escape_string($conn, htmlentities(trim($total)));
      $order_date = mysqli_escape_string($conn, htmlentities(trim($order_date)));
      $customer = mysqli_escape_string($conn, htmlentities(trim($customer)));
      $customer_name = mysqli_escape_string($conn, htmlentities(trim($customer_name)));
      $address = mysqli_escape_string($conn, htmlentities(trim($address)));
      $phone = mysqli_escape_string($conn, htmlentities(trim($phone)));
      $sales_rep = mysqli_escape_string($conn, htmlentities(trim($sales_rep)));
      $status = mysqli_escape_string($conn, htmlentities(trim($status)));
      $GMD = mysqli_escape_string($conn, htmlentities(trim($GMD)));
      $CEO = mysqli_escape_string($conn, htmlentities(trim($CEO)));
      $Itemguage = mysqli_escape_string($conn, htmlentities(trim($Itemguage)));
      $Itemcolor = mysqli_escape_string($conn, htmlentities(trim($Itemcolor)));
      $Itemkg_weight = mysqli_escape_string($conn, htmlentities(trim($Itemkg_weight)));
      $Itemmeter_length = mysqli_escape_string($conn, htmlentities(trim($Itemmeter_length)));
      $Itemembossed = mysqli_escape_string($conn, htmlentities(trim($Itemembossed)));
      $Itemold_price = mysqli_escape_string($conn, htmlentities(trim($Itemold_price)));
      $Accountant = mysqli_escape_string($conn, htmlentities(trim($Accountant)));
      $Itemcost_of_goods = mysqli_escape_string($conn, htmlentities(trim($Itemcost_of_goods)));
      $sql = 'INSERT INTO price_adjust_sale(invoice_id,product_code,product_name,category,mode_payment,price,total,paid,due,order_date,customer,customer_name,address,phone,sales_rep,status,GMD,CEO,Accountant,guage,color,kg_weight,meter_length,embossed,old_price,cost_of_goods) VALUES (?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?)';
      $query         = $conn->prepare($sql);
      $query->bind_param('ssssssssssssssssssssssssss',$invoice_id,$product_code,$product_name,$category,$mode_payment,$price,$total,$amount_paid,$due,$order_date,$customer,$customer_name,$address,$phone,$sales_rep,$status,$GMD,$CEO,$Accountant,$Itemguage,$Itemcolor,$Itemkg_weight,$Itemmeter_length,$Itemembossed,$Itemold_price,$Itemcost_of_goods);
           if ($query->execute()){
                        return true;
                }else{
                      return false;
                     }
                      $conn->close(); 
}









 function insertInvoiceDetailsCreditZinc($invoice_id,$product_code,$product_name,$category,$mode_payment,$qty,$price,$total,$amount_paid,$due,$order_date,$customer,$customer_name,$address,$phone,$sales_rep,$status,$GMD,$CEO,$Accountant,$Itemguage,$Itemcolor,$Itemembossed,$Itemold_price,$Itemcost_of_goods){
      $conn = mysqli_connect($this->host, $this->user, $this->password, $this->DB);
      $invoice_id = mysqli_escape_string($conn, htmlentities(trim($invoice_id)));
      $product_code = mysqli_escape_string($conn, htmlentities(trim($product_code)));
      $product_name = mysqli_escape_string($conn, htmlentities(trim($product_name)));
      $category = mysqli_escape_string($conn, htmlentities(trim($category)));
      $mode_payment = mysqli_escape_string($conn, htmlentities(trim($mode_payment)));
      
      $price = mysqli_escape_string($conn, htmlentities(trim($price)));
      $total = mysqli_escape_string($conn, htmlentities(trim($total)));
      $order_date = mysqli_escape_string($conn, htmlentities(trim($order_date)));
      $customer = mysqli_escape_string($conn, htmlentities(trim($customer)));
      $customer_name = mysqli_escape_string($conn, htmlentities(trim($customer_name)));
      $address = mysqli_escape_string($conn, htmlentities(trim($address)));
      $phone = mysqli_escape_string($conn, htmlentities(trim($phone)));
      $sales_rep = mysqli_escape_string($conn, htmlentities(trim($sales_rep)));
      $status = mysqli_escape_string($conn, htmlentities(trim($status)));
      $GMD = mysqli_escape_string($conn, htmlentities(trim($GMD)));
      $CEO = mysqli_escape_string($conn, htmlentities(trim($CEO)));
      $Itemguage = mysqli_escape_string($conn, htmlentities(trim($Itemguage)));
      $Itemcolor = mysqli_escape_string($conn, htmlentities(trim($Itemcolor)));
      $qty = mysqli_escape_string($conn, htmlentities(trim($qty)));
    
      $Itemembossed = mysqli_escape_string($conn, htmlentities(trim($Itemembossed)));
      $Itemold_price = mysqli_escape_string($conn, htmlentities(trim($Itemold_price)));
      $Accountant = mysqli_escape_string($conn, htmlentities(trim($Accountant)));
      $Itemcost_of_goods = mysqli_escape_string($conn, htmlentities(trim($Itemcost_of_goods)));
      $sql = 'INSERT INTO sale_credit_table(invoice_id,product_code,product_name,category,mode_payment,qty,price,total,paid,due,order_date,customer,customer_name,address,phone,sales_rep,status,GMD,CEO,Accountant,guage,color,embossed,old_price,cost_of_goods) VALUES (?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?)';
      $query         = $conn->prepare($sql);
      $query->bind_param('sssssssssssssssssssssssss',$invoice_id,$product_code,$product_name,$category,$mode_payment,$qty,$price,$total,$amount_paid,$due,$order_date,$customer,$customer_name,$address,$phone,$sales_rep,$status,$GMD,$CEO,$Accountant,$Itemguage,$Itemcolor,$Itemembossed,$Itemold_price,$Itemcost_of_goods);
           if ($query->execute()){
                        return true;
                }else{
                      return false;
                     }
                      $conn->close(); 
}



 function insertInvoiceDetailsCreditCoatd($invoice_id,$product_code,$product_name,$category,$mode_payment,$qty,$price,$total,$amount_paid,$due,$order_date,$customer,$customer_name,$address,$phone,$sales_rep,$status,$GMD,$CEO,$Accountant,$Itemguage,$Itemcolor,$Itemembossed,$Itemold_price,$Itemcost_of_goods){
      $conn = mysqli_connect($this->host, $this->user, $this->password, $this->DB);
      $invoice_id = mysqli_escape_string($conn, htmlentities(trim($invoice_id)));
      $product_code = mysqli_escape_string($conn, htmlentities(trim($product_code)));
      $product_name = mysqli_escape_string($conn, htmlentities(trim($product_name)));
      $category = mysqli_escape_string($conn, htmlentities(trim($category)));
      $mode_payment = mysqli_escape_string($conn, htmlentities(trim($mode_payment)));
      
      $price = mysqli_escape_string($conn, htmlentities(trim($price)));
      $total = mysqli_escape_string($conn, htmlentities(trim($total)));
      $order_date = mysqli_escape_string($conn, htmlentities(trim($order_date)));
      $customer = mysqli_escape_string($conn, htmlentities(trim($customer)));
      $customer_name = mysqli_escape_string($conn, htmlentities(trim($customer_name)));
      $address = mysqli_escape_string($conn, htmlentities(trim($address)));
      $phone = mysqli_escape_string($conn, htmlentities(trim($phone)));
      $sales_rep = mysqli_escape_string($conn, htmlentities(trim($sales_rep)));
      $status = mysqli_escape_string($conn, htmlentities(trim($status)));
      $GMD = mysqli_escape_string($conn, htmlentities(trim($GMD)));
      $CEO = mysqli_escape_string($conn, htmlentities(trim($CEO)));
      $Itemguage = mysqli_escape_string($conn, htmlentities(trim($Itemguage)));
      $Itemcolor = mysqli_escape_string($conn, htmlentities(trim($Itemcolor)));
      $qty = mysqli_escape_string($conn, htmlentities(trim($qty)));
    
      $Itemembossed = mysqli_escape_string($conn, htmlentities(trim($Itemembossed)));
      $Itemold_price = mysqli_escape_string($conn, htmlentities(trim($Itemold_price)));
      $Accountant = mysqli_escape_string($conn, htmlentities(trim($Accountant)));
       $Itemcost_of_goods = mysqli_escape_string($conn, htmlentities(trim($Itemcost_of_goods)));
      $sql = 'INSERT INTO sale_credit_table(invoice_id,product_code,product_name,category,mode_payment,qty,price,total,paid,due,order_date,customer,customer_name,address,phone,sales_rep,status,GMD,CEO,Accountant,guage,color,design,old_price,cost_of_goods) VALUES (?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?)';
      $query         = $conn->prepare($sql);
      $query->bind_param('sssssssssssssssssssssssss',$invoice_id,$product_code,$product_name,$category,$mode_payment,$qty,$price,$total,$amount_paid,$due,$order_date,$customer,$customer_name,$address,$phone,$sales_rep,$status,$GMD,$CEO,$Accountant,$Itemguage,$Itemcolor,$Itemembossed,$Itemold_price,$Itemcost_of_goods);
           if ($query->execute()){
                        return true;
                }else{
                      return false;
                     }
                      $conn->close(); 
}






 function insertInvoiceDetailsPriceADJUSTZinc($invoice_id,$product_code,$product_name,$category,$mode_payment,$qty,$price,$total,$amount_paid,$due,$order_date,$customer,$customer_name,$address,$phone,$sales_rep,$status,$GMD,$CEO,$Accountant,$Itemguage,$Itemcolor,$Itemembossed,$Itemold_price,$Itemcost_of_goods){
      $conn = mysqli_connect($this->host, $this->user, $this->password, $this->DB);
      $invoice_id = mysqli_escape_string($conn, htmlentities(trim($invoice_id)));
      $product_code = mysqli_escape_string($conn, htmlentities(trim($product_code)));
      $product_name = mysqli_escape_string($conn, htmlentities(trim($product_name)));
      $category = mysqli_escape_string($conn, htmlentities(trim($category)));
      $mode_payment = mysqli_escape_string($conn, htmlentities(trim($mode_payment)));
      
      $price = mysqli_escape_string($conn, htmlentities(trim($price)));
      $total = mysqli_escape_string($conn, htmlentities(trim($total)));
      $order_date = mysqli_escape_string($conn, htmlentities(trim($order_date)));
      $customer = mysqli_escape_string($conn, htmlentities(trim($customer)));
      $customer_name = mysqli_escape_string($conn, htmlentities(trim($customer_name)));
      $address = mysqli_escape_string($conn, htmlentities(trim($address)));
      $phone = mysqli_escape_string($conn, htmlentities(trim($phone)));
      $sales_rep = mysqli_escape_string($conn, htmlentities(trim($sales_rep)));
      $status = mysqli_escape_string($conn, htmlentities(trim($status)));
      $GMD = mysqli_escape_string($conn, htmlentities(trim($GMD)));
      $CEO = mysqli_escape_string($conn, htmlentities(trim($CEO)));
      $Itemguage = mysqli_escape_string($conn, htmlentities(trim($Itemguage)));
      $Itemcolor = mysqli_escape_string($conn, htmlentities(trim($Itemcolor)));
      $qty = mysqli_escape_string($conn, htmlentities(trim($qty)));
    
      $Itemembossed = mysqli_escape_string($conn, htmlentities(trim($Itemembossed)));
      $Itemold_price = mysqli_escape_string($conn, htmlentities(trim($Itemold_price)));
      $Accountant = mysqli_escape_string($conn, htmlentities(trim($Accountant)));
      $Itemcost_of_goods = mysqli_escape_string($conn, htmlentities(trim($Itemcost_of_goods)));
      $sql = 'INSERT INTO price_adjust_sale(invoice_id,product_code,product_name,category,mode_payment,qty,price,total,paid,due,order_date,customer,customer_name,address,phone,sales_rep,status,GMD,CEO,Accountant,guage,color,embossed,old_price,cost_of_goods) VALUES (?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?)';
      $query         = $conn->prepare($sql);
      $query->bind_param('sssssssssssssssssssssssss',$invoice_id,$product_code,$product_name,$category,$mode_payment,$qty,$price,$total,$amount_paid,$due,$order_date,$customer,$customer_name,$address,$phone,$sales_rep,$status,$GMD,$CEO,$Accountant,$Itemguage,$Itemcolor,$Itemembossed,$Itemold_price,$Itemcost_of_goods);
           if ($query->execute()){
                        return true;
                }else{
                      return false;
                     }
                      $conn->close(); 
}





 function insertInvoiceDetailsPriceADJUSTCoted($invoice_id,$product_code,$product_name,$category,$mode_payment,$qty,$price,$total,$amount_paid,$due,$order_date,$customer,$customer_name,$address,$phone,$sales_rep,$status,$GMD,$CEO,$Accountant,$Itemguage,$Itemcolor,$Itemembossed,$Itemold_price,$Itemcost_of_goods){
      $conn = mysqli_connect($this->host, $this->user, $this->password, $this->DB);
      $invoice_id = mysqli_escape_string($conn, htmlentities(trim($invoice_id)));
      $product_code = mysqli_escape_string($conn, htmlentities(trim($product_code)));
      $product_name = mysqli_escape_string($conn, htmlentities(trim($product_name)));
      $category = mysqli_escape_string($conn, htmlentities(trim($category)));
      $mode_payment = mysqli_escape_string($conn, htmlentities(trim($mode_payment)));
      
      $price = mysqli_escape_string($conn, htmlentities(trim($price)));
      $total = mysqli_escape_string($conn, htmlentities(trim($total)));
      $order_date = mysqli_escape_string($conn, htmlentities(trim($order_date)));
      $customer = mysqli_escape_string($conn, htmlentities(trim($customer)));
      $customer_name = mysqli_escape_string($conn, htmlentities(trim($customer_name)));
      $address = mysqli_escape_string($conn, htmlentities(trim($address)));
      $phone = mysqli_escape_string($conn, htmlentities(trim($phone)));
      $sales_rep = mysqli_escape_string($conn, htmlentities(trim($sales_rep)));
      $status = mysqli_escape_string($conn, htmlentities(trim($status)));
      $GMD = mysqli_escape_string($conn, htmlentities(trim($GMD)));
      $CEO = mysqli_escape_string($conn, htmlentities(trim($CEO)));
      $Itemguage = mysqli_escape_string($conn, htmlentities(trim($Itemguage)));
      $Itemcolor = mysqli_escape_string($conn, htmlentities(trim($Itemcolor)));
      $qty = mysqli_escape_string($conn, htmlentities(trim($qty)));
    
      $Itemembossed = mysqli_escape_string($conn, htmlentities(trim($Itemembossed)));
      $Itemold_price = mysqli_escape_string($conn, htmlentities(trim($Itemold_price)));
      $Accountant = mysqli_escape_string($conn, htmlentities(trim($Accountant)));
      $Itemcost_of_goods = mysqli_escape_string($conn, htmlentities(trim($Itemcost_of_goods)));
      $sql = 'INSERT INTO price_adjust_sale(invoice_id,product_code,product_name,category,mode_payment,qty,price,total,paid,due,order_date,customer,customer_name,address,phone,sales_rep,status,GMD,CEO,Accountant,guage,color,design,old_price,cost_of_goods) VALUES (?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?)';
      $query         = $conn->prepare($sql);
      $query->bind_param('sssssssssssssssssssssssss',$invoice_id,$product_code,$product_name,$category,$mode_payment,$qty,$price,$total,$amount_paid,$due,$order_date,$customer,$customer_name,$address,$phone,$sales_rep,$status,$GMD,$CEO,$Accountant,$Itemguage,$Itemcolor,$Itemembossed,$Itemold_price,$Itemcost_of_goods);
           if ($query->execute()){
                        return true;
                }else{
                      return false;
                     }
                      $conn->close(); 
}




 function insertInvoiceDetailsCreditFlat($invoice_id,$product_code,$product_name,$category,$mode_payment,$qty,$price,$total,$amount_paid,$due,$order_date,$customer,$customer_name,$address,$phone,$sales_rep,$status,$GMD,$CEO,$Accountant,$Itemguage,$Itemcolor,$Itemold_price,$Itemcost_of_goods){
      $conn = mysqli_connect($this->host, $this->user, $this->password, $this->DB);
      $invoice_id = mysqli_escape_string($conn, htmlentities(trim($invoice_id)));
      $product_code = mysqli_escape_string($conn, htmlentities(trim($product_code)));
      $product_name = mysqli_escape_string($conn, htmlentities(trim($product_name)));
      $category = mysqli_escape_string($conn, htmlentities(trim($category)));
      $mode_payment = mysqli_escape_string($conn, htmlentities(trim($mode_payment)));
      
      $price = mysqli_escape_string($conn, htmlentities(trim($price)));
      $total = mysqli_escape_string($conn, htmlentities(trim($total)));
      $order_date = mysqli_escape_string($conn, htmlentities(trim($order_date)));
      $customer = mysqli_escape_string($conn, htmlentities(trim($customer)));
      $customer_name = mysqli_escape_string($conn, htmlentities(trim($customer_name)));
      $address = mysqli_escape_string($conn, htmlentities(trim($address)));
      $phone = mysqli_escape_string($conn, htmlentities(trim($phone)));
      $sales_rep = mysqli_escape_string($conn, htmlentities(trim($sales_rep)));
      $status = mysqli_escape_string($conn, htmlentities(trim($status)));
      $GMD = mysqli_escape_string($conn, htmlentities(trim($GMD)));
      $CEO = mysqli_escape_string($conn, htmlentities(trim($CEO)));
      $Itemguage = mysqli_escape_string($conn, htmlentities(trim($Itemguage)));
      $Itemcolor = mysqli_escape_string($conn, htmlentities(trim($Itemcolor)));
      $qty = mysqli_escape_string($conn, htmlentities(trim($qty)));
    
      // $Itemembossed = mysqli_escape_string($conn, htmlentities(trim($Itemembossed)));
      $Itemold_price = mysqli_escape_string($conn, htmlentities(trim($Itemold_price)));
      $Accountant = mysqli_escape_string($conn, htmlentities(trim($Accountant)));
      $Itemcost_of_goods = mysqli_escape_string($conn, htmlentities(trim($Itemcost_of_goods)));
      $sql = 'INSERT INTO sale_credit_table(invoice_id,product_code,product_name,category,mode_payment,qty,price,total,paid,due,order_date,customer,customer_name,address,phone,sales_rep,status,GMD,CEO,Accountant,guage,color,old_price,cost_of_goods) VALUES (?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?)';
      $query         = $conn->prepare($sql);
      $query->bind_param('ssssssssssssssssssssssss',$invoice_id,$product_code,$product_name,$category,$mode_payment,$qty,$price,$total,$amount_paid,$due,$order_date,$customer,$customer_name,$address,$phone,$sales_rep,$status,$GMD,$CEO,$Accountant,$Itemguage,$Itemcolor,$Itemold_price,$Itemcost_of_goods);
           if ($query->execute()){
                        return true;
                }else{
                      return false;
                     }
                      $conn->close(); 
}






 function insertInvoiceDetailsPriceADJUSTFlat($invoice_id,$product_code,$product_name,$category,$mode_payment,$qty,$price,$total,$amount_paid,$due,$order_date,$customer,$customer_name,$address,$phone,$sales_rep,$status,$GMD,$CEO,$Accountant,$Itemguage,$Itemcolor,$Itemold_price,$Itemcost_of_goods){
      $conn = mysqli_connect($this->host, $this->user, $this->password, $this->DB);
      $invoice_id = mysqli_escape_string($conn, htmlentities(trim($invoice_id)));
      $product_code = mysqli_escape_string($conn, htmlentities(trim($product_code)));
      $product_name = mysqli_escape_string($conn, htmlentities(trim($product_name)));
      $category = mysqli_escape_string($conn, htmlentities(trim($category)));
      $mode_payment = mysqli_escape_string($conn, htmlentities(trim($mode_payment)));
      
      $price = mysqli_escape_string($conn, htmlentities(trim($price)));
      $total = mysqli_escape_string($conn, htmlentities(trim($total)));
      $order_date = mysqli_escape_string($conn, htmlentities(trim($order_date)));
      $customer = mysqli_escape_string($conn, htmlentities(trim($customer)));
      $customer_name = mysqli_escape_string($conn, htmlentities(trim($customer_name)));
      $address = mysqli_escape_string($conn, htmlentities(trim($address)));
      $phone = mysqli_escape_string($conn, htmlentities(trim($phone)));
      $sales_rep = mysqli_escape_string($conn, htmlentities(trim($sales_rep)));
      $status = mysqli_escape_string($conn, htmlentities(trim($status)));
      $GMD = mysqli_escape_string($conn, htmlentities(trim($GMD)));
      $CEO = mysqli_escape_string($conn, htmlentities(trim($CEO)));
      $Itemguage = mysqli_escape_string($conn, htmlentities(trim($Itemguage)));
      $Itemcolor = mysqli_escape_string($conn, htmlentities(trim($Itemcolor)));
      $qty = mysqli_escape_string($conn, htmlentities(trim($qty)));
      $Itemcost_of_goods = mysqli_escape_string($conn, htmlentities(trim($Itemcost_of_goods)));
    
      // $Itemembossed = mysqli_escape_string($conn, htmlentities(trim($Itemembossed)));
      $Itemold_price = mysqli_escape_string($conn, htmlentities(trim($Itemold_price)));
      $Accountant = mysqli_escape_string($conn, htmlentities(trim($Accountant)));
      $sql = 'INSERT INTO price_adjust_sale(invoice_id,product_code,product_name,category,mode_payment,qty,price,total,paid,due,order_date,customer,customer_name,address,phone,sales_rep,status,GMD,CEO,Accountant,guage,color,embossed,old_price,cost_of_goods) VALUES (?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?)';
      $query         = $conn->prepare($sql);
      $query->bind_param('ssssssssssssssssssssssss',$invoice_id,$product_code,$product_name,$category,$mode_payment,$qty,$price,$total,$amount_paid,$due,$order_date,$customer,$customer_name,$address,$phone,$sales_rep,$status,$GMD,$CEO,$Accountant,$Itemguage,$Itemcolor,$Itemold_price,$Itemcost_of_goods);
           if ($query->execute()){
                        return true;
                }else{
                      return false;
                     }
                      $conn->close(); 
}






 function insertInvoiceDetailsCreditPack($invoice_id,$product_code,$product_name,$category,$mode_payment,$Qtyy,$price,$total,$amount_paid,$due,$order_date,$customer,$customer_name,$address,$phone,$sales_rep,$status,$GMD,$CEO,$Accountant,$Itemold_price,$itempacket,$Itemcost_of_goods){
      $conn = mysqli_connect($this->host, $this->user, $this->password, $this->DB);
      $invoice_id = mysqli_escape_string($conn, htmlentities(trim($invoice_id)));
      $product_code = mysqli_escape_string($conn, htmlentities(trim($product_code)));
      $product_name = mysqli_escape_string($conn, htmlentities(trim($product_name)));
      $category = mysqli_escape_string($conn, htmlentities(trim($category)));
      $mode_payment = mysqli_escape_string($conn, htmlentities(trim($mode_payment)));
       $Qtyy = mysqli_escape_string($conn, htmlentities(trim($Qtyy)));
      $price = mysqli_escape_string($conn, htmlentities(trim($price)));
      $total = mysqli_escape_string($conn, htmlentities(trim($total)));
      $order_date = mysqli_escape_string($conn, htmlentities(trim($order_date)));
      $customer = mysqli_escape_string($conn, htmlentities(trim($customer)));
      $customer_name = mysqli_escape_string($conn, htmlentities(trim($customer_name)));
      $address = mysqli_escape_string($conn, htmlentities(trim($address)));
      $phone = mysqli_escape_string($conn, htmlentities(trim($phone)));
      $sales_rep = mysqli_escape_string($conn, htmlentities(trim($sales_rep)));
      $status = mysqli_escape_string($conn, htmlentities(trim($status)));
      $GMD = mysqli_escape_string($conn, htmlentities(trim($GMD)));
      $CEO = mysqli_escape_string($conn, htmlentities(trim($CEO)));
      $itempacke = mysqli_escape_string($conn, htmlentities(trim($itempacket)));
    
      // $Itemembossed = mysqli_escape_string($conn, htmlentities(trim($Itemembossed)));
      $Itemold_price = mysqli_escape_string($conn, htmlentities(trim($Itemold_price)));
      $Accountant = mysqli_escape_string($conn, htmlentities(trim($Accountant)));
      $Itemcost_of_goods = mysqli_escape_string($conn, htmlentities(trim($Itemcost_of_goods)));
      $sql = 'INSERT INTO sale_credit_table(invoice_id,product_code,product_name,category,mode_payment,qty,price,total,paid,due,order_date,customer,customer_name,address,phone,sales_rep,status,GMD,CEO,Accountant,old_price,packet,cost_of_goods) VALUES (?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?)';
      $query         = $conn->prepare($sql);
      $query->bind_param('sssssssssssssssssssssss',$invoice_id,$product_code,$product_name,$category,$mode_payment,$Qtyy,$price,$total,$amount_paid,$due,$order_date,$customer,$customer_name,$address,$phone,$sales_rep,$status,$GMD,$CEO,$Accountant,$Itemold_price,$itempacket,$Itemcost_of_goods);
           if ($query->execute()){
                        return true;
                }else{
                      return false;
                     }
                      $conn->close(); 
}









 function insertInvoiceDetailsPriceADJUSTPack($invoice_id,$product_code,$product_name,$category,$mode_payment,$price,$total,$amount_paid,$due,$order_date,$customer,$customer_name,$address,$phone,$sales_rep,$status,$GMD,$CEO,$Accountant,$Itemold_price,$itempacket,$Itemcost_of_goods){
      $conn = mysqli_connect($this->host, $this->user, $this->password, $this->DB);
      $invoice_id = mysqli_escape_string($conn, htmlentities(trim($invoice_id)));
      $product_code = mysqli_escape_string($conn, htmlentities(trim($product_code)));
      $product_name = mysqli_escape_string($conn, htmlentities(trim($product_name)));
      $category = mysqli_escape_string($conn, htmlentities(trim($category)));
      $mode_payment = mysqli_escape_string($conn, htmlentities(trim($mode_payment)));
      
      $price = mysqli_escape_string($conn, htmlentities(trim($price)));
      $total = mysqli_escape_string($conn, htmlentities(trim($total)));
      $order_date = mysqli_escape_string($conn, htmlentities(trim($order_date)));
      $customer = mysqli_escape_string($conn, htmlentities(trim($customer)));
      $customer_name = mysqli_escape_string($conn, htmlentities(trim($customer_name)));
      $address = mysqli_escape_string($conn, htmlentities(trim($address)));
      $phone = mysqli_escape_string($conn, htmlentities(trim($phone)));
      $sales_rep = mysqli_escape_string($conn, htmlentities(trim($sales_rep)));
      $status = mysqli_escape_string($conn, htmlentities(trim($status)));
      $GMD = mysqli_escape_string($conn, htmlentities(trim($GMD)));
      $CEO = mysqli_escape_string($conn, htmlentities(trim($CEO)));
      $itempacke = mysqli_escape_string($conn, htmlentities(trim($itempacket)));
    
      // $Itemembossed = mysqli_escape_string($conn, htmlentities(trim($Itemembossed)));
      $Itemold_price = mysqli_escape_string($conn, htmlentities(trim($Itemold_price)));
      $Accountant = mysqli_escape_string($conn, htmlentities(trim($Accountant)));
      $Itemcost_of_goods = mysqli_escape_string($conn, htmlentities(trim($Itemcost_of_goods)));
      $sql = 'INSERT INTO sale_credit_table(invoice_id,product_code,product_name,category,mode_payment,price,total,paid,due,order_date,customer,customer_name,address,phone,sales_rep,status,GMD,CEO,Accountant,old_price,packet,cost_of_goods) VALUES (?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?)';
      $query         = $conn->prepare($sql);
      $query->bind_param('ssssssssssssssssssssss',$invoice_id,$product_code,$product_name,$category,$mode_payment,$price,$total,$amount_paid,$due,$order_date,$customer,$customer_name,$address,$phone,$sales_rep,$status,$GMD,$CEO,$Accountant,$Itemold_price,$itempacket,$Itemcost_of_goods);
           if ($query->execute()){
                        return true;
                }else{
                      return false;
                     }
                      $conn->close(); 
}














// function UpdateStocksale($qty,$product_code){
//             $conn =  mysqli_connect($this->host, $this->user, $this->password, $this->DB);
//             $sql = "UPDATE stockin SET quantity =quantity-'".$qty."' WHERE item_code ='".$product_code."'";
//             $query = $conn->query($sql) or print(mysqli_error($conn));
//             if ($query == true) {
//               return true;  
//             }else{
//                return false;   
//             }
//     $conn->close(); 
// }


 function insertCategory($category,$user){
          $conn = mysqli_connect($this->host, $this->user, $this->password, $this->DB);
          $category  = mysqli_escape_string($conn, htmlentities(trim($category)));
          $user = mysqli_escape_string($conn, htmlentities(trim($user)));
          $sql = 'INSERT INTO category(category,user) VALUES (?,?)';
          $query = $conn->prepare($sql);
          $query->bind_param('ss',$category,$user);
          if($query->execute()){
            return true;
          }else{
            return false;
          }
          $conn->close();
 }




  function insertWarehouse($warehouse,$location,$code,$user){
          $conn = mysqli_connect($this->host, $this->user, $this->password, $this->DB);
          $warehouse  = mysqli_escape_string($conn, htmlentities(trim($warehouse)));
          $location  = mysqli_escape_string($conn, htmlentities(trim($location)));
          $code  = mysqli_escape_string($conn, htmlentities(trim($code)));
          $user = mysqli_escape_string($conn, htmlentities(trim($user)));
          $sql = 'INSERT INTO warehouse(warehouse_name,location,Code,Userlogin) VALUES (?,?,?,?)';
          $query = $conn->prepare($sql);
          $query->bind_param('ssss',$warehouse,$location,$code,$user);
          if($query->execute()){
            return true;
          }else{
            return false;
          }
          $conn->close();
 }




  function insertProduct($product_name,$product_code,$user){
          $conn = mysqli_connect($this->host, $this->user, $this->password, $this->DB);
          $product_name  = mysqli_escape_string($conn, htmlentities(trim($product_name)));
          $product_code  = mysqli_escape_string($conn, htmlentities(trim($product_code)));
          $user = mysqli_escape_string($conn, htmlentities(trim($user)));
          $sql = 'INSERT INTO products(name,procduct_code,user) VALUES (?,?,?)';
          $query = $conn->prepare($sql);
          $query->bind_param('sss',$product_name,$product_code,$user);
          if($query->execute()){
            return true;
          }else{
            return false;
          }
          $conn->close();
 }



function addtocartAlum($product_code,$product_name,$category,$quantity,$price,$total,$cart_date,$sales_rep,$guage,$color,$kg_weight,$meter_length,$embossed,$design,$packet,$cost_of_goods){
  $conn = mysqli_connect($this->host, $this->user, $this->password, $this->DB);
  $product_code1   =  mysqli_escape_string($conn, htmlentities(trim($product_code)));
  $product_name1   =  mysqli_escape_string($conn, htmlentities(trim($product_name)));
  $category1       =  mysqli_escape_string($conn, htmlentities(trim($category)));
  $quantity1       =  mysqli_escape_string($conn, htmlentities(trim($quantity)));
  $price1          =  mysqli_escape_string($conn, htmlentities(trim($price)));
  $guage1          =  mysqli_escape_string($conn, htmlentities(trim($guage)));
  $color1          =  mysqli_escape_string($conn, htmlentities(trim($color)));
  $kg_weight1      =  mysqli_escape_string($conn, htmlentities(trim($kg_weight)));
  $meter_length1   =  mysqli_escape_string($conn, htmlentities(trim($meter_length)));
  $embossed1       =  mysqli_escape_string($conn, htmlentities(trim($embossed)));
  $design1       =  mysqli_escape_string($conn, htmlentities(trim($design)));
  $packet1       =  mysqli_escape_string($conn, htmlentities(trim($packet)));
  $cart_date1      =  mysqli_escape_string($conn, htmlentities(trim($cart_date)));
  $sales_rep1      =  mysqli_escape_string($conn, htmlentities(trim($sales_rep)));
  $total1          =  mysqli_escape_string($conn, htmlentities(trim($total)));
  $cost_of_goods1  =  mysqli_escape_string($conn, htmlentities(trim($cost_of_goods)));
  $sql = 'INSERT INTO addtocart_new(product_code,product_name,category,quantity,selling_price,total,cart_date,sales_rep,guage,color,kg_weight,meter_length,embossed,design,packet,cost_of_goods) VALUES (?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?)';
   $query = $conn->prepare($sql);
   $query->bind_param('ssssssssssssssss',$product_code1,$product_name1,$category1,$quantity1,$price1,$total1,$cart_date1,$sales_rep1,$guage1,$color1,$kg_weight1,$meter_length1,$embossed1,$design1,$packet1,$cost_of_goods1);
     if ($query->execute()){
         return true;
      }else{
         return false;
      }
   $conn->close();
}




function addtocartZinc($product_code,$product_name,$category,$quantity,$price,$old_price,$total,$cart_date,$sales_rep,$guage,$color,$embossed,$cost_of_goods){
  $conn = mysqli_connect($this->host, $this->user, $this->password, $this->DB);
  $product_code          =  mysqli_escape_string($conn, htmlentities(trim($product_code)));
  $product_name          =  mysqli_escape_string($conn, htmlentities(trim($product_name)));
  $category              =  mysqli_escape_string($conn, htmlentities(trim($category)));
  $price                 =  mysqli_escape_string($conn, htmlentities(trim($price)));
  $old_price                 =  mysqli_escape_string($conn, htmlentities(trim($old_price)));
  $guage              =  mysqli_escape_string($conn, htmlentities(trim($guage)));
  $color              =  mysqli_escape_string($conn, htmlentities(trim($color)));
  $quantity              =  mysqli_escape_string($conn, htmlentities(trim($quantity)));
  $embossed              =  mysqli_escape_string($conn, htmlentities(trim($embossed)));
  $cart_date             =  mysqli_escape_string($conn, htmlentities(trim($cart_date)));
  $sales_rep             =  mysqli_escape_string($conn, htmlentities(trim($sales_rep)));
  $total                 =  mysqli_escape_string($conn, htmlentities(trim($total)));
  $cost_of_goods                 =  mysqli_escape_string($conn, htmlentities(trim($cost_of_goods)));
  $sql = 'INSERT INTO addtocart(product_code,product_name,category,quantity,price,old_price,total,cart_date,sales_rep,guage,color,embossed,cost_of_goods) VALUES (?,?,?,?,?,?,?,?,?,?,?,?,?)';
   $query = $conn->prepare($sql);
   $query->bind_param('sssssssssssss',$product_code,$product_name,$category,$quantity,$price,$old_price,$total,$cart_date,$sales_rep,$guage,$color,$embossed,$cost_of_goods);
     if ($query->execute()){
         return true;
      }else{
         return false;
      }
   $conn->close();
}





function addtocartStoneCoat($product_code,$product_name,$category,$quantity,$price,$old_price,$total,$cart_date,$sales_rep,$guage,$color,$design,$cost_of_goods){
  $conn = mysqli_connect($this->host, $this->user, $this->password, $this->DB);
  $product_code          =  mysqli_escape_string($conn, htmlentities(trim($product_code)));
  $product_name          =  mysqli_escape_string($conn, htmlentities(trim($product_name)));
  $category              =  mysqli_escape_string($conn, htmlentities(trim($category)));
  $price                 =  mysqli_escape_string($conn, htmlentities(trim($price)));
  $old_price                 =  mysqli_escape_string($conn, htmlentities(trim($old_price)));
  $guage              =  mysqli_escape_string($conn, htmlentities(trim($guage)));
  $color              =  mysqli_escape_string($conn, htmlentities(trim($color)));
  $quantity              =  mysqli_escape_string($conn, htmlentities(trim($quantity)));
  $design              =  mysqli_escape_string($conn, htmlentities(trim($design)));
  $cart_date             =  mysqli_escape_string($conn, htmlentities(trim($cart_date)));
  $sales_rep             =  mysqli_escape_string($conn, htmlentities(trim($sales_rep)));
  $total                 =  mysqli_escape_string($conn, htmlentities(trim($total)));
  $cost_of_goods                 =  mysqli_escape_string($conn, htmlentities(trim($cost_of_goods)));
  $sql = 'INSERT INTO addtocart(product_code,product_name,category,quantity,price,old_price,total,cart_date,sales_rep,guage,color,design,cost_of_goods) VALUES (?,?,?,?,?,?,?,?,?,?,?,?,?)';
   $query = $conn->prepare($sql);
   $query->bind_param('sssssssssssss',$product_code,$product_name,$category,$quantity,$price,$old_price,$total,$cart_date,$sales_rep,$guage,$color,$design,$cost_of_goods);
     if ($query->execute()){
         return true;
      }else{
         return false;
      }
   $conn->close();
}





function addtocartFlat($product_code,$product_name,$category,$quantity,$price,$old_price,$total,$cart_date,$sales_rep,$guage,$color,$cost_of_goods){
  $conn = mysqli_connect($this->host, $this->user, $this->password, $this->DB);
  $product_code          =  mysqli_escape_string($conn, htmlentities(trim($product_code)));
  $product_name          =  mysqli_escape_string($conn, htmlentities(trim($product_name)));
  $category              =  mysqli_escape_string($conn, htmlentities(trim($category)));
  $price                 =  mysqli_escape_string($conn, htmlentities(trim($price)));
  $old_price                 =  mysqli_escape_string($conn, htmlentities(trim($old_price)));
  $guage              =  mysqli_escape_string($conn, htmlentities(trim($guage)));
  $color              =  mysqli_escape_string($conn, htmlentities(trim($color)));
  $quantity              =  mysqli_escape_string($conn, htmlentities(trim($quantity)));
  // $design              =  mysqli_escape_string($conn, htmlentities(trim($design)));
  $cart_date             =  mysqli_escape_string($conn, htmlentities(trim($cart_date)));
  $sales_rep             =  mysqli_escape_string($conn, htmlentities(trim($sales_rep)));
  $total                 =  mysqli_escape_string($conn, htmlentities(trim($total)));
  $cost_of_goods                 =  mysqli_escape_string($conn, htmlentities(trim($cost_of_goods)));
  $sql = 'INSERT INTO addtocart(product_code,product_name,category,quantity,price,old_price,total,cart_date,sales_rep,guage,color,cost_of_goods) VALUES (?,?,?,?,?,?,?,?,?,?,?,?)';
   $query = $conn->prepare($sql);
   $query->bind_param('ssssssssssss',$product_code,$product_name,$category,$quantity,$price,$old_price,$total,$cart_date,$sales_rep,$guage,$color,$cost_of_goods);
     if ($query->execute()){
         return true;
      }else{
         return false;
      }
   $conn->close();
}



function addtocartPack($product_code,$product_name,$category,$price,$old_price,$total,$cart_date,$sales_rep,$packet,$cost_of_goods){
  $conn = mysqli_connect($this->host, $this->user, $this->password, $this->DB);
  $product_code          =  mysqli_escape_string($conn, htmlentities(trim($product_code)));
  $product_name          =  mysqli_escape_string($conn, htmlentities(trim($product_name)));
  $category              =  mysqli_escape_string($conn, htmlentities(trim($category)));
  $price                 =  mysqli_escape_string($conn, htmlentities(trim($price)));
  $old_price                 =  mysqli_escape_string($conn, htmlentities(trim($old_price)));
  $packet              =  mysqli_escape_string($conn, htmlentities(trim($packet)));
  $cart_date             =  mysqli_escape_string($conn, htmlentities(trim($cart_date)));
  $sales_rep             =  mysqli_escape_string($conn, htmlentities(trim($sales_rep)));
  $total                 =  mysqli_escape_string($conn, htmlentities(trim($total)));
  $cost_of_goods                 =  mysqli_escape_string($conn, htmlentities(trim($cost_of_goods)));
  $sql = 'INSERT INTO addtocart(product_code,product_name,category,price,old_price,total,cart_date,sales_rep,packet,cost_of_goods) VALUES (?,?,?,?,?,?,?,?,?,?)';
   $query = $conn->prepare($sql);
   $query->bind_param('ssssssssss',$product_code,$product_name,$category,$price,$old_price,$total,$cart_date,$sales_rep,$packet,$cost_of_goods);
     if ($query->execute()){
         return true;
      }else{
         return false;
      }
   $conn->close();
}





function cart_Delete($data){
   $conn = mysqli_connect($this->host, $this->user, $this->password, $this->DB);
   $sql  = "DELETE FROM addtocart_new WHERE id='$data'";
   $query = $conn->query($sql) or print(mysqli_error($conn));
        if($query == true){
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
   $sql  = "DELETE FROM customer_table WHERE id='$data'";
   $query = $conn->query($sql) or print(mysqli_error($conn));
        if($query == true){
         return true;
        }else{
           return false;
        } 
        $conn->close();  
}


 function Fetch_All_Category(){
         $resultset = array();
         $conn = mysqli_connect($this->host, $this->user, $this->password, $this->DB);
         $sql  = "SELECT * FROM category";
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



function My_Count_Fetchtotal($table){
      $conn = mysqli_connect($this->host,$this->user,$this->password,$this->DB);
         $q="SELECT COUNT(id) FROM $table WHERE order_date=current_date";
              $que=$conn->query($q)or print(mysqli_error($conn));
                  $count=mysqli_fetch_row($que);
                      echo $count[0];
         $conn->close();
      }


    //   function My_Count_Fetchiincom($table){
    //   $conn = mysqli_connect($this->host,$this->user,$this->password,$this->DB);
    //      $q="SELECT SUM(total) FROM $table WHERE  order_date=current_date";
    //           $que=$conn->query($q)or print(mysqli_error($conn));
    //               $count=mysqli_fetch_row($que);
    //                   echo number_format($count[0]);
    //      $conn->close();
    //   }



      function My_Count_FetchiincusDEbt($table){
      $conn = mysqli_connect($this->host,$this->user,$this->password,$this->DB);
         $q="SELECT SUM(debit) FROM $table ";
              $que=$conn->query($q)or print(mysqli_error($conn));
                  $count=mysqli_fetch_row($que);
                      echo number_format($count[0]);
         $conn->close();
      }


           function Total_Debit(){
      $conn = mysqli_connect($this->host,$this->user,$this->password,$this->DB);
         //$q="SELECT SUM(balance) FROM chart_of_account WHERE account_id='1200_ACCOUNT_RECEIVABLE'";
         $q="SELECT SUM(due) AS due FROM (SELECT invoice_id, MAX(due) AS due FROM invoice_details where due > 0 GROUP BY invoice_id) subquery";
              $que=$conn->query($q)or print(mysqli_error($conn));
                  $count=mysqli_fetch_row($que);
                      echo number_format($count[0]);
         $conn->close();
      }



          function My_Count_Fetchiincom(){
      $conn = mysqli_connect($this->host,$this->user,$this->password,$this->DB);
    //   $q="SELECT SUM(paid) AS paid FROM (SELECT invoice_id, MAX(paid) AS amount FROM invoice_details WHERE order_date=current_date GROUP BY invoice_id) subquery";
      $q="SELECT SUM(paid) AS paid FROM ( SELECT invoice_id, MAX(paid) AS paid FROM invoice_details WHERE order_date=current_date GROUP BY invoice_id ) subquery" ;
      //$q="SELECT SUM(total) FROM $table WHERE  order_date=current_date";
              $que=$conn->query($q)or print(mysqli_error($conn));
                  $count=mysqli_fetch_row($que);
                      echo number_format($count[0]);
         $conn->close();
      }

      // function Total_Debit(){
      // $conn = mysqli_connect($this->host,$this->user,$this->password,$this->DB);
         
      //             $credit= $this->My_Count_FetchiincusCredit('customer_ledger');
      //             //$debit= $this->My_Count_FetchiincusCredit('customer_ledger');
      //             $count= $credit ;

      //                 echo number_format($count);
      //    $conn->close();
      // }



 function Fetch_All_Warehouse(){
         $resultset = array();
         $conn = mysqli_connect($this->host, $this->user, $this->password, $this->DB);
         $sql  = "SELECT * FROM warehouse";
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


 function Fetch_All_Outlet(){
         $resultset = array();
         $conn = mysqli_connect($this->host, $this->user, $this->password, $this->DB);
         $sql  = "SELECT * FROM sale_outlet";
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



 function Fetch_All_Product(){
         $resultset = array();
         $conn = mysqli_connect($this->host, $this->user, $this->password, $this->DB);
         $sql  = "SELECT * FROM products";
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




    function Targeted_informationlast($table,$field,$data){
         $conn = mysqli_connect($this->host, $this->user, $this->password, $this->DB);
         $sql = ("SELECT * FROM $table WHERE $field = '$data'  ORDER BY id DESC LIMIT 1");
         $query = $conn->query($sql) or print(mysqli_error($conn));
         $row = mysqli_fetch_array($query);
             if($query == true){
                    return $row;
                }else{
                    return false;
                    }
        $conn->close();
    }
    
    
    function Targeted_Requestlast($table){
         $conn = mysqli_connect($this->host, $this->user, $this->password, $this->DB);
         $sql = ("SELECT * FROM $table ORDER BY id DESC LIMIT 1");
         $query = $conn->query($sql) or print(mysqli_error($conn));
         $row = mysqli_fetch_array($query);
             if($query == true){
                    return $row;
                }else{
                    return false;
                    }
        $conn->close();
    }
    
    
    
    
     function Targeted_OtherIncomelast($table,$field,$data){
         $conn = mysqli_connect($this->host, $this->user, $this->password, $this->DB);
         $sql = ("SELECT * FROM $table WHERE $field = '$data' ORDER BY id DESC LIMIT 1");
         $query = $conn->query($sql) or print(mysqli_error($conn));
         $row = mysqli_fetch_array($query);
             if($query == true){
                    return $row;
                }else{
                    return false;
                    }
        $conn->close();
    }





function cartEdit_Update($product_code,$new_quantity,$new_total){
   $conn = mysqli_connect($this->host, $this->user, $this->password, $this->DB);
    $sql = "UPDATE addtocart_new SET quantity ='".$new_quantity."', total ='".$new_total."' WHERE id ='".$product_code."'";
    $query = $conn->query($sql) or print(mysqli_error($conn));
    if ($query == true) {
      return true;  
    }else{
      return false;   
    }
    $conn->close();
}



function Uesr_Update($product_code,$firstname,$password,$role){
   $conn = mysqli_connect($this->host, $this->user, $this->password, $this->DB);
    $sql = "UPDATE admin SET name ='".$firstname."', password ='".$password."', role ='".$role."' WHERE id ='".$product_code."'";
    $query = $conn->query($sql) or print(mysqli_error($conn));
    if ($query == true) {
      return true;  
    }else{
      return false;   
    }
    $conn->close();
}




function Update_Series($id,$serial_name,$warehouse,$label,$status){
   $conn = mysqli_connect($this->host, $this->user, $this->password, $this->DB);
    $sql = "UPDATE serial_table SET serial_name ='".$serial_name."', warehouse ='".$warehouse."', label ='".$label."', status ='".$status."' WHERE id ='".$id."'";
    $query = $conn->query($sql) or print(mysqli_error($conn));
    if ($query == true) {
      return true;  
    }else{
      return false;   
    }
    $conn->close();
}






function CategoryUpdate($category,$user,$id){
   $conn = mysqli_connect($this->host, $this->user, $this->password, $this->DB);
    $sql = "UPDATE category SET category = '".$category."', user ='".$user."' WHERE id ='".$id."'";
    $query = $conn->query($sql) or print(mysqli_error($conn));
    if ($query == true) {
      return true;  
    }else{
      return false;   
    }
    $conn->close();
}



   function ProductUpdate($name,$user,$id){
   $conn = mysqli_connect($this->host, $this->user, $this->password, $this->DB);
    $sql = "UPDATE products SET name = '".$name."', user ='".$user."' WHERE id ='".$id."'";
    $query = $conn->query($sql) or print(mysqli_error($conn));
    if ($query == true) {
      return true;  
    }else{
      return false;   
    }
    $conn->close();
}



function StockinUpdate($product_name,$quantity,$purchase_price,$selling_price,$total,$category,$guage,$color,$kg_weight,$meter_length,$embossed,$design,$packet,$low_stock_level,$warehouse,$container_series,$container,$location,$datex,$item_code){
   $conn = mysqli_connect($this->host, $this->user, $this->password, $this->DB);
    $sql = "UPDATE stockin SET product_name = '".$product_name."', quantity ='".$quantity."', purchase_price ='".$purchase_price."', selling_price ='".$selling_price."', total ='".$total."', category ='".$category."', guage ='".$guage."', color ='".$color."', kg_weight ='".$kg_weight."', meter_length ='".$meter_length."', embossed ='".$embossed."', design ='".$design."', packet ='".$packet."', low_stock_level ='".$low_stock_level."', warehouse ='".$warehouse."', container_series ='".$container_series."', container ='".$container."', location ='".$location."', updated ='".$datex."' WHERE item_code ='".$item_code."'";
    $query = $conn->query($sql) or print(mysqli_error($conn));
    if ($query == true) {
      return true;  
    }else{
      return false;   
    }
    $conn->close();
}





function selectCate($table){
   $conn = mysqli_connect($this->host, $this->user, $this->password, $this->DB);
   $sql  = "SELECT * FROM $table";
   $query= $conn->query($sql); 
       while($fetch=$query->fetch_assoc()){
         
      echo '<option>'.$fetch['category'].'</option>';
        
    }
  $conn->close();     
}



// function selectWarehouse($table){
//    $conn = mysqli_connect($this->host, $this->user, $this->password, $this->DB);
//    $sql  = "SELECT * FROM $table";
//    $query= $conn->query($sql); 
//        while($fetch=$query->fetch_assoc()){
         
//       echo '<option value="'.$fetch['id'].'">'.$fetch['warehouse_name'].'</option>';
        
//     }
//   $conn->close();     
// }


function selectWarehouse($table){
   $conn = mysqli_connect($this->host, $this->user, $this->password, $this->DB);
   $sql  = "SELECT * FROM $table GROUP BY warehouse";
   $query= $conn->query($sql); 
       while($fetch=$query->fetch_assoc()){
         
      echo '<option>'.$fetch['warehouse'].'</option>';
        
    }
  $conn->close();     
}




function selectserial($table){
   $conn = mysqli_connect($this->host, $this->user, $this->password, $this->DB);
   $sql  = "SELECT * FROM $table GROUP BY label";
   $query= $conn->query($sql); 
       while($fetch=$query->fetch_assoc()){
         
      echo '<option>'.$fetch['label'].'</option>';
        
    }
  $conn->close();     
}




// function selectserial($table){
//    $conn = mysqli_connect($this->host, $this->user, $this->password, $this->DB);
//    $sql  = "SELECT * FROM $table GROUP BY label";
//    $query= $conn->query($sql); 
//        while($fetch=$query->fetch_assoc()){
         
//       echo '<option>'.$fetch['label'].'</option>';
        
//     }
//   $conn->close();     
// }



function selectLABEL($table){
   $conn = mysqli_connect($this->host, $this->user, $this->password, $this->DB);
   $sql  = "SELECT * FROM $table";
   $query= $conn->query($sql); 
       while($fetch=$query->fetch_assoc()){
         
      echo '<option>'.$fetch['labels'].'</option>';
        
    }
  $conn->close();     
}




function selectChartAccount(){
   $conn = mysqli_connect($this->host, $this->user, $this->password, $this->DB);
   $sql  = "SELECT * FROM chart_of_account WHERE series_name='Liability' AND series_name!='Equity' ORDER BY `balance` DESC";
   $query= $conn->query($sql); 
       while($fetch=$query->fetch_assoc()){
         
      echo '<option>'.$fetch['account_id'].'</option>';
        
    }
  $conn->close();     

}







function selectProductName($table){
   $conn = mysqli_connect($this->host, $this->user, $this->password, $this->DB);
   $sql  = "SELECT * FROM $table";
   $query= $conn->query($sql); 
       while($fetch=$query->fetch_assoc()){
      echo '<option>'.$fetch['name'].'</option>';
    }
  $conn->close();     
}




function selectProductNameR($table){
   $conn = mysqli_connect($this->host, $this->user, $this->password, $this->DB);
   $sql  = "SELECT * FROM $table";
   $query= $conn->query($sql); 
       while($fetch=$query->fetch_assoc()){
      echo '<option value="'.$fetch['item_code'].'">'.$fetch['product_name']."~".$fetch['item_code'].'</option>';
    }
  $conn->close();     
}






 function insertChartOfAccount($category,$user){
          $conn = mysqli_connect($this->host, $this->user, $this->password, $this->DB);
          $category  = mysqli_escape_string($conn, htmlentities(trim($category)));
          $user = mysqli_escape_string($conn, htmlentities(trim($user)));
          $sql = 'INSERT INTO category(category,user) VALUES (?,?)';
          $query = $conn->prepare($sql);
          $query->bind_param('ss',$category,$user);
          if($query->execute()){
            return true;
          }else{
            return false;
          }
          $conn->close();
 }




// function selectProductName($table){
//    $conn = mysqli_connect($this->host, $this->user, $this->password, $this->DB);
//    $sql  = "SELECT * FROM $table";
//    $query= $conn->query($sql); 
//        while($fetch=$query->fetch_assoc()){
//       echo '<option>'.$fetch['name'].'</option>';
//     }
//   $conn->close();     
// }




// function selectCustomer($table){
//    $conn = mysqli_connect($this->host, $this->user, $this->password, $this->DB);
//    $sql  = "SELECT * FROM $table";
//    $query= $conn->query($sql); 
//        while($fetch=$query->fetch_assoc()){
//       echo '<option>'.$fetch['name'].'</option>';
//     }
//   $conn->close();     
// }


 function selectCustomer($table){
   $conn = mysqli_connect($this->host, $this->user, $this->password, $this->DB);
   $sql  = "SELECT * FROM $table";
   $query= $conn->query($sql); 
       while($fetch=$query->fetch_assoc()){
         
      echo '<option class="dropdown-item">'.$fetch['name']. "-" .$fetch['customer_code'].'</option>';
        
    }
  $conn->close();     
}





function selectVendor($table){
   $conn = mysqli_connect($this->host, $this->user, $this->password, $this->DB);
   $sql  = "SELECT * FROM $table";
   $query= $conn->query($sql); 
       while($fetch=$query->fetch_assoc()){
      echo '<option>'.$fetch['company_name'].'</option>';
    }
  $conn->close();     
}

  


function insertNewPurchase($product_name,$quantity,$price,$total,$product_code,$description,$category,$supplier,$transaction_id,$created_date){
      $conn = mysqli_connect($this->host, $this->user, $this->password, $this->DB);
      $product_name = mysqli_escape_string($conn, htmlentities(trim($product_name)));
      $quantity = mysqli_escape_string($conn, htmlentities(trim($quantity)));
      $price    = mysqli_escape_string($conn, htmlentities(trim($price)));
      $total     = mysqli_escape_string($conn, htmlentities(trim($total)));
      $product_code = mysqli_escape_string($conn, htmlentities(trim($product_code)));
      $description = mysqli_escape_string($conn, htmlentities(trim($description)));
      $category = mysqli_escape_string($conn, htmlentities(trim($category)));
      $supplier = mysqli_escape_string($conn, htmlentities(trim($supplier)));
      $transaction_id = mysqli_escape_string($conn, htmlentities(trim($transaction_id)));
      $created_date = mysqli_escape_string($conn, htmlentities(trim($created_date)));
      $sql = 'INSERT INTO purchase(product_name,quantity,price,total,product_code,description,category,supplier,transaction_id,created_date) VALUES (?,?,?,?,?,?,?,?,?,?)';
      $query = $conn->prepare($sql);
      $query->bind_param('ssssssssss',$product_name,$quantity,$price,$total,$product_code,$description,$category,$supplier,$transaction_id,$created_date);
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




 function insertPayable($created_date,$description,$type,$total,$Amount_paid,$amount_due,$supplier_id,$supplier,$payment_method,$Account,$transaction_id,$user){
      $conn = mysqli_connect($this->host, $this->user, $this->password, $this->DB);
      $created_date = mysqli_escape_string($conn, htmlentities(trim($created_date)));
      $description = mysqli_escape_string($conn, htmlentities(trim($description)));
      $type = mysqli_escape_string($conn, htmlentities(trim($type)));
      $total    = mysqli_escape_string($conn, htmlentities(trim($total)));
      $Amount_paid    = mysqli_escape_string($conn, htmlentities(trim($Amount_paid)));
      $amount_due = mysqli_escape_string($conn, htmlentities(trim($amount_due)));
      $supplier_id     = mysqli_escape_string($conn, htmlentities(trim($supplier_id)));
      $supplier = mysqli_escape_string($conn, htmlentities(trim($supplier)));
      $payment_method = mysqli_escape_string($conn, htmlentities(trim($payment_method)));
      $Account = mysqli_escape_string($conn, htmlentities(trim($Account)));
      $transaction_id = mysqli_escape_string($conn, htmlentities(trim($transaction_id)));
      $user = mysqli_escape_string($conn, htmlentities(trim($user)));
      $sql = 'INSERT INTO payable(datet,description,type,amount,amount_paid,balance,vendor_id,vendor_name,payment_method,account_posted,transaction_id,Userlogin) VALUES (?,?,?,?,?,?,?,?,?,?,?,?)';
      $query         = $conn->prepare($sql);
      $query->bind_param('ssssssssssss',$created_date,$description,$type,$total,$Amount_paid,$amount_due,$supplier_id,$supplier,$payment_method,$Account,$transaction_id,$user);
           if ($query->execute()){
                        return true;
                }else{
                      return false;
                     }
                      $conn->close(); 
}

  




 function insertReceivable($datex,$description,$type,$Itemtotal,$amount_paid,$due,$customer_name_new_id,$customer_name_new,$mode_payment,$Account1,$transaction_id,$sales_rep){
      $conn = mysqli_connect($this->host, $this->user, $this->password, $this->DB);
      $datex = mysqli_escape_string($conn, htmlentities(trim($datex)));
      $description = mysqli_escape_string($conn, htmlentities(trim($description)));
      $type = mysqli_escape_string($conn, htmlentities(trim($type)));
      $Itemtotal    = mysqli_escape_string($conn, htmlentities(trim($Itemtotal)));
      $amount_paid    = mysqli_escape_string($conn, htmlentities(trim($amount_paid)));
      $due = mysqli_escape_string($conn, htmlentities(trim($due)));
      $customer_name_new_id     = mysqli_escape_string($conn, htmlentities(trim($customer_name_new_id)));
      $customer_name_new = mysqli_escape_string($conn, htmlentities(trim($customer_name_new)));
      $mode_payment = mysqli_escape_string($conn, htmlentities(trim($mode_payment)));
      $Account1 = mysqli_escape_string($conn, htmlentities(trim($Account1)));
      $transaction_id = mysqli_escape_string($conn, htmlentities(trim($transaction_id)));
      $sales_rep = mysqli_escape_string($conn, htmlentities(trim($sales_rep)));
      $sql = 'INSERT INTO receiveable(datet,description,type,amount,initial_amount,balance,customer_id,customer_name,payment_method,account_posted,transaction_id,Userlogin) VALUES (?,?,?,?,?,?,?,?,?,?,?,?)';
      $query         = $conn->prepare($sql);
      $query->bind_param('ssssssssssss',$datex,$description,$type,$Itemtotal,$amount_paid,$due,$customer_name_new_id,$customer_name_new,$mode_payment,$Account1,$transaction_id,$sales_rep);
           if ($query->execute()){
                        return true;
                }else{
                      return false;
                     }
                      $conn->close(); 
}



 function insertStockin($product_name,$quantity,$price,$selling_price,$total,$product_code,$item_code,$category,$guage,$color,$kg_weight,$meter_length,$embossed,$design,$packet,$stock_level,$warehousere,$container_series,$container,$location,$total_purchase,$inputter){
      $conn = mysqli_connect($this->host, $this->user, $this->password, $this->DB);
      $product_name = mysqli_escape_string($conn, htmlentities(trim($product_name)));
      $quantity = mysqli_escape_string($conn, htmlentities(trim($quantity)));
      $price    = mysqli_escape_string($conn, htmlentities(trim($price)));
      $selling_price    = mysqli_escape_string($conn, htmlentities(trim($selling_price)));
      $total = mysqli_escape_string($conn, htmlentities(trim($total)));
      $product_code     = mysqli_escape_string($conn, htmlentities(trim($product_code)));
      $item_code = mysqli_escape_string($conn, htmlentities(trim($item_code)));
      $category = mysqli_escape_string($conn, htmlentities(trim($category)));
      $guage = mysqli_escape_string($conn, htmlentities(trim($guage)));
      $color = mysqli_escape_string($conn, htmlentities(trim($color)));
      $kg_weight = mysqli_escape_string($conn, htmlentities(trim($kg_weight)));
      $meter_length = mysqli_escape_string($conn, htmlentities(trim($meter_length)));
      $embossed = mysqli_escape_string($conn, htmlentities(trim($embossed)));
      $design = mysqli_escape_string($conn, htmlentities(trim($design)));
      $packet = mysqli_escape_string($conn, htmlentities(trim($packet)));
      $stock_level = mysqli_escape_string($conn, htmlentities(trim($stock_level)));
      $warehousere = mysqli_escape_string($conn, htmlentities(trim($warehousere)));
      $container_series = mysqli_escape_string($conn, htmlentities(trim($container_series)));
      $container = mysqli_escape_string($conn, htmlentities(trim($container)));
      $location = mysqli_escape_string($conn, htmlentities(trim($location)));
      $total_purchase = mysqli_escape_string($conn, htmlentities(trim($total_purchase)));
      $inputter = mysqli_escape_string($conn, htmlentities(trim($inputter)));
      $sql = 'INSERT INTO stockin(product_name,quantity,purchase_price,selling_price,total,product_code,item_code,category,guage,color,kg_weight,meter_length,embossed,design,packet,low_stock_level,warehouse,container_series,container,location,total_purchase,inputter) VALUES (?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?)';
      $query = $conn->prepare($sql);
      $query->bind_param('ssssssssssssssssssssss',$product_name,$quantity,$price,$selling_price,$total,$product_code,$item_code,$category,$guage,$color,$kg_weight,$meter_length,$embossed,$design,$packet,$stock_level,$warehousere,$container_series,$container,$location,$total_purchase,$inputter);
           if ($query->execute()){
                        return true;
                }else{
                      return false;
                     }
                      $conn->close(); 
}



 function insertStockinLog($Invoice_no,$product_name,$quantity,$price,$selling_price,$total,$product_code,$item_code,$category,$supplier,$guage,$color,$kg_weight,$meter_length,$embossed,$design,$packet,$warehousere,$container_series,$container,$location,$total_purchase,$inputter){
      $conn = mysqli_connect($this->host, $this->user, $this->password, $this->DB);
      $Invoice_no = mysqli_escape_string($conn, htmlentities(trim($Invoice_no)));
      $product_name = mysqli_escape_string($conn, htmlentities(trim($product_name)));
      $quantity = mysqli_escape_string($conn, htmlentities(trim($quantity)));
      $price    = mysqli_escape_string($conn, htmlentities(trim($price)));
      $selling_price    = mysqli_escape_string($conn, htmlentities(trim($selling_price)));
      $total = mysqli_escape_string($conn, htmlentities(trim($total)));
      $product_code     = mysqli_escape_string($conn, htmlentities(trim($product_code)));
      $item_code = mysqli_escape_string($conn, htmlentities(trim($item_code)));
      $category = mysqli_escape_string($conn, htmlentities(trim($category)));
      $supplier = mysqli_escape_string($conn, htmlentities(trim($supplier)));
      $guage = mysqli_escape_string($conn, htmlentities(trim($guage)));
      $color = mysqli_escape_string($conn, htmlentities(trim($color)));
      $kg_weight = mysqli_escape_string($conn, htmlentities(trim($kg_weight)));
      $meter_length = mysqli_escape_string($conn, htmlentities(trim($meter_length)));
      $embossed = mysqli_escape_string($conn, htmlentities(trim($embossed)));
      $design = mysqli_escape_string($conn, htmlentities(trim($design)));
      $packet = mysqli_escape_string($conn, htmlentities(trim($packet)));
      $warehousere = mysqli_escape_string($conn, htmlentities(trim($warehousere)));
      $container = mysqli_escape_string($conn, htmlentities(trim($container)));
      $container_series = mysqli_escape_string($conn, htmlentities(trim($container_series)));
      $location = mysqli_escape_string($conn, htmlentities(trim($location)));
       $total_purchase = mysqli_escape_string($conn, htmlentities(trim($total_purchase)));
       $inputter = mysqli_escape_string($conn, htmlentities(trim($inputter)));
      $sql = 'INSERT INTO stockin_log(container_no,product_name,quantity,purchase_price,selling_price,total,product_code,item_code,category,supplier,guage,color,kg_weight,meter_length,embossed,design,packet,warehouse,container_series,container,location,total_purchase,inputter) VALUES (?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?)';
      $query = $conn->prepare($sql);
      $query->bind_param('sssssssssssssssssssssss',$Invoice_no,$product_name,$quantity,$price,$selling_price,$total,$product_code,$item_code,$category,$supplier,$guage,$color,$kg_weight,$meter_length,$embossed,$design,$packet,$warehousere,$container_series,$container,$location,$total_purchase,$inputter);
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
    
     


function insertCustomer_ledger($account_id,$credit,$debit,$balance){
      $conn = mysqli_connect($this->host, $this->user, $this->password, $this->DB);
      $account_id = mysqli_escape_string($conn, htmlentities(trim($account_id)));
      $credit = mysqli_escape_string($conn, htmlentities(trim($credit)));
      $debit = mysqli_escape_string($conn, htmlentities(trim($debit)));
      $balance = mysqli_escape_string($conn, htmlentities(trim($balance)));
      $sql = 'INSERT INTO customer_ledger(account_id,credit,debit,balance) VALUES (?,?,?,?)';
      $query = $conn->prepare($sql);
      $query->bind_param('ssss',$account_id,$credit,$debit,$balance);
           if ($query->execute()){
                        return true;
                }else{
                      return false;
                     }
                      $conn->close(); 

}


function addcREDIT2244($account_id,$credit,$debit,$balance){
      $conn = mysqli_connect($this->host, $this->user, $this->password, $this->DB);
      $account_id = mysqli_escape_string($conn, htmlentities(trim($account_id)));
      $credit = mysqli_escape_string($conn, htmlentities(trim($credit)));
      $debit = mysqli_escape_string($conn, htmlentities(trim($debit)));
      $balance = mysqli_escape_string($conn, htmlentities(trim($balance)));
      $sql = 'INSERT INTO customer_ledger(account_id,credit,debit,balance) VALUES (?,?,?,?)';
      $query = $conn->prepare($sql);
      $query->bind_param('ssss',$account_id,$credit,$debit,$balance);
           if ($query->execute()){
                        return true;
                }else{
                      return false;
                     }
                      $conn->close(); 
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


function VendorBalance($supplier_id,$total){
            $conn =  mysqli_connect($this->host, $this->user, $this->password, $this->DB);
            $sql = "UPDATE supplier_table SET balance =balance+'".$total."' WHERE supplier_id ='".$supplier_id."'";
            $query = $conn->query($sql) or print(mysqli_error($conn));
            if ($query == true) {
              return true;  
            }else{
               return false;   
            } 
$conn->close(); 
}



function UPDATEled($Account,$total){
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



function addcREDIT($Account,$total){
            $conn =  mysqli_connect($this->host, $this->user, $this->password, $this->DB);
            $sql = "UPDATE customer_ledger SET credit =credit+'".$total."' WHERE account_id ='".$Account."'";
            $query = $conn->query($sql) or print(mysqli_error($conn));
            if ($query == true) {
              return true;  
            }else{
               return false;   
            }
$conn->close(); 
}


function addcREDITALL($Account,$amount_paid,$due,$new_due){
            $conn =  mysqli_connect($this->host, $this->user, $this->password, $this->DB);
            $sql = "UPDATE customer_ledger SET credit =credit+'".$amount_paid."', debit =debit+'".$due."', balance =balance+'".$new_due."' WHERE account_id ='".$Account."'";
            $query = $conn->query($sql) or print(mysqli_error($conn));
            if ($query == true) {
              return true;  
            }else{
               return false;   
            }
$conn->close(); 
}


function addcREDIT22($Account,$total){
            $conn =  mysqli_connect($this->host, $this->user, $this->password, $this->DB);
            $sql = "UPDATE customer_ledger SET balance =balance+'".$total."' WHERE account_id ='".$Account."'";
            $query = $conn->query($sql) or print(mysqli_error($conn));
            if ($query == true) {
              return true;  
            }else{
               return false;   
            }
$conn->close(); 
}






function UPSTAT($status1,$invoice_id){
            $conn =  mysqli_connect($this->host, $this->user, $this->password, $this->DB);
            $sql = "UPDATE sale_credit_table SET status ='".$status1."' WHERE invoice_id ='".$invoice_id."'";
            $query = $conn->query($sql) or print(mysqli_error($conn));
            if ($query == true) {
              return true;  
            }else{
               return false;   
            }
$conn->close(); 
}








// function check_if_Record_Exist1($tableName,$columnName,$dataChecked,$columnName1,$dataChecked1){
//    $conn = mysqli_connect($this->host, $this->user, $this->password, $this->DB);
//    $resultset = array();
//    $sql = ("SELECT * FROM $tableName WHERE $columnName='$dataChecked' AND $columnName1='$dataChecked1'");
//    $query= $conn->query($sql); 
//       while($fetch=$query->fetch_assoc()){
//         if($fetch==true){
//             return true;             
//        }else{
//             return false;
//        }
//     }
//   $conn->close(); 
// }





function check_if_Record_Exist1($tableName,$columnName,$dataChecked,$columnName1,$dataChecked1,$columnName2,$dataChecked2,$columnName3,$dataChecked3){
   $conn = mysqli_connect($this->host, $this->user, $this->password, $this->DB);
   $resultset = array();
   $sql = ("SELECT * FROM $tableName WHERE $columnName='$dataChecked' AND $columnName1='$dataChecked1' AND $columnName2='$dataChecked2' AND $columnName3='$dataChecked3'");
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




function UpdateStock($product_name,$quantity,$total){
            $conn =  mysqli_connect($this->host, $this->user, $this->password, $this->DB);
            $sql = "UPDATE stockin SET quantity =quantity + '".$quantity."', total =total + '".$total."' WHERE product_name = '".$product_name."'";
            $query = $conn->query($sql) or print(mysqli_error($conn));
            if ($query == true) {
              return true;  
            }else{
               return false;   
            }
                            $conn->close(); 
}


function AssignN($AssignStatus,$item_code,$warehousere){
            $conn =  mysqli_connect($this->host, $this->user, $this->password, $this->DB);
            $sql = "UPDATE serial_table SET status ='".$AssignStatus."' WHERE serial_name = '".$item_code."' AND warehouse = '".$warehousere."'";
            $query = $conn->query($sql) or print(mysqli_error($conn));
            if ($query == true) {
              return true;  
            }else{
               return false;   
            }
                            $conn->close(); 
}


function allStaff(){
   $conn = mysqli_connect($this->host, $this->user, $this->password, $this->DB);
   $resultset = array();
   $sql = ("SELECT * FROM staff");
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



function allUser(){
   $conn = mysqli_connect($this->host, $this->user, $this->password, $this->DB);
   $resultset = array();
   $sql = ("SELECT * FROM admin");
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



function allSerial(){
   $conn = mysqli_connect($this->host, $this->user, $this->password, $this->DB);
   $resultset = array();
   $sql = ("SELECT * FROM serial_table");
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



function Getcustt($data){
   $conn = mysqli_connect($this->host, $this->user, $this->password, $this->DB);
   $resultset = array();
   $sql = ("SELECT * FROM customer_table WHERE customer_code ='$data'");
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



function GetStockin(){
   $conn = mysqli_connect($this->host, $this->user, $this->password, $this->DB);
   $resultset = array();
   $sql = ("SELECT * FROM stockin");
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



function GetStockinnew($data){
   $conn = mysqli_connect($this->host, $this->user, $this->password, $this->DB);
   $resultset = array();
   $sql = ("SELECT * FROM stockin WHERE product_name='$data' AND status='instock'");
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




function GetStockinnewQty($data){
   $conn = mysqli_connect($this->host, $this->user, $this->password, $this->DB);
   $resultset = array();
   $sql = ("SELECT * FROM stockin WHERE product_name='$data' AND quantity > 0 ");
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


function GetStockinnewPKC($data){
   $conn = mysqli_connect($this->host, $this->user, $this->password, $this->DB);
   $resultset = array();
   $sql = ("SELECT * FROM stockin WHERE product_name='$data' AND packet > 0 ");
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





function GetCeditS(){
   $conn = mysqli_connect($this->host, $this->user, $this->password, $this->DB);
   $resultset = array();
   $sql = ("SELECT *, DATE_FORMAT(created_at, '%H:%i:%s') AS time_created_at FROM sale_credit_table WHERE status ='Unapproved' GROUP BY invoice_id ORDER BY order_date DESC");
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


function GetCeditPriceAdjust(){
   $conn = mysqli_connect($this->host, $this->user, $this->password, $this->DB);
   $resultset = array();
   $sql = ("SELECT *, DATE_FORMAT(created_at, '%H:%i:%s') AS time_created_at FROM price_adjust_sale WHERE status ='Unapproved' || CEO ='Unapproved' || CEO ='Approved' AND status!='Approved'  GROUP BY invoice_id ORDER BY order_date DESC");
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



function GetAdjustSaleApprove($data){
   $conn = mysqli_connect($this->host, $this->user, $this->password, $this->DB);
   $resultset = array();
   $sql = ("SELECT * FROM price_adjust_sale WHERE invoice_id='$data'");
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


// function PriceEdit_Update($product_code,$price){
//   $conn = mysqli_connect($this->host, $this->user, $this->password, $this->DB);
//     $sql = "UPDATE price_adjust_sale SET price ='".$price."' WHERE id ='".$product_code."'";
//     $query = $conn->query($sql) or print(mysqli_error($conn));
//     if ($query == true) {
//       return true;  
//     }else{
//       return false;   
//     }
//     $conn->close();
// }

function PriceEdit_Update($product_code,$price,$new_total){
   $conn = mysqli_connect($this->host, $this->user, $this->password, $this->DB);
    $sql = "UPDATE price_adjust_sale SET price ='".$price."', total ='".$new_total."' WHERE id ='".$product_code."'";
    $query = $conn->query($sql) or print(mysqli_error($conn));
    if ($query == true) {
      return true;  
    }else{
      return false;   
    }
    $conn->close();
}


function GetCeditSallCus($data){
   $conn = mysqli_connect($this->host, $this->user, $this->password, $this->DB);
   $resultset = array();
   $sql = ("SELECT * FROM sale_credit_table WHERE invoice_id ='$data'");
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


function GetCeditSallCusapprove($data){
   $conn = mysqli_connect($this->host, $this->user, $this->password, $this->DB);
   $resultset = array();
   $sql = ("SELECT * FROM invoice_details WHERE invoice_id ='$data'");
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


 function Fetch_All_Waybillq($data){
  $resultset = array();
         $conn = mysqli_connect($this->host, $this->user, $this->password, $this->DB);
         $sql  = "SELECT * FROM waybill WHERE reference_no='$data'";
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




function GetCeditSallCus1($data){
   $conn = mysqli_connect($this->host, $this->user, $this->password, $this->DB);
   $resultset = array();
   $sql = ("SELECT * FROM invoice_details WHERE invoice_id ='$data'");
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


// function GetreceiveDue(){
//   $conn = mysqli_connect($this->host, $this->user, $this->password, $this->DB);
//   $resultset = array();
//   $sql = ("SELECT * FROM invoice_details WHERE due > 0 GROUP BY invoice_id ORDER BY order_date DESC");
//   $query = $conn->prepare($sql);
//   $query->execute();
//   $result = $query->get_result();
//      if($result->num_rows > 0){
//          while($rows=$result->fetch_assoc()){
//               $resultset[] = $rows;
//       }
//   }

//   $conn->close();
//   return $resultset;
// }


function GetreceiveDue($data){
   $conn = mysqli_connect($this->host, $this->user, $this->password, $this->DB);
   $resultset = array();
   $sql = ("SELECT *, DATE_FORMAT(created_at, '%H:%i:%s') AS time_created_at FROM invoice_details WHERE due > 0 AND customer='$data' GROUP BY invoice_id ORDER BY order_date DESC");
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


function GetreceiveDueParticularINvoice($table,$field,$data){
   $conn = mysqli_connect($this->host, $this->user, $this->password, $this->DB);
   $resultset = array();
   $sql = ("SELECT * FROM invoice_details WHERE $field = '$data' AND due >= 1 GROUP BY invoice_id ORDER BY order_date DESC");
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


// function Targeted_information($table,$field,$data){
//          $conn = mysqli_connect($this->host, $this->user, $this->password, $this->DB);
//          $sql = ("SELECT * FROM $table WHERE $field = '$data' ");
//          $query = $conn->query($sql) or print(mysqli_error($conn));
//          $row = mysqli_fetch_array($query);
//              if($query == true){
//                     return $row;
//                 }else{
//                     return false;
//                     }
//         $conn->close();
//     }




function GetreceiveBalance(){
   $conn = mysqli_connect($this->host, $this->user, $this->password, $this->DB);
   $resultset = array();
   $sql = ("SELECT * FROM customer_ledger_log WHERE balance > 0");
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


function Ceo_Adjust_Price_Update($invoice_no,$ceo,$ceo_comment){
   $conn = mysqli_connect($this->host, $this->user, $this->password, $this->DB);
    $sql = "UPDATE price_adjust_sale SET CEO='".$ceo."', Ceo_coment='".$ceo_comment."' WHERE invoice_id='".$invoice_no."'";
    $query = $conn->query($sql) or print(mysqli_error($conn));
    if ($query == true) {
      return true;  
    }else{
      return false;   
    }
    $conn->close();
}


function cancelCeo_Adjust_Price_Update($invoice_no,$ceo,$ceo_comment){
   $conn = mysqli_connect($this->host, $this->user, $this->password, $this->DB);
    $sql = "UPDATE price_adjust_sale SET CEO='".$ceo."', status='Cancelled',  Ceo_coment='".$ceo_comment."' WHERE invoice_id='".$invoice_no."'";
    $query = $conn->query($sql) or print(mysqli_error($conn));
    if ($query == true) {
      return true;  
    }else{
      return false;   
    }
    $conn->close();
}


function Ceo_Update($invoice_no,$ceo,$ceo_comment){
   $conn = mysqli_connect($this->host, $this->user, $this->password, $this->DB);
    $sql = "UPDATE sale_credit_table SET CEO ='".$ceo."', Ceo_coment ='".$ceo_comment."' WHERE invoice_id ='".$invoice_no."'";
    $query = $conn->query($sql) or print(mysqli_error($conn));
    if ($query == true) {
      return true;  
    }else{
      return false;   
    }
    $conn->close();
}



function SaleApp_Update($invoice_no,$app){
   $conn = mysqli_connect($this->host, $this->user, $this->password, $this->DB);
    $sql = "UPDATE invoice_details SET approve_sale ='".$app."' WHERE invoice_id ='".$invoice_no."'";
    $query = $conn->query($sql) or print(mysqli_error($conn));
    if ($query == true) {
      return true;  
    }else{
      return false;   
    }
    $conn->close();
}



function SalecONFIRM_Update($invoice_no,$CONF){
   $conn = mysqli_connect($this->host, $this->user, $this->password, $this->DB);
    $sql = "UPDATE invoice_details SET sales_confirm ='".$CONF."' WHERE invoice_id ='".$invoice_no."'";
    $query = $conn->query($sql) or print(mysqli_error($conn));
    if ($query == true) {
      return true;  
    }else{
      return false;   
    }
    $conn->close();
}

function Ceo_Update1($invoice_no,$ceo,$ceo1,$ceo2,$ceo3,$ceo_comment){
   $conn = mysqli_connect($this->host, $this->user, $this->password, $this->DB);
    $sql = "UPDATE sale_credit_table SET CEO ='".$ceo."', status ='".$ceo1."', GMD ='".$ceo2."', Accountant ='".$ceo3."', Ceo_coment ='".$ceo_comment."' WHERE invoice_id ='".$invoice_no."'";
    $query = $conn->query($sql) or print(mysqli_error($conn));
    if ($query == true) {
      return true;  
    }else{
      return false;   
    }
    $conn->close();
}



function Gmd_Update($invoice_no,$gdm){
   $conn = mysqli_connect($this->host, $this->user, $this->password, $this->DB);
    $sql = "UPDATE sale_credit_table SET GMD ='".$gdm."' WHERE invoice_id ='".$invoice_no."'";
    $query = $conn->query($sql) or print(mysqli_error($conn));
    if ($query == true) {
      return true;  
    }else{
      return false;   
    }
    $conn->close();
}



function acctt_Update($invoice_no,$acct){
   $conn = mysqli_connect($this->host, $this->user, $this->password, $this->DB);
    $sql = "UPDATE sale_credit_table SET Accountant ='".$acct."' WHERE invoice_id ='".$invoice_no."'";
    $query = $conn->query($sql) or print(mysqli_error($conn));
    if ($query == true) {
      return true;  
    }else{
      return false;   
    }
    $conn->close();
}




function StockUpdate($new_quantity,$item_code){
   $conn = mysqli_connect($this->host, $this->user, $this->password, $this->DB);
    $sql = "UPDATE stockin SET quantity = '".$new_quantity."' WHERE item_code ='".$item_code."'";
    $query = $conn->query($sql) or print(mysqli_error($conn));
    if ($query == true) {
      return true;  
    }else{
      return false;   
    }
    $conn->close();
}


function ManagePrice($new_selling_price,$item_code){
   $conn = mysqli_connect($this->host, $this->user, $this->password, $this->DB);
    $sql = "UPDATE stockin SET selling_price ='".$new_selling_price."' WHERE item_code ='".$item_code."'";
    $query = $conn->query($sql) or print(mysqli_error($conn));
    if ($query == true) {
      return true;  
    }else{
      return false;   
    }
    $conn->close();
}


function deliveredInvoice($delivery,$invoice_id){
   $conn = mysqli_connect($this->host, $this->user, $this->password, $this->DB);
    $sql = "UPDATE invoice_details SET delivery ='".$delivery."' WHERE invoice_id ='".$invoice_id."'";
    $query = $conn->query($sql) or print(mysqli_error($conn));
    if ($query == true) {
      return true;  
    }else{
      return false;   
    }
    $conn->close();
}


function deliveredstock($delivery,$invoice_id){
   $conn = mysqli_connect($this->host, $this->user, $this->password, $this->DB);
    $sql = "UPDATE invoice_details SET delivery ='".$delivery."' WHERE invoice_id ='".$invoice_id."'";
    $query = $conn->query($sql) or print(mysqli_error($conn));
    if ($query == true) {
      return true;  
    }else{
      return false;   
    }
    $conn->close();
}



function deliveredWaybill($delivery,$invoice_id){
   $conn = mysqli_connect($this->host, $this->user, $this->password, $this->DB);
    $sql = "UPDATE waybill SET status='".$delivery."' WHERE reference_no='".$invoice_id."'";
    $query = $conn->query($sql) or print(mysqli_error($conn));
    if ($query == true) {
      return true;  
    }else{
      return false;   
    }
    $conn->close();
}



function Fetch_All_Quotes(){
         $resultset = array();
         $conn = mysqli_connect($this->host, $this->user, $this->password, $this->DB);
         $sql  = "SELECT *, DATE_FORMAT(created_at, '%H:%i:%s') AS time_created_at FROM invoice_details WHERE delivery='not_delivered' GROUP BY invoice_id ORDER BY `order_date`  DESC";
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



function Fetch_All_Quotes1(){
         $resultset = array();
         $conn = mysqli_connect($this->host, $this->user, $this->password, $this->DB);
         $sql  = "SELECT *, DATE_FORMAT(created_at, '%H:%i:%s') AS time_created_at FROM invoice_details WHERE delivery='delivered' GROUP BY invoice_id ORDER BY `order_date`  DESC";
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





// function Fetch_InvoiceReturn(){
//          $resultset = array();
//          $conn = mysqli_connect($this->host, $this->user, $this->password, $this->DB);
//          $sql  = "SELECT * FROM invoice_details WHERE delivery='returned' ORDER BY `updated_at`  DESC";
//          $query = $conn->prepare($sql);
//          $query->execute();
//          $result = $query->get_result();
//          if($result->num_rows > 0){
//              while ($rows = $result->fetch_assoc()){
//                     $resultset[] = $rows;
//                    }
//                 $conn->close();
//          }
//          return $resultset;
// }


function Fetch_InvoiceReturn() {
    $resultset = array();
    $conn = mysqli_connect($this->host, $this->user, $this->password, $this->DB);
    if (!$conn) {
        die("Connection failed: " . mysqli_connect_error());
    }

    $sql = "SELECT * FROM invoice_details WHERE delivery='returned' ORDER BY `updated_at` DESC";
    $query = $conn->prepare($sql);
    if (!$query) {
        die("Prepare failed: " . $conn->error);
    }

    if (!$query->execute()) {
        die("Execute failed: " . $query->error);
    }

    $result = $query->get_result();
    if ($result->num_rows > 0) {
        while ($rows = $result->fetch_assoc()) {
            $resultset[] = $rows;
        }
    }

    $query->close();
    $conn->close();
    return $resultset;
}



function Fetch_All_Customer_Invoice($customer){
         $resultset = array();
         $conn = mysqli_connect($this->host, $this->user, $this->password, $this->DB);
         $sql  = "SELECT * FROM invoice_details WHERE customer='$customer' ORDER BY `order_date`  DESC";
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



function Fetch_All_Quotes_printed(){
         $resultset = array();
         $conn = mysqli_connect($this->host, $this->user, $this->password, $this->DB);
         $sql  = "SELECT *, DATE_FORMAT(created_at, '%H:%i:%s') AS time_created_at FROM invoice_details WHERE delivery='delivered' GROUP BY invoice_id ORDER BY `order_date`  DESC";
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



function Fetch_All_Waybill(){
         $resultset = array();
         $conn = mysqli_connect($this->host, $this->user, $this->password, $this->DB);
         $sql  = "SELECT * FROM waybill WHERE status='not_delivered' GROUP BY reference_no ORDER BY `datex`  DESC";
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


function Fetch_All_WaybillPrinted(){
         $resultset = array();
         $conn = mysqli_connect($this->host, $this->user, $this->password, $this->DB);
         $sql  = "SELECT * FROM waybill WHERE status='delivered' GROUP BY reference_no ORDER BY `datex`  DESC";
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





function insertUser($user,$password,$username,$role,$datex){
          $conn = mysqli_connect($this->host, $this->user, $this->password, $this->DB);
          $user  = mysqli_escape_string($conn, htmlentities(trim($user)));
          $password  = mysqli_escape_string($conn, htmlentities(trim($password)));
          $username  = mysqli_escape_string($conn, htmlentities(trim($username)));
          $role  = mysqli_escape_string($conn, htmlentities(trim($role)));
          $datex  = mysqli_escape_string($conn, htmlentities(trim($datex)));
          $sql = 'INSERT INTO admin(name,password,username,role,reg_date) VALUES (?,?,?,?,?)';
          $query = $conn->prepare($sql);
          $query->bind_param('sssss',$user,$password,$username,$role,$datex);
          if($query->execute()){
            return true;
          }else{
            return false;
          }
          $conn->close();
 }















































































































/////////////////////////////////////////////////////////////////old /////////////////////////////////////////////////////////



//   function insertProduct($name,$item_id,$description,$regular_price,$category,$size,$image,$distributor_price){
//             $conn =  mysqli_connect($this->host, $this->user, $this->password, $this->DB);
//             $name          =  mysqli_escape_string($conn, htmlentities(trim($name)));
//             $item_id       =  mysqli_escape_string($conn, htmlentities(trim($item_id)));
//             $description   =  mysqli_escape_string($conn, htmlentities(trim($description)));
//             $regular_price =  mysqli_escape_string($conn, htmlentities(trim($regular_price)));
//             $category      =  mysqli_escape_string($conn, htmlentities(trim($category)));
//             $size      =  mysqli_escape_string($conn, htmlentities(trim($size)));
//             $image         =  mysqli_escape_string($conn, htmlentities(trim($image)));
//             $distributor_price =  mysqli_escape_string($conn, htmlentities(trim($distributor_price)));
//             $sql = 'INSERT INTO products(name,item_id,description,regular_price,category,size,image,distributor_price) VALUES (?,?,?,?,?,?,?,?)';
//             $query         = $conn->prepare($sql);
//             $query->bind_param('ssssssss',$name,$item_id,$description,$regular_price,$category,$size,$image,$distributor_price);
//                  if ($query->execute()){
//                               return true;
//                       }else{
//                             return false;
//                            }
//                             $conn->close(); 
// } 



  
function UpdateProduct($name,$item_id,$description,$regular_price,$category,$distributor_price){
    $conn =  mysqli_connect($this->host, $this->user, $this->password, $this->DB);
    $sql = "UPDATE products SET description = '".$description."', regular_price = '".$regular_price."', category = '".$category."',distributor_price = '".$distributor_price."' WHERE item_id  = '".$item_id."'";
    $query = $conn->query($sql) or print(mysqli_error($conn));
    if ($query == true) {
      return true;  
    }else{
       return false;   
    }
    $conn->close(); 
}




function UpdateDistributor($account_id,$email,$phone,$address){
    $conn =  mysqli_connect($this->host, $this->user, $this->password, $this->DB);
    $sql = "UPDATE customer_table SET email ='".$email."', phone ='".$phone."', address ='".$address."' WHERE account_id  ='".$account_id."'";
    $query = $conn->query($sql) or print(mysqli_error($conn));
    if ($query == true) {
      return true;  
    }else{
       return false;   
    }
    $conn->close(); 
}




function UpdateBenefit($description,$phone,$address,$status,$account_id){
    $conn =  mysqli_connect($this->host, $this->user, $this->password, $this->DB);
    $sql = "UPDATE merits_table SET description ='".$description."', phone ='".$phone."', address ='".$address."', status ='".$status."' WHERE account_id ='".$account_id."'";
    $query = $conn->query($sql) or print(mysqli_error($conn));
    if ($query == true) {
      return true;  
    }else{
       return false;   
    }
    $conn->close(); 
}


function UpdateStaff($staff_id,$resident_address,$phone,$email,$home_town,$position,$department,$gender,$marital_status,$basic_salary,$grantor_name,$grantor_address,$grantor_phone){
    $conn =  mysqli_connect($this->host, $this->user, $this->password, $this->DB);
    $sql = "UPDATE staff SET resident_address ='".$resident_address."', phone ='".$phone."', email ='".$email."', home_town ='".$home_town."', position ='".$position."', department ='".$department."', gender ='".$gender."', marital_status ='".$marital_status."', basic_salary ='".$basic_salary."', grantor_name ='".$grantor_name."',  grantor_address  ='".$grantor_address."', grantor_phone ='".$grantor_phone."' WHERE staff_id  ='".$staff_id."'";
    $query = $conn->query($sql) or print(mysqli_error($conn));
    if ($query == true) {
      return true;  
    }else{
       return false;   
    }
    $conn->close(); 
}






function insertCeoDrawings($datex,$ceo_draw_id,$product_name,$product_id,$description,$quantity,$amount_value,$satff){
  $conn = mysqli_connect($this->host, $this->user, $this->password, $this->DB);
  $datex = mysqli_escape_string($conn, htmlentities(trim($datex)));
  $ceo_draw_id = mysqli_escape_string($conn, htmlentities(trim($ceo_draw_id)));
  $product_name = mysqli_escape_string($conn, htmlentities(trim($product_name)));
  $product_id    = mysqli_escape_string($conn, htmlentities(trim($product_id)));
  $description    = mysqli_escape_string($conn, htmlentities(trim($description)));
  $quantity     = mysqli_escape_string($conn, htmlentities(trim($quantity)));
  $amount_value     = mysqli_escape_string($conn, htmlentities(trim($amount_value)));
  $satff     = mysqli_escape_string($conn, htmlentities(trim($satff)));
  $sql = 'INSERT INTO ceo_drawings(drawings_date,drawings_id,product_name,product_id,description,quantity,value_amount,staff) VALUES (?,?,?,?,?,?,?,?)';
  $query = $conn->prepare($sql);
  $query->bind_param('ssssssss',$datex,$ceo_draw_id,$product_name,$product_id,$description,$quantity,$amount_value,$satff);
       if ($query->execute()){
                    return true;
            }else{
                  return false;
                 }
                  $conn->close(); 
}



function InsertDrawLog($ceo_draw_id,$draw_type,$amount_value,$description,$datex){
  $conn = mysqli_connect($this->host, $this->user, $this->password, $this->DB);
  $draw_type = mysqli_escape_string($conn, htmlentities(trim($draw_type)));
  $amount_value = mysqli_escape_string($conn, htmlentities(trim($amount_value)));
  $description = mysqli_escape_string($conn, htmlentities(trim($description)));
  $ceo_draw_id = mysqli_escape_string($conn, htmlentities(trim($ceo_draw_id)));
  $datex = mysqli_escape_string($conn, htmlentities(trim($datex)));
  $sql = 'INSERT INTO ceo_drawing_log(transact_id,draw_type,amount,description,draw_date) VALUES (?,?,?,?,?)';
  $query = $conn->prepare($sql);
  $query->bind_param('sssss',$ceo_draw_id,$draw_type,$amount_value,$description,$datex);
       if ($query->execute()){
                    return true;
            }else{
                  return false;
                 }
                  $conn->close(); 
}


function InsertDrawLogCash($AccountId,$ceo_draw_id,$draw_type,$amount_value,$description,$datex){
  $conn = mysqli_connect($this->host, $this->user, $this->password, $this->DB);
  $draw_type = mysqli_escape_string($conn, htmlentities(trim($draw_type)));
  $amount_value = mysqli_escape_string($conn, htmlentities(trim($amount_value)));
  $description = mysqli_escape_string($conn, htmlentities(trim($description)));
  $ceo_draw_id = mysqli_escape_string($conn, htmlentities(trim($ceo_draw_id)));
  $AccountId = mysqli_escape_string($conn, htmlentities(trim($AccountId)));
   $datex = mysqli_escape_string($conn, htmlentities(trim($datex)));
  $sql = 'INSERT INTO ceo_drawing_log(account_id,transact_id,draw_type,amount,description,draw_date) VALUES (?,?,?,?,?,?)';
  $query = $conn->prepare($sql);
  $query->bind_param('ssssss',$AccountId,$ceo_draw_id,$draw_type,$amount_value,$description,$datex);
       if ($query->execute()){
                    return true;
            }else{
                  return false;
                 }
                  $conn->close(); 
}



    

 function insertRequest($datex,$requestName,$request_no,$vendor_contractor,$description,$amount,$staff,$record_by,$status,$type,$staff_name){
      $conn = mysqli_connect($this->host, $this->user, $this->password, $this->DB);
      $datex = mysqli_escape_string($conn, htmlentities(trim($datex)));
      $requestName = mysqli_escape_string($conn, htmlentities(trim($requestName)));
      $request_no    = mysqli_escape_string($conn, htmlentities(trim($request_no)));
      $vendor_contractor    = mysqli_escape_string($conn, htmlentities(trim($vendor_contractor)));
      $description = mysqli_escape_string($conn, htmlentities(trim($description)));
      $amount     = mysqli_escape_string($conn, htmlentities(trim($amount)));
      $staff = mysqli_escape_string($conn, htmlentities(trim($staff)));
      $record_by = mysqli_escape_string($conn, htmlentities(trim($record_by)));
      $status = mysqli_escape_string($conn, htmlentities(trim($status)));
      $type = mysqli_escape_string($conn, htmlentities(trim($type)));
      $staff_name = mysqli_escape_string($conn, htmlentities(trim($staff_name)));
      $sql = 'INSERT INTO request_table(request_date,request_name,request_no,vendor_name,description,amount,request_by,approved_by,status,type,staff_name) VALUES (?,?,?,?,?,?,?,?,?,?,?)';
      $query         = $conn->prepare($sql);
      $query->bind_param('sssssssssss',$datex,$requestName,$request_no,$vendor_contractor,$description,$amount,$staff,$record_by,$status,$type,$staff_name);
           if ($query->execute()){
                        return true;
                }else{
                      return false;
                     }
                      $conn->close(); 
}    


 


function insertCustomer($name,$phone,$email,$address,$customer_code,$status,$invoice,$company_name,$category,$refund_invoice,$user_login){
      $conn = mysqli_connect($this->host, $this->user, $this->password, $this->DB);
      $name = mysqli_escape_string($conn, htmlentities(trim($name)));
      $phone = mysqli_escape_string($conn, htmlentities(trim($phone)));
      $email  = mysqli_escape_string($conn, htmlentities(trim($email)));
      $invoice = mysqli_escape_string($conn, htmlentities(trim($invoice)));
      $company_name = mysqli_escape_string($conn, htmlentities(trim($company_name)));
      $refund_invoice = mysqli_escape_string($conn, htmlentities(trim($refund_invoice)));
      $customer_code = mysqli_escape_string($conn, htmlentities(trim($customer_code)));
      $user_login = mysqli_escape_string($conn, htmlentities(trim($user_login)));
      $status = mysqli_escape_string($conn, htmlentities(trim($status)));
      $address = mysqli_escape_string($conn, htmlentities(trim($address)));
      $category = mysqli_escape_string($conn, htmlentities(trim($category)));
      $sql = 'INSERT INTO customer_table(name,phone,email,address,customer_code,status,invoice,company_name,category,refund_invoice,user_login) VALUES (?,?,?,?,?,?,?,?,?,?,?)';
      $query         = $conn->prepare($sql);
      $query->bind_param('sssssssssss',$name,$phone,$email,$address,$customer_code,$status,$invoice,$company_name,$category,$refund_invoice,$user_login);
           if ($query->execute()){
                        return true;
                }else{
                      return false;
                     }
                      $conn->close(); 
}






function cusLedger($customer_code,$balance){
      $conn = mysqli_connect($this->host, $this->user, $this->password, $this->DB);
      $customer_code = mysqli_escape_string($conn, htmlentities(trim($customer_code)));
      $balance = mysqli_escape_string($conn, htmlentities(trim($balance)));
      $sql = 'INSERT INTO customer_ledger(account_id,balance) VALUES (?,?)';
      $query         = $conn->prepare($sql);
      $query->bind_param('ss',$customer_code,$balance);
           if ($query->execute()){
                        return true;
                }else{
                      return false;
                     }
                      $conn->close(); 
}






 function cusLedgerUpdate($datex,$customer_account_id,$Details,$invoice,$invoice_id,$amount_paid,$currentBalance){
      $conn = mysqli_connect($this->host, $this->user, $this->password, $this->DB);
      $datex = mysqli_escape_string($conn, htmlentities(trim($datex)));
      $customer_account_id = mysqli_escape_string($conn, htmlentities(trim($customer_account_id)));
      $Details = mysqli_escape_string($conn, htmlentities(trim($Details)));
      $amount_paid = mysqli_escape_string($conn, htmlentities(trim($amount_paid)));
      $invoice_id = mysqli_escape_string($conn, htmlentities(trim($invoice_id)));
      $invoice = mysqli_escape_string($conn, htmlentities(trim($invoice)));
      $sql = 'INSERT INTO customer_ledger(datex,account_id,details,invoice_no,receipt_no,debit,balance) VALUES (?,?,?,?,?,?,?)';
      $query         = $conn->prepare($sql);
      $query->bind_param('sssssss',$datex,$customer_account_id,$Details,$invoice,$invoice_id,$amount_paid,$currentBalance);
           if ($query->execute()){
                        return true;
                }else{
                      return false;
                     }
                      $conn->close(); 
}




function insertStaff($Staff_id,$first_name,$last_names,$resident_address,$phone_no,$Email,$date_of_birth,$home_town,$institution_position,$department,$gender,$marital_status,$passport,$status,$basic_salary,$category,$supervisor,$grantor_name,$grantor_address,$grantor_phone,$grantor_relationship,$datex){
      $conn = mysqli_connect($this->host, $this->user, $this->password, $this->DB);
      $Staff_id = mysqli_escape_string($conn, htmlentities(trim($Staff_id)));
      $first_name = mysqli_escape_string($conn, htmlentities(trim($first_name)));
      $last_names  = mysqli_escape_string($conn, htmlentities(trim($last_names)));
      $resident_address = mysqli_escape_string($conn, htmlentities(trim($resident_address)));
      $phone_no = mysqli_escape_string($conn, htmlentities(trim($phone_no)));
      $Email = mysqli_escape_string($conn, htmlentities(trim($Email)));
      $date_of_birth = mysqli_escape_string($conn, htmlentities(trim($date_of_birth)));
      $home_town = mysqli_escape_string($conn, htmlentities(trim($home_town)));
      $institution_position = mysqli_escape_string($conn, htmlentities(trim($institution_position)));
      $department = mysqli_escape_string($conn, htmlentities(trim($department)));
      $gender = mysqli_escape_string($conn, htmlentities(trim($gender)));
      $marital_status = mysqli_escape_string($conn, htmlentities(trim($marital_status)));
      $passport = mysqli_escape_string($conn, htmlentities(trim($passport)));
      $status = mysqli_escape_string($conn, htmlentities(trim($status)));
      $basic_salary = mysqli_escape_string($conn, htmlentities(trim($basic_salary)));
      $category = mysqli_escape_string($conn, htmlentities(trim($category)));
      $supervisor = mysqli_escape_string($conn, htmlentities(trim($supervisor)));
      $grantor_name = mysqli_escape_string($conn, htmlentities(trim($grantor_name)));
      $grantor_address = mysqli_escape_string($conn, htmlentities(trim($grantor_address)));
      $grantor_phone = mysqli_escape_string($conn, htmlentities(trim($grantor_phone)));
      $grantor_relationship = mysqli_escape_string($conn, htmlentities(trim($grantor_relationship)));
      $datex = mysqli_escape_string($conn, htmlentities(trim($datex)));

      $sql = 'INSERT INTO staff(staff_id,firstname,lastname,resident_address,phone,email,date_of_birth,home_town,position,department,gender,marital_status,passPort,status,basic_salary,category,supervisor,grantor_name,grantor_address,grantor_phone,relationship,appointment_date) VALUES (?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?)';
      $query         = $conn->prepare($sql);
      $query->bind_param('ssssssssssssssssssssss',$Staff_id,$first_name,$last_names,$resident_address,$phone_no,$Email,$date_of_birth,$home_town,$institution_position,$department,$gender,$marital_status,$passport,$status,$basic_salary,$category,$supervisor,$grantor_name,$grantor_address,$grantor_phone,$grantor_relationship,$datex);
           if ($query->execute()){
                        return true;
                }else{
                      return false;
                     }
    $conn->close(); 
}




function insertAdminStaff($Staff_id,$fullname,$password,$username,$datex){
$conn = mysqli_connect($this->host, $this->user, $this->password, $this->DB);
$Staff_id = mysqli_escape_string($conn, htmlentities(trim($Staff_id)));
$fullname = mysqli_escape_string($conn, htmlentities(trim($fullname)));
$datex = mysqli_escape_string($conn, htmlentities(trim($datex)));
$username = mysqli_escape_string($conn, htmlentities(trim($username)));
$password = mysqli_escape_string($conn, htmlentities(trim($password)));
$sql = 'INSERT INTO admin(staff_id,name,password,username,reg_date) VALUES (?,?,?,?,?)';
$query = $conn->prepare($sql);
$query->bind_param('sssss',$Staff_id,$fullname,$password,$username,$datex);
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





function insertMaterialCategory($material_cate,$material_type,$supplier,$quantity,$date_created){
          $conn = mysqli_connect($this->host, $this->user, $this->password, $this->DB);
          $material_cate  = mysqli_escape_string($conn, htmlentities(trim($material_cate)));
          $material_type  = mysqli_escape_string($conn, htmlentities(trim($material_type)));
          $supplier  = mysqli_escape_string($conn, htmlentities(trim($supplier)));
          $quantity  = mysqli_escape_string($conn, htmlentities(trim($quantity)));
          $date_created = mysqli_escape_string($conn, htmlentities(trim($date_created)));
          $sql = 'INSERT INTO material_category(material,material_type,supplier,quantity,created_date) VALUES (?,?,?,?,?)';
          $query = $conn->prepare($sql);
          $query->bind_param('sssss',$material_cate,$material_type,$supplier,$quantity,$date_created);
          if($query->execute()){
            return true;
          }else{
            return false;
          }
          $conn->close();
}


 
function insertRawMate($purchase_date,$purchase_id,$material_name,$material_cate,$quantity,$stock,$total,$amount_paid,$amount_due){
      $conn = mysqli_connect($this->host, $this->user, $this->password, $this->DB);
      $purchase_date  = mysqli_escape_string($conn, htmlentities(trim($purchase_date)));
      $purchase_id  = mysqli_escape_string($conn, htmlentities(trim($purchase_id)));
      $material_name  = mysqli_escape_string($conn, htmlentities(trim($material_name)));
      $material_cate  = mysqli_escape_string($conn, htmlentities(trim($material_cate)));
      $quantity  = mysqli_escape_string($conn, htmlentities(trim($quantity)));
      $stock  = mysqli_escape_string($conn, htmlentities(trim($stock)));
      $total  = mysqli_escape_string($conn, htmlentities(trim($total)));
      $amount_paid  = mysqli_escape_string($conn, htmlentities(trim($amount_paid)));
      $amount_due  = mysqli_escape_string($conn, htmlentities(trim($amount_due)));
      $sql = 'INSERT INTO purchase_material_table(purchase_date,purchase_id,material_name,category,quantity,stock,total,amount_paid,amount_due) VALUES (?,?,?,?,?,?,?,?,?)';
      $query = $conn->prepare($sql);
      $query->bind_param('sssssssss',$purchase_date,$purchase_id,$material_name,$material_cate,$quantity,$stock,$total,$amount_paid,$amount_due);
      if($query->execute()){
        return true;
      }else{
        return false;
      }
      $conn->close();
}





function Update_Password($pass,$UserEmail) {
    $conn = mysqli_connect($this->host, $this->user, $this->password, $this->DB);
    $sql = "UPDATE Admin SET password='".$pass."' WHERE username='".$UserEmail."'";
    $query = $conn->query($sql) or print(mysqli_error($conn));
    if ($query == true) {
      return true;  
    }else{
      return false;   
    }
    $conn->close();
}

function Update_Password1($pass,$UserEmail) {
    $conn = mysqli_connect($this->host, $this->user, $this->password, $this->DB);
    $sql = "UPDATE staff SET password='".$pass."' WHERE username='".$UserEmail."'";
    $query = $conn->query($sql) or print(mysqli_error($conn));
    if ($query == true) {
      return true;  
    }else{
      return false;   
    }
    $conn->close();
}






function insertSupplier($supplier_id,$contact_name,$phone,$email,$company_address,$company_name){
          $conn = mysqli_connect($this->host, $this->user, $this->password, $this->DB);
          $contact_name  = mysqli_escape_string($conn, htmlentities(trim($contact_name)));
          $company_address  = mysqli_escape_string($conn, htmlentities(trim($company_address)));
          $phone  = mysqli_escape_string($conn, htmlentities(trim($phone)));
          $email  = mysqli_escape_string($conn, htmlentities(trim($email)));
          $company_name  = mysqli_escape_string($conn, htmlentities(trim($company_name)));
          $sql = 'INSERT INTO supplier_table(supplier_id,supplier_name,phone,email,company_address,company_name) VALUES (?,?,?,?,?,?)';
          $query = $conn->prepare($sql);
          $query->bind_param('ssssss',$supplier_id,$contact_name,$phone,$email,$company_address,$company_name);
          if($query->execute()){
            return true;
          }else{
            return false;
          }
          $conn->close();
 }


 function Vendor_Delete($data){
   $conn = mysqli_connect($this->host, $this->user, $this->password, $this->DB);
   $sql  = "DELETE FROM supplier_table WHERE id='$data'";
   $query = $conn->query($sql) or print(mysqli_error($conn));
        if($query == true){
         return true;
        }else{
           return false;
        } 
        $conn->close();  
}



 function User_Delete($data){
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


 function Staff_Delete($data){
   $conn = mysqli_connect($this->host, $this->user, $this->password, $this->DB);
   $sql  = "DELETE FROM staff WHERE id='$data'";
   $query = $conn->query($sql) or print(mysqli_error($conn));
        if($query == true){
         return true;
        }else{
           return false;
        } 
        $conn->close();  
}



//  function Customer_Delete($data){
//    $conn = mysqli_connect($this->host, $this->user, $this->password, $this->DB);
//    $sql  = "DELETE FROM customer_table WHERE id='$data'";
//    $query = $conn->query($sql) or print(mysqli_error($conn));
//         if($query == true){
//          return true;
//         }else{
//            return false;
//         } 
//         $conn->close();  
// }




function staffUpdate($staff_id,$firstname,$lastname,$resident_address,$phone,$email,$date_of_birth,$home_town,$position,$department,$gender,$marital_status,$status,$basic_salary,$category,$supervisor,$updated_at,$grantor_name,$grantor_address,$grantor_phone,$relationship,$appointment_date){
   $conn = mysqli_connect($this->host, $this->user, $this->password, $this->DB);
    $sql = "UPDATE staff SET firstname = '".$firstname."', lastname ='".$lastname."', resident_address ='".$resident_address."', phone ='".$phone."', email ='".$email."', date_of_birth ='".$date_of_birth."', home_town ='".$home_town."', position ='".$position."', department ='".$department."', gender ='".$gender."', marital_status ='".$marital_status."', status ='".$status."', basic_salary ='".$basic_salary."', category ='".$category."', supervisor ='".$supervisor."', updated_at ='".$updated_at."', grantor_name ='".$grantor_name."', grantor_address ='".$grantor_address."', grantor_phone ='".$grantor_phone."', relationship ='".$relationship."', appointment_date ='".$appointment_date."' WHERE staff_id ='".$staff_id."'";
    $query = $conn->query($sql) or print(mysqli_error($conn));
    if ($query == true) {
      return true;  
    }else{
      return false;   
    }
    $conn->close();
}









function VendorUpdate($contact_name,$phone,$email,$company_address,$company_name,$supplier_id){
   $conn = mysqli_connect($this->host, $this->user, $this->password, $this->DB);
    $sql = "UPDATE supplier_table SET supplier_name = '".$contact_name."', phone ='".$phone."', email ='".$email."', company_address ='".$company_address."', company_name ='".$company_name."' WHERE supplier_id ='".$supplier_id."'";
    $query = $conn->query($sql) or print(mysqli_error($conn));
    if ($query == true) {
      return true;  
    }else{
      return false;   
    }
    $conn->close();
}



function CustomerUpdate($customer_name,$phone,$email,$address,$company_name,$category,$customer_code){
   $conn = mysqli_connect($this->host, $this->user, $this->password, $this->DB);
    $sql = "UPDATE customer_table SET name = '".$customer_name."', phone ='".$phone."', email ='".$email."', address ='".$address."', company_name ='".$company_name."', category ='".$category."' WHERE customer_code ='".$customer_code."'";
    $query = $conn->query($sql) or print(mysqli_error($conn));
    if ($query == true) {
      return true;  
    }else{
      return false;   
    }
    $conn->close();
}















function insertRecord_Workers($staff_name,$staff_id,$total_each,$newTotalAmountPereach,$section,$monthYEAR,$record_date){
          $conn = mysqli_connect($this->host, $this->user, $this->password, $this->DB);
          $staff_name  = mysqli_escape_string($conn, htmlentities(trim($staff_name)));
          $staff_id  = mysqli_escape_string($conn, htmlentities(trim($staff_id)));
          $total_each  = mysqli_escape_string($conn, htmlentities(trim($total_each)));
          $newTotalAmountPereach  = mysqli_escape_string($conn, htmlentities(trim($newTotalAmountPereach)));
          $section  = mysqli_escape_string($conn, htmlentities(trim($section)));
          $monthYEAR  = mysqli_escape_string($conn, htmlentities(trim($monthYEAR)));
          $record_date  = mysqli_escape_string($conn, htmlentities(trim($record_date)));
          $sql = 'INSERT INTO workers_baggers(names,staff_id,total_bags_pereach,amount_each,section,month_year,workday) VALUES (?,?,?,?,?,?,?)';
          $query = $conn->prepare($sql);
          $query->bind_param('sssssss',$staff_name,$staff_id,$total_each,$newTotalAmountPereach,$section,$monthYEAR,$record_date);
          if($query->execute()){
            return true;
          }else{
            return false;
          }
          $conn->close();
 }


 function insertRecord_WorkerLoader($staff_name,$staff_id,$total_bag,$no_workers,$total_each,$newTotalAmount,$newTotalAmountPereach,$section,$monthYEAR,$record_date){
    $conn = mysqli_connect($this->host, $this->user, $this->password, $this->DB);
    $staff_name  = mysqli_escape_string($conn, htmlentities(trim($staff_name)));
    $staff_id  = mysqli_escape_string($conn, htmlentities(trim($staff_id)));
    $total_bag  = mysqli_escape_string($conn, htmlentities(trim($total_bag)));
    $no_workers  = mysqli_escape_string($conn, htmlentities(trim($no_workers)));
    $total_each  = mysqli_escape_string($conn, htmlentities(trim($total_each)));
    $total_amount  = mysqli_escape_string($conn, htmlentities(trim($newTotalAmount)));
    $newTotalAmountPereach  = mysqli_escape_string($conn, htmlentities(trim($newTotalAmountPereach)));
    $section  = mysqli_escape_string($conn, htmlentities(trim($section)));
    $monthYEAR  = mysqli_escape_string($conn, htmlentities(trim($monthYEAR)));
    $record_date  = mysqli_escape_string($conn, htmlentities(trim($record_date)));
    $sql = 'INSERT INTO workers_loaders(names,staff_id,total_no_bags,total_no_workers,total_bags_pereach,total_amount,amount_each,section,month_year,workday) VALUES (?,?,?,?,?,?,?,?,?,?)';
          $query = $conn->prepare($sql);
          $query->bind_param('ssssssssss',$staff_name,$staff_id,$total_bag,$no_workers,$total_each,$newTotalAmount,$newTotalAmountPereach,$section,$monthYEAR,$record_date);
          if($query->execute()){
            return true;
          }else{
            return false;
          }
          $conn->close();
 }


  function insertSalaryStaff($date_month,$employeeName1,$basic_salary,$allowance,$other,$gross_pay,$sanction,$other_dues,$type,$total_dues,$net_pay,$employeeName){
          $conn = mysqli_connect($this->host, $this->user, $this->password, $this->DB);
          $date_month  = mysqli_escape_string($conn, htmlentities(trim($date_month)));
          $employeeName1  = mysqli_escape_string($conn, htmlentities(trim($employeeName1)));
          $basic_salary  = mysqli_escape_string($conn, htmlentities(trim($basic_salary)));
          $allowance  = mysqli_escape_string($conn, htmlentities(trim($allowance)));
          $other  = mysqli_escape_string($conn, htmlentities(trim($other)));
          $gross_pay  = mysqli_escape_string($conn, htmlentities(trim($gross_pay)));
          $sanction  = mysqli_escape_string($conn, htmlentities(trim($sanction)));
          $other_dues  = mysqli_escape_string($conn, htmlentities(trim($other_dues)));
          $type  = mysqli_escape_string($conn, htmlentities(trim($type)));
          $total_dues  = mysqli_escape_string($conn, htmlentities(trim($total_dues)));
          $net_pay  = mysqli_escape_string($conn, htmlentities(trim($net_pay)));
          $employeeName  = mysqli_escape_string($conn, htmlentities(trim($employeeName)));
          $sql = 'INSERT INTO payroll(month_year,employee_name,bsaic_salary,allowance,others,gross_pay,sanction,other_deduction,type,total_due,net_pay,staff_id) VALUES (?,?,?,?,?,?,?,?,?,?,?,?)';
          $query = $conn->prepare($sql);
          $query->bind_param('ssssssssssss',$date_month,$employeeName1,$basic_salary,$allowance,$other,$gross_pay,$sanction,$other_dues,$type,$total_dues,$net_pay,$employeeName);
          if($query->execute()){
            return true;
          }else{
            return false;
          }
          $conn->close();
 }


 function insertSalaryStaffLoan($date_month,$employeeName1,$basic_salary,$allowance,$other,$gross_pay,$sanction,$other_dues,$loan,$type,$total_dues,$net_pay,$employeeName){
          $conn = mysqli_connect($this->host, $this->user, $this->password, $this->DB);
          $date_month  = mysqli_escape_string($conn, htmlentities(trim($date_month)));
          $employeeName1  = mysqli_escape_string($conn, htmlentities(trim($employeeName1)));
          $basic_salary  = mysqli_escape_string($conn, htmlentities(trim($basic_salary)));
          $allowance  = mysqli_escape_string($conn, htmlentities(trim($allowance)));
          $other  = mysqli_escape_string($conn, htmlentities(trim($other)));
          $gross_pay  = mysqli_escape_string($conn, htmlentities(trim($gross_pay)));
          $sanction  = mysqli_escape_string($conn, htmlentities(trim($sanction)));
          $other_dues  = mysqli_escape_string($conn, htmlentities(trim($other_dues)));
          $loan  = mysqli_escape_string($conn, htmlentities(trim($loan)));
          $type  = mysqli_escape_string($conn, htmlentities(trim($type)));
          $total_dues  = mysqli_escape_string($conn, htmlentities(trim($total_dues)));
          $net_pay  = mysqli_escape_string($conn, htmlentities(trim($net_pay)));
          $employeeName  = mysqli_escape_string($conn, htmlentities(trim($employeeName)));
          $sql = 'INSERT INTO payroll(month_year,employee_name,bsaic_salary,allowance,others,gross_pay,sanction,other_deduction,loan,type,total_due,net_pay,staff_id) VALUES (?,?,?,?,?,?,?,?,?,?,?,?,?)';
          $query = $conn->prepare($sql);
          $query->bind_param('sssssssssssss',$date_month,$employeeName1,$basic_salary,$allowance,$other,$gross_pay,$sanction,$other_dues,$loan,$type,$total_dues,$net_pay,$employeeName);
          if($query->execute()){
            return true;
          }else{
            return false;
          }
          $conn->close();
 }




  function insertSalaryWorkers($date_month,$Employee,$basic_salary,$allowance,$other,$gross_pay,$sanction,$other_dues,$total_dues,$net_pay){
          $conn = mysqli_connect($this->host, $this->user, $this->password, $this->DB);
          $date_month  = mysqli_escape_string($conn, htmlentities(trim($date_month)));
          $Employee  = mysqli_escape_string($conn, htmlentities(trim($Employee)));
          $basic_salary  = mysqli_escape_string($conn, htmlentities(trim($basic_salary)));
          $allowance  = mysqli_escape_string($conn, htmlentities(trim($allowance)));
          $other  = mysqli_escape_string($conn, htmlentities(trim($other)));
          $gross_pay  = mysqli_escape_string($conn, htmlentities(trim($gross_pay)));
          $sanction  = mysqli_escape_string($conn, htmlentities(trim($sanction)));
          $other_dues  = mysqli_escape_string($conn, htmlentities(trim($other_dues)));
          $total_dues  = mysqli_escape_string($conn, htmlentities(trim($total_dues)));
          $net_pay  = mysqli_escape_string($conn, htmlentities(trim($net_pay)));
    
          $sql = 'INSERT INTO workers_payroll(month_year,employee_name,bsaic_salary,allowance,others,gross_pay,sanction,other_deduction,total_due,net_pay) VALUES (?,?,?,?,?,?,?,?,?,?)';
          $query = $conn->prepare($sql);
          $query->bind_param('ssssssssss',$date_month,$Employee,$basic_salary,$allowance,$other,$gross_pay,$sanction,$other_dues,$total_dues,$net_pay);
          if($query->execute()){
            return true;
          }else{
            return false;
          }
          $conn->close();
 }




  function insertSalarylog($date_month,$net_pay,$status,$type){
          $conn = mysqli_connect($this->host, $this->user, $this->password, $this->DB);
          $date_month  = mysqli_escape_string($conn, htmlentities(trim($date_month)));
          $type  = mysqli_escape_string($conn, htmlentities(trim($type)));
          $net_pay  = mysqli_escape_string($conn, htmlentities(trim($net_pay)));
          $status  = mysqli_escape_string($conn, htmlentities(trim($status)));
          $sql = 'INSERT INTO payroll_log(month_year,Amount,status,staff_workers) VALUES (?,?,?,?)';
          $query = $conn->prepare($sql);
          $query->bind_param('ssss',$date_month,$net_pay,$status,$type);
          if($query->execute()){
            return true;
          }else{
            return false;
          }
          $conn->close();
 }


   function insertSalaryworkerslog($date_month,$net_pay,$status,$type,$datex){
          $conn = mysqli_connect($this->host, $this->user, $this->password, $this->DB);
          $date_month  = mysqli_escape_string($conn, htmlentities(trim($date_month)));
          $type  = mysqli_escape_string($conn, htmlentities(trim($type)));
          $net_pay  = mysqli_escape_string($conn, htmlentities(trim($net_pay)));
          $status  = mysqli_escape_string($conn, htmlentities(trim($status)));
          $datex  = mysqli_escape_string($conn, htmlentities(trim($datex)));
          $sql = 'INSERT INTO workers_payroll_log(month_year,Amount,status,workers,created_at) VALUES (?,?,?,?,?)';
          $query = $conn->prepare($sql);
          $query->bind_param('sssss',$date_month,$net_pay,$status,$type,$datex);
          if($query->execute()){
            return true;
          }else{
            return false;
          }
          $conn->close();
 }
   




  function insertWaybill($datex,$company_name,$phone,$driver,$vehicle,$driver_phone,$location,$destination,$Icustomer_name,$itemproduct_name,$quantity,$Icolor_name,$Ikg_weight_name,$Imeter_length,$Ipacket,$Itemproduct_code,$user,$reference_id,$image){
          $conn = mysqli_connect($this->host, $this->user, $this->password, $this->DB);
          $datex  = mysqli_escape_string($conn, htmlentities(trim($datex)));
          $company_name  = mysqli_escape_string($conn, htmlentities(trim($company_name)));
          $phone  = mysqli_escape_string($conn, htmlentities(trim($phone)));
          // $email  = mysqli_escape_string($conn, htmlentities(trim($email)));
          $driver  = mysqli_escape_string($conn, htmlentities(trim($driver)));
          $vehicle  = mysqli_escape_string($conn, htmlentities(trim($vehicle)));
          $driver_phone  = mysqli_escape_string($conn, htmlentities(trim($driver_phone)));
          $location  = mysqli_escape_string($conn, htmlentities(trim($location)));
          $destination  = mysqli_escape_string($conn, htmlentities(trim($destination)));
          $Icustomer_name  = mysqli_escape_string($conn, htmlentities(trim($Icustomer_name)));
          $itemproduct_name  = mysqli_escape_string($conn, htmlentities(trim($itemproduct_name)));
          $quantity  = mysqli_escape_string($conn, htmlentities(trim($quantity)));
          $Itemproduct_code  = mysqli_escape_string($conn, htmlentities(trim($Itemproduct_code)));
          $Itemproduct_code  = mysqli_escape_string($conn, htmlentities(trim($Itemproduct_code)));

          $user  = mysqli_escape_string($conn, htmlentities(trim($user)));
          $reference_id  = mysqli_escape_string($conn, htmlentities(trim($reference_id)));
          $image  = mysqli_escape_string($conn, htmlentities(trim($image)));
          $sql = 'INSERT INTO waybill(datex,company_name,phone,driver,vehicle,driver_phone,location,destination,customer_name,product_name,quantity,color,kg,meter,packet,product_code,user,reference_no,image) VALUES (?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?)';
          $query = $conn->prepare($sql);
          $query->bind_param('sssssssssssssssssss',$datex,$company_name,$phone,$driver,$vehicle,$driver_phone,$location,$destination,$Icustomer_name,$itemproduct_name,$quantity,$Icolor_name,$Ikg_weight_name,$Imeter_length,$Ipacket,$Itemproduct_code,$user,$reference_id,$image);
          if($query->execute()){
            return true;
          }else{
            return false;
          }
          $conn->close();
 }


                     
 function insertVisit($visitor_name,$gender,$purpose,$who_place,$time_in,$time_out,$vehicle,$vehicle_no,$vehicle_color,$datex){
          $conn = mysqli_connect($this->host, $this->user, $this->password, $this->DB);
          $visitor_name  = mysqli_escape_string($conn, htmlentities(trim($visitor_name)));
          $gender  = mysqli_escape_string($conn, htmlentities(trim($gender)));
          $purpose  = mysqli_escape_string($conn, htmlentities(trim($purpose)));
          $who_place  = mysqli_escape_string($conn, htmlentities(trim($who_place)));
          $time_in  = mysqli_escape_string($conn, htmlentities(trim($time_in)));
          $time_out  = mysqli_escape_string($conn, htmlentities(trim($time_out)));
          $vehicle  = mysqli_escape_string($conn, htmlentities(trim($vehicle)));
          $vehicle_no  = mysqli_escape_string($conn, htmlentities(trim($vehicle_no)));
          $vehicle_color  = mysqli_escape_string($conn, htmlentities(trim($vehicle_color)));
          $datex  = mysqli_escape_string($conn, htmlentities(trim($datex)));
          $sql = 'INSERT INTO visit_table(visitor_name,gender,purpose,who_place,time_in,time_out,vehicle,vehicle_no,vehicle_color,visit_day) VALUES (?,?,?,?,?,?,?,?,?,?)';
          $query = $conn->prepare($sql);
          $query->bind_param('ssssssssss',$visitor_name,$gender,$purpose,$who_place,$time_in,$time_out,$vehicle,$vehicle_no,$vehicle_color,$datex);
          if($query->execute()){
            return true;
          }else{
            return false;
          }
          $conn->close();
 }



  function insertReturn($reference_id,$return_date,$product_name,$customer_name,$return_description,$return_quantity,$return_kg,$return_packet,$category,$guage,$color,$status,$item_code){
          $conn = mysqli_connect($this->host, $this->user, $this->password, $this->DB);
          $customer_name  = mysqli_escape_string($conn, htmlentities(trim($customer_name)));
          $reference_id  = mysqli_escape_string($conn, htmlentities(trim($reference_id)));
          $return_description  = mysqli_escape_string($conn, htmlentities(trim($return_description)));
          $return_date  = mysqli_escape_string($conn, htmlentities(trim($return_date)));
          $product_name  = mysqli_escape_string($conn, htmlentities(trim($product_name)));
          // $quantity  = mysqli_escape_string($conn, htmlentities(trim($quantity)));
          $return_quantity  = mysqli_escape_string($conn, htmlentities(trim($return_quantity)));
          $return_kg  = mysqli_escape_string($conn, htmlentities(trim($return_kg)));
          $return_packet  = mysqli_escape_string($conn, htmlentities(trim($return_packet)));
          $category  = mysqli_escape_string($conn, htmlentities(trim($category)));
          $guage  = mysqli_escape_string($conn, htmlentities(trim($guage)));
          $color  = mysqli_escape_string($conn, htmlentities(trim($color)));
          $status  = mysqli_escape_string($conn, htmlentities(trim($status)));
          $item_code  = mysqli_escape_string($conn, htmlentities(trim($item_code)));
          $sql = 'INSERT INTO return_table(reference_no,return_date,product_name,customer,return_description,quantity,kg,packet,category,guage,color,status,item_code) VALUES (?,?,?,?,?,?,?,?,?,?,?,?,?)';
          $query = $conn->prepare($sql);
          $query->bind_param('sssssssssssss',$reference_id,$return_date,$product_name,$customer_name,$return_description,$return_quantity,$return_kg,$return_packet,$category,$guage,$color,$status,$item_code);
          // $query->bind_param('sssssssssss',$reference_id,$return_date,$product_name,$customer_name,$return_description,$return_quantity,$category,$guage,$color,$status,$item_code);
          if($query->execute()){
            return true;
          }else{
            return false;
          }
          $conn->close();
 }





  function insertReturn1($reference_id,$return_date,$product_name,$customer_name,$return_description,$return_quantity,$return_kg,$return_packet,$category,$guage,$color,$status,$item_code,$type,$changed_color){
          $conn = mysqli_connect($this->host, $this->user, $this->password, $this->DB);
          $customer_name  = mysqli_escape_string($conn, htmlentities(trim($customer_name)));
          $reference_id  = mysqli_escape_string($conn, htmlentities(trim($reference_id)));
          $return_description  = mysqli_escape_string($conn, htmlentities(trim($return_description)));
          $return_date  = mysqli_escape_string($conn, htmlentities(trim($return_date)));
          $product_name  = mysqli_escape_string($conn, htmlentities(trim($product_name)));
          // $quantity  = mysqli_escape_string($conn, htmlentities(trim($quantity)));
          $return_quantity  = mysqli_escape_string($conn, htmlentities(trim($return_quantity)));
          $return_kg  = mysqli_escape_string($conn, htmlentities(trim($return_kg)));
          $return_packet  = mysqli_escape_string($conn, htmlentities(trim($return_packet)));
          $category  = mysqli_escape_string($conn, htmlentities(trim($category)));
          $guage  = mysqli_escape_string($conn, htmlentities(trim($guage)));
          $color  = mysqli_escape_string($conn, htmlentities(trim($color)));
          $status  = mysqli_escape_string($conn, htmlentities(trim($status)));
          $item_code  = mysqli_escape_string($conn, htmlentities(trim($item_code)));
          $type  = mysqli_escape_string($conn, htmlentities(trim($type)));
          $changed_color  = mysqli_escape_string($conn, htmlentities(trim($changed_color)));
          $sql = 'INSERT INTO return_table(reference_no,return_date,product_name,customer,return_description,quantity,kg,packet,category,guage,color,status,item_code,type,chaged_to) VALUES (?,?,?,?,?,?,?,?,?,?,?,?,?,?,?)';
          $query = $conn->prepare($sql);
          $query->bind_param('sssssssssssssss',$reference_id,$return_date,$product_name,$customer_name,$return_description,$return_quantity,$return_kg,$return_packet,$category,$guage,$color,$status,$item_code,$type,$changed_color);
          // $query->bind_param('sssssssssss',$reference_id,$return_date,$product_name,$customer_name,$return_description,$return_quantity,$category,$guage,$color,$status,$item_code);
          if($query->execute()){
            return true;
          }else{
            return false;
          }
          $conn->close();
 }






function allCustomer(){
   $conn = mysqli_connect($this->host, $this->user, $this->password, $this->DB);
   $resultset = array();
   $sql = ("SELECT * FROM customer_table");
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

 


function allCustomerDebit(){
   $conn = mysqli_connect($this->host, $this->user, $this->password, $this->DB);
   $resultset = array();
   // $sql = ("SELECT * FROM customer_ledger GROUP BY account_id");
   $sql = ("SELECT *, SUM(credit) AS allcredit, SUM(debit) AS alldebit, SUM(debit - credit) AS allbalance FROM customer_ledger GROUP BY account_id;");
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



function GetreceiveDueall(){
   $conn = mysqli_connect($this->host, $this->user, $this->password, $this->DB);
   $resultset = array();
   $sql = ("SELECT *, SUM(DISTINCT due) as total_amount FROM invoice_details WHERE due > 0 GROUP BY customer ORDER BY order_date DESC");
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


























                      

function insertSalaryUpdate($date_month,$net_pay){
   $conn = mysqli_connect($this->host, $this->user, $this->password, $this->DB);
    $sql = "UPDATE payroll_log SET Amount =Amount + '".$net_pay."' WHERE month_year ='".$date_month."'";
    $query = $conn->query($sql) or print(mysqli_error($conn));
    if ($query == true) {
      return true;  
    }else{
      return false;   
    }
    $conn->close();
}


function insertLoanUpdate($amount_paid,$state,$staff_id){
   $conn = mysqli_connect($this->host, $this->user, $this->password, $this->DB);
    $sql = "UPDATE staff_loan_table SET amount_paid =amount_paid+'".$amount_paid."', state ='".$state."' WHERE staff_id ='".$staff_id."'";
    $query = $conn->query($sql) or print(mysqli_error($conn));
    if ($query == true) {
      return true;  
    }else{
      return false;   
    }
    $conn->close();
}


function insertSalaryworkersUpdate($date_month,$net_pay){
   $conn = mysqli_connect($this->host, $this->user, $this->password, $this->DB);
    $sql = "UPDATE workers_payroll_log SET Amount =Amount + '".$net_pay."' WHERE month_year ='".$date_month."'";
    $query = $conn->query($sql) or print(mysqli_error($conn));
    if ($query == true) {
      return true;  
    }else{
      return false;   
    }
    $conn->close();
}



function insertPayall($monthYEAR,$status){
   $conn = mysqli_connect($this->host, $this->user, $this->password, $this->DB);
    $sql = "UPDATE payroll_log SET status ='".$status."' WHERE month_year ='".$monthYEAR."'";
    $query = $conn->query($sql) or print(mysqli_error($conn));
    if ($query == true) {
      return true;  
    }else{
      return false;   
    }
    $conn->close();
}


function insertPayallW($monthYEAR,$status){
   $conn = mysqli_connect($this->host, $this->user, $this->password, $this->DB);
    $sql = "UPDATE workers_payroll_log SET status ='".$status."' WHERE month_year ='".$monthYEAR."'";
    $query = $conn->query($sql) or print(mysqli_error($conn));
    if ($query == true) {
      return true;  
    }else{
      return false;   
    }
    $conn->close();
}


function insertPayall2($monthYEAR,$status){
   $conn = mysqli_connect($this->host, $this->user, $this->password, $this->DB);
    $sql = "UPDATE payroll SET status ='".$status."' WHERE month_year ='".$monthYEAR."'";
    $query = $conn->query($sql) or print(mysqli_error($conn));
    if ($query == true) {
      return true;  
    }else{
      return false;   
    }
    $conn->close();
}


function insertPayall2W($monthYEAR,$status){
   $conn = mysqli_connect($this->host, $this->user, $this->password, $this->DB);
    $sql = "UPDATE workers_payroll SET status ='".$status."' WHERE month_year ='".$monthYEAR."'";
    $query = $conn->query($sql) or print(mysqli_error($conn));
    if ($query == true) {
      return true;  
    }else{
      return false;   
    }
    $conn->close();
}

function insertPayall27W($monthYEAR,$status){
   $conn = mysqli_connect($this->host, $this->user, $this->password, $this->DB);
    $sql = "UPDATE workers_baggers SET status ='".$status."' WHERE month_year ='".$monthYEAR."'";
    $query = $conn->query($sql) or print(mysqli_error($conn));
    if ($query == true) {
      return true;  
    }else{
      return false;   
    }
    $conn->close();
}


function insertPayall28W($monthYEAR,$status){
   $conn = mysqli_connect($this->host, $this->user, $this->password, $this->DB);
    $sql = "UPDATE workers_loaders SET status ='".$status."' WHERE month_year ='".$monthYEAR."'";
    $query = $conn->query($sql) or print(mysqli_error($conn));
    if ($query == true) {
      return true;  
    }else{
      return false;   
    }
    $conn->close();
}

function insertPayall22($monthYEAR,$status,$staff_id){
   $conn = mysqli_connect($this->host, $this->user, $this->password, $this->DB);
    $sql = "UPDATE payroll SET status ='".$status."' WHERE month_year ='".$monthYEAR."' AND staff_id ='".$staff_id."'";
    $query = $conn->query($sql) or print(mysqli_error($conn));
    if ($query == true) {
      return true;  
    }else{
      return false;   
    }
    $conn->close();
}


function insertPayall22W($monthYEAR,$status,$names){
   $conn = mysqli_connect($this->host, $this->user, $this->password, $this->DB);
    $sql = "UPDATE workers_payroll SET status ='".$status."' WHERE month_year ='".$monthYEAR."' AND employee_name ='".$names."'";
    $query = $conn->query($sql) or print(mysqli_error($conn));
    if ($query == true) {
      return true;  
    }else{
      return false;   
    }
    $conn->close();
}

function insertPayall23W($monthYEAR,$status,$names){
   $conn = mysqli_connect($this->host, $this->user, $this->password, $this->DB);
    $sql = "UPDATE workers_baggers SET status ='".$status."' WHERE month_year ='".$monthYEAR."' AND names ='".$names."'";
    $query = $conn->query($sql) or print(mysqli_error($conn));
    if ($query == true) {
      return true;  
    }else{
      return false;   
    }
    $conn->close();
}

function insertPayall24W($monthYEAR,$status,$names){
   $conn = mysqli_connect($this->host, $this->user, $this->password, $this->DB);
    $sql = "UPDATE workers_loaders SET status ='".$status."' WHERE month_year ='".$monthYEAR."' AND names ='".$names."'";
    $query = $conn->query($sql) or print(mysqli_error($conn));
    if ($query == true) {
      return true;  
    }else{
      return false;   
    }
    $conn->close();
}



function insertPayall3($amount){
   $conn = mysqli_connect($this->host, $this->user, $this->password, $this->DB);
    $sql = "UPDATE chart_of_account SET balance ='".$amount."' WHERE account_id ='2001_SALARY'";
    $query = $conn->query($sql) or print(mysqli_error($conn));
    if ($query == true) {
      return true;  
    }else{
      return false;   
    }
    $conn->close();
}



function select_allPay($data){
   $conn = mysqli_connect($this->host,$this->user,$this->password,$this->DB);
   $sql  = "SELECT * FROM payroll WHERE  month_year='".$data."'";
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


function baggers_Payroll(){
   $conn = mysqli_connect($this->host,$this->user,$this->password,$this->DB);
   $sql  = "SELECT * FROM workers_baggers WHERE status='not_paid' GROUP BY `names` ASC";
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



function loaders_Payroll(){
   $conn = mysqli_connect($this->host,$this->user,$this->password,$this->DB);
   $sql  = "SELECT * FROM workers_loaders WHERE status='not_paid' GROUP BY `names` ASC";
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

function select_check($us){
   $conn = mysqli_connect($this->host,$this->user,$this->password,$this->DB);
   // $us = $_SESSION['user'];
   $sql  = "SELECT * FROM addtocart_new WHERE sales_rep='".$us."'";
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


function select_checkiNVOICEtO($us){
   $conn = mysqli_connect($this->host,$this->user,$this->password,$this->DB);
   // $us = $_SESSION['user'];
   $sql  = "SELECT * FROM invoice_details WHERE invoice_id='".$us."'";
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


// function select_checkiNVOICEtO($us){
//    $conn = mysqli_connect($this->host,$this->user,$this->password,$this->DB);
//    // $us = $_SESSION['user'];
//    $sql  = "SELECT * FROM invoice_details WHERE invoice_id='".$us."'";
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



function select_checkcREDIT($us){
   $conn = mysqli_connect($this->host,$this->user,$this->password,$this->DB);
   // $us = $_SESSION['user'];
   $sql  = "SELECT * FROM sale_credit_table WHERE invoice_id='".$us."'";
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


function select_checkcREDITapp($us){
   $conn = mysqli_connect($this->host,$this->user,$this->password,$this->DB);
   // $us = $_SESSION['user'];
   $sql  = "SELECT * FROM invoice_details WHERE invoice_id='".$us."'";
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


function select_checkcREDITSales($us){
   $conn = mysqli_connect($this->host,$this->user,$this->password,$this->DB);
   // $us = $_SESSION['user'];
   $sql  = "SELECT * FROM price_adjust_sale WHERE invoice_id='".$us."'";
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



/*function addToCart(){
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
*/
// function CheckOut_User_cart($GetItem_Priv,$Get_staffID){
//   $conn       = mysqli_connect($this->host, $this->user, $this->password, $this->DB);
//   $GetItem_Priv      = mysqli_escape_string($conn, htmlentities(trim($GetItem_Priv)));
//   $Get_staffID       = mysqli_escape_string($conn, htmlentities(trim($Get_staffID)));
//   $sql = "INSERT INTO priviledges_assigned(privileges,username) VALUES(?,?)";
//   $query = $conn->prepare($sql) or print(mysqli_error($conn));
//   $query->bind_param('ss',$GetItem_Priv,$Get_staffID);
//    if ($query->execute()){
//       return true;
//   }else{
//       return false;
//   }
//    $conn->close();
// }

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





function allUnsettledSales(){
   $conn = mysqli_connect($this->host, $this->user, $this->password, $this->DB);
   $resultset = array();
   $sql = ("SELECT * FROM marketer_sales WHERE status ='Unsettled' ");
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








function getlastEnetered(){
   $conn = mysqli_connect($this->host, $this->user, $this->password, $this->DB);
   $resultset = array();
   $sql = ("SELECT * FROM raw_material WHERE id IN ( SELECT MAX(id) FROM raw_material GROUP BY material_name)");
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


function allMaterialTable(){
   $conn = mysqli_connect($this->host, $this->user, $this->password, $this->DB);
   $resultset = array();
   $sql = ("SELECT * FROM raw_material GROUP BY material_name");
    // $sql="SELECT * FROM purchase_material_table WHERE  material_name ='".$SiteID."'";
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




function allStockTable(){
   $conn = mysqli_connect($this->host, $this->user, $this->password, $this->DB);
   $resultset = array();
   $sql = ("SELECT * FROM stock GROUP BY product_name");
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

function allWasteRecord(){
   $conn = mysqli_connect($this->host, $this->user, $this->password, $this->DB);
   $resultset = array();
   $sql = ("SELECT * FROM waste_management GROUP BY  waste_material ");
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

function allStock(){
   $conn = mysqli_connect($this->host, $this->user, $this->password, $this->DB);
   $resultset = array();
   $sql = ("SELECT * FROM stock");
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



function check_if_Record_Exist2($tableName,$columnName,$dataChecked,$columnName1,$dataChecked1){
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





function fetch_from_tables_usingWHERE($tableName,$columnName,$dataChecked){
   $conn = mysqli_connect($this->host, $this->user, $this->password, $this->DB);
   $resultset = array();
   $sql = ("SELECT * FROM $tableName WHERE $columnName='$dataChecked'");
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


function Fetch_selected_row2($table, $column, $data, $result){
   $conn = mysqli_connect($this->host, $this->user, $this->password, $this->DB);
   $resultset = array();
   $sql = ("SELECT $result FROM $table WHERE $column='$data'");
   $query= $conn->query($sql); 
      while($fetch=$query->fetch_assoc()){
        if($fetch==true){
            return $fetch;             
       }else{
            return null;
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

function allReturnOutward($data){
   $conn = mysqli_connect($this->host, $this->user, $this->password, $this->DB);
   $resultset = array();
   $sql = ("SELECT * FROM return_table WHERE type='$data'");
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




function getAllVisit(){
   $conn = mysqli_connect($this->host, $this->user, $this->password, $this->DB);
   $resultset = array();
   $sql = ("SELECT * FROM visit_table");
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




// function selectSupplierAdd($table){
//    $conn = mysqli_connect($this->host, $this->user, $this->password, $this->DB);
//    $sql  = "SELECT * FROM $table";
//    $query= $conn->query($sql); 
//      while($fetch=$query->fetch_assoc()){
//        if($fetch==true){
//            echo '<option>'.$fetch['category'].'</option>';                  
//       }
//    }
//   $conn->close();     
// }

function selectStaff1($table){
   $conn = mysqli_connect($this->host, $this->user, $this->password, $this->DB);
   $sql  = "SELECT * FROM $table";
   $query= $conn->query($sql); 
     while($fetch=$query->fetch_assoc()){
       if($fetch==true){
           echo '<option>'.$fetch['username']."-".$fetch['firstname']." ".$fetch['lastname'].'</option>';                  
      }
   }
  $conn->close();     
}

// function selectCate($table){
//    $conn = mysqli_connect($this->host, $this->user, $this->password, $this->DB);
//    $sql  = "SELECT * FROM $table";
//    $query= $conn->query($sql); 
//      while($fetch=$query->fetch_assoc()){
//        if($fetch==true){
//            echo '<option>'.$fetch['category'].'</option>';                  
//       }
//    }
//   $conn->close();     
// }



function ChecKK_if_PriviledgeExist($tableName, $columnName, $dataChecked,$col2,$data2){
   $conn = mysqli_connect($this->host, $this->user, $this->password, $this->DB);
   $resultset = array();
   $sql = ("SELECT * FROM $tableName WHERE $columnName='$dataChecked' AND $col2='$data2'");
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



function selectProduct($table){
   $conn = mysqli_connect($this->host, $this->user, $this->password, $this->DB);
   $sql  = "SELECT * FROM $table";
   $query= $conn->query($sql); 
     while($fetch=$query->fetch_assoc()){
       if($fetch==true){
           echo '<option value="'.$fetch['item_code'].'">'.$fetch['product_name']."_".$fetch['category']."_".$fetch['guage']."_".$fetch['color'].'</option>';                  
      }
   }
  $conn->close();     
}


function selectSelect_Bank($table){
   $conn = mysqli_connect($this->host, $this->user, $this->password, $this->DB);
   $sql  = "SELECT * FROM $table WHERE series_name='Assets' OR series_name='Income'";
   $query= $conn->query($sql); 
     while($fetch=$query->fetch_assoc()){
       if($fetch==true){
           echo '<option>'.$fetch['account_id']."-".$fetch['series_name'].'</option>';                  
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

function selectProductAdd($table){
   $conn = mysqli_connect($this->host, $this->user, $this->password, $this->DB);
   $sql  = "SELECT * FROM $table";
   $query= $conn->query($sql); 
       while($fetch=$query->fetch_assoc()){
         
      echo '<option class="dropdown-item">'.$fetch['name'].'</option>';
        
    }
  $conn->close();     
}


function selectStaff($table){
   $conn = mysqli_connect($this->host, $this->user, $this->password, $this->DB);
   $sql  = "SELECT * FROM $table";
   $query= $conn->query($sql); 
       while($fetch=$query->fetch_assoc()){
         
      echo '<option class="dropdown-item">'.$fetch['staff_id']."-".$fetch['firstname']." ".$fetch['lastname'].'</option>';
        
    }
  $conn->close();     
}


function selectMerits($table){
   $conn = mysqli_connect($this->host, $this->user, $this->password, $this->DB);
   $sql  = "SELECT * FROM $table";
   $query= $conn->query($sql); 
       while($fetch=$query->fetch_assoc()){
         
      echo '<option class="dropdown-item">'.$fetch['account_id']."-".$fetch['name'].'</option>';
        
    }
  $conn->close();     
}



function selectBank($table){
   $conn = mysqli_connect($this->host, $this->user, $this->password, $this->DB);
   $sql  = "SELECT * FROM $table";
   $query= $conn->query($sql); 
       while($fetch=$query->fetch_assoc()){
         
      echo '<option class="dropdown-item">'.$fetch['bank_id']."-".$fetch['bank_name'].'</option>';
        
    }
  $conn->close();     
}




function selectProductAll($table){
   $conn = mysqli_connect($this->host, $this->user, $this->password, $this->DB);
   $sql  = "SELECT * FROM $table";
   $query= $conn->query($sql); 
       while($fetch=$query->fetch_assoc()){
         
      echo '<option class="dropdown-item">'.$fetch['name']."-".$fetch['item_id'].'</option>';
        
    }
  $conn->close();     
}



function selectProductOPTION($table,$data){
   $conn = mysqli_connect($this->host, $this->user, $this->password, $this->DB);
   $sql  = "SELECT * FROM $table WHERE name='$data'";
   $query= $conn->query($sql); 
       while($fetch=$query->fetch_assoc()){
         
      echo '<option class="dropdown-item">'.$fetch['name']."-".$fetch['item_id'].'</option>';
        
    }
  $conn->close();     
}


function selectDistributorAll($table){
   $conn = mysqli_connect($this->host, $this->user, $this->password, $this->DB);
   $sql  = "SELECT * FROM $table";
   $query= $conn->query($sql); 
       while($fetch=$query->fetch_assoc()){ 
      echo '<option class="dropdown-item">'.$fetch['name']."-".$fetch['account_id'].'</option>';
        
    }
  $conn->close();     
}


function selectStaffAll($table){
   $conn = mysqli_connect($this->host, $this->user, $this->password, $this->DB);
   $sql  = "SELECT * FROM $table";
   $query= $conn->query($sql); 
       while($fetch=$query->fetch_assoc()){ 
      echo '<option class="dropdown-item">'.$fetch['firstname']."-".$fetch['lastname']."-".$fetch['staff_id'].'</option>';
        
    }
  $conn->close();     
}

function selectVehicleName($table){
   $conn = mysqli_connect($this->host, $this->user, $this->password, $this->DB);
   $sql  = "SELECT * FROM $table";
   $query= $conn->query($sql); 
       while($fetch=$query->fetch_assoc()){ 
      echo '<option class="dropdown-item">'.$fetch['vehicle_model'].'</option>';
        
    }
  $conn->close();     
}

function selectStaffAllDriver($table){
   $conn = mysqli_connect($this->host, $this->user, $this->password, $this->DB);
   $sql  = "SELECT * FROM $table WHERE position='driver'";
   $query= $conn->query($sql); 
       while($fetch=$query->fetch_assoc()){ 
      echo '<option class="dropdown-item">'.$fetch['firstname']."-".$fetch['lastname']."-".$fetch['staff_id'].'</option>';
        
    }
  $conn->close();     
}

function selectStaffAllSuperVisor($table,$data){
   $conn = mysqli_connect($this->host, $this->user, $this->password, $this->DB);
   $sql  = "SELECT * FROM $table WHERE position='".$data."'" ;
   $query= $conn->query($sql); 
       while($fetch=$query->fetch_assoc()){ 
      echo '<option class="dropdown-item">'.$fetch['firstname']."-".$fetch['lastname']."-".$fetch['staff_id'].'</option>';
        
    }
  $conn->close();     
}




function selectBaggers($table){
   $conn = mysqli_connect($this->host, $this->user, $this->password, $this->DB);
   $sql  = "SELECT * FROM $table GROUP BY `names` ASC";
   $query= $conn->query($sql); 
       while($fetch=$query->fetch_assoc()){
         
      echo '<option class="dropdown-item">'.$fetch['names'].'</option>';
        
    }
  $conn->close();     
}



function selectStaffBasicS($table){
   $conn = mysqli_connect($this->host, $this->user, $this->password, $this->DB);
   $sql  = "SELECT * FROM $table";
   $query= $conn->query($sql); 
       while($fetch=$query->fetch_assoc()){
         
      echo '<option class="dropdown-item" value="'.$fetch['basic_salary'].'">'.$fetch['firstname']." ".$fetch['lastname']."_" .$fetch['basic_salary'].'</option>';
        
    }
  $conn->close();     
}


function selectSupplierAdd($table){
   $conn = mysqli_connect($this->host, $this->user, $this->password, $this->DB);
   $sql  = "SELECT * FROM $table";
   $query= $conn->query($sql); 
       while($fetch=$query->fetch_assoc()){
         
      echo '<option class="dropdown-item">'.$fetch['supplier_id']. " " .$fetch['supplier_name'].'</option>';
        
    }
  $conn->close();     
}



function selectSupplierReturn($table){
   $conn = mysqli_connect($this->host, $this->user, $this->password, $this->DB);
   $sql  = "SELECT * FROM $table";
   $query= $conn->query($sql); 
       while($fetch=$query->fetch_assoc()){
         
      echo '<option class="dropdown-item">'.$fetch['supplier_id']. "-" .$fetch['supplier_name'].'</option>';
        
    }
  $conn->close();     
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

function chartofAccountDebit($account_id,$newTotal){
            $conn =  mysqli_connect($this->host, $this->user, $this->password, $this->DB);
            $sql = "UPDATE chart_of_account SET balance =balance-'".$newTotal."' WHERE account_id ='".$account_id."'";
            $query = $conn->query($sql) or print(mysqli_error($conn));
            if ($query == true) {
              return true;  
            }else{
               return false;   
            }
$conn->close(); 
}

 function UpdateWastesale($waste_qty,$soldQty,$price,$newTotAL,$soldAmount,$waste_id){
            $conn =  mysqli_connect($this->host, $this->user, $this->password, $this->DB);
            $sql = "UPDATE waste_management SET quantity =quantity-'".$waste_qty."', qty_sold =qty_sold+'".$soldQty."', rate ='".$price."',total =total+'".$newTotAL."',amount_sold =amount_sold+'".$soldAmount."'  WHERE waste_id ='".$waste_id."' ";
            $query = $conn->query($sql) or print(mysqli_error($conn));
            if ($query == true) {
              return true;  
            }else{
               return false;   
            }
    $conn->close(); 
}

 function insertBankLog($bank_name,$bank_id,$transcation_type,$transaction_id,$amount,$description,$initial_balance,$currentBalance,$deposit_date,$image){
      $conn = mysqli_connect($this->host, $this->user, $this->password, $this->DB);
      $bank_name = mysqli_escape_string($conn, htmlentities(trim($bank_name)));
      $bank_id = mysqli_escape_string($conn, htmlentities(trim($bank_id)));
      $transcation_type = mysqli_escape_string($conn, htmlentities(trim($transcation_type)));
      $transaction_id = mysqli_escape_string($conn, htmlentities(trim($transaction_id)));
      $amount = mysqli_escape_string($conn, htmlentities(trim($amount)));
      $description = mysqli_escape_string($conn, htmlentities(trim($description)));
      $initial_balance = mysqli_escape_string($conn, htmlentities(trim($initial_balance)));
      $currentBalance = mysqli_escape_string($conn, htmlentities(trim($currentBalance)));
      $deposit_date = mysqli_escape_string($conn, htmlentities(trim($deposit_date)));
      $image = mysqli_escape_string($conn, htmlentities(trim($image)));
      $sql = 'INSERT INTO bank_log(bank_name,bank_id,transaction_type,transactionID,amount,description,initial_balance,current_balance,transaction_date,teller_slip) VALUES (?,?,?,?,?,?,?,?,?,?)';
      $query = $conn->prepare($sql);
      $query->bind_param('ssssssssss',$bank_name,$bank_id,$transcation_type,$transaction_id,$amount,$description,$initial_balance,$currentBalance,$deposit_date,$image);
           if ($query->execute()){
                        return true;
                }else{
                      return false;
                     }
                      $conn->close(); 
} 



                     


     function UpdateStocksalewEIGHT($qty,$product_code) {
     $conn = mysqli_connect($this->host,$this->user,$this->password,$this->DB);
     $sql = "UPDATE stockin SET kg_weight =kg_weight-?  WHERE item_code=? ";
     $query = $conn->prepare($sql);
     $query->bind_param('sss',$qty,$product_code);
     $query->execute();
     $conn->close();
     if ($query == true) {
          return true;
     }else{
          return false;
          }
               
     }




// function UpdateStockStatus($staockSTAS,$id){
//             $conn =  mysqli_connect($this->host, $this->user, $this->password, $this->DB);
//             $sql = "UPDATE stockin SET status='".$staockSTAS."' WHERE id='".$id."'";
//             $query = $conn->query($sql) or print(mysqli_error($conn));
//             if ($query == true) {
//               return true;  
//             }else{
//                return false;   
//             }
//             $conn->close(); 
// }


 function UpdateCreditTAB($staockSTAS,$invoice_id) {
     $conn = mysqli_connect($this->host,$this->user,$this->password,$this->DB);
      $sql = "UPDATE sale_credit_table SET status =? WHERE invoice_id=?";
     $query = $conn->prepare($sql);
     $query->bind_param('ss',$staockSTAS,$invoice_id);
     $query->execute();
     $conn->close();
     if ($query == true) {
          return true;
     }else{
          return false;
          }
               
     }


 function UpdateCreditTABAdjust($staockSTAS,$invoice_id) {
     $conn = mysqli_connect($this->host,$this->user,$this->password,$this->DB);
     $sql = "UPDATE price_adjust_sale SET status =? WHERE invoice_id=?";
     $query = $conn->prepare($sql);
     $query->bind_param('ss',$staockSTAS,$invoice_id);
     $query->execute();
     $conn->close();
     if ($query == true) {
          return true;
     }else{
          return false;
          }
               
     }




 function UpdateStockStatus($staockSTAS,$product_code) {
     $conn = mysqli_connect($this->host,$this->user,$this->password,$this->DB);
     $sql = "UPDATE stockin SET status =? WHERE item_code=?";
     $query = $conn->prepare($sql);
     $query->bind_param('ss',$staockSTAS,$product_code);
     $query->execute();
     $conn->close();
     if ($query == true) {
          return true;
     }else{
          return false;
          }
               
     }



function UpdateStocksale($qty,$product_code) {
     $conn = mysqli_connect($this->host,$this->user,$this->password,$this->DB);
     $sql = "UPDATE stockin SET quantity=quantity-?  WHERE item_code=? ";
     $query = $conn->prepare($sql);
     $query->bind_param('ss',$qty,$product_code);
     $query->execute();
     $conn->close();
     if ($query == true) {
          return true;
     }else{
          return false;
          }
               
     }




// function UpdateStocksalePacket($qty,$product_code) {
//      $conn = mysqli_connect($this->host,$this->user,$this->password,$this->DB);
//      $sql = "UPDATE stockin SET packet =packet-'".$qty."'  WHERE product_code='".$product_code."' ";
//      $query = $conn->prepare($sql);
//      $query->bind_param('ss',$qty,$product_code);
//      $query->execute();
//      $conn->close();
//      if ($query == true) {
//           return true;
//      }else{
//           return false;
//           }
               
//      }


     function UpdateStocksalePacket($qty,$product_code) {
     $conn = mysqli_connect($this->host,$this->user,$this->password,$this->DB);
    $sql = "UPDATE stockin SET packet =packet-? WHERE item_code=? ";
     $query = $conn->prepare($sql);
     $query->bind_param('ss',$qty,$product_code);
     $query->execute();
     $conn->close();
     if ($query == true) {
          return true;
     }else{
          return false;
          }
               
     }







// function UpdateStocksalepacket($qty,$product_code){
//             $conn =  mysqli_connect($this->host, $this->user, $this->password, $this->DB);
//             $sql = "UPDATE stockin SET quantity =quantity-'".$qty."'  WHERE product_code='".$product_code."' ";
//             $query = $conn->query($sql) or print(mysqli_error($conn));
//             if ($query == true) {
//               return true;  
//             }else{
//                return false;   
//             }
//     $conn->close(); 
// }




function Update_sT($qty,$product_code) {
     $conn = mysqli_connect($this->host,$this->user,$this->password,$this->DB);
     $sql = "UPDATE invoice_details SET quantity =quantity-?  WHERE item_code =? ";
     $query = $conn->prepare($sql);
     $query->bind_param('ss',$qty,$product_code);
     $query->execute();
     $conn->close();
     if ($query == true) {
          return true;
     }else{
          return false;
          }
               
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

function UpdateCreditPurchase1($qty,$product_code) {
     $conn = mysqli_connect($this->host,$this->user,$this->password,$this->DB);
       $sql = "UPDATE purchase_log SET amount_due =amount_due-?  WHERE purchase_id =? ";
     $query = $conn->prepare($sql);
     $query->bind_param('ss',$qty,$product_code);
     $query->execute();
     $conn->close();
     if ($query == true) {
          return true;
     }else{
          return false;
          }
               
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



function UpdateRequestReject($request_no,$Newstatus,$datex) {
     $conn = mysqli_connect($this->host,$this->user,$this->password,$this->DB);
     $sql = "UPDATE request_table SET status=?, updated_at=? WHERE request_no=? ";
     $query = $conn->prepare($sql);
     $query->bind_param('sss',$Newstatus,$datex,$request_no);
     $query->execute();
     $conn->close();
     if ($query == true) {
          return true;
     }else{
          return false;
          }
               
     }



function UpdateReturn($reference_no,$Newstatus,$datex){
    $conn =  mysqli_connect($this->host, $this->user, $this->password, $this->DB);
    $sql = "UPDATE return_table SET status ='".$Newstatus."', updated_at = '".$datex."' WHERE reference_no ='".$reference_no."' ";
    $query = $conn->query($sql) or print(mysqli_error($conn));
    if ($query == true) {
      return true;  
    }else{
       return false;   
    }
    $conn->close(); 
}


function AddreturnToInvoice($invoice_id,$item_code,$delivery,$datex){
    $conn =  mysqli_connect($this->host, $this->user, $this->password, $this->DB);
    $sql = "UPDATE invoice_details SET delivery ='".$delivery."', updated_at = '".$datex."' WHERE invoice_id ='".$invoice_id."' AND product_code ='".$item_code."' ";
    $query = $conn->query($sql) or print(mysqli_error($conn));
    if ($query == true) {
      return true;  
    }else{
       return false;   
    }
    $conn->close(); 
}


function ApproveReturn($reference_no,$Newstatus,$datex){
    $conn =  mysqli_connect($this->host, $this->user, $this->password, $this->DB);
    $sql = "UPDATE return_table SET approval ='".$Newstatus."', updated_at = '".$datex."' WHERE reference_no ='".$reference_no."' ";
    $query = $conn->query($sql) or print(mysqli_error($conn));
    if ($query == true) {
      return true;  
    }else{
       return false;   
    }
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
    $sql = "UPDATE invoice_details SET paid =paid +'".$due."', due =due -'".$due."' WHERE invoice_id ='".$invoice_id."' ";
    $query = $conn->query($sql) or print(mysqli_error($conn));
    if ($query == true) {
      return true;  
    }else{
       return false;   
    }
    $conn->close(); 
}



 function insertSales($customer_name,$address_new,$customer_type,$receipt_date,$total,$invoice_no,$receipt_no,$mode_payment,$new_amountP,$due,$amount_in_words,$sales_rep){
      $conn = mysqli_connect($this->host, $this->user, $this->password, $this->DB);
      $customer_name = mysqli_escape_string($conn, htmlentities(trim($customer_name)));
      $address_new = mysqli_escape_string($conn, htmlentities(trim($address_new)));
      $customer_type = mysqli_escape_string($conn, htmlentities(trim($customer_type)));
      $receipt_date = mysqli_escape_string($conn, htmlentities(trim($receipt_date)));
      $invoice_no = mysqli_escape_string($conn, htmlentities(trim($invoice_no)));
      $receipt_no = mysqli_escape_string($conn, htmlentities(trim($receipt_no)));
      $amount_in_words = mysqli_escape_string($conn, htmlentities(trim($amount_in_words)));
      $total = mysqli_escape_string($conn, htmlentities(trim($total)));
      $mode_payment = mysqli_escape_string($conn, htmlentities(trim($mode_payment)));
      $new_amountP = mysqli_escape_string($conn, htmlentities(trim($new_amountP)));
      $due = mysqli_escape_string($conn, htmlentities(trim($due)));
      $sales_rep = mysqli_escape_string($conn, htmlentities(trim($sales_rep)));
      $sql = 'INSERT INTO sales_table(name,address,type,sales_date,total,invoice_no,receipt_no,mode_payment,amount_paid,due,amount_words,staff_id) VALUES (?,?,?,?,?,?,?,?,?,?,?,?)';
      $query         = $conn->prepare($sql);
      $query->bind_param('ssssssssssss',$customer_name,$address_new,$customer_type,$receipt_date,$total,$invoice_no,$receipt_no,$mode_payment,$new_amountP,$due,$amount_in_words,$sales_rep);
           if ($query->execute()){
                        return true;
                }else{
                      return false;
                     }
                      $conn->close(); 
}









 function insertSalesLog($invoice_no,$receipt_no,$sales_rep,$timex,$receipt_date,$newTotal,$new_amountP,$due){
      $conn = mysqli_connect($this->host, $this->user, $this->password, $this->DB);
      $invoice_no = mysqli_escape_string($conn, htmlentities(trim($invoice_no)));
      $receipt_no = mysqli_escape_string($conn, htmlentities(trim($receipt_no)));
      $timex = mysqli_escape_string($conn, htmlentities(trim($timex)));
      $receipt_date = mysqli_escape_string($conn, htmlentities(trim($receipt_date)));
      $newTotal = mysqli_escape_string($conn, htmlentities(trim($newTotal)));
      $new_amountP = mysqli_escape_string($conn, htmlentities(trim($new_amountP)));
      $due = mysqli_escape_string($conn, htmlentities(trim($due)));
      $sales_rep = mysqli_escape_string($conn, htmlentities(trim($sales_rep)));
      $sql = 'INSERT INTO sales_log(invoice_no,receipt_no,sales_rep,sales_time,sales_date,total,amount_paid,amount_due) VALUES (?,?,?,?,?,?,?,?)';
      $query         = $conn->prepare($sql);
      $query->bind_param('ssssssss',$invoice_no,$receipt_no,$sales_rep,$timex,$receipt_date,$newTotal,$new_amountP,$due);
           if ($query->execute()){
                        return true;
                }else{
                      return false;
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

function check_If_Email_Exist($table,$filled,$data){
         $conn = mysqli_connect($this->host, $this->user, $this->password, $this->DB);
         $sql = "SELECT * FROM $table WHERE $filled = '$data'";
         $query = $conn->query($sql) or print(mysqli_error($conn));
         $row = mysqli_num_rows($query);
            if ($row == true){
                return true;
            }else{
                return false;
          }
                $conn->close();
}




function check_If_Email_Exist22($table,$filled,$data,$filled1,$data1){
         $conn = mysqli_connect($this->host, $this->user, $this->password, $this->DB);
         $sql = "SELECT * FROM $table WHERE $filled = '$data' AND $filled1 = '$data1'";
         $query = $conn->query($sql) or print(mysqli_error($conn));
         $row = mysqli_num_rows($query);
            if ($row == true){
                return true;
            }else{
                return false;
          }
                $conn->close();
}


// function Get_bank_balance($data){
//          $conn = mysqli_connect($this->host, $this->user, $this->password, $this->DB);
//          $sql = "SELECT SUM(amount) FROM bank_log WHERE transaction_type='Credit' AND bank_id='$data'";
//          $query = $conn->query($sql) or print(mysqli_error($conn));
//          $row = mysqli_num_rows($query);
//            echo $row[0];
//          $conn->close();
// }

function Get_balanceCredit($data){
         $resultset = array();
         $conn = mysqli_connect($this->host, $this->user, $this->password, $this->DB);
         $sql = "SELECT SUM(credit) as credit FROM customer_ledger WHERE account_id='$data'";
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


function Get_balanceDebit($data){
         $resultset = array();
         $conn = mysqli_connect($this->host, $this->user, $this->password, $this->DB);
         $sql = "SELECT SUM(debit) as debit FROM customer_ledger WHERE account_id='$data'";
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
         $sql  = "SELECT * FROM customer_table";
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


function MeritsBeneficiary(){
         $resultset = array();
         $conn = mysqli_connect($this->host, $this->user, $this->password, $this->DB);
         $sql  = "SELECT * FROM merits_table";
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


function customer_ledger($account_id){
         $resultset = array();
         $conn = mysqli_connect($this->host, $this->user, $this->password, $this->DB);
         $sql  = "SELECT * FROM customer_ledger WHERE account_id ='$account_id'";
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





function GET_Staff(){
         $resultset = array();
         $conn = mysqli_connect($this->host, $this->user, $this->password, $this->DB);
         $sql  = "SELECT * FROM staff";
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


function GET_EmployeeRec(){
         $resultset = array();
         $conn = mysqli_connect($this->host, $this->user, $this->password, $this->DB);
         $sql  = "SELECT * FROM employee_info_record";
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


function GET_EmployeeVac(){
         $resultset = array();
         $conn = mysqli_connect($this->host, $this->user, $this->password, $this->DB);
         $sql  = "SELECT * FROM employee_vacation_record";
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


function GET_EmployeeTimeOff(){
         $resultset = array();
         $conn = mysqli_connect($this->host, $this->user, $this->password, $this->DB);
         $sql  = "SELECT * FROM timeoff_leave_record";
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



function GET_EmployeeDeciplinary(){
         $resultset = array();
         $conn = mysqli_connect($this->host, $this->user, $this->password, $this->DB);
         $sql  = "SELECT * FROM desciplinary_record";
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


function GET_EmployeeWriteup(){
         $resultset = array();
         $conn = mysqli_connect($this->host, $this->user, $this->password, $this->DB);
         $sql  = "SELECT * FROM employee_writeup_record";
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


function GET_EmployeeTrain(){
         $resultset = array();
         $conn = mysqli_connect($this->host, $this->user, $this->password, $this->DB);
         $sql  = "SELECT * FROM employee_training_record";
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



function GET_Credit_Purchase(){
         $resultset = array();
         $conn = mysqli_connect($this->host, $this->user, $this->password, $this->DB);
         $sql  = "SELECT * FROM purchase_log WHERE amount_due > 0";
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


function Staff_Payroll(){
         $resultset = array();
         $conn = mysqli_connect($this->host, $this->user, $this->password, $this->DB);
         $sql  = "SELECT * FROM payroll_log";
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



function ChartAccount(){
         $resultset = array();
         $conn = mysqli_connect($this->host, $this->user, $this->password, $this->DB);
         $sql  = "SELECT * FROM chart_of_account WHERE account_id !='2008_PURCHASE' AND account_id !='2000_CREDIT_PURCHASE' ";
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


function Staff_PayrollW(){
         $resultset = array();
         $conn = mysqli_connect($this->host, $this->user, $this->password, $this->DB);
         $sql  = "SELECT * FROM workers_payroll_log";
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






function Fetch_All_CashReceipt(){
         $resultset = array();
         $conn = mysqli_connect($this->host, $this->user, $this->password, $this->DB);
         $sql  = "SELECT * FROM invoice ORDER BY `invoice_date` DESC";
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

function Fetch_All_unsettled(){
         $resultset = array();
         $conn = mysqli_connect($this->host, $this->user, $this->password, $this->DB);
         $sql  = "SELECT * FROM invoice WHERE status='unsettled' ORDER BY `invoice_date` DESC";
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



function Fetch_All_Transport(){
         $resultset = array();
         $conn = mysqli_connect($this->host, $this->user, $this->password, $this->DB);
         $sql  = "SELECT * FROM transportation ORDER BY `datex` DESC";
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


function Fetch_All_Sticker(){
         $resultset = array();
         $conn = mysqli_connect($this->host, $this->user, $this->password, $this->DB);
         $sql  = "SELECT * FROM sticker_log ORDER BY `datetx` DESC";
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


function Fetch_All_Polo(){
         $resultset = array();
         $conn = mysqli_connect($this->host, $this->user, $this->password, $this->DB);
         $sql  = "SELECT * FROM polo_log ORDER BY `datetx` DESC";
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


function My_DAILYInvoice(){
      $conn = mysqli_connect($this->host,$this->user,$this->password,$this->DB);
         $q="SELECT COUNT(id) FROM invoice WHERE  invoice_date  =current_date";
              $que=$conn->query($q)or print(mysqli_error($conn));
                  $count=mysqli_fetch_row($que);
                      echo $count[0];
         $conn->close();
    }


    function My_DAILYSupplied(){
      $conn = mysqli_connect($this->host,$this->user,$this->password,$this->DB);
         $q="SELECT COUNT(id) FROM invoice WHERE  invoice_date  =current_date AND state ='supplied'";
              $que=$conn->query($q)or print(mysqli_error($conn));
                  $count=mysqli_fetch_row($que);
                      echo $count[0];
         $conn->close();
    }


     function My_DAILYNotSupplied(){
      $conn = mysqli_connect($this->host,$this->user,$this->password,$this->DB);
         $q="SELECT COUNT(id) FROM invoice WHERE  invoice_date  =current_date AND state ='not_supplied'";
              $que=$conn->query($q)or print(mysqli_error($conn));
                  $count=mysqli_fetch_row($que);
                      echo $count[0];
         $conn->close();
    }


    function My_DAILYCashReceipt(){
      $conn = mysqli_connect($this->host,$this->user,$this->password,$this->DB);
         $q="SELECT COUNT(id) FROM sales_table WHERE  sales_date  =current_date";
              $que=$conn->query($q)or print(mysqli_error($conn));
                  $count=mysqli_fetch_row($que);
                      echo $count[0];
         $conn->close();
    }



    function My_DAILYTotalAmount(){
      $conn = mysqli_connect($this->host,$this->user,$this->password,$this->DB);
         $q="SELECT SUM(total) FROM sales_table WHERE  sales_date=current_date";
              $que=$conn->query($q)or print(mysqli_error($conn));
                  $count=mysqli_fetch_row($que);
                      echo $count[0];
         $conn->close();
      }



 function My_DAILYProSachetWater(){
      $conn = mysqli_connect($this->host,$this->user,$this->password,$this->DB);
         $q="SELECT SUM(quantity) FROM stock_log WHERE  datetx  =current_date AND name ='Sachet Water'";
              $que=$conn->query($q)or print(mysqli_error($conn));
                  $count=mysqli_fetch_row($que);
                      echo $count[0];
         $conn->close();
    }


     function My_DAILYProBottleWater50(){
      $conn = mysqli_connect($this->host,$this->user,$this->password,$this->DB);
         $q="SELECT SUM(quantity) FROM stock_log WHERE  datetx  =current_date AND name ='Bottled Water 50cl'";
              $que=$conn->query($q)or print(mysqli_error($conn));
                  $count=mysqli_fetch_row($que);
                      echo $count[0];
         $conn->close();
    }

     function My_DAILYProBottleWater75(){
      $conn = mysqli_connect($this->host,$this->user,$this->password,$this->DB);
         $q="SELECT SUM(quantity) FROM stock_log WHERE  datetx  =current_date AND name ='Bottled Water 75cl'";
              $que=$conn->query($q)or print(mysqli_error($conn));
                  $count=mysqli_fetch_row($que);
                      echo $count[0];
         $conn->close();
    }


      function My_DAILYProBottleWater1_5lt(){
      $conn = mysqli_connect($this->host,$this->user,$this->password,$this->DB);
         $q="SELECT SUM(quantity) FROM stock_log WHERE  datetx  =current_date AND name ='Bottled Water 1.5litre'";
              $que=$conn->query($q)or print(mysqli_error($conn));
                  $count=mysqli_fetch_row($que);
                      echo $count[0];
         $conn->close();
    }


      function My_DAILYProDispenser(){
      $conn = mysqli_connect($this->host,$this->user,$this->password,$this->DB);
         $q="SELECT SUM(quantity) FROM stock_log WHERE  datetx  =current_date AND name ='Dispenser'";
              $que=$conn->query($q)or print(mysqli_error($conn));
                  $count=mysqli_fetch_row($que);
                      echo $count[0];
         $conn->close();
    }




function My_DAILYProSachetWaterqty(){
      $conn = mysqli_connect($this->host,$this->user,$this->password,$this->DB);
         $q="SELECT SUM(sachet_water_quantity) FROM invoice WHERE  invoice_date  =current_date AND sachet_water_name ='Sachet Water'";
              $que=$conn->query($q)or print(mysqli_error($conn));
                  $count=mysqli_fetch_row($que);
                      echo $count[0];
         $conn->close();
    }


     function My_DAILYProBottleWater50qty(){
      $conn = mysqli_connect($this->host,$this->user,$this->password,$this->DB);
       $q="SELECT SUM(bottle_water_50_quantity) FROM invoice WHERE  invoice_date  =current_date AND bottle_water_50_name ='Bottled Water 50cl'";
              $que=$conn->query($q)or print(mysqli_error($conn));
                  $count=mysqli_fetch_row($que);
                      echo $count[0];
         $conn->close();
    }

     function My_DAILYProBottleWater75qty(){
      $conn = mysqli_connect($this->host,$this->user,$this->password,$this->DB);
    $q="SELECT SUM(bottle_water_75_quantity) FROM invoice WHERE  invoice_date  =current_date AND bottle_water_75_name ='Bottled Water 75cl'";
              $que=$conn->query($q)or print(mysqli_error($conn));
                  $count=mysqli_fetch_row($que);
                      echo $count[0];
         $conn->close();
    }


      function My_DAILYProBottleWater1_5ltqty(){
      $conn = mysqli_connect($this->host,$this->user,$this->password,$this->DB);

$q="SELECT SUM(bottle_water_1_5lt_quantity) FROM invoice WHERE  invoice_date  =current_date AND bottle_water_1_5lt_name ='Bottled Water 1.5litre'";
              $que=$conn->query($q)or print(mysqli_error($conn));
                  $count=mysqli_fetch_row($que);
                      echo $count[0];
         $conn->close();
    }


      function My_DAILYProDispenserqty(){
      $conn = mysqli_connect($this->host,$this->user,$this->password,$this->DB);
$q="SELECT SUM(dispenser_quantity) FROM invoice WHERE  invoice_date  =current_date AND dispenser_name ='Dispenser'";
              $que=$conn->query($q)or print(mysqli_error($conn));
                  $count=mysqli_fetch_row($que);
                      echo $count[0];
         $conn->close();
    }


         function My_DAILYProcus50qty(){
      $conn = mysqli_connect($this->host,$this->user,$this->password,$this->DB);
$q="SELECT SUM(customized_50_quantity) FROM invoice WHERE  invoice_date  =current_date AND customized_50_name ='50cl Customized'";
              $que=$conn->query($q)or print(mysqli_error($conn));
                  $count=mysqli_fetch_row($que);
                      echo $count[0];
         $conn->close();
    }


     function My_DAILYProCus75rqty(){
      $conn = mysqli_connect($this->host,$this->user,$this->password,$this->DB);
$q="SELECT SUM(customized_75_quantity) FROM invoice WHERE  invoice_date  =current_date AND customized_75_name ='75cl Customized'";
              $que=$conn->query($q)or print(mysqli_error($conn));
                  $count=mysqli_fetch_row($que);
                      echo $count[0];
         $conn->close();
    }



function My_DAILYProSachetWatersup(){
      $conn = mysqli_connect($this->host,$this->user,$this->password,$this->DB);
         $q="SELECT SUM(sachet_water_quantity) FROM invoice WHERE  invoice_date  =current_date AND sachet_water_name ='Sachet Water' AND state='supplied'";
              $que=$conn->query($q)or print(mysqli_error($conn));
                  $count=mysqli_fetch_row($que);
                      echo $count[0];
         $conn->close();
    }


     function My_DAILYProBottleWater50sup(){
      $conn = mysqli_connect($this->host,$this->user,$this->password,$this->DB);
       $q="SELECT SUM(bottle_water_50_quantity) FROM invoice WHERE  invoice_date  =current_date AND bottle_water_50_name ='Bottled Water 50cl' AND state='supplied'";
              $que=$conn->query($q)or print(mysqli_error($conn));
                  $count=mysqli_fetch_row($que);
                      echo $count[0];
         $conn->close();
    }

     function My_DAILYProBottleWater75sup(){
      $conn = mysqli_connect($this->host,$this->user,$this->password,$this->DB);
    $q="SELECT SUM(bottle_water_75_quantity) FROM invoice WHERE  invoice_date  =current_date AND bottle_water_75_name ='Bottled Water 75cl' AND state='supplied'";
              $que=$conn->query($q)or print(mysqli_error($conn));
                  $count=mysqli_fetch_row($que);
                      echo $count[0];
         $conn->close();
    }


      function My_DAILYProBottleWater1_5ltsup(){
      $conn = mysqli_connect($this->host,$this->user,$this->password,$this->DB);

$q="SELECT SUM(bottle_water_1_5lt_quantity) FROM invoice WHERE  invoice_date  =current_date AND bottle_water_1_5lt_name ='Bottled Water 1.5litre' AND state='supplied'";
              $que=$conn->query($q)or print(mysqli_error($conn));
                  $count=mysqli_fetch_row($que);
                      echo $count[0];
         $conn->close();
    }


      function My_DAILYProDispensersup(){
      $conn = mysqli_connect($this->host,$this->user,$this->password,$this->DB);
$q="SELECT SUM(dispenser_quantity) FROM invoice WHERE  invoice_date  =current_date AND dispenser_name ='Dispenser' AND state='supplied'";
              $que=$conn->query($q)or print(mysqli_error($conn));
                  $count=mysqli_fetch_row($que);
                      echo $count[0];
         $conn->close();
    }


         function My_DAILYProcus50sup(){
      $conn = mysqli_connect($this->host,$this->user,$this->password,$this->DB);
$q="SELECT SUM(customized_50_quantity) FROM invoice WHERE  invoice_date  =current_date AND customized_50_name ='50cl Customized' AND state='supplied'";
              $que=$conn->query($q)or print(mysqli_error($conn));
                  $count=mysqli_fetch_row($que);
                      echo $count[0];
         $conn->close();
    }


     function My_DAILYProCus75rsup(){
      $conn = mysqli_connect($this->host,$this->user,$this->password,$this->DB);
$q="SELECT SUM(customized_75_quantity) FROM invoice WHERE  invoice_date  =current_date AND customized_75_name ='75cl Customized' AND state='supplied'";
              $que=$conn->query($q)or print(mysqli_error($conn));
                  $count=mysqli_fetch_row($que);
                      echo $count[0];
         $conn->close();
    }






function My_DAILYProSachetWaterA(){
      $conn = mysqli_connect($this->host,$this->user,$this->password,$this->DB);
         $q="SELECT SUM(subtotal_sachet_water) FROM invoice WHERE  invoice_date  =current_date AND sachet_water_name ='Sachet Water' AND status='settled'";
              $que=$conn->query($q)or print(mysqli_error($conn));
                  $count=mysqli_fetch_row($que);
                      echo $count[0];
         $conn->close();
    }


     function My_DAILYProBottleWater50A(){
      $conn = mysqli_connect($this->host,$this->user,$this->password,$this->DB);
       $q="SELECT SUM(subtotal_bottle_water_50) FROM invoice WHERE  invoice_date  =current_date AND bottle_water_50_name ='Bottled Water 50cl' AND status='settled'";
              $que=$conn->query($q)or print(mysqli_error($conn));
                  $count=mysqli_fetch_row($que);
                      echo $count[0];
         $conn->close();
    }

     function My_DAILYProBottleWater75A(){
      $conn = mysqli_connect($this->host,$this->user,$this->password,$this->DB);
    $q="SELECT SUM(subtotal_bottle_water_75) FROM invoice WHERE  invoice_date  =current_date AND bottle_water_75_name ='Bottled Water 75cl' AND status='settled'";
              $que=$conn->query($q)or print(mysqli_error($conn));
                  $count=mysqli_fetch_row($que);
                      echo $count[0];
         $conn->close();
    }


      function My_DAILYProBottleWater1_5ltA(){
      $conn = mysqli_connect($this->host,$this->user,$this->password,$this->DB);

$q="SELECT SUM(subtotal_bottle_water_one_fivelt) FROM invoice WHERE  invoice_date  =current_date AND bottle_water_1_5lt_name ='Bottled Water 1.5litre' AND status='settled'";
              $que=$conn->query($q)or print(mysqli_error($conn));
                  $count=mysqli_fetch_row($que);
                      echo $count[0];
         $conn->close();
    }


      function My_DAILYProDispenserA(){
      $conn = mysqli_connect($this->host,$this->user,$this->password,$this->DB);
$q="SELECT SUM(subtotal_dispenser) FROM invoice WHERE  invoice_date  =current_date AND dispenser_name ='Dispenser' AND status='settled'";
              $que=$conn->query($q)or print(mysqli_error($conn));
                  $count=mysqli_fetch_row($que);
                      echo $count[0];
         $conn->close();
    }


         function My_DAILYProcus50A(){
      $conn = mysqli_connect($this->host,$this->user,$this->password,$this->DB);
$q="SELECT SUM(subtotal_bottle_customized_50) FROM invoice WHERE  invoice_date  =current_date AND customized_50_name ='50cl Customized' AND status='settled'";
              $que=$conn->query($q)or print(mysqli_error($conn));
                  $count=mysqli_fetch_row($que);
                      echo $count[0];
         $conn->close();
    }


     function My_DAILYProCus75rA(){
      $conn = mysqli_connect($this->host,$this->user,$this->password,$this->DB);
$q="SELECT SUM(subtotal_bottle_customized_75) FROM invoice WHERE  invoice_date  =current_date AND customized_75_name ='75cl Customized' AND status='settled'";
              $que=$conn->query($q)or print(mysqli_error($conn));
                  $count=mysqli_fetch_row($que);
                      echo $count[0];
         $conn->close();
    }







function My_Count_Fetchstock($table){
      $conn = mysqli_connect($this->host,$this->user,$this->password,$this->DB);
         $q="SELECT COUNT(item_code) FROM $table WHERE status='instock'";
              $que=$conn->query($q)or print(mysqli_error($conn));
                  $count=mysqli_fetch_row($que);
                      echo number_format($count[0]);
         $conn->close();
      }




function My_Count_Fetchstockamount($table){
      $conn = mysqli_connect($this->host,$this->user,$this->password,$this->DB);
         $q="SELECT SUM(total) FROM $table";
              $que=$conn->query($q)or print(mysqli_error($conn));
                  $count=mysqli_fetch_row($que);
                      echo number_format($count[0]);
         $conn->close();
      }



      function My_Count_FetchstockCust($table){
      $conn = mysqli_connect($this->host,$this->user,$this->password,$this->DB);
         $q="SELECT COUNT(customer_code) FROM $table";
              $que=$conn->query($q)or print(mysqli_error($conn));
                  $count=mysqli_fetch_row($que);
                      echo $count[0];
         $conn->close();
      }

// function My_Count_Fetchiincom($table){
//       $conn = mysqli_connect($this->host,$this->user,$this->password,$this->DB);
//          $q="SELECT SUM(total) FROM $table WHERE  order_date=current_date";
//               $que=$conn->query($q)or print(mysqli_error($conn));
//                   $count=mysqli_fetch_row($que);
//                       echo $count[0];
//          $conn->close();
//       }

      function My_Count_Recived_Amount(){
      $conn = mysqli_connect($this->host,$this->user,$this->password,$this->DB);
         $q="SELECT SUM(amount) FROM account_log WHERE transaction_source='CREDIT SALES' AND transaction_date  =current_date";
              $que=$conn->query($q)or print(mysqli_error($conn));
                  $count=mysqli_fetch_row($que);
                      echo number_format($count[0]);
         $conn->close();
      }



      function My_Count_Expense(){
      $conn = mysqli_connect($this->host,$this->user,$this->password,$this->DB);
         $q="SELECT SUM(amount) FROM account_log WHERE transaction_source='Expense' AND transaction_date  =current_date";
              $que=$conn->query($q)or print(mysqli_error($conn));
                  $count=mysqli_fetch_row($que);
                      echo number_format($count[0]);
         $conn->close();
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

function My_Count_FetchLOWS($table){
      $conn = mysqli_connect($this->host,$this->user,$this->password,$this->DB);
         $q="SELECT COUNT(low_stock_level) FROM $table WHERE low_stock_level < 1";
              $que=$conn->query($q)or print(mysqli_error($conn));
                  $count=mysqli_fetch_row($que);
                  if($count == true){
                      echo $count[0];
                  }else{
                    echo "Nothing";
                  }

         $conn->close();
      }

// function My_Count_Fetchtotal($table){
//       $conn = mysqli_connect($this->host,$this->user,$this->password,$this->DB);
//          $q="SELECT COUNT(id) FROM $table WHERE  sales_date  =current_date";
//               $que=$conn->query($q)or print(mysqli_error($conn));
//                   $count=mysqli_fetch_row($que);
//                       echo $count[0];
//          $conn->close();
//     }

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



function daily_purchase(){
         $resultset = array();
         $conn = mysqli_connect($this->host, $this->user, $this->password, $this->DB);
         $sql  = "SELECT * FROM purchase_log WHERE  DATE(created_at)=current_date";
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


function daily_Expense(){
         $resultset = array();
         $conn = mysqli_connect($this->host, $this->user, $this->password, $this->DB);
         $sql  = "SELECT * FROM request_table WHERE  request_date =current_date AND status='Approved'";
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



function daily_Waybill(){
         $resultset = array();
         $conn = mysqli_connect($this->host, $this->user, $this->password, $this->DB);
         $sql  = "SELECT * FROM waybill WHERE  datex=current_date AND status='delivered'";
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




function daily_stock(){
         $resultset = array();
         $conn = mysqli_connect($this->host, $this->user, $this->password, $this->DB);

         $sql  = "SELECT * FROM stockin WHERE DATE(created_date)=current_date";
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



function daily_payroll(){
         $resultset = array();
         $conn = mysqli_connect($this->host, $this->user, $this->password, $this->DB);

         $sql  = "SELECT * FROM payroll_log WHERE DATE(created_at)=current_date";
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



function daily_visit(){
         $resultset = array();
         $conn = mysqli_connect($this->host, $this->user, $this->password, $this->DB);

         $sql  = "SELECT * FROM visit_table WHERE visit_day=current_date";
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



function daily_return(){
         $resultset = array();
         $conn = mysqli_connect($this->host, $this->user, $this->password, $this->DB);

         $sql  = "SELECT * FROM return_table WHERE return_date=current_date";
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




function daily_vocherPay(){
         $resultset = array();
         $conn = mysqli_connect($this->host, $this->user, $this->password, $this->DB);

         $sql  = "SELECT * FROM payment_voucher WHERE voucher_date=current_date";
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


function daily_vocherRec(){
         $resultset = array();
         $conn = mysqli_connect($this->host, $this->user, $this->password, $this->DB);

         $sql  = "SELECT * FROM receipt_voucher WHERE voucher_date=current_date";
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




function get_last_Balance($account_id){
         $resultset = array();
         $conn = mysqli_connect($this->host, $this->user, $this->password, $this->DB);
         $sql  = "SELECT * FROM customer_ledger WHERE  account_id ='$account_id' ORDER BY balance DESC limit 1";
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

function get_last_BalanceDebit($account_id){
         $resultset = array();
         $conn = mysqli_connect($this->host, $this->user, $this->password, $this->DB);
         $sql  = "SELECT * FROM customer_ledger WHERE  account_id ='$account_id' ORDER BY debit DESC limit 1";
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

function get_Purchase_quantity($material_name){
         $resultset = array();
         $conn = mysqli_connect($this->host, $this->user, $this->password, $this->DB);
         $sql  = "SELECT quantity FROM purchase_material_table WHERE material_name ='$material_name'";
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




    function Count_Active_Account_Number($table){
      $conn = mysqli_connect($this->host,$this->user,$this->password,$this->DB);
         $q="SELECT COUNT(`id`) FROM $table WHERE status='Active'";
              $que=$conn->query($q)or print(mysqli_error($conn));
                  $count=mysqli_fetch_row($que);
                      echo $count[0];
         $conn->close();
      }



     function Count_inActive_Account_Number($table){
      $conn = mysqli_connect($this->host,$this->user,$this->password,$this->DB);
         $q="SELECT COUNT(`id`) FROM $table WHERE status='disable'";
              $que=$conn->query($q)or print(mysqli_error($conn));
                  $count=mysqli_fetch_row($que);
                      echo $count[0];
         $conn->close();
      }



     function Count_Closed_Account_Number($table){
      $conn = mysqli_connect($this->host,$this->user,$this->password,$this->DB);
         $q="SELECT COUNT(`id`) FROM $table WHERE status='closed'";
              $que=$conn->query($q)or print(mysqli_error($conn));
                  $count=mysqli_fetch_row($que);
                      echo $count[0];
         $conn->close();
     }




function My_Count_Fetch($table){
      $conn = mysqli_connect($this->host,$this->user,$this->password,$this->DB);
         $q="SELECT COUNT(`id`) FROM $table";
              $que=$conn->query($q)or print(mysqli_error($conn));
                  $count=mysqli_fetch_row($que);
                      echo $count[0];
         $conn->close();
      }

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




    function Targeted_informationSachet($table,$field,$data){
         $conn = mysqli_connect($this->host, $this->user, $this->password, $this->DB);
         $sql = ("SELECT * FROM $table WHERE $field = '$data' ORDER BY id DESC LIMIT 1");
         $query = $conn->query($sql) or print(mysqli_error($conn));
         $row = mysqli_fetch_array($query);
             if($query == true){
                    return $row;
                }else{
                    return false;
                    }
        $conn->close();
    }




function get_diesel_last_balance($table){
         $conn = mysqli_connect($this->host, $this->user, $this->password, $this->DB);
         $sql = ("SELECT * FROM $table ORDER BY id DESC LIMIT 1");
         $query = $conn->query($sql) or print(mysqli_error($conn));
         $row = mysqli_fetch_array($query);
             if($query == true){
                    return $row;
                }else{
                    return false;
                    }
        $conn->close();
    }

function Targeted_information_workrs($table,$field,$data){
         $conn = mysqli_connect($this->host, $this->user, $this->password, $this->DB);
         $sql = ("SELECT SUM(amount_each) as totalamount, names FROM $table WHERE $field = '$data' AND status ='not_paid' GROUP BY names");
         $query = $conn->query($sql) or print(mysqli_error($conn));
         $row = mysqli_fetch_array($query);
             if($query == true){
                    return $row;
                }else{
                    return false;
                    }
        $conn->close();
    }

function Fetch_Priviledge_Assigned($table,$data){
    $resultset= array();
      $conn = mysqli_connect($this->host,$this->user,$this->password,$this->DB);
        $sql = "SELECT * FROM $table WHERE role='$data'";
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

function Targeted_information2($table, $colum, $data, $column1, $data1){
         $conn = mysqli_connect($this->host, $this->user, $this->password, $this->DB);
         $sql = ("SELECT * FROM $table WHERE $colum ='$data' AND $column1='$data1' ");
         $query = $conn->query($sql) or print(mysqli_error($conn));
         $row = mysqli_fetch_array($query);
             if($query == true){
                    return $row;
                }else{
                    return false;
                    }
        $conn->close();
    }


function fetch_staff_loan_paid_single( $colum, $data, $column1, $data1){
        $SpecifiedData = DB::select("select * from  payroll  WHERE $colum='$data' AND status='Unapprove' AND loan_repay !='0.00' AND $column1='$data1' ");
        return $SpecifiedData;
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



// function insertRecordMarketer($datex,$staff_name,$newStaff,$product_name,$product_code,$goods_description,$description,$category,$price,$quantity,$newTotal,$invoice_id,$pro_satuan,$vehicle_no){
//       $conn = mysqli_connect($this->host, $this->user, $this->password, $this->DB);
//       $datex = mysqli_escape_string($conn, htmlentities(trim($datex)));
//       $staff_name = mysqli_escape_string($conn, htmlentities(trim($staff_name)));
//       $newStaff = mysqli_escape_string($conn, htmlentities(trim($newStaff)));
//       $product_name  = mysqli_escape_string($conn, htmlentities(trim($product_name)));
//       $product_code = mysqli_escape_string($conn, htmlentities(trim($product_code)));
//       $description = mysqli_escape_string($conn, htmlentities(trim($description)));
//       $goods_description = mysqli_escape_string($conn, htmlentities(trim($goods_description)));
//       $category = mysqli_escape_string($conn, htmlentities(trim($category)));
//       $price = mysqli_escape_string($conn, htmlentities(trim($price)));
//       $quantity = mysqli_escape_string($conn, htmlentities(trim($quantity)));
//       $newTotal = mysqli_escape_string($conn, htmlentities(trim($newTotal)));
//       $invoice_id = mysqli_escape_string($conn, htmlentities(trim($invoice_id)));
//       $pro_satuan = mysqli_escape_string($conn, htmlentities(trim($pro_satuan)));
//       $vehicle_no = mysqli_escape_string($conn, htmlentities(trim($vehicle_no)));
//       $sql = 'INSERT INTO marketer_sales(sales_date,marketer_name,staff_id,product_name,product_id,goods_description,description,category,price,quantity,total,invoice_id,type,vehicle_no) VALUES (?,?,?,?,?,?,?,?,?,?,?,?,?,?)';
//       $query = $conn->prepare($sql);
//       $query->bind_param('ssssssssssssss',$datex,$staff_name,$newStaff,$product_name,$product_code,$goods_description,$description,$category,$price,$quantity,$newTotal,$invoice_id,$pro_satuan,$vehicle_no);
//            if ($query->execute()){
//                         return true;
//                 }else{
//                       return false;
//  }
// }

function insertRecordMarketer($datex,$marketr_name,$newStaff,$product_name,$product_code,$goods_description,$description,$category,$price,$quantity,$newTotal,$invoice_id,$pro_satuan,$vehicle_no){
      $conn = mysqli_connect($this->host, $this->user, $this->password, $this->DB);
      $datex = mysqli_escape_string($conn, htmlentities(trim($datex)));
      $marketr_name = mysqli_escape_string($conn, htmlentities(trim($marketr_name)));
      $newStaff = mysqli_escape_string($conn, htmlentities(trim($newStaff)));
      $product_name  = mysqli_escape_string($conn, htmlentities(trim($product_name)));
      $product_code = mysqli_escape_string($conn, htmlentities(trim($product_code)));
      $description = mysqli_escape_string($conn, htmlentities(trim($description)));
      $goods_description = mysqli_escape_string($conn, htmlentities(trim($goods_description)));
      $category = mysqli_escape_string($conn, htmlentities(trim($category)));
      $price = mysqli_escape_string($conn, htmlentities(trim($price)));
      $quantity = mysqli_escape_string($conn, htmlentities(trim($quantity)));
      $newTotal = mysqli_escape_string($conn, htmlentities(trim($newTotal)));
      $invoice_id = mysqli_escape_string($conn, htmlentities(trim($invoice_id)));
      $pro_satuan = mysqli_escape_string($conn, htmlentities(trim($pro_satuan)));
      $vehicle_no = mysqli_escape_string($conn, htmlentities(trim($vehicle_no)));
      $sql = 'INSERT INTO marketer_sales(sales_date,marketer_name,staff_id,product_name,product_id,goods_description,description,category,price,quantity,total,invoice_id,type,vehicle_no) VALUES (?,?,?,?,?,?,?,?,?,?,?,?,?,?)';
      $query         = $conn->prepare($sql);
      $query->bind_param('ssssssssssssss',$datex,$marketr_name,$newStaff,$product_name,$product_code,$goods_description,$description,$category,$price,$quantity,$newTotal,$invoice_id,$pro_satuan,$vehicle_no);
           if ($query->execute()){
                        return true;
                }else{
                      return false;
 }
}


function insertStaffLoan($borrowed_date,$staff_fullname,$staff_id,$loan_type,$tenure,$reference_no,$description,$amount,$amount_paid,$status,$user){
      $conn = mysqli_connect($this->host, $this->user, $this->password, $this->DB);
      $borrowed_date = mysqli_escape_string($conn, htmlentities(trim($borrowed_date)));
      $staff_fullname = mysqli_escape_string($conn, htmlentities(trim($staff_fullname)));
      $staff_id    = mysqli_escape_string($conn, htmlentities(trim($staff_id)));
      $loan_type    = mysqli_escape_string($conn, htmlentities(trim($loan_type)));
      $tenure = mysqli_escape_string($conn, htmlentities(trim($tenure)));
      $reference_no     = mysqli_escape_string($conn, htmlentities(trim($reference_no)));
      $description = mysqli_escape_string($conn, htmlentities(trim($description)));
      $amount = mysqli_escape_string($conn, htmlentities(trim($amount)));
      $amount_paid = mysqli_escape_string($conn, htmlentities(trim($amount_paid)));
      $status = mysqli_escape_string($conn, htmlentities(trim($status)));
      $user = mysqli_escape_string($conn, htmlentities(trim($user)));
      $sql = 'INSERT INTO staff_loan_table(borrowed_date,staff_name,staff_id,loan_type,tenure,reference_no,description,amount,amount_paid,status,by_staff) VALUES (?,?,?,?,?,?,?,?,?,?,?)';
      $query         = $conn->prepare($sql);
      $query->bind_param('sssssssssss',$borrowed_date,$staff_fullname,$staff_id,$loan_type,$tenure,$reference_no,$description,$amount,$amount_paid,$status,$user);
           if ($query->execute()){
                        return true;
                }else{
                      return false;
                     }
                      $conn->close(); 
}       



function allLoan(){
   $conn = mysqli_connect($this->host, $this->user, $this->password, $this->DB);
   $resultset = array();
   $sql = ("SELECT *, DATE_FORMAT(created_at, '%H:%i:%s') AS time_created_at FROM staff_loan_table ORDER BY borrowed_date DESC ");
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


function allLoanstaff($data){
   $conn = mysqli_connect($this->host, $this->user, $this->password, $this->DB);
   $resultset = array();
   $sql = ("SELECT * FROM staff_loan_table WHERE staff_id='$data' ORDER BY borrowed_date DESC ");
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


function selectStaffWorkers($table){
   $conn = mysqli_connect($this->host, $this->user, $this->password, $this->DB);
   $sql  = "SELECT * FROM $table WHERE position='Worker' ";
   $query= $conn->query($sql); 
       while($fetch=$query->fetch_assoc()){
      echo '<option class="dropdown-item">'.$fetch['firstname']." ".$fetch['lastname']."-".$fetch['staff_id'].'</option>';
        
    }
  $conn->close();     
}


function other_email($receiver,$subject,$msg_body){

require_once 'PHPMailer-5.2-stable/PHPMailerAutoload.php';
$mail = new PHPMailer(true);                              
try {
    //Server settings
    $mail->SMTPDebug = 0;
    $mail->isSMTP();
    $mail->Host = 'mail.cpalumglobalimpex.com';
    // $mail->Host = 'zengaintrade.cc';
    $mail->SMTPAuth = true;
    $mail->Username = 'admin@cpalumglobalimpex.com';
    $mail->Password = 'Yx!8mY6l?#Ea';
   // $mail->Username = 'aqua@paraclete.zengaintrade.cc';
   // $mail->Password = 'in;1Dku?*3.Y';
    $mail->SMTPSecure = 'ssl';
    $mail->Port = 465;
    //Recipients
    $mail->setFrom('admin@cpalumglobalimpex.com', 'CP ALUM GLOBAL & IMPEX');
     // $mail->setFrom('aqua@paraclete.zengaintrade.cc', 'Paraclete Table Water');
    $mail->addAddress($receiver);

    //Content
    // $mail->isHTML(true);
    // $mail->Subject = 'Test Email body';
    // $mail->Body    = 'Test Email body';
    // $mail->AltBody = 'Test Email body';
     $mail->isHTML(true);                                  // Set email format to HTML
        $mail->Subject = $subject;
        $mail->Body    = '
        <div class="header" style="background-color:white;color:white;" >CP ALUM GLOBAL & IMPEX</div>
        <div id="me" style="background-color:#F5F5F5; height:auto;width:auto; padding:18px;">'.$msg_body.'</div>';
          $mail->AltBody = 'Test Email body';

    $mail->send();
    return "SUCCESS";
} catch (Exception $e) {
    return "FAIL";
    // Use the line below to display error
    // echo 'Mailer Error: ' . $mail->ErrorInfo;
}   



}



function AUTOMATIC_SMS_API($customer_phone, $msg_body){
        $username = 'philipchibuike1@gmail.com';
        $password = 'Iheanacho@22';
        // $sender = 'Paraclete';
        $sender = 'CP ALUM GI';
        $message = $msg_body;
        // Separate multiple numbers by comma
        $mobiles =  $customer_phone;
        // Set your domain's API URL
        $api_url = 'https://account.kudisms.net/api/';
        //Create the message data

        $data = array('username' => $username, 'password' => $password, 'sender' => $sender,   'message' => $message, 'mobiles' => $mobiles);
        //URL encode the message data
        $data = http_build_query($data);
        //Send the message

        // $request = $api_url . '?' . $data;
        // $result = file_get_contents($request);

         $ch = curl_init(); // Initialize a cURL connection

         curl_setopt($ch,CURLOPT_URL, $api_url);
         curl_setopt($ch,CURLOPT_RETURNTRANSFER, true);
         curl_setopt($ch,CURLOPT_POST, true);
         curl_setopt($ch,CURLOPT_POSTFIELDS, $data);

         $result = curl_exec($ch);

         $result = json_decode($result);
        if (isset($result->status) && strtoupper($result->status) == 'OK') {
            // Message sent successfully, do anything here

        // $_this = new self;
        // $_this->SMS_charges_store($result->price,'Other Sms', $phoneNumber, $messageBody);

        } else if (isset($result->error)) {
            // Message failed, check reason.
            echo 'Message failed - error: ' . $result->error;
        } else {
            // Could not determine the message response.
            echo 'Unable to process request';
        }

   
}



 // function AUTOMATIC_SMS_API($customer_phone, $msg_body){
 //        $username = 'philipchibuike1@gmail.com';
 //        $password = 'Iheanacho@22';
 //        $sender = 'Paraclete';
 //        // $sender = 'CP ALUM G&I';
 //        $message = $msg_body;
 //        // Separate multiple numbers by comma
 //        $mobiles =  $customer_phone;
 //        // Set your domain's API URL
 //        $api_url = 'https://account.kudisms.net/api/';
 //        //Create the message data

 //        $data = array('username' => $username, 'password' => $password, 'sender' => $sender,   'message' => $message, 'mobiles' => $mobiles);
 //        //URL encode the message data
 //        $data = http_build_query($data);
 //        //Send the message

 //        // $request = $api_url . '?' . $data;
 //        // $result = file_get_contents($request);

 //         $ch = curl_init(); // Initialize a cURL connection

 //         curl_setopt($ch,CURLOPT_URL, $api_url);
 //         curl_setopt($ch,CURLOPT_RETURNTRANSFER, true);
 //         curl_setopt($ch,CURLOPT_POST, true);
 //         curl_setopt($ch,CURLOPT_POSTFIELDS, $data);

 //         $result = curl_exec($ch);

 //         $result = json_decode($result);
 //        if (isset($result->status) && strtoupper($result->status) == 'OK') {
 //            // Message sent successfully, do anything here
   
 //        // $_this = new self;
 //        // $_this->SMS_charges_store($result->price,'Other Sms', $phoneNumber, $messageBody);

 //        } else if (isset($result->error)) {
 //            // Message failed, check reason.
 //            echo 'Message failed - error: ' . $result->error;
 //        } else {
 //            // Could not determine the message response.
 //            echo 'Unable to process request';
 //        }

   
// }


   // function Get_invoice_grand_due($data){
   //    $conn = mysqli_connect($this->host,$this->user,$this->password,$this->DB);
   //       $q="SELECT SUM(due) FROM invoice_details WHERE  invoice_id  ='$data' ";
   //            $que=$conn->query($q)or print(mysqli_error($conn));
   //                $count=mysqli_fetch_row($que);
   //                    echo $count[0];
   //       $conn->close();
   //  }


   function Get_invoice_grand_toal($data){
      $conn = mysqli_connect($this->host,$this->user,$this->password,$this->DB);
         $q="SELECT SUM(total) FROM invoice_details WHERE  invoice_id  ='$data' ";
              $que=$conn->query($q)or print(mysqli_error($conn));
                  $count=mysqli_fetch_row($que);
                      echo number_format($count[0],2);
         $conn->close();
    }


     function Get_invoice_grand_due($data){
      $conn = mysqli_connect($this->host,$this->user,$this->password,$this->DB);
         $q="SELECT SUM(total) FROM invoice_details WHERE  invoice_id  ='$data' ";
              $que=$conn->query($q)or print(mysqli_error($conn));
                  $count=mysqli_fetch_row($que);
                      echo $count[0];
         $conn->close();
    }




 function Get_invoice_grand_paid($data){
      $conn = mysqli_connect($this->host,$this->user,$this->password,$this->DB);
         $q="SELECT paid FROM invoice_details WHERE  invoice_id  ='$data' ";
              $que=$conn->query($q)or print(mysqli_error($conn));
                  $count=mysqli_fetch_row($que);
                      echo $count[0];
         $conn->close();
    }

                          

     function insertPaymentCash($voucher_date,$invoice_no,$customer_name,$amount,$purpose,$voucher_id,$type,$user){
          $conn = mysqli_connect($this->host, $this->user, $this->password, $this->DB);
          $voucher_date  = mysqli_escape_string($conn, htmlentities(trim($voucher_date)));
          $invoice_no  = mysqli_escape_string($conn, htmlentities(trim($invoice_no)));
          $customer_name  = mysqli_escape_string($conn, htmlentities(trim($customer_name)));
          $amount  = mysqli_escape_string($conn, htmlentities(trim($amount)));
          $purpose  = mysqli_escape_string($conn, htmlentities(trim($purpose)));
          $voucher_id = mysqli_escape_string($conn, htmlentities(trim($voucher_id)));
          $type = mysqli_escape_string($conn, htmlentities(trim($type)));
          $user = mysqli_escape_string($conn, htmlentities(trim($user)));
          $sql = 'INSERT INTO payment_voucher(voucher_date,invoice,customer_name,amount,purpose,voucher_id,types,user) VALUES (?,?,?,?,?,?,?,?)';
          $query = $conn->prepare($sql);
          $query->bind_param('ssssssss',$voucher_date,$invoice_no,$customer_name,$amount,$purpose,$voucher_id,$type,$user);
          if($query->execute()){
            return true;
          }else{
            return false;
          }
          $conn->close();
 }


 function insertPaymentBank($voucher_date,$invoice_no,$customer_name,$amount,$purpose,$voucher_id,$type,$bank_name,$user,$trans_type){
          $conn = mysqli_connect($this->host, $this->user, $this->password, $this->DB);
          $voucher_date  = mysqli_escape_string($conn, htmlentities(trim($voucher_date)));
          $invoice_no  = mysqli_escape_string($conn, htmlentities(trim($invoice_no)));
          $customer_name  = mysqli_escape_string($conn, htmlentities(trim($customer_name)));
          $amount  = mysqli_escape_string($conn, htmlentities(trim($amount)));
          $purpose  = mysqli_escape_string($conn, htmlentities(trim($purpose)));
          $voucher_id = mysqli_escape_string($conn, htmlentities(trim($voucher_id)));
          $type = mysqli_escape_string($conn, htmlentities(trim($type)));
          $bank_name = mysqli_escape_string($conn, htmlentities(trim($bank_name)));
          $user = mysqli_escape_string($conn, htmlentities(trim($user)));
          $trans_type = mysqli_escape_string($conn, htmlentities(trim($trans_type)));
          $sql = 'INSERT INTO payment_voucher(voucher_date,invoice,customer_name,amount,purpose,voucher_id,types,bank,user,trans_type) VALUES (?,?,?,?,?,?,?,?,?,?)';
          $query = $conn->prepare($sql);
          $query->bind_param('ssssssssss',$voucher_date,$invoice_no,$customer_name,$amount,$purpose,$voucher_id,$type,$bank_name,$user,$trans_type);
          if($query->execute()){
            return true;
          }else{
            return false;
          }
          $conn->close();
 }



  function insertReceiptCash($voucher_date,$invoice_no,$customer_name,$amount,$purpose,$voucher_id,$type,$receipt_image,$user){
          $conn = mysqli_connect($this->host, $this->user, $this->password, $this->DB);
          $voucher_date  = mysqli_escape_string($conn, htmlentities(trim($voucher_date)));
          $invoice_no  = mysqli_escape_string($conn, htmlentities(trim($invoice_no)));
          $customer_name  = mysqli_escape_string($conn, htmlentities(trim($customer_name)));
          $amount  = mysqli_escape_string($conn, htmlentities(trim($amount)));
          $purpose  = mysqli_escape_string($conn, htmlentities(trim($purpose)));
          $voucher_id = mysqli_escape_string($conn, htmlentities(trim($voucher_id)));
          $type = mysqli_escape_string($conn, htmlentities(trim($type)));
          $receipt_image = mysqli_escape_string($conn, htmlentities(trim($receipt_image)));
          $user = mysqli_escape_string($conn, htmlentities(trim($user)));
          $sql = 'INSERT INTO receipt_voucher(voucher_date,invoice,customer_name,amount,purpose,voucher_id,types,receipt_image,user) VALUES (?,?,?,?,?,?,?,?,?)';
          $query = $conn->prepare($sql);
          $query->bind_param('sssssssss',$voucher_date,$invoice_no,$customer_name,$amount,$purpose,$voucher_id,$type,$receipt_image,$user);
          if($query->execute()){
            return true;
          }else{
            return false;
          }
          $conn->close();
 }




  function insertReceiptBank($voucher_date,$invoice_no,$customer_name,$amount,$purpose,$voucher_id,$type,$bank_name,$receipt_image,$user){
          $conn = mysqli_connect($this->host, $this->user, $this->password, $this->DB);
          $voucher_date  = mysqli_escape_string($conn, htmlentities(trim($voucher_date)));
          $invoice_no  = mysqli_escape_string($conn, htmlentities(trim($invoice_no)));
          $customer_name  = mysqli_escape_string($conn, htmlentities(trim($customer_name)));
          $amount  = mysqli_escape_string($conn, htmlentities(trim($amount)));
          $purpose  = mysqli_escape_string($conn, htmlentities(trim($purpose)));
          $voucher_id = mysqli_escape_string($conn, htmlentities(trim($voucher_id)));
          $type = mysqli_escape_string($conn, htmlentities(trim($type)));
          $bank_name = mysqli_escape_string($conn, htmlentities(trim($bank_name)));
          $receipt_image = mysqli_escape_string($conn, htmlentities(trim($receipt_image)));
          $user = mysqli_escape_string($conn, htmlentities(trim($user)));
          $sql = 'INSERT INTO receipt_voucher(voucher_date,invoice,customer_name,amount,purpose,voucher_id,types,bank,receipt_image,user) VALUES (?,?,?,?,?,?,?,?,?,?)';
          $query = $conn->prepare($sql);
          $query->bind_param('ssssssssss',$voucher_date,$invoice_no,$customer_name,$amount,$purpose,$voucher_id,$type,$bank_name,$receipt_image,$user);
          if($query->execute()){
            return true;
          }else{
            return false;
          }
          $conn->close();
 }


 



function Send_Pdf($fromdate,$todate){
    $conn = mysqli_connect($this->host, $this->user, $this->password, $this->DB);
    // $resultset = array();

    // $fromdate = '2022-01-01';
    // $todate = '2023-03-22';
    
    // $accoun = "1000000001";

    // $DBinfo = $this->Targeted_information('account_number','account_no',$accoun);
    // $user_id = $DBinfo['user_id'];

    // $account_no = $DBinfo['account_no'];
    // $account_type = $DBinfo['account_type'];
    
    // $deposit_tx = 'Credit';
    // $withdrawal_tx = 'Debit';

    // $CreditvERI = $this->get_user_balanceVeried($user_id,$accoun,$deposit_tx,$fromdate,$todate);
    // $DebitvERI = $this->get_user_balanceVeried($user_id,$accoun,$withdrawal_tx,$fromdate,$todate);

    // $Credit = $this->get_user_balance($user_id,$accoun,$deposit_tx,$fromdate,$todate);
    // $Debit = $this->get_user_balance($user_id,$accoun,$withdrawal_tx,$fromdate,$todate);

    // $mainBalance = $Credit - $Debit;
    // $AvailableBal = $CreditvERI - $DebitvERI;
    // $initial_balance = $Credit;
    // // $ScurrenBalnce = $Credit - $amount_transfer - $charges;

    // $DBinfo2 = $this->Targeted_information('client_registrations','user_id',$user_id);
    // $lastname = $DBinfo2['lastname'];
    // $othernames = $DBinfo2['othernames'];
    // $acctOfficer = explode('_', $accountOfficer);


    // $acctOFFCER = $acctOfficer[0];


    $sql = "SELECT * FROM invoice_details WHERE `order_date`  BETWEEN '$fromdate' AND '$todate' ORDER BY order_date ASC";
    $query = $conn->prepare($sql);
    $query->execute();
    $result = $query->get_result();

    $couter = 1;

     //     if($result->num_rows > 0){
     //       while($rows=$result->fetch_assoc()){
     //          $resultset[] = $rows;
     //     }
     //   }
     //   $conn->close();
     // return $resultset;
    // <img src="../spaceblade/public/ITEM_IMAGE/gtg_logo.png"

    $output = '
    <div class="row align-items-center">
                  <div class="col-sm-12 col-md-12 col-xl-12">
                    <div class="row ">  
                        <div class="col-lg-8 col-xs-12 col-sm-12 col-md-8 mx-auto m-5">
                          <div class="card">
                            <div class="card-body">
                             <div id="head">
                              <center class="mb-5">
                                  <h4><b>SALES REPORT</b></h4>
                                  <span>Transaction Date: From <b id="from">'.$fromdate.'</b> to <b id="tod">'.$todate.'</b></span><br />
                              </center>

                              <span class="float-right" style=" float:right;">
                              <img src="https://glorytogloryfortune.com/images/gtgLOGO2.png" height="50px" width="70px" alt="image">
                              </span>

                             </div><br />

                             
                              <div class="text-center">
                                <form method="post">

                                   <table border="1" style="width:100%;padding:10px;" id="customers" class="table table-striped table-bordered table-sm" >
                                      <center class="mb-3" ><h4 style="text-align:center !important"><b>TRANSACTIONS</b></h4></center>
                                      <thead>
                                          <tr style="border: 1px solid #ddd; padding:8px; text-align:center;">
                                              <th style="padding-top: 12px;padding-bottom: 12px; text-align: center;background-color: #04AA6D;color: white;border: 1px solid #ddd; padding: 8px;">SN</th>
                                              <th style="padding-top: 12px;padding-bottom: 12px;text-align: center;background-color: #04AA6D;color: white;border: 1px solid #ddd;padding: 8px;">Date</th>
                                              <th style="padding-top: 12px;padding-bottom: 12px;text-align: center;background-color: #04AA6D;color: white;border: 1px solid #ddd; padding: 8px;">Invoice No</th>
                                              
                                              <th style="padding-top: 12px; padding-bottom: 12px;text-align: center;background-color: #04AA6D;color: white;border: 1px solid #ddd; padding: 8px;">Product Name</th>

                                              <th style="padding-top: 12px; padding-bottom: 12px;text-align: center;background-color: #04AA6D;color: white;border: 1px solid #ddd; padding: 8px;">Price</th>
                                              <th style="padding-top: 12px;padding-bottom: 12px;text-align: center;background-color: #04AA6D;color: white;border: 1px solid #ddd; padding: 8px;">Qty</th>
                                              <th style="padding-top: 12px;padding-bottom: 12px;text-align: center;background-color: #04AA6D;color: white;border: 1px solid #ddd; padding: 8px;">Total</th>
                                          </tr>
                                      </thead>
                                      <tbody> ';
                                      foreach($result as $row)
                                      {

                                      $output .='
                                        <tr>
                                         <td style="padding-top: 12px;padding-bottom: 12px; text-align: center;background-color: #ddd;color: black;border: 1px solid #fff; padding: 8px;">'.$counter++.'</td>
                                         <td style="padding-top: 12px;padding-bottom: 12px; text-align: center;background-color: #ddd;color: black;border: 1px solid #fff; padding: 8px;">'.$row['order_date'].'</td>
                                         <td style="padding-top: 12px;padding-bottom: 12px; text-align: center;background-color: #ddd;color: black;border: 1px solid #fff; padding: 8px;">'.$row['invoice_id'].'</td>
                                         <td style="padding-top: 12px;padding-bottom: 12px; text-align: center;background-color: #ddd;color: black;border: 1px solid #fff; padding: 8px;">'.$row['product_name'].'</td>
                                          <td style="padding-top: 12px;padding-bottom: 12px; text-align: center;background-color: #ddd;color: black;border: 1px solid #fff; padding: 8px;">'.number_format($row['price'],2).'</td>
                                           <td style="padding-top: 12px;padding-bottom: 12px; text-align: center;background-color: #ddd;color: black;border: 1px solid #fff; padding: 8px;">'.$row['qty'].'</td>
                                       
                                         <td style="padding-top: 12px;padding-bottom: 12px; text-align: center;background-color: #ddd;color: black;border: 1px solid #fff; padding: 8px;">'.number_format($row['total'],2).'</td>
                                        </tr>';
                                      }
                                      $output .= '

                                      </tbody> 
                            </table>
                        </form>
                        </div>
                    </div><br><br><br>
              </div>
              </div>
              </div>
              </div>
              </div>';

              return $output;


}



function Get_bank_balanceCredit($data){
         $resultset = array();
         $conn = mysqli_connect($this->host, $this->user, $this->password, $this->DB);
         $sql = "SELECT SUM(amount) as amount FROM bank_log WHERE transaction_type='Credit' AND bank_id='$data'";
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


function Get_bank_balanceDebit($data){
         $resultset = array();
         $conn = mysqli_connect($this->host, $this->user, $this->password, $this->DB);
         $sql = "SELECT SUM(amount) as amount FROM bank_log WHERE transaction_type='Debit' AND bank_id='$data'";
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



function Fetch_All_Quotes_ForCUST($customer){
         $resultset = array();
         $conn = mysqli_connect($this->host, $this->user, $this->password, $this->DB);
         $sql  = "SELECT * FROM invoice_details WHERE customer='$customer' GROUP BY invoice_id ORDER BY `order_date`  DESC";
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


//////////////////////////////////////////New Code////////////////////////////////////////////


function selectProductW($table){
   $conn = mysqli_connect($this->host, $this->user, $this->password, $this->DB);
   $sql  = "SELECT * FROM $table GROUP BY color, kg_weight, meter_length";
   $query= $conn->query($sql); 
       while($fetch=$query->fetch_assoc()){
         
      echo '<option class="dropdown-item" value="'.$fetch['item_code'].'">'.$fetch['product_name']."-".$fetch['color']."-".$fetch['kg_weight']."-".$fetch['meter_length'].'</option>';
        
    }
  $conn->close();     
}


}
?>

