    <div class="page-title-box">
                            <div class="row align-items-center">
                                <div class="col-md-8">
                                    <h6 class="page-title">Customer List</h6>
                                </div>
                                <div class="col-md-4">
                                    <div class="float-end d-none d-md-block">
                                        <div class="dropdown">
                                            <a href="?action=cus_Distribut" class="btn btn-primary waves-effect waves-light"><i class="fas fa-edit  fa-sm text-white"></i> Add New Customer</a>
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
                                                <th>FullName</th>
                                                <th>Phone</th> 
                                               
                                                <th>Address</th>
                                                <th>Status</th>   
                                                <th>##</th>  
                                                <th>#</th>
                                                </tr>
                                            </thead>

                                            <tbody>
                                             <?php
                                           $maineg = new mainClass();
                                           $result = $maineg->customer();
                                           $count = 1;
                                          if(!empty($result)){
                                             foreach ($result as $k => $v) {     
                                              echo'<tr>
                                              <td>'.$count++.'</td>
                                              <td>'.$result[$k]["title"].'  '.$result[$k]["fullname"].'</td>
                                              <td>'.$result[$k]["phone"].'</td>
                                              <td>'.$result[$k]["address"].'</td>
                                              <td><span class="btn btn-sm btn-success btn-block">'.$result[$k]["status"].'</span></td>
                                              <td><a href="?action=EditCUst&&editCustDeatails='.$result[$k]["id"].'">
                                                <span class="fa fa-edit btn btn-primary  btn-sm btn-responsive text-white"></span></a></td>
                                                <td><form method="post"><button type="submit" name="del" class="btn btn-danger btn-block h-100 btn-responsive text-white" onclick="javascript:confirmationDelete($(this));return false;" id="'.$result[$k]["id"].'" value="'.$result[$k]["id"].'"><span class="fa fa-trash-alt"></span></button></form></td>
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