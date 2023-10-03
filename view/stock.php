    <div class="page-title-box">
                            <div class="row align-items-center">
                                <div class="col-md-8">
                                    <h6 class="page-title">Stock</h6>
                                </div>
                                <div class="col-md-4">
                                    <div class="float-end d-none d-md-block">
                                        <div class="dropdown">
                                            <a href="?action=AddStk" class="btn btn-primary waves-effect waves-light"><i class="fas fa-edit  fa-sm text-white"></i> Add Stock Store</a>
                                        </div>
                                    </div>
                                </div>
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
                                                    <th>Product_Name</th>
                                                    <th>Last Updated</th> 
                                                    <th>Quantity</th>
                                                    <th>Stock Min </th>
                                                    <th>Purchase Price</th>
                                                    <th>Selling Price</th>
                                                    <th>Status</th>
                                                    <th>#</th>
                                                </tr>
                                            </thead>


                                            <tbody>
                                             <?php 
                                                    $maineg = new  mainClass();
                                                    $result = $maineg->allStock();
                                                    $count = 1; 
                          
                                                if (!empty($result)) {
                                                foreach ($result as $k => $v) { 
                                                echo '
                                                <tr>
                                                 <td>'.$count++.'</td>
                                                 <td>'.$result[$k]["product"].'</td>
                                                 <td>'.$result[$k]["stock_date"].'</td>
                                                 <td>'.$result[$k]["quantity"].'</td>
                                                 <td>'.$result[$k]["min_stock"].'</td>
                                                 <td>₦'.$result[$k]["purchase_price"].'</td>
                                                 <td>₦'.$result[$k]["sell_price"].'</td>
                                                 <td>'.$result[$k]["status"].'</td>
                                                 <td><a href="?action=seeStock&&InStockDetails='.$result[$k]["item_code"].'">
                                                 <span class="fa fa-eye btn btn-primary btn-block btn-responsive text-white">&nbsp;&nbsp;view</span></a></td>
                                                </tr>
                                                '; }}?>
                                            </tbody>
                                        </table>

                                    </div>
                                </div>
                            </div> <!-- end col -->
                        </div> <!-- end row -->

                         <!-- <td><form method="post"><button type="submit" name="del" class="btn btn-danger waves-effect d-grid btn-responsive text-white" $form->setAction(htmlspecialchars($_SERVER["PHP_SELF"]), $add_get_vars = true);btn-responsive text-white" onclick="javascript:confirmationDelete($(this));return false;" id="'.$result[$k]["id"].'" value="'.$result[$k]["id"].'"><span class="fa fa-trash-alt"></span></button></form></td> -->




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