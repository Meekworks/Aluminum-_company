    <div class="page-title-box">
                            <div class="row align-items-center">
                                <div class="col-md-8">
                                    <h6 class="page-title">Update Serial Names</h6>
                                </div>
                                <div class="col-md-4">
                                    <div class="float-end d-none d-md-block">
                                        <div class="dropdown">
                                            <a href="?action=New_Purchase" class="btn btn-sm btn-primary waves-effect waves-light"><i class="fas fa-arrow-circle-left btn-sm fa-sm text-white"></i> back</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>


                        <div class="row">
                            <div class="col-12">
                                <div class="card">
                                    <div class="card-body">
                                        <table id="datatable-buttons" class="table table-striped table-bordered dt-responsive nowrap text-center" style="border-collapse: collapse; border-spacing: 0; width: 100%;">
                                            <thead>
                                                <tr>
                                                 <th>#</th>
                                                <th>Serial Name</th>
                                                <th>Label</th>
                                                <th>Warehouse</th>
                                                <th>Status</th>
                                                <th class="text-center">#Edit</th>
                                                </tr>
                                            </thead>


                                            <tbody>
                                             <?php 
                                                $maineg = new  mainClass();
                                                $result = $maineg->allSerial();
                                                $count = 1; 
                          
                                                if (!empty($result)) {
                                                foreach ($result as $k => $v) { 
                                                echo '
                                                <tr>
                                                 <td>'.$count++.'</td> 
                                                 <td>'.$result[$k]["serial_name"].'</td>
                                                 
                                                 <td>'.$result[$k]["label"].'</td>
                                                 <td>'.$result[$k]["warehouse"].'</td>';

                                                 if($result[$k]["status"] == "assigned"){

                                                    echo '<td><span class="btn btn-success btn-sm ">'.$result[$k]["status"].'</span></td>';

                                                 }else{

                                                    echo '<td><span class="btn btn-secondary btn-sm ">'.$result[$k]["status"].'</span></td>';

                                                 }

                                                 echo'
                                                 <td class="text-center"><a class="btn btn-primary btn-sm btn-responsive text-white" href="?action=editSeries&&editS='.$result[$k]["id"].'"><i class="fa fa-edit"> </i></a></td>

                                                  
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