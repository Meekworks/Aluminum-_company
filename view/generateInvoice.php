    <div class="page-title-box">
                            <div class="row align-items-center">
                                <div class="col-md-8">
                                    <h6 class="page-title">View Invoice</h6>
                                </div>
                                <!-- <div class="col-md-4">
                                    <div class="float-end d-none d-md-block">
                                        <div class="dropdown">
                                            <a href="?action=addPro" class="btn btn-primary waves-effect waves-light"><i class="fas fa-edit  fa-sm text-white"></i> Add New Products</a>
                                        </div>
                                    </div>
                                </div> -->
                            </div>
                        </div>


                        <div class="row">
                            <div class="col-12">
                                <div class="card">
                                    <div class="card-body">
                                        <table id="datatable-buttons" class="table table-striped table-bordered dt-responsive nowrap" style="border-collapse: collapse; border-spacing: 0; width: 100%;">
                                            <thead>
                                                 <tr>
                                                 <th>SN</th>
                                                 <th>Invoice</th>
                                                 <th>Date</th>
                                                 <th>Customer </th> 
                                                 <th> Phone</th> 
                                                 <th> Address</th>
                                                 <th> Type</th>
                                                 <th>Status</th>
                                                 <th>Sales Rep</th>
                                                 <th>Confirm</th>
                                                 <th>View</th>
                                                 </tr>
                                            </thead>


                                            <tbody>
                                              <?php
                                           $maineg = new mainClass();
                                           $result = $maineg->Fetch_All_Quotes();
                                           $count = 1;
                                                  if(!empty($result)){
                                                     foreach ($result as $k => $v) { 
                                                echo'<tr>
                                      <td>'.$count++.'</td>
                                      <td>'.$result[$k]["invoice_id"].'</td>
                                      <td>'.$result[$k]["order_date"]." ".$result[$k]["time_created_at"].'</td>
                                       <td>'.$result[$k]["customer_name"].'</td>
                                       
                                     <td>'.$result[$k]["phone"].'</td>
                                      <td>'.$result[$k]["address"].'</td>
                                      <td>'.$result[$k]["mode_payment"].'</td>
                                      <td>'.$result[$k]["approve_sale"].'</td>
                                      <td>'.$result[$k]["sales_rep"].'</td>';
                                      
                                      
                                        if($result[$k]["approve_sale"] == "not_approved" && $result[$k]["sales_confirm"] == "not_confirmed"){

                                        echo '<td><a class="btn btn-success btn-sm btn-responsive text-white" href="?action=confirm_InSale&&SalesConfr='.$result[$k]["invoice_id"].'">Confirm Sale</a></td>';

                                      }elseif($result[$k]["approve_sale"] == "not_approved" && $result[$k]["sales_confirm"] == "not_confirmed"){
                                          
                                          echo '<td><a class="btn btn-warning btn-sm btn-responsive text-white disabled" href="">Confirm Sales</a></td>';
                                          
                                      }elseif($result[$k]["sales_confirm"] == "confirmed"){
                                          echo '<td><a class="btn btn-success btn-sm btn-responsive text-white disabled" href="">Confirmed</a></td>';
                                      }else{
                                          
                                           echo '<td>'.$result[$k]["sales_confirm"].'</td>';
                                          
                                      }

                                      if($result[$k]["approve_sale"] == "not_approved" && $result[$k]["sales_confirm"] == "confirmed"){

                                        echo '<td><a class="btn btn-success btn-sm btn-responsive text-white" href="?action=Approve_InSale&&SalesDeatails='.$result[$k]["invoice_id"].'">Approve Sale</a></td>';

                                      }elseif($result[$k]["approve_sale"] == "not_approved" && $result[$k]["sales_confirm"] == "not_confirmed"){

                                         echo '<td><a class="btn btn-warning btn-sm btn-responsive text-white disabled" href="?action=Approve_InSale&&SalesDeatails='.$result[$k]["invoice_id"].'">Not Approved</a></td>';

                                      }elseif($result[$k]["approve_sale"] == "Approved"){

                                        echo '
                                        <td><a href="?action=quoteDetails&&SelQuote='.$result[$k]["invoice_id"].'" class="btn btn-sm btn-primary" data-toggle="tooltip" data-placement="top" title="Click  to View Invoice">View Invoice</a></td>';

                                      }else{
                                          echo '<td><a class="btn btn-warning btn-sm btn-responsive text-white disabled" href="?action=Approve_InSale&&SalesDeatails='.$result[$k]["invoice_id"].'">Not Approved</a></td>';
                                        // echo '
                                        // <td><a href="?action=quoteDetails&&SelQuote='.$result[$k]["invoice_id"].'" class="btn btn-sm btn-primary disabled" data-toggle="tooltip" data-placement="top" title="Click  to View Invoice">View Invoice</a></td>';
                                      }
                            
                                         echo         
                                          '</tr>';
                                            }}
                                           ?>
                                            </tbody>
                                        </table>

                                    </div>
                                </div>
                            </div> <!-- end col -->
                        </div> <!-- end row -->


                

                        <script type="text/javascript">
                           function confirmationDelete(anchor)
                        {
                           var conf = confirm('Are you sure want to delete this record?');
                           if(conf)
                              // window.location=anchor.attr("href");
                              //   // window.location='?action=Catery';
                              this.form.submit();
                        }
                        </script>