<style type="text/css">
    label{
        color:darkgray;
    }
</style>
    <div class="page-title-box">
        <div class="row align-items-center">
            <div class="col-md-8">
                <h6 class="page-title"> New Stockin</h6>
            </div>

            <div class="col-md-4">
                <div class="float-end d-none d-md-block">
                    <div class="dropdown">
                        <a href="?action=ResetS"  class=" d-sm-inline-block btn btn-primary btn-sm shadow-sm float-right "><i class="fas fa-arrow-circle-left fa-sm text-white-50 "></i> Rest Serial Name</a>
                    </div>
                </div>
            </div>
        </div>
    </div>



                        <div class="row">
                            <div class="col-12">
                                <div class="card">
                                    <div class="card-body">
                                       <!--  <h4 class="card-title">Add New Product</h4>
                                        <p></p><br> -->

                                        <br><br>
                                        
                                        <form method="post">
                                                <div class="form-group row mb-3">

                                                    <div class="col-sm-3">
                                                        <label class="col-form-label">Product Name</label>
                                                        <select class="form-control"  id="product_name" name="product_name" onchange="mesansOFidentifacartion_change();fetchProductdd();">
                                                         <option selected disabled>--Select Product--</option>
                                                        <?php 
                                                          $maineg = new mainClass();
                                                          $maineg->selectProductName('products');
                                                         ?>
                                                        </select>
                                                             
                                                        <input type="text"  name="product_code" id="product_code" >
                                                    </div>
  

                                                    <div class="col-sm-3">
                                                         <label class="col-form-label">Category</label>
                                                         <input type="text" name="category" id="cate" class="form-control">
                                                    </div>

                                                    <div class="col-sm-3">
                                                         <label class="col-form-label">Date</label>
                                                        <input type="date" name="created_date" class="form-control">
                                                    </div>

                                                    <div class="col-sm-3">
                                                      <label class="col-form-label">Container Number</label>
                                                      <input type="text"  name="container_no" class="form-control" >
                                                    </div>
                                                </div>
                                               

                                                <div class="form-group row mb-3">

                                                <div class="col-sm-3">
                                                     <label class="col-form-label">Purhase Price</label>
                                                    <input  type="text" name="price" class="form-control" 
                                                    required>
                                                </div>


                                                <div class="col-sm-3">
                                                     <label class="col-form-label">Selling Price</label>
                                                    <input  type="text" name="selling" class="form-control" required
                                                    >
                                                </div>


                                                 <div id="qty1"  class="col-sm-3">
                                                  <label id="qty2" class="col-form-label">Quantity</label>
                                               
                                                    <input  id="qty3" type="number" name="quantity" class="form-control"
                                                    >
                                                     <input type="text"  name="user" value="<?php echo $Admin['username']; ?>">
                                                </div>

                                                 <div id="packet1"  class="col-sm-3">
                                                    <label id="packet2"  class="col-form-label">Packets</label>
                                                    <input id="packet3"   type="text" name="packet" class="form-control"
                                                    >
                                                </div> 
                                            
                                            </div>


                                            <div class="form-group row mb-3">

                                                <div class="col-sm-3">
                                                 <label class="col-form-label">Warehouse</label>
                                                   <select  class="form-control" name="warehousere" id="warehouse" onchange="fetchlocation()">
                                                            <option>--Select Warehouse--</option>
                                                            <?php 
                                                              $maineg = new mainClass();
                                                              $maineg->selectWarehouse('serial_table');
                                                             ?>
                                                    </select>
                                                </div>


                                                <div class="col-sm-3">
                                                    <label class="col-form-label">Location</label>
                                                    <select  class="form-control" name="location">
                                                        <option>--Select Location--</option>
                                                        <option>Long Wall</option>
                                                        <option>Right Wall</option>
                                                        <option>Left Wall</option>
                                                        <option>Door Right</option>
                                                        <option>Door Left</option>
                                                        <option>Center</option>
                                                    </select>
                                                </div>


                                                <div  id="label1" class="col-sm-3">
                                                <label  id="label2" class="col-form-label">Container Label</label>
                                                   <select  class="form-control"  name="container" id="label" onchange="fetchseriesname()">
                                                            <option disabled selected>--Select Container Label--</option>
                                                    </select>
                                                </div>


                                                <div  id="s_name1" class="col-sm-3">
                                                 <label  id="s_name2" class="col-form-label">Serial Name</label>
                                                    <select  class="form-control" name="serial_name" id="s_name">
                                                        <option>none</option>
                                                    </select>
                                                </div>
                                         
                                            </div>



                                            <div class="form-group row mb-3">
                                                <div id="kg_weight1"  class="col-sm-3">
                                                    <label id="kg_weight2"  class="col-form-label">KG(Weight)</label>
                                                    <input id="kg_weight3"    type="text" name="kg_weight" class="form-control"
                                                   >
                                                </div>

                                                <div id="meter_length1"  class="col-sm-3">
                                                    <label id="meter_length2"  class="col-form-label">Meter (Length)</label>
                                                    <input id="meter_length3"   type="text" name="meter_length" class="form-control"
                                                    >
                                                </div>

                                                 <div id="embossed1"  class="col-sm-3">
                                                    <label id="embossed2"  class="col-form-label">Embossed</label>
                                                     <select id="embossed3"   class="form-control" name="embossed">
                                                        <option>None</option>
                                                        <option>New Embossed</option>
                                                        <option>Old Embossed</option>
                                                        <option>Plain Embossed</option>
                                                </select>
                                                </div>

                                                 <div id="design1"  class="col-sm-3">
                                                    <label id="design2"  class="col-form-label">Design</label>
                                                    <select id="design3"   class="form-control" name="design" >
                                                        <option>None</option>
                                                        <option>None</option>
                                                        <option>Shingle</option>
                                                        <option>Bond</option>
                                                        <option>Classic</option>
                                                        <option>Wood</option>
                                                        <option>Roman</option>
                                                        <option>Milano</option>
                                                    </select>
                                                </div>

                                            </div>


                                          <div class="form-group row mb-3">

                                             <div id="guage1"  class="col-sm-4">
                                                <label id="guage2"  class="col-form-label">Guage</label>
                                                <input  type="text"  name="stock_level" value="1" class="form-control">
                                                 <select  id="guage3" class="form-control" name="guage" >
                                                    <option>None</option>
                                                    <option>0.15</option>
                                                    <option>0.16</option>
                                                    <option>0.17</option>
                                                    <option>0.18</option>
                                                    <option>0.19</option>
                                                    <option>0.20</option>
                                                    <option>0.21</option>
                                                    <option>0.22</option>
                                                    <option>0.23</option>
                                                    <option>0.24</option>
                                                    <option>0.25</option>
                                                    <option>0.26</option>
                                                    <option>0.27</option>
                                                    <option>0.28</option>
                                                    <option>0.29</option>
                                                    <option>0.30</option>
                                                    <option>0.31</option>
                                                    <option>0.32</option>
                                                    <option>0.33</option>
                                                    <option>0.34</option>
                                                    <option>0.35</option>
                                                    <option>0.36</option>
                                                    <option>0.37</option>
                                                    <option>0.38</option>
                                                    <option>0.39</option>
                                                    <option>0.40</option>
                                                    <option>0.41</option>
                                                    <option>0.42</option>
                                                    <option>0.43</option>
                                                    <option>0.44</option>
                                                    <option>0.45</option>
                                                    <option>0.46</option>
                                                    <option>0.47</option>
                                                    <option>0.48</option>
                                                    <option>0.49</option>
                                                    <option>0.50</option>
                                                    <option>0.51</option>
                                                    <option>0.52</option>
                                                    <option>0.53</option>
                                                    <option>0.54</option>
                                                    <option>0.55</option>
                                            </select>
                                            </div>


                                            <div  id="color1" class="col-sm-4">
                                                <label  id="color2" class="col-form-label">Color</label>
                                                 <select  id="color3" class="form-control" name="color" >
                                                    <option>None</option>
                                                    <option>Black</option>
                                                    <option>Red</option>
                                                    <option>Green</option>
                                                    <option>Blue</option>
                                                    <option>Brown</option>
                                                    <option>Black with white patches</option>
                                                    <option>Coffee Brown with black patches</option>
                                                    <option>Coffee Brown with white patches</option>
                                                    <option>Red with black patches</option>
                                                    <option>Red with white patches</option>
                                                    <option>T.Black</option>
                                                    <option>Grey Biege</option>
                                                    <option>Ivory Biege</option>
                                                    <option>Buff Biege</option>
                                                    <option>Stucco</option>
                                                    <option>Deep Blue</option>
                                                    <option>Light Blue</option>
                                                    <option>T.C Red</option>
                                                    <option>Post Office Red</option>
                                                    <option>Nut Brown</option>
                                                    <option>Bush green</option>
                                                    <option>Pale Green</option>
                                            </select>
                                            </div>



                                        <div class="col-sm-4">
                                         <label class="col-form-label">Supplier Name</label>
                                           <select class="form-control" name="supplier" id="supplier" onchange="fetchSupplier();">
                                                <option>--Select Supplier--</option>
                                                <?php 
                                                  $maineg = new mainClass();
                                                  $maineg->selectVendor('supplier_table');
                                                 ?>
                                            </select>
                                            <input type="text"  name="supplier_id"  id="supplier_id">    
                                        </div>

                                        </div>

                                        <div class="form-group row mb-3">
                                            <div class="col-sm-6">
                                               <br>
                                               <input type="" name="inputter" value="<?php if(isset($_SESSION['Admin'])) {echo $Admin['username'];}?>">
                                               <button type="submit" name="newPurch" class="btn btn-primary btn-block form-control mt-2">
                                                      Add Stock 
                                                </button>
                                            </div>
                                        </div>

                                      </form>
                                        



                                        </div>
                                      
                                    </div><!-- end cardbody -->
                                </div><!-- end card -->
                            </div> <!-- end col -->
                        </div> <!-- end row -->
                    </div> <!-- container-fluid -->

                        </div>  
                    </div>
                </div>

                </div>
            </div>
        </div> <!-- end col -->
    </div> <!-- end row -->

  <script>
    // function mesansOFidentifacartion_change() {
    //     var means = document.getElementById('product_name').value;

    //     if (means == "Aluminium Coils") {
    //         document.getElementById('kg_weight1').hidden = false;
    //         document.getElementById('kg_weight2').hidden = false;
    //         document.getElementById('kg_weight3').hidden = false;
    //         document.getElementById('meter_length1').hidden = false;
    //         document.getElementById('meter_length2').hidden = false;
    //         document.getElementById('meter_length3').hidden = false;
    //         document.getElementById('embossed1').hidden = false;
    //         document.getElementById('embossed2').hidden = false;
    //         document.getElementById('embossed3').hidden = false;
    //         document.getElementById('design1').hidden = true;
    //         document.getElementById('design2').hidden = true;
    //         document.getElementById('design3').hidden = true;
    //         document.getElementById('guage1').hidden = false;
    //         document.getElementById('guage2').hidden = false;
    //         document.getElementById('guage3').hidden = false;
    //         document.getElementById('color1').hidden = false;
    //         document.getElementById('color2').hidden = false;
    //         document.getElementById('color3').hidden = false;
    //         document.getElementById('packet1').hidden = true;
    //         document.getElementById('packet2').hidden = true;
    //         document.getElementById('packet3').hidden = true;
    //          document.getElementById('s_name').hidden = false;
    //         document.getElementById('s_name1').hidden = false;
    //         document.getElementById('s_name2').hidden = false;
    //         document.getElementById('label').hidden = false;
    //         document.getElementById('label1').hidden = false;
    //         document.getElementById('label2').hidden = false;
    //         document.getElementById('qty1').hidden = true;
    //         document.getElementById('qty2').hidden = true;
    //         document.getElementById('qty3').hidden = true;
    //     } else if (means == "PPGI Coils") {
    //          document.getElementById('kg_weight1').hidden = false;
    //         document.getElementById('kg_weight2').hidden = false;
    //         document.getElementById('kg_weight3').hidden = false;
    //         document.getElementById('meter_length1').hidden = false;
    //         document.getElementById('meter_length2').hidden = false;
    //         document.getElementById('meter_length3').hidden = false;
    //         document.getElementById('embossed1').hidden = false;
    //         document.getElementById('embossed2').hidden = false;
    //         document.getElementById('embossed3').hidden = false;
    //         document.getElementById('design1').hidden = true;
    //         document.getElementById('design2').hidden = true;
    //         document.getElementById('design3').hidden = true;
    //         document.getElementById('guage1').hidden = false;
    //         document.getElementById('guage2').hidden = false;
    //         document.getElementById('guage3').hidden = false;
    //         document.getElementById('color1').hidden = false;
    //         document.getElementById('color2').hidden = false;
    //         document.getElementById('color3').hidden = false;
    //         document.getElementById('packet1').hidden = true;
    //        document.getElementById('packet2').hidden = true;
    //         document.getElementById('packet3').hidden = true;
    //          document.getElementById('s_name').hidden = false;
    //         document.getElementById('s_name1').hidden = false;
    //         document.getElementById('s_name2').hidden = false;
    //         document.getElementById('label').hidden = false;
    //         document.getElementById('label1').hidden = false;
    //         document.getElementById('label2').hidden = false;
    //         document.getElementById('qty1').hidden = true;
    //         document.getElementById('qty2').hidden = true;
    //         document.getElementById('qty3').hidden = true;

    //     }else if (means == "Industrial 5") {
    //          document.getElementById('kg_weight1').hidden = false;
    //         document.getElementById('kg_weight2').hidden = false;
    //         document.getElementById('kg_weight3').hidden = false;
    //         document.getElementById('meter_length1').hidden = false;
    //         document.getElementById('meter_length2').hidden = false;
    //         document.getElementById('meter_length3').hidden = false;
    //         document.getElementById('embossed1').hidden = false;
    //         document.getElementById('embossed2').hidden = false;
    //         document.getElementById('embossed3').hidden = false;
    //         document.getElementById('design1').hidden = true;
    //         document.getElementById('design2').hidden = true;
    //         document.getElementById('design3').hidden = true;
    //         document.getElementById('guage1').hidden = false;
    //         document.getElementById('guage2').hidden = false;
    //         document.getElementById('guage3').hidden = false;
    //         document.getElementById('color1').hidden = false;
    //         document.getElementById('color2').hidden = false;
    //         document.getElementById('color3').hidden = false;
    //         document.getElementById('packet1').hidden = true;
    //         document.getElementById('packet2').hidden = true;
    //         document.getElementById('packet3').hidden = true;
    //          document.getElementById('s_name').hidden = false;
    //         document.getElementById('s_name1').hidden = false;
    //         document.getElementById('s_name2').hidden = false;
    //         document.getElementById('label').hidden = false;
    //         document.getElementById('label1').hidden = false;
    //         document.getElementById('label2').hidden = false;
    //         document.getElementById('qty1').hidden = true;
    //         document.getElementById('qty2').hidden = true;
    //         document.getElementById('qty3').hidden = true;

    //     }else if (means == "Zinc") {
    //          document.getElementById('kg_weight1').hidden = true;
    //         document.getElementById('kg_weight2').hidden = true;
    //         document.getElementById('kg_weight3').hidden = true;
    //         document.getElementById('meter_length1').hidden = true;
    //         document.getElementById('meter_length2').hidden = true;
    //         document.getElementById('meter_length3').hidden = true;
    //         document.getElementById('embossed1').hidden = false;
    //         document.getElementById('embossed2').hidden = false;
    //         document.getElementById('embossed3').hidden = false;
    //         document.getElementById('design1').hidden = true;
    //         document.getElementById('design2').hidden = true;
    //         document.getElementById('design3').hidden = true;
    //         document.getElementById('guage1').hidden = false;
    //         document.getElementById('guage2').hidden = false;
    //         document.getElementById('guage3').hidden = false;
    //         document.getElementById('color1').hidden = false;
    //         document.getElementById('color2').hidden = false;
    //         document.getElementById('color3').hidden = false;
    //         document.getElementById('packet1').hidden = true;
    //         document.getElementById('packet2').hidden = true;
    //         document.getElementById('packet3').hidden = true;
    //          document.getElementById('s_name').hidden = false;
    //         document.getElementById('s_name1').hidden = false;
    //         document.getElementById('s_name2').hidden = false;
    //         document.getElementById('label').hidden = false;
    //         document.getElementById('label1').hidden = false;
    //         document.getElementById('label2').hidden = false;
    //         document.getElementById('qty1').hidden = false;
    //         document.getElementById('qty2').hidden = false;
    //         document.getElementById('qty3').hidden = false;

    //     }else if (means == "Cameroon Zinc") {
    //          document.getElementById('kg_weight1').hidden = true;
    //         document.getElementById('kg_weight2').hidden = true;
    //         document.getElementById('kg_weight3').hidden = true;
    //         document.getElementById('meter_length1').hidden = true;
    //         document.getElementById('meter_length2').hidden = true;
    //         document.getElementById('meter_length3').hidden = true;
    //         document.getElementById('embossed1').hidden = false;
    //         document.getElementById('embossed2').hidden = false;
    //         document.getElementById('embossed3').hidden = false;
    //         document.getElementById('design1').hidden = true;
    //         document.getElementById('design2').hidden = true;
    //         document.getElementById('design3').hidden = true;
    //         document.getElementById('guage1').hidden = false;
    //         document.getElementById('guage2').hidden = false;
    //         document.getElementById('guage3').hidden = false;
    //         document.getElementById('color1').hidden = false;
    //         document.getElementById('color2').hidden = false;
    //         document.getElementById('color3').hidden = false;
    //         document.getElementById('packet1').hidden = true;
    //         document.getElementById('packet2').hidden = true;
    //         document.getElementById('packet3').hidden = true;
    //          document.getElementById('s_name').hidden = false;
    //         document.getElementById('s_name1').hidden = false;
    //         document.getElementById('s_name2').hidden = false;
    //         document.getElementById('label').hidden = false;
    //         document.getElementById('label1').hidden = false;
    //         document.getElementById('label2').hidden = false;
    //          document.getElementById('qty1').hidden = false;
    //         document.getElementById('qty2').hidden = false;
    //         document.getElementById('qty3').hidden = false;

    //     }else if (means == "Flat Sheet") {
    //          document.getElementById('kg_weight1').hidden = true;
    //         document.getElementById('kg_weight2').hidden = true;
    //         document.getElementById('kg_weight3').hidden = true;
    //         document.getElementById('meter_length1').hidden = true;
    //         document.getElementById('meter_length2').hidden = true;
    //         document.getElementById('meter_length3').hidden = true;
    //         document.getElementById('embossed1').hidden = true;
    //         document.getElementById('embossed2').hidden = true;
    //         document.getElementById('embossed3').hidden = true;
    //         document.getElementById('design1').hidden = true;
    //         document.getElementById('design2').hidden = true;
    //         document.getElementById('design3').hidden = true;
    //         document.getElementById('guage1').hidden = false;
    //         document.getElementById('guage2').hidden = false;
    //         document.getElementById('guage3').hidden = false;
    //         document.getElementById('color1').hidden = false;
    //         document.getElementById('color2').hidden = false;
    //         document.getElementById('color3').hidden = false;
    //         document.getElementById('packet1').hidden = true;
    //         document.getElementById('packet2').hidden = true;
    //         document.getElementById('packet3').hidden = true;
    //          document.getElementById('s_name').hidden = false;
    //         document.getElementById('s_name1').hidden = false;
    //         document.getElementById('s_name2').hidden = false;
    //         document.getElementById('label').hidden = false;
    //         document.getElementById('label1').hidden = false;
    //         document.getElementById('label2').hidden = false;
    //          document.getElementById('qty1').hidden = false;
    //         document.getElementById('qty2').hidden = false;
    //         document.getElementById('qty3').hidden = false;

    //     }else if (means == "Stone Coated Roof Tiles") {
    //          document.getElementById('kg_weight1').hidden = true;
    //         document.getElementById('kg_weight2').hidden = true;
    //         document.getElementById('kg_weight3').hidden = true;
    //         document.getElementById('meter_length1').hidden = true;
    //         document.getElementById('meter_length2').hidden = true;
    //         document.getElementById('meter_length3').hidden = true;
    //         document.getElementById('embossed1').hidden = true;
    //         document.getElementById('embossed2').hidden = true;
    //         document.getElementById('embossed3').hidden = true;
    //         document.getElementById('design1').hidden = false;
    //         document.getElementById('design2').hidden = false;
    //         document.getElementById('design3').hidden = false;
    //         document.getElementById('guage1').hidden = false;
    //         document.getElementById('guage2').hidden = false;
    //         document.getElementById('guage3').hidden = false;
    //         document.getElementById('color1').hidden = false;
    //         document.getElementById('color2').hidden = false;
    //         document.getElementById('color3').hidden = false;
    //         document.getElementById('packet1').hidden = true;
    //         document.getElementById('packet2').hidden = true;
    //         document.getElementById('packet3').hidden = true;
    //          document.getElementById('s_name').hidden = false;
    //         document.getElementById('s_name1').hidden = false;
    //         document.getElementById('s_name2').hidden = false;
    //         document.getElementById('label').hidden = false;
    //         document.getElementById('label1').hidden = false;
    //         document.getElementById('label2').hidden = false;
    //          document.getElementById('qty1').hidden = false;
    //         document.getElementById('qty2').hidden = false;
    //         document.getElementById('qty3').hidden = false;

    //     }else if (means == "Sealent Gum") {
    //         document.getElementById('kg_weight1').hidden = true;
    //         document.getElementById('kg_weight2').hidden = true;
    //         document.getElementById('kg_weight3').hidden = true;
    //         document.getElementById('meter_length1').hidden = true;
    //         document.getElementById('meter_length2').hidden = true;
    //         document.getElementById('meter_length3').hidden = true;
    //         document.getElementById('embossed1').hidden = true;
    //         document.getElementById('embossed2').hidden = true;
    //         document.getElementById('embossed3').hidden = true;
    //         document.getElementById('design1').hidden = true;
    //         document.getElementById('design2').hidden = true;
    //         document.getElementById('design3').hidden = true;
    //         document.getElementById('guage1').hidden = true;
    //         document.getElementById('guage2').hidden = true;
    //         document.getElementById('guage3').hidden = true;
    //         document.getElementById('color1').hidden = true;
    //         document.getElementById('color2').hidden = true;
    //         document.getElementById('color3').hidden = true;
    //         document.getElementById('packet1').hidden = false;
    //         document.getElementById('packet2').hidden = false;
    //         document.getElementById('packet3').hidden = false;
    //         document.getElementById('s_name').hidden = true;
    //         document.getElementById('s_name1').hidden = true;
    //         document.getElementById('s_name2').hidden = true;
    //         document.getElementById('label').hidden = true;
    //         document.getElementById('label1').hidden = true;
    //         document.getElementById('label2').hidden = true;
    //          document.getElementById('qty1').hidden = true;
    //         document.getElementById('qty2').hidden = true;
    //         document.getElementById('qty3').hidden = true;
    //     }else if (means == "Twisted Nails aluminum") {
    //         document.getElementById('kg_weight1').hidden = true;
    //         document.getElementById('kg_weight2').hidden = true;
    //         document.getElementById('kg_weight3').hidden = true;
    //         document.getElementById('meter_length1').hidden = true;
    //         document.getElementById('meter_length2').hidden = true;
    //         document.getElementById('meter_length3').hidden = true;
    //         document.getElementById('embossed1').hidden = true;
    //         document.getElementById('embossed2').hidden = true;
    //         document.getElementById('embossed3').hidden = true;
    //         document.getElementById('design1').hidden = true;
    //         document.getElementById('design2').hidden = true;
    //         document.getElementById('design3').hidden = true;
    //         document.getElementById('guage1').hidden = true;
    //         document.getElementById('guage2').hidden = true;
    //         document.getElementById('guage3').hidden = true;
    //         document.getElementById('color1').hidden = true;
    //         document.getElementById('color2').hidden = true;
    //         document.getElementById('color3').hidden = true;
    //         document.getElementById('packet1').hidden = false;
    //         document.getElementById('packet2').hidden = false;
    //         document.getElementById('packet3').hidden = false;
    //         document.getElementById('s_name').hidden = true;
    //         document.getElementById('s_name1').hidden = true;
    //         document.getElementById('s_name2').hidden = true;
    //         document.getElementById('label').hidden = true;
    //         document.getElementById('label1').hidden = true;
    //         document.getElementById('label2').hidden = true;
    //          document.getElementById('qty1').hidden = true;
    //         document.getElementById('qty2').hidden = true;
    //         document.getElementById('qty3').hidden = true;

    //     }else if (means == "Treated Nails Stone Coated") {
    //         document.getElementById('kg_weight1').hidden = true;
    //         document.getElementById('kg_weight2').hidden = true;
    //         document.getElementById('kg_weight3').hidden = true;
    //         document.getElementById('meter_length1').hidden = true;
    //         document.getElementById('meter_length2').hidden = true;
    //         document.getElementById('meter_length3').hidden = true;
    //         document.getElementById('embossed1').hidden = true;
    //         document.getElementById('embossed2').hidden = true;
    //         document.getElementById('embossed3').hidden = true;
    //         document.getElementById('design1').hidden = true;
    //         document.getElementById('design2').hidden = true;
    //         document.getElementById('design3').hidden = true;
    //         document.getElementById('guage1').hidden = true;
    //         document.getElementById('guage2').hidden = true;
    //         document.getElementById('guage3').hidden = true;
    //         document.getElementById('color1').hidden = true;
    //         document.getElementById('color2').hidden = true;
    //         document.getElementById('color3').hidden = true;
    //         document.getElementById('packet1').hidden = false;
    //         document.getElementById('packet2').hidden = false;
    //         document.getElementById('packet3').hidden = false;
    //         document.getElementById('s_name').hidden = true;
    //         document.getElementById('s_name1').hidden = true;
    //         document.getElementById('s_name2').hidden = true;
    //         document.getElementById('label').hidden = true;
    //         document.getElementById('label1').hidden = true;
    //         document.getElementById('label2').hidden = true;
    //          document.getElementById('qty1').hidden = true;
    //         document.getElementById('qty2').hidden = true;
    //         document.getElementById('qty3').hidden = true;
    //     }else {
    //         document.getElementById('kg_weight1').hidden = true;
    //         document.getElementById('kg_weight2').hidden = true;
    //         document.getElementById('kg_weight3').hidden = true;
    //         document.getElementById('meter_length1').hidden = true;
    //         document.getElementById('meter_length2').hidden = true;
    //         document.getElementById('meter_length3').hidden = true;
    //         document.getElementById('embossed1').hidden = true;
    //         document.getElementById('embossed2').hidden = true;
    //         document.getElementById('embossed3').hidden = true;
    //         document.getElementById('design1').hidden = true;
    //         document.getElementById('design2').hidden = true;
    //         document.getElementById('design3').hidden = true;
    //         document.getElementById('guage1').hidden = true;
    //         document.getElementById('guage2').hidden = true;
    //         document.getElementById('guage3').hidden = true;
    //         document.getElementById('color1').hidden = true;
    //         document.getElementById('color2').hidden = true;
    //         document.getElementById('color3').hidden = true;
    //         document.getElementById('packet1').hidden = true;
    //         document.getElementById('packet2').hidden = true;
    //         document.getElementById('packet3').hidden = true;
    //         document.getElementById('s_name').hidden = true;
    //         document.getElementById('s_name1').hidden = true;
    //         document.getElementById('s_name2').hidden = true;
    //         document.getElementById('label').hidden = true;
    //         document.getElementById('label1').hidden = true;
    //         document.getElementById('label2').hidden = true;
    //          document.getElementById('qty1').hidden = true;
    //         document.getElementById('qty2').hidden = true;
    //         document.getElementById('qty3').hidden = true;
    //     }

    // }



