

                          <div class="page-title-box">
        <div class="row align-items-center">
            <div class="col-md-8">
                <h6 class="page-title">Chart of Account</h6>
            </div>

            <div class="col-md-4">
                <div class="float-end d-none d-md-block">
                    <div class="dropdown">
                        <a href="?action=ChartAcctReport" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i class="fas fa-eye fa-sm text-white-50"></i> Report</a>
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
                                                    <th>Account ID</th>
                                                    <th>Series </th>
                                                    <th>Type</th>
                                                    <th>Description </th>
                                                    <th>Running Balance</th>
                                                </tr>
                                            </thead>


                                            <tbody>
                                             <?php
                                                       $maineg = new mainClass();
                                                       $result = $maineg->ChartAccount();
                                                       $count = 1;
                                                        if(!empty($result)){
                                                           foreach ($result as $k => $v) {      
                                                          echo'<tr>
                                                          <td>'.$count++.'</td>';
                                                          
                                                          if($result[$k]["account_id"] == "4000_SALES"){
                                                              
                                                                 echo'<td><a target="_blank"  href="?action=salesReports" style="text-decoration:none;">'.$result[$k]["account_id"].'</a></td>
                                                                      <td><a target="_blank"  href="?action=salesReports" style="text-decoration:none;">'.$result[$k]["series_name"].'</a></td>
                                                                      <td><a target="_blank"  href="?action=salesReports" style="text-decoration:none;">'.$result[$k]["account_type"].'</a></td>
                                                                      <td><a target="_blank"  href="?action=salesReports" style="text-decoration:none;">'.$result[$k]["description"].'</a></td>
                                                                      <td><a target="_blank"  href="?action=salesReports" style="text-decoration:none;">'.number_format($result[$k]["balance"]).'</a></td>';
                                                              
                                                          }elseif($result[$k]["account_id"] == "2001_SALARY"){
                                                              
                                                                 echo'<td><a href="?action=Payrol_report" style="text-decoration:none;">'.$result[$k]["account_id"].'</a></td>
                                                                      <td><a href="?action=Payrol_report" style="text-decoration:none;">'.$result[$k]["series_name"].'</a></td>
                                                                      <td><a href="?action=Payrol_report" style="text-decoration:none;">'.$result[$k]["account_type"].'</a></td>
                                                                      <td><a href="?action=Payrol_report" style="text-decoration:none;">'.$result[$k]["description"].'</a></td>
                                                                      <td><a href="?action=Payrol_report" style="text-decoration:none;">'.number_format($result[$k]["balance"]).'</a></td>';
                                                              
                                                          }elseif($result[$k]["account_id"] == "2008_PURCHASE"){
                                                              
                                                              echo'<td><a href="?action=StockinReport" style="text-decoration:none;">'.$result[$k]["account_id"].'</a></td>
                                                                      <td><a href="?action=StockinReport" style="text-decoration:none;">'.$result[$k]["series_name"].'</a></td>
                                                                      <td><a href="?action=StockinReport" style="text-decoration:none;">'.$result[$k]["account_type"].'</a></td>
                                                                      <td><a href="?action=StockinReport" style="text-decoration:none;">'.$result[$k]["description"].'</a></td>
                                                                      <td><a href="?action=StockinReport" style="text-decoration:none;">'.number_format($result[$k]["balance"]).'</a></td>';
                                                              
                                                          }elseif($result[$k]["account_id"] == "6000_EXPENSES"){
                                                              
                                                              echo'<td><a href="?action=Expense" style="text-decoration:none;">'.$result[$k]["account_id"].'</a></td>
                                                                      <td><a href="?action=Expense" style="text-decoration:none;">'.$result[$k]["series_name"].'</a></td>
                                                                      <td><a href="?action=Expense" style="text-decoration:none;">'.$result[$k]["account_type"].'</a></td>
                                                                      <td><a href="?action=Expense" style="text-decoration:none;">'.$result[$k]["description"].'</a></td>
                                                                      <td><a href="?action=Expense" style="text-decoration:none;">'.number_format($result[$k]["balance"]).'</a></td>';
                                                              
                                                          }elseif($result[$k]["account_id"] == "1001_PETTY_CASH"){
                                                              
                                                              echo'<td><a href="?action=OtherIn" style="text-decoration:none;">'.$result[$k]["account_id"].'</a></td>
                                                                      <td><a href="?action=OtherIn" style="text-decoration:none;">'.$result[$k]["series_name"].'</a></td>
                                                                      <td><a href="?action=OtherIn" style="text-decoration:none;">'.$result[$k]["account_type"].'</a></td>
                                                                      <td><a href="?action=OtherIn" style="text-decoration:none;">'.$result[$k]["description"].'</a></td>
                                                                      <td><a href="?action=OtherIn" style="text-decoration:none;">'.number_format($result[$k]["balance"]).'</a></td>';
                                                              
                                                          }elseif($result[$k]["account_id"] == "1200_ACCOUNT_RECEIVABLE"){
                                                              
                                                              echo'<td><a href="?action=ReceivableReports" style="text-decoration:none;">'.$result[$k]["account_id"].'</a></td>
                                                                      <td><a href="?action=ReceivableReports" style="text-decoration:none;">'.$result[$k]["series_name"].'</a></td>
                                                                      <td><a href="?action=ReceivableReports" style="text-decoration:none;">'.$result[$k]["account_type"].'</a></td>
                                                                      <td><a href="?action=ReceivableReports" style="text-decoration:none;">'.$result[$k]["description"].'</a></td>
                                                                      <td><a href="?action=ReceivableReports" style="text-decoration:none;">'.number_format($result[$k]["balance"]).'</a></td>';
                                                              
                                                          }elseif($result[$k]["account_id"] == "2000_CREDIT_PURCHASE"){
                                                              
                                                              echo'<td><a href="?action=payableReport" style="text-decoration:none;">'.$result[$k]["account_id"].'</a></td>
                                                                      <td><a href="?action=payableReport" style="text-decoration:none;">'.$result[$k]["series_name"].'</a></td>
                                                                      <td><a href="?action=payableReport" style="text-decoration:none;">'.$result[$k]["account_type"].'</a></td>
                                                                      <td><a href="?action=payableReport" style="text-decoration:none;">'.$result[$k]["description"].'</a></td>
                                                                      <td><a href="?action=payableReport" style="text-decoration:none;">'.number_format($result[$k]["balance"]).'</a></td>';
                                                              
                                                          }else{
                                                              
                                                                      echo'<td>'.$result[$k]["account_id"].'</td>
                                                                      <td>'.$result[$k]["series_name"].'</td>
                                                                      <td>'.$result[$k]["account_type"].'</td>
                                                                      <td>'.$result[$k]["description"].'</td>
                                                                      <td>'.number_format($result[$k]["balance"]).'</td>';
                                                              
                                                          }
                                                          
                                                        
                                                          
                                                         echo'
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

                         <!-- <td><form method="post"><button type="submit" name="del" class="btn btn-danger waves-effect d-grid btn-responsive text-white" $form->setAction(htmlspecialchars($_SERVER["PHP_SELF"]), $add_get_vars = true);btn-responsive text-white" onclick="javascript:confirmationDelete($(this));return false;" id="'.$result[$k]["id"].'" value="'.$result[$k]["id"].'"><span class="fa fa-trash-alt"></span></button></form></td> -->




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