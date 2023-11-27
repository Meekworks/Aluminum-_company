
    <div class="page-title-box">
        <div class="row align-items-center">
            <div class="col-md-8">
                <h6 class="page-title">All Expense</h6>
            </div>
            <div class="col-md-4">
                <div class="float-end d-none d-md-block">
                    <div class="dropdown">
                       <a href="?action=AddExpense" class="d-none d-sm-inline-block btn btn-primary btn-sm shadow-sm"><i class="fas fa-edit fa-sm text-white-50"></i> Add Expense</a>
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
                                                <th>Time</th>
                                                <th>Expense_Name</th> 
                                               <th>Description</th>
                                                 <th>Vendor</th>
                                                <th>Amount</th>   
                                                 <th>From</th>
                                                 <th>Type</th>
                                                 <th>Status</th>
                                                  <th>#</th> 
                                                </tr>
                                            </thead>

                                            <tbody>
                                              <?php
                                           $maineg = new mainClass();
                                           $result = $maineg->allRequest();
                                           $count = 1;
                                                  if(!empty($result)){
                                                     foreach ($result as $k => $v) {     
                                      echo'<tr>
                                      <td>'.$count++.'</td>
                                      <td>'.$result[$k]["request_date"].'</td> 
                                       <td>'.$result[$k]["time_created_at"].'</td> 
                                      <td>'.$result[$k]["request_name"].'</td>
                                      <td>'.$result[$k]["description"].'</td>
                                      <td>'.$result[$k]["vendor_name"].'</td>
                                      <td>'.$result[$k]["amount"].'</td>
                                      <td>'.$result[$k]["staff_name"].'</td>
                                      <td>'.$result[$k]["type"].'</td>';
                                       if($result[$k]["status"] == "Unapproved"){
                                          echo ' <td><span class="btn btn-sm btn-warning p-2">'.$result[$k]["status"].'</span></td>';
                                       }else{
                                               echo ' <td><span class="btn btn-sm btn-success p-2">'.$result[$k]["status"].'</span></td>';
                                       }


                                         echo '<td><a href="?action=ApproveReq&&ApproveDeatails='.$result[$k]["request_no"].'">
                                                        <span class="fa fa-edit btn btn-primary btn-block btn-sm btn-responsive text-white">Approve</span></a></td>';
                                       
                                       
                                      // if($DBinfo['role'] == "CEO" || $DBinfo['role'] == "MD" ){
                                             
                                      //       if($result[$k]["status"] == "Unapproved"){
                                      //                   echo '<td><a href="?action=ApproveReq&&ApproveDeatails='.$result[$k]["request_no"].'">
                                      //                   <span class="fa fa-edit btn btn-primary btn-block btn-sm btn-responsive text-white">Approve</span></a></td>';
                                      //                }else{
                                      //                   echo'<td><span>Approved</span</td>';
                                      //                }
                                      //    }else{
                                      //        if($result[$k]["status"] == "Unapproved"){
                                      //                   echo '<td><a class="disabled" href="#">
                                      //                   <span class="fa fa-edit btn btn-primary btn-block btn-sm btn-responsive text-white disabled">Approve</span></a></td>';
                                      //                }else{
                                      //                   echo'<td><span>Approved</span</td>';
                                      //                }
                                                      
                                      //    }

                                     
                                                '</tr>';
                                                }
                                              }
                                           ?>
                                            </tbody>
                                        </table>

                                    </div>
                                </div>
                            </div> <!-- end col -->
                        </div> <!-- end row -->
     <script>
    var loadFile = function(event) {
        var output = document.getElementById('output');
        output.src = URL.createObjectURL(event.target.files[0]);
        output.onload = function() {
            URL.revokeObjectURL(output.src) // free memory
        }
    };
</script>
           