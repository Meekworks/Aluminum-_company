    <div class="page-title-box">
                            <div class="row align-items-center">
                                <div class="col-md-8">
                                    <h6 class="page-title">Users</h6>
                                </div>
                                <div class="col-md-4">
                                    <div class="float-end d-none d-md-block">
                                        <div class="dropdown">
                                        <a href="?action=Previlige" class="d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i class="fas fa-pen fa-sm text-white-50"></i> Assign Privilege</a>
                                        <a href="?action=AddNewUser" class="d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i class="fas fa-edit fa-sm text-white-50"></i> Add New User</a>
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
                                                    <th>Username</th>
                                                    <th>FullName</th>
                                                    <th>Privilege</th> 
                                                    <th>#</th>
                                                </tr>
                                            </thead>

                                            <tbody>
                                            <?php
                                                $maineg = new mainClass();
                                                $result = $maineg->users();
                                                $count = 1;
                                                  if(!empty($result)){
                                                     foreach ($result as $k => $v) {     
                                                echo'<tr>
                                                <td>'.$count++.'</td>
                                                <td>'.$result[$k]["username"].'</td>
                                                <td>'.$result[$k]["name"].'</td>
                                                <td>'.$result[$k]["password"].'</td>
                                                <td><form method="post"><button type="submit" name="del" class="btn btn-danger btn-block btn-sm btn-responsive text-white" onclick="javascript:confirmationDelete($(this));return false;" id="'.$result[$k]["id"].'" value="'.$result[$k]["id"].'"><span class="fa fa-trash-alt"></span></button></form></td>
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