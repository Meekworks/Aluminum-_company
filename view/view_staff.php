    
<?php
$maineg = new mainClass();
@$resultset= $maineg->Fetch_Priviledge_Assigned('priviledges_assigned',$_SESSION['Admin']);
@$DBinfo = $maineg->Targeted_information('admin','username',$_SESSION['Admin']);
$role = $DBinfo['role'];
?>





    <div class="page-title-box">
                            <div class="row align-items-center">
                                <div class="col-md-8">
                                    <h6 class="page-title">View Staff</h6>
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
                                                    <th>FullName</th>
                                                    <th>Phone</th>
                                                    <th>Position</th>
                                                    <th>Staff ID</th>
                                                    <th>#Edit</th>
                                                    <th>#Delete</th>
                                                </tr>
                                            </thead>


                                            <tbody>
                                             <?php 
                        $maineg = new  mainClass();
                        $result = $maineg->allStaff();
                        $count = 1; 
  
                        if (!empty($result)) {
                        foreach ($result as $k => $v) { 
                        echo '
                        <tr>
                         <td>'.$count++.'</td>
                         <td>'.$result[$k]["firstname"]." ".$result[$k]["lastname"].'</td>
                         <td>'.$result[$k]["phone"].'</td>
                         <td>'.@$result[$k]["position"].'</td>
                         <td>'.@$result[$k]["staff_id"].'</td>';

                         echo '
                             <td><a class="btn btn-primary btn-sm btn-responsive text-white" href="?action=editStaff&&editSaffDeatails='.$result[$k]["staff_id"].'"><i class="fa fa-edit"></i></a></td>
                             <td><form method="post"><button type="submit" name="del" class="btn btn-danger btn-sm btn-responsive text-white" onclick="javascript:confirmationDelete($(this));return false;" id="'.$result[$k]["id"].'" value="'.$result[$k]["id"].'"><i class="fa fa-trash"></i></button></form></td>';
                          
                         //     if($DBinfo['role'] == "CEO" || $DBinfo['role'] == "MD"){
                         //     echo '
                         //     <td><a class="btn btn-primary btn-sm btn-responsive text-white" href="?action=editStaff&&editSaffDeatails='.$result[$k]["staff_id"].'"><i class="fa fa-edit"></i></a></td>
                         //     <td><form method="post"><button type="submit" name="del" class="btn btn-danger btn-sm btn-responsive text-white" onclick="javascript:confirmationDelete($(this));return false;" id="'.$result[$k]["id"].'" value="'.$result[$k]["id"].'"><i class="fa fa-trash"></i></button></form></td>';
                         // }else{
                         //     echo '
                         //    <td><a class="btn btn-primary btn-sm btn-responsive text-white disabled" href="?action=editStaff&&editSaffDeatails='.$result[$k]["staff_id"].'"><i class="fa fa-edit"></i></a></td> 
                         //     <td><form method="post"><button disabled type="submit" name="del" class="btn btn-danger btn-sm btn-responsive text-white" onclick="javascript:confirmationDelete($(this));return false;" id="'.$result[$k]["id"].'" value="'.$result[$k]["id"].'"><i class="fa fa-trash"></i></button></form></td>';
                         // }
                       
                         echo'
                         
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