function fetchProductdd() {

        if (window.XMLHttpRequest) {
          
            xmlhttp = new XMLHttpRequest();
          } else {
           
            xmlhttp = new ActiveXObject("Microsoft.XMLHTTP");
        }

    var AcountID =document.getElementById('product_name').value;
    var JsExplode = AcountID;
    var url = "Control/ajaxController.php?product_name="+JsExplode;

    xmlhttp.onreadystatechange = function() {
            if (this.readyState == 4 && this.status == 200) {


        // document.getElementById('product_code').value = this.responseText; 

        var result = this.responseText.split("-");
        document.getElementById('product_code').value = result[0];
        document.getElementById('cate').value = result[1];
        // document.getElementById('stock_view').value = result[1];


            }
        };
        xmlhttp.open("GET",url,true);
        xmlhttp.send();

        CalculateTotalSale();
}
   


function fetchSupplier() {

        if (window.XMLHttpRequest) {
           
            xmlhttp = new XMLHttpRequest();
          } else {
           
            xmlhttp = new ActiveXObject("Microsoft.XMLHTTP");
        }

    var AcountID =document.getElementById('supplier').value;
    var JsExplode = AcountID;
    var url = "Control/ajaxController.php?supplier="+JsExplode;
    xmlhttp.onreadystatechange = function() {
            if (this.readyState == 4 && this.status == 200) {
        document.getElementById('supplier_id').value = this.responseText;    
            }
        };
        xmlhttp.open("GET",url,true);
        xmlhttp.send();

        CalculateTotalSale();
}  



