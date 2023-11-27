    <div class="page-title-box">
                            <div class="row align-items-center">
                                <div class="col-md-8">
                                    <h6 class="page-title">View Customer</h6>
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
                                                <th>Name </th>
                                                <th>Phone</th>
                                                <th>Email</th>
                                                <th>Company Name</th>
                                                <th>Category</th>
                                                <th>#Edit</th>
                                                <th>#Delete</th>
                                                <th>#View</th>
                                                </tr>
                                            </thead>


                                            <tbody>
                                             <?php 
                                                    $maineg = new  mainClass();
                                                    $result = $maineg->allCustomer();
                                                    $count = 1; 
                          
                                                if (!empty($result)) {
                                                foreach ($result as $k => $v) { 
                                                echo '
                                                <tr>
                                                 <td>'.$count++.'</td>
                                                 <td>'.$result[$k]["name"].'</td>
                                                 <td>'.$result[$k]["phone"].'</td>
                                                 <td>'.@$result[$k]["email"].'</td>
                                                 <td>'.@$result[$k]["company_name"].'</td>
                                                 <td>'.@$result[$k]["category"].'</td>';


                                                 echo '
                                                  <td><a class="btn btn-primary btn-sm btn-responsive text-white" href="?action=editCustomer&&editCusDeatails='.$result[$k]["customer_code"].'"><i class="fa fa-edit"></i></a></td>
                                                  <td><form method="post"><button type="submit" name="del" class="btn btn-danger btn-sm btn-responsive text-white" onclick="javascript:confirmationDelete($(this));return false;" id="'.$result[$k]["id"].'" value="'.$result[$k]["id"].'"><i class="fa fa-trash"></i></button></form></td>';
                                                 
                          
                                                 //     if($DBinfo['role'] == "CEO" || $DBinfo['role'] == "MD"){
                                                 //     echo '
                                                 //      <td><a class="btn btn-primary btn-sm btn-responsive text-white" href="?action=editCustomer&&editCusDeatails='.$result[$k]["customer_code"].'"><i class="fa fa-edit"></i></a></td>
                                                 //      <td><form method="post"><button type="submit" name="del" class="btn btn-danger btn-sm btn-responsive text-white" onclick="javascript:confirmationDelete($(this));return false;" id="'.$result[$k]["id"].'" value="'.$result[$k]["id"].'"><i class="fa fa-trash"></i></button></form></td>';
                                                 // }else{
                                                 //     echo '
                                                 //      <td><a class="btn btn-primary btn-sm btn-responsive text-white disabled" href="?action=editCustomer&&editCusDeatails='.$result[$k]["customer_code"].'"><i class="fa fa-edit"></i></a></td>
                                                 //     <td><form method="post"><button type="submit" disabled name="del" class="btn btn-danger btn-sm btn-responsive text-white" onclick="javascript:confirmationDelete($(this));return false;" id="'.$result[$k]["id"].'" value="'.$result[$k]["id"].'"><i class="fa fa-trash"></i></button></form></td>';
                                                 // }
                                               
                                                 echo'
                                                 
                                                  <td>
                                                    <a class="btn btn-success btn-sm btn-responsive text-white" href="?action=viewCustomerS&&ViewCusDeatails='.$result[$k]["customer_code"].'"><i class="fa fa-eye"></i>
                                                    </a>
                                                 </td>
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
   var conf = confirm('Are you sure want to delete this Vendor?');
   if(conf)
      // window.location=anchor.attr("href");
      //   // window.location='?action=Catery';
      this.form.submit();
}
  </script>