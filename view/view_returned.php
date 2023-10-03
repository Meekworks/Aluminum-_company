    <div class="page-title-box">
                            <div class="row align-items-center">
                                <div class="col-md-8">
                                    <h6 class="page-title">All Products</h6>
                                </div>
                                <div class="col-md-4">
                                    <div class="float-end d-none d-md-block">
                                        <div class="dropdown">
                                            <a href="?action=addPro" class="btn btn-primary waves-effect waves-light"><i class="fas fa-edit  fa-sm text-white"></i> Add New Products</a>
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
                                                    <th>Customer</th>
                                                    <th>Reference</th> 
                                                    <th>Product </th>
                                                    <th>Brand </th>
                                                    <th>Qty</th>
                                                    <th>Size</th>
                                                    <th>Color</th>
                                                    <th>Status</th>
                                                    <th>Returned_Date</th>
                                                  
                                                    <th>#</th>
                                                </tr>
                                            </thead>


                                            <tbody>
                                                  <?php 
                                        $maineg = new  mainClass();
                                        $result = $maineg->allReturn();
                                        $count = 1; 
                                        if (!empty($result)) {
                                            foreach ($result as $k => $v) { 
                                            echo '
                                            <tr>
                                            <td>'.$count++.'</td>
                                            <td>'.$result[$k]["customer"].'</td>
                                            <td>'.$result[$k]["reference_no"].'</td>
                                            <td>'.$result[$k]["product_name"].'</td>
                                            <td>'.$result[$k]["brand"].'</td>
                                            <td>'.$result[$k]["quantity"].'</td>
                                            <td>'.$result[$k]["size"].'</td>
                                            <td>'.$result[$k]["color"].'</td>
                                            <td>'.$result[$k]["status"].'</td>
                                            <td>'.$result[$k]["return_date"].'</td>';

                                                 if($result[$k]["status"] == "unsettled"){

                                                    echo '<td><a href="?action=SettleRC&&viewUnsettleC='.$result[$k]["reference_no"].'"><span class="btn btn-primary btn-block btn-sm btn-responsive text-white text-center">Settle</span></a></td>';

                                                 }else{

                                                     echo '<td><span class="text-success text-center">Settled</span></td>';

                                                }
                                             
                                             '</tr>'; 
                                                }
                                            }?>
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