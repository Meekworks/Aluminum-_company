<?php
  require_once "../model/function.php";
  $Call = new mainClass();


//intant Fetch for for Selecting Student on option
if(isset($_GET['product_name'])) {
    $conn = mysqli_connect($Call->host,$Call->user,$Call->password,$Call->DB);
    // $conn = mysqli_connect($maineg->host,$maineg->user,$maineg->password,$maineg->DB);

    $SiteID=$_GET['product_name'];

    $sql="SELECT * FROM products WHERE name='".$SiteID."'";
    $query=$conn->query($sql)or print(mysqli_error($conn)); 

  while($data=$query->fetch_assoc()){
    echo $data['procduct_code']."-".$data['category'];  
    // echo $data['phone']; 

  }
}


if(isset($_GET['supplier'])) {
    $conn = mysqli_connect($Call->host,$Call->user,$Call->password,$Call->DB);
    // $conn = mysqli_connect($maineg->host,$maineg->user,$maineg->password,$maineg->DB);

    $SiteID=$_GET['supplier'];

    $sql="SELECT * FROM supplier_table WHERE company_name='".$SiteID."'";
    $query=$conn->query($sql)or print(mysqli_error($conn));

  while($data=$query->fetch_assoc()){
    echo $data['supplier_id'];
    // echo $data['phone'];

  }
}


if(isset($_GET['account'])) {
    $conn = mysqli_connect($Call->host,$Call->user,$Call->password,$Call->DB);
    // $conn = mysqli_connect($maineg->host,$maineg->user,$maineg->password,$maineg->DB);

    $SiteID=$_GET['account'];

    $sql="SELECT * FROM chart_of_account WHERE account_id='".$SiteID."'";
    $query=$conn->query($sql)or print(mysqli_error($conn));

  while($data=$query->fetch_assoc()){
    echo $data['account_type']."-".$data['series_name'];
    // echo $data['phone'];

  }
}


if(isset($_GET['update'])) {
    $conn = mysqli_connect($Call->host,$Call->user,$Call->password,$Call->DB);
    // $conn = mysqli_connect($maineg->host,$maineg->user,$maineg->password,$maineg->DB);

    $SiteID=$_GET['update'];

    $sql="SELECT * FROM addtocart WHERE id='".$SiteID."'";
    $query=$conn->query($sql)or print(mysqli_error($conn));

  while($data=$query->fetch_assoc()){
    echo $data['id']."-".$data['quantity']."-".$data['price']."-".$data['total'];
    // echo $data['phone'];

  }
    $conn->close();
}
   

if(isset($_GET['customer_reg'])) {
    $conn = mysqli_connect($Call->host,$Call->user,$Call->password,$Call->DB);
    // $conn = mysqli_connect($maineg->host,$maineg->user,$maineg->password,$maineg->DB);

    $SiteID=$_GET['customer_reg'];

    $sql="SELECT * FROM customer_table WHERE customer_code='".$SiteID."'";
    $query=$conn->query($sql)or print(mysqli_error($conn));

  while($data=$query->fetch_assoc()){
    echo $data['address']."-".$data['phone']."-".$data['balance'];
    // echo $data['phone'];

  }
    $conn->close();
}


// if(isset($_GET['customer_regOd'])) {
//     $conn = mysqli_connect($Call->host,$Call->user,$Call->password,$Call->DB);
//     // $conn = mysqli_connect($maineg->host,$maineg->user,$maineg->password,$maineg->DB);

//     $SiteID=$_GET['customer_regOd']; 

//     $sql="SELECT * FROM customer_ledger WHERE account_id='".$SiteID."' ORDER BY id DESC LIMIT 1";
//     $query=$conn->query($sql)or print(mysqli_error($conn));

//   while($data=$query->fetch_assoc()){
//     echo $data['debit'];
//     // echo $data['phone'];

//   }
//     $conn->close();
// }



if(isset($_GET['customer_regOd'])) {

   $SiteID=$_GET['customer_regOd']; 

   $result = $Call->Get_balanceCredit($SiteID); 
   $result1 = $Call->Get_balanceDebit($SiteID); 
   foreach ($result1 as $k => $v) {}                             
   foreach ($result as $k => $v) {}
   $balance1 = $result[$k]['credit'];
   $balance2 = $result1[$k]['debit'];
   $initial_balance = $balance2 - $balance1; 
   $currentBalance = $initial_balance;

   if($currentBalance <= 0 ){

    $newcurrentBalance = '0.00';
       echo $newcurrentBalance;

   }else{
     echo   $currentBalance;
   }
    
}




if(isset($_GET['product_code'])) {
    $conn = mysqli_connect($Call->host,$Call->user,$Call->password,$Call->DB);
    // $conn = mysqli_connect($maineg->host,$maineg->user,$maineg->password,$maineg->DB);

    $SiteID=$_GET['product_code'];

    $sql="SELECT * FROM stockin WHERE item_code='".$SiteID."'";
    $query=$conn->query($sql)or print(mysqli_error($conn));

  while($data=$query->fetch_assoc()){
    echo $data['product_name']."-".$data['category']."-".$data['guage']."-".$data['color']."-".$data['kg_weight']."-".$data['meter_length']."-".$data['embossed']."-".$data['design']."-".$data['packet']."-".$data['quantity']."-".$data['selling_price']."-".$data['item_code']."-".$data['purchase_price'];
    // echo $data['phone'];

  }
}


if(isset($_GET['warehouse'])) {
    $conn = mysqli_connect($Call->host,$Call->user,$Call->password,$Call->DB);

    $SiteID=$_GET['warehouse'];
    $sql="SELECT * FROM serial_table WHERE warehouse='".$SiteID."' GROUP BY label";
    $query=$conn->query($sql)or print(mysqli_error($conn));

     while($row = mysqli_fetch_array($query)) {

         echo "<option>".$row['label']."</option>"; 

        }

}


if(isset($_GET['label'])) {
    $conn = mysqli_connect($Call->host,$Call->user,$Call->password,$Call->DB);

    $alllabel = explode('_',$_GET['label']);
    $label = $alllabel[1];
    $warehouse = $alllabel[0];

    $sql="SELECT * FROM serial_table WHERE label='".$label."' AND warehouse='".$warehouse."' AND status='unassigned'";
    $query=$conn->query($sql)or print(mysqli_error($conn));

     while($row = mysqli_fetch_array($query)) {

         echo "<option>".$row['serial_name']."</option>"; 

        }

}


if(isset($_GET['ordr_time'])) {
    $conn = mysqli_connect($Call->host,$Call->user,$Call->password,$Call->DB);
    // $conn = mysqli_connect($maineg->host,$maineg->user,$maineg->password,$maineg->DB);
    $orderDate = explode('_',$_GET['ordr_time']);
                  $orderDate1 = $orderDate[0];
                  $orderDate2 = $orderDate[1];
    $sql="SELECT * FROM invoice_details WHERE `order_date` between '".$orderDate1."' AND '".$orderDate2."'";
    $query=$conn->query($sql)or print(mysqli_error($conn));
     $counter = 1;
        while($row = mysqli_fetch_array($query)) {
            
            echo "<tr>
            <td>". $counter++ ."</td>
          <td>". $row['order_date'] ."</td>
           <td>".$row['invoice_id']."</td>
          <td>".$row['product_name'] ." </td>
           <td>". number_format($row['price'])."</td>
           <td>". number_format($row['total'])."</td>
         </tr>";
        }
       

     $conn->close();
}


if(isset($_GET['gettotal'])) {
    $conn = mysqli_connect($Call->host,$Call->user,$Call->password,$Call->DB);
    $orderDate = explode('_',$_GET['gettotal']);
    $orderDate1 = $orderDate[0];
    $orderDate2 = $orderDate[1];
    $sql="SELECT COUNT(id) as totalvalue FROM invoice_details WHERE `order_date` between '".$orderDate1."' AND '".$orderDate2."'";
    $query=$conn->query($sql)or print(mysqli_error($conn));
     $counter = 1;
        while($row = mysqli_fetch_array($query)) {
            echo number_format($row['totalvalue']);
        }
     $conn->close();
   }


