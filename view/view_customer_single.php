<?php 
            $maineg = new  mainClass();
            $DBinfo = $maineg->Targeted_information('customer_table','customer_code',$_GET['ViewCusDeatails']);
            $from = "₦";
            ?>
    <div class="page-title-box">
        <div class="row align-items-center">
            <div class="col-md-8">
                <h6 class="page-title">View Customer</h6>
            </div>
            <div class="col-md-4">
                <div class="float-end d-none d-md-block">
                    <div class="dropdown">
                        <a href="?action=ViewCustomer" class="btn btn-primary btn-sm waves-effect waves-light"><i class="fas fa-arrow-circle-left fa-sm  text-white"></i> Back</a>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-body">
                    <div class="row mt-3">
                  <div class="col-lg-12 col-xl-12">
                          <div class="card">
                          <div class="card-body">
                          <div class="media align-items-center mb-4">
                             <div class="media-body">
                                  <h4 class="mb-0"> View Customer</h4>
                            </div>
                          </div>
                          <form accept="" method="post">
                                           
                                             
                                            <div class="form-group row">

                                                <div class="col-sm-6">
                                                     <label class=" col-form-label">Customer Name</label>
                                                    <input type="text" name="customer_name"  class="form-control" value="<?php echo $DBinfo['name']?>">

                                                    <input type="text" hidden value="<?php echo $DBinfo['customer_code']?>" name="customer_code">
                                                </div>

                                                <div class="col-sm-6">
                                                    <label class="col-form-label">Phone</label>
                                                    <input type="text" name="phone" class="form-control" value="<?php echo $DBinfo['phone']?>">
                                                </div>
                                            </div>

                                             <div class="form-group row">
                                                
                                                <div class="col-sm-6">
                                                    <label class="col-form-label">Email</label>
                                                    <input type="text" name="email" class="form-control" value="<?php echo $DBinfo['email']?>">
                                                </div>

                                                <div class="col-sm-6">
                                                    <label class="col-form-label">Company Name </label>
                                                    <input type="text" name="company_name" class="form-control" value="<?php echo $DBinfo['company_name']?>">
                                                </div>

                                            </div>

                                             <div class="form-group row">
                                            
                                                <div class="col-sm-6">
                                                    <label class="col-form-label">Company Address</label>
                                                    <textarea type="text" name="address" class="form-control"> <?php echo $DBinfo['address']?> </textarea>

                                                </div>
                                                 

                                               <div class="col-sm-6">
                                               <label class="col-form-label">Category</label>
                                               <select name="category" class="form-control" >
                                                    <option><?php echo $DBinfo['category']?></option>
                                               </select>
                                               </div>
                                            </div>
                                        </form>
<br><br><br>

                                         <div class="row">
                            <div class="col-12">
                                <div class="card">
                                    <div class="card-body">
                                        <table id="datatable-buttons" class="table table-striped table-bordered dt-responsive nowrap" style="border-collapse: collapse; border-spacing: 0; width: 100%;">
                                            <thead>
                                                 <tr>
                                                    <tr>
                                                     <th>SN</th>
                                                     <th>Invoice</th>
                                                     <th>Date</th>
                                                     <th>Customer </th> 
                                                      <th> Qty</th> 
                                                     <th> Weight</th>
                                                    <th> Packet</th>
                                                    <th> Color</th>
                                                     <th>Price</th>
                                                      <th>Total</th>
                                                      <th>Paid</th>
                                                     <th>Due</th>
                                                 </tr>
                                            </thead>
                                            <tbody>
                                                     
                                        <?php
                                           $maineg = new mainClass();
                                           $result = $maineg->Fetch_All_Customer_Invoice($DBinfo['customer_code']);
                                           $count = 1;
                                                  if(!empty($result)){
                                                     foreach ($result as $k => $v) { 
                                               echo'<tr>
                                              <td>'.$count++.'</td>
                                              <td>'.$result[$k]["invoice_id"].'</td>
                                              <td>'.$result[$k]["order_date"].'</td>
                                              <td>'.$result[$k]["product_name"].'</td>
                                              <td>'.$result[$k]["qty"].'</td>
                                              <td>'.$result[$k]["kg_weight"].'</td>
                                              <td>'.$result[$k]["packet"].'</td>
                                              <td>'.$result[$k]["color"].'</td>
                                              <td>'.$result[$k]["price"].'</td>
                                              <td>'.$result[$k]["total"].'</td>
                                              <td>'.$result[$k]["paid"].'</td>
                                              <td>'.$result[$k]["due"].'</td>';
                                          '</tr>';
                                            }}
                                           ?>
                                            </tbody>
                                            </table>
                                       </div> 
                                    </div>
                            </div>
                        </div>  
                    </div>

                </div>

 </div>

                </div>
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
           