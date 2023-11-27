                    <div class="page-title-box">
                            <div class="row align-items-center">
                                <div class="col-md-8">
                                    <h6 class="page-title">View Stockin</h6>
                                </div>
                              <!--   <div class="col-md-4">
                                    <div class="float-end d-none d-md-block">
                                        <div class="dropdown">
                                            <a href="?action=New_Purchase" class="btn btn-sm btn-primary waves-effect waves-light"><i class="fas fa-arrow-circle-left btn-sm fa-sm text-white"></i> back</a>
                                        </div>
                                    </div>
                                </div> -->
                            </div>
                        </div>


                        <div class="row">
                            <div class="col-12">
                                <div class="card">
                                    <div class="card-body">
                                        <table id="datatable-buttons" class="table table-striped table-bordered dt-responsive nowrap p-2 " style="border-collapse: collapse; border-spacing: 0; width: 100%;">
                                            <thead>
                                                <tr>
                                                <th>#</th>
                                            <th>Item Name</th>
                                            <!-- <th>Category</th> -->
                                            <th>Warehouse</th>
                                            <th>Serial </th>
                                            <th>Location</th>
                                            <th>Qty</th>
                                            <th>KG</th>
                                            <th>Meter</th>
                                            <th>color</th>
                                            <th>Guage</th>
                                            <th>Status</th>
                                            <th>View</th>
                                            <th>Edit</th>
                                                </tr>
                                            </thead>


                                            <tbody>
                                             <?php 
                        $maineg = new  mainClass();
                        $result = $maineg->GetStockin();
                        $count = 1; 
  
                        if (!empty($result)) {
                        foreach ($result as $k => $v) { 
                        echo '
                        <tr >
                         <td >'.$count++.'</td>
                         <td >'.$result[$k]["product_name"].'</td>
                        
                         <td >'.$result[$k]["warehouse"].'</td>
                         <td >'.$result[$k]["container_series"].'</td>
                         <td >'.$result[$k]["location"].'</td>
                         <td >'.$result[$k]["quantity"].'</td>
                         <td >'.$result[$k]["kg_weight"].'</td>
                         <td >'.$result[$k]["meter_length"].'</td>
                         <td >'.$result[$k]["color"].'</td>
                         <td >'.$result[$k]["guage"].'</td>';

                         if($result[$k]["status"] == 'outstock'){

                            echo ' <td class="text-danger font-weight-bold p-1">'.$result[$k]["status"].'</td>';

                         }else{

                            echo ' <td class"text-success font-weight-bold p-1">'.$result[$k]["status"].'</td>';
                         }

                         echo'
                         <td ><a class="btn btn-primary btn-sm btn-responsive text-white" href="?action=ViewStockinDetails&&oneStockinDeatails='.$result[$k]["item_code"].'"><i class="fa fa-eye"></i></a></td>';


                            echo '<td ><a class="btn btn-success btn-sm btn-responsive text-white" href="?action=EditStock&&EditStocks='.$result[$k]["item_code"].'"><i class="fa fa-edit"></i></a></td>';

                         // if($DBinfo['role'] == "CEO" || $DBinfo['role'] == "MD" ){
                             
                         //    echo '<td><a class="btn btn-success btn-sm btn-responsive text-white" href="?action=EditStock&&EditStocks='.$result[$k]["item_code"].'"><i class="fa fa-edit"></i></a></td>';
                         // }else{
                         //     echo '<td><a class="btn btn-success btn-sm btn-responsive text-white disabled" href="?action=EditStock&&EditStocks='.$result[$k]["item_code"].'"><i class="fa fa-edit"></i></a></td>';
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
                           var conf = confirm('Are you sure want to delete this record?');
                           if(conf)
                              // window.location=anchor.attr("href");
                              //   // window.location='?action=Catery';
                              this.form.submit();
                        }
                        </script>