if(isset($_GET['gettotalcash'])) {
    $conn = mysqli_connect($Call->host,$Call->user,$Call->password,$Call->DB);
    $orderDate = explode('_',$_GET['gettotalcash']);
    $orderDate1 = $orderDate[0];
    $orderDate2 = $orderDate[1];
    $sql="SELECT SUM(total) as totalpaid FROM invoice_details WHERE `order_date` between '".$orderDate1."' AND '".$orderDate2."'";
    $query=$conn->query($sql)or print(mysqli_error($conn));
     $counter = 1;
        while($row = mysqli_fetch_array($query)) {
            echo number_format($row['totalpaid']);
        }   
     $conn->close();
   }


 if(isset($_GET['rececab'])) {
    $conn = mysqli_connect($Call->host,$Call->user,$Call->password,$Call->DB);
    // $conn = mysqli_connect($maineg->host,$maineg->user,$maineg->password,$maineg->DB);
    $orderDate = explode('_',$_GET['rececab']);
                  $orderDate1 = $orderDate[0];
                  $orderDate2 = $orderDate[1];
    $sql="SELECT * FROM invoice_details WHERE `order_date` between '".$orderDate1."' AND '".$orderDate2."' AND due > 0 GROUP BY invoice_id";
    $query=$conn->query($sql)or print(mysqli_error($conn));
     $counter = 1;
        while($row = mysqli_fetch_array($query)) {
            
            echo "<tr>
            <td>". $counter++ ."</td>
          <td>". $row['order_date'] ."</td>
           <td>".$row['invoice_id']."</td>
          <td>".$row['customer_name'] ." </td>
           <td>".$row['phone'] ." </td>
           
            <td>". number_format($row['due'])."</td>
         </tr>";
        }
       

     $conn->close();
}



 if(isset($_GET['costofG'])) {
    $conn = mysqli_connect($Call->host,$Call->user,$Call->password,$Call->DB);
    // $conn = mysqli_connect($maineg->host,$maineg->user,$maineg->password,$maineg->DB);
    $orderDate = explode('_',$_GET['costofG']);
                  $orderDate1 = $orderDate[0];
                  $orderDate2 = $orderDate[1];
    $sql="SELECT * FROM invoice_details WHERE `order_date` between '".$orderDate1."' AND '".$orderDate2."'";
    $query=$conn->query($sql)or print(mysqli_error($conn));
     $counter = 1;
        while($row = mysqli_fetch_array($query)) {
            
            echo "<tr>
            <td>". $counter++ ."</td>
          <td>". $row['order_date'] ."</td>
           <td>".$row['invoice_id']."</td>
           <td>".$row['product_name'] ." </td>
           <td>". number_format($row['price'])."</td>
           <td>". number_format($row['total'])."</td>
            <td>". number_format($row['cost_of_goods'])."</td>
         </tr>";
        }
       

     $conn->close();
}



//  if(isset($_GET['CustomerlED'])) {
//     $conn = mysqli_connect($Call->host,$Call->user,$Call->password,$Call->DB);
//     // $conn = mysqli_connect($maineg->host,$maineg->user,$maineg->password,$maineg->DB);
//     $orderDate = explode('_',$_GET['CustomerlED']);
//                   $orderDate1 = $orderDate[0];
//                   $orderDate2 = $orderDate[1];
//     $sql="SELECT * FROM customer_ledger WHERE `created_at` between '".$orderDate1."' AND '".$orderDate2."'";
//     $query=$conn->query($sql)or print(mysqli_error($conn));
//      $counter = 1;
//         while($row = mysqli_fetch_array($query)) {
//             $date=date_create($row['created_at']);
//             echo "<tr>
//             <td>". $counter++ ."</td>
//           <td>".date_format($date,"Y-m-d")."</td>
//           <td>".$row['account_id']."</td>
//           <td>". number_format($row['credit'])."</td>
//           <td>". number_format($row['debit'])."</td>
//             <td>". number_format($row['balance'])."</td>
//          </tr>";
//         }
       

//      $conn->close();
// }


 if(isset($_GET['CustomerlED'])) {
    $conn = mysqli_connect($Call->host,$Call->user,$Call->password,$Call->DB);
    // $conn = mysqli_connect($maineg->host,$maineg->user,$maineg->password,$maineg->DB);
    $orderDate = explode('_',$_GET['CustomerlED']);
                  $orderDate1 = $orderDate[0];
                  $orderDate2 = $orderDate[1];
    $sql="SELECT * FROM customer_ledger WHERE `created_at` between '".$orderDate1."' AND '".$orderDate2."'";
    $query=$conn->query($sql)or print(mysqli_error($conn));
     $counter = 1;
        while($row = mysqli_fetch_array($query)) {

            $DBinfo1 = $Call->Targeted_information('customer_table','customer_code',$row["account_id"]);

            $date=date_create($row['created_at']);
            echo "<tr>
            <td>". $counter++ ."</td>
          <td>".date_format($date,"Y-m-d")."</td>
           <td>".$row['account_id']."</td>
           <td>".@$DBinfo1['name']."</td>
           <td>". number_format($row['credit'])."</td>
           <td>". number_format($row['debit'])."</td>
            <td>". number_format($row['balance'])."</td>
         </tr>";
        }
       

     $conn->close();
}


// if(isset($_GET['gettotalrece'])) {
//     $conn = mysqli_connect($Call->host,$Call->user,$Call->password,$Call->DB);
//     $orderDate = explode('_',$_GET['gettotalrece']);
//     $orderDate1 = $orderDate[0];
//     $orderDate2 = $orderDate[1];
//     $sql="SELECT COUNT(id) as totalvalue FROM invoice_details WHERE `order_date` between '".$orderDate1."' AND '".$orderDate2."' AND `due` > 0 GROUP BY invoice_id";
//     $query=$conn->query($sql)or print(mysqli_error($conn));
//      $counter = 1;
//         while($row = mysqli_fetch_array($query)) {
//             echo number_format($row['totalvalue']);
//         }
//      $conn->close();
//    }


// if(isset($_GET['gettotalcashrecei'])) {
//     $conn = mysqli_connect($Call->host,$Call->user,$Call->password,$Call->DB);
//     $orderDate = explode('_',$_GET['gettotalcashrecei']);
//     $orderDate1 = $orderDate[0];
//     $orderDate2 = $orderDate[1];
//     $sql="SELECT SUM(due) as totalpaid FROM invoice_details WHERE `order_date` between '".$orderDate1."' AND '".$orderDate2."' GROUP BY invoice_id";
//     $query=$conn->query($sql)or print(mysqli_error($conn));
//      $counter = 1;
//         while($row = mysqli_fetch_array($query)) {
//             echo number_format($row['totalpaid']);
//         }   
//      $conn->close();
//    }



if(isset($_GET['gettotalcost'])) {
    $conn = mysqli_connect($Call->host,$Call->user,$Call->password,$Call->DB);
    $orderDate = explode('_',$_GET['gettotalcost']);
    $orderDate1 = $orderDate[0];
    $orderDate2 = $orderDate[1];
    $sql="SELECT COUNT(id) as totalvalue FROM invoice_details WHERE `order_date` between '".$orderDate1."' AND '".$orderDate2."'";
    $query=$conn->query($sql)or print(mysqli_error($conn));
     $counter = 1;
        while($row = mysqli_fetch_array($query)) {
            echo number_format($row['totalvalue']);
        }
     $conn->close();
   }


if(isset($_GET['gettotalcashcost'])) {
    $conn = mysqli_connect($Call->host,$Call->user,$Call->password,$Call->DB);
    $orderDate = explode('_',$_GET['gettotalcashcost']);
    $orderDate1 = $orderDate[0];
    $orderDate2 = $orderDate[1];
    $sql="SELECT SUM(cost_of_goods) as totalpaid FROM invoice_details WHERE `order_date` between '".$orderDate1."' AND '".$orderDate2."'";
    $query=$conn->query($sql)or print(mysqli_error($conn));
     $counter = 1;
        while($row = mysqli_fetch_array($query)) {
            echo number_format($row['totalpaid']);
        }   
     $conn->close();
   }

   if(isset($_GET['gettotalled'])) {
    $conn = mysqli_connect($Call->host,$Call->user,$Call->password,$Call->DB);
    $orderDate = explode('_',$_GET['gettotalled']);
    $orderDate1 = $orderDate[0];
    $orderDate2 = $orderDate[1];
    $sql="SELECT SUM(credit) as totalvalue FROM customer_ledger WHERE `created_at` between '".$orderDate1."' AND '".$orderDate2."'";
    $query=$conn->query($sql)or print(mysqli_error($conn));
     $counter = 1;
        while($row = mysqli_fetch_array($query)) {
            echo number_format($row['totalvalue']);
        }
     $conn->close();
   }


