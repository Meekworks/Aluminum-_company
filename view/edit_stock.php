   <style>
       label{
        color: darkgray;
       }
   </style>

        <?php 
            $maineg = new  mainClass();
            $DBinfo = $maineg->Targeted_information('stockin','item_code',$_GET['EditStocks']);
            $from = "₦";
           ?>
    <div class="page-title-box">
        <div class="row align-items-center">
            <div class="col-md-8">
                <h6 class="page-title">Edit Stockin</h6>
            </div>
            <div class="col-md-4">
                <div class="float-end d-none d-md-block">
                    <div class="dropdown">
                        <a href="?action=ViewStockin" class="btn btn-primary btn-sm waves-effect waves-light"><i class="fas fa-arrow-circle-left btn-sm fa-sm  text-white"></i> Back</a>
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
                    
                           <form accept="" method="post">
                                           
                                             
                                            <div class="form-group row mb-3">

                                                <div class="col-sm-6">
                                                     <label class=" col-form-label">Item Name</label>
                                                    <input type="text" name="product_name"  class="form-control " value="<?php echo $DBinfo['product_name']?>">

                                                </div>

                                                <div class="col-sm-6">
                                                    <label class="col-form-label">Category</label>
                                                    <input type="text" name="category" class="form-control " value="<?php echo $DBinfo['category']?>">
                                                </div>
                                            </div>

                                             <div class="form-group row mb-3">
                                                
                                                <div class="col-sm-6">
                                                    <label class="col-form-label">Quantity</label>
                                                    <input type="text" name="quantity" class="form-control " value="<?php echo $DBinfo['quantity']?>">
                                                </div>

                                                <div class="col-sm-6">
                                                    <label class="col-form-label">Price </label>
                                                    <input type="text" name="purchase_price" class="form-control " value="<?php echo $DBinfo['purchase_price']?>">
                                                </div>

                                            </div>

                                             <div class="form-group row mb-3">
                                            
                                                <div class="col-sm-6">
                                                    <label class="col-form-label">Selling Price</label>
                                                    <input type="text" name="selling_price" class="form-control " value="<?php echo $DBinfo['selling_price']?>">
                                                    
                                                </div>
                                                 

                                                 <div class="col-sm-6">
                                                    <label class="col-form-label">Total Price</label>
                                                     <input type="text" name="total" class="form-control " value="<?php echo $DBinfo['total']?>">
                                                    
                                                </div>
                                            </div>





                                             <div class="form-group row mb-3">
                                            
                                                <div class="col-sm-6">
                                                    <label class="col-form-label">Item Code</label>
                                                    <input type="text" readonly name="item_code" class="form-control " value="<?php echo $DBinfo['item_code']?>">
                                                    
                                                </div>
                                                 

                                                 <div class="col-sm-6">
                                                    <label class="col-form-label">Guage</label>
                                                     <input type="text" name="guage" class="form-control " value="<?php echo $DBinfo['guage']?>">
                                                    
                                                </div>
                                            </div>




                                             <div class="form-group row mb-3">
                                            
                                                <div class="col-sm-6">
                                                    <label class="col-form-label">Color</label>
                                                    <input type="text" name="color" class="form-control " value="<?php echo $DBinfo['color']?>">
                                                </div>
                                                 

                                                 <div class="col-sm-6">
                                                    <label class="col-form-label">KG (Weight)</label>
                                                     <input type="text" name="kg_weight" class="form-control " value="<?php echo $DBinfo['kg_weight']?>">
                                                </div>

                                            </div>


                                               <div class="form-group row mb-3">
                                            
                                                <div class="col-sm-6">
                                                    <label class="col-form-label">Meter (Length)</label>
                                                    <input type="text" name="meter_length" class="form-control " value="<?php echo $DBinfo['meter_length']?>">
                                                </div>
                                                 

                                                 <div class="col-sm-6">
                                                    <label class="col-form-label">Embossed</label>
                                                     <input type="text" name="embossed" class="form-control " value="<?php echo $DBinfo['embossed']?>">
                                                </div>
                                                
                                            </div>



                                               <div class="form-group row mb-3">
                                            
                                                <div class="col-sm-6">
                                                    <label class="col-form-label">Design</label>
                                                    <input type="text" name="design" class="form-control " value="<?php echo $DBinfo['design']?>">
                                                </div>
                                                 

                                                 <div class="col-sm-6">
                                                    <label class="col-form-label">Packet</label>
                                                     <input type="text" name="packet" class="form-control " value="<?php echo $DBinfo['packet']?>">
                                                </div>
                                                
                                            </div>




                                            <div class="form-group row mb-3">
                                            
                                                <div class="col-sm-6">
                                                    <label class="col-form-label">Stock Level</label>
                                                    <input type="text" name="stock_level" class="form-control " value="<?php echo $DBinfo['low_stock_level']?>">
                                                </div>
                                                 

                                                 <div class="col-sm-6">
                                                    <label class="col-form-label">Warehouse</label>
                                                     <input type="text" name="warehouse" class="form-control " value="<?php echo $DBinfo['warehouse']?>">
                                                </div>
                                                
                                            </div>


                                            <div class="form-group row mb-3">
                                            
                                                <div class="col-sm-6">
                                                    <label class="col-form-label">Serial Name</label>
                                                    <input type="text" name="container_series" class="form-control " value="<?php echo $DBinfo['container_series']?>">
                                                </div>
                                                 

                                                 <div class="col-sm-6">
                                                    <label class="col-form-label">Container</label>
                                                     <input type="text" name="container"  class="form-control " value="<?php echo $DBinfo['container']?>">
                                                </div>
                                                
                                            </div>



                                            <div class="form-group row mb-3">
                                            
                                                <div class="col-sm-6">
                                                    <label class="col-form-label">Location</label>
                                                    <select name="location" class="form-control" required>
                                                        <option ><?php echo $DBinfo['location']?></option>
                                                        <option>Long Wall</option>
                                                        <option>Right Wall</option>
                                                        <option>Left Wall</option>
                                                        <option>Door Right</option>
                                                        <option>Door Left</option>
                                                        <option>Center</option>
                                                      </select>
                                                </div>
                                                  
                                          
                                                 

                                                 <div class="col-sm-6">
                                                    <label class="col-form-label">Created Date</label>
                                                     <input type="text" readonly  class="form-control " value="<?php echo $DBinfo['created_date']?>">
                                                </div>
                                                
                                            </div>


                                              <div class="form-group row mb-3">
                                            
                                                <div class="col-sm-6">
                                                   <br>
                                                    <button class="btn btn-primary btn-block form-control" type="submit" name="editStok">Proceed</button>
                                                </div>
                                                 

                                               
                                                
                                            </div>


                                        </form>
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
           