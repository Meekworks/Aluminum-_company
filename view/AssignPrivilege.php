    <form action="" method="POST">
                        <div class="page-title-box">
                            <div class="row align-items-center">
                                <div class="col-md-8">
                                    <h6 class="page-title">Assign Staff Priviledge</h6>
                                </div>
                                <div class="col-md-4">
                                <div class="float-end d-none d-md-block">
                                    <div class="dropdown">
                                    <a href="?action=Users" class="btn btn-primary waves-effect waves-light"><i class="text-white"></i> Back</a>
                                    </div>
                                </div>
                                </div>
                            </div>
                        </div>


                        <div class="row">
                            <div class="col-7">
                                   <?php
                                       $maineg = new mainClass();
                                       $result = $maineg->GET_Privilege();
                                       // $count = 1;          
                                    ?>

                                <div class="card">
                                    <div class="card-body" style="height:700px; overflow-y:scroll;">
                                        <table  class="table table-striped table-bordered dt-responsive nowrap" style="border-collapse: collapse; border-spacing: 0; width: 100%;">
                                            <thead>
                                                <tr>
                                                    <th>Priviledge Name</th>
                                                    <th>Select all <input type="checkbox" id="select_all_invoices" onclick="selectAll();"></th>
                                                </tr>
                                            </thead>


                                            <tbody>
                                             <?php 
                                                if(!empty($result)){
                                               foreach ($result as $k => $v) { 
                                                echo '<tr>
                                                <td>'.$result[$k]["privilege_Name"].'</td>
                                                <td>
                                                <span class="btn btn-secondary"><input type="checkbox" class="check_invoice" name="PrivilegName[]" value="'.$result[$k]["privilege_Name"].'"></span>
                                                </td>
                                                </tr>';
                                                }
                                              }
                                            ?>
                                            </tbody>
                                        </table>

                                    </div>
                                </div>
                            </div> <!-- end col -->

                             <div class="col-lg-5">
                             <div class="card">
                             <div class="card-body">
                            Choose Staff
                            <select class="form-control" name="staffIDD">
                                <option></option>
                                <?php 
                                $maineg = new mainClass();
                                 $data = $maineg->selectUsertoPrivilege('admin');
                               ?>
                            </select>
                            <br />
                            <!-- <input type="text" class="form-control" name="staffID_get" value="" hidden> -->
                            <button type="submit" name="AssignPrivilege" class="btn btn-primary form-control">Assign Priviledges</button>

                        </div>
                    </div>
                </div>

           </div> <!-- end row -->
</form>

<script>
    function selectAll() {
        var blnChecked = document.getElementById("select_all_invoices").checked;
        var check_invoices = document.getElementsByClassName("check_invoice");
        var intLength = check_invoices.length;
        for (var i = 0; i < intLength; i++) {

            var check_invoice = check_invoices[i];
            check_invoice.checked = blnChecked;

        }
    }
</script>