if(isset($_GET['gettotalcashled'])) {
    $conn = mysqli_connect($Call->host,$Call->user,$Call->password,$Call->DB);
    $orderDate = explode('_',$_GET['gettotalcashled']);
    $orderDate1 = $orderDate[0];
    $orderDate2 = $orderDate[1];
    $sql="SELECT SUM(debit) as totalpaid FROM customer_ledger WHERE `created_at` between '".$orderDate1."' AND '".$orderDate2."'";
    $query=$conn->query($sql)or print(mysqli_error($conn));
     $counter = 1;
        while($row = mysqli_fetch_array($query)) {
            echo number_format($row['totalpaid']);
        }   
     $conn->close();
   }



   if(isset($_GET['gettotalcashledBal'])) {
    $conn = mysqli_connect($Call->host,$Call->user,$Call->password,$Call->DB);
    $orderDate = explode('_',$_GET['gettotalcashledBal']);
    $orderDate1 = $orderDate[0];
    $orderDate2 = $orderDate[1];
    $sql="SELECT SUM(balance) as totalpaid FROM customer_ledger WHERE `created_at` between '".$orderDate1."' AND '".$orderDate2."'";
    $query=$conn->query($sql)or print(mysqli_error($conn));
     $counter = 1;
        while($row = mysqli_fetch_array($query)) {
            echo number_format($row['totalpaid']);
        }   
     $conn->close();
   }


 




if(isset($_GET['payment_voucher'])) {
    $conn = mysqli_connect($Call->host,$Call->user,$Call->password,$Call->DB);
    // $conn = mysqli_connect($maineg->host,$maineg->user,$maineg->password,$maineg->DB);
    $orderDate = explode('_',$_GET['payment_voucher']);
                  $orderDate1 = $orderDate[0];
                  $orderDate2 = $orderDate[1];
    $sql="SELECT *, DATE_FORMAT(created_at, '%H:%i:%s') AS time_created_at FROM payment_voucher WHERE `voucher_date` between '".$orderDate1."' AND '".$orderDate2."'";
    $query=$conn->query($sql)or print(mysqli_error($conn));
     $counter = 1;
        while($row = mysqli_fetch_array($query)) {
            
          echo "<tr>
          <td>".$counter++ ."</td>
          <td>".$row['voucher_date']."</td>
           <td>".$row['time_created_at']."</td>
          <td>".$row['voucher_id']."</td>
          <td>".$row['customer_name']." </td>
          <td>".$row['types']."</td>
          <td>".number_format($row['amount'])."</td>
          <td><a class='btn btn-sm btn-info' href='?action=PaymentReportDetails&&getPaymentV=".$row['voucher_id']."' target='_blank'>View</a></td>
         </tr>";
        }
       

     $conn->close();
}


if(isset($_GET['sum_total_amount'])) {
    $conn = mysqli_connect($Call->host,$Call->user,$Call->password,$Call->DB);
    $orderDate = explode('_',$_GET['sum_total_amount']);
    $orderDate1 = $orderDate[0];
    $orderDate2 = $orderDate[1];
    $sql="SELECT SUM(amount) as totalpaid FROM payment_voucher WHERE `voucher_date` between '".$orderDate1."' AND '".$orderDate2."'";
    $query=$conn->query($sql)or print(mysqli_error($conn));
     $counter = 1;
        while($row = mysqli_fetch_array($query)) {
            echo number_format($row['totalpaid']);
        }   
     $conn->close();
   }



   if(isset($_GET['sum_cash_payment'])) {
    $conn = mysqli_connect($Call->host,$Call->user,$Call->password,$Call->DB);
    $orderDate = explode('_',$_GET['sum_cash_payment']);
    $orderDate1 = $orderDate[0];
    $orderDate2 = $orderDate[1];
    $sql="SELECT SUM(amount) as totalpaid FROM payment_voucher WHERE `voucher_date` between '".$orderDate1."' AND '".$orderDate2."' AND types='Cash Payment'";
    $query=$conn->query($sql)or print(mysqli_error($conn));
     $counter = 1;
        while($row = mysqli_fetch_array($query)) {
            echo number_format($row['totalpaid']);
        }   
     $conn->close();
   }


   if(isset($_GET['sum_bank_payment'])) {
    $conn = mysqli_connect($Call->host,$Call->user,$Call->password,$Call->DB);
    $orderDate = explode('_',$_GET['sum_bank_payment']);
    $orderDate1 = $orderDate[0];
    $orderDate2 = $orderDate[1];
    $sql="SELECT SUM(amount) as totalpaid FROM payment_voucher WHERE `voucher_date` between '".$orderDate1."' AND '".$orderDate2."' AND types='Bank Payment'";
    $query=$conn->query($sql)or print(mysqli_error($conn));
     $counter = 1;
        while($row = mysqli_fetch_array($query)) {
            echo number_format($row['totalpaid']);
        }   
     $conn->close();
   }






   if(isset($_GET['receipt_voucher'])) {
    $conn = mysqli_connect($Call->host,$Call->user,$Call->password,$Call->DB);
    // $conn = mysqli_connect($maineg->host,$maineg->user,$maineg->password,$maineg->DB);
    $orderDate = explode('_',$_GET['receipt_voucher']);
                  $orderDate1 = $orderDate[0];
                  $orderDate2 = $orderDate[1];
    $sql="SELECT * FROM receipt_voucher WHERE `voucher_date` between '".$orderDate1."' AND '".$orderDate2."'";
    $query=$conn->query($sql)or print(mysqli_error($conn));
     $counter = 1;
        while($row = mysqli_fetch_array($query)) {
            
          echo "<tr>
          <td>".$counter++ ."</td>
          <td>".$row['voucher_date']."</td>
          <td>".$row['voucher_id']."</td>
          <td>".$row['customer_name']." </td>
          <td>".$row['types']."</td>
          <td>".number_format($row['amount'])."</td>
          <td><a class='btn btn-sm btn-info' href='?action=ReceiptReportDetails&&getPaymentV=".$row['voucher_id']."' target='_blank'>View</a></td>
         </tr>";
        }
       

     $conn->close();
}


if(isset($_GET['sum_total_amount_receipt'])) {
    $conn = mysqli_connect($Call->host,$Call->user,$Call->password,$Call->DB);
    $orderDate = explode('_',$_GET['sum_total_amount_receipt']);
    $orderDate1 = $orderDate[0];
    $orderDate2 = $orderDate[1];
    $sql="SELECT SUM(amount) as totalpaid FROM receipt_voucher WHERE `voucher_date` between '".$orderDate1."' AND '".$orderDate2."'";
    $query=$conn->query($sql)or print(mysqli_error($conn));
     $counter = 1;
        while($row = mysqli_fetch_array($query)) {
            echo number_format($row['totalpaid']);
        }   
     $conn->close();
   }



   if(isset($_GET['sum_cash_receipt'])) {
    $conn = mysqli_connect($Call->host,$Call->user,$Call->password,$Call->DB);
    $orderDate = explode('_',$_GET['sum_cash_receipt']);
    $orderDate1 = $orderDate[0];
    $orderDate2 = $orderDate[1];
    $sql="SELECT SUM(amount) as totalpaid FROM receipt_voucher WHERE `voucher_date` between '".$orderDate1."' AND '".$orderDate2."' AND types='Cash Receipt'";
    $query=$conn->query($sql)or print(mysqli_error($conn));
     $counter = 1;
        while($row = mysqli_fetch_array($query)) {
            echo number_format($row['totalpaid']);
        }   
     $conn->close();
   }


   if(isset($_GET['sum_bank_receipt'])) {
    $conn = mysqli_connect($Call->host,$Call->user,$Call->password,$Call->DB);
    $orderDate = explode('_',$_GET['sum_bank_receipt']);
    $orderDate1 = $orderDate[0];
    $orderDate2 = $orderDate[1];
    $sql="SELECT SUM(amount) as totalpaid FROM receipt_voucher WHERE `voucher_date` between '".$orderDate1."' AND '".$orderDate2."' AND types='Bank Receipt'";
    $query=$conn->query($sql)or print(mysqli_error($conn));
     $counter = 1;
        while($row = mysqli_fetch_array($query)) {
            echo number_format($row['totalpaid']);
        }   
     $conn->close();
   }





