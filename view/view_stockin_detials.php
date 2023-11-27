   <style>
       label{
        color: darkgray;
       }
   </style>

    <?php 
    $maineg = new  mainClass();
    $DBinfo = $maineg->Targeted_information('stockin','item_code',$_GET['oneStockinDeatails']);
    $from = "₦";
    ?>
    <div class="page-title-box">
        <div class="row align-items-center">
            <div class="col-md-8">
                <h6 class="page-title">View Stockin</h6>
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
                          <!--<div class="media align-items-center mb-4">
                             <div class="media-body">
                                  <h4 class="mb-0"> Edit</h4>
                            </div>
                          </div> -->
                          <form accept="" method="post">
                                           
                                             
                                            <div class="form-group row mb-3">

                                                <div class="col-sm-6">
                                                     <label class=" col-form-label">Item Name</label>
                                                    <input type="text" readonly name="firstname"  class="form-control " value="<?php echo $DBinfo['product_name']?>">

                                                </div>

                                                <div class="col-sm-6">
                                                    <label class="col-form-label">Category</label>
                                                    <input type="text" readonly name="lastname" class="form-control " value="<?php echo $DBinfo['category']?>">
                                                </div>
                                            </div>

                                             <div class="form-group row mb-3">
                                                
                                                <div class="col-sm-6">
                                                    <label class="col-form-label">Quantity</label>
                                                    <input type="text" readonly name="email" class="form-control " value="<?php echo $DBinfo['quantity']?>">
                                                </div>

                                                <div class="col-sm-6">
                                                    <label class="col-form-label">Price </label>
                                                    <input type="text" readonly class="form-control " value="<?php echo $DBinfo['purchase_price']?>">
                                                </div>

                                            </div>

                                             <div class="form-group row mb-3">
                                            
                                                <div class="col-sm-6">
                                                    <label class="col-form-label">Selling Price</label>
                                                    <input type="text" readonly  class="form-control " value="<?php echo $DBinfo['selling_price']?>">
                                                    
                                                </div>
                                                 

                                                 <div class="col-sm-6">
                                                    <label class="col-form-label">Total</label>
                                                     <input type="text" readonly  class="form-control " value="<?php echo $DBinfo['total']?>">
                                                    
                                                </div>
                                            </div>





                                             <div class="form-group row mb-3">
                                            
                                                <div class="col-sm-6">
                                                    <label class="col-form-label">Item Code</label>
                                                    <input type="text" readonly  class="form-control " value="<?php echo $DBinfo['item_code']?>">
                                                    
                                                </div>
                                                 

                                                 <div class="col-sm-6">
                                                    <label class="col-form-label">Guage</label>
                                                     <input type="text" readonly  class="form-control " value="<?php echo $DBinfo['guage']?>">
                                                    
                                                </div>
                                            </div>




                                             <div class="form-group row mb-3">
                                            
                                                <div class="col-sm-6">
                                                    <label class="col-form-label">Color</label>
                                                    <input type="text" readonly  class="form-control " value="<?php echo $DBinfo['color']?>">
                                                </div>
                                                 

                                                 <div class="col-sm-6">
                                                    <label class="col-form-label">KG (Weight)</label>
                                                     <input type="text" readonly name="phone" class="form-control " value="<?php echo $DBinfo['kg_weight']?>">
                                                </div>

                                            </div>


                                               <div class="form-group row mb-3">
                                            
                                                <div class="col-sm-6">
                                                    <label class="col-form-label">Meter (Length)</label>
                                                    <input type="text" readonly  class="form-control " value="<?php echo $DBinfo['meter_length']?>">
                                                </div>
                                                 

                                                 <div class="col-sm-6">
                                                    <label class="col-form-label">Embossed</label>
                                                     <input type="text" readonly class="form-control " value="<?php echo $DBinfo['embossed']?>">
                                                </div>
                                                
                                            </div>


                                                  <div class="form-group row mb-3">
                                            
                                                <div class="col-sm-6">
                                                    <label class="col-form-label">Container Label</label>
                                                    <input type="text" readonly  class="form-control " value="<?php echo $DBinfo['container']?>">
                                                </div>
                                                 

                                                 <div class="col-sm-6">
                                                    <label class="col-form-label">Series Name</label>
                                                     <input type="text" readonly class="form-control " value="<?php echo $DBinfo['container_series']?>">
                                                </div>
                                                
                                            </div>



                                               <div class="form-group row mb-3">
                                            
                                                <div class="col-sm-6">
                                                    <label class="col-form-label">Design</label>
                                                    <input type="text" readonly class="form-control " value="<?php echo $DBinfo['design']?>">
                                                </div>
                                                 

                                                 <div class="col-sm-6">
                                                    <label class="col-form-label">Created Date</label>
                                                     <input type="text" readonly  class="form-control " value="<?php echo $DBinfo['created_date']?>">
                                                </div>
                                                
                                            </div>
                                            
                                            
                                             <div class="form-group row mb-3">
                                            
                                                <div class="col-sm-6">
                                                    <label class="col-form-label">Added By</label>
                                                    <input type="text" readonly class="form-control " value="<?php echo $DBinfo['inputter']?>">
                                                </div>
                                                 

                                                <!-- <div class="col-sm-6">-->
                                                <!--    <label class="col-form-label"></label>-->
                                                <!--     <input type="text" readonly  class="form-control " value="<?php ?>">-->
                                                <!--</div>-->
                                                
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

