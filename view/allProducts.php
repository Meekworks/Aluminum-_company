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
                                                    <th>Product</th> 
                                                    <th>Brand</th> 
                                                    <th>Code</th>
                                                    <th>Color</th>
                                                    <th>Size</th>
                                                    <th>Category</th>
                                                    <th>Unit</th>
                                                    <th>Image</th>
                                                    <th>View</th>   
                                                </tr>
                                            </thead>


                                            <tbody>
                                               <?php
                                           $maineg = new mainClass();
                                           $result = $maineg->allProductAdmin();
                                           $count = 1;
                                                  if(!empty($result)){
                                                     foreach ($result as $k => $v) {     
                                      echo'<tr>
                                      <td>'.$count++.'</td>
                                      
                                      <td>'.$result[$k]["product_name"].'</td>
                                      <td>'.$result[$k]["brand"].'</td>
                                      <td>'.$result[$k]["product_code"].'</td>
                                       <td>'.$result[$k]["color"].'</td>
                                       <td>'.$result[$k]["size"].'</td>
                                       <td>'.$result[$k]["category"].'</td>
                                        <td>'.$result[$k]["product_satuan"].'</td>
                                       <td><a href="view/product_image/'.$result[$k]["image"].'"><img src="view/product_image/'.$result[$k]["image"].'" style="height:60px;"></a></td>

                                       <td><a href="?action=seePro&&viewProduct='.$result[$k]["id"].'">
                                <span class="fa fa-eye btn btn-primary waves-effect d-grid btn-responsive text-white"></span></a></td>
                                                </tr>';
                                                }
                                              }
                                           ?>
                                     
                                            </tbody>
                                        </table>

                                    </div>
                                </div>
                            </div> <!-- end col -->
                        </div> <!-- end row -->


                       <!--  <td><span class="badge rounded-pill bg-success  p-2">'.$result[$k]["stock"].'</span></td>
                                      <td><span class="badge rounded-pill bg-info p-2">'.$result[$k]["product_satuan"].'</span></td>

                                      <td><a href="?action=editPro&&editProDeatails='.$result[$k]["product_code"].'">
                                        <span class="fa fa-edit btn btn-warning waves-effect d-grid btn-responsive text-white"></span></a></td>

                                     


                                         <td><form method="post"><button type="submit" name="del" class="btn btn-danger aves-effect d-grid btn-responsive text-white" onclick="javascript:confirmationDelete($(this));return false;" id="'.$result[$k]["id"].'" value="'.$result[$k]["id"].'"><span class="fa fa-trash-alt"></span></button></form></td>




                                       <td><a href="?action=seePro&&viewProduct='.$result[$k]["id"].'">
                                <span class="fa fa-eye btn btn-primary waves-effect d-grid btn-responsive text-white"></span></a></td> -->


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