if(isset($_GET['ordr_date'])) {
    $conn = mysqli_connect($Call->host,$Call->user,$Call->password,$Call->DB);
    // $conn = mysqli_connect($maineg->host,$maineg->user,$maineg->password,$maineg->DB);
    $orderDate = explode('_',$_GET['ordr_date']);
                  $orderDate1 = $orderDate[0];
                  $orderDate2 = $orderDate[1];
    $sql="SELECT *, DATE_FORMAT(created_date, '%H:%i:%s') AS time_created_at FROM stockin_log WHERE `created_date` between '".$orderDate1."' AND '".$orderDate2."'";
    $query=$conn->query($sql)or print(mysqli_error($conn));
     $counter = 1;
        while($row = mysqli_fetch_array($query)) {
            
            echo "<tr>
            <td>". $counter++ ."</td>
          <td>". $row['created_date'] ."</td>
          <td>". $row['time_created_at'] ."</td>
           <td>".$row['item_code']."</td>
          <td>".$row['product_name'] ." </td>
           <td>". $row['purchase_price'] ."</td>
          <td>". $row['quantity'] ."</td>
           <td>". $row['total'] ."</td>
         </tr>";
        }
       

     $conn->close();
}
   

if(isset($_GET['gettotal_stock'])) {
    $conn = mysqli_connect($Call->host,$Call->user,$Call->password,$Call->DB);
    $orderDate = explode('_',$_GET['gettotal_stock']);
    $orderDate1 = $orderDate[0];
    $orderDate2 = $orderDate[1];
    $sql="SELECT SUM(quantity) as totalvalue FROM stockin_log WHERE `created_date` between '".$orderDate1."' AND '".$orderDate2."'";
    $query=$conn->query($sql)or print(mysqli_error($conn));
     $counter = 1;
        while($row = mysqli_fetch_array($query)) {
            echo $row['totalvalue'];
        }
     $conn->close();
   }


if(isset($_GET['gettotalcash_stock'])) {
    $conn = mysqli_connect($Call->host,$Call->user,$Call->password,$Call->DB);
    $orderDate = explode('_',$_GET['gettotalcash_stock']);
    $orderDate1 = $orderDate[0];
    $orderDate2 = $orderDate[1];
    $sql="SELECT SUM(total) as totalpaid FROM stockin_log WHERE `created_date` between '".$orderDate1."' AND '".$orderDate2."'";
    $query=$conn->query($sql)or print(mysqli_error($conn));
     $counter = 1;
        while($row = mysqli_fetch_array($query)) {
            echo $row['totalpaid'];
        }   
     $conn->close();
   }


if(isset($_GET['purchase_date'])) {
    $conn = mysqli_connect($Call->host,$Call->user,$Call->password,$Call->DB);
    // $conn = mysqli_connect($maineg->host,$maineg->user,$maineg->password,$maineg->DB);
    $orderDate = explode('_',$_GET['purchase_date']);
                  $orderDate1 = $orderDate[0];
                  $orderDate2 = $orderDate[1];
    $sql="SELECT * FROM purchase_log WHERE `created_at` between '".$orderDate1."' AND '".$orderDate2."'";
    $query=$conn->query($sql)or print(mysqli_error($conn));
     $counter = 1;
        while($row = mysqli_fetch_array($query)) {
            
            echo "<tr>
            <td>". $counter++ ."</td>
          <td>". $row['created_at'] ."</td>
           <td>".$row['purchase_id']."</td>
          <td>".$row['product_name'] ." </td>
           <td>". $row['amount'] ."</td>
          <td>". $row['qty'] ."</td>
           <td>". $row['total'] ."</td>
         </tr>";
        }
       

     $conn->close();
}
   

if(isset($_GET['gettotal_Purchas'])) {
    $conn = mysqli_connect($Call->host,$Call->user,$Call->password,$Call->DB);
    $orderDate = explode('_',$_GET['gettotal_Purchas']);
    $orderDate1 = $orderDate[0];
    $orderDate2 = $orderDate[1];
    $sql="SELECT SUM(qty) as totalvalue FROM purchase_log WHERE `created_at` between '".$orderDate1."' AND '".$orderDate2."'";
    $query=$conn->query($sql)or print(mysqli_error($conn));
     $counter = 1;
        while($row = mysqli_fetch_array($query)) {
            echo $row['totalvalue'];
        }
     $conn->close();
   }


if(isset($_GET['gettotalcash_purchae'])) {
    $conn = mysqli_connect($Call->host,$Call->user,$Call->password,$Call->DB);
    $orderDate = explode('_',$_GET['gettotalcash_purchae']);
    $orderDate1 = $orderDate[0];
    $orderDate2 = $orderDate[1];
    $sql="SELECT SUM(total) as totalpaid FROM purchase_log WHERE `created_at` between '".$orderDate1."' AND '".$orderDate2."'";
    $query=$conn->query($sql)or print(mysqli_error($conn));
     $counter = 1;
        while($row = mysqli_fetch_array($query)) {
            echo $row['totalpaid'];
        }   
     $conn->close();
   }



if(isset($_GET['receive_date'])) {
    $conn = mysqli_connect($Call->host,$Call->user,$Call->password,$Call->DB);
    // $conn = mysqli_connect($maineg->host,$maineg->user,$maineg->password,$maineg->DB);
    $orderDate = explode('_',$_GET['receive_date']);
                  $orderDate1 = $orderDate[0];
                  $orderDate2 = $orderDate[1];
    $sql="SELECT * FROM receiveable WHERE `datet` between '".$orderDate1."' AND '".$orderDate2."'";
    $query=$conn->query($sql)or print(mysqli_error($conn));
     $counter = 1;
        while($row = mysqli_fetch_array($query)) {
            
            echo "<tr>
            <td>". $counter++ ."</td>
          <td>". $row['datet'] ."</td>
           <td>".$row['customer_name']."</td>
          <td>".$row['description']." </td>
           <td>". $row['amount'] ."</td>
          <td>". $row['initial_amount'] ."</td>
           <td>". $row['type'] ."</td>
           <td>". $row['balance'] ."</td>
           <td>". $row['Userlogin'] ."</td>
         </tr>";
        }
       

     $conn->close();
}
   

if(isset($_GET['gettotalcash_rece'])) {
    $conn = mysqli_connect($Call->host,$Call->user,$Call->password,$Call->DB);
    $orderDate = explode('_',$_GET['gettotalcash_rece']);
    $orderDate1 = $orderDate[0];
    $orderDate2 = $orderDate[1];
    $sql="SELECT SUM(amount) as totalpaid FROM receiveable WHERE `datet` between '".$orderDate1."' AND '".$orderDate2."'";
    $query=$conn->query($sql)or print(mysqli_error($conn));
     $counter = 1;
        while($row = mysqli_fetch_array($query)) {
            echo $row['totalpaid'];
        }   
     $conn->close();
   }



if(isset($_GET['payable_date'])) {
    $conn = mysqli_connect($Call->host,$Call->user,$Call->password,$Call->DB);
    // $conn = mysqli_connect($maineg->host,$maineg->user,$maineg->password,$maineg->DB);
    $orderDate = explode('_',$_GET['payable_date']);
                  $orderDate1 = $orderDate[0];
                  $orderDate2 = $orderDate[1];
    $sql="SELECT * FROM payable WHERE `datet` between '".$orderDate1."' AND '".$orderDate2."'";
    $query=$conn->query($sql)or print(mysqli_error($conn));
     $counter = 1;
        while($row = mysqli_fetch_array($query)) {
            
            echo "<tr>
            <td>". $counter++ ."</td>
          <td>". $row['datet'] ."</td>
           <td>".$row['vendor_name']."</td>
          <td>".$row['description']." </td>
           <td>". $row['amount'] ."</td>
          <td>". $row['amount_paid'] ."</td>
          <td>". $row['type'] ."</td>
           <td>". $row['balance'] ."</td>
           <td>". $row['Userlogin'] ."</td>
         </tr>";
        }
       

     $conn->close();
}
   

