                    <div class="page-title-box">
                            <div class="row align-items-center">
                                <div class="col-md-8">
                                    <h6 class="page-title">Returned Invoice</h6>
                                </div>
                                <!-- <div class="col-md-4">
                                    <div class="float-end d-none d-md-block">
                                        <div class="dropdown">
                                            <a href="?action=ReturnDamage" class="btn btn-sm btn-primary waves-effect waves-light"><i class="fas fa-edit  fa-sm  text-white"></i> Return Item</a>
                                        </div>
                                    </div>
                                </div> -->
                            </div>
                        </div>


                        <div class="row">
                            <div class="col-12">
                                <div class="card">
                                    <div class="card-body">
                                        <table id="datatable-buttons" class="table table-striped table-bordered dt-responsive nowrap p-2 " style="border-collapse: collapse; border-spacing: 0; width: 100%;">
                                            <thead>
                                                <tr>
                                                    <tr>
                                                    <th>SN</th>
                                                    <th>Invoice</th>
                                                    <th>Date</th>
                                                    <th>Return_Date</th>
                                                    <th>Customer</th> 
                                                    <th>Item Name</th> 
                                                    <th>Qty</th>
                                                    <th>Color</th>
                                                    <th>Meter</th>
                                                    <th>kg</th>
                                                    <th>Packet</th>
                                                    <th>Item Code</th>
                                                    <th>Price</th>
                                
                                                     <th>##</th>
                                                    
                                                 </tr>
                                            </thead>


                                            <tbody>
                                            <?php
                                           $maineg = new mainClass();
                                           $result = $maineg->Fetch_InvoiceReturn();
                                           $count = 1;
                                                  if(!empty($result)){
                                                     foreach ($result as $k => $v) { 
                                                echo'<tr>
                                      <td>'.$count++.'</td>
                                      <td>'.$result[$k]["invoice_id"].'</td>
                                      <td>'.$result[$k]["order_date"].'</td>
                                      <td>'.$result[$k]["updated_at"].'</td>
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
                                         <td>'.$result[$k]["price"].'</td>';
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