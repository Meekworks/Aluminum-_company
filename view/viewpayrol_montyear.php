
                        <div class="page-title-box">
                            <div class="row align-items-center">
                                <div class="col-md-8">
                                    <h6 class="page-title">View Payroll</h6>
                                </div>

                               <div class="col-md-4">
                                    <div class="float-end d-none d-md-block">
                                        <div class="dropdown">
                                            <a href="?action=ViewPayroll" class="btn btn-primary btn-sm waves-effect waves-light"><i class="fas fa-arrow-circle-left fa-sm  text-white"></i> Back</a>
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
                                              <th>Fullname</th>
                                              <th>Month year</th>
                                              <th>Amount</th>
                                              <th>Gross pay</th>
                                              <th>Deductions</th>
                                              <th>status</th>
                                              <th>Type</th>
                                              <th>Net pay</th>
                                              <th>Action</th>
                                              </tr>
                                            </thead>


                                            <tbody>
                                              <?php
                                                $url = $_SERVER['REQUEST_URI'];
                                                $date_year = explode('&&', $url);
                                                $maineg = new mainClass();
                                                $result = $maineg->fetch_from_tables_usingWHERE('payroll', 'month_year', $date_year[1]);
                                                $count = 1;
                                                if(!empty($result)){
                                                   foreach ($result as $k => $v) {     
                                                  echo'<tr>
                                                  <td>'.$count++.'</td>
                                                  <td>'.$result[$k]["employee_name"].'</td>
                                                  <td>'.$result[$k]["month_year"].'</td>
                                                  <td>'.$result[$k]["bsaic_salary"].'</td>
                                                  <td>'.$result[$k]["gross_pay"].'</td>
                                                  <td>'.$result[$k]["total_due"].'</td>
                                                  <td><b><span class="btn btn-sm btn-info btn-block">'.$result[$k]["status"].'</span></b></td>
                                                  <td>'.$result[$k]["type"].'</td>
                                                  <td>'.$result[$k]["net_pay"].'</td>
                                                  <td><a class="btn btn-sm btn-success"  href="?action=payrollsingle&&singlePayRoll='.$result[$k]["staff_id"].'&&singlemonDate='.$result[$k]["month_year"].'">Pay</a></td>
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

