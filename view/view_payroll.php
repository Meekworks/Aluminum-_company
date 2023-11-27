
                        <div class="page-title-box">
                            <div class="row align-items-center">
                                <div class="col-md-8">
                                    <h6 class="page-title">View Payroll</h6>
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
                                                <th>Month year</th>
                                                <th>Total Amount</th>
                                                <th>Type</th>
                                                <th>Status</th>
                                                <th>Action</th> 
                                                <th>#</th> 
                                                </tr>
                                            </thead>


                                            <tbody>
                                             <?php
                                               $maineg = new mainClass();
                                               $result = $maineg->Staff_Payroll();
                                               $count = 1;
                                                if(!empty($result)){
                                                   foreach ($result as $k => $v) {      
                                                  echo'<tr>
                                                  <td>'.$count++.'</td>
                                                  <td>'.$result[$k]["month_year"].'</td>
                                                  <td>'.$result[$k]["Amount"].'</td>
                                                  <td>'.$result[$k]["staff_workers"].'</td>
                                                  <td><b><span class="btn btn-sm btn-light btn-block">'.$result[$k]["status"].'</span></b></td>
                                                  <td><a class="btn btn-sm btn-primary"  href="?action=viewMont_yearPayroll&&'.$result[$k]["month_year"].'">View</a></td>
                                                  <td><a class="btn btn-sm btn-primary"  href="?action=PaySalaryAll&&'.$result[$k]["month_year"].'">Pay Salary</a></td>
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