if(isset($_GET['gettotalcash_Pay'])) {
    $conn = mysqli_connect($Call->host,$Call->user,$Call->password,$Call->DB);
    $orderDate = explode('_',$_GET['gettotalcash_Pay']);
    $orderDate1 = $orderDate[0];
    $orderDate2 = $orderDate[1];
    $sql="SELECT SUM(amount) as totalpaid FROM payable WHERE `datet` between '".$orderDate1."' AND '".$orderDate2."'";
    $query=$conn->query($sql)or print(mysqli_error($conn));
     $counter = 1;
        while($row = mysqli_fetch_array($query)) {
            echo $row['totalpaid'];
        }   
     $conn->close();
   }


if(isset($_GET['Acount_ID'])) {
    $conn = mysqli_connect($Call->host,$Call->user,$Call->password,$Call->DB);
    $SiteID=$_GET['Acount_ID'];
    $sql="SELECT * FROM staff WHERE staff_id='".$SiteID."'";
    $query=$conn->query($sql)or print(mysqli_error($conn));
    while($data=$query->fetch_assoc()){
    echo $data['basic_salary'];
    }
    $conn->close();
  }


if(isset($_GET['payrollReport'])) {
    $conn = mysqli_connect($Call->host,$Call->user,$Call->password,$Call->DB);
    $orderDate = explode('_',$_GET['payrollReport']);
    $orderDate1 = $orderDate[0];
    $orderDate2 = $orderDate[1];
    $sql="SELECT * FROM payroll_log WHERE `updated_at` between '".$orderDate1."' AND '".$orderDate2."' AND status='paid'";
    $query=$conn->query($sql)or print(mysqli_error($conn));
     $counter = 1;
        while($row = mysqli_fetch_array($query)) {    
            echo "<tr>
            <td>". $counter++ ."</td>
            <td>". $row['updated_at'] ."</td>
          <td>". $row['month_year'] ."</td>
           <td>".$row['Amount']."</td>
          <td>".$row['status'] ." </td>
           <td>". $row['staff_workers'] ."</td>
         </tr>";
        }
     $conn->close();
   }


if(isset($_GET['gettotalPayroll'])) {
    $conn = mysqli_connect($Call->host,$Call->user,$Call->password,$Call->DB);
    $orderDate = explode('_',$_GET['gettotalPayroll']);
    $orderDate1 = $orderDate[0];
    $orderDate2 = $orderDate[1];
    $sql="SELECT SUM(Amount) as amountp FROM payroll_log WHERE `updated_at` between '".$orderDate1."' AND '".$orderDate2."' AND status='paid'";
    $query=$conn->query($sql)or print(mysqli_error($conn));
     $counter = 1;
        while($row = mysqli_fetch_array($query)) {
            echo $row['amountp'];
        }   
     $conn->close();
   }



if(isset($_GET['product_name1'])) {
    $conn = mysqli_connect($Call->host,$Call->user,$Call->password,$Call->DB);
    // $conn = mysqli_connect($maineg->host,$maineg->user,$maineg->password,$maineg->DB);

    $SiteID=$_GET['product_name1'];

    $sql="SELECT * FROM stockin WHERE item_code='".$SiteID."'";
    $query=$conn->query($sql)or print(mysqli_error($conn));

      while($data=$query->fetch_assoc()){
        echo $data['category']."-".$data['guage']."-".$data['color']."-".$data['product_name'];
        // echo $data['phone'];

      }
    }

 
if(isset($_GET['expense'])) {
    $conn = mysqli_connect($Call->host,$Call->user,$Call->password,$Call->DB);
    $orderDate = explode('_',$_GET['expense']);
    $orderDate1 = $orderDate[0];
    $orderDate2 = $orderDate[1];
    $sql="SELECT *, DATE_FORMAT(created_at, '%H:%i:%s') AS time_created_at FROM request_table WHERE `request_date` between '".$orderDate1."' AND '".$orderDate2."'";
    $query=$conn->query($sql)or print(mysqli_error($conn));
     $counter = 1;
        while($row = mysqli_fetch_array($query)) {
            
            echo "<tr>
            <td>". $counter++ ."</td>
          <td>". $row['request_date'] ."</td>
          <td>". $row['time_created_at'] ."</td>
           <td>".$row['request_name']."</td>
           <td>". $row['vendor_name'] ."</td>
          <td>". $row['description'] ."</td>
           <td>". number_format($row['amount'])."</td>
           
         </tr>";
        }
     $conn->close();
   }


if(isset($_GET['gettotalExpense'])) {
    $conn = mysqli_connect($Call->host,$Call->user,$Call->password,$Call->DB);
    $orderDate = explode('_',$_GET['gettotalExpense']);
    $orderDate1 = $orderDate[0];
    $orderDate2 = $orderDate[1];
    $sql="SELECT SUM(amount) as amountpaid FROM request_table WHERE `request_date` between '".$orderDate1."' AND '".$orderDate2."'";
    $query=$conn->query($sql)or print(mysqli_error($conn));
     $counter = 1;
        while($row = mysqli_fetch_array($query)) {
            echo number_format($row['amountpaid']);
        }   
     $conn->close();
    }
    


if(isset($_GET['getCash'])) {
    $conn = mysqli_connect($Call->host,$Call->user,$Call->password,$Call->DB);
    $orderDate = explode('_',$_GET['getCash']);
    $orderDate1 = $orderDate[0];
    $orderDate2 = $orderDate[1]; 
    $sql1="SELECT SUM(amount) as amount FROM account_log WHERE `transaction_date` between '".$orderDate1."' AND '".$orderDate2."' AND account_id ='4000_SALES'" ;
    $query1=$conn->query($sql1)or print(mysqli_error($conn));
     $counter = 1;
        while($row1 = mysqli_fetch_array($query1)) {
            echo number_format($row1['amount']); 
        }
     $conn->close();
   }


if(isset($_GET['getCustomerD'])) {
    $conn = mysqli_connect($Call->host,$Call->user,$Call->password,$Call->DB);
    $orderDate = explode('_',$_GET['getCustomerD']);
    $orderDate1 = $orderDate[0];
    $orderDate2 = $orderDate[1]; 
     $sql1="SELECT SUM(amount) as amount FROM account_log WHERE `transaction_date` between '".$orderDate1."' AND '".$orderDate2."' AND account_id='1200_ACCOUNT_RECEIVABLE'";
    $query1=$conn->query($sql1)or print(mysqli_error($conn));
     $counter = 1;
        while($row1 = mysqli_fetch_array($query1)) {
            echo number_format($row1['amount']); 
        }
     $conn->close();
   }


if(isset($_GET['getExpense'])) {
    $conn = mysqli_connect($Call->host,$Call->user,$Call->password,$Call->DB);
    $orderDate = explode('_',$_GET['getExpense']);
    $orderDate1 = $orderDate[0];
    $orderDate2 = $orderDate[1]; 
     $sql1="SELECT SUM(amount) as amount FROM account_log WHERE `transaction_date` between '".$orderDate1."' AND '".$orderDate2."' AND account_id='6000_EXPENSES'";
    $query1=$conn->query($sql1)or print(mysqli_error($conn));
     $counter = 1;
        while($row1 = mysqli_fetch_array($query1)) {
            echo number_format($row1['amount']); 
        }
     $conn->close();
    }




if(isset($_GET['getSalaryA'])) {
    $conn = mysqli_connect($Call->host,$Call->user,$Call->password,$Call->DB);
    $orderDate = explode('_',$_GET['getSalaryA']);
    $orderDate1 = $orderDate[0];
    $orderDate2 = $orderDate[1]; 
    $sql1="SELECT SUM(amount) as amount FROM account_log WHERE `transaction_date` between '".$orderDate1."' AND '".$orderDate2."' AND account_id='2001_SALARY'";
    $query1=$conn->query($sql1)or print(mysqli_error($conn));
     $counter = 1;
        while($row1 = mysqli_fetch_array($query1)) {
            echo number_format($row1['amount']); 
        }
     $conn->close();
   }





