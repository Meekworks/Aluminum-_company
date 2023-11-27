
    <div class="page-title-box">
        <div class="row align-items-center">
            <div class="col-md-8">
                <h6 class="page-title">All Expense</h6>
            </div>
            <div class="col-md-4">
                <div class="float-end d-none d-md-block">
                    <div class="dropdown">
                       <a href="?action=AddExpense" class="d-none d-sm-inline-block btn btn-primary btn-sm shadow-sm"><i class="fas fa-edit fa-sm text-white-50"></i>View Categories</a>
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
                                                <th>#</th>
                                                <th>Category Name</th>
                                                <th>Created By</th>
                                                <th>Edit </th>
                                                </tr>
                                            </thead>

                                            <tbody>
                                               <?php
                                         $maineg = new mainClass();
                                         $result = $maineg->Fetch_All_Category();
                                         $count = 1;
                                          if(!empty($result)){
                                             foreach ($result as $k => $v) { 
                                          echo'
                                            <tr>
                                                <th scope="row">'.$count++.'</th>
                                                <td>'.$result[$k]["category"].'</td>
                                                <td>'.$result[$k]["user"].'</td>';

                                                 echo ' <td> <a class="btn btn-primary" href="?action=EditCategory&&editCate='.$result[$k]["id"].'">Edit</a></td>';


                                                 // if($DBinfo['role'] == "CEO" || $DBinfo['role'] == "MD" ){
                                                     
                                                 //    echo ' <td> <a class="btn btn-primary" href="?action=EditCategory&&editCate='.$result[$k]["id"].'">Edit</a></td>';
                                                 // }else{
                                                 //     echo '<td> <a class="btn btn-primary disabled" href="?action=EditCategory&&editCate='.$result[$k]["id"].'">Edit</a></td>';
                                                 // }
                                               
                                                 echo'
                                            </tr>';
                                                }}
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
           