function fetchlocation() {
    document.getElementById('label').innerHTML = "";
 
        if (window.XMLHttpRequest) {
           
            xmlhttp = new XMLHttpRequest();
          } else {
            
            xmlhttp = new ActiveXObject("Microsoft.XMLHTTP");
        }

    var AcountID =document.getElementById('warehouse').value;
    var JsExplode = AcountID;
    var url = "Control/ajaxController.php?warehouse="+JsExplode;
    xmlhttp.onreadystatechange = function() {
            if (this.readyState == 4 && this.status == 200) {

        document.getElementById('label').innerHTML = this.responseText;   
         
            }
        };
        xmlhttp.open("GET",url,true);
        xmlhttp.send();

        CalculateTotalSale();
} 




function fetchseriesname() {
     document.getElementById('s_name').innerHTML = "";

        if (window.XMLHttpRequest) {
           
            xmlhttp = new XMLHttpRequest();
          } else {
            
            xmlhttp = new ActiveXObject("Microsoft.XMLHTTP");
        }

    var warehouse = document.getElementById("warehouse").value;
    var label =document.getElementById('label').value;

    var JsExplode = warehouse+"_"+label;
    var url = "Control/ajaxController.php?label="+JsExplode;
    xmlhttp.onreadystatechange = function() {
            if (this.readyState == 4 && this.status == 200) {

        document.getElementById('s_name').innerHTML = this.responseText;
        
            }
        };
        xmlhttp.open("GET",url,true);
        xmlhttp.send();

        CalculateTotalSale();
} 




</script>



