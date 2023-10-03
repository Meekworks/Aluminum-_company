<?php


  require_once "../model/function.php";
  $Call = new mainClass();
//intant Fetch for for Selecting Student on option

//   if(isset($_GET['filterMenuStReg1'])) {
//     $conn = mysqli_connect($Call->host,$Call->user,$Call->password,$Call->DB);

//     $fieldName=$_GET['filterMenuStReg1'];

//     $sql="SELECT * FROM customer_partner WHERE Reference_ID='".$fieldName."' AND status='Approve' ";
//     $query=$conn->query($sql)or print(mysqli_error($conn));

//   while($data=$query->fetch_assoc()){
//     echo  '<option>'.$data['account_ID'].'-'.$data['lastname']. '</option>';
//   }
//     $conn->close();


// }


//   if(isset($_GET['AcountID'])) {
//     $conn = mysqli_connect($Call->host,$Call->user,$Call->password,$Call->DB);
//     // $conn = mysqli_connect($maineg->host,$maineg->user,$maineg->password,$maineg->DB);

//     $SiteID=$_GET['AcountID'];

//     $sql="SELECT * FROM sites WHERE Reference_ID='".$SiteID."' OR Customer_ID='".$SiteID."' ";
//     $query=$conn->query($sql)or print(mysqli_error($conn));

//   while($data=$query->fetch_assoc()){
//     echo  '<option>'.$data['site_ID'].'-'.$data['lastname']. '</option>';
//   }
//     $conn->close();


// }






  if(isset($_GET['AcountID'])) {
    $conn = mysqli_connect($Call->host,$Call->user,$Call->password,$Call->DB);
    // $conn = mysqli_connect($maineg->host,$maineg->user,$maineg->password,$maineg->DB);

    $SiteID=$_GET['AcountID'];

    $sql="SELECT * FROM stock_table WHERE product='".$SiteID."'";
    $query=$conn->query($sql)or print(mysqli_error($conn));

  while($data=$query->fetch_assoc()){
    echo $data['item_code'];
  }
    $conn->close();
}



 if(isset($_GET['customer_reg'])) {
    $conn = mysqli_connect($Call->host,$Call->user,$Call->password,$Call->DB);
    // $conn = mysqli_connect($maineg->host,$maineg->user,$maineg->password,$maineg->DB);

    $SiteID=$_GET['customer_reg'];

    $sql="SELECT * FROM customer_distributor WHERE account_id='".$SiteID."'";
    $query=$conn->query($sql)or print(mysqli_error($conn));

  while($data=$query->fetch_assoc()){
    echo $data['address']."-".$data['phone'];
    // echo $data['phone'];

  }
    $conn->close();
}


if(isset($_GET['product_code'])) {
    $conn = mysqli_connect($Call->host,$Call->user,$Call->password,$Call->DB);
    // $conn = mysqli_connect($maineg->host,$maineg->user,$maineg->password,$maineg->DB);

    $SiteID=$_GET['product_code'];

    $sql="SELECT * FROM stock_table WHERE item_code='".$SiteID."'";
    $query=$conn->query($sql)or print(mysqli_error($conn));

  while($data=$query->fetch_assoc()){
    echo $data['product']."_".$data['brand']."_".$data['category']."_".$data['quantity']."_".$data['sell_price']."_".$data['color']."_".$data['size']."_".$data['item_code']."_".$data['unit'];
    // echo $data['phone'];

  }
}


if(isset($_GET['proimage'])) {
    $conn = mysqli_connect($Call->host,$Call->user,$Call->password,$Call->DB);
    // $conn = mysqli_connect($maineg->host,$maineg->user,$maineg->password,$maineg->DB);

    $SiteID=$_GET['proimage'];

    $sql="SELECT * FROM products WHERE product_code='".$SiteID."'";
    $query=$conn->query($sql)or print(mysqli_error($conn));

  while($data=$query->fetch_assoc()){
    echo $data['image'];
    // echo $data['phone'];

  }
}



