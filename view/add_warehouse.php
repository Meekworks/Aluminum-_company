
                        <div class="page-title-box">
                            <div class="row align-items-center">
                                <div class="col-md-8">
                                    <h6 class="page-title">Add Warehouse</h6>
                                </div>

                                <div class="col-md-4">
                                    <div class="float-end d-none d-md-block">
                                        <div class="dropdown">
                                            <a href="?action=WareStock" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i class="fas fa-eye fa-sm text-white-50"></i> Back</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>



                        <div class="row">
                            <div class="col-10">
                                <div class="card">
                                    <div class="card-body">

                                        <!-- <h4 class="card-title">Add New Product</h4> -->
                                        <p></p><br>
                                        <form method="post">
                                             <div class="form-group row ">
                                                <div class="col-sm-6">
                                                     <label class="col-form-label">Warehouse Name</label>
                                                    <input type="text" class="form-control"
                                                    placeholder="Warehouse Name" name="warehouse">
                                                <input type="text" hidden name="user" value="<?php echo $Admin['username']; ?>">
                                                </div>

                                                 <div class="col-sm-6">
                                                     <label class="col-form-label">Location</label>

                                                      <select name="location" class="form-control" required>

                                                        <option selected disabled>--Select Location--</option>
                                                        <option>Long Wall</option>
                                                        <option>Right Wall</option>
                                                        <option>Left Wall</option>
                                                        <option>Door Right</option>
                                                        <option>Door Left</option>
                                                        <option>Center</option>
                                                      </select>
                                                </div>

                                            </div>

                                             <div class="form-group row ">

                                                <div class="col-sm-6">
                                                    <br>
                                                   <button type="submit" name="addWare" class="btn btn-primary btn-block form-control .hor-grd .btn-grd-* mt-2">Add Warehouse</button>
                                                </div>

                                            </div>
                                        </form>  
                            
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

<script type="text/javascript">
    function myFunction() {
    // Get the checkbox
     var checkBox = document.getElementById("myCheck");
   // Get the output text
    var text = document.getElementById("text");

  // If the checkbox is checked, display the output text
    if (checkBox.checked == true){
       text.style.display = "block";
  } else {
    text.style.display = "none";
 }
} 
</script>


<script>
    var loadFile = function(event) {
        var output = document.getElementById('output');
        output.src = URL.createObjectURL(event.target.files[0]);
        output.onload = function() {
            URL.revokeObjectURL(output.src) // free memory
        }
    };
</script>

<script>
    function fetchProdcodr() {

        if (window.XMLHttpRequest) {
           // code for IE7+, Firefox, Chrome, Opera, Safari
            xmlhttp = new XMLHttpRequest();
          } else {
            // code for IE6, IE5
            xmlhttp = new ActiveXObject("Microsoft.XMLHTTP");
        }

    var AcountID =document.getElementById('product_code').value;
    var JsExplode = AcountID;
    var url = "control/ajaxController.php?pr_code="+JsExplode;


    xmlhttp.onreadystatechange = function() {
            if (this.readyState == 4 && this.status == 200) {
        // document.getElementById('basic_salary').innerHTML = this.responseText;

        var result = this.responseText.split("_");
        // alert(result[8]);

        document.getElementById('product_name').value = result[0];
        document.getElementById('brand').value = result[1];    
        document.getElementById('description').value = result[2];
        document.getElementById('color').value = result[3];
        document.getElementById('size').value = result[4];
        document.getElementById('category').value = result[5];
        document.getElementById('itemcode').value = result[8];
        
        document.getElementById('image').src = "view/product_image/" + result[6];
        document.getElementById('product_satuan').value = result[7];
         

            }
        };
        xmlhttp.open("GET",url,true);
        xmlhttp.send();

        CalculateTotalSale();
}
</script>
           