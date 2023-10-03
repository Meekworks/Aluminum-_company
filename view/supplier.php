    <div class="page-title-box">
                            <div class="row align-items-center">
                                <div class="col-md-8">
                                    <h6 class="page-title">Suppliers</h6>
                                </div>
                                <div class="col-md-4">
                                    <div class="float-end d-none d-md-block">
                                        <div class="dropdown">
                                            <a href="?action=addSupplier" class="btn btn-primary waves-effect waves-light"><i class="fas fa-edit  fa-sm text-white"></i> Add New</a>
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
                                                <th>Company Name</th>
                                                <th>Company Address</th> 
                                                <th>Phone Number</th>
                                                <th>Email Address</th>
                                                <th>Product</th>
                                                <th>#Edit</th>
                                                    <th>#Remove</th>
                                                </tr>
                                            </thead>

                                            <tbody>
                                             <?php 
                                                    $maineg = new  mainClass();
                                                    $result = $maineg->allSupplier();
                                                    $count = 1; 
                          
                                                if (!empty($result)) {
                                                foreach ($result as $k => $v) { 
                                                echo '
                                              <tr>
                                                <td>'.$count++.'</td>
                                                <td>'.$result[$k]["supplier_name"].'</td>
                                                 <td>'.$result[$k]["company_address"].'</td>
                                                 <td>'.$result[$k]["phone"].'</td>
                                                 <td>'.@$result[$k]["email"].'</td>
                                                 <td>'.@$result[$k]["material"].'</td>
                                                 <td><a class="btn btn-primary btn-sm btn-responsive text-white" href="?action=editVendor&&editVenDeatails='.$result[$k]["supplier_id"].'"><i class="fa fa-edit"></i></a></td>
                                                     <td><form method="post"><button type="submit" name="del" class="btn btn-danger btn-sm btn-responsive text-white" onclick="javascript:confirmationDelete($(this));return false;" id="'.$result[$k]["id"].'" value="'.$result[$k]["id"].'"><i class="fa fa-trash"></i></button></form></td>
                                                </tr>
                                                '; }}?>
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