if(isset($_GET['p_code'])) {
    $conn = mysqli_connect($Call->host,$Call->user,$Call->password,$Call->DB);
    // $conn = mysqli_connect($maineg->host,$maineg->user,$maineg->password,$maineg->DB);

    $SiteID=$_GET['p_code'];

    $sql="SELECT * FROM products WHERE product_code='".$SiteID."'";
    $query=$conn->query($sql)or print(mysqli_error($conn));

  while($data=$query->fetch_assoc()){
    echo $data['product_name']."-".$data['product_name']."-".$data['stock']."-".$data['sell_price']."-".$data['image']."-".$data['color']."-".$data['product_code'];
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


if(isset($_GET['ordr_date'])) {
    $conn = mysqli_connect($Call->host,$Call->user,$Call->password,$Call->DB);
    // $conn = mysqli_connect($maineg->host,$maineg->user,$maineg->password,$maineg->DB);
    $orderDate = explode('_',$_GET['ordr_date']);
                  $orderDate1 = $orderDate[0];
                  $orderDate2 = $orderDate[1];
    $sql="SELECT * FROM stock_log WHERE `stock_date` between '".$orderDate1."' AND '".$orderDate2."'";
    $query=$conn->query($sql)or print(mysqli_error($conn));
     $counter = 1;
        while($row = mysqli_fetch_array($query)) {
            
            echo "<tr>
            <td>". $counter++ ."</td>
          <td>". $row['stock_date'] ."</td>
           <td>".$row['item_code']."</td>
          <td>".$row['product'] ." </td>
           <td>". $row['purchase_price'] ."</td>
          <td>". $row['quantity'] ."</td>
           <td>". $row['total'] ."</td>
         </tr>";
        }
       

     $conn->close();
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
          <td>". $row['price'] ."</td>
          <td>". $row['qty'] ."</td>
          <td>". $row['total'] ."</td>
          <td>". $row['paid'] ."</td>
          <td>". $row['due'] ."</td>
         </tr>";
        }
     $conn->close();
}



if(isset($_GET['gettotal'])) {
    $conn = mysqli_connect($Call->host,$Call->user,$Call->password,$Call->DB);
    $orderDate = explode('_',$_GET['gettotal']);
    $orderDate1 = $orderDate[0];
    $orderDate2 = $orderDate[1];
    $sql="SELECT SUM(qty) as totalvalue FROM invoice_details WHERE `order_date` between '".$orderDate1."' AND '".$orderDate2."'";
    $query=$conn->query($sql)or print(mysqli_error($conn));
     $counter = 1;
        while($row = mysqli_fetch_array($query)) {
            echo $row['totalvalue'];
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
            echo $row['totalpaid'];
        }   
     $conn->close();
   }




if(isset($_GET['gettotal_stock'])) {
    $conn = mysqli_connect($Call->host,$Call->user,$Call->password,$Call->DB);
    $orderDate = explode('_',$_GET['gettotal_stock']);
    $orderDate1 = $orderDate[0];
    $orderDate2 = $orderDate[1];
    $sql="SELECT SUM(quantity) as totalvalue FROM stock_log WHERE `stock_date` between '".$orderDate1."' AND '".$orderDate2."'";
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
    $sql="SELECT SUM(total) as totalpaid FROM stock_log WHERE `stock_date` between '".$orderDate1."' AND '".$orderDate2."'";
    $query=$conn->query($sql)or print(mysqli_error($conn));
     $counter = 1;
        while($row = mysqli_fetch_array($query)) {
            echo $row['totalpaid'];
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




   if(isset($_GET['pr_code'])) {
    $conn = mysqli_connect($Call->host,$Call->user,$Call->password,$Call->DB);
    // $conn = mysqli_connect($maineg->host,$maineg->user,$maineg->password,$maineg->DB);

    $SiteID=$_GET['pr_code'];

    $sql="SELECT * FROM products WHERE product_code='".$SiteID."'";
    $query=$conn->query($sql)or print(mysqli_error($conn));

  while($data=$query->fetch_assoc()){
    echo $data['product_name']."_".$data['brand']."_".$data['description']."_".$data['color']."_".$data['size']."_".$data['category']."_".$data['image']."_".$data['product_satuan']."_".$data['product_code'];
    // echo $data['phone'];

  }
}



   if(isset($_GET['prs_code'])) {
    $conn = mysqli_connect($Call->host,$Call->user,$Call->password,$Call->DB);
    // $conn = mysqli_connect($maineg->host,$maineg->user,$maineg->password,$maineg->DB);

    $SiteID=$_GET['prs_code'];

    $sql="SELECT * FROM  warehouse WHERE product_code='".$SiteID."'";
    $query=$conn->query($sql)or print(mysqli_error($conn));

  while($data=$query->fetch_assoc()){
    echo $data['ProductName']."_".$data['Brand']."_".$data['description']."_".$data['Color']."_".$data['Size']."_".$data['Category']."_".$data['image']."_".$data['record_form']."_".$data['product_code']."_".$data['cost_price'];
    // echo $data['phone'];

  }
}



if(isset($_GET['inv_id'])) {
    $conn = mysqli_connect($Call->host,$Call->user,$Call->password,$Call->DB);
    // $conn = mysqli_connect($maineg->host,$maineg->user,$maineg->password,$maineg->DB);

    $SiteID=$_GET['inv_id'];

    $sql="SELECT * FROM invoice_details WHERE invoice_id='".$SiteID."'";
    $query=$conn->query($sql)or print(mysqli_error($conn));

  while($data=$query->fetch_assoc()){
    echo $data['customer_name']."-".$data['invoice_id'];
    // echo $data['phone'];

  }
}





?>