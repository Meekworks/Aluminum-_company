    <div class="page-title-box">
                            <div class="row align-items-center">
                                <div class="col-md-8">
                                    <h6 class="page-title">Manage Price</h6>
                                </div>
                                <!-- <div class="col-md-4">
                                    <div class="float-end d-none d-md-block">
                                        <div class="dropdown">
                                            <a href="?action=AddExpense" class="btn btn-primary waves-effect waves-light"><i class="fas fa-edit  fa-sm text-white"></i> Back</a>
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
                                                <th>Item Name</th>
                                                <th>Category</th>
                                                <th>Brand</th>
                                                <th>Item Code</th>
                                                <th>Cost</th>
                                                <th>Price</th>
                                                <th>Color</th>
                                                <th>Unit</th>
                                                <th>Size</th>
                                                <th>View</th>    
                                                </tr>
                                            </thead>


                                            <tbody>
                                            <?php 
                                            $maineg = new  mainClass();
                                            $result = $maineg->GetStockin();
                                            $count = 1; 
                      
                                            if (!empty($result)) {
                                            foreach ($result as $k => $v) { 
                                            echo '
                                            <tr>
                                             <td>'.$count++.'</td>
                                             <td>'.$result[$k]["product"].'</td>
                                             <td>'.$result[$k]["brand"].'</td>
                                             <td>'.$result[$k]["category"].'</td>
                                             <td>'.$result[$k]["item_code"].'</td>
                                             <td>'.$result[$k]["purchase_price"].'</td>
                                             <td>'.$result[$k]["sell_price"].'</td>
                                             <td>'.$result[$k]["color"].'</td>
                                             <td>'.$result[$k]["unit"].'</td>
                                              <td>'.$result[$k]["size"].'</td>';
                                             // if($DBinfo['role'] == "CEO" || $DBinfo['role'] == "MD" ){
                                                 
                                             //    echo '<td><a class="btn btn-success btn-sm btn-responsive text-white" href="?action=PriceManage&&PriceManageDeatails='.$result[$k]["item_code"].'">Edit</a>';
                                             // }else{
                                             //     echo '<td><a class="btn btn-success btn-sm btn-responsive text-white disabled" href="?action=PriceManage&&PriceManageDeatails='.$result[$k]["item_code"].'">Edit</a>';
                                             // }
                                           
                                             echo'

                                             <td><a class="btn btn-success btn-sm btn-responsive text-white" href="?action=PriceManage&&PriceManageDeatails='.$result[$k]["item_code"].'">Edit</a>
                                                
                                             </td>
                                             
                                            </tr>
                                            '; }}?>
                                            </tbody>
                                        </table>

                                    </div>
                                </div>
                            </div> 
                        </div> 



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