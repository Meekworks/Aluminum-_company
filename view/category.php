    <div class="page-title-box">
                            <div class="row align-items-center">
                                <div class="col-md-8">
                                                        <h6 class="page-title">Category</h6>
                                </div>
                                <div class="col-md-4">
                                    <div class="float-end d-none d-md-block">
                                        <div class="dropdown">
                                            <a href="?action=addCategory" class="btn btn-primary waves-effect waves-light"><i class="fas fa-edit  fa-sm text-white"></i> Add New</a>
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
                                                    <th>Category Name</th>
                                                    <!-- <th>Sub Category</th> -->
                                                    <th>Date</th> 
                                                    <th>##</th> 
                                                    <th>#</th>   
                                                </tr>
                                            </thead>


                                            <tbody>
                                               <?php 
                    $maineg = new  mainClass();
                    $result = $maineg->allCategory();
                    $count = 1; 
      
        if (!empty($result)) {
        foreach ($result as $k => $v) { 

                echo '
                 <tr>
                    <td>'.$count++.'</td>
                    <td>'.$result[$k]["category"].'</td>
                   
                     <td>'.$result[$k]["date_created"].'</td>
                     <td><a href="?action=EditCatery&&editCateDeatails='.$result[$k]["id"].'">
                     <span class="fa fa-edit btn btn-primary btn-responsive text-white"></span></a></td>
                     <td><form method="post"><button type="submit" name="del" class="btn btn-danger btn-block btn-sm btn-responsive text-white" onclick="javascript:confirmationDelete($(this));return false;" id="'.$result[$k]["id"].'" value="'.$result[$k]["id"].'">
                     <span class="fa fa-trash-alt"></span></button></form></td>
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
   var conf = confirm('Are you sure want to delete this record?');
   if(conf)
      // window.location=anchor.attr("href");
      //   // window.location='?action=Catery';
      this.form.submit();
}
  </script>