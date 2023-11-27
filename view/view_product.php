    <div class="page-title-box">
                            <div class="row align-items-center">
                                <div class="col-md-8">
                                    <h6 class="page-title">All Products</h6>
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
                                                <th>#</th>
                                                <th>Product Name</th>
                                                <th>Product Code</th>
                                                <th>Created By</th>
                                                <th>Edit </th>
                                                </tr>
                                            </thead>


                                            <tbody>
                                             <?php
                                             $maineg = new mainClass();
                                             $result = $maineg->Fetch_All_Product();
                                             $count = 1;
                                              if(!empty($result)){
                                                 foreach ($result as $k => $v) { 
                                              echo'
                                                <tr>
                                                    <th scope="row">'.$count++.'</th>
                                                    <td>'.$result[$k]["name"].'</td>
                                                    <td>'.$result[$k]["procduct_code"].'</td>
                                                    <td>'.$result[$k]["user"].'</td>
                                                   <td> <a class="btn btn-primary" href="?action=EditProduct&&editPro='.$result[$k]["id"].'">Edit</a></td>
                                                </tr>';
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