if(isset($_GET['getPurchaseA'])) {
    $conn = mysqli_connect($Call->host,$Call->user,$Call->password,$Call->DB);
    $orderDate = explode('_',$_GET['getPurchaseA']);
    $orderDate1 = $orderDate[0];
    $orderDate2 = $orderDate[1]; 
    $sql1="SELECT SUM(amount) as amount FROM account_log WHERE `transaction_date` between '".$orderDate1."' AND '".$orderDate2."' AND account_id='2008_PURCHASE'";
    $query1=$conn->query($sql1)or print(mysqli_error($conn));
     $counter = 1;
        while($row1 = mysqli_fetch_array($query1)) {
            echo number_format($row1['amount']); 
        }
     $conn->close();
   }




   if(isset($_GET['chart_of_account'])) {
    $conn = mysqli_connect($Call->host,$Call->user,$Call->password,$Call->DB);
    // $conn = mysqli_connect($maineg->host,$maineg->user,$maineg->password,$maineg->DB);
    $orderDate = explode('_',$_GET['chart_of_account']);
                  $orderDate1 = $orderDate[0];
                  $orderDate2 = $orderDate[1];
    $sql="SELECT * FROM account_log WHERE `created_at` between '".$orderDate1."' AND '".$orderDate2."' ORDER BY created_at DESC";
    $query=$conn->query($sql)or print(mysqli_error($conn));
     $counter = 1;
        while($row = mysqli_fetch_array($query)) {
            
            echo "<tr>
            <td>".$counter++ ."</td>
          <td>".$row['created_at']."</td>
           <td>".$row['account_id']."</td>
          <td>".$row['series_name']." </td>
           <td>".$row['account_type']."</td>
          <td>".number_format($row['amount'])."</td>
          <td>".$row['staff_id']."</td>
         </tr>";
        }
     $conn->close();
}



// if(isset($_GET['get_asset'])) {
//     $conn = mysqli_connect($Call->host,$Call->user,$Call->password,$Call->DB);
//     $orderDate = explode('_',$_GET['get_asset']);
//     $orderDate1 = $orderDate[0];
//     $orderDate2 = $orderDate[1]; 
//     $sql1="SELECT SUM(amount) as amount FROM account_log WHERE `transaction_date` between '".$orderDate1."' AND '".$orderDate2."' AND account_id='2008_PURCHASE'";
//     $query1=$conn->query($sql1)or print(mysqli_error($conn));
//      $counter = 1;
//         while($row1 = mysqli_fetch_array($query1)) {
//             echo $row1['amount']; 
//         }
//      $conn->close();
//    }
 

if(isset($_GET['visitReport'])) {
    $conn = mysqli_connect($Call->host,$Call->user,$Call->password,$Call->DB);
    // $conn = mysqli_connect($maineg->host,$maineg->user,$maineg->password,$maineg->DB);
    $orderDate = explode('_',$_GET['visitReport']);
                  $orderDate1 = $orderDate[0];
                  $orderDate2 = $orderDate[1];
    $sql="SELECT * FROM visit_table WHERE `visit_day` between '".$orderDate1."' AND '".$orderDate2."' ORDER BY visit_day DESC";
    $query=$conn->query($sql)or print(mysqli_error($conn));
     $counter = 1;
        while($row = mysqli_fetch_array($query)) {
            
            echo "<tr>
            <td>".$counter++ ."</td>
          <td>".$row['visit_day']."</td>
           <td>".$row['visitor_name']."</td>
          <td>".$row['gender']." </td>
           <td>".$row['time_in']."</td>
          <td>".$row['time_out']."</td>
          <td>".$row['who_place']."</td>
         </tr>";
        }
     $conn->close();
}


if(isset($_GET['ReturnReport'])) {
    $conn = mysqli_connect($Call->host,$Call->user,$Call->password,$Call->DB);
    // $conn = mysqli_connect($maineg->host,$maineg->user,$maineg->password,$maineg->DB);
    $orderDate = explode('_',$_GET['ReturnReport']);
                  $orderDate1 = $orderDate[0];
                  $orderDate2 = $orderDate[1];
    $sql="SELECT *, DATE_FORMAT(created_at, '%H:%i:%s') AS time_created_at FROM return_table WHERE `return_date` between '".$orderDate1."' AND '".$orderDate2."' ORDER BY return_date DESC";
    $query=$conn->query($sql)or print(mysqli_error($conn));
     $counter = 1;
        while($row = mysqli_fetch_array($query)) {
            
          echo "<tr>
          <td>".$counter++ ."</td>
          <td>".$row['return_date']."</td>
          <td>".$row['time_created_at']."</td>
          <td>".$row['product_name']."</td>
          <td>".$row['customer']." </td>
          <td>".$row['quantity']."</td>
          <td>".$row['item_code']."</td>
          <td>".$row['type']."</td>
          <td>".$row['status']."</td>
         </tr>";
        }
     $conn->close();
}




if(isset($_GET['bank_Details'])) {
    $conn = mysqli_connect($Call->host,$Call->user,$Call->password,$Call->DB);
    $orderDate = explode('_',$_GET['bank_Details']);
    $orderDate1 = $orderDate[0];
    $orderDate2 = $orderDate[1];
    $sql="SELECT *, DATE_FORMAT(created_at, '%H:%i:%s') AS time_created_at FROM bank_log WHERE `transaction_date` between '".$orderDate1."' AND '".$orderDate2."'";
    $query=$conn->query($sql)or print(mysqli_error($conn));
     $counter = 1;
        while($row = mysqli_fetch_array($query)) { 
         echo "<tr>
         <td>". $counter++ ."</td>
          <td>". $row['transaction_date'] ." ".$row['time_created_at']."</td>
          <td>".$row['bank_name'] ." </td>
           <td>". $row['transaction_type'] ."</td>
          <td>". $row['transactionID'] ."</td>
          <td>". $row['amount'] ."</td>
           <td>". $row['description'] ."</td>
           <td>". $row['initial_balance'] ."</td>
           <td>". $row['current_balance'] ."</td>
           <td><a href='view/product_image/".$row['teller_slip']."' target='_blank'><img class='pic image-fliud' style='width: 50px; height: 50px;' src='view/product_image/".$row['teller_slip']."'   alt='image'></a></td>
         </tr>";
        } 
     $conn->close();
}




if(isset($_GET['getCredit'])) {
    $conn = mysqli_connect($Call->host,$Call->user,$Call->password,$Call->DB);
    $orderDate = explode('_',$_GET['getCredit']);
    $orderDate1 = $orderDate[0];
    $orderDate2 = $orderDate[1];
    $sql="SELECT SUM(amount) as amount FROM bank_log WHERE `transaction_date` between '".$orderDate1."' AND '".$orderDate2."' AND transaction_type ='Credit'";
    $query=$conn->query($sql)or print(mysqli_error($conn));
     $counter = 1;
        while($row = mysqli_fetch_array($query)) {
        echo $row['amount'];
        }
     $conn->close();
   } 

   if(isset($_GET['getDebit'])) {
    $conn = mysqli_connect($Call->host,$Call->user,$Call->password,$Call->DB);
    $orderDate = explode('_',$_GET['getDebit']);
    $orderDate1 = $orderDate[0];
    $orderDate2 = $orderDate[1];  
    $sql="SELECT SUM(amount) as amount FROM bank_log WHERE `transaction_date` between '".$orderDate1."' AND '".$orderDate2."' AND transaction_type ='Debit'";
    $query=$conn->query($sql)or print(mysqli_error($conn));
     $counter = 1;
        while($row = mysqli_fetch_array($query)) {
            echo $row['amount'];
        }
     $conn->close();
   }



   if(isset($_GET['InvoiceReport'])) {
    $conn = mysqli_connect($Call->host,$Call->user,$Call->password,$Call->DB);
    // $conn = mysqli_connect($maineg->host,$maineg->user,$maineg->password,$maineg->DB);
    $orderDate = explode('_',$_GET['InvoiceReport']);
                  $orderDate1 = $orderDate[0];
                  $orderDate2 = $orderDate[1];
    $sql="SELECT *, DATE_FORMAT(created_at, '%H:%i:%s') AS time_created_at FROM invoice_details WHERE `order_date` between '".$orderDate1."' AND '".$orderDate2."' ORDER BY order_date DESC";
    $query=$conn->query($sql)or print(mysqli_error($conn));
     $counter = 1;
        while($row = mysqli_fetch_array($query)) {
            
          echo "<tr>
          <td>".$counter++ ."</td>
          <td>".$row['order_date']." ".$row['time_created_at']."</td>
          <td>".$row['product_code']."</td>
          <td>".$row['product_name']."</td>
          <td>".$row['customer_name']." </td>
          <td>".$row['qty']."</td>
          <td>".$row['kg_weight']."</td>
          <td>".$row['packet']."</td>
          <td>".number_format($row['price'])."</td>
          <td>".number_format($row['total'])."</td>
          </tr>";
        }
     $conn->close();
}



