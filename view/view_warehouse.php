    <div class="page-title-box">
                            <div class="row align-items-center">
                                <div class="col-md-8">
                                    <h6 class="page-title">View Warehouse</h6>
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
                                                <th>#</th>
                                                <th>Warehouse Name</th>
                                                <th>Location</th>
                                                <th>Code</th>
                                                <th>Created By</th>   
                                                </tr>
                                            </thead>


                                            <tbody>
                                            <?php
                                             $maineg = new mainClass();
                                             $result = $maineg->Fetch_All_Warehouse();
                                             $count = 1;
                                              if(!empty($result)){
                                                 foreach ($result as $k => $v) { 
                                              echo'
                                            <tr>
                                            <th scope="row">'.$count++.'</th>
                                            <td>'.$result[$k]["warehouse_name"].'</td>
                                            <td>'.$result[$k]["location"].'</td>
                                            <td>'.$result[$k]["Code"].'</td>
                                            <td>'.$result[$k]["Userlogin"].'</td>
                                            </tr>';
                                                }}
                                               ?>
                                            </tbody>
                                        </table>

                                    </div>
                                </div>
                            </div> 
                        </div> 



                        <script>
                        function confirmationDelete(anchor)
                            {
                               var conf = confirm('Are you sure want to delete this Staff?');
                               if(conf)
                                  // window.location=anchor.attr("href");
                                  //   // window.location='?action=Catery';
                                  this.form.submit();
                            }
                        </script>