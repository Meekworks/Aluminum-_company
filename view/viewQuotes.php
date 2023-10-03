    <div class="page-title-box">
                            <div class="row align-items-center">
                                <div class="col-md-8">
                                    <h6 class="page-title">Invoice</h6>
                                </div>
                                <div class="col-md-4">
                                    <div class="float-end d-none d-md-block">
                                        <div class="dropdown">
                                            <!-- <a href="?action=addSupplier" class="btn btn-primary waves-effect waves-light"><i class="fas fa-edit  fa-sm text-white"></i> Add New</a> -->
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
                                                <th>Date</th>
                                                <th>Customer</th> 
                                                <th>Address</th>
                                                <th>Phone</th> 
                                                <th>Total</th> 
                                                <th>Sales Rep</th>
                                                <th>Action</th>
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
                                                      <td>'.$result[$k]["order_date"].'</td>
                                                      <td>'.$result[$k]["customer"].'</td>
                                                      <td>'.$result[$k]["address"].'</td>
                                                      <td>'.$result[$k]["phone"].'</td>
                                                      <td>'.$result[$k]["total"].'</td>
                                                      <td>'.$result[$k]["sales_rep"].'</td>
                                                      <td><a href="?action=QuoteReply&&replyQ='.$result[$k]["invoice_id"].'" class="btn btn-sm btn-primary" data-toggle="tooltip" data-placement="top" title="Click  to View Quote">View Invoice</a></td>
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