if(isset($_GET['gettotalInvoice'])) {
    $conn = mysqli_connect($Call->host,$Call->user,$Call->password,$Call->DB);
    $orderDate = explode('_',$_GET['gettotalInvoice']);
    $orderDate1 = $orderDate[0];
    $orderDate2 = $orderDate[1];
    $sql="SELECT SUM(total) as amount FROM invoice_details WHERE `order_date` between '".$orderDate1."' AND '".$orderDate2."'";
    $query=$conn->query($sql)or print(mysqli_error($conn));
     $counter = 1;
        while($row = mysqli_fetch_array($query)) {
        echo $row['amount'];
        }
     $conn->close();
   } 



   if(isset($_GET['waybillReport'])) {
    $conn = mysqli_connect($Call->host,$Call->user,$Call->password,$Call->DB);
    // $conn = mysqli_connect($maineg->host,$maineg->user,$maineg->password,$maineg->DB);
    $orderDate = explode('_',$_GET['waybillReport']);
                  $orderDate1 = $orderDate[0];
                  $orderDate2 = $orderDate[1];
    $sql="SELECT *, DATE_FORMAT(created_at, '%H:%i:%s') AS time_created_at FROM waybill WHERE `datex` between '".$orderDate1."' AND '".$orderDate2."' ORDER BY datex DESC";
    $query=$conn->query($sql)or print(mysqli_error($conn));
     $counter = 1;
        while($row = mysqli_fetch_array($query)) {
            
          echo "<tr>
          <td>".$counter++ ."</td>
          <td>".$row['datex']." ".$row['time_created_at']."</td>
          <td>".$row['customer_name']."</td>
          <td>".$row['product_name']."</td>
          <td>".$row['quantity']." </td>
          <td>".$row['kg']."</td>
          <td>".$row['packet']."</td>
          <td>".$row['driver']."</td>
          <td>".$row['vehicle']."</td>
          <td>".$row['location']."</td>   
          <td>".$row['destination']."</td>
          </tr>";
        }
     $conn->close();
}



   if(isset($_GET['receive_payment'])) {
    $conn = mysqli_connect($Call->host,$Call->user,$Call->password,$Call->DB);
    // $conn = mysqli_connect($maineg->host,$maineg->user,$maineg->password,$maineg->DB);
    $orderDate = explode('_',$_GET['receive_payment']);
                  $orderDate1 = $orderDate[0];
                  $orderDate2 = $orderDate[1];
    $sql="SELECT * FROM account_log WHERE `created_at` between '".$orderDate1."' AND '".$orderDate2."' AND `transaction_source`='Sales Due Payment' ORDER BY created_at DESC";
    $query=$conn->query($sql)or print(mysqli_error($conn));
     $counter = 1;
        while($row = mysqli_fetch_array($query)) {
            
            echo "<tr>
            <td>".$counter++ ."</td>
          <td>".$row['created_at']."</td>
           <td>".$row['account_id']."</td>
          <td>".$row['series_name']." </td>
           <td>".$row['transaction_source']."</td>
          <td>".number_format($row['amount'])."</td>
          <td>".$row['staff_id']."</td>
         </tr>";
        }
     $conn->close();
}



if(isset($_GET['getreceive'])) {
    $conn = mysqli_connect($Call->host,$Call->user,$Call->password,$Call->DB);
    $orderDate = explode('_',$_GET['getreceive']);
    $orderDate1 = $orderDate[0];
    $orderDate2 = $orderDate[1]; 
    $sql1="SELECT SUM(amount) as amount FROM account_log WHERE `transaction_date` between '".$orderDate1."' AND '".$orderDate2."' AND  `transaction_source`='Sales Due Payment'" ;
    $query1=$conn->query($sql1)or print(mysqli_error($conn));
     $counter = 1;
        while($row1 = mysqli_fetch_array($query1)) {
            echo number_format($row1['amount']); 
        }
     $conn->close();
   }

// if(isset($_GET['gettotalWaybill'])) {
//     $conn = mysqli_connect($Call->host,$Call->user,$Call->password,$Call->DB);
//     $orderDate = explode('_',$_GET['gettotalWaybill']);
//     $orderDate1 = $orderDate[0];
//     $orderDate2 = $orderDate[1];
//     $sql="SELECT SUM(total) as amount FROM waybill WHERE `datex` between '".$orderDate1."' AND '".$orderDate2."'";
//     $query=$conn->query($sql)or print(mysqli_error($conn));
//      $counter = 1;
//         while($row = mysqli_fetch_array($query)) {
//         echo $row['amount'];
//         }
//      $conn->close();
//    } 


//   if(isset($_GET['getrece'])) {
//     $conn = mysqli_connect($Call->host,$Call->user,$Call->password,$Call->DB);
//     $orderDate = explode('_',$_GET['getrece']);
//     $orderDate1 = $orderDate[0];
//     $orderDate2 = $orderDate[1]; 
//     $sql1="SELECT SUM(amount) as amount FROM account_log WHERE `transaction_date` between '".$orderDate1."' AND '".$orderDate2."' AND account_id ='1200_ACCOUNT_RECEIVABLE'";
//     $query1=$conn->query($sql1)or print(mysqli_error($conn));
//      $counter = 1;
//         while($row1 = mysqli_fetch_array($query1)) {
//             echo number_format($row1['amount']); 
//         }
//      $conn->close();
//   }






   if(isset($_GET['getpurc'])) {
    $conn = mysqli_connect($Call->host,$Call->user,$Call->password,$Call->DB);
    $orderDate = explode('_',$_GET['getpurc']);
    $orderDate1 = $orderDate[0];
    $orderDate2 = $orderDate[1]; 
    // $sql1="SELECT SUM(total_purchase) as amount FROM stockin WHERE created_date between '".$orderDate1."' AND '".$orderDate2."'";
     $sql1="SELECT SUM(cost_of_goods) as amount FROM invoice_details WHERE `order_date` between '".$orderDate1."' AND '".$orderDate2."'";
    $query1=$conn->query($sql1)or print(mysqli_error($conn));
     $counter = 1;
        while($row1 = mysqli_fetch_array($query1)) {
            echo number_format($row1['amount']); 
        }
     $conn->close();
   }


   if(isset($_GET['geterxpense'])) {
    $conn = mysqli_connect($Call->host,$Call->user,$Call->password,$Call->DB);
    $orderDate = explode('_',$_GET['geterxpense']);
    $orderDate1 = $orderDate[0];
    $orderDate2 = $orderDate[1]; 
    $sql1="SELECT SUM(amount) as amount FROM account_log WHERE `transaction_date` between '".$orderDate1."' AND '".$orderDate2."' AND account_id ='6000_EXPENSES'" ;
    $query1=$conn->query($sql1)or print(mysqli_error($conn));
     $counter = 1;
        while($row1 = mysqli_fetch_array($query1)) {
            echo number_format($row1['amount']); 
        }
     $conn->close();
   }


   if(isset($_GET['custInv'])) {
    $conn = mysqli_connect($Call->host,$Call->user,$Call->password,$Call->DB);
    // $conn = mysqli_connect($maineg->host,$maineg->user,$maineg->password,$maineg->DB);
    $orderDate = explode('*',$_GET['custInv']);
                  $orderDate1 = $orderDate[0];
                  $orderDate2 = $orderDate[1];
                   $customer = $orderDate[2];
    $sql="SELECT *, DATE_FORMAT(created_at, '%H:%i:%s') AS time_created_at FROM invoice_details WHERE `order_date` between '".$orderDate1."' AND '".$orderDate2."' AND customer='$customer' GROUP BY invoice_id ORDER BY `order_date`  DESC";
    $query=$conn->query($sql)or print(mysqli_error($conn));
     $counter = 1;
        while($row = mysqli_fetch_array($query)) {
            
            
           echo "<tr>
           <td>". $counter++ ."</td>
           <td>". $row['order_date'] ."</td>
            <td>". $row['time_created_at'] ."</td>
           <td>".$row['invoice_id']."</td>
           <td>".$row['product_name'] ." </td>
           <td>". number_format($row['price'])."</td>
           <td>". number_format($row['total'])."</td>
           <td>". number_format($row['cost_of_goods'])."</td>
           <td><a href='?action=DetailsCustInvoice&&SelCus=".$row['invoice_id']."' class='btn btn-sm btn-primary' data-toggle='tooltip' data-placement='top' title='Click  to View Invoice'>View Invoice</a></td>
         </tr>";
        }
       
     $conn->close();
}




    if(isset($_GET['getCash1'])) {
    $conn = mysqli_connect($Call->host,$Call->user,$Call->password,$Call->DB);
    $orderDate = explode('_',$_GET['getCash1']);
    $orderDate1 = $orderDate[0];
    $orderDate2 = $orderDate[1]; 
    
    $sql1="SELECT SUM(amount) AS total_amount FROM ( SELECT invoice_id, MAX(paid) AS amount FROM invoice_details WHERE order_date BETWEEN '".$orderDate1."' AND '".$orderDate2."' GROUP BY invoice_id ) subquery" ;

    $query1=$conn->query($sql1)or print(mysqli_error($conn));
     $counter = 1;
        while($row1 = mysqli_fetch_array($query1)) {
            echo number_format($row1['total_amount']); 
        }
     $conn->close();
   }




 if(isset($_GET['IncoM'])) {
    $conn = mysqli_connect($Call->host,$Call->user,$Call->password,$Call->DB);
    $orderDate = explode('_',$_GET['IncoM']);
    $orderDate1 = $orderDate[0];
    $orderDate2 = $orderDate[1]; 

    $sql1="SELECT SUM(amount) as amount FROM payment_voucher WHERE `voucher_date` between '".$orderDate1."' AND '".$orderDate2."' AND trans_type='credit'";
    $query1=$conn->query($sql1)or print(mysqli_error($conn));
     $counter = 1;
        while($row1 = mysqli_fetch_array($query1)) {
            echo number_format($row1['amount']); 
        }
     $conn->close();
   }
   


   if(isset($_GET['ordr_In'])) {
    $conn = mysqli_connect($Call->host,$Call->user,$Call->password,$Call->DB);
    // $conn = mysqli_connect($maineg->host,$maineg->user,$maineg->password,$maineg->DB);
    $orderDate = explode('_',$_GET['ordr_In']);
                  $orderDate1 = $orderDate[0];
                  $orderDate2 = $orderDate[1];
    $sql="SELECT * FROM payment_voucher WHERE `voucher_date` between '".$orderDate1."' AND '".$orderDate2."' AND trans_type='credit'";
    $query=$conn->query($sql)or print(mysqli_error($conn));
     $counter = 1;
        while($row = mysqli_fetch_array($query)) {
            
            echo "<tr>
            <td>". $counter++ ."</td>
          <td>". $row['voucher_date'] ."</td>
           <td>".$row['voucher_id']."</td>
          <td>".$row['customer_name'] ." </td>
           <td>".$row['purpose']."</td>
           <td>". number_format($row['amount'])."</td>
         </tr>";
        }
       

     $conn->close();
}



// if(isset($_GET['Inco'])) {
//     $conn = mysqli_connect($Call->host,$Call->user,$Call->password,$Call->DB);
//     $orderDate = explode('_',$_GET['Inco']);
//     $orderDate1 = $orderDate[0];
//     $orderDate2 = $orderDate[1]; 

//     $sql1="SELECT SUM(amount) as amount FROM payment_voucher WHERE `voucher_date` between '".$orderDate1."' AND '".$orderDate2."' AND trans_type='credit'";
//     $query1=$conn->query($sql1)or print(mysqli_error($conn));
//      $counter = 1;
//         while($row1 = mysqli_fetch_array($query1)) {
//             echo number_format($row1['amount']); 
//         }
//      $conn->close();
//    }


   if(isset($_GET['Inco'])) {
    $conn = mysqli_connect($Call->host,$Call->user,$Call->password,$Call->DB);
    $orderDate = explode('_',$_GET['Inco']);
    $orderDate1 = $orderDate[0];
    $sql1="SELECT SUM(amount) as amount FROM payment_voucher WHERE `voucher_date` between '".$orderDate1."' AND '".$orderDate2."' AND trans_type='credit'";
    $query=$conn->query($sql)or print(mysqli_error($conn));
     $counter = 1;
        while($row = mysqli_fetch_array($query)) {
        echo $row['amount'];
        }
     $conn->close();
   } 
   
   
   
   // if(isset($_GET['getreceive'])) {
   //  $conn = mysqli_connect($Call->host,$Call->user,$Call->password,$Call->DB);
   //  $orderDate = explode('_',$_GET['getreceive']);
   //  $orderDate1 = $orderDate[0];
   //  $orderDate2 = $orderDate[1]; 
   //  $sql1="SELECT SUM(amount) as amount FROM account_log WHERE `transaction_date` between '".$orderDate1."' AND '".$orderDate2."' AND  `transaction_source`='Sales Due Payment'" ;
   //  $query1=$conn->query($sql1)or print(mysqli_error($conn));
   //   $counter = 1;
   //      while($row1 = mysqli_fetch_array($query1)) {
   //          echo number_format($row1['amount']); 
   //      }
   //   $conn->close();
   // }
   
   
   
    if(isset($_GET['getrece'])) {
    $conn = mysqli_connect($Call->host,$Call->user,$Call->password,$Call->DB);
    $orderDate = explode('_',$_GET['getrece']);
    $orderDate1 = $orderDate[0];
    $orderDate2 = $orderDate[1]; 
    $sql1="SELECT SUM(due) AS due FROM (SELECT invoice_id, MAX(due) AS due FROM invoice_details WHERE order_date BETWEEN '".$orderDate1."' AND '".$orderDate2."' GROUP BY invoice_id) subquery";
    
     //$sql1="SELECT SUM(amount) AS total_amount FROM ( SELECT invoice_id, MAX(due) AS amount FROM invoice_details WHERE order_date BETWEEN '".$orderDate1."' AND '".$orderDate2."' GROUP BY invoice_id ) subquery" ;
    
    // $sql1="SELECT SUM(amount) as amount FROM account_log WHERE `transaction_date` between '".$orderDate1."' AND '".$orderDate2."' AND account_id ='1200_ACCOUNT_RECEIVABLE'";
    $query1=$conn->query($sql1)or print(mysqli_error($conn));
     $counter = 1;
        while($row1 = mysqli_fetch_array($query1)) {
            echo number_format($row1['due']); 
        }
     $conn->close();
   }
   
   
   if(isset($_GET['getSTKK'])) {
    $conn = mysqli_connect($Call->host,$Call->user,$Call->password,$Call->DB);
    $orderDate = explode('_',$_GET['getSTKK']);
    $orderDate1 = $orderDate[0];
    $orderDate2 = $orderDate[1]; 
    $sql1="SELECT SUM(total_purchase) as amount FROM stockin WHERE created_date between '".$orderDate1."' AND '".$orderDate2."' AND status='instock'";
     // $sql1="SELECT SUM(cost_of_goods) as amount FROM invoice_details WHERE `order_date` between '".$orderDate1."' AND '".$orderDate2."'";
    $query1=$conn->query($sql1)or print(mysqli_error($conn));
     $counter = 1;
        while($row1 = mysqli_fetch_array($query1)) {
            echo number_format($row1['amount']); 
        }
     $conn->close();
   }




        if(isset($_GET['getPU'])) {
     $conn = mysqli_connect($Call->host,$Call->user,$Call->password,$Call->DB);
     $orderDate = explode('_',$_GET['getPU']);
     $orderDate1 = $orderDate[0];
     $orderDate2 = $orderDate[1]; 
     $sql1="SELECT SUM(total_purchase) as amount FROM stockin WHERE created_date between '".$orderDate1."' AND '".$orderDate2."' ";
      // $sql1="SELECT SUM(cost_of_goods) as amount FROM invoice_details WHERE `order_date` between '".$orderDate1."' AND '".$orderDate2."'";
     $query1=$conn->query($sql1)or print(mysqli_error($conn));
      $counter = 1;
         while($row1 = mysqli_fetch_array($query1)) {
             echo number_format($row1['amount']); 
         }
      $conn->close();
    }






?>